<?php
require_once 'Classes/Database.php';
class Attraction {
    public $attractions;
    function __construct() {
        $this->dbc = new dbConnect();
    }
    function get_attraction_info($attraction_id) {
        $query = "SELECT * FROM attractions WHERE attraction_id = ?";
        $result = $this->dbc->query($query,['s'=>$attraction_id]);
        $attraction_info = $result->fetch_assoc();
        return $attraction_info;
    }
    function fetch_all_attractions() {
        $query = "SELECT * FROM attractions";
        $this->attractions =  $this->dbc->query($query);
        return $this;
    }
    function get_attraction_count() {
        return count($this->attractions);
    }
}
?>