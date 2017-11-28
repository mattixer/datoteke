<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.html">

    <input type="submit" value="Natrag" />
</form>
<?php
$datoteka = fopen("Osobe.txt", "r");
if($datoteka){
    echo "<table>
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Adresa</th>
                    <th>Mjesto</th>
                    <th>Tel. br.</th>
                </tr>
            </thead>
            <tbody>";
    while (!feof($datoteka)){
        echo "<tr>";
        for($i=0;$i<5;$i++){
            $redak = fgets($datoteka);
            echo "<td>$redak</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
}
fclose($datoteka);
$brojac = fopen("br.txt", "a+");
fwrite($brojac , "I");
echo "Broj posjeta: " . strlen(fgets($views));
fclose($brojac);
?>
</body>
</html>