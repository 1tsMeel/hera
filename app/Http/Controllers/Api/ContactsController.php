<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMailable;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('app.contacts.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'phone' => 'required|max:15',
            'msg' => 'required|max:255',
        ], [], [
            'name' => 'nombre',
            'email' => 'correo',
            'phone' => 'teléfono',
            'msg' => 'mensaje',
        ]);

        Message::create($request->all());
        Mail::to('orgonlan@outlook.com')
            ->send(new ContactMailable($request->all()));

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien!',
            'text' => 'Mensaje enviado correctamente.'
        ]);

        return redirect()->route('contacts.index');
    }
}
