<?php
$montant = 1200;

if($montant < 500){
    $remise = 0;
} elseif ($montant < 1000){
    $remise = 5;
}elseif ($montant < 2000){
    $remise = 10;
} else {
    $remise = 15;
}

$montantRemise = $montant * $remise / 100;

$montantFinal = $montant - $montantRemise;

echo "montant initial : $montant DH <br>";
echo "Taux de remise : $remise % <br>";
echo "Montant de remise : $montantRemise DH <br>";
echo "Montant final : $montantFinal DH";
?>