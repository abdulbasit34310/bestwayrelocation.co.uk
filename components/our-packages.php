<link href="assets/64ae94fa75e1882ff9a4f9fe/css/global.css" rel="stylesheet" type="text/css" />
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
        padding: 20px 0px 80px 0px;
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
        width: 80px;
        height: 80px;
        margin: 0 auto 15px;
        background: transparent;
        border: 2px solid #FFBF39;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        transition: all 0.3s ease;
        color: #FFBF39;
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
        top: 50%;
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
        left: 7px;
    }

    .next-button {
        right: 7px;
    }

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
                    <li class="inactive">Unpacking service tailored to your needs</li>
                    <li class="inactive">All rubbish removed from the property</li>
                    <li class="inactive">We organise your new home as you like it</li>
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
                    <li class="inactive">Unpacking service tailored to your needs</li>
                    <li class="inactive">All rubbish removed from the property</li>
                    <li class="inactive">We organise your new home as you like it</li>
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