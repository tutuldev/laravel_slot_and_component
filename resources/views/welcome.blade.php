<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
{{-- <x-alert/> --}}
@php
    $message = "this is just testing"
@endphp
{{-- <x-alert type="success" message="{{$message}}"/> --}}
{{-- <x-alert type="success" :message="$message"/> --}}
{{-- when attribute name and variable name is same  --}}
<x-alert type="success" :$message/>
<x-alert type="danger" id="firstAlert" class="m-4" role="flash"  message="This is error message alert."/>
<x-alert type="info" dismissable="true" message="This is info message alert."/>
<x-alert type="danger" dismissable="true" message="This is info message alert."/>
{{-- when no type   --}}
<x-alert message="This is info message alert."/>
{{-- when type not found then --}}
<x-alert type="warning"  message="This is error message alert."/>
</body>
</html>
