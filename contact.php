<?php include 'header.php'; 
// sales@360acpl.com  send email to this email 
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
        $mail->Username   = 'tomarvaishnavi01@gmail.com';           // SMTP username  //sales@360acpl.com  aftr this this is for test purpose
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
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
           
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 mt-5">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0 justify-content-center">
            <!-- Contact Form Start -->
            <div class="col-lg-6 mx-auto contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-5 card" style="box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-4" style="color:#083C7D">Contact <span style="color:#E3242B">US</span></h1>
                    <p class="mb-4 pb-2">
                        At 360 Automation and Controls Pvt. Ltd., we are dedicated to providing comprehensive solutions tailored to your unique needs. Whether you have a question about our services, need assistance with a project, or want to explore partnership opportunities, our team is here to help. Please fill out the form below, and one of our representatives will get back to you shortly.
                    </p>

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
            <!-- Contact Form End -->

            <!-- Google Map Embed Start -->
            <div class="col-lg-6 contact-text py-5 px-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative card p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.506436888452!2d73.76776108239572!3d18.596277537420512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b90016bd11e3%3A0x9690930d7c0dfd9a!2sSonigara%20Landmark!5e0!3m2!1sen!2sin!4v1718271890841!5m2!1sen!2sin" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Google Map Embed End -->
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Contact End -->

<?php include 'footer.php'; ?>

<script>
    // Function to display the success message and hide it after 5 seconds
    if (document.getElementById('successMessage')) {
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000); // Change 5000 to your preferred time in milliseconds
    }
</script>
