<article>
    <h2 class="showtitle">List Of Breeds</h2>
    <?php
    echo "<div class='cards-container'>";
    if ($breeds) {
        foreach ($breeds as $show_breeds) {
            echo "<div class='cardflex'>

                <div><b>Breed ID: </b>" . $show_breeds['breeds_id'] . "</div><br>
                <div><b>Breed Name: </b>" . $show_breeds['breeds_name'] . "</div>
                <div><b>Species Name: </b>" . $show_breeds['species_name'] . "</div><br>
                <div><b>Is it Mixed?: </b>" . ($show_breeds['breeds_is_mixed'] ? 'Yes' : 'No') . "</div>
                <div><b>Breed Price: </b>$" . $show_breeds['breeds_price'] . "</div>

                <form method='POST'>
                    <input type='hidden' name='breeds_id' value='" . $show_breeds['breeds_id'] . "'>

                <div class='btnsflex'>
                    <button type='submit' name='edit_breeds' class='btn'>Edit</button>
                    <button type='submit' name='delete_breeds' class='btn'>Delete</button>
                </div>

                </form>

            </div>";
        }
    } else {
        echo 'There are no breeds available.';
    }
    echo "</div>";
    ?>
</article>