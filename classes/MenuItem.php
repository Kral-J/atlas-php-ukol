<?php
    class MenuItem {
        private $name;
        public $subItems = array();
        
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function addSubItem($subItem) {
            if(is_array($subItem)) {
                foreach($subItem as $a) {
                    array_push($this->subItems, $a);
                }
            }
            else array_push($this->subItems, $subItem);
        }
        
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
    }
?>