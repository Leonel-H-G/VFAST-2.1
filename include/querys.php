<?php

////////////////////////////////////////////////////////////////
if (isset($_POST['btnBuscar'])) {
  $tabla = "";
  $where = " ";
  if (!empty($_POST)) {
    $valor = $_POST['Buscar'];
    if (!empty($valor)) {
      $where = "WHERE NomLugar LIKE '%$valor%' OR DescripcionL LIKE '%$valor%'";
    }
  }
  // consulta para extrar datos de oficio
  $query = "SELECT * FROM lugares $where ORDER BY NomLugar";
  $resultado = $conecta->query($query);
  $numero = $resultado->num_rows;
  if ($numero > 0) {
    while ($row = $resultado->fetch_assoc()) {
      $dir = 'img/qr/';
      if (!file_exists($dir))
        mkdir($dir); {

        $qrLugar = $dir . 'lugar' . $row['Id_Lugar'] . '.png';
        $size = 4;
        $level = 'H';
        $frameSize = '3';
        $qrNomL = $row['NomLugar'];
        $qrDirL = $row['CalleL'];
        $qrTelL = $row['TelefonoL'];
        $qrEmail = $row['EmailLugar'];
        $qrContenido = 'BEGIN:VCARD' . "\n";
        $qrContenido .= 'FN:' . $qrNomL . "\n";
        $qrContenido .= 'TEL;WORK;VOICE:' . $qrTelL . "\n";
        $qrContenido .= 'EMAIL:' . $qrEmail . "\n";
        $qrContenido .= 'END:VCARD';
        QRcode::png($qrContenido, $qrLugar, $level, $size, $frameSize);
      }

      $tabla.= '<div class="imagen mb-4">
      <img src="img/img_lugares/' . $row['Img'] . '" alt="">
      <div class="overlay">
          <div> 
          <a href="#" data-bs-toggle="modal" data-bs-target="#qrcodeModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-qr-code-scan text-light" style="padding:10px;" viewBox="0 0 16 16">
                      <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z" />
                      <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z" />
                      <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z" />
                      <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z" />
                      <path d="M12 9h2V8h-2v1Z" />
                  </svg>
              </a>
          </div>
          <h2>'.$row['NomLugar'].'</h2>
          <p>'.$row['TelefonoL'].'</p>
          <p>'.$row['CalleL'].'</p>
      </div>
  </div>
                          ';
    }
  } else {
      $tabla.= '<div class="imagen mb-4">
    <img src="img/img_lugares/' . $row['Img'] . '" alt="">
    <div class="overlay">
        <div> 
        <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-qr-code-scan text-light" style="padding:10px;" viewBox="0 0 16 16">
                    <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z" />
                    <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z" />
                    <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z" />
                    <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z" />
                    <path d="M12 9h2V8h-2v1Z" />
                </svg>
            </a>
        </div>
        <h2>'.$row['NomLugar'].'</h2>
        <p>'.$row['TelefonoL'].'</p>
        <p>'.$row['CalleL'].'</p>
    </div>
</div>
';
    
  }
}