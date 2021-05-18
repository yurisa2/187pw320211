<?= $this->extend('tema'); #OPEN SHORT TAG São um atalho de echo() ?>
<?php echo $this->section('conteudoPrincipal'); # Mesma coisa sem open short tag ?>

<?php

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#loading-this-helper

helper('form');


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_open

$atributosInput = [
  'type' => "text",
  'class' => "form-control",

  'placeholder' => "Digite aqui seu nome",
  'name' => "nome",
  'id' => 'nome'
];

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
$atributosLabel = [
  'class' => "form-label",
];

  // <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">


echo form_open('fontes/createbe');

echo '<div class="input-group mb-3">';
echo form_label('Digite seu nome', 'nome', $atributosLabel);
echo form_input($atributosInput);
echo '</div>';


echo '<div class="input-group mb-3">';
echo form_label('URL do feed', 'url', $atributosLabel);

$atributosInput['id'] = "url";
$atributosInput['name'] = "url";
$atributosInput['placeholder'] = "URL do feed";

echo form_input($atributosInput);

echo '</div>';






// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Deixe um comentário', 'comentario');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('comentario', 'Deixe um comentário ');

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Deixe um horário para captacao do feed', 'horario');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('horario', 'Deixe um horário para captacao do feed');

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Ativar ou desativar Fonte', 'ativado');



$extraFormInputs = array();
$extraFormInputs['type'] = 'number';


//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('ativado', 'Ativar ou desativar Fonte', $extraFormInputs);

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('ultimoUsuario', 'ultimoUsuario');


//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('ultimoUsuario', 'ultimoUsuario', ['readonly' => 'true']);

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_submit
echo form_submit('btnEnvia', 'Envia Form');

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_close
echo form_close();
 ?>
 <?= $this->endSection(); ?>
