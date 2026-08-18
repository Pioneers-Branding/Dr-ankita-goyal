<?php
$page_title = 'Health Blogs | Dr. Ankita Bansal Goyal';
$base_url   = './';
require_once 'header.php';

$blogs = [
      [
    'image' => 'images/Fibroid Treatment in Ambikapur.png',
    'category' => 'Fibroids',
    'date' => 'August 18, 2026',
    'title' => 'Fibroid Treatment in Ambikapur',
    'excerpt' => 'Learn about uterine fibroid symptoms, diagnosis, treatment options and advanced gynecological care in Ambikapur.',
    'slug' => 'blog/fibroid-treatment-in-ambikapur',
],
      [
    'image' => 'images/pcos treatment in ambikapur.png',
    'category' => "Women's Health",
    'date' => 'August 11, 2026',
    'title' => 'PCOS Treatment in Ambikapur: Symptoms, Tests and What Actually Works',
    'excerpt' => 'A complete guide to PCOS treatment in Ambikapur covering symptoms, diagnosis, treatment options, diet, fertility and costs.',
    'slug' => 'blog/pcos-treatment-in-ambikapur',
],
    [
    'image' => 'images/best-gynecologist-in-ambikapur-dr-ankita-bansal-goyal.jpg',
    'category' => "Women's Health",
    'date' => 'July 27, 2026',
    'title' => 'Best Gynecologist in Ambikapur: Complete Guide for Women in Surguja',
    'excerpt' => 'Looking for the best gynecologist in Ambikapur? Learn about pregnancy care, normal delivery, PCOS treatment, fibroid treatment, infertility care, and advanced 3D laparoscopic surgery by Dr. Ankita Bansal Goyal.',
    'slug' => 'blog/best-gynecologist-in-ambikapur',
],
    [
        'image'    => 'images/laparoscopy_insurance.png',
        'category' => 'Insurance & Cost',
        'date'     => 'April 23, 2026',
        'title'    => 'Is Laparoscopic Surgery Covered by Insurance?',
        'excerpt'  => 'A complete breakdown of health insurance coverage, cashless claims, and what to expect when paying for laparoscopic surgeries in India.',
        'slug'     => 'blog/laparoscopic-surgery-insurance-coverage',
    ],
    [
        'image'    => 'images/laparoscopy_worth_it.png',
        'category' => 'Patient Guides',
        'date'     => 'April 23, 2026',
        'title'    => 'Is Laparoscopic Surgery Worth It? Benefits vs Cost',
        'excerpt'  => 'Analyze the true economic impact of laparoscopic surgery. Compare the upfront cost against the massive savings from faster recovery and less pain.',
        'slug'     => 'blog/is-laparoscopic-surgery-worth-it',
    ],
    [
        'image'    => 'images/laparoscopy_robotic.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 23, 2026',
        'title'    => 'Robotic Surgery vs Laparoscopic Surgery: Understanding the Difference',
        'excerpt'  => 'Standard laparoscopy or the million-dollar robot? Learn the key differences in precision, cost, and recovery between these cutting-edge techniques.',
        'slug'     => 'blog/robotic-vs-laparoscopic-surgery',
    ],
    [
        'image'    => 'images/laparoscopy_diet.png',
        'category' => 'Diet & Nutrition',
        'date'     => 'April 23, 2026',
        'title'    => 'Diet After Laparoscopic Surgery (What to Eat / Avoid)',
        'excerpt'  => 'Discover the best healing foods, what clear liquids to start with, and what to avoid to prevent bloating and constipation.',
        'slug'     => 'blog/diet-after-laparoscopic-surgery',
    ],
    [
        'image'    => 'images/laparoscopy_dos_donts.png',
        'category' => 'Recovery',
        'date'     => 'April 23, 2026',
        'title'    => 'Do’s and Don’ts After Laparoscopic Surgery',
        'excerpt'  => 'Ensure a smooth and safe recovery by strictly following these essential do\'s and don\'ts after returning home.',
        'slug'     => 'blog/dos-and-donts-after-laparoscopy',
    ],
    [
        'image'    => 'images/laparoscopy_gas_pain.png',
        'category' => 'Recovery',
        'date'     => 'April 23, 2026',
        'title'    => 'Gas Pain, Shoulder Pain & Bloating After Laparoscopy',
        'excerpt'  => 'Why does your shoulder hurt after abdominal surgery? Learn exactly why this happens and explore the best remedies for fast relief.',
        'slug'     => 'blog/gas-pain-bloating-after-laparoscopy',
    ],
    [
        'image'    => 'images/laparoscopy_wound_care.png',
        'category' => 'Aftercare Guides',
        'date'     => 'April 23, 2026',
        'title'    => 'Wound Care, Bathing, Sleeping & Driving After Surgery',
        'excerpt'  => 'A practical guide addressing your biggest questions regarding daily post-op logistics like sleeping comfortably and keeping incisions clean.',
        'slug'     => 'blog/wound-care-bathing-sleeping-driving-laparoscopy',
    ],
    [
        'image'    => 'images/laparoscopy_active_life.png',
        'category' => 'Lifestyles & Expectations',
        'date'     => 'April 23, 2026',
        'title'    => 'Pregnancy, Travel and Daily Activities After Laparoscopy',
        'excerpt'  => 'Clear medical timelines on when it is safe to board a flight, lift heavy objects, return to the gym, and start trying to conceive.',
        'slug'     => 'blog/pregnancy-travel-daily-activities-laparoscopy',
    ],
    [
        'image'    => 'images/laparoscopy_meaning.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 23, 2026',
        'title'    => 'What is Laparoscopic Surgery? (Meaning, Uses, Benefits)',
        'excerpt'  => 'Understand the meaning of keyhole surgery and explore its incredible benefits and uses in treating gynecological issues.',
        'slug'     => 'blog/what-is-laparoscopic-surgery',
    ],
    [
        'image'    => 'images/laparoscopy_procedure.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 23, 2026',
        'title'    => 'How Laparoscopic Surgery is Performed',
        'excerpt'  => 'A complete step-by-step breakdown of what happens in the operating room during a minimally invasive laparoscopic procedure.',
        'slug'     => 'blog/how-laparoscopic-surgery-is-performed',
    ],
    [
        'image'    => 'images/laparoscopy_safe.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 23, 2026',
        'title'    => 'Is Laparoscopic Surgery Safe? Risks & Complications',
        'excerpt'  => 'Safety comes first. Dive into the potential risks, complications, and incredibly high safety profile of laparoscopic techniques.',
        'slug'     => 'blog/is-laparoscopic-surgery-safe',
    ],
    [
        'image'    => 'images/laparoscopy_vs_open.png',
        'category' => 'Laparoscopy',
        'date'     => 'April 23, 2026',
        'title'    => 'Laparoscopic vs Open Surgery: What You Must Know',
        'excerpt'  => 'Discover why minimally invasive laparoscopy leads to faster recovery and fewer complications compared to traditional open surgery.',
        'slug'     => 'blog/laparoscopy-vs-open-surgery',
    ],
    [
        'image'    => 'images/laparoscopy_recovery.png',
        'category' => 'Recovery',
        'date'     => 'April 23, 2026',
        'title'    => 'Recovery After Laparoscopic Surgery (Healing Timeline)',
        'excerpt'  => 'What does recovery look like? Learn the detailed timeline regarding when you can drive, work, and exercise again.',
        'slug'     => 'blog/recovery-after-laparoscopic-surgery',
    ],
    [
        'image'    => 'images/laparoscopy_cost.png',
        'category' => 'Cost Guide',
        'date'     => 'April 23, 2026',
        'title'    => 'Laparoscopic Surgery Cost in India: A Complete Guide',
        'excerpt'  => 'Transparent data on how much different laparoscopic surgeries cost and why tier-2 cities offer the best quality-to-price ratio.',
        'slug'     => 'blog/laparoscopic-surgery-cost-in-india',
    ],
    [
        'image'    => 'images/laparoscopy_expectations.png',
        'category' => 'Guide',
        'date'     => 'April 23, 2026',
        'title'    => 'What to Expect Before and After Laparoscopic Surgery',
        'excerpt'  => 'A complete patient guide detailing everything you must know, prepare for, and expect on the day of your surgery.',
        'slug'     => 'blog/what-to-expect-laparoscopic-surgery',
    ],
    [
        'image'    => 'images/treatment-1.png',
        'category' => 'PCOS / PCOD',
        'date'     => 'April 10, 2025',
        'title'    => 'Understanding PCOS: Symptoms, Causes & Treatment Options',
        'excerpt'  => 'Polycystic Ovary Syndrome affects millions of women worldwide. Learn how to identify early signs and explore effective treatment paths.',
        'slug'     => 'blog/understanding-pcos-symptoms-causes-treatment',
    ],
    [
        'image'    => 'images/treatment-3.png',
        'category' => 'Fibroids',
        'date'     => 'March 28, 2025',
        'title'    => '7 Warning Signs You May Have Uterine Fibroids',
        'excerpt'  => 'Heavy periods, pelvic pressure, and frequent urination can all be signs of fibroids. Here is what every woman should know.',
        'slug'     => 'blog/7-signs-of-uterine-fibroids',
    ],
    [
        'image'    => 'images/pregnancy-hero.png',
        'category' => 'Pregnancy',
        'date'     => 'March 20, 2025',
        'title'    => 'High-Risk Pregnancy: What You Should Know Before Delivery',
        'excerpt'  => 'Conditions like diabetes, hypertension, and twins can elevate pregnancy risk. Expert monitoring makes all the difference.',
        'slug'     => 'blog/high-risk-pregnancy-guide',
    ],
    [
        'image'    => 'images/treatment-5.png',
        'category' => 'Ovarian Health',
        'date'     => 'March 14, 2025',
        'title'    => 'Ovarian Cysts: When Is It Time to See a Doctor?',
        'excerpt'  => 'Most ovarian cysts resolve on their own, but certain types require medical attention. Know the symptoms that should not be ignored.',
        'slug'     => 'blog/ovarian-cysts-when-to-see-doctor',
    ],
    [
        'image'    => 'images/treatment-6.png',
        'category' => 'Surgery',
        'date'     => 'March 7, 2025',
        'title'    => '5 Key Benefits of Minimally Invasive Gynecological Surgery',
        'excerpt'  => 'Smaller incisions, shorter hospital stays, and quicker return to daily life — find out why minimally invasive surgery is now the gold standard.',
        'slug'     => 'blog/benefits-of-minimally-invasive-surgery',
    ],
    [
        'image'    => 'images/treatment-4.png',
        'category' => 'Endometriosis',
        'date'     => 'February 25, 2025',
        'title'    => 'Endometriosis: Early Detection and Long-Term Management',
        'excerpt'  => 'Endometriosis is often misdiagnosed for years. Understanding its stages and treatment options empowers patients to seek timely care.',
        'slug'     => 'blog/endometriosis-early-detection',
    ],
    [
        'image'    => 'images/services-hero.png',
        'category' => "Women's Wellness",
        'date'     => 'February 15, 2025',
        'title'    => 'How to Prepare for Your First Gynaecology Appointment',
        'excerpt'  => 'First visits can feel overwhelming. Here is a simple guide on what to expect, what questions to ask, and how to prepare.',
        'slug'     => 'blog/prepare-for-gynecology-appointment',
    ],
    [
        'image'    => 'images/pcos-hero.png',
        'category' => 'Reproductive Health',
        'date'     => 'February 5, 2025',
        'title'    => "Women's Reproductive Health After 35: What Changes?",
        'excerpt'  => 'Fertility, hormone levels, and cycle patterns all shift after 35. Learn how to stay proactive about your reproductive health at every stage.',
        'slug'     => 'blog/reproductive-health-after-35',
    ],
  
];

