function pageLoad() {
	document.getElementById("button").onclick = validate;
}
function validate() {
   	var username = document.getElementById("username");
   	var password = document.getElementById("password");
   	var phone = document.getElementById("phone");
   	var output = document.getElementById("output");
   	if(username.value && password.value && phone.value){
   		output.innerHTML = "Success";
   		output.className = "success";
   	}else{
   		output.innerHTML = "Error";
   	}
}
window.onload = pageLoad;