<?php
$page_title = 'Ovarian Cyst Removal in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ovarian Cyst Removal in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Get expert, minimally invasive Ovarian Cyst Removal in Ambikapur. Dr. Ankita Bansal Goyal specializes in laparoscopic cystectomy to protect fertility.">
    <meta name="keywords" content="Ovarian Cyst Removal in Ambikapur, Laparoscopic Cystectomy, Gynecologist in Ambikapur, Pelvic Pain Treatment">
    
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
            background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.85)), url('images/gyne-hero.png') center/cover;
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
        <h1>Ovarian Cyst Removal in Ambikapur</h1>
        <p>Expert, minimally invasive surgical eradication of painful cysts while completely protecting your ovarian reserve.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-1.png" alt="Ovarian Cystectomy" class="img-right" style="aspect-ratio:4/3;">
            <h2>Protect Your Ovaries and Fertility</h2>
            <p>Ovarian cysts are fluid-filled sacs that develop on the surface of or inside a woman's ovary. While the vast majority are harmless and disappear naturally, pathological cysts can grow remarkably large, twist the ovary, or rupture, causing severe, disabling pain. Securing expert <b>Ovarian Cyst Removal in Ambikapur</b> is essential to ensure that the healthy tissue of the ovary is safely preserved.</p>
            <p>At Sankalp Hospital, Dr. Ankita Bansal Goyal specializes in uniquely delicate ovarian cystectomies. Utilizing advanced 3D laparoscopic technology, she completely removes the cyst while causing absolute minimal trauma to the highly sensitive reproductive organ.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: Types of Cysts -->
        <div class="content-block">
            <h3>When Intervention is Necessary</h3>
            <p>Pathological cysts are caused by abnormal cell growth and are fundamentally different from normal functional cysts. The most common hazardous types include:</p>
            <ul class="styled-list">
                <li><b>Endometriomas:</b> Often called "chocolate cysts," deeply linked to endometriosis and known to severely impact fertility.</li>
                <li><b>Dermoid Cysts:</b> Unusual cysts formed from embryonic cells that often tend to grow aggressively large and can cause ovarian torsion.</li>
                <li><b>Cystadenomas:</b> Surface-developing cysts filled with watery material that can rapidly shift other abdominal organs out of place.</li>
            </ul>
        </div>

        <!-- Block 3: Symptoms Grid -->
        <div class="content-block">
            <h2>Recognizing Severe Symptoms</h2>
            <p>Consult Dr. Ankita immediately if you experience these symptoms, which aggressively indicate an expanding cyst:</p>
            <div class="benefits-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="benefit-card">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h4>Deep Pelvic Pain</h4>
                    <p>A dull ache or sharp, sudden jolts of unilateral pain in the lower abdomen.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-compress-arrows-alt"></i>
                    <h4>Severe Bloating</h4>
                    <p>An unusual feeling of extreme fullness, heaviness, or visible belly swelling.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-procedures"></i>
                    <h4>Painful Intercourse</h4>
                    <p>Sharp discomfort felt deep in the lower pelvis during sexual intimacy.</p>
                </div>
            </div>
        </div>

        <!-- Block 4: Treatment Protocols -->
        <div class="content-block">
            <h3>How We Perform the Procedure</h3>
            <p>Dr. Ankita’s primary goal is twofold: entirely remove the cyst wall to unequivocally prevent it from returning and preserve every possible millimeter of the healthy ovary to safeguard your future fertility.</p>
            <p><b>The 3D Laparoscopic Advantage:</b> Rather than creating a painful open incision, Dr. Ankita uses the 3D Rubina Laparoscope. By making 3 tiny half-inch incisions, she inserts a high-definition 3D camera. Staring at the 4K monitor, she can meticulously peel the cystic wall entirely away from the ovary without carelessly damaging the ovarian reserve (the eggs). Once the cyst is completely free, it is safely extracted.</p>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>Surgical Finesse Matters</h4>
                <p>"The ovary is an incredibly delicate organ. It houses a woman's hormonal engine and reproductive future. You simply cannot rush an ovarian surgery. I take pride in utilizing extreme 3D precision to essentially flay the cyst away while fiercely protecting your healthy tissue." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. Does surgery mean I will permanently lose my ovary?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">No. Dr. Ankita's primary goal is an Ovarian Cystectomy—meaning exactly only the cyst is removed while the healthy ovary is painstakingly preserved.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. How do you know if a cyst is cancerous without surgery?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">We use specialized 3D ultrasounds to assess blood flow. Additionally, specific blood tests (like CA-125 tumor marker tests) significantly help assess the risk of malignancy.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. What is Ovarian Torsion?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">If a cyst grows extremely large, the huge weight can cause the ovary to forcefully twist around its stalk, cutting off blood supply. This requires an immediate surgical emergency untwisting.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. Can ovarian cysts violently affect my fertility?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Certain types do. Pathological cysts (like Endometriomas) strongly interfere with ovulation and healthy egg release. Removing these cysts usually dramatically improves conception chances.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. What is recovery like after Laparoscopic Cystectomy?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Because incisions are 0.5cm small, recovery is incredibly swift. Most patients go home within exactly 24 hours and resume regular work completely within a week.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. Do cysts grow back completely after removal?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">The specific cyst removed will not grow back. However, if your body is prone to developing cysts hormonally, entirely new cysts can form securely on the ovaries in the near future.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. Do smaller cysts desperately need to be removed?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Not usually. If a cyst is smaller than 5cm, fluid-filled, and causing zero pain, Dr. Ankita simply employs non-surgical "watchful waiting" via periodic ultrasounds.</p>
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
                    <li><a href="fibroid-treatment-in-ambikapur.php"><i class="fas fa-angle-right"></i> Fibroid Treatment</a></li>
                    <li><a href="high-risk-pregnancy-in-ambikapur.php"><i class="fas fa-angle-right"></i> High-Risk Pregnancy</a></li>
                    <li><a href="ovarian-cyst-removal-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> Ovarian Cyst Removal</a></li>
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
