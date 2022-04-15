<?php
include 'Classes/Database.php';
class Template
{
    private $title;
    private $header;
    private $footer;
    function __construct(){
        $this->dbc = new dbConnect();
    }
    function initialize_page($title,$header,$footer){
        $this->title = $title;
        $this->header = $header;
        $this->footer = $footer;
    }
    function start_template(){
        ob_start();
    }
    function finish_template(){
        $content = ob_get_contents();
        $title = $this->title;
        $header = $this->header;
        $footer = $this->footer;
        ob_end_clean();
        include 'includes/main_template.php';
    }
}
