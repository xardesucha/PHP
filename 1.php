<html>
    <form action=" " method="POST">
        <input name="Imie"> Imie </input> <br>
        <input name="nazwisko"> Nazwisko </input> <br>
        <input name="numer"> Numer </input> <br>
        <input type="submit">
</form>

</html>

<?php
$Imie=$_POST['Imie'];
$nazwisko=$_POST['nazwisko'];
$numer=$_POST['numer'];
$n;
$s;

$n=substr($Imie,$numer);
$s=substr($nazwisko,$numer);

echo "$n <br> $s";

?>