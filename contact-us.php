<?php
$page_title = 'Contact Us | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>

<div class="page-title-area"
    style="position: relative; background-image: url('images/services-hero.png'); background-size: cover; background-position: center; padding: 120px 0; text-align: center; margin-top: 80px;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.85);"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <h1 style="color: var(--primary-color); font-size: 3rem; text-shadow: 1px 1px 1px rgba(255,255,255,0.9);">
            Contact Us</h1>
        <p style="color: var(--secondary-color); font-weight: 600; font-size: 1.2rem;">We are here to assist you with
            your queries and appointments.</p>
    </div>
</div>

<!-- Contact Section (Reusing structure from index.php) -->
<section class="contact-section" style="padding: 60px 0;">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Stay Connected</h3>
                <p>Have questions or ready to book an appointment? Reach out to us through any of the channels below.
                </p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Location</strong>
                            <p>Sankalp Hospital, Ambikapur, Chhattisgarh</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone</strong>
                            <p>+91 96912 12570</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <p>info@drankitalaparoscopy.in</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Working Hours</strong>
                            <p>Mon - Sat: 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/PeoZoWPaY/submissions'
                    method='POST' class=''>
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Book Appointment <i
                            class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>