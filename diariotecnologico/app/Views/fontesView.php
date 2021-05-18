<?= $this->extend('tema'); #OPEN SHORT TAG São um atalho de echo() ?>
<?php echo $this->section('conteudoPrincipal'); # Mesma coisa sem open short tag ?>

<?php

// echo "<pre>";
//https://codeigniter4.github.io/userguide/outgoing/table.html?highlight=html%20table#changing-the-look-of-your-table


$table = new \CodeIgniter\View\Table();


$template = [
        'table_open'         => '<table class="table table-striped" cellspacing="0" cellpadding="4" border="0"> '
];
$table->setTemplate($template);

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
