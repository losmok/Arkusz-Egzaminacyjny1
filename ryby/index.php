<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wędkowanie</title>
</head>
<body>
    <div class="baner"><h1>Portal dla wędkarzy</h1></div>
    <div class="lewyall">
        <div class="lewy1">
            <h3>Ryby zamieszkujące rzeki</h3>
            <?php
                $con = new mysqli("127.0.0.1","root","","wendkowanie");
                $res1 = $con->query("SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM ryby JOIN lowisko ON lowisko.Ryby_id=ryby.id WHERE ryby.wystepowanie LIKE '%rzeki%';");
                $cos1 = $res1->fetch_all();
                echo "<ol>";
                for($i=0;$i<count($cos1);$i++)
                {
                    echo "<li>".$cos1[$i][0]." pływa w rzece ".$cos1[$i][1].",".$cos1[$i][2]."</li>";
                }
                echo "</ol>";
            
            ?>
        </div>
        <div class="lewy2">
            <br>
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <td>L.p.</td><td>Gatunek</td><td>Występowanie</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Paweł Lewandowski</p>
    </div>
</body>

</html>

