<!DOCTYPE html>
<html data-wf-domain="www.bestwayrelocation.co.uk" data-wf-page="64b93a320f538156aba94876"
  data-wf-site="64ae94fa75e1882ff9a4f9fe">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Bestway Relocation offers expert house removals, office relocations, and secure storage solutions across the UK. Get your free moving quote today!" />
  <meta name="keywords"
    content="UK removals, house removals, office removals, relocation services UK, professional movers, Bestway Relocation" />
  <meta name="author" content="Bestway Relocation" />
  <title>Bestway Relocation | UK House & Office Relocation Experts</title>
  <link rel="canonical" href="https://www.bestwayrelocation.co.uk/" />
  <link href="assets/64ae94fa75e1882ff9a4f9fe/css/halesfreight.webflow.bca9ac605.css" rel="stylesheet"
    type="text/css" />
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="assets/64ae94fa75e1882ff9a4f9fe/64e46edb910d4b79fb2bd8fb_Halesfreight_Favicon.png" rel="shortcut icon"
    type="image/x-icon" />


  <link href="assets/64ae94fa75e1882ff9a4f9fe/64e46efc910d4b79fb2c05ac_Halesfreight_Webclip.png"
    rel="apple-touch-icon" />
  <link href="index.php" rel="canonical" />

  <?php include 'components/extra.php'; ?>
</head>

