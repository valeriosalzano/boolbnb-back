@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Appartamenti') }}
        </h2>
        <div class="container">
            @if ($apartments->count())
                <div class="card">
                    <div class="card-header">{{ __('I tuoi appartamenti') }}</div>
                    <div class="card-body px-0">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="ps-3">Visibile</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Indirizzo</th>
                                    <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apartments as $apartment)
                                    <tr>
                                        <th scope="row" class="ps-3 text-center"><i
                                                class="fa-solid fa-eye{{ $apartment->visible ? '' : '-slash' }}"></i></th>
                                        <td>{{ $apartment->name }}</td>
                                        <td>{{ $apartment->address }}</td>
                                        <td><a href="#" class="btn btn-info">Azione</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="card overflow-hidden p-3 bg-light">
                      <div class="card-body text-center display-2"> <h2>{{ __('Nessun appartamento registrato') }}</h2></div>
                    </div>
            @endif
        </div>

    </div>
    </div>
@endsection
