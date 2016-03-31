<?php
abstract class C_Controller {

    protected  function IsGet() {
        return $_SERVER["REQUEST_METHOD"] == "GET";
    }

    protected  function IsPost() {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }

    protected function Template($file, $params = array()) {
        foreach($params as $k => $v) {
            $$k = $v;
        }

        ob_start();
        include $file;
        return ob_get_clean();
    }

}
?>