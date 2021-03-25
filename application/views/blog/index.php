<div class="news_list px1200">
	<ul>
		<?php foreach ($blogs as $blog) { ?>
			<li><a href="<?= base_url('blog/view/' . $blog['id']) ?>"><?= $blog['title'] ?></a>
				<span><a name="btn_delete" href="<?= base_url('blog/delete/' . $blog['id']) ?>" title="删除"
						 data-confirm="您确定要删除此项吗？">删除</a></span>
				<span><a href="<?= base_url('blog/update/' . $blog['id']) ?>">修改</a>&nbsp;</span></li>
		<?php } ?>
	</ul>
	<div class="you">
		<img src="/images/new_T.jpg" alt="">
	</div>
</div>
<script type="text/javascript">
	$(function () {


		$("[name$='btn_delete']").click(function () {
			var status = confirm($(this).attr('data-confirm'));
			if (!status) {
				return false;
			}
			var hash = '<?=$this->security->get_csrf_hash() ?>';
			var href = $(this).attr('href');
			var jqxhr = $.post(href, {<?=$this->security->get_csrf_token_name() ?>:
			hash
		},

			function (result) {
				var json = JSON.parse(result);
				if (json.code == 200) {
					alert(json.msg);
					location.reload();
				} else {
					alert(json.msg);
				}
			}

		)
		.
			fail(function () {
				alert("删除失败");
			})
			return false;
		});

	});
</script>
