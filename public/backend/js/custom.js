const { data } = require("autoprefixer");

jQuery(document).ready(function(){
    jQuery('#cat_id').change(function(){
       var cat_id =jQuery(this).val();
       $.ajax({
           type: "get",
           url: "/subcategoryselect",
           data: {
                'cat_id': cat_id ,
           },
           dataType: "json",
           success: function (response) {
               var data = response.data;
               if(data){
                 
                 for(var i=0 ;i<=data.length ;i++){
                  jQuery('#subcat_id').append('<option value="'+data[i].id+'" >'+data[i].name+'</option>');
                 }
               }
            
           }
       });
    })
});