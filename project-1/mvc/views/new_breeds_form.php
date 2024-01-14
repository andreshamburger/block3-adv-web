<form method="POST" action="?action=showing_breeds">
    <h2>Add Breeds</h2>
    <label for="breeds_name">Name</label>
    <input type="text" name="breeds_name" placeholder="Breeds Name" required>

    <label for="species_name">Species</label>
    <?php
    if ($species) {
        echo "<select name='species_id' required>";
        echo "<option value=''>Select Species</option>";
        foreach ($species as $specie) {
            echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some species first!';
    }
    ?>

    <label for="breeds_is_mixed">Is Mixed</label>
    <select name="breeds_is_mixed" required>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

    <label for="breeds_price">Price</label>
    <input type="text" name="breeds_price" placeholder="breeds Price" required>

    <button type="submit" name="submit_breeds" class="btn"> Submit </button>

</form>