<?php
    class addUserModel extends model {
        
        //Добавление введённых данных
        public function addData ($userName, $userAge, $cityID) {
            
            //Получаем id города из таблицы cities для вставки в users
            $answer = _('Пользователь успешно добавлен!');
            $match = mysqli_fetch_assoc (mysqli_query ($this->_dbLink, 'SELECT id_city FROM cities 
                WHERE id_city = ' . $cityID) );
            
            //Если в БД совпадений нет...
            if (!$match) {
                $answer = _('Совпадений по городу не найдено!');
                return $answer;
            }
            
            //Попытка добавления пользователя в БД
            if (!mysqli_query ($this->_dbLink, 'INSERT INTO users (id_user, name_user, age_user, id_city) 
                VALUE (NULL, \'' . $userName . '\', \'' . $userAge . '\', \'' . $cityID . '\')') ) {
                $answer = _('Не удалось добавить пользователя!');
                return $answer;
            }
            
            return $answer;
        }
    }
?>