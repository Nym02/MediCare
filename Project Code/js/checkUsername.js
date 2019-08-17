$(document).ready(function(){
    $('#uname').blur(function(){
        var username = $(this).val();
        $.ajax({
            url:"checkUsername.php",
            method:"POST",
            data:{user_name:username},
            dataType:"text",
            success:function(html){
                $("#available").html(html);
            }
        });
    });
});