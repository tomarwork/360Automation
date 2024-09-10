<?php include 'header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">CAREERS</h1>
        <nav aria-label="breadcrumb animated slideInDown">

        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Company Overview Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <h1 class="display-5 mb-4 " style="color:#083C7D">Choose the <span style="color:#E3242B ">Best With US</span></h1>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>At 360 Automation and Controls Private Limited, we are committed to excellence and innovation. Our team of professionals is dedicated to creating an environment where our employees can thrive and achieve their full potential. Here’s why we stand out:</p>
                At 360 Automation and Controls Private Limited, we are always looking for talented and dedicated individuals to join our team. Explore our current job openings and discover the opportunities that await you.</p>
                <ul>
                    <li>Innovative Projects: Work on cutting-edge technologies and impactful projects.</li>
                    <li>Supportive Culture: Enjoy a collaborative and inclusive workplace.</li>
                    <li>Growth Opportunities: Benefit from continuous learning and professional development.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="img/career1.jpg" class="img-fluid" alt="Company Overview Image">
            </div>
        </div>
    </div>
</div>
<!-- Company Overview End -->

<!-- Benefits & Application Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
            <!-- <h1 class="display-5 mb-5">Benefits & Opportunities</h1> -->
            <h2 class="text-center mb-4" style="color:#083C7D;">Benefits & Opportunities</h2>

        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-globe fa-3x mb-3" style="color:#083C7D"></i>
                <h4 class="mb-3">Global Opportunities</h4>
                <p>Explore career opportunities across our global offices and projects.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-chart-line fa-3x mb-3" style="color:#083C7D"></i>
                <h4 class="mb-3">Career Growth</h4>
                <p>Advance your career with our structured development programs and mentorship.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-cogs fa-3x mb-3" style="color:#083C7D"></i>
                <h4 class="mb-3">Automation & Innovation</h4>
                <p>Leverage cutting-edge automation technologies that simplify tasks and foster a culture of innovation.</p>
            </div>

        </div>
    </div>
</div>


<div class="text-center my-5">
    <button id="startButton" class="btn btn-primary btn-lg">Apply Now</button>
</div>

<!-- Registration Form Start -->
<!-- <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Register to Apply</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="resume" class="form-label">Resume</label>
                                <input type="file" class="form-control" id="resume" accept=".pdf,.doc,.docx">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Registration Form End -->
</div>
</div>
<!-- Benefits & Application End -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
        <h2 class="text-center mb-4" style="color:#083C7D;">What Our Team Says</h2>
        <div class="row text-center">
            <div class="col-md-4 mt-3">
                <div class="testimonial-box">
                    <p>"Working at 360 Automation has been a career-defining experience. The opportunities for growth are endless!"</p>
                    <h5>- PLC Programmer</h5>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="testimonial-box">
                    <p>"The innovative projects here challenge me to think creatively every day. It’s a great place to work!"</p>
                    <h5>-  Project Manager</h5>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="testimonial-box">
                    <p>"At 360 Automation, we are not just building products; we are shaping the future of technology. Every day brings new learning experiences."</p>
                    <h5>-  Automation Engineer</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 ">
    <h2 class="text-center mb-4" style="color:#083C7D;">FAQs</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    What is the hiring process like?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Our hiring process typically includes an online application, followed by an interview and a technical evaluation.
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
<script>
    document.getElementById('startButton').addEventListener('click', function() {
        window.open('https://docs.google.com/forms/d/e/1FAIpQLSfGYCf7t58vWgo_XaCFFLviCvsECIokzelLZ4cs_IqgR4rnpw/viewform?usp=sf_link', '_blank');
    });
</script>
<style>


</style>