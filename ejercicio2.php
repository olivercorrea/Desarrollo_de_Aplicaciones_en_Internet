<?php
// Una fábrica de gaseosas ha decidido rebajar el precio de su gaseosa de 3 litros en 5% con la finalidad de igualar los precios de la competencia. Adicionalmente, ofrece un descuento especial igual al 7% del importe de la compra. Además, como incentivo especial, obsequia dos caramelos por cada gaseosa adquirida. Dados el precio actual de la gaseosa y la cantidad de unidades adquiridas, diseñe un programa que determine el nuevo precio de la gaseosa, el importe de la compra, el importe del descuento, el importe a pagar y el obsequio.
//----------------------------------------------------------------

// Precio actual de la gaseosa = S/. 11.40 (CocaCola)
// Cantidad de unidades adquiridas = ¿?
// Nuevo precio de la gaseosa = 5% * Precio actual de la gaseosa
// Importe de la compra = Nuevo precio de la gaseosa * Cantidad de unidades adquiridas
// Importe del descuento = 7% * Importe de la compra
// Importe a pagar = Importe de la compra - Importe del descuento
// Obsequio = 2 caramelos * Cantidad de unidades adquiridas

// declaracion de variables

    $precio_actual_de_la_gaseosa = 11.40;
    echo "Precio actual de la gaseosa: S/. ". $precio_actual_de_la_gaseosa;
    echo "<br>";
    $cantidad_de_unidades_adquiridas = $_POST['valor1'];
    echo "Cantidad de unidades adquiridas: ". $cantidad_de_unidades_adquiridas;
    echo "<br>";
    $nuevo_precio_de_la_gaseosa = $precio_actual_de_la_gaseosa - (0.05 * $precio_actual_de_la_gaseosa);
    echo "Nuevo precio de la gaseosa: S/. ". $nuevo_precio_de_la_gaseosa;
    echo "<br>";
    $importe_de_la_compra = $nuevo_precio_de_la_gaseosa * $cantidad_de_unidades_adquiridas;
    echo "Importe de la compra: S/. ". $importe_de_la_compra;
    echo "<br>";
    $importe_del_descuento = 0.07 * $importe_de_la_compra;
    echo "Importe del descuento: S/. ". $importe_del_descuento;
    echo "<br>";
    $importe_a_pagar = round($importe_de_la_compra - $importe_del_descuento, 2);
    echo "Importe a pagar: S/. ". $importe_a_pagar;
    echo "<br>";
    $obsequio = 2 * $cantidad_de_unidades_adquiridas;
    echo "Obsequio: ". $obsequio, " caramelos";
?>

















