<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestContact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(FormRequestContact $request)
    {
        // 1. Recoger los datos
        $data = $request->all();

        // 2. Guardar en la base de datos
        ContactMessage::create($data);

        // 3. Responder al usuario
        return back()->with('success', '¡Gracias ' . $data['name'] . '! Mensaje recibido, te contactaremos pronto.');
    }
}
