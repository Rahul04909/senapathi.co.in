<?php
/**
 * Senapathi Alliance - 9 Core Service Lines Component
 * Image-Free Executive Capability Blueprint with GSAP Pinned Horizontal Scrub
 * Preserves 100% Comprehensive Content Across All 9 Strategic Domains
 */
$basePath = isset($basePath) ? $basePath : '';
?>
<section class="services-section" id="services">
  
  <!-- =========================================================================
       1. Dramatic Hero Intro (Matching Reference Aesthetic)
       ========================================================================= -->
  <div class="services-hero-intro">
    <div class="container text-center">
      <div class="services-intro-badge">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
        </svg>
        <span>Institutional Practice Domains</span>
      </div>
      
      <h2 class="services-intro-title">
        Step into the Institutional Future with <span class="shining-text">Innovative Services</span>
      </h2>
      
      <p class="services-intro-subtitle">
        Scroll down to explore how our 9 integrated practice verticals empower government departments, public sector undertakings, and multilateral institutions with end-to-end advisory rigor.
      </p>

      <!-- Animated Keep Scrolling Indicator -->
      <div class="services-scroll-cue">
        <span class="cue-text">KEEP SCROLLING TO EXPLORE</span>
        <div class="cue-line-container">
          <span class="cue-pulsing-line"></span>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================================================================
       2. Sticky / Pinned Horizontal Services Showcase
       ========================================================================= -->
  <div class="services-pin-wrapper" id="servicesPinWrapper">
    
    <!-- Top Interactive Control Bar (Filters, Counter & Progress) -->
    <div class="services-top-bar">
      <div class="container services-bar-flex">
        
        <!-- Category Filter Jump Pills -->
        <div class="services-filter-pills" id="servicesFilterPills">
          <button class="service-pill-btn active" data-target-index="0">All 9 Services</button>
          <button class="service-pill-btn" data-target-index="0">Real Estate</button>
          <button class="service-pill-btn" data-target-index="1">Infrastructure</button>
          <button class="service-pill-btn" data-target-index="2">HR Advisory</button>
          <button class="service-pill-btn" data-target-index="3">L&amp;D</button>
          <button class="service-pill-btn" data-target-index="4">Impact &amp; CSR</button>
          <button class="service-pill-btn" data-target-index="5">Strategic Growth</button>
          <button class="service-pill-btn" data-target-index="6">Finance &amp; Audit</button>
          <button class="service-pill-btn" data-target-index="7">Operations</button>
          <button class="service-pill-btn" data-target-index="8">Digital &amp; Tech</button>
        </div>

        <!-- Progress Counter & Manual Arrow Controls -->
        <div class="services-nav-controls">
          <div class="services-counter">
            <span class="counter-current" id="currentServiceCounter">01</span>
            <span class="counter-divider">/</span>
            <span class="counter-total">09</span>
          </div>

          <div class="services-arrow-buttons">
            <button class="service-arrow-btn" id="prevServiceBtn" aria-label="Previous Service">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            <button class="service-arrow-btn" id="nextServiceBtn" aria-label="Next Service">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>
        </div>

      </div>

      <!-- Glowing Horizontal Timeline Progress Bar -->
      <div class="services-progress-track">
        <div class="services-progress-bar" id="servicesScrollProgress"></div>
      </div>
    </div>

    <!-- Pinned Horizontal Translation Track -->
    <div class="services-track-viewport">
      <div class="services-horizontal-track" id="servicesHorizontalTrack">

        <!-- =================================================================
             SERVICE 01: Real Estate Transaction Advisory
             ================================================================= -->
        <article class="service-slide-card" data-index="0" data-category="infra-realestate finance-legal">
          <div class="slide-watermark">01</div>
          
          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Infrastructure &amp; Real Estate</span>
              <span class="slide-partner-pill">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Legal Advisory via Partner Law Firm
              </span>
            </div>

            <h3 class="slide-title">Real Estate Transaction <span class="shining-text">Advisory</span></h3>
            
            <p class="slide-overview">
              We support government bodies, PSUs, institutional landowners, developers, and public-private project entities in real estate transactions. Our work covers market review, title verification, approval coordination, and transaction structuring to ensure compliance, transparency, and informed institutional decision-making.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Verified title records, clear approval status, legal risk mitigation &amp; audit-ready transaction files.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="1">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <!-- Right Column: Institutional Practice Blueprint Panel -->
          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 01</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">05 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">1.1</span>
                  <div class="module-content">
                    <h5>Apartment Sales, Purchases &amp; Rental</h5>
                    <p>Market assessment, counterparty coordination &amp; procedural leasing support.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.2</span>
                  <div class="module-content">
                    <h5>Commercial &amp; Residential Due Diligence</h5>
                    <p>Title, land-use, approval, encumbrance, and regulatory transaction reviews.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.3</span>
                  <div class="module-content">
                    <h5>Real Estate Project Approval Facilitation</h5>
                    <p>Preparation, tracking &amp; interdepartmental coordination for statutory approvals.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.4</span>
                  <div class="module-content">
                    <h5>Change of Land Use (CLU)</h5>
                    <p>Eligibility assessment, procedural compliance, and state framework documentation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.5</span>
                  <div class="module-content">
                    <h5>Legal &amp; Regulatory Advisory</h5>
                    <p>Land, planning, registration, and development rules review via partner law firm.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Partner Law Firm</span>
                <span class="assurance-tag"><span class="dot blue"></span> Statutory Compliance</span>
                <span class="assurance-tag"><span class="dot purple"></span> Pan-India Execution</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 02: Infrastructure Consulting
             ================================================================= -->
        <article class="service-slide-card" data-index="1" data-category="infra-realestate">
          <div class="slide-watermark">02</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Infrastructure &amp; Real Estate</span>
            </div>

            <h3 class="slide-title">Infrastructure <span class="shining-text">Consulting</span></h3>

            <p class="slide-overview">
              We provide planning, technical assistance, procurement, project management, and monitoring support for public infrastructure programmes and PPP projects. Our focus is project readiness, value for money, environmental and social safeguards, climate resilience, and long-term service delivery.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Transparent procurement, cost and schedule monitoring, safeguard compliance &amp; formal handover.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="2">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 02</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">06 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">2.1</span>
                  <div class="module-content">
                    <h5>Technical Assistance (TA) &amp; PMC</h5>
                    <p>Implementation frameworks, governance, risk registers, and reporting protocols.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.2</span>
                  <div class="module-content">
                    <h5>Engineering, Procurement &amp; EPC Advisory</h5>
                    <p>Bid strategy, technical and contractual review, evaluation, and contract management.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.3</span>
                  <div class="module-content">
                    <h5>WASH Infrastructure Programmes</h5>
                    <p>Needs assessment, service-level planning, institutional arrangements &amp; outcome M&amp;E.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.4</span>
                  <div class="module-content">
                    <h5>Climate-Resilient &amp; Smart Infrastructure</h5>
                    <p>Disaster resilience, resource efficiency, digital monitoring, and inclusive planning.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.5</span>
                  <div class="module-content">
                    <h5>ESG &amp; Sustainability / Green Building Audits</h5>
                    <p>Environmental and social safeguard compliance, performance reviews &amp; green certification.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.6</span>
                  <div class="module-content">
                    <h5>Stakeholder &amp; Community Communication</h5>
                    <p>Consultation frameworks, messaging plans, and public acceptance strategies.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Value for Money</span>
                <span class="assurance-tag"><span class="dot blue"></span> EPC &amp; FIDIC Standards</span>
                <span class="assurance-tag"><span class="dot purple"></span> ESG Safeguards</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 03: Human Resource Advisory
             ================================================================= -->
        <article class="service-slide-card" data-index="2" data-category="hr-learning">
          <div class="slide-watermark">03</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">People &amp; Institutional L&amp;D</span>
            </div>

            <h3 class="slide-title">Human Resource <span class="shining-text">Advisory</span></h3>

            <p class="slide-overview">
              We support government institutions, PSUs, programme units, and project teams in establishing suitable, compliant, and accountable workforce systems. Our services cover organization structure, transparent hiring, administration, and digital HRIS platforms.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Verified personnel records, compliant service rules, reliable employee data &amp; continuity of operations.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="3">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 03</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">05 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">3.1</span>
                  <div class="module-content">
                    <h5>Executive Search &amp; Leadership Hiring</h5>
                    <p>Transparent role definition, talent identification, and panel appointment support.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.2</span>
                  <div class="module-content">
                    <h5>Background Verification (BGV) Services</h5>
                    <p>Structured verification of identity, education, employment, and credentials.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.3</span>
                  <div class="module-content">
                    <h5>HR Policy &amp; HRIS Implementation</h5>
                    <p>Standard operating procedures, approval workflows, and digital HR platforms.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.4</span>
                  <div class="module-content">
                    <h5>Payroll &amp; HR Outsourcing</h5>
                    <p>Controlled payroll processing, statutory benefits compliance, and SLA reporting.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.5</span>
                  <div class="module-content">
                    <h5>Diversity, Equity &amp; Inclusion (DEI) Advisory</h5>
                    <p>Fair workplace access, accessibility assessments, and non-discrimination audits.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Sanctioned Posts Compliance</span>
                <span class="assurance-tag"><span class="dot blue"></span> BGV Integrity</span>
                <span class="assurance-tag"><span class="dot purple"></span> Digital HRIS</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 04: Learning & Development (L&D)
             ================================================================= -->
        <article class="service-slide-card" data-index="3" data-category="hr-learning">
          <div class="slide-watermark">04</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">People &amp; Institutional L&amp;D</span>
            </div>

            <h3 class="slide-title">Learning &amp; <span class="shining-text">Development</span></h3>

            <p class="slide-overview">
              We design and implement capacity-building programmes for government staff, PSU employees, programme teams, and partner institutions based on identified skill gaps, approved learning outcomes, and assessment of workplace application.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Structured learning systems linking training expenditure with tested role readiness and skills.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="4">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 04</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">06 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">4.1</span>
                  <div class="module-content">
                    <h5>Training Needs Analysis (TNA)</h5>
                    <p>Evidence-based gap analysis, surveys, records review, and competency audits.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.2</span>
                  <div class="module-content">
                    <h5>Curriculum &amp; Module Development</h5>
                    <p>Facilitator guides, participant materials, assessments, and digital learning assets.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.3</span>
                  <div class="module-content">
                    <h5>LMS Platform Implementation</h5>
                    <p>Course architecture, digital roles, content migration, reporting, and adoption.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.4</span>
                  <div class="module-content">
                    <h5>Competency Assessment &amp; Certification</h5>
                    <p>Transparent evaluation frameworks and credible role-certification decisions.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.5</span>
                  <div class="module-content">
                    <h5>Technical Upskilling Workshops</h5>
                    <p>Role-based clinics, field handholding, and last-mile capability improvement.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.6</span>
                  <div class="module-content">
                    <h5>Leadership &amp; Succession Coaching</h5>
                    <p>Executive leadership transition, institutional continuity, and succession planning.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Tested Knowledge</span>
                <span class="assurance-tag"><span class="dot blue"></span> Digital LMS</span>
                <span class="assurance-tag"><span class="dot purple"></span> Workplace Application</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 05: Impact Consulting
             ================================================================= -->
        <article class="service-slide-card" data-index="4" data-category="impact-growth">
          <div class="slide-watermark">05</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Impact, CSR &amp; Strategy</span>
            </div>

            <h3 class="slide-title">Impact <span class="shining-text">Consulting</span></h3>

            <p class="slide-overview">
              We support government agencies, PSUs, and development partners in the design, monitoring, evaluation, and improvement of social and environmental programmes. Our work utilizes field data, stakeholder consultations, CSR execution, and SROI modeling.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Auditable evidence on results, beneficiary coverage, CSR accountability &amp; verified social value.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="5">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 05</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">07 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">5.1</span>
                  <div class="module-content">
                    <h5>Social Return on Investment (SROI)</h5>
                    <p>Material outcome valuation, deadweight assessment, and social value ratio calculation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.2</span>
                  <div class="module-content">
                    <h5>Baseline, Midline &amp; Endline Studies</h5>
                    <p>Quantitative and qualitative reference tracking during programme implementation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.3</span>
                  <div class="module-content">
                    <h5>Project Monitoring &amp; Evaluation (M&amp;E)</h5>
                    <p>Results frameworks, dashboards, data protocols, and corrective-action tracking.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.4</span>
                  <div class="module-content">
                    <h5>Comprehensive Impact Assessments</h5>
                    <p>Relevance, effectiveness, efficiency, inclusion, and sustainability evaluation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.5</span>
                  <div class="module-content">
                    <h5>CSR Strategy &amp; Execution</h5>
                    <p>Needs prioritization, partner due diligence, and statutory Schedule VII compliance.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.6</span>
                  <div class="module-content">
                    <h5>Carbon Offsetting &amp; Net-Zero Roadmaps</h5>
                    <p>Emissions baselining, decarbonization pathways, and carbon offset screening.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.7</span>
                  <div class="module-content">
                    <h5>CSR Communications &amp; Reporting</h5>
                    <p>Conveying outcomes clearly to stakeholders, regulators, and the public.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Verified SROI</span>
                <span class="assurance-tag"><span class="dot blue"></span> Statutory CSR Compliance</span>
                <span class="assurance-tag"><span class="dot purple"></span> Field Evidence</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 06: Business Development & Strategic Growth
             ================================================================= -->
        <article class="service-slide-card" data-index="5" data-category="impact-growth">
          <div class="slide-watermark">06</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Impact, CSR &amp; Strategy</span>
            </div>

            <h3 class="slide-title">Strategic Growth &amp; <span class="shining-text">Market Advisory</span></h3>

            <p class="slide-overview">
              We support institutions and private entities in qualifying and securing opportunities arising from government policies, public procurement plans, sector reforms, and tenders based on proper procedure, ethical engagement, and realistic delivery planning.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Compliant pre-sales proposals, verified bid matrices, clear GTM roadmaps &amp; risk registers.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="6">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 06</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">05 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">6.1</span>
                  <div class="module-content">
                    <h5>Pre-Sales Support &amp; Bid Preparation</h5>
                    <p>Opportunity qualification, compliance matrices, methodologies, and proposal drafting.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.2</span>
                  <div class="module-content">
                    <h5>Market Intelligence &amp; Analysis</h5>
                    <p>Programme budgets, policy priorities, procurement pipelines, and competitor reviews.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.3</span>
                  <div class="module-content">
                    <h5>Go-To-Market (GTM) Strategy</h5>
                    <p>Sector-entry pathways, institutional stakeholder maps, and capability packaging.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.4</span>
                  <div class="module-content">
                    <h5>Government Relations &amp; Public Policy</h5>
                    <p>Policy tracking, consultation papers, and compliant procedural representations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.5</span>
                  <div class="module-content">
                    <h5>Brand &amp; Marketing Advisory</h5>
                    <p>Institutional messaging, factual credentials, and compliant external visibility.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Procurement Integrity</span>
                <span class="assurance-tag"><span class="dot blue"></span> Bid Success Rate</span>
                <span class="assurance-tag"><span class="dot purple"></span> Policy Alignment</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 07: Financial Services & Advisory
             ================================================================= -->
        <article class="service-slide-card" data-index="6" data-category="finance-legal">
          <div class="slide-watermark">07</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Finance &amp; Statutory Audit</span>
              <span class="slide-partner-pill cag">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Partner CA Firm Empanelled with CAG
              </span>
            </div>

            <h3 class="slide-title">Financial Services &amp; <span class="shining-text">Assurance</span></h3>

            <p class="slide-overview">
              Through our partner Chartered Accountancy firm empanelled with the Comptroller &amp; Auditor General (CAG) of India, we provide accounting, audit, tax, assurance, transaction support, and financial governance to institutions, PSUs, and corporate clients.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Audit-tested accounts, verified statutory filings, forensic risk mitigation &amp; defended public expenditure.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="7">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 07</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">05 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">7.1</span>
                  <div class="module-content">
                    <h5>Corporate &amp; International Taxation</h5>
                    <p>Direct/indirect tax compliance, GST returns, transfer pricing, and representations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.2</span>
                  <div class="module-content">
                    <h5>Statutory Audit &amp; Reporting</h5>
                    <p>Independent verification under Companies Act, CAG guidelines, and accounting standards.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.3</span>
                  <div class="module-content">
                    <h5>Internal, Risk &amp; Forensic Audit</h5>
                    <p>Internal controls, transaction testing, fund-use verification, and fraud detection.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.4</span>
                  <div class="module-content">
                    <h5>Accounting &amp; Bookkeeping Services</h5>
                    <p>Ledger maintenance, financial statements, MIS reports, and statutory reconciliations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.5</span>
                  <div class="module-content">
                    <h5>M&amp;A Advisory, Valuation &amp; Restructuring</h5>
                    <p>Financial due diligence, business valuation, and capital-structuring advisory.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> CAG Empanelled CA</span>
                <span class="assurance-tag"><span class="dot blue"></span> Statutory Standards</span>
                <span class="assurance-tag"><span class="dot purple"></span> Forensic Assurance</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 08: Business Operations Optimization
             ================================================================= -->
        <article class="service-slide-card" data-index="7" data-category="digital-ops">
          <div class="slide-watermark">08</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Digital &amp; Operations</span>
            </div>

            <h3 class="slide-title">Business Operations <span class="shining-text">Optimization</span></h3>

            <p class="slide-overview">
              We assist public institutions, PSUs, and growing businesses in improving operational performance, reducing bottlenecks, optimizing resource allocation, and implementing robust process controls and workflow digitization.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Documented SOPs, verified process KPIs, reduced cycle times &amp; measurable cost efficiencies.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="8">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 08</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">05 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">8.1</span>
                  <div class="module-content">
                    <h5>Supply Chain &amp; Logistics Optimization</h5>
                    <p>Procurement flows, inventory management, warehousing, and vendor service levels.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.2</span>
                  <div class="module-content">
                    <h5>Corporate Resource Allocation</h5>
                    <p>Operating expenditure review, workload-balancing, and asset utilization models.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.3</span>
                  <div class="module-content">
                    <h5>Process Re-Engineering &amp; Lean Six Sigma</h5>
                    <p>Workflow mapping, friction elimination, standard operating procedures, and controls.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.4</span>
                  <div class="module-content">
                    <h5>RPA &amp; Workflow Automation</h5>
                    <p>Automating routine data entry, approval routes, reconciliations, and reporting.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.5</span>
                  <div class="module-content">
                    <h5>Organizational Change Management</h5>
                    <p>Stakeholder communication, user training, and phased adoption management.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Lean Six Sigma</span>
                <span class="assurance-tag"><span class="dot blue"></span> RPA Digitization</span>
                <span class="assurance-tag"><span class="dot purple"></span> Cost Optimization</span>
              </div>
            </div>
          </div>
        </article>

        <!-- =================================================================
             SERVICE 09: Digital Transformation & Technology Advisory
             ================================================================= -->
        <article class="service-slide-card" data-index="8" data-category="digital-ops">
          <div class="slide-watermark">09</div>

          <div class="slide-content-left">
            <div class="slide-badge-row">
              <span class="slide-category-pill">Digital &amp; Operations</span>
            </div>

            <h3 class="slide-title">Digital Transformation &amp; <span class="shining-text">Technology</span></h3>

            <p class="slide-overview">
              We assist public sector bodies, institutions, and businesses in planning, procuring, implementing, and governing digital systems. Our focus is secure, scalable, and user-adopted technology solutions aligned with policy rules and organizational goals.
            </p>

            <div class="slide-deliverable-strip">
              <div class="deliverable-icon-box">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div>
                <strong>Institutional Deliverable &amp; Safeguards</strong>
                <p>Auditable enterprise architecture, data security certification, zero vendor lock-in &amp; high adoption.</p>
              </div>
            </div>

            <div class="slide-actions-row">
              <button class="btn btn-primary btn-service-detail" data-service-id="9">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>

              <a href="#contact" class="btn btn-secondary slide-rfp-btn">
                <span>Request Scope Briefing</span>
              </a>
            </div>
          </div>

          <div class="slide-architecture-right">
            <div class="architecture-panel">
              <div class="panel-top-header">
                <div class="panel-title-block">
                  <span class="panel-code-badge">Practice Vertical 09</span>
                  <h4>Practice Architecture &amp; Modules</h4>
                </div>
                <span class="panel-modules-pill">04 Specialized Modules</span>
              </div>

              <div class="blueprint-modules-grid">
                <div class="blueprint-module-card">
                  <span class="module-number">9.1</span>
                  <div class="module-content">
                    <h5>IT Strategy &amp; Enterprise Architecture</h5>
                    <p>Current-state audit, future architecture roadmap, technology selection, and budgets.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.2</span>
                  <div class="module-content">
                    <h5>Process Automation &amp; Systems Integration</h5>
                    <p>Interfacing legacy databases, core transactional workflows, and departmental portals.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.3</span>
                  <div class="module-content">
                    <h5>Cybersecurity Risk Assessment &amp; Compliance</h5>
                    <p>Vulnerability testing, data protection, security SOPs, and statutory CERT-In alignment.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.4</span>
                  <div class="module-content">
                    <h5>Custom Software &amp; Platform Engineering</h5>
                    <p>Web applications, mobile portals, MIS dashboards, and citizen-facing services.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> CERT-In Compliance</span>
                <span class="assurance-tag"><span class="dot blue"></span> Open-Standards Architecture</span>
                <span class="assurance-tag"><span class="dot purple"></span> Zero Data Loss</span>
              </div>
            </div>
          </div>
        </article>

      </div>
    </div>

  </div>

</section>
