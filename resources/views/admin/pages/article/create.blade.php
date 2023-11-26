<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm bài viết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-js">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">
                            Tiêu đề
                            <span class="text-danger">*</span>
                        </label>
                        <input id="title" 
                                type="text" 
                                name="name" 
                                placeholder="Enter title"
                            value="{{ old('name') }}" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Hủy bỏ</button>
                        <button type="button" class="btn btn-outline-primary w-25 ml-2 btn-loading btn-handle-create">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
