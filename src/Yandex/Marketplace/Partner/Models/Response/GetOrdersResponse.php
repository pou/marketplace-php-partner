<?php

namespace Yandex\Marketplace\Partner\Models\Response;

use Yandex\Marketplace\Partner\Models\Common\Pager;
use Yandex\Marketplace\Partner\Models\Orders;
use Yandex\Common\Model;

class GetOrdersResponse extends Model
{
    protected $orders;
    protected $pager;

    protected $mappingClasses = [
        'orders' =>  Orders::class,
        'pager' => Pager::class,
    ];

    /**
     * @return Orders
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @return Pager
     */
    public function getPager()
    {
        return $this->pager;
    }
}
