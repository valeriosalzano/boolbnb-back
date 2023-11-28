@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{ __('Numero di appartamenti') }}</div>
                        <div class="card-body">
                            {{ $apartments }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
