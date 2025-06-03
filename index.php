<?php
// Include header
include_once("./frontend_layouts/header.php");
include_once("./database/env.php");
// * Banner Data
$query = "SELECT * FROM banner LIMIT 1"; 
$result = mysqli_query($conn, $query);
$currentBanner = mysqli_fetch_assoc($result);
// * Social Links
$query = "SELECT * FROM social_links";
$res = mysqli_query($conn, $query); 
$links = mysqli_fetch_assoc($res);
?>
<!-- ====== Hero Section Start ====== -->
<section id="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="hero-cnt col-md-6">
        <h4><?= $currentBanner['heading']?> 👋</h4>
        <h1><?= $currentBanner['sub_heading']?></h1>
        <p><?= $currentBanner['details']?></p>
        <a class="btn btn-primary" href="<?= $currentBanner['cta_one_link']?>"><?= $currentBanner['cta_one']?><span><i
              class="fa-regular fa-paper-plane"></i></span></a>
        <a class="btn btn-common" href="<?= $currentBanner['cta_two_link']?>"><?= $currentBanner['cta_two']?><span><i
              class="fa-solid fa-download"></i></span></a>
        <div class="d-none d-lg-block social-media">
          <span>Follow me :</span>
          <?php
            foreach($links as $link) {
              // if ($link) {
              //   $iconClass = '';
              //   switch ($key) {
              //     case 'fb_url':
              //       $iconClass = 'fa-facebook';
              //       break;
              //     case 'insta_url':
              //       $iconClass = 'fa-instagram';
              //       break;
              //     case 'github_url':
              //       $iconClass = 'fa-github';
              //       break;
              //     case 'twitter_url':
              //       $iconClass = 'fa-twitter';
              //       break;
              //     case 'tiktok_url':
              //       $iconClass = 'fa-tiktok';
              //       break;
              //     case 'telegram_url':
              //       $iconClass = 'fa-telegram';
              //       break;
              //     case 'linkedin_url':
              //       $iconClass = 'fa-linkedin';
              //       break;
              //   }
              //   echo "<a href='$link'><span><i class='fa-brands $iconClass'></i></span></a>";
              // }
              ?>

          <?php
            }
            ?>
          <a href="<?= $links['fb_url'] ?? null ?>"><span><i class="fa-brands fa-facebook-f"></i></span></a>
          <a href="<?= $links['twitter_url'] ?? null ?>"><span><i class="fa-brands fa-twitter"></i></span></a>
          <a href="<?= $links['insta_url'] ?? null ?>"><span><i class="fa-brands fa-instagram"></i></span></a>
          <a href="<?= $links['github_url'] ?? null ?>"><span><i class="fa-brands fa-github"></i></span></a>
        </div>
      </div>
      <div class="hero-img col-md-6">
        <img class="img-fluid" src="<?= $currentBanner['featured_img']?>" alt="Hero Image">
      </div>
      <div class="d-lg-none social-media">
        <span>Follow me :</span>
        <a href="<?= $links['fb_url'] ?? null ?>"><span><i class="fa-brands fa-facebook-f"></i></span></a>
        <a href="<?= $links['twitter_url'] ?? null ?>"><span><i class="fa-brands fa-twitter"></i></span></a>
        <a href="<?= $links['insta_url'] ?? null ?>"><span><i class="fa-brands fa-instagram"></i></span></a>
        <a href="<?= $links['github_url'] ?? null ?>"><span><i class="fa-brands fa-github"></i></span></a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- ====== Hero Section End ====== -->
