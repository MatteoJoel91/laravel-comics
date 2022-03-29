@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
<div class="contenitore-main">
    <div class="button-main-series">
        <button>CURRENT SERIES</button>
    </div>
    <div class="contenuto-main">

        @foreach ($fumetti as $key => $fumetto)
           <div class="banner">
                <img src="{{$fumetto['thumb']}}" alt="">
                <a href="{{route('comic', ['comic_id' => $key])}}"><h3>{{$fumetto['series']}}</h3></a>
            </div>  
        @endforeach
                      
    </div>
    <div class="button-main-load">
        <button>LOAD MORE</button>
    </div>
</div>
@endsection