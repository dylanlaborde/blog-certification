@extends('layouts.user.app')

@section('content')
<div>
<h3>
    @if (Auth::check())
                   {{Auth::user()->name}}
                       
                    @else
                    Laravel
                    {{Auth::check()}}
                        
                    @endif
</h3>
</div>
@endsection
