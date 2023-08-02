$(function(){$(".delete").click(function(){$.ajax({method:"DELETE",url:deleteUrl+$(this).data("id")}).done(function(e){window.location.reload()}).fail(function(e){alert("Error!!")})})});
