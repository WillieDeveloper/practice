<?php
    class model {
    //Идентификатор БД
    protected $_dbLink;
    
    //Блок констант
    const DB_USER = "root";
    const DB_PASS = '';
    const DB_HOST = 'localhost';
    const DB_NAME = 'test';
    
    //В конструкторе сразу создаём подключение к БД
    public function __construct () {
        $this->_dbLink = $this->dbConnect ();
    }
    
    //Подключаемся к БД либо создаём новую, если не обнаружена
    protected function dbConnect () {
        //Проверка на доступность БД
        if (!mysqli_connect (self::DB_HOST, self::DB_USER, self::DB_PASS) ) {
            return false;
        }
        
        //Получаем идентификатор
        $_dbLink = mysqli_connect (self::DB_HOST, self::DB_USER, self::DB_PASS);

        //Если такой БД нет, то создаём
        if(!mysqli_select_db ($_dbLink, self::DB_NAME) ) {
            if ( !mysqli_query ($_dbLink, 'CREATE DATABASE ' . self::DB_NAME) ) {
                return false;
            }
        }

        return $_dbLink;
    }

    //Заполняем таблицу городами из файла
    protected function getCitiesFromFile ($citiesFile) {   
        
        //Проверяем наличие файла
        if (!file_exists ($citiesFile) ) {
            return false;
        }
        
        //Получаем его содержимое
        $fileContent = file_get_contents ($citiesFile);

        //Если не удалось, то возвращаем Фолс
        if (!$fileContent) {
            return false;   
        }

        //Разбиваем содержимое и помещаем в массив
        $citiesArray = explode ('\\n', $fileContent);
        
        //Формируем запрос к БД
        $insertCitiesQuery = 'INSERT INTO cities (id_city, name_city) VALUE ';

        for ($i = 0; $i < count ($citiesArray); $i++) {
            $insertCitiesQuery = $insertCitiesQuery.'(NULL, ' . $citiesArray[$i] . '), ';   
            
            if ($i == (count ($citiesArray) - 1) ) {
                $insertCitiesQuery = $insertCitiesQuery. '(NULL, ' . $citiesArray[$i] . ')'; 
            }
        }

        //Проверяем успешность обращения к БД
        if(!mysqli_query ($this->_dbLink, $insertCitiesQuery) ) {
            unset ($insertCitiesQuery);
            return false;
        }

        //Чистим память от здоровенного запроса
        unset ($insertCitiesQuery);
        return true;
    }

    // Проверка таблицы на существование
    protected function showTable ($dbName, $table) {
        if (!mysqli_query ($this->_dbLink, 'SHOW TABLES FROM ' . $dbName . ' LIKE ' . $table) ) {
            return false;
        }
        return true;
    }

    //Получение неассоциативного массива данных из БД
    protected function selectArray ($query) {
        
        //Проверяем идентификатор
        if (!$this->_dbLink) {
            return false;
        }

        //Запрашиваем данные
        $result = mysqli_query ($this->_dbLink, $query);
        if (!$result) {
            return false;
        }
        
        //Формируем массив 
        $i = 0;
        while ($resultNotice = mysqli_fetch_row ($result) ) {
            for ($j = 0; $j < count ($resultNotice); $j++) {
                $resultArray[$i][$j] = $resultNotice[$j];
            }
            $i++;
        }
        return $resultArray;
    }
    }
?>