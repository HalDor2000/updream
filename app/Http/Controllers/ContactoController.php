<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre'   => 'required',
            'telefono' => 'required',
            'email'    => 'required|email',
            'mensaje'  => 'required',
        ]);

        Mail::raw(
            "Nombre: {$request->nombre}\n\n" .
            "Telefono: {$request->telefono}\n\n" .
            "Email: {$request->email}\n\n" .
            "Mensaje:\n{$request->mensaje}",
            function ($message) {
                $message->to('haldor2000@gmail.com')
                        ->subject('Nuevo contacto desde Up Dream');
            }
        );

        return back()->with('success', 'Mensaje enviado correctamente');
    }
}