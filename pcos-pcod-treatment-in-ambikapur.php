<?php
$page_title = 'PCOS / PCOD Treatment in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PCOS / PCOD Treatment in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Struggling with irregular periods or weight gain? Dr. Ankita Bansal Goyal offers comprehensive PCOS and PCOD treatment in Ambikapur.">
    <meta name="keywords" content="PCOS Treatment in Ambikapur, PCOD Doctor in Ambikapur, Gynecologist for PCOS, Irregular periods treatment">
    
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
            background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.85)), url('images/pcos-hero.png') center/cover;
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
        <h1>PCOS & PCOD Treatment in Ambikapur</h1>
        <p>Holistic and highly effective management of hormonal imbalances to restore your health, menstrual cycle, and fertility.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-1.png" alt="PCOS Treatment" class="img-right" style="aspect-ratio:4/3;">
            <h2>Regain Control Over Your Hormones</h2>
            <p>Polycystic Ovary Syndrome (PCOS) and Polycystic Ovarian Disease (PCOD) are increasingly common disorders severely disrupting the health, metabolic rates, and reproductive futures of women globally. If you are struggling with unexplained weight gain, severe acne, or frighteningly irregular menstrual cycles, finding the most effective <b>PCOS / PCOD Treatment in Ambikapur</b> is the vital first step toward reclaiming your health.</p>
            <p>Dr. Ankita Bansal Goyal strongly believes that there is no "one-size-fits-all" solution to hormonal imbalances. Her clinical approach completely revolves around treating your specific root cause rather than merely suppressing the symptoms with a generic prescription.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: Understanding PCOD vs PCOS -->
        <div class="content-block">
            <h3>PCOD vs. PCOS: Understanding the Difference</h3>
            <p>While often used interchangeably, they represent two different clinical scenarios requiring distinct management plans.</p>
            <p><b>PCOD (Polycystic Ovarian Disease):</b> A condition where ovaries contain many immature eggs that eventually turn into cysts. It is widely driven by poor lifestyle, stress, and diet. With expert lifestyle modifications and minor medical help, PCOD is highly controllable, allowing women to conceive entirely naturally.</p>
            <p><b>PCOS (Polycystic Ovary Syndrome):</b> A far more severe metabolic and endocrine disorder. The ovaries produce excessive androgens (male hormones), preventing ovulation. Because it can lead to metabolic syndrome, severe insulin resistance, and a much higher lifetime risk of diabetes, PCOS requires rigorous, multi-disciplinary medical intervention.</p>
        </div>

        <!-- Block 3: Symptoms Grid -->
        <div class="content-block">
            <h2>Common Symptoms You Should Never Ignore</h2>
            <p>Early diagnosis is the absolute key to preventing long-term metabolic complications. Consult Dr. Ankita if you frequently experience:</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-calendar-times"></i>
                    <h4>Irregular Cycles</h4>
                    <p>Missing periods, heavily delayed cycles, or going months without menstruating entirely.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-weight"></i>
                    <h4>Stubborn Weight Gain</h4>
                    <p>Extreme difficulty losing weight, specifically severe fat accumulation around the lower abdomen.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-user-md"></i>
                    <h4>Hirsutism & Acne</h4>
                    <p>Thick, dark hair appearing on the chin or chest, alongside severe hormonal acne.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-baby"></i>
                    <h4>Infertility</h4>
                    <p>Inability to conceive a child naturally due to the complete lack of ovulation.</p>
                </div>
            </div>
        </div>

        <!-- Block 4: Treatment Protocols -->
        <div class="content-block">
            <h3>Our Formulated Treatment Protocols</h3>
            <p>Dr. Ankita Bansal Goyal creates a highly personalized treatment matrix explicitly based on your age, symptom severity, and reproductive timelines:</p>
            <ul class="styled-list">
                <li><b>Lifestyle & Nutrition Counseling:</b> Losing just 5% body weight drastically improves insulin sensitivity and can trigger natural ovulation. We provide clinical dietary blueprints.</li>
                <li><b>Hormonal Stabilization:</b> targeted combination birth control therapies correct irregular bleeds preventing the dangerous thickening of the uterine lining.</li>
                <li><b>Metabolic Medication:</b> Prescribing specialized insulin-sensitizing medication (like Metformin) to stabilize blood sugar and help reverse insulin resistance.</li>
                <li><b>Ovulation Induction:</b> For women desperately trying to conceive, utilizing advanced medications to force the ovaries to safely release a viable egg.</li>
                <li><b>Laparoscopic Ovarian Drilling:</b> A minimally invasive surgical "last resort" using lasers to destroy the specific area of the ovary over-producing male hormones, thereby spontaneously restoring ovulation.</li>
            </ul>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>Empathetic Healing Environment</h4>
                <p>"Navigating a PCOS diagnosis is incredibly draining physically and mentally. My role is to be your steadfast health partner. By educating you on your own physiology, we don't just treat the numbers on a blood test; we treat you, restoring your confidence and your future." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. Is there a permanent cure for PCOS?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">There is no absolute "cure", but it is highly treatable. Through proper lifestyle changes and expert medical treatments from Dr. Ankita, symptoms can be completely controlled.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. Can I still get pregnant if I have PCOS?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes, absolutely! While PCOS is a leading cause of infertility, the vast majority of women can conceive. Dr. Ankita provides targeted ovulation induction therapies with exceptionally high success rates.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. Why is weight loss so important for treatment?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Insulin resistance turns heavy sugars into fat. When you lose weight, insulin levels drop, significantly reducing the excess male hormone production in the ovaries, often jumpstarting natural ovulation.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. Will the facial hair go away?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Medical treatments block new thick hair from growing. However, existing dark hair typically requires cosmetic treatments (like laser skin removal) alongside your hormonal medication for optimal results.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. What happens if I leave PCOS untreated?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Untreated PCOS heavily increases the risk of serious health conditions later in life, including aggressive Type 2 Diabetes, hypertension, and a heightened risk of endometrial cancer.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. Is surgery required for PCOS?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Rarely. Ovarian drilling is considered a last resort. It is typically only recommended if you are aggressively trying to conceive but have failed multiple rounds of fertility medications.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. How is PCOD scientifically diagnosed?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Diagnosis universally involves a thorough pelvic ultrasound to count the number of string-of-pearl cysts on the ovary, combined with targeted blood tests to measure crucial hormone and fasting glucose ratios.</p>
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
                    <li><a href="pcos-pcod-treatment-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> PCOS/PCOD Treatment</a></li>
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
