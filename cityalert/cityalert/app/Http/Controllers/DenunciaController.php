<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Denuncia;
class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Denuncia::all();
        //return view('denuncia/ver',compact('datos'));
        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacion = $_POST['ubicacion'];
        $categoria = $_POST['categoria'];
        $subcategoria = $_POST['subcategoria'];
        $foto = $_POST['foto'];
        $imei = $_POST['imei'];
$ser = "localhost";
$user = "root";
$pass = "feelingshitty";
$bd = "cityalert";
//echo $correo;
$conexion = mysqli_connect($ser, $user, $pass, $bd);

$insertar="INSERT INTO denuncia (ubicacion,categoria,subcategoria,foto,imei) VALUES ('".$ubicacion.",'".$categoria.",'".$subcategoria."','".$foto."',".$imei.")";

$resultado=mysqli_query($conexion,$insertar);



mysqli_close($conexion);
echo "SUCCESSFUL COMMIT";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
