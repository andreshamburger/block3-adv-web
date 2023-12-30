<form action="">
   <select name="species" id="species">
      <option value="">Choose a species</option>

      <?php
         if ($species) {
            foreach ($species as $species_item) {
               echo "<option value=" .  $species_item['species_id'] . ">" . $species_item['species_name'] . " - " . $species_item['species_price'] . "</option>";
            }
         } else {
            echo '<option>No species found</option>';
         }
      ?>
   </select>
</form>