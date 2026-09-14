<?php
/**
 * Senapathi Alliance - Master Landing Page
 * Corporate & Government Advisory
 * 
 * Architecture:
 * - includes/header.php : SEO, Metas, Schemas, Navigation & Mobile Drawer
 * - components/hero.php : Dribbble-Grade Institutional Hero Section
 * - components/trust-strip.php : Key Accreditations & Statutory Compliance
 * - components/about.php : Multidisciplinary Profile & What We Do
 * - components/services.php : 9 Core Service Lines with Sub-Offerings
 * - components/approach.php : 5 Strategic Delivery Pillars
 * - components/industries.php : 6 Industry Verticals Served
 * - components/cta-banner.php : Strategic Action Callout
 * - components/contact.php : RFP Submission & Consultation Request
 * - components/service-modal.php : Interactive In-Depth Scope & Methodology Modal
 * - includes/footer.php : Regulatory Notes, CAG Partner Statement, Sitemap & Scripts
 */

// 1. Header and SEO Meta Framework
require_once __DIR__ . '/includes/header.php';

// 2. Main Body Content & Modular Components
echo '<main id="mainContent">';

// Hero Section
require_once __DIR__ . '/components/hero.php';

// Trust Credentials Strip
require_once __DIR__ . '/components/trust-strip.php';

// About Us & What We Do
require_once __DIR__ . '/components/about.php';

// 9 Core Service Lines
require_once __DIR__ . '/components/services.php';

// 5-Pillar Strategic Approach
require_once __DIR__ . '/components/approach.php';

// 6 Industry Verticals
require_once __DIR__ . '/components/industries.php';

// CTA Banner
require_once __DIR__ . '/components/cta-banner.php';

// Contact & RFP Submission
require_once __DIR__ . '/components/contact.php';

echo '</main>';

// 3. Interactive Service Deep-Dive Modal System
require_once __DIR__ . '/components/service-modal.php';

// 4. Footer & Application Scripts
require_once __DIR__ . '/includes/footer.php';
