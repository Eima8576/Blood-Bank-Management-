<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Management System</title>
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

</head>

<body>
<header>
        
        <div id="head-container">
            <div id="head-nav">
                <nav>
                    <ul class="nav_links">
                        <li><a href="new.php"><i class="fa fa-home"></i> HOME</a>
                        </li>
                        <li><a href="#"><i class="fa fa-question-circle"></i> ABOUT US</a></li>
                        <li><a href="#"><i class="fa fa-question"></i> WHY US</a></li>
                        <li><a href="#"><i class="fa fa-group"></i> GET INVOLVED</a></li>
                        <li><a href="#"><i class="fa fa-book"></i> BLOOD STORIES</a></li>
                        <li><a href="#"><i class="fa fa-file-archive-o"></i> RESOURCES</a></li>
                      </ul>
                </nav>
            </div>
            <div id="nav-button">
                <a href="index.php" class="cts"><button>Donate</button></a>
                <a href="#" class="cts"><button>Request</button></a>
                <a href="#" class="cts"><button>Contact</button></a>
              </div>

        </div> 
    </header>
   

 <h1 align="center">Blood Bank Management</h1>
 <div class="people">
    <form action="welcome_get.php" method="get">
    
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        
        <label for="Mname">Middle name:</label><br>
        <input type="text" id="Mname" name="Mname"><br>
        
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br>
        
        <label for="email">E-mail:</label><br>
        <input type="text" name="email"><br>
        
        <label for="contact">Contact:</label><br>
        <input type="number" name="contact"><br>
        
        Gender:<br>
        <input name="radio" type="radio" value="">Male
        <input name="radio" type="radio" value="">Female<br>
        
        Blood Group:<br>
        <select>
        <option>A+</option>
        <option>O+</option>
        <option>B+</option>
        <option>AB+</option>
        <option>A-</option>
        <option>O-</option>
        <option>B-</option>
        <option>AB-</option>
        </select><br>
        <input type="submit">
        </form>
 </div>
       
    </body>


</html>