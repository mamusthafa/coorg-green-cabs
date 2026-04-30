<?php
$phoneDisplay = '7899324522';
$phoneHref = preg_replace('/\D+/', '', $phoneDisplay);
$email = 'coorggreencabs@gmail.com';
$whatsAppMessage = rawurlencode('Hi Coorg Green Cabs, I would like to book a taxi in Coorg.');
$whatsAppHref = "https://wa.me/91{$phoneHref}?text={$whatsAppMessage}";
$galleryImages = glob(__DIR__ . '/images/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [];
sort($galleryImages);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coorg Green Cabs | Affordable Taxi Service in Coorg</title>
    <meta name="description" content="Affordable and reliable taxi service in Coorg for sightseeing, airport transfers, local rides, and outstation trips. Call or WhatsApp Coorg Green Cabs now.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --brand-green: #16a34a;
            --brand-green-dark: #0f5132;
            --brand-green-soft: #d1fae5;
            --whatsapp-green: #25d366;
            --ink: #081c15;
            --muted: #54636b;
            --sand: #f6f7f3;
            --card: rgba(255, 255, 255, 0.72);
            --border: rgba(255, 255, 255, 0.18);
            --shadow: 0 24px 60px rgba(8, 28, 21, 0.14);
            --radius-xl: 28px;
            --radius-lg: 22px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(22, 163, 74, 0.16), transparent 34%),
                linear-gradient(180deg, #eef7f0 0%, #ffffff 26%, #f8fbf8 100%);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            letter-spacing: -0.03em;
        }

        a {
            text-decoration: none;
        }

        .section-space {
            padding: 88px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            color: var(--brand-green-dark);
            font-size: 0.9rem;
            font-weight: 700;
            box-shadow: 0 8px 24px rgba(8, 28, 21, 0.08);
        }

        .hero {
            position: relative;
            padding: 24px 0 72px;
        }

        .hero::after {
            display: none;
        }

        .navbar-lite {
            padding: 0 0 1.25rem;
        }

        .brand-lockup {
            display: inline-flex;
            align-items: center;
            gap: 0.9rem;
        }

        .brand-badge {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #22c55e, #14532d);
            color: #fff;
            font-size: 1.5rem;
            box-shadow: 0 16px 40px rgba(22, 163, 74, 0.2);
        }

        .brand-text strong,
        .brand-text span {
            display: block;
            line-height: 1.05;
        }

        .brand-text strong {
            font-size: 1.1rem;
        }

        .brand-text span {
            font-size: 0.88rem;
            color: var(--muted);
        }

        .hero-banner {
            border-radius: 32px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: #fff;
        }

        .hero-banner img {
            display: block;
            width: 100%;
            height: auto;
        }

        .hero-card,
        .glass-card {
            background: var(--card);
            border: 1px solid var(--border);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow);
        }

        .hero-copy {
            padding: 2rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.12);
        }

        .hero-copy p {
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.06rem;
        }

        .display-title {
            font-size: clamp(2.5rem, 5vw, 4.8rem);
            line-height: 0.98;
            margin: 1rem 0;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.9rem;
            margin: 2rem 0 1.5rem;
        }

        .btn-cta,
        .btn-outline-light-strong {
            border-radius: 999px;
            padding: 0.95rem 1.35rem;
            font-weight: 700;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            border: 0;
            transition: transform 0.22s ease, box-shadow 0.22s ease, background-color 0.22s ease;
        }

        .btn-cta:hover,
        .btn-outline-light-strong:hover,
        .soft-card:hover,
        .vehicle-card:hover {
            transform: translateY(-3px);
        }

        .btn-call {
            color: #fff;
            background: linear-gradient(135deg, var(--brand-green), #15803d);
            box-shadow: 0 18px 30px rgba(22, 163, 74, 0.32);
        }

        .btn-whatsapp {
            color: #083b20;
            background: linear-gradient(135deg, #6ff3a5, var(--whatsapp-green));
            box-shadow: 0 18px 30px rgba(37, 211, 102, 0.32);
        }

        .btn-outline-light-strong {
            color: #fff;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .trust-ticks {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
            color: rgba(255, 255, 255, 0.88);
            font-weight: 600;
        }

        .trust-ticks span {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .hero-visual {
            position: relative;
            min-height: 520px;
            border-radius: var(--radius-xl);
            overflow: hidden;
            background:
                linear-gradient(180deg, rgba(6, 78, 59, 0.18), rgba(8, 28, 21, 0.34)),
                url("https://images.openai.com/static-rsc-4/DtjwwIB21Qglp9hp7g1lr5qUWFDAkxaP1BjehgArOCdadaU_v78rmcQiD3aHx5B5XCWKWiZ4FRymT76wBvDO__rT61LX9AL8DBYFOcKHRzns0edO3dxwDTK_eihYiFRNVDHnhQ9jLcX7TDRlVUKlc5_Jvc0KHhD7NpMl913H-cqDXSwZkDBoWzRW7i6YWPhB?purpose=fullsize") center/cover no-repeat;
            box-shadow: var(--shadow);
        }

        .floating-info {
            position: absolute;
            inset: auto 24px 24px auto;
            max-width: 270px;
            padding: 1.1rem 1.2rem;
            color: #0b2d1a;
        }

        .floating-info strong {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 1.15rem;
            margin-bottom: 0.35rem;
        }

        .trust-strip {
            margin-top: -18px;
            position: relative;
            z-index: 3;
        }

        .trust-panel {
            background: #fff;
            border-radius: 24px;
            padding: 1.1rem 1.25rem;
            box-shadow: 0 20px 50px rgba(8, 28, 21, 0.08);
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            color: var(--brand-green-dark);
        }

        .section-heading {
            max-width: 700px;
            margin-bottom: 2.4rem;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 1.05rem;
        }

        .soft-card,
        .vehicle-card,
        .faq-card,
        .seo-card,
        .cta-band {
            border-radius: var(--radius-lg);
            box-shadow: 0 18px 45px rgba(8, 28, 21, 0.08);
        }

        .soft-card {
            height: 100%;
            padding: 1.8rem;
            background: #fff;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .icon-pill {
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(22, 163, 74, 0.18), rgba(22, 163, 74, 0.08));
            color: var(--brand-green);
            font-size: 1.45rem;
            margin-bottom: 1rem;
        }

        .vehicle-scroller {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: minmax(280px, 1fr);
            gap: 1.25rem;
            overflow-x: auto;
            padding-bottom: 0.5rem;
            scroll-snap-type: x proximity;
        }

        .vehicle-scroller::-webkit-scrollbar {
            height: 10px;
        }

        .vehicle-scroller::-webkit-scrollbar-thumb {
            background: rgba(8, 28, 21, 0.16);
            border-radius: 999px;
        }

        .vehicle-card {
            scroll-snap-align: start;
            overflow: hidden;
            background: #fff;
            min-height: 100%;
        }

        .vehicle-image {
            height: 220px;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .vehicle-body {
            padding: 1.35rem;
        }

        .vehicle-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--muted);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .badge-booked {
            position: absolute;
            top: 16px;
            left: 16px;
            padding: 0.5rem 0.8rem;
            border-radius: 999px;
            background: #fff3cd;
            color: #8a5a00;
            font-size: 0.85rem;
            font-weight: 700;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
        }

        .why-item {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 1rem 1.1rem;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 16px 40px rgba(8, 28, 21, 0.06);
            font-weight: 700;
        }

        .why-item i {
            color: var(--brand-green);
            font-size: 1.15rem;
        }

        .cta-band {
            padding: 2.2rem;
            background:
                radial-gradient(circle at top right, rgba(111, 243, 165, 0.24), transparent 36%),
                linear-gradient(135deg, #0d2f1e, #14532d);
            color: #fff;
        }

        .seo-card,
        .faq-card {
            background: #fff;
            padding: 1rem;
        }

        .accordion-button:not(.collapsed) {
            color: var(--brand-green-dark);
            background: rgba(22, 163, 74, 0.08);
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(22, 163, 74, 0.16);
        }

        .final-cta {
            padding-bottom: 150px;
        }

        .final-panel {
            padding: 2.2rem;
            border-radius: 28px;
            background:
                linear-gradient(135deg, rgba(22, 163, 74, 0.12), rgba(111, 243, 165, 0.16)),
                #fff;
            box-shadow: 0 24px 60px rgba(8, 28, 21, 0.08);
        }

        .sticky-side {
            position: fixed;
            right: 18px;
            bottom: 94px;
            z-index: 1080;
        }

        .sticky-wa {
            width: 64px;
            height: 64px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: #083b20;
            background: linear-gradient(135deg, #77f5ad, var(--whatsapp-green));
            box-shadow: 0 20px 40px rgba(37, 211, 102, 0.38);
            font-size: 1.55rem;
        }

        .sticky-bar {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1090;
            background: rgba(8, 28, 21, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0.75rem;
        }

        .sticky-bar .btn {
            width: 100%;
            border-radius: 16px;
            padding: 0.9rem 1rem;
            font-weight: 800;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
        }

        .gallery-item {
            position: relative;
            display: block;
            width: 100%;
            border: 0;
            padding: 0;
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(8, 28, 21, 0.08);
            cursor: pointer;
        }

        .gallery-item img {
            display: block;
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            transition: transform 0.25s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.04);
        }

        .gallery-item span {
            position: absolute;
            left: 14px;
            bottom: 14px;
            padding: 0.45rem 0.75rem;
            border-radius: 999px;
            background: rgba(8, 28, 21, 0.72);
            color: #fff;
            font-size: 0.85rem;
            font-weight: 700;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .gallery-modal .modal-content {
            background: rgba(8, 28, 21, 0.95);
            border: 0;
            border-radius: 28px;
            overflow: hidden;
        }

        .gallery-modal .modal-header {
            border: 0;
            padding-bottom: 0;
        }

        .gallery-modal .btn-close {
            filter: invert(1);
            opacity: 0.9;
        }

        .gallery-modal .carousel-item img {
            width: 100%;
            max-height: 78vh;
            object-fit: contain;
            background: #081c15;
        }

        .gallery-modal .carousel-control-prev,
        .gallery-modal .carousel-control-next {
            width: 12%;
        }

        .gallery-modal .carousel-caption {
            left: 1rem;
            right: 1rem;
            bottom: 1rem;
            padding: 0.6rem 0.85rem;
            border-radius: 14px;
            background: rgba(8, 28, 21, 0.6);
        }

        .text-muted-strong {
            color: var(--muted);
        }

        .call-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.8rem 1.1rem;
            border-radius: 999px;
            background: #ffffff;
            color: var(--brand-green-dark);
            font-weight: 700;
            box-shadow: 0 16px 30px rgba(8, 28, 21, 0.08);
        }

        @media (max-width: 991.98px) {
            .section-space {
                padding: 72px 0;
            }

            .hero-visual {
                min-height: 360px;
            }

            .why-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 767.98px) {
            .display-title {
                font-size: 2.45rem;
            }

            .trust-strip {
                margin-top: 0;
            }

            .trust-panel {
                border-radius: 22px;
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

            .vehicle-scroller {
                grid-auto-columns: 88%;
            }

            .sticky-side {
                right: 14px;
                bottom: 92px;
            }

            .sticky-wa {
                width: 58px;
                height: 58px;
                font-size: 1.4rem;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 0.75rem;
            }

            .gallery-item {
                border-radius: 16px;
            }

            .gallery-item span {
                left: 10px;
                right: 10px;
                bottom: 10px;
                font-size: 0.72rem;
                padding: 0.35rem 0.55rem;
            }
        }
    </style>
</head>

<body>
    <header class="hero">
        <div class="container">
            <div class="navbar-lite d-flex align-items-center justify-content-between gap-3">
                <div class="brand-lockup">
                    <div class="brand-badge"><i class="bi bi-car-front-fill"></i></div>
                    <div class="brand-text">
                        <strong>Coorg Green Cabs</strong>
                        <span>Local taxi booking across Coorg</span>
                    </div>
                </div>
                <a class="call-chip" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">
                    <i class="bi bi-telephone-fill"></i>
                    <?= htmlspecialchars($phoneDisplay, ENT_QUOTES) ?>
                </a>
            </div>
            <div class="hero-banner">
                <img src="header-banner.jpg" alt="Coorg Green Cabs header banner">
            </div>
        </div>
    </header>

    <section class="trust-strip">
        <div class="container">
            <div class="trust-panel">
                <div class="row g-3 text-center text-lg-start">
                    <div class="col-lg-4">
                        <div class="trust-item justify-content-center justify-content-lg-start">
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>100+ Happy Customers</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trust-item justify-content-center justify-content-lg-start">
                            <i class="bi bi-shield-check"></i>
                            <span>Trusted Local Taxi Service</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trust-item justify-content-center justify-content-lg-start">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Available Across Coorg</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="section-space">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow"><i class="bi bi-grid-1x2-fill"></i> Services</span>
                    <h2 class="mt-3 mb-3">Everything You Need for Smooth Travel in Coorg</h2>
                    <p>Choose the right taxi service for sightseeing, airport pickup, outstation travel, and local rides in Coorg.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="soft-card">
                            <div class="icon-pill"><i class="bi bi-camera2"></i></div>
                            <h3 class="h4">Sightseeing Taxi</h3>
                            <p class="mb-2 text-muted-strong">Explore Coorg's top attractions with customized full-day and half-day packages.</p>
                            <small class="text-muted-strong">Abbey Falls, Raja's Seat, Mandalpatti Viewpoint, and Dubare Elephant Camp.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="soft-card">
                            <div class="icon-pill"><i class="bi bi-airplane-engines"></i></div>
                            <h3 class="h4">Airport Transfer</h3>
                            <p class="mb-2 text-muted-strong">Smooth airport pickup and drop service with on-time travel support.</p>
                            <small class="text-muted-strong">Available for Bangalore Airport, Mysore Airport, and Mangalore Airport.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="soft-card">
                            <div class="icon-pill"><i class="bi bi-sign-turn-right-fill"></i></div>
                            <h3 class="h4">Outstation Travel</h3>
                            <p class="mb-2 text-muted-strong">Affordable one-way and round-trip taxi service for nearby cities and custom routes.</p>
                            <small class="text-muted-strong">Popular routes include Bangalore, Mysore, Ooty, and Chikmagalur.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="soft-card">
                            <div class="icon-pill"><i class="bi bi-geo-fill"></i></div>
                            <h3 class="h4">Local Trips</h3>
                            <p class="mb-2 text-muted-strong">Flexible taxi booking for short trips, shopping, events, and local travel.</p>
                            <small class="text-muted-strong">Easy travel support around town with reliable local drivers.</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-6">
                        <div class="section-heading mb-0">
                            <span class="eyebrow"><i class="bi bi-tree-fill"></i> About Us</span>
                            <h2 class="mt-3 mb-3">Your Local Taxi Partner in Coorg</h2>
                            <p>Coorg Green Cabs is a reliable and affordable taxi service provider in Coorg, offering comfortable travel solutions for tourists and locals. Whether you're visiting Coorg for a vacation, family trip, or weekend getaway, we provide safe and hassle-free transportation.</p>
                            <p>Our experienced local drivers know the best routes, hidden spots, and major tourist attractions, ensuring you enjoy every moment of your journey.</p>
                            <p class="mb-0">We focus on affordability, punctuality, and customer satisfaction, making us one of the trusted taxi services in Coorg.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-visual" style="min-height: 420px; background:
                            linear-gradient(180deg, rgba(6, 78, 59, 0.18), rgba(8, 28, 21, 0.34)),
                            url('https://images.openai.com/static-rsc-4/gk-AzC9QZeqrPRbyilXBNAMeYpOg1qyF3_CVVf7KOPBAeuKU7X6LB7iDMarvJITvKN1Ulugxb33E1ysYKAAeF81jkgCM6phXM7yrIQaMKJNKDFCs1TX8KhC9lhgnAAZML32iio25ZPisPdy6_2adkxqxMjmL6k3NUS-aKQeXWH-EJ9DUnRvd05k-AmoLILC-?purpose=fullsize') center/cover no-repeat;">
                            <div class="floating-info glass-card">
                                <strong>Safe Travel Across Coorg</strong>
                                <p class="mb-2 text-muted-strong">Reliable taxi support for Madikeri, Kushalnagar, Virajpet, sightseeing tours, and nearby routes.</p>
                                <a class="btn btn-sm btn-success rounded-pill px-3 fw-bold" href="mailto:<?= htmlspecialchars($email, ENT_QUOTES) ?>">Email Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow"><i class="bi bi-car-front"></i> Vehicle Options</span>
                    <h2 class="mt-3 mb-3">Our Fleet - Comfortable &amp; Affordable Options</h2>
                    <p>Choose the right vehicle for your travel needs with clean, sanitized, air-conditioned, and well-maintained cars.</p>
                </div>
                <div class="vehicle-scroller">
                    <article class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('images/crysta.jpg');">
                            <span class="badge-booked">Most Booked</span>
                        </div>
                        <div class="vehicle-body">
                            <h3 class="h4 mb-2">Innova Crysta</h3>
                            <div class="vehicle-meta">
                                <span>6-7 Seater</span>
                                <span>Ideal for group travel</span>
                            </div>
                            <a class="btn btn-success rounded-pill px-4 fw-bold" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener">Book Now</a>
                        </div>
                    </article>
                    <article class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('images/sedan.jpg');"></div>
                        <div class="vehicle-body">
                            <h3 class="h4 mb-2">Sedan (Dzire / Etios)</h3>
                            <div class="vehicle-meta">
                                <span>4 Seater</span>
                                <span>Best for small families</span>
                            </div>
                            <a class="btn btn-success rounded-pill px-4 fw-bold" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">Book Now</a>
                        </div>
                    </article>
                    <article class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('images/innova.jpg');"></div>
                        <div class="vehicle-body">
                            <h3 class="h4 mb-2">SUV (Innova)</h3>
                            <div class="vehicle-meta">
                                <span>6 Seater</span>
                                <span>Comfort + luggage</span>
                            </div>
                            <a class="btn btn-success rounded-pill px-4 fw-bold" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener">Book Now</a>
                        </div>
                    </article>
                    <article class="vehicle-card">
                        <div class="vehicle-image" style="background-image: url('images/tt.jpg');"></div>
                        <div class="vehicle-body">
                            <h3 class="h4 mb-2">Tempo Traveller</h3>
                            <div class="vehicle-meta">
                                <span>10-12 Seater</span>
                                <span>Perfect for larger groups</span>
                            </div>
                            <a class="btn btn-success rounded-pill px-4 fw-bold" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">Book Now</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-5">
                        <div class="section-heading mb-0">
                            <span class="eyebrow"><i class="bi bi-patch-check-fill"></i> Why Choose Us</span>
                            <h2 class="mt-3 mb-3">Why Travelers Choose Coorg Green Cabs</h2>
                            <p>We ensure a safe, smooth, and enjoyable travel experience in Coorg with local expert drivers, affordable pricing, and flexible travel plans.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="why-grid">
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>Local Drivers</span></div>
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>Affordable Price</span></div>
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>Clean Vehicles</span></div>
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>24/7 Support</span></div>
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>Flexible Travel Plans</span></div>
                            <div class="why-item"><i class="bi bi-check-circle-fill"></i><span>Trusted by Tourists</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="cta-band">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7">
                            <span class="eyebrow text-dark bg-white"><i class="bi bi-map"></i> Quick Booking</span>
                            <h2 class="mt-3 mb-2">Planning a Coorg Trip?</h2>
                            <p class="mb-0 text-white-50">Talk to us now and get the right cab suggestion for your group size, route, and pickup point.</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-end">
                                <a class="btn-cta btn-call justify-content-center" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">
                                    <i class="bi bi-telephone-fill"></i>
                                    Call Now
                                </a>
                                <a class="btn-cta btn-whatsapp justify-content-center" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener">
                                    <i class="bi bi-whatsapp"></i>
                                    WhatsApp Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow"><i class="bi bi-search"></i> Coorg Taxi Details</span>
                    <h2 class="mt-3 mb-3">Best Taxi Service in Coorg - Affordable Cab Booking</h2>
                    <p>Looking for a reliable and affordable taxi service in Coorg? Coorg Green Cabs provides comfortable rides for sightseeing, airport transfers, and outstation travel.</p>
                </div>
                <div class="seo-card">
                    <div class="accordion accordion-flush" id="seoAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#seoOne" aria-expanded="true" aria-controls="seoOne">
                                    Taxi service in Coorg for sightseeing and local travel
                                </button>
                            </h3>
                            <div id="seoOne" class="accordion-collapse collapse show" data-bs-parent="#seoAccordion">
                                <div class="accordion-body">
                                    We offer taxi services across Madikeri, Kushalnagar, Virajpet, and nearby areas. Whether you need a cab for a Coorg sightseeing trip or local travel, we provide safe and comfortable rides at competitive prices.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seoTwo" aria-expanded="false" aria-controls="seoTwo">
                                    Airport pickup and outstation cab booking
                                </button>
                            </h3>
                            <div id="seoTwo" class="accordion-collapse collapse" data-bs-parent="#seoAccordion">
                                <div class="accordion-body">
                                    Our taxi services are perfect for Coorg sightseeing packages, Bangalore to Coorg cab service, Coorg to Mysore taxi, and airport pickup and drop.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seoThree" aria-expanded="false" aria-controls="seoThree">
                                    Easy booking support through call and WhatsApp
                                </button>
                            </h3>
                            <div id="seoThree" class="accordion-collapse collapse" data-bs-parent="#seoAccordion">
                                <div class="accordion-body">
                                    Book your taxi today and enjoy a stress-free travel experience. Call, WhatsApp, or email us for quick support and the best travel option for your trip.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow"><i class="bi bi-images"></i> Gallery</span>
                    <h2 class="mt-3 mb-3">Gallery of Our Cabs and Trips</h2>
                    <p>Browse all our available gallery images. Tap any photo to open it in a full-screen slider.</p>
                </div>
                <div class="gallery-grid">
                    <?php foreach ($galleryImages as $index => $galleryImage): ?>
                        <?php
                        $galleryFile = basename($galleryImage);
                        $galleryName = ucwords(str_replace(['-', '_'], ' ', pathinfo($galleryFile, PATHINFO_FILENAME)));
                        $gallerySrc = 'images/' . rawurlencode($galleryFile);
                        ?>
                        <button
                            type="button"
                            class="gallery-item"
                            data-bs-toggle="modal"
                            data-bs-target="#galleryModal"
                            data-bs-slide-to="<?= $index ?>"
                            aria-label="Open <?= htmlspecialchars($galleryName, ENT_QUOTES) ?>"
                        >
                            <img src="<?= htmlspecialchars($gallerySrc, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($galleryName, ENT_QUOTES) ?>">
                            <span><?= htmlspecialchars($galleryName, ENT_QUOTES) ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow"><i class="bi bi-question-circle"></i> FAQ</span>
                    <h2 class="mt-3 mb-3">Frequently Asked Questions</h2>
                    <p>Here are some common questions about booking a taxi with Coorg Green Cabs.</p>
                </div>
                <div class="faq-card">
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                    What is the taxi price in Coorg?
                                </button>
                            </h3>
                            <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pricing depends on the trip type, number of passengers, pickup point, and duration. Call or WhatsApp us for a quick quote based on your exact plan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                    Do you provide airport pickup from Bangalore?
                                </button>
                            </h3>
                            <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer airport pickup and drop services, including Bangalore airport transfers.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    Which vehicles are available?
                                </button>
                            </h3>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sedans, Innova, Innova Crysta, and Tempo Travellers are available based on your group size and trip plan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    Can I book full-day sightseeing?
                                </button>
                            </h3>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide customizable full-day and half-day sightseeing packages across Coorg.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0 final-cta">
            <div class="container">
                <div class="final-panel text-center">
                    <span class="eyebrow"><i class="bi bi-telephone-outbound-fill"></i> Fast &amp; Easy Booking</span>
                    <h2 class="mt-3 mb-3">Book Your Coorg Taxi Now</h2>
                    <p class="text-muted-strong mb-3">Plan your trip with ease. Contact Coorg Green Cabs today and get the best taxi service in Coorg.</p>
                    <p class="h3 fw-bold text-success mb-4"><?= htmlspecialchars($phoneDisplay, ENT_QUOTES) ?></p>
                    <p class="mb-4"><a class="text-success fw-semibold" href="mailto:<?= htmlspecialchars($email, ENT_QUOTES) ?>"><?= htmlspecialchars($email, ENT_QUOTES) ?></a></p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a class="btn-cta btn-call justify-content-center" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">
                            <i class="bi bi-telephone-fill"></i>
                            Call Now
                        </a>
                        <a class="btn-cta btn-whatsapp justify-content-center" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener">
                            <i class="bi bi-whatsapp"></i>
                            WhatsApp Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="pb-5 pb-md-4">
        <div class="container">
            <div class="final-panel text-center py-4">
                <h3 class="h4 mb-2">Coorg Green Cabs - Taxi Service in Coorg</h3>
                <p class="text-muted-strong mb-3">Serving Madikeri, Kushalnagar, Virajpet, and nearby areas.</p>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                    <a class="text-success fw-semibold" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>"><?= htmlspecialchars($phoneDisplay, ENT_QUOTES) ?></a>
                    <a class="text-success fw-semibold" href="mailto:<?= htmlspecialchars($email, ENT_QUOTES) ?>"><?= htmlspecialchars($email, ENT_QUOTES) ?></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade gallery-modal" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title h5 text-white mb-0">Coorg Green Cabs Gallery</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-2">
                    <div id="galleryCarousel" class="carousel slide" data-bs-touch="true" data-bs-interval="false">
                        <div class="carousel-inner">
                            <?php foreach ($galleryImages as $index => $galleryImage): ?>
                                <?php
                                $galleryFile = basename($galleryImage);
                                $galleryName = ucwords(str_replace(['-', '_'], ' ', pathinfo($galleryFile, PATHINFO_FILENAME)));
                                $gallerySrc = 'images/' . rawurlencode($galleryFile);
                                ?>
                                <div class="carousel-item<?= $index === 0 ? ' active' : '' ?>">
                                    <img src="<?= htmlspecialchars($gallerySrc, ENT_QUOTES) ?>" class="d-block w-100" alt="<?= htmlspecialchars($galleryName, ENT_QUOTES) ?>">
                                    <div class="carousel-caption">
                                        <p class="mb-0 fw-semibold"><?= htmlspecialchars($galleryName, ENT_QUOTES) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev" aria-label="Previous image">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next" aria-label="Next image">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-side">
        <a class="sticky-wa" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <div class="sticky-bar">
        <div class="container">
            <div class="row g-2">
                <div class="col-6">
                    <a class="btn btn-success" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES) ?>">
                        <i class="bi bi-telephone-fill me-2"></i>Call
                    </a>
                </div>
                <div class="col-6">
                    <a class="btn btn-light text-success" href="<?= htmlspecialchars($whatsAppHref, ENT_QUOTES) ?>" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var galleryModal = document.getElementById('galleryModal');
            var galleryCarousel = document.getElementById('galleryCarousel');

            if (!galleryModal || !galleryCarousel || typeof bootstrap === 'undefined') {
                return;
            }

            var carousel = bootstrap.Carousel.getOrCreateInstance(galleryCarousel, {
                interval: false,
                ride: false
            });

            galleryModal.addEventListener('show.bs.modal', function(event) {
                var trigger = event.relatedTarget;
                if (!trigger) {
                    return;
                }

                var slideIndex = Number(trigger.getAttribute('data-bs-slide-to') || 0);
                carousel.to(slideIndex);
            });
        });
    </script>
</body>

</html>
