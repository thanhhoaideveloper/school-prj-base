<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SlideRequest;
use App\Services\Admin\SlideService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    protected $slideService;

    public function __construct(SlideService $slideService){
        $this->slideService = $slideService;
    }

    public function index(Request $request){
        return view('admin.pages.slide.index');
    }

    public function create(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'thumbnail' => [
                    'required',
                    'image',
                    'mimes:png,jpg,jpeg',
                    'mimetypes:image/jpeg,image/png'
                ],
                'title' => 'required',
                'link' => 'required',
                'content' => ''
            ]);
            
            if(!$validator->passes()){
                return response()->json(['errors' => $validator->errors()]);
            }

            $data = $validator->getData();
            //check image logo
            if($request->file('thumbnail')){
                $data['thumbnail'] = storeImage(
                                            $request->file('thumbnail'), 
                                            'slides'
                                        );
            }
            $this->slideService->save($data);

            flash()->addSuccess(SAVE_SUCCESS);
            return response()->json(['success' => true]);
        }catch(Exception $e){
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }
}
