<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SR Public School</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="./script.js"></script>
</head>
<body>
    <div id = "main">
        <div id="header">
            <div id ="logo"> 
                <img src="./images/logo.jpg" alt="SRPS">
            </div>
            <div id ="sname"> 
                <div id="name">SR PUBLIC SCHOOL</div> 
            </div>
        </div>
        <div id="icon" style="background-color: black; color: aliceblue; font-size: 80px;" > 
        
            <i id = "toggle" class="fa fa-bars" aria-hidden="true" style="margin-left: 0px;" onclick="myFunction()"></i>    
        </div>
        <div class="navbar"  id ="nvbr" style="background-color: black; color: aliceblue; font-size: 45px;">
            <div class="n1">
                <a href="index.php"><i class="fa fa-home"></i>Home</a>
            </div>
            <div class="n1">
                <a href="aboutus.php"><i class="fa fa-user"></i> About Us</a>
            </div>
            <div class="n1">
                <a href="timetable.php"> <i class="fa fa-calendar" aria-hidden="true"></i>Time Table</a>
            </div>
            <div class="n1">
                <a href="onlineform.php"><i class="fa fa-address-book" aria-hidden="true"></i>Apply Online</a>
            </div>
            <div class="n1">
                <a href="academic.php"><i class="fa fa-list-ol" aria-hidden="true"></i> Academic</a>
            </div>
            <div class="n1">
                <a href="contactus.php"> <i class="fa fa-phone-square" aria-hidden="true"></i>Contact Us</a>
            </div>
        </div>
        <div id ="navi">
            <div class="n">
                <a href="index.php"><i class="fa fa-home"></i>Home</a>
            </div>
            <div class="n">
                <a href="aboutus.php"><i class="fa fa-user"></i> About Us</a>
            </div>
            <div class="n">
                <a href="timetable.php"> <i class="fa fa-calendar" aria-hidden="true"></i>Time Table</a>
            </div>
            <div class="n">
                <a href="onlineform.php"><i class="fa fa-address-book" aria-hidden="true"></i>Apply Online</a>
            </div>
            <div class="n">
                <a href="academic.php"><i class="fa fa-list-ol" aria-hidden="true"></i> Academic</a>
            </div>
            <div class="n">
                <a href="contactus.php"> <i class="fa fa-phone-square" aria-hidden="true"></i>Contact Us</a>
            </div>
        </div>
        <div id ="banner"><img id="bnr" src="./images/pics-1.jpg" alt="Banner">
        </div><br><br><br>
        <span id="about">About Us</span><br> <br>
        <div class="abt" >
            <div class="txt">S.R. Public School run by Srps Shiksha Samiti is a Educational 
                Social service Organization working towards a better society. True to its 
                name, S.R. Public School Shiksha Samiti perseveres to bring in a positive 
                change by uniting people who share the common vision of a developed India. 
                S.R Public School was established by S.R. Public School Shiksha Samiti , Mathura in April, 2003. <br><br>
                The society is registered with U.P. Registrar of Societies under Societies Registration Act of 
                1860 and the registration number of the Society is 1860/80G/12A. The school is affiliated to 
                C.B.S.E., New Delhi up to senior secondary level. <br><br><br>
            </div>
            <div id="im"><img  width="200px" height="200px"  src="./images/logo.jpg" alt="Image"></div>
        </div>
        
        <div id="line" style="width: 70%;height:2px;margin-left: 15%;background-color: black;"></div><br><br>
        <span  id= "vision">Our Vision</span><br> <br>
        <div class="abt">
            <div class="txt">It is our vision to be the best and excel in the field of education so as to produce truly
                 capable, independent and responsible citizens who would be leaders in their professional fields and
                  would effectively lead the society. Creation of a moral and ethical environment in which students 
                  shall learn to respect each and all. Through challenges and discipline they will learn to take 
                  responsibilities of their own lives and be of service to their environment.<br><br>
            </div>
            <div id="im"><img  width="200px" height="200px"  src="./images/vision.png" alt="Image"></div>
        </div>
        <br>
        <div id="line" style="width: 70%;height:2px;margin-left: 15%;background-color: black;"></div><br><br>
        <span  id= "mission">Our Mission</span><br> <br>
        <div class="abt">
            <div class="txt">Our mission is to foster future leaders with active intellectual curiosity and creative minds,
                a sense of understanding and compassion for others and the courage to act on their beliefs. We lay stress
                on the total development of lifelong learning of each child: spiritual, moral, intellectual, social,
                emotional, and physical.<br><br>
                S.R Public School is an English-medium co educational, up to Class 12th school dedicated to the intellectual
                 and personal development of each student in a caring and supportive environment. SRPS offers a challenging 
                 program to encourage independent thinking, self-discipline and responsibility in our students. We promise 
                 to bring out the best of talents and to make your child, grow with our vibrant methods of teaching.

            </div>
            <div id="im"><img  width="200px" height="200px"  src="./images/mission.png" alt="Image"></div>
        </div>
        <br>
        <div id="line" style="width: 70%;height:2px;margin-left: 15%;background-color: black;"></div><br><br>
        <span Director id="dm" >Director\'s Message </span><br> <br>
        <div class="abt">
            <div class="txt">For generating human excellence we need to produce movers of people, mobilizes opening and
                Integrated personalities whose minds, hearts and character follow the higher ideals of life, with 
                this ethos at SRPS, we are striving to generate the right platform where your child can make a grand 
                beginning of glorious journey of life. May I extend heartiest congratulation to you and your child on
                joining the family of S.R. Public School. <br> <br>
                We are in the midst of a revolution. The nation is basking in the glory of a new proud generation that
                is taking the world of storm! The entire intellectual community of the world has woken up to the reality 
                that India is a treasure-house of talent and intelligence. The youths of today are taking India to 
                unparalleled heights of prosperity the only raw material essential to this great turn around is EDUCATION
                because knowledge is power. <br><br>
                All great achievements are the product of man \'s dreams, ambition and dedication to achieve a truly noble goal.<br><br>
                S.R Public School Mathura is the crystallization of the efforts, dreams and aspirations of all the people involved
                in the mission to give their best to the students who desire to be equipped with the right essentials to be
                successful in all spheres of an exciting new world where knowledge is everything. <br><br>
                With best compliments <br>
                <span style="font-weight: bolder;">UTTAM SINGH CHAUDHARY</span> <br>
                Director
            </div>
            <div id="im"><img  width="200px" height="200px"  src="./images/director.png" alt="Image"></div>
        </div> <br><br>
        
        <div id="line" style="width: 70%;height:2px;margin-left: 15%;background-color: black;"></div><br><br>
        <span  id= "pm">Principal\'s Message</span><br> <br>
        <div class="abt">
            <div class="txt">I welcome you to S.R Public School , an English medium Co-educational School where the 
                progressive vision of our founders has etched a blue print of excellence and abiding values to 
                help our pupils to grow into men and women of high potentialities and character.<br><br>
                SRPS is the seed ground for those who wish to be leaders and path breakers, for those who shall 
                experiment with the cutting edge of contemporary thoughts and creative expression, for those who 
                shall dare to give shape to their dreams and aspirations and those who shall be the flag bearers 
                of human values, holding their nation and global concerns in perpetual remembrance.<br>
                The educational curve at SRPS will take them to the proverbial pot of gold, nurturing individual 
                talent and making a difference to each child. This is our holy grail. Through a spectrum of 
                activities within and outside the classroom, we provide experiences that help the students to 
                discover innate capabilities, set goals, find missions and tirelessly work towards their fulfilment.
                <br> <br>
                With best compliments <br>
                <span style="font-weight: bolder;">NARENDRA SINGH (Retd.  Army Captain)</span> <br>
                Principal <br><br>
            </div>
            <div id="im"><img  width="150px" height="150px"  src="./images/principal.png" alt="Image"></div>
        </div>
        <br>
        <div id ="footer">
            <div class ="f"><span class="f1">Important Links!</span> <br>
                <a style ="color: black; margin-left:10% ; " href="#dm">• Director Message</a> <br>
                <a style ="color: black; margin-left:10% ;" href="#pm">• Principal Message</a> <br>
                <a style ="color: black; margin-left:10% ;" href="contactus.php">• Contact Us</a> <br>
                <a style ="color: black; margin-left:10% ;" href="#about">• About Us</a> <br>
                <a style ="color: black; margin-left:10% ;" href="#vision">• Mission & Vision</a> <br>
                <a style ="color: black; margin-left:10% ;" href="https://www.google.com/maps/place/S+R+PUBLIC+SCHOOL+(+Branch-II+)+Srsngo.org+Head+Office/@27.458502,77.677109,16z/data=!4m6!3m5!1s0x397376b657193447:0xa815a5237c5a99ba!8m2!3d27.4585106!4d77.6768986!16s%2Fg%2F1hc5pz18x?hl=en-US">• Location</a> <br>
                
            </div>
            <div class="f"><span class="f1">Address!</span><br>
                  <span style="font-weight: bold; margin-left: 10%;">S.R Public School, Mathura</span> <br> 
                  <pre>       Old A.R.T.O. Office Compound,
       NH-2, Near SBI Bank, Mathura (U.P.) -281001
       Phone : 0565-2431515 , 9457229999
       Fax: 0565-2431414</pre>
                  <span style="font-weight: bold; margin-left: 10%;"> Email : srpublicschoolmathura@gmail.com</span><br>
                  <span style="font-weight: bold; margin-left: 10%;"> Website : <a style="color: blue;" href="http://www.srps.in">www.srps.in</a></span><br></div>
                  
        </div>
        <div id="cp" style="text-align: center;">
            Copyright © All Rights Reserved 2022-23 | Developed by : <span>Team Members</span> 
        </div>

    </div>
    <script>
        function myFunction() {
            if(document.getElementById("nvbr").style.display == "flex"){
                document.getElementById("nvbr").style.display = "none";
            }
            else{
                document.getElementById("nvbr").style.display = "flex";
            }
        }
    </script>
    
</body>
</html>
'
?>