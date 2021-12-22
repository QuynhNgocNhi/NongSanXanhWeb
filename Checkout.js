

document.getElementById("Checkout").addEventListener('click', function (event) {
    // NOTE: You are clicking a submit button.  After this function runs,
    // then the form will be submitted.  If you want to *stop* that, you can
    // use the following:
    // $Temp = $('div.checkout__products div.product__name:nth-child(1)').text();
    var valid = this.form.checkValidity();
    if(valid){
        event.preventDefault();
    $MainProductName = $('div#Name').text();
    // alert($MainProductName);
    // $OrderTotal = $('div#OrderTotal').text();



    $.ajax({
        type: 'POST',
        url: 'Checkout_Process.php',
        data: {

            "FirstName": $('#FirstName').val(),
            "LastName": $('#LastName').val(),
            "Address": $('#Address').val(),
            "Zip": $('#Zip').val(),
            "City": $('#City').val(),
            "Phone": $('#Phone').val(),
            "Email": $('#Email').val(),
            "Note": $('#Note').val(),
            "MainProductName": $MainProductName
       },

        success: function (data) {
            // alert(data);
            swal({
                'title': 'Successful',

                text: "Thành công!",
                icon: "success"

            }).then(function () {
                window.open(data, '_self')
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

});
