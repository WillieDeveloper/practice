<?php
    class createController extends controller {
        function indexAction () {
            //Пробуем обратиться к функции создания таблиц и смотрим результат
            $result = $this->model->createTables ();
            if (!$result) {
                $this->data = 'Ошибка при создании БД! ';
            }
            else {
                $this->data = 'БД успешно создана! ';
            }
            //$this->createPage ('view_msg_page_template.html');
            //Отрисовываем сообщение
            $this->generatePageViaTwig ('SysMsg', 'Системное сообщение', 'Msg');
        }
    }
?>