<?php 
$page = 'contact';
include('./components/headeralt.php');?>

    <section class="bg-primary-alt header-inner o-hidden">
      <div class="container layer-2 position-relative">
        <div class="row my-3">
          <div class="col">
          </div>
        </div>
        <div class="row py-6 text-center justify-content-center align-items-center">
          <div class="col-xl-8 col-lg-10">
            <h1 class="display-4">Get In Touch</h1>
            <p class="lead mb-0">Let's connect! I can help create your next website, service, and/or app 🖥📱 as well as create programming content, do speaking engagements, and interviews.
Can't wait to work with you.</p>
          </div>
        </div>
      </div>
      <div class="divider layer-1">
        <img src="assets/img/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
      </div>
      <div class="decoration bottom left scale-3 d-none d-md-block" data-jarallax-element="100">
        <img class="bg-primary" src="assets/img/decorations/deco-blob-8.svg" alt="deco-blob-8 decoration" data-inject-svg />
      </div>
      <div class="decoration middle-y left scale-2 blend-mode-multiply d-none d-md-block" data-jarallax-element="200">
        <img class="bg-primary-2" src="assets/img/decorations/deco-ring-3.svg" alt="deco-ring-3 decoration" data-inject-svg />
      </div>
      <div class="decoration middle-y scale-2 right blend-mode-multiply d-none d-xl-block" data-jarallax-element="50 50">
        <img class="bg-primary-3" src="assets/img/decorations/deco-dots-6.svg" alt="deco-dots-6 decoration" data-inject-svg />
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8 col-xl-6">
            <div class="text-center mb-4">
              <h2 class="h1">Leave a message</h2>
              <p class="lead">Fill out the form below to contact me with any general inquiries. Looking forward to hearing from you!
              </p>
            </div>
            <form action="" data-form-email novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Your Name *</label>
                    <input name="contact-name" type="text" class="form-control" required>
                    <div class="invalid-feedback">
                      Please type your name.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email Address *</label>
                    <input name="contact-email" type="email" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Brand Name</label>
                    <input name="contact-company" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input name="contact-phone" type="tel" class="form-control" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label>Message:</label>
                    <textarea class="form-control" name="contact-message" rows="10" placeholder="How can i help?"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div data-recaptcha data-sitekey="6Lffn6wZAAAAAAugzAxCAAtRnt51FglCvz8Gb24F"></div>
                </div>
                <div class="col">
                  <div class="d-none alert alert-success" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div class="d-none alert alert-danger" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <button type="submit" class="btn btn-primary btn-loading" data-loading-text="Sending">
                    <img class="icon" src="assets/img/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                    <span>Send Enquiry</span>
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

<?php include('./components/footer.php');?>    