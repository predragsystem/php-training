$(document).ready(function(){
    $("button#registration").click(function(){
         let name = $("#firstName").val();
         if(name == ""){
            $("#firstName").addClass("boxerror");
            $("#error-fname").html("<strong>Please Enter First name</strong>").addClass("error");
           
         }
         var data = $("form").serializeArray();
         console.log(data)
    });

    
        
    
   
})