<form method="POST">
<h2>Edit Species</h2>
    <input type="hidden" name="species_id" value="<?php echo $species['species_id']; ?>">

    <label for="species_name">Species Name:</label>
    <input type="text" name="species_name" placeholder="species Name" value="<?php echo $species['species_name']; ?>">    

    <label for="species_price">Species Price:</label>
    <input type="text" name="species_price" placeholder="species Price" value="<?php echo $species['species_price']; ?>">

    <button type="submit" name="update_species" class="btn green">Update</button>
</form>