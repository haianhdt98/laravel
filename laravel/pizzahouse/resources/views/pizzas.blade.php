@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        {{ $name }} - {{ $age }}

        @foreach($pizzas as $pizza)
            <div>
                {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                @if($loop->first)
                    <span>- first in the list</span>
                @endif   
                @if($loop->last)
                    <span>- last in the list</span>
                @endif 
            </div>
        @endforeach

    </div>

</div>
@endsection
    