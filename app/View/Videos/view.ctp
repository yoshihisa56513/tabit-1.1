<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "tabit" ?>:
		
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('bootstrap.min');
		echo $this->fetch('script');
	?>
</head>
<body>

	
		
		<?php echo $video['Video']['video_url']; ?><br><br>
	<h3><?php echo h($video['Video']['title']) ?> </h3><br>
	<tr>	<td>場所:<?php echo h($video['Video']['place']); ?></td> <br>
		<td><p>説明：<?php echo h($video['Video']['comment']); ?></p></td> <br>



	</tr>
</body>

</html>