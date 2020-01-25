<!-- This file is used to markup the administration form of the widget. -->
<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
</div>



<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Weekends'); ?>">Weekends:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Weekends'); ?>" name="<?php echo $this->get_field_name('Weekends'); ?>" type="text" value="<?php echo $Weekends; ?>">
   </p>
</div>


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Saturdays'); ?>">Saturdays:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Saturdays'); ?>" name="<?php echo $this->get_field_name('Saturdays'); ?>" type="text" value="<?php echo $Saturdays; ?>">
   </p>
</div>


<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('Sunday'); ?>">Sunday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('Sunday'); ?>" name="<?php echo $this->get_field_name('Sunday'); ?>" type="text" value="<?php echo $Sunday; ?>">
   </p>
</div>