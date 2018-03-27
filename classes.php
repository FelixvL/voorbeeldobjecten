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
    function getTournooiFromId($id){
        $sql = "SELECT * FROM tournooi WHERE id = $id";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        $tournooi = new Tournooi($row['naam'], $row['stad']);
        $tournooi->tijdstip = $row['tijdstip'];
        $tournooi->prijs = $row['prijs'];
        return $tournooi;
    }
    function opslaanTournooi($tournooi){
        $sql = "INSERT INTO tournooi (naam, stad, tijdstip, prijs) VALUES ('$tournooi->naam', '$tournooi->stad', '$tournooi->tijdstip', $tournooi->prijs);";
        $this->conn->query($sql);
    }
    function inschrijvenVechter($vechter){
        $sql = "INSERT INTO vechter (naam, gewicht, specialisatie, specialtrick) VALUES ('$vechter->naam', $vechter->gewicht, '$vechter->specialisatie', '$vechter->specialtrick');";
        $this->conn->query($sql);
    }
    function getAlleVechtersDropdown(){
        $sql = "SELECT * FROM vechter ORDER BY id ASC";
        $result = $this->conn->query($sql); 
        $resultString = "<select>";
        while($row = $result->fetch_assoc()){
            $resultString .= "<option>".$row['naam']."</option>";
        }
        $resultString .= "</select>";
        return $resultString;        
    }
    function vechterLatenZien(){
        $sql = "SELECT * FROM vechter ORDER BY id ASC";
        $result = $this->conn->query($sql); 
        $resultString = "<table>";
        while($row = $result->fetch_assoc()){
            $resultString .= "<tr>";
            $resultString .= "<td>".$row['id']."</td><td>".$row['naam']."</td><td>".$row['gewicht']."</td><td>".$row['specialisatie']."</td><td>".$row['specialtrick']."</td>";
            $resultString .= "</tr>";
        }
        $resultString .= "</table>";
        return $resultString;
    }
    function latenZien(){
        $sql = "SELECT * FROM tournooi ORDER BY id ASC";
        $result = $this->conn->query($sql); 
        $resultString = "<table>";
        while($row = $result->fetch_assoc()){
            $resultString .= "<tr>";
            $resultString .= "<td>".$row['id']."</td><td>".$row['naam']."</td><td>".$row['stad']."</td><td>".$row['tijdstip']."</td>";
            $resultString .= "<td><input type=button value=bekijk onclick='javascript:document.location=\"tournooipagina.php?id=".$row['id'].";\"'></td>";
            $resultString .= "</tr>\n";
        }
        $resultString .= "</table>";
        return $resultString;
    }
    function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "dbtournooi");
    }
}