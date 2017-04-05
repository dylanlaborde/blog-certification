@extends('layouts.user.app')

@section('content')
<div class="ui segment container">
    <div>
        <h5 class="ui block header">les dernier article </h5>
        <div class="sixteen wide tablet sixteen wide computer column"></div>
    </div>
    <div class="ui stackable four cards container">
    @foreach($article as $key)
        <div class="ui card">
            <div class="content">
                <div class="center aligned header">
                 {{$key->titre}}
                </div>
            </div>
            <div class="image">
                <img src="http://placehold.it/350x150">
            </div>
            <div class="extra content">
                <div class="content">
                    <div class="item">
                 {{$key->created_at}}
                 {{$key->auteur}}
                    
                </div>
            </div>
            <a href="/article/{{$key->id}}" class="right floated ui blue button">voir</a>
        </div>
    </div>
        @endforeach
</div>



    <div>
        <div class="sixteen wide tablet sixteen wide computer column"></div>
        <h5 class="ui  block header">Tous les article </h5>
        <div class="sixteen wide tablet sixteen wide computer column"></div>
    </div>



<div class="ui three stackable cards">
@foreach($article as $key)
    <div class="ui card">

        <div class="content">
            <div class="center aligned header">
                {{$key->titre}}
            </div>
        </div>
        <div class="image">
            <img src="http://placehold.it/350x150">
        </div>
        <div class="extra content">
            <div class="content">
                <div class="item">
                 {{$key->created_at}}
                 {{$key->auteur}}
                </div>
            </div>
            <a href="/article/{{$key->id}}" class="right floated ui blue button">voir</a>
            
        </div>
    </div>
            @endforeach
</div>
</div>


            
               
                


@endsection
