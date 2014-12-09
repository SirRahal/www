<?php

namespace EbayStore;


/**
 * Class FindingFilter for eBay store
 *
 * @package EbayStore
 */
class FindingFilter extends Filter
{
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
     * @var string
     */
    protected $sort = self::FINDING_SORT_BEST_MATCH;

    /**
     * @var int
     */
    protected $maxPerPage = self::FINDING_DEFAULT_MAX_PER_PAGE;

    /**
     * @var int
     */
    protected $pageNumber = self::FINDING_DEFAULT_PAGE_NUMBER;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     *
     * @return FindingFilter
     */
    public function setKeyword($keyword)
    {
        $this->keyword = trim($keyword);
        return $this;
    }
}
