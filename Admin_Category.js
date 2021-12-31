document.getElementById("AddCategory").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:
    event.preventDefault();
    var ImageMainId = $('div#imageSuccess > img')[0].id;
    var MainImageName = getName(ImageMainId);

    $.ajax({
        type: 'POST',
        url: 'Admin_Category_Added_Process.php',
        data: {

            "Name": $('#Name').val(),
            "CategoryMainImage": MainImageName,

        },

        success: function (data) {
            // alert(data);
            swal({
                'title': 'Successful',

                text: "Thành công!",
                icon: "success"

            }).then(function () {
                window.open('Admin_Category_Added.php', '_self')
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

});

function getName(Name) {

    var fullPath = document.getElementById(Name).src;
    var index = fullPath.lastIndexOf("/");
    var filename = fullPath;
    if (index !== -1) {
        filename = fullPath.substring(index + 1, fullPath.length);
    }
    // document.getElementById("result").value = filename;
    return filename;
}

// // hien thi image Success
var ImgArray = [];
document.getElementById("UploadMainImgBtn").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:
    event.preventDefault();
    let NumSuccesImages = $('div#imageSuccess > img').length;
    let MaxNumImagesToAdd = 5 - NumSuccesImages;
    let NumAddedThisTime = 0;
    let CheckedImages = $('input[name="ProductImage"]');

    for (var i = 0; i < CheckedImages.length; i++) {
        if (NumAddedThisTime === MaxNumImagesToAdd) {
            $("#errorMessage").text("Bạn chỉ được chọn 5 ảnh.");
            break;
        }


        if (!CheckedImages[i].checked)
            continue;
        else {
            NumAddedThisTime++;
            CheckedImages[i].checked = false;
        }

        let image = ImageData.get('Image' + i);
        let formData = new FormData();

        // todo:Chức năng xóa hình ảnh(lựa chọn ảnh đăng trong vong 5 ảnh)
        // Check image selected or not
        if (image.size > 0) {
            formData.append('Product_Image', image);
            $.ajax({
                url: 'Admin_Category_Img_Upload.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.error !== 1) {

                        mainImage = data.src;
                        // ImgArray[j] = mainImage;


                        let path = "data/Category_Img_Upload/" + mainImage;

                        $('#imageSuccess').append("<img id='" + mainImage + "' class='img-fluid img-thumbnail' src='" + path + "'>");

                    } else {
                        $("#errorMessage").text(data.error_message);
                    }
                }
            });

        } else {
            $("#errorMessage").text("Please select an image.");
        }

    }


});

// $(document).ready(function () {
//     $('form').ajaxForm(function () {
//         alert("Uploaded SuccessFully");
//     });
// });
// Thêm image preview
let ImageData = new FormData();
document.getElementById("MainProductImg").addEventListener('change', function (event) {
    event.preventDefault();


    var CurrentImageNumber = $('div.numberImage').length;

    for (var i = CurrentImageNumber, j = 0; i < 20; i++, j++) {
        let ImageFile = $('#MainProductImg')[0].files[j];
        ImageData.append('Image' + i, ImageFile, ImageFile.name);
        $('#image_preview').append("<div class='numberImage imageandtext image_grid'> <label for='IMG" + i + "'> <img class='img-fluid img-thumbnail' src='" + URL.createObjectURL(event.target.files[j]) + "'> </label> <input type='checkbox' name='ProductImage' value ='" + URL.createObjectURL(event.target.files[j]) + "' id='IMG" + i + "'> <div class='caption' id='result" + i + "'> </div>  </div>");

    }

})
