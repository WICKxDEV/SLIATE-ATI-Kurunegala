<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SLIATE</title>
    <link rel="icon" type="image/icon" href="images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css"
    />
    <meta charset="UTF-8" />
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="index.html"><img src="images/logo.png" /></a>
        <div class="nav-links" id="navLinks">
          <i class="fas fa-times-circle" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">COURSES</a></li>
            <li><a href="find-result.php">RESULTS</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="staff.php">STAFF</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="login.php">ADMIN</a></li>
          </ul>
        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>Administrative and Academic Staff</h1>
    </section>

    <!-----------JavaScript for Toggle Small Menu-------->
    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-120px";
      }
    </script>

    <!-------- Staff------->
    <section class="staff">
      <div class="row-staff">
        <div class="staff-col">
          <section class="stafftestimonials">
            <h1>Director</h1>
            <p>The main Director of the ATI kurunegala</p>
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Mr.kanchana</h3>
                  <p>Mr.G.A.Kanchana Sirisumana<br />Contact -037-2224911</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row-staff">
        <div class="staff-col">
          <section class="stafftestimonials">
            <h1>Administrative Staff</h1>
            <p>The administraive staff of the ATI kurunegala</p>
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Erandika</h3>
                  <p>
                    Accountnat - Ms. L.P.N.H.Erandika<br />Contact - 0779890204
                  </p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Narasinghe</h3>
                  <p>
                    Asst.registrar - Ms. N.K.B.M.D.Narasinghe<br />Contact -
                    0716254659
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Sanjeewanee</h3>
                  <p>
                    Librarian - Ms. K.A.A.D.D.Sanjeewanee<br />Contact -
                    0713138207
                  </p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Ekanayake</h3>
                  <p>
                    As. Librarian - Ms.E.M.N.P.Ekanayake<br />Contact -
                    0718543184
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row-staff">
        <div class="staff-col">
          <section class="stafftestimonials">
            <h1>Head Of the Departments</h1>
            <p>The Head Of the Departments staff of the ATI kurunegala</p>
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Jayathunga</h3>
                  <p>
                    HNDA - Ms . K.M.D.M. Jayathunga<br />Contact - 071 7423076
                  </p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Mr.Warnakula</h3>
                  <p>
                    HNDE - Mr.W.P.B.Warnakulasooriya <br />Contact - 0776279224
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Mr.Konthasinghe</h3>
                  <p>
                    HNDIT - Mr . K.W.G.S.Konthasinghe<br />Contact - 077 9417938
                  </p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Siriwardhana</h3>
                  <p>
                    HNDM - Ms.H.T.N.K.Siriwardhana <br />Contact - 0775302393
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Wijesooriya</h3>
                  <p>
                    HNDTHM - Ms.M.W.A.T.N.Wijesooriya<br />Contact - 0719870520
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="row-staff">
        <div class="staff-col">
          <section class="stafftestimonials">
            <h1>Academic Staff</h1>
            <p>The Academic Staff of the ATI kurunegala</p>
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Dr.Balasooriya</h3>
                  <p>Dr.B.M.S.S.Balasooriya <br />Contact - 0717970069</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Dr.Thennakoon</h3>
                  <p>Dr.T.M.A.P.Thennakoon<br />Contact - 0705611571</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Kumari</h3>
                  <p>Ms.S.G.N.C.Kumari<br />Contact - 0714656147</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Samarasekara</h3>
                  <p>Ms.L.A.M.W.I.Samarasekara<br />Contact - 0713052941</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Masakkara</h3>
                  <p>Ms.M.H.D.A.S.S.N.Masakkara<br />Contact - 0714837338</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Neththipola</h3>
                  <p>Ms.M.M.R.M.Neththipola<br />Contact - 0715355330</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Priyadarshani</h3>
                  <p>Ms.N.G.N.Priyadarshani<br />Contact - 0718285224</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Gamlath</h3>
                  <p>Ms.P.G.R.N.J.Gamlath <br />Contact - 0714458645</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Dr.Pushpakumara</h3>
                  <p>Dr.B.M.A.Pushpakumara<br />Contact - 0716554938</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Wijesinghe</h3>
                  <p>Ms.K.G.D.D.A.Wijesinghe<br />Contact - 0773364643</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Jayathunga</h3>
                  <p>Ms.K.M.D.M.Jayathunga<br />Contact - 0717423076</p>
                </div>
              </div>
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Hamzayini</h3>
                  <p>Ms.P.Hamzayini<br />Contact - 0766727238</p>
                </div>
              </div>
            </div>
          </section>
          <section class="stafftestimonials">
            <div class="staff-row">
              <div class="stafftestimonials-col">
                <img src="images/user1.jpg" />
                <div>
                  <h3>Ms.Wijerathna</h3>
                  <p>Ms.S.P.T.Wijerathna<br />Contact - 0718226866</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>

    <!-----------Footer-------->
    <section class="footer">
      <h2>About US</h2>
      <div class="row">
        <div class="footer-col">
          <h3>SLIATE MAIN</h3>
          <ul>
            <li>
              <a href="https://moe.gov.lk/" target="_blank"
                >Ministry of Higher Education</a
              ><br />
            </li>
            <li>
              <a href="https://www.ugc.ac.lk/" target="_blank"
                >University Grant Commission</a
              ><br />
            </li>
            <li>
              <a href="https://www.gov.lk/" target="_blank">www.gov.lk</a><br />
            </li>
            <li>
              <a href="http://www.sliate.ac.lk/news/past-papers" target="_blank"
                >Model and Past Papers</a
              ><br />
            </li>
            <li>
              <a href="http://www.sliate.ac.lk/" target="_blank"
                >SLIATE Main Web page</a
              ><br />
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Navigations</h3>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">COURSES</a></li>
            <li><a href="find-result.php">RESULTS</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="staff.php">STAFF</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="login.php">ADMIN</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Contact Us</h3>
          <p>
            22/1,Wilgoda rd,<br />Kurunegala<br /><br />
            <b>Phone:</b> +94372229583<br /><b>Email:</b>
            atikurunegala@sliate.ac.lk
          </p>
        </div>
        <div class="footer-col">
          <h3>Social Media</h3>
          <ul>
            <li>
              <a href="https://web.facebook.com/atiku.edu.lk" target="_blank"
                >Facebook</a
              ><br />
            </li>
            <li>
              <a href="https://x.com/AlumniAtiku?s=20" target="_blank"
                >Twitter</a
              ><br />
            </li>
            <li>
              <a href="https://www.youtube.com/@SLIATEOfficial" target="_blank"
                >Youtube</a
              ><br />
            </li>
            <li>
              <a
                href="https://www.linkedin.com/in/isuru-wickramasinghe-b5b8a529b/"
                target="_blank"
                >Linkedin</a
              ><br />
            </li>
          </ul>
        </div>
      </div>
      <p>
        © Copyright ATI Kurunegala. All Rights Reserved<br />
        Designed by ATI Kurunegala
      </p>
    </section>
  </body>
</html>
