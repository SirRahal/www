<?php

namespace EbayStore;


/**
 * Class base Filter for eBay store
 *
 * @package EbayStore
 */
abstract class Filter
{
    /**
     * @var string
     */
    protected $sort;

    /**
     * @var int
     */
    protected $maxPerPage;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * @return int
     */
    public function getMaxPerPage()
    {
        return $this->maxPerPage;
    }

    /**
     * @param int $maxPerPage
     *
     * @return FindingFilter
     */
    public function setMaxPerPage($maxPerPage)
    {
        $this->maxPerPage = intval($maxPerPage);
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
     * @return FindingFilter
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = intval($pageNumber);
        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     *
     * @return FindingFilter
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }
}
