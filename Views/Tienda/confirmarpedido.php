<?php
	header_Tienda($data);
	// $arrProductos = $data['productos'];
 ?>

<br><br><br>
<div class="jumbotron text-center">
  <h1 class="display-4">Gracias por tu compra!</h1>
  <p class="lead">Tu pedido fue procesado con exito.</p>
  <p>No. Orden: <strong> <?= $data['orden']; ?> </strong></p>

  <?php if (!empty($data['transaccion'])){ ?>
    <p>Transacción: <strong> <?= $data['transaccion']; ?> </strong></p>
  <?php } ?>

  <hr class="my-4">
  <p>Muy pronto estaremos en contactopara coordinar la entrega.</p>
  <p>Puedes ver el estado de tu pedido en la sección de tu usuario.</p>
  <a class="btn btn-primary btn-lg mt-3" href="<?= base_url();?>" role="button">Continuar</a>
</div>

<?php
	footer_Tienda($data);
?>