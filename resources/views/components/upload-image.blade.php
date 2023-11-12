<div>
    <label for="formFile" class="form-label">{{ $_inputTitle }}</label>
    <div id="{{ $_divPreviewId }}" class="mb-2">
        @if($_defaultImage)
            <img style="width:100px;" src="{{ asset($_defaultImage) }}" />
        @endif
    </div>
    <input 
        name="{{ $_inputName }}"
        class=""
        type="file" 
        name="upload" 
        onchange="reviewUpload(this, '{{ $_divPreviewId }}')"
    />
</div>