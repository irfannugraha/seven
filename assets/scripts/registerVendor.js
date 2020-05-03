var maxLength = 0;

$('.name').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength+length;
  $('.countable').text(length);
});