@extends('app')

@section('content')

@foreach($hooks as $hook)
        <article>
            <h2>{!! $hook->id !!}</h2>
            <p>
                {!! $hook->created_at !!}
            </p>
            <p>
            {!! $hook->webhook !!}
           </p>
        </article>
    @endforeach

@stop('content')