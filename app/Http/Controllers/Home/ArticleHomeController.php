<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleHomeController extends Controller
{
    public function articleDetailPage($id){
        return view('user-interface.pages.article.article-detail');
    }
}
