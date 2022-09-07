$(".tombol-hapus").on("click", function (e) {
	const href = $(this).attr("href"); //pilih tombol hapus yang diklik, ambil atribut href
	e.preventDefault();
	Swal.fire({
		title: "Yakin?",
		text: "Jika yakin, data akan dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
