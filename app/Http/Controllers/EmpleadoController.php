<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //
        $datos['users']=User::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado = request()->all();

        $usuarios=new User;
        $usuarios->name=$request->get('name');
        $usuarios->email=$request->get('email');
        $usuarios->password=bcrypt($request->get('password'));
        $usuarios->save();
        return Redirect::to('empleado');


        //  $datosEmpleado=request()->except('_token');

        //  if($request->hasFile('Foto')) {
        // $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        // }
 
        // User::insert($datosEmpleado);

        //  //return response()->json($datosEmpleado);
        //  return redirect('empleado')->with('mensaje','Empleado agregado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado=User::findOrFail($id);
        //dd($empleado);
        return view('empleado.edit',["empleado"=>$empleado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $usuarios=User::findOrFail($id);
    // $datosEmpleado=request()->except('_token','_method');
        $usuarios->name=$request->get('name');
        $usuarios->email=$request->get('email');
        $usuarios->update();
        return Redirect::to('empleado');

    //    if($request->hasFile('Foto')) {
    //     $empleado=User::findOrFail($id);

    //     Storage::delete('public/'.$empleado->Foto);

    //     $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
    //     }





    //     User::where('id','=',$id)->update($datosEmpleado);
    //     $empleado=User::findOrFail($id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    $empleado = User::findOrFail($id);

    // Elimina el empleado
    $empleado->delete();

    // Redirecciona con un mensaje
    return redirect('/empleado')->with('mensaje','Empleado eliminado correctamente');

  
    }
}
