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

    public function __construct(
        BannerService $bannerService,
        ArticleService $articleService,
        CoreValue $coreValue,
        StudyProgramService $studyProgramService,
        RatingService $ratingService
        ){
        $this->bannerService = $bannerService;
        $this->articleService = $articleService;
        $this->coreValue = $coreValue;
        $this->studyProgramService = $studyProgramService;
        $this->ratingService = $ratingService;
    }
    public function index(){
        $viewModel = [];
        $viewModel["banner"] = $this->bannerService->getMainBanner();
        $viewModel["article"] = $this->articleService->first();
        $viewModel["coreValue"] = $this->coreValue->all();
        $viewModel["studyProgram"] = $this->studyProgramService->all();
        $viewModel["ratting"] = $this->ratingService->all();
        return view("user-interface.home-page.index", $viewModel);
    }
}
