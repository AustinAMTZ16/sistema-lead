<?php
    class Connection extends Mysqli {
        function __construct() {
            parent::__construct('45.89.204.4', 'u115254492_rootdck', 'N4v[uGo7?', 'u115254492_apidck');
            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexión exítosa a la DB' : die('Error al conectarse a la BD');
        }//end __construct
    }//end class Connection
?>