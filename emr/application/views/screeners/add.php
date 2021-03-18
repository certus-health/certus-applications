<!-- page content -->
<div class="right_col" role="main">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">						
				<div class="x_panel">
					<div class="x_title">
						<h2>Availability <small>For <?php echo date('l, M jS', strtotime($week_2start)); ?> - <?php echo date('l, M jS', strtotime($week_2end)); ?></small></h2>
						<div class="clearfix"></div>
					</div>

					<?php echo form_open('screeners/added_time'); ?>

						<!-- <div class="x_content">
							<tbody>
							 	<div class="col-sm-6">
									<fieldset class="form-group">
										First Name<input class="form-control" type="text" name="first_name" placeholder="<?php echo $first_name;?>" readonly>
									</fieldset>
								</div>

		                  		<div class="col-sm-6">
		                  			<fieldset class="form-group">
		                  				Last Name<input class="form-control" type="text" name="last_name" placeholder="<?php echo $last_name?>" readonly>
		                  			</fieldset> 
		                  		</div>

								<div class="col-sm-6">
									<fieldset class="form-group">   
										Email<input class="form-control" type="email" name="email" placeholder="<?php echo $email?>" readonly>
									</fieldset>
								</div>

							</tbody>
						</div> -->

						<div class="x_content">
							<div class="col-xs-1"></div>
							<div class="col-xs-10 table-responsive">
								<table class="table table-hover table-striped table-bordered">
									<thead class="thead-dark">
										<tr>
											<th class='th_center' scope="col" style="width: 25%;">Days</th>
											<th class='th_center' scope="col" style="width: 25%;">Morning <i class="fa fa-info-circle morn_times"><span class="morn_hours">5am - 1pm</span></i></th>
											<th class='th_center' scope="col" style="width: 25%;">Evening <i class="fa fa-info-circle eve_times"><span class="eve_hours">1pm - 9pm</span></i></th>
											<th class='th_center' scope="col" style="width: 25%;">Night <i class="fa fa-info-circle night_times"><span class="night_hours">9pm - 5am</span></i></th>
										</tr>
										
										<?php for($i = 7;  $i < 14; $i++) { echo "<tr>"; ?>
											<th scope="col">
												<?php echo date('l', strtotime($datesArr[$i])); ?>
											</th>
											<td id="morn"><input type="checkbox" name="morn_times[]" value=<?php echo json_encode($mornTimeArr[$i]); ?>></td>
											<td id="eve"><input type="checkbox" name="eve_times[]" value=<?php echo json_encode($eveTimeArr[$i]); ?>></td>
											<td id="night"><input type="checkbox" name="night_times[]" value=<?php echo json_encode($nightTimeArr[$i]); ?>></td>
										<?php echo "</tr>"; } ?>
									</thead>
								</table>
							</div>
							<div class="col-xs-1"></div>

						</div>
							
						<div class="x_content">
							<div class="x_title">
								<div class="clearfix"></div>
							</div>	
							<div class="col-xs-6">
								<ul class="nav navbar-right panel_toolbox">
									<li>
										<button type="button" class="btn btn-danger" style="padding: 5px 18px 5px 18px; margin: 5px 0 5px 5px;"><a href="screeners" style="color: white">Back</a></button>
									</li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="nav navbar-left panel_toolbox">      
									<li><button type="submit" class="btn btn-success" style="padding: 5px 11px 5px 11px; margin: 5px 5px 5px 0;">Submit</button></li>
								</ul>
							</div>			
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>

<style>
	.morn_times .morn_hours {
		visibility: hidden;
		width: 120px;
		background-color: #544D71;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 5px 0;

		/* Position the tooltip */
		position: absolute;
		z-index: 1;
	}

	.morn_times:hover .morn_hours {
		visibility: visible;
	}

	.eve_times .eve_hours {
		visibility: hidden;
		width: 120px;
		background-color: #544D71;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 5px 0;

		/* Position the tooltip */
		position: absolute;
		z-index: 1;
	}

	.eve_times:hover .eve_hours {
		visibility: visible;
	}

	.night_times .night_hours {
		visibility: hidden;
		width: 120px;
		background-color: #544D71;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 5px 0;

		/* Position the tooltip */
		position: absolute;
		z-index: 1;
	}

	.night_times:hover .night_hours {
		visibility: visible;
	}

</style>

<script type="text/javascript">
	function notifyUser(message) {
		if(message == "error_nothing") {
		new PNotify({
			title: 'Error!',
			text: "Please select at least one date before submitting.",
			type: 'error',
			styling: 'bootstrap3',
			delay: 2000
		});
		} else if(message == "error") {
		new PNotify({
			title: 'Error!',
			text: "An error has occurred, please try submitting again.",
			type: 'error',
			styling: 'bootstrap3',
			delay: 2000
		});
		} else if(message == "success") {
			new PNotify({
			title: 'Success!',
			text: "Your availability has been submitted in successfully!",
			type: 'success',
			styling: 'bootstrap3',
			delay: 2000
		});
		}
  	}
</script>