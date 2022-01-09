@extends('plantilla')
@section('content')
    <?php
    $etiquetas = ['red' => 'online', 'blue' => 'internet', 'green' => 'education'];
    $subtip = 'A comprehensive guide about online education. -Perfil';
    ?>
    <x-dynamic-component component="nav1">
    </x-dynamic-component>
    <div class="container mx-auto mt-5 px-80">
        <x-alert class="bg-blue-500" color="blue" >
            <x-slot name="title">
                Perfil
            </x-slot>
            <x-slot name="content">
                Bienvenido a la vista Profile....
            </x-slot>

        </x-alert>

        <x-form margin="mb-5" color="blue">
            <x-slot name="header">
                Card number - perfil
            </x-slot>
            <x-slot name="content">
                Expire date - perfil
            </x-slot>
        </x-form>
        <x-card :subtitulo="$subtip" :tags="$etiquetas" color="blue" class="border-2 border-blue-600 border-double border-4 border-light-blue-500">
            Perfil
            <x-slot name="contenido">
                Non sint ullamco deserunt adipisicing est non ut sint. Amet laboris sit enim sunt dolor occaecat id
                anim. Commodo ullamco veniam elit enim excepteur laborum in pariatur sunt duis ullamco culpa elit sint.
                Ea cupidatat ipsum aliquip non nisi ut mollit ea pariatur eiusmod ex mollit.
            </x-slot>
        </x-card>
    </div>
@endsection