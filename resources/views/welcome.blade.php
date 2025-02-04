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
{{-- <x-alert type="danger">
   <x-slot name="title">
    Heading goes here
   </x-slot>
    <p class="mb-0">Whenever you need  dfg dldr if oef </p>
</x-alert> --}}

{{-- short cut of x-slot --}}
{{-- <x-alert type="danger">
    <x-slot:title>
     Heading goes here
    </x-slot>
     <p class="mb-0">Whenever you need  dfg dldr if oef </p>
 </x-alert> --}}

 {{-- link under slot title or paragrap --}}
 {{-- <x-alert type="danger">
    <x-slot:title>
     Heading goes here
     {{$component->link("just Testing","https://www.facebook.com")}}
    </x-slot>
     <p class="mb-0">Whenever you need  dfg.
        {{$component->link("just Testing","https://www.facebook.com")}}
     </p>
 </x-alert> --}}


 {{-- add class in title --}}
 <x-alert type="danger">
    <x-slot:title class="font-bold">
     Heading goes here
     {{$component->link("just Testing","https://www.facebook.com")}}
    </x-slot>
     <p class="mb-0">Whenever you need  dfg.</p>
 </x-alert>
</body>
</html>


</body>
</html>
