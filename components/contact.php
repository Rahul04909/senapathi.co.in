<?php
/**
 * Senapathi Alliance - Contact & RFP Submission Component
 */
?>
<section class="section-padding contact-section" id="contact">
  <div class="container">
    
    <div class="contact-layout-grid">
      
      <!-- Left: Contact Details & Institutional Assurances -->
      <div class="contact-info-panel">
        <div class="contact-badge">
          <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          Direct Advisory Inquiries
        </div>

        <h2 class="contact-headline">
          Initiate a Consultation or Submit an RFP
        </h2>

        <p class="contact-intro">
          Whether you require transaction due diligence, infrastructure technical assistance, CAG-standard audit preparation, or institutional workforce development, our senior partners are prepared to assist.
        </p>

        <div class="contact-cards-stack">
          
          <div class="contact-card-box">
            <div class="contact-box-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="contact-box-details">
              <h4>Electronic Inquiries</h4>
              <p><a href="mailto:contact@senapathi.co.in">contact@senapathi.co.in</a></p>
            </div>
          </div>

          <div class="contact-card-box">
            <div class="contact-box-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <div class="contact-box-details">
              <h4>Corporate &amp; Government Engagements</h4>
              <p>Pan-India Mandates, PMU Deployments &amp; PSU Advisory</p>
            </div>
          </div>

          <div class="contact-card-box">
            <div class="contact-box-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div class="contact-box-details">
              <h4>Operating Hours</h4>
              <p>Monday to Friday: 9:00 AM – 6:00 PM IST</p>
            </div>
          </div>

        </div>

        <!-- Confidentiality Guarantee -->
        <div class="confidentiality-badge">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          <p>
            <strong>Tender &amp; Institutional Integrity:</strong> All inquiries, documentation, and preliminary evaluations are held under strict non-disclosure obligations and compliance protocols.
          </p>
        </div>

      </div>

      <!-- Right: Interactive Consultation & RFP Form -->
      <div class="contact-form-container">
        <div class="form-header">
          <h3>Request Proposal / Advisory Briefing</h3>
          <p>Complete the brief form below and our sectoral leads will review your terms of reference.</p>
        </div>

        <form class="contact-form" id="rfpForm">
          <div class="form-row">
            <div class="form-group">
              <label for="rfpName" class="form-label">Full Name *</label>
              <input type="text" id="rfpName" class="form-control" placeholder="e.g. Rajesh Sharma" required>
            </div>
            <div class="form-group">
              <label for="rfpOrg" class="form-label">Entity / Department Name *</label>
              <input type="text" id="rfpOrg" class="form-control" placeholder="e.g. State Urban Dev Agency / PSU" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="rfpEmail" class="form-label">Official Work Email *</label>
              <input type="email" id="rfpEmail" class="form-control" placeholder="name@gov.in or corporate" required>
            </div>
            <div class="form-group">
              <label for="rfpPhone" class="form-label">Contact Number *</label>
              <input type="tel" id="rfpPhone" class="form-control" placeholder="+91 98765 43210" required>
            </div>
          </div>

          <div class="form-group">
            <label for="rfpService" class="form-label">Primary Service Line of Interest *</label>
            <select id="rfpService" class="form-control" required>
              <option value="" disabled selected>Select an advisory vertical</option>
              <option value="Real Estate Transaction Advisory">1. Real Estate Transaction Advisory</option>
              <option value="Infrastructure Consulting">2. Infrastructure Consulting &amp; PMC</option>
              <option value="Human Resource Advisory">3. Human Resource Advisory</option>
              <option value="Learning and Development (L&D)">4. Learning &amp; Development (L&amp;D)</option>
              <option value="Impact Consulting">5. Impact Consulting &amp; SROI</option>
              <option value="Business Development and Strategic Growth">6. Business Development &amp; Strategic Growth</option>
              <option value="Financial Services and Advisory">7. Financial Services &amp; Advisory (CAG Empanelled Partner)</option>
              <option value="Business Operations Optimization">8. Business Operations Optimization</option>
              <option value="Digital Transformation and Technology Advisory">9. Digital Transformation &amp; Technology Advisory</option>
            </select>
          </div>

          <div class="form-group">
            <label for="rfpMessage" class="form-label">Assignment Context / Scope Overview</label>
            <textarea id="rfpMessage" class="form-control" placeholder="Please outline the key objectives, timeline, or statutory requirements of your assignment..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-submit-rfp">
            <span>Submit Advisory Request / RFP</span>
            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </button>

          <!-- Toast confirmation message -->
          <div class="form-toast" id="formToast">
            <svg style="width: 20px; height: 20px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Thank you! Your advisory inquiry has been received. Our practice lead will get in touch within 1 business day.</span>
          </div>
        </form>
      </div>

    </div>

  </div>
</section>
