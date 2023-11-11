<?php

namespace App\Services\Admin;

use App\Models\SiteSetting;
use App\Services\BaseService;

class SettingService extends BaseService
{
    protected $model;

    public function __construct(SiteSetting $siteSetting)
    {
        $this->model = $siteSetting;
    }
}