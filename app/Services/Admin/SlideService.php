<?php

namespace App\Services\Admin;

use App\Models\Slide;
use App\Services\BaseService;

class SlideService extends BaseService
{
    protected $model;

    public function __construct(Slide $slide)
    {
        $this->model = $slide;
    }
}