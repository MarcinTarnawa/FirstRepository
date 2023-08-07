$(function() {
    $('.delete').click(function() {
      var result = confirm(confirmdelete);
if (result) 
      $.ajax({
        method:"DELETE",
        url: deleteUrl + $(this).data("id")
//          url: "https://localhost/users" + $(this).data("id")
      })
      .done(function(response) {
        alert('Udało się!!');
        window.location.reload();
      })
      .fail(function(response) {
        alert('Error!!');
      
    });
  });
});