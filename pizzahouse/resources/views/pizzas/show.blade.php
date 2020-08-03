@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order of {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li> {{ $topping }} </li>
        @endforeach
    </ul>
    {{-- <form action="/pizzas/{{ route('pizza.destroy', ['id' => $pizza->id]) }}" method="POST"> --}}
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="{{ route('pizzas.index') }}" class="back"><- Back to all pizzas -></a>
@endsection
    