<!-- ====== About Section Start ====== -->
<section id="about-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="about-img col-lg-6 d-none d-lg-block">
        <img class="img-fluid" src="./img/Group 211.png" alt="About Me Image">
      </div>
      <div class="about-cnt col-md-6">
        <h2>About Me</h2>
        <p>
          With 10 yevvars experience as a professional Web developer, I have acquired the skills and knowledge
          necessary to make
          your project a success. I enjoy every step of the design process, from discussion and collaboration.
        </p>
        <a class="btn btn-common" href="#">Learn More</a>
      </div>
      <div class="about-img col-md-6 d-block d-lg-none">
        <img class="img-fluid" src="./img/Group 211.png" alt="About Me Image">
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End ====== -->
<!-- ====== Project Section Start ====== -->
<section id="project-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="card card-custom text-center p-4">
          <img class="text-align-center" src="./img/Frame.png" alt="">
          <h4>Pixel Perfect</h4>
          <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card card-custom text-center p-4">
          <img src="./img/Frame (1).png" alt="">
          <h4>High Quality</h4>
          <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.
          </p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card card-custom text-center p-4">
          <img src="./img/Frame (2).png" alt="">
          <h4>Awesome Idea</h4>
          <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Project Section End ====== -->
<!-- ====== Blog Section Start ====== -->
<section id="blog-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="blog-img col-md-6 d-none d-lg-block">
        <img class="img-fluid" src="./img/206.png" alt="">
      </div>
      <div class="blog-cnt col-md-6">
        <h2>Branding</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet ornare id faucibus nunc fusce tellus
          scelerisque
          adipiscing lorem. Mollis tortor, mattis urna imperdiet.
        </p>
        <a class="btn btn-common" href="#">See Project</a>
      </div>
      <div class="blog-img col-md-6 d-block d-lg-none">
        <img class="img-fluid" src="./img/206.png" alt="">
      </div>
    </div>
  </div>
</section>
<!-- ====== Blog Section End ====== -->
<!-- ====== My-Work Section Start ====== -->
<section id="my-work-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="">
          <div class="work-card">
            <div class="row">
              <div class="col-md-3 ">
                <img src="./img/laptop.png" alt="">
              </div>
              <div class="col-md-9 text-start">
                <h5>Website Design</h5>
                <p>712 project</p>
              </div>
            </div>
          </div>
        </a>
        <a href="">
          <div class="work-card my-4">
            <div class="row">
              <div class="col-md-3 ">
                <img src="./img/mobile.png" alt="">
              </div>
              <div class="col-md-9 text-start">
                <h5>Mobile App Design</h5>
                <p>712 project</p>
              </div>
            </div>
          </div>
        </a>

        <div class="work-card">
          <div class="row">
            <div class="col-md-3 ">
              <img src="./img/brandid.png" alt="">
            </div>
            <div class="col-md-9 text-start">
              <h5>Brand Identity</h5>
              <p>712 project</p>
            </div>
          </div>
        </div>

      </div>
      <div class="work-cnt col-md-8 text-end ">
        <h2>What Do I Help?</h2>
        <p>I will help you with finding a solution and solve your problems. We use process desigv n to create digital
          productes.
          Beside that also help their business.</p>
        <ul>
          <li>
            <h4>150+</h4>
            <p>Happy Clients</p>
          </li>
          <li>
            <h4>250+</h4>
            <p>Project Completed</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ====== My-Work Section End ====== -->
<!-- ====== Experience Section Start ====== -->
<section id="experience">
  <div class="container">
    <div class="experience-header col-md-12">
      <h2 class="text-center">My Work Experience</h2>
    </div>
    <div class="timeLine green">
      <div class="row justify-content-between">
        <div class="col-md-3 company-details">
          <h4>Global Solution</h4>
          <p>Sep 2019 - Aug 2020</p>
        </div>
        <div class="col-md-8 exparience-details">
          <h4>Sr. Product Designer</h4>
          <p>A Visual designe design for a varaity of platforms which may includes internat and internet sites, games,
            movies and
            wareable. In short, they create the concept.</p>
        </div>
      </div>
    </div>
    <div class="timeLine red">
      <div class="row justify-content-between">
        <div class="col-md-3 company-details">
          <h4>Global Solution</h4>
          <p>Sep 2019 - Aug 2020</p>
        </div>
        <div class="col-md-8 exparience-details">
          <h4>Sr. Product Designer</h4>
          <p>A Visual designe design for a varaity of platforms which may includes internat and internet sites, games,
            movies and
            wareable. In short, they create the concept.</p>
        </div>
      </div>
    </div>
    <div class="timeLine yellow">
      <div class="row justify-content-between">
        <div class="col-md-3 company-details">
          <h4>Global Solution</h4>
          <p>Sep 2019 - Aug 2020</p>
        </div>
        <div class="col-md-8 exparience-details">
          <h4>Sr. Product Designer</h4>
          <p>A Visual designe design for a varaity of platforms which may includes internat and internet sites, games,
            movies and
            wareable. In short, they create the concept.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Experience Section End ====== -->
