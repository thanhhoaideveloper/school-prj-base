<?php

namespace App\Services\Admin;

use App\Models\Address;
use App\Services\BaseService;


class AddressService extends BaseService
{
    protected $model;

    public function __construct(Address $address)
    {
        $this->model = $address;
    }
}