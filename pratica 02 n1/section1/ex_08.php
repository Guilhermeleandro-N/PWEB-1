<?php
#Não entendi direito essa
define("CODIGO", "A2005B");
echo "Antes: ". CODIGO. "<br>";
$codigoNumero = intval(preg_replace("/[^0-9]/", "", CODIGO));
echo "Depois: $codigoNumero";

