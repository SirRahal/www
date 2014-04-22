//для отладки, в реальной публикации паблишер подставляет все сам
if(typeof DEBUG_MODE != 'undefined' && DEBUG_MODE){
    var shopId = 'df207d27f47ba0c43f78152811efdbb6';
    var publicationId = '82aeb819c674b122a0a6ad26b187ab4a';
}

String.prototype.reverse = function () {
    return this.split("").reverse().join("");
};

/**
 * Если браузер не поддерживает JSON преобразования - эта библиотека создает объект JSON со свойствами stringify и parse
 */
"object"!==typeof JSON&&(JSON={});
(function(){function m(a){return 10>a?"0"+a:a}function r(a){s.lastIndex=0;return s.test(a)?'"'+a.replace(s,function(a){var c=u[a];return"string"===typeof c?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+a+'"'}function p(a,l){var c,d,h,q,g=e,f,b=l[a];b&&"object"===typeof b&&"function"===typeof b.toJSON&&(b=b.toJSON(a));"function"===typeof k&&(b=k.call(l,a,b));switch(typeof b){case "string":return r(b);case "number":return isFinite(b)?String(b):"null";case "boolean":case "null":return String(b);
    case "object":if(!b)return"null";e+=n;f=[];if("[object Array]"===Object.prototype.toString.apply(b)){q=b.length;for(c=0;c<q;c+=1)f[c]=p(c,b)||"null";h=0===f.length?"[]":e?"[\n"+e+f.join(",\n"+e)+"\n"+g+"]":"["+f.join(",")+"]";e=g;return h}if(k&&"object"===typeof k)for(q=k.length,c=0;c<q;c+=1)"string"===typeof k[c]&&(d=k[c],(h=p(d,b))&&f.push(r(d)+(e?": ":":")+h));else for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(h=p(d,b))&&f.push(r(d)+(e?": ":":")+h);h=0===f.length?"{}":e?"{\n"+e+f.join(",\n"+
        e)+"\n"+g+"}":"{"+f.join(",")+"}";e=g;return h}}"function"!==typeof Date.prototype.toJSON&&(Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+m(this.getUTCMonth()+1)+"-"+m(this.getUTCDate())+"T"+m(this.getUTCHours())+":"+m(this.getUTCMinutes())+":"+m(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()});var t=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
    s=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,e,n,u={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},k;"function"!==typeof JSON.stringify&&(JSON.stringify=function(a,l,c){var d;n=e="";if("number"===typeof c)for(d=0;d<c;d+=1)n+=" ";else"string"===typeof c&&(n=c);if((k=l)&&"function"!==typeof l&&("object"!==typeof l||"number"!==typeof l.length))throw Error("JSON.stringify");return p("",{"":a})});
    "function"!==typeof JSON.parse&&(JSON.parse=function(a,e){function c(a,d){var g,f,b=a[d];if(b&&"object"===typeof b)for(g in b)Object.prototype.hasOwnProperty.call(b,g)&&(f=c(b,g),void 0!==f?b[g]=f:delete b[g]);return e.call(a,d,b)}var d;a=String(a);t.lastIndex=0;t.test(a)&&(a=a.replace(t,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(a.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
        "]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return d=eval("("+a+")"),"function"===typeof e?c({"":d},""):d;throw new SyntaxError("JSON.parse");})})();

/**
 * Если браузер не поддерживает  local storage - эта библиотека для него
 *

 */
(function () {
    if (!this.localStorage)
        if (this.globalStorage) try {
            this.localStorageWIN = this.globalStorage
        } catch (e) {} else {
            var a = document.createElement("div");
            a.style.display = "none";
            document.getElementsByTagName("head")[0].appendChild(a);
            if (a.addBehavior) {
                a.addBehavior("#default#userdata");
                var d = this.localStorageWIN = {
                    length: 0,
                    setItem: function (b, d) {
                        a.load("localStorageWIN");
                        b = c(b);
                        a.getAttribute(b) || this.length++;
                        a.setAttribute(b, d);
                        a.save("localStorageWIN")
                    },
                    getItem: function (b) {
                        a.load("localStorageWIN");
                        b = c(b);
                        return a.getAttribute(b)
                    },
                    removeItem: function (b) {
                        a.load("localStorageWIN");
                        b = c(b);
                        a.removeAttribute(b);
                        a.save("localStorageWIN");
                        this.length = 0
                    },
                    clear: function () {
                        a.load("localStorageWIN");
                        for (var b = 0; attr = a.XMLDocument.documentElement.attributes[b++];) a.removeAttribute(attr.name);
                        a.save("localStorageWIN");
                        this.length = 0
                    },
                    key: function (b) {
                        a.load("localStorageWIN");
                        return a.XMLDocument.documentElement.attributes[b]
                    }
                }, c = function (a) {
                    return a.replace(/[^-._0-9A-Za-z\xb7\xc0-\xd6\xd8-\xf6\xf8-\u037d\u37f-\u1fff\u200c-\u200d\u203f\u2040\u2070-\u218f]/g,
                        "-")
                };
                a.load("localStorageWIN");
                d.length = a.XMLDocument.documentElement.attributes.length
            }
        }
})();

/**
 *
 *
 *
 * Объект Cart
 *
 *
 *
 */
(function(){

    function Cart(){
        this.shopID = typeof shopId === 'undefined' ? '' : shopId;
        this.publicationID = publicationId;

        this.cartStore = this._load();

        if(!this.cartStore[this.shopID]){
            this.cartStore[this.shopID] = {};
            this.cartStore[this.shopID][this.publicationID] = {};
        }else if(!this.cartStore[this.shopID][this.publicationID]){
            this.cartStore[this.shopID][this.publicationID] = {};
        }

        this.currentCartStore = this.cartStore[this.shopID][this.publicationID];

        var locationArray = window.location.pathname.split('/');
        this.subpath = locationArray[locationArray.length-4];

        this._cartServiceCheck();
    }

    Cart.prototype = {
        /**
         * Получает информацию о товарах по их идентификаторам.
         * @param resultCallback
         * @param errorCallback
         * @param idItemsArray
         */
        getItems: function(resultCallback, errorCallback, idItemsArray){
            var res = [];

            var getItemFromDB = function(){
                if(!(Object.prototype.toString.call(idItemsArray) === '[object Array]')){

                    if(!productsBD[idItemsArray]){
                        errorCallback.call(errorCallback, {'error':'item id not found'});
                        return false;
                    }

                    productsBD[idItemsArray].id = idItemsArray;
                    res.push(productsBD[idItemsArray]);
                }else{
                    for(var i = 0, l = idItemsArray.length; i < l; i++){
                        if(!!productsBD[idItemsArray[i]]){
                            productsBD[idItemsArray[i]].id = idItemsArray[i];
                            res.push(productsBD[idItemsArray[i]]);
                        }
                    }
                }
                resultCallback.call(resultCallback,res);
            };

            var checkDB = function(){
                if(productsBD !== undefined){
                    getItemFromDB();
                }else{
                    setTimeout(checkDB, 100);
                }
            };

            checkDB();
        },

        hashCode: function(itemID,options){
            var str = itemID + "";
            for (var id in options) {
                str+=id + "" + options[id];
            }
            return str;
        },
        /**
         * Добавляет товар в корзину
         * @param itemID 				идентификатор товара
         * @param quantity				количество добавляемых товаров
         * @param options				опции товаров (необязательно)
         * @returns {number} 			Возвращается уникальный cartItemID. В случае ошибки возвращается -1.
         */
        addItem: function(itemID, quantity, options){
            options = options || {};
            var uniqueID = this.hashCode(itemID,options);

            var alreadyExists = this.currentCartStore[uniqueID] !== undefined;

            this.currentCartStore[uniqueID] = {
                'itemID': itemID,
                'qty': alreadyExists ? (1 * this.currentCartStore[uniqueID].qty + 1 * quantity) : quantity,
                'options': options
            };

            this.currentCartStore[uniqueID][itemID] = true; //для быстрого поиска item по объекту

            this._save();

            this._trigger('change',{
                type: alreadyExists ? 'changeQuantity' : 'addItem',
                target: {cartItemID:uniqueID, publicationID:this.publicationID},
                cart: this.cartStore[this.shopID]
            });

            if(typeof window.GAEnable != "undefined" && window.GAEnable) {
                _trackEvent(this.subpath, "Add To Cart", itemID + ' x ' + quantity);
            }

            return uniqueID;
        },


        /**
         * Изменяет количество товар в корзине
         * @param cartItemID			идентификатор записи в корзине
         * @param quantity				новое количество
         * @returns {*}					Возвращается cartItemID. В случае ошибки возвращается -1.
         */
        changeQuantity: function(cartItemID, quantity){
            if(!this.currentCartStore[cartItemID]){
                return -1;
            }

            var itemID = this.currentCartStore[cartItemID].itemID;
            this.currentCartStore[cartItemID].qty = quantity;
            this._save();

            this._trigger('change',{
                type: 'changeQuantity',
                target: {cartItemID:cartItemID, publicationID:this.publicationID},
                cart: this.cartStore[this.shopID]
            });

            if(typeof window.GAEnable != "undefined" && window.GAEnable) {
                _trackEvent(this.subpath, "Cart Update", 'change qty ' + itemID + ' x ' + quantity);
            }

            return cartItemID;
        },


        /**
         * Удаляет товар из корзины
         * @param cartItemID			идентификатор записи в корзине
         * @returns {*} 				Возвращается удаленный cartItemID. В случае ошибки возвращается -1.
         */
        delItem: function(cartItemID){
            if(!this.currentCartStore[cartItemID]){
                return -1;
            }


            var itemID = this.currentCartStore[cartItemID].itemID;
            if(typeof window.GAEnable != "undefined" && window.GAEnable) {
                _trackEvent(this.subpath, "Cart Update", 'delete ' + itemID);
            }

            delete this.currentCartStore[cartItemID];

            this._save();
            this._trigger('change',{
                type: 'delItem',
                target: {cartItemID:cartItemID},
                cart: this.cartStore[this.shopID]
            });

            return cartItemID;
        },


        /**
         * Проверяет наличие c определенным идентификатором товара в корзине
         * @param itemID				идентификатор товара
         * @param publicationID			(необязательно) publicationID в случае, если необходимо искать товар в корзине определенной публикации
         * @returns {boolean}			True в случае нахождения элемента, false - в обратном.
         */
        hasItem: function(itemID, publicationID){
            if(typeof publicationID != 'undefined'){
                return ({}).hasOwnProperty.call(this.cartStore[this.shopID][publicationID], itemID);
            }

            for(var publId in this.cartStore[this.shopID]){
                if (({}).hasOwnProperty.call(this.cartStore[this.shopID][publId], itemID))
                    return true;
            }
            return false;

        },


        /**
         * Проверяет наличие c определенным идентификатором товара в корзине
         * @param itemID				идентификатор товара
         * @param publicationID			(необязательно) publicationID в случае, если необходимо искать товар в корзине определенной публикации
         * @returns {Array}				Массив, содержащий cartItemID.
         */
        getCartItemsByItemID: function(itemID, publicationID){
            var arrayOfItemsID = [];
            var shopID = this.shopID;
            if(typeof publicationID != 'undefined'){
                for(var i in this.cartStore[shopID][publicationID]){
                    if(({}).hasOwnProperty.call(this.cartStore[shopID][publicationID][i], itemID)){
                        arrayOfItemsID.push(i);
                    }
                }
            }
            else {
                for(publicationID in this.cartStore[this.shopID]){
                    for(var i in this.cartStore[shopID][publicationID]){
                        if(({}).hasOwnProperty.call(this.cartStore[shopID][publicationID][i], itemID)){
                            arrayOfItemsID.push(i);
                        }
                    }
                }
            }
            return arrayOfItemsID;
        },

        /**
         * Количество элементов с определенным идентификатором товара в корзине
         * @param itemID				идентификатор товара
         * @param publicationID			(необязательно) publicationID в случае, если необходимо искать товар в корзине определенной публикации
         * @returns {number}			Количество.
         */
        getItemQuantity: function(itemID, publicationID){
            var quantity = 0;

            if(typeof publicationID != 'undefined'){
                for(var i in this.cartStore[this.shopID][publicationID]){
                    if(({}).hasOwnProperty.call(this.cartStore[this.shopID][publicationID], itemID)){
                        quantity+= 1*this.cartStore[this.shopID][publicationID][i].qty;
                    }
                }
            }
            else{
                for(var publId in this.cartStore[this.shopID]){
                    for(var i in this.cartStore[this.shopID][publId]){
                        if(({}).hasOwnProperty.call(this.cartStore[this.shopID][publId][i], itemID)){
                            quantity+= 1*this.cartStore[this.shopID][publId][i].qty;
                        }
                    }
                }
            }
            return quantity;
        },

        /**
         * Получает информацию о товарах в корзине для конкретной публикации.
         * @param publicationID		(Не обязательно) publicationID в случае, если нужно вернуть корзину для определенной публикации
         * @returns {JSON}			Содержание корзины в формате json.
         */
        getCart: function(publicationID){
            if(typeof publicationID != 'undefined'){
                return [this.cartStore[this.shopID][publicationID]];
            }
            return this.cartStore[this.shopID];
        },


        length: function(publicationID){
            if(publicationID){

                var size = 0, key;
                for (key in this.cartStore[this.shopID][publicationID]){
                    if (this.cartStore[this.shopID][publicationID].hasOwnProperty(key)) size++;
                }
                return size;
            }else{
                var size = 0, key, publicationID;

                for (publicationID in this.cartStore[this.shopID]){
                    if (this.cartStore[this.shopID].hasOwnProperty(publicationID))
                        for (key in this.cartStore[this.shopID][publicationID]){
                            if (this.cartStore[this.shopID][publicationID].hasOwnProperty(key)) size++;
                        }
                }
                return size;
            }
        },


        /**
         * Получает данные для осуществления покупки
         * @param settings		        настройки чекаута
         * @param resultCallback		функция обратного вызова в случае успешной инициализации
         * @param errorCallback			функция обратного вызова в случае ошибки при инициализации
         * @param publicationID			(не поддерживается временно, Не обязательно) publicationID в случае, если нужно сделать checkout только по публикации
         */
        checkout: function(settings, resultCallback, errorCallback, publicationID){
            if(typeof publicationID != 'undefined' && publicationID != this.publicationID)
                throw "publicationID is not supported";

            var that = this;
            settings = this.extend({}, settings);
            //получить инфу о продуктах в корзине
            var arrayOfIDs = [];
            this.each(this, this.cartStore[this.shopID][this.publicationID], function (item) {
                if(this._indexOf(arrayOfIDs,item.itemID) == -1)
                    arrayOfIDs.push(item.itemID);
            });
            var typeof_string			= typeof "",
                isTypeOf				= function (item, type) { return typeof item === type; },
                isString				= function (item) { return isTypeOf(item, typeof_string); };

            this.extend(settings, {
                utils :{
                    checkQuantity: function(q) {
                        // check to make sure quantity is valid
                        if (isString(q)) {
                            q = parseInt(q.replace(settings.currency.thousandsDelimiter, ""), 10);
                        }
                        if (isNaN(q)) {
                            q = 1;
                        }
                        if (q <= 0) {
                            q = 0;
                        }

                        return q;
                    },
                    checkPrice: function(p, keepNegative) {
                        // check to make sure price is valid
                        if (isString(p)) {
                            // trying to remove all chars that aren't numbers or '.'
                            p = parseFloat(p.replace(settings.currency.decimalSeparator, ".").replace(/[^0-9\.\-]+/ig, ""));
                        }
                        if (isNaN(p)) {
                            p = 0;
                        }

                        if (p < 0 && !keepNegative) {
                            p = 0;
                        }

                        return p;
                    }
                },
                productsInfo: {}
            });

            //скопировать настройки конкретного акаутна
            if(settings.type && settings.providers[settings.type]) {
                this.extend(settings, settings.providers[settings.type]);
            }

            this.getItems(function(array) {
                that.each(that, array, function(item) {
                    settings.productsInfo[item.id] =  item;
                });

                that.each(that, that.cartStore[that.shopID][that.publicationID], function(item){
                    var info = settings.productsInfo[item.itemID];
                    var price = settings.utils.checkPrice(info.price);
                    var namedOptions = {};
                    that.each(that, item.options, function(value_id, x, id){
                        var optValueInfo = info.options[id].values[value_id];
                        price += settings.utils.checkPrice(optValueInfo.price, true);
                        namedOptions[info.options[id].name] = optValueInfo.name;
                    });
                    item.checkout = {
                        price : settings.utils.checkPrice(price),
                        quantity : settings.utils.checkQuantity(item.qty),
                        name : info.name,
                        namedOptions : namedOptions
                    };
                });

                that._checkout(settings, resultCallback, errorCallback);
            }, errorCallback, arrayOfIDs);
        },

        _checkout: function(settings, resultCallback, errorCallback){

            function onInitComplete(res){

                if(typeof window.GAEnable != "undefined" && window.GAEnable) {
                    _trackEvent(this.subpath, "Checkout");
                }

                this._trigger('change',{
                    type: 'checkout',
                    target: null,
                    cart: this.cartStore[this.shopID][this.publicationID]
                });

                resultCallback(res);
            }

            if (typeof (this.checkoutMethods[settings.type]) == 'function') {
                var checkoutData = this.checkoutMethods[settings.type].call(this,settings);

                // if the checkout method returns data, try to send the form
                if( checkoutData.data && checkoutData.action && checkoutData.method ){
                    // if no one has any objections, send the checkout form
                    onInitComplete.call(this, checkoutData);
                    this.generateAndSendForm( checkoutData );
                } else if(checkoutData.url) {
                    onInitComplete.call(this, checkoutData);
                    window.location.href = checkoutData.url;
                } else {
                    errorCallback(checkoutData);
                }
            } else {
                errorCallback();
                //("No Valid Checkout Method Specified");
            }

            /*this._trigger('change',{
             type: 'checkout',
             target: null,
             cart: publicationID ? this.cartStore[this.shopID][publicationID] : this.cartStore[this.shopID]
             });

             resultCallback.call(resultCallback, res);*/

            /*console.log('Checkout to Publ ...');
             var res = {
             method:"[ext|email]",
             action:
             {
             link: "http://paypal.com/..",
             target: "popup"
             }
             };
             */
        },

        extend: function (target, opts) {
            var next;

            for (next in opts) {
                if (Object.prototype.hasOwnProperty.call(opts, next)) {
                    target[next] = opts[next];
                }
            }
            return target;
        },

        _indexOf: function(arr, obj, start) {
            for (var i = (start || 0), j = arr.length; i < j; i++) {
                if (arr[i] === obj) { return i; }
            }
            return -1;
        },

        each: function(thisObject, array, callback) {
            var next,
                x = 0,
                result;

            if (typeof callback == 'function') {
                for (next in array) {
                    if (Object.prototype.hasOwnProperty.call(array, next)) {
                        result = callback.call(thisObject, array[next], x, next);
                        if (result === false) {
                            return;
                        }
                        x += 1;
                    }
                }
            }
        },

        generateAndSendForm: function (opts) {
            var form = document.createElement('form');
            form.setAttribute('style', 'display:none');
            form.setAttribute('action', opts.action);
            form.setAttribute('target', '_top');
            form.setAttribute('method', opts.method);

            this.each(this, opts.data, function (val, x, name) {
                var input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', name);
                input.setAttribute('value', val);
                form.appendChild(input);
            });

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        },

        checkoutMethods: {
            PayPal: function (opts) {
                // account email is required
                if (!opts.email) {
                    return {error:"No email provided for PayPal checkout"};
                }

                // build basic form options
                var data = {
                        cmd			: "_cart"
                        , upload		: "1"
                        , currency_code : opts.currency.code
                        , business		: opts.email
                        , rm			: opts.method === "GET" ? "0" : "2"
                        /*, tax_cart		: (simpleCart.tax()*1).toFixed(2)
                         , handling_cart : (simpleCart.shipping()*1).toFixed(2)*/
                        , charset		: "utf-8"
                    },
                    action = opts.sandbox ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr",
                    method = opts.method === "GET" ? "GET" : "POST";


                // check for return and success URLs in the options
                if (opts.success) {
                    data['return'] = opts.success;
                }
                if (opts.cancel) {
                    data.cancel_return = opts.cancel;
                }
                if (opts.notify) {
                    data.notify_url = opts.notify;
                }

                // add all the items to the form data
                var that = this;
                this.each(this, this.cartStore[this.shopID][this.publicationID], function (item,x) {
                    var counter = x+1,
                        item_options = item.checkout.namedOptions,
                        optionCount = 0,
                        send;

                    // basic item data
                    data["item_name_" + counter] = item.checkout.name;
                    data["quantity_" + counter] = item.checkout.quantity;
                    data["amount_" + counter] = (item.checkout.price*1).toFixed(2);
                    data["item_number_" + counter] = /*item.get("item_number") || */counter;


                    // add the options
                    that.each(that, item_options, function (val,k,attr) {
                        // paypal limits us to 10 options
                        if (k < 10) {

                            // check to see if we need to exclude this from checkout
                            send = true;
                            /*simpleCart.each(settings.excludeFromCheckout, function (field_name) {
                             if (field_name === attr) { send = false; }
                             });*/
                            if (send) {
                                optionCount += 1;
                                data["on" + k + "_" + counter] = attr;
                                data["os" + k + "_" + counter] = val;
                            }

                        }
                    });

                    // options count
                    data["option_index_"+ x] = Math.min(10, optionCount);
                });


                // return the data for the checkout form
                return {
                    action	: action
                    , method	: method
                    , data		: data
                };

            },
            AmazonPayments: function (opts) {
                // required options
                if (!opts.merchant_signature) {
                    return {error:"No merchant signature provided for Amazon Payments"};
                }
                if (!opts.merchant_id) {
                    return {error:"No merchant id provided for Amazon Payments"};
                }
                if (!opts.aws_access_key_id) {
                    return {error:"No AWS access key id provided for Amazon Payments"};
                }

                // build basic form options
                var data = {
                        aws_access_key_id:	opts.aws_access_key_id
                        , merchant_signature:	opts.merchant_signature
                        , currency_code:		opts.currency.code
                        //, tax_rate:				simpleCart.taxRate()
                        , weight_unit:			opts.weight_unit || 'lb'
                    },
                    action = "https://payments" + (opts.sandbox ? "-sandbox" : "") + ".amazon.com/checkout/" + opts.merchant_id,
                    method = opts.method === "GET" ? "GET" : "POST";


                // add items to data
                var that = this;
                this.each(this, this.cartStore[this.shopID][this.publicationID], function (item,x) {
                    var counter = x+1,
                        options_list = [];
                    data['item_title_' + counter]			= item.checkout.name;
                    data['item_quantity_' + counter]		= item.checkout.quantity;
                    data['item_price_' + counter]			= item.checkout.price;
                    data['item_sku_ ' + counter]			= opts.productsInfo[item.itemID].sku || item.itemID;
                    data['item_merchant_id_' + counter]	= opts.merchant_id;
                    /*if (item.get('weight')) {
                     data['item_weight_' + counter]		= item.get('weight');
                     }*/
                    if (opts.shippingQuantityRate) {
                        data['shipping_method_price_per_unit_rate_' + counter] = opts.shippingQuantityRate;
                    }


                    // create array of extra options
                    that.each(that, item.checkout.namedOptions, function (val,x,attr) {
                        // check to see if we need to exclude this from checkout
                        var send = true;
                        /*simpleCart.each(settings.excludeFromCheckout, function (field_name) {
                         if (field_name === attr) { send = false; }
                         });*/
                        if (send && attr !== 'weight' && attr !== 'tax') {
                            options_list.push(attr + ": " + val);
                        }
                    });

                    // add the options to the description
                    data['item_description_' + counter] = options_list.join(", ");
                });

                // return the data for the checkout form
                return {
                    action	: action
                    , method	: method
                    , data		: data
                };
            },
            mail: function (opts) {
                // required options
                if (!opts.mailTo) {
                    return {error:"No mailTo provided"};
                }

                var totalPrice = 0;
                /*, currency_code:		opts.currency.code
                 //, tax_rate:				simpleCart.taxRate()
                 , weight_unit:			opts.weight_unit || 'lb'*/

                // add items to data
                var that = this;
                var body = '';
                this.each(this, this.cartStore[this.shopID][this.publicationID], function (item,x) {
                    var counter = x+1,
                        options_list = '';

                    body = body  + '\n' + counter.toString() + ". " + item.checkout.name;
                    body = body + ' (' + "N" + (opts.productsInfo[item.itemID].sku || item.itemID);
                    body = body + ', ' + item.checkout.quantity.toString() + " x " + that.formatPrice(opts, item.checkout.price) + " = ";
                    var itemsPrice = item.checkout.price * item.checkout.quantity;
                    body = body + that.formatPrice(opts, itemsPrice) + ");";
                    totalPrice = totalPrice + itemsPrice;
                    /*opts.productsInfo[item.itemID].sku || item.itemID;*/
                    // create array of extra options
                    that.each(that, item.checkout.namedOptions, function (val,x,attr) {
                        // check to see if we need to exclude this from checkout
                        var send = true;
                        if (send && attr !== 'weight' && attr !== 'tax') {
                            options_list = options_list + '\n\t\t' + attr + ": " + val
                        }
                    });

                    if(options_list!='') {
                        body = body  + '\n\toptions:' + options_list;
                    }
                });

                body = body + '\n' + this.formatPrice(opts, totalPrice);
                body = body + '\n\n- type in your contacts here -';

                // return the data for the checkout form
                return {
                    url : "mailto:" + opts.mailTo + "?subject=" + encodeURIComponent(opts.subject || "ordered items") + "&body=" + encodeURIComponent(body)
                };
            }
        },

        formatPrice: function(settings, price){ //!!!ЕСЛИ МЕНЯЕШЬ ЭТУ Ф_Ю ПОМЕНЯЙ ОНУЮ И В strUtils.js мобильной версии!!!
            var publicationData = {shopInfo:settings};

            price += '';
            //if(!publicationData.shopInfo){return false};
            var price = parseFloat(price.replace(publicationData.shopInfo.currency.decimalSeparator, ".").replace(/[^0-9\.]+/ig, "")).toFixed(publicationData.shopInfo.currency.accuracy);


            var numParts = price.split('.');
            var dece = numParts[1];
            var inte = numParts[0];

            inte = this.chunk(inte.reverse(), 3).join(publicationData.shopInfo.currency.thousandsDelimiter).reverse();

            price = inte + publicationData.shopInfo.currency.decimalSeparator + dece;

            price = publicationData.shopInfo.currency.placeSymbolBeforePrice ? publicationData.shopInfo.currency.symbol + '' + price : price + '' + publicationData.shopInfo.currency.symbol;

            return price;

        },

        chunk: function (str, n) { //!!!ЕСЛИ МЕНЯЕШЬ ЭТУ Ф_Ю ПОМЕНЯЙ ОНУЮ И В strUtils моб. версии.js!!!
            if (typeof n==='undefined') {
                n=2;
            }
            var result = str.match(new RegExp('.{1,' + n + '}','g'));
            return result || [];
        },

        /**
         * Очистить корзину относящуюся к данному shopID. В случае если задан publicationID очистить только относящееся к текущей публикации
         * @param publicationID			(Не обязательно) publicationID в случае если не нужно очищать всю корзину магазина
         * @returns {boolean}			Статус результата очистка
         */
        clear: function(publicationID){
            if(typeof window.GAEnable != "undefined" && window.GAEnable) {
                _trackEvent(this.subpath, "Cart Update", 'clear');
            }

            if(typeof publicationID != 'undefined'){
                this.currentCartStore = {};
                this._save();
                this._trigger('change',{
                    type: 'clear',
                    target: {publicationID: publicationID || null},
                    cart: this.cartStore[this.shopID]
                });
                return true;
            }

            this.cartStore[this.shopID] = {};
            this._save();

            this._trigger('change',{
                type: 'clear',
                target: {publicationID: publicationID || null},
                cart: this.cartStore[this.shopID]
            });
            return true;
        },


        /**
         * Сохранить текущее состояние корзины в localStorage
         * @returns {boolean}			Статус результата сохранения
         * @private
         */
        _save: function(){
            this.cartStore[this.shopID][this.publicationID] = this.currentCartStore;

            if(typeof window.localStorage === 'undefined'){
                window.localStorageWIN.setItem('fbCart', JSON.stringify(this.cartStore));
            }else{
                window.localStorage.setItem('fbCart', JSON.stringify(this.cartStore));
            }

            if(typeof window.localStorage === 'undefined'){
                window.localStorageWIN.setItem('fbCartService', JSON.stringify(this.cartService));
            }else{
                window.localStorage.setItem('fbCartService', JSON.stringify(this.cartService));
            }
            return true;
        },


        /**
         * Извлечь текущее состояние корзины из localStorage
         * @returns {JSON} 				Объект корзины
         * @private
         */
        _load: function(){
            if(typeof window.localStorage === 'undefined'){
                if(typeof window.localStorageWIN.getItem('fbCartService') !== 'undefined' && window.localStorageWIN.getItem('fbCartService') !== null){
                    this._cartServiceInit(JSON.parse(window.localStorageWIN.getItem('fbCartService')));
                }else{
                    this._cartServiceInit();
                }

                if(typeof window.localStorageWIN.getItem('fbCart') !== 'undefined' && window.localStorageWIN.getItem('fbCart') !== null){
                    return JSON.parse(window.localStorageWIN.getItem('fbCart'));
                }else{
                    return {};
                }
            }else{
                if(typeof window.localStorage.getItem('fbCartService') !== 'undefined' && window.localStorage.getItem('fbCartService') !== null){
                    this._cartServiceInit(JSON.parse(window.localStorage.getItem('fbCartService')));
                }else{
                    this._cartServiceInit();
                }

                if(typeof window.localStorage.getItem('fbCart') !== 'undefined' && window.localStorage.getItem('fbCart') !== null){
                    return JSON.parse(window.localStorage.getItem('fbCart'));
                }else{
                    return {};
                }
            }
        },


        /**
         * Custom Events не трогать, переделать!
         *
         * Методы:
         * on(name, callback, context)
         * 		name  		имя ивента
         * 		callback	функция обработчик
         * 		context 	контекст с которым должен быть вызван обработчик
         *
         * off(name, callback, context)
         * 		name  		имя ивента
         * 		callback	функция обработчик
         * 		context  	контекст с которым должен быть вызван обработчик
         *
         * _trigger(name, params)
         * 		name  		имя ивента
         * 		params 		параметры которые должены быть переданы в обработчик
         */
        on:function(a,b,c){this._events||(this._events={});(this._events[a]||(this._events[a]=[])).push({callback:b,context:c,ctx:c||this});return this},off:function(a,b,c){var g,f,j,k,d,e,h,l;if(!this._events||!eventsApi(this,"off",a,[b,c]))return this;if(!a&&!b&&!c)return this._events={},this;k=a?[a]:_.keys(this._events);d=0;for(e=k.length;d<e;d++)if(a=k[d],j=this._events[a]){this._events[a]=g=[];if(b||c){h=0;for(l=j.length;h<l;h++)f=j[h],(b&&b!==f.callback&&b!==f.callback._callback||c&&c!==
            f.context)&&g.push(f)}g.length||delete this._events[a]}return this},_trigger:function(a){var b=function(a,b){var d,e=-1,c=a.length,f=b[0],g=b[1],m=b[2];switch(b.length){case 0:for(;++e<c;)(d=a[e]).callback.call(d.ctx);break;case 1:for(;++e<c;)(d=a[e]).callback.call(d.ctx,f);break;case 2:for(;++e<c;)(d=a[e]).callback.call(d.ctx,f,g);break;case 3:for(;++e<c;)(d=a[e]).callback.call(d.ctx,f,g,m);break;default:for(;++e<c;)(d=a[e]).callback.apply(d.ctx,b)}};if(!this._events)return this;var c=[].slice.call(arguments,
            1),g=this._events[a],f=this._events.all;g&&b(g,c);f&&b(f,arguments);return this},


        _cartServiceInit: function(object){
            this.cartService = object || {};
            var currentTime = new Date().getTime();

            if(!this.cartService[this.shopID]){
                this.cartService[this.shopID] = {};
                this.cartService[this.shopID][this.publicationID] = {
                    'lastUpdated': currentTime,
                    'checkoutProgress': false
                };
            }else if(!this.cartService[this.shopID][this.publicationID]){
                this.cartService[this.shopID][this.publicationID] = {
                    'lastUpdated': currentTime,
                    'checkoutProgress': false
                };
            }

            this.on('change', this._cartServiceChange, this);
        },

        _cartServiceCheck: function(){
            var twoWeeks = 1296000000,
                currentTime = new Date().getTime();

            if(this.cartService[this.shopID][this.publicationID].lastUpdated < (currentTime - twoWeeks)){
                this.cartStore[this.shopID][this.publicationID] = {};
                this.cartService[this.shopID][this.publicationID].lastUpdated = currentTime;
            }else if(this.cartService[this.shopID][this.publicationID].checkoutProgress){
                this._trigger('checkoutCleanRequest', {'target': {publicationID: this.publicationID, shopID:this.shopID}});
            };

            this._save();
        },

        _cartServiceChange: function(param){

            var publicationID = param.target !== null ? typeof param.target.publicationID !== 'undefined' ?  param.target.publicationID : this.publicationID : this.publicationID ;

            this.cartService[this.shopID][publicationID].lastUpdated = new Date().getTime();

            if(param.type === 'checkout'){
                this.cartService[this.shopID][publicationID].checkoutProgress = true;
            }else{
                this.cartService[this.shopID][publicationID].checkoutProgress = false;
            }

            this._save();
        },

        getCheckoutStatus: function(callback, publicationID){
            publicationID = publicationID || this.publicationID;

            if(this.cartService[this.shopID][publicationID].checkoutProgress){
                this.cartService[this.shopID][publicationID].checkoutProgress = false;
                this._save();
                callback.call(callback);
            }
        }
    };

    window.Cart = Cart;

})();
