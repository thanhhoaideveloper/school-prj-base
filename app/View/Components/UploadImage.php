<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UploadImage extends Component
{

    public $_inputName;

    public $_inputTitle;

    public $_divPreviewId;

    public $_defaultImage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName, $inputTitle, $divPreviewId, $defaultImage)
    {
        $this->_inputName = $inputName;
        $this->_inputTitle = $inputTitle;
        $this->_divPreviewId = $divPreviewId;
        $this->_defaultImage = $defaultImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.upload-image');
    }
}
