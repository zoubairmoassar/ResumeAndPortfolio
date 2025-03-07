<?php

if (isset ($_POST['submit']) ){

    $contact =  $_POST['Name']." ";
    $contact .= $_POST['email']." ";
    $contact .= $_POST['text']."\n";

    $file = fopen("contact.txt", "a+");

    fwrite($file,$contact);

    fclose($file);

    echo "<h2 class='heading margin-top-big'> Thank you i received your request,<br> i will be in touch with you soon</h2>";

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Zoubair Moassar Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55032276-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-55032276-2');
</script>

</head>

<body>
  
<div class="navigation">

    <label class="nav-btn--label" for="menu-toggle">&nbsp;</label>
    <input class="nav-btn--input" type="checkbox" id="menu-toggle" onchange="checkbox();">

    <div class="nav-background">&nbsp;</div>
    
    <div  class="navigation__menu--btn">
      <span class="navigation__menu--btn--lines lines">&nbsp;</span>
      <span class="navigation__menu--btn--lines lines">&nbsp;</span>
      <span class="navigation__menu--btn--lines lines">&nbsp;</span>
    </div>

  <nav class="navigation_list" onclick="collaps();">
    <ul class="nav-list"><a class="nav-links"  href="#about">About</a></ul>
    <ul class="nav-list"><a class="nav-links"  href="#experience">Education</a></ul>
    <ul class="nav-list"><a class="nav-links" href="#experience">Experience</a></ul>
    <ul class="nav-list"><a class="nav-links" href="#skills">Skills</a></ul>
    <ul class="nav-list"><a class="nav-links" href="#portfolio">Portfolio</a></ul>
    <ul class="nav-list"><a class="nav-links" href="#contact">Contact Me</a></ul>
  
  </nav>
</div>

  <section class="header"  id="about">
    <div class="header__banner">
          <div class="header__banner__card">
          
            <div class="header__banner__card--image image1">&nbsp;
            </div>
          
            <div class="header__banner__card--content">
              <!-- <img class="image" src="img.jpg" alt=""> -->
              <h1 class=heading-primary>Zoubair moassar</h1>
              <span class=heading-slogan>Software Developer & Web Designer</span>
              <p class=heading-paragraph>3 years of experience developing and creating websites, windows applications. Also have good experience working with woocommerce and creating plugins for wordpress. </p>
            </div>
        </div>

<div class="header__banner__card header__banner__second">

  <div class="header__banner__card--content header__banner__second--content">
    <!-- <img class="image" src="img.jpg" alt=""> -->
    <table>
      
      <tr>
        <td>Address :</td>
        <td>Js tower Sport city Dubai</td>
      </tr>

      <tr>
        <td>E-mail: </td>
        <td>contact@zoubair.me</td>
      </tr>

      <tr>
        <td>Phone :</td>
        <td>+971 528 95 2861</td>
      </tr>

      <tr>
        <td>Website :</td>
        <td>Zoubair.me</td>
      </tr>
      <tr>
        <td>Nationality :</td>
        <td>Moroccan</td>
      </tr>
      

    </table>
    <div class="header__banner__second__icons">

          <a href="https://ae.linkedin.com/in/zoubair-moassar-49777321a" class="header__banner__second__linkdin icons-container"><svg class="header__banner__second--linkdin icons"><use  xlink:href="images/sprite.svg#icon-linkedin2"></use></svg></a>

      <!-- <div class="header__banner__second__facebook icons-container">
        <svg class="header__banner__second--fb icons"><use  xlink:href="images/sprite.svg#icon-facebook"></use></svg>
      </div> -->

      <a class="header__banner__second__instagram icons-container" href="https://www.instagram.com/zoubair_moassar/">
        <svg class="header__banner__second--insta icons" >
          
          <use xlink:href="images/sprite.svg#icon-instagram"></use><svg>
      </a>
      
      <a href="mailto:contact@zoubair.me" class="header__banner__second--email icons-container"><svg class="header__banner__second--mail icons"><use  xlink:href="images/sprite.svg#icon-envelop"></use></svg>
      </a>
      
      <a href="tel:+971528952861" class="header__banner__second--iphone icons-container">
        <svg class="header__banner__second--iphone icons"><use  xlink:href="images/sprite.svg#icon-phone"></use></svg>
      </a>
      
      <a href="https://wa.me/971528952861" class="header__banner__second--whatsapp icons-container">
        <svg class="header__banner__second--wtsp icons"><use  xlink:href="images/sprite.svg#icon-whatsapp"></use></svg>
      </a>
      
      <a href="https://zoubair.io" class="header__banner__second--wlink icons-container"><svg class="header__banner__second--link icons"><use  xlink:href="images/sprite.svg#icon-link"></use></svg></a>
      
    </div>
  </div>

  <a href="Zoubair-Moassar-resume.pdf" class="btn btn-primary">Download Resumee</a>
</div>
  </div>
</section>

<section class="experience" id="experience">
  <h2 class="heading margin-bottom-small">
    Education & Experience</h2>
  <span class="heading-border margin-bottom-big">&nbsp;</span>
  <div class="timeline">
    
    <div class="education">
      
      <div class="diploma">
        <span class="rectangle rec-left">&nbsp;</span>
        <span class="rectangle-square">2019 - Now</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">Udemy</h2>
          <span class="position margin-bottom-medium">Software engineer</span>
          <p class="position-text">Since the day i started on programming Udemy & stackoverflow become my Friends. I am alwayse learning and developing my skills.</p>
        </div>
      </div>

      <div class="diploma old-education">
        <span class="rectangle rec-left">&nbsp;</span>
        <span class="rectangle-square">2017 - 2019</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">Moulik Groupe</h2>
          <span class="position margin-bottom-medium">Computer Science Diploma</span>
          <p class="position-text">I studied 2 years diploma in computer science i gradute with good skills to start my first job</p>
        </div>
      </div>

      <div class="diploma">
        <span class="rectangle rec-left">&nbsp;</span>
        <span class="rectangle-square">2016</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">High School Degree</h2>
          <span class="position margin-bottom-medium">Science</span>
          <p class="position-text">Here is when my passion for programing start</p>
        </div>
      </div>

      
    </div>
    <div class="timeline-middlle">
      <span class="years y2021">&nbsp;</span>
      <span class="years y2020">&nbsp;</span>
      <span class="years y2019">&nbsp;</span>
      <span class="years y2018">&nbsp;</span>
      <span class="years y2017">&nbsp;</span>
      <span class="years y2016">&nbsp;</span>
    </div>
    <div class="work">

      <div class="diploma">
        <span class="rectangle rec-right">&nbsp;</span>
        <span class="rectangle-square">2021 March till Now</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">Milky Makers</h2>
          <span class="position margin-bottom-medium">Software Developer</span>
          <p class="position-text">i start building Woocommerce api plugins to fully automatize the ordering and the stock management process, which save my team alot of time.</p>
        </div>
      </div>

      <div class="diploma">
        <span class="rectangle rec-right">&nbsp;</span>
        <span class="rectangle-square">2019 - 2021 Feb</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">Tazznir</h2>
          <span class="position margin-bottom-medium">Web Developer & Digital Marketer</span>
          <p class="position-text">I was responsible on creating stores, landing pages and social media ads that convert Sales.</p>
        </div>
      </div>

      <div class="diploma">
        <span class="rectangle rec-right">&nbsp;</span>
        <span class="rectangle-square">2018 - 2019</span>
        <div class="diploma-content">
          <h2 class="heading-secondary margin-bottom-small">Karon car</h2>
          <span class="position margin-bottom-medium">Web Developer & Digital Marketer</span>
          <p class="position-text">I Created a Booking Websites and helped The company expand its reach from local customers to international ones
          </p>
        </div>
      </div>


    </div>

  </div>
</section>

<section class="skills" id="skills">
  <div class="skills__title">
    <h2 class="heading">Professional Skills</h2>
    <span class="heading-border margin-bottom-big">&nbsp;</span>
  </div>
  <div class="skills__container" id="skills__container" >
    <div class="skills__container__first">
        <!-- <ul></ul>
        <ul>Css</ul>
        <ul>Javascript</ul> -->
        <div class="skills__container__Data">
          <span class="skills__container__Data--tlt">Php</span>
          <span class="skills__container__Data--value">80%</span>
        </div>
        <div class="skills__container__progress">
          <span class="skills__container__progress--empty"></span>
          <span class="skills__container__progress--fill" id="skills80">&nbsp;</span>
        </div>

        <div class="skills__container__Data">
          <span class="skills__container__Data--tlt"> Html</span>
          <span class="skills__container__Data--value">85%</span>
        </div>
        <div class="skills__container__progress">
          <span class="skills__container__progress--empty"></span>
          <span class="skills__container__progress--fill">&nbsp;</span>
        </div>

        <div class="skills__container__Data">
          <span class="skills__container__Data--tlt">CSS</span>
          <span class="skills__container__Data--value">80%</span>
        </div>
        <div class="skills__container__progress">
          <span class="skills__container__progress--empty"></span>
          <span class="skills__container__progress--fill" id="skills80">&nbsp;</span>
        </div>

        <div class="skills__container__Data">
          <span class="skills__container__Data--tlt"> Javascript</span>
          <span class="skills__container__Data--value" >70%</span>
        </div>
        <div class="skills__container__progress">
          <span class="skills__container__progress--empty"></span>
          <span class="skills__container__progress--fill">&nbsp;</span>
        </div>

        <div class="skills__container__Data">
          <span class="skills__container__Data--tlt">Sass</span>
          <span class="skills__container__Data--value">70%</span>
        </div>
        <div class="skills__container__progress">
          <span class="skills__container__progress--empty"></span>
          <span class="skills__container__progress--fill">&nbsp;</span>
        </div>
    </div>
    <div class="skills__container__second">

      <div class="skills__container__Data">
        <span class="skills__container__Data--tlt">Wordpress</span>
        <span class="skills__container__Data--value">80%</span>
      </div>
      <div class="skills__container__progress">
        <span class="skills__container__progress--empty"></span>
        <span class="skills__container__progress--fill" id="skills80">&nbsp;</span>
      </div>

      <div class="skills__container__Data">
        <span class="skills__container__Data--tlt">Sql</span>
        <span class="skills__container__Data--value">85%</span>
      </div>
      <div class="skills__container__progress">
        <span class="skills__container__progress--empty"></span>
        <span class="skills__container__progress--fill">&nbsp;</span>
      </div>

      <div class="skills__container__Data">
        <span class="skills__container__Data--tlt">Photoshop</span>
        <span class="skills__container__Data--value">78%</span>
      </div>
      <div class="skills__container__progress">
        <span class="skills__container__progress--empty"></span>
        <span class="skills__container__progress--fill">&nbsp;</span>
      </div>

      <div class="skills__container__Data">
        <span class="skills__container__Data--tlt">Windows Form</span>
        <span class="skills__container__Data--value">70%</span>
      </div>
      <div class="skills__container__progress">
        <span class="skills__container__progress--empty"></span>
        <span class="skills__container__progress--fill">&nbsp;</span>
      </div>

      <div class="skills__container__Data">
        <span class="skills__container__Data--tlt">C#</span>
        <span class="skills__container__Data--value">70%</span>
      </div>
      <div class="skills__container__progress">
        <span class="skills__container__progress--empty"></span>
        <span class="skills__container__progress--fill">&nbsp;</span>
      </div>

      
    </div>
  </div>
</section>


<section class="portfolio" id="portfolio">

    <div class="portfolio__container">

        <div class="portfolio__container__title">
          <h2 class="heading">Portfolio</h2>
        </div>

        <div class="portfolio__container__sections">
              <ul class="portfolio__container__sections--list">All</ul>
              <!-- <ul class="portfolio__container__sections--list">Wordpress</ul>
              <ul class="portfolio__container__sections--list">Applications</ul> -->
        </div>

        <div class="portfolio__container__project">
          <div class="project-1 project">
            
            <div class="project-overlay">&nbsp;</div>
            <div class="project-link">
              <span class="project-title title1">Milky Makers</span>
              <a href="https://milkymakers.ae" class="project-link-blog">
                <svg class="project-link-blog-svg-link"> 
                  <use xlink:href="images/sprite.svg#icon-link" ></use>
                </svg>
              </a>

              <a href="#popup" id="link-pop" class="project-link-pop">
                <svg class="project-link-blog-svg-pop"> 
                  <use xlink:href="images/sprite.svg#icon-search" ></use>
                </svg>
              </a>
            </div>
            <img class="project-img image1" src="images/milkymakers.jpg" alt="">
            
            
          </div>
          

          <div class="project-2 project">
            <div class="project-overlay">&nbsp;</div>
            <div class="project-link">
              <span class="project-title title1">Karon Car</span>
              <a href="#popup" class="project-link-blog">
                <svg class="project-link-blog-svg-link"> 
                  <use xlink:href="images/sprite.svg#icon-link" ></use>
                </svg>
              </a>

              <a href="#popup" class="project-link-pop">
                <svg class="project-link-blog-svg-pop"> 
                  <use xlink:href="images/sprite.svg#icon-search" ></use>
                </svg>
              </a>
            </div>
            <img class="project-img image2" src="images/Karoncar.jpg" alt="">
           
            
          </div>

            <div class="project-3 project">
              <div class="project-overlay">&nbsp;</div>
              <div class="project-link">
                <span class="project-title title1">Online Resume</span>
                <a href="" class="project-link-blog">
                  <svg class="project-link-blog-svg-link"> 
                    <use xlink:href="images/sprite.svg#icon-link" ></use>
                  </svg>
                </a>
  
                <a href="#popup" class="project-link-pop">
                  <svg class="project-link-blog-svg-pop"> 
                    <use xlink:href="images/sprite.svg#icon-search" ></use>
                  </svg>
                </a>
              </div>
              <img class="project-img image3" src="images/zoubair-moassar-resume.jpg" alt="">
             
            </div>
            

            <div class="project-4 project">
              <div class="project-overlay">&nbsp;</div>
              <div class="project-link">
                <span class="project-title title1">Creative Agency</span>
                <a href="" class="project-link-blog">
                  <svg class="project-link-blog-svg-link"> 
                    <use xlink:href="images/sprite.svg#icon-link" ></use>
                  </svg>
                </a>
  
                <a href="#popup" class="project-link-pop">
                  <svg class="project-link-blog-svg-pop"> 
                    <use xlink:href="images/sprite.svg#icon-search" ></use>
                  </svg>
                </a>
              </div>
              <img class="project-img image4" src="images/creative0.jpg" alt="">
              
              
            </div>
            

            <div class="project-5 project">
              <div class="project-overlay">&nbsp;</div>
              <div class="project-link">
                <span class="project-title title1">Clinic</span>
                <a href="" class="project-link-blog">
                  <svg class="project-link-blog-svg-link"> 
                    <use xlink:href="images/sprite.svg#icon-link" ></use>
                  </svg>
                </a>
  
                <a href="#popup" class="project-link-pop">
                  <svg class="project-link-blog-svg-pop"> 
                    <use xlink:href="images/sprite.svg#icon-search" ></use>
                  </svg>
                </a>
              </div>
              <img class="project-img image5" src="images/clinic.jpg" alt="">
             
              
            </div>
            


            <div class="project-6 project">
              <div class="project-overlay">&nbsp;</div>
              <div class="project-link">
                <span class="project-title title1">Media Agency</span>
                <a href="" class="project-link-blog">
                  <svg class="project-link-blog-svg-link"> 
                    <use xlink:href="images/sprite.svg#icon-link" ></use>
                  </svg>
                </a>
  
                <a href="#popup" class="project-link-pop">
                  <svg class="project-link-blog-svg-pop"> 
                    <use xlink:href="images/sprite.svg#icon-search" ></use>
                  </svg>
                </a>
              </div>
              <img class="project-img image6" src="images/media.jpg" alt="">
              
              
            </div>

            <div class="project-7 project">
              <div class="project-overlay">&nbsp;</div>
              <div class="project-link">
                <span class="project-title title1">Api Plugin</span>
                <a href="" class="project-link-blog">
                  <svg class="project-link-blog-svg-link"> 
                    <use xlink:href="images/sprite.svg#icon-link" ></use>
                  </svg>
                </a>
  
                <a href="#popup" class="project-link-pop">
                  <svg class="project-link-blog-svg-pop"> 
                    <use xlink:href="images/sprite.svg#icon-search" ></use>
                  </svg>
                </a>
              </div>
              <img class="project-img image6" src="images/api.jpg" alt="">
              
              
            </div>
            
        </div>

    </div>


</section>

<section class="contact_full" id="contact">
  <div class="portfolio__container__title">
    <h2 class="heading">Contact</h2>
    <span class="heading-border margin-bottom-big">&nbsp;</span>
  </div>

  <div class="contact_full_banner">
    <div class="contact_full_banner_form">

      <h2 class="contact_full_banner_form--tlt">Contact Form</h2>

      <p>Please Go ahead don't hesitate to contact me.</p>
      <form class="contact_full_banner_form--form"  action="" method="post" >
        <div class="Full-Name input">
        
        <input type="text" name="Name" placeholder="Full Name">
        </div>
        
        <div class="phone-number input">
        
        <input type="email" name="email" placeholder="email">
      </div>

        <div class="message input">
        
        <input type="text" name="text" placeholder=" Message">
      </div>

      <div class="form-btn">
        <input class="btn btn-primary" type="submit" name="submit" value="Send">
      </div>

      </form>
    </div>

    <div class="contact_full_banner_info">
      <h3 class="contact_full_banner_info--tlt" >contact Details</h3>
      <ul class="contact_full_banner_info--list">
        <li>Phone: +971 528 95 2861</li>
        <li>E-mail: contact@zoubair.io</li>
        <li>E-mail: zoubair@tazznir.com</li>
        <li>Dubai, UAE</li>
      </ul>
    </div>

  </div>

</section>

<section class="hobbies">
  <div class="portfolio__container__title">
    <h2 class="heading">Hobbies</h2>
    <span class="heading-border margin-bottom-big">&nbsp;</span>
  </div>

  <div class="hobbies__container">
    <div class="reading__hobby icon-box">
      <svg class="reading__hobby--icon svg-icon">
        <use xlink:href="images/sprite.svg#icon-book"></use>
      </svg>
    </div>

    <div class="traveling__hobby icon-box">
      <svg class="traveling__hobby--icon svg-icon">
        <use xlink:href="images/sprite.svg#icon-airplane"></use>
      </svg>
    </div>

    <div class="arduino__hobby icon-box">
      <svg class="arduino__hobby--icon svg-icon">
        <use xlink:href="images/sprite.svg#icon-embed"></use>
      </svg>
    </div>

    <div class="arduino__hobby icon-box">
      <svg class="arduino__hobby--icon svg-icon">
        <use xlink:href="images/sprite.svg#icon-video-camera"></use>
      </svg>
    </div>

    <div class="arduino__hobby icon-box">
      <svg class="arduino__hobby--icon svg-icon">
        <use xlink:href="images/sprite.svg#icon-wordpress"></use>
      </svg>
    </div>

   

</section>

<section class=popup>

  <div class="popupb">
    <div class="popupbtn"><a class="popupbtn--close" href="#portfolio">X</a></div>

    <div class="popupb__row">
      <div class="popup__row--col">
        <img class="popup__row--col--img" src="images/zoubair-moassar-resume.jpg" alt="zoubair">
      </div>
      <div class="popup__row--col">
        <h2 class="heading margin-bottom-medium" id="popup-tlt">title of the project</h2>
        <p id="popup-text" >Lorem ipsum dolor sit,</p>
      </div>
    </div>

  </div>

</section>


<footer class=footer>
  <div class="about-website">

    <div class="about-website-links col-1-of-2 margin-top-big">
      <span class="about-website-links-width margin-bottom-medium">&nbsp;</span>
      <ul class="about-website-links-list">
        <li class="about-website-links-list-usefull"><a href="https://ae.linkedin.com/in/zoubair-moassar-49777321a">linkedin</a></li>
        <li class="aabout-website-links-list-usefull"><a href="https://www.instagram.com/zoubair_moassar/">Instagram</a></li>
        <li class="aabout-website-links-list-usefull"><a href="tel:+971528952861">Phone</a></li>
        <li class="aabout-website-links-list-usefull"><a href="mailto:contact@zoubair.me">e-mail</a></li>
      </ul>
      <a href="Zoubair-Moassar-resume.pdf" class="btn btn-primary btn-footer">Download CV</a>
    </div>

    <div class="about-website-copyright col-1-of-2">
      <h3 class="about-website-copyright-heading heading-secondary margin-bottom-small" >Notice: </h3>
      <p>I made this website to present not just cv but my skilld in web development and designing, this webdesign is fully created and builded by zoubair moassar which which is me.</p></div>
    
    
  </div>
  <div class="copyright">
    <p class="copyright-text">Zoubair Moassar All right Reserved</p>
  </div>
</footer>
<script src="js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>
</html>