<?php

namespace MacsiDigital\Zoom;

use MacsiDigital\Zoom\Support\Model;

class EventSubscription extends Model
{
    protected $endPoint="marketplace/app/event_subscription";

    public function get($userId, $accountId, $scope='user')
    {
        return $this->newQuery()->addQuery('user_id',$userId)->addQuery('subscription_scope',$scope)->addQuery('account_id', $accountId)->get();
    }
}
