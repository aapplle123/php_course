
$('#btn-submit').on('click', function () {
    sendForm();
});

function sendForm() {
    $.ajax({
        type: "POST",
        url: "php08_2.php",
        data: $('#form1').serialize(),
        success: function (response) {
            console.info('response:', response);
            $('#response_panel').html(response);
        },
        error: function (data) {
            console.error('請求失敗！');
        }
    });
}