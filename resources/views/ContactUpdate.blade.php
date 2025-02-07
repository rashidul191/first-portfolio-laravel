@extends('Layout.layout')


@section('page-content')


<section class="py-5">
    <div class="container">
        <h3 class="text-center">Get In Touch</h3>
        {{-- <form method="POST" id="contactForm"> --}}
            <!-- You have commented out the action and CSRF token -->
            <form method="POST" action="{{route('contact.put-update-data')}}" id="contactForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$oneUserData->id}}">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="fullName" placeholder="name" required
                        value="{{$oneUserData->fullName}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required
                        value="{{$oneUserData->email}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required
                        value="{{$oneUserData->phone}}">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="5"
                        placeholder="Write message here...">{{$oneUserData->message}}</textarea>
                </div>

                <button type="submit" class="btn btn-info">Update</button>
            </form>
    </div>
</section>


@endsection
