<article>
<h2 class="showtitle">List of Pets</h2>
  <?php
  echo "<div class='cards-container'>";
  if ($pets) {
    foreach ($pets as $show_pets) {
      echo "<div class='cardflex'>

        <div><b>Pet ID:</b>". $show_pets['pets_id'] . "</div>
        <div><b>Pet Name: </b>" . $show_pets['pets_name'] . "</div><br>
        <div><b>Pet Species: </b>" . $show_pets['species_name'] . "</div>
        <div><b>Pet Breed: </b>" . $show_pets['breeds_name'] . "</div>
        <div><b>Pet Age: </b>" . $show_pets['pets_age'] . "</div>
        <div><b>Pet Gender: </b>" . $show_pets['pets_gender'] . "</div><br>
        <div><b>Is it Neutered?: </b>" . ($show_pets['pets_neutered'] ? 'Yes' : 'No') . "</div>
        <div><b>Pet Price: </b>$" . $show_pets['pets_price'] . "</div>
        <div><b>Prefered Toy: </b>" . $show_pets['toys_name'] . "</div>

        <form method='POST'>
          <input type='hidden' name='pets_id' value='" . $show_pets['pets_id'] . "'>

          <div class='btnsflex'>
            <button type='submit' name='edit_pets' class='btn'>Edit</button>
            <button type='submit' name='delete_pets' class='btn'>Delete</button>          
          </div>
        </form>

      </div>";
    }
  } else {
    echo 'There are no pets available.';
  }
  echo "</div>";
  ?>
</article>