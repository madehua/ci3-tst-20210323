<div class="news_list px1200">

	<?php echo validation_errors(); ?>
	<?php echo form_open(current_url()); ?>

	<label for="title">Title</label>
	<input type="input" name="title" value="<?= set_value('title', $blog['title'], FALSE); ?>"/><br/>

	<label for="text">content</label>
	<textarea name="content"><?= set_value('content', $blog['content'], FALSE); ?></textarea><br/>

	<input type="submit" name="submit" value="Update news item"/>

	</form>
</div>
