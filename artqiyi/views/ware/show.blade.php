@extends('layout.app')

@section('content')
    <div class="page-header">
      <h1>{{$ware->ware_name}}</h1>
    </div>
    <div class="row">
        {{$ware->price}}
    </div>
    <div class="row">
        <div class="btn-group" role="group" aria-label="...">
          <form action="{{route('order.store')}}" method="post">
              {{method_field('post')}}
              {{csrf_field()}}
              <input type="text" name="num" value="1">
              <button type="submit" class="btn btn-primary">立即购买</button>
              <input type="hidden" name="ware_id" value="{{$ware->ware_id}}">
          </form>
        </div>
    </div>
    <div class="row">
    @foreach($ware->images as $image)
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="{{$image->url}}" >
        </a>
      </div>
    @endforeach
    </div>
    <div class="row">{{$ware->description}}</div>
@endsection