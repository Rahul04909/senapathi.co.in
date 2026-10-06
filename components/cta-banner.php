<?php
/**
 * Senapathi Alliance - CTA Banner Component
 * Mobile-Responsive High Impact Engagement Callout
 */
?>
<section class="cta-banner-section">
  <div class="cta-banner-glow"></div>
  
  <div class="container cta-banner-container">
    <div class="cta-banner-content">
      <div class="cta-banner-badge">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span>Accelerate Your Institutional Mandate</span>
      </div>
      <h2 class="cta-banner-title">
        Transform Policy &amp; Public Infrastructure with Certainty
      </h2>
      <p class="cta-banner-desc">
        Connect with our advisory principals for project readiness reviews, procurement structuring, statutory CAG audit preparation, SROI impact assessments, or enterprise digital platforms.
      </p>
    </div>

    <div class="cta-banner-actions">
      <a href="#contact" class="btn btn-primary cta-primary-btn">
        <span>Request Proposal (RFP)</span>
        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
      <a href="mailto:contact@senapathi.co.in" class="btn btn-dark cta-secondary-btn">
        <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <span>Email Advisory Desk</span>
      </a>
    </div>

  </div>
</section>

<style>
.cta-banner-section {
  padding: 72px 0;
  background: linear-gradient(135deg, #071527 0%, #0F3B6C 100%);
  color: #FFFFFF;
  position: relative;
  overflow: hidden;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.cta-banner-glow {
  position: absolute;
  top: -100px;
  right: -100px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(14, 165, 233, 0.22) 0%, transparent 70%);
  pointer-events: none;
}

.cta-banner-container {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.cta-banner-content {
  max-width: 720px;
}

.cta-banner-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.8125rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: #38BDF8;
  margin-bottom: 14px;
}

.cta-banner-badge svg {
  width: 16px;
  height: 16px;
}

.cta-banner-title {
  font-size: clamp(1.85rem, 3.2vw, 2.5rem);
  font-weight: 800;
  line-height: 1.25;
  color: #FFFFFF;
  margin-bottom: 14px;
}

.cta-banner-desc {
  font-size: 1.05rem;
  color: #CBD5E1;
  line-height: 1.65;
  margin: 0;
}

.cta-banner-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
  min-width: 240px;
}

.cta-primary-btn {
  background: linear-gradient(135deg, #0284C7 0%, #38BDF8 100%);
  font-size: 0.96875rem;
  padding: 15px 28px;
}

.cta-secondary-btn {
  border-color: rgba(255, 255, 255, 0.2);
  justify-content: center;
  padding: 14px 24px;
}

@media (max-width: 900px) {
  .cta-banner-section {
    padding: 56px 0;
  }
  .cta-banner-container {
    gap: 30px;
  }
}

@media (max-width: 640px) {
  .cta-banner-section {
    padding: 44px 0;
  }
  .cta-banner-title {
    font-size: 1.65rem;
    line-height: 1.25;
  }
  .cta-banner-desc {
    font-size: 0.9375rem;
  }
  .cta-banner-actions {
    width: 100%;
    min-width: unset;
  }
  .cta-banner-actions .btn {
    width: 100%;
    justify-content: center;
    min-height: 48px;
  }
}
</style>
