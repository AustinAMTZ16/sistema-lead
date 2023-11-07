<?php
    require_once 'connection/conexion.php';

    // $sqlContenidobodyheadCarrusel = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodyheadCarrusel'";
    // $datacomponentes = $conn->query($sqlContenidobodyheadCarrusel);

    // if ($datacomponentes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $datacomponentes->fetch_assoc();
    //     $resultados[] = $row;
    //     $idComponente =  $resultados[0]['idComponente'];
    //     $imagen_componente =  $resultados[0]['imagen_componente'];
    //     $title_componente =  $resultados[0]['title_componente'];
    //     $description_componente =  $resultados[0]['description_componente'];
    //     $title_btn_action =  $resultados[0]['title_btn_action'];
    //     $action_btn_link =  $resultados[0]['action_btn_link'];
    //     $estado_componente =  $resultados[0]['estado_componente'];
    //     $page_seccion =  $resultados[0]['page_seccion'];
    //     $type_componente =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponente . "<br>";
    //     echo "Campo1: " . $imagen_componente . "<br>";
    //     echo "Campo2: " . $title_componente . "<br>";
    //     echo "Campo3: " . $description_componente . "<br>";
    //     echo "Campo4: " . $title_btn_action. "<br>";
    //     echo "Campo5: " . $action_btn_link . "<br>";
    //     echo "Campo6: " . $estado_componente. "<br>";
    //     echo "Campo7: " . $page_seccion. "<br>";
    //     echo "Campo8: " . $type_componente. "<br>";
    // }
    // if ($datacomponentes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $datacomponentes->fetch_assoc();
    //     $resultados[1] = $row;
    //     $idComponente_2 =  $resultados[1]['idComponente'];
    //     $imagen_componente_2 = 'data:image/jpeg;base64,' . $resultados[1]['imagen_componente'];
    //     $title_componente_2 =  $resultados[1]['title_componente'];
    //     $description_componente_2 =  $resultados[1]['description_componente'];
    //     $title_btn_action_2 =  $resultados[1]['title_btn_action'];
    //     $action_btn_link_2 =  $resultados[1]['action_btn_link'];
    //     $estado_componente_2 =  $resultados[1]['estado_componente'];
    //     $page_seccion_2 =  $resultados[1]['page_seccion'];
    //     $type_componente_2 =  $resultados[1]['type_componente'];

    //     echo "ID: " . $idComponente_2 . "<br>";
    //     echo "Campo1: " . $imagen_componente_2 . "<br>";
    //     echo "Campo2: " . $title_componente_2 . "<br>";
    //     echo "Campo3: " . $description_componente_2 . "<br>";
    //     echo "Campo4: " . $title_btn_action_2. "<br>";
    //     echo "Campo5: " . $action_btn_link_2 . "<br>";
    //     echo "Campo6: " . $estado_componente_2. "<br>";
    //     echo "Campo7: " . $page_seccion_2. "<br>";
    //     echo "Campo8: " . $type_componente_2. "<br>";
    // }
    // if ($datacomponentes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $datacomponentes->fetch_assoc();
    //     $resultados[2] = $row;
    //     $idComponente_3 =  $resultados[2]['idComponente'];
    //     $imagen_componente_3 = 'data:image/jpeg;base64,' . $resultados[2]['imagen_componente'];
    //     $title_componente_3 =  $resultados[2]['title_componente'];
    //     $description_componente_3 =  $resultados[2]['description_componente'];
    //     $title_btn_action_3 =  $resultados[2]['title_btn_action'];
    //     $action_btn_link_3 =  $resultados[2]['action_btn_link'];
    //     $estado_componente_3 =  $resultados[2]['estado_componente'];
    //     $page_seccion_3 =  $resultados[2]['page_seccion'];
    //     $type_componente_3 =  $resultados[2]['type_componente'];

    //     echo "ID: " . $idComponente_3 . "<br>";
    //     echo "Campo1: " . $imagen_componente_3 . "<br>";
    //     echo "Campo2: " . $title_componente_3 . "<br>";
    //     echo "Campo3: " . $description_componente_3 . "<br>";
    //     echo "Campo4: " . $title_btn_action_3. "<br>";
    //     echo "Campo5: " . $action_btn_link_3 . "<br>";
    //     echo "Campo6: " . $estado_componente_3. "<br>";
    //     echo "Campo7: " . $page_seccion_3. "<br>";
    //     echo "Campo8: " . $type_componente_3. "<br>";
    // }

    // $sqlContenidobodysectionProductosDestacados = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodysectionProductosDestacados'";
    // $databodysectionProductosDestacados = $conn->query($sqlContenidobodysectionProductosDestacados);
    // if ($databodysectionProductosDestacados->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionProductosDestacados->fetch_assoc();

    //     $resultados[] = $row;
    //     $idComponentePD1 =  $resultados[0]['idComponente'];
    //     $imagen_componentePD1 = 'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componentePD1 =  $resultados[0]['title_componente'];
    //     $description_componentePD1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionPD1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkPD1 =  $resultados[0]['action_btn_link'];
    //     $estado_componentePD1 =  $resultados[0]['estado_componente'];
    //     $page_seccionPD1 =  $resultados[0]['page_seccion'];
    //     $type_componentePD1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponentePD1 . "<br>";
    //     echo "Campo1: " . $imagen_componentePD1 . "<br>";
    //     echo "Campo2: " . $title_componentePD1 . "<br>";
    //     echo "Campo3: " . $description_componentePD1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionPD1. "<br>";
    //     echo "Campo5: " . $action_btn_linkPD1 . "<br>";
    //     echo "Campo6: " . $estado_componentePD1. "<br>";
    //     echo "Campo7: " . $page_seccionPD1. "<br>";
    //     echo "Campo8: " . $type_componentePD1. "<br>";
    // }
    // if ($databodysectionProductosDestacados->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionProductosDestacados->fetch_assoc();

    //     $resultados[1] = $row;
    //     $idComponentePD2 =  $resultados[1]['idComponente'];
    //     $imagen_componentePD2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
    //     $title_componentePD2 =  $resultados[1]['title_componente'];
    //     $description_componentePD2 =  $resultados[1]['description_componente'];
    //     $title_btn_actionPD2 =  $resultados[1]['title_btn_action'];
    //     $action_btn_linkPD2 =  $resultados[1]['action_btn_link'];
    //     $estado_componentePD2 =  $resultados[1]['estado_componente'];
    //     $page_seccionPD2 =  $resultados[1]['page_seccion'];
    //     $type_componentePD2 =  $resultados[1]['type_componente'];

    //     echo "ID: " . $idComponentePD2 . "<br>";
    //     echo "Campo1: " . $imagen_componentePD2 . "<br>";
    //     echo "Campo2: " . $title_componentePD2 . "<br>";
    //     echo "Campo3: " . $description_componentePD2 . "<br>";
    //     echo "Campo4: " . $title_btn_actionPD2. "<br>";
    //     echo "Campo5: " . $action_btn_linkPD2 . "<br>";
    //     echo "Campo6: " . $estado_componentePD2. "<br>";
    //     echo "Campo7: " . $page_seccionPD2. "<br>";
    //     echo "Campo8: " . $type_componentePD2. "<br>";
    // }
    // if ($databodysectionProductosDestacados->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionProductosDestacados->fetch_assoc();

    //     $resultados[2] = $row;
    //     $idComponentePD3 =  $resultados[2]['idComponente'];
    //     $imagen_componentePD3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
    //     $title_componentePD3 =  $resultados[2]['title_componente'];
    //     $description_componentePD3 =  $resultados[2]['description_componente'];
    //     $title_btn_actionPD3 =  $resultados[2]['title_btn_action'];
    //     $action_btn_linkPD3 =  $resultados[2]['action_btn_link'];
    //     $estado_componentePD3 =  $resultados[2]['estado_componente'];
    //     $page_seccionPD3 =  $resultados[2]['page_seccion'];
    //     $type_componentePD3 =  $resultados[2]['type_componente'];

    //     echo "ID: " . $idComponentePD3 . "<br>";
    //     echo "Campo1: " . $imagen_componentePD3 . "<br>";
    //     echo "Campo2: " . $title_componentePD3 . "<br>";
    //     echo "Campo3: " . $description_componentePD3 . "<br>";
    //     echo "Campo4: " . $title_btn_actionPD3. "<br>";
    //     echo "Campo5: " . $action_btn_linkPD3 . "<br>";
    //     echo "Campo6: " . $estado_componentePD3. "<br>";
    //     echo "Campo7: " . $page_seccionPD3. "<br>";
    //     echo "Campo8: " . $type_componentePD3. "<br>";
    // }

    // $sqlContenidobodysectionAcercaNegocio ="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodysectionAcercaNegocio'";
    // $databodysectionAcercaNegocio = $conn->query($sqlContenidobodysectionAcercaNegocio);
    // if ($databodysectionAcercaNegocio->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionAcercaNegocio->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteAN1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteAN1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteAN1 =  $resultados[0]['title_componente'];
    //     $description_componenteAN1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionAN1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkAN1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteAN1 =  $resultados[0]['estado_componente'];
    //     $page_seccionAN1 =  $resultados[0]['page_seccion'];
    //     $type_componenteAN1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteAN1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteAN1 . "<br>";
    //     echo "Campo2: " . $title_componenteAN1 . "<br>";
    //     echo "Campo3: " . $description_componenteAN1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionAN1. "<br>";
    //     echo "Campo5: " . $action_btn_linkAN1 . "<br>";
    //     echo "Campo6: " . $estado_componenteAN1. "<br>";
    //     echo "Campo7: " . $page_seccionAN1. "<br>";
    //     echo "Campo8: " . $type_componenteAN1. "<br>";
    // }

    // $sqlContenidobodysectionServicio = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodysectionServicio'";
    // $databodysectionServicio = $conn->query($sqlContenidobodysectionServicio);
    // if ($databodysectionServicio->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionServicio->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteSS1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteSS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteSS1 =  $resultados[0]['title_componente'];
    //     $description_componenteSS1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionSS1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkSS1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteSS1 =  $resultados[0]['estado_componente'];
    //     $page_seccionSS1 =  $resultados[0]['page_seccion'];
    //     $type_componenteSS1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteSS1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSS1 . "<br>";
    //     echo "Campo2: " . $title_componenteSS1 . "<br>";
    //     echo "Campo3: " . $description_componenteSS1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSS1. "<br>";
    //     echo "Campo5: " . $action_btn_linkSS1 . "<br>";
    //     echo "Campo6: " . $estado_componenteSS1. "<br>";
    //     echo "Campo7: " . $page_seccionSS1. "<br>";
    //     echo "Campo8: " . $type_componenteSS1. "<br>";
    // }
    // if ($databodysectionServicio->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionServicio->fetch_assoc();

    //     $resultados[1] = $row;
    //     $idComponenteSS2 =  $resultados[1]['idComponente'];
    //     $imagen_componenteSS2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
    //     $title_componenteSS2 =  $resultados[1]['title_componente'];
    //     $description_componenteSS2 =  $resultados[1]['description_componente'];
    //     $title_btn_actionSS2 =  $resultados[1]['title_btn_action'];
    //     $action_btn_linkSS2 =  $resultados[1]['action_btn_link'];
    //     $estado_componenteSS2 =  $resultados[1]['estado_componente'];
    //     $page_seccionSS2 =  $resultados[1]['page_seccion'];
    //     $type_componenteSS2 =  $resultados[1]['type_componente'];

    //     echo "ID: " . $idComponenteSS2 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSS2 . "<br>";
    //     echo "Campo2: " . $title_componenteSS2 . "<br>";
    //     echo "Campo3: " . $description_componenteSS2 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSS2. "<br>";
    //     echo "Campo5: " . $action_btn_linkSS2 . "<br>";
    //     echo "Campo6: " . $estado_componenteSS2. "<br>";
    //     echo "Campo7: " . $page_seccionSS2. "<br>";
    //     echo "Campo8: " . $type_componenteSS2. "<br>";
    // }
    // if ($databodysectionServicio->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionServicio->fetch_assoc();

    //     $resultados[2] = $row;
    //     $idComponenteSS3 =  $resultados[2]['idComponente'];
    //     $imagen_componenteSS3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
    //     $title_componenteSS3 =  $resultados[2]['title_componente'];
    //     $description_componenteSS3 =  $resultados[2]['description_componente'];
    //     $title_btn_actionSS3 =  $resultados[2]['title_btn_action'];
    //     $action_btn_linkSS3 =  $resultados[2]['action_btn_link'];
    //     $estado_componenteSS3 =  $resultados[2]['estado_componente'];
    //     $page_seccionSS3 =  $resultados[2]['page_seccion'];
    //     $type_componenteSS3 =  $resultados[2]['type_componente'];

    //     echo "ID: " . $idComponenteSS3 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSS3 . "<br>";
    //     echo "Campo2: " . $title_componenteSS3 . "<br>";
    //     echo "Campo3: " . $description_componenteSS3 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSS3. "<br>";
    //     echo "Campo5: " . $action_btn_linkSS3 . "<br>";
    //     echo "Campo6: " . $estado_componenteSS3. "<br>";
    //     echo "Campo7: " . $page_seccionSS3. "<br>";
    //     echo "Campo8: " . $type_componenteSS3. "<br>";
    // }

    // $sqlContenidobodysectionClientes = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodysectionClientes'";
    // $databodysectionClientes = $conn->query($sqlContenidobodysectionClientes);
    // if ($databodysectionClientes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionClientes->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteSC1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteSC1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteSC1 =  $resultados[0]['title_componente'];
    //     $description_componenteSC1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionSC1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkSC1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteSC1 =  $resultados[0]['estado_componente'];
    //     $page_seccionSC1 =  $resultados[0]['page_seccion'];
    //     $type_componenteSC1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteSC1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSC1 . "<br>";
    //     echo "Campo2: " . $title_componenteSC1 . "<br>";
    //     echo "Campo3: " . $description_componenteSC1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSC1. "<br>";
    //     echo "Campo5: " . $action_btn_linkSC1 . "<br>";
    //     echo "Campo6: " . $estado_componenteSC1. "<br>";
    //     echo "Campo7: " . $page_seccionSC1. "<br>";
    //     echo "Campo8: " . $type_componenteSC1. "<br>";
    // }
    // if ($databodysectionClientes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionClientes->fetch_assoc();

    //     $resultados[1] = $row;
    //     $idComponenteSC2 =  $resultados[1]['idComponente'];
    //     $imagen_componenteSC2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
    //     $title_componenteSC2 =  $resultados[1]['title_componente'];
    //     $description_componenteSC2 =  $resultados[1]['description_componente'];
    //     $title_btn_actionSC2 =  $resultados[1]['title_btn_action'];
    //     $action_btn_linkSC2 =  $resultados[1]['action_btn_link'];
    //     $estado_componenteSC2 =  $resultados[1]['estado_componente'];
    //     $page_seccionSC2 =  $resultados[1]['page_seccion'];
    //     $type_componenteSC2 =  $resultados[1]['type_componente'];

    //     echo "ID: " . $idComponenteSC2 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSC2 . "<br>";
    //     echo "Campo2: " . $title_componenteSC2 . "<br>";
    //     echo "Campo3: " . $description_componenteSC2 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSC2. "<br>";
    //     echo "Campo5: " . $action_btn_linkSC2 . "<br>";
    //     echo "Campo6: " . $estado_componenteSC2. "<br>";
    //     echo "Campo7: " . $page_seccionSC2. "<br>";
    //     echo "Campo8: " . $type_componenteSC2. "<br>";
    // }
    // if ($databodysectionClientes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionClientes->fetch_assoc();

    //     $resultados[2] = $row;
    //     $idComponenteSC3 =  $resultados[2]['idComponente'];
    //     $imagen_componenteSC3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
    //     $title_componenteSC3 =  $resultados[2]['title_componente'];
    //     $description_componenteSC3 =  $resultados[2]['description_componente'];
    //     $title_btn_actionSC3 =  $resultados[2]['title_btn_action'];
    //     $action_btn_linkSC3 =  $resultados[2]['action_btn_link'];
    //     $estado_componenteSC3 =  $resultados[2]['estado_componente'];
    //     $page_seccionSC3 =  $resultados[2]['page_seccion'];
    //     $type_componenteSC3 =  $resultados[2]['type_componente'];

    //     echo "ID: " . $idComponenteSC3 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSC3 . "<br>";
    //     echo "Campo2: " . $title_componenteSC3 . "<br>";
    //     echo "Campo3: " . $description_componenteSC3 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSC3. "<br>";
    //     echo "Campo5: " . $action_btn_linkSC3 . "<br>";
    //     echo "Campo6: " . $estado_componenteSC3. "<br>";
    //     echo "Campo7: " . $page_seccionSC3. "<br>";
    //     echo "Campo8: " . $type_componenteSC3. "<br>";
    // }
    // if ($databodysectionClientes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionClientes->fetch_assoc();

    //     $resultados[3] = $row;
    //     $idComponenteSC4 =  $resultados[3]['idComponente'];
    //     $imagen_componenteSC4 =  'data:image/jpeg;base64,'.$resultados[3]['imagen_componente'];
    //     $title_componenteSC4 =  $resultados[3]['title_componente'];
    //     $description_componenteSC4 =  $resultados[3]['description_componente'];
    //     $title_btn_actionSC4 =  $resultados[3]['title_btn_action'];
    //     $action_btn_linkSC4 =  $resultados[3]['action_btn_link'];
    //     $estado_componenteSC4 =  $resultados[3]['estado_componente'];
    //     $page_seccionSC4 =  $resultados[3]['page_seccion'];
    //     $type_componenteSC4 =  $resultados[3]['type_componente'];

    //     echo "ID: " . $idComponenteSC4 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSC4 . "<br>";
    //     echo "Campo2: " . $title_componenteSC4 . "<br>";
    //     echo "Campo3: " . $description_comp∫onenteSC4 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSC4. "<br>";
    //     echo "Campo5: " . $action_btn_linkSC4 . "<br>";
    //     echo "Campo6: " . $estado_componenteSC4. "<br>";
    //     echo "Campo7: " . $page_seccionSC4. "<br>";
    //     echo "Campo8: " . $type_componenteSC4. "<br>";
    // }
    // if ($databodysectionClientes->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionClientes->fetch_assoc();

    //     $resultados[4] = $row;
    //     $idComponenteSC5 =  $resultados[4]['idComponente'];
    //     $imagen_componenteSC5 =  'data:image/jpeg;base64,'.$resultados[4]['imagen_componente'];
    //     $title_componenteSC5 =  $resultados[4]['title_componente'];
    //     $description_componenteSC5 =  $resultados[4]['description_componente'];
    //     $title_btn_actionSC5 =  $resultados[4]['title_btn_action'];
    //     $action_btn_linkSC5 =  $resultados[4]['action_btn_link'];
    //     $estado_componenteSC5 =  $resultados[4]['estado_componente'];
    //     $page_seccionSC5 =  $resultados[4]['page_seccion'];
    //     $type_componenteSC5 =  $resultados[4]['type_componente'];

    //     echo "ID: " . $idComponenteSC5 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSC5 . "<br>";
    //     echo "Campo2: " . $title_componenteSC5 . "<br>";
    //     echo "Campo3: " . $description_componenteSC5 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSC5. "<br>";
    //     echo "Campo5: " . $action_btn_linkSC5 . "<br>";
    //     echo "Campo6: " . $estado_componenteSC5. "<br>";
    //     echo "Campo7: " . $page_seccionSC5. "<br>";
    //     echo "Campo8: " . $type_componenteSC5. "<br>";
    // }

    // $sqlContenidbodysectionRecomendaciones="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodysectionRecomendaciones'";
    // $databodysectionRecomendaciones = $conn->query($sqlContenidbodysectionRecomendaciones);
    // if ($databodysectionRecomendaciones->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $databodysectionRecomendaciones->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteSR1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteSR1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteSR1 =  $resultados[0]['title_componente'];
    //     $description_componenteSR1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionSR1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkSR1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteSR1 =  $resultados[0]['estado_componente'];
    //     $page_seccionSR1 =  $resultados[0]['page_seccion'];
    //     $type_componenteSR1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteSR1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteSR1 . "<br>";
    //     echo "Campo2: " . $title_componenteSR1 . "<br>";
    //     echo "Campo3: " . $description_componenteSR1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionSR1. "<br>";
    //     echo "Campo5: " . $action_btn_linkSR1 . "<br>";
    //     echo "Campo6: " . $estado_componenteSR1. "<br>";
    //     echo "Campo7: " . $page_seccionSR1. "<br>";
    //     echo "Campo8: " . $type_componenteSR1. "<br>";
    // }

    // $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'form_actions_text'";
    // $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
    // if ($dataform_actions_text->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $dataform_actions_text->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteFA1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteFA1 =  $resultados[0]['title_componente'];
    //     $description_componenteFA1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteFA1 =  $resultados[0]['estado_componente'];
    //     $page_seccionFA1 =  $resultados[0]['page_seccion'];
    //     $type_componenteFA1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteFA1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteFA1 . "<br>";
    //     echo "Campo2: " . $title_componenteFA1 . "<br>";
    //     echo "Campo3: " . $description_componenteFA1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionFA1. "<br>";
    //     echo "Campo5: " . $action_btn_linkFA1 . "<br>";
    //     echo "Campo6: " . $estado_componenteFA1. "<br>";
    //     echo "Campo7: " . $page_seccionFA1. "<br>";
    //     echo "Campo8: " . $type_componenteFA1. "<br>";
    // }

    // $sqlContenidoArea_Start = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 2 AND type_componente = 'Area_Start'";
    // $dataArea_Start = $conn->query($sqlContenidoArea_Start);
    // if ($dataArea_Start->num_rows > 0) {
    //     // Inicializa un arreglo para almacenar los resultados
    //     $resultados = array();
    //     // Itera a través de los resultados y almacénalos en el arreglo
    //     $row = $dataArea_Start->fetch_assoc();

    //     $resultados[0] = $row;
    //     $idComponenteAS1 =  $resultados[0]['idComponente'];
    //     $imagen_componenteAS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
    //     $title_componenteAS1 =  $resultados[0]['title_componente'];
    //     $description_componenteAS1 =  $resultados[0]['description_componente'];
    //     $title_btn_actionAS1 =  $resultados[0]['title_btn_action'];
    //     $action_btn_linkAS1 =  $resultados[0]['action_btn_link'];
    //     $estado_componenteAS1 =  $resultados[0]['estado_componente'];
    //     $page_seccionAS1 =  $resultados[0]['page_seccion'];
    //     $type_componenteAS1 =  $resultados[0]['type_componente'];

    //     echo "ID: " . $idComponenteAS1 . "<br>";
    //     echo "Campo1: " . $imagen_componenteAS1 . "<br>";
    //     echo "Campo2: " . $title_componenteAS1 . "<br>";
    //     echo "Campo3: " . $description_componenteAS1 . "<br>";
    //     echo "Campo4: " . $title_btn_actionAS1. "<br>";
    //     echo "Campo5: " . $action_btn_linkAS1 . "<br>";
    //     echo "Campo6: " . $estado_componenteAS1. "<br>";
    //     echo "Campo7: " . $page_seccionAS1. "<br>";
    //     echo "Campo8: " . $type_componenteAS1. "<br>";
    // }

    $sqlContenidobodysectionTeam = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 2 AND type_componente = 'bodysectionTeam'";
    $databodysectionTeam = $conn->query($sqlContenidobodysectionTeam);
    if ($databodysectionTeam->num_rows > 0) {
        // Inicializa un arreglo para almacenar los resultados
        $resultados = array();
        // Itera a través de los resultados y almacénalos en el arreglo
        $row = $databodysectionTeam->fetch_assoc();

        $resultados[0] = $row;
        $idComponenteST1 =  $resultados[0]['idComponente'];
        $imagen_componenteST1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
        $title_componenteST1 =  $resultados[0]['title_componente'];
        $description_componenteST1 =  $resultados[0]['description_componente'];
        $title_btn_actionST1 =  $resultados[0]['title_btn_action'];
        $action_btn_linkST1 =  $resultados[0]['action_btn_link'];
        $estado_componenteST1 =  $resultados[0]['estado_componente'];
        $page_seccionST1 =  $resultados[0]['page_seccion'];
        $type_componenteST1 =  $resultados[0]['type_componente'];

        echo "ID: " . $idComponenteST1 . "<br>";
        echo "Campo1: " . $imagen_componenteST1 . "<br>";
        echo "Campo2: " . $title_componenteST1 . "<br>";
        echo "Campo3: " . $description_componenteST1 . "<br>";
        echo "Campo4: " . $title_btn_actionST1. "<br>";
        echo "Campo5: " . $action_btn_linkST1 . "<br>";
        echo "Campo6: " . $estado_componenteST1. "<br>";
        echo "Campo7: " . $page_seccionST1. "<br>";
        echo "Campo8: " . $type_componenteST1. "<br>";
    }
    if ($databodysectionTeam->num_rows > 0) {
        // Inicializa un arreglo para almacenar los resultados
        $resultados = array();
        // Itera a través de los resultados y almacénalos en el arreglo
        $row = $databodysectionTeam->fetch_assoc();

        $resultados[1] = $row;
        $idComponenteST2 =  $resultados[1]['idComponente'];
        $imagen_componenteST2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
        $title_componenteST2 =  $resultados[1]['title_componente'];
        $description_componenteST2 =  $resultados[1]['description_componente'];
        $title_btn_actionST2 =  $resultados[1]['title_btn_action'];
        $action_btn_linkST2 =  $resultados[1]['action_btn_link'];
        $estado_componenteST2 =  $resultados[1]['estado_componente'];
        $page_seccionST2 =  $resultados[1]['page_seccion'];
        $type_componenteST2 =  $resultados[1]['type_componente'];

        echo "ID: " . $idComponenteST2 . "<br>";
        echo "Campo1: " . $imagen_componenteST2 . "<br>";
        echo "Campo2: " . $title_componenteST2 . "<br>";
        echo "Campo3: " . $description_componenteST2 . "<br>";
        echo "Campo4: " . $title_btn_actionST2. "<br>";
        echo "Campo5: " . $action_btn_linkST2 . "<br>";
        echo "Campo6: " . $estado_componenteST2. "<br>";
        echo "Campo7: " . $page_seccionST2. "<br>";
        echo "Campo8: " . $type_componenteST2. "<br>";
    }