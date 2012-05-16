var name = null;
var comment = null;
var star= null;
var professor = null;

window.onload = function() {
	$("submit").onclick = submitcomment;
};

function submitcomment() {
	name = $("name").value;
	comment = $("comment").value;
	star = $("star").value;
	alert("Your comment is submitted");
	
	var newquote = document.createElement("p");
	newquote.innerHTML = comment;
	$("quote").appendChild(newquote);
	
	var newstar = document.createElement("p");
	newstar.innerHTML = star;
	$("quote").appendChild(newstar);
	
	var newname = document.createElement("p");
	newname.innerHTML = name;
	$("quote").appendChild(newname);
}