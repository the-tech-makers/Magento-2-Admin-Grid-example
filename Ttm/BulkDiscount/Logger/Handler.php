<?php

namespace Ttm\BulkDiscount\Logger;

/**
 * Discount Manager Logger Handler.
 * @category  Ttm
 * @package   Ttm_BulkDiscount
 * @author    Ttm
 * @copyright Copyright (c) 2021-2022 The Tech Makers (https://www.thetechmakers.com)
 */


class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level.
     *
     * @var int
     */
    public $loggerType = Logger::INFO;

    /**
     * File name.
     *
     * @var string
     */
    public $fileName = '/var/log/bulkdiscount.log';
}
