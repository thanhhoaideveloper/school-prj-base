<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="create">THÊM SLIDER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form enctype="multipart/form-data" class="form-js">
            @csrf
            <table class="table table-bordered mb-0 bg-white">
                <tbody>
                    <tr>
                        <td class="input-label">Hình ảnh: </td>
                        <td class="input-form">
                            <x-upload-image inputName='thumbnail' inputTitle='' divPreviewId="upload_thumbnail"
                                        defaultImage="{{ $site->logo ?? null }}" />
                            <span id="thumbnail" class="text-danger"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Tiêu đề: </td>
                        <td class="input-form">
                            <input type="text" 
                                    name="title" 
                                    class="form-control form-control-lg"
                                    value="{{ $site->title ?? old('title') }}"
                                    >
                            <span id="title" class="text-danger"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Liên kết: </td>
                        <td class="input-form">
                            <input type="text" 
                                    name="link" 
                                    class="form-control form-control-lg"
                                    value="{{ $site->title ?? old('link') }}"
                                    >
                            <span id="link" class="text-danger"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Nội dung: </td>
                        <td>
                            <textarea class="form-control form-control-lg" name="content" rows="3">{{ $site->content ?? old('content') }}</textarea>
                            <span id="content" class="text-danger"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex gap-4 justify-content-center mt-2">
                <button type="button" onclick="closeModel('create')" class="btn btn-secondary w-25 m-2">
                    Hủy bỏ
                </button>
                <button type="button" class="btn btn-outline-primary w-25 m-2 btn-loading btn-submit-create">
                    Lưu thay đổi
                </button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btn-submit-create").click(function(e){
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var thumbnail = $("input[name='thumbnail']").val();
            var title = $("input[name='title']").val();
            var link = $("input[name='link']").val();
            var content = $("input[name='content']").val();
            var formData = new FormData({
                _token,
                thumbnail : $("input[name='thumbnail']")[0].files[0],
                title,
                link,
                content
            });
            $.ajax({
                url: "{{ route('admin.slide.create') }}",
                method: 'POST',
                data: {
                    _token,
                    thumbnail,
                    title,
                    link,
                    content
                },
                success: function(data){
                    if(data.hasOwnProperty('errors')){
                        let res = data.errors;
                        for(index in res){
                            $(`#${index}`).html(res[index][0]);
                        }
                    }else{
                        closeModel('create');
                    }
                    removeLoading();
                }
            })

        })
    })
</script>