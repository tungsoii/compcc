<table border=2>
    <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Date</th>
            <th>User</th>
            <th>Module</th>
    </tr>

    <?php 
    foreach ($posts as $post) {
    ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['post_name'] ?></td>
            <td><?= $post['post_content'] ?></td>
            <td>
                <img src="images/<?= $post['post_image'] ?>"width="100" height="100">
            </td>
            <td><?= $post['post_date'] ?></td>
            <td><?= $post['name'] ?></td>
            <td><?= $post['module_name'] ?></td>
            <td>
                <form action="editpost.php" method="post">
                    <input type="hidden" name="id" value="<?= $post['id'] ?>">
                    <input type="submit" value="Edit">
                </form>
                <form action="deletepost.php" method="post">
                    <input type="hidden" name="id" value="<?= $post['id'] ?>">
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete this post ?');">
                </form>
            </td>
        </tr>
    <?php 
    }
    ?>
</table>