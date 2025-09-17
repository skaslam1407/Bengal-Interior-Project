<style type="text/css">
.add_tag_input {
    display: none;
}

.add_tag:checked~.add_tag_input {
    display: block;
}

.CHECKED {
    display: block;
}

small {
    margin: 5px;
    font-size: 12px !important;
    color: #6d6b6b;
}

.display_none {
    display: none;
}

.KLCF_enable:checked~display_none {
    display: block;
}

.klcf-move {
    border: 3px solid #007cba;
}

.klcf-move h2 {
    color: #007cba;
    font-weight: bold;
    text-transform: uppercase;
}

.klcf-move .inside p,
.klcf-move .inside {
    margin-top: 0px !important;
    padding-top: 0px;
}

.klcf-move h2:after {
    content: "";
    display: block;
    border-bottom: 2px solid #a5a5a5e2;
    width: 90%;
    padding-top: 7px;
}

/*//without  klcf_container class*/
/*.klcf-move img {  
    width: 20px;
    margin: -4px;
    padding: 0px 10px;
}*/
.klcf_container .mygrid img {
    width: 22px;
    margin-top: -5px;
    padding: 0px;
    margin-left: 5px;
}

.klcf-move img {
    width: 22px;
    margin-top: -5px;
    padding: 0px;
    margin-left: 5px;
}

.klcf-move {
    box-shadow: 5px 5px 20px #a7a6a6;
}

p.txt-center.bttn {
    padding: 15px 0px 0px;
    text-align: center;
}

.klcf_container a.btn.btn-primary.form-control {
    display: table-caption;
}

button.btn.btn-primary {
    display: block;
}

.form-group.mygrid {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.form-group.mygrid span {
    color: #337ab7;
    text-transform: uppercase;
    font-weight: bold;
}

.klcf_container .form-group .enabled_class {
    margin: 0 5px;
    margin-top: -5px;
}

.enabled_class:checked::before {
    content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%2300d400'%3E%3Cpath d='M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861 5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z'/%3E%3C/svg%3E") !important;
    margin: -8px -2px !important;
}

.klcf_container fieldset.map-fields label {
    font-weight: 500 !important;
}

.klcf_container .KLCF___box fieldset.map-fields {
    border: 1px solid #e6d4d4;
    /*width:90%;*/
    margin: 30px 10px;
    align-item: center;
    margin: 20px auto;
    background: #fbfbfb;
}

.klcf_container .KLCF___box fieldset.map-fields .head_ing {
    margin: 10px !important;
    border-bottom: 1px solid #e6d4d4;
    margin-bottom: 25px !important;
    padding: 10px 5px !important;
    margin-top: 0px !important;
    font-weight: 600 !important;
}

.klcf_container .btn.btn-danger {
    background-color: #ac2925;
}

.klcf_container select.form-control {
    max-width: 100% !important;
}

.klcf_container {
    max-width: 900px;
}

/*.klcf_container a.btn.btn-primary.pull-right {
    margin-right: 15px;
}*/
.form-group.add_block .col-md-8 * {
    padding-right: 0px !important;
}

.form-group.add_block .col-md-2 {
    padding-left: 0px !important;
}

.form-group.add_block .col-md-2 a {
    width: 100%;
}

.pr-0 {
    padding-right: 0 !important;
}

.btn-full {
    width: 100%;
}

.card.card-custom {
    display: flex !important;
}

.card {
    min-width: 95%;
    margin: 0 auto;
    margin-bottom: 10px;
    padding: 10px 5px;
}

.card.card-custom.p-2 .form-group {
    padding: 0;
    margin: 0px !important;
}

.card .form-group label.form-check-label {
    font-weight: bold !important;
}

.map-fields .ignore_column label {
    align-items: center !important;
    display: flex !important;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
}

.map-fields .ignore_column label input {
    margin: 0px !important;
    padding: 0px;
}

.col-md-3.ignore_column {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.add_block a.btn.btn-danger {
    width: 100%;
}

.form-group.add_block>.row {
    display: flex;
}

.mb-sm-2 {
    margin-top: 0px;
}

@media (max-width:768px) {

    /*    .form-group.add_block > .row {
        display: block;
    }*/
    .mb-sm-2 .btn.btn-danger {
        margin-top: 12px;
    }
}

@media (max-width:991px) {
    a.btn.btn-danger {
        margin-top: 10px;
    }
}

@media (max-width:550px) {
    .col-xsx-12 {
        width: 100% !important;
    }

    .form-group.add_block>.row {
        display: block;
    }

    .col-md-3.col-xsx-12.ignore_column {
        margin: 15px;
        padding: 15px;
    }

    .form-group.add_block>.row>div>.col-md-4 {
        margin-bottom: 10px;
    }
}

.form-group.form-check label {
    display: flex;
}

input[type=checkbox].disabled,
input[type=checkbox].disabled:checked:before,
input[type=checkbox]:disabled,
input[type=checkbox]:disabled:checked:before,
input[type=radio].disabled,
input[type=radio].disabled:checked:before,
input[type=radio]:disabled,
input[type=radio]:disabled:checked:before {
    opacity: 1;
    background: rgb(195 195 195 / 50%) !important;
    border-color: inherit;
}

.show_content_input {
    display: none;
}

.CHECKED {
    display: block;
}

.form-group.add_block {
    margin: 15px !important;
}

.form-group.add_block>.row>.col-md-8 {
    padding: 0 !important;
}

@media (max-width:991px) {
    .form-group.add_block .row {
        display: block;
    }

    .form-group.add_block .col-md-8 * {
        padding: 0px 15px !Important;
    }

    .card {
        min-width: 90%;
        margin: 15px auto;
        padding: 10px 5px;
        width: 90%;
    }
}
</style>
<?php 
	$text = "<span style='color:red;'>InActive</span>";
	$c = 'display_none';
	if($enable == 1){
		$c = '';
		$text = "<span style='color:#55b71d;'>Active</span>";
	}
	$i = 0;
?>
<div class='klcf_container row'>
    <input type="hidden" name="KLCF_post" value="<?php echo $post_id;?>">
    <div class="form-group mygrid">
        <h3>Integration Status: <span id="status_append"><?php echo $text;?></span></h3>
        <h3><a href="<?php echo $pro_link; ?>"><span>Get Pro Features ! </span><img
                    src="<?php echo KLCF_ASSETS; ?>/pro.svg"></a></h3>
    </div>
    <div class="form-group">
        <label>Enable Klaviyo Integration:</label>
        <input type="checkbox" class="enabled_class" name='KLCF_enable' value='1' onchange="KLCF_show_form(this);"
            type='checkbox' <?php echo $checked; ?>>
    </div>


    <div class="KLCF___box <?php echo $c; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Klaviyo Private API Key:</label>
                    <input type="input" class="form-control" name='KLCF_key' value='<?php echo $api_key; ?>'>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <?php if(!empty($key_listing)){ ?>
                    <label>Select Klaviyo List</label>
                    <select class="form-control" name="KLCF_list_id">
                        <?php
					    	foreach ($key_listing as $key => $value) {
					    		$s = "";
					    		if($list_id == $key){
					    			$s = "selected";
					    		}
					    		echo "<option value='".$key."' ".$s.">".$value."</option>";
					    	}
					    	?>
                    </select>

                    <?php }else{ ?>
                    <label>&nbsp;</label>
                    <!-- <span class="form-control"> -->
                    <button type="submit" class="btn btn-primary">Fetch Klaviyo Lists</button>
                    <!-- </span> -->
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if(!empty($key_listing)){ ?>
        <fieldset class="map-fields">
            <h2 class="head_ing">Map Fields:</h2>
            <?php
    		foreach ($map_fields as $row) {

	    		$star = "";	    			
	    		if($row['required']){
	    			$star = "<span> *</span>";
	    			$require = "required";
	    		}	    		
    		?>
            <div class="form-group add_block">
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-4">
                            <label><?php echo ucwords($row['name']); ?><?php echo $star; ?></label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" <?php echo $require; ?>
                                name="KLCF_data[<?php echo $row['key']; ?>]">
                                <option value="0">Select</option>
                                <?php
			    				$form_scan_tags = array_filter($form_scan_tags);
						    	foreach ($form_scan_tags as $key => $value) {
						    		$s = "";
						    		if(!empty($f_data[$row['key']]) && $f_data[$row['key']] == $key){
						    			$s = "selected";
						    		}
						    		if(empty($f_data[$row['key']]) && $key == $auto_field_selected && $row['key'] == 'email'){
						    			$s = "selected";	
						    		}
						    		echo "<option value='".$key."' ".$s.">".$value."</option>";
						    	}
						    ?>
                            </select>
                        </div>

                    </div>
                    <?php if(!$row['required']){ ?>
                    <div class="col-md-4"> <a class="btn btn-danger"
                            onclick="KLCF_remove_custom_field(this);">Remove</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php
			$i = 0;
    		foreach ($f_ex_data as $row22) {
    		?>
            <div class="form-group add_block">
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-4">
                            <select class="form-control" name="KLCF_ex_data[<?php echo $i; ?>][key]">
                                <option value="0">Select</option>
                                <?php

			    				$map_extra_fields = array_filter($map_extra_fields);
						    	foreach ($map_extra_fields as $row2){
						    		
						    		$s = "";
						    		if($row22['mfield'] == $row2['key']) {
						    			$s = "selected";
						    		}

						    		echo "<option value='".$row2['key']."' ".$s." data-id='".$key1."'>".$row2['name']."</option>";
						    	}
						    ?>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" <?php echo $require; ?>
                                name="KLCF_ex_data[<?php echo $i; ?>][value]">
                                <option value="0">Select</option>
                                <?php
			    				$form_scan_tags = array_filter($form_scan_tags);

						    	foreach ($form_scan_tags as $key => $value) {

						    		$s = "";
						    		if($row22['sfield'] == $key) {
						    			$s = "selected";
						    		}

						    		echo "<option value='".$key."' ".$s.">".$value."</option>";

						    	}
						    ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-danger" onclick="KLCF_remove_custom_field(this);">Remove</a>
                    </div>
                </div>
            </div>
            <?php $i++; } ?>
            <div id="add_on_fields">

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 pull-right">
                        <a class="btn btn-primary btn-full" onclick="KLCF_add_custom_field();">Add Fields</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card p-2">
                <div class="form-group form-check" style="margin:15px;">
                    <label class="form-check-label"><input type="checkbox" class="form-check-input add_tag"
                            style="margin: 0px;" name="KLCF_enable_tag" value="1" onchange="KLCF_enable_tags(this);"
                            <?php echo $enable_tag_t;?> />
                        &nbsp; Enable GDPR </label><!-- <small>(use this tag in form [klaviyo_gdpr])</small>     -->
                </div>
                <div class="form-group add_tag_input <?php echo $enable_tag_t;?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <textarea type="input" class="form-control" placeholder="Enter GDPR Terms"
                                    name="KLCF_custom_tag"><?php echo $custom_tag;?></textarea>
                            </div>
                            <div class="col-md-12">
                                <small>** [klaviyo_gdpr] will be added automatically above the submit button else you
                                    can add the tag manually in the form</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-2">
                <div class="form-group form-check" style="margin:15px;">
                    <a href="https://sitepact.com/contact-form-7-klaviyo-integration/" target="_blank">
                        <img src="https://sitepact.com/wp-content/uploads/2021/08/Klaviyo-contact-form-7-pro.jpg"
                        style="width: 100%;">
                    </a>
                </div>
            </div>
        </fieldset>
        <br>
        <br>
        <br>



        <?php } ?>
    </div>
</div>
<div id="informationdiv_append" class="klcf_container postbox klcf-move" style="display:none">
    <h2><a href="<?php echo $pro_link; ?>"><span>Get Pro Features ! </span><img
                src="<?php echo KLCF_ASSETS; ?>/pro.svg"></a></h2>
    <div class="inside">
        <p>Check out the PRO version of our plugin. We have a few nifty features to help you with you marketing efforts
            in Klaviyo</p>
        <ol>
            <li>Trigger Klaviyo Metric and Flows</li>
            <li>Send Custom Fields to Klaviyo</li>
            <li>Unsubscribe Feature</li>
            <li>Much more coming soon</li>
        </ol>
        <p class="txt-center bttn"><a class="btn btn-primary">Check it Out</a></p>
    </div>
</div>
<script type="text/javascript">
var count = <?php echo $i;?>;

function KLCF_add_custom_field() {


    var form_field = JSON.parse('<?php echo json_encode(array_filter($form_scan_tags)); ?>');

    var kloviyo_field = JSON.parse('<?php echo json_encode(array_filter($map_extra_fields)); ?>');

    console.log(kloviyo_field);

    var title = jQuery("#extra_fileds option:selected").text();

    var title1 = jQuery("#extra_fileds").val();

    //console.log(form_filed);

    var select = "";
    for (const [key, value] of Object.entries(form_field)) {
        console.log(`${key}: ${value}`);
        select += "<option value='" + key + "'>" + value + "</option>";
    }

    var select1 = "<option value='0'>Select</option>";
    for (const [key, value] of Object.entries(kloviyo_field)) {
        console.log(value);
        // console.log(key);
        select1 += "<option value='" + value.key + "'>" + value.name + "</option>";
    }
    select1 += "<option value='0' disabled='true'>Custom Field (Go Pro)</option>";

    console.log(select1);

    var add =
        '<div class="form-group add_block"><div class="row"><div class="col-md-8"><div class="col-md-4"> <select class="form-control" name="KLCF_ex_data[' +
        count + '][key]">' + select1 +
        '</select></div><div class="col-md-8"> <select class="form-control" name="KLCF_ex_data[' + count +
        '][value]"><option value="0">Select</option>' + select +
        '</select></div></div><div class="col-md-4"> <a class="btn btn-danger" onclick="KLCF_remove_custom_field(this);">Remove</a></div></div></div>';

    jQuery("#add_on_fields").append(add);
    count++;

}

function KLCF_remove_custom_field(ele) {
    console.log(ele);
    jQuery(ele).closest('.add_block').remove();
}

function KLCF_enable_tags(ele) {
    if (jQuery(ele).prop('checked')) {
        jQuery('.add_tag_input').show();
    } else {
        jQuery('.add_tag_input').hide();
    }
}

function KLCF_show_form(ele) {
    //if(jQuery(ele+":checked")){
    if (jQuery(ele).prop('checked')) {

        jQuery('.KLCF___box').removeClass('display_none');
        jQuery('#status_append').html('<span style=\'color:#55b71d;\'>Active</span>')
    } else {
        jQuery('.KLCF___box').addClass('display_none');
        jQuery('#status_append').html('<span style=\'color:red;\'>InActive</span>')
    }
}
</script>