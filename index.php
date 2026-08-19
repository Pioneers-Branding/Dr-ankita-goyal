<?php
/**
 * Homepage - Dr. Ankita Laparoscopy Website
 * Pure PHP Landing Page
 */

$page_title = 'Laparoscopy Treatment | Dr. Ankita Bansal Goyal';
$base_url = './';

require_once 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-layout">
        <div class="hero-content">
            <span class="hero-badge">MD, FMAS (PGIMER Chandigarh) – Sankalp Hospital</span>
            <h1>Best 3D Laparoscopic Surgeon in Ambikapur – <span>Dr. Ankita Bansal Goyal</span></h1>
            <p>15+ years of clinical excellence in minimally invasive surgery, high-risk obstetrics, and comprehensive
                women's clinical care. Trusted by thousands of families across Chhattisgarh.</p>

            <div class="hero-btns">
                <a href="https://www.clinicspots.com/doctor/dr-ankita-bansal-goyal" class="hero-btn btn-primary"><i class="fas fa-calendar-alt"></i> Book
                    Consultation</a>
                <a href="about.php" class="hero-btn btn-outline"><i class="fas fa-user-md"></i> Meet Dr. Ankita</a>
            </div>

            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-num">10,000+</span>
                    <span class="stat-label">Successful Cases</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">15+</span>
                    <span class="stat-label">Years of Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">4.9/5</span>
                    <span class="stat-label">Google Rating</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">24/7</span>
                    <span class="stat-label">Emergency Care</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-doctor-wrapper">
                <img src="images/hero-img.png" alt="Dr. Ankita Bansal Goyal" class="hero-doctor">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section" id="AboutUs">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal" class="about-img">
            </div>
            <div class="about-content">
                <span class="section-subtitle">ABOUT DR. ANKITA BANSAL GOYAL</span>
                <h2>Meet Ambikapur's Expert in <mark>3D Laparoscopic & Women's Health</mark> — Only at Sankalp Hospital
                </h2>

                <div class="about-text">
                    <p>Dr. Ankita Bansal Goyal holds a degree of M.D and FMAS from PGIMER Chandigarh and is a highly
                        skilled Obstetrician & Gynaecologist with specialised expertise in 3D Laparoscopic and Minimal
                        Access Surgery.</p>
                    <p>She is a trusted expert in women's health, known for her precision and advanced minimally
                        invasive techniques. Dr. Ankita is committed to delivering compassionate care, ensuring patient
                        safety, comfort, and faster recovery.</p>
                    <p>Dr. Ankita treats conditions such as PCOS/PCOD, fibroids, ovarian cysts, endometriosis,
                        hysterectomy, and high-risk pregnancies, with an emphasis on minimally invasive procedures,
                        reduced discomfort, and quick recovery. Her approach combines clinical excellence with empathy,
                        ensuring a smooth, safe, and personalised treatment journey for every woman.</p>
                </div>

                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-user-md"></i>
                        <div>
                            <h5>Expert Doctors</h5>
                            <p>Experienced laparoscopic women specialists offering precise, compassionate care.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-heartbeat"></i>
                        <div>
                            <h5>Post-Treatment Recovery Care</h5>
                            <p>Safe, supportive recovery care for faster healing and lasting health.</p>
                        </div>
                    </div>
                    <div class="experience-counter">
                        <span class="counter-number">10+</span>
                        <span class="counter-label">Years of Experience</span>
                    </div>
                </div>

                <a href="https://share.google/tkSFe2to63BBW2Vuf" class="btn btn-primary" target="_blank" rel="noopener">
                    Learn more about us <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="OurServices">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">SERVICE OFFERED</span>
            <h2>Our Specialised <mark>Treatments</mark></h2>
        </div>

        <div class="services-carousel">
            <a href="3d-laparoscopy.php" class="service-card">
                <img src="images/treatment-1.png" alt="3D Laparoscopy">
                <h3>3D Laparoscopic Surgery</h3>
                <p>Advanced 3D imaging technology for precise, safe surgical procedures with enhanced visualization.</p>
            </a>
            <a href="gynecological-surgery.php" class="service-card">
                <img src="images/treatment-2.png" alt="Gynecological Surgery">
                <h3>Gynecological Surgery</h3>
                <p>Comprehensive surgical solutions for various gynecological conditions with minimally invasive
                    techniques.</p>
            </a>
            <a href="pcos-pcod-treatment.php" class="service-card">
                <img src="images/treatment-3.png" alt="PCOS Treatment">
                <h3>PCOS/PCOD Treatment</h3>
                <p>Effective management of Polycystic Ovary Syndrome using latest diagnostic and treatment protocols.
                </p>
            </a>
            <a href="fibroid-treatment.php" class="service-card">
                <img src="images/treatment-4.png" alt="Fibroid Treatment">
                <h3>Fibroid Treatment</h3>
                <p>Advanced treatment options for uterine fibroids including laparoscopic myomectomy.</p>
            </a>
            <a href="high-risk-pregnancy.php" class="service-card">
                <img src="images/treatment-6.png" alt="High-Risk Pregnancy">
                <h3>High-Risk Pregnancy</h3>
                <p>Specialized care for high-risk pregnancies with comprehensive monitoring and support.</p>
            </a>
            <a href="ovarian-cyst-removal.php" class="service-card">
                <img src="images/treatment-7.png" alt="Ovarian Cyst">
                <h3>Ovarian Cyst Removal</h3>
                <p>Laparoscopic removal of ovarian cysts with precision and minimal recovery time.</p>
            </a>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="technology-section" id="Technology">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">OUR TECHNOLOGY</span>
            <h2>World's Most Advanced<br><mark>Laparoscopic Technology</mark></h2>
        </div>

        <div class="tech-grid">
            <div class="tech-image">
                <img src="images/rubina-machine.webp" alt="3D Rubina Laser Machine">
            </div>
            <div class="tech-content">
                <h3>Ambikapur's First & Only 3D<br>Rubina Laser Machine</h3>
                <p>Sankalp's advanced surgical system combines 4K and 3D camera technology with real-time fluorescence
                    imaging for safer, more precise surgeries. Think of it like mobile cameras—just as a photo from a
                    100-megapixel camera is much clearer than one from 2 megapixels, this high-tech system gives
                    surgeons an ultra-detailed view inside the body. That means smaller cuts, less pain, and a quicker
                    recovery for patients—all with the latest imaging, in one streamlined platform</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section" id="Benefits">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">WHY CHOOSE US</span>
            <h2>The <mark>Benefits</mark> of Our Care</h2>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <i class="fas fa-arrow-circle-right"></i>
                <h3>Advanced 3D laparoscopic technology</h3>
                <p>precise, safe, and highly effective procedures</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-arrow-circle-right"></i>
                <h3>Quick return to daily life</h3>
                <p>minimal downtime and faster healing</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-arrow-circle-right"></i>
                <h3>Patient-focused care</h3>
                <p>personalised treatment plans for every woman</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-arrow-circle-right"></i>
                <h3>High success rate</h3>
                <p>effective management of complex gynaecological and obstetric conditions</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Profile Section -->
