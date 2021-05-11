<?= $this->extend('tema'); #OPEN SHORT TAG São um atalho de echo() ?>
<?php echo $this->section('conteudoPrincipal'); # Mesma coisa sem open short tag ?>

<?php

echo "<pre>";

$table = new \CodeIgniter\View\Table();

$data = $tabela;



$table->setHeading(
                                'id',
                                'nome',
                                'url',
                                'comentario',
                                'horario',
                                'ativado',
                                'ultimoUsuario',);

echo $table->generate($data);

 ?>
<?= $this->endSection(); ?>
