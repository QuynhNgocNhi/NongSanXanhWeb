document.getElementById("AddProduct").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'Product_Added_Process.php',
        data: {

            "Name": $('#Name').val(),
            "Price": $('#Price').val(),
            "Description": $('#Description').val(),
            "ProductImg": mainImage,

            // ProductCategoryId: $('#ProductCategoryId').val();,
            // ProductCategory: $('#ProductCategory').val();,
            // ProductUnits: $('#ProductUnits').val();,
            // ProductStatus: $('#ProductStatus').val();,
            // VendorId: VendorId
        },

        success: function (data) {
            alert(data);
            swal({
                'title': 'Successful',

                text: "Thành công!",
                icon: "success"

            })
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

});


