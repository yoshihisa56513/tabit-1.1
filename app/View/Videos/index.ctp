<?php echo $this->Html->link('旅動画を追加しよう',
	array('controller'=>'Videos',
		'action'=>'add'));
?>
<div class="videos index">







<br>


<br>

<table cellpadding="0" cellspacing="0">
<tr>
	
	
	
</tr>

<?php 
	foreach ($videos as $video):
	?>

	<tr>
		
		<td> <?php
		$v = $video['Video']['video_url'];
		 $this->Html->link($this->Common->tmb($v),'./view/'.$video['Video']['id']); ?></td>
	
	    <td><?php echo $this->Html->link($video['Video']['title'],'./view/'.$video['Video']['id']);?></td>
		<td><?php echo h($video['Video']['place']); ?></td>
		



	</tr>

	<?php endforeach; ?>
	</table>

</div>

