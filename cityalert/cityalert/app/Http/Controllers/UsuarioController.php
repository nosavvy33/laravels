<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Reniec;
use DB;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario/ver',compact('usuarios'));

       // return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($dni,$celular,$imei)
    {

      //  $dni = $_POST['dni'];
      //  $celular = $_POST['celular'];

$ser = "localhost";
$user = "root";
$pass = "feelingshitty";
$bd = "cityalert";
//echo $correo;
$conexion = mysqli_connect($ser, $user, $pass, $bd)
    or die("Error en la conexion!");

    $query = "SELECT * FROM reniec WHERE dni = ".$dni." AND celular = ".$celular;

    $resultado=mysqli_query($conexion,$query);
    //$resultado->execute();
    //$fila = $resultado->fetchAll(PDO::FETCH_ASSOC);
    echo mysqli_num_rows($resultado);
    if(mysqli_num_rows($resultado) == 1){
        /*
          $usuario = new Usuario;
        $usuario->dni = $dni;
        $usuario->celular= $celular;
        $datos = new Reniec;
        $datos = Reniec::find($dni);
        $usuario->nombres = $datos->nombres;
        $usuario->paterno = $datos->paterno;
        $usuario->materno = $datos->materno;
        $usuario->save();*/
        $datos = new Reniec;
        $query2 = "SELECT * FROM reniec WHERE dni = ".$dni;
        $datos = mysqli_query($conexion,$query2);
        while($row = $datos->fetch_row()){
            $query3="INSERT INTO usuario (dni, celular, nombres, paterno, materno,imei) VALUES (".$row[1].",".$row[2].",'".$row[3]."','".$row[4]."','".$row[5]."',".$imei.")";
            mysqli_query($conexion,$query3);
        }
        echo "SE GUARDÓ NUEVO USUARIO";
    }else{
           echo "NO EXISTEA TAL MATCH";

    }
    
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        //return redirect('/usuario/ver');
    }
}
