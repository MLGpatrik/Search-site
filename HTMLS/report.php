<html>
<head>
<meta charset="UTF-8">
 <title> Alienek �ltal va� elrabl�s jelent�se </title>
</head>
<body>
 <h2> Az Alienek �ltal va� elrabl�s jelent�se</h2>
<?php
 $name=$_POST["firstname"]." ".$_POST['lastname'];
 $email =$_POST["email"];
 $whenithappened=$_POST["whenithappened"];
 $howlong =$_POST["howlong"];
 $howmany =$_POST["howmany"];
 $aliendescription=$_POST["aliendescription"];
 $whattheydid =$_POST["whattheydid"];
 $fangspotted =$_POST["fangspotted"];
 $other=$_POST["other"];
 
 echo 'K�sz hogy kit�lt�tted a jelent�st! :). <br />';
 echo 't�ged legut�bb: '. $whenithappened ." -ben/ban raboltak el ".$howlong." �r�ra.". '<br />';
 echo $howmany." alient l�tt�l.".'<br />';
 echo "�rd le �ket: ".$aliendescription.'<br />';
 echo "Az alienek ezt csin�lt�k:".$whattheydid."<br />";
 echo "ott volt fang ? ".$fangspotted.'<br />';
 echo "B�rmi egy�b amit velem szeretn�l tudatni:".$other."<br />";
 echo "email c�med: ".$email."<br />";
?>

</body>
</html>