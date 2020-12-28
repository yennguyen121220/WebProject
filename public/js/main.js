$(document).ready(function(){
    $("#username").keyup(function(){
        var un=$(this).val();
        $.post("./Ajax/checkUsername",{username:un},function(data){
            $("#messageUsername").html(data);
        });
    });
});