<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validar los datos
        $data = $request->validate([
            'name'  => 'required|min:3|max:100',
            'email'   => 'required|email',
            'subject'  => 'nullable|max:150',
            'message' => 'required|min:10',
        ]);

        // 2. Guardar en la base de datos
        ContactMessage::create($data);

        // 3. Responder al usuario
        return back()->with('success', '¡Gracias ' . $data['name'] . '! Mensaje recibido, te contactaremos pronto.');
    }
}
