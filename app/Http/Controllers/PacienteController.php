<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class PacienteController extends Controller
{
    //
    
    public function mostrarInformacionPacientes()
    {
        $pacientes = Paciente::all(); // Obtén todos los pacientes

        return view('paciente.informacion', ['pacientes' => $pacientes]);
    }


    public function crearPaciente()
    {
        // Lógica para mostrar el formulario de creación de paciente
        return view('paciente.crear');
    }

    public function consultarPaciente()
    {
        $pacientes = Paciente::all();
        $primerPaciente = $pacientes->first(); // Obtén el primer paciente (ajusta según tus necesidades)

        return view('paciente.informacion', ['pacientes' => $pacientes, 'paciente' => $primerPaciente]);
    }

    public function descargarPDF($id)
    {
        // Lógica para descargar datos en PDF
        $pacientes = Paciente::find($id);
        // Implementa la lógica para generar el PDF y descargarlo

        // Por ahora, simplemente redirigir a la página de información de pacientes
        return redirect()->route('consultar_paciente')->with('mensaje', 'PDF Descargado exitosamente');
    }
}