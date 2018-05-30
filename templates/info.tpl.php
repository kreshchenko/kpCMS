
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Інформація КП "Центральний міський стадіон"</h1>
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
						foreach ($items as $item):
							echo '<h4><a href="/news/'.$item->getId().'">'.$item->getTitle().'</a></h4>';
						endforeach;
					?>
	
				</div>
			</div>
		</div>

<br><br><br><br>
<h1></h1>




