<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>descargar zip</title>

        </head>
    <body>

   

    <form  method="POST" action="{{ route('guardar' ) }}"  enctype="multipart/form-data">

         @csrf

         <input type="text" id="nombre" name="nombre" required>

         <input type="file" name="archivos" required>

         <button type="submit">Guardar</button>

    </form>

    </body>
</html>
