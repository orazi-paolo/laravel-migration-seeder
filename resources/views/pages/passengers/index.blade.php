@extends("layouts.app")

@section("page-title", "Passengers")

@section("main-content")
<div class="container">
    <header>
        <h1 class="text-center py-4">Passengers</h1>
    </header>
    <div class="row justify-content-center">
        @foreach($passengers as $passenger)
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Passenger</h3>
                    <p class="card-text">Nome {{ $passenger->name }}</p>
                    <p class="card-text">Cognome:{{ $passenger->lastname }}</p>
                    <p class="card-text">Anni: {{ $passenger->age }}</p>
                    <p class="card-text">Email: {{ $passenger->email }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
