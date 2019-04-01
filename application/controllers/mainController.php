<?php
    class mainController extends controller {
        function indexAction () {
            //Обращаемся к функции модели для получения данных
            $this->data = $this->model->selectMain ();
            //$this->createPage ('view_main_template.html');
            $this->generatePageViaTwig ('Users&Cities', _('Список пользователей'), 'Main');
        }
    }
?>