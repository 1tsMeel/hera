<x-mail::message>
# Nuevo mensaje

<x-mail::panel>
Nombre: {{ $data['name'] }}
</x-mail::panel>

<x-mail::panel>
Correo: {{ $data['email'] }}
</x-mail::panel>

<x-mail::panel>
Teléfono: {{ $data['phone'] }}
</x-mail::panel>

<x-mail::panel>
Mensaje: {{ $data['msg'] }}
</x-mail::panel>

</x-mail::message>
