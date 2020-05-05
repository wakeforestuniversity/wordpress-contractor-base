<?php
$domain = 'http://fundraising.wfu.test';
$form_action = $domain . '/test-payment-confirmation.php';
?>
<!doctype html>
<html lang="en">
<head>

    <title>Wake N Shake Donation | Wake Forest University</title>

    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="IE=10" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />

    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7472334/7046972/css/fonts.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/wfu-cer-secure-static-prod-us-east-1/css/forms/wfu-foundation-oreo-forms.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/wfu-cer-secure-static-prod-us-east-1/css/forms/wfu-foundation-forms.min.css" media="print,screen" />
    <script type="text/javascript" src="https://s3.amazonaws.com/wfu-cer-secure-static-prod-us-east-1/js/forms/wfu-foundation-oreo-forms.min.js"></script>

</head>
<body>
<div id="page_main" class="row page_form">
    <div class="large-24 columns">
        <div class="row">
            <div id="wfu_main_header" class="small-24 columns">
                <h1>Wake &#039;N Shake</h1>
            </div>
        </div>
        <div id="wfu_main" class="row">


            <div id="wfu_main_content" class="large-16 columns">
                <div id="form_main">

                    <h2 class="gray2 secondary_heading">Donate Online</h2>

                    <h3>PAYMENT</h3>

                    <form id="custom_form" class="custom_form" data-gtm="wakenshake-donation" action="<?php echo $form_action; ?>" method="POST" autocomplete="off" novalidate>
                        <input type="hidden" name="token" value="MTkzZjA3M2JiZWJlYmM1MWNkMWE1ZWNmODFiOTc1ZmY=" />
                        <input type="hidden" name="action" value="sale" />
                        <input type="hidden" name="returnurl" value="<?php echo $_POST['redirect_url']; ?>" />

                        <div class="alert-box secondary">Fields marked with <span class="required">*</span> are required.</div>

                        <fieldset id="fieldset_payment">
                            <legend>Payment Information</legend>
                            <div class="row">
                                <div class="medium-24 columns">
                                    <fieldset id="fieldset_payment">
                                        <legend>Payment</legend>
                                        <div class="row">
                                            <div class="columns">
                                                Amount<br/>
                                                <div class="row collapse">
                                                    <div id="formfield_amount" class="small-4 columns">
                                                        <label id="label_amount" for="amount">
                                                            <span class="prefix">$</span>
                                                        </label>
                                                    </div>
                                                    <div class="small-20 columns">
                                                        <input type="text" id="amount" name="amount" value="<?php echo (float) $_POST['donation_amount']; ?>" readonly="readonly" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div id="formfield_cc" class="form_field medium-24 columns">
                                    <fieldset id="fieldset_card">
                                        <legend>Card Information</legend>
                                        <div class="row">
                                            <div class="small-24 columns">
                                                <label id="label_name" for="name">Cardholder name <span class="required">*</span></label>
                                                <input type="text" id="name" name="name" required="true" data-rule-required="true" data-msg-required="Cardholder name is required." data-rule-letterswithbasicpunc="true" data-msg-letterswithbasicpunc="Cardholder name can only contain letters and basic punctuation. Ex: ()-.,\':" maxlength="100" data-rule-maxlength="100" data-msg-maxlength="Cardholder name can't be longer than 100 characters." />
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-24 columns">
                                    <span><label class="error" for="name"></label></span>
                                </div>
                            </div>
                        </fieldset>

                        <div id="billing" class="row">
                            <div class="columns">
                                <fieldset>

                                    <legend>Donor Information</legend>

                                    <div id="billing_information" class="row">
                                        <div class="columns">

                                            <!-- begin display__email -->
                                            <div id="display__email" class="form_email row">
                                                <div class="small-24 columns">
                                                    <fieldset id="fieldset__email">
                                                        <legend> Email Address</legend>
                                                        <div class="row">
                                                            <div id="formfield__email_address" class="form_field columns">
                                                                <label id="label_customfield5" for="customfield5" class="">Email Address <span class="required">*</span>
                                                                </label>

                                                                <input type="email" id="customfield5" name="customfield5" value="" class="" required="true" data-rule-required="true" data-msg-required=" email address is required." data-rule-email="true" data-msg-email=" email address must be valid." maxlength="100" data-rule-maxlength="100" data-msg-maxlength=" email address must be no more than 100 characters."  />

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="medium-24 columns">
                                                                <div id="_email_error" class="error_container">
                                                                    <span id="_error_placeholder"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <!-- end display__email -->

                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </div>
                        <input type="hidden" name="apply_to" value="<?php echo $_POST['apply_to']; ?>" />
                        <input type="hidden" name="participant_id" value="<?php echo $_POST['participant_id'] ?? ''; ?>" />
                        <input type="hidden" name="team_id" value="<?php echo $_POST['team_id'] ?? ''; ?>" />
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div id="frm_btn">
                            <input id="submitButton" type="submit" class="btn button" value="Submit" />
                        </div>

                    </form>

                </div>
            </div>

            <div id="wfu_main_sidebar" class="large-8 columns">
                <div class="panel">

                    <h3>Contact Information</h3>
                    <p>
                        Wake &#039;N Shake<br/>
                        Office of Civic and Community Engagement<br/>
                        336.758.4070<br/>
                        <a href="mailto:wns@wfu.edu">wns@wfu.edu</a>
                    </p>
                    <p><i class="fi-web large"></i> <a href="https://wakenshake.com">Website</a></p>

                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    // Keeps number type inputs from every allowing empty value.
    const numInputs = document.querySelectorAll('input[type=number]')
    numInputs.forEach(function (input) {
        input.addEventListener('change', function (e) {
            if (e.target.value == '') {
                e.target.value = 0
            }
        })
    });
