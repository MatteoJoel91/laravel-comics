@extends('layouts.base')

@section('pageTitle', $comic['series'])

@section('content')
    <div class="img-cont">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
    </div>
    <div class="comic_info-top">
        <div class="row-left">
           <h1>{{$comic['title']}}</h1>
           <div class="blocco">
               <div class="blocco-verde">
                <span class="text-verde">U.S. Price: <span class="text-bianco">{{$comic['price']}}</span></span>
                <span class="text-right">AVAILABLE</span>
                </div>
                <div class="button">
                        <button>Check Availability</button>
                </div>
           </div>
           <span>{{$comic['description']}}</span>
        </div>
        <div class="row-right">
           <img src="{{ asset('img/adv.jpg') }}" alt=""> 
        </div>
    </div>
    <div class="comic_info-bot">
        <div class="tabelle">
            <table>
                <tr>
                    <th>
                        <h2>Talent</h2>
                    </th>
                </tr>
                <tr>
                    <td>Art by: </td>
                    <td>
                        @foreach ( $comic['artists'] as $artist )
                            {{$artist}}

                            @if (!$loop->last) 
                                ,
                            @endif 
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Written by: </td>
                    <td>
                        @foreach ( $comic['writers'] as $artist )
                            {{$artist}}
                            
                            @if (!$loop->last) 
                                ,
                            @endif 
                        @endforeach
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>
                        <h2>Specs</h2>
                    </th>
                </tr>
                <tr>
                    <td>Series: </td>
                    <td>{{$comic['series']}}</td>
                </tr>
                <tr>
                    <td>U.S. Price: </td>
                    <td>{{$comic['price']}}</td>
                </tr>
                <tr>
                    <td>On Sale Date: </td>
                    <td>{{$comic['sale_date']}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection