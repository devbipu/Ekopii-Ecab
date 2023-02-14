<?php
/*
	Template Name: Form page
	Version: 1.0
*/
get_header(); ?>
<main class="container">
	<div class="man_wrapper_bg">
		<section>
			<div class="home_header">
				<img src="<?php echo get_template_directory_uri().'/assets/images/unnamed.png'?>">
			</div>
		</section>
		<section class="container">
			<div class="content_wrap">
				<div class="row">
					<div class="col-md-3">
						<div class="col-12 left_sidebar">
							<div class="left_sidebar_row">
								<h4 class="section_title">Support</h4>
								<div class="my-4">
									<p><b>IT:</b> 01755559888</p>
									<p><b>Event Inchage:</b> Mr. Arnob, 017555596888</p>
									<p><b>Gift Incharge:</b> Mr. Hasan</p>
									<p><b>Food:</b> Mr. Rakib</p>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title">Organized by</h4>
								<div class="my-4">
									<p><b>Name: </b>eCab LTD</p>
									<p><b>Phone: </b><a href="tel:01844-696009">01844-696009</a></p>
									<p><b>Email: </b><a href="mailto:info@e-cab.net">info@e-cab.net</a></p>
									<p><b>Address: </b> House: 04, Road:23/a, Block: B, Banani, Dhaka 1213 Dhaka, Dhaka Division, Bangladesh</p>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title">Member affains standing committee</h4>
								<div class="my-4">
									<ul>
										<li>Mr. Xyz</li>
										<li>Mr. Xyz</li>
										<li>Mr. Xyz</li>
										<li>Mr. Xyz</li>
									</ul>
								</div>
							</div>
							<div class="left_sidebar_row">
								<h4 class="section_title"></h4>
								<div class="my-4">
									<h5>Automotion powred by Inside Age <a href="https://www.ekopii.com/">Ekopii</a> </h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 center_col">
						<div class="col-12">
							<h4 class="section_title">Registration</h4>
							<div class="my-4">
								<form method="post" action="#" id="registrationForm">
									<div class="border-1">
										<div>
											<div class="form_row">
												<div class="form-floating">
													<input type="text" class="form-control" name="memberId" id="memberID" placeholder="Member ID" value="Member ID">
													<label for="memberID">Member ID</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating mb-2">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													<label for="memberID">Name</label>
												</div>
												<div class="d-flex gap-3 justify-content-between">
													<div class="form-floating w-50">
														<select class="form-select" id="personType"onchange="onSelectChange(this)">
															<option value="Single">Single</option>
															<option value="Family">Family</option>
														</select>
														<label for="personType">Person Type</label>
													</div>
													<div class="form-floating w-50">
														<select class="form-select" id="kidsType" onchange="onSelectChange(this)">
															<option value="No Kids" selected>No Kids</option>
															<option value="With Kids">With Kids</option>
														</select>
														<label for="kidsType">Kids type</label>
													</div>
												</div>
											</div>
											
											<div class="form_row" id="addingWrapper">
												
											</div>


											<div class="form_row">
												<div class="form-floating">
													<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name">
													<label for="companyName">Company Name</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
													<label for="phoneNumber">Phone Number</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
													<label for="email">Email Address</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="number" class="form-control" name="nid" id="nid" placeholder="NID Number">
													<label for="nid">NID Number</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<select class="form-select shadow-sm" name="pickupArea" id="pickupArea" onchange="onSelectChange(this)">
														<option value="" disabled selected>Pickup Area</option>
														<option value="Banani">Banani</option>
														<option value="Dhanmond">Dhanmond</option>
														<option value="Gulshan">Gulshan</option>
														<option value="Mirpur">Mirpur</option>
														<option value="Moghbazar">Moghbazar</option>
														<option value="Motijheel">Motijheel</option>
														<option value="Rampura">Rampura</option>
														<option value="Uttara">Uttara</option>
														<option value="Zatrabari">Zatrabari</option>
													</select>
													<label for="pickupArea">Pickup Area</label>
												</div>
											</div>
											<div class="form_row">
												<div class="form-floating">
													<input type="number" class="form-control" name="regFee" id="regFee" placeholder="Registration Fee">
													<label for="nid">Registration Fee</label>
												</div>
											</div>
											<div class="form_row">
												<div>
													<input type="submit" class="btn btn-primary px-4 shadow-sm" value="Submit">
													<input type="reset" class="btn btn-outline-secondary px-4 shadow-sm" value="Reset">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-12 right_sidebar">
							<div class="sponsore_wrap">
								<h4 class="section_title">Platinum Sponsord</h4>
								<div class="mt-4">
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Suzuki.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Trivago.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Westin.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Yamaha.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Amazon-1.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Upwork.png'?>" alt="Trulli" style="width:100%">
									</figure>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Gold Sponsord</h4>
								<div class="mt-4">
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Suzuki.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Trivago.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Discover.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Yamaha.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Amazon-1.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Westin.png'?>" alt="Trulli" style="width:100%">
									</figure>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Sliver Sponsord</h4>
								<div class="mt-4">
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Suzuki.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Trivago.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Westin.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Yamaha.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Amazon-1.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Upwork.png'?>" alt="Trulli" style="width:100%">
									</figure>
								</div>
							</div>
							<div class="sponsore_wrap">
								<h4 class="section_title">Partnars</h4>
								<div class="mt-4">
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Airbnb.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Discover.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Westin.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Trivago.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Amazon-1.png'?>" alt="Trulli" style="width:100%">
									</figure>
									<figure>
										<img src="<?php echo get_template_directory_uri().'/assets/images/Upwork.png'?>" alt="Trulli" style="width:100%">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>

<script type="text/javascript">
	document.querySelector('#registrationForm').addEventListener('reset', () => {
		document.querySelectorAll('select').forEach((el) => {
			if (el.classList.contains('select_color')) {
				el.classList.remove('select_color');
			}
		})
	})
	function onSelectChange(el) {
		el.classList.add('select_color');
	}
</script>
<?php
get_footer();