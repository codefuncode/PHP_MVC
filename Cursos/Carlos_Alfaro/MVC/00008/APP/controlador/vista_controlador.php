<?php

include "modelo/vista_modelo.php";

class vistaControlador extends vistaModelo
{

   public function carga_plantilla()
   {
      return include_once "vista/plantilla.php";
   }

   public function obtener_vistas_controlador()
   {
      if (isset($_GET['views'])) {

         $ruta = explode("/", $_GET['views']);

         $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);

      } else {
         $respuesta = "vista/00001.php";
      }
      include $respuesta;
   }
}
