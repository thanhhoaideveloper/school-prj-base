<script>
    $(document).ready(function(){
        $('#btn-add').on('click', function(){
            $('#createModal').modal('show');
        });

        $('.btn-handle-create').on('click', function(e){
            var _token = $("input[name='_token']").val();
            var title = $("input[name='title']").val();
            var description = $("textarea[name='description']").val();
            var thumbnail = $("input[name='thumbnail']")[0].files;

            var formData = new FormData();
            formData.append('_token', _token);
            formData.append('title', title);
            formData.append('description', description);
            formData.append('thumbnail', thumbnail[0]);

            $.ajax({
                url: "{{ route('admin.core.create') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(data){
                    if(data.hasOwnProperty('errors')){
                        let res = data.errors;
                        for(index in res){
                            $(`#${index}-message`).html(res[index][0]);
                        }
                    } else if(data.hasOwnProperty('error')){
                        flasher.error(data.error)
                    } else {
                        flasher.success("Lưu thành công!")
                        location.reload();
                    }

                    removeLoading();
                }
            })
        })

        $('.editRow').on('click', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: `/admin/core/update/${id}`,
                method: 'GET',
                processData: false,
                success: function(res){
                    if(res.hasOwnProperty('error')){
                        flasher.error(data.error)
                    }else{
                        var data = res.data;
                        $("input[name='title-update']").val(data.title);
                        $("input[name='id']").val(data.id);
                        $("textarea[name='description-update']").val(data.description);
                        $(".upload-image-update").html(`<img style="width:200px;" src="/${data.thumbnail}" />`);
                        $("#updateModal").modal('show');
                    }
                }
            });
        });

        $('.btn-handle-update').on('click', function(e){
            var _token = $("input[name='_token']").val();
            var id = $("input[name='id']").val();
            var title = $("input[name='title-update']").val();
            var description = $("textarea[name='description-update']").val();
            var thumbnail = $("input[name='thumbnail-update']")[0].files;

            var formData = new FormData();
            formData.append('_token', _token);
            formData.append('id', id);
            formData.append('title', title);
            formData.append('description', description);
            if(thumbnail[0]){
                formData.append('thumbnail', thumbnail[0]);
            }

            $.ajax({
                url: "{{ route('admin.core.handleUpdate') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(data){
                    if(data.hasOwnProperty('errors')){
                        let res = data.errors;
                        for(index in res){
                            $(`#${index}-message`).html(res[index][0]);
                        }
                    } else if(data.hasOwnProperty('error')){
                        flasher.error(data.error)
                    } else {
                        flasher.success("Lưu thành công!")
                        location.reload();
                    }

                    removeLoading();
                }
            })
        })

    });
</script>