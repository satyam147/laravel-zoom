<?php

namespace MacsiDigital\Zoom;

use MacsiDigital\Zoom\Support\Model;

class Manifest extends Model
{
    protected $endPoint = 'marketplace/apps/{market_place_app_id}/manifest';

    protected $apiDataField = 'manifest';

    public function find($id)
    {
        $this->setEndPoint('find',str_replace('{market_place_app_id}', $id, $this->endPoint));
        $this->endPoint = str_replace('{market_place_app_id}', $id, $this->endPoint);
        return $this->newQuery()->get("individual");
    }
}
