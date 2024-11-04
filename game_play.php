	<?php include 'include/header.php';?>

	<!-- Banner -->
	<section class="cs_inner_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<h3>Game Play</h3>
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
						<li class="active"><a href="game_play.php">Game Play</a></li>
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
						<li><a href="my_account.php">My Account</a></li>
						<li class="check"><a href="game_play.php">Game Play</a></li>
						<li><a href="promo_code.php">Promotion Code</a></li>
						<li><a href="withdrawals.php">Withdrawals</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="content_tb_pg page_game_play">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="content_pg_heading">Game Play</h3>
					<div class="top_bar_gp">
						<div class="tc_gp">
							<a href="#" class="btn_blue bl">Prev Day</a>
						</div>
						<div class="tc_gp text-center">
							<div class="g_name">
								No games for :
								<div class="date-input">
									<input type="text" placeholder="9 April 2019" value="9 April 2019" class="datepicker">
								</div>
							</div>
						</div>
						<div class="tc_gp text-right">
							<a href="#" class="btn_blue bl">Next Day</a>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>
									<span>Games</span>
								</th>
								<th>
									<span>Value</span>
								</th>
								<th>
									<span>date</span>
								</th>
								<th>
									<span>players</span>
								</th>
								<th>
									<span>winners</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
							</tr>
						</tbody>
                    </table>
				</div>
			</div>
		</div>
	</section>
		
	</article>
	<?php include 'include/footer.php';?>