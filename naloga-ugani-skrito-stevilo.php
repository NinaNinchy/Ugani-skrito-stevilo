<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>naloga-ugani-skrito-stevilo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

<?php
//ce je hidden input poslan, ga shrani v spremenljivko $skritoStevilo, če ni ga nastavi s funkcijo rand()
if (isset($_POST["skritoStevilo"])) {
    $skritoStevilo = $_POST["skritoStevilo"];
} else {
$skritoStevilo = rand (1,100);
}



if (isset($_POST["stevilo"])) {
	$key = $_POST["stevilo"];

    if ($skritoStevilo > $key) {
        echo "Niste uganili skritega števila. Pravo skrito število je večje od vašega.";
    } else if ($skritoStevilo < $key) {
        echo "Niste uganili skritega števila. Pravo skrito število je manjše od vašega.";
    } else if ($skritoStevilo = $key) {
        echo "Čestitam, uganili ste skrito število!!!";

        //izbereno novo skrito stevilo
        $skritoStevilo = rand (1,100);
    }
} else {
    echo "Ugibaj...";
}
?>


<body>
        
        <form action="naloga-ugani-skrito-stevilo.php" method="post">
            <!-- tukaj vpiši hidden input -->
            <!-- Hidden input v katerega shranjujemo trenutno število -->
                <input type="hidden" name="skritoStevilo" value="<?php echo $skritoStevilo; ?>">


              <div class="form-group">
                <p>Cheat sheet:</p><p style="color:white"> <?php echo "$skritoStevilo"; ?> </p>
                <label for="stevilo">Skrito število je:</label>
                <input type="text" clss="form-control" id="skritoStevilo" name="stevilo" placeholder="vpiši število">
              </div>
              <button type="submit" class="btn btn-default">Oddaj</button>
            </form>
    </body>