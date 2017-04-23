var kuulid = document.getElementsByClassName("bead");
window.onload = function(){
		for (var i = 0; i < kuulid.length; i++) {
			kuulid[i].onclick = function(){
				leftRight(this);
			}
		}
		function leftRight(bead){
			if (window.getComputedStyle(bead).getPropertyValue("float") == "right"){
				bead.style.cssFloat = "left";
			} else{
				bead.style.cssFloat = "right";
			}
		}
};