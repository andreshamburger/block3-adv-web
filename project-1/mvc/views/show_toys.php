<article>
    <h2 class="showtitle">List Of Toys</h2>
    <?php
    echo "<div class='cards-container'>";
    if ($toys) {
        foreach ($toys as $show_toys) {
            echo "<div class='cardflex'>

                <div><b>Toy ID: </b>" . $show_toys['toys_id'] . "</div><br>
                <div><b>Toy Name: </b>" . $show_toys['toys_name'] . "</div>
                <div><b>Toy Price: </b>$" . $show_toys['toys_price'] . "</div>

                <form method='POST'>
                    <input type='hidden' name='toys_id' value='" . $show_toys['toys_id'] . "'>

                <div class='btnsflex'>
                    <button type='submit' name='edit_toys' class='btn'>Edit</button>
                    <button type='submit' name='delete_toys' class='btn'>Delete</button>
                </div>

                </form>

            </div>";
        }
    } else {
        echo 'There are no toys available.';
    }
    echo "</div>";
    ?>
</article>