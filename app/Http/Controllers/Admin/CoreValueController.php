<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CoreValueRequest;
use App\Services\Admin\CoreValueService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoreValueController extends Controller
{
    private $coreValueService;

    public function __construct(CoreValueService $coreValueService){
        $this->coreValueService = $coreValueService;
    }

    public function index(){
        $viewModel = [];
        $viewModel['coreValue'] = $this->coreValueService->all();
        return view("admin.pages.core.index", $viewModel);
    }

    public function create(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'thumbnail' => [
                    'required',
                    'image',
                    'mimes:png,jpg,jpeg,gif',
                    'mimetypes:image/jpeg,image/png,image/gif'
                ],
                'title' => 'required',
                'description' => 'required'
            ]);

            if(!$validator->passes()){
                return response()->json(['errors' => $validator->errors()]);
            }

            $data = $validator->getData();
            //check thumbnail
            if($request->file('thumbnail')){
                $data['thumbnail'] = storeImage(
                                        $request->file('thumbnail'), 
                                        'core'
                                    );
            }

            $this->coreValueService->save($data);
            return response()->json(['success' => true]);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
