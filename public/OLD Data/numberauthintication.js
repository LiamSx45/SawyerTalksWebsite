window.onload=function(){
	render();
};
function render(){
	window.recaptchVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
}

