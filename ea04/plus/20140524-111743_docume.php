$(document).ajaxStart(
  function() {
      $.blockUI({message: "<h3><img src='img/indicator.gif'>Kérem várjon...</h3>"});
  }      
);

$(document).ajaxStop(
  function() {
      $.unblockUI();
  }      
);