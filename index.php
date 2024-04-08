<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Security</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <div id="contactFormResponse" >
      <div id="contactFormResponseCont" <?php if(isset($_GET["success"])|| isset($_GET["error"])){
        $class = 'class = "show';
        if(isset($_GET["success"])){
          echo $class.' greenResponse"';
        }else if(isset($_GET["error"])||$_GET["error"] == 1 || $_GET["error"] == 2){
          echo $class.' redResponse"';
        }
      
    }
      
      ?>>
        <p>
        <?php
        if (isset($_GET["success"]) && $_GET["success"] == 1) {
          echo "The message was sent successfully we will get back to you soon.";
        }else if (isset($_GET["error"]) && $_GET["error"] == 1) {
          echo "Fill all the fields of the form to submit.";
        }else if (isset($_GET["error"]) && $_GET["error"] == 2) {
          echo "Error submitting form, Try again.";
        }
        ?>
      </p>
      <a href="./index.php" id="removeResponse">X</a>
      </div>
      
    </div>
    <div id="mobileNavLinkPage">
        <ul id="mobileNavLinks">
            <li><a href="#">Features</a></li>
            <li><a href="#">Benefits</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Testimonials</a></li>
        </ul>
    </div>
    <nav id="navBar">
      <div id="leftNav">
        <div id="LogoImg">
          <img src="./Images/Logo White.png" alt="Logo Image" />
        </div>
        <div id="LogoText">
          <h3>UploadSecurity</h3>
        </div>
      </div>
      <div id="rightNav">
        <div>
          <ul id="navLinks">
            <li><a href="#">Features</a></li>
            <li><a href="#">Benefits</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Testimonials</a></li>
          </ul>
        </div>
        <div>
          <button class="whiteBtn purpleShadow">Contact Us</button>
        </div>
      </div>
    </nav>
    <nav id="mobileNav">
        <div id="leftNav">
            <div id="LogoImg">
              <img src="./Images/Logo White.png" alt="Logo Image" />
            </div>
            <div id="LogoText">
              <h3>UploadSecurity</h3>
            </div>
          </div>
          <div class="burger-menu" id="burger-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          
    </nav>
    <section id="hero">
    <div id="heroCont">
        <div class="heroBox">
            <h1 id="heroTitle">
              Data Not Safe?<span class="greenText">Let's Find Out</span>
            </h1>
            <p id="heroText">
              Our unique team of cyber security professionals are ready to show you
              the way.
            </p>
            <div id="heroBtn">
              <button class="blackBtn purpleShadow">Learn More</button>
              <button class="whiteBtn purpleShadow">Contact Us</button>
            </div>
          </div>
          <div class="heroBox">
            <div id="dataSecurity">
              <div id="innerBox">
                <img id="chartImg" src="./Images/chart.png" alt="" />
                <img id="folderImg" src="./Images/folder.png" alt="" />
                <img
                  id="shieldAndLockImg"
                  src="./Images/lockAndShield.png"
                  alt=""
                />
                <img id="fingerPrintImg" src="./Images/fingerPrint.png" alt="" />
                <img id="cardImg" src="./Images/card.png" alt="" />
              </div>
              <img id="backgroundCode" src="./Images/backgroundCode.png" alt="" />
              <img id="bg-circle"src="./Images/background circle trace.png" alt="">
            </div>
          </div>
    </div>
    </section>
    <section id="features">
      <h1 id="featureTitle">Title of Features Section</h1>
      <p id="featureText">One liner with a very short subtitle</p>
      <div id="featureBoxCont">
        <div class="featureBox purpleShadow">
          <div class="featureBoxImage">
            <img src="./Images/Frame 10.png" alt="" />
          </div>
          <div class="featureBoxText">
            <h3>The First Feature</h3>
            <p>
              A short summery about the first feature should be only three lines
              at the most.
            </p>
          </div>
        </div>
        <div class="featureBox purpleShadow">
          <div class="featureBoxImage">
            <img src="./Images/Frame 10.png" alt="" />
          </div>
          <div class="featureBoxText">
            <h3>The Second Feature</h3>
            <p>
              A short summery about the first feature should be only three lines
              at the most.
            </p>
          </div>
        </div>
        <div class="featureBox purpleShadow">
          <div class="featureBoxImage">
            <img src="./Images/Frame 10.png" alt="" />
          </div>
          <div class="featureBoxText">
            <h3>The Third Feature</h3>
            <p>
              A short summery about the first feature should be only three lines
              at the most.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="benefits">
      <div id="benefitsCont">
        <div id="benefitsLeft">
            <h1>
              What You <span id="oneLine"><span class="greenText">Benefit</span> From</span> Working With us
            </h1>
            <img id="wireImg"
              src="./Images/Circuit-vector-illustration-Graphics-22175133-1-580x387 1.png"
              alt=""
            />
          </div>
          <div id="benefitsRight">
            <div class="benefitListItem">
              <h1 class="benefitListItemNo">1</h1>
              <div class="benefitListItemText">
                <h3>The First Benefit Title</h3>
                <p>
                  A short summery about the first benefit should be only two line at
                  the most.
                </p>
              </div>
            </div>
            <div class="benefitListItem">
              <h1 class="benefitListItemNo">2</h1>
              <div class="benefitListItemText">
                <h3>The Second Benefit Title</h3>
                <p>
                  A short summery about the first benefit should be only two line at
                  the most.
                </p>
              </div>
            </div>
            <div class="benefitListItem">
              <h1 class="benefitListItemNo">3</h1>
              <div class="benefitListItemText">
                <h3>The Third Benefit Title</h3>
                <p>
                  A short summery about the first benefit should be only two line at
                  the most.
                </p>
              </div>
            </div>
            <div class="benefitListItem">
              <h1 class="benefitListItemNo">4</h1>
              <div class="benefitListItemText">
                <h3>The Fourth Benefit Title</h3>
                <p>
                  A short summery about the first benefit should be only two line at
                  the most.
                </p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section id="services">
      <div id="servicesCont">
        <div class="serviceCardContainer">
            <div class="serviceCard" id="SC1">
              <div class="serviceCardImg">
                <img src="./Images/greenDB.png" alt="" />
              </div>
              <div class="serviceCardText">
                <h3>Web Application Penetration Tests</h3>
                <p>
                  Web application penetration testing works by using manual or automated penetration tests to identify any vulnerability, security flaws or threats in a web application. <span class="readMoreBtn">Read More...</span> <span class="moreText">The tests involve using/implementing any of the known malicious penetration attacks on the application. The penetration tester exhibits/fabricates attacks and environment from an attacker’s perspective, such as using SQL injection tests. The web application penetration testing key outcome is to identify security weakness across the entire web application and its components (source code, database, back-end network). It also helps in prioritizing the identified vulnerabilities and threats, and possible ways to mitigate them.</span><span class="readLessBtn">Read Less...</span>
                </p>
              </div>
            </div>
            <span id="bgShield"><img src="./Images/backgroundSheild.png" alt=""></span>
          </div>
          <div class="serviceCardContainer">
            <div class="serviceCard" id="SC2">
              <div class="serviceCardImg">
                <img src="./Images/greenDB.png" alt="" />
              </div>
              <div class="serviceCardText">
                <h3>Penetration testing</h3>
                <p>
                  Penetration testing (or pen testing) is a security exercise where a cyber-security expert attempts to find and exploit vulnerabilities in a computer system. <span class="readMoreBtn">Read More...</span> <span class="moreText">The purpose of this simulated attack is to identify any weak spots in a system’s defenses which attackers could take advantage of. This is like a bank hiring someone to dress as a burglar and try to break into their building and gain access to the vault. If the ‘burglar’ succeeds and gets into the bank or the vault, the bank will gain valuable information on how they need to tighten their security measures.</span><span class="readLessBtn">Read Less...</span> 
                </p>
              </div>
            </div>
          </div>
          <div class="serviceCardContainer">
            <div class="serviceCard" id="SC3">
              <div class="serviceCardImg">
                <img src="./Images/greenDB.png" alt="" />
              </div>
              <div class="serviceCardText">
                <h3>Physical Penetration test</h3>
                <p>
                  Physical penetration testing simulates a real-world threat scenario where a malicious actor attempts to compromise a business’s physical barriers to gain <span class="readMoreBtn">Read More...</span> <span class="moreText">access to infrastructure, buildings, systems, and employees. The goal of a physical penetration test is to expose weaknesses in a businesses’ overall physical defenses. Through identifying these weaknesses proper mitigations can be put in place to strengthen the physical security posture.</span><span class="readLessBtn">Read Less...</span> 
                </p>
              </div>
            </div>
            <span id="bgLock"><img src="./Images/backgroundLock.png" alt=""></span>
          </div>
          <div class="serviceCardContainer">
            <div class="serviceCard" id="SC4">
              <div class="serviceCardImg">
                <img src="./Images/greenDB.png" alt="" />
              </div>
              <div class="serviceCardText">
                <h3>Online Classes</h3>
                <p>
                  Online cybersecurity courses provide practical training to
                  identify and counter digital threats, strengthening skills and
                  defenses effectively. <a href="https://www.udemy.com/user/richard-fulton-8/"><u>Learn More...</u></a>
                </p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section id="testimonials">
      <h1>Let Our Customers Vouch For Us</h1>
      <div id="testimonialCardCont">
        <div class="testimonialCard">
          <h3>Customer Name</h3>
          <p>
            the customer testimony goes here, it can be as long as it has to be
            just try to keep it short and easy to read not too long people don’t
            read it.
          </p>
          <span class="customerRating">
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
          </span>
        </div>
        <div class="testimonialCard">
          <h3>Customer Name</h3>
          <p>
            the customer testimony goes here, it can be as long as it has to be
            just try to keep it short and easy to read not too long people don’t
            read it.
          </p>
          <span class="customerRating">
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
          </span>
        </div>
        <div class="testimonialCard">
          <h3>Customer Name</h3>
          <p>
            the customer testimony goes here, it can be as long as it has to be
            just try to keep it short and easy to read not too long people don’t
            read it.
          </p>
          <span class="customerRating">
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
            <img src="./Images/Star 5.png" alt="" />
          </span>
        </div>
      </div>
    </section>
    <section id="contact">
      <div id="contactCard">
        <form action="./contact.php" method="post" id="contactCardinner">
          <h2>Contact Us</h2>
          <div class="contactCardFirstField">
            <div>
              <label for="name">Name</label>
              <input type="text" name="name" class="whiteShadow" />
            </div>
            <div>
              <label for="company">Company</label>
              <input type="text" name="company" class="whiteShadow" />
            </div>
          </div>
          <div class="contactCardField">
            <label for="email">Email</label>
            <input type="email" name="email" class="whiteShadow" />
          </div>
          <div class="contactCardField">
            <label for="needs">Describe your needs..</label>
            <textarea
              name="needs"
              id=""
              cols="30"
              rows="10"
              class="whiteShadow"
            ></textarea>
          </div>
          <div class="contactCardField">
            <button type="submit" class="whiteBtn purpleShadow">Get in Touch</button>
          </div>
        </form>
      </div>
    </section>
    <section id="footer">
      <div id="footerCont">
        <div id="aboutUs">
          <h1>About Us</h1>
          <p id="aboutText">
            Our adept cyber security team, boasting a decade of collective
            experience spanning IoT to car hacking, is poised to guide you.
            Versatile and adept, we adapt swiftly to address your security
            concerns, leaving no challenge unmet.
          </p>
          <div id="aboutContact">
            <p>email@gmail.com</p>
            <p>+99 79 4565 5656</p>
          </div>
          <div id="youtube">
            <p>Subscribe to our YouTube channel</p>
            <img src="./Images/youtube_activity.png" alt="" />
          </div>
        </div>
        <div id="menu">
          <h1>Menu</h1>
          <ul>
            <li>Features</li>
            <li>Benefits</li>
            <li>Services</li>
            <li>Testimonials</li>
            <li>Contact Us</li>
          </ul>
        </div>
        <div id="subscribe">
          <h1>Subscribe to our NewsLetter</h1>
          <div class="subscribeEmail">
            <label for="contactEmail">Email Address</label>
            <input type="email" name="contactEmail" />
            <button class="whiteBtn" id="subBtn">Subscribe</button>
          </div>
        </div>
      </div>
    </section>
    <div id="BC1"></div>
    <div id="BC2"></div>
    <div id="BC3"></div>
    <div id="BC4"></div>
    <div id="BC5"></div>
    <div id="BC6"></div>
    <div id="BC7"></div>
    <div id="BC8"></div>
    <img  id="BC9" src="./Images/Ellipse 1.png" alt="">
  </body>
  <script src="script.js"></script>
</html>
