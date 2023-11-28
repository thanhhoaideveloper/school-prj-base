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

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    public function index()
    {
        $viewModel = [];
        $viewModel['banners'] = $this->bannerService->all();
        return view('admin.pages.banner.index', $viewModel);
    }

    public function store(BannerRequest $request)
    {
        try {
            $data = $request->validated();
            //check image favicon
            if ($request->file('thumbnail')) {
                $data['thumbnail'] = storeImage(
                    $request->file('thumbnail'),
                    'banners'
                );
            }
            $this->bannerService->save($data);
            return redirect()->route('admin.banner.index')
                ->with('success', 'Tạo banner thành công!');
        } catch (Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }

    public function update(BannerRequest $request, $id)
    {
        try {
            $data = $request->validated();
            //check image favicon
            if ($request->file('thumbnail')) {
                $data['thumbnail'] = storeImage(
                    $request->file('thumbnail'),
                    'banners'
                );
            }
            $this->bannerService->update($data, $id);
            return redirect()->route('admin.banner.index')
                ->with('success', 'Cập nhật banner thành công!');
        } catch (Exception $e) {
            flash()->addError($e->getMessage());
            return redirect()->back();
        }
    }

    public function create()
    {
        return view('admin.pages.banner.create');
    }

    public function edit($id)
    {
        $banner = $this->bannerService->find($id);
        return view('admin.pages.banner.edit', compact('banner'));
    }

    public function destroy($id)
    {
        $this->bannerService->delete($id);
        return redirect()->route('admin.banner.index')
            ->with('success', 'Xoá banner thành công!');
    }
}