<!-- ====== My Expert Areas Start ====== -->
<section id="expert-areas">
  <div class="container">
    <div class="row align-items-baseline">
      <div class="expert-text col-md-8">
        <h2>My Expert Areas</h2>
        <p>You can express yourself however you want and whenever you want, for free. You can customize a template or
          make your own
          from scratch, with an immersive library at your disposal. You can express yourself however you want and
          whenever you
          free.
          <span>You can customize a template or make your own from scratch, with an immersive library at your
            disposal.</span>
        </p>
        <a class="btn btn-common" href="#">Download CV <span><i class="fa-solid fa-download"></i></span></a>
      </div>
      <div class="expert-skil col-md-4">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Skills</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Education</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">

            <div class="progressitem">
              <div class="progresstitle">
                <h3>Figma</h3>
              </div>
              <div class="progressbar">
                <div class="progressresult" style="background-color: #f16500;">
                  <span style="color: #f16500;">85%</span>
                </div>
              </div>
            </div>
            <div class="progressitem">
              <div class="progresstitle">
                <h3>Photoshop</h3>
              </div>
              <div class="progressbar">
                <div class="progressresult" style="background: #03249b; width: 75%;">
                  <span style="color: #03249b;">75%</span>
                </div>
              </div>
            </div>
            <div class="progressitem">
              <div class="progresstitle">
                <h3>XD</h3>
              </div>
              <div class="progressbar">
                <div class="progressresult" style="background: #700d60; width: 80%;">
                  <span style="color: #700d60;">80%</span>
                </div>
              </div>
            </div>
            <div class="progressitem">
              <div class="progresstitle">
                <h3>Illustrator</h3>
              </div>
              <div class="progressbar">
                <div class="progressresult" style="background: #234bda; width: 70%;">
                  <span style="color: #234bda;">70%</span>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            Education
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== My Expert Areas End ====== -->
<!-- ====== My Sevices Section Start ====== -->
<section id="mysevices">
  <div class="container">
    <div class="myservice-heading">
      <h2>My Services</h2>
      <p>Most common methods for designing websites that work well on <br> desktop is responsive and adaptive design
      </p>
    </div>
    <div class="row justify-content-between">
      <div class="myservice-card col-md-4">
        <div class="myservice-img">
          <img src="./img/Group 199.png" alt="">
        </div>
        <h4>UI/UX Design</h4>
        <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the
          user
          experience
          aspects of website development</p>
      </div>
      <div class="myservice-card col-md-4">
        <div class="myservice-img">
          <a href="#"><img src="./img/Frame.png" alt=""></a>
        </div>
        <h4>Creative Design</h4>
        <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the
          user experience
          aspects of website development</p>
      </div>
      <div class="myservice-card col-md-4">
        <div class="myservice-img">
          <img src="./img/Frame (1).png" alt="">
        </div>
        <h4>Web Design</h4>
        <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the
          user
          experience
          aspects of website development</p>
      </div>
    </div>
  </div>
