<div class="profile"<?php print $attributes; ?>>
<?php print $user_profile['user_picture']['#markup']; ?>
 <p><strong><?php print $user_profile['field_full_name'][0]['#markup']?></strong> 
 (Member Since <?php print $user_profile['summary']['member_for']['#markup']?>
 )
 </p>
 <label>About <?php print $user_profile['field_full_name'][0]['#markup']?>:</label><?php print $user_profile['field_bio'][0]['#markup']?>
  <?php if($user_profile['summary']['blog']['#markup']){
	  print "<strong>Blog: <strong>" .$user_profile['summary']['blog']['#markup'];
  } ?>
</div>
<style>
.profile .user-picture{float:left} 
.page-user .tabs.primary {
    display: block;
}
</style>