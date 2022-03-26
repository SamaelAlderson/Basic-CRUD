
<?php
    $voornaam = "";
    $achternaam = "";
    $street = "";
    $houseno = "";
    $housenoadd = "";
    $city = "";
    $postcode = "";
    $email = "";
    if (!empty($student)) {
        $voornaam = $student["voornaam"];
        $achternaam = $student["achternaam"];
        $street = $student["street"];
        $houseno = $student["houseno"];
        $housenoadd = $student["housenoadd"];
        $city = $student["city"];
        $email = $student["email"];
        $postcode = $student["postcode"];
    }
?>

<div class="form-group">
    <label for="voornaam">First name:</label>
    <input class="form-control" type="text" id="voornaam" name="voornaam" value="<?php echo $voornaam;?>" required>
</div><br><br>

<div class="form-group">
    <label for="achternaam">Last name:</label>
    <input class="form-control" type="text" id="achternaam" name="achternaam" value="<?php echo $achternaam;?>" required>
</div><br><br>

<div class="form-group">
    <label for="street">street:</label>
    <input class="form-control" type="text" id="street" name="street" value="<?php echo $street;?>" required>
</div><br><br>

<div class="form-group">
    <label for="houseno">house number:</label>
    <input class="form-control" type="number" id="houseno" name="houseno" value="<?php echo $houseno;?>" required>
</div><br><br>

<div class="form-group">
    <label for="housenoadd">house number addition:</label>
    <input class="form-control" type="text" id="housenoadd" name="housenoadd" value="<?php echo $housenoadd;?>" >
</div><br><br>

<div class="form-group">
    <label for="city">city:</label>
    <input class="form-control" type="text" id="city" name="city" value="<?php echo $city;?>"  required>
</div><br><br>

<div class="form-group">
    <label for="postcode">postcode:</label>
    <input class="form-control" type="text" id="postcode" name="postcode" value="<?php echo $postcode;?>" required>
</div><br><br>

<div class="form-group">
    <label for="email">email:</label>
    <input class="form-control" type="text" id="email" name="email" value="<?php echo $email;?>" required>
</div><br><br>

<input class="btn-btn-primary" type="Submit" value="Submit">
<input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
