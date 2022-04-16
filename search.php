<?php
        include 'header.php';
?>


    <?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM towns WHERE Regions LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!";

        if ($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='nairobi.php?Regions".$row['Regions']."'><div>
            <h1>".$row['Regions']."</h1>
            </div></a>";
            }

        }
        else {
            echo "No results matching your search!";
        }
    }
?>
