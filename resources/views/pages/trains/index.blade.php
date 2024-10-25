@extends("layouts.app")

@section("page-title", "Trains")

@section("main-content")
<div class="container">
    <div class="row justify-content-center">
        @foreach($trains as $train)
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $train->azienda }}</h3>
                    <p class="card-text">Partenza: {{ $train->stazione_di_partenza }} - {{ $train->orario_di_partenza }}</p>
                    <p class="card-text">Arrivo: {{ $train->stazione_di_arrivo }} - {{ $train->orario_di_arrivo }}</p>
                    <p class="card-text">Codice treno: {{ $train->codice_treno }}</p>
                    <p class="card-text">Numero carrozze: {{ $train->numero_carrozze }}</p>
                    <p class="card-text">In orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
                    <p class="card-text">Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
