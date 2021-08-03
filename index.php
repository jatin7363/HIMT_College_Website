<?php include("include/menu.html"); ?>
<!-- content -->
<div class=" row2">
  <div id="container" class="clear">
    <link href="styles/js-image-slider.css" rel="stylesheet" type="text/css">
    <script src="scripts/js-image-slider.js" type="text/javascript"></script>
    <script type="text/javascript">
      imageSlider.thumbnailPreview(function(thumbIndex) {
        return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:70px;height:44px;' />";
      });
    </script>
    <center>
      <b>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfgyNAR0OljF-FbF80cg9MmtRKMXg19OB8zux-zx0jV415nLQ/viewform">
          <font color='blue' size="4.5">Online Registration 2021-2022</font>
        </a>
      </b>
    </center>
    <br>
    <section id="slider1">
      <div id="sliderFrame">
        <div id="slider">
          <img src="/images/spark/new/4.jpg">
          <img src="/images/spark/new/1.jpg">
          <img src="/images/spark/Spark6.jpg">
          <img src="/images/spark/MCA.jpeg">
          <img src="/images/spark/homePage/Home page 1.jpeg">
          <img src="/images/spark/homePage/Home page 2.jpeg">
          <img src="/images/spark/homePage/Home page 3.jpeg">
          <img src="/images/spark/homePage/Home page 4.jpeg">
          <img src="/images/spark/homePage/Home page 5.jpeg">
          <img src="/images/COVID19/covid_1.jpeg">
          <!-- 
          <img src="/images/COVID19/covid_2.jpeg">
          <img src="/images/COVID19/covid_3.jpeg">
          <img src="/images/COVID19/covid_4.jpeg">
          <img src="/images/COVID19/covid_5.jpeg">
          -->
          <!-- <img src="/images/spark/homePage/Home page 6.jpeg"> -->
          <!-- <img src="images/spark/new/5.jpg"> -->
          <!-- <img src="images/spark/spark1.jpg"> -->
          <!-- <img src="images/spark/Spark7.jpg"> -->
          <!-- <img src="images/spark/college6.jpeg"> -->
          <!-- <img src="images/spark/IMG_20170403_101531095.jpg"> -->
        </div>
      </div>
    </section>
    <!-- content body -->
    <div id="content">
      <!-- main content -->
      <!--<section id="services" class="clear">
        <!-- article 1 -->
      <!--  <article class="one_third">
          <h2>President&#39s Message</h2>
          <img src="images/pres_pic.png" alt="President's Photo">
          <p>I am immensely glad to say that HIMT, Rohtak is imparting quality  professional education in computer science and management  through our well qualified, experienced and dedicated faculty working together to realize this cherished dream. Rapid changes in the employment and business scenarios have significantly raised the bar of expectation
</p>
          <footer class="more"><a href="president_message.php">Read More &raquo;</a></footer>
        </article>-->
      <!-- article 2 -->
      <!-- <article class="one_third lastbox" >
          <h2>Director&#39s Message</h2>
          <img src="images/dir-pic.png" alt="Director's Photo">
          <p>The world is full of possibilities & in the era of competitive environment, opportunities for good career are abundant. HIMT academics and activities never end and the students are moulded as future technocrats and business leaders. The institute works on the vision to become one of the leading centers of teaching & research through total commitment towards quality</p>
          <footer class="more"><a href="director_message.php">Read More &raquo;</a></footer>
        </article>-->
      <!--</section>-->


      <section class="last" style="text-align: justify;">
        <article>
          <h2>Mission and Vision</h2>
          <p>Hindu Institute of Management & Technology, Rohtak has been promoted by The Hindu Education Society (Regd.) Rohtak to create leaders, winners and achievers in the field of information technology and management to compete in the global corporate world. It does not only end here but it also wishes to open new vistas of opportunities for its students by understanding their needs and providing them meaningful education. The promoters are committed to continue improvement in the quality of education through changes in the delivery system and by designing and maintaining an environment which will contribute towards better employability of our students. The institution has motto to achieve high standards of academics, excellence in technical and management education and personal integrity for all round development of students.</p>
          <footer class="more"><a href="about-college.php">Read More About College &raquo;</a></footer><br>
          <center>
            <footer class="centerLink"><a href="https://docs.google.com/forms/d/e/1FAIpQLScBIi6wG1PAqXrXyy0iAnvkliVUrBoGlwM7fZi1zjJfFxnmNQ/viewform?vc=0&c=0&w=1&flr=0">Students Feedback Form &raquo;</a></footer>
          </center>
        </article>
      </section>
    </div>
    <!-- right column -->
    <aside id="right_column">
      <h2 class="title"><img src="images/new.gif">News & Updates</h2>
      <nav>
        <marquee direction="up" scrollamount="3" id="newsNAV">
          <div onMouseOver="document.getElementById('newsNAV').stop();" onMouseOut="document.getElementById('newsNAV').start();">
            <!--<a href="#">Admissions open for BCA, MCA and MBA. </a>--> <br>
            <!-- <a href="#">Last date of major project submission of MCA 6th Sem is 5th/june/2020.</a> <br> -->
            <a href="alumni-association.php">Sign up for HIMT Alumni Association</a><br>
            <a href="#">Students are informed to get all E-contents of their concern subject through E-Content Tab flashing on the Home page.</a><br>
            <a href="#">MCA is now a 2 year programme.</a><br>
          </div>
        </marquee>
      </nav>
      <!-- /nav -->
      <!--<h2 class="title">Get In Contact</h2>
      <section class="last">
        <address style="font-size:11px">
        Hindu Institute of Management & Technology<br>
        Near Khushboo Garden<br>
        Rohtak-124001<br>
        Haryana<br>
        <br>
        Tel: 01262-265888<br>Mob: 9813172264<br>
		Fax: 01262-265888<br>
        Email: <a href="mailto:info@himtrtk.com">info@himtrtk.com</a>
        </address>
          <br>
        <a href="http://himtrtk.edugrievance.com/" target="_blank">Grievance Redressal Cell </a>-->

      <!-- </section>       <!-- extra tag -->
      <br>
      <!-- /section -->
    </aside>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<?php include("include/footer.html"); ?>