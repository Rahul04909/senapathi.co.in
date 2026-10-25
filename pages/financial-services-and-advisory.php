<?php
/**
 * Senapathi Alliance - Service Line 07: Financial Services & Advisory
 * High-End Institutional Advisory & Statutory Assurance Practice
 */
$basePath = '../';
$pageTitle = "Financial Services & Strategic Advisory | Senapathi Alliance";
$pageDescription = "Statutory audit assurance, caorporate taxation, forensic accounting, M&A deal structuring, and financial governance delivered through our Partner Chartered Accountancy firm.";
$canonicalUrl = "https://senapathi.co.in/pages/financial-services-and-advisory.php";
$pageKeywords = "Financial Services Advisory India, statutory audit services, forensic accounting India, corporate taxation advisory, M&A valuation advisory, internal risk audit, ICAI partner CA firm";
$activeNav = "services";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://senapathi.co.in/pages/financial-services-and-advisory.php#service",
      "name": "Financial Services & Strategic Advisory",
      "provider": {
        "@type": "Organization",
        "name": "Senapathi Alliance",
        "url": "https://senapathi.co.in/"
      },
      "serviceType": "Financial Advisory & Statutory Assurance",
      "description": "Comprehensive accounting, statutory audit, corporate taxation, forensic risk reviews, and transaction structuring delivered via partner CA firm.",
      "areaServed": {
        "@type": "Country",
        "name": "India"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://senapathi.co.in/pages/financial-services-and-advisory.php#breadcrumb",
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
          "name": "Financial Services & Advisory",
          "item": "https://senapathi.co.in/pages/financial-services-and-advisory.php"
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
        <span class="current">Financial Services &amp; Advisory</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Service Line 07 • Finance &amp; Statutory Assurance</span>
      </div>

      <h1 class="page-title">
        Financial Services &amp; <span class="accent">Statutory Assurance Advisory</span>
      </h1>

      <p class="page-subtitle">
        Delivered through our registered Partner Chartered Accountancy firm: providing rigorous accounting, statutory audit, corporate taxation, forensic reviews, and M&amp;A transaction support across India.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Assurance Partner: <strong>Partner Chartered Accountancy Firm (ICAI)</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
          <span>Statutory Framework: <strong>Companies Act 2013, Ind AS &amp; Income Tax Act</strong></span>
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
          <h3>Defending Institutional Balance Sheets, Internal Controls &amp; Regulatory Integrity</h3>
          <p>
            In an era of intense financial scrutiny, public sector corporations, project entities, and commercial enterprises must maintain flawless accounting records, airtight internal financial controls (IFC), and absolute tax compliance.
          </p>
          <p>
            Senapathi Alliance coordinates specialized financial governance in close collaboration with our Partner Chartered Accountancy firm registered with the Institute of Chartered Accountants of India (ICAI). We ensure that every audit report, transfer pricing file, and forensic review satisfies the rigorous requirements of the Companies Act 2013 and national accounting standards.
          </p>
          <p>
            From defending complex corporate tax structures to providing fair value opinions in strategic mergers and acquisitions, our advisory safeguards corporate solvency and board accountability.
          </p>
        </div>

        <div class="service-lead-highlight-box">
          <h4>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            Assurance Safeguards
          </h4>
          <p>
            Full professional independence, adherence to ICAI Code of Ethics, and rigorous multi-tier partner peer reviews.
          </p>
          <div class="service-lead-stats-row">
            <div class="service-lead-stat-mini">
              <strong>100%</strong>
              <span>Statutory Compliance</span>
            </div>
            <div class="service-lead-stat-mini">
              <strong>Ind AS</strong>
              <span>Accounting Standards</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Practice Architecture Header -->
      <div class="service-section-header" id="modules">
        <span class="section-badge">Practice Architecture</span>
        <h2>06 In-Depth Sub-Specializations</h2>
        <p>Comprehensive corporate taxation, statutory assurance, forensic reviews, bookkeeping, M&amp;A, and ESG risk.</p>
      </div>

      <!-- Practice Modules Grid -->
      <div class="service-modules-grid">

        <!-- Module 7.1 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.1</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Corporate &amp; International Taxation</h3>
          <p class="service-module-desc">
            Direct and indirect tax compliance, GST audit filings, advance rulings, transfer pricing documentation, and cross-border Double Taxation Avoidance Agreement (DTAA) advisory.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Corporate income tax computations, deferred tax analysis, and return filings</li>
              <li>GST monthly/annual reconciliations (GSTR-9/9C) and input tax credit (ITC) optimization</li>
              <li>Transfer pricing benchmarking, Master File, Local File, and Form 3CEB certification</li>
              <li>Tax dispute representation before CIT(A) and dispute resolution panels</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Corporate Tax Audit Reports (3CD), Transfer Pricing Dossier &amp; GST Certifications.</div>
          </div>
        </article>

        <!-- Module 7.2 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.2</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Statutory Audit &amp; Financial Reporting</h3>
          <p class="service-module-desc">
            Independent statutory audit of financial statements under the Companies Act 2013, Indian Accounting Standards (Ind AS), CARO 2020 reporting, and IFC reviews.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Substantive testing of balances, revenue recognition (Ind AS 115), and lease accounting (Ind AS 116)</li>
              <li>Internal Financial Controls over Financial Reporting (IFCoFR) design and operating effectiveness testing</li>
              <li>Companies (Auditor's Report) Order (CARO 2020) compliance scrutiny and disclosures</li>
              <li>Consolidated financial statements preparation and statutory disclosure schedules</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Independent Auditor's Report, CARO 2020 Opinion &amp; IFC Evaluation.</div>
          </div>
        </article>

        <!-- Module 7.3 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.3</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Internal, Risk &amp; Forensic Audit</h3>
          <p class="service-module-desc">
            Risk-based internal audit (RBIA), revenue leakage detection, procurement fraud investigations, fund diversion tracing, and internal control enhancements.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Procure-to-Pay (P2P) and Order-to-Cash (O2C) internal risk reviews</li>
              <li>Digital forensic data analytics, journal entry anomaly tests, and Benford's Law testing</li>
              <li>Asset tracking, physical inventory reconciliation, and ghost vendor scans</li>
              <li>Whistleblower complaint investigation, evidence preservation, and remediation plans</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Quarterly Internal Audit Reports, Forensic Findings &amp; Risk Heatmaps.</div>
          </div>
        </article>

        <!-- Module 7.4 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.4</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">Accounting &amp; Bookkeeping Services</h3>
          <p class="service-module-desc">
            Standard operating chart of accounts, periodic ledger closures, bank reconciliations, fixed asset registers, and Management Information Systems (MIS) reporting.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Cloud accounting implementation (SAP, Tally Prime, Zoho Books, Oracle)</li>
              <li>Monthly trial balance preparation, bank/vendor/customer balance reconciliations</li>
              <li>Fixed Asset Register (FAR) compilation and depreciation schedules under Schedule II</li>
              <li>Monthly executive MIS reporting, cash flow projections, and variance analysis</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Reconciled General Ledgers, Fixed Asset Registers &amp; Monthly MIS Packs.</div>
          </div>
        </article>

        <!-- Module 7.5 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.5</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">M&amp;A Advisory, Valuation &amp; Deal Structuring</h3>
          <p class="service-module-desc">
            Financial due diligence (FDD), Quality of Earnings (QoE) reports, IBBI Registered Valuer valuations (DCF / Net Asset Value), and transaction documentation support.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>Buy-side and sell-side financial due diligence and normalized EBITDA adjustments</li>
              <li>Statutory business valuation under FEMA, Companies Act, and Income Tax rules</li>
              <li>Capital restructuring, debt-equity optimization, and slump sale vs. share purchase analysis</li>
              <li>Share Purchase Agreement (SPA) price adjustment covenants and escrow mechanisms</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> Quality of Earnings (QoE) Dossier &amp; Formal Statutory Valuation Certificate.</div>
          </div>
        </article>

        <!-- Module 7.6 -->
        <article class="service-module-card">
          <div class="service-module-header">
            <span class="service-module-code">Module 7.6</span>
            <div class="service-module-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
          </div>
          <h3 class="service-module-title">ESG Financial Risk Frameworks</h3>
          <p class="service-module-desc">
            Quantifying climate transition risks, carbon pricing exposure, supply chain sustainability liabilities, and green taxonomy compliance in financial disclosures.
          </p>
          <div class="service-module-scope">
            <div class="service-module-scope-title">Key Advisory Activities</div>
            <ul>
              <li>TCFD-aligned physical and transition financial risk scenario stress-testing</li>
              <li>Environmental liability provisioning and remediation cost estimations</li>
              <li>Green bond verification, sustainability-linked loan KPI tracking, and assurance</li>
              <li>BRSR Core financial parameter verification and external reasonable assurance</li>
            </ul>
          </div>
          <div class="service-module-deliverable">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <div><strong>Deliverable:</strong> ESG Financial Risk Stress-Test Dossier &amp; Green Financing Assurance.</div>
          </div>
        </article>

      </div>

      <!-- Institutional Deliverable Showcase Banner -->
      <div class="service-deliverable-showcase">
        <div class="service-deliverable-grid">
          <div class="service-deliverable-col">
            <h3>Institutional Safeguards &amp; Audit Defense</h3>
            <p>
              Delivered in full alignment with the Institute of Chartered Accountants of India (ICAI) and statutory accounting standards, guaranteeing defensibility before all regulatory bodies.
            </p>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Defended Financial Statements:</strong> Certified audit papers with zero qualified audit observations and bullet-proof disclosures.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Tax Dispute Immunity:</strong> Water-tight documentation ensuring transfer pricing and GST deductions withstand appellate scrutiny.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span><strong>Board Committee Assurance:</strong> Direct reporting to Audit Committees with prioritized internal control matrices.</span>
              </div>
            </div>
          </div>

          <div class="service-deliverable-col">
            <h3>5-Stage Assurance Lifecycle</h3>
            <div class="service-deliverable-points">
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 1:</strong> Pre-audit planning, materiality calculation, and internal control risk assessment.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 2:</strong> Substantive ledger testing, external third-party balance confirmations, and analytics.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 3:</strong> Review of non-compliances, journal entry testing, and tax provision reconciliation.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 4:</strong> Formal Audit Committee review, CARO 2020 findings presentation, and final signing.</span>
              </div>
              <div class="service-del-point">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                <span><strong>Stage 5:</strong> Statutory filing facilitation, MCA annual filing support, and audit workpaper archival.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Target Client Sectors -->
      <div class="service-section-header centered">
        <span class="section-badge">Client Ecosystem</span>
        <h2>Sectors Benefiting from this Practice</h2>
        <p>Providing independent financial rigor and statutory assurance across diverse industries.</p>
      </div>

      <div class="service-sectors-grid">
        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
          </div>
          <h4>Public Sector Undertakings (PSUs)</h4>
          <p>Statutory audit preparation, internal risk reviews, Ind AS transitions, and capital expenditure monitoring.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <h4>Banking, NBFCs &amp; Fintech</h4>
          <p>Portfolio due diligence, statutory NPA reviews, RBI regulatory compliance, and tax withholding audits.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
          </div>
          <h4>Private Equity &amp; Corporates</h4>
          <p>M&amp;A financial due diligence, Quality of Earnings (QoE), business valuations, and tax restructuring.</p>
        </div>

        <div class="service-sector-item">
          <div class="service-sector-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
          </div>
          <h4>Autonomous Government Bodies</h4>
          <p>Grant utilization certificate audits, fund tracing, procurement audits, and annual statutory accounts.</p>
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
          <p class="service-module-desc">Commercial property valuation, land title due diligence, and CLU conversion sanctions.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/impact-consulting.php" class="related-service-card">
          <span class="rel-code">Service Line 05</span>
          <h3 class="rel-title">Impact Consulting &amp; SROI</h3>
          <p class="service-module-desc">CSR fund audits under Section 135, ESG risk modeling, and SROI monetization.</p>
          <span class="rel-arrow">
            Explore Practice
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </span>
        </a>

        <a href="<?php echo $basePath; ?>pages/business-operations-optimization.php" class="related-service-card">
          <span class="rel-code">Service Line 08</span>
          <h3 class="rel-title">Business Operations Optimization</h3>
          <p class="service-module-desc">Internal financial control automation, ERP integration, and supply chain audit.</p>
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
        <h3 style="font-size: 1.85rem; font-weight: 800; color: #FFFFFF; margin-bottom: 12px;">Engage Statutory Assurance &amp; Financial Advisory</h3>
        <p style="font-size: 1rem; color: #CBD5E1; line-height: 1.6;">
          Connect with our financial and audit advisory principals to initiate a statutory audit, transaction due diligence review, or internal risk examination.
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
