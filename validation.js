$(ducument).ready(function(){
    $("namevalidate").hide();
    $("emailvalidate").hide();
    $("numbervalidate").hide();
    $("datevalidate").hide();
    $("addressvalidate").hide();
    $("checklistvalidate").hide();
   
   var name_err=true;
   var email_err=true;
   var number_err=true;
   var date_err=true;
   var address_err=true;
   var checklist_err=true;

   $("#name").on('keyup',(function(){
        nameCheck();
   });
   
   function nameCheck(){
       var name_val =$("#name").val();
    //    stores name input in name_val
    alert(name_val);
   }

});
