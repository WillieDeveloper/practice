<?php
    class addUserController extends controller {
        function indexAction () {

            //Проверяем ввод на корректность
            if ( (preg_match ('/[0-9_+=-?*&^%$#@!:;"><,.{}\[\]\']+/', $_POST['user_name']) || ($_POST['user_name'] == '') ) ) {
                $this->data = 'Вводимое имя должно состоять только из букв латиницы или кирилицы!';
            }
            if (!(preg_match ("|^[\d]{2}$|", $_POST['user_age']) || ($_POST['user_age'] == '100') ) ) {
                $this->data = 'Неверно указан возраст! Можно ввести значение от 10 до 100!';
            }
            
            //Если данные корректны, вызываем функцию модели для добавления данных в БД
            if (!$this->data) {
                $this->data = $this->model->addData ($_POST['user_name'], $_POST['user_age'], $_POST['user_city']);
            }

            //Отправляем ответ Ajax`у
            $responseToAjax = array(
                'name' => $_POST['user_name'],
                'age' => $_POST['user_age'],
                'msg' => $this->data
            ); 
        
            // Переводим массив в JSON
            echo json_encode($responseToAjax);

            //$this->createPage ('view_msg_page_template.html');
            //Отрисовываем сообщение
            //$this->generatePageViaTwig ('SysMsg', 'Системное сообщение', 'Msg');
        }
    }
?>