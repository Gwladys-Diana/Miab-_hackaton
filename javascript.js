var vnom=document.getElementById('txtnom');
var vmsg=document.getElementById('msg');
function fvalidation(){
	if(vnom.value.length<4){
		/*msg.innerHTML='Le nom est obligatoire et doit avoir au moins 4 lettres';
		vmsg.style.display='block';
		vnom.className='inputobligatoire';*/
		alert("Le nom du soumissionnaire doit être renseigné");
	}
}

var vbtannul=document.getElementById('btannul');
var vfrm=document.getElementById('frm');
/*vbtannul.onclick=function(){
	if(confirm('Voulez vous annuler la saisie en cours?')){
	vfrm.reset();	
	}
}*/

vbtannul.addEventListener('click',fannul,false);
function fannul(){
	if(confirm('Voulez vous annuler la saisie en cours?')){
	vfrm.reset();
	}
}