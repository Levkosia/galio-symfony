$(document).ready(function(){
    function ValidEmailAddress(email) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(email);
    }
    $('#registration').click(function(){
        password = $('#password').val();
        password2 = $('#password-2').val();
        if(password == password2){
            username = $('username').val();
            email = $('email').val();
            if(ValidEmailAddress(email)) {
                alert("Hello");
            }
            else{
                $('#error-email').text('Email не правильный');
            }
        }
        else{
            $('#error-password').text('Пароли не совпадают');
        }
    })
});