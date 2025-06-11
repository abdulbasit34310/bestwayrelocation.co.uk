<link href="assets/64ae94fa75e1882ff9a4f9fe/css/global.css" rel="stylesheet" type="text/css" />
<?php
function renderInternationalServicesBanner($showSections = [])
{
    if (empty($showSections)) {
        $showSections = ['overseas', 'office', 'student', 'international', 'packing', 'storage'];
    }
    ?>
    <div class="content-section_text european-freight">
        <h2 style="align-self: center; margin-bottom: 20px">Other Services</h2>
        <div class="international-services-banner">
            <?php if (in_array('home', $showSections)): ?>
                <div class="service-section house">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/our-focus.webp" alt="Moving overseas" class="service-bg-image">
                    <div class="service-content">
                        <h2>House Removals</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (in_array('office', $showSections)): ?>
                <div class="service-section office">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/house-removals.webp" alt="Moving within Europe"
                        class="service-bg-image">
                    <div class="service-content">
                        <h2>Office Relocation</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (in_array('student', $showSections)): ?>
                <div class="service-section student">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/storage.webp" alt="International baggage shipping"
                        class="service-bg-image">
                    <div class="service-content">
                        <h2>Student Relocation</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (in_array('international', $showSections)): ?>
                <div class="service-section international">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/our-focus.webp" alt="Moving overseas" class="service-bg-image">
                    <div class="service-content">
                        <h2>International Relocation</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (in_array('packing', $showSections)): ?>
                <div class="service-section packing">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/house-removals.webp" alt="Moving within Europe"
                        class="service-bg-image">
                    <div class="service-content">
                        <h2>Packing Supplies</h2>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (in_array('storage', $showSections)): ?>

                <div class="service-section storage">
                    <img src="assets/64ae94fa75e1882ff9a4f9fe/storage.webp" alt="International baggage shipping"
                        class="service-bg-image">
                    <div class="service-content">
                        <h2>Storage Solutions</h2>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
} ?>

<style>
    .international-services-banner {
        display: flex;
        width: 100%;
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .service-section {
        flex: 1;
        position: relative;
        overflow: hidden;
    }

    .service-bg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .service-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.4), transparent);
        padding: 30px 20px;
        color: white;
    }

    .service-content h3 {
        margin: 0;
        font-size: 28px;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }

    .service-section:hover .service-bg-image {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .international-services-banner {
            flex-direction: column;
            height: auto;
        }

        .service-section {
            height: 250px;
        }

        .service-content h3 {
            font-size: 24px;
        }
    }
</style>