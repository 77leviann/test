<link href="{{ asset('css/pages/about/contact-us.css') }}" rel="stylesheet">

<section id="contact-us" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Get in Touch</h4>
                <p>If you have any questions or inquiries, feel free to contact us using the form below.</p>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <p>If you prefer to contact us via phone, email, or visit our office, you can find our contact
                    information below:</p>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> info@example.com</li>
                    <li><strong>Phone:</strong> +1234567890</li>
                    <li><strong>Address:</strong> 123 Main Street, City, Country</li>
                </ul>
            </div>
        </div>
    </div>
</section>
