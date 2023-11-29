<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    /**
     * Mostra un elenco delle risorse.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupera gli appartamenti di proprietà dell'utente autenticato e li ordina per nome
        $apartments = Apartment::where('user_id', Auth::id())->orderBy('name', 'asc')->get();

        // Mostra l'elenco degli appartamenti nella vista
        return view('admin.apartments.index', compact('apartments'));
    }

    /**
     * Mostra il modulo per la creazione di una nuova risorsa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostra il modulo per la creazione di un nuovo appartamento
        return view('admin.apartments.create');
    }

    /**
     * Archivia una nuova risorsa appena creata.
     *
     * @param  \App\Http\Requests\StoreApartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartmentRequest $request)
    {
        // Logica per archiviare un nuovo appartamento basato sulla richiesta validata
        // (L'implementazione andrà qui)
    }

    /**
     * Mostra la risorsa specificata.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        // (Possibile implementazione per mostrare i dettagli di un appartamento)
    }

    /**
     * Mostra il modulo per la modifica della risorsa specificata.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        // (Possibile implementazione per modificare un appartamento)
    }

    /**
     * Aggiorna la risorsa specificata nell'archivio.
     *
     * @param  \App\Http\Requests\UpdateApartmentRequest  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApartmentRequest $request, Apartment $apartment)
    {
        // (Possibile implementazione per aggiornare un appartamento)
    }

    /**
     * Rimuovi la risorsa specificata dall'archivio.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        // (Possibile implementazione per rimuovere un appartamento)
    }
}
