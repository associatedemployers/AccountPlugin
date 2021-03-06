<?php
class UserModify {

function userPopulate($usr, $user) {
?>
<script>
jQuery(document).ready(function() {
	jQuery("#post").validate({
		errorPlacement: function(label, element){ 
			real_label = label.clone();
			real_label.insertAfter(element);
			element.mouseover(function(){ jQuery(this).next('label.error').fadeOut(200); });
		}
	});
});
</script>


<form id="post" method="post" action="<?php echo get_user_admin_url(true); ?>" enctype="multipart/form-data" autocomplete="off">
<div class="metabox-holder has-right-sidebar" id="poststuff">
	<input id="id" name="id" type="hidden" value="<?php echo $usr->id; ?>" />

	<div id="side-info-column" class="inner-sidebar"><div id="side-sortables" class="meta-box-sortables ui-sortable">
		<div class="postbox " id="submitdiv">
			<div class="handlediv" title="Click to toggle"><br /></div><h3 class="hndle"><span>&nbsp;</span></h3>
			<div class="inside"><div id="major-publishing-actions">
				<input class='button-primary' type='submit' name='Save' value='Save' id='submitbutton' />
				<a class='button-secondary' href='<?php echo get_user_admin_url(null); ?>' title='Cancel'>Cancel</a>
			</div></div>
		</div>

		<div class="postbox " id="suboptionsdiv">
			<div class="handlediv" title="Click to toggle"><br /></div><h3 class="hndle"><span>Options</span></h3>
			<div class="inside"><div id="major-publishing-actions">
				<p><label for="active"><input type="checkbox" id="active" name="active" <?php if($user) { if($usr->active == 0) { echo 'checked'; } } ?> /> Active</label></p>
			</div></div>
		</div>
	</div></div>

	<div class="has-sidebar" id="post-body"><div class="has-sidebar-content" id="post-body-content"><div class="meta-box-sortables ui-sortable" id="normal-sortables">
		<div class="postbox ">
			<div title="Click to toggle" class="handlediv"><br /></div><h3 class="hndle"><span>User Details</span></h3>
			<div class="inside">
				<p><input type="text" size="30" id="company" class="required" name="company" value="<?php if($user) { echo $usr->company; } ?>" /><br/><label for="company"><b>Company</b></label></p>

				<div>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="first_name" class="required" name="first_name" value="<?php if($user) { echo $usr->first_name; } ?>" /><br/><label for="first_name"><b>First Name</b></label></p>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="last_name" class="required" name="last_name" value="<?php if($user) { echo $usr->last_name; } ?>" /><br/><label for="last_name"><b>Last Name</b></label></p>
				</div><div class="clear"></div>

				<div>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="email" class="required email" name="email" value="<?php if($user) { echo $usr->email; } ?>" /><br/><label for="email"><b>Email</b></label></p>
					<p style="float: left; margin-bottom: 0;"><input type="password" size="30" id="password_wgusr" name="password_wgusr" /><br/><label for="password_wgusr"><b>Password</b> <em>( only if reset is needed )</em></label></p>
				</div><div class="clear"></div>

				<div>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="phone" name="phone" value="<?php if($user) { echo $usr->phone; } ?>" /><br/><label for="phone"><b>Phone</b></label></p>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="fax" name="fax" value="<?php if($user) { echo $usr->fax; } ?>" /><br/><label for="fax"><b>Fax</b></label></p>
				</div><div class="clear"></div>

				<div>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="address" name="address" value="<?php if($user) { echo $usr->address; } ?>" /><br/><label for="email"><b>Address</b></label></p>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="address2" name="address2" value="<?php if($user) { echo $usr->address2; } ?>" /><br/><label for="email"><b>Address2</b></label></p>
					<div class="clear"></div>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="30" id="city" name="city" value="<?php if($user) { echo $usr->city; } ?>" /><br/><label for="city"><b>City</b></label></p>
					<p style="float: left; margin-bottom: 0;"><select id="state" name="state"><?php if($user) { echo get_state_select($usr->state); } else { echo get_state_select(null); } ?></select><br/><label for="state"><b>State</b></label></p>
					<p style="float: left; margin-bottom: 0;"><input type="text" size="5" id="zip" name="zip" value="<?php if($user) { echo $usr->zip; } ?>" /><br/><label for="zip"><b>Zip</b></label></p>
				</div><div class="clear"></div>

				<br/><br/>
			</div>
		</div>
	</div>

	</div></div>
</div>
</form>
<?php
}

}
?>