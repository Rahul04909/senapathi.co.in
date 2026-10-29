<?php
/**
 * Senapathi Alliance - Service Line 04: Learning & Development (L&D)
 * High-End Institutional Advisory & Capacity Building Practice
 */
$basePath = '../';
$pageTitle = "Learning & Development (L&D) | Senapathi Alliance";
$pageDescription = "Comprehensive capacity building and institutional L&D: Training Needs Analysis (TNA), custom curriculum development, LMS implementation, and executive leadership coaching.";
$canonicalUrl = "https://senapathi.co.in/pages/learning-and-development.php";
$pageKeywords = "Learning and Development India, institutional capacity building, TNA Training Needs Analysis, LMS implementation, public sector executive coaching, technical upskilling";
$activeNav = "services";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://senapathi.co.in/pages/learning-and-development.php#service",
      "name": "Learning & Development (L&D)",
      "provider": {
        "@type": "Organization",
        "name": "Senapathi Alliance",
        "url": "https://senapathi.co.in/"
      },
      "serviceType": "Institutional Learning & Capacity Building",
      "description": "Evidence-based training architecture, diagnostic TNA, custom curriculum design, enterprise LMS integration, and executive coaching.",
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://senapathi.co.in/pages/learning-and-development.php#breadcrumb",
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
          "name": "Learning & Development",
          "item": "https://senapathi.co.in/pages/learning-and-development.php"
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
        <span class="current">Learning &amp; Development</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
        </svg>
        <span>Service Line 04 • HR &amp; Learning</span>
      </div>

      <h1 class="page-title">
        Learning &amp; Development &amp; <span class="accent">Institutional Capacity</span>
      </h1>

      <p class="page-subtitle">
        We architect structured capacity-building ecosystems for government personnel, PSU officers, and enterprise teams — transforming training expenditure into measurable workplace capability and institutional resilience.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Evaluation Model: <strong>Kirkpatrick 4-Level Framework</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
          <span>Delivery Modality: <strong>Blended, LMS &amp; Field Clinics</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          <span>Practice: <strong>06 Core Sub-Specializations</strong></span>
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
          <h3>Replacing Ad-Hoc Workshops with Evidence-Based Capability Infrastructure</h3>
          <p>
            Too often, institutional training budgets are expended on one-off workshops with zero measurement of workplace retention or systemic impact. In public governance and state-owned enterprises, shifting policy priorities and rapid digital transformation demand continuous, verified skill readiness.
          </p>
          <p>
            Senapathi Alliance designs institutional learning architectures rooted in diagnostic evidence. We begin with granular Training Needs Analysis (TNA), craft accredited curricula aligned with civil service and sector competency frameworks, deploy enterprise Learning Management Systems (LMS), and track workplace application over multi-year cycles.
          </p>
          <p>
            From procurement law workshops for tender committees to executive coaching for transitioning PSU directors, our interventions build permanent internal sovereign capability.
          </p>
        </div>

        <div class="service-lead-highlight-box">
          <h4>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            Capability Assurance
          </h4>
          <p>
            Every learning module is linked to tested role competencies, post-training workplace projects, and tangible operational efficiency metrics.
          </p>
          <div class="service-lead-stats-row">
            <div class="service-lead-stat-mini">
              <strong>Level 4</strong>
              <span>Impact Measurement</span>
            </div>
            <div class="service-lead-stat-mini">
              <strong>100%</strong>
              <span>Curriculum Customization</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Practice Architecture Header -->
      <div class="service-section-header" id="modules">
        <span class="section-badge">Practice Architecture</span>
        <h2>06 In-Depth Sub-Specializations</h2>
        <p>From diagnostic skill gap analysis and customized syllabus design to enterprise LMS and executive succession.</p>
      </div>

      <!-- Practice Modules Grid -->
      <div class="service-modules-grid">

        <!-- Module 4.1 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.1</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Training Needs Analysis (TNA)</h3>
          <p class="service-module-desc">
            Granular assessment of job roles, institutional performance bottlenecks, competency gaps, and learning priorities through interviews, testing, and operational audits.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Cadre-wise competency mapping and baseline skill inventory audits</li>
              <li>Operational delay analysis linking process errors with specific knowledge gaps</li>
              <li>Online diagnostic assessments, structured supervisory surveys, and focus groups</li>
              <li>Prioritized institutional training calendar and budget allocation matrices</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Institutional TNA Diagnostic Report &amp; 3-Year Learning Blueprint.</div>
          </div>
        </article>

        <!-- Module 4.2 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.2</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Curriculum &amp; Module Development</h3>
          <p class="service-module-desc">
            Custom instructional design, facilitator guides, participant workbooks, practical case studies, simulation exercises, and micro-learning digital assets.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Instructional design using ADDIE and Bloom's Revised Taxonomy frameworks</li>
              <li>Development of sector-specific case studies drawn from real Indian public administration</li>
              <li>Comprehensive Train-the-Trainer (ToT) facilitator manuals and assessment rubrics</li>
              <li>Production of interactive SCORM-compliant e-learning video modules and quizzes</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Master Facilitator Guide, Participant Kits &amp; Digital Courseware.</div>
          </div>
        </article>

        <!-- Module 4.3 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.3</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">LMS Platform Architecture &amp; Rollout</h3>
          <p class="service-module-desc">
            Selection, configuration, and integration of enterprise Learning Management Systems (LMS) with single sign-on (SSO), progress analytics, and automated certification.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>LMS functional specification, vendor evaluation, and cloud infrastructure architecture</li>
              <li>Role-based access controls, department hierarchies, and HRIS database integration</li>
              <li>Mobile-first offline course caching for field workers and rural extension staff</li>
              <li>Executive dashboard configuration for tracking course completion and compliance rates</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Deployed Institutional LMS Platform &amp; Administration Playbook.</div>
          </div>
        </article>

        <!-- Module 4.4 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.4</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Competency Assessment &amp; Certification</h3>
          <p class="service-module-desc">
            Independent, proctored competency validation, skill proficiency scoring, standardized certification issuance, and promotion-readiness evaluation.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Design of objective question banks, practical workplace simulations, and oral boards</li>
              <li>Secure online proctored examination environments with fraud-prevention controls</li>
              <li>Post-training workplace application assessments conducted at 60 and 90-day intervals</li>
              <li>Tamper-evident blockchain-verifiable digital certificates of competency</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Candidate Competency Scorecards &amp; Validated Certification Register.</div>
          </div>
        </article>

        <!-- Module 4.5 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.5</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Capacity Building &amp; Technical Upskilling</h3>
          <p class="service-module-desc">
            High-impact technical clinics on public procurement (GeM &amp; GFR 2017), FIDIC contract management, project finance, ESG frameworks, and digital governance tools.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Specialized workshops on General Financial Rules (GFR), CVC guidelines, and GeM portals</li>
              <li>Technical clinics for infrastructure engineers on DPR formulation and quality testing</li>
              <li>Data analytics and dashboard interpretation masterclasses for senior bureaucrats</li>
              <li>Field handholding and on-the-job mentorship clinics at district and division levels</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Master Workshop Delivery Reports, Attendance Logs &amp; Pre/Post Tests.</div>
          </div>
        </article>

        <!-- Module 4.6 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 4.6</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Executive Leadership &amp; Succession Coaching</h3>
          <p class="service-module-desc">
            One-on-one confidential advisory for senior leadership, board succession planning, strategic decision simulations, and crisis communication readiness.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Executive 360-degree feedback diagnostics and personalized development plans</li>
              <li>Succession pipeline mapping for critical executive and technical functions</li>
              <li>Boardroom governance simulation, stakeholder diplomacy, and crisis management</li>
              <li>Structured transition support for incoming Chairpersons and Managing Directors</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Executive Coaching Dossiers &amp; Board Succession Framework.</div>
          </div>
        </article>

      </div>

      <!-- Institutional Deliverable Showcase Banner -->
      <div class="service-deliverable-showcase">
        <div class="service-deliverable-grid">
          <div class="service-deliverable-col">
            <h3>Measurable Institutional Return on Learning</h3>
            <p>
              Senapathi Alliance replaces attendance sheets with verified business impact metrics, ensuring public training investments yield measurable governance gains.
            </p>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Reduced Operational Errors:</strong> Drastic reduction in procurement rejection rates, tender litigation, and audit queries.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Permanent Sovereign Knowledge:</strong> Institutionalization of custom knowledge assets and SOPs retained within the organization.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Accredited Certification:</strong> Structured evaluation portfolios defensible before training audit bodies and oversight panels.</span>
              </div>
            </div>
          </div>

          <div class="service-deliverable-col">
            <h3>5-Stage L&amp;D Architecture Lifecycle</h3>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 1:</strong> Diagnostic TNA, institutional baseline testing, and priority mapping.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 2:</strong> Curriculum design, participant manuals, and e-learning multimedia production.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 3:</strong> Train-the-Trainer (ToT) rollouts, LMS configuration, and cohort onboarding.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 4:</strong> Master workshop delivery, interactive simulations, and proctored testing.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 5:</strong> Level 3/4 workplace impact audits, certification registers, and refresher courses.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Target Client Sectors -->
      <div class="service-section-header centered">
        <span class="section-badge">Client Ecosystem</span>
        <h2>Sectors Benefiting from this Practice</h2>
        <p>Strengthening executive and operational competencies across major institutional sectors.</p>
      </div>

      <div class="service-sectors-grid">
        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
          </div>
          <h4>Civil Service &amp; State Academies</h4>
          <p>Induction programs, procurement reforms, e-governance systems, and citizen-centric service clinics.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <h4>Maharatna &amp; Navratna PSUs</h4>
          <p>Leadership transitions, enterprise risk management, FIDIC contract management, and ESG masterclasses.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
          </div>
          <h4>Urban Local Bodies &amp; Utilities</h4>
          <p>Frontline sanitation engineering, GIS telemetry usage, SCADA water management, and property tax collection.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
          </div>
          <h4>Regulated Corporations</h4>
          <p>Regulatory compliance workshops, anti-corruption safeguards, cybersecurity awareness, and POSH training.</p>
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
        <a href="<?php echo $basePath; ?>pages/human-resource-advisory.php" class="related-service-card">
          <span class="rel-code">Service Line 03</span>
          <h3 class="rel-title">Human Resource Advisory</h3>
          <p class="service-module-desc">Executive search, BGV credential screening, and institutional HR policy formulation.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/business-operations-optimization.php" class="related-service-card">
          <span class="rel-code">Service Line 08</span>
          <h3 class="rel-title">Business Operations Optimization</h3>
          <p class="service-module-desc">Organizational change management, process re-engineering, and RPA implementation.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/digital-transformation-and-technology.php" class="related-service-card">
          <span class="rel-code">Service Line 09</span>
          <h3 class="rel-title">Digital Transformation &amp; Tech</h3>
          <p class="service-module-desc">Enterprise software platforms, custom e-learning portals, and cybersecurity audits.</p>
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
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Commission an Institutional L&amp;D Architecture</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Connect with our learning specialists to conduct a comprehensive Training Needs Analysis or deploy an enterprise LMS platform.
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
