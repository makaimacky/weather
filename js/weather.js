$(document).ready(function(){


var client_id="GXNBFANOLBS3KJKAZG0BLVEIRELHKCE5OJGK5PC1MQPCKKXV";
var client_secret="1RKNC0YQH045LCE4AVJVD3PAGKTUCVUGVCJKNHZKVJFH5ATJ";
var v="20211110";
var limit="5";
var near="Yokohama"
getVenues(client_id,client_secret,v,limit,near);
  $("#search_area").click(function(){
    var city=$("#location").val();
    getVenues(client_id,client_secret,v,limit,city)

  });
        
});

function getVenues(client_id,client_secret,v,limit,near){
  $.post("https://api.foursquare.com/v2/venues/search",
  {
    client_id:client_id,
    client_secret:client_secret ,
    v:v,
    limit:limit,
    near:near
  },
  function(data){
    getDetails(data);
  });

}
function getDetails(cityDetails){
  $('.appended').remove();
  $.each(cityDetails['response']['venues'], function( key, value ) {
    $("#near_div").append('<div class="appended" ><p class="light-text suggestion"  onclick="test(`'+cityDetails['response']['venues'][key]['location']['lat']+'`,`'+cityDetails['response']['venues'][key]['location']['lat']+'`)">'+cityDetails['response']['venues'][key]['name']+'</p></div>' );
  });
}
function test(lat,lon){
  getWeather(lat,lon);
}

function getWeather(lat,lon){
  var APPID="d56ec5f9d30abd0929d58bb8dd177f68";
  $.get("https://api.openweathermap.org/data/2.5/weather",
  {
    lat:lat,
    lon:lon ,
    appid:APPID
  },
  function(data){
    weatheryArray(data);
    console.log(data);
  });

}

function weatheryArray(arr){
  var temperature=Math.round(parseInt(arr['main']['temp'])-273.15);
  $("#temp").html(temperature+'&#176;');
  $("#cloud_descriptipn").html(arr['weather'][0]['description']);
  $("#wind").html(arr['wind']['speed']+'m/s');
  $("#humidity").html(arr['main']['humidity']+'%');
  $("#date_today").html(new Date().toDateString());
  $("#country").html(arr['sys']['country']);
  $("#city").html(arr['name']);
}

