<?php

require_once "app/Http/Controllers/HomeController.php";
require_once "resources/views/dash/dashboard.modelo.php";

class AjaxDashboard{
    public function getDatosDashboard(){

        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }
}   

$datos = new AjaxDashboard();
$datos -> getDatosDashboard();