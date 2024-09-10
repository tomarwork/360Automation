<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Page</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <h1>Careers at <span>Company Name</span></h1>
      <p>Join our team and work on innovative projects globally.</p>
    </div>
  </header>

  <!-- Company Overview Section -->
  <section class="company-overview">
    <div class="container">
      <h2>Why Choose Us?</h2>
      <div class="overview-grid">
        <div class="overview-item">
          <i class="fas fa-globe"></i>
          <h3>Global Presence</h3>
          <p>We operate in multiple countries, giving you the chance to work globally.</p>
        </div>
        <div class="overview-item">
          <i class="fas fa-lightbulb"></i>
          <h3>Innovative Projects</h3>
          <p>Work on cutting-edge technology and solutions that shape the future.</p>
        </div>
        <div class="overview-item">
          <i class="fas fa-briefcase"></i>
          <h3>Professional Growth</h3>
          <p>Opportunities for career advancement and skill development.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits">
    <div class="container">
      <h2>Benefits & Growth Opportunities</h2>
      <div class="benefits-grid">
        <div class="benefit-item">
          <i class="fas fa-plane"></i>
          <h3>Global Opportunities</h3>
          <p>Expand your career on an international level.</p>
        </div>
        <div class="benefit-item">
          <i class="fas fa-chart-line"></i>
          <h3>Career Development</h3>
          <p>Access to workshops, mentoring, and promotions.</p>
        </div>
        <div class="benefit-item">
          <i class="fas fa-heart"></i>
          <h3>Health & Wellness</h3>
          <p>Comprehensive healthcare and wellness programs.</p>
        </div>
        <div class="benefit-item">
          <i class="fas fa-dollar-sign"></i>
          <h3>Competitive Salary</h3>
          <p>We offer market-leading salaries and bonuses.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Job Listings Section -->
  <section class="job-listings">
    <div class="container">
      <h2>Open Positions</h2>
      <div class="job">
        <h3>Software Developer</h3>
        <p>Location: New York, USA | Department: IT</p>
        <button class="apply-btn">Apply Now</button>
      </div>
      <div class="job">
        <h3>Project Manager</h3>
        <p>Location: London, UK | Department: Operations</p>
        <button class="apply-btn">Apply Now</button>
      </div>
      <!-- Add more job listings as needed -->
    </div>
  </section>

  <!-- Application Form Section -->
  <section class="application-form">
    <div class="container">
      <h2>Apply Now</h2>
      <form id="applyForm">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="file" name="resume" required>
        <button type="submit">Submit Application</button>
      </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Company Name. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
<style>
    /* Basic Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #333;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

h1, h2, h3 {
  color: #003366;
  margin-bottom: 10px;
}

/* Header */
.header {
  background: #003366;
  color: #fff;
  padding: 50px 0;
  text-align: center;
}

.header h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.header p {
  font-size: 1.2rem;
}

.header span {
  color: #ff6600;
}

/* Company Overview */
.company-overview {
  padding: 50px 0;
  background: #f4f4f4;
}

.company-overview h2 {
  text-align: center;
  margin-bottom: 30px;
}

.overview-grid {
  display: flex;
  justify-content: space-around;
}

.overview-item {
  text-align: center;
}

.overview-item i {
  font-size: 3rem;
  color: #ff6600;
  margin-bottom: 10px;
}

/* Benefits */
.benefits {
  padding: 50px 0;
}

.benefits h2 {
  text-align: center;
  margin-bottom: 30px;
}

.benefits-grid {
  display: flex;
  justify-content: space-around;
}

.benefit-item {
  text-align: center;
}

.benefit-item i {
  font-size: 3rem;
  color: #ff6600;
  margin-bottom: 10px;
}

/* Job Listings */
.job-listings {
  padding: 50px 0;
  background: #f4f4f4;
}

.job-listings h2 {
  text-align: center;
  margin-bottom: 30px;
}

.job {
  background: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  margin: 10px 0;
}

.apply-btn {
  background-color: #ff6600;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

.apply-btn:hover {
  background-color: #e55c00;
}

/* Application Form */
.application-form {
  padding: 50px 0;
}

.application-form h2 {
  text-align: center;
  margin-bottom: 30px;
}

.application-form form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.application-form input {
  padding: 10px;
  margin: 10px 0;
  width: 100%;
  max-width: 400px;
  border: 1px solid #ddd;
}

.application-form button {
  background-color: #ff6600;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

.application-form button:hover {
  background-color: #e55c00;
}

/* Footer */
footer {
  background: #003366;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}

footer p {
  margin: 0;
}

</style>
<script>
    // Form Submission Handler
const form = document.getElementById('applyForm');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  // Add form submission logic (e.g., AJAX or form submission to the backend)
  alert('Application Submitted Successfully!');
});

</script>