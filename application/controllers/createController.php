<?php
    class createController extends controller {
        function indexAction () {
            //Пробуем обратиться к функции создания таблиц и смотрим результат
            $result = $this->model->createTables ();
            if (!$result) {
                $this->data = _('Ошибка при создании БД! ');
            }
            else {
                $this->data = _('БД успешно создана! ');
            }
            //$this->createPage ('view_msg_page_template.html');
            //Отрисовываем сообщение
            $this->generatePageViaTwig ('SysMsg', _('Системное сообщение'), 'Msg');
        }
    }
?>