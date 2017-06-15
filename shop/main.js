$(document).ready(function() {
    function reloadCart() {
        $.get('cart-widget.php').done(function(html) {
            $('.cart-widget').html(html);
        }).fail(function () {
            alert('Something went wrong');
        })
    }

    $('.add-to-cart').click(function(event) {
        var $productRow = $(event.target).closest('.product-row'),
            productId = $productRow.data('product-id');

        $.ajax({
            url: 'add-to-cart.php',
            method: 'POST',
            data: {
                product_id: productId,
                count: 1
            },
            success: function(data) {
                if (data.result === 'success') {
                    alert('Product has been added to cart successfully!');
                    reloadCart();
                } else {
                    alert('Something went wrong');
                }
            }
        });
    });
});
