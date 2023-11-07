$(function() {
    $('a#filter-button').click(function() {
        const form =$('form.sidebar-filter').serialize();
        $.ajax({
            method:"GET",
            url: "/",
            data: form 
          })
          .done(function(response) {
            $('div#product-wrapper').empty();
            $.each(response.data, function (index, product) {
               const html = '<div class="col mb-5">' +
                              '<div class="card h-100">' + 
                                ' @if(is_null($product->image_path))' +
                                    '<img src=" " />' +
                                ' <div class="card-body p-4">' +
                                  ' <div class="text-center">' +
                                      ' <h5 class="fw-bolder"> '+
                                          ' product.name ' +
                                        '</h5>' +
                                      '{{ $product->description }}<br>' +
                                      '{{__(shop.product.price)}} : {{ $product->price }}$' +
                                  ' </div>' +
                                '</div>' +
                              '</div>' +
                            '</div>' +
                      $('div#product-wrapper').append(html);
            });
          })
          .fail(function(response) {
            alert('Error!!');
        });
      });
});

