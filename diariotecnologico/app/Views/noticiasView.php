<?php echo $this->extend('tema'); ?>
<?php echo $this->section('conteudoPrincipal'); ?>

<?php

echo "<pre>";

$table = new \CodeIgniter\View\Table();

$data = $tabela;



$table->setHeading(
                                "id",
                                "title",
                                "link",
                                "description",
                                "language",
                                "pubDate",
                                "image",
                                "imageUrl",
                                "imageTitle",
                                "imageLink",
                                "body",
                                "ultimoUsuario"

);


echo $table->generate($data);

 ?>
 <?php echo $this->endSection(); ?>
