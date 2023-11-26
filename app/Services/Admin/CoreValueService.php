<?php

namespace App\Services\Admin;

use App\Models\CoreValue;
use App\Services\BaseService;

class CoreValueService extends BaseService{

    protected $model;

    public function __construct(CoreValue $coreValue){
        $this->model = $coreValue;
    }

}