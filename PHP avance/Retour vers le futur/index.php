<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<?php
// Départ
$presentTime = new DateTime();
clone($presentTime);

$day = date_format($presentTime, 'd');
$month = date_format($presentTime, 'M');
$year = date_format($presentTime, 'Y');

$dayFormat = date_format($presentTime, 'A');
$hour = date_format($presentTime, 'h');
$min = date_format($presentTime, 'i');
$presentTime = $presentTime->format('M-d-Y - A h:i');

// Arrivée
$destinationTime = (new DateTime())->setDate('2040', '02', '13');
$destinationTime = $destinationTime->setTime('14', '47');
//$destinationTime = $destinationTime->format('M-d-Y' - 'A h:i');

$Aday = date_format($destinationTime, 'd');
$Amonth = date_format($destinationTime, 'M');
$Ayear = date_format($destinationTime, 'Y');

$AdayFormat = date_format($destinationTime, 'A');
$Ahour = date_format($destinationTime, 'h');
$Amin = date_format($destinationTime, 'i');
$ApresentTime = $destinationTime->format('M-d-Y - A h:i');

// 3eme
$datetime1 = new DateTime();
clone($datetime1);
$datetime2 = (new DateTime())->setDate('2040', '02', '13');
$datetime2 = $datetime2->setTime(12, 54);
$interval = $datetime1->diff($datetime2);
// Calcul en minutes
$days1 = $interval->days * 24 * 60;
$hour1 = $interval->h * 60;
$min1 = $interval->i;
$result = $days1 + $hour1 + $min1;

// Calcul pour carburant
$result2 = $result / 10000;

$datetime3 = new DateTime();
clone($datetime3);
$datetime4 = (new DateTime())->setDate('2040', '02', '13');
$datetime4 = $datetime4->setTime(12, 54);
$interval = $datetime3->diff($datetime4);
?>



<!-- RESULTAT -->
<div class="container">
    <div class="row">
        <p class="col-12">Date de départ : <?php echo $presentTime?></p>
        <p class="col-12">Date d'arrivée : <?php echo $ApresentTime?></p>
    </div>


</div>
<!-- HTML - CSS -->
<div class="container fixed-size bg-dark">
    <div class="row">
        <div class="col-2">
            <div class="text-white bg-red text-center">MONTH</div>
            <div class="color-orange big-font-size text-center"> <?php echo $Amonth; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">DAY</div>
            <div class="color-orange big-font-size text-center"> <?php echo $Aday; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">YEAR</div>
            <div class="color-orange big-font-size text-center"> <?php echo $Ayear; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">AM</div>
            <div class="active text-secondary text-center">&diams;</div>
            <div class="text-white bg-red text-center">PM</div>
            <div class="no-active text-success text-center">&diams;</div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">HOUR</div>
            <div class="color-orange big-font-size text-center"> <?php echo $Ahour; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">MIN</div>
            <div class="color-orange big-font-size text-center"> <?php echo $Amin; ?></div>
        </div>
    </div>
    <div class="row">
        <div class="destination bg-black mx-auto text-white px-3 py-0">
            <div class="destination-title">
                DESTINATION TIME
            </div>
        </div>
        <div class="border-bottom w-100"></div>
    </div>

    <div class="row">
        <div class="col-2">
            <div class="text-white bg-red text-center">MONTH</div>
            <div class="color-green big-font-size text-center"> <?php echo $month; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">DAY</div>
            <div class="color-green big-font-size text-center"> <?php echo $day; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">YEAR</div>
            <div class="color-green big-font-size text-center"> <?php echo $year; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">AM</div>
            <div class="active text-secondary text-center">&diams;</div>
            <div class="text-white bg-red text-center">PM</div>
            <div class="no-active text-success text-center">&diams;</div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">HOUR</div>
            <div class="color-green big-font-size text-center"><?php echo $hour; ?></div>
        </div>
        <div class="col-2">
            <div class="text-white bg-red text-center">MIN</div>
            <div class="color-green big-font-size text-center"> <?php echo $min; ?></div>
        </div>
    </div>
    <div class="row">
        <div class="destination bg-black mx-auto text-white px-3 py-0">
            <div class="destination-title">
                PRESENT TIME
            </div>
        </div>
    </div>
</div>
<div class="container">
<p>Intervalle entre les deux dates :</p>
<p><?php echo $interval->format('%Y année %m mois, %d jour %h heure %i minute');?></p>

    <p> Intervalle entre les deux dates en minutes et secondes :</p>
    <p><?php echo $result . ' minutes';?></p>

    <p> Le nombre de Litres de carburant nécessaires pour le trajet est de :</p>
    <p><?php echo $result2 . ' Litres ';?></p>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
</body>
</html>