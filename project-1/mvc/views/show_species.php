<article>
    <h2 class="showtitle">List Of Species</h2>
    <?php
    echo "<div class='cards-container'>";
    if ($species) {
        foreach ($species as $show_species) {
            echo "<div class='cardflex'>

                <div><b>Species ID: </b>" . $show_species['species_id'] . "</div><br>
                <div><b>Species Name: </b>" . $show_species['species_name'] . "</div>
                <div><b>Species Price: </b>$" . $show_species['species_price'] . "</div>

                <form method='POST'>
                    <input type='hidden' name='species_id' value='" . $show_species['species_id'] . "'>

                <div class='btnsflex'>
                    <button type='submit' name='edit_species' class='btn green'>Edit</button>
                    <button type='submit' name='delete_species' class='btn red'>Delete</button>
                </div>

                </form>

            </div>";
        }
    } else {
        echo 'There are no species available.';
    }
    echo "</div>";
    ?>
</article>