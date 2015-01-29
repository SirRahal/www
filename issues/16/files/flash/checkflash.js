(function (window, undefined) {
    String.prototype.format = String.prototype.format || (function () {
        var s = '%';
        var replaceExpr = new RegExp(['(', s, '(.+?)', s, ')'].join(''), 'g');

        return function (replaceObj) {
            return this.replace(replaceExpr, function (subStr, fullExpr, expr) {
                return (expr in replaceObj) ? replaceObj[expr] : fullExpr;
            });
        }
    })();

    var CheckFlash = function (options) {
        options = options || {};

        this.requiredVersion = options.requiredVersion || "11.3.0";
        this.title = options.title || "Adobe Flash Player Update required!";
        this.description = options.description || "This installation will only take a few moments. Using the current version may cause performance problems and publication errors.";
        this.updateUrl = options.updateUrl || "http://get.adobe.com/flashplayer/";
        this.buttonSrc = options.buttonSrc || "files/flash/160x41_Get_Flash_Player.jpg";
        this.mbClass = options.mbClass || "flash-notification";
        this.cookieName = options.cookieName || "flippingbook-flash_version_checked";
        this.parentElem = options.parentElem || document.getElementById("container"); //document.getElementsByTagName("body")[0];

        this.box = null;
        this.boxStyle = options.boxStyle || "margin:3px;padding:12px 24px 12px 12px;overflow:hidden;background:#f9f6c4;border:1px solid #bab893;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;font:11px/14px Arial;position: relative;";
        this.titleStyle = options.titleStyle || "font-weight:bold;padding-top:2px;padding-bottom:4px;";
        this.closeButtonStyle = options.closeButtonStyle || "display:block;width:8px;height:8px;text-decoration:none;font:0/0 a;cursor:pointer;background:url('files/flash/close.png');position:absolute;top:12px;right:12px;left:auto;bottom:auto;";
        this.downloadButtonStyle = options.downloadButtonStyle || "display:block;float:left;text-decoration:none;position:absolute;top:50%;left:12px;margin-top:-20px;";
        this.rightColStyle = options.rightColStyle || "margin-left: 170px;";

        this.tpl = options.tpl || '<a href="javascript:void(0)" style="%closeButtonStyle%"></a>' +
            '<a href="%updateUrl%" style="%downloadButtonStyle%" target="_blank"><img src="%buttonSrc%" alt="" border="0" style="border:0;display:block;" width="160" height="41"/></a>' +
            '<div style="%rightColStyle%"><div style="%titleStyle%">%title%</div><div>%description%</div></div>';

        this.onShow = options.onShow || function (box) { };
        this.onClose = options.onClose || function (box) {
            box.style.display = 'none';
        };
		
		this.needPpWarning = this._needPpWarning();
		
		if (this.needPpWarning) {
			this.title = this.ppTitle || 'This publication cannot be viewed locally with Google Chrome!';
			this.description = this.ppDescription || 'If you want to open this publication, please upload it to a web-server or use an offline version.';
			this.updateUrl = '#';
			this.buttonSrc = 'files/flash/offline.png';
			this.tpl = options.tpl || '<a href="javascript:void(0)" style="%closeButtonStyle%"></a>' +
            '<a href="%updateUrl%" style="%downloadButtonStyle%" target="_blank"><img src="%buttonSrc%" alt="" border="0" style="border:0;display:block;"  height="40"/></a>' +
            '<div style="%rightColStyle%"><div style="%titleStyle%">%title%</div><div >%description%</div></div>';
			this.rightColStyle = options.rightColStyle || "margin-left: 55px;";
		}

        this.init();
    };

    CheckFlash.prototype.init = function () {
        this.requiredVersion = this.requiredVersion.split(".");
        this.userVersion = this.userPlayerVersion() || false;

        if (!this.userVersion || !this.userVersion.length) return;

        this.showMessageBox();
    };
    CheckFlash.prototype.userPlayerVersion = function () {
        var u = navigator.userAgent.toLowerCase(),
            p = navigator.platform.toLowerCase(),
            playerVersion = [0, 0, 0],
            d = null;
        if (typeof navigator.plugins != "undefined" && typeof navigator.plugins["Shockwave Flash"] == "object") {
            d = navigator.plugins["Shockwave Flash"].description;
            if (d && !(typeof navigator.mimeTypes != "undefined" && navigator.mimeTypes["application/x-shockwave-flash"] && !navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin)) {
                d = d.replace(/^.*\s+(\S+\s+\S+$)/, "$1");
                playerVersion[0] = parseInt(d.replace(/^(.*)\..*$/, "$1"), 10);
                playerVersion[1] = parseInt(d.replace(/^.*\.(.*)\s.*$/, "$1"), 10);
                playerVersion[2] = /[a-zA-Z]/.test(d) ? parseInt(d.replace(/^.*[a-zA-Z]+(.*)$/, "$1"), 10) : 0;
            }
        }
        else if (typeof window.ActiveXObject != "undefined") {
            try {
                var a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
                if (a) {
                    d = a.GetVariable("$version");
                    if (d) {
                        d = d.split(" ")[1].split(",");
                        playerVersion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
                    }
                }
            }
            catch (e) { }
        }
        return playerVersion;
    };

    CheckFlash.prototype.createMessageBox = function () {
        var self = this;
        var box = document.createElement("DIV");
        box.setAttribute("id", this.mbClass);
        box.setAttribute("class", this.mbClass);
        box.style.cssText = this.boxStyle;

        box.innerHTML = this.tpl.format({
            title: this.title,
            description: this.description,
            updateUrl: this.updateUrl,
            buttonSrc: this.buttonSrc,
            titleStyle: this.titleStyle,
            closeButtonStyle: this.closeButtonStyle,
            downloadButtonStyle: this.downloadButtonStyle,
            rightColStyle: this.rightColStyle
        });

        box.getElementsByTagName('a')[0].onclick = function () {
            self.onClose(box);
        };

        return box;
    };

    CheckFlash.prototype.showMessageBox = function () {
        if (this.cookie(this.cookieName) || !this.pluginIsOutOfDate() && !this.needPpWarning) return;

        var date = new Date();
        date = new Date(date.setTime(date.getTime() + (1000 * 60 * 60 * 24 * 14))).toGMTString();

        this.cookie(this.cookieName, true, date);

        this.box = this.createMessageBox();
        if (this.parentElem.childNodes.length) {
            this.parentElem.insertBefore(this.box, this.parentElem.childNodes[0]);
        } else {
            this.parentElem.appendChild(this.box);
        }

        this.onShow();
    };

    CheckFlash.prototype.cookie = function (name, value, expires, path, domain, secure) {
        // get
        if (arguments.length == 1 && typeof name == "string") {
            var results = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return results ? decodeURI(results[2]) : null;
        }
        // remove
        if (arguments.length == 2 && typeof name == "string" && value === null) {
            var cookie_date = new Date();
            cookie_date.setTime(cookie_date.getTime() - 1);
            document.cookie = name += "=; expires=" + cookie_date.toGMTString();
            return null;
        }
        // set
        var cookie = name + "=" + encodeURI(value) +
            (expires ? "; expires=" + expires : "") +
            (path ? "; path=" + path : "") +
            (domain ? "; domain=" + domain : "") +
            (secure ? "; secure" : "");
        document.cookie = cookie;

        return cookie;
    };

    CheckFlash.prototype.pluginIsOutOfDate = function () {
         var uv = this.userVersion,
			 rv = this.requiredVersion;

        function compare(a, b) {
            if (a === b) {
                return 0;
            }

            var len = Math.min(a.length, b.length);

            for (var i = 0; i < len; i++) {
                if (parseInt(a[i]) > parseInt(b[i])) {
                    return 1;
                }

                if (parseInt(a[i]) < parseInt(b[i])) {
                    return -1;
                }
            }

            if (a.length > b.length) {
                return 1;
            }

            if (a.length < b.length) {
                return -1;
            }

            return 0;
        }

        return compare(uv, rv) >= 0 ? false : true;
    };
	
	CheckFlash.prototype.isPPAPI = function () {
		var isPPAPI = false;
		var type = 'application/x-shockwave-flash';
		var mimeTypes = navigator.mimeTypes;

		var endsWith = function(str, suffix) {
			return str.indexOf(suffix, str.length - suffix.length) !== -1;
		}

		if (mimeTypes && mimeTypes[type] && mimeTypes[type].enabledPlugin &&
		   (mimeTypes[type].enabledPlugin.filename == "pepflashplayer.dll" ||
			mimeTypes[type].enabledPlugin.filename == "libpepflashplayer.so" ||
			endsWith(mimeTypes[type].enabledPlugin.filename, "Chrome.plugin"))) {
			isPPAPI = true;
		}

		return isPPAPI;
	};
	
	CheckFlash.prototype._needPpWarning = function () {

		var isChrome = navigator.userAgent.indexOf('Chrome') >= 0;
		var isLocal = window.location.protocol=="file:";

		return isChrome && isLocal && this.isPPAPI();
	};

    window["CheckFlash"] = CheckFlash;
})(window);