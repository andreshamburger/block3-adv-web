<form method="POST">
<h2>Edit Toys</h2>
    <input type="hidden" name="toys_id" value="<?php echo $toys['toys_id']; ?>">

    <label for="toys_name">Name</label>
    <input type="text" name="toys_name" placeholder="Toys Name" value="<?php echo $toys['toys_name']; ?>">    

    <label for="toys_price">Price</label>
    <input type="text" name="toys_price" placeholder="Toys Price" value="<?php echo $toys['toys_price']; ?>">

    <button type="submit" name="update_toys" class="btn green">Update</button>
</form>