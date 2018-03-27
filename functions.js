function maakmatch(){
    var wedstrijd = {};
    wedstrijd.aantalrondenwedstrijd = document.getElementById("aantalrondenwedstrijd").value;
    wedstrijd.tijdstipwedstrijd = document.getElementById("tijdstipwedstrijd").value;
    wedstrijd.blauwevechter = document.getElementById("vechter1").value;
    wedstrijd.rodevechter = document.getElementById("vechter2").value;
    var raymon = new XMLHttpRequest();
    raymon.onreadystatechange = function (){
        if(this.readyState === 4 && this.status === 200){
            console.log(this.responseText);
//            document.location = 'index.php';
        }
    }
    var data = JSON.stringify(wedstrijd);
    raymon.open("POST", "nieuwwedstrijd.php", true);
    raymon.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    raymon.send("wedstrijd="+data);
}

function nieuwtournooi(){
    var tournooi = {};
    tournooi.naam = document.getElementById("naamtournooi").value;
    tournooi.stad = document.getElementById("stadtournooi").value;
    tournooi.tijdstip = document.getElementById("tijdstiptournooi").value;
    tournooi.prijs = document.getElementById("prijstournooi").value;
    var raymon = new XMLHttpRequest();
    raymon.onreadystatechange = function (){
        if(this.readyState === 4 && this.status === 200){
            console.log(this.responseText);
            document.location = 'index.php';
        }
    }
    var data = JSON.stringify(tournooi);
    raymon.open("POST", "nieuwtournooi.php", true);
    raymon.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    raymon.send("tournooi="+data);
    
}
function nieuwvechter(){
    var vechter = {};
    vechter.naam = document.getElementById("naamvechter").value;
    vechter.gewicht = document.getElementById("gewichtvechter").value;
    vechter.specialisatie = document.getElementById("specialisatievechter").value;
    vechter.specialtrick = document.getElementById("specialtrickvechter").value;
    var raymon = new XMLHttpRequest();
    raymon.onreadystatechange = function (){
        if(this.readyState === 4 && this.status === 200){
            console.log(this.responseText);
            document.location = 'index.php';
        }
    }
    var data = JSON.stringify(vechter);
    raymon.open("POST", "inschrijvenvechter.php", true);
    raymon.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    raymon.send("vechter="+data);
    
}