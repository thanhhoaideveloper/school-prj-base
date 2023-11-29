<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CoreValueRequest;
use App\Services\Admin\CoreValueService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoreValueController extends Controller
{
    private $coreValueService;

    public function __construct(CoreValueService $coreValueService)
    {
        $this->coreValueService = $coreValueService;
    }

    public function index()
    {
        $viewModel = [];
        $viewModel['coreValue'] = $this->coreValueService->all();
        return view("admin.pages.core.index", $viewModel);
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'thumbnail' => 'required',
                'title' => 'required',
                'description' => 'required'
            ]);

            $data = $validator->getData();

            $this->coreValueService->save($data);
            return redirect()->route('admin.core.index')
                ->with('success', 'Tạo core value thành công!');
        } catch (Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * API: admin/core/update/{id}
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'thumbnail' => 'required',
                'title' => 'required',
                'description' => 'required'
            ]);

            $this->coreValueService->update($data, $id);
            return redirect()->route('admin.core.index')
                ->with('success', 'Cập nhật core value thành công!');
        } catch (Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }

    public function handleUpdate(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'thumbnail' => [
                    'image',
                    'mimes:png,jpg,jpeg,gif',
                    'mimetypes:image/jpeg,image/png,image/gif',
                ],
                'title' => 'required',
                'description' => 'required'
            ]);

            if (!$validator->passes()) {
                return response()->json(['errors' => $validator->errors()]);
            }

            $data = $validator->getData();
            //check thumbnail
            if ($request->file('thumbnail')) {
                $data['thumbnail'] = storeImage(
                    $request->file('thumbnail'),
                    'core'
                );
            }

            $this->coreValueService->update($data, $request->id);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->coreValueService->delete($id);
            flash()->addSuccess(DELETE_SUCCESS);
            return redirect()->back();
        } catch (Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }

    public function create()
    {
        return view('admin.pages.core.create');
    }

    public function edit($id)
    {
        $coreValue = $this->coreValueService->find($id);
        return view('admin.pages.core.edit', compact('coreValue'));
    }
}
