@extends('Layout.layout')

@section('page-content')
<section class="login-form py-5 my-5">
    <div class="container">
        <!-- Login Page Start  -->
        <form action="{{ route('userLoginCheck') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password" required>
                </div>
            </div>
            <input class="btn btn-success" type="submit" value="Login">
        </form>
        <!-- Login Page End  -->
    </div>
</section>



@endsection