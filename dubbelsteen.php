<h2>Chris Salinas Soto MD1A</h2>
<style>
    body{
        text-align: center;
        background-color: white;
    }
    .dubbel{
        border: 2px solid black;
        margin: 20px;
        color: black;
    }

    p{
        font-size: 300%;
        text-align: center;
    }
</style>
<body>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
    <input style="font-size: 180%;" type="submit" value="Nieuwe kans!">
</form>
</body>
<?php
require_once ("connect_function.php");
require_once ("db_show.php");
$worpen = array();
function dobbelSteen($worp){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255, 255, 255);

    if($worp > 1) {
        imagefilledellipse($im, 50, 50, 40, 40, $white);//1
        imagefilledellipse($im, 150, 150, 40, 40, $white);//7
    }

    if($worp==4||$worp==5||$worp==6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);//2
        imagefilledellipse($im, 50, 150, 40, 40, $white);//5
    }

    if($worp == 6){
        $counter = 6;
        imagefilledellipse($im, 50, 100, 40, 40, $white);//3
        imagefilledellipse($im, 150, 100, 40, 40, $white);//6
    }

    if ($worp == 1||$worp == 5||$worp==3){
        imagefilledellipse($im, 100,100,40,40,$white);//4
    }

    imagepng($im,"dubbelsteen" . $worp .".png");
    imagedestroy($im);
    print " <img class='dubbel' src=dubbelsteen$worp.png?".date("U").">";

}

for ($i=0 ;  $i <5   ; $i++)
{$worp = rand(1,6);
    dobbelSteen($worp);

    array_push($worpen, $worp);
}
function analyse($aWorp){
    $aScore = array (0,0,0,0,0,0,0);//initialiseer de array met alle waarden op 0
    for ($i = 1 ; $i <= 6 ; $i++){//outer loop
        for ($j = 0 ; $j <5 ; $j++){//inner loop
            if ($aWorp[$j] == $i){
                $aScore[$i]++;
            }}}
    return $aScore;
}
$answer = "Niks";

$aWorp = analyse($worpen);
rsort($aWorp);
if($aWorp['0'] == 5){
    $answer = "Poker";
}
if($aWorp[0] == 4){
    $answer = "Carre";
}
if($aWorp[0] == 3 && $aWorp[1] == 2){
    $answer = "Full house";
}
if($aWorp[0] == 3){
    $answer = "3 of a kind";
}
if($aWorp[0] == 2){
    $answer = "One pair";
}
if($aWorp[0] == 2 && $aWorp[1] == 2){
    $answer = "Two pair";
}

echo '<p>'. $answer . '</p>';

//database
$userID = "123456";
insertScore($userID, $aWorp, $answer);
showAll();


?>

<?php
function printSource(){
    echo "<h1>de source code</h1>";
    $all_lines = file("dubbelsteen.php");
    foreach ($all_lines as $line_num => $line)
    {
        // echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>\n";
        echo " " . htmlspecialchars($line) . "<br>\n";
    }
}
printSource();
?>

