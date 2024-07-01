@extends('layouts.struct')

@section('title','home')

@section('content')

    <header>
        @extends('layouts.menu')
    </header>
    <section>
        <x-welcome />
    </section>
@endsection