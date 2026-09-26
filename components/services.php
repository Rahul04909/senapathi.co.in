<?php
/**
 * Senapathi Alliance - 9 Core Service Lines Component
 * Interactive Horizontal Scroll Showcase with GSAP Pinned Scrub & Deep-Dive Modals
 * Preserves 100% Comprehensive Content across all 9 Strategic Domains
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
        <span>Our Core Capabilities</span>
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
              We support government bodies, PSUs, institutional landowners, developers, and public-private project entities in real estate transactions with market review, document checking, approval coordination, and transaction support.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (5 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">1.1</span> Apartment Sales, Purchases &amp; Rental</div>
                <div class="module-chip"><span class="chip-code">1.2</span> Commercial &amp; Residential Due Diligence</div>
                <div class="module-chip"><span class="chip-code">1.3</span> Project Approval Facilitation</div>
                <div class="module-chip"><span class="chip-code">1.4</span> Change of Land Use (CLU)</div>
                <div class="module-chip"><span class="chip-code">1.5</span> Legal &amp; Regulatory Risk Advisory</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Verified Records, Clear Approvals &amp; Audit Trail</span>
              </div>
              
              <button class="btn btn-primary btn-service-detail" data-service-id="1">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" 
                alt="Real Estate Transaction Advisory" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Institutional Asset Valuation &amp; Land Title Due Diligence</span>
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
              Planning, technical assistance, procurement, project management, and monitoring support for public infrastructure programmes and PPP projects, focusing on value for money, safeguards, and climate resilience.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (6 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">2.1</span> TA &amp; Project Management Consultancy (PMC)</div>
                <div class="module-chip"><span class="chip-code">2.2</span> Engineering, Procurement &amp; Construction (EPC) Advisory</div>
                <div class="module-chip"><span class="chip-code">2.3</span> Water, Sanitation &amp; Hygiene (WASH) Projects</div>
                <div class="module-chip"><span class="chip-code">2.4</span> Climate-Resilient &amp; Smart Infrastructure</div>
                <div class="module-chip"><span class="chip-code">2.5</span> ESG &amp; Sustainability / Green Building Audits</div>
                <div class="module-chip"><span class="chip-code">2.6</span> Stakeholder &amp; Community Communication</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Value for Public Expenditure &amp; Service Delivery</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="2">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1545558014-8692077e9b5c?auto=format&fit=crop&w=1200&q=80" 
                alt="Infrastructure Consulting" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Public Works EPC • Smart Cities • WASH Frameworks</span>
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
              Supporting government institutions, PSUs, and programme units in establishing suitable, compliant, and accountable workforce systems across recruitment, administration, and digital HRIS.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (5 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">3.1</span> Executive Search &amp; Leadership Hiring</div>
                <div class="module-chip"><span class="chip-code">3.2</span> Background Verification (BGV) Services</div>
                <div class="module-chip"><span class="chip-code">3.3</span> HR Policy &amp; HRIS Systems Implementation</div>
                <div class="module-chip"><span class="chip-code">3.4</span> Payroll &amp; HR Outsourcing Controls</div>
                <div class="module-chip"><span class="chip-code">3.5</span> Diversity, Equity &amp; Inclusion (DEI) Advisory</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Transparent Recruitment &amp; Controlled Workforce Systems</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="3">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" 
                alt="Human Resource Advisory" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Leadership Hiring • BGV Vetting • Digital HRIS Architecture</span>
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
              Structured capacity-building programmes for government staff, PSU officers, and partners based on role readiness, verified skill gaps, approved learning outcomes, and digital LMS adoption.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (6 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">4.1</span> Training Needs Analysis (TNA)</div>
                <div class="module-chip"><span class="chip-code">4.2</span> Curriculum &amp; Pedagogical Development</div>
                <div class="module-chip"><span class="chip-code">4.3</span> LMS Platform Implementation &amp; Content</div>
                <div class="module-chip"><span class="chip-code">4.4</span> Competency Assessment &amp; Certification</div>
                <div class="module-chip"><span class="chip-code">4.5</span> Capacity Building &amp; Technical Upskilling</div>
                <div class="module-chip"><span class="chip-code">4.6</span> Executive Leadership &amp; Succession Coaching</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Measurable Role Readiness &amp; Enduring Capabilities</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="4">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=80" 
                alt="Learning and Development" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Institutional TNA • Digital LMS • Executive Competencies</span>
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
              Design, monitoring, evaluation, and improvement of social and environmental programmes using field evidence, stakeholder engagement, CSR execution roadmaps, and SROI assessment.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (7 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">5.1</span> Social Return on Investment (SROI)</div>
                <div class="module-chip"><span class="chip-code">5.2</span> Baseline, Midline &amp; Endline Studies</div>
                <div class="module-chip"><span class="chip-code">5.3</span> Project Monitoring &amp; Evaluation (M&amp;E)</div>
                <div class="module-chip"><span class="chip-code">5.4</span> Comprehensive Impact Assessments</div>
                <div class="module-chip"><span class="chip-code">5.5</span> CSR Strategy &amp; Execution Oversight</div>
                <div class="module-chip"><span class="chip-code">5.6</span> Carbon Offsetting &amp; Net-Zero Roadmaps</div>
                <div class="module-chip"><span class="chip-code">5.7</span> CSR Communications &amp; Impact Reporting</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Defensible Evidence, Triangulated Field Data &amp; SROI</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="5">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&w=1200&q=80" 
                alt="Impact Consulting" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>SROI Valuations • M&amp;E Frameworks • Carbon Net-Zero</span>
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
              Assisting institutions and enterprises in qualifying and winning opportunities arising from government programmes, public sector procurement, tender bid strategies, and economic reforms.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (5 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">6.1</span> Pre-Sales Support &amp; Bid Preparation</div>
                <div class="module-chip"><span class="chip-code">6.2</span> Market Intelligence &amp; Competitor Analysis</div>
                <div class="module-chip"><span class="chip-code">6.3</span> Go-To-Market (GTM) Expansion Strategy</div>
                <div class="module-chip"><span class="chip-code">6.4</span> Government Relations &amp; Public Policy</div>
                <div class="module-chip"><span class="chip-code">6.5</span> Brand &amp; Marketing Advisory</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: High-Win Rate Bids &amp; Compliant Market Penetration</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="6">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" 
                alt="Business Development and Strategic Growth" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Public Procurement Bids • GTM Strategy • Market Policy</span>
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
              Comprehensive financial governance, statutory audit, international taxation, internal risk reviews, forensic accounting, M&amp;A valuation, and ESG financial risk frameworks for regulated bodies.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (5 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">7.1</span> Corporate &amp; International Taxation</div>
                <div class="module-chip"><span class="chip-code">7.2</span> Statutory Audit &amp; Financial Reporting</div>
                <div class="module-chip"><span class="chip-code">7.3</span> Internal, Risk &amp; Forensic Audit</div>
                <div class="module-chip"><span class="chip-code">7.4</span> Accounting &amp; Bookkeeping Services</div>
                <div class="module-chip"><span class="chip-code">7.5</span> M&amp;A Advisory, Valuation &amp; Structuring</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Statutory Compliance, Risk Mitigation &amp; Defensible Books</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="7">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1200&q=80" 
                alt="Financial Services and Advisory" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>CAG Standards • Forensic Assurance • M&amp;A Structuring</span>
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
              Diagnosing institutional bottlenecks, Lean Six Sigma process re-engineering, supply chain enhancement, corporate resource allocation, RPA digitization, and managed change implementation.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (5 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">8.1</span> Supply Chain &amp; Logistics Optimization</div>
                <div class="module-chip"><span class="chip-code">8.2</span> Corporate Resource Allocation</div>
                <div class="module-chip"><span class="chip-code">8.3</span> Process Re-Engineering &amp; Lean Six Sigma</div>
                <div class="module-chip"><span class="chip-code">8.4</span> RPA &amp; Workflow Automation</div>
                <div class="module-chip"><span class="chip-code">8.5</span> Organizational Change Management</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Lower Operating Friction, Cost Savings &amp; Streamlined SOPs</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="8">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" 
                alt="Business Operations Optimization" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Supply Chain Logistics • Lean Six Sigma • RPA Automation</span>
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
              Architecting secure, user-centric digital platforms, IT enterprise blueprints, systems integration, process automation, and statutory cybersecurity risk assessments for institutional scale.
            </p>

            <div class="slide-modules-box">
              <div class="modules-header">Key Practice Areas (4 Specialized Modules):</div>
              <div class="modules-chip-grid">
                <div class="module-chip"><span class="chip-code">9.1</span> IT Strategy &amp; Enterprise Architecture</div>
                <div class="module-chip"><span class="chip-code">9.2</span> Process Automation &amp; Systems Integration</div>
                <div class="module-chip"><span class="chip-code">9.3</span> Cybersecurity Risk Assessment &amp; Compliance</div>
                <div class="module-chip"><span class="chip-code">9.4</span> Custom Software &amp; Platform Engineering</div>
              </div>
            </div>

            <div class="slide-footer-row">
              <div class="slide-deliverable-strip">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span>Outcome: Connected Systems, Zero Data Loss &amp; High User Adoption</span>
              </div>

              <button class="btn btn-primary btn-service-detail" data-service-id="9">
                <span>View Full Scope &amp; Methodology</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="slide-visual-right">
            <div class="slide-visual-frame">
              <img 
                src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" 
                alt="Digital Transformation and Technology Advisory" 
                class="slide-visual-img" 
                loading="lazy"
              >
              <div class="slide-visual-overlay"></div>
              <div class="visual-floating-tag">
                <span class="tag-dot"></span>
                <span>Enterprise Architecture • Cybersecurity • Platform Engineering</span>
              </div>
            </div>
          </div>
        </article>

      </div>
    </div>

  </div>

</section>
