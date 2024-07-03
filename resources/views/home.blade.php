@extends('layouts.app')

@section('content')
    <div class="ms-3">
        <h1 class="mx-auto w-50">Treni:</h1>
        @foreach ($trains as $key => $train)
            <div class="m-5 mx-auto border border-primary p-2 w-50 text-center rounded">
                <p class="fs-4">Treno numero {{ $key }} / Codice: {{ $train['codice_treno'] }}</p>
                <p>Azienda: {{ $train['azienda'] }}</p>
                <p>Stazione di partenza: {{ $train['stazione_partenza'] }}</p>
                <p>Orario di partenza: {{ $train['orario_partenza'] }}</p>
                <p>Stazione di arrivo: {{ $train['stazione_arrivo'] }}</p>
                <p>Orario di arrivo: {{ $train['orario_arrivo'] }}</p>
                @if ($train['cancellato'] == 0)
                    <p>Non Cancellato</p>
                @else
                    <p>Cancellato</p>
                @endif
                <p>Numero di carrozze: {{ $train['numero_carrozze'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
