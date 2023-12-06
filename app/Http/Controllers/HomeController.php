<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Admin\ArticleService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        $viewModel = [];
        // Lấy ra sự kiện mới nhất.
        $viewModel["event"] = $this->articleService->where('type', 1)->orderBy('id', 'desc')->first();
        // Lấy ra top 3 bài viết mới nhất
        $viewModel["articles"] = $this->articleService->getModel()::where('type', '<>', 1)->orderBy('id', 'desc')->limit(3);
        return view("index", $viewModel);
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

    public function about()
    {
        return view('page.about.index');
    }

    public function articleDetail($slug)
    {
        $viewModel = [];
        // Lấy ra bài viết theo slug.
        $viewModel["article"] = $this->articleService->where('slug', $slug)->first();
        return view('page.article.detail', $viewModel);
    }

    public function article()
    {
        $viewModel = [];
        // Lấy ra bài viết theo slug.
        $viewModel["article"] = $this->articleService->first();
        return view("page.article.index", $viewModel);
    }

    public function chichBong()
    {
        return view("page.program.chichbong");
    }

    public function seNau()
    {
        return view("page.program.senau");
    }

    public function boCau()
    {
        return view("page.program.bocau");
    }
}
