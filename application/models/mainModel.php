<?php
    class mainModel extends model {
        
        //Запрашиваем всех пользователей (имя, возраст и город) в БД
        public function selectMain () {
            $result = $this->selectArray ('SELECT name_user, age_user, name_city FROM users 
                JOIN cities ON users.id_city = cities.id_city');
            return $result;
        }
        
    }
?>