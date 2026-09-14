<?php
/**
 * Senapathi Alliance - Service Deep-Dive Modal Dialog
 * Interactive Scope, Sub-Offerings & Approach Inspector
 */
?>
<div class="service-modal-overlay" id="serviceModalOverlay" role="dialog" aria-modal="true" aria-labelledby="modalServiceTitle">
  <div class="service-modal-container">
    
    <!-- Modal Header -->
    <div class="modal-header-strip">
      <div class="modal-header-info">
        <span class="modal-service-code" id="modalServiceCode">Service Line 01</span>
        <h3 class="modal-service-title" id="modalServiceTitle">Real Estate Transaction Advisory</h3>
      </div>
      <button class="modal-close-btn" id="modalCloseBtn" aria-label="Close Modal">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <!-- Modal Scrollable Content -->
    <div class="modal-body-content">
      
      <!-- Partner Notice (if applicable) -->
      <div class="modal-partner-note" id="modalPartnerTag" style="display: none;">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
        </svg>
        <span>Delivered in compliance with partner firm accreditation.</span>
      </div>

      <!-- Overview -->
      <div class="modal-section-block">
        <h4>
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          Overview &amp; Scope
        </h4>
        <p class="modal-overview-text" id="modalOverview"></p>
      </div>

      <!-- Practice Areas / Sub Offerings -->
      <div class="modal-section-block">
        <h4>
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
          Detailed Practice Modules &amp; Sub-Offerings
        </h4>
        <div class="modal-offerings-grid" id="modalOfferingsGrid">
          <!-- Populated dynamically via JS -->
        </div>
      </div>

      <!-- Senapathi Approach -->
      <div class="modal-highlight-box approach">
        <h5>
          <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          The Senapathi Execution Approach
        </h5>
        <p id="modalApproach"></p>
      </div>

      <!-- Key Value Deliverable -->
      <div class="modal-highlight-box">
        <h5>
          <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Key Value Deliverable
        </h5>
        <p id="modalDeliverable"></p>
      </div>

    </div>

    <!-- Modal Footer Actions -->
    <div class="modal-footer-actions">
      <button class="btn btn-secondary" onclick="document.getElementById('modalCloseBtn').click();">
        Close Window
      </button>
      <button class="btn btn-primary" id="modalRfpBtn">
        <span>Request RFP for This Service</span>
        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </button>
    </div>

  </div>
</div>
