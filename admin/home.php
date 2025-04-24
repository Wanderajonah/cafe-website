<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>G5 CAFE</title>
  <link rel="stylesheet" href="project/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header>
    <div class="logo">G5 CAFE<span class="lot" style="color: red; font-size: 54px; border-radius: 50%;">.</span></div>

    <nav>
      <div class="menu-toggle" id="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <ul id="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login2.html">Sigin</a></li>
      </ul>
    </nav>

    <div class="call">
      <span>Call Anytime</span><br/>
      <strong>+256 (7050) 025-14</strong>
    </div>
  </header>

  <section class="slider">
    <!-- Slide 1 -->
    <div class="slide active" style="background-image: url('img/herosection.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="overlay"></div>
      <div class="content">
        <p class="tagline">WELCOME TO G5 INTERTNET CAFE</p>
        <h1>Leading computer and internet agency.</h1>
        <div class="buttons">
          <button class="btn explore">Explore now</button>
          <button class="btn contact">Contact now</button>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide" style="background-image: url('img/room.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="overlay"></div>
      <div class="content">
        <p class="tagline">MODERN COMPUTER LABS</p>
        <h1>Empowering minds with cutting-edge technology</h1>
        <div class="buttons">
          <button class="btn explore">Explore now</button>
          <button class="btn contact">Book us now</button>
        </div>
      </div>
    </div>

    <!-- Slide 3 - We Are Hiring -->
    <div class="slide" style="background-image: url('img/hiring.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="overlay"></div>
      <div class="content">
        <p class="tagline">JOIN OUR TEAM</p>
        <h1>We Are Hiring Talented People!</h1>
        <div class="buttons">
          <button class="btn explore">See Open Roles</button>
          <button class="btn contact">Apply Now</button>
        </div>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="nav-arrows">
      <button id="prev" class="inactive">&#10094;</button>
      <button id="next">&#10095;</button>
    </div>

    <!-- Dots -->
    <div class="dots" id="dots"></div>
  </section>

  <section class="about-section" id="about">
    <div class="about-left">
      <img src="img/about.png" alt="Team working" >
      <div class="experience-box">
        Since 
        <span>2015</span>
      </div>
    </div>

    <div class="about-right">
      <p class="subtitle">// About G5 internet Cafe</p>
      <h2>Internet café experts</h2>
      <p>G5 Internet Cafe was founded in 2015 as a community center for fast internet and a cozy place to work.  It provides up-to-date amenities, friendly personnel, and refreshments to guarantee a successful and pleasurable digital experience.  All ages and backgrounds are welcome in the welcoming community of G5, which guarantees a relaxing and joyful online experience.</p>

      <div class="features">
        <div class="feature-box">
          <img src="img/camera.jpg" width="50px" height="50px">
          <h4>Camaera Installation</h4>
          <p>Duis aute irure dolor simply free in voluptate velit.</p>
        </div>
        <div class="feature-box">
          <img src="img/cafe.png" alt="Best interface" width="50px" height="50px"><br>
          <h4>Best Internet Speeds</h4>
          <p>Duis aute irure dolor simply free in voluptate velit.</p>
        </div>
      </div>

      <a href="#" class="btnabout">Explore now</a>
    </div>
    <div class="vertical-text">CAFE</div>
  </section>

  <section class="services-section">
    <div class="services-header">
      <h1>Our Services</h1>
    </div>

    <div class="services-container">
      <div class="service-box">
        <div class="service-icon">
          <img src="img/fast.png" alt="">
        </div>
        <h3>High Internet Speeds</h3>
        <p>Tincidunt elit magnisi nulla facilisis sagittis maecenas amet ultrices.</p>
      </div>
      <div class="service-box active">
        <div class="service-icon">
          <img src="img/online-booking.png" alt="">
        </div>
        <h3>Space Booking</h3>
        <p>Tincidunt elit magnisi nulla facilisis sagittis maecenas amet ultrices.</p>
        <div class="text-end mb-0 " style="display: flex; justify-content: center; align-items: center;">
          <button class="btn " data-bs-toggle="modal" data-bs-target="#bookingModal">
              <i class="fas fa-plus-circle me-1"></i> Book Now
          </button>
      </div>
      </div>
      <div class="service-box">
        <div class="service-icon">
          <img src="img/teacher.png" alt="">
        </div>
        <h3>Computer Lessons</h3>
        <p>Tincidunt elit magnisi nulla facilisis sagittis maecenas amet ultrices.</p>
      </div>
      <div class="service-box">
        <div class="service-icon">
          <img src="img/cctv.png" alt="">
        </div>
        <h3>Camera Installation</h3>
        <p>Tincidunt elit magnisi nulla facilisis sagittis maecenas amet ultrices.</p>
      </div>
    </div>
  </section>

<section class="jobad">
<div class="job-slider-container">
  <div class="job-slider-header">
    Job Opportunities <span>NEW</span>
  </div>
  <div class="job-slider">
    <div class="job-slide active">
      <h2>Now Hiring: Manager</h2>
      <img src="img/management.png" alt="Manager Icon">
      <p>Lead and manage operations, drive growth, and oversee team performance.</p>
      <button class="btn jobbtn" onclick="openPopup()">Apply Now</button>
    </div>
    <div class="job-slide">
      <h2>Now Hiring: System Administrator</h2>
      <img src="img/system-administration.png" alt="">
      <p>Maintain IT infrastructure, ensure security, and optimize systems performance.</p>
      <button class="btn jobbtn" onclick="openPopup()">Apply Now</button>
    </div>
    <div class="job-slide">
      <h2>Now Hiring: Lab Technician</h2>
      <img src="img/platform.png" alt="">
      <p>Conduct lab tests, maintain equipment, and support scientific research activities.</p>
      <button class="btn jobbtn"  onclick="openPopup()">Apply Now</button>
    </div>
    <div class="job-slide">
      <h2>Now Hiring: HR</h2>
      <img src="img/idea.png" alt="">
      <p>Manage recruitment, employee relations, and foster a productive workplace.</p>
      <button class="btn jobbtn" onclick="openPopup()">Apply Now</button>
    </div>
  </div>
  <div class="job-slider-dots">
    <div class="job-dot active" onclick="showSlide(0)"></div>
    <div class="job-dot" onclick="showSlide(1)"></div>
    <div class="job-dot" onclick="showSlide(2)"></div>
    <div class="job-dot" onclick="showSlide(3)"></div>
  </div>
</div>
</section>

  <section class="testimonials">
    <h1>Our Happy Clients</h1>
    <div class="jobrow">
      <div class="col">
        <img src="img/jonah.jpeg" alt="">
        <div>
        <p>“G5 Cafe has been a game-changer for my business. The high-speed internet and professional environment have helped me work efficiently.”</p>
        <h3>Wandera Jonah</h3>
        </div>
       
      </div>

      <div class="col">
       <img src="img/sophia.jpeg" alt="">
        <div>
          <p>“I love the atmosphere at G5 Cafe! The staff is friendly, and the services are top-notch. Highly recommend!”</p> 
           <h3>Sophia Shantel</h3>
      </div>
    </div>
    </div>
  </section>
  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Our Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="clientName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="clientName" placeholder="Enter your name">
                        </div>
                        <div class="col-md-6">
                            <label for="orgName" class="form-label">Organization/School Name</label>
                            <input type="text" class="form-control" id="orgName" placeholder="Optional">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="bookingType" class="form-label">Select Service</label>
                        <select class="form-select" id="bookingType">
                            <option selected disabled>Select service type</option>
                            <option>Hackathon Lab</option>
                            <option>School Lab Session</option>
                            <option>Private Computer Use</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">Preferred Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="col-md-6">
                            <label for="time" class="form-label">Preferred Time</label>
                            <input type="time" class="form-control" id="time">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="participants" class="form-label">Number of Participants</label>
                        <input type="number" class="form-control" id="participants" placeholder="e.g. 30">
                    </div>

                    <div class="mb-3">
                        <label for="requirements" class="form-label">Special Requirements</label>
                        <textarea class="form-control" id="requirements" rows="3" placeholder="Projector, high-speed internet, etc."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
  <div id="popupOverlay" style="position: fixed; top: 0; left: 0; height: 100vh; width: 100vw; background: rgba(0, 0, 0, 0.5); display: none; justify-content: center; align-items: center; z-index: 999;">
    <div class="popup" style="background: #ffffff; width: 75vw; max-width: 900px; max-height: 90vh; border-radius: 10px; padding: 30px; overflow-y: auto; position: relative; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);">
      <button onclick="closePopup()" style="position: absolute; top: 15px; right: 20px; font-size: 26px; cursor: pointer; background: none; border: none; color: #666;">×</button>
      <form id="jobApplicationForm"  action="code.php" method="post">
  
        <div class="form-section" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 30px; background-color: #fafafa;">
          <h2 style="margin-top: 0; margin-bottom: 30px; font-size: 22px; border-bottom: 2px solid #007bff; padding-bottom: 10px; color: #333;">Personal Information</h2>
  
          <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="firstName" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">First name*</label>
              <input type="text" name="firstName" id="firstName" required style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="lastName" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">Last name*</label>
              <input type="text" id="lastName" required style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
          </div>
  
          <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="email" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">Email*</label>
              <input type="email" id="email" required style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="confirmEmail" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">Confirm Email*</label>
              <input type="email" id="confirmEmail" required style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
          </div>
  
          <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="city" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">City</label>
              <input type="text" id="city" style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
            <div style="flex: 1 1 48%; min-width: 250px;">
              <label for="phone" style="font-weight: 600; margin-bottom: 6px; display: block; color: #333;">Phone Number*</label>
              <input type="text" id="phone" required style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>
          </div>
        </div>
        <div style="margin-top: 40px;">
          <h3 style="color: #333;">Your Profiles</h3>
          <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 10px;">
            <div style="flex: 1 1 48%; min-width: 250px;"><label for="linkedin">LinkedIn</label><input id="linkedin" type="text" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;"></div>
            <div style="flex: 1 1 48%; min-width: 250px;"><label for="facebook">Facebook</label><input id="facebook" type="text" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;"></div>
            <div style="flex: 1 1 48%; min-width: 250px;"><label for="twitter">X (Twitter)</label><input id="twitter" type="text" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;"></div>
            <div style="flex: 1 1 48%; min-width: 250px;"><label for="website">Website</label><input id="website" type="text" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px;"></div>
          </div>
        </div>
  
        <div style="margin-top: 40px;">
          <h3 style="color: #333;">Resume</h3>
          <label for="resumeUpload" style="display: block; border: 2px dashed #ccc; padding: 30px; text-align: center; background-color: #f9f9f9; color: #555; border-radius: 8px; cursor: pointer;">Click to upload your resume</label>
          <input type="file" id="resumeUpload" style="display: none;">
        </div>
  
        <div style="margin-top: 40px;">
          <h3 style="color: #333;">Message to the Hiring Team</h3>
          <textarea rows="4" placeholder="Let the company know about your interest..." style="width: 100%; padding: 12px 14px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px; margin-top: 10px;"></textarea>
        </div>
  
        <button type="submit" style="display: block; width: 100%; padding: 14px; background: #007bff; color: white; font-size: 16px; font-weight: bold; border: none; border-radius: 8px; cursor: pointer; margin-top: 30px;">Submit</button>
      </form>
    </div>
  </div>






    <footer>
    <div class="footer-container">
      <!-- First Row -->
      <div class="footer-row">
        <div class="subscribe">
          <div class="subscribe-left">
            <i class="fa-thin fa-envelope"></i>
            <strong><p>Subscribe now to get<br>latest updates</p></strong>
          </div>
          <div class="subscribe-right">
            <input type="email" placeholder="Email address" /> 
            
            <button><span><i class="fa-solid fa-paper-plane"></i></span></button>
          </div>
        </div>
      </div>

      <!-- Second Row -->
      <div class="footer-row footer-columns">
        <div class="footer-column">
          <h4><span style="color: #00bfffed; font-weight: bold;">G5 CAFE</span></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
          <div class="footer-social">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-pinterest"></i>
            <i class="fab fa-instagram"></i> 
          </div>
        </div>

        <div class="footer-column">
          <h4>Explore</h4>
          <ul>
            <li><a href="#">About company</a></li>
            <li><a href="#">Meet the team</a></li>
            <li><a href="#">News & media</a></li>
            <li><a href="#">Our projects</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h4>Portfolio</h4>
          <div class="portfolio-imgs">
            <img src="img/camera installation.jpg" alt="">
            <img src="img/freepik__adjust__24016.png" alt="">
            <img src="img/job application.jpg" alt="">
            <img src="img/computer lessons.jpg" alt="">
            <img src="img/hiring.jpg" alt="">
            <img src="img/internet.jpg" alt="">
          </div>
        </div>

        <div class="footer-column">
          <h4>Contact</h4>
          <p>Kampala
            <br>Luwum Street<br>Uganda</p>
          <p><i class="fas fa-envelope"></i> needhelp@g5cafe.com</p>
          <p><i class="fas fa-phone"></i> +256 705-002514</p>
        </div>
      </div>

      <div class="footer-bottom">
        &copy; Copyright 2025 by g5cafe.com
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
</body>
</html>
