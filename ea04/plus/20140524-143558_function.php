function Load_TesztKerdesForm() {
    $("#middle").load("tesztkerdesform.php", 
      function() {
          $("#tesztkerdesform").hide().show(600);
      }
    );
}