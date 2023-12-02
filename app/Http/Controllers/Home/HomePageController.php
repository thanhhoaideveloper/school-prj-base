<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use App\Services\Admin\ArticleService;
use App\Services\Admin\BannerService;
use App\Services\Admin\RatingService;
use App\Services\Admin\StudyProgramService;

class HomePageController extends Controller
{
    protected $bannerService;
    protected $articleService;
    protected $coreValue;
    protected $studyProgramService;
    protected $ratingService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }
    
    public function index()
    {
        $viewModel = [];
        $viewModel["article"] = $this->articleService->first();
        return view("user-interface.home-page.index", $viewModel);
    }
}
