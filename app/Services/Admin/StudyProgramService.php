<?php

namespace App\Services\Admin;

use App\Models\StudyProgram;
use App\Services\BaseService;


class StudyProgramService extends BaseService
{
    protected $model;

    public function __construct(StudyProgram $studyprogram)
    {
        $this->model = $studyprogram;
    }
}