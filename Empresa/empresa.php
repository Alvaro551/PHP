
<?php

class persona{
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $edad;
    public $NIF;


    public function __construct($nombre, $apellido1, $apellido2, $edad, $NIF)

    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->edad = $edad;
        $this->NIF = $NIF;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
    public function __toString()
    {
        return "Nombre: " . $this->nombre . " Primer apellido: " . $this->apellido1 . " Segundo apellido: " . $this->apellido2 . " Edad: " . $this->edad . " NIF: " . $this->NIF;
    }
}


  
  class Empleado extends Persona
  {
  
      private $sueldo;
      private $antiguedad;
  
  
      public function __construct($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad)
  
      {
          parent::__construct($nombre, $apellido1, $apellido2, $edad, $NIF);
          $this->sueldo = $sueldo;
          $this->antiguedad = $antiguedad;
      }
  
      public function __toString()
      {
          return "Nombre: " . $this->getNombre() . " | Primer apellido: " . $this->apellido1 . " | Segundo apellido: " . $this->apellido2 . " | Edad: " . $this->getEdad() . " | NIF: " . $this->NIF . " | Sueldo: " . $this->sueldo . " | Antigüedad: " . $this->antiguedad;
      }
  
      public function getSueldo()
      {
          return $this->sueldo;
      }
  
      public function setSueldo($sueldo)
      {
          $this->sueldo = $sueldo;
  
          return $this;
      }
  
      public function getAntiguedad()
      {
          return $this->antiguedad;
      }
  
      public function setAntiguedad($antiguedad)
      {
          $this->antiguedad = $antiguedad;
  
          return $this;
         
      }
       /*
      public function aumentarSueldoPorcentaje($aumento)
      {
          $this->setSueldo($this->sueldo * (1 + ($aumento / 100)));
      }
  
      public function aumentarAntiguedad($anosAAumentar)
      {
          $this->setAntiguedad(++$anosAAumentar);
      }
  
      public function impuestos()
      {
          $mensaje = "";
          if ($this->sueldo > 3000) {
              $mensaje = "Este empleado debe pagar impuestos.";
          } else {
              $mensaje = "Este empleado no debe pagar impuestos.";
          }
          echo "$mensaje";
      }
  }
  
  $empleado1 = new Empleado("Álvaro", "Medina", "Vena", 19, "12345678A", 2500, 2);
  echo $empleado1 . "<br/>";
  $empleado1->aumentarSueldoPorcentaje(10);
  $empleado1->aumentarAntiguedad(5);
  echo $empleado1 . "<br/>";
  echo $empleado1->impuestos();

  */


  }
  
  
class Empresa extends  Empleado{

  public $clientes = array();
  public $nombre_empresa;
  public $representante_legal;
  public $CIF;
  public $dirreccion;
  public $localidad;
  public $codigopostal;
  public $pais;
 

  public function __construct($nombre_empresa, $representante_legal, $CIF,$dirreccion, $localidad, $codigopostal,$pais){
      $this->nombre_empresa = $nombre_empresa;    
      $this->representante_legal = $representante_legal;
      $this->CIF= $CIF;
      $this->dirreccion = $dirreccion;    
      $this->localidad = $localidad;    
      $this->codigopostal = $codigopostal;
      $this->pais= $pais;
     
     

  }


  public function getClientes()
  {
      return $this->clientes;
  }

  public function getNombreEmpresa()
  {
      return $this->nombre_empresa;
  }

  public function getRepresentante_legal()
  {
      return $this->representante_legal;
  }

  public function getCIF()
  {
      return $this->CIF;
  }

  public function getDireccion()
  {
      return $this->direccion;
  }

  public function getlocalidad()
  {
      return $this->localidad;
  }

  public function getCodigo_postal()
  {
      return $this->codigo_postal;
  }

