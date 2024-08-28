@extends('master')
@section('main')

<div class="container mt-3">
<h2> {{$sp->Tensp}}</h2>

<div class="card" style="width:400px">
<img class="card-img-top" src="{{sp->Hinhanh}}">
<div class="card-body"></div>
<h4 class="card-title">Gia:{{$sp}}</h4>
</div>
</div>