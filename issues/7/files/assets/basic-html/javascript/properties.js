
    properties = {
    "isShare":"True",
    "isToc":"False",
    "isCopy":"False",
    "isThumbnail":"True",
    "isDownload":"True"
    }

    properties.isShare = (properties.isShare == "True");
    properties.isToc = (properties.isToc == "True");
    properties.isCopy = (properties.isCopy == "True");
    properties.isThumbnail = (properties.isThumbnail == "True");
    properties.isDownload = (properties.isDownload == "True");
    

    LANG = 'en';
    LOCALS_FOLDER = 'locals';
    ASSETS_FOLDER = '../';
    DOWNLOAD_FOLDER = 'common/downloads';
    PAGES_CONTENT_FOLDER='../common/pages-content';
    TITLE = "May_2014_digital_book";
    COVER_SRC = "../flash/pages/page0001_s.jpg";
    SPREAD_SRC = "../flash/spread.html";
    FULL_SRC = "../../../index.html";
    LINK = "_blank";
    RTL = ("False" == "True");
    CID = [];
	
	PublicationTypeName = 'digital magazine';
	PublicationTypeUrl = 'http://flippingbook.com/online-digital-magazine';

    shopProperties = {
    id: '',
    name: '',
    usePublicationCart: ('false' == "true"),
    hideZeroDecimals: ('false' == "true"),
    currency: {
    code: 'USD',
        name: 'US Dollar',
        symbol: '$',
        thousandsDelimiter: ' ',
        decimalSeparator: '.',
        placeSymbolAfterPrice: ("False" == "True"),
        accuracy: '2'
    },
    demoURL: 'http://flippingbook.com/help/publisher-2/docs/quick-start/ecommerce-integration/?src=demo',
    providers: {
    
        'PayPal':{
           
            'email': ''
        
                ,
            
            'method': 'POST'
        
                ,
            
            'sandbox': 'False'
        
        }

        }
    };

	properties.isECommerce = !(shopProperties.id == '');

    cartProperties = {
    publicationID :'792cb7cee39fa7fccae2a4f2db68f975',
    scale:'',
    hasPriceTag :'True',
	hasProductNameOnTag :'True',
    onClickAction:'Window',

    circleColor:'#259C2B',
    circleRadius: 16,
    circleOrientation:'bottomright',
    basketColor: "#fff",
    basketEmptyImg:"./style/cart.png",
    basketEmptyFull:"./style/cart_down.png",
    priceTagColorAlpha:'0.8',
    priceTagColor:'255, 255, 255',
    priceTagFontColor:'#337F37'

    };

    

	if ( typeof CURRENT_PAGE === 'undefined'){
		var waitBasicJS = function(){
			if(typeof TRANSITION_TIME !== 'undefined'){
				var script = document.createElement('script');
				var head = document.getElementsByTagName("head")[0];
				var script = document.createElement('script');
				script.type = 'text/javascript';
				script.src = './javascript/init.js';
				head.appendChild(script);

				waitInitJS();
			}else{
				setTimeout(waitBasicJS, 100);
			}
		};

		var waitInitJS = function(){
			if(typeof quantityElem !== 'undefined'){

			}else{
				setTimeout(waitInitJS, 100);
			}
		};
    

		if(properties.isECommerce){

			var head = document.getElementsByTagName("head")[0];
			var link = document.createElement('link');
			link.type = "text/css";
			link.rel  = "stylesheet";
			link.href = "style/cart.css";
			head.appendChild(link);

			var waitProductJS = function(){
				if(typeof productsBD !== 'undefined'){
					var script = document.createElement('script');
					var head = document.getElementsByTagName("head")[0];
					var script = document.createElement('script');
					script.type = 'text/javascript';
					script.src = ASSETS_FOLDER +'common/ecommerce/cart.js';
					head.appendChild(script);

					waitCartJS();
				}else{
					setTimeout(waitProductJS, 100);
				}
			};

			var waitCartJS = function(){
				if(typeof Cart !== 'undefined'){
					var script = document.createElement('script');
					var head = document.getElementsByTagName("head")[0];
					var script = document.createElement('script');
					script.type = 'text/javascript';
					script.src = './javascript/ecommerce.js';
					head.appendChild(script);

					waitEcommerceJS();
				}else{
					setTimeout(waitCartJS, 100);
				}
			};

			var waitEcommerceJS = function(){
				if(typeof quantityElem !== 'undefined'){
					var script = document.createElement('script');
					var head = document.getElementsByTagName("head")[0];
					var script = document.createElement('script');
					script.type = 'text/javascript';
					script.src = './javascript/basic.js';
					head.appendChild(script);

					waitBasicJS();
				}else{
					setTimeout(waitEcommerceJS, 100);
				}
			};


			var script = document.createElement('script');
			var head = document.getElementsByTagName("head")[0];
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = ASSETS_FOLDER +'common/ecommerce/products.js';
			head.appendChild(script);

			waitProductJS();

		}else{
		  var script = document.createElement('script');
		  var head = document.getElementsByTagName("head")[0];
		  var script = document.createElement('script');
		  script.type = 'text/javascript';
		  script.src = './javascript/basic.js';
		  head.appendChild(script);

		  waitBasicJS();
		}
	}
