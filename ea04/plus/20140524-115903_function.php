function Save_ChangePasswordForm() {
    var oldpassword = $("#oldpassword").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    var o = new Object();
    o.oldpassword = oldpassword;
    o.password = password;
    o.password2 = password2;
    
    $.post( "changepasswordform.php", o,
        function(data) {
            $("#changepasswordform").html(data);
            $("#changepasswordform").hide().show(600);
        }
    );
}
