<div class="col-md-12">
   <span class="alert-message" id="message_<?php echo $param->field;?>"></span>
   
</div>
<div class="col-md-4 pull-right">
  <div class="form-group pull-right">
	<select name="operation" class="list-dropdown" id="performAction" onChange="initilizeOpertion(this.id, '<?php echo $param->field;?>');">
	   <option value=""><?php echo lang('select_action');?></option>
	   <option value="delete_selected"><?php echo lang('delete_selected');?></option>
	</select>
  </div>
</div>
<div class="clearfix"></div>


		  <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
						<th><input type="checkbox" name="check_all" id="check_all" onClick="check_all();"/></th>	
                     <th><?php echo lang('vendor_name');?></th>
					<th><?php echo lang('vendor_address') ?></th>
					<th><?php echo lang('vendor_contact');?></th>
					<th><?php echo lang('vendor_status');?></th>
					<th><?php echo lang('action');?></th>
				
                    </tr>
                        <?php
    if (!empty($result)) {
        foreach ($result as $row) {
			//dump($row);
            ?>
            <tr>
		<td><input type="checkbox" name="id_array[]" id="banner" class="id_array" value="<?php echo $row->vendor_id;?>" /> </td>
                <td><?php echo $row->vendor_name ?></td>
                <td><?php echo truncate_string($row->vendor_address,10,25); ?></td>
                <td><?php echo $row->vendor_contact ?></td>
              
                <?php if ($row->vendor_status == 1) { ?>
                    <td><a href="javascript:void(0);" onclick="update_status('<?php echo $row->vendor_id; ?>', '<?php echo $param->field;?>', '0');" class="label label-success"><?php echo lang('enabled');?></a></td>
                <?php } else { ?>
                    <td><a href="javascript:void(0);" onclick="update_status('<?php echo $row->vendor_id; ?>', '<?php echo $param->field;?>', '1');" class="label label-warning"><?php echo lang('disabled');?></a></td>
                <?php } ?>
                    <!--<td><?php echo get_datepicker_date($row->created_on, 'full');?></td>    -->
                <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('vendor/edit/' . $row->vendor_id); ?>">
                        <i class="pe-7s-pen"></i>
                    </a>
					<a class="btn btn-primary btn-sm" href="<?php echo base_url('vendor/view/' . $row->vendor_id); ?>">
                        <i class="pe-7s-look"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" onClick="javascript:return confirm('Are you sure you want to Delete?');" href="<?php echo base_url('vendor/delete_data/' . $row->vendor_id); ?>">
                        <i class="pe-7s-junk"></i>
                    </a>
                </td>
            </tr>
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5" align="center"><?php echo lang('no_record_found');?></td>
        </tr>
<?php } ?>
                  </table>
                </div>
<!--<table class="table table-hover table-striped">
    <tr>
	<th><input type="checkbox" name="check_all" id="check_all" onClick="check_all();"/></th>
        <th><?php echo lang('title');?></th>
        <th><?php echo lang('contact');?></th>
        <th><?php echo lang('status');?></th>
        <th><?php echo lang('date');?></th>
        <th><?php echo lang('action');?></th>
    </tr>
    <?php
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
		<td><input type="checkbox" name="id_array[]" id="banner" class="id_array" value="<?php echo $row->id;?>" /> </td>
                <td><?php echo $row->dept_name; ?></td>
                <td><?php echo $row->dept_contact; ?></td>
                <?php if ($row->status == 1) { ?>
                    <td><a href="javascript:void(0);" onclick="update_status('<?php echo $row->id; ?>', '<?php echo $param->field;?>', '0');" class="btn btn-success btn-sm"><?php echo lang('enabled');?></a></td>
                <?php } else { ?>
                    <td><a href="javascript:void(0);" onclick="update_status('<?php echo $row->id; ?>', '<?php echo $param->field;?>', '1');" class="btn btn-warning btn-sm"><?php echo lang('disabled');?></a></td>
                <?php } ?>
                    <td><?php echo get_datepicker_date($row->created_on, 'full');?></td>    
                <td>
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('department/edit/' . $row->id); ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" onClick="javascript:return confirm('Are you sure you want to Delete?');" href="<?php echo base_url('department/delete_data/' . $row->id); ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5" align="center"><?php echo lang('no_record_found');?></td>
        </tr>
<?php } ?>

</table>-->

<div class="pagination pull-right">
    <?php echo $pagination;?>
</div>
