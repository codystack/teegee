            <div class="m-1">
              <div class="modal fade" id="hireme-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="icon bg-dark" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
                      </button>
                      <div class="m-xl-4 m-3">
                        <div class="icon-round icon-round-lg bg-primary mx-auto mb-4">
                          <img class="icon bg-primary" src="assets/img/icons/theme/shopping/wallet.svg" alt="mail-opened icon" data-inject-svg />
                        </div>
                        <div class="text-center mb-4">
                          <h4 class="h3 mb-1">Have a project idea?</h4>
                          <p>I won't break your wallet, just send me a message let's get started.</p>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                          <div class="form-row">
                            <div class="col-12">
                              <input type="text" class="form-control mb-2" placeholder="Full Name" name="fullName" required>
                            </div>
                            <div class="col-12">
                              <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="col-12">
                              <input type="tel" class="form-control mb-2" placeholder="Phone Number" name="tel" required>
                            </div>
                            <div class="col-12">
                              <textarea class="form-control mb-2" placeholder="Tell me what i need to know." name="comment" required></textarea>
                            </div>
                            <div class="col-12">
                              <div class="d-none alert alert-success" role="alert" data-success-message>
                                Thanks, I will be in touch shortly.
                              </div>
                              <div class="d-none alert alert-danger" role="alert" data-error-message>
                                Please fill all fields correctly.
                              </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-loading btn-block" name="hireme_btn" data-loading-text="Sending">
                                <img class="icon" src="assets/img/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                                <span>Submit</span>
                              </button>
                            </div>
                          </div>
                        </form>
                        </small>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="m-1">
              <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content bg-primary text-light border-0">
                    <img src="https://i.imgur.com/yGm4gJm.jpg" alt="Image" class="bg-image blend-mode-multiply rounded opacity-30">
                    <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="icon bg-white" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
                      </button>
                      <div class="m-xl-6 m-3 text-center">
                        <div class="mb-4">
                          <h4 class="display-4">Stay in the loop</h4>
                          <p class="lead">Subscribe and receive my newsletters to follow the news about my fresh and fantastic products.
                          </p>
                        </div>
                        <form action="https://mailform.mediumra.re/leap/mailchimp.php" data-form-email novalidate>
                          <div class="d-sm-flex flex-column flex-sm-row mb-3 justify-content-center">
                            <input type="email" name="email" class="mr-sm-1 mb-2 mb-sm-0 form-control form-control-lg" placeholder="Email Address" required>
                            <button type="submit" class="ml-sm-1 btn btn-lg btn-primary btn-loading" data-loading-text="Sending">
                              <img class="icon" src="assets/img/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                              <span>Subscribe</span>
                            </button>
                          </div>
                          <div>
                            <div class="d-none alert alert-success" role="alert" data-success-message>
                              Thanks, a member of our team will be in touch shortly.
                            </div>
                            <div class="d-none alert alert-danger" role="alert" data-error-message>
                              Please fill all fields correctly.
                            </div>
                          </div>
                        </form>

                        <div class="text-small text-muted">
                          We’ll never share your details with third parties.
                          <br class="visible-md" />View our <a href="privacy-policy">Privacy
              Policy</a> for more info.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>