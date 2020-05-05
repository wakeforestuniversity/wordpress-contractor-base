<?php
$redirect_url = $_POST['returnurl'];
$custom_fields = array(
    'amount' => $_POST['amount'],
    'name' => $_POST['name'], // @todo not currently being returned from the payment form.
    'email' => $_POST['customfield5'],
    'apply_to' => $_POST['apply_to'],
    'team_id' => $_POST['team_id'],
    'participant_id' => $_POST['participant_id'],
    'type' => $_POST['type'],
    'authorization_token' => $_POST['authorization_token'],
);
?>
<form id="postback" action="<?php echo $redirect_url; ?>" method="post">
    <?php foreach ($custom_fields as $field_name => $field_value) : ?>
        <?php if ($field_value !== '') : ?>
            <input type="hidden" name="<?php echo $field_name; ?>" value="<?php echo $field_value; ?>" />
        <?php endif; ?>
    <?php endforeach; ?>
</form>
<script type="text/javascript">document.getElementById("postback").submit();</script>