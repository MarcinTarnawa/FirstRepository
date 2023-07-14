$(function() {
    $('.delete').click(function() {
      $.ajax({
        method:"DELETE",
        url: deleteUrl + $(this).data("id")
//          url: "https://localhost/users" + $(this).data("id")
      })
      .done(function(response) {
        window.location.reload();
      })
      .fail(function(response) {
        alert('Error!!');
    });
  });
});