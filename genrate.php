<?php
//Garvita created and worked
//Abdul & Roshan added code for api

// print_r($_REQUEST);

$data = $_REQUEST['s'];
//file_put_contents('cache/test.json',$data);
$data = json_decode($data);
$data = $data->data;
foreach ($data as $d){
	
	
	$d = $d->result_object;

	
	$name = $d->name;
	$loc = $d->location_string;
	$thumb = $d->photo->images->small->url;
	$original = $d->photo->images->original->url;
	$desc = '';
	if (array_key_exists("geo_description",$d)){
	$desc = $d->geo_description;
	}elseif(array_key_exists("geo_description",$d)){
	$desc = $d->address;
	}
	if(array_key_exists("address_obj",$d)){
	if(array_key_exists("street1",$d->address_obj)){
	$desc = $d->address_obj->street1;
	}
	}
?>





<div class="col-md-6" onclick="$('#myModal').modal('show'); $('.modal-title').text('<?=addslashes($name);?>');$('.modalFoot').text('<?=addslashes($desc);?>'); $('#modalImmg').attr('src','<?=addslashes($original);?>');">
<div class="card">
  <img src="<?=$thumb;?>" alt="<?=$name;?>" width="100%" style="max-height:250px;">
  <div class="container">
    <h4><b><?=$name;?></b></h4> 
    <p><?=$loc;?></p> 
  </div>
</div>
</div>










<?php
	
}

?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
		<img id="modalImmg" style="width:100%">
    </div>
      <div class="modal-footer">
	  <p  style="text-align:left; margin:2px;" class="modalFoot"></p>
	    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

