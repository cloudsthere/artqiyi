@extends('layout.app')

@section('content')

<ul class="list-group">
    @foreach($wares->all() as $ware)
    <li class="list-group-item"><a href='{{route("ware.show", $ware->ware_id)}}'>{{$ware->ware_name}}</a><span class="pull-right">{{$ware->price}}</span></li>
    @endforeach

</ul>

{!!$wares->render()!!}

@endsection