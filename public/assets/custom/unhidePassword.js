$(document).ready(function () {
  $("#password-hide").click(function () {
    if($("#password-hide span").hasClass('fa-eye-slash')){
        $("#password-hide span").removeClass("fa-eye-slash")
        $("#password-hide span").addClass("fa-eye")
        $('#form-password').attr("type", 'text')
    }else{
        $("#password-hide span").removeClass("fa-eye")
        $("#password-hide span").addClass("fa-eye-slash")
        $('#form-password').attr("type", 'password')
    }
    
  });
});
