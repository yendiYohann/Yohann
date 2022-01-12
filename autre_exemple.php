<?php 
$Tableau = array(
    "Nom" => array("Yohann","Jean","Kossi","Ablibo","jopjds","TFGH"),
    "Prenom" => array("Kossi","Lafi","Fogan","Tobli","GYUHJ","tfvgybh"),
    "Age" => array(15,16,19,26,45,12),
    "Filière" => array("GL","RSS","DW","CS","RSS","gfh"),
    "Essai" => array("1","2","3","4","5","fghj"),
);
#echo count($Tableau["Nom"]);
?>
<!DOCTYPE html>
<html>

<head>
    <title>My PHP page</title>
</head>

<body>
    <table border="1">
        <tr>
            <?php 
                    for ($i = 4; $i < count($Tableau); $i++) {
                        foreach ($Tableau as $key => $value) {
                            print "<th>".$key."</th>";
                            # code...
                        }break;
                    };
            ?>
        </tr>
        <?php
            for ($i=0;$i<=count($Tableau["Nom"]);$i++){
                for($i=0;$i<count($Tableau);$i++){
                    echo"<tr>";
                    foreach ($Tableau as $key => $value) {
                        # code...
                        echo "<td>".$Tableau[$key][$i]."</td>";
                    }
                    echo "</tr>";
                    }break;
                
                }
        ?>
    </table>

</body>

</html>