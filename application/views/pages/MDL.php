<header>
    <h1>My Vocabulary</h1>
    <br />
			
</header>

<div id="main">
	<div class="navigation">
		<ul class="demo-list-icon mdl-list">
			<li class="mdl-list__item">
				<span class="mdl-list__item-primary-content">
				<i class="material-icons md-36 mdl-list__item-icon">battery_charging_full</i>
				<div>Learning</div>
				</span>
				<li class="mdl-list__item">
				<span class="mdl-list__item-primary-content">
				<i class="material-icons md-36 mdl-list__item-icon">battery_charging_full</i>
				<div>Learning</div>
				</span>
			</li>
			</li>
		</ul>
	</div>

	<div class="page">
		<h5>Here is my vocabulary</h5>
		<br />

		<?php 
			$num = 1; 

		?>
		<?php foreach ($subjects as $subjects_item): ?>
		<div class="voc">
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
		<p>
			<?php 
				echo $links;
			 ?>
		</p>
	</div>
	
</div>


