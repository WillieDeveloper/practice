
$(function() {
    $('#formAjax input[type = "submit"]').click(function(e){
        // Отменяем стандартное поведение браузера
        e.preventDefault();
 
        var error = 0;
        var regExpNumber = /[0-9]+/;
        var regExpSymbol = /[~`!@#$%^&*><}{)(_;:"'/=?.+,-]+/;
        var userName = $('#user_name').val ();
    
        //Проверяем поле ввода имени на пустоту           
        if( (!userName) || (regExpNumber.test (userName)) || (regExpSymbol.test (userName)) ) {// если поле пустое
            $('#user_name').css ('border', 'red 1px solid');// устанавливаем рамку красного цвета
            error = 1;// определяем индекс ошибки
            $('#result').html ('Введённое имя содержит недопустимые символы!');                                             
        } else {
            $('#user_name').css ('border', 'green 1px solid');// устанавливаем рамку зелёного цвета
        }
    
        var regExpLetter = /[a-zA-Zа-яА-Я]+/;
        var userAge = $('#user_age').val ();
        //Проверяем поле ввода возраста на пустоту
        if( (!userAge) || (regExpLetter.test (userAge)) || (regExpSymbol.test (userAge)) ) {// если поле пустое
            $('#user_age').css ('border', 'red 1px solid');// устанавливаем рамку красного цвета
            error = 2;// определяем индекс ошибки
            $('#result').html ('Введённый возраст содержит недопустимые символы!');      
                                                   
        } else {
            $('#user_age').css ('border', 'green 1px solid');// устанавливаем рамку зелёного цвета
        }

        //Если не было ошибок, задействуем AJAX
        if (!error) {
            sendAjaxForm();
        }
    });
});


function sendAjaxForm () {
        $.ajax ({
            // Имя обработчика
            url: 'addUser',
            //Метод отправки
            type: 'POST',
            //Формат данных
            dataType: 'json',
            data: $('#formAjax').serialize (),
            //Есть ответ от обработчика
            success: function (response) {
                //result = $.parseJSON (response);
                $('#result').html ('Имя: '+response['name']
                    +' Возраст: '+response['age']+' '+response['msg']);
            },
            //Нет ответа от обработчика
            error: function (response) {
                $('#result').html ('Ответ от сервера не был получен!');
            }
         });         
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