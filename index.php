<?php /* Template Name: Speedy Landing */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Printing Services in Houston | Speedy Printing</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'NORD BLACK', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #333333;
            background: #ffffff;
            line-height: 1.6;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* HERO SECTION */
        @keyframes heroFadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes heroBadgeIn {
            from { opacity: 0; transform: translateX(-16px); }
            to   { opacity: 1; transform: translateX(0); }
        }
        @keyframes floatOrb {
            0%, 100% { transform: translateY(0) scale(1); }
            50%       { transform: translateY(-20px) scale(1.04); }
        }
        @keyframes rotateSlow {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }
        @keyframes shimmer {
            0%   { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        .hero {
            background: linear-gradient(135deg, #e5e5e5 0%, #ffffff 100%);
            padding: 0;
            position: relative;
            overflow: hidden;
            min-height: 92vh;
            display: flex;
            align-items: center;
        }

        /* Mesh background blobs */
        .hero-blob {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }
        .hero-blob-1 {
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(0,65,83,0.08) 0%, transparent 70%);
            top: -120px; right: -100px;
            animation: floatOrb 9s ease-in-out infinite;
        }
        .hero-blob-2 {
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(190,175,149,0.15) 0%, transparent 70%);
            bottom: -60px; left: -80px;
            animation: floatOrb 12s ease-in-out infinite reverse;
        }
        .hero-blob-3 {
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(0,65,83,0.05) 0%, transparent 70%);
            top: 40%; left: 30%;
            animation: floatOrb 15s ease-in-out infinite 2s;
        }

        /* Rotating ring decoration */
        .hero-ring {
            position: absolute;
            right: 6%;
            top: 50%;
            transform: translateY(-50%);
            width: 420px;
            height: 420px;
            border-radius: 50%;
            border: 1px solid rgba(0,65,83,0.08);
            pointer-events: none;
        }
        .hero-ring::before {
            content: '';
            position: absolute;
            inset: 28px;
            border-radius: 50%;
            border: 1px solid rgba(0,65,83,0.06);
        }
        .hero-ring::after {
            content: '';
            position: absolute;
            inset: 56px;
            border-radius: 50%;
            border: 1px dashed rgba(190,175,149,0.2);
            animation: rotateSlow 30s linear infinite;
        }

        /* Grid pattern overlay */
        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(0,65,83,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,65,83,0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            max-width: 1280px;
            margin: 0 auto;
            padding: 5rem 1.5rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            width: 100%;
        }

        .hero-content {
            text-align: left;
        }

        /* Eyebrow label */
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(0,65,83,0.08);
            border: 1px solid rgba(0,65,83,0.15);
            color: #004153;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.4rem 0.9rem;
            border-radius: 2rem;
            margin-bottom: 1.5rem;
            animation: heroBadgeIn 0.6s ease both;
        }
        .hero-eyebrow::before {
            content: '';
            width: 6px; height: 6px;
            background: #004153;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 4.5vw, 3.6rem);
            font-weight: 800;
            color: #004153;
            line-height: 1.1;
            margin-bottom: 1.25rem;
            letter-spacing: -0.02em;
            animation: heroFadeUp 0.7s ease 0.1s both;
        }

        .hero h1 em {
            font-style: normal;
            background: linear-gradient(90deg, #beaf95 0%, #d4c9b0 40%, #beaf95 80%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 4s linear infinite 1s;
        }

        .hero p {
            font-size: 1.1rem;
            color: #333333;
            margin-bottom: 2rem;
            line-height: 1.75;
            max-width: 480px;
            animation: heroFadeUp 0.7s ease 0.2s both;
        }

        .benefits-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 2rem;
            flex-direction: row;
            animation: heroFadeUp 0.7s ease 0.3s both;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.85rem;
            font-weight: 600;
            color: #333333;
            background: rgba(0,65,83,0.05);
            border: 1px solid rgba(0,65,83,0.1);
            padding: 0.35rem 0.85rem;
            border-radius: 2rem;
            letter-spacing: 0.01em;
            transition: background 0.2s, border-color 0.2s;
        }

       

        .benefit-item::before {
            content: '✓';
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            background: #004153;
            color: white;
            border-radius: 50%;
            font-weight: bold;
            font-size: 10px;
            flex-shrink: 0;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            animation: heroFadeUp 0.7s ease 0.4s both;
        }

        .btn {
            padding: 0.9rem 1.75rem;
            font-size: 0.95rem;
            font-weight: 700;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            letter-spacing: 0.02em;
        }

        .btn-primary {
            background: #004153;
            color: white;
            box-shadow: 0 4px 20px rgba(0,65,83,0.25);
        }

        .btn-primary:hover {
            background: #002e3b;
            box-shadow: 0 6px 28px rgba(0,65,83,0.35);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: white;
            color: #333333;
            border: 2px solid #beaf95;
        }

        .btn-secondary:hover {
            background: #f7f7f7;
            transform: translateY(-2px);
        }

        /* Hero stats panel */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: rgba(0,65,83,0.08);
            border-radius: 1rem;
            overflow: hidden;
            margin-top: 2rem;
            border: 1px solid rgba(0,65,83,0.1);
            animation: heroFadeUp 0.7s ease 0.55s both;
        }

        .hero-stat {
            padding: 1.25rem 1rem;
            text-align: center;
            background: white;
        }

        .hero-stat strong {
            display: block;
            font-size: 1.6rem;
            font-weight: 800;
            color: #004153;
            line-height: 1;
            margin-bottom: 0.3rem;
            letter-spacing: -0.02em;
        }

        .hero-stat span {
            font-size: 0.72rem;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 600;
        }

        /* Hero visual panel */
        .hero-visual {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            animation: heroFadeUp 0.8s ease 0.2s both;
        }

        .hero-card-main {
            background: white;
            border: 1px solid rgba(0,65,83,0.1);
            border-radius: 1.25rem;
            padding: 2rem;
            box-shadow: 0 4px 24px rgba(0,65,83,0.07);
        }

        .hero-card-main-label {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #beaf95;
            margin-bottom: 1rem;
        }

        .hero-services-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .hero-pill {
            padding: 0.45rem 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 2rem;
            border: 1px solid #e5e5e5;
            color: #555;
            transition: all 0.2s;
            cursor: default;
        }

        .hero-pill:hover,
        .hero-pill.active {
            background: #004153;
            border-color: #004153;
            color: #fff;
        }

        .hero-pill.active {
            background: #004153;
            border-color: #004153;
            color: #fff;
        }

        .hero-cards-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .hero-card-small {
            background: white;
            border: 1px solid rgba(0,65,83,0.08);
            border-radius: 1rem;
            padding: 1.25rem;
            box-shadow: 0 2px 12px rgba(0,65,83,0.05);
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .hero-card-small:hover {
            border-color: rgba(190,175,149,0.4);
            box-shadow: 0 4px 20px rgba(0,65,83,0.1);
        }

        .hero-card-small-icon {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .hero-card-small h4 {
            font-size: 0.82rem;
            font-weight: 700;
            color: #004153;
            margin-bottom: 0.25rem;
        }

        .hero-card-small p {
            font-size: 0.72rem;
            color: #777;
            line-height: 1.4;
            margin: 0;
        }

        /* deadline text */
        .hero-deadline {
            font-size: 0.82rem;
            color: #888;
            margin-top: 0.25rem;
            animation: heroFadeUp 0.7s ease 0.5s both;
        }

        .language-toggle {
            display: flex;
            gap: 0.5rem;
            margin-top: 1.25rem;
            animation: heroFadeUp 0.7s ease 0.6s both;
        }

        .language-btn {
            padding: 0.4rem 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 2rem;
            border: 1.5px solid #e5e5e5;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #e5e5e5;
            color: #333333;
            letter-spacing: 0.04em;
        }

        .language-btn.active {
            background: #004153;
            border-color: #004153;
            color: white;
        }

        .language-btn:hover:not(.active) {
            border-color: #004153;
            color: #004153;
        }

        /* Hero responsive */
        @media (max-width: 900px) {
            .hero {
                min-height: auto;
            }
            .hero-inner {
                grid-template-columns: 1fr;
                gap: 2.5rem;
                padding: 4rem 1.5rem;
            }
            .hero-content {
                text-align: center;
            }
            .hero-eyebrow {
                margin-left: auto;
                margin-right: auto;
            }
            .hero p {
                margin-left: auto;
                margin-right: auto;
            }
            .benefits-list {
                justify-content: center;
            }
            .button-group {
                justify-content: center;
            }
            .language-toggle {
                justify-content: center;
            }
            .hero-ring {
                display: none;
            }
        }

        @media (max-width: 600px) {
            .hero h1 {
                font-size: 2rem;
            }
            .hero-stats {
                grid-template-columns: repeat(3, 1fr);
            }
            .hero-cards-row {
                grid-template-columns: 1fr;
            }
        }

        /* SECTION HEADERS */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #004153;
        }

        .section-header p {
            font-size: 1.1rem;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
        }

        /* SERVICES SECTION */
        .services {
            background: #E8E0D0;
            padding: 1rem 1.5rem;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            
           
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
           
        }

        .service-card {
            background: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            border: 1px solid #e5e5e5;
            display: flex;
            gap: 1rem;
        }

        .service-icon {
            width: 72px;
            height: 72px;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
            padding: 6px;
        }

        .service-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            mix-blend-mode: multiply;
        }

        .service-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #004153;
        }

        .service-content p {
            font-size: 0.95rem;
            color: #333333;
        }

        /* HOW IT WORKS */
        .how-it-works {
            background: white;
            padding: 1rem 1.5rem;
            padding-bottom: 100px ;
           
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .step-card {
            position: relative;
        }

        .step-number {
            font-size: 4rem;
            font-weight: 700;
            color: #beaf95;
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .step-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: #004153;
            
        }

        .step-card p {
            color: #333333;
            line-height: 1.6;
        }

        /* WHY CLIENTS SECTION */
        .why-clients {
            background: #E8E0D0;
            padding: 1rem 1.5rem;
            padding-bottom: 100px;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .benefit-card {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-radius: 1rem;
        }

        .benefit-icon {
            width: 72px;
            height: 72px;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
            padding: 6px;
        }

        .benefit-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            mix-blend-mode: multiply;
        }

        .benefit-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #004153;
        }

        .benefit-card p {
            font-size: 0.9rem;
            color: #333333;
        }

        /* TESTIMONIALS */
        .testimonials {
            background: white;
            padding: 1rem 1.5rem;
            margin-top: -50px;
            padding-bottom: 100px;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 1.5rem;
            border: 1px solid #e5e5e5;
            border-radius: 0.75rem;
            position: relative;
        }

        .stars {
            color: #beaf95;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .testimonial-card p {
            font-style: italic;
            color: #333333;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .testimonial-author {
            padding-top: 1rem;
            border-top: 1px solid #e5e5e5;
        }

        .testimonial-author strong {
            display: block;
            color: #004153;
            margin-bottom: 0.25rem;
        }

        .testimonial-author small {
            color: #333333;
        }

        /* FAQ */
        .faq-section {
            background: #f7f7f7;
            padding: 1rem 1.5rem;
            margin-top: -50px;
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 1rem;
            border: 1px solid #e5e5e5;
            padding: 1rem;
        }

        .faq-item {
            border-bottom: 1px solid #e5e5e5;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            padding: 1.25rem 1rem;
            font-weight: 600;
            color: #004153;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            color: #beaf95;
            background: #f7f7f7;
        }

        .faq-question.active {
            background: #f7f7f7;
        }

        .faq-toggle {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .faq-question.active .faq-toggle {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer.show {
            max-height: 500px;
            padding: 0 1rem 1rem;
        }

        .faq-answer p {
            color: #333333;
            line-height: 1.8;
        }

        /* CTA SECTION */
        .cta-section {
            background: #004153;
            color: white;
            padding: 1rem 1.5rem;
            text-align: center;
            padding-bottom: 100px;
        }

        .cta-section h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }

        .cta-section p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        .btn-light {
            background: #beaf95;
            color: white;
        }

        .btn-light:hover {
            background: #a89880;
        }

        /* FORM SECTION */
        .form-section {
            background: white;
            padding: 1rem 1.5rem;
            border-top: 1px solid #e5e5e5;
        }

        .form-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .form-card {
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #004153;
            font-size: 0.95rem;
        }

        .form-group label .required {
            color: #beaf95;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 0.75rem 1rem;
            border: 1px solid #e5e5e5;
            border-radius: 0.5rem;
            font-family: inherit;
            font-size: 1rem;
            background: #f7f7f7;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            background: white;
            border-color: #beaf95;
            outline: none;
            box-shadow: 0 0 0 3px rgba(190, 175, 149, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-info {
            grid-column: 1 / -1;
            background: rgba(190, 175, 149, 0.12);
            border: 1px solid rgba(190, 175, 149, 0.35);
            padding: 1rem;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            color: #333333;
        }

        .submit-btn {
            grid-column: 1 / -1;
            padding: 1rem;
            font-size: 1rem;
            font-weight: 600;
        }

        /* CONTACT INFO GRID */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            background: #f7f7f7;
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid #e5e5e5;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            text-align: center;
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            background: white;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .contact-item strong {
            color: #004153;
            font-weight: 600;
        }

        .contact-item a {
            color: #333333;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .contact-item a:hover {
            color: #beaf95;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1rem; }
            .section-header h2 { font-size: 1.8rem; }
            .button-group { flex-direction: column; }
            .btn { width: 100%; justify-content: center; }
            .form-grid { grid-template-columns: 1fr; }
            .benefits-grid { grid-template-columns: 1fr; }
            .step-number { font-size: 2.5rem; }
        }
        
        /* HEADER / NAV */
        .site-header {
            background: #004153;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        }

        .nav-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        .nav-logo {
            flex-shrink: 0;
        }

        .nav-logo img {
            height: 40px;
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
            flex: 1;
            justify-content: center;
        }

        .nav-links a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
            border-radius: 0.4rem;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .nav-links a:hover {
            color: #fff;
            background: rgba(255,255,255,0.12);
        }

        .nav-cta {
            flex-shrink: 0;
        }

        .nav-cta a {
            background: #beaf95;
            color: white;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 700;
            padding: 0.55rem 1.2rem;
            border-radius: 0.5rem;
            transition: background 0.2s ease, transform 0.2s;
            white-space: nowrap;
            letter-spacing: 0.02em;
        }

        .nav-cta a:hover {
            background: #a89880;
            transform: translateY(-1px);
        }

        .nav-hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            cursor: pointer;
            padding: 0.5rem;
            border: none;
            background: none;
            flex-shrink: 0;
        }

        .nav-hamburger span {
            display: block;
            width: 22px;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s ease;
            transform-origin: center;
        }

        /* Hamburger X animation */
        .nav-hamburger.is-open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }
        .nav-hamburger.is-open span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }
        .nav-hamburger.is-open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        /* Mobile drawer */
        .nav-mobile {
            max-height: 0;
            overflow: hidden;
            background: #003344;
            border-top: 1px solid rgba(255,255,255,0.08);
            transition: max-height 0.35s cubic-bezier(0.4,0,0.2,1);
        }

        .nav-mobile.open {
            max-height: 400px;
        }

        .nav-mobile-inner {
            padding: 0.5rem 1.5rem 1.25rem;
        }

        .nav-mobile a {
            display: flex;
            align-items: center;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.07);
            transition: color 0.2s, padding-left 0.2s;
        }

        .nav-mobile a:last-child {
            border-bottom: none;
            color: #beaf95;
            font-weight: 700;
            margin-top: 0.25rem;
        }

        .nav-mobile a:hover {
            color: #fff;
            padding-left: 0.5rem;
        }

        /* Breakpoints for header */
        @media (max-width: 480px) {
            .nav-links {
                display: none;
            }
            .nav-cta {
                display: none;
            }
            .nav-hamburger {
                display: flex;
            }
        }

        @media (max-width: 480px) {
            .nav-inner {
                height: 60px;
                padding: 0 1rem;
            }
            .nav-logo img {
                height: 34px;
            }
        }
        /* ── FOOTER ── */
        .site-footer {
            background: #004153;
            color: rgba(255,255,255,0.85);
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .site-footer::before {
            content: '';
            display: block;
            width: 100%;
            height: 40px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 40' preserveAspectRatio='none'%3E%3Cpath d='M0,40 L0,18 C60,8 80,28 140,15 C200,2 220,30 280,20 C340,10 360,32 420,18 C480,4 500,26 560,14 C620,2 640,28 700,16 C760,4 780,30 840,20 C900,10 920,34 980,22 C1040,10 1060,28 1120,16 C1180,4 1200,26 1260,14 C1320,2 1360,24 1440,12 L1440,40 Z' fill='white'/%3E%3C/svg%3E") no-repeat top center / cover;
            position: absolute;
            top: 0; left: 0;
            z-index: 1;
        }

        /* Main footer body */
        .footer-main {
            position: relative;
            z-index: 2;
            padding: 4rem 1.5rem 3rem;
            border-bottom: 1px solid rgba(255,255,255,0.12);
        }

        .footer-main-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 200px 1.2fr 1fr 1fr 1fr;
            gap: 2.5rem;
            align-items: flex-start;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
            gap: 0.85rem;
        }

        .footer-brand img {
            height: 42px;
            width: auto;
            filter: brightness(0) invert(1);
            opacity: 0.9;
        }

        .footer-brand p {
            font-size: 0.78rem;
            color: rgba(255,255,255,0.4);
            line-height: 1.6;
        }

        .footer-col h4 {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #beaf95;
            margin-bottom: 1.1rem;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 0.55rem;
            color: rgba(255,255,255,0.8);
            font-size: 0.87rem;
            margin-bottom: 0.6rem;
        }
        .footer-contact-item svg { flex-shrink: 0; opacity: 0.7; }
        .footer-contact-item a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-contact-item a:hover { color: #fff; }

        .footer-hours {
            margin-top: 0.85rem;
            font-size: 0.82rem;
            color: rgba(255,255,255,0.6);
            line-height: 1.75;
        }
        .footer-hours strong {
            display: block;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #beaf95;
            margin-bottom: 0.25rem;
        }

        .footer-social {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        .footer-social a {
            width: 32px; height: 32px;
            border-radius: 0.3rem;
            background: rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
        }
        .footer-social a:hover { background: #beaf95; color: #fff; }
        .footer-social a svg { width: 15px; height: 15px; fill: currentColor; }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }
        .footer-col ul li a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }
        .footer-col ul li a:hover { color: #beaf95; }

        /* Newsletter band — bottom */
        .footer-newsletter {
            position: relative;
            z-index: 2;
            padding: 2.5rem 1.5rem;
            background: rgba(0,0,0,0.12);
        }

        .footer-newsletter-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .footer-subscribe h3 {
            font-size: 1.25rem;
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 0.85rem;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .footer-subscribe h3 span { color: #beaf95; }

        .footer-subscribe-form {
            display: flex;
            gap: 0.6rem;
            flex-wrap: wrap;
        }

        .footer-subscribe-form input[type="email"] {
            width: 260px;
            padding: 0.7rem 1rem;
            border-radius: 0.3rem;
            border: 1px solid rgba(255,255,255,0.25);
            background: transparent;
            color: #fff;
            font-size: 0.88rem;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s;
        }
        .footer-subscribe-form input[type="email"]::placeholder {
            color: rgba(255,255,255,0.45);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-size: 0.78rem;
        }
        .footer-subscribe-form input[type="email"]:focus { border-color: #beaf95; }

        .footer-subscribe-form button {
            padding: 0.7rem 1.5rem;
            background: #5d8f9a;
            color: #fff;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            border: none;
            border-radius: 0.3rem;
            cursor: pointer;
            font-family: inherit;
            transition: background 0.2s;
            white-space: nowrap;
        }
        .footer-subscribe-form button:hover { background: #4a7a85; }

        .footer-newsletter-success {
            display: none;
            color: #beaf95;
            font-weight: 600;
            font-size: 0.88rem;
            margin-top: 0.5rem;
        }

        /* Bottom bar */
        .footer-bottom {
            position: relative;
            z-index: 2;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 1.25rem 1.5rem;
        }
        .footer-bottom-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .footer-bottom p { font-size: 0.82rem; color: rgba(255,255,255,0.45); }
        .footer-bottom p a { color: rgba(255,255,255,0.45); text-decoration: none; transition: color 0.2s; }
        .footer-bottom p a:hover { color: rgba(255,255,255,0.8); }

        /* footer responsive */
      
        @media (max-width: 768px) {
            .footer-main-inner { grid-template-columns: 1fr 1fr; gap: 1.75rem; }
            .footer-brand { grid-column: 1 / -1; flex-direction: row; align-items: center; gap: 1.25rem; }
            .footer-brand p { display: none; }
            .footer-subscribe-form input[type="email"] { width: 200px; }
        }
        @media (max-width: 540px) {
            .footer-main-inner { grid-template-columns: 1fr 1fr; gap: 1.5rem; }
            .footer-brand { grid-column: 1 / -1; }
            .footer-newsletter-inner { flex-direction: column; gap: 0.75rem; }
            .footer-subscribe h3 { font-size: 1.1rem; }
            .footer-subscribe-form { flex-direction: column; }
            .footer-subscribe-form input[type="email"] { width: 100%; }
            .footer-subscribe-form button { width: 100%; }
        }
        @media (max-width: 380px) {
            .footer-main-inner { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- SITE HEADER -->
<header class="site-header">
    <nav class="nav-inner">
        <a class="nav-logo" href="https://myspeedyprinting.com">
            <img src="https://myspeedyprinting.com/wp-content/uploads/2026/05/Speedy-Printing-Logo-02.webp" alt="Speedy Printing Logo">
        </a>

        <ul class="nav-links">
            <li><a href="https://myspeedyprinting.com">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>

        <div class="nav-cta">
            <a href="https://speedyprintinghouston.com/upload/">Request a Quote</a>
        </div>

        <button class="nav-hamburger" onclick="toggleMobileMenu()" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <div class="nav-mobile" id="nav-mobile">
        <a href="https://myspeedyprinting.com">Home</a>
        <a href="#services" onclick="closeMobileMenu()">Services</a>
        <a href="#how-it-works" onclick="closeMobileMenu()">How It Works</a>
        <a href="#testimonials" onclick="closeMobileMenu()">Testimonials</a>
        <a href="#faq" onclick="closeMobileMenu()">FAQ</a>
        <a href="https://speedyprintinghouston.com/upload/" onclick="closeMobileMenu()">→ Request a Quote</a>
    </div>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <h1 id="hero-title">Premium printing that makes your brand 
        <br>look sharp — fast, local, and reliable.</br></h1>
        <p id="hero-subtitle">Full-service printing with design support and quick turnaround in Houston</p>

        <div class="benefits-list">
            <div class="benefit-item" id="benefit-1">Local Houston team</div>
            <div class="benefit-item" id="benefit-2">Quality-first printing</div>
            <div class="benefit-item" id="benefit-3">Bilingual support EN/ES</div>
        </div>

        <div class="button-group">
            <a href="https://speedyprintinghouston.com/upload/" class="btn btn-primary" id="btn-quote">Request a Quote</a>
            <a href="tel:7135550123" class="btn btn-secondary" id="btn-call">📞 Call Now</a>
        </div>

        <p style="font-size: 0.95rem; color: #333333; margin-top: 1.5rem;" id="deadline-text">
            Tell us your deadline — we'll recommend the best option.
        </p>

        <div class="language-toggle">
            <button class="language-btn active" onclick="setLanguage('en')" id="lang-en">English</button>
            <button class="language-btn" onclick="setLanguage('es')" id="lang-es">Español</button>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <h2 id="services-title">What we print</h2>
            <p id="services-subtitle">From everyday business needs to custom specialty projects</p>
        </div>

        <div class="services-grid" id="services-grid">
            <!-- Services will be inserted by JavaScript -->
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="how-it-works" id="how-it-works">
    <div class="container">
        <div class="section-header">
            <h2 id="howitworks-title">How it works</h2>
            <p id="howitworks-subtitle">Simple process from idea to finished product</p>
        </div>

        <div class="steps-grid" id="steps-grid">
            <!-- Steps will be inserted by JavaScript -->
        </div>
    </div>
</section>

<!-- WHY CLIENTS -->
<section class="why-clients">
    <div class="container">
        <div class="section-header">
            <h2 id="why-title">Why clients come back</h2>
        </div>

        <div class="benefits-grid" id="benefits-grid">
            <!-- Benefits will be inserted by JavaScript -->
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2 id="testimonials-title">What our clients say</h2>
        </div>

        <div class="testimonials-grid" id="testimonials-grid">
            <!-- Testimonials will be inserted by JavaScript -->
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <h2 id="cta-title">No need to have it figured out.</h2>
        <p id="cta-text">
            Send a quick message—even a rough idea or photo—and we'll guide you to the best print option for your budget and deadline.
        </p>
        <a href="https://speedyprintinghouston.com/upload/" class="btn btn-light" id="btn-cta">Request a Quote</a>
    </div>
</section>

<!-- FAQ -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 id="faq-title">Frequently asked questions</h2>
        </div>

        <div class="faq-list" id="faq-list">
            <!-- FAQs will be inserted by JavaScript -->
        </div>
    </div>
</section>

<!-- FORM SECTION -->
<section class="form-section" id="contact">
    <div class="form-container">
        <div class="section-header">
            <h2 id="form-title">Get Your Quote Today</h2>
            <p id="form-subtitle">Tell us what you need and we'll guide you through the best printing options</p>
        </div>

        <div class="form-card">
            <form id="quote-form" onsubmit="handleFormSubmit(event)">
                <div class="form-grid">
                    <!-- Col 1 -->
                    <div class="form-group">
                        <label for="name"><span id="label-name">Name</span> <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required placeholder="">
                    </div>

                    <!-- Col 2 -->
                    <div class="form-group">
                        <label for="email"><span id="label-email">Email</span> <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="">
                    </div>

                    <!-- Col 1 -->
                    <div class="form-group">
                        <label for="phone"><span id="label-phone">Phone (optional)</span></label>
                        <input type="tel" id="phone" name="phone" placeholder="(713) 555-0123">
                    </div>

                    <!-- Col 2 -->
                    <div class="form-group">
                        <label for="company"><span id="label-company">Company (optional)</span></label>
                        <input type="text" id="company" name="company" placeholder="">
                    </div>

                    <!-- Col 1 -->
                    <div class="form-group">
                        <label for="printType"><span id="label-printtype">What do you need printed?</span></label>
                        <select id="printType" name="printType">
                            <option value="">Select a type</option>
                            <option value="business-cards">Business Cards</option>
                            <option value="flyers">Flyers & Brochures</option>
                            <option value="banners">Banners & Signage</option>
                            <option value="booklets">Booklets</option>
                            <option value="stickers">Stickers & Labels</option>
                            <option value="invitations">Invitations</option>
                            <option value="vehicle">Vehicle Wraps</option>
                            <option value="other">Other / Not sure</option>
                        </select>
                    </div>

                    <!-- Col 2 -->
                    <div class="form-group">
                        <label for="quantity"><span id="label-quantity">Quantity (optional)</span></label>
                        <input type="text" id="quantity" name="quantity" placeholder="100">
                    </div>

                    <!-- Col 1 — full width -->
                    <div class="form-group full-width">
                        <label for="deadline"><span id="label-deadline">Deadline (optional)</span></label>
                        <input type="text" id="deadline" name="deadline" placeholder="">
                    </div>

                    <div class="form-group full-width">
                        <label for="message"><span id="label-message">Message</span> <span class="required">*</span></label>
                        <textarea id="message" name="message" required placeholder="Tell us about your project..."></textarea>
                    </div>

                    <div class="form-info full-width" id="form-info">
                        After you submit, we'll reply with instructions to send/upload files.
                    </div>

                    <button type="submit" class="btn btn-primary submit-btn" id="btn-submit">Submit Quote Request</button>
                </div>
            </form>
        </div>

    </div>
</section>

<script>
    // BRAND COLORS FROM PRINTIK
    // Primary: #beaf95 (Teal)
    // Secondary: #004153 (Bright Cyan)
    // Dark: #004153 (Dark Navy)
    // Light: #e5e5e5 (Soft Blue)
    // Accent: #C5B195 (Tan/Gold)

    // LANGUAGE DATA
    const translations = {
        en: {
            'hero-title': 'Premium printing that makes your brand look sharp — fast, local, and reliable.',
            'hero-subtitle': 'Full-service printing with design support and quick turnaround in Houston',
            'benefit-1': 'Local Houston team',
            'benefit-2': 'Quality-first printing',
            'benefit-3': 'Bilingual support EN/ES',
            'btn-quote': 'Request a Quote',
            'btn-call': '📞 Call Now',
            'deadline-text': 'Tell us your deadline — we\'ll recommend the best option.',
            'lang-en': 'English',
            'lang-es': 'Español',
            'services-title': 'What we print',
            'services-subtitle': 'From everyday business needs to custom specialty projects',
            'howitworks-title': 'How it works',
            'howitworks-subtitle': 'Simple process from idea to finished product',
            'why-title': 'Why clients come back',
            'testimonials-title': 'What our clients say',
            'cta-title': 'No need to have it figured out.',
            'cta-text': 'Send a quick message—even a rough idea or photo—and we\'ll guide you to the best print option for your budget and deadline.',
            'btn-cta': 'Request a Quote',
            'faq-title': 'Frequently asked questions',
            'form-title': 'Get Your Quote Today',
            'form-subtitle': 'Tell us what you need and we\'ll guide you through the best printing options',
            'label-name': 'Name',
            'label-phone': 'Phone (optional)',
            'label-email': 'Email',
            'label-printtype': 'What do you need printed?',
            'label-company': 'Company (optional)',
            'label-quantity': 'Quantity (optional)',
            'label-deadline': 'Deadline (optional)',
            'label-message': 'Message',
            'form-info': 'After you submit, we\'ll reply with instructions to send/upload files.',
            'btn-submit': 'Submit Quote Request',
            'contact-phone-label': 'Phone',
            'contact-email-label': 'Email',
            'contact-address-label': 'Address',
            'contact-hours-label': 'Hours',
            'contact-hours-weekday': 'Mon–Fri',
            'contact-hours-saturday': 'Saturday',
            'step-1-title': 'Share what you need',
            'step-1-desc': 'Tell us about your project, deadline, and budget. Send files or rough ideas.',
            'step-2-title': 'We recommend & confirm',
            'step-2-desc': 'We suggest materials, finishes, and timeline. You approve the proof before printing.',
            'step-3-title': 'Print & deliver',
            'step-3-desc': 'We print with quality control checks. Pickup in Houston or delivery to your location.',
        },
        es: {
            'hero-title': 'Impresión premium que hace que tu marca se vea impresionante — rápida, local y confiable.',
            'hero-subtitle': 'Impresión de servicio completo con apoyo de diseño y entrega rápida en Houston',
            'benefit-1': 'Equipo local de Houston',
            'benefit-2': 'Impresión de calidad primero',
            'benefit-3': 'Soporte bilingüe EN/ES',
            'btn-quote': 'Solicitar Cotización',
            'btn-call': '📞 Llamar Ahora',
            'deadline-text': 'Cuéntanos tu fecha límite — recomendaremos la mejor opción.',
            'lang-en': 'English',
            'lang-es': 'Español',
            'services-title': 'Lo que imprimimos',
            'services-subtitle': 'Desde necesidades comerciales cotidianas hasta proyectos especiales personalizados',
            'howitworks-title': 'Cómo funciona',
            'howitworks-subtitle': 'Proceso simple desde la idea hasta el producto terminado',
            'why-title': 'Por qué los clientes regresan',
            'testimonials-title': 'Lo que dicen nuestros clientes',
            'cta-title': 'No necesitas tenerlo todo resuelto.',
            'cta-text': 'Envía un mensaje rápido—incluso una idea aproximada o foto—y te guiaremos a la mejor opción de impresión para tu presupuesto y fecha límite.',
            'btn-cta': 'Solicitar Cotización',
            'faq-title': 'Preguntas frecuentes',
            'form-title': 'Obtén tu cotización hoy',
            'form-subtitle': 'Cuéntanos qué necesitas y te guiaremos por las mejores opciones de impresión',
            'label-name': 'Nombre',
            'label-phone': 'Teléfono (opcional)',
            'label-email': 'Correo',
            'label-printtype': '¿Qué necesitas imprimir?',
            'label-company': 'Empresa (opcional)',
            'label-quantity': 'Cantidad (opcional)',
            'label-deadline': 'Fecha límite (opcional)',
            'label-message': 'Mensaje',
            'form-info': 'Después de enviar, responderemos con instrucciones para enviar/subir archivos.',
            'btn-submit': 'Enviar Solicitud de Cotización',
            'contact-phone-label': 'Teléfono',
            'contact-email-label': 'Correo',
            'contact-address-label': 'Dirección',
            'contact-hours-label': 'Horario',
            'contact-hours-weekday': 'Lun–Vie',
            'contact-hours-saturday': 'Sábado',
            'step-1-title': 'Comparte lo que necesitas',
            'step-1-desc': 'Cuéntanos sobre tu proyecto, fecha límite y presupuesto. Envía archivos o ideas.',
            'step-2-title': 'Recomendamos y confirmamos',
            'step-2-desc': 'Sugerimos materiales, acabados y cronograma. Apruebas la prueba antes de imprimir.',
            'step-3-title': 'Imprimimos y entregamos',
            'step-3-desc': 'Imprimimos con controles de calidad. Recoge en Houston o entrega a tu ubicación.',
        }
    };

    const services = [
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-1.png', title_en: 'Business Cards', title_es: 'Tarjetas de Presentación', desc_en: 'Premium cardstock with multiple finish options. Make a lasting first impression.', desc_es: 'Cartulina premium con múltiples opciones de acabado. Crea una impresión duradera.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-2.png', title_en: 'Flyers & Brochures', title_es: 'Volantes y Folletos', desc_en: 'Eye-catching marketing materials in any size. Full-color, professional quality.', desc_es: 'Materiales de marketing llamativos de cualquier tamaño. Calidad profesional a todo color.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-3.png', title_en: 'Banners & Signage', title_es: 'Banners y Señalización', desc_en: 'Indoor and outdoor banners, yard signs, and custom displays for any event.', desc_es: 'Banners de interior y exterior, letreros de patio y displays personalizados.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-4.png', title_en: 'Booklets & Perfect Binding', title_es: 'Folletos y Encuadernación', desc_en: 'Catalogs, manuals, and booklets with professional binding and finishing.', desc_es: 'Catálogos, manuales y folletos con encuadernación y acabado profesional.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-5.png', title_en: 'Stickers & Labels', title_es: 'Calcomanías y Etiquetas', desc_en: 'Custom shapes, sizes, and materials. Weatherproof options available.', desc_es: 'Formas, tamaños y materiales personalizados. Opciones resistentes al clima.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-6.png', title_en: 'Invitations & Event Printing', title_es: 'Invitaciones e Impresión de Eventos', desc_en: 'Weddings, quinceañeras, corporate events. Premium paper and envelopes.', desc_es: 'Bodas, quinceañeras, eventos corporativos. Papel premium y sobres.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-7.png', title_en: 'Vehicle Wraps & Vinyl', title_es: 'Envolturas de Vehículos y Vinilo', desc_en: 'Full or partial wraps, window decals, and custom vehicle graphics.', desc_es: 'Envolturas completas o parciales, calcomanías para ventanas y gráficos personalizados.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-8.png', title_en: 'Direct Mail & Postcards', title_es: 'Correo Directo y Tarjetas', desc_en: 'Targeted mailing campaigns with design and list management support.', desc_es: 'Campañas de correo directo dirigido con apoyo de diseño y gestión de listas.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-9.png', title_en: 'Premium Finishing', title_es: 'Acabado Premium', desc_en: 'Foil stamping, embossing, spot UV, and specialty coatings.', desc_es: 'Estampado en foil, relieve, UV localizado y revestimientos especiales.' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Print-10.png', title_en: 'Design Support', title_es: 'Apoyo de Diseño', desc_en: 'Professional design help to bring your vision to life.', desc_es: 'Ayuda de diseño profesional para hacer realidad tu visión.' }
    ];

    const benefits = [
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Clients-1.png', title_en: 'Consistent quality control', title_es: 'Control de calidad consistente', desc_en: 'Every job is checked before it leaves our shop', desc_es: 'Cada trabajo se revisa antes de salir de nuestro taller' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Clients-2.png', title_en: 'Fast turnaround', title_es: 'Entrega rápida', desc_en: 'Rush jobs available. We work with your deadline', desc_es: 'Trabajos urgentes disponibles. Trabajamos con tu fecha límite' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Clients-3.png', title_en: 'Help choosing materials', title_es: 'Ayuda eligiendo materiales', desc_en: 'Not sure what paper or finish? We guide you to the best option', desc_es: '¿No estás seguro del papel o acabado? Te guiamos a la mejor opción' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Clients-4.png', title_en: 'Local accountability', title_es: 'Responsabilidad local', desc_en: 'Clear communication and a Houston team you can reach', desc_es: 'Comunicación clara y un equipo en Houston al que puedes contactar' },
        { icon: 'https://myspeedyprinting.com/wp-content/uploads/2026/05/Iconos-Clients-5.png', title_en: 'Custom + everyday printing', title_es: 'Impresión personalizada y cotidiana', desc_en: 'From business cards to specialty projects, we handle it all', desc_es: 'Desde tarjetas de presentación hasta proyectos especiales, lo manejamos todo' }
    ];

    const testimonials = [
        { name: 'Maria Rodriguez', business: 'La Cocina Restaurant', project_en: 'menus', project_es: 'menús', quote_en: 'They helped us design beautiful menus and delivered them in 3 days. The quality is outstanding and the team was so patient with our changes.', quote_es: 'Nos ayudaron a diseñar menús hermosos y los entregaron en 3 días. La calidad es excelente y el equipo fue muy paciente con nuestros cambios.' },
        { name: 'James Chen', business: 'Chen & Associates', project_en: 'business cards', project_es: 'tarjetas de presentación', quote_en: 'I needed business cards fast for a conference. They printed premium cards with spot UV in 24 hours. Highly recommend for quality and speed.', quote_es: 'Necesitaba tarjetas de presentación rápido para una conferencia. Imprimieron tarjetas premium con UV localizado en 24 horas. Muy recomendado.' },
        { name: 'Sofia Martinez', business: 'Quinceañera Event', project_en: 'event signage', project_es: 'señalización de eventos', quote_en: 'The banners and welcome signs for my daughter\'s quinceañera were perfect. They understood exactly what we wanted and the colors were vibrant.', quote_es: 'Los banners y letreros para la quinceañera de mi hija fueron perfectos. Entendieron exactamente lo que queríamos y los colores fueron vibrantes.' }
    ];

    const faqs = [
        { q_en: 'What are typical turnaround times?', q_es: '¿Cuáles son los tiempos de entrega típicos?', a_en: 'Standard jobs are 3-5 business days. Rush service (24-48 hours) is available for most products. We\'ll confirm your specific timeline when you request a quote.', a_es: 'Los trabajos estándar son de 3-5 días hábiles. El servicio urgente (24-48 horas) está disponible para la mayoría de los productos. Confirmaremos tu cronograma específico cuando solicites una cotización.' },
        { q_en: 'Do you offer design help?', q_es: '¿Ofrecen ayuda con diseño?', a_en: 'Yes! We provide design support for all projects. Whether you need a complete design from scratch or just file cleanup and formatting, our team can help.', a_es: '¡Sí! Proporcionamos apoyo de diseño para todos los proyectos. Ya sea que necesites un diseño completo desde cero o solo limpieza de archivos, nuestro equipo puede ayudar.' },
        { q_en: 'Is there a minimum order?', q_es: '¿Hay un pedido mínimo?', a_en: 'Minimum orders vary by product. Business cards start at 100, flyers at 50. For custom projects, we\'ll work with your quantity needs. Contact us for specifics.', a_es: 'Los pedidos mínimos varían según el producto. Las tarjetas de presentación comienzan en 100, los volantes en 50. Para proyectos personalizados, trabajaremos con tus necesidades.' },
        { q_en: 'Can I approve a proof before printing?', q_es: '¿Puedo aprobar una prueba antes de imprimir?', a_en: 'Absolutely. We send a digital proof for your approval before we start printing. You can request changes until you\'re completely satisfied.', a_es: 'Absolutamente. Enviamos una prueba digital para tu aprobación antes de comenzar a imprimir. Puedes solicitar cambios hasta que estés completamente satisfecho.' },
        { q_en: 'Do you handle custom projects and premium finishes?', q_es: '¿Manejan proyectos personalizados y acabados premium?', a_en: 'Yes! We specialize in custom work including foil stamping, embossing, die-cutting, spot UV, and specialty papers. Tell us your vision and we\'ll make it happen.', a_es: '¡Sí! Nos especializamos en trabajos personalizados que incluyen estampado en foil, relieve, troquelado, UV localizado y papeles especiales.' }
    ];

    let currentLanguage = 'en';

    function setLanguage(lang) {
        currentLanguage = lang;
        document.querySelectorAll(`#lang-en, #lang-es`).forEach(btn => btn.classList.remove('active'));
        document.getElementById(`lang-${lang}`).classList.add('active');
        renderAllContent();
    }

    function getText(key) {
        return translations[currentLanguage][key] || key;
    }

    function renderAllContent() {
        Object.keys(translations.en).forEach(key => {
            const el = document.getElementById(key);
            if (el) el.textContent = getText(key);
        });

        const servicesGrid = document.getElementById('services-grid');
        servicesGrid.innerHTML = services.map(s => `
            <div class="service-card">
                <div class="service-icon">
                    <img src="${s.icon}" alt="${currentLanguage === 'en' ? s.title_en : s.title_es}" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>${currentLanguage === 'en' ? s.title_en : s.title_es}</h3>
                    <p>${currentLanguage === 'en' ? s.desc_en : s.desc_es}</p>
                </div>
            </div>
        `).join('');

        const stepsGrid = document.getElementById('steps-grid');
        stepsGrid.innerHTML = [1, 2, 3].map(i => `
            <div class="step-card">
                <div class="step-number">0${i}</div>
                <h3>${getText(`step-${i}-title`)}</h3>
                <p>${getText(`step-${i}-desc`)}</p>
            </div>
        `).join('');

        const benefitsGrid = document.getElementById('benefits-grid');
        benefitsGrid.innerHTML = benefits.map(b => `
            <div class="benefit-card">
                <div class="benefit-icon">
                    <img src="${b.icon}" alt="${currentLanguage === 'en' ? b.title_en : b.title_es}" loading="lazy">
                </div>
                <div>
                    <h3>${currentLanguage === 'en' ? b.title_en : b.title_es}</h3>
                    <p>${currentLanguage === 'en' ? b.desc_en : b.desc_es}</p>
                </div>
            </div>
        `).join('');

        const testimonialsGrid = document.getElementById('testimonials-grid');
        testimonialsGrid.innerHTML = testimonials.map(t => `
            <div class="testimonial-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>"${currentLanguage === 'en' ? t.quote_en : t.quote_es}"</p>
                <div class="testimonial-author">
                    <strong>${t.name}</strong>
                    <small>${t.business}</small><br>
                    <small style="font-size: 0.75rem; color: #beaf95; text-transform: uppercase; font-weight: 600;">Printed: ${currentLanguage === 'en' ? t.project_en : t.project_es}</small>
                </div>
            </div>
        `).join('');

        const faqList = document.getElementById('faq-list');
        faqList.innerHTML = faqs.map((faq, idx) => `
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(${idx})">
                    <span>${currentLanguage === 'en' ? faq.q_en : faq.q_es}</span>
                    <span class="faq-toggle">▼</span>
                </div>
                <div class="faq-answer">
                    <p>${currentLanguage === 'en' ? faq.a_en : faq.a_es}</p>
                </div>
            </div>
        `).join('');

        const selectOptions = [
            { value: 'business-cards', en: 'Business Cards', es: 'Tarjetas de Presentación' },
            { value: 'flyers', en: 'Flyers & Brochures', es: 'Volantes y Folletos' },
            { value: 'banners', en: 'Banners & Signage', es: 'Banners y Señalización' },
            { value: 'booklets', en: 'Booklets', es: 'Folletos' },
            { value: 'stickers', en: 'Stickers & Labels', es: 'Calcomanías y Etiquetas' },
            { value: 'invitations', en: 'Invitations', es: 'Invitaciones' },
            { value: 'vehicle', en: 'Vehicle Wraps', es: 'Envolturas de Vehículos' },
            { value: 'other', en: 'Other / Not sure', es: 'Otro / No estoy seguro' }
        ];

        const printTypeSelect = document.getElementById('printType');
        printTypeSelect.innerHTML = `<option value="">${getText('label-printtype')}</option>` + selectOptions.map(opt => `
            <option value="${opt.value}">${currentLanguage === 'en' ? opt.en : opt.es}</option>
        `).join('');
    }

    function toggleFaq(idx) {
        const answer = document.querySelectorAll('.faq-answer')[idx];
        const question = document.querySelectorAll('.faq-question')[idx];
        
        answer.classList.toggle('show');
        question.classList.toggle('active');
    }

    function handleFormSubmit(event) {
        event.preventDefault();

        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            company: document.getElementById('company').value,
            printType: document.getElementById('printType').value,
            quantity: document.getElementById('quantity').value,
            deadline: document.getElementById('deadline').value,
            message: document.getElementById('message').value,
            language: currentLanguage
        };

        console.log('Formulario enviado:', formData);
        
        alert(currentLanguage === 'en' 
            ? 'Quote request submitted! We\'ll be in touch soon.' 
            : '¡Solicitud de cotización enviada! Nos comunicaremos pronto.');

        document.getElementById('quote-form').reset();
    }

    // Initialize
    renderAllContent();

    // Dynamic footer year
    document.getElementById('footer-year').textContent = new Date().getFullYear();

    // Newsletter submit
    function handleNewsletterSubmit() {
        const email = document.getElementById('newsletter-email').value.trim();
        if (!email || !email.includes('@')) {
            document.getElementById('newsletter-email').focus();
            return;
        }
        document.getElementById('newsletter-form-wrap').style.display = 'none';
        document.getElementById('newsletter-success').style.display = 'block';
    }

    // Mobile menu
    function toggleMobileMenu() {
        document.getElementById('nav-mobile').classList.toggle('open');
    }

    function closeMobileMenu() {
        document.getElementById('nav-mobile').classList.remove('open');
    }
</script>
<!-- FOOTER -->
<footer class="site-footer">
 
    <!-- Main body: Logo + Contact + Services + Quick Links + Newsletter -->
    <div class="footer-main">
        <div class="footer-main-inner">
 
            <!-- Brand / Logo -->
            <div class="footer-brand">
                <a href="https://speedyprintinghouston.com/">
                    <img src="https://myspeedyprinting.com/wp-content/uploads/2026/05/Speedy-Printing-Logo-02.webp" alt="Speedy Printing Logo">
                </a>
                <p>Houston's trusted full-service printing partner. Quality, speed, and bilingual support.</p>
            </div>
 
            <!-- Contact Us -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.1a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <a href="tel:7139326954">(713) 932-6954</a>
                </div>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <a href="mailto:hello@speedyprintinghouston.com">hello@speedyprintinghouston.com</a>
                </div>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>Houston, TX</span>
                </div>
                <div class="footer-hours">
                    <strong>Hours</strong>
                    Mon–Fri: 8am–6pm<br>
                    Saturday: 9am–2pm
                </div>
                <div class="footer-social">
                    <a href="https://www.facebook.com/speedyprinting.katyfreeway/" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/speedyprintingkf/" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="none" stroke="currentColor" stroke-width="2"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/speedy-printing-katy-freeway/about/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>
 
            <!-- Services -->
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="https://speedyprintinghouston.com/print-services/graphic-design-services/">Graphic Design</a></li>
                    <li><a href="https://speedyprintinghouston.com/print-services/commercial-printing/">Commercial Printing</a></li>
                    <li><a href="https://speedyprintinghouston.com/print-services/copy-shop-and-print/">Copy &amp; Print</a></li>
                    <li><a href="https://speedyprintinghouston.com/print-services/custom-printing-specialty/">Specialty Printing</a></li>
                    <li><a href="https://speedyprintinghouston.com/print-services/mailing-services/">Mailing Services</a></li>
                </ul>
            </div>
 
            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="https://speedyprintinghouston.com/">Home</a></li>
                    <li><a href="https://speedyprintinghouston.com/portfolio/">Portfolio</a></li>
                    <li><a href="https://speedyprintinghouston.com/houston-printing-company/">About Us</a></li>
                    <li><a href="https://speedyprintinghouston.com/blog/">Blog</a></li>
                    <li><a href="https://speedyprintinghouston.com/careers/">Careers</a></li>
                    <li><a href="https://speedyprintinghouston.com/contact/">Contact Us</a></li>
                </ul>
            </div>
 
            <!-- Newsletter — 5th column inside the grid -->
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p style="font-size:0.82rem; color:rgba(255,255,255,0.5); margin-bottom:1rem; line-height:1.6;">
                    Stay updated with offers and printing tips.
                </p>
                <div id="newsletter-form-wrap">
                    <input type="email" id="newsletter-email" placeholder="EMAIL" autocomplete="email"
                        style="width:100%; padding:0.65rem 0.9rem; border-radius:0.3rem; border:1px solid rgba(255,255,255,0.25); background:transparent; color:#fff; font-size:0.82rem; font-family:inherit; outline:none; margin-bottom:0.5rem; box-sizing:border-box; letter-spacing:0.05em;">
                    <button onclick="handleNewsletterSubmit()"
                        style="width:100%; padding:0.65rem 1rem; background:#5d8f9a; color:#fff; font-size:0.74rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; border:none; border-radius:0.3rem; cursor:pointer; font-family:inherit;">
                        Subscribe
                    </button>
                </div>
                <p class="footer-newsletter-success" id="newsletter-success"
                    style="display:none; color:#beaf95; font-weight:600; font-size:0.85rem; margin-top:0.5rem;">
                    &#x1F389; You're subscribed!
                </p>
            </div>
 
        </div>
    </div>
 
    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <p>&copy; <span id="footer-year"></span> Speedy Printing Design + Print &ndash; All Rights Reserved</p>
        </div>
    </div>
 
</footer>
 
</body>
</html>