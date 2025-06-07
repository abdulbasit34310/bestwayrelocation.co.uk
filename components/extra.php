<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* Always dark */
    .navbar-logo-center-container {
        background-color: #1e1e1e !important;
    }

    /* Ensure Font Awesome icons are displayed correctly */
    @font-face {
        font-family: 'Font Awesome 5 Brands';
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url('path/to/fontawesome/webfonts/fa-brands-400.eot');
        src: url('path/to/fontawesome/webfonts/fa-brands-400.eot?#iefix') format('embedded-opentype'),
            url('path/to/fontawesome/webfonts/fa-brands-400.woff2') format('woff2'),
            url('path/to/fontawesome/webfonts/fa-brands-400.woff') format('woff'),
            url('path/to/fontawesome/webfonts/fa-brands-400.ttf') format('truetype'),
            url('path/to/fontawesome/webfonts/fa-brands-400.svg#fontawesome') format('svg');
    }

    .fab {
        font-family: 'Font Awesome 5 Brands';
        font-weight: 400;
    }

    /* Hide icons from screen readers */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .navbar-logo-center-container {
        position: fixed;
        /* Makes the section fixed */
        top: 0;
        /* Sticks to the top of the viewport */
        width: 100%;
        /* Ensures it spans the full width */
        z-index: 1000;
        /* Ensures it stays above other elements */
        background-color: #1e1e1e;
        /* Dark background for consistency */
        padding: 10px 20px;
        /* Add padding for spacing */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        /* Optional shadow for separation */
    }



    /* Navbar Links */
    .navbar-logo-center-container a {
        color: #ffffff;
        /* Light text for links */
        text-decoration: none;
        /* Remove underline */
    }

    .navbar-logo-center-container a:hover {
        color: #FFBF39;
        /* Highlight color on hover */
    }

    /* Dropdown Styling */
    .navbar_dropdown-toggle {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar_dropdown-toggle a {
        color: #ffffff;
        /* Light text for dropdown links */
    }

    .navbar_dropdown-toggle a:hover {
        color: #FFBF39;
        /* Highlight color on hover */
    }

    .navbar_dropdown-list {
        background-color: #1e1e1e;
        /* Darker dropdown background */
        border-radius: 5px;
        /* Rounded corners for dropdowns */
        padding: 10px;
    }

    .navbar_dropdown-list a {
        color: #ffffff;
        /* Light text for dropdown items */
    }

    .navbar_dropdown-list a:hover {
        color: #FFBF39;
        /* Highlight color on hover for dropdown items */
    }

    /* Buttons in Navbar */
    .secondary-black-outline-cta,
    .secondary-black-cta {
        background-color: #1e1e1e;
        /* Dark button background */
        color: #FFBF39;
        /* Light text color */
        border: 2px solid #FFBF39;
        /* White border for contrast */
        padding: 10px 20px;
    }

    /* For outline version only */
    .secondary-black-outline-cta:hover {
        color: #000000;
    }

    /* For solid version only */
    .secondary-black-cta:hover {
        color: #121212;
        /* or keep original */
    }

    /* Mobile Menu Button (Hamburger Icon) */
    .menu-button .w-icon-nav-menu {
        filter: invert(1);
        /* Invert icon to make it white on dark background */
    }

    /* Responsive Adjustments (if needed) */
    @media (max-width: 991px) {
        .navbar-logo-center-container {
            padding: 15px;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 20px;
            box-shadow: none;
            /* Optional to remove shadow on smaller screens */
            z-index: 1000;
            border-radius=0
        }

        /* Force Dark Background for Dropdown Menus */
        .navbar_dropdown .w-dropdown-list {
            background-color: #1e1e1e !important;
            /* Dark background */
            color: #ffffff !important;
            /* Light text color */
            border-radius: 5px;
            /* Rounded corners */
            padding: 10px;
            /* Add padding inside dropdown */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional shadow for separation */
        }

        /* Dropdown Links Styling */
        .navbar_dropdown .w-dropdown-list a {
            color: #ffffff !important;
            /* Light text for dropdown items */
            text-decoration: none;
        }

        .navbar_dropdown .w-dropdown-list a:hover {
            color: #FFBF39 !important;
            /* Highlight color on hover for dropdown items */
        }

        /* Dropdown Toggle Styling */
        .navbar_dropdown .w-dropdown-toggle {
            background-color: #1e1e1e !important;
            /* Dark background for toggle */
            color: #ffffff !important;
            /* Light text color for toggle links */
        }

        /* Arrow Icon Styling */
        .navbar_dropdown .dropdown_arrow {
            filter: invert(1) !important;
            /* Make arrow icon white on dark background */
        }
    }
</style>

<style>
    /* Override Footer Background */
    .footer {
        background-color: #1e1e1e !important;
        /* Dark background */
        color: #ffffff !important;
        /* Light text color */
    }

    /* Override Link Colors */
    .footer a {
        color: #ffffff !important;
        /* Light text for links */
    }

    .footer a:hover {
        color: #FFBF39 !important;
        /* Highlight color for hover effect */
    }

    /* Override Social Media Icons */
    .footer-social-link img {
        filter: invert(1) !important;
        /* Invert colors for white icons */
    }

    .footer-social-link:hover img {
        filter: invert(0.5) sepia(1) hue-rotate(180deg) saturate(5) !important;
        /* Add hover effect */
    }

    /* Override Copyright Section */
    .footer-copyright-left {
        color: #aaaaaa !important;
        /* Gray text for copyright notice */
    }

    /* Override Contact Links Styling */
    .footer_contact_link-block img {
        filter: invert(1) !important;
        /* Invert icons to match dark theme */
    }

    .footer-link_contact {
        color: #ffffff !important;
        /* Light text for contact details */
    }

    .footer-link_contact .text-span {
        color: #bbbbbb !important;
        /* Slightly lighter gray for location details */
    }

    /* Override Logo Styling */
    .footer-brand img {
        filter: brightness(0) invert(1) !important;
        /* Invert logo to match dark background */
    }

    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        right: 30px;
        z-index: 100;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        background: #25d366;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: box-shadow 0.2s;
    }

    .whatsapp-float:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .whatsapp-float img {
        width: 40px;
        height: 40px;
    }


    @media (max-width: 991px) {

        /* Main navbar containers and overlays */
        .navbar-logo-center,
        .navbar-logo-center-container,
        .w-nav,
        .nav-menu-wrapper-three,
        .nav-menu-three,
        .w-nav-menu,
        .navbar_dropdowns_wrapper,
        .navbar_dropdown,
        .w-dropdown-list,
        .navbar_dropdown-list,
        .w-nav-button,
        .menu-button {
            background: #1e1e1e !important;
            background-color: #1e1e1e !important;
            color: #fff !important;
            border: none !important;
            box-shadow: none !important;
        }

        /* All nav links, dropdown links, and buttons */
        .navbar_dropdown_link-item,
        .w-nav-link,
        .w-dropdown-link,
        .secondary-black-outline-cta,
        .secondary-black-cta,
        .,
        .navbar_dropdown-toggle,
        .navbar_dropdown-toggle a {
            color: #fff !important;
            background: transparent !important;
            border-color: #fff !important;
        }

        /* Dropdown arrows/icons */
        .dropdown_arrow,
        .w-icon-nav-menu {
            filter: brightness(0) invert(1) !important;
        }

        /* Hamburger menu icon */
        .w-nav-button,
        .w-icon-nav-menu {
            color: #fff !important;
            fill: #fff !important;
            background: none !important;
        }

        /* Remove unwanted transparency or overlays */
        .w-nav-overlay,
        .w-dropdown-list {
            background: #1e1e1e !important;
            opacity: 1 !important;
        }
    }

    @media (max-width: 991px) {

        .navbar-logo-center,
        .navbar-logo-center-container,
        .navbar-wrapper-three,
        .navbar-brand-three {
            background: #1e1e1e !important;
            background-color: #1e1e1e !important;
        }

    }

    @media (max-width: 991px) {

        .navbar-logo-center-container,
        .navbar-wrapper-three,
        .navbar-brand-three {
            background: #1e1e1e !important;
            min-height: 58px !important;
            padding-top: 3% !important;
            padding-bottom: 5% !important;
            overflow: visible !important;
        }

        .navbar-brand-three {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px !important;
        }
    }

    .submit-button {
        background-color: #FFBF39;
        /* bright yellow */
        color: #000000;
        /* black text */
        border: 2px solid #FFBF39;
        /* yellow border */
        transition: all 0.3s ease;
    }

    .submit-button:hover {
        background-color: #000000;
        /* black bg */
        color: #FFFFFF;
        /* white text */
        border-color: #FFBF39;
        /* yellow border */
    }












    #accordion .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 16px;
        transition: all 0.3s ease;
    }

    #accordion .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    #accordion .card-header {
        background: none;
        border: none;
        padding: 0;
    }

    #accordion .btn-link {
        width: 100%;
        text-align: left;
        color: #1e1e1e;
        text-decoration: none;
        padding: 20px;
        font-weight: 500;
        position: relative;
    }

    #accordion .btn-link:hover,
    #accordion .btn-link:focus {
        color: #FFBF39;
        text-decoration: none;
    }

    #accordion .btn-link:after {
        content: '+';
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        transition: all 0.3s ease;
    }

    #accordion .btn-link[aria-expanded="true"]:after {
        transform: translateY(-50%) rotate(45deg);
        color: #FFBF39;
    }

    #accordion .card-body {
        padding: 0 20px 20px;
        color: #666;
        line-height: 1.6;
    }

    .cta_section {
        background: #f8f9fa;
        padding: 60px 0;
    }

    .cta_wrapper {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .heading-2 {
        /* text-align: center;
            margin-bottom: 40px; */
    }
</style>