<div class="admin-link"><a href="index.php?page=admin">Go to admin</a></div>
<!-- Main page -->
<?php foreach ($classes as $keyClasses => $valueClasses) : ?>
    <div class="loop-box">
        <div class="style">Yoga style: <?php echo $valueClasses["style"]; ?></div>
        <div class="instructor">Instructor: <?php echo $valueClasses["instructor"]; ?></div>
        <div class="duration">Duration: <?php echo $valueClasses["duration"]; ?></div>
        <div class="date">Date: <?php echo $valueClasses["date"]; ?></div>
        <div class="time">Time: <?php echo $valueClasses["time"]; ?></div>
        <div class="availability">
            <?php if ($valueClasses["full"]): ?>
                <div class="full-text">Class is full</div>
            <?php elseif (time() > $valueClasses["unix"]): ?>
                <div class="full-text">Not Available</div>
            <?php else: ?>
                <a href="index.php?page=register&id=<?php echo $valueClasses["id"]; ?>" class="register-button">Register</a>
            <?php endif; ?>
        </div>

    </div>
<?php endforeach; ?>
