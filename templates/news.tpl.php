<?foreach ($items as $item):?>
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?=$item->getTitle()?></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-8">
						<?php
								echo $item->getDescription();
								echo '<br><br><i>'.$item->getPubDate().'</i>';
						?>
				</div>
			</div>
		</div>
		<?endforeach;?>
<hr>		

<hr>








