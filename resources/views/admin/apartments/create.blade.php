@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Registra un Appartamento') }}
        </h2>
        <div class="container">

                @include('partials.forms.validation.errors_alert')
    
                <form method="POST" action="{{ route('admin.apartments.store') }}" enctype="multipart/form-data">
    
                    @csrf
    
                    {{-- Name --}}
                    @include(
                        'partials.forms.create_form_element',
                        $data = ['type' => 'text', 'field' => 'name', 'label' => 'Nome']
                    )
                    @include('partials.forms.validation.front_error_alert', $data = ['field' => 'name'])
    
                    {{-- Price --}}
                    @include(
                        'partials.forms.create_form_element',
                        $data = ['type' => 'number', 'field' => 'price', 'label' => 'Prezzo']
                    )
                    @include('partials.forms.validation.front_error_alert', $data = ['field' => 'price'])
    
                    {{-- Image file --}}
                    @include(
                        'partials.forms.create_form_element',
    
                        $data = ['type' => 'file', 'field' => 'image', 'label' => 'Immagine', 'accepted' => 'image/*']
                    )
    
                    {{-- Category --}}
                    @include(
                        'partials.forms.create_form_element',
                        $data = [
                            'type' => 'selectArray',
                            'field' => 'category',
                            'label' => 'Categoria',
                            'options' => $categories,
                        ]
                    )
    
                    {{-- Description --}}
                    @include(
                        'partials.forms.create_form_element',
                        $data = ['type' => 'textarea', 'field' => 'description', 'label' => 'Descrizione']
                    )
    
                    {{-- Visibility --}}
    
                    @include(
                        'partials.forms.create_form_element',
                        $data = ['type' => 'checkbox', 'field' => 'visibility', 'label' => 'Pubblicazione immediata']
                    )
    
    
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary productBtn">Invia</button>
                    </div>
    
                </form>
            </div>
            <br>
            <div class="d-flex justify-content-center" id="torna_indietro">
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary productBtn">Torna indietro</a>
            </div>
    
    
        </div>
        </div>

    </div>
    </div>
@endsection

