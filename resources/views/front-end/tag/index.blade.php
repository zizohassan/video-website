@extends('layouts.app')

@section('title' , $tag->name)

@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h1>{{ $tag->name }}</h1>
            </div>
            @include('front-end.shared.video-row')
        </div>
    </div>
@endsection
