const flashData = $(".flash-data").data("flashdata"); //mengambil data dari class flash-data, dengan nama flashdata. (pada html ditandai dengan syntax data-flashdata)
const tipe = $(".flash-data").data("type");
if (flashData) {
	new Swal({
		title: flashData,
		text: "  ",
		icon: tipe,
	});
}

$(".delete-button").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "tugas yang dihapus, maka selesai. tugas tersebut tidak dapat diambil kembali, kecuali anda tambahkan sendiri nanti.",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "tugas sudah selesai, hapus saja",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
