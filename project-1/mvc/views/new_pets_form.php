<form method="POST" action="?action=showing_pets">
    <h2>Add Pets</h2>
    <label for="pets_name">Name</label>
    <input type="text" name="pets_name" placeholder="Pets Name" required>

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

    <label for="breeds_name">Breeds</label>
    <?php
    if ($breeds) {
        echo "<select name='breeds_id' required>";
        echo "<option value=''>Select Breeds</option>";
        foreach ($breeds as $breed) {
            echo "<option value='" . $breed['breeds_id'] . "'>" . $breed['breeds_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some breeds first!';
    }
    ?>

    <label for="pets_age">Age</label>
    <input type="text" name="pets_age" placeholder="Pets Age" required>

    <label for="pets_gender">Gender</label>
    <input type="text" name="pets_gender" placeholder="Pets Gender" required>

    <label for="pets_neutered">Is Neutered</label>
    <select name="pets_neutered" required>
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>

    <label for="pets_price">Price</label>
    <input type="text" name="pets_price" placeholder="Pets Price" required>

    <label for="toys_name">Prefered Toys</label>
    <?php
    if ($toys) {
        echo "<select name='toys_id' required>";
        echo "<option value=''>Select Toys</option>";
        foreach ($toys as $toy) {
            echo "<option value='" . $toy['toys_id'] . "'>" . $toy['toys_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some toys first!';
    }
    ?>

    <button type="submit" name="submit_pets" class="btn green"> Submit </button>

</form>