<?php include ('./components/header.php'); ?>

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							<?php echo $_SESSION['username'] ?>'s profile
						</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" style="color: #dee2e6">View and edit your details.</li>
                            </ol>
                        </nav>
					</div>
					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Settings</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                                        Account
                                    </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                                        Password
                                    </a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Personal info</h5>
										</div>
										<div class="card-body">
											<form>
												<div class="row">
													<div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="fullname">Full Name</label>
                                                            <input type="text" class="form-control" id="fullname" placeholder="Full name" value="<?php echo $_SESSION['fullname'] ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $_SESSION['username'] ?>" disabled>
                                                        </div>
														<div class="form-group">
															<label for="email">Email</label>
															<input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?>" disabled>
														</div>
                                                        <div class="form-group">
                                                            <label for="email">Phone Number</label>
                                                            <input type="tel" class="form-control" id="tel" placeholder="Phone Number" value="<?php echo $_SESSION['tel'] ?>" disabled>
                                                        </div>
													</div>
													<div class="col-md-4">
														<div class="text-center">
															<img alt="Chris Wood" src="https://i.imgur.com/WKOInUn.png" class="rounded-circle img-responsive mt-2" width="128" height="128" />
															<div class="mt-2">
																<span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
															</div>
															<small>For best results, use an image at least 128px by 128px in .jpg
                                            format</small>
														</div>
													</div>
												</div>

												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>

								</div>


								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form>
												<div class="form-group">
													<label for="inputPasswordCurrent">Current password</label>
													<input type="password" class="form-control" id="inputPasswordCurrent">
													<small><a href="./password-reset">Forgot your password?</a></small>
												</div>
												<div class="form-group">
													<label for="inputPasswordNew">New password</label>
													<input type="password" class="form-control" id="inputPasswordNew">
												</div>
												<div class="form-group">
													<label for="inputPasswordNew2">Verify password</label>
													<input type="password" class="form-control" id="inputPasswordNew2">
												</div>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

<?php include ('./components/footer.php'); ?>
