<?php
$page_title = 'High-Risk Pregnancy Care in Ambikapur | Dr. Ankita Bansal Goyal';
$base_url = './';
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>High-Risk Pregnancy Care in Ambikapur – Dr. Ankita Bansal Goyal</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Expecting a baby but facing medical complications? Get the best High-Risk Pregnancy Care in Ambikapur from expert obstetrician Dr. Ankita Bansal Goyal.">
    <meta name="keywords" content="High-Risk Pregnancy in Ambikapur, Best Obstetrician, Pregnancy Complications, Gestational Diabetes, Preeclampsia">
    
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
            background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.85)), url('images/pregnancy-hero.png') center/cover;
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
        <h1>High-Risk Pregnancy Care in Ambikapur</h1>
        <p>Ensuring the Safest Journey for You and Your Baby through proactive screening, expert intervention, and profound clinical compassion.</p>
    </div>
</div>

<div class="service-layout">
    <!-- Main Content Column -->
    <div class="service-main">
        
        <!-- Block 1: Introduction -->
        <div class="content-block">
            <img src="images/treatment-1.png" alt="High Risk Pregnancy Care" class="img-right" style="aspect-ratio:4/3;">
            <h2>Navigating a Difficult Pregnancy With Confidence</h2>
            <p>Being told your pregnancy is "high-risk" can immediately induce immense anxiety. However, a high-risk label simply means that you or your baby require specialized monitoring and rigorous medical attention throughout the gestation period to prevent complications. Choosing the right specialist for <b>High-Risk Pregnancy Care in Ambikapur</b> is the absolute most important decision you will make to ensure a healthy, joyful delivery.</p>
            <p>Dr. Ankita Bansal Goyal at Sankalp Hospital possesses the advanced clinical expertise required to expertly manage the most complex obstetric scenarios. From early pre-conception counseling to postpartum monitoring, she provides a holistic safety net for mothers facing difficult pregnancies.</p>
            <div style="clear: both;"></div>
        </div>

        <!-- Block 2: What makes it high risk -->
        <div class="content-block">
            <h3>Conditions We Actively Manage</h3>
            <p>A pregnancy is classified as high-risk when maternal or fetal health conditions significantly increase the chances of adverse outcomes:</p>
            <ul class="styled-list">
                <li><b>Gestational Diabetes:</b> Spikes in blood sugar occurring exclusively during pregnancy that can drastically increase the baby's birth weight.</li>
                <li><b>Preeclampsia:</b> A sudden, dangerous spike in blood pressure accompanied by organ damage that requires intense regulation.</li>
                <li><b>Advanced Maternal Age:</b> Pregnancies occurring in women over the age of 35 carrying statistically higher risks for chromosomal abnormalities.</li>
                <li><b>Multiple Gestations:</b> Carrying twins or triplets places tremendous physical stress on the uterus and drastically increases pre-term labor risks.</li>
                <li><b>Previous Miscarriages:</b> A history of recurrent miscarriages or prior premature births requiring early proactive cervical interventions.</li>
            </ul>
        </div>

        <!-- Block 3: Symptoms Grid -->
        <div class="content-block">
            <h2>Our Specialized Monitoring Protocols</h2>
            <p>Managing a high-risk pregnancy means staying several steps completely ahead of potential complications:</p>
            <div class="benefits-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                <div class="benefit-card">
                    <i class="fas fa-desktop"></i>
                    <h4>Advanced Ultrasounds</h4>
                    <p>Frequent Level-II scans tracking fetal growth and measuring amniotic fluid accurately.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-heartbeat"></i>
                    <h4>Fetal Heart Scans</h4>
                    <p>Routine Non-Stress Tests (NST) strictly monitoring the baby's steady heart rate in-utero.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-vial"></i>
                    <h4>NIPT Testing</h4>
                    <p>Sophisticated blood tests performed early to effortlessly screen for chromosomal disorders.</p>
                </div>
            </div>
        </div>

        <!-- Block 5: Doctor Highlight -->
        <div class="doctor-callout">
            <img src="images/dr-ankita-improved.png" alt="Dr. Ankita Bansal Goyal">
            <div class="doctor-callout-text">
                <h4>Compassionate & Coordinated Care</h4>
                <p>"An intricate pregnancy requires an intricate plan. We do not just react to emergencies; we anticipate them. By coordinating heavily across endocrinology and neonatal specialists, I ensure that when the time comes to deliver, nothing is left to chance." <br><br><strong>– Dr. Ankita Bansal Goyal</strong></p>
            </div>
        </div>

        <!-- Block 6: FAQs -->
        <div class="content-block">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">1. If I am over 35, is my pregnancy high-risk automatically?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes, clinically, being 35 or older classifies the pregnancy as "Advanced Maternal Age." While many women over 35 have effortlessly healthy pregnancies, the statistical risks for gestational diabetes and blood pressure are higher, requiring closer monitoring.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">2. Will a high-risk pregnancy always result in a C-section?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Not necessarily. Many women with high-risk pregnancies go on to have incredibly safe vaginal deliveries. A Cesarean section is only performed if labor critically fails to progress.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">3. How often will I need to see the doctor?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">In a standard pregnancy, visits are monthly. In a high-risk scenario, Dr. Ankita may require you to visit every two weeks from the start, and possibly once a week during the entire final trimester.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">4. Can stress make my high-risk pregnancy worse?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Yes, severe anxiety effectively elevates physical blood pressure and temporarily impacts the immune system. Dr. Ankita aggressively promotes comprehensive mental well-being and counseling alongside physiological treatments.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">5. What is Preeclampsia, and why is it dangerous?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Preeclampsia is characterized by sudden, high blood pressure and signs of damage to the liver or kidneys. If unmanaged, it can be fatal to both mother and baby, which is why immediate medication is imperative.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">6. Will I certainly need full bed rest?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">Not always. Total bed rest is prescribed much less frequently today. Dr. Ankita usually recommends heavily "modified" activity levels (avoiding lifting and vigorous exercise) instead of strict bed rest.</p>
                    </details>
                </div>
                <div class="faq-item" style="margin-bottom: 15px; border: 1px solid #eee; border-radius: 8px;">
                    <details style="padding: 15px 20px; background: #f9f9f9;">
                        <summary style="font-weight: 600; font-size: 1.1rem; outline: none; cursor:pointer;">7. What are the signs I need to immediately rush to the hospital?</summary>
                        <p style="margin-top: 15px; color: #555; line-height: 1.6; padding-top: 10px; border-top: 1px solid #ddd;">You should run to the hospital if you experience heavy vaginal bleeding, a sudden gush of clear fluid, severe abdominal pain, persistent dizzying headaches, or a completely noticeable decrease in the baby's movements.</p>
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
                    <li><a href="high-risk-pregnancy-in-ambikapur.php" class="active"><i class="fas fa-angle-right"></i> High-Risk Pregnancy</a></li>
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
