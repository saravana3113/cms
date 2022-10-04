<!DOCTYPE html>
<html>
    <head>
    <title>dsp@auocc.edu</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="courses.css" rel="stylesheet">
    <style>
        body{font-family:"Nunito", sans-serif;}
        
    </style>
    </head>
    <body>
        <h1 id="h1">
            <img src="electronics.jpg" id="icon"></img><span id="cname">DIGITAL SIGNAL PROCESSING</span>
            <nav><a href="home.html">HOME</a></nav>
            <br><br><br><br>Welcome to AU OpenCourseware!
            <?php
            session_start();
            echo $_SESSION['name'];
            ?>
            <br><hr><br>
        <div id="cintro">
        Learn Signal Processing online at your own pace.
         Start today and improve your skills. <br>
         Join millions of learners from around the world already learning DSP. 
         Learn on your schedule.<br> Risk free learning. Millions of learners.
        </div>
        </h1>
    <div id="clist" >
        <div class="cvid" ><iframe id="frame1" src="https://www.youtube.com/embed/jRL9ag3riJY"></iframe><span id="cc1"><b>Week 1</b><br> Learn the basics of Signal Processing and fundamental concepts...</span></div>
        <div class="cvid" ><iframe id="frame2" src="https://www.youtube.com/embed/iCaDt9Esdv4"></iframe><span id="cc2"><b>Week 2</b><br> Dive deeper into the world of signals - Learn Fourier Transforms...</span></div>
        <div class="cvid" ><iframe id="frame3" src="https://www.youtube.com/embed/bZffNkYobYg"></iframe><span id="cc3"><b>Week 3</b><br> Let us discuss Sampling theorem and liner time-invariant systems!</span></div>
        <div class="cvid" ><iframe id="frame4" src="https://www.youtube.com/embed/Wy82WJsgh8I"></iframe><span id="cc4"><b>Week 4</b><br> Study Modelling and Analysis of signals using signal processors...</span></div>
        <div class="cvid" ><iframe id="frame5" src="https://www.youtube.com/embed/XhI_IDFWig8"></iframe><span id="cc5"><b>Week 5</b><br>Now learn about discrete convolutions and discrete filter designs..</span></div>
    </div>
    <footer id="tfs">
        <div class="tf" align="center"><b>Teaching faculty :<br><br><img class="tfimg" src="tf.webp"><br>Prof. James Wilson Ph.D.<br>Dept.of Electronics Engg</div>
        <div class="tf" align="center"><br><br><img class="tfimg" src="tf.webp"><br>Asst.Prof. Raghav Agarwal M.Phil.<br>Dept.of Electronics Engg</b></div>
        <hr id="hr1">
        <div class="tf" align="center"><b>Student reviews :<br><br><img class="tfimg" src="st.png" width="60px"><br>Deepak Kumar B.E. <br>Electronics Engineering
        <br><br><img class="tfimg" src="st.png" width="60px"><br>Mukesh Chauhan B.E. <br>Electronics Engineering</b></div>
        <div id="fdb"><br><br><br><br>"  For working professionals, the lectures are a boon. The courses are so well structured that attendees can select parts of any lecture that are specifically useful for them. The USP of the courses is its flexibility.  "<br>
    <br><br>"  The delivery of this course is very good. The courseware is not just lectures, but also interviews. The course in-charge interviews people from various parts of the world, related to disability. It is very useful and engaging.  "</div>
        
    <div id="foot3">
        
        <h3><img src="link.png"height="35px" style="border-radius: 30px;">   Other Important Links:</h3><br><br>
        <ul>
        <li><a class="oli" href="home.html">Student Login</a><br><br>
        <li><a class="oli" href="https://www.annauniv.edu/">Anna University - Home</a><br><br>
        <li><a class="oli" href="https://onlinecde.annauniv.edu/">Center for Distance Education</a> <br><br>
        <li><a class="oli" href="aboutus.html">About Us</a>
    </ul>
    <br><br><p>&copy; 2008 All rights reserved by University Computing Center</p>
    </div>
    </footer>
    </body>
</html>