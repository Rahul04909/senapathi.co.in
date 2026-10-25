<?php
/**
 * Senapathi Alliance - Service Line 02: Infrastructure Consulting
 * High-End Institutional Advisory & PMC Practice
 */
$basePath = '../';
$pageTitle = "Infrastructure Consulting & PMC | Senapathi Alliance";
$pageDescription = "Premier infrastructure consulting, Project Management Consultancy (PMC), EPC procurement advisory, WASH projects, and climate-resilient smart infrastructure advisory.";
$canonicalUrl = "https://senapathi.co.in/pages/infrastructure-consulting.php";
$pageKeywords = "Infrastructure Consulting India, PMC Project Management Consultancy, EPC procurement advisory, WASH infrastructure projects, climate resilient infrastructure, smart city advisory";
$activeNav = "services";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://senapathi.co.in/pages/infrastructure-consulting.php#service",
      "name": "Infrastructure Consulting & PMC",
      "provider": {
        "@type": "Organization",
        "name": "Senapathi Alliance",
        "url": "https://senapathi.co.in/"
      },
      "serviceType": "Infrastructure Programme Advisory & PMC",
      "description": "Comprehensive infrastructure project management, EPC bid structuring, WASH advisory, and climate resilience planning for public investments.",
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://senapathi.co.in/pages/infrastructure-consulting.php#breadcrumb",
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
          "name": "Infrastructure Consulting",
          "item": "https://senapathi.co.in/pages/infrastructure-consulting.php"
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
        <span class="current">Infrastructure Consulting</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
        </svg>
        <span>Service Line 02 • Infrastructure &amp; Real Estate</span>
      </div>

      <h1 class="page-title">
        Infrastructure Consulting &amp; <span class="accent">Programme Management</span>
      </h1>

      <p class="page-subtitle">
        We deliver project management consultancy (PMC), technical assistance, EPC procurement structuring, water &amp; sanitation (WASH) programmes, and climate-resilient asset advisory for public sector investments across India.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Delivery Standard: <strong>FIDIC &amp; MoF Public Procurement Manual</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
          <span>Focus Areas: <strong>Urban, Utilities, WASH &amp; Highways</strong></span>
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
          <h3>Ensuring Cost Certainty, Schedule Rigor &amp; Transparent Public Delivery</h3>
          <p>
            Public infrastructure projects in India represent immense capital outlays where delay, design misalignment, procurement challenges, or inadequate safeguard supervision can multiply costs and erode public trust.
          </p>
          <p>
            Senapathi Alliance provides comprehensive project lifecycle oversight. From Detailed Project Report (DPR) vetting, bid criteria structuring, and contractor evaluation to on-site quality assurance, risk registries, and milestone verification, we ensure projects transition from concept to commissioning with institutional certainty.
          </p>
          <p>
            Our infrastructure practice specializes in municipal utility networks, rural water supply missions (Jal Jeevan Mission), urban sanitation, highway concessions, and green building environmental certifications.
          </p>
        </div>

        <div class="service-lead-highlight-box">
          <h4>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            PMC Value Assurance
          </h4>
          <p>
            Delivering measurable value for public expenditure through transparent e-procurement, schedule compression, and contractor milestone compliance.
          </p>
          <div class="service-lead-stats-row">
            <div class="service-lead-stat-mini">
              <strong>Zero</strong>
              <span>Procurement Disputes</span>
            </div>
            <div class="service-lead-stat-mini">
              <strong>100%</strong>
              <span>Safeguard Tracking</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Practice Architecture Header -->
      <div class="service-section-header" id="modules">
        <span class="section-badge">Practice Architecture</span>
        <h2>06 In-Depth Sub-Specializations</h2>
        <p>End-to-end technical assistance, procurement advisory, and on-ground project management consultancy.</p>
      </div>

      <!-- Practice Modules Grid -->
      <div class="service-modules-grid">

        <!-- Module 2.1 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.1</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Technical Assistance (TA) &amp; PMC Governance</h3>
          <p class="service-module-desc">
            Establishing implementation frameworks, work breakdown structures, multi-tiered governance arrangements, project monitoring units (PMUs), and risk control registers.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>DPR scrutiny, bill of quantities (BOQ) validation, and rate analysis</li>
              <li>Establishment of on-site PMU governance, reporting protocols, and KPI dashboards</li>
              <li>Schedule compression through Critical Path Method (CPM) and Earned Value Management</li>
              <li>Periodic physical progress audits, milestone certification, and fund release verification</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> PMC Monthly Progress Reports (MPR), Milestone Certificates &amp; Risk Register.</div>
          </div>
        </article>

        <!-- Module 2.2 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.2</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">EPC &amp; PPP Procurement Advisory</h3>
          <p class="service-module-desc">
            Procurement strategy, tender document preparation (RFQ/RFP), model concession agreement customization, bid evaluation, and dispute-tested contract drafting.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Standard Bidding Document (SBD) customization under CVC &amp; GFR guidelines</li>
              <li>Technical eligibility criteria definition and financial turnover benchmarks</li>
              <li>Pre-bid query management, addenda drafting, and technical bid evaluation reports</li>
              <li>Contract management protocols, variation order controls, and price escalation clauses</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Final RFP/Tender Dossier, Bid Evaluation Report, and Concession Agreement.</div>
          </div>
        </article>

        <!-- Module 2.3 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.3</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Water, Sanitation &amp; Hygiene (WASH) Projects</h3>
          <p class="service-module-desc">
            Baseline needs assessment, network hydraulic modeling coordination, sewage treatment plant (STP) planning, fecal sludge management, and community adoption.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Water supply master planning, intake well design review, and pipe network hydraulics</li>
              <li>Decentralized wastewater treatment systems (DEWATS) and sludge management plans</li>
              <li>Service level benchmarking (SLB) for urban local bodies and rural gram panchayats</li>
              <li>Water quality testing lab integration and supervisory control (SCADA) monitoring</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> WASH DPRs, Service Level Benchmark Dashboards, and Implementation Plans.</div>
          </div>
        </article>

        <!-- Module 2.4 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.4</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Climate-Resilient &amp; Smart Infrastructure</h3>
          <p class="service-module-desc">
            Screening infrastructure assets for climate vulnerability, flood risks, heat island mitigation, smart sensor telemetry, and low-carbon materials integration.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Disaster risk screening and storm water drainage modeling for climate extremes</li>
              <li>Renewable microgrid integration, solar rooftop feasibility, and smart street lighting</li>
              <li>IoT telemetry integration for utility pressure, leakage detection, and energy audits</li>
              <li>Circular construction material utilization and embodied carbon reduction roadmaps</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Climate Risk Vulnerability Assessment (CRVA) &amp; Smart Utility Roadmap.</div>
          </div>
        </article>

        <!-- Module 2.5 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.5</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">ESG &amp; Green Building Certification Audits</h3>
          <p class="service-module-desc">
            Environmental and social impact assessments, GRIHA / IGBC green building compliance facilitation, energy simulation reviews, and statutory pollution board consents.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>GRIHA, IGBC, and LEED pre-assessment scoring, energy audits, and daylight modeling</li>
              <li>Environmental Management Plan (EMP) drafting and site pollution control supervision</li>
              <li>Worker health, occupational safety, and labor camp standard compliance audits</li>
              <li>State Pollution Control Board (SPCB) Consent to Establish (CTE) &amp; Operate (CTO)</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Green Building Credit Compliance Dossier &amp; Statutory EMP Audit Report.</div>
          </div>
        </article>

        <!-- Module 2.6 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 2.6</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Stakeholder &amp; Community Communication</h3>
          <p class="service-module-desc">
            Public consultation frameworks, grievance redressal mechanisms (GRM), Information Education &amp; Communication (IEC) strategies, and resettlement alignment.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Public hearing coordination, stakeholder mapping, and project disclosure protocols</li>
              <li>IEC campaign design for water conservation, hygiene practices, and municipal waste</li>
              <li>Multi-tier institutional grievance redressal mechanism (GRM) design and tracking</li>
              <li>Right of Way (RoW) community consensus documentation and socio-economic profiling</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Community Engagement Strategy, IEC Toolkits, and GRM Logs.</div>
          </div>
        </article>

      </div>

      <!-- Institutional Deliverable Showcase Banner -->
      <div class="service-deliverable-showcase">
        <div class="service-deliverable-grid">
          <div class="service-deliverable-col">
            <h3>Institutional Safeguards &amp; Capital Protection</h3>
            <p>
              Senapathi Alliance enforces rigorous technical supervision and contractual governance to protect government funds from cost overruns and arbitrary contractor claims.
            </p>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Milestone-Linked Releases:</strong> Contractor payments strictly validated against tested work, laboratory test certificates, and physical verification.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Claims &amp; Dispute Immunity:</strong> Water-tight contract administration ensuring claims are adjudicated strictly within agreed dispute boards.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Auditable Project Archive:</strong> Full digital documentation of measurement books, variation approvals, and test results for audit inspection.</span>
              </div>
            </div>
          </div>

          <div class="service-deliverable-col">
            <h3>5-Stage PMC Delivery Lifecycle</h3>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 1:</strong> DPR review, site surveys, environmental screening, and procurement packaging.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 2:</strong> RFP publication, transparent e-tendering, pre-bid conferences, and award.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 3:</strong> Mobilization oversight, quality assurance plans, and baselined CPM scheduling.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 4:</strong> Daily site supervision, laboratory testing, progress reporting, and invoice audits.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 5:</strong> Pre-commissioning trials, punch-list rectification, as-built drawings, and final handover.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Target Client Sectors -->
      <div class="service-section-header centered">
        <span class="section-badge">Client Ecosystem</span>
        <h2>Sectors Benefiting from this Practice</h2>
        <p>Providing high-rigor engineering and programme consulting across public infrastructure.</p>
      </div>

      <div class="service-sectors-grid">
        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
          </div>
          <h4>State Urban Development</h4>
          <p>Smart cities, municipal drainage, solid waste processing, and urban transport infrastructure.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
          </div>
          <h4>Water &amp; Sanitation Boards</h4>
          <p>Jal Jeevan Mission, rural pipe water schemes, sewerage treatment, and river rejuvenation.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <h4>Power &amp; Renewable Energy</h4>
          <p>Solar park transmission lines, substations, battery storage integration, and micro-grid PMC.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
          </div>
          <h4>Multilateral &amp; Donor Agencies</h4>
          <p>World Bank, ADB, and KfW funded programme implementation units and safeguard monitoring.</p>
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
        <a href="<?php echo $basePath; ?>pages/real-estate-transaction-advisory.php" class="related-service-card">
          <span class="rel-code">Service Line 01</span>
          <h3 class="rel-title">Real Estate Transaction Advisory</h3>
          <p class="service-module-desc">Land acquisition due diligence, Change of Land Use (CLU), and statutory property sanctions.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/business-operations-optimization.php" class="related-service-card">
          <span class="rel-code">Service Line 08</span>
          <h3 class="rel-title">Business Operations Optimization</h3>
          <p class="service-module-desc">Supply chain efficiency, Lean Six Sigma workflows, and corporate resource optimization.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/digital-transformation-and-technology.php" class="related-service-card">
          <span class="rel-code">Service Line 09</span>
          <h3 class="rel-title">Digital Transformation &amp; Tech</h3>
          <p class="service-module-desc">Smart city enterprise architecture, SCADA telemetry integration, and secure platforms.</p>
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
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Appoint PMC or Technical Assistance Partner</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Consult with our senior infrastructure advisors regarding tender structuring, on-site PMC deployment, or WASH program audits.
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
