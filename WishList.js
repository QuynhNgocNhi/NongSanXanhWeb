function AddToWishList(ProductId, Status) {

    // alert(Status);
    $.ajax({
        type: 'POST',
        url: 'WishList_Process.php',
        data: {
            "ProductId": ProductId,
        },
        success: function (data) {
            // get #Productid
           // str = "#wishlist".concat(ProductId);
           //  if (Status == "0") {
           //      $(str).addClass('text-danger');
           //  } else {
           //      $(str).removeClass('text-danger');
           //  }
            $('#wishlist-count').html(data);
        },
        error: function (data) {
            swal({
                'title': 'Opps',
                text: "Bạn chưa đăng nhập!",
                icon: "warning",
                // dangerMode: true

            }).then(function () {
                window.open('login.php', '_self')
            });
        }
    });
}
