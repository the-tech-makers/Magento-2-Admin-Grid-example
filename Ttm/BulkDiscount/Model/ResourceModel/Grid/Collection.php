<?php

/**
 * Discount Manager Grid Collection.
 *
 * @category  Ttm
 * @package   Ttm_BulkDiscount
 * @author    Ttm
 * @copyright Copyright (c) 2021-2022 The Tech Makers (https://www.thetechmakers.com)
 */
namespace Ttm\BulkDiscount\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Ttm\BulkDiscount\Model\Grid',
            'Ttm\BulkDiscount\Model\ResourceModel\Grid'
        );
    }
}
