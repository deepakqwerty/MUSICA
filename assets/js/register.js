$(document).ready(function(){
    
    $("#hideLogin").click(function(){
        $("#LoginForm").hide();
        $("#registerForm").show();

    });

    $("#hideRegister").click(function(){
        $("#LoginForm").show();
        $("#registerForm").hide();

    });

});