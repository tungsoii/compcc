<div class="form-container">
    <form class="form-content" action="editquestion.php" method="post" enctype="multipart/form-data">

        <h1>Edit Question</h1>
        <input type= "hidden" name="id" value="<?=$quests['id']?>">
        <label for="">Question title</label>
        <input type="text" name="question_name" required value="<?= $quests['question_name'] ?>">
        <br>
        <label for="">Question Content</label>
        <input type="text" name="question_data" required value="<?= $quests['question_data'] ?>">
        <br>
        <label for="">Question Image</label>
        <input type="text" name="question_img"  required value="<?= $quests['question_img'] ?>">
        <br>
        <label for="">Question Date</label>
        <input type="date" name="question_time" required value="<?= $quests['question_time'] ?>">
        <br>
        <label for="">Username</label>
        <select name="user_id" id="">
            <?php foreach ($accs as $acc) { ?>
                <option value="<?= $acc['id'] ?>" <?= ($acc['id'] == $quests['user_id']) ? 'selected' : '' ?>>
                    <?= $acc['username'] ?>
                </option>
            <?php } ?>
        </select>

        <select name="module_id" id="">
            <?php foreach ($modules as $module) { ?>
                <option value="<?= $module['id'] ?>" <?= ($module['id'] == $quests['module_id']) ? 'selected' : '' ?>>
                    <?= $module['module_name'] ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" value="Edit" name="edit">
    </form>
</div>