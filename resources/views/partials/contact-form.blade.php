<div class="card contact-card">
    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input id="name" name="name" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" class="form-textarea" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary submit-btn">Send Message</button>
        <p id="formMessage" class="form-message"></p>
    </form>
</div>
