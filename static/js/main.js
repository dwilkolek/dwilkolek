var selectedPort=0;var openedPort=false;var moving=false;function download(id){$(".AjaxO").hide()
$("#"+id+"AjaxO").show()
$(".jumbotron").animate({height:"toggle"},2000,function(){selectedPort=id;moving=false;});}function go(id){console.log(selectedPort,id,openedPort,moving)
if(!moving){moving=true;if(openedPort){$(".jumbotron").animate({height:"toggle"},1000,function(){openedPort=false;if(selectedPort!=id){openedPort=true;download(id)}else{selectedPort=0;}});}else{if(selectedPort!=id){openedPort=true;download(id)}}}}