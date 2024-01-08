<h2>List of Toys</h2>
<article>
  <?php
  if ($toys) {
    foreach ($toys as $show_toys) {
      echo "<section class='card'>
      <div class='cardflex'>
        <div class='id'>Toy ID: " . $show_toys['toys_id'] . "</div>
        <div class='name'>Toy Name: " . $show_toys['toys_name'] . "</div>                            
        <div class='price'>Toy Price: $" . $show_toys['toys_price'] . "</div>
      </div>

      <div class='btns'>
        <form method='POST'>
          <input type='hidden' name='toys_id' value='" . $show_toys['toys_id'] . "'>

          <div class='btnsflex'>
            <button type='submit' name='edit_toys' class='btn'>Edit</button>
            <button type='submit' name='delete_toys' class='btn'>Delete</button>
          </div>
          
        </form>
      </div>
      </section>";
    }
  } else {
    echo 'There are no toys available.';
  }
  ?>

</article>