<?php include 'header.php'; ?>
<main class="main">
   <!-- Hero Section -->
   <!-- HERO -->
   <section class="accrd d-flex align-items-center">
      <div class="container agriventure-content">
         <div class="row align-items-center">
            <div class="col-md-12">
               <div class="agriventure-text-box">
                  <h6 class="fw-bold cpf-center-title text-white">
                     Accreditations & Accolades
                  </h6>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <!-- About Section -->
   <section class="common-section">
      <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h3 class="about-title">Accreditations & Accolades</h3>
                <h5 class="text-green">Protasco Berhad has garnered several accreditations and accolades in recognition of our constant commitment to excellence. They are a testament to the integrity of our work and the level of professionalism we exude in our service :</h5>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="text-purple text-center fw-bold mb-4">Awards</h5>
                <button class="filter-btn active" onclick="filterAwards('all')">All</button>
                <button class="filter-btn" onclick="filterAwards('2022')">2022</button>
                <button class="filter-btn" onclick="filterAwards('2016')">2016</button>
                <button class="filter-btn" onclick="filterAwards('2015')">2015</button>
                <button class="filter-btn" onclick="filterAwards('2011')">2011</button>
                <button class="filter-btn" onclick="filterAwards('2006')">2006</button>
                <button class="filter-btn" onclick="filterAwards('2004')">2004</button>
            </div>

            <div class="row" id="awardGrid">
                <div class="col-md-4 award-item 2022">
                    <div class="award-card">
                        <div class="year-badge">2022</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">Park Inn by Radisson Putrajaya</p>
                            <p class="award-desc">Gold Award Business Hotel</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2022">
                    <div class="award-card">
                        <div class="year-badge">2022</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">De Centrum Land Sdn Bhd</p>
                            <p class="award-desc">Best Harmonious Development Award - Rimbawan Residency</p>
                        </div>
                    </div>
                </div>

                 <div class="col-md-4 award-item 2016">
                    <div class="award-card">
                        <div class="year-badge">2016</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">De Centrum Land Sdn Bhd</p>
                            <p class="award-desc">Best Boutique Lifestyle Development at Property Insights’s Prestigious Award (PIPDA)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2015">
                    <div class="award-card">
                        <div class="year-badge">2015</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">Roadcare (M) Sdn Bhd</p>
                            <p class="award-desc">Anugerah Kontraktor Cemerlang 2015 (PKMM)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2015">
                    <div class="award-card">
                        <div class="year-badge">2015</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">De Centrum Development Sdn Bhd</p>
                            <p class="award-desc">Best Mixed Development at Property Insight’s Prestigious Award (PIPDA)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2015">
                    <div class="award-card">
                        <div class="year-badge">2015</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">Roadcare (M) Sdn Bhd</p>
                            <p class="award-desc">Anugerah Kontraktor Cemerlang 2015 by Persatuan Kontraktor Melayu Malaysia (PKMM)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2011">
                    <div class="award-card">
                        <div class="year-badge">2011</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">Roadcare (M) Sdn Bhd</p>
                            <p class="award-desc">Anugerah 5 Bintang untuk Auditan Kerja Penyelenggaraan 2011</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2006">
                    <div class="award-card">
                        <div class="year-badge">2006</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">HCM Engineering Sdn Bhd</p>
                            <p class="award-desc">Malaysian Emerging Knowledge Organisation (MEKO) Award September 2006</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 award-item 2004">
                    <div class="award-card">
                        <div class="year-badge">2004</div>
                        <div class="award-bg"></div>
                        <div class="award-content">
                            <p class="award-company">HCM Engineering Sdn Bhd</p>
                            <p class="award-desc">Human Capital Development Award</p>
                        </div>
                    </div>
                </div>




                <h5 class="text-purple text-center fw-bold mb-4 mt-4">Certifications </h5>
            </div>

            <div class="row g-4" id="isoGrid">
        
                <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">HCM Engineering Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">HCM Engineering Sdn Bhd</div>
                            <div class="iso-number">ISO 14001:2004</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Kumpulan Ikram Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Ikram QA Services Sdn Bhd</div>
                            <div class="iso-number">ISO / IEC 17025:2005</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Roadcare (M) Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>



                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">KI Integrated Consultants Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>



                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Ikram Engineering Services Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Ikram Paves Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Ikram Training and Infrastructure Development Institute (ITiDi)</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Ikram Skills and Retraining Academy (ISRA)</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="iso-card">
                        <div class="iso-overlay"></div>
                        <div class="iso-bg-img"></div>
                        <div class="iso-content">
                            <div class="iso-name">Protasco Trading Sdn Bhd</div>
                            <div class="iso-number">ISO 9001:2008</div>
                        </div>
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