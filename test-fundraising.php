<?php
$domain = 'http://fundraising.wfu.test';
$sDonationFormUrl = $domain . '/test-payment.php';
$sRegistrationFormUrl = $domain . '/test-payment.php';
$sWebsiteUrl = $domain . '/test-payment-complete.php'
?>

<h1>Donate to Event</h1>
<form action="<?php echo $sDonationFormUrl; ?>" accept-charset="UTF-8" method="post">
    <input name="utf8" type="hidden" value="&#x2713;">
    <input type="hidden" name="authenticity_token" value="false">
    <input type="text" name="donation_amount" id="donation_amount" value="10" autofocus="autofocus" autocomplete="off" />
    <input type="hidden" name="type" id="type" value="donation">
    <input type="hidden" name="apply_to" id="apply_to" value="event">
    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $sWebsiteUrl; ?>">
    <input type="submit" value="Give Now" />
</form>

<h1>Donate to Participant</h1>
<form action="<?php echo $sDonationFormUrl; ?>" accept-charset="UTF-8" method="post">
    <input name="utf8" type="hidden" value="&#x2713;" />
    <input type="hidden" name="authenticity_token" value="false" />
    <input type="text" name="donation_amount" id="donation_amount" value="10" autofocus="autofocus" autocomplete="off" />
    <input type="hidden" name="type" id="type" value="donation">
    <input type="hidden" name="apply_to" id="apply_to" value="participant">
    <input type="hidden" name="participant_id" id="participant_id" value="2" />
    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $sWebsiteUrl; ?>" />
    <input type="submit" value="Give Now" />
</form>

<h1>Donate to Team</h1>
<form action="<?php echo $sDonationFormUrl; ?>" accept-charset="UTF-8" method="post">
    <input name="utf8" type="hidden" value="&#x2713;" />
    <input type="hidden" name="authenticity_token" value="false" />
    <input type="text" name="donation_amount" id="donation_amount" value="10" autofocus="autofocus" autocomplete="off" />
    <input type="hidden" name="type" id="type" value="donation">
    <input type="hidden" name="apply_to" id="apply_to" value="team">
    <input type="hidden" name="team_id" id="team_id" value="2" />
    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $sWebsiteUrl; ?>" />
    <input type="submit" value="Give Now" />
</form>

<h1>Register</h1>
<form action="<?php echo $sRegistrationFormUrl; ?>" accept-charset="UTF-8" method="post">
    <input name="utf8" type="hidden" value="&#x2713;" />
    <input type="hidden" name="authenticity_token" value="false" />
    <input type="hidden" name="type" id="type" value="registration">
    <input type="hidden" name="apply_to" id="apply_to" value="participant">
    <input type="hidden" name="participant_id" id="participant_id" value="2" />
    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $sWebsiteUrl; ?>" />
    <input type="submit" value="Register" />
</form>