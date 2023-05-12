@extends('layout')

@section('content')
    <div class="card-header bg-dark text-white">
        <h1>Vítejte v aplikace NeoNASA</h1>
    </div>

    <div class="card-body">
        <p class="card-content">
            Tato aplikace slouží k prohlížení seznamu vesmírných stanic (SS) a galaxií (GX). Uživatel může zobrazit
            jednotlivé
            SS a
            GX pomocí jejich ID z URL parametru. Každá SS je přiřazena k určité GX a aplikace obsahuje tabulku s galaxiemi.

            Pokud uživatel rozklikne jednu GX, zobrazí se jí včetně seznamu SS, které se v ní nacházejí. Každá SS je
            evidována s
            názvem, vesmírnými 3D GPS souřadnicemi a obrázkem. Každá GX je také evidována s názvem, velikostí a obrázkem.
            Celkově
            tato aplikace umožňuje uživatelům procházet a prohlížet informace o různých SS a GX.
        </p>
    </div>
@endsection
