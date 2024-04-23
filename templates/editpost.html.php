<div class="form-container">
    <form class="form-content" action="editpost.php" method="post" enctype="multipart/form-data">

        <h1>Edit Post</h1>
        <input type= "hidden" name="id" value="<?=$post['id']?>">
        <label for="">Post title</label>
        <input type="text" name="post_title" required value="<?= $post['post_title'] ?>">
        <br>
        <label for="">Post Content</label>
        <input type="text" name="post_content" required value="<?= $post['post_content'] ?>">
        <br>
        <label for="">Post Image</label>
        <input type="text" name="post_image"  required value="<?= $post['post_image'] ?>">
        <br>
        <label for="">Post Date</label>
        <input type="date" name="post_date" required value="<?= $post['post_date'] ?>">
        <br>
        <label for="">Username</label>
        <select name="user_id" id="">
            <?php foreach ($users as $user) { ?>
                <option value="<?= $user['id'] ?>" <?= ($user['id'] == $post['user_id']) ? 'selected' : '' ?>>
                    <?= $user['username'] ?>
                </option>
            <?php } ?>
        </select>

        <select name="module_id" id="">
            <?php foreach ($modules as $module) { ?>
                <option value="<?= $module['id'] ?>" <?= ($module['id'] == $post['module_id']) ? 'selected' : '' ?>>
                    <?= $module['module_name'] ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" value="Edit" name="edit">
    </form>



</div>