<?php
    include 'includes\dbh.inc.php';
?>

<?php
    $Regions = mysqli_real_escape_string($conn, $_GET['Regions']);

    $sql = "SELECT * FROM towns WHERE Regions = '$Regions'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    
    if($queryResults > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div>
            <h3>".$row['Regions']."</h3>
            </div>";
        }
    }
?>