$per_page    = 9;
$total       = count($blogs);
$total_pages = (int) ceil($total / $per_page);
$current     = max(1, min($total_pages, (int) ($_GET['page'] ?? 1)));
$offset      = ($current - 1) * $per_page;
$page_blogs  = array_slice($blogs, $offset, $per_page);
?>

<style>
.blog-hero{background:linear-gradient(135deg,#0A2F5C 0%,#0F3460 50%,#1A1A4E 100%);padding:130px 20px 70px;text-align:center;color:#fff}
.blog-hero-tag{display:inline-block;background:rgba(0,180,216,.2);color:#90E0EF;border:1px solid rgba(72,202,228,.35);padding:6px 18px;border-radius:50px;font-size:.8rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px}
.blog-hero h1{font-family:'Tenor Sans',sans-serif;font-size:3rem;font-weight:700;margin-bottom:16px;line-height:1.2}
.blog-hero p{font-size:1.15rem;color:#90E0EF;max-width:600px;margin:0 auto}
.blog-section{padding:70px 20px 80px;background:#f8fbff}
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px;margin-bottom:56px}
.blog-card{background:#fff;border-radius:14px;overflow:hidden;box-shadow:0 4px 20px rgba(10,47,92,.08);display:flex;flex-direction:column;transition:transform .3s ease,box-shadow .3s ease}
.blog-card:hover{transform:translateY(-6px);box-shadow:0 12px 36px rgba(10,47,92,.14)}
.blog-card-img-wrap{position:relative;display:block;overflow:hidden;height:210px;text-decoration:none}
.blog-card-img-wrap img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease}
.blog-card:hover .blog-card-img-wrap img{transform:scale(1.05)}
.blog-category{position:absolute;top:14px;left:14px;background:#0A2F5C;color:#fff;font-size:.72rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;padding:5px 12px;border-radius:50px}
.blog-card-body{padding:22px 24px 26px;display:flex;flex-direction:column;flex:1}
.blog-date{font-size:.82rem;color:#00B4D8;font-weight:600;margin-bottom:10px;display:flex;align-items:center;gap:6px}
.blog-title{font-family:'Tenor Sans',sans-serif;font-size:1.1rem;font-weight:700;line-height:1.45;margin-bottom:12px;flex:1}
.blog-title a{color:#0A2F5C;text-decoration:none;transition:color .2s}
.blog-title a:hover{color:#00B4D8}
.blog-excerpt{font-size:.9rem;color:#64748B;line-height:1.7;margin-bottom:18px}
.blog-read-more{display:inline-flex;align-items:center;gap:7px;font-size:.88rem;font-weight:700;color:#00B4D8;text-decoration:none;text-transform:uppercase;letter-spacing:.5px;margin-top:auto;transition:gap .2s,color .2s}
.blog-read-more:hover{gap:12px;color:#0A2F5C}
.blog-pagination{display:flex;justify-content:center;align-items:center;gap:10px;padding-top:10px}
.page-btn{display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:8px;background:#fff;border:1.5px solid #dde3ed;color:#0A2F5C;font-weight:700;font-size:.95rem;text-decoration:none;transition:all .25s}
.page-btn:hover,.page-btn.active{background:#0A2F5C;border-color:#0A2F5C;color:#fff}
@media(max-width:991px){.blog-grid{grid-template-columns:repeat(2,1fr)}.blog-hero h1{font-size:2.2rem}}
@media(max-width:600px){.blog-grid{grid-template-columns:1fr}.blog-hero h1{font-size:1.8rem}}
</style>

<!-- Hero -->
<div class="blog-hero">
    <div class="container">
        <span class="blog-hero-tag">Expert Insights</span>
        <h1>Women's Health Blog</h1>
        <p>Evidence-based articles on gynaecology, surgery, and wellness by Dr. Ankita Bansal Goyal</p>
    </div>
</div>

<!-- Grid -->
<section class="blog-section">
    <div class="container">
        <div class="blog-grid">
            <?php foreach ($page_blogs as $blog): ?>
            <article class="blog-card">
                <a href="/<?php echo $blog['slug']; ?>.php" class="blog-card-img-wrap">
                    <img src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy">
                    <span class="blog-category"><?php echo $blog['category']; ?></span>
                </a>
                <div class="blog-card-body">
                    <p class="blog-date"><i class="far fa-calendar-alt"></i> <?php echo $blog['date']; ?></p>
                    <h2 class="blog-title">
                        <a href="/<?php echo $blog['slug']; ?>.php"><?php echo $blog['title']; ?></a>
                    </h2>
                    <p class="blog-excerpt"><?php echo $blog['excerpt']; ?></p>
                    <a href="/<?php echo $blog['slug']; ?>.php" class="blog-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
        <nav class="blog-pagination">
            <?php if ($current > 1): ?>
                <a href="?page=<?php echo $current - 1; ?>" class="page-btn"><i class="fas fa-chevron-left"></i></a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="page-btn <?php echo $i === $current ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($current < $total_pages): ?>
                <a href="?page=<?php echo $current + 1; ?>" class="page-btn"><i class="fas fa-chevron-right"></i></a>
            <?php endif; ?>
        </nav>
        <?php endif; ?>
    </div>
</section>

<?php require_once 'footer.php'; ?>
