<?php

namespace EbayStore;


/**
 * Class ShoppingFilter for eBay store
 *
 * @package EbayStore
 */
class ShoppingFilter extends Filter
{
    /**
     * @var int
     */
    protected $category;

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     *
     * @return ShoppingFilter
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
}
