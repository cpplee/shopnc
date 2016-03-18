<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>积分商城</h3>
      <ul class="tab-base">
        <li><a href="index.php?act=gift&op=gift_manage" class=""><span>礼品管理</span></a></li>
        <li><a href="index.php?act=gift&op=gift_add" class=""><span>新增礼品</span></a></li>
        <li><a href="javascript:void(0);" class="current"><span>编辑礼品</span></a></li>
        <li><a href="index.php?act=gift&op=gift_log" class=""><span>订单管理</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="add_form" method="post" enctype="multipart/form-data" action="index.php?act=gift&op=gift_edit">
  	<input name="form_submit" value="ok" type="hidden" />
  	<input name="sg_id" value="<?php echo $output['gift_info']['sg_id']; ?>" type="hidden" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="sg_name">礼品名称</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['gift_info']['sg_name']; ?>" name="sg_name" id="sg_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="" for="sg_code">礼品编号</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['gift_info']['sg_code']; ?>" name="sg_code" id="sg_code" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_pic">礼品图片</label></td>
        </tr>
        <tr class="noborder">
            <td class="vatop rowform">
	            <span class="type-file-box">
				<input id="textfield1" class="type-file-text" type="text" name="textfield">
				<input id="button1" class="type-file-button" type="button" value="" name="button">
				<input id="sg_pic" class="type-file-file" type="file" nc_type="microshop_goods_class_image" hidefocus="true" size="30" name="sg_pic">
				</span><br><br>
				<img src="<?php echo BASE_SITE_URL.'/data/upload/shop/gift/'.$output['gift_info']['sg_pic']; ?>" width="400"/>
            </td>
            <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_intro" class="">礼品介绍</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><?php showEditor('sg_intro',$output['gift_info']['sg_intro'],'600px','300px','','true',false);?></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_point" class="validation">兑换积分</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="sg_point" name="sg_point" type="text" class="txt" value="<?php echo $output['gift_info']['sg_point']; ?>" /></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_price" class="validation">市场价格</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="sg_price" name="sg_price" type="text" class="txt" value="<?php echo $output['gift_info']['sg_price']; ?>" /></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_num" class="validation">库存数量</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="sg_num" name="sg_num" type="text" class="txt" value="<?php echo $output['gift_info']['sg_num']; ?>" /></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_limit_num" class="">兑换数量限制</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="sg_limit_num" name="sg_limit_num" type="text" class="txt" value="<?php echo $output['gift_info']['sg_limit_num']; ?>" /></td>
          <td class="vatop tips">0为无兑换数量限制</td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_member_degree">会员等级限制</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><select id="sg_member_degree" name="sg_member_degree">
          	  <option value="0">无限制</option>
          	  <?php if(!empty($output['member_degree'])){ ?>
          	  <?php foreach ($output['member_degree'] as $val){ ?>
          	  <option value="<?php echo $val['md_id']; ?>" <?php if($output['gift_info']['sg_member_degree'] == $val['md_id']){ ?>selected<?php } ?>><?php echo $val['md_name']; ?></option>
          	  <?php }} ?>
            </select></td>
          <td class="vatop tips"><span class="vatop rowform">选择会员等级后则该等级以上（包括所选等级）会员可以兑换该礼品</span></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_recommend" >是否推荐</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform onoff">
          	<label for="sg_recommend1" class="cb-enable <?php if($output['gift_info']['sg_recommend'] == 1){ ?>selected<?php } ?>"><span>是</span></label>
            <label for="sg_recommend2" class="cb-disable <?php if($output['gift_info']['sg_recommend'] == 0){ ?>selected<?php } ?>" ><span>否</span></label>
            <input id="sg_recommend1" name="sg_recommend" <?php if($output['gift_info']['sg_recommend'] == 1){ ?>checked<?php } ?> value="1" type="radio">
            <input id="sg_recommend2" name="sg_recommend" <?php if($output['gift_info']['sg_recommend'] == 0){ ?>checked<?php } ?> value="0" type="radio">
          </td>
          <td class="vatop tips">
          	<span class="vatop rowform"></span>
          </td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="sg_sale" >是否上架</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform onoff">
          	<label for="sg_sale1" class="cb-enable <?php if($output['gift_info']['sg_sale'] == 1){ ?>selected<?php } ?>"><span>是</span></label>
            <label for="sg_sale2" class="cb-disable <?php if($output['gift_info']['sg_sale'] == 0){ ?>selected<?php } ?>" ><span>否</span></label>
            <input id="sg_sale1" name="sg_sale" <?php if($output['gift_info']['sg_sale'] == 1){ ?>checked<?php } ?> value="1" type="radio">
            <input id="sg_sale2" name="sg_sale" <?php if($output['gift_info']['sg_sale'] == 0){ ?>checked<?php } ?> value="0" type="radio">
          </td>
          <td class="vatop tips">
          	<span class="vatop rowform"></span>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><a id="submit" href="javascript:void(0)" class="btn"><span><?php echo $lang['nc_save'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
$(function(){
	$("#sg_pic").change(function(){
        $("#textfield1").val($("#sg_pic").val());
    });
	$("#submit").click(function(){
		var sg_num = $('#sg_num').val();
		var sg_limit_num = $('#sg_limit_num').val();
		var sg_point = $('#sg_point').val();
		var sg_price = $('#sg_price').val();
		if(parseInt(sg_limit_num) > parseInt(sg_num)){
			alert('购买上限数量不得大于库存数量');
		}else if(parseInt(sg_point) <= 0){
			alert('兑换积分不能为0或负数');
		}else if(parseFloat(sg_price) <= 0){
			alert('市场价格不能为0或负数');
		}else{
			$("#add_form").submit();
		}
    });
	$('#add_form').validate({
        errorPlacement: function(error, element){
            error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        success: function(label){
            label.addClass('valid');
        },
        rules : {
        	sg_name: {
                required : true
            },
            sg_point: {
                required : true
            },
            sg_num: {
                required : true
            },
            sg_price: {
            	required : true
            }
        },
        messages : {
        	sg_name: {
                required : "请填写礼品名称"
            },
            sg_point: {
                required : "请填写兑换所需积分"
            },
            sg_num: {
                required : "请填写礼品库存数量"
            },
            sg_price: {
                required : "请填写礼品市场价格"
            }
        }
    });
})
</script>