</script>

<script type="text/javascript" src="https://s3.amazonaws.com/wfu-cer-secure-static-prod-us-east-1/js/forms/wfu-jquery-forms.min.js"></script>

<script type="text/javascript">
    jQuery.validator.addMethod('require_from_group_select', function(value, element, options) {
        var selector = options[1];
        var attendees = $('select' + selector).filter(function() {
            return $(this).val() != '0';
        });
        return attendees.length > 0;
    }, 'Please select at least 1.');
</script>

<script src="https://static.secure.wfu.edu/js/foundation/wfu/jquery-form-error-placement.js"></script>

<script>
    $(function() {
        /**
         * This is a javascript array of the available prefixes.
         * It is generated from the 'combined_names' form config setting
         * It is used to make sure the various js is applied
         * dynamically to all the sets of form fields
         */
        var aPrefixes = ["contact","billing"];

        /**
         * Triggers for form submit handling and validation
         */
        $('#custom_form').validate({
            errorLabelContainer: $('div.error'),
            wrapper: 'span',
            errorPlacement: function(error, element) {
                var aErrorPlacement = $('#custom_form').form_error_placement(aPrefixes, element);
                var sErrorPlacementLocation = aErrorPlacement[0];
                var sNamePrefix = aErrorPlacement[1];
                switch(sErrorPlacementLocation)
                {
                    case 'address':
                        error.insertBefore('#'+sNamePrefix+'_address_error span#'+sNamePrefix+'_error_placeholder');
                        break;

                    default:
                        error.insertAfter(element);
                        break;
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element.form).find('#formfield_'+element.id).addClass(errorClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass(errorClass).addClass(validClass);
                $(element.form).find('#formfield_'+element.id).removeClass(errorClass);
            },
            submitHandler: function(form) {
                if ($(form).attr('submitted') == true) {
                    return false;
                } else {
                    $(form).attr('submitted', true);
                    form.submit();
                }
            }
        });
    });
</script>
</body>
</html>
