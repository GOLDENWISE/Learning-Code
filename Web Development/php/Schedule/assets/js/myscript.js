const sidebar = document.getElementsByClassName("sidebar");
const value = Array.from(document.querySelectorAll(".sidebar a span")).map(
	(e) => e.innerHTML
);
const h1 = document.querySelector("h1").innerHTML;
let i = 0;
let data = value.find((e) => {
	if (e == h1) {
		return true;
	}
	i++;
});

if (data) {
	sidebar[i].classList.add("disabled");
	sidebar[i].classList.add("active");
	const parentElement = sidebar[i].parentElement.previousElementSibling;
	const ul = sidebar[i].parentElement;
	parentElement.removeAttribute("aria-expanded");
	parentElement.setAttribute("aria-expanded", true);
	let ariaExpanded = parentElement.getAttribute("aria-expanded");
	if (ariaExpanded) {
		parentElement.classList.remove("collapsed");
		ul.classList.add("show");
	}
}
