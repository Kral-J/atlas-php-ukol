<?php
    class Menu {
        private $name;
        public $items = array();
        
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function addMenuItem($item) {
            if(is_array($item)) {
                foreach($item as $a) {
                    array_push($this->items, $a);
                }
            }
            array_push($this->items, $item);
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function display() {
            $menu = '<nav name="' .$this->getName(). '"><ul>';
            foreach($this->items as $item) {
                $menu .= '<li><a href="index.php">' .$item->getName(). '</a></li>';
                $menu .= '<ul>'; 
                foreach($item->subItems as $subItem) {
                    if($subItem instanceof MenuItem) {
                        $menu .= '<li><a href="index.php">' .$subItem->getName(). '</a></li>';
                        $menu .= '<ul>';
                        foreach($subItem->subItems as $si) {
                            $menu .= '<li><a href="index.php">' .$si. '</a></li>'; 
                        }
                        $menu .= '</ul>';    
                    }
                    else $menu .= '<li><a href="index.php">' .$subItem. '</a></li>';    
                }
                $menu .= '</ul>';
            }
            $menu .= '</ul></nav>';
            
            return $menu;    
        } 
    }
?>