<?php
    session_start();
	include '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/view-bookings.css" type="text/css"> -->
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link rel="stylesheet" href="../css/search.css" type="text/css">
    <link rel="stylesheet" href="../css/reports.css" type="text/css">
    <title>Acitivity Reports</title>
</head>

<style>
   body {
    background-image: url(../project_images/profileback.png);
    background-repeat: no-repeat;
}
</style>

<body>
    
<div class="nav"  rel="stylesheet" href="../css/home.css" type="text/css">
        <div class="left">
            
            <a href="../home.php">Home</a>
            <div class="places">
                <button class="dropbtn">Places
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                    <li><a href="../nairobi.php">Nairobi</a></li>
                    <li><a href="../kisumu.php">Kisumu</a></li>

                    <li><a>Coastal Kenya</a>
                    <ul>
                       <li><a href="../mombasa.php">Mombasa</a></li>
                       <li><a href="../lamu.php">Lamu</a></li>
                       <li><a href="../diani.php">Diani</a></li>
                       <li><a href="../malindi.php">Malindi</a></li>
                       <li><a href="../taita.php">Taita</a></li>
                    </ul>
                    <li>     
                    <li><a href="../centralkenya.php">Central Kenya</a></li>           
                    <li><a href="../riftvalley.php">Rift Valley</a></li>   
                </div>
            </div>

            <div class="activities">
                <button class="dropbtn">Activities
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="activities-content">
                    <a href="../wildlife.php">Wildlife & Nature</a>
                    <a href="../history.php">History & Culture</a>
                    <a href="../beaches.php">Beaches</a>
                    <a href="../adventures.php">Hikes & Other Adventures</a>
                </div>
            </div>
            <div class="places">
                <button class="dropbtn">Book
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                <li><a>Accomodation</a>
                    <ul>
                    <li><a href="../book-nairobi.php">Nairobi</a></li>
                    <li><a href="../book-kisumu.php">Kisumu</a></li>
                       <li><a href="../book-mombasa.php">Mombasa</a></li>
                       <li><a href="../book-lamu.php">Lamu</a></li>
                       <li><a href="../book-diani.php">Diani</a></li>
                       <li><a href="../book-malindi.php">Malindi</a></li>
                       <li><a href="../book-taita.php">Taita</a></li>
                       <li><a href="../book-centralkenya.php">Central Kenya</a></li>           
                    <li><a href="../book-riftvalley.php">Rift Valley</a></li>  
                    </ul>
                    <li>
                    <li><a href="../flights.php">Flights</a></li>                       
                     
                </div>
            </div>
            <a href="../maps.php">Maps</a>
            <a href="javascript:void(0); " class="icon " onclick="myFunction() ">
                <i class="fa fa-bars "></i>
            </a>

            <form action="../search.php" method="POST" rel="stylesheet" href="css\search.css" type="text/css">
            <div class="wrap">
            <div class="search">
                <input type="text" name="search" class="searchTerm" placeholder="search...">
                <button type="submit" name="submit-search" class="searchButton">
                <i class="fa fa-search"></i>
                </button>
            </div>
            </div>
            </form>
        </div> 

    <div class="right">
    <?php
        if(isset($_SESSION["firstname"])){
            echo "<p>Hello " .$_SESSION["firstname"]. "!</p>";
            echo "<a href='dashboard.php'>Admin Panel</a>";
            echo "<a href='../includes/logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='../login.php'>Log in</a>";
            echo "<a href='../signup.php'>Create Account</a>";
        }
    ?>
    </div>

</div>



<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<h1 class="logo-title">
					<span>ADMIN PANEL</span>
				</h1>
			</div>
		</div>
		<div class="app-header-navigation">
			<div class="tabs">
				<a href="user-reports.php">
					User Reports
				</a>
				<a href="place-reports.php" >
					Places Reports
				</a> 
				<a href="activity-reports.php" >
					Activities Reports
				</a>				
				<a href="accommodations-reports.php">
					Accommodations Reports
				</a>
				<a href="flights-reports.php">
					Flights Reports
				</a>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
			<div class="name">
            <?php
              echo "<p>" .$_SESSION["firstname"]."  ".$_SESSION["lastname"]."</p>";
            ?>    
           </div>
			</button>
        </div>
	</header>

		<div class="app-body-main-content">

                <a href="../signup.php"><button class="button-add">Add Activity</button></a>

                <div class='tbl-header'>
	              <table cellpadding='0' cellspacing='0' border='0'>
                   <thead>
                    <p>NATIONAL PARKS</p>
                     <tr>
                      <th>Activity</th>
                      <th>Town</th>
                     </tr>
                  </thead>
                 </table>
	           </div>

            <?php
            $stmt = "SELECT * FROM tour_guide.national_parks; ";
            // $row = $stmt->fetch_assoc();
            $query_run = mysqli_query($conn,$stmt);
            if(mysqli_num_rows($query_run)>0){
              foreach($query_run as $row){
              echo"
              <table cellpadding='0' cellspacing='0' border='0'>
              <tbody>
                <tr>
                   <td>" . $row['name'] . "</td>
                   <td>" . $row['county'] . "</td>
               </tr>
              </tbody>
            </table>";
              }
            }
           ?>
           <div class='tbl-header'>
	              <table cellpadding='0' cellspacing='0' border='0'>
                   <thead>
                    <p>HISTORICAL SITES</p>
                     <tr>
                      <th>Activity</th>
                      <th>Town</th>
                     </tr>
                  </thead>
                 </table>
	           </div>

            <?php
            $stmt = "SELECT * FROM tour_guide.historical_sites; ";
            // $row = $stmt->fetch_assoc();
            $query_run = mysqli_query($conn,$stmt);
            if(mysqli_num_rows($query_run)>0){
              foreach($query_run as $row){
              echo"
              <table cellpadding='0' cellspacing='0' border='0'>
              <tbody>
                <tr>
                   <td>" . $row['name'] . "</td>
                   <td>" . $row['county'] . "</td>
               </tr>
              </tbody>
            </table>";
              }
            }
           ?><div class='tbl-header'>
           <table cellpadding='0' cellspacing='0' border='0'>
            <thead>
             <p>BEACHES</p>
              <tr>
               <th>Activity</th>
               <th>Town</th>
              </tr>
           </thead>
          </table>
        </div>

     <?php
     $stmt = "SELECT * FROM tour_guide.beaches; ";
     // $row = $stmt->fetch_assoc();
     $query_run = mysqli_query($conn,$stmt);
     if(mysqli_num_rows($query_run)>0){
       foreach($query_run as $row){
       echo"
       <table cellpadding='0' cellspacing='0' border='0'>
       <tbody>
         <tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['county'] . "</td>
        </tr>
       </tbody>
     </table>";
       }
     }
    ?>
	            <div class='tbl-header'>
	              <table cellpadding='0' cellspacing='0' border='0'>
                   <thead>
                    <p>ADVENTURES</p>
                     <tr>
                      <th>Activity</th>
                      <th>Town</th>
                     </tr>
                  </thead>
                 </table>
	           </div>

            <?php
            $stmt = "SELECT * FROM tour_guide.adventures; ";
            // $row = $stmt->fetch_assoc();
            $query_run = mysqli_query($conn,$stmt);
            if(mysqli_num_rows($query_run)>0){
              foreach($query_run as $row){
              echo"
              <table cellpadding='0' cellspacing='0' border='0'>
              <tbody>
                <tr>
                   <td>" . $row['name'] . "</td>
                   <td>" . $row['county'] . "</td>
               </tr>
              </tbody>
            </table>";
              }
            }
           ?>
			
		</div>
	
</div>


</body>
</html>