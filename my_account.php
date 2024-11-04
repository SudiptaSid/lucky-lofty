	<?php include 'include/header.php';?>

	<!-- Banner -->
	<section class="cs_inner_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<h3>My Account</h3>
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
						<li class="active"><a href="my_account.php">My Account</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section id="cs_nav_gtn">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="account_menu">
						<li class="check"><a href="my_account.php">My Account</a></li>
						<li><a href="game_play.php">Game Play</a></li>
						<li><a href="promo_code.php">Promotion Code</a></li>
						<li><a href="withdrawals.php">Withdrawals</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<!-- My Account Page -->
	<section class="content_tb_pg page_account">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="content_pg_heading">My Account</h3>
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
							<label class="control-label col-sm-3" for="">Postcode :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Address :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Town :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
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
					<div class="col-md-6 col-12">
						<div class="form-group row">
							<label class="control-label col-sm-3" for="">Twitter :</label>
							<div class="col-sm-9">
								<input class="form-control" required="" type="text">
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