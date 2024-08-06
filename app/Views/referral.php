<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-step Form</title>
    <link rel="stylesheet" type="text/css" href="/css/pulse.css">
    <style>
    .step {
        display: none;
    }

    .step.active {
        display: block;

    }

    .social-media-websites {
        margin-left: 180px;
    }

    .form-control {
        width: 100%;
    }

    textarea.input.form-control.fg-input.validate {
        width: 300px;
    }

    .form-group.p-0 {
        margin-left: 37px;
    }
    </style>
</head>

<body>
    <form id="multiStepForm">
        <!-- Step 1 -->
        <div class="step active container">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="/image/campaign/1721044627_b8c74ab58fed46455594.jpg" style="">
                        </div>
                    </div>
                    <div class="flow-card active mood" data-flow-id="1" data-flow-back="None" data-type="mood">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">How satisfied were you with the overall experience?</h2>
                        </div>
                        <div class="row p-b-30">
                            <a class="col-xs-4" data-mood="negative">
                                <img src="http://localhost:8080/image/campaign/faces-negative-flat.svg"
                                    onclick="nextStep()" class="img-responsive">
                            </a>
                            <a class="col-xs-4" data-mood="positive" onclick="nextpart()">
                                <img src="http://localhost:8080/image/campaign/faces-positive-flat.svg"
                                    class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="step container">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="/image/campaign/1721044627_b8c74ab58fed46455594.jpg" style="">
                        </div>
                    </div>
                    <div class="flow-card active mood" data-flow-id="1" data-flow-back="None" data-type="mood">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">
                                Thank you!<br>
                                <b>We always want to provide our Clients with a 5 star experience.</b><br>
                                <br>
                            </h2>
                        </div>
                        <div>
                            <div class="social-media-websites">
                                <a class="social-media-btn sm-banner contact-us btn btn-block btn-lg"
                                    onclick="nextStep()">
                                    <i class="zmdi zmdi-sun p-r-10"></i>
                                    Contact us directly!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="step container">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="/image/campaign/1721044627_b8c74ab58fed46455594.jpg" style="">
                        </div>
                    </div>
                    <div class="flow-card rating active" data-flow-id="62" data-flow-back="60" data-type="rating">
                        <div class="flow-card-header clearfix"></div>
                        <div class="m-t-15">
                            <h3 class="ratings-title">How likely are you to recommend us to your friends and family?
                            </h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="http://localhost:8080/image/campaign/faces-negative-flat.svg">
                                </div>
                                <div class="slider noUi-target noUi-ltr noUi-horizontal"
                                    data-rating-name="How likely are you to recommend us to your friends and family?"
                                    data-value="" data-rating-min="0" data-rating-max="10">
                                    <div class="noUi-base">
                                        <div class="noUi-connect" style="left: 0%; right: 20%;"></div>
                                        <div class="noUi-origin" style="left: 80%;">
                                            <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                        </div>
                                    </div>
                                    <div class="noUi-pips noUi-pips-horizontal">
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 0.00000%">0</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 10.00000%">1</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 20.00000%">2</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 30.00000%">3</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 40.00000%">4</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 50.00000%">5</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 60.00000%">6</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 70.00000%">7</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub active"
                                            style="left: 80.00000%">8</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 90.00000%">9</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 100.00000%">10</div>
                                    </div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src="http://localhost:8080/image/campaign/faces-positive-flat.svg">
                                </div>
                            </div>
                            <input type="hidden" name="rating_name[]"
                                value="How likely are you to recommend us to your friends and family?">
                            <input type="hidden" name="rating_value[]" value="">

                            <h3 class="ratings-title">Professionalism</h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="http://localhost:8080/image/campaign/faces-negative-flat.svg">
                                </div>
                                <div class="slider noUi-target noUi-ltr noUi-horizontal"
                                    data-rating-name="Professionalism" data-value="" data-rating-min="0"
                                    data-rating-max="10">
                                    <div class="noUi-base">
                                        <div class="noUi-connect" style="left: 0%; right: 20%;"></div>
                                        <div class="noUi-origin" style="left: 80%;">
                                            <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                        </div>
                                    </div>
                                    <div class="noUi-pips noUi-pips-horizontal">
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 0.00000%">0</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 10.00000%">1</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 20.00000%">2</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 30.00000%">3</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 40.00000%">4</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 50.00000%">5</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 60.00000%">6</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 70.00000%">7</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub active"
                                            style="left: 80.00000%">8</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 90.00000%">9</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 100.00000%">10</div>
                                    </div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src="http://localhost:8080/image/campaign/faces-positive-flat.svg">
                                </div>
                            </div>

                            <input type="hidden" name="rating_name[]" value="Professionalism">
                            <input type="hidden" name="rating_value[]" value="">

                            <h3 class="ratings-title">Quality of Service</h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="http://localhost:8080/image/campaign/faces-negative-flat.svg">
                                </div>
                                <div class="slider noUi-target noUi-ltr noUi-horizontal"
                                    data-rating-name="Quality of Service" data-value="" data-rating-min="0"
                                    data-rating-max="10">
                                    <div class="noUi-base">
                                        <div class="noUi-connect" style="left: 0%; right: 20%;"></div>
                                        <div class="noUi-origin" style="left: 80%;">
                                            <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                        </div>
                                    </div>
                                    <div class="noUi-pips noUi-pips-horizontal">
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 0.00000%">0</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 10.00000%">1</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 20.00000%">2</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 30.00000%">3</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 40.00000%">4</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 50.00000%">5</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 60.00000%">6</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 70.00000%">7</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub active"
                                            style="left: 80.00000%">8</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-sub"
                                            style="left: 90.00000%">9</div>
                                        <div class="noUi-value noUi-value-horizontal noUi-value-large"
                                            style="left: 100.00000%">10</div>
                                    </div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src="http://localhost:8080/image/campaign/faces-positive-flat.svg">
                                </div>
                            </div>

                            <input type="hidden" name="rating_name[]" value="Quality of Service">
                            <input type="hidden" name="rating_value[]" value="">
                        </div>
                        <div class="text-center p-b-20">
                            <button class="btn btn-lg btn-primary waves-effect" data-submit-ratings="" data-next="63"
                                onclick="nextStep()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="step container">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="/image/campaign/1721044627_b8c74ab58fed46455594.jpg" style="">
                        </div>
                    </div>
                    <div class="flow-card active mood" data-flow-id="1" data-flow-back="None" data-type="mood">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">We are sorry. Please tell us what happened. Your experience is
                                very important to us.</h2>
                        </div>
                        <div>
                            <div class="action write">
                                    <div class="clearfix aligned-textarea">
                                        <button class="btn btn-primary waves-effect">
                                            Send
                                        </button>
                                        <div class="form-group p-0">
                                            <div class="fg-line">
                                                <grammarly-extension data-grammarly-shadow-root="true" class="dnXmp"
                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
                                                </grammarly-extension>
                                                <grammarly-extension data-grammarly-shadow-root="true" class="dnXmp"
                                                    style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
                                                </grammarly-extension>
                                                <textarea class="input form-control fg-input validate" rows="5"
                                                    placeholder="Type your feedback..."
                                                    data-empty-error="Feedback cannot be left blank"
                                                    data-max-length="999" spellcheck="false"></textarea>
                                            </div>
                                            <div class="help-block help-block-alt text-left brd-t-l-0 brd-t-r-0 m-t-0">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="steps container">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="/image/campaign/1721044627_b8c74ab58fed46455594.jpg" style="">
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </form>

    <script>
    let currentStep = 0;
    const steps = document.querySelectorAll('.step');

    function showStep(step) {
        steps.forEach((stepElement, index) => {
            stepElement.classList.toggle('active', index === step);
        });
    }

    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function nextpart() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }

    document.getElementById('multiStepForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Form submitted!');
        // Add form submission logic here
    });
    </script>
</body>

</html>