<?php

namespace App\Services\Admin;

use App\Models\Rating;
use App\Services\BaseService;


class RatingService extends BaseService
{
    protected $model;

    public function __construct(Rating $rating)
    {
        $this->model = $rating;
    }
}