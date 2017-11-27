$("document").ready(function(){
	
    $("#pgn").click(
    	function(event){
        	$("#pgndroopdown").toggleClass("hidden");
        }
    );
    
    $("#ctt").click(
    	function(event){
        	$("#cttdroopdown").toggle();
        }
    );
});




/*var x = document.getElementById("result");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}

getLocation();

*/

function salvar(){
	var address = document.getElementById("address").value;	
    localStorage.setItem("address",address);
    var  phone = document.getElementById("phone").value;	
    localStorage.setItem("phone",phone);
	var  time = document.getElementById("time").value;	
    localStorage.setItem("time",time);
		setTimeout(function(){ alert(address + "\n" + phone); }, 3000);
}