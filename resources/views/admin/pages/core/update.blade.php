<div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cập nhật</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-js">
                    @csrf
                    <table class="table table-bordered mb-0 bg-white">
                        <tbody>
                            <tr>
                                <td class="input-label">Tiêu đề: </td>
                                <td class="input-form">
                                    <input type="text" 
                                            name="title-update" 
                                            class="form-control form-control-lg"
                                            value="{{ old('title-update') }}">
                                    <span id="title-message-update" class="text-danger"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="input-label">Mô tả: </td>
                                <td>
                                    <textarea class="form-control form-control-lg" 
                                                name="description-update" rows="3">{{  old('description-update') }}</textarea>
                                    <span id="description-message-update" class="text-danger"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="input-label">Hình ảnh: </td>
                                <td>
                                    <input type="file" class="input-upload-image-update" onchange="onChangeInputFile(this)" name="thumbnail-update" hidden/>
                                    <div class="d-flex align-items-center justify-content-center upload-image" onclick="uploadImage(this)">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <span id="thumbnail-message-update" class="text-danger"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Hủy bỏ</button>
                        <button type="button" class="btn btn-outline-primary w-25 ml-2 btn-loading btn-handle-update">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
