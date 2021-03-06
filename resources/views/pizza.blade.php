@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <p>{{$name}}</p>
        <p>{{$age}}</p>
        <!-- @for($i=0;$i<count($pizzas);$i++)
            <p>{{$pizzas[$i]['type']}}</p>
        @endfor -->
    @foreach($pizzas as $pizza)
            <div class="m-b-md">
                {{$loop->index}} {{$pizza['base']}}---{{$pizza['type']}}
                @if($loop-> first)
                    <span>first in the loop</span>
                @endif
                @if($loop->last)
                    <span>last in loop</span>
                @endif
            </div>
    @endforeach 
    </div>
</div>
@endsection