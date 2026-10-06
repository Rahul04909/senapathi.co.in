<?php
/**
 * Senapathi Alliance - 9 Core Service Lines Component
 * Fully Viewport-Optimized Horizontal Showcase (100% In-View, Never Cut Off)
 * Preserves 100% Comprehensive Content Across All 9 Strategic Domains
 */
$basePath = isset($basePath) ? $basePath : '';
?>
<section class="services-section" id="services">
  
  <!-- =========================================================================
       1. Dramatic Hero Intro (Matching Reference Image 1)
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
       2. Sticky / Pinned Horizontal Services Showcase (Viewport Fitted)
       ========================================================================= -->
  <div class="services-pin-wrapper" id="servicesPinWrapper">
    
    <!-- Unified Ultra-Sleek Sticky Header (Never Wraps, Never Disappears) -->
    <div class="services-sticky-header">
      <div class="services-header-inner">
        
        <!-- Left: Suite Label, Dynamic Counter & Active Vertical Title -->
        <div class="services-brand-counter">
          <span class="services-tag-label">PRACTICE SUITE</span>
          <div class="services-counter-display">
            <span class="counter-val" id="currentServiceCounter">01</span>
            <span class="counter-sep">/</span>
            <span class="counter-max">09</span>
          </div>
          <span class="services-active-title" id="currentServiceTitle">Real Estate Transaction Advisory</span>
        </div>

        <!-- Center: 9 Fast-Jump Category Pills (Auto-Centers on Scroll) -->
        <div class="services-filter-pills" id="servicesFilterPills">
          <button class="service-pill-btn active" data-target-index="0" title="01. Real Estate Transaction Advisory">
            <span class="pill-idx">01</span><span class="pill-name">Real Estate</span>
          </button>
          <button class="service-pill-btn" data-target-index="1" title="02. Infrastructure Consulting">
            <span class="pill-idx">02</span><span class="pill-name">Infrastructure</span>
          </button>
          <button class="service-pill-btn" data-target-index="2" title="03. Human Resources (HR) Advisory">
            <span class="pill-idx">03</span><span class="pill-name">HR Advisory</span>
          </button>
          <button class="service-pill-btn" data-target-index="3" title="04. Learning & Development (L&D)">
            <span class="pill-idx">04</span><span class="pill-name">L&amp;D</span>
          </button>
          <button class="service-pill-btn" data-target-index="4" title="05. Impact Consulting & CSR">
            <span class="pill-idx">05</span><span class="pill-name">Impact &amp; CSR</span>
          </button>
          <button class="service-pill-btn" data-target-index="5" title="06. Business Development & Strategic Growth">
            <span class="pill-idx">06</span><span class="pill-name">Strategic Growth</span>
          </button>
          <button class="service-pill-btn" data-target-index="6" title="07. Financial Services & Advisory">
            <span class="pill-idx">07</span><span class="pill-name">Finance &amp; Audit</span>
          </button>
          <button class="service-pill-btn" data-target-index="7" title="08. Business Operations Optimization">
            <span class="pill-idx">08</span><span class="pill-name">Operations</span>
          </button>
          <button class="service-pill-btn" data-target-index="8" title="09. Digital Solutions & IT Strategy">
            <span class="pill-idx">09</span><span class="pill-name">Digital &amp; Tech</span>
          </button>
        </div>

        <!-- Right: Manual Prev / Next Arrow Controls -->
        <div class="services-header-arrows">
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

      <!-- Glowing Horizontal Timeline Progress Bar -->
      <div class="services-progress-track">
        <div class="services-progress-bar" id="servicesScrollProgress"></div>
      </div>

      <!-- Mobile Touch Swipe Guidance Indicator -->
      <div class="services-mobile-swipe-cue">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
        </svg>
        <span>Swipe horizontally to browse 09 service lines</span>
      </div>
    </div>

    <!-- Pinned Horizontal Translation Track (Viewport Fitted) -->
    <div class="services-track-viewport">
      <div class="services-horizontal-track" id="servicesHorizontalTrack">

        <!-- =================================================================
             SERVICE 01: Real Estate Transaction Advisory
             ================================================================= -->
        <article class="service-slide-card" data-index="0" data-category="infra-realestate finance-legal">
          <div class="slide-watermark">01</div>
          
          <div class="slide-content-left">
            <div>
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
                We support government bodies, PSUs, institutional landowners, developers, and public-private project entities in real estate transactions. Our work covers market review, title verification, approval coordination, and transaction structuring for transparent decision-making.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Verified title records, clear approval status, legal risk mitigation &amp; audit-ready files.</p>
                </div>
              </div>
            </div>

            <!-- Prominently Visible Action Buttons -->
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

          <!-- Right Column: 2-Column Practice Blueprint Grid -->
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
                    <h5>Apartment Sales &amp; Rental</h5>
                    <p>Market assessment &amp; leasing support.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.2</span>
                  <div class="module-content">
                    <h5>Due Diligence &amp; Title</h5>
                    <p>Title, land-use, &amp; approval review.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.3</span>
                  <div class="module-content">
                    <h5>Project Approvals</h5>
                    <p>Statutory interdepartmental tracking.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">1.4</span>
                  <div class="module-content">
                    <h5>Change of Land Use (CLU)</h5>
                    <p>State framework documentation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">1.5</span>
                  <div class="module-content">
                    <h5>Legal &amp; Regulatory Advisory</h5>
                    <p>Planning &amp; registration rules via partner law firm.</p>
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
            <div>
              <div class="slide-badge-row">
                <span class="slide-category-pill">Infrastructure &amp; Real Estate</span>
              </div>

              <h3 class="slide-title">Infrastructure <span class="shining-text">Consulting</span></h3>

              <p class="slide-overview">
                We provide planning, technical assistance, procurement, project management, and monitoring support for public infrastructure programmes and PPP projects, focusing on value for money, safeguards, and climate resilience.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Transparent procurement, cost and schedule monitoring, safeguard compliance &amp; formal handover.</p>
                </div>
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
                    <h5>Technical Assistance &amp; PMC</h5>
                    <p>Governance &amp; reporting protocols.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.2</span>
                  <div class="module-content">
                    <h5>EPC &amp; Procurement Advisory</h5>
                    <p>Bid strategy &amp; contract evaluation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.3</span>
                  <div class="module-content">
                    <h5>WASH Projects</h5>
                    <p>Needs assessment &amp; outcome M&amp;E.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.4</span>
                  <div class="module-content">
                    <h5>Climate-Resilient Smart Infra</h5>
                    <p>Disaster &amp; resource efficiency.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.5</span>
                  <div class="module-content">
                    <h5>ESG &amp; Green Building Audits</h5>
                    <p>Environmental safeguard compliance.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">2.6</span>
                  <div class="module-content">
                    <h5>Stakeholder Communication</h5>
                    <p>Public acceptance frameworks.</p>
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
            <div>
              <div class="slide-badge-row">
                <span class="slide-category-pill">People &amp; Institutional L&amp;D</span>
              </div>

              <h3 class="slide-title">Human Resource <span class="shining-text">Advisory</span></h3>

              <p class="slide-overview">
                Supporting government institutions, PSUs, and programme units in establishing suitable, compliant, and accountable workforce systems across recruitment, employee administration, and digital HRIS.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Verified personnel records, compliant service rules, reliable employee data &amp; continuous ops.</p>
                </div>
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
                    <h5>Executive Search &amp; Hiring</h5>
                    <p>Transparent leadership panel hiring.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.2</span>
                  <div class="module-content">
                    <h5>Background Verification</h5>
                    <p>Vetting credentials &amp; identity.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.3</span>
                  <div class="module-content">
                    <h5>HR Policy &amp; HRIS Systems</h5>
                    <p>SOPs &amp; digital approval workflows.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">3.4</span>
                  <div class="module-content">
                    <h5>Payroll &amp; HR Outsourcing</h5>
                    <p>Controlled statutory processing.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">3.5</span>
                  <div class="module-content">
                    <h5>Diversity, Equity &amp; Inclusion (DEI)</h5>
                    <p>Fair workplace access &amp; accessibility audits.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Sanctioned Posts</span>
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
            <div>
              <div class="slide-badge-row">
                <span class="slide-category-pill">People &amp; Institutional L&amp;D</span>
              </div>

              <h3 class="slide-title">Learning &amp; <span class="shining-text">Development</span></h3>

              <p class="slide-overview">
                Structured capacity-building programmes for government staff, PSU officers, and partners based on role readiness, verified skill gaps, approved learning outcomes, and digital LMS adoption.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Structured learning systems linking training expenditure with tested role readiness and skills.</p>
                </div>
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
                    <p>Evidence-based competency audits.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.2</span>
                  <div class="module-content">
                    <h5>Curriculum &amp; Modules</h5>
                    <p>Digital learning assets &amp; guides.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.3</span>
                  <div class="module-content">
                    <h5>LMS Implementation</h5>
                    <p>Digital course architecture &amp; roles.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.4</span>
                  <div class="module-content">
                    <h5>Competency Certification</h5>
                    <p>Transparent evaluation decisions.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.5</span>
                  <div class="module-content">
                    <h5>Technical Upskilling</h5>
                    <p>Role-based clinics &amp; handholding.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">4.6</span>
                  <div class="module-content">
                    <h5>Leadership Coaching</h5>
                    <p>Institutional succession planning.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Tested Knowledge</span>
                <span class="assurance-tag"><span class="dot blue"></span> Digital LMS</span>
                <span class="assurance-tag"><span class="dot purple"></span> Role Readiness</span>
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
            <div>
              <div class="slide-badge-row">
                <span class="slide-category-pill">Impact, CSR &amp; Strategy</span>
              </div>

              <h3 class="slide-title">Impact <span class="shining-text">Consulting</span></h3>

              <p class="slide-overview">
                We support government agencies, PSUs, and development partners in the design, monitoring, evaluation, and improvement of social and environmental programmes using field data, stakeholder consultations, CSR execution, and SROI modeling.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Auditable evidence on results, beneficiary coverage, CSR accountability &amp; verified social value.</p>
                </div>
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
                    <h5>Social Return (SROI)</h5>
                    <p>Deadweight &amp; value ratio.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.2</span>
                  <div class="module-content">
                    <h5>Baseline &amp; Endlines</h5>
                    <p>Qualitative field tracking.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.3</span>
                  <div class="module-content">
                    <h5>Project M&amp;E Systems</h5>
                    <p>Results dashboards &amp; audits.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.4</span>
                  <div class="module-content">
                    <h5>Impact Assessments</h5>
                    <p>Sustainability evaluation.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.5</span>
                  <div class="module-content">
                    <h5>CSR Strategy Execution</h5>
                    <p>Schedule VII compliance.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">5.6</span>
                  <div class="module-content">
                    <h5>Carbon Net-Zero</h5>
                    <p>Decarbonization pathways.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">5.7</span>
                  <div class="module-content">
                    <h5>CSR Communications &amp; Impact Reporting</h5>
                    <p>Conveying outcomes clearly to stakeholders and regulators.</p>
                  </div>
                </div>
              </div>

              <div class="panel-assurance-strip">
                <span class="assurance-tag"><span class="dot green"></span> Verified SROI</span>
                <span class="assurance-tag"><span class="dot blue"></span> Statutory CSR</span>
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
            <div>
              <div class="slide-badge-row">
                <span class="slide-category-pill">Impact, CSR &amp; Strategy</span>
              </div>

              <h3 class="slide-title">Strategic Growth &amp; <span class="shining-text">Market Advisory</span></h3>

              <p class="slide-overview">
                We support institutions and private entities in qualifying and securing opportunities arising from government programmes, public sector procurement plans, sector reforms, and tenders based on proper procedure, ethical engagement, and realistic delivery planning.
              </p>

              <div class="slide-deliverable-strip">
                <div class="deliverable-icon-box">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>
                </div>
                <div>
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Compliant pre-sales proposals, verified bid matrices, clear GTM roadmaps &amp; risk registers.</p>
                </div>
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
                    <h5>Pre-Sales &amp; Bid Prep</h5>
                    <p>Compliance matrices &amp; methodologies.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.2</span>
                  <div class="module-content">
                    <h5>Market Intelligence</h5>
                    <p>Pipelines &amp; competitor reviews.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.3</span>
                  <div class="module-content">
                    <h5>GTM Strategy</h5>
                    <p>Sector-entry &amp; stakeholder maps.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">6.4</span>
                  <div class="module-content">
                    <h5>Public Policy Relations</h5>
                    <p>Procedural representations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">6.5</span>
                  <div class="module-content">
                    <h5>Brand &amp; Marketing Advisory</h5>
                    <p>Institutional messaging &amp; compliant visibility.</p>
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
            <div>
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
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Audit-tested accounts, verified statutory filings, forensic risk mitigation &amp; defended books.</p>
                </div>
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
                    <h5>Corporate &amp; Tax</h5>
                    <p>GST returns &amp; transfer pricing.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.2</span>
                  <div class="module-content">
                    <h5>Statutory Audit &amp; Reporting</h5>
                    <p>Companies Act &amp; CAG guidelines.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.3</span>
                  <div class="module-content">
                    <h5>Internal &amp; Forensic Audit</h5>
                    <p>Transaction testing &amp; fraud controls.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">7.4</span>
                  <div class="module-content">
                    <h5>Accounting &amp; Bookkeeping</h5>
                    <p>Financial statements &amp; reconciliations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">7.5</span>
                  <div class="module-content">
                    <h5>M&amp;A Valuation &amp; Restructuring</h5>
                    <p>Due diligence &amp; capital structuring advisory.</p>
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
            <div>
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
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Documented SOPs, verified process KPIs, reduced cycle times &amp; measurable cost efficiencies.</p>
                </div>
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
                    <h5>Supply Chain Logistics</h5>
                    <p>Inventory &amp; vendor SLAs.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.2</span>
                  <div class="module-content">
                    <h5>Resource Allocation</h5>
                    <p>Opex review &amp; workload models.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.3</span>
                  <div class="module-content">
                    <h5>Process Re-Engineering</h5>
                    <p>Workflow mapping &amp; Lean SOPs.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">8.4</span>
                  <div class="module-content">
                    <h5>RPA &amp; Automation</h5>
                    <p>Routine route reconciliations.</p>
                  </div>
                </div>

                <div class="blueprint-module-card full-width">
                  <span class="module-number">8.5</span>
                  <div class="module-content">
                    <h5>Organizational Change Management</h5>
                    <p>User training &amp; phased adoption governance.</p>
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
            <div>
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
                  <strong>Institutional Safeguards &amp; Deliverables</strong>
                  <p>Auditable enterprise architecture, data security certification, zero vendor lock-in &amp; high adoption.</p>
                </div>
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
                    <h5>IT Strategy &amp; Architecture</h5>
                    <p>Current-state audit &amp; roadmap.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.2</span>
                  <div class="module-content">
                    <h5>Process Automation</h5>
                    <p>Legacy databases &amp; API portals.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.3</span>
                  <div class="module-content">
                    <h5>Cybersecurity Compliance</h5>
                    <p>CERT-In alignment &amp; testing.</p>
                  </div>
                </div>

                <div class="blueprint-module-card">
                  <span class="module-number">9.4</span>
                  <div class="module-content">
                    <h5>Platform Engineering</h5>
                    <p>Custom portals &amp; MIS dashboards.</p>
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

    <!-- Executive Bottom Footprint Strip (Eliminates Empty Space & Frames the Showcase) -->
    <div class="services-track-footer">
      <div class="services-footer-inner">
        <div class="footer-stat-group">
          <div class="footer-stat-item">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <span>100% Audit-Defensible Governance</span>
          </div>
          <span class="footer-dot">•</span>
          <div class="footer-stat-item">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <span>Mandates Delivered for Governments &amp; PSUs</span>
          </div>
          <span class="footer-dot">•</span>
          <div class="footer-stat-item">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <span>Pan-India Statutory &amp; Multi-Sector Execution</span>
          </div>
        </div>
        <div class="footer-scroll-hint">
          <span>Scroll to explore</span>
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </div>
      </div>
    </div>

  </div>

</section>
