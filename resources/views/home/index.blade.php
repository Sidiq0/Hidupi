<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hidupi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ Vite::asset('resources/img/icon/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ Vite::asset('resources/img/icon/apple-touch-icon.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/drukaatie-burti" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <!-- AOS CSS -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  @vite('resources/css/style.css')

  <!-- =======================================================
  * Template Name: Knight - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="{{ Vite::asset('resources/img/icon/hero-logo.png') }}" alt=""></a>
      <h1 data-aos="zoom-in">HIDUPI</h1>
      <h2 data-aos="fade-up">Gamify Your Goals, Conquer Your Day</h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Mission</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li><a class="nav-link scrollto" href="#faq">Faq</a></li>
              <li><a  href="#contact">Contact</a></li>

            </ul>


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('login') }}" class="nav-link scrollto" >login</a></li>
            <li><a class="btn btn-primary" href="{{ route('register') }}">Join</a></li>
        </ul>
        </nav>
            <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Hidupi is more than just a to-do list app</p>
              </div>

              <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                  <div class="image">
                    <img src="storage/assets/img/about.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <h3>Hidupi is more than just a to-do list app</h3>
                    <p class="fst-italic">
                        it's your personal productivity playground! We're on a mission to transform how you tackle tasks and
                        achieve your goals.
                    </p>
                    <h3>Hidupi is for You If</h3>
                    <ul>
                      <li><i class="bx bx-check-double"></i> You struggle to stay motivated when facing mundane tasks.</li>
                      <li><i class="bx bx-check-double"></i> You thrive on challenges and a sense of progress.</li>
                      <li><i class="bx bx-check-double"></i> You want to inject some fun into your daily routine.</li>
                      <li><i class="bx bx-check-double"></i> You value a simple, yet effective way to manage your work and personal goals.</li>
                    </ul>
                    <p>Hidupi was born from a simple idea:  What if getting things done could be as exciting as leveling up in your favorite game?
                        We're a team of passionate gamers and productivity enthusiasts who believe that life's goals deserve to be celebrated.
                         We're proud to bring you Hidupi, the app that turns your everyday tasks into an adventure.
                         Get ready to conquer your to-do list, unlock achievements, and discover a more playful, productive you.</p>
                  </div>
                </div>
              </div>

            </div>
        </section><!-- End About Us Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Mission</h2>
          <p>We believe productivity doesn't have to be boring. With Hidupi, we're making it fun</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Boost Your Productivity</h4>
              <p>Track tasks, set deadlines, and visualize your progress in a way that's engaging and motivating</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Gamify Your Life</h4>
              <p>Turn your to-do list into a game with challenges, rewards, and a sense of accomplishment that keeps you coming back for more</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-images"></i>
              <h4>Celebrate Your Wins</h4>
              <p>Earn points, unlock achievements, and see your efforts pay off with tangible recognition</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-shield"></i>
              <h4>Easily Manage Your Data</h4>
              <p>Export your accomplishments to CSV for seamless integration with other tools</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("storage/assets/img/services.jpg");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="quote-icon">
          <i class="bx bxs-quote-right"></i>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                    Hidupi turned my boring to-do list into a game I actually look forward to playing. I'm getting so much more done, and it's actually fun!
                </p>
                <img src="storage/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Budi</h3>
                <h4>Software Engineer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                    I never thought I'd be excited about doing chores, but Hidupi makes it feel like an adventure. I love earning points and seeing my progress!
                </p>
                <img src="storage/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Ayu</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                    Hidupi has completely transformed my productivity. I'm motivated, organized, and actually enjoying the process of achieving my goals.
                </p>
                <img src="storage/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Cinta</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                    This app is a lifesaver for someone like me who loves games. Hidupi makes being productive feel like a fun challenge, and I'm already seeing results.
                </p>
                <img src="storage/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
            <img src="storage/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
            <img src="storage/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
            <img src="storage/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
            <img src="storage/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
            <img src="storage/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="storage/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="storage/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://github.com/Sidiq0"><i class="bi bi-github"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sidiq</h4>
                <span>Chief Executive Officer</span>
                <p>Hi, I'm Sidiq, the creator of Hidupi. I'm passionate about productivity, gamification, and helping people achieve their goals.
                    Want to see what else I'm working on? Check out my <a href="https://github.com/Sidiq0"> Github</a> profile.</p>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Team Section -->

   <!-- ======= Pricing Section =======
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>  End Pricing Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
          </div>

          <ul class="faq-list">

            <li data-aos="fade-up">
              <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What is Hidupi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Hidupi is a productivity app that makes getting things done fun and rewarding. We combine task management with gamification elements like challenges, rewards, and progress tracking to help you stay motivated and achieve your goals.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">How does Hidupi work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Create tasks, set deadlines, and organize them into projects. As you complete tasks, you'll earn points and unlock achievements, making productivity feel like a game.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">What kind of rewards can I earn? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    You can earn virtual rewards like badges, levels, and even customize your app experience.  We're also working on adding real-world rewards and exclusive offers in the future!
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Is Hidupi free? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Yes, Hidupi is free to download and use. We offer optional in-app purchases for additional features and rewards.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Can I use Hidupi for personal and work tasks? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Absolutely! Hidupi is flexible enough to help you manage both your personal to-do list and your work projects.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Is my data safe? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Yes, we take your data privacy seriously. We use secure encryption and follow strict security protocols to protect your information.
              </div>
            </li>

          </ul>

        </div>
      </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="{{ Vite::asset('resources/img/icon/hero-logo.png') }}" alt=""></a>
            <h3 class="footer-title">HIDUPI</h3>
            <p>Become part of a growing community of individuals who are discovering the joy of gamified productivity. Join Hidupi today and start leveling up your life!</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Hidupi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.js"></script>

  @vite('resources/js/validate.js')


  <!-- Template Main JS File -->
  @vite('resources/js/main.js')

</body>

</html>
