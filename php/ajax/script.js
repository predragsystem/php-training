$(document).ready(function(){
   getUserlist();
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
            success: function(res){
               console.log(res);
              // $("#message").html(res)
               if(res.status == "success"){
                  $("#message").html(res.message).addClass("alert alert-success");
                  getUserlist();
               } else {
                   $("#message").html(res.message).addClass("alert alert-danger");
               }
                $('#registerModal').modal('hide'); 
            }
         });
    });

    
      function getUserlist(){
         $.ajax({
            url: 'ajax.php',
            data : {action : "view"},
            method: "GET",
            success: function(res){
               console.log(res);
              if(res.status == "success"){
                  $("#userlist tbody").html(res.data);
               } 
            }
         });
      } 
    
   
})