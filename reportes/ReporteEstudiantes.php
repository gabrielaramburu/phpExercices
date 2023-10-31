<?php
require_once dirname(dirname(__FILE__)) . '/vendor/koolreport/core/autoload.php';
require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \koolreport\processes\Sort;
use \koolreport\processes\Limit;
use \koolreport\KoolReport;

class ReporteEstudiantes extends KoolReport
{
    public function settings()
    {
        return array(
            "dataSources"=>array(
                "sales"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=db_sales",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                )
            )
        );
    }

    public function setup()
    {
        $this->src('estudiantes')
        ->query("select id, nombre, apellido, fechaNac, email  from estudiantes")
        ->pipe(new Sort(array(
            "id"=>"desc"
        )))
        ->pipe(new Limit(array(10)))
        ->pipe($this->dataStore('reporteEstudiantes'));
    }
}
