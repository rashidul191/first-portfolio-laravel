<section class="py-5">
    <div class="container">
        <h3 class="text-center">Get In Touch</h3>
        {{-- <form method="POST" id="contactForm"> --}}
            <!-- You have commented out the action and CSRF token -->
            <form method="POST" action="{{route('contact-from')}}" id="contactForm">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="fullName" placeholder="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="5"
                        placeholder="Write message here..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</section>



@section('script')
{{--
<script>
    const contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', async function (event) {
        event.preventDefault(); // Prevents default form submission

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let message = document.getElementById('message').value;

        let formData = {
            fullName: name,
            email: email,
            phone: phone,
            message: message
        };

        let url = '/contactRequest'; // The URL to send the POST request to
        let result = await axios.post(url, formData); // Sends the form data to the server

        console.log(result);
    });
</script> --}}


@endsection
