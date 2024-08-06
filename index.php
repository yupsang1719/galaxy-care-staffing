<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Care Staffing</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="icon" href="imgs/logoFav-icon.png" type="image/x-icon">
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="home">
        <div class="hero">
            <div class="swiper-container home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('imgs/slider1.jpg');">
                        <h1>Welcome to Galaxy Care Staffing</h1>
                        <p>Supplying experienced health and social care professionals across Southeast England.</p>
                        <a href="#about" class="cta">Learn More</a>
                    </div>
                    <div class="swiper-slide" style="background-image: url('imgs/slider2.jpg');">
                        <h1>Professional Healthcare Services</h1>
                        <p>We pride ourselves in providing excellent care and support.</p>
                        <a href="#employers" class="cta">Our Services</a>
                    </div>
                    <div class="swiper-slide" style="background-image: url('imgs/slider3.jpg');">
                        <h1>Join Our Team</h1>
                        <p>Become part of our growing network of healthcare professionals.</p>
                        <a href="#registration" class="cta">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="about-container">
            <div class="about-text">
                <h2>About Us</h2>
                <p>We have extensive health & social care sector experience and are committed to providing a service. WE PRIDE IN EXCELLENT CARE.
                    Our service is underpinned by quality, value for money and an ability to cater for diverse staffing requirements, no matter how urgent.
                    We invest significant time and money on advertising and recruitment, which enables us to quickly source appropriately matched candidates.
                    We are dedicated to forming long-term relationships with both us valued clients and the care professionals we employ.
                    We work closely with our clients to ensure that we meet all aspects of their staff criteria. We also liaise and update ourselves with key legislation, 
                    policies provided by regulatory bodies such as the Care Quality Commission (CQC), NHS and Skills for Care to ensure that our processes are aligned with 
                    social care policy.
                    Galaxy Care Staffing is a leading supplier of health and social care professionals across Southeast England. We specialise in providing temporary 
                    and permanent staff to the Health and Social Care Sector, and we can respond to our client’s needs at short notice.
                    We have a dedicated team to assist Service Providers and Employment applicants with registering your interest.</p>
            </div>
            <div class="about-image">
                <img src="imgs/about3.png" alt="About Us Image" class="scroll-animate">
            </div>
        </div>
    </section>


    <section id="employers">
    <div class="employers-container">
        <div class="employers-image">
            <img src="imgs/emp.png" alt="Employers Image" class="scroll-animate">
        </div>
        <div class="employers-text">
            <h2>Employers</h2>
            <p>Because the demand for care staff is often last minute and urgent, we provide a 24/7 service. Our service to you does not cease when we’ve met your needs. We focus on building strong relationships and will contact you regularly to discuss ways in which we can continue to assist you with any future requirements. We continually assess each candidate placed with you, seeking your feedback as this will assist us in improving the service we deliver. If any problems should arise, the situation will be investigated immediately and the necessary action taken.</p>
            <h4>Induction and Training</h4>
            <p>All our candidates receive a comprehensive induction, based on regulatory standards laid down by bodies such as Skills for Care and NICE (National Institute for Health and Care Excellence) and the CQC. We also ensure that our staff are inducted and receive training in line with the specific requirements of our Clients. We constantly review the skill requirements of our staff and work with external training providers to provide ongoing training.</p>
            <h4>High Quality Candidates</h4>
            <p>All candidates are interviewed in person and must have at least 12 months care work experience. Our stringent checking process includes Enhanced DBS checks, proof of identification, verification of right to work in UK, full employment history with details of any employment gaps, previous healthcare employment references, skills and training evaluation, and health screening.</p>
        </div>
    </div>
</section>


    <section id="registration">
        <div class="content">
            <h2>Employee Registration</h2>
            <p>Recruitment process: Interviews, vetting checks, compliance training, and onboarding.</p>
        </div>
    </section>

    <section id="staff">
        <div class="content">
            <h2>Staff Area</h2>
            <p>Updates and policies related to employment, including COVID-19 guidelines.</p>
        </div>
    </section>

    <section id="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Phone: (123) 456-7890 | Email: info@galaxystaffing.co.uk | Address: 123 Galaxy Road, SE England</p>
        </div>
    </section>

    <!-- Pop for important news and ads -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-popup" onclick="togglePopup()">&times;</span>
            <h2>Important News</h2>
            <p>This is some important news or an ad that you want to display.</p>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("nav-menu").querySelector("ul");
            var menuIcon = document.querySelector(".menu-icon");
            var closeIcon = document.querySelector(".close-icon");

            if (menu.style.display === "block") {
                menu.style.display = "none";
                menuIcon.style.display = "block";
                closeIcon.style.display = "none";
            } else {
                menu.style.display = "block";
                menuIcon.style.display = "none";
                closeIcon.style.display = "block";
            }
        }
    </script>

    <script>
        function togglePopup() {
            var popup = document.getElementById("popup");
            if (popup.style.display === "flex") {
                popup.style.display = "none";
            } else {
                popup.style.display = "flex";
            }
        }

        // Show popup on every page load
        window.onload = function() {
            setTimeout(togglePopup, 5000); // Show the popup after 5 seconds
        }
    </script>

    <!--JavaScript to handle the intersection observer  -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.scroll-animate');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            elements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>




    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
