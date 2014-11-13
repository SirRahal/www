
<?php
$resp = simplexml_load_file("http://svcs.ebay.com/services/search/FindingService/v1?
   OPERATION-NAME=findItemsIneBayStores&
   SERVICE-VERSION=1.0.0&
   SECURITY-APPNAME=nuteksal-1a23-4cc6-bee4-61c507ae977f&
   RESPONSE-DATA-FORMAT=JSON&
   REST-PAYLOAD&
   storeName=Laura_Chen's_Small_Store&
   outputSelector=StoreInfo&
   paginationInput.entriesPerPage=1&
   keywords=harry");




// Check to see if the request was successful, else print an error
if ( isset($resp)) {
    print_r($resp);
}?>
<html>

</html>