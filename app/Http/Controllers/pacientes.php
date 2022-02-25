<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class pacientes extends Controller
{
    public function SHOW1(Request $id)
    {
        $paciente = paciente::find($id);
        if(!is_null($paciente))
           return $paciente;
        else
           return response('No se encontró ningun paciente con ese Id', 404);
    }

    public function SHOW(Request $id)
    {
        $pacientes = paciente::all();
        if(!is_null($pacientes))
           return $pacientes;
        else
           return response('No se encontró ningun paciente', 404);
    }

    public function POST(Request $request)
    {
        $paciente = new paciente($request->all());
        $paciente->save();
        return 'Se ha registrado al paciente correctamente';
    }

    public function BORRAR(Request $id){
        $eliminar = paciente::findOrFail($id);
        if(!is_null($eliminar)){
            $eliminar->each->delete();
            return response('Se ha eliminado el paciente correctamente', 200);
        }
        else
        {
        return response ('No se encontró ningun paciente para eliminar', 402);
        }
    }
     
    public function EDITAR (Request $request){
        $paciente = paciente::find($request->id);
        if(!is_null($paciente)){
            $maestro->nombre = $request->nombre;
            $maestro->correo = $request->correo;
            $maestro->contraseña = $request->contraseña;
            $maestro->usuario = $request->usuario;
            $maestro->save();
            return response ('El paciente se ha modificado correctamente', 200);
        }
        else{
            return response('No se encontró ningun paciente con ese Id', 402);
        }
    }
}
