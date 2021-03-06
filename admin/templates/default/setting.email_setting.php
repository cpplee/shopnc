<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['nc_email_set'];?></h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span><?php echo $lang['nc_email_set'];?></span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="post" id="form_email" name="settingForm">
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="email_type"><?php echo $lang['email_type_open'];?>:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform onoff"><label for="email_enabled_1" class="cb-enable <?php if($output['list_setting']['email_enabled'] == '1'){ ?>selected<?php } ?>" title="<?php echo $lang['open'];?>"><span><?php echo $lang['open'];?></span></label>
            <label for="email_enabled_0" class="cb-disable <?php if($output['list_setting']['email_enabled'] == '0'){ ?>selected<?php } ?>" title="<?php echo $lang['close'];?>"><span><?php echo $lang['close'];?></span></label>
            <input type="radio" <?php if($output['list_setting']['email_enabled'] == '1'){ ?>checked="checked"<?php } ?> value="1" name="email_enabled" id="email_enabled_1" />
            <input type="radio" <?php if($output['list_setting']['email_enabled'] == '0'){ ?>checked="checked"<?php } ?> value="0" name="email_enabled" id="email_enabled_0" />
            <input type="hidden" name="email_type" value="1" /></td>
          <td class="vatop tips">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['smtp_server'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['list_setting']['email_host'];?>" name="email_host" id="email_host" class="txt"></td>
          <td class="vatop tips"><label class="field_notice"><?php echo $lang['set_smtp_server_address'];?></label></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['smtp_port'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['list_setting']['email_port'];?>" name="email_port" id="email_port" class="txt"></td>
          <td class="vatop tips"><label class="field_notice"><?php echo $lang['set_smtp_port'];?></label></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['sender_mail_address'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['list_setting']['email_addr'];?>" name="email_addr" id="email_addr" class="txt"></td>
          <td class="vatop tips"><label class="field_notice"><?php echo $lang['if_smtp_authentication'];?></label></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['smtp_user_name'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['list_setting']['email_id'];?>" name="email_id" id="email_id" class="txt"></td>
          <td class="vatop tips"><label class="field_notice"><?php echo $lang['smtp_user_name_tip'];?></label></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['smtp_user_pwd'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="password" value="<?php echo $output['list_setting']['email_pass'];?>" name="email_pass" id="email_pass" class="txt"></td>
          <td class="vatop tips"><label class="field_notice"><?php echo $lang['smtp_user_pwd_tip'];?></label></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><?php echo $lang['test_mail_address'];?>:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="email_test" id="email_test" class="txt"></td>
          <td class="vatop tips"><input type="button" value="<?php echo $lang['test'];?>" name="send_test_email" class="btn" id="send_test_email"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="2" ><a href="JavaScript:void(0);" class="btn" onclick="document.settingForm.submit()"><span><?php echo $lang['nc_save'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
$(document).ready(function(){
	$('#send_test_email').click(function(){
		$.ajax({
			type:'POST',
			url:'index.php',
			data:'act=setting&op=email_testing&email_host='+$('#email_host').val()+'&email_port='+$('#email_port').val()+'&email_addr='+$('#email_addr').val()+'&email_id='+$('#email_id').val()+'&email_pass='+$('#email_pass').val()+'&email_type='+1+'&email_test='+$('#email_test').val(),
			error:function(){
					alert('<?php echo $lang['test_email_send_fail'];?>');
				},
			success:function(html){
				alert(html.msg);
			},
			dataType:'json'
		});
	});
});
</script>