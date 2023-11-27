<?php

namespace App\Http\Controllers\Admin;

use App\Services\Admin\RatingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RatingRequest;

class RatingController extends Controller
{
    protected $ratingService;
    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }
    public function index()
    {
        $rating = $this->ratingService->all();
        return view('admin.pages.rating.index', compact('rating'));
    }

    public function create()
    {
        return view('admin.pages.rating.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'avatar' => 'required',
            'comment' => 'required',
            'class' => 'required',
            'score' => 'nullable'
        ]);

        $this->ratingService->save($validatedData);

        return redirect()->route('admin.rating.index')
            ->with('success', 'Tạo đánh giá thành công!');
    }

    public function edit($id)
    {
        $rating = $this->ratingService->find($id);
        return view('admin.pages.rating.edit', compact('rating'));
    }

    public function update(RatingRequest $request, $id)
    {
        $data = $request->validated();
        $this->ratingService->update($data, $id);

        return redirect()->route('admin.rating.index')
            ->with('success', 'Cập nhật đánh giá thành công!');
    }

    public function destroy($id)
    {
        $this->ratingService->delete($id);
        return redirect()->route('admin.rating.index')
            ->with('success', 'Xoá đánh giá thành công!');
    }
}
