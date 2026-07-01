<?php
$page_title = 'Gynecological Surgery in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gynecological Surgery in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Looking for the best Gynecological Surgery in Ambikapur? Dr. Ankita Bansal Goyal specializes in minimally invasive, safe, and effective surgical treatments.">
    <meta name="keywords" content="Gynecological Surgery in Ambikapur, Gynecologist in Ambikapur, Female Surgeon in Ambikapur, Minimally Invasive Gynecological Surgery">
    
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
            background: url('images/hero-img.png') center/cover no-repeat;
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
        <h1>Gynecological Surgery in Ambikapur</h1>
        <p>Expert Surgical Care for Women's Health and Wellness - Safe, Effective, and Minimally Invasive.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-4.png" alt="Gynecological Surgery" class="img-right" style="aspect-ratio:4/3;">
            <h2>Comprehensive Women's Surgical Care</h2>
            <p>Women’s health is incredibly complex, and sometimes medication and lifestyle changes are not enough to treat severe reproductive or pelvic issues. In these cases, surgery becomes a medical necessity to alleviate severe pain, restore normal bodily function, and protect fertility. If you are experiencing sudden unexplained pelvic pain, unusually heavy bleeding, or searching for the absolute highest standard of <b>Gynecological Surgery in Ambikapur</b>, Dr. Ankita Bansal Goyal at Sankalp Hospital offers state-of-the-art operative care tailored exclusively to your physiological needs.</p>
            <p>Gynecological surgery encompasses a broad range of procedures performed on the female reproductive system, including the uterus, ovaries, fallopian tubes, cervix, and vagina. Under the expert guidance of Dr. Ankita, patients are assured access to advanced procedures that prioritize maximum organ preservation and rapid recovery.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: Types of Surgeries -->
        <div class="content-block">
            <h3>Types of Surgeries We Offer</h3>
            <p>Dr. Ankita is highly trained in performing complex surgeries for various reproductive tract conditions using minimal access methods:</p>
            <ul class="styled-list">
                <li><b>Total Laparoscopic Hysterectomy (TLH):</b> Removing the uterus through tiny keyholes to treat large fibroids, prolapse, or cancer without large abdominal incisions.</li>
                <li><b>Laparoscopic Myomectomy:</b> Surgical removal of uterine fibroids exclusively, allowing the uterus to remain completely intact for future pregnancies.</li>
                <li><b>Ovarian Cystectomy:</b> Carefully excising fluid-filled cysts from the ovaries while protecting the delicate healthy ovarian reserve.</li>
                <li><b>Endometriosis Excision:</b> Meticulously cutting out painful endometrial lesions from the pelvic organs to provide long-term severe pain relief.</li>
                <li><b>Operative Hysteroscopy:</b> Treating inner-uterine issues like polyps or small submucosal fibroids entirely through the vagina, requiring zero incisions.</li>
            </ul>
        </div>

        <!-- Block 3: Benefits Grid -->
        <div class="content-block">
            <h2>The Minimally Invasive Standard</h2>
            <p>Traditionally, gynecological operations were performed via open surgery, ensuring weeks of painful bed rest. Dr. Ankita Bansal Goyal specializes strictly in minimizing trauma:</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Reduced Trauma</h4>
                    <p>Smaller incisions (0.5cm) mean drastically less muscle tearing and tissue damage during the operation.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-calendar-check"></i>
                    <h4>Faster Healing</h4>
                    <p>Instead of enduring 4 to 6 weeks in bed, most patients fully recover and return to work in just 1 to 2 weeks.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-virus-slash"></i>
                    <h4>Lower Infection Risk</h4>
                    <p>Tiny entry points mean far fewer chances for painful post-operative hospital-acquired wound infections.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-bed"></i>
                    <h4>Shorter Stays</h4>
                    <p>A majority of surgical patients can comfortably go home the very next day, sleeping in their own beds.</p>
                </div>
            </div>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>Compassionate Surgical Expertise</h4>
                <p>"Choosing a surgeon is a monumental decision. I promise my patients total transparency. We discuss all non-surgical alternatives first, and if surgery is needed, we utilize the most advanced tools available to ensure you leave the hospital safe, healthy, and pain-free." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. Is gynecological surgery painful?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">During the procedure, you will be under anesthesia and feel absolutely no pain. Post-surgery, some discomfort is normal, but because we use minimally invasive laparoscopic techniques, the pain is significantly less than open surgery and easily managed with oral medications.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. Will surgery affect my ability to get pregnant?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">A hysterectomy ends fertility permanently. However, fertility-preserving surgeries like myomectomy or cystectomy are explicitly designed to protect your reproductive organs and often radically improve your chances of getting pregnant naturally.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. How long will I need to stay in the hospital?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">For minor procedures like hysteroscopy, you can go home the same day. For major laparoscopic surgeries like a hysterectomy or myomectomy, you typically stay overnight for 24 to 48 hours for monitoring.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. What are the general risks?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">All surgeries carry minor risks of infection or bleeding. However, selecting a high-volume, specifically trained laparoscopic surgeon like Dr. Ankita drops these complication rates exponentially compared to national averages.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. How soon can I return to work?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">For a desk job following laparoscopic surgery, 1 to 2 weeks is normal. If your job requires heavy physical labor, you may need up to 4 weeks. Dr. Ankita provides tailored post-op guidelines based on your profession.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. What is the difference between open surgery and laparoscopy?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Open surgery creates a single 5-inch incision across the abdomen. Laparoscopy uses 3-4 half-inch cuts to insert a camera and instruments, leading to smaller scars, faster recovery, and vastly reduced trauma.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. Do I need to be referred by a general physician?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">No referral is strictly required. You can book a direct consultation with Dr. Ankita Bansal Goyal if you are experiencing severe symptoms or have already been diagnosed elsewhere.</p>
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
                    <li><a href="gynecological-surgery-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> Gynecological Surgery</a></li>
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
