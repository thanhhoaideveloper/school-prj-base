<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;
    public function __construct(ArticleService $articleService){
        $this->articleService = $articleService;
    }
    public function index(){
        $viewModel = [];
        $viewModel['articles'] = $this->articleService->all();
        return view('admin.pages.article.index', $viewModel);
    }

    public function create(){
        return view('admin.pages.article.create');
    }
}
