
window.onload = function () {

	// pour distinguer les premiers clics
	// des seconds clics
	let first_click = true;

	// pour stocker la première image cliquée
	let first_image;

	// si "not_finished" est vrai, alors
	// il reste des images à permuter
	let not_finished = true;

//case à cocher

 
	// traîte le clic sur une image


	function click_on() {
		if (not_finished) {
			if (first_click) {
				first_image = this;
				first_click = false;
			} else {
					first_click = true;
					let src = first_image.src;
					first_image.src = this.src;
					this.src = src;

					let name = first_image.name;
					first_image.name = this.name;
					this.name = name;
				}
			if (is_finished()) {
				let result = document.querySelector("#result");
				result.style.visibility = "visible";
				not_finished = false;
			}
		}
	}


	// teste si le puzzle est terminé
	function is_finished() {
		let s = "";
		let images = document.querySelector("#puzzle").querySelectorAll("img");
		for (let i = 0; i < images.length; i++)
			s += images[i].name;
		return s == "abcdefghijkl";
	}

	// ici, il faut relier la fonction "clic_on" à l'évènement "onclick"
	// sur toutes les images contenues dans l'élément d'id "puzzle"
	let imgs = document.querySelector("#puzzle").querySelectorAll("img");
	for ( let i = 0; i < imgs.length; i++ )
		imgs[i].onclick = click_on;

};
