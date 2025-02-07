@extends('Layout.layout')


@section('page-content')


@include('Components.ContactComponent.form')


<section class="container">
    @if (session('success'))

        {{-- <div class="">
            {{session('success')}}
        </div> --}}

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@elseif (session('update'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('update')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    @endif


    <div class="row row-cols-1">
        @foreach ($contactsFormData as $cfData)

            <div class="col card">
                <div class=" card-body">

                    <h3>{{$cfData->fullName}}</h3>
                    <h4>{{$cfData->email}}</h4>
                    <h4> {{$cfData->phone}} </h4>
                    <p>{{$cfData->message}}</p>

                    <form method="POST" action="{{route('contact.delete', $cfData->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                    <a href="{{route('contact.get-one-data', $cfData->id)}}" class="btn btn-info">Update</a>

                    {{-- @php
                    print_r($cfData)
                    @endphp --}}

                </div>
            </div>

        @endforeach

    </div>
</section>

@endsection
