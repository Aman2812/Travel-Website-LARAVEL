@extends('layouts.app')


@section('content')

    <h3>Great Names</h3>
    @if (count($names))
        <ul>
        @foreach($names as $person)

            <li>{{$person}}</li>

        @endforeach
        </ul>

    @endif
@stop


@section('footer')

@endsection

