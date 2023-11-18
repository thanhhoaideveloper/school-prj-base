<?php

namespace App\Services\Admin;

use App\Models\Banner;
use App\Services\BaseService;

class BannerService extends BaseService
{
    protected $model;

    public function __construct(Banner $banner)
    {
        $this->model = $banner;
    }
}