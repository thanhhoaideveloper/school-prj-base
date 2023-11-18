const reviewUpload = (input, previewId) => {
    if (input.files.length) {
        const src = URL.createObjectURL(input.files[0]);
        const image = `<img style="width:100px;" src="${src}" />`;
        $(`#${previewId}`).html(image);
    }
};

const removeLoading = () => {
    $('.btn-loading span').remove();
}

const resetForm = (id) => {
    $(`.${id}`)[0].reset();
}

const closeModel = (id) => {
    resetForm('form-js');
    $(`#${id}`).modal('hide');
}

const uploadImage = (element) => {
    $('.input-upload-image').click();
}

const onChangeInputFile = (input) => {
    if (input.files.length) {
        const src = URL.createObjectURL(input.files[0]);
        const image = `<img style="width:200px;" src="${src}" />`;
        $(`.upload-image`).html(image);
    }
}

$(document).on('click', '.btn-loading', function () {
    $(this).append('<span class="spinner-border spinner-border-sm mr-1 ml-1" role="status" aria-hidden="true"></span>');
});

$(document).ready(function(){


});