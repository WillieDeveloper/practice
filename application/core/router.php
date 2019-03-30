<?php
    class router {
        
        static function start () {
			require_once SITE_PATH . '/application/core/controller.php';
			// контроллер и действие по умолчанию
		    $fileName = 'main';
		    $actionName = 'index';
		
		    $routes = explode ('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		    if (!empty ($routes[1]) ) {	
			    $fileName = $routes[1];
		    }
		
		// получаем имя экшена
		    if (!empty ($routes[2]) ) {
			    $actionName = $routes[2];
		    }

		// добавляем префиксы
		    $controllerName = $fileName . 'Controller';
			$actionName = $actionName . 'Action';
			
		// подцепляем файл с классом контроллера
			$controllerPath = SITE_PATH . '/application/controllers/' . $controllerName . '.php';
			if (file_exists ($controllerPath) ) {
				require_once $controllerPath;
			} else {
				echo "Controller not found!";
			}
		
		// создаем контроллер
		    $controller = new $controllerName ($fileName, $actionName);
			
			if(method_exists($controller, $actionName)){
			// вызываем действие контроллера
				$controller->$actionName();
			} else {
			// здесь также разумнее было бы кинуть исключение
				echo "Action not found!";
			}
	    }
    }
?>