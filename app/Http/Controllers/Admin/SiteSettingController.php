<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SiteRequest;
use App\Services\Admin\SettingService;

class SiteSettingController extends Controller
{
    protected $siteSettingService;
    public function __construct(SettingService $settingService){
        $this->siteSettingService = $settingService;
    }

    public function index(){
        $viewModel = [];
        $viewModel["site"] = $this->siteSettingService->first();
        return view('admin.pages.setting.index', $viewModel);
    }

    public function update(SiteRequest $request){
        try{
            $data = $request->validated();
            $siteSetting = $this->siteSettingService->first();
            //check image logo
            if($request->file('logo')){
                $data['logo'] = storeImage(
                                            $request->file('logo'), 
                                            'sites'
                                        );
            }

            //check image footer logo
            if($request->file('footer_logo')){
                $data['footer_logo'] = storeImage(
                                            $request->file('footer_logo'), 
                                            'sites'
                                        );
            }

            if($siteSetting){
                $this->siteSettingService->update($data, $siteSetting->id);
            }else{
                $this->siteSettingService->save($data);
            }

            flash()->addSuccess(UPDATE_SUCCESS);
            return redirect()->route('admin.site.index');
        }catch(\Exception $e){
            flash()->addError($e->getMessage());
            return back();
        }
    }
}
