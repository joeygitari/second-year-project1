<?php
    include 'includes\dbh.inc.php';
?>

<?php
    $region = mysqli_real_escape_string($conn, $_GET['region']);

    $sql = "SELECT * FROM places WHERE region = '$region'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    
    if($queryResults > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div>
            <h3>".$row['region']."</h3>
            </div>";
        }
    }
?>

