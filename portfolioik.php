<?php 
$cser=mysqli_connect("localhost","root","","portfoliodb"); 
if(isset($_POST['submit']))
 {
     $Name = $_POST['Name']; $Email = $_POST['Email'];
      $message = $_POST['message']; 
     $result = mysqli_query($cser,"insert into portfolio_table values('','$Name','$Email','$message')"); 
     if($result)
      {
        /* echo 'Registration Successfully';
         } 
else{
     echo 'failed:'; } */
    echo '<script type="text/javascript">';
echo ' alert("Message sent Successfully")';  //not showing an alert box.
echo '</script>';
      }
     } ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>
            PORTFOLIO| IKRAM DIKI
        </title>
        <link rel="stylesheet" href="portfolio.css">
    </head>
<body>
        <header>
        <div class="header-items">
            <div class="left-header">
              <div class="divimg">
                 <img class="imgprofile" src="scanner_20191220_085027.jpg" > 
              </div>
             <div class="divp">
                 <p>IKRAM DIKI </p>
             </div>
        </div>
             <div class="navbar">
                <ul class="nav-bar">
                    <li class="liclass">
                        <a href="#home-section" class="header__link1"> HOME </a>
                    </li>
                    <li class="liclass">
                            <a href="#aboutme-section" class="header__link1">ABOUT ME </a>                
                        </li>
                 <li class="liclass">
                     <a href="#projects-section" class="header__link1"> PROJECTS </a>                 
                </li>
                 <li class="liclass">
                  <a href="#contact-section" class="header__link1">CONTACT </a>                
                </li>
              </ul> 
             </div>
        </div>
    </header>

        <section id="home-section" class="home-section">
            <div class="homepage">
                <div>
                    <div class="title">
                        <h1 class="firsth1">HEY, I'M IKRAM DIKI</h1>
                    </div>
                    <div class="title2">
                      <h3 class="firsttitle">A Front-end and Back-end Web Developer Building Websites </h3> 
                    </div>
                <div>
                    <button class="button2">
                    <a href="#projects-section" class="header__link">PROJECTS </a>                
                    </button>
                </div>  
                </div>
                    <div class="lefticons">
                        <div>
                            <a target="_blank"rel="noreferrer" href="https://instagram.com/ikramita232?igshid=ZDdkNTZiNTM" class="icon11">
                                <img class="icon1" src="instanew.webp">
                              </a>
                        </div>
                    <div>
                        <a target="_blank" rel="noreferrer" href="https://web.facebook.com/ikram.ita.90281/" class="icon11">
                            <img class="icon2" src="fb.webp">
                          </a>
                    </div>
                       <div>
                        <a target="_blank" rel="noreferrer" href="https://twitter.com/ikramita232" class="icon11">
                            <img class="icon3" src="th.jfif">
                          </a>
                       </div>
                       <div>
                        <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/ikram-ita-190123220/" class="icon11">
                            <img class="icon4" src="link2.jpg">
                          </a>
                       </div>
            </div>   
        </section> 
        <section id="aboutme-section" class="aboutme-section">
            <div class="aboutmepage">
                        <h2 class="aboutme">ABOUT ME</h2>
                    <div>
                        <p class="divp1">  
                            Here you will find more information about me, what I do, and my current skills mostly in terms of programming 
                        </p>
                    </div>           
                <div class="aboutme2">
                       <div class="aboutmepart1">
                        <h3>Get to know me!</h3>
                        <p class="pclass">
                            I am a Front-end and Back-end Web Developer building the Front-end of Websites 
                            I'm open to job opportunities where I can contribute, learn and grow.If you have a good opportunity that matches my skills and experience then don't hesitate to contact me.    
                        </p></br></br>
                        <button class="button3">
                            <a href="#contact-section" class="header__link">CONTACT </a>                
                            </button> 
                       </div> 
                       <div class="myskillstitle">
                        <div>
                            <h3 class="hh3">
                                My Skills
                            </h3>
                        </div>
                        <div>
                            <ul>
                                <li class="li1">HTML</li>
                                <li class="li1">CSS</li>
                                <li class="li1">JAVASCRIPT</li>
                                <li class="li1">SQL</li>
                            </ul>
                        </div>
                       
                       </div>    
                    </div>              
            </div>
        </section>
        <section id="projects-section" class="projects-section">
            <div>
                <div>
                <h2 class="aboutme">PROJECTS</h2>
            </div>
            <div class="containerofprojects">
                <img class="img2" src="web design_main page .jpg">
                <p class="projectp">
My Equipe and I worked on a website that allows the farmer to deposite their files so easily without all the time consuming paper work.
                </p>
            </div></br></br></br>
            <div class="containerofprojects">
                <img class="img2" src="2023-05-04.png">
                <p class="projectp">
this a portfolio website please check the link below for further details <a class= "linka"target="_blank" href="https://portfolionassira.000webhostapp.com/">PORTFOLIO LINK</a>
            </div>
        </div>
        </section>
        <section id="contact-section" class="contact-section">
            <div>
            <div>
                <h2 class="aboutme">CONTACT</h2>
                <p class="divp2">Feel free to Contact me by submitting the form below and I will get back to you as soon as possible</p>
            </div>
            
        <div class="form">
            <form action="portfolioik.php" method= "post">
            <label>Name</label></br>
            <input required="" placeholder="Enter Your Name" type="text" class="contact__form" name="Name" id="Name"></br>
            <label>Email</label></br>
            <input required="" placeholder="Enter Your Email" type="text" class="contact__form" name="Email" id="Email"></br>
            <label class="label">Message</label></br>
            <input required="" placeholder="Enter Your Message" type="text" class="contact__form1" name="message" id="message"></br>
           <input type="submit" value="submit" name="submit">
        </form>
        </div>
    </div>
 </section>
       
      <footer class="main-footer">  
        <div class="main-container">
            <div class="footer1">
                <div class="pgrid">
                    <p class="p1">HEY, I'M IKRAM DIKI</p>
                    <p class="p1">A Front-end and Back-end Web Developer Building the Front-end of Websites </p> 
                   <div class="mailmediv">
                        <img class="img3" src="1.jfif">
                        <p class="mailme">ikramdiki20@gmail.com</p>   
                   </div> 
                   <div class="callmediv">
                        <img class="img4" src="th (1).jfif">
                        <p class="callme">+212651873423</p>   
                   </div>
                   © Copyright
                </div> 
                <div class="div6">
                    <h3 class="sm">SOCIAL MEDIA</h3></br></br>
                    <div class="socialmediaicons">
                      <a target="_blank" rel="noreferrer" href="https://instagram.com/ikramita232?igshid=ZDdkNTZiNTM">
                          <img class="main-footer__icon1" src="instanew.webp">
                        </a>
                        <a target="_blank" rel="noreferrer" href="https://web.facebook.com/ikram.ita.90281/">
                          <img class="main-footer__icon2" src="fb.webp">
                        </a>
                        <a target="_blank" rel="noreferrer" href="https://twitter.com/ikramita232">
                          <img class="main-footer__icon3" src="th.jfif">
                        <a target="_blank" rel="noreferrer" href=" https://www.linkedin.com/in/ikram-ita-190123220/">
                            <img class="main-footer__icon4" src="link2.jpg">
                          </a>
                  </div>    
                </div>     
           </div>
         </div>
      </footer>
    </body>
</html>