  public function __toString()
  {
      return "<b>Nombre:</b> " . $this->nombre_empresa . "<br><b>CIF:</b> " . $this->CIF
          . "<br><b>Representante legal:</b> " . $this->representante_legal . "<br><b>Direccion:</b> " . $this->direccion
          . "<br><b>Localidad:</b> " . $this->localidad . "<br><b>Codigo Postal:</b> " . $this->codigo_postal;
  }



  public function anade_empleado($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad)
  {
      $newCliente = new Empleado($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad);
      array_push($this->clientes, $newCliente);
  }


  public function elimina_empleado($NIF)
  {
      foreach ($this->clientes as $key => $value) {
          foreach ($value as $key1) {
              if ($key1 === $NIF) {
                  unset($this->clientes[$key]);
              }
          }
      }
  }
  public function visualiza_empleados()
  {
      echo "<b><u>Lista de Empleados</u>:</b>" . "<br>";
      array_multisort($this->clientes);
      foreach ($this->clientes as $key => $value) {
          echo $key . ": " . $value;
          echo "<br>";
      }
  }




public function mas_antiguos(){

$antiguedades = array();

foreach($this->clientes as $key => $value){
  $antiguedades[$key] = $value->getAntiguedad();
}

asort($antiguedades);
end($antiguedades);
echo $this->clientes[key($antiguedades)];
}
/*
      echo "<br><b><u>Empleado más antiguo</u>: <br></b>";
      $arrayAnt = array();
      foreach ($this->clientes as $key => $value) {
          foreach ($value as $key1 => $value1) {
              if ($key1 === "antiguedad") {
                  array_push($arrayAnt, $value1);
              }
          }
      }
      foreach ($this->clientes as $key => $value) {
          foreach ($value as $key1 => $value1) {
              if ($key1 === "antiguedad" and $value1 === max($arrayAnt)) {
                  echo $value."<br>";
              }
          }
      }
      */
  


  public function sueldoMedio()
  {
      $sueldoMedio = 0;

      foreach ($this->clientes as $key => $value) {
          $sueldoMedio += $value->getSueldo();
      }
      $sueldoMedio = $sueldoMedio / count($this->clientes);
      echo "<br><b>Sueldo Medio:</b> " . $sueldoMedio . "<br>";
  }

  public function antiguedadMedia()
  {
      $antMedia = 0;

      foreach ($this->clientes as $key => $value) {
          $antMedia += $value->getAntiguedad();
      }
      $antMedia = $antMedia / count($this->clientes);
      echo "<br><b>Antiguedad Media:</b> " . $antMedia . "<br>";
  }

  public function paganImpuestos_extras(){
      echo "<br><b><u>Empleados que cobran más de 3000€</u>: <br></b>";
      foreach ($this->clientes as $key => $value) {
              if ($value->getSueldo() >= 3000) {
                  echo $value."<br>";
              }
      }
  


      echo "<br><b><u>Empleado más antiguo</u>: <br></b>";
      $arrayAnt = array();
      foreach ($this->clientes as $key => $value) {
          foreach ($value as $key1 => $value1) {
              if ($key1 === "antiguedad") {
                  array_push($arrayAnt, $value1);
              }
          }
      }
      foreach ($this->clientes as $key => $value) {
          foreach ($value as $key1 => $value1) {
              if ($key1 === "antiguedad" and $value1 === max($arrayAnt)) {
                  echo $value."<br>";
              }
          }
      }
      
  


    }

}

$empresa = new Empresa("Alvaro S.A", "Mikel Jobs", "0115656", "Valley", "Murcia", "6054","España" , );
echo $empresa . "<br>" . "<br>";

$empresa->anade_empleado("Alvaro", "Medina", "Martinez", "18", "03", "1100", "0.5");
$empresa->anade_empleado("Pilar", "Vena", "Ruiz", "20", "031", "1750", "0.5");
$empresa->anade_empleado("Jose", "Muñoz", "Cheng", "19", "021", "150", "1.5");
$empresa->visualiza_empleados();
$empresa->sueldoMedio();
$empresa->antiguedadMedia();
$empresa->mas_antiguos();
$empresa->paganImpuestos_extras();






    
?>