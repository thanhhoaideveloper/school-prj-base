<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleRequest;
use App\Services\Admin\ArticleService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function update($id){
        $viewModel = [];
        $viewModel['article'] = $this->articleService->find($id);
        if(!$viewModel['article']){
            return redirect()->back()->with('error',NOT_FOUND);
        }

        return view('admin.pages.article.update', $viewModel);
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

            $user = Auth::user();
            if($user){
                $data['create_by'] = $user->full_name;
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

    public function delete($id){
        $article = $this->articleService->find($id);
        if(!$article){
            return redirect()->back()->with('error', NOT_FOUND);
        }

        $this->articleService->delete($id);
        return redirect()->route('admin.article.index')->with('success',DELETE_SUCCESS);
    }
}
