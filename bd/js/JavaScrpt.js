jQuery(document).ready(function ($) {
	$(".tabla tr").click(function () {
		window.getid = $(this).find("td").eq(0).text();
		console.log(window.getid);
		$(".campoid").val(window.getid);
	});


	$(".tabla tr").click(function () {
		window.getid = $(this).find("td").eq(0).text();
		window.getNombre = $(this).find("td").eq(1).text();
		window.getDescripcion = $(this).find("td").eq(2).text();

		window.getVenta = $(this).find("td").eq(3).text();

		window.getImagen = $(this).find("td").eq(4).text();

		$(".IdMod").val(window.getid);
		$(".NomMod").val(window.getNombre);
		$(".DesMod").val(window.getDescripcion);

		$(".VenMod").val(window.getVenta);

		$(".ImgMod").val(window.getImagen);
	});

});