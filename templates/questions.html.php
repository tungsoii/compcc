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
    foreach ($quests as $quest) {
    ?>
        <tr>
            <td><?= $quest['id'] ?></td>
            <td><?= $quest['question_name'] ?></td>
            <td><?= $quest['question_data'] ?></td>
            <td>
                <img src="images/<?= $quest['question_img'] ?>"width="100" height="100">
            </td>
            <td><?= $quest['question_time'] ?></td>
            <td><?= $quest['username'] ?></td>
            <td><?= $quest['module_name'] ?></td>
            <td>
                <form action="editquestion.php" method="post">
                    <input type="hidden" name="id" value="<?= $quest['id'] ?>">
                    <input type="submit" value="Edit">
                </form>
                <form action="deletequestion.php" method="post">
                    <input type="hidden" name="id" value="<?= $quest['id'] ?>">
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete this question?');">
                </form>
            </td>
        </tr>
    <?php 
    }
    ?>
</table>