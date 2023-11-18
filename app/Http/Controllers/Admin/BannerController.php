<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Http\Requests\Admin\SlideRequest;
use App\Services\Admin\BannerService;
use App\Services\Admin\SlideService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerService $bannerService){
        $this->bannerService = $bannerService;
    }

    public function index(){
        $viewModel = [];
        $viewModel['banner'] = $this->bannerService->first();
        return view('admin.pages.banner.index', $viewModel);
    }

    public function save(BannerRequest $request){
        try{
            $banner = $this->bannerService->first();
            $data = $request->validated();
            //check image favicon
            if($request->file('thumbnail')){
                $data['thumbnail'] = storeImage(
                                        $request->file('thumbnail'), 
                                        'banners'
                                    );
            }
            if($banner){
                $this->bannerService->update($data, $banner->id);
            }else{
                $this->bannerService->save($data);
            }
            flash()->addSuccess(SAVE_SUCCESS);
            return redirect()->back();
        }catch(Exception $e){
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }
}
