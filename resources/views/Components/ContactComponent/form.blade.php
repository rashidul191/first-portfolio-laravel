<section class="py-5">
    <div class="container">
        <h3 class="text-center">Get In Touch</h3>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
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
                    placeholder="white message here..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<script>
    const contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let message = document.getElementById('message').value;

        // console.log(name, email, phone, message);


        let formData = {
            fullName: name,
            email: email,
            phone: phone,
            message: message
        };


        let url = '/contactRequest';

        let result = await axios.post(url, formData);

        console.log(result);

        // if (result.status === 200) {
        //     alert("Data Submit Successfully ");
        // } else {
        //     alert("Some Think Is wrong");
        // }


    })
</script>
