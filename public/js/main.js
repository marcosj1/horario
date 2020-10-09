


function toast(_msj) {
	var selector = document.querySelector('.toast');
	var msj = selector.children[0];

	msj.innerHTML = _msj;
	msj.style.padding = "5px 24px 5px 30px";

	selector.classList.remove('OutRight');

	selector.classList.add('tt-ptr');
	selector.classList.add('InRight');

	setTimeout(function(){
		selector.classList.remove('InRight');
		selector.classList.add('OutRight');
	},3000);
	
}

toast("I am a toast!");