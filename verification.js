$(document).ready(function(){
	function verification(){
		password1 = document.getElementById("inscription_label_pwd1").value;
		password2 = document.getElementById("pwd2").value;
		
		erreur = "";
		pwdRE = /[A-Z]{1,}/;
		pwdRE1 = /[0-9]{1,}/;
		
		if(password1 != password2){
			erreur += "Les deux mots de passe saisis sont différents.\n";
		}
		
		if(password1.length < 8){
			erreur += "Le mot de passe doit faire au minimum 8 caractères.\n";
		}
		
		if(!password1.match(pwdRE){
			erreur += "Le mot de passe doit contenir au moins une majuscule.\n";
			
			if(!password1.match(pwdRE1){
				erreur += "Le mot de passe doit contenir au moins un chiffre.\n";
			}
		}
		
		if(erreur != ""){
			alert(erreur);
		}
	}
});