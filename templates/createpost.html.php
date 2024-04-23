<form class="form" action="createpost.php" method="post" enctype="multipart/form-data">

    <h1 style="color: black;">Create Post</h1>

    <label for="">Post title</label>
    <input type="text" name="post_title" required>
    <br>
    <label for="">Post Content</label>
    <input type="text" name="post_content" required minlength="50">
    <br>
    <label for="">Post Image</label>
    <input type="text" name="post_image" required>
    <br>
    <label for="">Post Date</label>
    <input type="date" name="post_date" required>
    <br>
    <label for="">Username</label>
    <select name="user_id" id="">
        <?php
        foreach ($users as $user) {
        ?>
            <option value=""><?= $user['username'] ?></option>
        <?php } ?>
    </select>
    <br>
    <label for="">Module</label>
    <select name="module_id" id="">
        <?php
        foreach ($modules as $module) { 
        ?>
            <option value=""><?= $module['module_name'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Create" name="create">
</form>


