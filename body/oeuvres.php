<?php
// Généalogie et coordonnées, photos ?
//NB : familha = famille en Auvergnat 
    session_start ();
?>
  

<!DOCTYPE html>

<html>

<head>
    <?php include("../include/style.php"); ?>
    <title>Œuvres familiales</title>
</head>


<body>

    <?php include("../include/entete.php"); ?>
    <?php include("../include/laterale.php"); ?>

    <section class="corps">
    	<table class="table_docs">
    		<tr><td class="unique_case" rowspan=2><img height="156px" width="108px" src="../img/oeuvres/contes.jpg" title="Les contes de Bon-Papa"></td>
    			<td width=600px class="unique_case">Pour les grandes et les petites têtes... Pour marquer un grand anniversaire ! Voici des histoires que notre bon-papa nous a toujours racontées. Des histoires à lire, à relire et à faire passer ! </td></tr>
    		<tr><td class="unique_case">Mahauld Dubus, Caroline Froissart, Mayeule des Robert</br>2009 - Autoédition</td></tr>
    	</table>
    </section>

    <?php include("../include/pieddepage.php"); ?>

</body>

</html>
