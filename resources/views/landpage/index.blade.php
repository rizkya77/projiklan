@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iklan</div>

                <div class="card-body">
                <a href="{{ url('/iklan/click/'.$ad->id) }}" onclick="window.open({{ $ad->link }}, '_blank')"> 

                    <img src="{{ url('/adsimg/'.$ad->image) }}" class="img-responsive" width='250px' height='250px'>
                </a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
