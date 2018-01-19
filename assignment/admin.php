<?php
if (isset($_POST["login"])) {
    $query = $GLOBALS["conn"]->query('SELECT * FROM admins WHERE
            `username` = "' . $GLOBALS["conn"]->real_escape_string($_POST["username"]) . '" AND
            `password` = "' . $GLOBALS["conn"]->real_escape_string(md5($_POST["password"])) . '"
            ');
    $info = $query->fetch_array();
    if ($info) {
        $_SESSION["logged"] = true;
    } else {
        $_SESSION["logged"] = false;
    }
}
if (isset($_POST["logout"])) {
    $_SESSION["logged"] = false;
}
// Manages logging in of admin


?>

<!-- Table displayed on admin page -->
<?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]): ?>
    <table border="1" cellpadding="0" cellspacing="0" class="admin-table">
        <tr>
            <td colspan="9"><a href="index.php?page=create">Create Class</a> / <a href="index.php?page=main">Main Page</a></td>
            <td>
                <form method="post" action="">
                    <input type="submit" name="logout" value="logout"/>
                </form>
            </td>
        </tr>
        <tr>
            <td>Style</td>
            <td>Instructor</td>
            <td>Duration</td>
            <td>Max students</td>
            <td>Full</td>
            <td>Applicants</td>
            <td>Date</td>
            <td>Time</td>
            <td>Action</td>
            <td>Mark full</td>
        </tr>
        <?php foreach ($classes as $keyClasses => $valueClasses) : ?>
            <tr>
                <td><?php echo $valueClasses["style"]; ?></td>
                <td><?php echo $valueClasses["instructor"]; ?></td>
                <td><?php echo $valueClasses["duration"]; ?></td>
                <td><?php echo $valueClasses["maximum"]; ?></td>
                <td><?php echo $valueClasses["full"]; ?></td>
                <td><?php echo $valueClasses["applicants"]; ?></td>
                <td><?php echo $valueClasses["date"]; ?></td>
                <td><?php echo $valueClasses["time"]; ?></td>
                <td><a href="index.php?page=delete&id=<?php echo $valueClasses["id"]; ?>">Delete</a></td>
                <td><a href="index.php?page=mark&id=<?php echo $valueClasses["id"]; ?>">Mark</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="username" class="input-style" />
        <input type="password" name="password" placeholder="password" class="input-style" />
        <input type="submit" name="login" value="Log In" />
    </form>
<?php endif; ?>
