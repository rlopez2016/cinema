<?php 
namespace App\Http\Controllers;

use App\Prueba;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
  
    public function index()
    {
        return "hola desde el controllador";
    }
    public function nombre($nombre)
    {
        return "mi nombre es ".$nombre;
    }
}