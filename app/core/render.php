<?php
class Render {
    public function view($view_filename, $data = []){
        $data = (object) $data;
        if(file_exists("app/views/{$view_filename}.php")){
            include_once("app/views/{$view_filename}.php");
        }
    }
}
?>
