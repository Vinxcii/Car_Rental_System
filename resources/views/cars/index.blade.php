@extends('layouts.app')

@section('content')

    <div>
        <div>
            <h1>Cars</h1>
        </div>
    </div>

    <div>
        @foreach ($cars as $car)
        <div>
            <span>
                Founded: {{ $car->founded}}
            </span>

            <h2>
                {{ $car->name}}
            </h2>

            <p>
                {{ $car->description}}
            </p>
        </div>
        @endforeach
    </div>

@endsection