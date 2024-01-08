<h2>List of Pets</h2>
<article>
  <?php
  if ($pets) {
    foreach ($pets as $show_pets) {
      echo "<section class='card'>
      <div class='cardflex'>
        <div class='id'>" . $show_pets['pets_id'] . "</div>
        <div class='name'>" . $show_pets['pets_name'] . "</div>
        <div class='species'>" . $show_pets['species_name'] . "</div>
        <div class='breeds'>" . $show_pets['breeds_name'] . "</div>
        <div class='age'>" . $show_pets['pets_age'] . "</div>
        <div class='gender'>" . $show_pets['pets_gender'] . "</div>
        <div class='neutered'>" . ($show_pets['pets_neutered'] ? 'Yes' : 'No') . "</div>
        <div class='price'>" . $show_pets['pets_price'] . "</div>
        <div class='toys'>" . $show_pets['toys_name'] . "</div>
      </div>

      <div class='btns'>
        <form method='POST'>
          <input type='hidden' name='pets_id' value='" . $show_pets['pets_id'] . "'>

          <div class='btnsflex'>

          <button type='submit' name='edit_pets' class='btn'>Edit</button>
          <button type='submit' name='delete_pets' class='btn'>Delete</button>
          
          </div>

        </form>
      </div>
      </section>";
    }
  } else {
    echo 'There are no pets available.';
  }
  ?>

</article>