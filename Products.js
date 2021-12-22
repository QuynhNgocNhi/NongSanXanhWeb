function AddToCart(ProductId) {

    // alert(ProductId);
    $.ajax({
        type: 'POST',
        url: 'Products_Added_To_Card_Process.php',
        data: {
            "ProductId": ProductId,
            "Action": 1

        },
        success: function (data) {
            swal({
                'title': 'Thành công!',

                text: "Đã thêm vào giỏ hàng!",
                icon: "success"

            })
            // alert($('.pro-count').text());

            $('.pro-count').html(data);
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

function MinusToCart(ProductId, CurrentQuantity) {
// alert(CurrentQuantity);
    if (CurrentQuantity === '1') {
        window.open('Cart.php?action=delete&Id='.concat(ProductId));
    }
    else{

    $.ajax({
        type: 'POST',
        url: 'Products_Added_To_Card_Process.php',
        data: {
            "ProductId": ProductId,
            "Action": 0
        },
        success: function (data) {
            swal({
                'title': 'Thành công!',

                text: "Đã xóa khỏi giỏ hàng!",
                icon: "success"

            })
            // alert($('.pro-count').text());
            // alert(data);
            $('.pro-count').html(data);

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
}
function TotalCaculate(ProductId,IdTotal,Price,Quantity){
    $CurrentTotal = $('#Subtotal').text();
    $str="#".concat(IdTotal.concat(ProductId));
    $CurrentProductPrice= $($str).text();
    $CurrentProductPriceFloat= parseFloat($CurrentProductPrice);
    //Subtotal minus current Product total taht has been change quantity
    $CurrentTotal = $CurrentTotal - $CurrentProductPriceFloat;
    $($str).html(Price*Quantity);
    //Subtotal plus Product total after has been change quantity
    $CurrentTotal = $CurrentTotal + (Price*Quantity);
    $('#Subtotal').html($CurrentTotal);
    $('#TotalLast').html($CurrentTotal);

    // alert(Price);
    // alert(Quantity);
    // alert($str);
    // alert($($str).text());
    // alert($CurrentTotal);
    // alert($CurrentTotal);
    // alert($CurrentProductPriceFloat);
    // document.getElementById("TotalPerProduct").value = formatNumber(Price * Quantity,2);
}

// document.getElementById("Add_To_Cart").addEventListener('click', function (event) {
//    $ProductId = $this.name;
//     alert($ProductId);
//     $.ajax({
//         type: 'POST',
//         url: 'Products_Added_To_Card_Process.php',
//         data: {
//             "ProductId": ProductId
//         },
//         success: function (data) {
//             swal({
//                 'title': 'Successful',
//
//                 text: "Thành công!",
//                 icon: "success"
//
//             }).then(function () {
//                 window.open('Product_List.php', '_self')
//             });
//         },
//         error: function (data) {
//             swal({
//                 'title': 'error',
//                 text: "Thất bại!",
//                 icon: "warning",
//                 dangerMode: true
//
//             })
//         }
//     });
// });

// $(document).ready(function () {
//     $("#View").change(function () {
//         var ViewValue = $this.val();
//         Sort(ViewValue);
//
//     });
//
// });

function Sort(ViewValue) {
    $.ajax({
        type: 'POST',
        url: 'Products_Process.php',
        data: {

            "Name": $('#Name').val(),

        },

        success: function (data) {
            swal({
                'title': 'Successful',

                text: "Thành công!",
                icon: "success"

            }).then(function () {
                window.open('Product_List.php', '_self')
            });
        },
        error: function (data) {
            swal({
                'title': 'error',
                text: "Thất bại!",
                icon: "warning",
                dangerMode: true

            })
        }
    });
}

