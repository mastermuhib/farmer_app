<script src="{{URL::asset('assets')}}/js/validate.js"></script>
<script src="{{URL::asset('assets')}}/js/additional-method.js"></script>
<script type="text/javascript">
    $(function() {
        //$('#myTable').DataTable();
        $(".select2-container--default").css('width', '100%');
        
        
    });

    $("#form_edit").validate({
        submitHandler: function(form) {
            $("#loading_edit").css('display', '');
            $("#save_edit").css('display', 'none');
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            
            $.ajax({ //line 28
                type: 'POST',
                url: '/update/master_country',
                dataType: 'json',
                data: new FormData($("#form_edit")[0]),
                processData: false,
                contentType: false,
                success: function(data) {
                    $("#loading_edit").css('display', 'none');
                    $("#save_edit").css('display', '');

                    if (data.code == 200) {
                        
                        show_toast(data.message, 1);
                        
                    } else {
                        alert("maaf ada yang salah!!!");
                    }
                }
            });
        }
    });
</script>