<!-- This file is used to markup the public-facing widget. -->
<?php if (trim($monday_friday) !== '') : ?>
    <p>
        <span class="day-of-week">Monday-Friday</span>
        <?php echo $monday_friday; ?>
    </p>
<?php endif; ?>
<?php if (trim($saturday) !== '') : ?>
    <p>
        <span class="day-of-week">Saturday</span>
        <?php echo $saturday; ?>
    </p>
<?php endif; ?>
<?php if (trim($sunday) !== '') : ?>
    <p>
        <span class="day-of-week">Sunday</span>
        <?php echo $sunday; ?>
    </p>
<?php endif; ?>