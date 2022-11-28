<?php

class Perosna{

  protected $DNI;
  protected $nombre;
  protected $apellido;
  

  public function __construct($DNI, $nombre,$apellido
  )
  {
      $this->DNI = $DNI;
      $this->nombre=$nombre;
      $this->apellido=$apellido;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setNombre(){
    return $this->nombre=nombre;
  }
  public function getApellido(){
    return $this->apellido=apellido;
  }

}


/*

class Empleado {
    constructor(nombre, salario, tareas, jefe) {
      this.nombre = nombre;
      this.salario = salario;
      this.tareas = tareas;
      this.jefe = jefe || false;
    }
  
    addTarea(tarea, prioridad) {
      this.tareas.push({tarea, prioridad});
    }
  
    mostrarTareas() {
      return this.tareas;
    }
  }

*/

  
class Empresa{

  private $nombre_empresa;
  private $representante_legal;
  private $CIF;
  private $dirreccion;
  private $localidad;
  private $codigopostal;
  private $pais;
  private $num_empleados;

  public function __construct($nombre_empresa, $representante_legal, $CIF,$dirreccion, $localidad, $codigopostal,$pais,$num_empleados){
      $this->nombre_empresa = $nombre_empresa;    
      $this->representante_legal = $representante_legal;
      $this->CIF= $CIF;
      $this->dirreccion = $dirreccion;    
      $this->localidad = $localidad;    
      $this->codigopostal = $codigopostal;
      $this->pais= $pais;
      $this->num_empleados = $num_empleados;
     

  }

}


  
  const empleado = new Empleado('Daniel Morales', 1000, [], false);
   

  
  // Sin tareas previas, debido a que el contructor recibió []
  console.log('Tareas iniciales: ', empleado.mostrarTareas());
  
  // Agreg  ar una nueva tarea
  empleado.addTarea('Tarea 1', 1);
  
  // Mostrar las tareas
  console.log('Tareas agregadas', empleado.mostrarTareas());
  
  // Agregar más tareas
  for(let i = 2; i <= 5; i++) {
    empleado.addTarea(`Tarea ${i}`, 1);
  }
  
  // Mostrar las tareas
  console.log('Tareas agregadas', empleado.mostrarTareas());








?>