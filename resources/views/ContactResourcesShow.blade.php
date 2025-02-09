@extends('Layout.layout')


@section('page-content')


<section class="container pb-5">
    <div class="card">
        <div class="card-body">

            <h6>{{$oneUserData->id}}</h6>
            <h4>{{$oneUserData->fullName}}</h4>
            <h6>{{$oneUserData->email}}</h6>
            <h6>{{$oneUserData->phone}}</h6>
            <p>{{$oneUserData->message}}</p>
        </div>
    </div>
</section>


@endsection
