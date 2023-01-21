<?php
class Render {
    public function view($view_filename, $data = NULL){
        if(file_exists("app/views/{$view_filename}.php")){
            include_once("app/views/{$view_filename}.php");
        }
    }
}
?>
