<?php
/**
 * Senapathi Alliance - Terms & Conditions
 * Professional Legal Framework for Corporate & Government Advisory
 */
$basePath = '../';
$pageTitle = "Terms & Conditions | Senapathi Alliance - Corporate & Government Advisory";
$pageDescription = "Official terms and conditions governing multidisciplinary management, technical consulting, and advisory services provided by Senapathi Alliance (Senapathi India).";
$canonicalUrl = "https://senapathi.co.in/pages/terms-&-conditions.php";
$pageKeywords = "Senapathi Alliance Terms and Conditions, advisory contract terms, public procurement terms, CAG audit advisory terms, institutional consulting agreement";
$activeNav = "terms";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://senapathi.co.in/pages/terms-&-conditions.php#webpage",
      "url": "https://senapathi.co.in/pages/terms-&-conditions.php",
      "name": "Terms and Conditions - Senapathi Alliance",
      "description": "Terms governing professional advisory engagements with Senapathi Alliance.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://senapathi.co.in/#website",
        "url": "https://senapathi.co.in/",
        "name": "Senapathi Alliance"
      },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "@id": "https://senapathi.co.in/pages/terms-&-conditions.php#breadcrumb",
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
            "name": "Legal",
            "item": "https://senapathi.co.in/pages/terms-&-conditions.php"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Terms & Conditions",
            "item": "https://senapathi.co.in/pages/terms-&-conditions.php"
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
        <span>Legal</span>
        <span class="separator">/</span>
        <span class="current">Terms &amp; Conditions</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        <span>Institutional Contractual Framework</span>
      </div>

      <h1 class="page-title">
        Terms &amp; <span class="accent">Conditions</span> of Engagement
      </h1>

      <p class="page-subtitle">
        These standard terms govern all consultancy contracts, tender submissions, project management retainers, and advisory services provided by Senapathi Alliance (Senapathi India) to government entities, PSUs, multilateral agencies, and commercial clients.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <span>Effective Date: <strong>September 1, 2026</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Document Version: <strong>Ver 3.2 (Statutory Compliance)</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
          <span>Jurisdiction: <strong>New Delhi, Republic of India</strong></span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       LEGAL CONTENT WRAPPER WITH STICKY TABLE OF CONTENTS
       ========================================================================= -->
  <section class="legal-page-wrapper">
    <div class="container">
      <div class="legal-grid-layout">
        
        <!-- Sticky Table of Contents Sidebar -->
        <aside class="legal-toc-sidebar" aria-label="Table of Contents">
          <div class="legal-toc-header">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
            <span>Sections Index</span>
          </div>

          <nav class="legal-toc-list">
            <a href="#section-1" class="legal-toc-link"><span class="num">01.</span> Institutional Scope</a>
            <a href="#section-2" class="legal-toc-link"><span class="num">02.</span> Scope of Services</a>
            <a href="#section-3" class="legal-toc-link"><span class="num">03.</span> Regulated Partner Services</a>
            <a href="#section-4" class="legal-toc-link"><span class="num">04.</span> Client Obligations</a>
            <a href="#section-5" class="legal-toc-link"><span class="num">05.</span> Intellectual Property</a>
            <a href="#section-6" class="legal-toc-link"><span class="num">06.</span> Confidentiality &amp; NDA</a>
            <a href="#section-7" class="legal-toc-link"><span class="num">07.</span> Liability &amp; Indemnity</a>
            <a href="#section-8" class="legal-toc-link"><span class="num">08.</span> Authority Approvals</a>
            <a href="#section-9" class="legal-toc-link"><span class="num">09.</span> Professional Invoicing</a>
            <a href="#section-10" class="legal-toc-link"><span class="num">10.</span> Termination &amp; Handover</a>
            <a href="#section-11" class="legal-toc-link"><span class="num">11.</span> Dispute Resolution</a>
            <a href="#section-12" class="legal-toc-link"><span class="num">12.</span> Legal Notices &amp; Contact</a>
          </nav>
        </aside>

        <!-- Main Legal Content Body -->
        <div class="legal-content-card">
          
          <!-- Key Compliance Alert Banner -->
          <div class="legal-alert-banner">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div class="legal-alert-banner-text">
              <h4>Statutory Empanelment &amp; Regulated Practice Notice</h4>
              <p>
                Senapathi Alliance operates as a multidisciplinary technical and management advisory entity. Where regulated legal, statutory audit, taxation, or assurance services are required under Indian law, such services are performed by or through appropriately certified and CAG-empanelled partner firms in full compliance with ICAI and Bar Council of India mandates.
              </p>
            </div>
          </div>

          <!-- Section 1 -->
          <section id="section-1" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 1.0</span>
              <h2 class="legal-section-title">Institutional Mandate &amp; Scope of Engagement</h2>
            </div>
            <p class="legal-text">
              These Terms and Conditions (“Terms”) govern the relationship between <strong>Senapathi Alliance</strong> (operating as Senapathi India, hereinafter referred to as “the Firm”, “we”, “us”, or “our”) and any government ministry, department, Public Sector Undertaking (PSU), multilateral or bilateral development agency, local urban body (ULB), corporate entity, or private project sponsor (hereinafter referred to as “the Client”).
            </p>
            <p class="legal-text">
              By issuing a Letter of Award (LoA), Purchase Order (PO), Work Order, entering into a formal Contract Agreement, or accepting an engagement proposal, the Client agrees to be bound by these Terms, unless expressly modified by written mutual agreement signed by an authorized signatory of the Firm.
            </p>
          </section>

          <!-- Section 2 -->
          <section id="section-2" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 2.0</span>
              <h2 class="legal-section-title">Nature of Advisory Services &amp; Professional Retainers</h2>
            </div>
            <p class="legal-text">
              The Firm delivers management, technical, financial, and institutional support across nine core service verticals:
            </p>
            <div class="legal-list">
              <div class="legal-list-item">Real Estate Transaction Advisory &amp; Due Diligence</div>
              <div class="legal-list-item">Infrastructure Consulting, PMC, EPC Advisory &amp; WASH Programmes</div>
              <div class="legal-list-item">Human Resource Advisory, Executive Search &amp; HRIS Systems</div>
              <div class="legal-list-item">Learning and Development (L&amp;D), Competency Mapping &amp; LMS Implementation</div>
              <div class="legal-list-item">Impact Consulting, SROI Assessments &amp; CSR Strategy Execution</div>
              <div class="legal-list-item">Business Development, Tender Preparation &amp; Strategic Growth Advisory</div>
              <div class="legal-list-item">Financial Services, Risk Frameworks &amp; Statutory Audit Readiness</div>
              <div class="legal-list-item">Business Operations Optimization &amp; Lean Six Sigma Process Re-Engineering</div>
              <div class="legal-list-item">Digital Transformation, Enterprise Architecture &amp; Platform Engineering</div>
            </div>
            <p class="legal-text">
              Each assignment shall be executed according to the approved Terms of Reference (ToR), Project Charter, or Work Plan. The Firm exercises professional care, integrity, and diligence consistent with prevailing institutional consulting standards.
            </p>
          </section>

          <!-- Section 3 -->
          <section id="section-3" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 3.0</span>
              <h2 class="legal-section-title">Regulated Services &amp; Empanelled Partner Networks</h2>
            </div>
            <p class="legal-text">
              In strict adherence to statutory, professional, and regulatory frameworks:
            </p>
            <div class="legal-callout-card amber">
              <strong>3.1 Financial, Tax &amp; Statutory Audit Assurance:</strong> All formal statutory audit reports, forensic reviews, regulatory financial certifications, and tax compliance opinions are executed through our Partner Chartered Accountancy firm empanelled with the <strong>Comptroller and Auditor General of India (CAG)</strong> and registered with the Institute of Chartered Accountants of India (ICAI).
            </div>
            <div class="legal-callout-card">
              <strong>3.2 Legal, Title &amp; Regulatory Practice:</strong> Formal legal title opinions, courtroom representations, and registered regulatory filings are rendered through duly enrolled advocate partners and qualified law firms compliant with the Bar Council of India regulations.
            </div>
            <p class="legal-text">
              Senapathi Alliance provides the overall management framework, technical oversight, coordination, and synthesis of findings while preserving the professional autonomy of licensed practitioners.
            </p>
          </section>

          <!-- Section 4 -->
          <section id="section-4" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 4.0</span>
              <h2 class="legal-section-title">Client Obligations &amp; Information Accuracy</h2>
            </div>
            <p class="legal-text">
              The timely and successful execution of advisory deliverables requires active Client cooperation:
            </p>
            <div class="legal-list">
              <div class="legal-list-item"><strong>Access &amp; Furnishing of Records:</strong> The Client shall furnish all necessary institutional records, property titles, project histories, baseline surveys, financial accounts, and administrative authorizations within agreed timelines.</div>
              <div class="legal-list-item"><strong>Accuracy of Client Data:</strong> Unless expressly retained to conduct forensic verification or due diligence, the Firm is entitled to rely on the authenticity, completeness, and accuracy of records provided by the Client or competent authorities.</div>
              <div class="legal-list-item"><strong>Designation of Nodal Officer:</strong> For government and PSU assignments, the Client shall designate an authorized Project Director or Nodal Officer to facilitate inter-departmental coordination, approvals, and review meetings.</div>
            </div>
          </section>

          <!-- Section 5 -->
          <section id="section-5" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 5.0</span>
              <h2 class="legal-section-title">Intellectual Property Rights &amp; Deliverables</h2>
            </div>
            <p class="legal-text">
              Upon full receipt of agreed professional fees, the Client acquires a perpetual, non-exclusive license to utilize, implement, and submit to authorities all final reports, master plans, frameworks, and customized deliverables developed specifically for the assignment.
            </p>
            <p class="legal-text">
              The Firm retains all proprietary rights, copyright, and ownership in its pre-existing tools, proprietary methodologies, diagnostic algorithms, survey templates, standard operating procedures, and general software libraries utilized in the assignment.
            </p>
          </section>

          <!-- Section 6 -->
          <section id="section-6" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 6.0</span>
              <h2 class="legal-section-title">Confidentiality, Non-Disclosure &amp; Tender Integrity</h2>
            </div>
            <p class="legal-text">
              Both parties agree to treat all project-related documents, non-public government directives, financial data, tender strategies, and technical architectures as strictly confidential.
            </p>
            <div class="legal-callout-card emerald">
              <strong>Non-Disclosure Commitment:</strong> The Firm enforces strict non-disclosure obligations upon all partners, staff, and external advisors. No Client project details shall be disseminated without prior authorization, except where mandated by applicable law, parliamentary inquiry, or statutory audit proceedings.
            </div>
          </section>

          <!-- Section 7 -->
          <section id="section-7" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 7.0</span>
              <h2 class="legal-section-title">Professional Indemnity &amp; Limitation of Liability</h2>
            </div>
            <p class="legal-text">
              The Firm provides recommendations, strategic advice, and technical assessments based on facts, data, and prevailing regulations at the time of delivery. Market fluctuations, legislative amendments, judicial orders, or political policy shifts occurring post-handover are beyond the Firm's control.
            </p>
            <p class="legal-text">
              To the maximum extent permitted by applicable law, the total cumulative liability of the Firm arising out of or in connection with any assignment, whether in contract, tort (including negligence), or statutory breach, shall be strictly capped at the total professional advisory fees actually received by the Firm for the specific assignment. Under no circumstances shall either party be liable for indirect, incidental, or consequential commercial damages.
            </p>
          </section>

          <!-- Section 8 -->
          <section id="section-8" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 8.0</span>
              <h2 class="legal-section-title">Statutory Project Approvals &amp; Third-Party Authorities</h2>
            </div>
            <p class="legal-text">
              Where the scope of work includes facilitation of Change of Land Use (CLU), environmental clearances, building sanctions, utility interconnections, or government sanctions:
            </p>
            <p class="legal-text">
              The Firm undertakes thorough procedural preparation, application tracking, inter-departmental liaison, and compliance alignment. However, because final approvals rest within the statutory purview of sovereign government bodies, municipal authorities, and regulatory tribunals, the Firm cannot guarantee unilateral statutory grant timelines.
            </p>
          </section>

          <!-- Section 9 -->
          <section id="section-9" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 9.0</span>
              <h2 class="legal-section-title">Professional Invoicing, Taxes &amp; Milestone Payments</h2>
            </div>
            <p class="legal-text">
              Unless otherwise stipulated in the Work Order or Tender Agreement:
            </p>
            <div class="legal-list">
              <div class="legal-list-item">Professional fees are billed against predefined milestones or agreed monthly retainers.</div>
              <div class="legal-list-item">Invoices are payable within 30 days of receipt, subject to standard statutory deductions (TDS) as per the Income Tax Act, 1961.</div>
              <div class="legal-list-item">Goods and Services Tax (GST) and applicable statutory surcharges shall be charged extra at prevailing rates.</div>
            </div>
          </section>

          <!-- Section 10 -->
          <section id="section-10" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 10.0</span>
              <h2 class="legal-section-title">Termination &amp; Transition Disengagement</h2>
            </div>
            <p class="legal-text">
              Either party may terminate an engagement for material breach upon providing 30 days written notice specifying the breach, during which period the defaulting party shall have the opportunity to cure.
            </p>
            <p class="legal-text">
              In the event of termination, the Client shall pay for all services rendered and reimbursable expenses incurred up to the effective termination date, whereupon the Firm shall deliver all completed works and interim drafts.
            </p>
          </section>

          <!-- Section 11 -->
          <section id="section-11" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 11.0</span>
              <h2 class="legal-section-title">Governing Law, Dispute Resolution &amp; Arbitration</h2>
            </div>
            <p class="legal-text">
              These Terms, all contracts, and any disputes arising therefrom shall be governed by and construed in accordance with the <strong>laws of the Republic of India</strong>.
            </p>
            <p class="legal-text">
              Any dispute, controversy, or claim that cannot be resolved amicably through mutual senior-level consultations within 30 days shall be referred to and finally resolved by arbitration in accordance with the <strong>Arbitration and Conciliation Act, 1996</strong> (as amended). The seat and venue of arbitration shall be <strong>New Delhi</strong>, and the proceedings shall be conducted in English. The courts of New Delhi shall have exclusive jurisdiction.
            </p>
          </section>

          <!-- Section 12 -->
          <section id="section-12" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Clause 12.0</span>
              <h2 class="legal-section-title">Legal Notices &amp; Institutional Communication</h2>
            </div>
            <p class="legal-text">
              All formal legal notices, tender clarifications, and contractual communications shall be in writing and deemed served when delivered via registered speed post or official electronic mail to:
            </p>
            <div style="background: var(--color-bg-surface-alt); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 20px; margin-top: 14px;">
              <h5 style="color: var(--color-primary-900); font-size: 0.9375rem; margin-bottom: 6px;">Legal &amp; Contracts Secretariat</h5>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;"><strong>Senapathi Alliance (Senapathi India)</strong></p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;">Corporate &amp; Government Advisory Practice</p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;">Official Inquiries: <a href="mailto:contact@senapathi.co.in" style="color: var(--color-primary-600); text-decoration: underline;">contact@senapathi.co.in</a></p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5;">Republic of India</p>
            </div>
          </section>

        </div>

      </div>
    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
