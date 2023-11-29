@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light border-bottom">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
            Benvenuto su BoolBnB
        </h1>

        <p class="col-md-8 fs-4">Clicca sul pulsante per mettere in mostra i tuoi appartamenti!</p>
        <a href="{{route('register')}}" class="btn btn-outline-dark btn-lg" type="button">Registrati</a>
        
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection