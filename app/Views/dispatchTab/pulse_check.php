<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-step Form</title>
    <link rel="stylesheet" type="text/css" href="/css/pulse.css">
</head>

<body>
    
<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<?php if($technician): ?>
<form id="multiStepForm" method="POST" action="<?= base_url('/application/pulsecheck/' . $technician['employeeId']) ?>">
        <!-- Step 1 -->
        <div class="step active selected container" id="step1">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
                        </div>
                    </div>
                    <div class="flow-card active mood" data-flow-id="1" data-flow-back="None" data-type="mood">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">How satisfied were you with the overall experience?</h2>
                        </div>
                        <div class="row p-b-30">
                            <a class="col-xs-4" data-mood="negative" onclick="nextStep()">
                                <img src="http://localhost:8080/image/campaign/faces-negative-flat.svg" class="img-responsive">
                            </a>
                            <a class="col-xs-4" data-mood="positive" onclick="nextpart()">
                                <img src="http://localhost:8080/image/campaign/faces-positive-flat.svg" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="step container" id="step2">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
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
                                    <i class="zmdi zmdi-sun p-r-10"></i> Contact us directly!
                                </a>
                                <a class="btn btn-lg btn-primary waves-effect" data-submit-ratings=""
                                    data-next="63" onclick="prevStep()">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="step container" id="step3">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>">
                        </div>
                    </div> 
                     <div class="flow-card active mood" data-flow-id="1" data-flow-back="None" data-type="mood">
                        <h3 class="ratings-title">How likely are you to recommend us to your friends and family?</h3>
                        <input type="range" min="0" max="10" data-range-id="1">
                        <input type="hidden" name="rating1_value" id="rating1_value" value="5">
                        <input type="hidden" name="rating1_text" id="rating1_text" value="How likely are you to recommend us to your friends and family?">

                        <h3 class="ratings-title">Professionalism</h3>
                        <input type="range" min="0" max="10" data-range-id="2">
                        <input type="hidden" name="rating2_value" id="rating2_value" value="5">
                        <input type="hidden" name="rating2_text" id="rating2_text" value="Professionalism">

                        <h3 class="ratings-title">Quality of Service</h3>
                        <input type="range" min="0" max="10" data-range-id="3">
                        <input type="hidden" name="rating3_value" id="rating3_value" value="5">
                        <input type="hidden" name="rating3_text" id="rating3_text" value="Quality of Service"> 

                        <a class="btn btn-lg btn-primary waves-effect"  onclick="nextStep()">Submit</a> 
                         <a class="btn btn-lg btn-primary waves-effect" onclick="prevStep()">BACK</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="step container" id="step4">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
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
                                    <div class="form-group p-0">
                                        <div class="fg-line">
                                            <textarea class="input form-control fg-input validate" name="feedback" rows="5"
                                            placeholder="Type your feedback..."
                                            data-empty-error="Feedback cannot be left blank" data-max-length="999"
                                            spellcheck="false"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary waves-effect">
                                            Send
                                        </button>
                                        <div class="help-block help-block-alt text-left brd-t-l-0 brd-t-r-0 m-t-0"></div>
                                            <a class="btn btn-lg btn-primary waves-effect" data-submit-ratings=""
                                            data-next="63" onclick="prevStep()">BACK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- part 2 step 1 -->
        <div class="step container" id="step5">
            <div class="wrapper test-transaction has-bottom-logo">
                <div class="card text-center">
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
                        </div>
                    </div>
                    <div class="flow-card social-media active" data-flow-id="20" data-flow-back="1"
                        data-type="social-media">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">
                            </h2>
                            <h2 style="font-size: 26px; text-align: inherit; margin-bottom: 5px;">Leave your review in
                                seconds.</h2>
                            <b style="font-size: 14px;" class="m-0">(Google reviews help us the most!)</b>

                        </div>
                        <div class="social-media-websites positive" data-is-last="0" data-valid="True"
                            data-confirm-text="I left a great review!" data-success="21" data-failure="22">
                            <a href="https://search.google.com/local/writereview?placeid=ChIJV-VOPI_8wogRTehQ26NNi1U"
                                target="_blank" data-sm="google"
                                class="social-media-btn sm-banner google btn btn-block btn-lg" data-success="21"
                                data-failure="22" data-retry="1" data-app="google">
                                <i class="sm-icon p-r-10"></i>Google
                            </a>
                            <a href="https://www.facebook.com/login/?next=https%3A//www.facebook.com/pg/None/reviews/"
                                target="_blank" data-sm="facebook"
                                class="social-media-btn sm-banner facebook btn btn-block btn-lg" data-success="21"
                                data-failure="22" data-retry="1" data-app="facebook">
                                <i class="sm-icon p-r-10"></i>Facebook
                            </a>
                            <a class="btn btn-lg btn-primary waves-effect" data-submit-ratings="" data-next="63"
                                onclick="prevstep2()">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<?php endif; ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const rangeInputs = document.querySelectorAll('input[type="range"]');
    const form = document.getElementById('multiStepForm');

    // Update hidden input values based on range input changes
    rangeInputs.forEach(function(rangeInput) {
        const rangeId = rangeInput.getAttribute('data-range-id');
        const hiddenValueInput = document.getElementById(`rating${rangeId}_value`);
        const hiddenTextInput = document.getElementById(`rating${rangeId}_text`);

        rangeInput.addEventListener('input', function() {
            hiddenValueInput.value = rangeInput.value;
        });
    });

    // Handle form submission
    form.addEventListener('submit', function(event) {
   
    });
});

    let currentStep = 0;
    const steps = document.querySelectorAll('.step');

    function showStep(step) {
        steps.forEach((stepElement, index) => {
            stepElement.classList.toggle('active', index === step);
            console.log((stepElement), 'aaa');
        });
    }

    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
            console.log((currentStep), 'bbbb');
        }
    }

    function prevStep() {
        if (currentStep > 0 && currentStep != 4) {
            currentStep--;
            showStep(currentStep);
            console.log(currentStep, 'cccc');
        }
    }  

    function prevstep2() {
        if (currentStep >= 4) {
            currentStep = 0;
            showStep(currentStep);
            console.log((currentStep), 'dddd');
        }
    }

    function nextpart() {
        // Directly activate step 5
        currentStep = 4; // Index 4 corresponds to step 5
        showStep(currentStep);
        console.log((currentStep), 'eeeee');
    }
    
</script>

</body>

</html>

