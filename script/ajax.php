<?php
    
if (isset($_POST["user_name"]) && isset($_POST["user_age"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["user_name"],
    	'age' => $_POST["user_age"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}
?>