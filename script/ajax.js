
/*$("#add_user_btn").click(function(){
	//sendAjaxForm();
	$("#result").html('waiting...');
});

function add() {
    alert ('Yo');
}
*/
function sendAjaxForm() {
    $.ajax({
        // Имя обработчика
        url: 'addUser',
        //Метод отправки
        type: 'POST',
        //Формат данных
        dataType: 'html',
        data: $('#form_ajax').serialize(),
        //Есть ответ от обработчика
        success: function(response) {
        	result = $.parseJSON(response);
        	$('#result').html('Имя: '+result.name+' Возраст: '+result.age+' '+result.msg);
        },
        //Нет ответа от обработчика
    	error: function(response) {
            $('#result').html('Ответ от сервера не был получен!');
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
