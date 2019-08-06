function Save_TesztKerdesForm() {
    $.post( "tesztkerdesform.php", 
    {tkid:  $("#tkid").val(), kerdestxt:  $("#kerdestxt").val(), tipus: $("#tipus").val(),
        kategoria: $("#kategoria").val(),  nehezseg: $("#nehezseg").val()},
        function(data) {
            $("#tesztkerdesform").html(data);
            $("#tesztkerdesform").hide().show(600);
        }
    );
}