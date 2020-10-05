<?php

$datos = $_POST;

$temperatura = @$datos["temperatura"];
$perdidaOlfato = @$datos["perdidaOlfato"];
$perdidaGusto = @$datos["perdidaGusto"];
$tos = @$datos["tos"];
$dolorGarganta = @$datos["dolorGarganta"];
$respiratoria = @$datos["respiratoria"];
$dolorCabeza = @$datos["dolorCabeza"];
$diarrea = @$datos["diarrea"]
$vomitos = @$datos["vomitos"];
$dolorMuscular = @$datos["dolorMuscular"];

$antTrabajo = isset($datos["antTrabajo"]);
$antUltimosDias = isset($datos["antUltimosDias"]);
$antCancer = isset($datos["antCancer"]);
$antDiabetes = isset($datos["antDiabetes"]);
$antHepatica = isset($datos["antHepatica"]);
$antRenal = isset($datos["antRenal"]);
$antRespiratoria = isset($datos["antRespiratoria"]);
$antCardiologica = isset($datos["antCardiologica"]);
$antBajasDefensas = isset($datos["antBajasDefensas"]);
/*
$errores = [
    'tos' => 'Tienes tos',
    'perdidaOlfato' => 'Tienes pérdida de olfato',
    'perdidaGusto' => 'Tienes pérdida de gusto',
    'dolorGarganta' => 'Tienes dolor de garganta',
    'respiratoria' => 'Tienes una enfermedad respiratoria',
    'dolorCabeza' => 'Tienes dolor de cabeza',
    'diarrea' => 'Tienes diarrea',
    'vomitos' => 'Tienes vomitos',
    'dolorMuscular' => 'Tienes dolor muscular',
    'antTrabajo' => 'Has trabajado con persona con COVID',
    'antUltimosDias' => 'Has estado en contacto con personas con COVID en los ultimos días',
    'antCancer' => 'Tienes o tuviste cancer',
    'antDiabetes' => 'Tuviste diabetes'
];
*/

echo '<h2>Temperatura</h2>';
echo $temperatura.'<hr />';

echo '<h2>Síntomas</h2>';

if($tos) echo "<hr />Tienes tos"; 

if($perdidaOlfato) echo "<hr />Tienes pérdida de olfato"; 

if($perdidaGusto) echo "<hr />Tienes pérdida de gusto"; 

if($dolorGarganta) echo "<hr />Tienes dolor de garganta"; 

if($respiratoria) echo "<hr />Tienes una enfermedad respiratoria"; 

if($dolorCabeza) echo "<hr />Tienes dolor de cabeza"; 

if($diarrea) echo "<hr />Tienes diarrea"; 

if($vomitos) echo "<hr />Tienes vomitos"; 

if($dolorMuscular) echo "<hr />Tienes dolor muscular"; 

echo '<h2>Antecedentes</h2>';

if($antTrabajo) echo "<hr />Has trabajado con persona con COVID"; 

if($antUltimosDias) echo "<hr />Has estado en contacto con personas con COVID en los ultimos días"; 

if($antCancer) echo "<hr />Tienes o tuviste cancer"; 

if($antDiabetes) echo "<hr />Tuviste diabetes";
/*
foreach ($errores as $campo => $valor) {
    echo '<code>if($'.$campo.') echo "<hr />'.$valor.'"; </code>';
}
*/
