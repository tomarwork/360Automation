<?php
include './header.php';
$message = ''; // Initialize the message variable
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include PHPMailer classes
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'tomarvaishnavi01@gmail.com';           // SMTP username
        $mail->Password   = 'rfgj jdam fszo sklp';                  // SMTP password (App Password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
        $mail->Port       = 465;                                    // TCP port to connect to

        // Recipients
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $messageContent = $_POST['message'];

        $mail->setFrom($email, $name);  // Use the sender's email and name from the form
        $mail->addAddress('tomarvaishnavi01@gmail.com');  // Your common email address
        $mail->addReplyTo($email, $name);  // Set the reply-to address as the user's email

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "<p>This email sent from the 360 Automation website contact form.</p>
                            <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong><br>$messageContent</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\n\nMessage:\n$messageContent\n\nThis email was sent from the contact form on your website.";

        $mail->send();
        $message = 'Email has been sent';  // Set success message
    } catch (Exception $e) {
        $message = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/img-3.jpg" alt="">
            <div class="carousel-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <!-- <h1 class="display-3 text-white animated slideInDown mb-4">Enhanced Customer Satisfaction through Cutting-Edge Industrial Automation Technologies.</h1> -->
                            <h1 class="display-3 text-white animated slideInDown mb-4">Expert Industrial Automation Solutions
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">360 Automation and Controls is an Automation, Software, Integration company that can accomplish a solution from your more simple to your more complex needs.</p>
                            <a href="about.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#servies" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/img-2.jpg" alt="">
            <div class="carousel-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h1 class="display-3 text-white animated slideInDown mb-4">Smart and Perfect resolutions for
                                your versatile requirements</h1>
                            <p class="fs-5 text-white mb-4 pb-2">360 Automation and Controls is an Automation, Software, Integration company that can accomplish a solution from your more simple to your more complex needs.</p>
                            <a href="about.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#servies" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/img-1.jpg" alt="">
            <div class="carousel-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h1 class="display-3 text-white animated slideInDown mb-4">Delivering Excellence in Automation</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">360 Automation and Controls is an Automation, Software, Integration company that can accomplish a solution from your more simple to your more complex needs.</p>
                            <a href="about.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#servies" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn " data-wow-delay="0.1s">
                <div class="h-100    rounded p-4 p-xl-5" style="background-color:#083C7D;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px;">
                            <img class="img-fluid red-filter" src="img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h1 class="display-1 mb-0" style="color:white">01</h1>
                    </div>

                    <h5 class="text-white">Industry Digitalization</h5>
                    <hr class="w-25">
                    <span>At 360 Automation and Controls Pvt. Ltd., we are pioneers in industry digitalization, leveraging advanced technologies to transform traditional operations. Our customized digital solutions are designed to significantly enhance efficiency, productivity, and innovation across diverse industrial sectors. We are committed to driving transformative improvements that empower businesses to excel and adapt in an increasingly digital landscape.
                    </span>



                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100 p-4 p-xl-5 rounded" style="background-color:#083C7D;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px; ">
                            <img class="img-fluid red-filter" src="img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h1 class="display-1 mb-0" style="color:white">02</h1>
                    </div>
                    <h5 class="text-white">Programming standard Expertise</h5>
                    <hr class="w-25">
                    <span>At 360 Automation and Controls Pvt. Ltd., we are dedicated to upholding the highest programming standards. Our team of experienced experts ensures that every solution we deliver is not only effective but also reliable, maintainable, and scalable. By adhering to best practices, we guarantee our clients receive top-notch services that stand the test of time.. </span>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100  p-4 p-xl-5 rounded" style="background-color:#083C7D;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h1 class="display-1 mb-0" style="color:white;">03</h1>
                    </div>
                    <h5 class="text-white">24/7 Support</h5>
                    <hr class="w-25">
                    <span>At 360 Automation and Controls Pvt. Ltd., we understand that your business never stops, and neither do we. Our expert team is available around the clock to deliver unparalleled support whenever you need it. With our 24/7 service, you can rely on us to keep your operations running seamlessly, day or night.</span>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->


<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about_img.jpg" style="object-fit: cover;" alt="About Us">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-4" style="color:#083C7D">About <span style="color:#E3242B">Us</span></h1>
                    <p class="mb-4 pb-2" style="color:black">
                        Founded in 2016, 360 Automation and Controls Pvt Ltd is a leader in industrial automation solutions. We specialize in delivering tailored solutions for complex challenges across various industries.
                        <hr>
                        As an engineering, consulting, and system integration company, we excel in addressing the intricate needs of our clients with our multidisciplinary expertise.
                    </p>
                    <div class="row g-4 mb-4 pb-3">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-1.png" alt="Happy Clients Icon">
                                </div>
                                <div class="ms-4">
                                    <h2 class="mb-1" data-toggle="counter-up">234</h2>
                                    <p class="fw-medium text-primary mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-5.png" alt="Projects Done Icon">
                                </div>
                                <div class="ms-4">
                                    <h2 class="mb-1" data-toggle="counter-up">150</h2>
                                    <p class="fw-medium text-primary mb-0">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn rounded-pill py-3 px-5" style="background-color:#083C7D;color:white">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->
</div>

<!-- Service Start -->
<div class="container-xxl py-5" id="services">
    <div class="container">
        <div class="text-center">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-4" style="color:#083C7D">What <span style="color:#E3242B">We Do</span></h1>
        </div>
        <div class="row g-0 service-row">
            <div class="col-md-6 col-lg-4 mt-2 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-6.png" alt="Automation Solutions Icon">
                    </div>
                    <h4 class="mb-3">Automation Solutions</h4>
                    <p class="mb-4">We offer cutting-edge automation services, including PLC, HMI, SCADA, Safety, Robotics, and MES. Our team of over 300 multi-skilled automation engineers ensures robust solutions tailored to your needs.</p>
                    <a class="btn" href="automation.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn mt-2" data-wow-delay="0.5s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-9.png" alt="Design and Engineering Icon">
                    </div>
                    <h4 class="mb-3">Design & Detail Engineering</h4>
                    <p class="mb-4">Our experts excel in Control System Design, drafting, and detail engineering. We provide comprehensive services across plant control systems to ensure seamless operations.</p>
                    <a class="btn" href="design_details.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn mt-2" data-wow-delay="0.7s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-3.png" alt="Digital Factory Solutions Icon">
                    </div>
                    <h4 class="mb-3">Digital Factory Solutions</h4>
                    <p class="mb-4">We drive digital transformation with IT, IoT, IIoT, and Industry 4.0 solutions powered by intelligent devices and smart technologies. Enhance your efficiency, productivity, and innovation.</p>
                    <a class="btn" href="digital_solution.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>
        </div>

        <div class="row g-0 service-row">
            <div class="col-md-6 col-lg-4 mt-2 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-6.png" alt="Installation & Commissioning Icon">
                    </div>
                    <h4 class="mb-3">Installation & Commissioning</h4>
                    <p class="mb-4">We specialize in the installation and commissioning of electrical and mechanical systems, ensuring machines are set up for optimal performance.</p>
                    <a class="btn" href="installation_com.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn mt-2" data-wow-delay="0.5s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-9.png" alt="Software Engineering Icon">
                    </div>
                    <h4 class="mb-3">Software Engineering</h4>
                    <p class="mb-4">We deliver customized IT application development, testing, and integration services, specifically designed to meet the demands of the manufacturing industry.</p>
                    <a class="btn" href="software_eng.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeIn mt-2" data-wow-delay="0.7s">
                <div class="service-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="img/icon/icon-3.png" alt="Panel Manufacturing Icon">
                    </div>
                    <h4 class="mb-3">Panel Manufacturing</h4>
                    <p class="mb-4">We design and manufacture PLC, HMI, Control Desks, APFC, and MCC Panels for a variety of industries, ensuring top-quality and reliable performance.</p>
                    <a class="btn" href="panel_manif.php"><i class="fa fa-arrow-right text-white me-3"></i>Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Service End -->

</div>
<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0 ">
                    <div class="bg-primary mb-3 " style="width: 60px; height: 2px;"></div>


                    <h1 class="display-5 mb-4" style="color:#083C7D">Why <span style="color:#E3242B ">Choose US</span></h1>

                    <p class="mb-4 pb-2">360 Automation and Controls served end user like Tata Motors (India), Mahindra & Mahindra (India), FIAT (India), Mercedes-Benz (India), MG Motors (India), Ford (India), Ford (USA, Thailand, Germany), Jaguar and land Rover (UK, EU), JSW (India) just to mention some of them. 360 Automation and Controls is an Automation, Software, Integration company that can accomplish a solution from your more simple to your more complex needs.
                        Partner with 360 Automation and Controls Pvt. Ltd. for reliable, innovative, and effective automation and integration solutions that drive your success.
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-7.png" alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <p class="text-primary mb-2">Trusted</p>
                                    <h5 class="mb-0">Security</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-10.png" alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <p class="text-primary mb-2">Quality</p>
                                    <h5 class="mb-0">Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <p class="text-primary mb-2">Smart</p>
                                    <h5 class="mb-0">Systems</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                    <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                                </div>
                                <div class="ms-4">
                                    <p class="text-primary mb-2">24/7 Hours</p>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                            </div>
                        </div>



                    </div>
                    <a href="skill_exprt.php" class="btn  rounded-pill py-md-3 px-md-5 mt-5" style="background-color:#083C7D;color:white">Explore More</a>

                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="https://s33007.pcdn.co/wp-content/uploads/2020/11/Robotics-Automation_Cowen-Research-Themes-2021-scaled.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-4 " style="color:#083C7D">Our <span style="color:#E3242B ">Projects</span></h1>


        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Complete Projects</li>
                    <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p1.jpeg" alt="Jaur & land ROver Project">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">Jaguar & Land Rover Project Safety Validation for COMAU, UK </p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2">Jaguar & Land Rover Project Safety Validation for COMAU, UK</p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p1.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p2.jpeg" alt="">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">Ford Project PLC & HMI Development for Level One Robotics & Automation, Thailand
                        </p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2">Ford Project PLC & HMI Development for Level One Robotics & Automation, Thailand

                        </p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p2.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p3.jpeg" alt="">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">JST Project (Process) PLC & HMI, Electrical Engineering for Level One Robotics & Automation, Thailand
                        </p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2"> JST Project (Process) PLC & HMI, Electrical Engineering for Level One Robotics & Automation, Thailand
                        </p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p3.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p4.jpeg" alt="">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">Stillage & Tube Transfer System PLC & HMI Software Development
                        </p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2"> </p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p4.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p5.jpeg" alt="">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">Stillage & Tube Transfer System PLC & HMI Software Development
                        </p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2">Stillage & Tube Transfer System PLC & HMI Software Development
                        </p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p5.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner">
                    <img class="img-fluid w-100" src="img/p6.jpeg" alt="">
                    <div class="text-center p-4">
                        <p class="text-primary mb-2">Ford Project PLC & HMI Development for Level One Robotics & Automation, Thailand</p>
                        <h5 class="lh-base mb-0"></h5>
                    </div>
                    <div class="portfolio-text text-center bg-white p-4">
                        <p class="text-primary mb-2">Ford Project PLC & HMI Development for Level One Robotics & Automation, Thailand
                        </p>
                        <h5 class="lh-base mb-3"></h5>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="img/p6.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href="project.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Projects End -->




<!-- Team Start -->
<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Santosh Gavali</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Anand Dabeer</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- Clients Section Start -->

<div class="container-fluid bg-light pt-5 mb-5">
    <div>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-4" style="color:#083C7D">
                our <span style="color:#E3242B">Clients</span>
            </h1>
        </div>
        <div class="marquee logos ms-3 me-5 mb-5 pb-5">
            <div class="marquee-content">
                <!-- Original logos -->
                <div class="logo-item"><a href="#"><img src="./img/tata.jpeg" alt="Tata"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/mahindra.jpeg" alt="Mahindra"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/force.png" alt="Force"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/merc.jpeg" alt="Mercedes"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/fait.jpeg" alt="Fiat"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/mg.png" alt="MG"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/nexgen.png" alt="Nexgen"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/enve.png" alt="Enve"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/wooshin.png" alt="Wooshin"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/facto.png" alt="Facto"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/sc.png" alt="sc"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/taiki.png" alt="Taiki"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/c_tech.png" alt="C-Tech"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/comali.png" alt="C-Tech"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/land.png" alt="Land"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/irob.png" alt="Irob"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/ol.png" alt="OL"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/chro.png" alt="Chro"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/consulting.png" alt="Consulting"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/bmc.png" alt="BMC"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/kopl.png" alt="KOPL"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/givaudan.png" alt="Givaudan"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/sc.png" alt="sc"></a></div>
                <!-- Duplicate logos for continuous effect -->
                <div class="logo-item"><a href="#"><img src="./img/tata.jpeg" alt="Tata"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/mahindra.jpeg" alt="Mahindra"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/force.png" alt="Force"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/merc.jpeg" alt="Mercedes"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/fait.jpeg" alt="Fiat"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/sc.png" alt="sc"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/mg.png" alt="MG"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/nexgen.png" alt="Nexgen"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/enve.png" alt="Enve"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/wooshin.png" alt="Wooshin"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/land.png" alt="Land"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/facto.png" alt="Facto"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/taiki.png" alt="Taiki"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/c_tech.png" alt="C-Tech"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/comali.png" alt="C-Tech"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/irob.png" alt="Irob"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/ol.png" alt="OL"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/chro.png" alt="Chro"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/consulting.png" alt="Consulting"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/bmc.png" alt="BMC"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/kopl.png" alt="KOPL"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/givaudan.png" alt="Givaudan"></a></div>
                <div class="logo-item"><a href="#"><img src="./img/sc.png" alt="sc"></a></div>
            </div>
        </div>
    </div><!-- end container -->
</div>

<!-- end section -->

<!-- CSS for Marquee -->
<style>
    .marquee {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .marquee-content {
        display: flex;
        animation: marquee 7s linear infinite;
    }

    .marquee-content .logo-item {
        flex: 0 0 auto;
        padding: 0 15px;
    }

    .marquee-content .logo-item img {
        width: 100px;
        /* Set the desired width */
        height: auto;
        /* Maintain aspect ratio */
        max-height: 50px;
        /* Optionally set a max height */
        object-fit: contain;
        /* Ensure the image fits within the specified dimensions */
    }

    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .portfolio-item {
        height: 450px;
        /* Set a fixed height for each portfolio item */
    }

    .portfolio-inner {
        height: 100%;
        /* Ensure the portfolio item uses full height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        /* Hide overflow content */
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .portfolio-inner img {
        height: 300px;
        /* Set a fixed height for all images */
        width: 100%;
        /* Make the image take full width */
        object-fit: cover;
        /* Cover the area without distortion */
    }

    .portfolio-text {
        padding: 15px;
        flex-grow: 1;
        /* Ensures the content takes available space */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .text-center.p-4 {
        padding: 10px;
        /* Adjusted padding for closer alignment */
        flex-grow: 1;
        /* Ensures uniform height for content */
    }

    .d-flex.justify-content-center {
        margin-top: auto;
        /* Ensure buttons are aligned at the bottom */
    }
</style>








<!-- Testimonial Start
    <div class="container-xxl bg-white py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5" style="color:#083C7D">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">“I would like to appreciate your efforts and support, during execution of major automotive program for our end customer. Your team was able to execute the tasks independently and work with our Lead engineer.”.</p>
                    <h4>Client Name</h4>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">We highly appreciate Sarla Team’s support during recent commissioning period. There is incredible peace of mind knowing that your project is in an expert’s hands.</p>
                    <h4>Client Name</h4>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">We highly appreciate Sarla Team’s support during recent commissioning period. There is incredible peace of mind knowing that your project is in an expert’s hands.</p>
                    <h4>Client Name</h4>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
     Testimonial End -->

<!-- contact Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="data:image/jpeg;base64,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" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-4 " style="color:#083C7D">Contact <span style="color:#E3242B ">US</span></h1>


                    <p class="mb-4 pb-2">At 360 Automation and Controls Pvt. Ltd., we are dedicated to providing comprehensive solutions tailored to your unique needs. Whether you have a question about our services, need assistance with a project, or want to explore partnership opportunities, our team is here to help.

                        Please fill out the form below, and one of our representatives will get back to you shortly.</p>
                    <?php if ($message): ?>
                        <div id="successMessage" class="alert alert-success"><?php echo $message; ?></div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- contact End -->

<?php
include './footer.php'
?>
<script>
    // Function to display the success message and hide it after 5 seconds
    if (document.getElementById('successMessage')) {
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000); // Change 5000 to your preferred time in milliseconds
    }
</script>
