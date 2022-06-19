$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $('.cuponapplybtn').click(function(){
        var cupponapplybox = $('.cuponcodeapply').val();
         if(cupponapplybox !=""){
            $.ajax({
                type: "post",
                url: "/applycupon",
                data: {
                    'cupponapplybox': cupponapplybox,
                },
                dataType: "json",
                success: function (response) {
                    if(response.status=="11"){
                        $('.cupponError').html(response.message);
                    }
                    else{
                        $('.cupponError').html('cuponcode Dosenot Match');
                    }
                }
            });
           
         }
         else{
            $('.cupponError').html('please enter Cupon Code here');
         }
        
    });//applycupon
});