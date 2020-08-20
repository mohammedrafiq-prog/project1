@extends('layout.app')
@section('contact')
<h1>masseges</h1>
@if (count($masseges)>0)
    @foreach ($masseges as $item)
    <div class="well">
        <ul class="list-group">
            Name:<li class="list-group-item">{{ $item->name }}</li>
            Email:<li class="list-group-item">{{ $item->email }}</li>
            Artical:<li class="list-group-item">{{ $item->artical }}</li>
            Createdat:<li class="list-group-item">{{ $item->created_at}}</li>
        </ul></div>
    @endforeach
@endif
@endsection