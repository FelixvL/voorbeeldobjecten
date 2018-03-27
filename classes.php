<?php

class Tournooi{
    public $id;
    public $naam;
    public $stad;
    public $tijdstip;
    public $prijs;
    public $wedstrijden;
    
    function __construct($naam, $stad){
        $this->naam = $naam;
        $this->stad = $stad;
    }
    function toonSchema(){
        echo "TBD toonschema in Tournooi";
    }
}
class Wedstrijd{
    public $id;
    public $aantalRonden;
    public $uitslag;
    public $tijdstip;
    public $blauweVechter;
    public $rodeVechter;
    function __construct($blauweVechter, $rodeVechter){
        $this->rodeVechter = $rodeVechter;
        $this->blauweVechter = $blauweVechter;
    }
    function wordtgevochten(){
        echo "NTB wie de winnaar wordt via random";
    }
}

class Vechter{
    public $naam;
    public $gewicht;
    public $specialisatie;
    public $specialTrick;
    function vechten(){
        echo "TBD vechten in vechter";
    }
}
class MegaDAO{
    public $conn;
    function opslaanTournooi($tournooi){
        $sql = "INSERT INTO tournooi (naam, stad, tijdstip, prijs) VALUES ('$tournooi->naam', '$tournooi->stad', '$tournooi->tijdstip', $tournooi->prijs);";
        $this->conn->query($sql);
    }
    function latenZien(){
        $sql = "SELECT * FROM tournooi ORDER BY id ASC";
        $result = $this->conn->query($sql); 
        while($row = $result->fetch_assoc()){
            echo $row['stad']."<br>";
        }
    }
    function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "dbtournooi");
    }
}