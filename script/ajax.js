
/*$("#add_user_btn").click(function(){
	//sendAjaxForm();
	$("#result").html('waiting...');
});

function add() {
    alert ('Yo');
}
*/
function sendAjaxForm () {
    var error = 0;
    var regExp = /[0-9]+/;
    var userName = $('#user_name').val ();

    //Проверяем поле ввода имени на пустоту           
    if( (!userName) || (regExp.test (userName)) ) {// если поле пустое
        $('#user_name').css ('border', 'red 1px solid');// устанавливаем рамку красного цвета
        error = 1;// определяем индекс ошибки
        $('#result').html ('Введённое имя содержит недопустимые символы!');                                             
    } else {
        $('#user_name').css ('border', 'green 1px solid');// устанавливаем рамку зелёного цвета
    }

    //Проверяем поле ввода возраста на пустоту
    if(!$('#user_age').val ()) {// если поле пустое
        $('#user_age').css ('border', 'red 1px solid');// устанавливаем рамку красного цвета
        error = 2;// определяем индекс ошибки
        $('#result').html ('Введите возраст!');      
                                               
    } else {
        $('#user_age').css ('border', 'green 1px solid');// устанавливаем рамку зелёного цвета
    }

    //Если не было ошибок, задействуем AJAX
    if (!error) {
        $.ajax ({
            // Имя обработчика
            url: 'addUser',
            //Метод отправки
            type: 'POST',
            //Формат данных
            dataType: 'html',
            data: $('#form_ajax').serialize (),
            //Есть ответ от обработчика
            success: function (response) {
                result = $.parseJSON (response);
                $('#result').html ('Имя: '+result.name+' Возраст: '+result.age+' '+result.msg);
            },
            //Нет ответа от обработчика
            error: function (response) {
                $('#result').html ('Ответ от сервера не был получен!');
            }
         });
    }         
}
/*
function ajax() {
    var msg = $("#form_ajax").serialize();
    $.ajax({
        type: "POST",
        url: "addUser",
        data: msg,
        success: function(data) {
            $("#result").html(data);
        },
        error:  function(xhr, str){
            alert("Возникла ошибка!");
        }
    });
}
*/
