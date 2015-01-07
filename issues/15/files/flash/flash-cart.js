var cart = new Cart();

function getFlashMovie() 
{
	if (window.document[flashContainerName])
    {
        return window.document[flashContainerName];
    }
	var isIE = navigator.appName.indexOf("Microsoft") != -1;
	var obj = (isIE) ? window[flashContainerName] : document.getElementById(flashContainerName);
	return obj;
}
function isOpera()
{
	var isOperaT = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
	return isOperaT;
}
function handlerWrapper(func,res)
{
	if(isOpera())
		var interval = setInterval( function(){func(res); clearInterval(interval);} , 500);
	else
		func(res);
}
function onChange(res) 
{
	getFlashMovie().onChange(res);
}
cart.on("change",onChange);

function getPublicationID()
{
	return cart.publicationID;
}

function getShopID()
{
	return cart.shopID;
}

function getShopInfoHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().getShopInfo(data)
		},res);
}
function getShopInfoErrorHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().getShopInfoError(data);
		},res);
}

function getItemsHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().getItems(data)
		},res);
}

function getItemsErrorHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().getItemsError(data)
		},res);
}
function getItems(items)
{
	cart.getItems(getItemsHandler, getItemsErrorHandler,items);
}

function addItem(itemID, quantity, options)
{
	cart.addItem(itemID, quantity, options);
}

function getCart()
{
	return cart.getCart();
}
function changeQuantity(cartItemID,quantity,publicationId)
{
	return cart.changeQuantity(cartItemID,quantity,publicationId);
}
function getItemQuantity(itemID, publicationID)
{
	return cart.getItemQuantity(itemID, publicationID);
}
function delItem(cartItemID)
{
	return cart.delItem(cartItemID);
}

function checkout(settings)
{
	return cart.checkout(settings,checkoutHandler,checkoutErrorHandler)
}
function checkoutHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().onCheckoutResult(data)
		},res);
}

function checkoutErrorHandler(res)
{
	handlerWrapper(function (data) {
		getFlashMovie().onCheckoutError(data);
		},res);
}

function checkoutStatusHandler(res)
{
	handlerWrapper( function (data) {
			getFlashMovie().onCheckoutStatus(data);
			},res);
}
function getCheckoutStatus(publicationID)
{
	return cart.getCheckoutStatus(checkoutStatusHandler,publicationID);
}
function clear(cartItemID)
{
	cart.clear(cartItemID);
}