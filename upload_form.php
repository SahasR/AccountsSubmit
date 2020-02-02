<html>
<head>
<title>Upload Form</title>
</head>
<body>



<?php echo form_open_multipart('upload/do_upload');?>

<table>
	<tr>
		<td>
			Select Category:
		</td>
		<td>
			<select class="lstCat">
    			<?php
    			foreach($groups as $cats)
    				{
   					     echo '<option value="'.$cats['categories'].'">'.$cats['categories'].'</option>';
    				}
  				  ?>  
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Payment Date:
		</td>
		<td>
			<?php echo form_input('pdate','')?>
		</td>
	</tr>
	<tr>
		<td>
			Payment Method:
		</td>
		<td>
			<select class="lstOp">
				<option value="Cash">Cash</option>
				<option value="Cheque">Cheque</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Cheque Number:
		</td>
		<td>
			<?php echo form_input('cnumber','')?>		
		</td>
		<td>(If Applicable)</td>
	</tr>
	<tr>
		<td>
			Amount:
		</td>
		<td>
			<?php echo form_input('amount','')?>
		</td>
	</tr>	
	<tr>
		<td>Payee Name:</td>
		<td>
			<?php echo form_input('payee','')?>
		</td>
	</tr>
	<tr>
		<td>Payee Adress:</td>
		<td><?php echo form_input('paddress','')?></td>
	</tr>
	<tr>
		<td>
			Purpose:
		</td>
		<td><?php echo form_input('desc','')?></td>
	</tr>
	<tr>
		<td>
			Approved By:
		</td>
		<td>
			<?php echo form_input('appby','')?>
		</td>
	</tr>
	<tr>
		<td>
			Issues By:
		</td>
		<td><?php echo form_input('issby','')?></td>
	</tr>
	<tr>
		<td><input type="file" name="userfile" size="20" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Upload Transaction!" /></td>
	</tr>
</table>







</form>

</body>
</html>