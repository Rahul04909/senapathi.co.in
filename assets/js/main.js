/**
 * Senapathi Alliance - Main Frontend Controller
 * Modern UX & UI Interactions: Filter Tabs, Deep-Dive Modals, Smooth Navigation
 */

document.addEventListener('DOMContentLoaded', () => {
  // Service lines detailed data repository
  const serviceDetails = {
    1: {
      code: "Service Line 01",
      title: "Real Estate Transaction Advisory",
      category: "infra-realestate",
      partnerBadge: "Services under Legal Advisory provided through a Partner Law Firm",
      overview: "We support government bodies, PSUs, institutional landowners, developers, and public-private project entities in real estate transactions. Our work covers market review, document checking, approval coordination, and transaction support to ensure compliance, transparency, and informed decision-making.",
      offerings: [
        { code: "1.1", name: "Apartment Sales, Purchases & Rental", desc: "We provide market assessment, transaction documentation, counterparty coordination, and procedural support for the acquisition, disposal, and leasing of residential assets." },
        { code: "1.2", name: "Commercial & Residential Due Diligence", desc: "We undertake title, land-use, approval, encumbrance, development, and commercial reviews to identify transaction risks before commitment." },
        { code: "1.3", name: "Real Estate Project Approval Facilitation", desc: "We support the preparation and tracking of applications, interdepartmental coordination, and compliance documentation required for statutory project approvals." },
        { code: "1.4", name: "Change of Land Use (CLU)", desc: "We assist with eligibility assessment, application documentation, procedural compliance, and coordination for change-of-land-use approvals under the applicable state framework." },
        { code: "1.5", name: "Legal & Regulatory Advisory", desc: "We review transactions against applicable land, planning, development, registration, and real estate regulations and support the development of risk-mitigation actions. Services provided through a partner law firm." }
      ],
      approach: "We first review the asset, ownership records, applicable approvals, market position, and stakeholder requirements. We then prepare the required documents, coordinate with the concerned authorities, track compliance issues, support the transaction process, and maintain complete records for audit and future reference.",
      deliverable: "Senapathi provides verified records, clear approval status, proper documentation, transparent assessment, and identified risk-mitigation measures. This helps institutions protect asset value, reduce legal and transaction risks, and take decisions with proper supporting records."
    },
    2: {
      code: "Service Line 02",
      title: "Infrastructure Consulting",
      category: "infra-realestate",
      partnerBadge: null,
      overview: "We provide planning, technical assistance, procurement, project management, and monitoring support for public infrastructure programmes and PPP projects. Our work focuses on project readiness, value for money, statutory compliance, environmental and social safeguards, climate resilience, and long-term service delivery.",
      offerings: [
        { code: "2.1", name: "Technical Assistance (TA) & Project Management Consultancy (PMC)", desc: "We establish implementation frameworks, work plans, governance arrangements, risk registers, monitoring systems, and reporting protocols for complex public investments." },
        { code: "2.2", name: "Engineering, Procurement & Construction (EPC) Advisory", desc: "We support bid strategy, technical and contractual review, procurement documentation, evaluation processes, and contract-management systems for EPC assignments." },
        { code: "2.3", name: "Water, Sanitation & Hygiene (WASH) Projects", desc: "We assist in needs assessment, service-level planning, infrastructure design coordination, institutional arrangements, behavioural components, and outcome monitoring for WASH programmes." },
        { code: "2.4", name: "Climate-Resilient & Smart Infrastructure Development", desc: "We integrate climate-risk screening, disaster resilience, resource efficiency, digital monitoring, and inclusive service-delivery considerations into project planning and implementation." },
        { code: "2.5", name: "ESG & Sustainability Audits (incl. Green Building Certifications)", desc: "We assess environmental, social, governance, and building-performance requirements and support corrective action and certification-readiness processes." },
        { code: "2.6", name: "Stakeholder & Community Communication Strategy", desc: "We develop stakeholder engagement and communication strategies, consultation frameworks, and messaging plans to support public acceptance of infrastructure and WASH programmes." }
      ],
      approach: "We confirm project objectives, baseline position, technical requirements, stakeholder roles, approvals, safeguards, procurement process, and funding arrangements. Implementation is monitored through work plans, review meetings, risk registers, quality checks, field verification, progress reports, and formal handover to the implementing agency.",
      deliverable: "Senapathi supports timely and compliant implementation of infrastructure projects through proper planning, transparent procurement, cost and schedule monitoring, safeguard compliance, quality control, and clear institutional responsibility. This improves value for public expenditure and the reliability of public services."
    },
    3: {
      code: "Service Line 03",
      title: "Human Resource Advisory",
      category: "hr-learning",
      partnerBadge: null,
      overview: "We support government institutions, PSUs, programme units, and project teams in establishing suitable and accountable workforce systems. Our services cover organization structure, recruitment, employee administration, compliance, inclusion, and workforce capacity in line with approved institutional functions.",
      offerings: [
        { code: "3.1", name: "Executive Search & Leadership Hiring", desc: "We define role requirements, identify qualified candidates, support transparent assessment, and facilitate appointment processes for leadership and specialist positions." },
        { code: "3.2", name: "Background Verification (BGV) Services", desc: "We conduct structured verification of identity, education, employment, credentials, and other authorized records to support recruitment integrity and risk control." },
        { code: "3.3", name: "HR Policy & HRIS Systems Implementation", desc: "We develop policy frameworks, standard operating procedures, employee data structures, approval workflows, and digital HR systems aligned with applicable rules." },
        { code: "3.4", name: "Payroll & HR Outsourcing", desc: "We provide controlled payroll processing, workforce records management, statutory compliance support, and periodic reporting under defined service levels." },
        { code: "3.5", name: "Diversity, Equity & Inclusion (DEI) Advisory", desc: "We assess workforce systems and develop practical measures to promote fair access, representation, non-discrimination, accessibility, and accountable implementation." }
      ],
      approach: "We review the institutional mandate, organization structure, sanctioned posts, service rules, workforce data, skill gaps, and compliance requirements. Based on this review, we support recruitment or deployment, HR policies, HR information systems, payroll controls, inclusion measures, staff communication, training, and periodic review.",
      deliverable: "Senapathi provides clear roles, transparent recruitment and verification, compliant HR administration, reliable employee records, fair workforce practices, and planned capacity building. This supports continuity of operations, staff accountability, and improved delivery of public services."
    },
    4: {
      code: "Service Line 04",
      title: "Learning & Development (L&D)",
      category: "hr-learning",
      partnerBadge: null,
      overview: "We design and implement capacity-building programmes for government staff, PSU employees, programme teams, and partner institutions. The programmes are based on job roles, identified skill gaps, approved learning outcomes, suitable delivery methods, and assessment of learning and workplace application.",
      offerings: [
        { code: "4.1", name: "Training Needs Analysis (TNA)", desc: "We assess role requirements, current capability levels, operational gaps, and priority learning needs using consultations, surveys, records, and competency evidence." },
        { code: "4.2", name: "Curriculum & Module Development", desc: "We develop structured curricula, facilitator guides, participant materials, case exercises, assessments, and digital learning assets aligned with approved learning outcomes." },
        { code: "4.3", name: "Learning Management System (LMS) Implementation", desc: "We support LMS requirements definition, course architecture, user roles, content migration, reporting, data governance, and adoption planning." },
        { code: "4.4", name: "Competency Assessment & Certification", desc: "We design competency frameworks and transparent assessment protocols to validate role readiness and support credible certification decisions." },
        { code: "4.5", name: "Capacity Building & Technical Upskilling", desc: "We deliver role-based programmes, workshops, technical clinics, and field handholding to strengthen implementation capability at institutional and last-mile levels." },
        { code: "4.6", name: "Executive Leadership & Succession Coaching", desc: "We support senior personnel through structured leadership development, transition planning, institutional continuity, and succession-readiness interventions." }
      ],
      approach: "We identify competency requirements, conduct training needs analysis, prepare curriculum and learning material, and define assessment criteria. Training is delivered through classroom, digital, workplace, or field-based methods, followed by assessment, certification, post-training support, and review of performance improvement.",
      deliverable: "Senapathi establishes a structured learning system that links training expenditure with tested knowledge, required job skills, role readiness, and application at the workplace. This helps institutions build internal capacity and reduce dependence on one-time training activities."
    },
    5: {
      code: "Service Line 05",
      title: "Impact Consulting",
      category: "impact-growth",
      partnerBadge: null,
      overview: "We support government agencies, PSUs, development partners, and other institutions in the design, monitoring, evaluation, and improvement of social and environmental programmes. Our work uses programme records, field data, stakeholder consultations, and clear reporting to support accountability, learning, and better use of resources.",
      offerings: [
        { code: "5.1", name: "Social Return on Investment (SROI)", desc: "We identify material outcomes, engage stakeholders, assess attribution and deadweight, and estimate the social value generated relative to programme investment." },
        { code: "5.2", name: "Baseline, Midline & Endline Studies", desc: "We establish reference conditions, track changes during implementation, and assess end-period results through fit-for-purpose quantitative and qualitative methods." },
        { code: "5.3", name: "Project Monitoring & Evaluation (M&E)", desc: "We develop results frameworks, indicators, data-quality protocols, review mechanisms, dashboards, and corrective-action processes for ongoing programmes." },
        { code: "5.4", name: "Comprehensive Impact Assessments", desc: "We assess relevance, effectiveness, efficiency, inclusion, sustainability, and intended or unintended socio-economic effects using triangulated evidence." },
        { code: "5.5", name: "Corporate Social Responsibility (CSR) Strategy & Execution", desc: "We support needs assessment, thematic and geographic prioritization, partner due diligence, programme design, statutory alignment, implementation oversight, and impact reporting." },
        { code: "5.6", name: "Carbon Offsetting & Net-Zero Roadmaps", desc: "We assist with emissions baselining, reduction pathways, governance arrangements, project screening, credible offset use, and progress-monitoring frameworks." },
        { code: "5.7", name: "CSR Communications Strategy & Impact Reporting", desc: "We develop communications strategy and reporting frameworks to help institutions and corporates convey CSR programme outcomes to stakeholders, regulators, and the public." }
      ],
      approach: "We define programme objectives, expected results, evaluation questions, indicators, stakeholder groups, sample, data sources, and quality standards. We collect and verify quantitative and qualitative evidence, discuss findings with stakeholders, prepare practical recommendations, and support follow-up action and monitoring.",
      deliverable: "Senapathi provides clear evidence on programme results, beneficiary coverage, implementation issues, costs, and areas for improvement. This enables institutions to report outcomes, improve programme design and delivery, target resources better, and strengthen social and environmental benefits."
    },
    6: {
      code: "Service Line 06",
      title: "Business Development & Strategic Growth",
      category: "impact-growth",
      partnerBadge: null,
      overview: "We support institutions and private entities in identifying and assessing opportunities arising from government policies, programmes, procurement plans, and sector reforms. Our advisory is based on factual information, proper procedure, ethical engagement, compliance requirements, and realistic delivery planning.",
      offerings: [
        { code: "6.1", name: "Pre-Sales Support (Proposal & Bid Preparation)", desc: "We support opportunity qualification, compliance matrices, technical methodologies, work plans, staffing, risk reviews, and coordinated proposal development." },
        { code: "6.2", name: "Market Intelligence & Competitor Analysis", desc: "We assess policy direction, sector demand, procurement activity, institutional priorities, market structure, and publicly available competitor evidence to guide informed decisions." },
        { code: "6.3", name: "Go-To-Market (GTM) & Expansion Strategy", desc: "We develop phased entry and expansion plans covering priority sectors, jurisdictions, delivery models, partnerships, capabilities, approvals, and investment requirements." },
        { code: "6.4", name: "Government Relations & Public Policy Advisory", desc: "We interpret policy and regulatory developments, map institutions and stakeholders, support consultation inputs, and establish compliant engagement protocols for public-sector interfaces." },
        { code: "6.5", name: "Brand & Marketing Strategy Advisory", desc: "We advise on brand positioning, market messaging, and marketing strategy to support institutional growth and stakeholder perception." }
      ],
      approach: "We review policy, procurement, and sector position; confirm need and eligibility; assess partners and competition; and prepare a compliant engagement and market plan. Each opportunity is reviewed against clear bid or no-bid criteria, proposal requirements, delivery capacity, stakeholder protocols, risks, and past lessons.",
      deliverable: "Senapathi provides a clear and compliant opportunity plan based on policy requirements, market information, stakeholder mapping, proposal readiness, delivery capacity, and risk review. This supports responsible growth while maintaining transparency and public-procurement standards."
    },
    7: {
      code: "Service Line 07",
      title: "Financial Services & Advisory",
      category: "finance-legal",
      partnerBadge: "Delivered through a Partner CA Firm empanelled with the CAG of India",
      overview: "We provide financial, tax, audit, risk, transaction, accounting, and reporting support to public institutions, PSUs, project entities, and regulated organizations. Our services focus on statutory compliance, proper financial records, internal controls, transparent reporting, and responsible use of funds. These financial services are delivered through a Partner Chartered Accountancy firm empanelled with the Comptroller and Auditor General of India (CAG).",
      offerings: [
        { code: "7.1", name: "Corporate & International Taxation", desc: "We support tax compliance, transaction review, cross-border considerations, documentation, and risk assessment within the applicable legal framework." },
        { code: "7.2", name: "Statutory Audit & Financial Reporting", desc: "We examine financial statements, controls, records, and disclosures in accordance with applicable standards and statutory requirements." },
        { code: "7.3", name: "Internal, Risk & Forensic Audit", desc: "We assess control design, operational and financial risks, compliance gaps, irregularity indicators, and corrective actions through risk-based review procedures." },
        { code: "7.4", name: "Accounting & Bookkeeping Services", desc: "We maintain structured accounting records, reconciliations, schedules, management reports, and closing support under defined control and review protocols." },
        { code: "7.5", name: "M&A Advisory, Valuation & Deal Structuring", desc: "We provide financial due diligence, valuation, transaction modelling, structuring analysis, and execution support for acquisitions, divestments, and strategic partnerships." },
        { code: "7.6", name: "ESG Financial Risk Frameworks", desc: "We integrate material environmental, social, and governance considerations into risk identification, financial analysis, investment review, control frameworks, and disclosure processes." }
      ],
      approach: "We confirm applicable legal, financial, reporting, and transaction requirements and review records, controls, liabilities, and key risks. The work includes documented testing, reconciliation, review of exceptions, consultation with management, quality checks, corrective-action planning, and periodic reporting to the competent authority.",
      deliverable: "Senapathi provides reliable financial information, stronger internal controls, timely compliance, clear audit findings, and prioritized corrective actions. This helps governing bodies safeguard funds, manage financial and transaction risks, and take transparent financial decisions."
    },
    8: {
      code: "Service Line 08",
      title: "Business Operations Optimization",
      category: "digital-ops",
      partnerBadge: null,
      overview: "We support public institutions, PSUs, and programme organizations in identifying operational problems and improving processes, resource use, systems, and institutional arrangements. Our work gives priority to service continuity, clear responsibility, measurable efficiency, staff adoption, and long-term internal ownership.",
      offerings: [
        { code: "8.1", name: "Supply Chain & Logistics Optimization", desc: "We assess demand planning, procurement interfaces, inventory, warehousing, distribution, vendor performance, and service levels to improve reliability and resource utilization." },
        { code: "8.2", name: "Corporate Resource & Allocation Optimization", desc: "We review deployment of people, budgets, assets, and shared services to align resources with institutional priorities, approved workloads, and performance requirements." },
        { code: "8.3", name: "Process Re-Engineering & Lean Six Sigma", desc: "We map current workflows, identify delays and control gaps, redesign processes, and establish measurable improvement and quality-control mechanisms." },
        { code: "8.4", name: "Robotic Process Automation (RPA) & Workflow Digitization", desc: "We identify suitable rule-based processes, define controls and exception handling, and support automation that improves timeliness, traceability, and reporting." },
        { code: "8.5", name: "Organizational Change Management", desc: "We develop stakeholder, communication, training, adoption, and transition plans to support implementation of policy, process, organization, and technology reforms." },
        { code: "8.6", name: "As-Is Assessment & To-Be Plan for Business Units", desc: "We document current structures, processes, systems, controls, and performance gaps and prepare a phased future-state operating model with implementation priorities." }
      ],
      approach: "We document current processes, workload, data, controls, service levels, and stakeholder concerns. We then identify priority improvements, assign responsibility, define resource and technology needs, test changes where required, implement them in phases, and monitor progress through agreed indicators.",
      deliverable: "Senapathi provides simpler and better-controlled processes, improved use of staff and assets, reduced delay and avoidable cost, clear service standards, and defined responsibility for results. The changes maintain compliance, service continuity, and institutional capacity."
    },
    9: {
      code: "Service Line 09",
      title: "Digital Transformation & Technology Advisory",
      category: "digital-ops",
      partnerBadge: null,
      overview: "We support government bodies, PSUs, development programmes, and regulated institutions in planning and implementing secure and user-friendly digital systems. Our work aligns technology with institutional needs, process improvement, data management, cybersecurity, legal compliance, and long-term operating capacity.",
      offerings: [
        { code: "9.1", name: "IT Strategy & Enterprise Architecture", desc: "We assess current technology environment and develop target architecture, investment priorities, governance standards, integration principles, and phased transformation roadmaps." },
        { code: "9.2", name: "Process Automation & SI Solutions for Sector Verticals", desc: "We digitize approved workflows and integrate sector-specific platforms, data exchanges, and reporting systems to reduce fragmentation and improve traceability." },
        { code: "9.3", name: "Cybersecurity Risk Assessment & Compliance", desc: "We evaluate technology assets, threats, vulnerabilities, controls, data-protection obligations, incident readiness, and remediation priorities against applicable requirements." },
        { code: "9.4", name: "Custom Software & Platform Engineering", desc: "We support requirements definition, solution design, development governance, testing, deployment, documentation, user enablement, and maintenance planning for institutional platforms." }
      ],
      approach: "We assess users, services, processes, applications, data, infrastructure, security, and regulatory requirements. We then prepare a priority-based system plan and implementation schedule, followed by clear requirements, system integration, security controls, testing, data migration, user training, and post-implementation monitoring.",
      deliverable: "Senapathi provides secure, connected, accessible, and accountable digital systems with better data quality, faster processing, stronger cybersecurity and privacy controls, and clear institutional ownership. This ensures technology expenditure supports approved policy and public-service objectives."
    }
  };

  // 1. Mobile Drawer Navigation
  const mobileToggle = document.getElementById('mobileToggle');
  const drawerOverlay = document.getElementById('drawerOverlay');
  const drawerClose = document.getElementById('drawerClose');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const drawerLinks = document.querySelectorAll('.drawer-link');

  function openDrawer() {
    mobileDrawer.classList.add('active');
    drawerOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    mobileDrawer.classList.remove('active');
    drawerOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
  if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
  if (drawerOverlay) drawerOverlay.addEventListener('click', closeDrawer);

  drawerLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeDrawer();
    });
  });

  // 2. Sticky Header elevation on scroll
  const siteHeader = document.getElementById('siteHeader');
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      siteHeader.classList.add('scrolled');
    } else {
      siteHeader.classList.remove('scrolled');
    }

    if (window.scrollY > 450) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  });

  if (backToTop) {
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 3. Service Category Filtering
  const filterBtns = document.querySelectorAll('.filter-btn');
  const serviceCards = document.querySelectorAll('.service-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterVal = btn.getAttribute('data-filter');

      serviceCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (filterVal === 'all' || cardCategory.includes(filterVal)) {
          card.style.display = 'flex';
          card.style.animation = 'fadeInCard 0.4s ease';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // 4. In-Depth Service Detail Modal System
  const modalOverlay = document.getElementById('serviceModalOverlay');
  const modalClose = document.getElementById('modalCloseBtn');
  const modalServiceCode = document.getElementById('modalServiceCode');
  const modalServiceTitle = document.getElementById('modalServiceTitle');
  const modalPartnerTag = document.getElementById('modalPartnerTag');
  const modalOverview = document.getElementById('modalOverview');
  const modalOfferingsGrid = document.getElementById('modalOfferingsGrid');
  const modalApproach = document.getElementById('modalApproach');
  const modalDeliverable = document.getElementById('modalDeliverable');
  const modalRfpBtn = document.getElementById('modalRfpBtn');

  function openServiceModal(serviceId) {
    const data = serviceDetails[serviceId];
    if (!data) return;

    modalServiceCode.textContent = data.code;
    modalServiceTitle.textContent = data.title;
    modalOverview.textContent = data.overview;
    modalApproach.textContent = data.approach;
    modalDeliverable.textContent = data.deliverable;

    // Partner tag
    if (data.partnerBadge) {
      modalPartnerTag.style.display = 'flex';
      modalPartnerTag.innerHTML = `
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
        </svg>
        <span>${data.partnerBadge}</span>
      `;
    } else {
      modalPartnerTag.style.display = 'none';
    }

    // Offerings list
    modalOfferingsGrid.innerHTML = '';
    data.offerings.forEach(offering => {
      const card = document.createElement('div');
      card.className = 'modal-offering-card';
      card.innerHTML = `
        <div class="modal-offering-name"><span>${offering.code}</span> ${offering.name}</div>
        <p class="modal-offering-desc">${offering.desc}</p>
      `;
      modalOfferingsGrid.appendChild(card);
    });

    // Setup RFP button action
    if (modalRfpBtn) {
      modalRfpBtn.onclick = () => {
        closeServiceModal();
        const serviceSelect = document.getElementById('rfpService');
        if (serviceSelect) {
          serviceSelect.value = data.title;
        }
        const contactSec = document.getElementById('contact');
        if (contactSec) {
          contactSec.scrollIntoView({ behavior: 'smooth' });
        }
      };
    }

    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeServiceModal() {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Attach triggers
  document.querySelectorAll('.btn-service-detail').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const serviceId = btn.getAttribute('data-service-id');
      openServiceModal(serviceId);
    });
  });

  if (modalClose) modalClose.addEventListener('click', closeServiceModal);
  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeServiceModal();
    });
  }

  // Global ESC key to dismiss modal or drawer
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeServiceModal();
      closeDrawer();
    }
  });

  // 5. Consultation & RFP Form Handler
  const rfpForm = document.getElementById('rfpForm');
  const formToast = document.getElementById('formToast');

  if (rfpForm) {
    rfpForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = rfpForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;

      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg class="animate-spin" style="width:18px;height:18px;animation:spin 1s linear infinite;display:inline-block;" fill="none" viewBox="0 0 24 24">
          <circle style="opacity:0.25;" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path style="opacity:0.75;" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>Processing Request...</span>
      `;

      setTimeout(() => {
        rfpForm.reset();
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        if (formToast) {
          formToast.classList.add('active');
          setTimeout(() => {
            formToast.classList.remove('active');
          }, 6000);
        }
      }, 1200);
    });
  }

  // Smooth scroll spy for navigation
  const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
  const sections = document.querySelectorAll('section[id]');

  window.addEventListener('scroll', () => {
    let current = '';
    const scrollPosition = window.pageYOffset + 120;

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
});
