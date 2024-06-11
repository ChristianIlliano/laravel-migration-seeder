@extends('layouts.app')

@section('content')
<div class="card container p-3 mt-5">
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Agenzia</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->Agency }}</td>
                    <td>{{ $train->starting_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriages_number }}</td>
                    @if ($train->in_time === 1)
                    <td>si</td>
                    @else
                    <td>no</td>
                    @endif
                    @if ($train->cancellde === 1)
                    <td>si</td>
                    @else
                    <td>no</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
