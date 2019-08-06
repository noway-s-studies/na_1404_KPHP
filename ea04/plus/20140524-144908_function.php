function Load_OsszesTesztKerdesForm() {
    $("#middle").load("osszestesztkerdesform.php", 
      function() {
          $("#osszestesztkerdesform").hide().show(600);
      }
    );
}