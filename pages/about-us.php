<?php
/**
 * Senapathi Alliance - Dedicated About Us Page
 * High-End SEO, Dribbble-Grade Layout & Institutional Profile
 */
$basePath = '../';
$pageTitle = "About Us | Senapathi Alliance - Multidisciplinary Corporate & Government Advisory";
$pageDescription = "Learn about Senapathi Alliance (Senapathi India) — premier management, technical, financial, and institutional consulting supporting government departments, PSUs, multilateral institutions, and private enterprises.";
$canonicalUrl = "https://senapathi.co.in/pages/about-us.php";
$pageKeywords = "About Senapathi Alliance, Senapathi India, corporate governance, government advisory, PSU consulting firm, multidisciplinary advisory, CAG partner firm, infrastructure consulting, public procurement advisory";
$activeNav = "about";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://senapathi.co.in/pages/about-us.php#webpage",
      "url": "https://senapathi.co.in/pages/about-us.php",
      "name": "About Senapathi Alliance",
      "description": "Multidisciplinary management and technical consulting supporting government, PSUs, and enterprises.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://senapathi.co.in/#website",
        "url": "https://senapathi.co.in/",
        "name": "Senapathi Alliance"
      },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "@id": "https://senapathi.co.in/pages/about-us.php#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://senapathi.co.in/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "About Us",
            "item": "https://senapathi.co.in/pages/about-us.php"
          }
        ]
      }
    }
  ]
}
</script>';

require_once __DIR__ . '/../includes/header.php';
?>

