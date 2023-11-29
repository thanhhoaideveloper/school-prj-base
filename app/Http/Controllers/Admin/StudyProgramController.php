<?php

namespace App\Http\Controllers\Admin;

use App\Services\Admin\StudyProgramService;
use Illuminate\Http\Request;
use App\Models\StudyProgram;
use App\Http\Controllers\Controller;

/**
 * StudyProgramController
 */
class StudyProgramController extends Controller
{
    protected $studyProgramService;
    public function __construct(StudyProgramService $studyProgramService)
    {
        $this->studyProgramService = $studyProgramService;
    }
    public function index()
    {
        // 1 là active
        // 2 là inactive
        $studyPrograms = $this->studyProgramService->all();
        return view('admin.pages.studyprogram.index', compact('studyPrograms'));
    }

    public function create()
    {
        return view('admin.pages.studyprogram.create');
    }

    public function store(Request $request)
    {

        $request['status'] = 1;
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|required',
            'student' => 'required|numeric',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'status' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = storeImage(
                $request->file('image'),
                'studyprograms'
            );
        }

        $this->studyProgramService->save($validatedData);

        return redirect()->route('admin.studyprogram.index')
            ->with('success', 'Tạo chương trình học thành công!');
    }

    public function edit($id)
    {
        $studyProgram = $this->studyProgramService->find($id);
        return view('admin.pages.studyprogram.edit', compact('studyProgram'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|required',
            'student' => 'required|numeric',
            'start_time' => 'nullable|date',
            'end_time' => 'nullable|date',
            'status' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = storeImage(
                $request->file('image'),
                'studyprograms'
            );
        }

        $this->studyProgramService->update($validatedData, $id);

        return redirect()->route('admin.studyprogram.index')
            ->with('success', 'Cập nhật chương trình học thành công!');
    }

    public function destroy($id)
    {
        $this->studyProgramService->delete($id);
        return redirect()->route('admin.studyprogram.index')
            ->with('success', 'Xoá chương trình học thành công!');
    }
}
