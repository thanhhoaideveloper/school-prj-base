<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Admin\ArticleService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
        $viewModel["article"] = $this->articleService->where('type', 1)->orderBy('id', 'desc')->first();
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

    public function getNextArticleById($id)
    {
        $currentId = $id - 1;
        while ($currentId > 0) {

            $article = $this->articleService->find($currentId);
            if ($article != null) {
                return response()->json(['view' => 'user-interface.home-page.article-view', 'data' => ['article' => $article]]);
            }
            $currentId--;

        }
        return response()->json(['error' => 'Không có bài viết kế tiếp.']);
    }

    function fetchDataToSheet(Request $request)
    {
        $url = 'https://script.google.com/macros/s/AKfycbwMqXTLkReNKYylS8JGVy5xUmTONcuOz0d75HRMZht4E-EncXBul7zwA5xBTJ_iymbc6A/exec';

        $client = new Client();

        $response = $client->request('GET', $url, [
            'query' => [
                'Name' => $request->input('Name'),
                'Email' => $request->input('Email'),
                'Phone' => $request->input('Phone'),
                'Age' => $request->input('Age'),
                'Message' => $request->input('Message'),
            ],
        ]);

        // Lấy nội dung của response.
        $content = $response->getBody()->getContents();

        // Xử lý response.
        if ($content['result'] === 'success') {
            return response()->json(['message' => 'Gửi yêu cầu thành công'], 200);
        } else {
            return response()->json(['message' => 'Gửi yêu cầu không thành công'], 400);
        }
    }

    public function aboutUs(){
        return view('user-interface.about-us.index');
    }

    public function articleDetail($id){
        return view('user-interface.article.detail');
    }
}
