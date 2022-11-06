
<?php
//include_once PARTIALS.'sub-header.php';
include PARTIALS.'header-jumbo.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            
        <h4 class="pt-5">Get in <strong>Touch</strong></h4>
            <p class="lead mb-0 text-4">
                What ever your needs, we are interested to know and always ready to assist you. Just Give us a call or send us a message!
            </p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-lg-6">

            <div class="overflow-hidden mb-1">
                <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
            </div>
            <div class="overflow-hidden mb-4 pb-3">
                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Send us your questions.</p>
            </div>

            <form class="contact-form" action="<?= _link('process-contact-form') ?>" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
            
                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="required font-weight-bold text-dark text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> <?= STREET_ADDRESS ?></li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong><a href="<?=SUPPORT_CONTACT_2?>"> <?= SUPPORT_CONTACT_2 ?></a></li>
                    <li><i class="fab fa-whatsapp top-6"></i> <strong class="text-dark">Whatsapp:</strong> <a href="<?= whatsappUrl(SUPPORT_CONTACT_1)?>"><?= SUPPORT_CONTACT_1 ?></a></li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:<?= SUPPORT_EMAIL ?>"><?= SUPPORT_EMAIL ?></a></li>
                </ul>
            </div>

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-2">
                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 8am to 4:30pm</li>
                    <li><i class="far fa-clock top-6"></i> Saturday - Closed</li>
                    <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                </ul>
            </div>

        </div>

    </div>

</div>

<div id="googlemaps" class="google-map mt-0" style="height: 500px;">
    <div class="et_pb_text_inner">
        <p>
            <iframe src="https://maps.google.com/maps?q=Jan%20Montessori%20School,%20Pillar%202,%20Dodowa,%20Accra&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
    </div>
</div>