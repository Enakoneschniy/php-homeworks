
$('.check-btn').click(function (check) {
    check.preventDefault();
    var formData = $('.reg-form').serializeArray();
    $.ajax({
        url: "check.php",
        type: "post",
        dataType: "json",
        data: formData,
        success: function (response) {
            if(response === "OK"){
                alert('Text matches the regular expression');
            } else {
                alert('The text does not match the regular expression');
            }
        }
    });
});

$('.apply-btn').click(function (apply) {
    apply.preventDefault();
    var formData = $('.reg-form').serializeArray();
    $.ajax({
        url: "apply.php",
        type: "post",
        dataType: "json",
        data: formData,
        success: function (response) {
            $('.information').text(response);
        }
    });
});


