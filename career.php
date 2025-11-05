<?php include 'header.php';?>
    
   <style>
   ol, ul {
    padding-left: 1.5rem;
    }
   .testimonial-slider {
/*   background-color: #5072a7; */
  padding: 2em 2em 3em;
}
.testimonial-title {
  color: #fff;
}
.testimonial-title h2 {
  padding-left: 0.2em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  height: 100%;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #fff;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  top: 60%;
  transform: translateY(-50%);
}

@media (min-width: 576px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 50%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
@media (min-width: 768px) {
  .carousel-inner {
    padding: 1em;
  }
  .carousel-control-prev,
  .carousel-control-next {
    opacity: 1;
    position: absolute;
    left: 1em;
/*     top: 90%; */
    transform: translateY(-50%);
  }
  .carousel-control-next {
    left: 90%;
  }
   .carousel-item{ flex: 0 0 25%; }
}
  .carousel-control-prev{ 
  opacity: 0; 
  }
  .carousel-inner:hover .carousel-control-prev{ 
   opacity: 1; 
  }
    .carousel-control-prev, .carousel-control-next {
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.4);
    }
    
     
     .card-title{color:#1D7357;font-weight:800;}
     .green-title{color:#1D7357;}
     .tab-content p{ text-align:justify;}
    .carousel-item{cursor:pointer;}
     .img-act{display:none;}
     .carousel-item.active .img-act{display:block;}
     .carousel-item:hover .img-act{display:block;}
      .carousel-item:hover .img-act2{display:none;}
     .carousel-item.active .img-act2{display:none;}
     .homepage {
    width: 100%;
    background: url(img/career-bg.png) top center;
    background-size: cover;
    position: relative;
    display: flex
;
    position: relative;
    width: calc(100% - var(--padding) * 2);
    margin: 0 auto;
    paddding: 60px 0;
    min-height: 500px;
    margin-top: 101px;
}
   </style>
    <!-- Page Title -->
    <div class="page-title homepage">
      <div class="container  justify-content-start">
      	<div class="row">
      		<div class="col-md-7 text-start">
<!--       			 <p class="text-white text-start mb-0">Career</p> -->
      			 <h1 class="text-white text-start">Career</h1>
      		</div>
      	</div>
      </div>
    </div><!-- End Page Title -->
    
    
     <section  id="cap-list"  class="page-title section">
          <div class="container">
          <div class="row">
          	<div class="col-md-12 mb-4 text-start">
          		<h1>Career With Us - CBH Engineering Sdn Bhd</h1>
          		
          		<p>At CBH Engineering Sdn Bhd, we are proud to be a trusted partner in delivering high-performance substation and high-voltage (HV) electrical works exclusively for the private sector. From industrial facilities and commercial developments to private infrastructure upgrades, we bring power and precision to every project we undertake.</p>

                <p>As we continue to expand, we&rsquo;re looking for talented individuals who want to build a rewarding career in a technically demanding and fast-evolving field.</p>
                
                <p>We welcome talents who are interested in being part of our team to submit their resume online at hr & admin@cbh.com.my </p>
          	</div>
          	<div class="col-md-4 mb-4">
          		<div class="card text-white text-start align-items-between" style="background-color: #226b57;min-height:160px">
                  <div class="card-body d-flex align-items-start flex-column">
                    <h6 class="card-title text-white fw-bold mb-auto w-100">
                      Senior Design Engineer / Design Engineer
                    </h6>
<!--                     <p class="card-text text-white ">Batu Caves</p> -->
                    
                    <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                      <a href="#" class="text-white text-decoration-underline" onclick="myFunction1()"  >Job Specification</a>
                      <a href="mailto:hr&admin@cbh.com.my" class="btn btn-success text-white" style="background-color: #52f4cd; border: none;">
                        Apply Now
                      </a>
                    </div>
                  </div>
            	</div>
          	</div>
          	
          	<div class="col-md-4 mb-4">
          		<div class="card text-white text-start align-items-between" style="background-color: #226b57;min-height:160px">
                  <div class="card-body d-flex align-items-start flex-column">
                    <h6 class="card-title text-white fw-bold mb-auto w-100">
                      QA/QC Engineer
                    </h6>
<!--                     <p class="card-text text-white ">Batu Caves</p> -->
                    
                    <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                      <a href="#" onclick="myFunction2()"  class="text-white text-decoration-underline">Job Specification</a>
                      <a href="mailto:hr&admin@cbh.com.my" class="btn btn-success text-white" style="background-color: #52f4cd; border: none;">
                        Apply Now
                      </a>
                    </div>
                  </div>
            	</div>
          	</div>
          	
          	
          	<div class="col-md-4 mb-4">
          		<div class="card text-white text-start align-items-between" style="background-color: #226b57;min-height:160px">
                  <div class="card-body d-flex align-items-start flex-column">
                    <h6 class="card-title text-white fw-bold mb-auto w-100">
                      Safety & Health Site Supervisor
                    </h6>
<!--                     <p class="card-text text-white ">Batu Caves</p> -->
                    
                    <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                      <a href="#" onclick="myFunction3()" class="text-white text-decoration-underline">Job Specification</a>
                      <a href="mailto:hr&admin@cbh.com.my" class="btn btn-success text-white"  style="background-color: #52f4cd; border: none;">
                        Apply Now
                      </a>
                    </div>
                  </div>
            	</div>
          	</div>
          	
          	
          	
          	<div class="col-md-4 mb-4">
          		<div class="card text-white text-start align-items-between" style="background-color: #226b57;min-height:160px">
                  <div class="card-body d-flex align-items-start flex-column">
                    <h6 class="card-title text-white fw-bold mb-auto w-100">
                      Project Document Controller
                    </h6>
<!--                     <p class="card-text text-white ">Batu Caves</p> -->
                    
                    <div class="d-flex justify-content-between align-items-center mt-4 w-100">
                      <a href="#" onclick="myFunction4()" class="text-white text-decoration-underline">Job Specification</a>
                      <a href="mailto:hr&admin@cbh.com.my" class="btn btn-success text-white"  style="background-color: #52f4cd; border: none;">
                        Apply Now
                      </a>
                    </div>
                  </div>
            	</div>
          	</div>
          	
          	
          	
          	
           
			
          	</div>
          </div> 
   </section>
    
      
    


<section id="cap-1" class="tab-content pb-0">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h1><strong>Senior Design Engineer / Design Engineer</strong></h1>
				<h5 class="green-title mb-4">Responsibilities:</h5>
				<ul> 
					<li><p>Develop Key SLD, layouts, Protection & Control diagrams of Switchgears, transformers, UPS, generator, VSD, cables, ELV etc.</p></li>
					<li><p>Perform electrical systems design and calculations, electrical sizing and selection.</p> </li> 
					<li><p>Material take-off for procurement.</p></li>
                    <li><p>Prepare Cable Schedule, Cable termination diagram.</p></li>
                    <li><p>Power System Studies using ETAP / SKM</p></li>
                    <li><p>Technical evaluation of equipment, review vendor equipment design/data.</p></li>
                    <li><p>Involve in tender design, costing as required.</p></li>
                    <li><p>Attend project meetings, design coordination meetings as required.</p></li>
                    <li><p>Perform inspection, FAT/SAT and witnessing of tests on major equipment.</p></li>
                    <li><p>Travel to sites for site review, provide engineering evaluations and solutions.</p></li>
                    <li><p>Liaise closely with Consultants, Vendors and Site teams.</p></li>
                    <li><p>Assist superior in other tasks / proposal activities as required.</p></li>
				</ul>
		</div>
	</div>
	</div>
</div>
<div class="container-fluid pb-4" style="background: #E3FFEE">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 mt-4">
    				<h5 class="green-title mb-4">Requirements:</h5>
                    <ul> 
    					<li><p> Degree in Electrical Engineering </p></li>
                    	<li><p>3-5 years&rsquo; experience in electrical design</p></li>
                    </ul>
                    <div class="text-left">
            			<a href="mailto:hr&admin@cbh.com.my" class="elementor-button elementor-button-link elementor-size-sm animated slideInDown">
                            Apply Now
                        </a>
            			<a class="elementor-button elementor-button-link elementor-size-sm animated slideInDown" onclick="myFunctionclose()" >
                    		<span class="elementor-button-content-wrapper">
                    			<span class="read-more">SHOW LESS </span>
                    		</span>
                    	</a>
        			</div>
    			</div>
    		</div>
		
		</div>
	</div>
</section>


<section id="cap-2" class="tab-content pb-0">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h1><strong>QA/QC Engineer</strong></h1>
				<h5 class="green-title mb-4">Responsibilities:</h5>
				<ul>
              <li>Develop and implement QA/QC procedures for electrical engineering and construction projects.</li>
              <li>Ensure all electrical work complies with project specifications, codes, standards, and regulations.</li>
              <li>Conduct regular inspections and audits of electrical installations and materials.</li>
              <li>Prepare and maintain detailed QA/QC documentation, including:
                <ul>
                  <li>Inspection reports</li>
                  <li>Test plans</li>
                  <li>Quality records</li>
                </ul>
              </li>
              <li>Review and approve technical drawings, specifications, and quality plans.</li>
              <li>Ensure all QA/QC documentation is accurate and up-to-date.</li>
              <li>Conduct inspections and tests on electrical systems, components, and installations.</li>
              <li>Verify the quality and integrity of electrical installations through rigorous testing and inspection.</li>
              <li>Identify and report any non-conformances or deficiencies and recommend corrective actions.</li>
              <li>Coordinate QA/QC activities with:
                <ul>
                  <li>Project managers</li>
                  <li>Engineers</li>
                  <li>Contractors</li>
                </ul>
              </li>
              <li>Communicate quality issues and concerns to project teams and stakeholders.</li>
              <li>Provide technical support and guidance on quality-related matters.</li>
              <li>Provide training and support to project teams on QA/QC procedures and best practices.</li>
              <li>Promote a culture of quality and continuous improvement within the organization.</li>
              <li>Stay updated with the latest industry standards, codes, and quality management practices.</li>
              <li>Ensure compliance with relevant standards and regulations such as:
                <ul>
                  <li>IEC</li>
                  <li>NEC</li>
                  <li>IEEE</li>
                </ul>
              </li>
              <li>Implement and enforce quality control measures to ensure high standards of workmanship.</li>
              <li>Conduct risk assessments and implement mitigation strategies to manage quality-related risks.</li>
              <li>Attend quality meetings with consultants, clients, main contractors, and subcontractors.</li>
              <li>Review the quality of all materials at the site and ensure:
                <ul>
                  <li>Compliance with all project specifications</li>
                  <li>Coordination with procurement and material quality teams</li>
                </ul>
              </li>
              <li>Responsible for QA/QC documentation for the complete project, including:
                <ul>
                  <li>Certificates</li>
                  <li>Calibration records</li>
                  <li>Test results</li>
                  <li>Inspection requests</li>
                  <li>Non-compliance reports</li>
                  <li>Site instructions/observations</li>
                  <li>Permanent material delivery records</li>
                </ul>
              </li>
              <li>Coordinate with the Consultant&rsquo;s representative and Site In-charge for inspection activities.</li>
              <li>Develop Construction Method Statement (CMS) including:
                <ul>
                  <li>Construction risk assessment</li>
                  <li>Job hazard analysis</li>
                  <li>Inspection & Test Plan (ITP)</li>
                </ul>
              </li>
              <li>Monitor site activities and inspect periodically to ensure workmanship quality.</li>
              <li>Liaise with the project team for material submissions to consultants.</li>
              <li>Assist and liaise with subcontractors/suppliers to ensure knowledge and compliance with quality standards.</li>
              <li>Assist in the preparation of As-Built drawings by verifying compliance of installation with design.</li>
              <li>Prepare and submit Operation and Maintenance (O&M) Manuals.</li>
            </ul>

		</div>
	</div>
	</div>
</div>
<div class="container-fluid pb-4" style="background: #E3FFEE">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 mt-4">
    				<h5 class="green-title mb-4">Requirements:</h5>
                    	<ul> 
    					<li><p>Bachelor&rsquo;s degree in Electrical Engineering or a related field. Experience:</p></li>
                        <li><p>Minimum of 3 years of experience in electrical QA/QC within the construction or industrial sectors.</p></li>
                        <li><p>Proven track record of managing quality assurance and control activities for electrical projects.</p></li>
                        <li><p>Strong knowledge of electrical systems, codes, and standards.</p></li>
                        <li><p>Proficient in using QA/QC tools and software (e.g., AutoCAD, MS Office).</p></li>
                        <li><p>Experience with electrical testing and inspection procedures.</p></li>
    				</ul>
                    <div class="text-left">
            			<a class="elementor-button elementor-button-link elementor-size-sm animated slideInDown" onclick="myFunctionclose()" >
                    		<span class="elementor-button-content-wrapper">
                    			<span class="read-more">SHOW LESS </span>
                    		</span>
                    	</a>
        			</div>
    			</div>
    		</div>
		
		</div>
	</div>
</section>


<section id="cap-3" class="tab-content pb-0">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h1><strong>Senior Design Engineer / Design Engineer</strong></h1>
				<h5 class="green-title mb-4">Responsibilities:</h5>
				<ul> 
					<li><p>Ensure Safety & Health procedures is executed at work site</p></li>
                    <li><p>Communicate and coordinate with authorities</p></li>
                    <li><p>Coordinate for relevant work authorisation</p></li>
                    <li><p>Identify, evaluate, recommend and execute work safety</p></li>
                    <li><p>Coordinate the safety, Health and Environment awareness program in the line with OSHA Act</p></li>
                    <li><p>Prepare and submit related safety report</p></li>
                    <li><p>Organize monthly site&rsquo;s safety & health as required</p></li>
                    <li><p>Assist and monitor sub-contractor with regards to OSHA</p></li>
				</ul>
		</div>
	</div>
	</div>
</div>
<div class="container-fluid pb-4" style="background: #E3FFEE">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 mt-4">
    				<h5 class="green-title mb-4">Requirements:</h5>
                    <ul> 
    					<li><p> Valid and registered Yellow Book with DOSH</p></li>
                        <li><p>Certificate, Diploma or degree in related field</p></li>
                        <li><p>At least 2 years of experience in Safety and Health</p></li>
                    </ul>
                    <div class="text-left">
            			<a class="elementor-button elementor-button-link elementor-size-sm animated slideInDown" onclick="myFunctionclose()" >
                    		<span class="elementor-button-content-wrapper">
                    			<span class="read-more">SHOW LESS </span>
                    		</span>
                    	</a>
        			</div>
    			</div>
    		</div>
		
		</div>
	</div>
</section>



<section id="cap-4" class="tab-content pb-0">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h1><strong>Project Document Controller</strong></h1>
				<h5 class="green-title mb-4">Responsibilities:</h5>
				<ul>
                  <li><strong>Document Management:</strong>
                    <ul>
                      <li>Develop and maintain a comprehensive filing system and document control processes for both hard and electronic documents.</li>
                      <li>Register and classify project documents, including drawings, specifications, contracts, correspondence, and reports.</li>
                      <li>Ensure that documents are accessible to authorized personnel while maintaining security and confidentiality.</li>
                    </ul>
                  </li>
                
                  <li><strong>Document Control:</strong>
                    <ul>
                      <li>Monitor the status of documents and drawings to ensure timely approval, updates, and distribution.</li>
                      <li>Manage document review, approval, and revision control processes in compliance with company and industry standards.</li>
                      <li>Track document versions and remove obsolete documents from circulation.</li>
                    </ul>
                  </li>
                
                  <li><strong>Communication and Coordination:</strong>
                    <ul>
                      <li>Act as a liaison between project teams, contractors, vendors, and clients on document-related matters.</li>
                      <li>Ensure timely distribution of documents to relevant parties.</li>
                      <li>Coordinate with engineering and project management teams to enforce document control procedures.</li>
                    </ul>
                  </li>
                
                  <li><strong>Compliance and Auditing:</strong>
                    <ul>
                      <li>Ensure compliance with industry standards, regulatory requirements, and internal policies.</li>
                      <li>Prepare for and participate in internal and external audits of project documentation.</li>
                      <li>Implement corrective actions for identified document control issues.</li>
                    </ul>
                  </li>
                
                  <li><strong>System Maintenance:</strong>
                    <ul>
                      <li>Maintain and update document control software and systems.</li>
                      <li>Provide training to project personnel as needed.</li>
                      <li>Troubleshoot and resolve system-related issues.</li>
                    </ul>
                  </li>
                
                  <li><strong>Reporting:</strong>
                    <ul>
                      <li>Generate regular reports on the status of project documentation.</li>
                      <li>Maintain accurate records of document transmittals, revisions, and approvals.</li>
                    </ul>
                  </li>
                
                  <li><strong>Continuous Improvement:</strong>
                    <ul>
                      <li>Identify opportunities to enhance document control processes and implement best practices.</li>
                      <li>Stay updated with trends and advancements in document control technologies and methodologies.</li>
                    </ul>
                  </li>
                </ul>

		</div>
	</div>
	</div>
</div>
<div class="container-fluid pb-4" style="background: #E3FFEE">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 mt-4">
    				<h5 class="green-title mb-4">Requirements:</h5>
                    <ul>
                      <li>Proficiency in document control software (e.g., Aconex, SharePoint, ProjectWise).</li>
                      <li>Strong knowledge of Microsoft Office Suite (Word, Excel, Outlook).</li>
                      <li>Familiarity with engineering and construction documents and processes.</li>
                      <li>Excellent organizational and time management skills.</li>
                      <li>Strong attention to detail and accuracy.</li>
                      <li>Effective communication and interpersonal skills.</li>
                      <li>Ability to work independently and as part of a team.</li>
                    </ul>

                    <div class="text-left">
            			<a class="elementor-button elementor-button-link elementor-size-sm animated slideInDown" onclick="myFunctionclose()" >
                    		<span class="elementor-button-content-wrapper">
                    			<span class="read-more">SHOW LESS </span>
                    		</span>
                    	</a>
        			</div>
    			</div>
    		</div>
		
		</div>
	</div>
</section>


<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>

var multipleCardCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width: 576px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}
</script>



<script>


//hide all tabs first
$('.tab-content').hide();
$('.tab-title').hide();
//show the first tab content
$('#tab-<?=$currentYear?>').show();
$('#tab-title-<?=$currentYear?>').show();

$('#select-box').change(function () {
   dropdown = $('#select-box').val();
  //first hide all tabs again when a new option is selected
  $('.tab-content').hide();
  $('.tab-title').hide();
  //then show the tab content of whatever option value was selected
  $('#' + "tab-" + dropdown).show();    
  $('#' + "tab-title-" + dropdown).show();                                  
});

function myFunctionclose() {
 $('.tab-content').hide();
 $('#cap-list').show();
}

function myFunction1() {
	$('#cap-list').hide();
  $('#cap-1').show();
}


function myFunction2() {
	$('#cap-list').hide();
  $('#cap-2').show();
}


function myFunction3() {
	$('#cap-list').hide();
  $('#cap-3').show();
}

function myFunction4() {
	$('#cap-list').hide();
  $('#cap-4').show();
}

function myFunction5() {
	$('#cap-list').hide();
  $('#cap-5').show();
}


function myFunction6() {
	$('#cap-list').hide();
  $('#cap-6').show();
}


function myFunction7() {
	$('#cap-list').hide();
  $('#cap-7').show();
}





</script>