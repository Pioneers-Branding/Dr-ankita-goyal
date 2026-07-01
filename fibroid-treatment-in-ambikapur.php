<?php
$page_title = 'Fibroid Treatment in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fibroid Treatment in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Suffering from heavy periods and pelvic pain due to fibroids? Get advanced, minimally invasive Fibroid Treatment in Ambikapur by Dr. Ankita Bansal Goyal.">
    <meta name="keywords" content="Fibroid Treatment in Ambikapur, Myomectomy in Ambikapur, Uterine Fibroids Doctor, Laparoscopic Fibroid Removal">
    
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
        <h1>Fibroid Treatment in Ambikapur</h1>
        <p>Advanced minimally invasive Myomectomy and comprehensive care. Reclaim your comfort and protect your fertility.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-4.png" alt="Fibroid Treatment" class="img-right" style="aspect-ratio:4/3;">
            <h2>Regain Your Quality of Life</h2>
            <p>Uterine fibroids are benign muscular tumors growing within the walls of the uterus. While extremely common during reproductive years, they can cause a severe decline in quality of life when they grow large. Seeking professional <b>Fibroid Treatment in Ambikapur</b> is essential if these growths are causing you disruptive pain, unusually heavy periods, or jeopardizing your chances of becoming pregnant.</p>
            <p>Dr. Ankita Bansal Goyal specializes in the highly intricate management and surgical removal of uterine fibroids. With elite access to 3D laparoscopic technology at Sankalp Hospital, she provides fertility-preserving treatments that eliminate the need to travel far for complex gynecological surgeries.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: Symptoms & Types -->
        <div class="content-block">
            <h3>Recognizing the Symptoms</h3>
            <p>Because fibroids vary drastically from the size of a seed to a large melon, symptoms are wide-ranging. You should consult immediately if you experience:</p>
            <div class="benefits-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="benefit-card">
                    <i class="fas fa-tint"></i>
                    <h4>Heavy Bleeding</h4>
                    <p>Prolonged periods with blood clots, leading to extreme chronic fatigue.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-compress-arrows-alt"></i>
                    <h4>Pelvic Pressure</h4>
                    <p>A constant dull ache or heavy sensation deep in the lower abdomen.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-restroom"></i>
                    <h4>Frequent Urination</h4>
                    <p>Large front-growing fibroids pressing directly against the bladder.</p>
                </div>
            </div>
        </div>

        <!-- Block 4: Treatment Protocols -->
        <div class="content-block">
            <h3>Comprehensive Treatment Options We Offer</h3>
            <p>Dr. Ankita is dedicated to providing tailored treatment plans matching a patient's exact age, symptom severity, and desire for future children:</p>
            <ul class="styled-list">
                <li><b>Medical Management:</b> Utilizing hormonal meds (IUDs, pills) or GnRH agonists to completely regulate bleeding and shrink fibroids prior to surgery.</li>
                <li><b>Laparoscopic Myomectomy:</b> The absolute gold standard. Utilizing 3D vision to meticulously slice and remove solely the fibroids through 0.5cm incisions, preserving the entire uterus for pregnancy.</li>
                <li><b>Operative Hysteroscopy:</b> Removing inner-cavity (submucosal) fibroids utilizing a camera passed directly through the vagina—requiring exactly zero external incisions.</li>
                <li><b>Total Laparoscopic Hysterectomy:</b> For massively enlarged fibroids in post-menopausal women, offering a minimally-invasive, permanent cure.</li>
            </ul>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>World-Class Uterine Care</h4>
                <p>"Being told you have a tumor is terrifying. My priority is reassurance. Over 99% of fibroids are benign. By using advanced 3D Myomectomy, we can systematically remove these tumors while meticulously repairing the uterine wall, keeping your dream of motherhood safely intact." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. Are uterine fibroids cancerous?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">No. More than 99% of fibroids are completely benign (non-cancerous) tumors. Having fibroids does not increase your risk of developing uterine cancer.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. Can fibroids grow back after surgery?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">The specifically targeted fibroid removed will not grow back. However, because your body still produces hormones naturally, new fibroids can potentially develop in the uterus over time.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. I want a baby. Should I have my fibroids removed?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">If fibroids are actively distorting the inner cavity of the uterus, they will prevent embryos from implanting properly or cause miscarriages. A prior fertility-preserving myomectomy is strongly advised.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. What is the recovery time for a Myomectomy?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Because we utilize minimally invasive keyhole surgery exclusively, hospital stays are limited to 24-48 hours. Most women confidently return to normal daily activities within 1 to 2 short weeks.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. Can a healthy diet shrink my fibroids?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">A healthy, vitamin-rich diet helps regulate hormone baseline levels and potentially slows growth, but diet alone cannot physically shrink a solid fibroid that is already causing noticeable physical symptoms.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. Do fibroids shrink naturally after menopause?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes. Fibroid growth is fueled entirely by estrogen and progesterone. Upon reaching menopause, these hormone levels crash down, causing existing fibroids to drastically decrease in size.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. How do I definitely know if I have fibroids?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Diagnosis is entirely painless. It is normally quickly confirmed in-clinic through a routine physical pelvic examination followed immediately by a specialized pelvic ultrasound.</p>
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
                    <li><a href="3d-laparoscopy-surgery-in-ambikapur.php"><i class="fas fa-angle-right"></i> 3D Laparoscopy</a></li>
                    <li><a href="gynecological-surgery-in-ambikapur.php"><i class="fas fa-angle-right"></i> Gynecological Surgery</a></li>
                    <li><a href="pcos-pcod-treatment-in-ambikapur.php"><i class="fas fa-angle-right"></i> PCOS/PCOD Treatment</a></li>
                    <li><a href="fibroid-treatment-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> Fibroid Treatment</a></li>
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
