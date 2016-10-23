<link rel="stylesheet" href="dist/css/bootstrap-select.css">
<script src="dist/js/bootstrap-select.js"></script>
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">Money To Distribute</div>
	</div>
	<div class="panel-body donation">
		<p>You earned <span style="color:olive; font-size:40px; font-weight:bold" class="money">$42</span> from volunteering to give to local schools involved in Junior Achievement. </p>
		<form class="form-inline">
			<div class="form-group">
				<?php
				$e_schools = "Ashley Academy,Bolton Elementary,Brunson Elementary,Caleb's Creek Elementary,Cash Elementary,Clemmons Elementary,Cook Elementary,Diggs-Latham Elementary,Easton Elementary,Forest Park Elementary,Gibson Elementary";
				$m_schools = "Clemmons Middle,East Forsyth Middle,Flat Rock Middle,Hanes Magnet,Jefferson Middle,Kernersville Middle,Meadowlark Middle,Mineral Springs Middle,Northwest Middle,Paisley IB Magnet";
				$h_schools = "Glenn High,John F. Kennedy High,Mount Tabor High,North Forsyth High";
				
				// takes a string and prints it out as a checklist using separators
				function Checklistify($string, $sep, $list_name, $title){
					echo '<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">' . $title . '</div>
						</div>
						<div class="panel-body">
							<div class="list-group">';
								
					$pieces = explode($sep, $string);
					foreach($pieces as $piece){
						echo '<li class="list-group-item">
							<label class="form-check-label">
								<input type="checkbox">' . $piece . '
							</label>
						</li>';
					}
					echo '</div>
						</div>
					</div>';
				}
				?>
				<div class="form-group">
					<?php Checklistify($e_schools, ",", "eschools", "Elementary Schools");?>
				</div>
				<div class="form-group">
					<?php Checklistify($m_schools, ",", "mschools", "Middle Schools");?>
				</div>
				<div class="form-group">
					<?php Checklistify($h_schools, ",", "hschools", "High Schools");?>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign Up</button>
			</div>
		</form>
	</div>
</div>