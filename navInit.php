<?php
    require './classes/Menu.php';
    require './classes/MenuItem.php';
    
    $nav = new Menu('test');
        
    $nav->addMenuItem(new MenuItem('Firma'));
    $nav->items[0]->addSubItem(array('Hledání','Přehled'));
        
    $nav->addMenuItem(new MenuItem('Statistiky'));
    $nav->items[1]->addSubItem(array('První statistika','Druhá statistika'));
        
    $nav->addMenuItem(new MenuItem('Nástroje'));
    $nav->items[2]->addSubItem(new MenuItem('Mapy'));
    $nav->items[2]->addSubItem('Zálohování');
    
    $nav->items[2]->subItems[0]->addSubItem(array('Heatmapa','Klienti'));
    
    echo $nav->display();
?>