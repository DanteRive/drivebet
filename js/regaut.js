
/*$('.register-btn').click(function (e) {
    e.preventDefault();

    let name = $('input[name="name"]').val(),
        password = $('input[name="password"]').val(),
        password_2 = $('input[name="password_2"]').val(),
        email = $('input[name="email"]').val();

    let formData = new FormData();
    formData.append('name', name);
    formData.append('password', password);
    formData.append('password_2', password_2);
    formData.append('email', email);
   // formData.append('avatar', avatar);
   

    $.ajax({
        url: 'api.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = 'index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                       alert("Взлом жопы")
                    });
                }

                alert("Регистрация прошла успешно")

            }

        }
    });

}); */


$('.register-btn').click(function (e) {
                event.preventDefault();
                $.post('components/register.php', $('form').serialize(),
                    function(data) {
                        if (data == '1') {
                            document.location.href = "index.php";
                        } else {
                            
                        }
                    }
                );
            });
       