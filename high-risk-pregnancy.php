<?php
$page_title = 'High-Risk Pregnancy Care in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>

<div class="page-title-area" style="position: relative; background-image: url('images/services-hero.png'); background-size: cover; background-position: center; padding: 120px 0; text-align: center; margin-top: 80px;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.85);"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <h1 style="color: var(--primary-color); font-size: 3rem; text-shadow: 1px 1px 1px rgba(255,255,255,0.9);">High-Risk Pregnancy</h1>
        <p style="color: var(--secondary-color); font-weight: 600; font-size: 1.2rem;">Specialized, attentive care ensuring maternal and fetal safety.</p>
    </div>
</div>

<section class="service-details" style="padding: 60px 0;">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
            <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <img src="images/treatment-6.png" alt="High Risk Pregnancy Care Ambikapur" style="width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
            <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--primary-color); margin-bottom: 20px;">Safe Navigation of High-Risk Pregnancies</h2>
                <p>Not all pregnancies proceed without complication. When a pregnancy is considered high-risk—due to maternal age, pre-existing medical conditions like hypertension or diabetes, carrying multiples, or previous pregnancy complications—it requires an intensely specialized level of obstetric monitoring.</p>
                <p>Dr. Ankita Bansal Goyal is highly equipped to manage the complete spectrum of complex pregnancies. Located internally at Sankalp Hospital, we ensure immediate availability to an advanced NICU (Neonatal Intensive Care Unit) and rapid-response surgical theatres, providing absolute peace of mind for expectant mothers.</p>
                
                <h3 style="margin-top: 20px; font-size: 1.2rem;">Our High-Risk Prenatal Care Services include:</h3>
                <ul style="list-style: none; padding: 0; line-height: 1.8; margin-top: 15px;">
                    <li><i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> <strong>Advanced Fetal Monitoring:</strong> Regular, high-definition ultrasounds to detect and manage intrauterine issues closely.</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> <strong>Maternal Health Management:</strong> Treating gestational diabetes, preeclampsia, and managing thyroid disorders during pregnancy.</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> <strong>Safe Delivery Planning:</strong> Detailed preparation for complex cesarean deliveries or managing preterm labor efficiently.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Embedded -->
<section class="contact-section" id="ContactUs" style="padding: 60px 0; background: #f9f9f9;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 40px;">
            <span class="section-subtitle">GET IN TOUCH</span>
            <h2>Book Your <mark>Appointment</mark></h2>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Consult for High-Risk Pregnancies</h3>
                <p>Experience the latest in medical technology. Book an appointment below to discuss your condition.</p>
                <div class="contact-details">
                    <div class="contact-item"><i class="fas fa-map-marker-alt"></i><div><strong>Location</strong><p>Sankalp Hospital, Ambikapur</p></div></div>
                    <div class="contact-item"><i class="fas fa-phone"></i><div><strong>Phone</strong><p>+91 96912 12570</p></div></div>
                </div>
            </div>
            <div class=''>
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/PeoZoWPaY/submissions'
                    method='POST' class=''>
                    <input type="hidden" name="action" value="submit_form">
                    <div class="form-group"><label for="name">Your Name *</label><input type="text" id="name" name="name" required></div>
                    <div class="form-group"><label for="phone">Phone Number *</label><input type="tel" id="phone" name="phone" required></div>
                    <input type="hidden" name="service" value="high-risk-pregnancy">
                    <div class="form-group"><label for="message">Your Message</label><textarea id="message" name="message" rows="4"></textarea></div>
                    <button type="submit" class="btn btn-primary btn-block">Book Appointment <i
                            class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
