<?php include 'header.php'; ?>
<main class="main">
   <!-- Hero Section -->
   <!-- HERO -->
   <section class="contact d-flex align-items-center">
      <div class="container agriventure-content">
         <div class="row align-items-center">
            <div class="col-md-12">
               <div class="agriventure-text-box">
                  <h6 class="fw-bold cpf-center-title text-white">
                     Contact Us
                  </h6>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <!-- About Section -->
   <section class="common-section">
      <div class="container">
        <div class="row g-5 h-100 align-items-center">
            
            <div class="col-lg-5">
                <h2 class="contact-header">Get In Touch</h2>
                
                <div class="mb-4">
                    <p class="office-title">Corporate Office</p>
                    <p class="contact-detail">Corporate Block, Unipark Suria,<br>Jalan Ikram - Uniten, 43000 Kajang, Selangor</p>
                    <a href="tel:+60387383388" class="contact-detail">+603 8738 3388</a>
                    <a href="tel:+60389264008" class="contact-detail">+603 8926 4008</a>
                    <a href="https://goo.gl/maps/SMP6w2.976434,101.739786" target="_blank" class="contact-detail text-muted small">View on Google Maps</a>
                </div>

                <div class="mb-4">
                    <p class="office-title">Kuala Lumpur Office</p>
                    <p class="contact-detail">No 87, Jalan Kampung Pandan 55100 Kuala Lumpur</p>
                    <a href="tel:+60392864050" class="contact-detail">+603 9286 4050</a>
                    <a href="tel:+60392868118" class="contact-detail">+603 9286 8118</a>
                </div>

                <div class="mb-4">
                    <p class="office-title">Email</p>
                    <a href="mailto:ccd@protasco.com.my" class="contact-detail">ccd@protasco.com.my</a>
                </div>

                <div class="mb-4">
                    <p class="office-title">Website</p>
                    <a href="http://www.protasco.com.my" target="_blank" class="contact-detail">www.protasco.com.my</a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="form-container">
                    <h3 class="fw-bold">Send Us a Message</h3>
                    <p class="small opacity-75 mb-4">Stay up-to-date with all the latest Bursa Announcements news.</p>
                    
                    <form id="contactForm">
                        <label class="form-label-custom">Name*</label>
                        <input type="text" class="form-control-custom" placeholder="Name*" required>

                        <label class="form-label-custom">Email*</label>
                        <input type="email" class="form-control-custom" placeholder="Email*" required>

                        <label class="form-label-custom">Subject*</label>
                        <input type="text" class="form-control-custom" placeholder="Subject*" required>

                        <label class="form-label-custom">Message*</label>
                        <textarea class="form-control-custom" placeholder="Message*" required></textarea>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="captcha-box"></div> <button type="submit" class="btn btn-send">View More <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
   </section>
</main>
<?php include 'footer.php'; ?>

<script>
function filterAwards(year) {
    const items = document.querySelectorAll('.award-item');
    const btns = document.querySelectorAll('.filter-btn');
    
    // Update active button
    btns.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    items.forEach(item => {
        if (year === 'all' || item.classList.contains(year)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<script>
    // Reveal on Scroll Function
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Add a small delay based on index for a "wave" effect
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 100); 
            }
        });
    }, observerOptions);

    document.querySelectorAll('.iso-card').forEach(card => {
        observer.observe(card);
    });
</script>