<?php

namespace EbayStore;

use \DateTime;
use \DateTimeZone;
use \Exception;
use \stdClass;

use \Ebay\Common\Field;
use \Ebay\Common\Request;
use \Ebay\Service\Base;
use \Ebay\Service\Finding;
use \Ebay\Service\Shopping;
use \Ebay\Service\Trading;

/**
 * Class Manager
 *
 * Manage requests to eBay for items and categories
 *
 * @package EbayStore
 */
class Manager
{
    /**
     * Finding API version
     */
    const FINDING_CALL_VERSION = '1.13.0';

    /**
     * Finding API site ID (US = EBAY-US) http://developer.ebay.com/Devzone/finding/CallRef/Enums/GlobalIdList.html
     */
    const FINDING_SITE_ID = 'EBAY-US';

    /**
     * Finding API function name for finding items by store name
     */
    const FINDING_FIND_ITEMS_IN_EBAY_STORES = 'findItemsIneBayStores';

    /**
     * Shopping API version
     */
    const SHOPPING_CALL_VERSION = 865;

    /**
     * Shopping API site ID (US = 0) http://developer.ebay.com/Devzone/finding/CallRef/Enums/GlobalIdList.html
     */
    const SHOPPING_SITE_ID = 0;

    /**
     * Shopping API function name for finding items
     */
    const SHOPPING_GET_MULTIPLE_ITEMS = 'GetMultipleItems';

    /**
     * Trading API version
     */
    const TRADING_CALL_VERSION = 899;

    /**
     * Trading API site ID (US = 0) http://developer.ebay.com/Devzone/finding/CallRef/Enums/GlobalIdList.html
     */
    const TRADING_SITE_ID = 0;

    /**
     * Trading API function name for getting store info with categories
     */
    const TRADING_GET_STORE = 'GetStore';

    /**
     * Trading API function name for getting list of items
     */
    const TRADING_GET_SELLER_LIST = 'GetSellerList';

    /**
     * Max days to scan for items in past
     */
    const MAX_DAYS_TO_PAST = 2560;

    /**
     * Max days eBay allows to have in period
     */
    const MAX_DAYS_EBAY_ALLOW_FOR_PERIOD = 120;

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var string
     */
    protected $storeName;

    /**
     * @var \Ebay\Service\Finding
     */
    protected $findingAPI;

    /**
     * @var \Ebay\Service\Shopping
     */
    protected $shoppingAPI;

    /**
     * @var \Ebay\Service\Trading
     */
    protected $tradingAPI;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * @var int
     */
    protected $totalPages;

    /**
     * @var int
     */
    protected $totalEntries;

