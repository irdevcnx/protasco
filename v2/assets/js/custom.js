document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll('.carousel-item-custom');
    
    function updateCarousel(activeIndex) {
        items.forEach((item, index) => {
            item.classList.remove('active', 'left-tilt', 'right-tilt');
            
            if (index === activeIndex) {
                item.classList.add('active');
            } else if (index < activeIndex) {
                item.classList.add('left-tilt');
            } else {
                item.classList.add('right-tilt');
            }
        });
    }

    // Example: Set the middle item as active on load
    const midPoint = Math.floor(items.length / 2);
    updateCarousel(midPoint);

    // Add click event to change focus
    items.forEach((item, index) => {
        item.addEventListener('click', () => updateCarousel(index));
    });
});



function loadRSS(url) {
    fetch("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(url))
        .then(res => res.json())
        .then(data => {
            const container = $('#newsContainer');
            container.empty(); 

            data.items.forEach(item => {
                const dateObj = new Date(item.pubDate);
                const formattedDate = dateObj.toLocaleDateString("en-US", {
                    month: 'long', day: 'numeric', year: 'numeric'
                });
                const cleanDesc = item.description.replace(/<[^>]*>?/gm, '');

                // HTML Card
                const cardHtml = `
                    <div>
                        <div class="news-card">
                            <a href="${item.link}" class="btn-readmore" target="_blank">Read More &rarr;</a>
                            <div class="news-date">${formattedDate}</div>
                            <h5 class="news-title">${item.title}</h5>
                            <p class="news-desc">${cleanDesc}</p>
                        </div>
                    </div>
                `;
                container.append(cardHtml);
            });

            initSlick();
        })
        .catch(err => console.error("RSS Load Error:", err));
}

function initSlick() {
    $('#newsContainer').slick({
        dots: true,
        appendDots: $('#slickDots'), // Letakkan dots dalam div custom kita
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('#slickPrev'),
        nextArrow: $('#slickNext'),
        responsive: [
            {
                breakpoint: 1024,
                settings: { slidesToShow: 2 }
            },
            {
                breakpoint: 768,
                settings: { slidesToShow: 1 }
            }
        ]
    });
}

loadRSS("http://protascoactive.com.my/feed/");