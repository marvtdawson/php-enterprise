<?php
/**
 * Class Bootstrap
 */

class Bootstrap {
    private $controller, $action, $request;

    public function __construct($request) {
        $this->request = $request;
        if($this->request['controller'] == "") {
            $this->controller =  'home';
        } else  {
            $this->controller = $this->request['controller'];
        }

        if($this->request['action'] == "") {
            $this->request = "index";
        } else {
            $this->action = $this->request['action'];
        }
        echo $this->action;
    }

}