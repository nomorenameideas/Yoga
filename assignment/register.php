<?php
if (isset($_POST["name"])) {
    $register = insertApplications();
} else {
    $register = false;
}
?>
<!-- Form which handles registration -->
<?php if ($register): ?>
<div class="success-block">
    Register Completed, please <a href="index.php?page=main">go back</a>
</div>
<?php else: ?>
    <div id="register-form">
        <form method="post" action="" id="reg-submit">
            <table>
                <tr><td colspan="2" align="right"><a href="index.php?page=main" class="go-back">Go Back</a></td></tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="input-style jq" /></td>
                </tr>
                <tr>
                    <td>Notes</td>
                    <td><textarea name="comment" class="textarea-style jq"></textarea></td>
                </tr>
                <tr><td colspan="2"><div class="submit-form jq-click">Register</div></td></tr>
            </table>
        </form>
    </div>
<?php endif; ?>
