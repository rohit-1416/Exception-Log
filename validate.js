
$(function(){
    var $formval=("form");
    if($formval.length){
       $formval.validate({
          rules:{
              name:{
                  required:true
              }
          },
          messages:{
              name:{
                  required:"name is Mendatory"
              }
          } 
       }) 
    }
});