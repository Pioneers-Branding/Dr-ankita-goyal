<?php
$page_title = '3D Laparoscopy Surgery in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3D Laparoscopy Surgery in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Looking for the best 3D Laparoscopy Surgery in Ambikapur? Dr. Ankita Bansal Goyal offers advanced, minimally invasive treatments with faster recovery.">
    <meta name="keywords" content="3D Laparoscopy Surgery in Ambikapur, Laparoscopic Surgeon in Ambikapur, Minimally Invasive Surgery, Gynecologist in Ambikapur">
    
    <style>
        /* Premium Service Page Specific Styles */
        :root {
            --primary: #0F2E57;
            --secondary: #009CC3;
            --accent: #6EC1E4;
            --text-color: #54595F;
            --bg-light: #EBF3FD;
        }

        .service-hero {
            position: relative;
            padding: 140px 20px 80px;
            text-align: center;
            background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.85)), url('images/hero-banner.png') center/cover;
            border-bottom: 1px solid #eaeaea;
        }
        .service-hero h1 { color: var(--primary); font-size: 3.2rem; font-weight: 800; margin-bottom: 20px; line-height: 1.2; }
        .service-hero p { color: var(--secondary); font-size: 1.3rem; font-weight: 500; max-width: 800px; margin: 0 auto; }

        .service-layout {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .service-main { flex: 2.5; min-width: 60%; }
        .service-sidebar { flex: 1; min-width: 300px; }

        /* Main Content Structure */
        .content-block { margin-bottom: 50px; clear: both; }
        .content-block h2 { color: var(--primary); font-size: 2.2rem; margin-bottom: 25px; font-weight: 700; }
        .content-block h3 { color: var(--secondary); font-size: 1.6rem; margin-bottom: 20px; border-left: 4px solid var(--primary); padding-left: 15px; }
        .content-block p { font-size: 1.1rem; line-height: 1.8; color: var(--text-color); margin-bottom: 18px; }

        /* Inline Images */
        .img-right { float: right; width: 45%; margin: 0 0 25px 30px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); object-fit: cover; }
        .img-left { float: left; width: 40%; margin: 0 30px 25px 0; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); object-fit: cover; }

        /* Benefits Grid */
        .benefits-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-top: 30px; }
        .benefit-card { background: var(--accent); padding: 25px; border-radius: 12px; transition: transform 0.3s ease; }
        .benefit-card:hover { transform: translateY(-5px); }
        .benefit-card i { font-size: 2rem; color: var(--primary); margin-bottom: 15px; display: block; }
        .benefit-card h4 { font-size: 1.2rem; color: var(--secondary); margin-bottom: 10px; font-weight: 700; }
        .benefit-card p { font-size: 1rem; margin-bottom: 0; line-height: 1.6; }

        /* Custom Lists */
        .styled-list { list-style: none; padding: 0; }
        .styled-list li { position: relative; padding-left: 35px; margin-bottom: 15px; font-size: 1.1rem; line-height: 1.7; color: var(--text-color); }
        .styled-list li::before { content: '\f00c'; font-family: 'Font Awesome 5 Free'; font-weight: 900; position: absolute; left: 0; top: 2px; color: var(--primary); font-size: 1.2rem; }

        /* Doctor Callout */
        .doctor-callout { display: flex; align-items: center; gap: 30px; background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); padding: 35px; border-radius: 16px; margin: 50px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #eee; }
        .doctor-callout img { width: 160px; height: 160px; border-radius: 50%; object-fit: cover; border: 5px solid #fff; box-shadow: 0 5px 20px rgba(0,0,0,0.15); flex-shrink: 0; }
        .doctor-callout-text h4 { color: var(--secondary); font-size: 1.6rem; margin-bottom: 15px; }
        .doctor-callout-text p { font-size: 1.1rem; line-height: 1.7; font-style: italic; color: #444; margin: 0; }

        /* Sidebar Elements */
        .sticky-wrapper { position: sticky; top: 100px; }
        .sidebar-widget { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; border: 1px solid #eee; }
        .sidebar-widget h3 { color: var(--secondary); font-size: 1.4rem; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--accent); }
        
        .sidebar-nav { list-style: none; padding: 0; margin: 0; }
        .sidebar-nav li { margin-bottom: 12px; }
        .sidebar-nav a { display: flex; align-items: center; color: var(--text-color); font-size: 1.1rem; text-decoration: none; padding: 10px 15px; border-radius: 8px; transition: all 0.3s; background: var(--bg-light); }
        .sidebar-nav a:hover, .sidebar-nav a.active { background: var(--primary); color: #fff; transform: translateX(5px); }
        .sidebar-nav a i { margin-right: 12px; }

        /* Responsive */
        @media(max-width: 991px) {
            .service-hero h1 { font-size: 2.5rem; }
            .img-right, .img-left { float: none; width: 100%; margin: 0 0 30px 0; }
            .doctor-callout { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

<!-- Premium Hero Section -->
<div class="service-hero">
    <div class="container">
        <h1>3D Laparoscopy Surgery in Ambikapur</h1>
        <p>Experience the highest level of surgical precision, minimal pain, and rapid recovery with Ambikapur's most advanced 3D Laparoscopic technology.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-1.png" alt="3D Laparoscopy Surgery" class="img-right">
            <h2>Transforming Gynaecological Care</h2>
            <p>When it comes to complex gynaecological conditions, traditional open surgeries were once the only viable option. Today, the landscape of medical science has evolved dramatically. If you are seeking the most advanced surgical care, <b>3D Laparoscopy Surgery in Ambikapur</b> offers an innovative, minimally invasive solution that ensures ultimate precision, significantly reduces bodily trauma, and guarantees a much faster recovery timeline.</p>
            <p>Dr. Ankita Bansal Goyal, a renowned specialist at Sankalp Hospital, is pioneering this sophisticated technique in the region. By offering world-class interventions right here in Ambikapur, patients no longer have to endure the stress of traveling to major metropolitan health hubs for premier surgical care.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: What is It -->
        <div class="content-block">
            <h3>What is 3D Laparoscopic Surgery?</h3>
            <p>Laparoscopy, commonly known as "keyhole surgery," is a procedure allowing a surgeon to access the inside of the abdomen over making large open incisions. Standard laparoscopy utilizes 2D cameras, projecting a flat, television-like view. While effective, it lacks natural human depth perception, making complex suturing extremely challenging.</p>
            <p><b>3D Laparoscopic Surgery</b> completely revolutionizes this. By using advanced dual-lens laparo-endoscopes and specialized 3D glasses, the surgeon is granted a true three-dimensional, highly magnified view of the internal organs. This grants exceptional depth perception, tactile visual feedback, and enhanced spatial orientation, allowing Dr. Ankita to identify microscopic blood vessels and nerves with breathtaking clarity.</p>
        </div>

        <!-- Block 3: Benefits Grid -->
        <div class="content-block">
            <h2>Why Opt for 3D Laparoscopy?</h2>
            <p>Choosing 3D laparoscopy under the expert guidance of Dr. Ankita brings immediate physiological and lifestyle benefits compared to standard open surgeries:</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-bullseye"></i>
                    <h4>Unmatched Precision</h4>
                    <p>3D magnification allows for meticulous dissection, profoundly lowering the risk of accidental injury to surrounding healthy organs.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-tint-slash"></i>
                    <h4>Minimal Blood Loss</h4>
                    <p>Enhanced visibility enables the surgeon to spot and seal minor vessels, rendering many major surgeries nearly bloodless.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-running"></i>
                    <h4>Faster Recovery</h4>
                    <p>Most patients are walking within hours and discharged within 24 to 48 hours, resuming normal activities entirely in weeks.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-magic"></i>
                    <h4>Nearly Invisible Scars</h4>
                    <p>Operating through 0.5cm incisions means post-healing scars are minuscule and cosmetically superior.</p>
                </div>
            </div>
        </div>

        <!-- Block 4: Target Conditions -->
        <div class="content-block">
            <img src="images/rubina-machine.webp" alt="3D Rubina Laser Machine" class="img-left" style="background:#f8f9fa;">
            <h3>Conditions Treated at Our Clinic</h3>
            <p>3D Laparoscopy is regarded as the global gold standard for treating severe gynecological issues. Dr. Ankita utilizes our exclusive Rubina 3D/4K machine for:</p>
            <ul class="styled-list">
                <li><b>Uterine Fibroids (Myomectomy):</b> Safely excising benign tumors while preserving the uterus for future fertility.</li>
                <li><b>Ovarian Cysts:</b> Complex cysts are removed accurately without sacrificing the healthy ovarian reserve.</li>
                <li><b>Endometriosis Excision:</b> Meticulously identifying and cutting out deep-infiltrating endometriotic lesions to cure chronic pelvic pain.</li>
                <li><b>Hysterectomy (Uterus Removal):</b> Performing Total Laparoscopic Hysterectomies (TLH) with supreme safety and minimal catheter time.</li>
                <li><b>Ectopic Pregnancy & Infertility:</b> Swift interventions for tubal pregnancies and diagnostic investigations for unexplained infertility.</li>
            </ul>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>In Expert Hands</h4>
                <p>"My goal is to offer women the safest, least invasive surgical options possible. With 3D laparoscopy, we not only cure the disease but we protect your fertility, preserve your organs, and give you your active life back in a fraction of the time." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. Is 3D Laparoscopy completely safe?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes, absolutely. 3D laparoscopy is considered incredibly safe. Due to the 3D magnification, depth perception, and minimally invasive nature, it carries a much lower risk of complications, infections, and intraoperative bleeding compared to traditional open abdominal surgery.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. How long is the recovery period?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Recovery is remarkably fast. Most patients are discharged within 24 to 48 hours. You can usually resume light daily activities within 3 to 5 days, and return to full normal activities within 1 to 2 weeks.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. Can 3D Laparoscopy save my uterus if I have fibroids?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes! Dr. Ankita strongly advocates for organ-preserving surgeries. Using 3D laparoscopy for myomectomy, she can precisely remove large or multiple fibroids layer by layer, preserving your fertility and avoiding a hysterectomy.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. Is general anesthesia required?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes, the surgery is almost always performed under general anesthesia. This ensures your abdominal muscles are completely relaxed (necessary for gas inflation) and you are completely pain-free and asleep.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. Will I have noticeable scars?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">No. The procedure requires only 3 to 4 tiny incisions (half a centimeter). Once healed, the scars are virtually invisible and fade significantly over time.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. What is the difference between 2D and 3D Laparoscopy?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">2D gives a flat image, while 3D provides natural depth perception through specialized lenses and glasses. This vastly increases accuracy, reduces operation time, and minimizes risk during intricate cuts.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. How do I prepare for my 3D laparoscopy?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Preparation involves pre-operative blood tests, fasting for 8 to 12 hours prior, and pausing certain medications. Dr. Ankita will guide you strictly on all prerequisites during your consultation.</p>
                    </details>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Column -->
    <div class="service-sidebar">
        <div class="sticky-wrapper">
            
            <!-- Quick Nav -->
            <div class="sidebar-widget">
                <h3>Our Specialities</h3>
                <ul class="sidebar-nav">
                    <li><a href="3d-laparoscopy-surgery-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> 3D Laparoscopy</a></li>
                    <li><a href="gynecological-surgery-in-ambikapur.php"><i class="fas fa-angle-right"></i> Gynecological Surgery</a></li>
                    <li><a href="pcos-pcod-treatment-in-ambikapur.php"><i class="fas fa-angle-right"></i> PCOS/PCOD Treatment</a></li>
                    <li><a href="fibroid-treatment-in-ambikapur.php"><i class="fas fa-angle-right"></i> Fibroid Treatment</a></li>
                    <li><a href="high-risk-pregnancy-in-ambikapur.php"><i class="fas fa-angle-right"></i> High-Risk Pregnancy</a></li>
                    <li><a href="ovarian-cyst-removal-in-ambikapur.php"><i class="fas fa-angle-right"></i> Ovarian Cyst Removal</a></li>
                </ul>
            </div>

            <!-- Booking Widget -->
            <div class="sidebar-widget" style="background: var(--accent); border-color: var(--primary);">
                <h3 style="border-bottom-color: #fff;">Book Consultation</h3>
                <p style="font-size:0.95rem; margin-bottom: 20px;">Skip the wait time. Provide your details below and our team will contact you instantly.</p>
                <?php include 'contact-form.php'; ?>
            </div>

            <!-- Contact Box -->
            <div class="sidebar-widget">
                <h3>Get in Touch</h3>
                <div style="display: flex; margin-bottom: 15px;">
                    <i class="fas fa-map-marker-alt" style="color: var(--primary); font-size: 1.2rem; margin-right: 15px; margin-top: 4px;"></i>
                    <p style="margin:0; font-size: 0.95rem;">Sankalp Hospital,<br>Ambikapur, Chhattisgarh</p>
                </div>
                <div style="display: flex; margin-bottom: 15px;">
                    <i class="fas fa-phone-alt" style="color: var(--primary); font-size: 1.2rem; margin-right: 15px; margin-top: 4px;"></i>
                    <p style="margin:0; font-size: 0.95rem;"><a href="tel:+919691212570" style="color: var(--text-color); text-decoration:none;">+91 96912 12570</a></p>
                </div>
                <div style="display: flex;">
                    <i class="fas fa-clock" style="color: var(--primary); font-size: 1.2rem; margin-right: 15px; margin-top: 4px;"></i>
                    <p style="margin:0; font-size: 0.95rem;">Mon - Sat<br>9:00 AM - 5:00 PM</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>

</body>
</html>
