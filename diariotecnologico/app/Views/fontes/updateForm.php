<?php

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#loading-this-helper

helper('form');


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_open
echo form_open('fontes/update');

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form%20html#form_hidden
echo form_hidden('id', $id);


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Digite aqui seu nome', 'nome');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('nome', $nome);

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('URL do feed', 'url');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('url', $url);

echo '<br>';


// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Deixe um comentário', 'comentario');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('comentario', $comentario);

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Deixe um horário para captacao do feed', 'horario');

//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('horario', $horario);

echo '<br>';

// https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_label
echo form_label('Ativar ou desativar Fonte', 'ativado');



$extraFormInputs = array();
$extraFormInputs['type'] = 'number';


//https://codeigniter4.github.io/userguide/helpers/form_helper.html?highlight=form#form_input
echo form_input('ativado', $ativado, $extraFormInputs);

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
