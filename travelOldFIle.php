<style>
// .card {
  // box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  // transition: 0.3s;
  // width: 60%;
// }

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  cursor:pointer;
}

// .container {
  // padding: 2px 16px;
// }


#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

















</style>


<?php 
include("includes/header.php");
include("api.php");

?>
</div>
<br/>
<br/><br/>
<br/><br/>
<br/>
<Form Method ='Post' Class = 'text-center'>
    <input  Name = 'query' Autocomplete ='Off' value="<?php
	if(isset($_REQUEST['query'])){echo $_REQUEST['query'];}
		?>"Required='Required' Placeholder ='Type A Place Name'>
    <Input Type ='Submit' Value ='Find'
>
        
    </Form>
<div class="container">
<div class="row">
<?php


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





<div class="col-md-6" onclick="$('#myModal').modal('show'); $('.modal-title').text('<?=$name;?>');$('.modalFoot').text('<?=$desc;?>'); $('#modalImmg').attr('src','<?=$original;?>');">
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

