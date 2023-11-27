<?php
namespace App\Services\Admin;

use App\Models\Article;
use App\Services\BaseService;

class ArticleService extends BaseService{
    protected $model;

    public function __construct(Article $model){
        $this->model = $model;
    }
    
}