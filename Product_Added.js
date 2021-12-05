

function upload(va) {

    var ImgName = path;

    va.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'Product_Added_Process.php',
        data: {

            "Name": $('#Name').val(),
            "Price": $('#Price').val(),
            "Description": $('#Description').val(),
            "ProductImg": ImgName

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


}