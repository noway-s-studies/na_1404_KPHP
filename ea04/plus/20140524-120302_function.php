function Save_ChangePasswordForm() {
    $.post( "changepasswordform.php", 
    {oldpassword:  $("#oldpassword").val(), password: $("#password").val(), password2: $("#password2").val()},
        function(data) {
            $("#changepasswordform").html(data);
            $("#changepasswordform").hide().show(600);
        }
    );
}
