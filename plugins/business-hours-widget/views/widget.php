<!-- This file is used to markup the public-facing widget. -->

<p>
    <?php if (strlen(trim($Weekends)) > 0) : ?>
    <span class="business-weekdays"> Monday-Friday:</span>
    <?php echo $Weekends; ?>
    <?php endif; ?>
</p>


<p>
    <?php if (strlen(trim($Saturdays)) > 0) : ?>
    <span class="business-weekdays"> Saturday:</span>
    <?php echo $Saturdays; ?>
    <?php endif; ?>
</p>


<p>
    <?php if (strlen(trim($Sunday)) > 0) : ?>
    <span class="business-weekdays"> Sunday:</span>
    <?php echo $Sunday; ?>
    <?php endif; ?>
</p>

