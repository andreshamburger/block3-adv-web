<form method="POST">
    <input type="text" name="species_name" placeholder="Name of the Species" value="<?php echo (isset($_POST['species_name']) ? $_POST['species_name'] : ""); ?>">
    <input type="text" name="species_price" placeholder="Cost of the species" value="<?php echo (isset($_POST['species_price']) ? $_POST['species_price'] : ""); ?>">
    
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>