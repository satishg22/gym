<!DOCTYPE html>
<html class="no-js lt-ie9"> <![endif]-->
<html class="no-js">

<head>
    <meta charset="utf-8">
    

    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/superfish.css">

    <link rel="stylesheet" href="css/style.css">


    <script src="js/modernizr-2.6.2.min.js"></script>
   
</head>
<style>
    ul:hh{
        list-style-type: square;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: whitesmoke;
        border-color: white;
        size: 20px;
        background-color: grey;
         color: #fff;
    }
    #days{
        background-color: grey;
         color: #fff;
  padding: 20px;
  border-radius: 5px;
  margin-top: 20px;
  margin-left: 300px;
  margin-right: 300px;
    }
    #navbar{
         color: #fff;
  padding: 20px;
  border-radius: 5px;
  margin-top: 20px;
  margin-left: 300px;
    }
    

    ol {
        float: left;
                size: 20px;

    }
    li {
         display: block;
        text-align: center;
        padding: 16px;
        color: black;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  font-size: 20px;

    }
    

    ol a {
        display: block;
        text-align: center;
        padding: 16px;
        color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  font-size: 20px;
        
    }

    ol a:hover {
        background-color: #111111;
    }

    a:link {
        color: red;
    }

    a:visited {
        color: rebeccapurple;
    }

    a:hover {
        color: aliceblue;
    }
    li:hover {
        color: aliceblue;
    }


    a:active {
  color: white;
    }
    h1 {
  font-size: 70px;
  font-weight: 600;
  color: #fdfdfe;
  text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
    0px 0px 20px #b393d3;
}
h3{
    text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
    0px 0px 20px #b393d3;
}
}
ul:schedule{
    color: black;
}
#sunday-content {
  display: none;
}
.day-content {
  display: none;
  background-color: #333;
  color: #fff;
  padding: 20px;
  border-radius: 5px;
  margin-top: 20px;
  margin-left: 40px;
  margin-right: 40px;

}

.card {
  background-color: #444;
  padding: 20px;
  border-radius: 5px;
  margin-left: 40px;
  margin-right: 40px;
  margin-bottom: 40px;
}
</style>

<body style="background-color:white;background-image: url('contemporary-spotless-fitness-gym-center-interiorgenerative-ai_391052-10889.avif');">
    <h1 style="color: white; ;background-size: cover; ">
        <center> WORKOUT SCHEDULE</center>
    </h1>

    <h3 style="color: black;text-align:center;font-family: verdana;"><strong> NO PAIN NO GAIN</strong></h3>
    
    <div id="navbar">
    <div class="f" style="background-image: url('includes\images\pexels-photo-1954524.jpeg'); "

     <ul style="color: beige;" class="hh">
        <ol class="nav-item">
            <a class="nav-link active" href="index.php"><span style="color:white;font-weight:bold">HOME</span></a>
        </ol>
        <ol class="nav-item">
            <a class="nav-link" href="header.php"><span style="color:white;font-weight:bold">HEADER</span></a>
</ol>
        <ol class="nav-item">
            <a class="nav-link" href="trainer.php"><span style="color:white;font-weight:bold">TRAINER</span></a>
         </ol>
        <ol class="nav-item">
            <a class="nav-link disabled" href="payment.php"><span style="color:white;font-weight:bold">PAYMENT</span></a>
        </ol>
     </ul>
</div>
     </div>
<br>
<br>
<br>

    <div class="fh5co-parallax" style=" height:150px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell animate-box">
                       <h1 style="margin-left:600px;">ROUTINE</h1>
                        
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
        <div class="container">
            <center>
            <button id="day-btn" style="cursor: pointer; background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;">Select today </button>
            </center>
            <div id="day-content"></div>


            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul id="days" class="list-group">
        <li class="list-group-item list-group-item-primary">Sunday</li>
        <li class="list-group-item list-group-item-secondary">Monday</li>
        <li class="list-group-item list-group-item-success">Tuesday</li>
        <li class="list-group-item list-group-item-danger">Wednesday</li>
        <li class="list-group-item list-group-item-warning">Thursday</li>
        <li class="list-group-item list-group-item-info">Friday</li>
        <li class="list-group-item list-group-item-dark">Saturday</li>
      </ul>
                   
                </div>
         <div id="sunday-content" style="display: none;">
           <div class="card">


  <h2>Sunday Workout</h2>
  <p>Warm-up: 5-10 minutes of light cardio (e.g., brisk walking, jogging)</p>
  <h2>Strength Training</h2>
    <p>Squats: 3 sets of 10-12 reps</p>
    <p>Push-ups (can be modified as needed): 3 sets of 8-10 reps</p>
    <p>Bent-over Rows (with dumbbells or resistance bands): 3 sets of 10-12 reps</p>
    <p>Plank: 3 sets, hold for 30-60 seconds each</p>
  <h2>Cool-down</h2>
  <p>5-10 minutes of stretching</p>
