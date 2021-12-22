//"signin.php"


// Авторизация 

$('.login-btn').click(function(e){
    e.preventDefault();

    console.log('-------', 'btn push');

    let login = $('input[name = "username"]').val();
    let password = $('input[name = "password"]').val();
    $.ajax({
        url : "signin.php",
        type : "POST",
        dataType : "json",
        data :{
           username : login,
           password :  password
        },
        success (data){

            if (data.status === true){
                document.location.href = 'client.php'
            }else{
                
                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});




$('.btn btn-info').click(function(){

    document.location.href="/kursach/admin/cheek_request.php"

});