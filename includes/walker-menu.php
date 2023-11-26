<?php


class Tuatara_Nav extends Walker_Nav_Menu{
    public function start_el (&$output, $item, $depth = 0, $args = array(), $id = 0){
        $output .= '<li class="nav-item px-4"> 
        <a class="nav-link" href="'.$item->url.'">'.$item->title;
    }
    public function end_el(&$output, $item, $depth = 0, $args = array()){
        $output .= '</a></li>';
    }
}


?>