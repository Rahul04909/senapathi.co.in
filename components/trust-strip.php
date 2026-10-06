<?php
/**
 * Senapathi Alliance - Trust Strip & Institutional Credentials
 * Mobile-Responsive, Touch-Interactive Credentials Bar
 */
?>
<section class="trust-strip">
  <div class="container">
    <div class="trust-grid">
      
      <div class="trust-card">
        <div class="trust-card-icon navy">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <div class="trust-card-body">
          <h4>Government &amp; PSU Focus</h4>
          <p>Central, State &amp; PMU assignments</p>
        </div>
      </div>

      <div class="trust-card">
        <div class="trust-card-icon amber">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <div class="trust-card-body">
          <h4>CAG Empanelled Partner</h4>
          <p>CA audit &amp; statutory assurance</p>
        </div>
      </div>

      <div class="trust-card">
        <div class="trust-card-icon emerald">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
          </svg>
        </div>
        <div class="trust-card-body">
          <h4>Legal &amp; Statutory Rigor</h4>
          <p>Partner law firm regulatory review</p>
        </div>
      </div>

      <div class="trust-card">
        <div class="trust-card-icon blue">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
          </svg>
        </div>
        <div class="trust-card-body">
          <h4>Assignment Lifecycle</h4>
          <p>Preparation to handover &amp; impact</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.trust-strip {
  background: #FFFFFF;
  border-top: 1px solid var(--color-border);
  border-bottom: 1px solid var(--color-border);
  padding: 30px 0;
  position: relative;
  z-index: 5;
}

.trust-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  align-items: center;
}

.trust-card {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 14px;
  border-radius: var(--radius-md);
  border: 1px solid transparent;
  transition: all var(--transition-fast);
  -webkit-tap-highlight-color: transparent;
}

.trust-card:hover {
  background: var(--color-bg-surface-alt);
  border-color: var(--color-border);
}

.trust-card:active {
  transform: scale(0.97);
  background: var(--color-primary-50);
}

.trust-card-icon {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: transform var(--transition-fast);
}

.trust-card-icon svg {
  width: 22px;
  height: 22px;
}

.trust-card-icon.navy {
  background: var(--color-primary-50);
  color: var(--color-primary-600);
}

.trust-card-icon.amber {
  background: #FEF3C7;
  color: #D97706;
}

.trust-card-icon.emerald {
  background: var(--color-accent-emerald-light);
  color: var(--color-accent-emerald);
}

.trust-card-icon.blue {
  background: var(--color-primary-100);
  color: var(--color-primary-700);
}

.trust-card-body h4 {
  font-size: 0.90625rem;
  font-weight: 700;
  color: var(--color-primary-900);
  margin-bottom: 2px;
  line-height: 1.25;
}

.trust-card-body p {
  font-size: 0.78125rem;
  color: var(--color-text-muted);
  line-height: 1.35;
  margin: 0;
}

@media (max-width: 992px) {
  .trust-strip {
    padding: 24px 0;
  }
  .trust-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }
  .trust-card {
    background: var(--color-bg-surface-alt);
    border-color: var(--color-border);
  }
}

@media (max-width: 480px) {
  .trust-strip {
    padding: 20px 0;
  }
  .trust-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
  }
  .trust-card {
    flex-direction: column;
    align-items: flex-start;
    padding: 12px 10px;
    gap: 8px;
    border-radius: var(--radius-sm);
  }
  .trust-card-icon {
    width: 32px;
    height: 32px;
  }
  .trust-card-icon svg {
    width: 17px;
    height: 17px;
  }
  .trust-card-body h4 {
    font-size: 0.78125rem;
  }
  .trust-card-body p {
    font-size: 0.6875rem;
  }
}
</style>
