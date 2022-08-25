@component('mail::message')

<h2>Contacto desde la Web</h2>
<p>Mensaje enviado por: {{ $email }}</p>
<hr>
<p> {{ $message }} </p>
<hr>

@endcomponent