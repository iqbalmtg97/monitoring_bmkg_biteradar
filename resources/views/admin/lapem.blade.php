<script>

    function getdata(id)
    {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        var url = $('#url_getdataa').val() + '/' + id
        var url = $('#url_getdata_hvps_v').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response){
                console.log(response);

                $('#id').val(id);
                $('#id_rt').val(id);
                $('#id_mf').val(id);
                $('#id_hvps_v').val(id);
                $('#note').val(response.note_operate_time);
                $('#hasil_check').val(response.hasil_operate_time);
                $('#note_radiate_time').val(response.note_radiate_time);
                $('#hasil_radiate_time').val(response.hasil_radiate_time);
                $('#note_mmi_fault').val(response.note_mmi_fault);
                $('#hasil_mmi_fault').val(response.hasil_mmi_fault);
                $('#note_hvps_v').val(response.note_hvps_v);
                $('#hasil_hvps_v').val(response.hasil_hvps_v);
            }
        });    
    }

</script>