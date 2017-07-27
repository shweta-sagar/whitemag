<div class="trips-user-form-wrapper">
<div class="usrdata-ctr">Input login credentials</div>
<?php
print drupal_render($form['name']);
print drupal_render($form['pass']);
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
?>
<div><a class="small pdlft20" href="user/password">Forgot password?</a></div>
<?php
print drupal_render($form['actions']);
?>
<div class="usrdata-ctr pdtp30">
<p class="small">Don't have an account on whitemagic?</p>
<a href="/user/register" class="usr-btn btn form-actions">Create an account</a>
</div>
</div>

