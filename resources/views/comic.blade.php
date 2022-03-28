@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
<div class="contenitore-main">
    <div class="button-main-series">
        <button>CURRENT SERIES</button>
    </div>
    <div class="contenuto-main">

        @foreach ($fumetti as $fumetto)
           <div class="banner">
                <img src="{{$fumetto['thumb']}}" alt="">
                <h3>{{$fumetto['series']}}</h3>
            </div>  
        @endforeach
                      
    </div>
    <div class="button-main-load">
        <button>LOAD MORE</button>
    </div>
</div>
@endsection