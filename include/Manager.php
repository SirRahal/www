<?php

namespace EbayShop;

use \Exception;

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
 * @package EbayShop
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
     * Sorting by best match
     */
    const FINDING_SORT_BEST_MATCH = 'BestMatch';

    /**
     * Sorting by current price highest to lowest
     */
    const FINDING_SORT_CURRENT_PRICE_HIGHEST = 'CurrentPriceHighest';

    /**
     * Sorting by price with shipping highest to lowest
     */
    const FINDING_SORT_PRICE_PLUS_SHIPPING_HIGHEST = 'PricePlusShippingHighest';

    /**
     * Sorting by price with shipping lowest to highest
     */
    const FINDING_SORT_PRICE_PLUS_SHIPPING_LOWEST = 'PricePlusShippingLowest';

    /**
     * Sorting by time newest first
     */
    const FINDING_SORT_START_TIME_NEWEST = 'StartTimeNewest';

    /**
     * Max items per page
     */
    const FINDING_DEFAULT_MAX_PER_PAGE = 12;

    /**
     * Default page number
     */
    const FINDING_DEFAULT_PAGE_NUMBER = 1;

    /**
     * Shopping API version
     */
    const SHOPPING_CALL_VERSION = 899;

    /**
     * Shopping API site ID (US = 0) http://developer.ebay.com/Devzone/finding/CallRef/Enums/GlobalIdList.html
     */
    const SHOPPING_SITE_ID = 0;

    /**
     * Trading API version
     */
    const TRADING_CALL_VERSION = 899;

    /**
     * Trading API site ID (US = 0) http://developer.ebay.com/Devzone/finding/CallRef/Enums/GlobalIdList.html
     */
    const TRADING_SITE_ID = 0;

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

    public function getItems($sort = self::FINDING_SORT_BEST_MATCH,
                             $maxPerPage = self::FINDING_DEFAULT_MAX_PER_PAGE,
                             $pageNumber = self::FINDING_DEFAULT_PAGE_NUMBER)
    {
        $request = new Request(self::FINDING_FIND_ITEMS_IN_EBAY_STORES);

        $request->addField(new Field('outputSelector', 'PictureURLLarge'));
        $request->addField(new Field('outputSelector', 'PictureURLSuperSize'));
        $request->addField(new Field('outputSelector', 'GalleryInfo'));
        $request->addField(new Field('storeName', STORE_NAME));
        $request->addField(new Field('sortOrder', $sort));
        $request->addField(new Field('paginationInput', array(new Field('entriesPerPage', $maxPerPage), new Field('pageNumber', $pageNumber))));

        $response = $this->findingAPI->makeRequest($request);
        $object   = $response->getResponseBody('OBJECT');

        if ($object->Ack === 'Failure') {
            throw new Exception($object->errorMessage->message);
        }

        $this->setPageNumber(intval($object->paginationOutput->pageNumber));
        $this->setTotalPages(intval($object->paginationOutput->totalPages));
        $this->setTotalEntries(intval($object->paginationOutput->totalEntries));

        return $object->searchResult->item;
    }
} 