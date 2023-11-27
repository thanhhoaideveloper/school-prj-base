<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleRequest;
use App\Services\Admin\ArticleService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(ArticleRequest $request){
        try{
            DB::beginTransaction();
            $data = $request->validated();
            //check thumbnail
            if($request->file('thumbnail')){
                $data['thumbnail'] = storeImage(
                                        $request->file('thumbnail'), 
                                        'banners'
                                    );
            }

            if($request->id){
                $this->articleService->update($data, $request->id);
            }else{  
                $this->articleService->save($data);
            }
            DB::commit();
            return redirect()->route('admin.article.index')->with('success',SAVE_SUCCESS);
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
