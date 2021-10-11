<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<title>Weather APP</title>
		<meta name="description" content="Common form elements and layouts">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="css/weather.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"  crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/weather.js"></script>
        <head>
<body>

<div id="maps">



</div>
<div class="container-fluid px-1 px-sm-3 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="row card0">
            <div class="card1 col-lg-8 col-md-7">
                <div class="text-center"> <img class="image mt-5" src="https://i.imgur.com/M8VyA2h.png"> </div>
                <div class="row px-3 mt-3 mb-3">
                    <h1 class="large-font mr-3" id="temp"></h1>
                    <div class="d-flex flex-column mr-3">
                        <h2 class="mt-3 mb-0" id="city"></h2> <small id="date_today"></small>
                    </div>
                   
                </div>
            </div>
            <div class="card2 col-lg-4 col-md-5">
                <div class="row px-3"> <input type="text" id="location" placeholder="Another location" class="mb-5">
                    <div class="fa fa-search mb-5 mr-0 text-center" id="search_area"></div>
                </div>
                <div class="mr-5" >
                   <div id="near_div"></div>
                    <div class="line my-5"></div>
                    <p>Weather Details</p>
                    <div class="row px-3">
                        <p class="light-text">Cloudy</p>
                        <p class="ml-auto" id="cloud_descriptipn"></p>
                    </div>
                    <div class="row px-3">
                        <p class="light-text">Humidity</p>
                        <p class="ml-auto" id="humidity"></p>
                    </div>
                    <div class="row px-3">
                        <p class="light-text">Wind</p>
                        <p class="ml-auto" id="wind"></p>
                    </div>
                    <div class="row px-3">
                        <p class="light-text">Country</p>
                        <p class="ml-auto" id="country"></p>
                    </div>
                    <div class="line mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>