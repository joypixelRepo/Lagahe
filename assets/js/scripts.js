$(document).ready(function() {
  
  $('#submit-button').on('click', function(e) {
    $('#search-films').submit();  
  });

  $('#calendar-start-date').on('change', function(e) {
    let start = $(this).val();
    $('#start-date').val(start);
  });

  $('#calendar-end-date').on('change', function(e) {
    let end = $(this).val();
    $('#end-date').val(end);
  });

});