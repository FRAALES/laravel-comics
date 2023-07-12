@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            Comics
        </h1>
        <div class="d-flex">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <h3>
                        {{ $fumetto['title']}}
                    </h3>
                    <p>
                        {{ $fumetto['description']}}
                    </p>
                    <div class="column justify-content-between d-flex">
                        <span>
                            {{ $fumetto['series']}}
                        </span>
                        <span>
                            {{ $fumetto['type']}}
                        </span>
                        <span>
                            {{ $fumetto['sale_date']}}
                        </span>
                        <span>
                            {{ $fumetto['price']}}
                        </span>
                    </div>
                    <div class="column justify-content-between d-flex">
                        <div>
                            <h4>ARTISTS</h4>
                            <ul>
                                @foreach ($fumetto['artists'] as $artist)
                                    <li>
                                        {{ $artist }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h4>WRITERS</h4>
                            <ul>
                            @foreach ($fumetto['writers'] as $writers)
                                    <li>
                                        {{ $writers }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>

@endsection
