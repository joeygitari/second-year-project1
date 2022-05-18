<?php
        include 'header.php';
?>


    <?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM places WHERE region LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!";

        if ($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                switch ($search) {
                    case 'Nairobi'|'nairobi':
                        echo "<a href='nairobi.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;
                    
                    case 'Kisumu'|'kisumu':
                        echo "<a href='kisumu.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Mombasa'|'mombasa':
                        echo "<a href='mombasa.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Lamu'|'lamu':
                        echo "<a href='lamu.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Diani'|'diani':
                        echo "<a href='diani.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Malindi'|'malindi':
                        echo "<a href='malindi.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Taita'|'taita':
                        echo "<a href='taita.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Central'|'central':
                        echo "<a href='centralkenya.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;

                    case 'Rift'|'rift':
                        echo "<a href='riftvalley.php?region".$row['region']."'><div>
                        <h1>".$row['region']."</h1>
                        </div></a>";
                        break;


                    default:
                        echo "No results matching your search!";
                        break;
                }
        
            }

        }
        else {
            echo "No results matching your search!";
        }
    }
?>
