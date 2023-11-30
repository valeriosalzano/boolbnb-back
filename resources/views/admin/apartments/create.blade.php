@extends('layouts.app')

@section('content')
    <h1 class="text-center py-5">{{ Auth::user()->name }} crea il tuo appartamento</h1>

    <div class="container mb-4">
        <div class="row">
            <div class="col">
                <form method="POST" enctype="multipart/form-data" id="my-form">
                    {{-- action="{{ route('admin.apartment.store') }}" --}}
                    @csrf

                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Appartamento *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required minlength="2" maxlength="50"
                            placeholder="Inserisci il nome dell'appartamento">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo *</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            name="address" value="{{ old('address') }}" required minlength="5" maxlength="100"
                            placeholder="Inserisci l'indirizzo dell'appartamento">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rooms" class="form-label">Stanze *</label>
                        <input type="number" min="1" max="255" class="form-control" id="rooms"
                            name="rooms" placeholder="Inserisci il numero di stanze">
                    </div>
                    <div class="mb-3">
                        <label for="beds" class="form-label">Letti *</label>
                        <input type="number" min="1" max="255" class="form-control" id="beds"
                            name="beds" placeholder="Inserisci il numero di letti">
                    </div>
                    <div class="mb-3">
                        <label for="bathrooms" class="form-label">Bagni *</label>
                        <input type="number" min="1" max="255" class="form-control" id="bathrooms"
                            name="bathrooms" placeholder="Inserisci il numero di bagni">
                    </div>
                    <div class="mb-3">
                        <label for="square_meters" class="form-label">Metri quadrati *</label>
                        <input type="number" min="1" max="50000" class="form-control" id="square_meters"
                            name="square_meters" placeholder="Inserisci il numero di metri quadrati">
                    </div>
                    <div class="mb-3">
                        <label for="visible" class="form-label me-3">Rendi visibile</label>
                        <input type="checkbox" class="form-check-input" id="visible" name="visible">
                    </div>
                    <div class="mb-3">
                        <p>Seleziona i servizi</p>
                        @foreach ($services as $service)
                            <div class="form-check">
                                <input class="form-check-input" name="service_id[]" type="checkbox"
                                    value="{{ $service->id }}" id="service-{{ $service->id }}"
                                    @checked(in_array($service->id, old('service_id', [])))>
                                <label class="form-check-label" for="service-{{ $service->id }}">
                                    {{ $service->name }}
                                </label>
                            </div>
                        @endforeach

                        <div id="type-error" class="invalid-feedback d-block"></div>
                    </div>

                    <button class="btn btn-primary" type="submit">Inserisci</button>
                    <div class="alert alert-warning mt-5">
                        <p class="text-decoration-underline fw-bold">Tutti i campi contrassegnati con * sono
                            obbligatori</p>
                        <p class="m-0 fw-bold">Nota:</p>
                        <p>E' necessario selezionare almeno un servizio</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
