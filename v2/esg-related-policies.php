<?php include 'header.php'; ?>
<main class="main">
   <!-- Hero Section -->
   <!-- HERO -->
   <section class="sust d-flex align-items-center">
      <div class="container agriventure-content">
         <div class="row align-items-center">
            <div class="col-md-12">
               <div class="agriventure-text-box">
                  <h6 class="fw-bold sust--title text-white">
                     Sustainability
                  </h6>
                  <p>ESG-Related Policies</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   

   <style>

    /* Custom Purple for the footer */
.bg-purple {
  background-color: #582A72 !important; /* Adjust to match your exact shade */
}

.custom-policy-card {
  border-radius: 10px;
  overflow: hidden;
}

/* Icon Rotation Logic */
.btn[aria-expanded="false"] .toggle-icon {
  transform: rotate(180deg);
  display: inline-block;
}

.toggle-icon {
  transition: transform 0.3s ease;
}

/* Optional: Styling for the download button to match the image */
.btn-outline-light:hover {
  background-color: #198754;
  color: white;
}


</style>
   <!-- About Section -->
   <section class="sust-common-section">
      <div class="container">
        <div class="row g-5">
            
           <div class="col-lg-12">
                <p>At Protasco Berhad, our policies serve as the foundation for our commitment to ethical conduct, sustainability, and responsible business practices. They not only guide our overall operations but are also integral to the planning and implementation processes within each of our Business Units (BUs). Every BU is required to embed these policies into their operational strategies, ensuring alignment with the highest standards in compliance, governance, and environmental stewardship. This unified approach helps drive consistent progress across the Group, promoting long-term sustainability and value creation for all stakeholders.</p>
             
                <h5 class="text-purple mb-4">Policies Related to Sustainability Below is a list of key policies that guide our actions and shape our approach to sustainability.</h5>
            </div>

            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Anti-Corruption Policy</h5>
                            <div class="collapse" id="antiCorruptionContent">
                                <p class="card-text small text-muted">
                                    We maintain a strict Anti-Bribery and Corruption Policy, enforcing a zero-tolerance approach to unethical behaviour. All employees and partners are required to comply to these standards to ensure the highest level of integrity in our business practices.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#antiCorruptionContent" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Code of Conduct for Contractors</h5>
                            <div class="collapse" id="CodeofConductforContractors">
                                <p class="card-text small text-muted">
                                    Protasco Berhad’s Code of Conduct for contractors sets out the ethical standards and operational guidelines expected of our external partners. It emphasises integrity, compliance, and respect for safety, quality, and environmental stewardship, ensuring contractors contribute to a safe, sustainable, and reputable working environment.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#CodeofConductforContractors" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/Supplier Code of Conduct.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Cybersecurity Policy</h5>
                            <div class="collapse" id="CybersecurityPolicy">
                                <p class="card-text small text-muted">
                                    Protasco Berhad is dedicated to enhancing data protection and security for employees and clients. We implement robust cybersecurity management with strong governance, ongoing awareness, and practices to safeguard against breaches that could disrupt operations, incur financial losses, or harm our reputation.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#CybersecurityPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                        
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">ESG Risk Management Policy</h5>
                            <div class="collapse" id="ESGRiskManagementPolicy">
                                <p class="card-text small text-muted">
                                    The Group is committed to managing risks effectively to safeguard its assets, reputation, and long-term sustainability. We recognise the importance of integrating ESG factors into our Group Enterprise Risk Management framework to align with the sustainability goals, meet stakeholder expectations, and create long-term value for our shareholders.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#ESGRiskManagementPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/ESG RISK MANAGEMENT POLICY.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Human Rights Policy</h5>
                            <div class="collapse" id="HumanRightsPolicy">
                                <p class="card-text small text-muted">
                                    This Policy outlines our dedication to ensuring fair and ethical treatment of all individuals. We adhere to human rights standards and integrate these principles into our business practices to promote dignity, equality, and respect throughout our operations.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#HumanRightsPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/HUMAN RIGHTS POLICY.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Net-Zero GHG Emissions Transition Plan</h5>
                            <div class="collapse" id="Net-ZeroGHGEmissionsTransitionPlan">
                                <p class="card-text small text-muted">
                                    Protasco Berhad is dedicated to leading the transition to a sustainable, low-carbon future. Our Net-Zero GHG Emissions Transition Plan underscores our commitment to environmental stewardship, innovation, and responsible growth.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#Net-ZeroGHGEmissionsTransitionPlan" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/Net-Zero GHG Emissions Transition Plan.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Non-Discrimination Policy</h5>
                            <div class="collapse" id="Non-DiscriminationPolicy">
                                <p class="card-text small text-muted">
                                    Our Non-Discrimination Policy ensures that our employees are provided equal opportunities, free from discrimination based on race, gender, age, disability, religion, or any other protected characteristic. We are dedicated to promoting diversity and creating an environment where everyone can thrive.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#Non-DiscriminationPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/NON DISCRIMINATION POLICY.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Safety & Health Policy</h5>
                            <div class="collapse" id="Safety&HealthPolicy">
                                <p class="card-text small text-muted">
                                    We prioritise the health and safety of our employees and all stakeholders at our workplace and project sites. By adhering to national regulations and ISO 45001 standards, we ensure a safe working environment and are dedicated to proactive risk management. Our Health and Safety Policy promotes a robust safety culture throughout our operations, ensuring the well-being of everyone involved.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#Safety&HealthPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/PROTASCO BERHAD Safety & Health Policy.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Supplier Code of Conduct</h5>
                            <div class="collapse" id="SupplierCodeofConduct">
                                <p class="card-text small text-muted">
                                    This Code of Conduct outlines the expectations and standards required of our suppliers. It is essential that all suppliers within our Business Unit (BUs) comply with these guidelines in their operations and projects to uphold the values and reputation of the Group.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#SupplierCodeofConduct" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/Supplier Code of Conduct.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Sustainability Policy</h5>
                            <div class="collapse" id="SustainabilityPolicy">
                                <p class="card-text small text-muted">
                                    Our Sustainability Policy provides a clear direction for Protasco Berhad’s commitment to responsible and ethical business practices. Internally, our ESG Framework guides each Business Unit (BU) on the key environmental, social, and governance areas to focus on, ensuring alignment with the Group overall sustainability objectives. This approach allows us to integrate sustainability into our operations effectively, driving progress towards long-term, positive outcomes.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#SustainabilityPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/PROTASCO BERHAD Sustainability Policy.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                       <div class="col-md-3">
                        <div class="card h-100 border-success border-2 custom-policy-card">
                            <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Whistle blowing Policy</h5>
                            <div class="collapse" id="WhistleblowingPolicy">
                                <p class="card-text small text-muted">
                                    This policy is established to help employees and other stakeholders to raise their concerns without fear of retaliation on any known and/or suspected misconduct, wrongdoings, corruption, fraud or any other acts.
                                </p>
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-link p-0 text-success shadow-none" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#WhistleblowingPolicy" 
                                    aria-expanded="true">
                                <i class="bi bi-arrow-up-circle-fill fs-4 toggle-icon"></i>
                                </button>
                            </div>
                            </div>
                            <div class="card-footer bg-purple border-0 d-flex justify-content-end align-items-center py-3">
                            <a href="../docs/sustainability/whistle blowing Policy.pdf" target="_blank" class="btn-policy">View More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>




                </div>
                </div>



        </div>
    </div>
   </section>
</main>
<?php include 'footer.php'; ?>
