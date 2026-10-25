<?php
/**
 * Senapathi Alliance - Service Line 03: Human Resource Advisory
 * High-End Institutional Advisory & Talent Governance Practice
 */
$basePath = '../';
$pageTitle = "Human Resource Advisory | Senapathi Alliance";
$pageDescription = "Strategic HR advisory for government institutions, PSUs, and enterprises: executive search, rigorous background verification (BGV), HRIS systems, and payroll outsourcing.";
$canonicalUrl = "https://senapathi.co.in/pages/human-resource-advisory.php";
$pageKeywords = "Human Resource Advisory India, PSU leadership hiring, executive search, BGV background verification, HRIS implementation, payroll outsourcing, DEI advisory";
$activeNav = "services";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://senapathi.co.in/pages/human-resource-advisory.php#service",
      "name": "Human Resource Advisory",
      "provider": {
        "@type": "Organization",
        "name": "Senapathi Alliance",
        "url": "https://senapathi.co.in/"
      },
      "serviceType": "Human Resource & Talent Governance Advisory",
      "description": "Comprehensive workforce management, executive search, BGV credential screening, HR policy frameworks, and managed payroll services.",
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://senapathi.co.in/pages/human-resource-advisory.php#breadcrumb",
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
          "name": "Services",
          "item": "https://senapathi.co.in/index.php#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Human Resource Advisory",
          "item": "https://senapathi.co.in/pages/human-resource-advisory.php"
        }
      ]
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
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="<?php echo $basePath; ?>index.php">
          <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          Home
        </a>
        <span class="separator">/</span>
        <a href="<?php echo $basePath; ?>index.php#services">Services</a>
        <span class="separator">/</span>
        <span class="current">Human Resource Advisory</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
        <span>Service Line 03 • HR &amp; Learning</span>
      </div>

      <h1 class="page-title">
        Human Resource Advisory &amp; <span class="accent">Workforce Governance</span>
      </h1>

      <p class="page-subtitle">
        We support government institutions, PSUs, programme units, and enterprise organizations in establishing accountable workforce systems, executive recruitment, rigorous background screening, and compliant HR administration.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Compliance Framework: <strong>State Service Rules &amp; Central Labour Codes</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          <span>Workforce Scope: <strong>Leadership, Specialists &amp; Mission PMUs</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          <span>Practice: <strong>05 Core Sub-Specializations</strong></span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 1: PRACTICE OVERVIEW & STRATEGIC HIGHLIGHT
       ========================================================================= -->
  <section class="service-page-section">
    <div class="container">

      <div class="service-lead-card">
        <div class="service-lead-text">
          <h3>Architecting Accountable Talent, Transparent Recruitment &amp; Institutional Continuity</h3>
          <p>
            An institution is only as resilient as its workforce. Government departments, public sector undertakings, and statutory boards require recruitment processes that stand up to legal scrutiny, fair representation mandates, and the highest standards of integrity.
          </p>
          <p>
            Senapathi Alliance structures end-to-end human capital solutions. We design transparent competency-based selection protocols, perform deep-dive credential background checks, construct digitally enabled HR policies aligned with official service rules, and operate flawless payroll and outsourcing management.
          </p>
          <p>
            Whether standing up a high-performance Project Management Unit (PMU) for a state mission or conducting executive search for autonomous board directors, we ensure institutional accountability at every tier.
          </p>
        </div>

        <div class="service-lead-highlight-box">
          <h4>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            Integrity Safeguard Highlights
          </h4>
          <p>
            Zero-tolerance background verification protocols with authenticated educational, legal, and past regulatory record verification.
          </p>
          <div class="service-lead-stats-row">
            <div class="service-lead-stat-mini">
              <strong>100%</strong>
              <span>Verified Profiles</span>
            </div>
            <div class="service-lead-stat-mini">
              <strong>Zero</strong>
              <span>Statutory Compliance Gaps</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Practice Architecture Header -->
      <div class="service-section-header" id="modules">
        <span class="section-badge">Practice Architecture</span>
        <h2>05 In-Depth Sub-Specializations</h2>
        <p>Strategic recruitment, risk screening, HR digitization, payroll operations, and workforce equity.</p>
      </div>

      <!-- Practice Modules Grid -->
      <div class="service-modules-grid">

        <!-- Module 3.1 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 3.1</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Executive Search &amp; Leadership Hiring</h3>
          <p class="service-module-desc">
            Role requirement definition, executive headhunting, transparent multi-tier assessment frameworks, and interview panel secretariat support for leadership positions.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Job description drafting, sanctioned cadre alignment, and grade pay structuring</li>
              <li>Targeted mapping of public and private sector leadership talent pools</li>
              <li>Structured competency-based assessment and blind screening methodologies</li>
              <li>Selection committee coordination, score compilation, and appointment dossiers</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Candidate Assessment Matrix, Shortlist Dossiers &amp; Search Reports.</div>
          </div>
        </article>

        <!-- Module 3.2 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 3.2</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Background Verification (BGV) Services</h3>
          <p class="service-module-desc">
            Exhaustive, verifiable scrutiny of identity, academic degrees, professional credentials, prior service records, and litigation/regulatory databases.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Aadhaar, PAN, Passport, and voter ID multi-point biometric &amp; database match</li>
              <li>Direct university verification of academic certificates and professional memberships</li>
              <li>Past employer supervisory feedback, conduct records, and reason for exit verification</li>
              <li>National criminal record checks, court registry searches, and regulatory sanction scans</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Tamper-proof BGV Due Diligence Report &amp; Integrity Clearance Certificate.</div>
          </div>
        </article>

        <!-- Module 3.3 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 3.3</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">HR Policy &amp; HRIS Systems Implementation</h3>
          <p class="service-module-desc">
            Formulating service regulations, standard operating procedures, disciplinary frameworks, leave rules, and rolling out cloud-based digital HR management platforms.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Drafting of employee handbooks, promotion guidelines, and performance appraisals</li>
              <li>Statutory compliance alignment with POSH Act, Factories Act, and Central Labour Codes</li>
              <li>HRIS platform requirement definition, workflow configuration, and approval matrix</li>
              <li>Digital employee onboarding, self-service leave management, and data migration</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Approved Institutional HR Manual &amp; Live HRIS Implementation.</div>
          </div>
        </article>

        <!-- Module 3.4 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 3.4</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Payroll &amp; HR Outsourcing</h3>
          <p class="service-module-desc">
            Controlled payroll calculation, statutory deductions (PF, ESIC, Professional Tax, TDS), third-party staffing management, and SLA-governed service delivery.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Automated attendance capture, leave reconciliation, and monthly salary disbursement</li>
              <li>PF, ESIC, LWF, and professional tax challan generation and statutory deposit filing</li>
              <li>Contractual workforce agency onboarding, contract compliance, and wage payment audits</li>
              <li>Annual employee Form 16 generation and income tax deduction reporting</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Monthly Payroll Registers, Statutory Filing Receipts &amp; Compliance Audit.</div>
          </div>
        </article>

        <!-- Module 3.5 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 3.5</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Diversity, Equity &amp; Inclusion (DEI) Advisory</h3>
          <p class="service-module-desc">
            Workforce demographic assessments, reservation roster audits for public bodies, accessibility guidelines, gender pay parity reviews, and inclusive culture frameworks.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Sanctioned roster verification and reservation quota compliance for government boards</li>
              <li>Equal remuneration analysis and gender pay disparity diagnostics</li>
              <li>Rights of Persons with Disabilities (RPwD) workplace accessibility audit</li>
              <li>Internal Complaints Committee (ICC) constitution, training, and POSH governance</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> DEI Institutional Audit Report, Roster Certification &amp; Policy Manual.</div>
          </div>
        </article>

      </div>

      <!-- Institutional Deliverable Showcase Banner -->
      <div class="service-deliverable-showcase">
        <div class="service-deliverable-grid">
          <div class="service-deliverable-col">
            <h3>Institutional Safeguards &amp; Operational Continuity</h3>
            <p>
              Human capital risks can trigger service disruptions, legal challenges before tribunals, and reputational damage. Senapathi builds bullet-proof governance frameworks.
            </p>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Tribunal &amp; Court Defense:</strong> Recruitment procedures meticulously documented to withstand scrutiny before Administrative Tribunals and High Courts.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Statutory Wage Protection:</strong> 100% adherence to minimum wage notifications, EPF, and ESIC schedules eliminating contractor liabilities.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Credential Authenticity:</strong> Multilevel verification ensuring zero fraudulent degrees, forged identities, or misrepresented experience.</span>
              </div>
            </div>
          </div>

          <div class="service-deliverable-col">
            <h3>5-Stage HR Advisory Lifecycle</h3>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 1:</strong> Cadre review, job role mapping, statutory compliance audit, and gap diagnostics.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 2:</strong> Recruitment notification structuring, sourcing strategy, and candidate screening.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 3:</strong> Exhaustive BGV credential verification, reference checking, and integrity dossiers.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 4:</strong> Digital HRIS workflow deployment, policy onboarding, and payroll automation.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 5:</strong> Periodic performance audits, labour compliance reviews, and leadership reviews.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Target Client Sectors -->
      <div class="service-section-header centered">
        <span class="section-badge">Client Ecosystem</span>
        <h2>Sectors Benefiting from this Practice</h2>
        <p>Enabling institutional capability across diverse public and corporate bodies.</p>
      </div>

      <div class="service-sectors-grid">
        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
          </div>
          <h4>Central &amp; State PSUs</h4>
          <p>Board director recruitment, cadre restructuring, voluntary retirement schemes, and service rule drafting.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
          </div>
          <h4>Government Mission PMUs</h4>
          <p>Contractual staffing, technical expert deployment, milestone remuneration tracking, and BGV.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <h4>Banking &amp; Financial Services</h4>
          <p>High-security background screening, compliance officer search, and POSH committee enablement.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <h4>Fast-Growing Enterprises</h4>
          <p>Complete HR digitization, automated payroll, employee handbook formulation, and retention policies.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       RELATED SERVICES STRIP
       ========================================================================= -->
  <section class="related-services-strip">
    <div class="container">
      <div class="service-section-header">
        <span class="section-badge">Explore Interconnected Practices</span>
        <h2>Adjacent Advisory Solutions</h2>
      </div>

      <div class="related-services-grid">
        <a href="<?php echo $basePath; ?>pages/learning-and-development.php" class="related-service-card">
          <span class="rel-code">Service Line 04</span>
          <h3 class="rel-title">Learning &amp; Development</h3>
          <p class="service-module-desc">Training Needs Analysis, LMS implementation, and institutional leadership coaching.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/business-operations-optimization.php" class="related-service-card">
          <span class="rel-code">Service Line 08</span>
          <h3 class="rel-title">Business Operations Optimization</h3>
          <p class="service-module-desc">Workforce resource allocation, workflow automation, and organizational change management.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/financial-services-and-advisory.php" class="related-service-card">
          <span class="rel-code">Service Line 07</span>
          <h3 class="rel-title">Financial Services &amp; Advisory</h3>
          <p class="service-module-desc">Statutory payroll tax compliance, PF fund accounting, and internal control audits.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       PAGE CTA BANNER
       ========================================================================= -->
  <section style="padding: 64px 0; background: linear-gradient(135deg, #071527 0%, #0F3B6C 100%); color: #FFFFFF;">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:36px; flex-wrap:wrap;">
      <div style="max-width: 680px;">
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Strengthen Your Institutional Workforce</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Contact our human resource practice leaders to discuss leadership search, background screening mandates, or managed payroll services.
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
