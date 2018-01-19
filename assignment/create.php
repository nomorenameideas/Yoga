<?php
if (isset($_POST["addclass"])) {
    $addClass = addClass();
} else {
    $addClass = false;
}
?>
<!-- Form which handles creation of new classes -->
<?php if ($addClass): ?>
    <div class="success-block">
        Class added, please <a href="index.php?page=create">go back</a>
    </div>
<?php else: ?>
    <div id="register-form">
        <form method="post" action="" id="reg-submit">
            <table>
                <tr><td colspan="2" align="right"><a href="index.php?page=admin" class="go-back">Go Back</a></td></tr>
                <tr>
                    <td>Instructor</td>
                    <td><input type="text" name="instructor" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Style</td>
                    <td><input type="text" name="style" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Length</td>
                    <td>
                        <select name="duration" class="input-style">
                            <option value="30">30</option>
                            <option value="60">60</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Max</td>
                    <td><input type="text" name="maximum" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="time" name="time" class="input-style jq" /></td>
                </tr>

                <tr><td colspan="2"><input type="submit" name="addclass" class="submit-form" value="add"></td></tr>
            </table>
        </form>
    </div>
<?php endif; ?>
