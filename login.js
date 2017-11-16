$(document).ready(function() {

  $('#login').on('click', function(event) {
    event.preventDefault();
    $('#eee').addClass('is-see');
    $('#popup').removeClass('hide');
  });

// close popup when clicked away from
  $("#eee").on('click', function(event) {
    event.preventDefault();
    $('#eee').toggleClass('is-see');
    $('#popup').toggleClass('hide');
  });

// close popup when escape is pressed
  $(document).keyup(function(event) {
    if (event.which=='27') {
      $('#eee').toggleClass('is-see');
      $('#popup').toggleClass('hide');
    }
  });

});
