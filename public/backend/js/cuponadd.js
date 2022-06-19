$(document).ready(function () {
    showcupon();

    function showcupon(){
        $.ajax({
            type: "get",
            url: "/showcupon",
            dataType: "json",
            success: function (response) {
                $('.cupon_tbl').html('');
            $.each(response.data, function (ket, item) { 
                $('.cupon_tbl').append('\
                <tr>\
                    <td>'+item.cupon_code +'</td>\
                    <td>'+item.discount	+'</td>\
                    <td>'+item.discount_amount+'</td>\
                    <td>'+item.start_at+'</td>\
                    <td>'+item.end_at+'</td>\
                    <td>status</td>\
                    <td><button class="btn btn-sm btn-danger cupondelete" value="'+item.id+'"><i class="fas fa-trash"></i></button>\
                    </td>\
                </tr>');
                });//end each
            }
        });
    }





        //add cupon
        $('.addcupon').click(function(){
            //ajax setup for csrf tocken
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var cuponcode = $('#cuponcode').val();
            var discount = $('#discount').val();
            var dic_price = $('#dic_price').val();
            var start = $('#start').val();
            var end = $('#end').val();
            $.ajax({
                type: "post",
                url: "/addcupon",
                data: {
                    'cuponcode':cuponcode,
                    'discount':discount,
                    'dic_price':dic_price,
                    'start':start,
                    'end':end,
                },
                dataType: "json",
                success: function (response) {
                    if(response.status=='400'){
                        alert('please fillup add form promerly');
                    }
                    else{
                        $('.message').append('<div class="alert alert-success">'+response.message+'</div>');
                        showcupon();
                        $('.message').fadeOut(5000);
                        jQuery('#addcupon').modal('hide').fadeOut(1000);
                        jQuery('#addCatagori').find('input').val('');
                        
                    }
                    
                }
            });
        
        });//end add cupon
  
        //cupon Delete

        $(document).on('click','.cupondelete', function(e){
            e.preventDefault();
            var cuponDelet = $(this).val();
            $.ajax({
                type: "get",
                url: "/deletecupon/"+cuponDelet,
                dataType: "json",
                success: function (response) {
                    if(response.message){
                      $('.message').append('<div class="alert alert-success">'+response.message+'</div>');
                      $('.message').fadeOut(2000);
                      showcupon();
                    }
                }
            });
        });
});