<body class="body">
  <div class="maine-mask">
    <?php include 'components/nav-2.php'; ?>
    <!-- Completed -->
    <section class="section-8 next-section">
      <div class="w-layout-grid contact-hero">
        <div id="w-node-_19275dee-4348-c94a-50a9-82db1c1edb1f-aba9487a" class="div-block-19">

          <h1 class="title-small"><strong>Expert Relocation Services at an affordable cost</strong>
          </h1>
          <style>
            .top-features-list {
              list-style: none;
              padding: 0;
              margin: 0;
            }

            .top-feature-item {
              display: flex;
              align-items: center;
              margin-bottom: 25px;
            }

            .top-feature-icon {
              width: 50px;
              height: 50px;
              margin-right: 15px;
              display: flex;
              align-items: center;
              justify-content: center;
              flex-shrink: 0;
            }

            .top-feature-content {
              flex: 1;
            }

            .top-feature-title {
              font-weight: bold;
              margin-bottom: 5px;
              color: #000;
            }

            .top-feature-text {
              color: #666;
              line-height: 1.5;
            }
          </style>

          <ul class="top-features-list">
            <li class="top-feature-item">
              <div class="top-feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/5.svg" loading="lazy" alt="" />
              </div>
              <div class="top-feature-content">
                <p><strong>Fast, Friendly & Reliable Communication</strong><br>
                  We keep you informed at every stage with prompt, professional <br>updates — no surprises, just
                  clarity.
                </p>
              </div>
            </li>

            <li class="top-feature-item">
              <div class="top-feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/6.svg" loading="lazy" alt="" />
              </div>
              <div class="top-feature-content">
                <p><strong>7+ years of UK Relocation Experience</strong><br>
                  Our seasoned team brings deep knowledge and efficiency <br>to every home or office move.
                </p>
              </div>
            </li>

            <li class="top-feature-item">
              <div class="top-feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/7.svg" loading="lazy" alt="" />
              </div>
              <div class="top-feature-content">
                <p><strong>Comprehensive Insurance</strong><br>
                  Every quote comes with goods-in-transit insurance included — upto <br> £50,000 for extra
                  confidence on moving day.
                </p>
              </div>
            </li>

            <li class="top-feature-item">
              <div class="top-feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/9.svg" loading="lazy" alt="" />
              </div>
              <div class="top-feature-content">
                <p><strong>White-Glove Handling for Homes & Offices</strong><br>
                  We handle your belongings with care and precision — from <br>fine furniture to fragile tech.
                </p>
              </div>
            </li>

            <li class="top-feature-item">
              <div class="top-feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/8.svg" loading="lazy" alt="" />
              </div>
              <div class="top-feature-content">
                <p><strong>Dedicated Support from Start to Finish</strong><br>
                  A personal move coordinator ensures your relocation runs <br>smoothly, tailored to your needs.
                </p>
              </div>
            </li>
          </ul>

        </div>

        <div class="div-block-80"></div>
      </div>
    </section>
    <script>

      document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("myForm");
        const formContainer = document.getElementById("formContainer");

        form.addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent form from actually submitting

          // Get form values
          const name = document.getElementById("name").value;
          const moveSize = document.getElementById("packing-service").value;
          const pickupAddress = document.getElementById("Pickup-Address").value;
          const dropOffAddress = document.getElementById("Delivery-Address").value;
          const movingDate = document.getElementById("MovingDate").value;

          // Generate a random estimated cost
          const minCost = Math.floor(Math.random() * (1500 - 1000 + 1)) + 1000;
          const maxCost = minCost + Math.floor(Math.random() * 300);
          const estimatedCost = `$${minCost} - $${maxCost}`;

          formContainer.innerHTML = `
            <div class="loading-animation">
                <div class="spinner"></div>
                <p class="loading-text">Processing your request, please wait...</p>
            </div>
        `;

          setTimeout(() => {
            formContainer.classList.remove('form-block', 'w-form');
            formContainer.innerHTML = `
                <div class="quotation-container">
                    <div class="quotation-header">
                        <h1>Your Moving Quote</h1>
                    </div>
                    <div class="quotation-body">
                        <p class="quote-subtext">Hello <strong>${name}</strong>,</p>
                        <p class="quote-description">Thank you for choosing Bestway Relocation! Here’s your personalized moving quote:</p>
                        
                        <div class="quote-details">
                            <p><strong>From:</strong> ${pickupAddress}</p>
                            <p><strong>To:</strong> ${dropOffAddress}</p>
                            <p><strong>Preferred Moving Date:</strong> ${movingDate}</p>
                            <p class="quote-cost"><strong>Estimated Cost:</strong> <span class="cost-highlight">${estimatedCost}</span></p>
                        </div>
                    </div>
                    <div class="quotation-footer">
                        <p class="quote-info">This is a competitive and transparent estimate based on standard relocation services. The final price may vary depending on additional requirements.</p>
                        <br><br><button onclick="startChat()" class="chat-no">Chat Now!</button>
                    </div>
                </div>
            `;
          }, 10000); // Show loading animation for 10 seconds before displaying quotation
        });
      });

      function startChat() {
        window.open("https://test-b43ffe.zapier.app/", "_blank");
      }

      // Add Improved Styling to match Bestway Relocation Theme
      const styles = `
    body {
        font-family: 'Arial', sans-serif;
        background-color: #FFBF39;
        color: #333;
    }
    .quotation-container {
        max-width: 900px;
        margin: 60px auto;
        padding: 50px;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .quotation-header {
        background: #000000;
        color: #ffffff;
        padding: 25px;
        border-radius: 15px 15px 0 0;
        font-size: 26px;
        font-weight: bold;
    }

    .quotation-body {
        padding: 40px;
        font-size: 22px;
        color: #333;
        line-height: 1.8;
    }

    .quote-details {
        text-align: left;
        padding: 25px;
        background: #f4f4f4;
        border-radius: 10px;
        margin-top: 25px;
        font-size: 20px;
    }

    .quote-cost {
        font-size: 28px;
        font-weight: bold;
        color: #000000;
        margin-top: 20px;
    }

    .cost-highlight {
        background: #000000;
        color: #fff;
        padding: 12px 22px;
        border-radius: 8px;
        font-size: 22px;
    }

    .quotation-footer {
        padding: 30px;
        text-align: center;
    }

    .chat-no {
        background: #000000;
        color: #fff;
        padding: 20px 35px;
        border: none;
        cursor: pointer;
        font-size: 22px;
        border-radius: 8px;
        transition: background 0.3s ease-in-out;
    }

    .chat-no:hover {
        background: #333333;
    }
`;
      const styleSheet = document.createElement("style");
      styleSheet.type = "text/css";
      styleSheet.innerText = styles;
      document.head.appendChild(styleSheet);
    </script>

    <section class="">
      <div class=" ">
        <div id="w-node-_9240820d-8522-78a6-2507-fc2ed5a08fb5-aba94893" class="content-section_text">
          <div class="rich-text w-richtext">
            <br>
            <h4>Let Bestway Relocation Handle Every Detail</h4>

            <p>
              Bestway Relocation is your trusted partner for residential and commercial moves across the UK. We deliver
              premium service, expert handling, and transparent pricing — all backed by over 7+ years of industry
              experience.

              Whether you’re moving a flat, house, or full-scale office, we know what it takes to make your relocation
              smooth, efficient, and stress-free. Our mission is simple: to make moving easier, with service that’s
              personalised, professional, and always reliable.
            </p>

            <p>
              From initial planning to final delivery, we handle every part of the process — including packing,
              logistics, transportation, and even storage — so you can focus on settling into your new space.

              We also offer secure collection and storage services throughout our UK network, giving you added
              flexibility during your move.
            </p>

            <h4>What Makes Our Removals Service Different?</h4>

            <p>
              Moving with Bestway Relocation isn’t just about getting from A to B. It’s about trust, consistency, and
              care.

              Every move is managed by experienced professionals who take the time to understand your needs. Our team is
              fully trained, accredited, and committed to providing an exceptional customer experience — every time.

              We go beyond the basics to deliver a level of care that sets us apart — with meticulous planning,
              up-to-date training, and a relentless focus on doing the job right.
            </p>

            <!-- <h4>How Much Does a Move Cost?</h4>

            <p>
              Every move is unique, and so is every quote. Our pricing is fair, competitive, and tailored based on key
              factors like:
            </p>

            <ul role="list">
              <li>The distance between pickup and drop-off locations</li>
              <li>The size and scope of your move (including packing needs)</li>
              <li>Any furniture that needs disassembling and reassembling</li>
            </ul>

            <p>
              For a fast and accurate estimate, fill out our <strong>Instant Quote</strong> form. It only takes a
              moment, and we’ll provide a personalised price based on your move details.
            </p> -->
          </div>
        </div>
      </div>
    </section>

    <section class="features-section">
      <div class="features-container">
        <div class="features-wrapper">
          <div class="features-track">
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/21.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">We handle all appliance connections</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/10.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Highly trained, friendly professionals</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/11.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Premium packing materials — included</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/12.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">TVs, wall art, and shelves — safely removed</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/13.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Full insurance for complete peace of mind</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/14.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Secure, monitored storage solutions</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/15.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Expert care for pianos, antiques, and fragile items</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/16.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Our team is always smiling and ready to help</div>
            </div>
            <!-- <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/17.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">No weight limits — we move it all</div>
            </div> -->
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/18.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Protective covers for floors and furniture</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/19.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">Nationwide coverage — we move you anywhere</div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="assets/64ae94fa75e1882ff9a4f9fe/20.svg" loading="lazy" alt="" /></div>
              <div class="feature-text">We care for the environment</div>
            </div>
          </div>
          <button class="nav-button prev-button">←</button>
          <button class="nav-button next-button">→</button>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const track = document.querySelector('.features-track');
          const items = document.querySelectorAll('.feature-item');
          const prevButton = document.querySelector('.prev-button');
          const nextButton = document.querySelector('.next-button');
          let currentIndex = 0;

          // Calculate item width and visible items
          const itemWidth = 280; // Same as CSS width
          const visibleItems = 5;
          const maxIndex = items.length - visibleItems;

          function updateSlider() {
            const offset = currentIndex * -itemWidth;
            track.style.transform = `translateX(${offset}px)`;
          }

          nextButton.addEventListener('click', () => {
            if (currentIndex < maxIndex) {
              currentIndex++;
              updateSlider();
            } else {
              currentIndex = 0;
              updateSlider();
            }
          });

          prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
              currentIndex--;
              updateSlider();
            } else {
              currentIndex = maxIndex;
              updateSlider();
            }
          });

          // Auto slide every 5 seconds
          setInterval(() => {
            currentIndex = (currentIndex < maxIndex) ? currentIndex + 1 : 0;
            updateSlider();
          }, 5000);
        });
      </script>


    </section>

    <section class="section-2">
      <div class="specs_wrapper">
        <!-- <a href="#" class="lightbox-link w-inline-block w-lightbox">
          <div class="lightbox-image">
            <div data-w-id="de950f8a-b1f9-b752-c3ec-f7352ff1c280" class="custom-cursor">
              <div>play video</div>
            </div>
          </div>
          <script type="application/json" class="w-json">{
            "items": [
              {
                "url": "https://www.youtube.com/watch?v=zxed9Zo71js&t=1s",
                "originalUrl": "https://www.youtube.com/watch?v=zxed9Zo71js&t=1s",
                "width": 940,
                "height": 528,
                "thumbnailUrl": "https://i.ytimg.com/vi/zxed9Zo71js/hqdefault.jpg",
                "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2Fzxed9Zo71js%3Fstart%3D1%26feature%3Doembed%26start%3D1&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dzxed9Zo71js&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2Fzxed9Zo71js%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                "type": "video"
              }
            ],
            "group": ""
          }
        </script>
        </a> -->

        <div class="w-layout-grid grid-9">
          <div class="features_item new">
            <div>
              <div class="features-image"></div>
              <div class="subtitle yellow-bg margin-8"></div>
              <h4 class="heading-4">Hassle-Free Furniture Setup</h4>
              <div class="body-2">
                We’ll carefully dismantle and reassemble beds, wardrobes, dining tables, and more as standard — so you
                don’t have to
                lift a finger.
              </div>
            </div>
          </div>

          <div class="features_item new">
            <div>
              <div class="features-image express-overnight"></div>
              <div class="subtitle yellow-bg margin-8"></div>
              <h4 class="heading-4">Flexible Booking Options</h4>
              <div class="body-2">
                Change of plans? No problem. Enjoy unlimited free date changes and zero cancellation fees upto 72 hours
                before the move.
              </div>
            </div>
          </div>

          <div class="features_item new">
            <div>
              <div class="features-image shipping-to-uk"></div>
              <div class="subtitle yellow-bg margin-8"></div>
              <h4 class="heading-4">Professional & Insured Movers</h4>
              <div class="body-2">
                Our trained, and uniformed team delivers a insured, professional, safe
                and seamless moving experience.
              </div>
            </div>
          </div>

          <div class="features_item new down">
            <div>
              <div class="features-image european-freight"></div>
              <div class="subtitle yellow-bg margin-8"></div>
              <h4 class="heading-4">Packing Solutions</h4>
              <div class="body-2">
                Don’t stress about last-minute packing errands. We offer a full range of moving supplies.
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    <section class="standart-page_content-section paddingLine paddingTop" Style="margin:5%">
      <div class="w-layout-grid content-section_grid">
        <div id="w-node-_9240820d-8522-78a6-2507-fc2ed5a08fb5-aba94893" class="content-section_text">
          <div class="rich-text w-richtext">
            <h2 class="heading-2">House Removals</h2>
            <p>
              Moving house can be overwhelming — but with Bestway Relocation by your side, it doesn’t have to be.
              <br /><br />
              We’ve refined our house removals process through years of hands-on experience, delivering moves that are
              smooth, timely, and fully tailored to your needs.
              <br /><br />
              From carefully packing your belongings to safely unloading them at your new home, we handle every step
              with precision. Our professional movers bring the right tools, vehicles, and support to ensure everything
              goes exactly as planned.
              <br /><br />
              Throughout the process, we treat your home and possessions with complete respect — protecting both your
              property and your peace of mind.
            </p>
          </div>
        </div>
        <div id="w-node-_06d54a92-e77c-175f-55f0-cbe1583becf9-aba94893" class="content-section_image storage"></div>
      </div>
    </section>

    <section class="standart-page_content-section pt-5 paddingLine paddingTop" Style="margin:5%">
      <div class="w-layout-grid content-section_grid">
        <div id="w-node-_06d54a92-e77c-175f-55f0-cbe1583becf9-aba9488f" class="content-section_image pallets"></div>
        <div id="w-node-_9240820d-8522-78a6-2507-fc2ed5a08fb5-aba9488f" class="content-section_text">
          <div class="rich-text w-richtext">
            <h2 class="heading-2">Office Relocation</h2>
            <p>
              At Bestway Relocation, we understand that time is money — and office moves need to be seamless, fast, and
              disruption-free.
              <br /><br />
              With years of experience in business relocations, we deliver efficient office moves that align with your
              schedule, so your team stays focused and operational throughout the transition.
              <br /><br />
              Whether you're upgrading to a larger space, consolidating to a smaller one, or moving across town, we
              tailor every step of the process to fit your business needs — including packing, transport, and setup.
              <br /><br />
              From IT equipment and office furniture to sensitive documents and inventory, we handle it all with
              precision and care. No matter the size or scale of your business, you can rely on us to move you safely
              and professionally.
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="cta_maine marginTop">
      <div class="cta_content">
        <h2 class="heading-2">UK-Wide Removals, Wherever You Are</h2>
        <p>
          With a fully established removals network across the UK, Bestway Relocation is equipped to handle moves of all
          sizes — wherever you're based.

          Whether you’re relocating a single flat or coordinating a multi-site office move, we have the vehicles, crews,
          and logistics in place to deliver a smooth and professional experience.

          Not near one of our main service hubs? No problem. Just give us a call — we’ll do everything we can to bring
          our expert services to you.
        </p>
      </div>
      <img src="assets/64ae94fa75e1882ff9a4f9fe/287.svg" loading="eager" alt="" class="image-15" />
      <img src="assets/64ae94fa75e1882ff9a4f9fe/288.svg" loading="eager" alt="" class="image-11" />
    </div>

    <section class="standart-page_content-section paddingLine paddingTop" Style="margin:5%">
      <div class="w-layout-grid content-section_grid">

        <div id="w-node-_9240820d-8522-78a6-2507-fc2ed5a08fb5-aba94893" class="content-section_text">
          <div class="rich-text w-richtext">
            <h2 class="heading-2">A Flexible & Reliable Moving Service</h2>
            <p>
              At Bestway Relocation, we know that even the best-planned moves can come with unexpected challenges.
              Whether your schedule shifts, your budget changes, or new requirements arise — we’re ready to adapt.
              <br /><br />
              Our experienced moving specialists are here to guide you through every stage of your move. We offer expert
              advice, real-time support, and complete flexibility to keep things on track — even when things don’t go to
              plan.
              <br /><br />
              From careful packing and secure transport to setup at your new location, we manage the process end to end.
              Your belongings are safe, your timeline is respected, and your stress stays low.
              <br /><br />
              This commitment to consistency and care is why our clients trust us — and why our reputation for
              excellence continues to grow in an industry where quality matters.
              <br /><br />
              No detail is too small, and no challenge is too big. When you choose Bestway Relocation, you’re choosing a
              team that goes above and beyond — every single time.
            </p>
          </div>
        </div>

        <div id="w-node-_06d54a92-e77c-175f-55f0-cbe1583becf9-aba94893" class="content-section_image reliable-moving">
        </div>
      </div>
    </section>

    <section class="standart-page_content-section pt-5 paddingLine paddingTop" Style="margin:5%">
      <div class="w-layout-grid content-section_grid">
        <div id="w-node-_06d54a92-e77c-175f-55f0-cbe1583becf9-aba9488f" class="content-section_image core-values"></div>
        <div id="w-node-_9240820d-8522-78a6-2507-fc2ed5a08fb5-aba9488f" class="content-section_text">
          <div class="rich-text w-richtext">
            <h2 class="heading-2">Our Core Values at Bestway Relocation</h2>
            <p>
              <strong>Affordable. Adaptable. Careful. Punctual.</strong><br />
              These aren’t just words — they’re the foundation of how we operate, day in and day out.
            </p>

            <p>
              We believe that moving should be as stress-free as possible. That’s why we don’t just move boxes — we
              provide a fully supported, start-to-finish relocation experience built on trust, transparency, and care.
            </p>

            <p>
              Whether it means starting early, working late, or going the extra mile to meet your needs — we’re
              committed to delivering top-tier service without compromise.
            </p>

            <p>
              We treat every move with the same level of care and respect we’d give our own. From handling your
              belongings with caution to respecting your home or office space, your move matters to us — because you
              matter to us.
            </p>
          </div>
        </div>
      </div>
    </section>

    <style>
      @media screen and (max-width: 479px) {
        .features-container {}
      }

      /* Mobile Responsive Styles */
      @media screen and (max-width: 767px) {
        .grid-8 {
          display: block !important;
        }

        .div-block-25 {
          margin-bottom: 30px;
        }

        .form {
          padding: 20px;
        }

        .div-block-23 {
          display: block !important;
        }

        .div-block-23>div {
          margin-bottom: 15px;
        }

        .text-field {
          width: 100% !important;
        }

        .submit-button {
          width: 100%;
        }

        .top-features-list {
          margin-bottom: 30px;
        }

        .image-10 {
          max-width: 100%;
          height: auto;
        }

        .w-layout-grid {
          display: block !important;
        }

        .features_item {
          margin-bottom: 30px;
        }

        .content-section_image {
          height: 250px !important;
          /*margin-bottom: 30px;*/
        }

        .heading-2 {
          font-size: 24px !important;
          line-height: 1.3;
        }

        .body-2 {
          font-size: 16px;
          line-height: 1.5;
        }

        .packages-grid {
          grid-template-columns: 1fr;
          padding: 0 15px;
        }

        .package-card {
          margin-bottom: 30px;
          padding: 25px;
        }

        .package-card.popular {
          transform: none;
        }

        .package-price {
          font-size: 36px;
        }

        .package-price span {
          font-size: 20px;
        }

        .package-list {
          margin-bottom: 20px;
        }

        .package-list li {
          font-size: 14px;
          padding: 0px 0 12px 36px;
        }

        /* Features Section Mobile Styles */
        .features-section {
          padding: 40px 0;
        }

        .features-container {
          padding: 0 15px;
        }

        .features-title {
          font-size: 24px;
          margin-bottom: 30px;
        }

        .feature-item {
          width: 220px;
          padding: 15px;
        }

        .feature-icon {
          width: 60px;
          height: 60px;
          font-size: 24px;
        }

        .feature-text {
          font-size: 13px;
        }

        /* Client Logos Mobile Styles */
        .client-logos-section {
          padding: 40px 0;
        }

        .client-logos-title {
          font-size: 24px;
          margin-bottom: 30px;
        }

        .client-logo {
          min-width: 150px;
          height: 80px;
          margin: 0 15px;
        }

        .client-logo img {
          max-width: 120px;
          max-height: 60px;
        }
      }

      /* Tablet Responsive Styles */
      @media screen and (min-width: 768px) and (max-width: 991px) {
        .grid-8 {
          grid-template-columns: 1fr !important;
        }

        .div-block-25 {
          margin-bottom: 40px;
        }

        .features_item {
          margin-bottom: 30px;
        }

        /* Package Section Tablet Styles */
        .packages-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 20px;
        }

        .package-card.popular {
          transform: scale(1.02);
        }

        /* Features Section Tablet Styles */
        .features-container {
          padding: 0 30px;
        }

        .features-track {
          gap: 20px;
        }

        .feature-item {
          width: 250px;
        }

        /* Client Logos Tablet Styles */
        .client-logos-container {
          padding: 0 30px;
        }

        .client-logo {
          min-width: 180px;
          margin: 0 20px;
        }
      }

      .packages-section {
        /*padding: 100px 0;*/
        /*background: #f8f9fa*/
      }

      .packages-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .package-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        position: relative;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      }

      .package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1)
      }

      .package-card.popular {
        background: linear-gradient(135deg, #000 0%, #333 100%);
        color: white;
        transform: scale(1.05);
      }

      .popular-tag {
        position: absolute;
        top: -15px;
        right: 20px;
        background: #FFBF39;
        color: #000;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
      }

      .package-header {
        text-align: center;
        padding-bottom: 30px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
      }

      .popular .package-header {
        border-bottom-color: rgba(255, 255, 255, 0.2);
      }

      .package-name {
        font-size: 24px;
        font-weight: 700;
      }

      .package-price {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 10px;
      }

      .package-price span {
        font-size: 24px;
        font-weight: 600;
      }

      .package-list {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
      }

      .package-list li {
        padding: 12px 0 12px 35px;
        position: relative;
        font-size: 16px;
        line-height: 1.4;
      }

      .package-list li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #FFBF39;
        font-weight: bold;
        font-size: 18px;
      }

      .popular .package-list li:before {
        color: #FFBF39;
      }

      .package-list li.inactive {
        opacity: 0.5;
      }

      .package-list li.inactive:before {
        content: "×";
        color: rgba(0, 0, 0, 0.3);
      }

      .popular .package-list li.inactive:before {
        color: rgba(255, 255, 255, 0.3);
      }

      .get-plan-button {
        display: block;
        padding: 10px 15px;
        background: #000;
        color: #fff;
        text-align: center;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
      }

      .get-plan-button:hover {
        background: #FFBF39;
        color: #000;
      }

      .popular .get-plan-button {
        background: #FFBF39;
        color: #000;
      }

      .popular .get-plan-button:hover {
        background: #fff;
      }

      @media screen and (max-width: 991px) {
        .w-layout-grid {
          display: block !important;
        }

        .packages-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media screen and (max-width: 767px) {
        .packages-grid {
          grid-template-columns: 1fr;
        }

        .package-card.popular {
          transform: scale(1);
        }
      }
    </style>

    <section class="packages-section">
      <div class="content_wrapper">
        <h2 class="heading-2 text-center" style="margin-bottom: 50px;">Our Packages</h2>

        <div class="packages-grid">
          <!-- Standard Package -->
          <div class="package-card">
            <div class="package-header">
              <div class="package-name">Standard</div>
              <!-- <div class="package-price"><span>£</span>299</div> -->
            </div>
            <ul class="package-list">
              <li>All furniture is dismantled and reassembled</li>
              <li>All hanging clothes packed into wardrobe boxes</li>
              <li>Furniture and floor protectors provided</li>
              <li>Insurance included up to £50,000 (T&Cs applies)</li>
              <li class="inactive">Packing materials provided</li>
              <li class="inactive">Full packing service included</li>
              <li class="inactive">We organise your home ready for the move</li>
            </ul>
            <div style="text-align: center;">
              <a href="request-a-quote.php" class="get-plan-button" style="display: inline-block;">Get Started</a>
            </div>
          </div>

          <!-- Premium Package -->
          <div class="package-card popular">
            <div class="popular-tag">Most Popular</div>
            <div class="package-header">
              <div class="package-name">Premium</div>
              <!-- <div class="package-price"><span>£</span>499</div> -->
            </div>
            <ul class="package-list">
              <li>All furniture is dismantled and reassembled</li>
              <li>All hanging clothes packed into wardrobe boxes</li>
              <li>Furniture and floor protectors provided</li>
              <li>Insurance included up to £50,000 (T&Cs applies)</li>
              <li>Packing materials provided</li>
              <li>Full packing service included</li>
              <li>We organise your home ready for the move</li>
            </ul>
            <div style="text-align: center;">
              <a href="request-a-quote.php" class="get-plan-button" style="display: inline-block;">Get Started</a>
            </div>
          </div>

          <!-- Elite Package -->
          <div class="package-card">
            <div class="package-header">
              <div class="package-name">Elite</div>
              <!-- <div class="package-price"><span>£</span>699</div> -->
            </div>
            <ul class="package-list">
              <li>All furniture is dismantled and reassembled</li>
              <li>All hanging clothes packed into wardrobe boxes</li>
              <li>Furniture and floor protectors provided</li>
              <li>Insurance included up to £50,000 (T&Cs applies)</li>
              <li>Packing materials provided</li>
              <li>Full packing service included</li>
              <li>We organise your home ready for the move</li>
              <li>Unpacking service tailored to your needs</li>
              <li>All rubbish removed from the property</li>
              <li>We organise your new home as you like it</li>
            </ul>
            <div style="text-align: center;">
              <a href="request-a-quote.php" class="get-plan-button" style="display: inline-block;">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .features-section {
        padding: 0px 0px 40px;
        background: #fbfbfd;
      }

      .features-container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 0 60px;
      }

      .features-title {
        text-align: center;
        font-size: 36px;
        margin-bottom: 50px;
        color: #333;
      }

      .features-wrapper {
        position: relative;
        overflow: hidden;
      }

      .features-track {
        display: flex;
        transition: transform 0.5s ease;
        width: fit-content;
      }

      .feature-item {
        width: 280px;
        padding: 20px;
        text-align: center;
        flex-shrink: 0;
      }

      .feature-icon {
        width: 90px;
        height: 90px;
        margin: 0 auto 15px;
        background: transparent;
        border: 3px solid #FFBF39;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        transition: all 0.3s ease;
        color: rgb(122 122 122 / 5%);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.05);
        padding: 9px;
      }

      .feature-item:hover .feature-icon {
        transform: translateY(-5px);
        background: rgba(255, 218, 68, 0.1);
      }

      .feature-text {
        font-size: 15px;
        color: #666;
        line-height: 1.4;
        margin-top: 15px;
      }

      .nav-button {
        position: absolute;
        top: 35%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        background: #fff;
        color: #333;
        cursor: pointer;
        z-index: 2;
        box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
      }

      .nav-button:hover {
        background: #FFBF39;
        color: #000;
      }

      .prev-button {
        left: 3px;
      }

      .next-button {
        right: 3px;
      }
    </style>

    <style>
      .client-logos-section {
        padding: 60px 0;
        background: #f8f9fa;
        overflow: hidden;
      }

      .client-logos-title {
        text-align: center;
        font-size: 32px;
        margin-bottom: 50px;
        color: #333;
      }

      .client-logos-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px 0;
      }

      .client-logos-track {
        display: flex;
        animation: scroll 30s linear infinite;
      }

      .client-logo {
        min-width: 200px;
        height: 100px;
        margin: 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
      }

      .client-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
      }

      .client-logo img {
        max-width: 150px;
        max-height: 80px;
        object-fit: contain;
      }

      @keyframes scroll {
        0% {
          transform: translateX(0);
        }

        100% {
          transform: translateX(-50%);
        }
      }

      /* Gradient overlays for smooth fade effect */
      .client-logos-container::before,
      .client-logos-container::after {
        content: "";
        position: absolute;
        top: 0;
        height: 100%;
        width: 100px;
        z-index: 2;
      }

      .client-logos-container::before {
        left: 0;
        background: linear-gradient(to right, #f8f9fa 0%, transparent 100%);
      }

      .client-logos-container::after {
        right: 0;
        background: linear-gradient(to left, #f8f9fa 0%, transparent 100%);
      }
    </style>

    <section class="section_our-values marginTop">
      <div class="content_wrapper">
        <div class="w-layout-grid our-values_grid">

          <div id="w-node-_9125b14c-e7ec-aeff-b178-70a366f882fe-aba94896" class="our-values_item_customer-focus">
            <div>
              <h4 class="heading-3 margin-24-down">Packing & Removal Services</h4>
              <p class="body-1 gray-2">
                Packing is often the most time-consuming part of any move — and one of the easiest to underestimate.
                <br /><br />
                If you're short on time or juggling multiple moving tasks, our professional packing service can take the
                pressure off. We'll pack your items quickly, securely, and with care — protecting your belongings every
                step of the way.
                <br /><br />
                Prefer to pack yourself? No problem — we’ll supply high-quality packing materials ahead of your move to
                keep you fully prepared.
              </p>
            </div>
          </div>

          <div id="w-node-_363e28ab-d90a-abab-cb17-0895dc039a40-aba94896" class="our-values_item_trust-communication">
            <div>
              <h4 class="heading-3 margin-24-down">Personalised Removal Plans</h4>
              <p class="body-1 gray-2">
                No two moves are the same. That’s why we take time to understand your unique situation — whether you're
                moving house, relocating an office, or managing both.
                <br /><br />
                We’ll ask the right questions upfront: size of your move, distance, timelines, budget, and any special
                requirements. Based on that, we build a tailored plan with the right team, tools, and support to make it
                all happen smoothly.
              </p>
            </div>
          </div>

          <div id="w-node-_36b3a35c-b623-beaa-5002-9314f05493f4-aba94896" class="our-values_item_technology-adoption">
            <div>
              <h4 class="heading-3 margin-24-down">Get in Touch with Bestway Relocation</h4>
              <p class="body-1 gray-2">
                Looking for a trusted removals company to handle your home or office move? Our friendly team is here to
                help — from initial enquiry to final delivery.
                <br /><br />
                Call us today for expert advice or to get your move started. We’re
                happy to answer any questions and guide you through the process.
                <br /><br />
                With specialist consultants and experienced movers on your side, you can relax knowing your relocation
                is in safe hands.
              </p>
            </div>
          </div>

          <div id="w-node-_5f60ed96-45a5-a17e-3498-0dc19c305fe7-aba94896" class="devider"></div>
          <div id="w-node-_7edbde58-47a6-11e1-1f03-57f943fa882f-aba94896" class="devider"></div>

        </div>
      </div>
    </section>

    <?php include 'components/foot-2.php'; ?>
  </div>

  <script src="d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c88852.js?site=64ae94fa75e1882ff9a4f9fe"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="assets/64ae94fa75e1882ff9a4f9fe/js/webflow.9c866a4f9.js" type="text/javascript"></script>
  <script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

  <script>
    $("#Email").change(function () {
      $(this.form).attr("data-name", this.value);
    });
  </script>
</body>

</html>