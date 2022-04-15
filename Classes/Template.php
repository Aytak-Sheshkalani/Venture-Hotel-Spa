<?php
include 'includes/Database.php';
class Template
{
    function __construct(){
        $this->dbc = new dbConnect();
    }
    function start_template(){
        ob_start();
    }
    function finish_template(){
        $content = ob_get_contents();
        ob_end_clean();
        include 'includes/main_template.php';
    }
}
