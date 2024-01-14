<h2>Edit Breeds</h2>

<form method="POST">
    <input type="hidden" name="breeds_id" value="<?php echo $breeds['breeds_id']; ?>">

    <label for="breeds_name">Name</label>
    <input type="text" name="breeds_name" placeholder="breeds Name" value="<?php echo $breeds['breeds_name']; ?>">

    <label for="species_name">Species</label>
    <?php
    if ($species) {
        echo "<select name='species_id' required>";
        echo "<option value=''>Select Species</option>";
        foreach ($species as $specie) {
            $selected = ($specie['species_id'] == $breeds['species_id']) ? 'selected' : '';
            echo "<option value='" . $specie['species_id'] . "' $selected>" . $specie['species_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some species first!';
    }
    ?>

    <label for="breeds_is_mixed">Is Mixed</label>
    <select name="breeds_is_mixed" required>
        <option value="0">No</option>
        <option value="1">Yes</option>        
    </select>

    <label for="breeds_price">Price</label>
    <input type="text" name="breeds_price" placeholder="breeds Price" value="<?php echo $breeds['breeds_price']; ?>">

    <button type="submit" name="update_breeds" class="btn">Update</button>
</form>