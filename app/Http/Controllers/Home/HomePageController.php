<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use App\Services\Admin\ArticleService;
use App\Services\Admin\BannerService;
use App\Services\Admin\RatingService;
use App\Services\Admin\StudyProgramService;
use Illuminate\Http\Request;

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
    public function getNextArticle(Request $request)
    {   
        $id = $request->all()['articleId'];
        try {
            $article = $this->articleService
                ->where('id', 2)
                ->orderBy('id', 'asc')
                ->first();


            if (!$article) {
                return response()->json(['error' => 'Không có bài viết kế tiếp.']);
            }
            return response()->json(['view' => 'user-interface.home-page.article-view', 'data' => ['article' => $article]]);
        } catch (Exception $e) {
        }
    }
}
