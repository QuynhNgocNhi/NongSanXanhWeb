var ImgArray = [];
var i = 0;
var j = 0;
document.getElementById("AddProduct").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:


    event.preventDefault();
    // var img = document.getElementById("result").value;

    $.ajax({
        type: 'POST',
        url: 'Product_Added_Process.php',
        data: {

            "Name": $('#Name').val(),
            "Price": $('#Price').val(),
            "Description": $('#Description').val(),
            "ProductMainImage": ImgArray[0],


            "ProductCategory": $("[name = 'ProductCategory']").val()


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

function getName() {

    var fullPath = document.getElementById("img1").src;
    var index = fullPath.lastIndexOf("/");
    var filename = fullPath;
    if (index !== -1) {
        filename = fullPath.substring(index + 1, fullPath.length);
    }
    document.getElementById("result").value = filename;
}

document.getElementById("UploadMainImgBtn").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:
    //
    event.preventDefault();
    if (ImgArray.length < 5) {
         event.preventDefault();
        $('input[name="ProductImage"]:checked').each(function () {
            let image = $('input[name = "FileName"]')[0].files[i];
            ImgArray[i++] = $(this).val();
            let formData = new FormData();

// todo:Chức năng xóa hình ảnh(lựa chọn ảnh đăng trong vong 5 ảnh)
            // Check image selected or not
            if (image.size > 0) {
                formData.append('Product_Image', image);
                $.ajax({
                    url: 'Product_Img_Upload.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        data = JSON.parse(data);
                        if (data.error !== 1) {

                            mainImage = data.src;
                            ImgArray[j] = mainImage;
                            j++;

                            let path = "data/Product_Img_Upload/" + mainImage;

                            $('#imageSuccess').append("<img id='IMG" + i + "' class='img-fluid img-thumbnail' src='" + path + "'>");

                        } else {
                            $("#errorMessage").text(data.error_message);
                        }
                    }
                });

            } else {
                $("#errorMessage").text("Please select an image.");
            }

        });
    }
    else {

    }


});

// document.getElementById("MainProductImg").addEventListener('change', function (event) {
//     // NOTE: You are clicking a submit button.  After this function runs,
//     // then the form will be submitted.  If you want to *stop* that, you can
//     // use the following:
//     //
//
//     event.preventDefault();
//     for (i = 0; i < 5; i++) {
//         let formData = new FormData();
//         let image = $("#MainProductImg")[0].files[i];
//
// // todo:Chức năng xóa hình ảnh(lựa chọn ảnh đăng trong vong 5 ảnh)
//         // Check image selected or not
//         if (image.size > 0) {
//             formData.append('Product_Image', image);
//             $.ajax({
//                 url: 'Product_Img_Upload.php',
//                 type: 'post',
//                 data: formData,
//                 contentType: false,
//                 processData: false,
//                 success: function (data) {
//                     data = JSON.parse(data);
//                     if (data.error !== 1) {
//
//                         mainImage = data.src;
//                         ImgArray[j] = mainImage;
//                         j++;
//
//                         let path = "data/Product_Img_Upload/" + mainImage;
//
//                         $('#image_preview').append("<img id='IMG" + i + "' class='img-fluid col-2 img-thumbnail' src='" + path + "'>");
//
//                     } else {
//                         $("#errorMessage").text(data.error_message);
//                     }
//                 }
//             });
//
//         } else {
//             $("#errorMessage").text("Please select an image.");
//         }
//         ;
//     }
//
// });
//