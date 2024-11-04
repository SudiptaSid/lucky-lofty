	<?php include 'include/header.php';?>

	<!-- Banner -->
	<section class="cs_inner_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<h3>My Details</h3>
				</div>
				<?php include 'include/banner_box.php';?>
			</div>
		</div>
	</section>

	<!-- Breadcrumb -->
	<section class="bread_crumb">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ol>
						<li>You are here :</li>
						<li><a href="index.php">Lucky Lofty</a></li>
						<li class="active"><a href="my_details.php">My Details</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	
	<!-- My Account Page -->
	<section class="content_tb_pg page_account">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Please enter your details to complete your registration.</p>
				</div>
			</div>
			<form action="00?" class="mt-4">
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">First Name :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Last Name :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Email <span class="red">*</span> :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Phone Number <span class="red">*</span> :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Gender :</label>
							<div class="col-sm-9">
								<select name="" id="" class="form-control">
									<option value="">Male</option>
									<option value="">Female</option>
									<option value="">Others</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Date of Birth <span class="red">*</span> :</label>
							<div class="col-sm-3">
								<select name="" id="" class="form-control">
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select name="" id="" class="form-control">
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select name="" id="" class="form-control">
									<option value="">2019</option>
									<option value="">2018</option>
									<option value="">2017</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Country <span class="red">*</span> :</label>
							<div class="col-sm-9">
								<select name="" id="" class="form-control">
									<option value="">India</option>
									<option value="">United Kingdom</option>
									<option value="">United States</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group row">
							<div class="col-12" style="margin-left:150px;">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="">
									<label class="form-check-label" for="">
										Please confirm you agree to our <a href="terms_and_conditions.php" class="color_blue">Terms and Conditions</a> and <a href="privacy_policy.php" class="color_blue">Privacy Policy</a>.
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-right">
						<input class="btn_blue bl text-uppercase" name="submit" type="submit">
					</div>
				</div>
			</form>
		</div>
	</section>
	
	<?php include 'include/footer.php';?>