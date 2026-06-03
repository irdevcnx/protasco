<?php include 'header.php';?>
<style>
body {
	background: #e5e5e5;
}
.bge5e5e5{background: #e5e5e5;}
/* Section background */
/* Section background */
.bg-cream {
  background-color: #FFF2D2;
  /* position: relative;
   z-index: 1; */
}

/* Yellow breakout box */
.yellow-box {
  background-color: #FFC20E;
  border-bottom-right-radius: 120px;

  /* Full left edge */
  margin-left: calc(-1 * (100vw - 100%) / 2);
  width: calc(100% + (100vw - 100%) / 2);

  /* Exceed bottom */
  /* margin-bottom: -100px; */

  padding: 3rem 0;

  position: relative;
  z-index: 3;
}

/* Image stays above cream but below yellow */
.bg-cream img {
  position: relative;
  z-index: 1;
}

/* Mobile */
@media (max-width: 768px) {
  .yellow-box {
    border-bottom-right-radius: 60px;
    margin-bottom: -50px;
    padding: 2rem 0;
  }
}


.bottom-yellow-section{
    margin-top: -50px;
    position: relative;
    z-index: 2;
}

.mission-text {
  max-width: 900px;
  /* font-size: 0.95rem; */
  color: #333;
}

.feature-item {
  padding: 0 1rem;
  /* font-size: 0.9rem; */
  color: #333;
  text-align: center;
}

.icon-circle {
  width: 56px;
  height: 56px;
  background-color: #FEBC0F;
  border-radius: 50%;
  margin: 0 auto;

  display: flex;
  align-items: center;
  justify-content: center;
}
.map-container {
    width: 100%;
    height: 450px;
    overflow: hidden;
    /* border: 1px solid #ccc; */
}
.map-container iframe {
    /* margin-left: -250px;  */
    margin-top: -147px;
}
</style>
<section id="page-title" data-bg-parallax="img/banner_Construction.png">
	<div class="parallax-container img-loaded"
		data-bg="img/Rectangle-39.png" data-velocity="-.140"
		style="background: url(&quot;img/Rectangle-39.png&quot;);"
		data-ll-status="loaded"></div>
	<div class="bg-overlay"></div>
	<div class="container">
		<div class="page-title">
			<h1 class="text-bold mb-0">Agriventure</h1>
		</div>
	</div>
</section>

<section class="">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex row align-items-center">

				

					<div class="col-md-6 hddsss" >

						<p class="text-justify">
						Protasco has expanded its portfolio into the manufacturing, processing,
                        preserving, and packaging of tropical fruit products as part of its commitment to
                        strengthening Malaysia’s food security. Leveraging more than 1,000 acres of
                        orchards nationwide, the division cultivates a range of tropical fruits which includes
                        Durian, Jackfruit, Calamansi, Cempedak, Papaya, Dragon Fruit, Ciku, and Guava.</p>
					</div>

                    <div class="accadax w100 pr-4 col-md-6 hddsss text-center">
					    <img alt="" src="img/Rectangle-85.png" class="img-fluid mx-wd-500 cacpfsdkcscd ml-2 mb-2">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="bg-cream pb-0">
  <div class="container position-relative">

    <!-- Image -->
    <img src="img/durian.png" class="img-fluid w-100 mb-0" alt="Durian">

    <!-- Yellow Box -->
    <div class="yellow-box">
      <div class="container" style="margin-right:0;">
        <div class="row g-4 m-0">

          <div class="col-12 col-md-6">
            <p class="text-black" style="    color: #1f1f1f;">
            From careful cultivation to stringent processing and packaging, every product is
            developed to meet international standards of freshness, safety, and quality. This
            integrated approach enables Protasco to deliver premium fresh, frozen, and
            value-added fruit products to both domestic and global markets. With a
            commitment to quality, it follows GMP, HACCP, and FSSC 22000 standards to
            produce fresh and frozen fruit products, juices, and purees.</p>
          </div>
        <div class="col-md-1"></div>
          <div class="col-12 col-md-5">
            <h5 class="fw-bold mb-2 text-black">Product Portfolio</h5>
            <ul class="mb-0" style="font-weight: 500;color:#1f1f1f;">
              <li>Fresh & Frozen Fruits</li>
              <li>Extracted Juices & Purees</li>
              <li>Cordials</li>
              <li>Pulps & Pastes</li>
            </ul>
          </div>

        </div>
      </div>
    </div>

  </div>

	<div class="bottom-yellow-section bg-white py-5">
		<div class="container" style="margin-top:50px;">

        
    <!-- Mission -->
    <h3 class="fw-bold mb-4 text-center" style="color:#FEBC0F;">Mission</h3>
    <p class="mx-auto mb-5 mission-text text-center">
      To harness Malaysia’s rich tropical produce to
create high-quality, sustainable fruit products
through responsible sourcing, innovation, and
continuous improvement. The division works
closely with local growers to uphold ethical
agricultural practices while driving product
excellence and supporting local communities. </p>

    <!-- Subtitle -->
   <h3 class="fw-bold mb-4 text-center" style="color:#FEBC0F;">
      Protasco’s Agriventure division offers:
</h3>

    <!-- Features -->
    <div class="row g-4 justify-content-center">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-item">
          <img src="img/Best Seller.png" class="img-fluid">
          <p class="mb-0">
            Consistent premium quality 
through controlled cultivation and
 processing
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-item">
         <img src="img/Greentech-icon.png" class="img-fluid">
          <p class="mb-0">
            Sustainable and responsible
 sourcing aligned with national 
food-security goals
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-item">
          <img src="img/Innovation.png" class="img-fluid">
          <p class="mb-0">
            Innovation-driven product
 development to meet evolving 
market demands
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-item">
           <img src="img/Service (1).png" class="img-fluid">
          <p class="mb-0">
            Reliable, customer-focused service
 supported by robust operational
 capabilities
          </p>
        </div>
      </div>

    </div>
        </div>
	</div>
</section>



<section style="border-bottom:13px solid #FEBC0F;" class="p-0">
	<img src="img/Rectangle 103.png" class="w-100 img-fluid">
</section>



<section class="">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex row align-items-center">

				

					<div class="col-md-4 hddsss" >
            <h3 style="color:#D03028" class="mb-4">PROTASCO BERHAD</h3>
            <h5  style="color:#24346D" class="mb-0">Tenggara Food Industries Sdn Bhd</h5>
					  <p class="text-justify mb-4" style="color:#24346D">No.11, Jalan Gangsa 3, Desa Perindustrian Kulai 2, 81000 Kulai, Johor, Malaysia</P>
          </div>
          <div class="accadax w100 pr-4 col-md-8 hddsss text-center map-container">
					    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127619.89671655805!2d103.39112329726561!3d1.6709349000000204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da799839de88f5%3A0x9e5f9651c1d91c!2sTenggara%20food%20industries%20sdn%20bhd!5e0!3m2!1sen!2smy!4v1769667708522!5m2!1sen!2smy&iwloc=0" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<?php include 'footer.php';?>


