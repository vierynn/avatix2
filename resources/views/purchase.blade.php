@extends('template')

@section('title', 'Purchase')

@section('content')

<x-navbar/>

<body>
<div class="container d-flex flex-column mt-4 mb-5">
    <h2 class="pb-3">Purchases</h2>
    @foreach ($trans->reverse() as $transaction)
    <div class="card d-flex flex-row mx-auto mb-3" style="width: 100%;">
    <img src="{{ $transaction->ticket->concerts->image_path }}" class="image rounded img-fluid p-3" style="object-fit: cover;width: 9.5vw;height:9.5vw;"alt="...">
    <div class="vr mx-2 my-3"></div>
    <div class="card-body mx-auto p-3">
        <p class="card-title my-1">{{ $transaction->ticket->concerts->artist }}{{ $transaction->ticket->concerts->name }}</p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            {{ $transaction->ticket->category }}
        </p>
        <p class="card-text text-muted mb-1" style="font-size: 1vw;">
            Rp. {{ $transaction->total }}
        </p>
    </div>
    </div>
    @endforeach
</div>

<x-footer/>

@endsection()
