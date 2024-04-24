<form class="form" action="createquestion.php" method="post" enctype="multipart/form-data">

    <h1 style="color: black;">Create Question</h1>

    <label for="">Question Name</label>
    <input type="text" name="question_name" required>
    <br>
    <label for="">Question Data</label>
    <input type="text" name="question_data" required minlength="50">
    <br>
    <label for="">Question Image</label>
    <input type="text" name="question_img" required>
    <br>
    <label for="">Question Date</label>
    <input type="date" name="question_time" required>
    <br>
    <label for="">Username</label>
    <select name="user_id" id="">
        <?php foreach ($accs as $acc) { ?>
            <option value="<?= $acc['id'] ?>"><?= $acc['username'] ?></option>
        <?php } ?>
    </select>

    <select name="module_id" id="">
        <?php foreach ($modules as $module) { ?>
            <option value="<?= $module['id'] ?>"><?= $module['module_name'] ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Create" name="create">
</form>