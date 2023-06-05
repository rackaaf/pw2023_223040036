//ambil elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var cari = document.getElementById("cari");
var ajx = document.getElementById("ajx");

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
	//buat object ajax
	var xhr = new XMLHttpRequest();

	//cek kesiapan ajax
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200) {
			ajx.innerHTML = xhr.responseText;
		}
	};

	//eksekusi ajax
	xhr.open("GET", "ajax/userajax.php?keyword=" + keyword.value, true);
	xhr.send();
});