</section>
<!-- ====== My Sevices Section End ====== -->
<!-- ====== Feedback Section Start ====== -->
<section id="feedback">
  <div class="container">
    <div class="feedbackHeading">
      <h2>Valuable feedback
        from my client</h2>
      <p>Most common methods for designing websites that work well on desktop is <span>responsive and adaptive
          design</span></p>
    </div>
    <div class="feedbackCnt">
      <div class="row align-items-center">
        <div class="feedbackImg col-md-5">
          <div>
            <img class="img-fluid" src="./img/Group 203.png" alt="">
          </div>
        </div>
        <div class="feedbackText col-md-7">
          <p>“Awesome website! Easy to use and edit, it has a lot of options to design whatever you need, it is
            professional and fun.
            I was very successful creating my profile using designer which gave me unbelievable reach & appreciation.”
          </p>
          <a href="#">Albert Walkers</a>
          <span>Vivaco Group</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Feedback Section End ====== -->
<!-- ====== My Blog Section Start ====== -->
<section id="myBlog">
  <div class="container">
    <div class="blogHeading">
      <h2>From My Blog Post</h2>
    </div>
    <div class="blogCard">
      <div class="row">
        <div class="col-md-6">
          <div class="blogBox">
            <div class="row">
              <div class="blogImg col-md-6">
                <a href=""><img class="img-fluid" src="./img/7358641 1.png" alt=""></a>
              </div>
              <div class="blogcnt col-md-6">
                <p>02 June, 2022 <span>John Smith</span></p>
                <h6>Diversification of digital marketing stategies</h6>
                <a href="#">Read More <span><i class="fa-solid fa-arrow-turn-up"></i></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blogBox">
            <div class="row">
              <div class="blogImg col-md-6">
                <a href=""><img class="img-fluid" src="./img/Group 196.png" alt=""></a>
              </div>
              <div class="blogcnt col-md-6">
                <p>02 June, 2022 <span>John Smith</span></p>
                <h6>Diversification of digital marketing stategies</h6>
                <a href="#">Read More <span><i class="fa-solid fa-arrow-turn-up"></i></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blogBox">
            <div class="row">
              <div class="blogImg col-md-6">
                <a href=""><img class="img-fluid" src="./img/Group 195.png" alt=""></a>
              </div>
              <div class="blogcnt col-md-6">
                <p>02 June, 2022 <span>John Smith</span></p>
                <h6>Diversification of digital marketing stategies</h6>
                <a href="#">Read More <span><i class="fa-solid fa-arrow-turn-up"></i></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="blogBox">
            <div class="row">
              <div class="blogImg col-md-6">
                <a href="#"><img class="img-fluid" src="./img/Group 197.png " alt=""></a>
              </div>
              <div class="blogcnt col-md-6">
                <p>02 June, 2022 <span>John Smith</span></p>
                <h6>Diversification of digital marketing stategies</h6>
                <a href="#">Read More <span><i class="fa-solid fa-arrow-turn-up"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== My Blog Section End ====== -->
<!-- ====== Contact Section Start ====== -->
<!-- <section id="contact" class="cntact">
    <div class="container">
      <div class="row align-items-center">
        <div class="contactCnt col-md-6">
          <p>Subscribe Now</p>
          <h2>Get My Newsletter</h2>
          <p>Get latest news, updates, tips and trics in your inbox</p>
        </div>
        <div class="contactForm col-md-6">
          <div class="contactBtn">
            <input placeholder="Your email here" type="email" name="" id="email">
            <button type="submit">Send Now</button>
          </div>
        </div>
      </div>
    </div>
  </section> -->
<section id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="contactCnt col-md-6">
        <p class="font-weight-medium">Subscribe Now</p>
        <h1>Get My Newsletter</h1>
        <p>Get latest news, updates, tips and tricks in your inbox</p>
      </div>
      <div class="contactForm col-md-6">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Your email here">
          <div class="input-group-append">
            <button class="btn" type="button">Send Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Cntact Section End ====== -->

<?php
include_once("./frontend_layouts/footer.php");
?>