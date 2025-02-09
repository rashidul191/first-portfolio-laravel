@extends('Layout.layout')


@section('page-content')

<section class="py-5">
    <div class="container">
        <h3 class="text-center">Resources</h3>
            <form method="POST" action="{{route('contact-res.store')}}" id="contactForm">
            {{-- <form method="POST" action="{{route('')}}" id="contactForm"> --}}
                @csrf
                {{-- @method('PUT') --}}
                <input type="hidden" name="id" value="">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="fullName" placeholder="name" required
                        value="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required
                        value="">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required
                        value="">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="5"
                        placeholder="Write message here..."></textarea>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
    </div>
</section>

<section class="container pb-5">
    <div class="row g-5">

        @foreach ($usersDataFromContactTable as $userData)

            <div class="card">
                <div class="card-body">

                    <h6>{{$userData->id}}</h6>
                    <h4>{{$userData->fullName}}</h4>
                    <h6>{{$userData->email}}</h6>
                    {{-- <h6>{{$userData->phone}}</h6> --}}
                    {{-- <p>{{$userData->message}}</p> --}}

                    <form method="POST" action="{{route('contact-res.destroy',$userData->id)}}" onsubmit="return confirm('Are you sure? you want to delete!!',);">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>


                    <form method="GET" action="{{route('contact-res.show', $userData->id)}}">

                        <input class="btn btn-success" type="submit" value="View Details Other Page">
                    </form>



                    <!-- Button trigger modal -->
{{-- <form method="GET" action="{{route('contact-res.show', $userData->id)}}">
    <button type="submit" class="btn btn-success">
        View Details Other Page
      </button>
</form> --}}

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$userData->id}}">
        View Details Same Page
      </button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$userData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><h6>{{$userData->id}}</h6></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <h4>{{$userData->fullName}}</h4>
            <h6>{{$userData->email}}</h6>
            <h6>{{$userData->phone}}</h6>
            <p>{{$userData->message}}</p>
        </div>

      </div>
    </div>
  </div>

                </div>
            </div>
        @endforeach
    </div>
</section>


@endsection
