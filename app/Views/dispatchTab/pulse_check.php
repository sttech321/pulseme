<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-step Form</title>
    <link rel="stylesheet" type="text/css" href="/css/pulse.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.js"></script>
    <style>
        .slider-wrapper {
            width: 300px;
            margin: 10px auto;
        }

        body .ratings-title {
            padding: 0 0 18px;
        }

        .noUi-horizontal .noUi-handle {
            left: auto;
            position: inherit;
            height: 33px;
            width: 33px;
            top: -7px;
            background: #a6b7bf;
            box-shadow: 0 0 2px #a6b7bf;
            transition: height .3s, width .3s, top .3s, background .3s;
        }

        .slider-wrapper .noUi-handle.noUi-active {
            background: #a6b7bf;
            box-shadow: 0 0 0 13px rgba(0, 0, 0, .1);
            height: 44px;
            width: 44px;
            top: -11px;
        }

        .slider-wrapper .noUi-connects,
        .slider-wrapper .noUi-base,
        .slider-wrapper .noUi-target {
            height: 20px;
            border-radius: 10px;
        }

        .noUi-value {
            cursor: pointer;
        }

        .noUi-value-active {
            font-weight: bold;
            color: #000;
        }

        .noUi-tooltip {
            display: none;
        }

        .noUi-connect {
            background: linear-gradient(to right, #f30 0%, #2babc9 35%, #88e113 100%);
        }

        .noUi-marker-horizontal.noUi-marker-large {
            height: 0;
        }

        .noUi-pips-horizontal {
            padding: 0px 0;
        }
    </style>
</head>
<body>
<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>
<?php
$url = '/application/pulsecheck/'. $technician['employeeId'];
print_r($url);
?>

<?php if($technician): ?>
    <form id="multiStepForm" method="POST" action="<?= base_url('/application/pulsecheck/' . $technician['employeeId']) ?>" >
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
                            <a class="col-xs-4" data-mood="negative">
                                <img src="<?= base_url('/image/campaign/faces-negative-flat.svg') ?>" onclick="nextStep()" class="img-responsive">
                            </a>
                            <a class="col-xs-4" data-mood="positive" onclick="nextpart()">
                                <img src="<?= base_url('/image/campaign/faces-positive-flat.svg') ?>" class="img-responsive">
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
                                <p class="mb-4">Thank you!</p>
                                <b>We always want to provide our Clients with a 5 star experience.</b><br>
                                <br>
                            </h2>
                        </div>
                        <div>
                            <div class="social-media-websites gap-flex-20">
                                <a class="social-media-btn sm-banner contact-us btn btn-block btn-lg" onclick="nextStep()">
                                    <i class="zmdi zmdi-sun p-r-10"></i> Contact us directly!
                                </a>
                                <a type="btn" class="btn btn-lg btn-success" onclick="prevStep()">BACk</a>
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
                    <div id="pulsecheck-title" class="card-header row m-0" style="">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
                        </div>
                    </div>
                    <div class="flow-card rating active" data-flow-id="62" data-flow-back="60" data-type="rating">
                        <div class="flow-card-header clearfix"></div>
                        <div class="m-t-15">



                            <h3 class="ratings-title">How likely are you to recommend us to your friends and family?
                            </h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="<?= base_url('/image/campaign/faces-negative-flat.svg') ?>">
                                </div>
                                <div class="slider-wrapper slider">
                                    <div id="employees1"></div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src="<?= base_url('/image/campaign/faces-positive-flat.svg') ?>">
                                </div>
                            </div>
                            <input type="hidden" name = "ID" value = "<?= $technician['ID'] ?>">
                            <input type="hidden" name="rating1_text" id="rating1_text" value="How likely are you to recommend us to your friends and family?">
                            <input type="hidden" name="rating1_value" id="rating1_value" value="10">


                            <h3 class="ratings-title">Professionalism</h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="<?= base_url('/image/campaign/faces-negative-flat.svg') ?>">
                                </div>
                                <div class="slider-wrapper slider">
                                    <div id="employees2"></div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src=" <?= base_url('/image/campaign/faces-positive-flat.svg') ?>">
                                </div>
                            </div>
                            <input type="hidden" name="rating2_text" id="rating2_text" value="Professionalism">
                            <input type="hidden" name="rating2_value" id="rating2_value" value="10">

                            <h3 class="ratings-title">Quality of Service</h3>
                            <div class="ratings-slider">
                                <div class="mood negative text-left">
                                    <img src="<?= base_url('/image/campaign/faces-negative-flat.svg') ?>">
                                </div>
                                <div class="slider-wrapper slider">
                                    <div id="employees3"></div>
                                </div>
                                <div class="mood positive text-right">
                                    <img src=" <?= base_url('/image/campaign/faces-positive-flat.svg') ?>">
                                </div>
                            </div>

                            <input type="hidden" name="rating3_text" id="rating3_text" value="Quality of Service">
                            <input type="hidden" name="rating3_value" id="rating3_value" value="10">
                            <!-- <input type="hidden" name="campaignId" value="<?php //echo $technician['ID']; ?>"> -->
                            
                        </div>
                        <div class="text-center p-b-20">
                            <a class="btn btn-lg btn-primary waves-effect" data-submit-ratings="" data-next="63" onclick="nextStep()">Submit</a>
                            <a type="btn" class="btn btn-lg btn-success" onclick="prevStep()">BACk</a>
                        </div>
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
                                    <button type="submit" class="btn btn-primary waves-effect">
                                        Send
                                    </button>
                                    <div class="form-group p-0">
                                        <input type="hidden" name="reviewType" value="custom">
                                        <!-- <input type="hidden" name="contactcard" value="yes"> -->
                                        <input type="hidden" id="result_value" name="result_value">
                                        <input type="number" class="input form-control fg-input validate" value="" name="customer_name" placeholder="customer_name">
                                        <input type="email" class="input form-control fg-input validate" value="" name="customer_email" placeholder="customer_email">
                                        <input type="text" class="input form-control fg-input validate" value="" name="state" placeholder="state">
                                        <input type="text" class="input form-control fg-input validate" value="" name="city" placeholder="city">
                                        <input type="number" class="input form-control fg-input validate" value="" name="zipcode" placeholder="zipcode">
                                        
                                        <div class="fg-line">
                                            <textarea class="input form-control fg-input validate" name="feedback" rows="5" placeholder="Type your feedback..." data-empty-error="Feedback cannot be left blank" data-max-length="999" spellcheck="false"></textarea> 
                                        </div>
                                        <div class="help-block help-block-alt text-left brd-t-l-0 brd-t-r-0 m-t-0">
                                        </div>
                                        <a type="btn" class="btn btn-lg btn-success" onclick="prevStep()">BACk</a>
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
                    <div id="pulsecheck-title" class="card-header row m-0">
                        <div class="col-xs-6">
                            <h3 class="title m-t-5 text-left"></h3>
                        </div>
                        <div class="col-xs-6">
                            <img class="logo" src="<?= $technician['image'] ?>" style="">
                        </div>
                    </div>
                    <div class="flow-card social-media active" data-flow-id="20" data-flow-back="1" data-type="social-media">
                        <div class="flow-card-header clearfix">
                            <h2 class="flow-card-title">
                            </h2>
                            <h2 style="font-size: 26px; text-align: inherit; margin-bottom: 5px;">Leave your review in
                                seconds.</h2>
                            <b style="font-size: 14px;" class="m-0">(Google reviews help us the most!)</b>

                        </div>
                        <div class="social-media-websites positive" data-is-last="0" data-valid="True" data-confirm-text="I left a great review!" data-success="21" data-failure="22">
                            <a href="https://search.google.com/local/writereview?placeid=ChIJV-VOPI_8wogRTehQ26NNi1U" target="_blank" data-sm="google" class="social-media-btn sm-banner google btn btn-block btn-lg" data-success="21" data-failure="22" data-retry="1" data-app="google">
                                <i class="sm-icon p-r-10"></i>Google
                            </a>
                            <a href="https://www.facebook.com/login/?next=https%3A//www.facebook.com/pg/None/reviews/" target="_blank" data-sm="facebook" class="social-media-btn sm-banner facebook btn btn-block btn-lg" data-success="21" data-failure="22" data-retry="1" data-app="facebook">
                                <i class="sm-icon p-r-10"></i>Facebook
                            </a>
                        </div>
                        <a type="btn" class="btn btn-lg btn-success" onclick="prevstep2()">BACk</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <?php endif; ?>
    <script>
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

    <script>
        const labels = {
            0: '0',
            1: '1',
            2: '2',
            3: '3',
            4: '4',
            5: '5',
            6: '6',
            7: '7',
            8: '8',
            9: '9',
            10: '10'
        };

        function createSlider(elementId,hiddenInputId) {
            const slider = document.querySelector(elementId);
            const hiddenInput = document.querySelector(hiddenInputId);

            noUiSlider.create(slider, {
                start: 8,
                connect: [true, false],
                tooltips: {
                    to: function(value) {
                        return value > 10 ? '10+' : parseInt(value);
                    }
                },
                range: {
                    'min': 0,
                    '10%': 1,
                    '20%': 2,
                    '30%': 3,
                    '40%': 4,
                    '50%': 5,
                    '60%': 6,
                    '70%': 7,
                    '80%': 8,
                    '90%': 9,
                    'max': 10
                },
                pips: {
                    mode: 'steps',
                    filter: function(value, type) {
                        return type === 0 ? -1 : 1;
                    },
                    format: {
                        to: function(value) {
                            return labels[value];
                        }
                    }
                }
            });

            slider.noUiSlider.on('update', function(values, handle) {
                var value = parseInt(values[handle]);
                console.log(value,'value');
                var pipValues = slider.querySelectorAll('.noUi-value');

                pipValues.forEach(function(pip) {
                    pip.classList.remove('noUi-value-active');
                    if (pip.innerHTML == value) {
                        pip.classList.add('noUi-value-active');
                    }
                });

                // Change the connect background color based on the slider value
                var connect = slider.querySelector('.noUi-connect');
                if (value <= 6) {
                    connect.style.background = '#f30'; // Color for 0% to 35%
                } else if (value > 6 && value <= 8) {
                    connect.style.background = '#2babc9'; // Color for 35% to 100%
                } else {
                    connect.style.background = '#88e113'; // Color for 100%
                }
                hiddenInput.value = value;
                console.log(hiddenInput,'val2222');
            });

            // Add click event to pips for setting the slider value
            slider.querySelectorAll('.noUi-value').forEach(function(pip) {
                pip.addEventListener('click', function() {
                    slider.noUiSlider.set(this.innerHTML);
                });
            });
        }

        // Initialize sliders and pass the corresponding hidden input field IDs
        createSlider('#employees1', '#rating1_value');
        createSlider('#employees2', '#rating2_value');
        createSlider('#employees3', '#rating3_value');


        document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.querySelector('#multiStepForm');
    
    // Attach event listener to the submit button
    document.querySelector('#step4 .btn-primary').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get all hidden input values in Step 4
        const hiddenValues = [
            document.querySelector('#rating1_value').value,
            document.querySelector('#rating2_value').value,
            document.querySelector('#rating3_value').value
        ].map(value => parseFloat(value) || 0); 

      
        const average = hiddenValues.reduce((acc, val) => acc + val, 0) / hiddenValues.length;

      
        const result = average < 5 ? 'negative' : 'positive';
    
        const resultHiddenInput = document.querySelector('#result_value');
        if (resultHiddenInput) {
            resultHiddenInput.value = result;
        }

        setTimeout(() => {
      
            const formData = new FormData(form);
      
            form.submit();
        }, 100);
    });
});


    </script>

</body>
</html>
