const sidebar = document.getElementsByClassName("sidebar");
const value = Array.from(document.querySelectorAll(".sidebar a span")).map(
	(e) => e.innerHTML
);
const h1 = document.querySelector("h1").innerHTML;
let i = 0;
let data = value.find((e) => {
	if (e == h1) {
		return e;
	}
	i++;
});
sidebar[i].classList.add("disabled");
sidebar[i].classList.add("active");
