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
      <h1>Higher National Diploma in Accoutancy</h1>
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

    <!-------- NEWS------->
    <section class="hnd">
      <h2>HNDA</h2>
      <div class="row">
        <div class="hnd-col">
          <h3>Course Duration: 4 years</h3>
          <h4>Mode of Conducting Programme</h4>
          <p>
            <b
              >Full-Time Course (The first and second year lectures are
              conducted as full time during the weekdays, while the third and
              fourth year lectures are conducted during the weekends.)<br /><br />

              Part-Time Courses (During Weekends) Medium of instruction: -
              English Part-Time courses are conducted for those who are employed
              in the relevant fields.</b
            >
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>The Selection Criteria:</h3>
          <p>Based on Z-Score</p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>Entry Qualification</h3>
          <p>
            <b
              ><u>Full Time</u><br />

              Passed the G.C.E. (A/L) examination in one sitting with a Credit
              pass for Accountancy (priority will be given to the Commerce
              stream students.<br />
              Second preference will be given to the students of the Technology
              stream if vacancies exist for eligible students) And Ordinary pass
              for English and Mathematics at the G.C.E. (O/L) examination<br /><br />

              <u>Part Time : 4 years</u><br />
              Passed the G.C.E. (A/L) examination in one sitting with a Credit
              pass for Accountancy and An Ordinary pass for English and
              Mathematics at the G.C.E. (O/L) examination. OR Passed the G.C.E.
              (A/L) examination in one sitting with an Ordinary pass for
              Accountancy and An Ordinary pass for English and Mathematics at
              the G.C.E. (O/L) examination. And Any of the certificate courses
              given below conducted by the Department of Technical Education &
              Training (DTET).<br /><br />

              A. Completion of National Certificate in Accounting
              Technicians.<br />
              B. Completion of National Certificate in Business Studies.<br />
              C. Completion of National Certificate in Accounting.<br />
              the applicant should be employed in the relevant field in a
              government institution / public enterprise / recognized firm or
              self-employed (entrepreneur)</b
            >
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <p>
            Those who possess the following qualifications will be exempted from
            the 1st year and will be admitted to the 2nd year when satisfying
            the other entry requirements and availability of places.<br /><br />

            i. Completion of the Higher National Diploma in Management /
            Business Administration/ Business Finance conducted by the
            (SLIATE).<br /><br />

            ii. Completion of second year of the Higher National Diploma in
            Commerce conducted by the (SLIATE) or (DTET).<br /><br />
            iii. Completion of the National Diploma in Business Studies
            conducted by the (SLIATE) or (DTET).<br /><br />
            iv. University Degree in relevant field (Accountancy/ B.Com./
            Marketing Management /Business Administration/ Business Finance/
            Business /Human Recourse Management) recognized by the University
            Grand Commission(UGC).<br /><br />
            v. Completion of Executive level or CAB I and CAB II or Licentiate I
            and II conducted by the Institute of Chartered Accountants of Sri
            Lanka (ICASL). vi. Completion of Part I and Part II of the Chartered
            Institute of Management Accountants (CIMA � UK).<br /><br />
            vii. Completion of the Association of Accounting Technicians
            (AAT).<br /><br />
            viii. Completion of the Associated Certified Management Accountants
            (ACMA) conducted by the Institute of Certified Management
            Accountants (CMA-Sri Lanka).
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>Important Information for Beginners to Select the Program</h3>
          <p>
            * Jobs are available in the present business market for those who
            have completed the program.<br /><br />

            *According to the Public Administration circular No. 46/90, the
            Higher National Diploma in Accountancy has been recognized to accept
            as an alternative qualification to a General Degree in Commerce
            (Ordinary pass), awarded by a recognized University for recruitment
            purposes.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="hnd-col">
          <h3>Course fees</h3>
          <p>
            No course fees for full time course.<br />
            Course fees for the part time students will be Seven Thousand Five
            Hundred Rupees (Rs. 7500.00) per Semester
          </p>
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
