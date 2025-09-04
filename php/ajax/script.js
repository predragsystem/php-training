$(document).ready(function(){
    $("button#registration").click(function(){
         let name = $("#firstName").val();
         if(name == ""){
            $("#firstName").addClass("boxerror");
            $("#error-fname").html("<strong>Please Enter First name</strong>").addClass("error");
            return true;
         }
         var data = $("form").serializeArray();
         $.ajax({
            url: 'ajax.php',
            data : data,
            method: "POST",
            success: function(){

            }
         });
    });

    
        
    
   
})