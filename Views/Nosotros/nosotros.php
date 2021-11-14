<?php
	header_Tienda($data);
  $banner = $data['page']['portada'];
  $idpagina = $data['page']['idpagina'];
?>

 <script>
   document.querySelector('header').classList.add('header-v4');
 </script>

<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= $banner ?>);">
		<h2 class="ltext-105 cl0 txt-center">
			<?= $data['page']['titulo'] ?>
		</h2>
	</section>

	<?php
		if(viewPage($idpagina)){
			echo $data['page']['contenido'];
		}else{
	?>
		<div>
			<div class="container my-4 text-center">
				<img src="<?= media()?>/img/construccion.jpg" alt="" class="img-fluid">
				<h3 class="text-center my-3">Estamos trabajando...</h3>
			</div>
		</div>
<?php
		}
	footer_Tienda($data);
?>