</div>
</div>
 <div id="monday-content" style="display: none;">
           <div class="card">


  <h2>Monday Workout</h2>
  <p>Warm-up: 5-10 minutes of light cardio (e.g., jumping jacks, high knees)</p>
  <h2>Cardio Workout:</h2>
    <p>Interval Training: Alternate between 1 minute of high-intensity exercise (e.g., sprinting, jumping rope)</p>
    <p>Push-ups (can be modified as needed): 3 sets of 8-10 reps</p>
    <p>1 minute of moderate-intensity exercise (e.g., brisk walking, jogging) for a total of 20-30 minutes.</p>
    <p>Plank: 3 sets, hold for 30-60 seconds each</p>
  <h2>Cool-down</h2>
  <p>5-10 minutes of stretching</p>
</div>
</div>
<div id="tuesday-content" style="display: none;">
           <div class="card">


  <h2>Tuesday Workout</h2>
  <p>Warm-up: Light activity such as walking, swimming, or yoga for 30-45 minutes to promote recovery and mobility.
</p>
  <h2>Cardio Workout:</h2>
    <p>Push-ups (can be modified as needed): 3 sets of 8-10 reps</p>
    <p>1 minute of moderate-intensity exercise (e.g., brisk walking, jogging) for a total of 20-30 minutes.</p>
    <p>Plank: 3 sets, hold for 30-60 seconds each</p>
  <h2>Cool-down</h2>
  <p>5-10 minutes of stretching</p>
</div>
</div>
<div id="wednesday-content" style="display: none;">
           <div class="card">


  <h2>Wednesday Workout</h2>
  <p>Warm-up: 5-10 minutes of light cardio (e.g., jumping jacks, high knees)</p>
  <h2>Cardio Workout:</h2>
    <p>Interval Training: Alternate between 1 minute of high-intensity exercise (e.g., sprinting, jumping rope)</p>
    <p>Push-ups (can be modified as needed): 3 sets of 8-10 reps</p>
    <p>1 minute of moderate-intensity exercise (e.g., brisk walking, jogging) for a total of 20-30 minutes.</p>
    <p>Plank: 3 sets, hold for 30-60 seconds each</p>
  <h2>Cool-down</h2>
  <p>5-10 minutes of stretching</p>
</div>
</div>
<div id="thursday-content" style="display: none;">
           <div class="card">
            <p>Warm-up: Light activity such as walking, swimming, or yoga for 30-45 minutes to promote recovery and mobility.
</p>
  <h2>Cardio Workout:</h2>
    <p>Push-ups (can be modified as needed): 3 sets of 8-10 reps</p>
    <p>1 minute of moderate-intensity exercise (e.g., brisk walking, jogging) for a total of 20-30 minutes.</p>
    <p>Plank: 3 sets, hold for 30-60 seconds each</p>
  <h2>Cool-down</h2>
  <p>5-10 minutes of stretching</p>

  
</div>
</div>
<div id="friday-content" style="display: none;">
           <div class="card">
            <h2>Friday workout</h2>
  <h2>Rest day or engage in light activity such as walking, stretching, or yoga.
</h2>
    
  <p>5-10 minutes of stretching</p>

  
</div>
</div>
<div id="saturday-content" style="display: none;">
           <div class="card">
            <h2>Saturday workout</h2>
                        <h2>Plank: 3 sets, hold for 30-60 seconds each
</h2>


  <h2>Spend 30-45 minutes focusing on stretching and mobility exercises to improve flexibility and range of motion. Include exercises such as yoga or Pilates.
</h2>
    
  <p>5-10 minutes of stretching</p>

  
</div>
</div>







               

    <footer>
        <div id="footer">
         <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <h3 class="section-title">About Us</h3>
                        <p style="background-color:#444black;">A gym promise sign can serve as a reminder of the values and principles that a gym stands for, promoting a culture of mutual respect, hard work, and inclusivity. It can help to create a sense of community among gym-goers, reinforcing the idea that everyone is working together towards a common goal of better health and fitness.</p>

                    </div>
            </div>

                    <div class="col-md-4 animate-box">
                        <h3 class="section-title">Our Address</h3>
                        <ul class="contact-info">
                            <li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class="icon-phone"></i>+ 1235 2355 98</li>
                            <li><i class="icon-envelope"></i><a href="#">we3@gmail.com</a></li>
                            <li><i class="icon-globe2"></i><a href="#">www.we3.com</a></li>
                        </ul>
                    </div>
                    
                </div>

            </div>
        </div>
    </footer>


    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>
    <script>
        const daysList = document.getElementById('days');
        const dayContent = document.getElementById('day-content');
        const sundayContent = document.getElementById('sunday-content');
        const mondayContent = document.getElementById('monday-content');
        const tuesdayContent = document.getElementById('tuesday-content');
        const wednesdayContent = document.getElementById('wednesday-content');
        const thursdayContent = document.getElementById('thursday-content');
        const saturdayContent = document.getElementById('saturday-content');
        const fridayContent = document.getElementById('friday-content');



        daysList.addEventListener('click', (event) => {
            if (event.target.textContent === 'Sunday') {
                sundayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                sundayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Monday') {
                mondayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                mondayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Tuesday') {
                tuesdayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                tuesdayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Wednesday') {
                wednesdayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                wednesdayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Thursday') {
                thursdayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                thursdayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Friday') {
                fridayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                fridayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }
            if (event.target.textContent === 'Saturday') {
                saturdayContent.style.display = 'block';
                dayContent.style.display = 'none';
            } else {
                saturdayContent.style.display = 'none';
                dayContent.style.display = 'block';
            }


        });

    </script>
   

</body>

</html>