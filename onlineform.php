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
                <a href="contactus.ph5p"> <i class="fa fa-phone-square" aria-hidden="true"></i>Contact Us</a>
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
        <form action="database.php" method="post">  <div><h1 style="text-align: center; margin-top: 30px;margin-bottom: 30px;"> Registration Form</h1></div>
            <div id="form">
               <div class ="inputs">
                   Enter Your Name: <span>*</span><input type="text" name="s_name" id="" required style="margin-right: 0px;margin-left: 8%;"pattern="[A-Z a-z]{3,32}"  maxlength="32">
               </div>
               <div class ="inputs">
                Enter Father\'s Name:<span>*</span><input type="text" name="s_fname" id="" required style="margin-right: 0px;margin-left: 5%;"pattern="[A-Z a-z]{3,32}"  maxlength="32">
                </div>
                <div class ="inputs">
                    Enter Mother\'s Name:<span>*</span><input type="text" name="s_mname" id="" required style="margin-right: 0px;margin-left: 4%;" pattern="[A-Z a-z]{3,32}" maxlength="32">
                </div>
                <div class = "inputs">
                    Enter UID No. :<span>*</span><input type="number" name="s_uid" id="" required style="margin-right: 0px;margin-left: 11%;" pattern ="[0-9]{12}">
                </div>
                <div class = "inputs">
                    E-Mail Address :<span>*</span><input type="email" name="s_email" id="" required style="margin-right: 0px;margin-left: 10%;">
                </div>
                <div class="inputs">
                    Enter Address :<span>*</span><input type="text" name="s_address" id="" required style="margin-right: 0px;margin-left: 11%;">
                </div>
                <div class="inputs">
                    Enter Mob. No. :<span>*</span><input type="tel" name="s_mobile" id=""  pattern = "[0-9]{10}" required style="margin-right: 0px;margin-left: 9%; border-radius: 5px;
                    background-color:gainsboro;">
                </div>
                <div class=" inputs">
                    Date Of Birth: <span>*</span><input type="date" name="s_dob" id="" required style="margin-right: 0px; margin-left: 10%;">
                </div>
                
                <div class ="inputs">
                    Choose Class:   <span>* </span>
                     <select name="s_class" id="" style="margin-left: 10%;">
                         <option value="none" disabled selected >Choose Class</option>
                         <option value="pg" required>PLAY GROUP</option> 
                         <option value="nersury">Nersury</option>
                         <option value="lkg">L.K.G</option>
                         <option value="ukg">U.K.G</option>
                         <option value="first">I</option>
                         <option value="second">II</option>
                         <option value="third">III</option>
                         <option value="forth">IV</option>
                         <option value="fifth">V</option>
                         <option value="sixth">VI</option>
                         <option value="seventh">VII</option>
                         <option value="eighth">VIII</option>
                         <option value="ninth">IX</option>
                         <option value="tenth">X</option>
                         <option value="eleventh">XI</option>
                         <option value="twelth">XII</option>
                     </select>
                 
                </div>
            <div style="margin-left: 40%;"> <input type="submit" value="Register" name="Register"></div>
            </div>
             
       </form> <br>
        <div id ="footer">
            <div class ="f"><span class="f1">Important Links!</span> <br>
                <a style ="color: black; margin-left:10% ; " href="aboutus.php">• Director Message</a> <br>
                <a style ="color: black; margin-left:10% ;" href="aboutus.php">• Principal Message</a> <br>
                <a style ="color: black; margin-left:10% ;" href="contactus.php">• Contact US</a> <br>
                <a style ="color: black; margin-left:10% ;" href="aboutus.php">• About Us</a> <br>
                <a style ="color: black; margin-left:10% ;" href="aboutus.php">• Mission & Vision</a> <br>
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


';
?>