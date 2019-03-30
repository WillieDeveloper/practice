<?php
    class formModel extends model {
        
        //Запрашивваем список городов
        public function getCities () {
            $result = $this->selectArray ('SELECT * FROM cities');
            return $result;
        }
    }
?>