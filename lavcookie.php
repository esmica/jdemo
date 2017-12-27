<?php
//lav cookie med indholdet af index.php´s input element "tid", sæt cookien til at leve en time
setcookie("log", $_POST["tid"], time() + 3600);
//send bruger tilbage til index.php
header("Location:index.php")
?>