<section class="social-section">
    <div class="container">
        <div class="social-grid">
            <div class="social-content">
                <span class="section-subtitle">OUR SOCIAL PROFILE</span>
                <h2>Stay Updated on <mark>Women's Health & 3D Laparoscopy</mark></h2>
                <p>Follow us on Instagram for women's health tips, insights on minimally invasive surgery, and updates
                    on the latest in gynecological care. From patient stories to recovery tips, we share everything you
                    need to feel informed, safe, and confident about your health.</p>
                <p>Whether you're exploring treatment options or preparing for surgery, our page is your trusted space
                    for expert advice, patient experiences, and wellness inspiration in Ambikapur.</p>
                <a href="https://www.instagram.com/drankitabansalgoyal/" class="btn btn-primary" target="_blank"
                    rel="noopener">
                    Follow Us on Instagram <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="social-gallery">
                <div class="gallery-grid">
                    <img src="images/treatment-1.png" alt="Laparoscopic View 1">
                    <img src="images/treatment-2.png" alt="Laparoscopic View 2">
                    <img src="images/treatment-3.png" alt="Laparoscopic View 3">
                    <img src="images/treatment-4.png" alt="Laparoscopic View 4">
                    <img src="images/treatment-5.png" alt="Laparoscopic View 5">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="faq-section" id="FAQs">
    <div class="container">
        <div class="faq-grid">
            <div class="faq-header">
                <span class="section-subtitle">GOT A QUESTION</span>
                <h2>Frequently<br> Asked <mark>Questions</mark></h2>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What is 3D laparoscopy?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p>3D laparoscopy is an advanced surgical technique that uses three-dimensional imaging to
                            provide surgeons with depth perception during procedures. This allows for more precise
                            movements and better outcomes compared to traditional 2D laparoscopy.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What are the benefits of laparoscopic surgery?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Laparoscopic surgery offers numerous benefits including smaller incisions, less pain, faster
                            recovery, reduced scarring, shorter hospital stays, and lower risk of complications compared
                            to traditional open surgery.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span>How long is the recovery after laparoscopy?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Recovery time varies depending on the procedure, but most patients can return to normal
                            activities within 1-2 weeks after laparoscopic surgery, compared to 4-6 weeks for
                            traditional open surgery.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Is laparoscopy safe?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, laparoscopy is considered very safe when performed by experienced surgeons. The
                            minimally invasive approach reduces the risk of infections, blood loss, and other
                            complications.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span>What conditions can be treated with laparoscopy?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Laparoscopy can treat various conditions including endometriosis, ovarian cysts, fibroids,
                            ectopic pregnancy, hysterectomy, and many other gynecological conditions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section" id="Testimonials">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">PATIENT STORIES</span>
            <h2>What Our <mark>Patients</mark> Say</h2>
        </div>

        <div class="testimonials-carousel">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>Dr. Ankita and her team made me feel so comfortable throughout my procedure. The 3D laparoscopy
                        was minimally invasive and I recovered so much faster than I expected. Highly recommend!</p>
                </div>
                <div class="testimonial-author">
                    <strong>Priya S.</strong>
                    <span>Ambikapur</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>After years of suffering from PCOS, I finally found relief with Dr. Ankita's treatment. Her
                        expertise in laparoscopic surgery gave me hope. I'm now healthy and happy!</p>
                </div>
                <div class="testimonial-author">
                    <strong>Anita M.</strong>
                    <span>Ranchi</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>The care I received at Sankalp Hospital was exceptional. Dr. Ankita is not just a skilled surgeon
                        but also very compassionate. My fibroid was removed laparoscopically with no complications.</p>
                </div>
                <div class="testimonial-author">
                    <strong>Sunita R.</strong>
                    <span>Raipur</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="ContactUs">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">GET IN TOUCH</span>
            <h2>Book Your <mark>Appointment</mark></h2>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Stay Connected with Dr. Ankita</h3>
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
                    method="POST" class="">
                    <input type="hidden" name="action" value="submit_form">

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
                        <label for="service">Select Service</label>
                        <select id="service" name="service">
                            <option value="">Choose a service...</option>
                            <option value="consultation">General Consultation</option>
                            <option value="3d-laparoscopy">3D Laparoscopy</option>
                            <option value="gynecology">Gynecological Surgery</option>
                            <option value="pcos">PCOS/PCOD Treatment</option>
                            <option value="fibroids">Fibroid Treatment</option>
                            <option value="pregnancy">High-Risk Pregnancy Care</option>
                            <option value="other">Other</option>
                        </select>
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
