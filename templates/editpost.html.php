<form class="form" action="editpost.php" method="post">
    <h1 style="color: black;">Edit Post</h1>

    <label for="">Post title</label>
    <input type="text" name="post_title" required value="<?= $post['post_title'] ?>">
    <br>
    <label for="">Post Content</label>
    <input type="text" name="post_content" required value="<?= $post['post_content'] ?>">
    <br>
    <label for="">Post Image</label>
    <input type="text" name="post_image" required value="<?= $post['post_image'] ?>">
    <br>
    <label for="">Post Date</label>
    <input type="date" name="post_date" required value="<?= $post['post_date'] ?>">

    <label for="">Module</label>
    <select name="module_id" id="">
        <?php
        foreach ($modules as $module) {
        ?>
            <option value="<?= $module['id'] ?>"><?= $module['module_name'] ?></option>
        <?php } ?>

    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <input name="edit" type="submit" value="Edit">
</form>