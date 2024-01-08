<h2>List of Species</h2>
<article>
  <?php
  if ($species) {
    foreach ($species as $show_species) {
      echo "<section class='card'>
      <div class='cardflex'>
        <div class='id'>" . $show_species['species_id'] . "</div>
        <div class='name'>" . $show_species['species_name'] . "</div>                            
        <div class='price'>" . $show_species['species_price'] . "</div>
      </div>

      <div class='btns'>
        <form method='POST'>
          <input type='hidden' name='species_id' value='" . $show_species['species_id'] . "'>

          <div class='btnsflex'>
            <button type='submit' name='edit_species' class='btn'>Edit</button>
            <button type='submit' name='delete_species' class='btn'>Delete</button>
          </div>
          
        </form>
      </div>
      </section>";
    }
  } else {
    echo 'There are no species available.';
  }
  ?>

</article>