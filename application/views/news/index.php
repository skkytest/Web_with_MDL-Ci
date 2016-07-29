<h2><?php echo $title; ?></h2>
<?php $num = 1; ?>
<?php foreach ($subjects as $subjects_item): ?>
<div>
	<ul class = "top">
	    <li><a><?php echo "$num.  "; echo $subjects_item['word']; ?></a></li>
	    <ul class = "sub">
		    <li class="main">
		        <a><?php echo $subjects_item['definition']; ?></a>
		    </li>
	    </ul>
	</ul>
</div>
<?php $num++; ?>
<?php endforeach; ?>

<br />
