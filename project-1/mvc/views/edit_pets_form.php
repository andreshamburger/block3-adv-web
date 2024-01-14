<h2>Edit pets</h2>

<form method="POST" action="?action=showing_pets">
    <input type="hidden" name="pets_id" value="<?php echo $pets['pets_id']; ?>">

    <label for="pets_name">Name</label>
    <input type="text" name="pets_name" placeholder="pets Name" value="<?php echo $pets['pets_name']; ?>" required>

    <label for="species_name">Species</label>
    <?php
    if ($species) {
        echo "<select name='species_id' required>";
        echo "<option value=''>Select Species</option>";
        foreach ($species as $specie) {
            $selected = ($specie['species_id'] == $pets['species_id']) ? 'selected' : '';
            echo "<option value='" . $specie['species_id'] . "' $selected>" . $specie['species_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some species first!';
    }
    ?>

    <label for="breeds_name">breeds</label>
    <?php
    if ($breeds) {
        echo "<select name='breeds_id' required>";
        echo "<option value=''>Select breeds</option>";
        foreach ($breeds as $breed) {
            $selected = ($breed['breeds_id'] == $pets['breeds_id']) ? 'selected' : '';
            echo "<option value='" . $breed['breeds_id'] . "' $selected>" . $breed['breeds_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some breeds first!';
    }
    ?>

    <label for="pets_age">Age</label>
    <input type="text" name="pets_age" placeholder="pets Age" value="<?php echo $pets['pets_age']; ?>" required>

    <label for="pets_gender">Gender</label>
    <input type="text" name="pets_gender" placeholder="Pets Gender" value="<?php echo $pets['pets_gender']; ?>" required>

    <label for="pets_neutered">Is Neutered</label>
    <select name="pets_neutered" required>
        <option value="0" <?php echo ($pets['pets_neutered'] == 0) ? 'selected' : ''; ?>>No</option>
        <option value="1" <?php echo ($pets['pets_neutered'] == 1) ? 'selected' : ''; ?>>Yes</option>
    </select>

    <label for="pets_price">Price</label>
    <input type="text" name="pets_price" placeholder="Pets Price" value="<?php echo $pets['pets_price']; ?>" required>

    <label for="toys_name">toys</label>
    <?php
    if ($toys) {
        echo "<select name='toys_id' required>";
        echo "<option value=''>Select toys</option>";
        foreach ($toys as $toy) {
            $selected = ($toy['toys_id'] == $pets['toys_id']) ? 'selected' : '';
            echo "<option value='" . $toy['toys_id'] . "' $selected>" . $toy['toys_name'] . "</option>";
        }
        echo "</select>";
    } else {
        echo 'Whoops! You need to add some toys first!';
    }
    ?>

    <button type="submit" name="update_pets" class="btn">Submit</button>
</form>