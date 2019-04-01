<?php
    class formController extends controller {
        function indexAction () {
            //Запускаем сессию для доступа к введенным ранее данным
            //session_start ();
            //Получаем список городов
            $this->data = $this->model->getCities ();
            //$this->createPage ('view_form_template.html');
            $this->generatePageViaTwig ('AddUser', _('Добавление пользователя'), 'Form');
        }
    }
?>