# Integrar DataTable a una plantilla de AdminLTE

Haremos una integracon rapida via CDN

## Ingreso de la plantilla

Vamos a la [documentacion de adminLTE](https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Usage) e integramos alguno de las plantilla que extienden de la plantilla general:

```php
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    // Aca va el nombre de la plantilla
@stop

@section('content')
    // Aca va la tabla
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
```

Actualizamos el `content_header` y el `content` en las sections correspondientes.

## Ingresar los css para el estilado general.

Usaremos [Bootstrap 5](https://getbootstrap.com/docs/5.3/getting-started/introduction/). Para visualizacion rapidar usar los CDN. Van dentro de la `@section('css')`.

```html
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
```

## Ingresar css y js especificos de la datatable

Vamos a la documentación de datatable al [ejemplo concreto de bootstrap5](https://datatables.net/examples/styling/bootstrap5.html).

Actualizamos los css. Van dentro de la `@section('css')`.

```html
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
```

Luego actualizamos los js. Van dentro de la `@section('js')`.

```html
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
```

## Asignar class e id de la tabla

Reemplazar la etiqueta inicial de table para asociar css e id. Paraeste ejemplo se ha usado el id de ejemplo `testtable`.

```html
    <table id="testtable" class="table table-striped" style="width:100%">
```

# Inicializar el plugin

Copiar el siguiente codigo dentro de la `@section('js')`.

```html
    <script>
        new DataTable('#testtable');
    </script>
```