    /**
     * Constructor
     *
     * @param Credentials $credentials
     * @param string|null     $storeName
     */
    public function __construct(Credentials $credentials, $storeName = null)
    {
        # Set eBay access data before any request
        $this->setCredentials($credentials);
        if (isset($storeName)) {
            $this->setStoreName($storeName);
        }

        $this->setFindingAPI(new Finding());
        $this->setShoppingAPI(new Shopping());
        $this->setTradingAPI(new Trading());
    }

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param string $store
     *
     * @return Manager
     */
    public function setStoreName($store)
    {
        $this->storeName = $store;
        return $this;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param Credentials $credentials
     *
     * @return Manager
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @param Base|\Ebay\Service\Finding $findingAPI
     *
     * @return Manager
     */
    public function setFindingAPI(Base $findingAPI)
    {
        $this->setUpService($findingAPI);
        $findingAPI->setCallVersion(self::FINDING_CALL_VERSION);
        $findingAPI->setSiteId(self::FINDING_SITE_ID);
        $this->findingAPI = $findingAPI;
        return $this;
    }

    /**
     * @param Base|\Ebay\Service\Shopping $shoppingAPI
     *
     * @return Manager
     */
    public function setShoppingAPI(Base $shoppingAPI)
    {
        $this->setUpService($shoppingAPI);
        $shoppingAPI->setCallVersion(self::SHOPPING_CALL_VERSION);
        $shoppingAPI->setSiteId(self::SHOPPING_SITE_ID);
        $this->shoppingAPI = $shoppingAPI;
        return $this;
    }

    /**
     * @param Base|\Ebay\Service\Trading $tradingAPI
     *
     * @return Manager
     */
    public function setTradingAPI(Base $tradingAPI)
    {
        $this->setUpService($tradingAPI);
        $tradingAPI->setCallVersion(self::TRADING_CALL_VERSION);
        $tradingAPI->setSiteId(self::TRADING_SITE_ID);
        $tradingAPI->setUserToken(EBAY_TOKEN);
        $this->tradingAPI = $tradingAPI;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     *
     * @return Manager
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalEntries()
    {
        return $this->totalEntries;
    }

    /**
     * @param int $totalEntries
     *
     * @return Manager
     */
    public function setTotalEntries($totalEntries)
    {
        $this->totalEntries = $totalEntries;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     *
     * @return Manager
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Sets up params of the eBay API service
     *
     * @param Base $service
     *
     * @return Manager
     */
    protected function setUpService(Base $service)
    {
        $service->setAppId($this->getCredentials()->getAppId())
                ->setCertId($this->getCredentials()->getCertId())
                ->setDevId($this->getCredentials()->getDeviceId())
                ->setDebugMode($this->getCredentials()->isSandbox());
        return $this;
    }

    /**
     * Get items from the store with sort and search keywords
     *
     * @param FindingFilter $filter
     *
     * @throws Exception*
     * @return mixed
     */
    public function getItems(FindingFilter $filter)
    {
        # Prepare request
        $request = new Request(self::FINDING_FIND_ITEMS_IN_EBAY_STORES);

        $request->addField(new Field('outputSelector', 'PictureURLLarge'));
        $request->addField(new Field('outputSelector', 'PictureURLSuperSize'));
        $request->addField(new Field('outputSelector', 'GalleryInfo'));
        $request->addField(new Field('storeName', EBAY_STORE_NAME));
        $request->addField(new Field('sortOrder', $filter->getSort()));
        $request->addField(new Field('paginationInput',
                                     array(new Field('entriesPerPage', $filter->getMaxPerPage()),
                                           new Field('pageNumber', $filter->getPageNumber()))));
        # Add search keywords if needed
        if (!is_null($filter->getKeyword()) && strlen($filter->getKeyword()) > 0) {
            $request->addField(new Field('keywords', $filter->getKeyword()));
        }

        $object = $this->makeRequest($this->findingAPI, $request);

        $this->setPageNumber(intval($object->paginationOutput->pageNumber));
        $this->setTotalPages(intval($object->paginationOutput->totalPages));
        $this->setTotalEntries(intval($object->paginationOutput->totalEntries));

        return $object->searchResult->item;
    }

    /**
     * Get list of store custom categories
     *
     * @return array
     * @throws Exception
     */
    public function getStoreCategories()
    {
        $request = new Request(self::TRADING_GET_STORE);
        $request->addField(new Field('CategoryStructureOnly', true));
        $request->addField(new Field('UserID', EBAY_USER_NAME));

        $object = $this->makeRequest($this->tradingAPI, $request);

        $categories = (array) $object->Store->CustomCategories;
        $categories = $categories['CustomCategory'];
        usort($categories, function($a, $b) {
            if (intval($a->Order) == intval($b->Order)) {
                return 0;
            }
            return (intval($a->Order) < intval($b->Order)) ? -1 : 1;
        });
        array_push($categories, array_shift($categories));
        # Move categories to array from objects to be able to serialize it and save to session
        $arCategories = array();
        foreach ($categories as $category) {
            $arCategories[] = array(
                'Name'       => strval($category->Name),
                'Order'      => intval($category->Order),
                'CategoryID' => intval($category->CategoryID)
            );
        }

        $sql   = "SELECT `category_id`, COUNT(`id`) AS `cnt` FROM `category_item` GROUP BY `category_id`";
        $items = Mysql::getInstance()->query($sql);
        if (count($items) <= 0) {
            return array();
        }
        $arNotEmpty = array();
        $arCount    = array();
        foreach ($items as $item) {
            $arNotEmpty[] = $item['category_id'];
            $arCount[$item['category_id']] = $item['cnt'];
        }
        foreach ($arCategories as $key => $category) {
            $arCategories[$key]['Count'] = $arCount[$category['CategoryID']];
            if (!in_array($category['CategoryID'], $arNotEmpty)) {
                unset($arCategories[$key]);
            }
        }
        return $arCategories;
    }

    /**
     * @param Base|Trading|Shopping|Finding $service
     * @param Request                       $request
     *
     * @param boolean|null                  $requireCredentials
     *
     * @throws Exception
     * @return mixed
     */
    protected function makeRequest(Base $service, Request $request, $requireCredentials = null)
    {
        try {
            if (!is_null($requireCredentials)) {
                $response = $service->makeRequest($request, $requireCredentials);
            } else {
                $response = $service->makeRequest($request);
            }
        } catch (Exception $e) {
            throw new Exception('eBay API call exception: ' . $e->getMessage());
        }
        $object = $response->getResponseBody('OBJECT');
        if (strval($object->ack) !== 'Success' && strval($object->Ack) !== 'Success') {
            if (isset($object->error->message)) {
                $msg = strval($object->error->message);
            } elseif (isset($object->errorMessage->error->message)) {
                $msg = strval($object->errorMessage->error->message);
            } elseif (isset($object->Errors->LongMessage)) {
                $msg = strval($object->Errors->LongMessage);
            } else {
                $msg = 'Unknown eBay error.';
            }
            throw new Exception($msg);
        }

        return $object;
    }

    /**
     * Get items filtered by custom eBay category
     *
     * @param ShoppingFilter $filter
     *
     * @return array
     * @throws Exception
     */
    public function getItemsByCategory(ShoppingFilter $filter)
    {
        $IDs = $this->getItemIDs($filter->getCategory(),
                                 $filter->getMaxPerPage() * ($filter->getPageNumber() - 1),
                                 $filter->getMaxPerPage());
        if (count($IDs) <= 0) {
            return array();
        }

        $request = new Request(self::SHOPPING_GET_MULTIPLE_ITEMS);
        $request->addField(new Field('IncludeSelector', 'Details'));
        foreach ($IDs as $id) {
            $request->addField(new Field('ItemID', $id));
        }
        $object = $this->makeRequest($this->shoppingAPI, $request);

        $items = array();
        foreach ($object->Item as $ebayItem) {
            $listingInfo                    = new stdClass();
            $listingInfo->buyItNowAvailable = 'true';
            $listingInfo->buyItNowPrice     = floatval($ebayItem->ConvertedCurrentPrice);
            $item                           = new stdClass();
            $item->pictureURLSuperSize      = strval($ebayItem->PictureURL[0]);
            $item->pictureURLLarge          = strval($ebayItem->PictureURL[0]);
            $item->title                    = strval($ebayItem->Title);
            $item->listingInfo              = $listingInfo;
            $items[]                        = $item;
        }

        $this->setPageNumber($filter->getPageNumber());

        return $items;
    }

    /**
     * Downloads categories and put to DB
     *
     * @return bool
     */
    public function downloadCategories()
    {
        $db = Mysql::getInstance();

        # Delete old categories first
        try {
            $db->exec('DELETE FROM `category_item`');
        } catch (Exception $e) {
            echo $e->getMessage() . "\n" . $e->getTraceAsString();
        }

        # Iterate 120 days blocks to get all the items
        $totalItemsDownloaded = 0;
        $totalItemsSaved      = 0;
        for ($i = 0; $i < ceil(self::MAX_DAYS_TO_PAST / self::MAX_DAYS_EBAY_ALLOW_FOR_PERIOD); $i++) {
            $dateEndDays = $i * self::MAX_DAYS_EBAY_ALLOW_FOR_PERIOD;
            $date    = new DateTime(null, new DateTimeZone('PST'));
            $dateEnd = $date->modify("-{$dateEndDays} days");
            $dateBegin = clone $dateEnd;
            $dateBegin->modify('-' . self::MAX_DAYS_EBAY_ALLOW_FOR_PERIOD . ' day');
            $page       = 1;
            $totalPages = 1;
            echo 'Date begin: ' . $dateBegin->format('Y-m-d H:i:s') . "\n";
            echo 'Date end: ' . $dateEnd->format('Y-m-d H:i:s') . "\n";

            # Iterate each page in the block
            while ($page <= $totalPages) {
                $request = new Request(self::TRADING_GET_SELLER_LIST);
                $request->addField(new Field('GranularityLevel', 'Coarse'));
                $request->addField(new Field('StartTimeTo', $dateEnd->format('Y-m-d\TH:i:s\Z')));
                $request->addField(new Field('StartTimeFrom', $dateBegin->format('Y-m-d\TH:i:s\Z')));
                $request->addField(new Field('Sort', 1));
                $request->addField(new Field('UserID', EBAY_USER_NAME));
                $request->addField(new Field('DetailLevel', 'ItemReturnAttributes'));
                $request->addField(new Field('Pagination', array(new Field('PageNumber', $page), new Field('EntriesPerPage', 200))));
                try {
                    $object = $this->makeRequest($this->tradingAPI, $request);
                } catch (Exception $e) {
                    echo $e->getMessage() . "\n" . $e->getTraceAsString() . "\n";
                    $page++;
                    continue;
                }

                $totalPages = intval($object->PaginationResult->TotalNumberOfPages);
                if ($page == 1) {
                    echo 'Total pages: ' . $totalPages . "\n";
                }
                echo 'Current page: ' . $page . "\n";
                if ($totalPages <= 0) {
                    break;
                }
                echo 'Items downloaded: ' . count($object->ItemArray->Item) . "\n";
                $totalItemsDownloaded += count($object->ItemArray->Item);

                $itemsForDb = array();
                foreach ($object->ItemArray->Item as $item) {
                    $itemId         = floatval($item->ItemID);
                    $itemCategoryId = intval($item->Storefront->StoreCategoryID);
                    $itemEndTime    = new DateTime(strval($item->ListingDetails->EndTime), new DateTimeZone('UTC'));
                    if ($itemId > 0 && $itemCategoryId > 0 && $itemEndTime >= new DateTime(null, new DateTimeZone('PST'))) {
                        $itemsForDb[] = "(null, $itemId, $itemCategoryId)";
                    }
                }
                if (count($itemsForDb) <= 0) {
                    echo "No items to save.\n";
                    $page++;
                    continue;
                }
                $sql = 'INSERT INTO `category_item` VALUES '
                       . implode(', ', $itemsForDb)
                       . ' ON DUPLICATE KEY UPDATE `id` = `id`, `item_id` = `item_id`, `category_id` = `category_id`';
                try {
                    $saved = $db->exec($sql);
                    $totalItemsSaved += $saved;
                    echo 'Items saved: ' . $saved . "\n";
                } catch (Exception $e) {
                    echo 'Error saving to DB: '. $e->getMessage() . "\n" . $e->getTraceAsString() . "\n";
                }

                $page++;
            }
        }

        echo 'Total items downloaded: ' . $totalItemsDownloaded . "\n";
        echo 'Total items saved: ' . $totalItemsSaved . "\n";
        return true;
    }

    /**
     * Get item IDs from database filtered by category
     *
     * @param $category
     * @param $start
     * @param $limit
     *
     * @return array
     * @throws Exception
     */
    private function getItemIDs($category, $start, $limit)
    {
        $category = intval($category);
        $start    = intval($start);
        $limit    = intval($limit);

        $db = Mysql::getInstance();

        $IDs = array();
        try {
            $sql   = "
              SELECT SQL_CALC_FOUND_ROWS `item_id` FROM `category_item`
              WHERE `category_id` = " . $category . "
              ORDER BY `item_id` DESC LIMIT {$start},{$limit}";
            $items = $db->query($sql);
            foreach ($items as $item) {
                $IDs[] = $item['item_id'];
            }
            $sql = "SELECT FOUND_ROWS() AS rows";
            $items = $db->query($sql);
            $this->setTotalPages(ceil($items->fetchColumn(0) / $limit));
        } catch (Exception $e) {
            throw new Exception('Error fetching items from DB');
        }

        return $IDs;
    }
}
