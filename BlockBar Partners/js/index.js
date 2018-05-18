var list = document.querySelectorAll(".item a");

for (var i = 0; i < list.length; i++) {
	var url = list[i].children[0].getAttribute("src");
  list[i].style.backgroundImage="url('" + url + "')";
}