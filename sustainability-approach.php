<?php include 'header.php';?>
<style>
.w-100{
    width:100%;
}
.value-box {
    background-color: #009246;
    color: white;
    font-weight: bold;
    text-align: center;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100%;
    line-height: 1.2;
    font-size: 20px;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
  }

  .value-text {
    background: #fff;
    padding: 1.5rem;
    height: 100%;
    display: flex;
    align-items: center;
    box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.25);
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
  }
  
  @media (min-width: 1200px) { 
  
  .value-box {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
  }

  .value-text {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
  }
  
  .flex-md-row-reverse .value-box{
   border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
  
  }
  
  
  .flex-md-row-reverse .value-text{
   border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  
  }
  
  
  }

  .value-card {
    margin-bottom: 2rem;
  }

  @media (max-width: 1199px) {
    .value-box {
      border-radius: 0.5rem 0.5rem 0 0;
    }
    .value-text {
      border-radius: 0 0 0.5rem 0.5rem;
    }
  }
</style>
    <section id="page-title" data-bg-parallax="img/banner_sustainability.png"><div class="parallax-container img-loaded" data-bg="img/banner_corporate_profile.png" data-velocity="-.140" style="background: url(&quot;img/banner_corporate_profile.pngg&quot;);" data-ll-status="loaded"></div>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                <h1 class="text-bold mb-0">Sustainability</h1>
            </div>
        </div>
    </section>

    <section class="border-bottom-1px">
        <div class="container">
            <div class="heading-text heading-section text-left mb-0">
                <h3 class="mb-0"><span class="before-title-2"></span><img alt="" src="img/icon-bull.png" class="img-icon-15 mr-4">Sustainability Approach</h3>
            </div>
        </div>
    </section>
    
    <section class="">
     	<div class="container my-5">
  <!-- 1. Human Capital -->
  <div class="row value-card">
    <div class="col-md-3 p-0">
      <div class="value-box h-100">HUMAN<br>CAPITAL</div>
    </div>
    <div class="col-md-9  p-0">
      <div class="value-text">
        <p class=" mb-0">Our people are our greatest asset. Our focus on human capital involves continuous talent improvement and nurturing. We invest in professional development and training to equip our employees with the skills and knowledge needed to excel in a rapidly evolving industry. By fostering a culture of learning and growth, we aim to attract, retain, and develop top talent, ensuring that our workforce is wellprepared to meet current and future challenges.</p>
      </div>
    </div>
  </div>

  <!-- 2. Digitalisation -->
  <div class="row flex-md-row-reverse value-card">
    <div class="col-md-3 p-0">
      <div class="value-box h-100">DIGITALISATION<br>FOR BETTER<br>STAKEHOLDER<br>EXPERIENCE</div>
    </div>
    <div class="col-md-9 p-0">
      <div class="value-text">
        <p class="text-right mb-0">Digital transformation is key to enhancing our stakeholder experience. We leverage advanced technologies to improve our processes and services, delivering more efficient and effective solutions. Through digitalisation, we aim to provide a seamless experience for our stakeholders, streamline operations, and drive innovation that aligns with our sustainability goals.</p>
      </div>
    </div>
  </div>

  <!-- 3. Humanity Care -->
  <div class="row value-card">
    <div class="col-md-3 p-0">
      <div class="value-box h-100">HUMANITY CARE<br>AND SUPPORT</div>
    </div>
    <div class="col-md-9 p-0">
      <div class="value-text">
        <p class=" mb-0">Our commitment to humanity is reflected in our support for community welfare and social responsibility. We engage in initiatives that address societal needs, including health, education, and wellbeing. By partnering local organisations and supporting charitable causes, we strive to make a positive impact on the lives of individuals and communities, contributing to a more equitable and compassionate society.</p>
      </div>
    </div>
  </div>

  <!-- 4. Preservation -->
  <div class="row flex-md-row-reverse value-card">
    <div class="col-md-3 p-0">
      <div class="value-box h-100">PRESERVATION<br>AND<br>CONSERVATION</div>
    </div>
    <div class="col-md-9 p-0">
      <div class="value-text">
        <p class="text-right mb-0">Preservation and conservation are central to our environmental stewardship efforts. We are dedicated to developing ecoefficient practices and promoting sustainability in all our projects. Our initiatives include reducing resource consumption, minimising waste, and protecting natural habitats. By aligning our practices with the identified SDGs, we work towards preserving the environment for future generations.</p>
      </div>
    </div>
  </div>

  <!-- 5. Compliance -->
  <div class="row value-card">
    <div class="col-md-3 p-0">
      <div class="value-box h-100">COMPLIANCE<br>AND<br>INTEGRITY</div>
    </div>
    <div class="col-md-9 p-0">
      <div class="value-text">
        <p class=" mb-0">Maintaining the highest standards of compliance and integrity is crucial to our operations. We adhere to all relevant laws and regulations, and our governance framework ensures transparency and accountability. Our commitment to ethical practices and institutional governance underpins our approach, reinforcing our reputation as a responsible and trustworthy organisation.</p>
      </div>
    </div>
  </div>
</div>
     </section>
    
    
<?php include 'footer.php';?>


