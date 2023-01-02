<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license    OSSN License  https://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$settings = $params['settings'];
if (!isset($settings->type)){
	$settings->type = "danger";
}
?>
<div>
	<label>
		<?php echo ossn_print('announcement:text'); ?>
	</label>
	<?php
	echo ossn_plugin_view('input/textarea', array(
		'name' => 'announcement',
		'class' => 'ossn-editor',
		'value' => html_entity_decode($settings->announcement),
	)
	);
	?>
</div>
<div class="mt-4">
	<label>
		<?php echo ossn_print('announcement:type'); ?>
	</label>
	<select id="type" name="type">
		<option class="alert alert-primary"    value="primary" <?php echo $settings->type == "primary" ? "selected" : "";?>>Primary</option>
		<option class="alert alert-secondary"  value="secondary" <?php echo $settings->type == "secondary" ? "selected" : ""; ?>>Secondary</option>
		<option class="alert alert-success"    value="success" <?php echo $settings->type == "success" ? "selected" : ""; ?>>Success</option>
		<option class="alert alert-danger"     value="danger" <?php echo $settings->type == "danger" ? "selected" : ""; ?>>Danger</option>
		<option class="alert alert-warning"    value="warning" <?php echo $settings->type == "warning" ? "selected" : ""; ?>>Warning</option>
		<option class="alert alert-info"       value="info" <?php echo $settings->type == "info" ? "selected" : ""; ?>>Info</option>
		<option class="alert alert-light"      value="light" <?php echo $settings->type == "light" ? "selected" : ""; ?>>Light</option>
		<option class="alert alert-dark"       value="dark" <?php echo $settings->type == "dark" ? "selected" : ""; ?>>Dark</option>
	</select>
</div>
<div>
	<div class="margin-top-10">
		<input type="submit" class="btn btn-success" value="<?php echo ossn_print('save'); ?>" />
	</div>
</div>