<table cellpadding="2" cellspacing="1" width="98%">
	<tr> 
      <td width="100">�ı��򳤶�</td>
      <td><input type="text" name="setting[size]" value="<?php echo $setting['size'];?>" size="10" class="input-text"></td>
    </tr>
	<tr> 
      <td>Ĭ��ֵ</td>
      <td><input type="text" name="setting[defaultvalue]" value="<?php echo $setting['defaultvalue'];?>" size="40" class="input-text"></td>
    </tr>
	<tr> 
      <td>�����ϴ����ļ�����</td>
      <td><input type="text" name="setting[upload_allowext]" value="<?php echo $setting['upload_allowext'];?>" size="40" class="input-text"></td>
    </tr>
	<tr> 
      <td>�Ƿ�����ϴ���ѡ��</td>
      <td><input type="radio" name="setting[isselectimage]" value="1" <?php if($setting['isselectimage']) echo 'checked';?>> �� <input type="radio" name="setting[isselectimage]" value="0" <?php if(!$setting['isselectimage']) echo 'checked';?>> ��</td>
    </tr>
	
</table>