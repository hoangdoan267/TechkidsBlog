<!-- sidebar -->
<aside class="sidebar col-sm-4" role="complementary">
	<div class="sidebar-title-group">
		<div class="sidebar-title">
			<h4>CHUYÊN MỤC</h4>
		</div>		
	</div>
	<div class="sidebar-category-list">
		<ul>
		<?php
			$categories = array(
				'orderby' => 'id',
				'exclude' => array('1','7'),
      			'hide_empty'=> 0
			); 
			$list = get_categories($categories);
			foreach ($list as $cat):
				$link = get_category_link($cat->term_id);
		?>
			<li><h5><a href="<?php echo esc_url($link);?>"><?php echo $cat->name?></a><h5></li>
		<?php
			endforeach;
		?>
		</ul>
	</div>
	<div class="sidebar-widget-form">
		<div class="sidebar-widget-title">
			<h4>Muốn đọc nhiều hơn nhưng bài viết hay từ Techkids?</h4>
			<h3>Đăng ký theo dõi nhé!</h3>
		</div>
		<form class="sidebar-form" id="subcriberForm">
				<input type="text" name="Email" placeholder="Email" id="subcriberEmail" required>
				<button type="submit" class="btn btn-default" id="submit-button">Đăng kí</button>
		</form>
		<p id="notification" class="notification"></p>
		<div id="form-loader" class='uil-rolling-css'><div><div></div><div></div></div></div>
	</div>
</aside>

<script type="text/javascript">
	$('#subcriberForm').on('submit', function(e){
		e.preventDefault();
		$('#subcriberEmail').css('display', 'none')
		$('#submit-button').css('display', 'none');
		$('#form-loader').css('display', 'block');

		var url = 'https://script.google.com/macros/s/AKfycbw2ddfGDYZXYzWkJG0Yi1xH91M4TKbf1J_VNh9eAsl-5KVGZA/exec'
	    var jqxhr = $.post(url, $('#subcriberForm').serialize(), function(data) {
	    	$('#form-loader').css('display', 'none');
			$('#notification').css('display', 'block');
			$('#notification').html('Đăng kí theo dõi thành công!');
	        console.log("Success! Data: " + data.statusText);
		});
	});
</script>
<!-- /sidebar -->