<main id="mainContent">

  <!-- =========================================================================
       PAGE HERO BANNER WITH BREADCRUMBS
       ========================================================================= -->
  <section class="page-hero">
    <div class="page-hero-glow page-hero-glow-1"></div>
    <div class="page-hero-glow page-hero-glow-2"></div>

    <div class="container page-hero-content">
      <!-- Breadcrumb -->
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="<?php echo $basePath; ?>index.php">
          <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          Home
        </a>
        <span class="separator">/</span>
        <span class="current">About Us</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
        </svg>
        <span>Institutional Profile &amp; Governance</span>
      </div>

      <h1 class="page-title">
        Architecting Institutional Integrity, Strategic Capability &amp; <span class="accent">Public Value</span>
      </h1>

      <p class="page-subtitle">
        Senapathi India (Senapathi Alliance) is a multidisciplinary management and technical consulting firm combining sector knowledge, structured programme management, technical expertise, financial discipline, and digital capability to address complex public and corporate priorities.
      </p>

      <!-- Page Meta Credentials -->
      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Statutory Audit: <strong>CAG Empanelled Partner CA Firm</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
          <span>Legal Regulatory Advisory: <strong>Partner Law Firm Network</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          <span>Mandate Scope: <strong>Pan-India Engagements</strong></span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       FLOATING STATS STRIP
       ========================================================================= -->
  <div class="container">
    <div class="about-stats-row">
      <div class="about-stat-card">
        <div class="num">09</div>
        <div class="label">Integrated Core Verticals</div>
        <div class="subtext">From real estate diligence to digital transformation</div>
      </div>
      <div class="about-stat-card">
        <div class="num">50+</div>
        <div class="label">Specialized Advisory Modules</div>
        <div class="subtext">Comprehensive operational &amp; statutory frameworks</div>
      </div>
      <div class="about-stat-card">
        <div class="num">06</div>
        <div class="label">Key National Sectors</div>
        <div class="subtext">Government, Infrastructure, Social CSR, Utilities &amp; Regulated</div>
      </div>
      <div class="about-stat-card">
        <div class="num">100%</div>
        <div class="label">Compliance Transparency</div>
        <div class="subtext">Strict alignment with public procurement &amp; statutory laws</div>
      </div>
    </div>
  </div>

  <!-- =========================================================================
       NARRATIVE OVERVIEW: WHO WE ARE & WHAT WE DO
       ========================================================================= -->
  <section class="section-padding" style="padding-top: 20px;">
    <div class="container">
      <div class="about-grid">
        
        <!-- Left: Mission & Visual Framework -->
        <div class="about-visual">
          <div class="about-image-card">
            <div class="about-card-badge">
              <svg style="width:16px;height:16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
              <span>Our Foundational Principle</span>
            </div>
            <div class="about-card-quote">
              "To empower public and private leadership with defensible evidence, transparent compliance, and resilient institutional capacity that withstands statutory and public scrutiny."
            </div>
            
            <div class="about-lifecycle-box">
              <h4>
                <svg style="width:18px;height:18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Multidisciplinary Integration
              </h4>
              <p style="font-size:0.8125rem; color:#CBD5E1; line-height: 1.5; margin-bottom: 12px;">
                Where complex programmes demand simultaneous engineering validation, financial due diligence, legal planning compliance, and workforce deployment, Senapathi provides unified command.
              </p>
              <div class="lifecycle-tags">
                <span class="lifecycle-tag">Public Policy</span>
                <span class="lifecycle-tag">Procurement Rigor</span>
                <span class="lifecycle-tag">CAG Audits</span>
                <span class="lifecycle-tag">WASH &amp; EPC</span>
                <span class="lifecycle-tag">HRIS &amp; L&amp;D</span>
                <span class="lifecycle-tag">Platform Tech</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: What We Do & Institutional Mandate -->
        <div class="about-text-content">
          <div class="section-badge" style="margin-bottom: 14px;">
            <span>Executive Mandate</span>
          </div>
          <h2 class="section-title" style="margin-bottom: 20px;">
            A Strategic Partner for <span class="highlight">Complex Engagements</span>
          </h2>

          <p class="about-lead">
            Senapathi India serves government departments, public sector undertakings (PSUs), multilateral institutions, programme implementation agencies, and responsible private-sector organizations across India.
          </p>

          <p class="about-body">
            Our multidisciplinary practice brings together sector specialists, programme managers, technical professionals, chartered accountants, researchers, human resource practitioners, and digital technology architects. This integrated structure ensures that policies, capital investments, and institutional reforms translate into measurable public value.
          </p>

          <p class="about-body">
            Our advisory services span the entire project lifecycle — from upfront feasibility, land due diligence, and regulatory clearance facilitation, to procurement advisory, project management consultancy (PMC), institutional capacity building, Social Return on Investment (SROI) monitoring, forensic risk reviews, and custom platform engineering.
          </p>

          <!-- Core Value Props List -->
          <div class="about-features-list">
            <div class="about-feature-item">
              <div class="about-feature-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              <div class="about-feature-text">
                <h5>Audit-Ready Governance</h5>
                <p>Every assignment produces complete, transparent records aligned with statutory audit standards.</p>
              </div>
            </div>

            <div class="about-feature-item">
              <div class="about-feature-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div>
              <div class="about-feature-text">
                <h5>Lasting Institutional Capacity</h5>
                <p>We build workforce capabilities and institutional SOPs so improvements outlast the engagement.</p>
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 10px;">
            <a href="<?php echo $basePath; ?>index.php#services" class="btn btn-primary">
              <span>Explore 9 Service Lines</span>
              <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="<?php echo $basePath; ?>index.php#contact" class="btn btn-secondary">
              <span>Initiate Consultation</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       THE FULL ASSIGNMENT LIFECYCLE ROADMAP
       ========================================================================= -->
  <section class="section-padding" style="background: var(--color-bg-surface-alt); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">
          <span>Lifecycle Management</span>
        </div>
        <h2 class="section-title">
          Support Across the <span class="highlight">Full Assignment Lifecycle</span>
        </h2>
        <p class="section-subtitle">
          From diagnostic review and project readiness to transparent procurement, workforce deployment, monitoring, and audit-ready handover.
        </p>
      </div>

      <div class="lifecycle-flow-grid">
        
        <!-- Step 1 -->
        <div class="lifecycle-step-card">
          <div class="lifecycle-step-top">
            <span class="lifecycle-step-tag">Phase 01</span>
            <div class="lifecycle-step-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
            </div>
          </div>
          <h3 class="lifecycle-step-title">Due Diligence &amp; Readiness</h3>
          <p class="lifecycle-step-desc">
            Title verification, land use modification (CLU), baseline evaluation, regulatory mapping, and technical feasibility reviews before fiscal commitment.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="lifecycle-step-card">
          <div class="lifecycle-step-top">
            <span class="lifecycle-step-tag">Phase 02</span>
            <div class="lifecycle-step-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
          </div>
          <h3 class="lifecycle-step-title">Procurement &amp; Structuring</h3>
          <p class="lifecycle-step-desc">
            Bid documentation, EPC advisory, evaluation matrices, contract management systems, and compliance safeguards aligned with public procurement laws.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="lifecycle-step-card">
          <div class="lifecycle-step-top">
            <span class="lifecycle-step-tag">Phase 03</span>
            <div class="lifecycle-step-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
          </div>
          <h3 class="lifecycle-step-title">Workforce &amp; HRIS Systems</h3>
          <p class="lifecycle-step-desc">
            Executive leadership hiring, background verification (BGV), payroll controls, HR policies, and LMS platforms to empower implementation teams.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="lifecycle-step-card">
          <div class="lifecycle-step-top">
            <span class="lifecycle-step-tag">Phase 04</span>
            <div class="lifecycle-step-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
          </div>
          <h3 class="lifecycle-step-title">Execution, PMC &amp; M&amp;E</h3>
          <p class="lifecycle-step-desc">
            Work plan tracking, field verification, Lean Six Sigma optimization, SROI impact assessments, and enterprise digital process automation.
          </p>
        </div>

        <!-- Step 5 -->
        <div class="lifecycle-step-card">
          <div class="lifecycle-step-top">
            <span class="lifecycle-step-tag">Phase 05</span>
            <div class="lifecycle-step-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
          </div>
          <h3 class="lifecycle-step-title">Audit, Handover &amp; Longevity</h3>
          <p class="lifecycle-step-desc">
            Statutory CAG audit readiness, ESG risk reporting, institutional handover, and documentation archival for audit defense and continuous operation.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       THE 5 STRATEGIC APPROACH PILLARS (DEEP DIVE)
       ========================================================================= -->
  <section class="section-padding approach-section" style="background: #071527;">
    <div class="container">
      <div class="section-header">
        <div class="section-badge light">
          <span>Strategic Methodology</span>
        </div>
        <h2 class="section-title">
          Our 5 Strategic <span class="highlight" style="color: #38BDF8;">Delivery Pillars</span>
        </h2>
        <p class="section-subtitle">
          How Senapathi combines policy intent with procedural accuracy, transparent governance, and measurable outcomes.
        </p>
      </div>

      <div class="approach-grid">
        <div class="approach-card">
          <div class="approach-card-top">
            <span class="approach-step-num">Pillar 01</span>
            <div class="approach-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg></div>
          </div>
          <h3 class="approach-title">Context-Specific Solutions</h3>
          <p class="approach-desc">We tailor each engagement to the client's mandate, operating environment, stakeholders, applicable statutory regulations, and intended public outcomes.</p>
        </div>

        <div class="approach-card">
          <div class="approach-card-top">
            <span class="approach-step-num">Pillar 02</span>
            <div class="approach-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
          </div>
          <h3 class="approach-title">Evidence-Based Advice</h3>
          <p class="approach-desc">We combine reliable empirical data, field insights, stakeholder consultation, financial modeling, and engineering assessment to support defensible decisions.</p>
        </div>

        <div class="approach-card">
          <div class="approach-card-top">
            <span class="approach-step-num">Pillar 03</span>
            <div class="approach-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg></div>
          </div>
          <h3 class="approach-title">Implementation Orientation</h3>
          <p class="approach-desc">We translate recommendations into practical work plans, accountable governance arrangements, measurable milestones, and transparent reporting protocols.</p>
        </div>

        <div class="approach-card">
          <div class="approach-card-top">
            <span class="approach-step-num">Pillar 04</span>
            <div class="approach-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
          </div>
          <h3 class="approach-title">Compliance &amp; Risk Control</h3>
          <p class="approach-desc">We embed applicable legal, policy, procurement, financial, environmental, social, data security, and cybersecurity requirements directly into assignment delivery.</p>
        </div>

        <div class="approach-card">
          <div class="approach-card-top">
            <span class="approach-step-num">Pillar 05</span>
            <div class="approach-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg></div>
          </div>
          <h3 class="approach-title">Institutional Capacity</h3>
          <p class="approach-desc">We strengthen client systems, internal skills, documentation, and operational ownership so that improvements endure far beyond the engagement period.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       STATUTORY COMPLIANCE & PARTNER NETWORK
       ========================================================================= -->
  <section class="section-padding">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">
          <span>Statutory Framework</span>
        </div>
        <h2 class="section-title">
          Institutional Governance &amp; <span class="highlight">Partner Network</span>
        </h2>
        <p class="section-subtitle">
          Professional standards, independent assurance, and rigorous regulatory empanelments.
        </p>
      </div>

      <div class="governance-grid">
        
        <!-- CAG Card -->
        <div class="governance-card amber">
          <div class="governance-card-header">
            <div class="governance-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
              <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.06em; font-weight:700; color: #D97706;">Empanelled Assurance</span>
              <h4>CAG Empanelled Partner CA Firm</h4>
            </div>
          </div>
          <p>
            Where statutory audit, public sector financial examinations, forensic reviews, or regulated accounting services are required, they are delivered through our Partner Chartered Accountancy firm empanelled with the <strong>Comptroller and Auditor General of India (CAG)</strong>.
          </p>
          <p>
            This ensures that financial diligence, risk matrices, and fund accounting meet the highest standards of Indian public expenditure scrutiny and parliamentary reporting requirements.
          </p>
        </div>

        <!-- Law Firm Card -->
        <div class="governance-card">
          <div class="governance-card-header">
            <div class="governance-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
            </div>
            <div>
              <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.06em; font-weight:700; color: var(--color-primary-600);">Regulatory Diligence</span>
              <h4>Specialized Partner Law Firm Network</h4>
            </div>
          </div>
          <p>
            Legal and regulatory transaction reviews — covering title verification, land ceiling compliance, planning norms, statutory registration, and real estate litigation risk — are delivered through qualified partner law firms.
          </p>
          <p>
            This separation ensures strict compliance with Bar Council regulations while giving our clients comprehensive, legally vetted transaction security.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       PAGE CTA BANNER
       ========================================================================= -->
  <section style="padding: 64px 0; background: linear-gradient(135deg, #071527 0%, #0F3B6C 100%); color: #FFFFFF;">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:36px; flex-wrap:wrap;">
      <div style="max-width: 680px;">
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Partner with Senapathi for Strategic Success</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Contact our advisory principals to discuss your institutional mandate, tender preparation, or technical assistance requirements.
        </p>
      </div>
      <div>
        <a href="<?php echo $basePath; ?>index.php#contact" class="btn btn-primary" style="background: linear-gradient(135deg, #0284C7 0%, #38BDF8 100%); padding: 15px 32px; font-size: 1rem;">
          <span>Submit Request for Proposal (RFP)</span>
          <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>
    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
