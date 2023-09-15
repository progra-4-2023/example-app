<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;
class ContactoController extends BaseController
{
    public function index()
    {
        return view('mis-views.contacto',
            ['name'=>'Dayle']
        );
    }
    public function send(Request $request)
    {
        // Validar y enviar el correo
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);
        
        //enviar mensaje
        $input = $request->input();
        Mail::send(new ContactoRecibido($input));

        
        return redirect(route('contactado'), 302);

    }
    public function contacted(){
        return view('mis-views.contactado');
    }
}
