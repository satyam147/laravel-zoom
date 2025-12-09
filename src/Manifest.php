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

    public function validate($id,$manifest = null)
    {
        $this->apiDataField = null;
        $this->setEndPoint('post', 'marketplace/apps/manifest/validate');
        return $this->newQuery()->post(['app_id' => $id,'manifest' => $manifest]);
    }

    public function put($id, $manifest)
    {
        $this->setEndPoint('find',str_replace('{market_place_app_id}', $id, $this->endPoint));
        return $this->newQuery()->put(['manifest' => $manifest]);
    }
}
