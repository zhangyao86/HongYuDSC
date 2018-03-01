<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?>





</head>
<body class="iframe_body">
	<div>
    	
        <div class="content">
        	
			<form name="theForm" method="get" action="gettaobao.php">
  
  
                               

		     <div class="step_three">

		     <div class="step">

		      <div class="step_content">
  
                                      <div class="item">
                                        <div class="step_label"><em class="require-field">*</em>淘宝/天猫商品URL：</div>
                                        <div class="step_value"><input type="text" class="text" name="id" value="" style="width:80%">
					
					<div class="notic">（例如：任意天猫店铺的商品完整链接，直接复制过来即可）</div>

					<div class="form_prompt"></div>
					
					</div>
                                    </div>


				     <div class="item">
                                        <div class="step_label"><em class="require-field">*</em>商品价格：</div>
                                        <div class="step_value"><input type="text" class="text w150" name="price" value="">
					
					<div class="notic">（例如：商品价格）</div>
					
					</div>
                                    </div>


				      <div class="item">
                                        <div class="step_label"><em class="require-field">*</em>商品库存：</div>
                                        <div class="step_value"><input type="text" class="text w150" name="kucun" value="">
					
					<div class="notic">（例如：商品库存）</div>
					
					</div>
                                    </div>

<div class="item">
                                        <div class="step_label"><em class="require-field">*</em>商品品牌：</div>
                                        <div class="step_value">
                                            <div class="selection">
                                                <input type="text" name="brand_name" id="brand_name" class="text w140 valid" data-filter="brand_name" ectype="require" autocomplete="off" value="<?php if ($this->_var['brand_name']): ?><?php echo $this->_var['brand_name']; ?><?php else: ?>请选择<?php endif; ?>" readonly />
                                                <input type="hidden" name="brand_id" id="brand_id" value="<?php echo $this->_var['goods']['brand_id']; ?>" data-filter="brand_id" />
                                                <div class="form_prompt"></div>
                                            </div>    
                                            <div class="brand-select-container" style="display:none;">
                                                <div class="brand-top">
                                                    <div class="letter">
                                                        <ul>
                                                            <li><a href="javascript:void(0);" data-letter="">全部品牌</a></li>
                                                            <?php $_from = $this->_var['letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'letter_0_75365600_1516982620');if (count($_from)):
    foreach ($_from AS $this->_var['letter_0_75365600_1516982620']):
?>
                                                            <li><a href="javascript:void(0);" data-letter="<?php echo $this->_var['letter_0_75365600_1516982620']; ?>"><?php echo $this->_var['letter_0_75365600_1516982620']; ?></a></li>
                                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                            <li><a href="javascript:void(0);" data-letter="QT">其他</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="b_search">
                                                        <input name="search_brand_keyword" id="search_brand_keyword" ectype="require" type="text" class="b_text" autocomplete="off" placeholder="品牌名称关键字查找">
                                                        <a href="javascript:void(0);" class="btn-mini"><i class="icon icon-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="brand-list">
                                                    <?php echo $this->fetch('library/search_brand_list.lbi'); ?>
                                                </div>
                                                <div class="brand-not" style="display:none;">没有符合"<strong>其他</strong>"条件的品牌</div>
                                            </div>
                                        </div>
                                    </div>








                                 <input type="hidden" name="cat_id" value="<?php echo $this->_var['cat_id']; ?>">


				        <div class="item">
                                        <div class="step_label"><em class="require-field">*</em>保存到相册中的图片数量：</div>
                                        <div class="step_value"><input type="text" class="text w150" name="num" value="10">
					
					<div class="notic">(图片会下载到服务器本地，部分商品图片可能很多导致执行超时 建议控制一下数量)</div>
					
					</div>
                                    </div>



  <div class="item">
                                        <div class="step_label">是否保存详情图片到本地：</div>
                                        <div class="step_value">
	<div class="checkbox_items">
	<div class="checkbox_item">
	<input type="radio" name="xiangqing" class="ui-radio" id="xiangqing_0" checked="checked" value="0">
       <label for="xiangqing_0" class="ui-radio-label">否</label> 
	 </div>	
	 
	 <div class="checkbox_item">
	<input type="radio" name="xiangqing" class="ui-radio" id="xiangqing_1"  value="1">
       <label for="xiangqing_1" class="ui-radio-label">是</label> 
	 </div>	


      </div>																
                                </div>
                            </div>




    <div class="item">
                                    <div class="step_label"><em class="require-field">*</em>抓取评价并伪造为购买记录：</div>
                                        <div class="step_value"><input type="text" class="text w150" name="cnum" value="20">条
					
					<div class="notic">条（请填写20的倍数,例如20 40 80）</div>
					
					</div>
                                    </div>




 <div class="goods_btn">

 <a class="btn btn35 blue_btn" href="javascript:history.back(-1)" title="返回">返回</a>

 <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="btn btn35 blue_btn"  />

 <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>"  class="btn btn35 blue_btn" />

</div>

 </div>	</div>
	</div>
</form>
		</div>
	</div>
   
   
   
 	

	  <?php echo $this->smarty_insert_scripts(array('files'=>'plupload.full.min.js,jquery.purebox.js,spectrum-master/spectrum.js')); ?>
   
	
    </body>
</html>
