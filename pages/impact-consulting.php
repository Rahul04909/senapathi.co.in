<?php
/**
 * Senapathi Alliance - Service Line 05: Impact Consulting
 * High-End Institutional Advisory & SROI / ESG Practice
 */
$basePath = '../';
$pageTitle = "Impact Consulting & SROI | Senapathi Alliance";
$pageDescription = "Rigorous impact assessment, Social Return on Investment (SROI), baseline/endline evaluations, CSR strategy execution, and net-zero carbon roadmaps across India.";
$canonicalUrl = "https://senapathi.co.in/pages/impact-consulting.php";
$pageKeywords = "Impact Consulting India, SROI Social Return on Investment, CSR strategy execution, baseline endline evaluation, M&E monitoring evaluation, net zero roadmap, ESG impact reporting";
$activeNav = "services";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://senapathi.co.in/pages/impact-consulting.php#service",
      "name": "Impact Consulting & SROI",
      "provider": {
        "@type": "Organization",
        "name": "Senapathi Alliance",
        "url": "https://senapathi.co.in/"
      },
      "serviceType": "Socio-Economic Impact & ESG Advisory",
      "description": "Scientific impact evaluations, Social Return on Investment (SROI), CSR governance under Section 135, and decarbonization pathways.",
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://senapathi.co.in/pages/impact-consulting.php#breadcrumb",
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
          "name": "Impact Consulting",
          "item": "https://senapathi.co.in/pages/impact-consulting.php"
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
        <span class="current">Impact Consulting</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
        <span>Service Line 05 • Impact &amp; Growth</span>
      </div>

      <h1 class="page-title">
        Impact Consulting &amp; <span class="accent">Social Value Economics</span>
      </h1>

      <p class="page-subtitle">
        We deliver scientific monitoring, evaluation, and impact assessments for government schemes, multilateral programs, and corporate CSR portfolios — translating developmental expenditure into validated social return (SROI).
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Evaluation Standards: <strong>OECD-DAC &amp; Social Value International</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          <span>Statutory Alignment: <strong>Section 135 Companies Act (CSR) &amp; BRSR</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          <span>Practice: <strong>07 Core Sub-Specializations</strong></span>
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
          <h3>Quantifying Real Change Through Triangulated Evidence &amp; Econometric Rigor</h3>
          <p>
            Whether executing mandatory CSR impact assessments under the Companies Act 2013, validating flagship welfare programs, or demonstrating decarbonization pathways for global institutional capital, evidence must be scientifically defensible.
          </p>
          <p>
            Senapathi Alliance replaces qualitative anecdotes with empirical field evidence. We deploy statistically validated household sampling, quasi-experimental controls (Difference-in-Differences), digital CAPI survey tools, and Social Return on Investment (SROI) monetization models to evaluate attribution, deadweight, and displacement.
          </p>
          <p>
            Our assessments give boards, ministries, and funding agencies transparent proof of beneficiary welfare, geographic equity, and long-term socio-economic value creation.
          </p>
        </div>

        <div class="service-lead-highlight-box">
          <h4>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            Evidence Rigor
          </h4>
          <p>
            Triangulated field data collection with GPS verification, biometric audit trails, and econometric deadweight discounts.
          </p>
          <div class="service-lead-stats-row">
            <div class="service-lead-stat-mini">
              <strong>100%</strong>
              <span>Field Verification</span>
            </div>
            <div class="service-lead-stat-mini">
              <strong>SROI</strong>
              <span>Monetized Ratio</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Practice Architecture Header -->
      <div class="service-section-header" id="modules">
        <span class="section-badge">Practice Architecture</span>
        <h2>07 In-Depth Sub-Specializations</h2>
        <p>Scientific socio-economic research, mandatory CSR governance, M&amp;E framework design, and decarbonization strategies.</p>
      </div>

      <!-- Practice Modules Grid -->
      <div class="service-modules-grid">

        <!-- Module 5.1 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.1</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Social Return on Investment (SROI)</h3>
          <p class="service-module-desc">
            Assigning monetary values to social, environmental, and economic outcomes generated relative to capital invested, using Social Value International principles.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Stakeholder engagement to identify material positive and negative outcomes</li>
              <li>Development of financial proxies and monetization rubrics for intangible social gains</li>
              <li>Deadweight, attribution, and displacement calculation to eliminate over-claiming</li>
              <li>Sensitivity testing and net present value (NPV) SROI ratio computation</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> SROI Impact Valuation Report &amp; Financial Proxy Map.</div>
          </div>
        </article>

        <!-- Module 5.2 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.2</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Baseline, Midline &amp; Endline Studies</h3>
          <p class="service-module-desc">
            Rigorous multi-wave longitudinal surveys establishing pre-intervention baselines, tracking interim trajectory, and verifying endline outcomes.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Multi-stage stratified random sampling design with 95% confidence intervals</li>
              <li>Development of CAPI-based mobile digital survey tools with audio/GPS auditing</li>
              <li>Qualitative Key Informant Interviews (KII) and Focus Group Discussions (FGD)</li>
              <li>Longitudinal trend analysis and econometric difference-in-differences modeling</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Baseline/Midline/Endline Analytical Dossiers &amp; Clean Datasets.</div>
          </div>
        </article>

        <!-- Module 5.3 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.3</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Project Monitoring &amp; Evaluation (M&amp;E)</h3>
          <p class="service-module-desc">
            Constructing institutional Theory of Change (ToC) results frameworks, automated data pipelines, review mechanisms, and course-correction dashboards.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Theory of Change (ToC) and Logical Framework Analysis (LFA) architecture</li>
              <li>Key Performance Indicator (KPI) dictionaries and data-quality verification protocols</li>
              <li>Real-time cloud monitoring dashboards and red-flag trigger mechanisms</li>
              <li>Periodic independent concurrent monitoring visits and field spot-checks</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Results Framework (LogFrame), M&amp;E Manual &amp; Live Indicator Dashboards.</div>
          </div>
        </article>

        <!-- Module 5.4 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.4</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Comprehensive Impact Assessments</h3>
          <p class="service-module-desc">
            Evaluating programs across the 6 OECD-DAC dimensions: Relevance, Coherence, Effectiveness, Efficiency, Impact, and Sustainability.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Evaluation question structuring and multi-stakeholder perception benchmarking</li>
              <li>Beneficiary socio-economic uplift, health, education, and livelihood shift analysis</li>
              <li>Cost-effectiveness and unit-cost per beneficiary outcome calculations</li>
              <li>Unintended consequences diagnostics and sustainable exit strategy assessment</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> OECD-DAC Aligned Comprehensive Impact Evaluation Report.</div>
          </div>
        </article>

        <!-- Module 5.5 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.5</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">CSR Strategy &amp; Statutory Execution</h3>
          <p class="service-module-desc">
            Aligning CSR allocations under Section 135 of the Companies Act 2013 and Schedule VII, implementing partner due diligence, and statutory board reporting.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Needs assessment and geographic vulnerability mapping for CSR thematic targeting</li>
              <li>Implementing agency (NGO/Trust) track record, 12A, 80G, and MCA CSR-1 vetting</li>
              <li>Tripartite MoU structuring, milestone-based fund disbursement, and utilization audits</li>
              <li>Statutory Board CSR Committee reporting dossiers and annual disclosures</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Corporate CSR Master Policy, Partner Due Diligence Dossier &amp; Board Report.</div>
          </div>
        </article>

        <!-- Module 5.6 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.6</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Carbon Offsetting &amp; Net-Zero Roadmaps</h3>
          <p class="service-module-desc">
            Scope 1, 2, and 3 emissions baselining under GHG Protocol, science-based targets (SBTi), carbon credit verification, and decarbonization transition planning.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>GHG Protocol compliant carbon inventory across energy, logistics, and supply chains</li>
              <li>Decarbonization pathway modeling with Marginal Abatement Cost Curves (MACC)</li>
              <li>Verification of high-integrity carbon credits (Verra / Gold Standard)</li>
              <li>Business Responsibility &amp; Sustainability Reporting (BRSR) environmental disclosures</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Corporate Net-Zero Decarbonization Roadmap &amp; BRSR Filing Pack.</div>
          </div>
        </article>

        <!-- Module 5.7 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 5.7</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">CSR Communications &amp; Impact Storytelling</h3>
          <p class="service-module-desc">
            Translating complex econometric data into compelling annual impact reports, documentary narratives, infographical dashboards, and public disclosures.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Annual CSR report copywriting, design, and stakeholder dissemination strategy</li>
              <li>Beneficiary video case studies and human-interest impact documentation</li>
              <li>Interactive web dashboards showcasing geographic reach and indicator progress</li>
              <li>Public disclosure compliance for MCA national CSR portal and media briefs</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Published Institutional Impact Compendium &amp; Media Toolkits.</div>
          </div>
        </article>

      </div>

      <!-- Institutional Deliverable Showcase Banner -->
      <div class="service-deliverable-showcase">
        <div class="service-deliverable-grid">
          <div class="service-deliverable-col">
            <h3>Institutional Safeguards &amp; Regulatory Defense</h3>
            <p>
              In CSR and developmental funding, unsubstantiated claims attract regulatory penalties and accusations of greenwashing. Senapathi builds an unassailable audit shield.
            </p>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Section 135 MCA Immunity:</strong> Mandatory impact assessment reports fully compliant with MCA CSR Amendment Rules.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Zero-Greenwashing Audit Trail:</strong> Every kilowatt-hour saved or rupee of social benefit tied to verifiable primary logs and field GPS coordinates.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Donor &amp; Multilateral Validation:</strong> Methodology accepted without revision by World Bank, ADB, and global philanthropic funds.</span>
              </div>
            </div>
          </div>

          <div class="service-deliverable-col">
            <h3>5-Stage Impact Evaluation Lifecycle</h3>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 1:</strong> Evaluation scoping, Theory of Change design, indicator selection, and sampling plans.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 2:</strong> Digital survey tool programming, field investigator training, and pilot testing.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 3:</strong> Rigorous field data collection, audio/GPS audit checks, and qualitative consultations.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 4:</strong> Econometric analysis, SROI proxy monetization, deadweight discounting, and synthesis.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 5:</strong> Board presentation, statutory filing dossiers, and public stakeholder communication.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Target Client Sectors -->
      <div class="service-section-header centered">
        <span class="section-badge">Client Ecosystem</span>
        <h2>Sectors Benefiting from this Practice</h2>
        <p>Providing independent socio-economic rigor across institutional sectors.</p>
      </div>

      <div class="service-sectors-grid">
        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
          </div>
          <h4>Major Listed Corporates</h4>
          <p>Mandatory Section 135 CSR impact evaluations, BRSR Core reporting, and net-zero strategy.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
          </div>
          <h4>Central &amp; State Ministries</h4>
          <p>Third-party evaluation of flagship welfare schemes, sub-plan reviews, and NITI Aayog alignment.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <h4>Central PSUs</h4>
          <p>DPE guidelines CSR baseline audits, aspirational district projects, and community sustainability.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <h4>Philanthropic Foundations</h4>
          <p>Multi-crore portfolio outcome audits, grant due diligence, Theory of Change design, and SROI.</p>
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
        <a href="<?php echo $basePath; ?>pages/infrastructure-consulting.php" class="related-service-card">
          <span class="rel-code">Service Line 02</span>
          <h3 class="rel-title">Infrastructure Consulting &amp; PMC</h3>
          <p class="service-module-desc">WASH project implementation, climate-resilient engineering, and green certifications.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/financial-services-and-advisory.php" class="related-service-card">
          <span class="rel-code">Service Line 07</span>
          <h3 class="rel-title">Financial Services &amp; Advisory</h3>
          <p class="service-module-desc">Statutory audit, CSR fund accounting, internal controls, and transaction due diligence.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/business-development-and-strategic-growth.php" class="related-service-card">
          <span class="rel-code">Service Line 06</span>
          <h3 class="rel-title">Business Development &amp; Strategy</h3>
          <p class="service-module-desc">Government policy advisory, market intelligence, and institutional growth roadmaps.</p>
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
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Commission an Independent Impact Evaluation</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Consult with our senior impact economists to structure a baseline study, Social Return on Investment (SROI) model, or statutory CSR audit.
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
