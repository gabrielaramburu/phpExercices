<?php
	
require('./fpdf186/fpdf.php');
class listadoEstudiantes extends FPDF {
  
    

    // Cabezal del reporte
    function Header() {
          
        // Tipo de letra, B es bold
        $this->SetFont('Times','B',14);
          
        // Centro
        $this->Cell(276,5, 'Listado de estudiantes');

        // Cambio color
        $this->SetTextColor(0,0,255);

        // Salto de linea
        $this->Ln(20);
          
        // Titulo
        $this->Cell(200,10,'Estudiantes',0,0,'C');
          
        $this->Ln(20);
    }
  
    // Pie de página
    function Footer() {
          
        // Position at 1.5 cm from bottom
        $this->SetY(-25);
          
        // cambio tipo de letra para el pie
        $this->SetFont('Arial','I',8);
          
        // numero de pagina
        $this->Cell(0,10,'Página ' . 
            $this->PageNo() . '/{nb}',0,0,'C');
    }
    // header Attributes
    function headerAttributes() {
        $this->SetFont('Times','B', 10);
        $this->Cell(30,10,'Nombre',1,0,'C');
        $this->Cell(45,10,'Apellido',1,0,'C');
        $this->Cell(60,10,'Direccion',1,0,'C');
        $this->Cell(40,10,'email',1,0,'C');
        $this->Ln();
    }

    function datos() {
        $personas = array ('Juan', 'Luis','Maria','Andrea');
        foreach ($personas as $persona) {
            $this->Cell(30,10,$persona,1,0,'C');
            $this->Ln();
        }
    }
}
?>