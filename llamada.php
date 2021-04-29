<?php
session_start();

require_once 'DB/DatabaseProc.php';

if(isset($_GET['eleccion'])){
    if($_GET['eleccion'] == "t"){
        $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
        $db->connect();
        $mod = "Huma";
        $sql = $db->selectAll();
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else if($_GET['eleccion'] == "p"){
        $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
        $db->connect();
        $mod = "Huma";
        $sql = $db->findByMod($mod);
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else if($_GET['eleccion'] == "m"){
        $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
        $db->connect();
        $mod = "Maquina";
        $sql = $db->findByMod($mod);
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}


if(isset($_GET['elimina'])){
    $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
    $db->connect();
    $id = $_GET['elimina'];
    $db->delete($id);
    
    $sql = $db->selectAll();
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
}

if(isset($_GET['modalitat'])){
    $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
    $db->connect();
    
    $modalitat = $_GET['modalitat'];
    $nivell = $_GET['nivell'];
    $intents = $_GET['intents'];
    
    $db->insert($modalitat, $nivell, $intents);
    
    $sql = $db->selectAll();
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
}

if(isset($_GET['modifica'])){
    $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
    $db->connect();
    $id = $_GET['modifica'];
    
    $sql = $db->findById($id);
    
    foreach ($sql as $key => $value) {
        echo '<form id="form1">';
        echo '<input type="number" name="id" value="'. $value['id'] .'" readonly="readonly">';
        echo '<select name="modalitat" id="modalitat">';
        if($value['modalitat'] == 'Huma'){
            echo '<option value="Huma" selected>Seleccionar Humano</option>';
            echo '<option value="Maquina">Seleccionar Maquina</option>';
        }
        else{
            echo '<option value="Huma">Seleccionar Humano</option>';
            echo '<option value="Maquina" selected>Seleccionar Maquina</option>';
        }
        echo '</select>';
        echo '<select name="nivell" id="nivel">';
        if($value['nivell'] == '10'){
            echo '<option value="10" selected>10</option>';
            echo '<option value="50">50</option>';
            echo '<option value="100">100</option>';
        }
        else if($value['nivell'] == '50'){
            echo '<option value="10">10</option>';
            echo '<option value="50" selected>50</option>';
            echo '<option value="100">100</option>';
        }
        else{
            echo '<option value="10">10</option>';
            echo '<option value="50">50</option>';
            echo '<option value="100" selected>100</option>';
        }
        echo '</select>';
        echo '<input name="intents" type="number" value="'. $value['intents'] .'">';
        echo '</form>';
        echo '<input type="submit" onclick="modifica_fin('."form1".');">';
    }
}

if(isset($_GET['modalitat2'])){
    $db = new DatabaseProc("localhost", "root", "minanu2016", "m07uf3");
    $db->connect();
    
    $modalitat = $_GET['modalitat2'];
    $nivell = $_GET['nivell2'];
    $intents = $_GET['intents2'];
    $id = $_GET['id2'];
    
    $db->update_tab($modalitat, $nivell, $intents, $id);
    
    $sql = $db->selectAll();
        echo '<table style="width:100%; border:1px solid;">';
        echo '<tr style="border:1px solid;">';
        echo '<th style="border:1px solid;">ID</th>';
        echo '<th style="border:1px solid;">Modalidad</th>';
        echo '<th style="border:1px solid;">Nivel</th>';
        echo '<th style="border:1px solid;">Fecha</th>';
        echo '<th style="border:1px solid;">Intentos</th>';
        echo '<th style="border:1px solid;"></th>';
        echo '<th style="border:1px solid;"></th>';
        echo '</tr>' . "\n";
        foreach ($sql as $key => $value) {
            echo '<tr style="border:1px solid;">';
            echo '<td style="border:1px solid;">' . $value['id'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['modalitat'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['nivell'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['data_partida'] . '</td>';
            echo '<td style="border:1px solid;">' . $value['intents'] . '</td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Elimina" id="'. $value['id'] .'" onclick="elimina(this.id)"></td>';
            echo '<td style="border:1px solid;"><input type="submit" value="Modifica" id="'. $value['id'] .'" onclick="modifica(this.id)"></td>';
            echo '</tr>';
        }
        echo '</table>';
}