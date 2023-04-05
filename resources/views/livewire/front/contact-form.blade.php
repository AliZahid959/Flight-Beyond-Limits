<div>
    <div class="row">
        <div class="col">
            <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                style="animation-delay: 100ms;"><span class="line-pre-title bg-color-primary"></span>Get in Touch
            </p>
            <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                style="animation-delay: 200ms;">Send Us a Message</h2>
            <p class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="300"></p>

            <form wire:submit.prevent="submit" class="custom-form-style-1 appear-animation animated fadeIn appear-animation-visible"
                data-appear-animation="fadeIn" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                @if (session('status'))
                    <div class="contact-form-success alert alert-success mt-4">
                        <strong>Success!</strong> {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="contact-form-error alert alert-danger mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                @endif

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <input type="text" placeholder="Your Name" value=""
                            data-msg-required="Please enter your name." maxlength="100" class="form-control"
                            wire:model="name" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" placeholder="Your E-mail" value=""
                            data-msg-required="Please enter your email address."
                            data-msg-email="Please enter a valid email address." maxlength="100"
                            class="form-control" wire:model="email" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input placeholder="Subject" type="text" value=""
                            data-msg-required="Please enter the subject." maxlength="100" class="form-control"
                            wire:model="subject" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <textarea placeholder="Your Message..." maxlength="5000" data-msg-required="Please enter your message."
                            rows="10" class="form-control" wire:model="message" required=""></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message"
                            class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold"
                            data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
