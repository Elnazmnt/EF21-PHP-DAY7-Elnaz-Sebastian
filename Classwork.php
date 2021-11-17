<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classwork (PHP-Day 7)</title>
</head>

<body style="background-color: pink;">

    <?php

    class Vehicles
    {
        public $name;
        public $model;
        public $makeYear;
        public $color;
        public $fuelType;

        function __construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh)
        {
            $this->name = $name_veh;
            $this->model = $model_veh;
            $this->makeYear = $makeYear_veh;
            $this->color = $color_veh;
            $this->fuelType = $fuelType_veh;
        }
        public function printVehiches()
        {
            return '<h1>Hallo liebe Kunde: the  ' . $this->name .  ' ,' . $this->model . ' :ist super gutes Auto. </br></h1> ';
        }
    }

    $vehiclesOne = new Vehicles("BMW", "X6", 2020, "black", "gasoline");
    $rtnVal = $vehiclesOne->printVehiches();
    print " $rtnVal";

    $vehiclesTwo = new Vehicles("Benz", "C_Class", 2018, "with", "gasoline");
    $rtnVal = $vehiclesTwo->printVehiches();
    print " $rtnVal";

    $vehiclesThree = new Vehicles("Porsche", "panamera", 2021, "platinum", "gasoline");
    $rtnVal = $vehiclesThree->printVehiches();
    print " $rtnVal";

    class Ship extends Vehicles
    {
        public $capacity;
        public $type;

        function __construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh,$capacity,$type)
        {
            parent::__construct($name_veh, $model_veh, $makeYear_veh, $color_veh, $fuelType_veh,$capacity,$type);
            $this->capacity=$capacity;
            $this->type=$type;
        }

        public function showMsg()
        { return '<h1>Reisen Sie mit dem Schiff: ' . $this->name . ', Kapazität  ' . $this->capacity . '  personen und type: '.$this->type .'</br></h1>';
        }
    }
    $shipOne = new Ship("Titanic", "nix", 1912, "black", "gasoline",2000, "Ocean liner");
    $rtnVal = $shipOne->showMsg();
    print " $rtnVal";

    $shipOne = new Ship("	Symphony of the Seas", "nix", 1912, "black", "gasoline",400, "Passenger Ship");
    $rtnVal = $shipOne->showMsg();
    print " $rtnVal";

    $shipOne = new Ship("MSC Diana", "nix", 1912, "black", "gasoline",400, "Container Ship");
    $rtnVal = $shipOne->showMsg();
    print " $rtnVal";

    ?>

</body>
</html>