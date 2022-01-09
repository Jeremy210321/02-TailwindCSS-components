@extends('plantilla')
@section('content')
    <?php
    $etiquetas = ['red' => 'online', 'yellow' => 'internet', 'green' => 'education'];
    $subtih = 'A comprehensive guide about online education - Bienvenida';
    ?>
    <x-dynamic-component component="nav2">
    </x-dynamic-component>
    <div class="container mx-auto mt-5 px-80">
        <x-alert class="bg-green-500" color="green">
            <x-slot name="title">
                Bienvenida
            </x-slot>
            <x-slot name="content">
                Bienvenido a la vista Welcome....
            </x-slot>

        </x-alert>

        <x-form margin="mb-5" color="green">

            <x-slot name="header">
                Card number - bienvenida
            </x-slot>
            <x-slot name="content">
                Expire date - bienvenida
            </x-slot>
        </x-form>
        <x-card :subtitulo="$subtih" :tags="$etiquetas" color="green" class="border-2 border-green-600 ">
            Bienvenida
            <x-slot name="contenido">
                Non sint ullamco deserunt adipisicing est non ut sint. Amet laboris sit enim sunt dolor occaecat id
                anim. Commodo ullamco veniam elit enim excepteur laborum in pariatur sunt duis ullamco culpa elit sint.
                Ea cupidatat ipsum aliquip non nisi ut mollit ea pariatur eiusmod ex mollit.

            </x-slot>
        </x-card>
    </div>
@endsection
