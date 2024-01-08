<h2>List Of Breeds</h2>
<article>
    <?php
    if ($breeds) {
        foreach ($breeds as $show_breeds) {
            echo "<section class='card'>
            <div class='cardflex'>
                <div class='id'>" . $show_breeds['breeds_id'] . "</div>
                <div class='name'>" . $show_breeds['breeds_name'] . "</div>
                <div class='species'>" . $show_breeds['species_name'] . "</div>
                <div class='mixed'>" . ($show_breeds['breeds_is_mixed'] ? 'Yes' : 'No') . "</div>
                <div class='price'>" . $show_breeds['breeds_price'] . "</div>
            </div>

            <div class='btns'>
                <form method='POST'>
                    <input type='hidden' name='breeds_id' value='" . $show_breeds['breeds_id'] . "'>

                <div class='btnsflex'>
                    <button type='submit' name='edit_breeds' class='btn'>Edit</button>
                    <button type='submit' name='delete_breeds' class='btn'>Delete</button>
                </div>

                </form>
            </div>
            </section>";
        }
    } else {
        echo 'There are no breeds available.';
    }
    ?>
</article>