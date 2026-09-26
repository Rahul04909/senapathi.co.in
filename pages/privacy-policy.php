<?php
/**
 * Senapathi Alliance - Privacy Policy
 * High-End Institutional Data Protection Framework (DPDP Act 2023 & Global Standards)
 */
$basePath = '../';
$pageTitle = "Privacy Policy | Senapathi Alliance - Corporate & Government Advisory";
$pageDescription = "Official Privacy Policy of Senapathi Alliance (Senapathi India). Discover our rigorous data governance protocols protecting government, PSU, and enterprise information under India's DPDP Act 2023.";
$canonicalUrl = "https://senapathi.co.in/pages/privacy-policy.php";
$pageKeywords = "Senapathi Alliance Privacy Policy, DPDP Act 2023 compliance, government data protection, PSU confidential records, corporate data privacy India";
$activeNav = "privacy";

$customSchemaJson = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://senapathi.co.in/pages/privacy-policy.php#webpage",
      "url": "https://senapathi.co.in/pages/privacy-policy.php",
      "name": "Privacy Policy - Senapathi Alliance",
      "description": "Institutional privacy and data governance framework for Senapathi Alliance.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://senapathi.co.in/#website",
        "url": "https://senapathi.co.in/",
        "name": "Senapathi Alliance"
      },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "@id": "https://senapathi.co.in/pages/privacy-policy.php#breadcrumb",
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
            "item": "https://senapathi.co.in/pages/privacy-policy.php"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Privacy Policy",
            "item": "https://senapathi.co.in/pages/privacy-policy.php"
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
        <span class="current">Privacy Policy</span>
      </nav>

      <div class="page-eyebrow">
        <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
        </svg>
        <span>Data Governance &amp; Confidentiality</span>
      </div>

      <h1 class="page-title">
        Institutional <span class="accent">Privacy Policy</span> &amp; Data Safeguards
      </h1>

      <p class="page-subtitle">
        Senapathi Alliance (Senapathi India) adheres to institutional data governance standards protecting government department records, PSU communications, procurement bids, client proprietary assets, and personal information in full compliance with Indian privacy laws.
      </p>

      <div class="page-meta-strip">
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <span>Effective Date: <strong>September 1, 2026</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>Compliance Framework: <strong>DPDP Act 2023 &amp; IT Act 2000</strong></span>
        </div>
        <div class="page-meta-item">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
          <span>Security Standard: <strong>Enterprise Encryption &amp; Role-Based Access</strong></span>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       PRIVACY CONTENT WRAPPER WITH STICKY TABLE OF CONTENTS
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
            <span>Privacy Sections</span>
          </div>

          <nav class="legal-toc-list">
            <a href="#privacy-1" class="legal-toc-link"><span class="num">01.</span> Scope &amp; Commitment</a>
            <a href="#privacy-2" class="legal-toc-link"><span class="num">02.</span> Regulatory Mandates</a>
            <a href="#privacy-3" class="legal-toc-link"><span class="num">03.</span> Information We Collect</a>
            <a href="#privacy-4" class="legal-toc-link"><span class="num">04.</span> Purpose of Processing</a>
            <a href="#privacy-5" class="legal-toc-link"><span class="num">05.</span> Government Data Safeguards</a>
            <a href="#privacy-6" class="legal-toc-link"><span class="num">06.</span> Empanelled Partner Sharing</a>
            <a href="#privacy-7" class="legal-toc-link"><span class="num">07.</span> Data Security &amp; Encryption</a>
            <a href="#privacy-8" class="legal-toc-link"><span class="num">08.</span> Data Retention &amp; Archival</a>
            <a href="#privacy-9" class="legal-toc-link"><span class="num">09.</span> Institutional Data Rights</a>
            <a href="#privacy-10" class="legal-toc-link"><span class="num">10.</span> Cookies &amp; Web Analytics</a>
            <a href="#privacy-11" class="legal-toc-link"><span class="num">11.</span> Policy Revisions</a>
            <a href="#privacy-12" class="legal-toc-link"><span class="num">12.</span> DPO Contact &amp; Grievances</a>
          </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="legal-content-card">
          
          <!-- Key Commitment Banner -->
          <div class="legal-alert-banner">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <div class="legal-alert-banner-text">
              <h4>Strict Institutional Data Non-Disclosure</h4>
              <p>
                As an advisory firm entrusted with critical public infrastructure records, statutory audit worksheets, land titles, and PSU procurement bids, Senapathi Alliance maintains strict data segregation, encrypted data storage, and zero unauthorized commercial monetization of Client data.
              </p>
            </div>
          </div>

          <!-- Section 1 -->
          <section id="privacy-1" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 1.0</span>
              <h2 class="legal-section-title">Scope &amp; Commitment to Data Privacy</h2>
            </div>
            <p class="legal-text">
              <strong>Senapathi Alliance</strong> (operating as Senapathi India, hereinafter referred to as “the Firm”, “we”, “our”, or “us”) recognizes the paramount importance of information security, data confidentiality, and privacy for government ministries, public sector entities, corporate clients, and individual professionals who interact with our advisory platforms.
            </p>
            <p class="legal-text">
              This Privacy Policy explains how we collect, handle, store, protect, and process institutional data, procurement information, transaction documents, and personal identifiers obtained through our website (<a href="https://senapathi.co.in" style="color: var(--color-primary-600); text-decoration: underline;">senapathi.co.in</a>), consultation forms, or formal consulting engagements.
            </p>
          </section>

          <!-- Section 2 -->
          <section id="privacy-2" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 2.0</span>
              <h2 class="legal-section-title">Applicable Regulatory Framework</h2>
            </div>
            <p class="legal-text">
              Our privacy governance policies are structured in accordance with:
            </p>
            <div class="legal-list">
              <div class="legal-list-item">The <strong>Digital Personal Data Protection Act, 2023 (DPDP Act)</strong> of the Republic of India.</div>
              <div class="legal-list-item">The <strong>Information Technology Act, 2000</strong>, and the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011.</div>
              <div class="legal-list-item">Public procurement confidentiality norms, parliamentary disclosure boundaries, and Indian Computer Emergency Response Team (CERT-In) cybersecurity directives.</div>
            </div>
          </section>

          <!-- Section 3 -->
          <section id="privacy-3" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 3.0</span>
              <h2 class="legal-section-title">Categories of Information We Collect</h2>
            </div>
            <p class="legal-text">
              Depending on the nature of our engagement, we collect the following categories of information:
            </p>
            <div class="legal-callout-card">
              <strong>3.1 Institutional &amp; Project Data:</strong> Administrative approvals, land revenue records, project preparation notes, tender documents, engineering drawings, environmental assessments, financial ledgers, and institutional baseline surveys furnished for advisory review.
            </div>
            <div class="legal-callout-card">
              <strong>3.2 Official Contact &amp; Advisory Inquiries:</strong> Full name, official designation, government/corporate department, official email address, phone number, and brief description of assignment terms submitted via our consultation portal.
            </div>
            <div class="legal-callout-card">
              <strong>3.3 Human Resource &amp; Verification Data:</strong> For executive search, background verification (BGV), or L&amp;D competency modules, candidate educational credentials, authorized past employment records, and identity verifications collected under explicit authorization.
            </div>
            <div class="legal-callout-card">
              <strong>3.4 Technical &amp; Electronic Telemetry:</strong> IP addresses, browser types, operating systems, and session duration data automatically recorded by web servers for security monitoring and DDoS mitigation.
            </div>
          </section>

          <!-- Section 4 -->
          <section id="privacy-4" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 4.0</span>
              <h2 class="legal-section-title">Purpose &amp; Lawful Grounds of Processing</h2>
            </div>
            <p class="legal-text">
              The Firm processes information solely for lawful, legitimate, and authorized advisory purposes:
            </p>
            <div class="legal-list">
              <div class="legal-list-item"><strong>Advisory Assignment Execution:</strong> Performing feasibility studies, transaction due diligence, procurement assistance, PMC oversight, and digital platform delivery.</div>
              <div class="legal-list-item"><strong>Statutory Verification &amp; Audit:</strong> Facilitating statutory review, forensic accounting, and CAG-aligned risk auditing.</div>
              <div class="legal-list-item"><strong>Consultation &amp; Tender Response:</strong> Preparing compliant bids, responding to Requests for Proposal (RFPs), and scheduling executive consultations.</div>
              <div class="legal-list-item"><strong>Regulatory &amp; Legal Compliance:</strong> Complying with applicable tax, corporate, anti-money laundering (AML), and court directives.</div>
            </div>
          </section>

          <!-- Section 5 -->
          <section id="privacy-5" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 5.0</span>
              <h2 class="legal-section-title">Sovereign Government &amp; Tender Data Safeguards</h2>
            </div>
            <p class="legal-text">
              Recognizing our role in public infrastructure, utility modernization, and PSU governance:
            </p>
            <div class="legal-callout-card emerald">
              <strong>Sovereignty Guarantee:</strong> All government department records, PSU tender bids, and sensitive public data are segregated in secure digital vaults with restricted, role-based access controls. Such data is never pooled, transferred outside authorized jurisdictions, or utilized for commercial marketing.
            </div>
          </section>

          <!-- Section 6 -->
          <section id="privacy-6" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 6.0</span>
              <h2 class="legal-section-title">Controlled Information Sharing with Empanelled Partners</h2>
            </div>
            <p class="legal-text">
              We do not sell, rent, or trade Client information. Information is shared only under strict institutional protocols:
            </p>
            <div class="legal-list">
              <div class="legal-list-item"><strong>CAG-Empanelled Partner CA Firm:</strong> Financial records, books of account, and tax schedules are shared exclusively with our empanelled Chartered Accountancy partner firm for the performance of statutory and forensic audit assignments under ICAI standards.</div>
              <div class="legal-list-item"><strong>Partner Law Firm Network:</strong> Real estate property papers, statutory clearance files, and legal due diligence dossiers are shared with enrolled advocate partners for formal title and planning reviews.</div>
              <div class="legal-list-item"><strong>Statutory Authorities:</strong> Where disclosure is mandated by Indian law, judicial summons, parliamentary inquiry, or regulatory order.</div>
            </div>
          </section>

          <!-- Section 7 -->
          <section id="privacy-7" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 7.0</span>
              <h2 class="legal-section-title">Data Security, Encryption &amp; Storage Protocols</h2>
            </div>
            <p class="legal-text">
              The Firm deploys robust technical and organizational security measures to protect data against unauthorized destruction, loss, alteration, or disclosure:
            </p>
            <div class="legal-list">
              <div class="legal-list-item"><strong>Cryptographic Encryption:</strong> Data in transit is protected using TLS 1.3 encryption; confidential project repositories are encrypted at rest using AES-256.</div>
              <div class="legal-list-item"><strong>Access Governance:</strong> Principle of Least Privilege (PoLP) and multi-factor authentication (MFA) enforce strict authorization on institutional files.</div>
              <div class="legal-list-item"><strong>Continuous Vulnerability Audits:</strong> Periodic penetration testing, vulnerability assessments, and access-log auditing aligned with CERT-In directives.</div>
            </div>
          </section>

          <!-- Section 8 -->
          <section id="privacy-8" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 8.0</span>
              <h2 class="legal-section-title">Data Retention &amp; Secure Disengagement Archival</h2>
            </div>
            <p class="legal-text">
              Project records and communications are retained only for as long as necessary to fulfill the engagement objectives, comply with statutory limitation periods (typically 8 years under the Companies Act and Income Tax Act for financial documentation), and support post-assignment audit defense.
            </p>
            <p class="legal-text">
              Upon conclusion of statutory retention windows, confidential digital files are purged via secure electronic wiping standards, and physical records are shredded.
            </p>
          </section>

          <!-- Section 9 -->
          <section id="privacy-9" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 9.0</span>
              <h2 class="legal-section-title">Institutional &amp; Individual Data Rights</h2>
            </div>
            <p class="legal-text">
              Under India's DPDP Act 2023, data principals and institutional clients possess defined rights regarding their personal data:
            </p>
            <div class="legal-list">
              <div class="legal-list-item"><strong>Right to Access:</strong> Request a summary of personal information held by the Firm.</div>
              <div class="legal-list-item"><strong>Right to Correction &amp; Erasure:</strong> Request the correction of inaccurate data or erasure of data that is no longer required for statutory or contractual purposes.</div>
              <div class="legal-list-item"><strong>Right to Grievance Redressal:</strong> Avail of an accessible grievance redressal mechanism regarding privacy concerns.</div>
            </div>
          </section>

          <!-- Section 10 -->
          <section id="privacy-10" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 10.0</span>
              <h2 class="legal-section-title">Cookies &amp; Web Analytics Policy</h2>
            </div>
            <p class="legal-text">
              Our website utilizes essential technical cookies necessary for session state management, accessibility settings, and CSRF protection. We do not deploy invasive third-party cross-site behavioral tracking cookies. Aggregate, non-identifying telemetry is utilized solely to optimize page loading speeds and mobile device responsiveness.
            </p>
          </section>

          <!-- Section 11 -->
          <section id="privacy-11" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 11.0</span>
              <h2 class="legal-section-title">Amendments to this Privacy Policy</h2>
            </div>
            <p class="legal-text">
              The Firm reserves the right to update or modify this Privacy Policy periodically to reflect changes in regulatory directives, institutional mandates, or cybersecurity standards. The revised version shall be published on this page with an updated effective date.
            </p>
          </section>

          <!-- Section 12 -->
          <section id="privacy-12" class="legal-section">
            <div class="legal-section-header">
              <span class="legal-section-badge">Section 12.0</span>
              <h2 class="legal-section-title">Data Protection Officer (DPO) &amp; Grievance Redressal</h2>
            </div>
            <p class="legal-text">
              For any questions, requests for data correction, or privacy grievances, please address correspondence to our designated Data Protection &amp; Compliance Officer:
            </p>
            <div style="background: var(--color-bg-surface-alt); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 20px; margin-top: 14px;">
              <h5 style="color: var(--color-primary-900); font-size: 0.9375rem; margin-bottom: 6px;">Data Protection &amp; Compliance Secretariat</h5>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;"><strong>Senapathi Alliance (Senapathi India)</strong></p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;">Corporate &amp; Government Advisory Division</p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5; margin-bottom: 4px;">Privacy Desk Email: <a href="mailto:contact@senapathi.co.in" style="color: var(--color-primary-600); text-decoration: underline;">contact@senapathi.co.in</a></p>
              <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.5;">New Delhi, Republic of India</p>
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
