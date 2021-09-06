<?php
//Garvita created and worked
//Abdul & Roshan added code for api

include("includes/header.php");
$query = 'London';
?>
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


<body>

<Form Method ='Post' Class = 'text-center'>
    <input  Name = 'query' Autocomplete ='Off' value="<?php
	if(isset($_REQUEST['query'])){echo $query = $_REQUEST['query'];}
		?>"Required='Required' Placeholder ='Type A Place Name'>
    <Input Type ='Submit' Value ='Find'
>
        
    </Form>

<div class="container">
<div class="row" id="datashow">
</div>

<script>
const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://travel-advisor.p.rapidapi.com/locations/search?query=<?= addslashes($query);?>&limit=30&offset=0&units=km&location_id=1&currency=USD&sort=relevance&lang=en_US",
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "fcdb4b1bfcmsh66d805a6c920589p1b8166jsn4d08d476741c",
		"x-rapidapi-host": "travel-advisor.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {

const myJSON = JSON.stringify(response);

  $.post("genrate.php",
  {
    s : myJSON,

  },
  function(data, status){

$('#datashow').append(data);
  });


});


</script>
