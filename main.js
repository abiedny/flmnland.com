$(function() {
  console.log("DEBUG: main.js loaded")
  $("#contact_form").on('submit', function(e) {
    e.preventDefault();

    $.ajax({
      type: 'post',
      url: '/contact_us.php',
      data: $("#contact_form").serialize(),
      success: () => { 
        $("#form_alert").show(); 
        $("input")[0].value = "";
        $("input")[1].value = "";
        $("textarea")[0].value = "";
      }
    });
  });
});