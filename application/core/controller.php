<?php
    class controller {
        protected $model;
        protected $data;
        protected $twig;

        public function __construct ($fileName = 'main') {
            //Подключаем базовую модель, обнуляем данные
            require_once SITE_PATH . '/application/core/model.php';   
            $this->data = NULL;
            //Поключаем нужную модель, создаем её объект
            $modelName = $fileName . 'Model';

            // подцепляем файл с классом контроллера
			$modelPath = SITE_PATH . '/application/models/' . $modelName . '.php';
			if (file_exists ($modelPath) ) {
				require_once $modelPath;
			} else {
				echo "Model not found!";
            }

            $this->model = new $modelName ();
        }

        //Создание старницы через подключение HTML с PHP вставками
        protected function createPage ($template) {
            $data = $this->data;
            include TEMPLATE_PATH. '/' .$template;
        }

        //Создание страницы с помощью TWIG 
        protected function generatePageViaTwig ($title, $header, $pageName) {
            require_once 'lib/Twig/Autoloader.php';
            Twig_Autoloader::register ();
            
            //Подключение папки с шаблонами и задание параметров среды
            $loader = new Twig_Loader_Filesystem ('templates');
            $this->twig = new Twig_Environment ($loader, array ('cache' => 'compilation_cache', 
                'auto_reload' => true) );
            
            //Подключение и генерация содержимого нужного шаблона
            $template = $this->twig->loadTemplate('template' . $pageName .'.html');
            echo $template->render (array ('title' => $title, 'header' => $header, 
                'data' => $this->data) ); //'name' => $_SESSION['name'], 'age' => $_SESSION['age']
        }

        function indexAction () {
            
        }
    }
?>