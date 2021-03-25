<div class="news_list px1200">

	<?php echo validation_errors(); ?>

	<?php echo form_open('blog/create'); ?>

	<label for="title">Title</label>
	<input type="input" name="title" value="<?= set_value('title'); ?>"/><br/>

	<label for="text">content</label>
	<textarea name="content"><?= set_value('content'); ?></textarea><br/>

	<input type="submit" name="submit" value="Create news item"/>

	</form>


</div>
