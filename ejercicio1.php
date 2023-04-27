<?php
// Una empresa ha decidido otorgar a sus vendedores una bonificación de S/. 50 por cada hijo en edad escolar. El sueldo bruto se calcula sumando un sueldo básico de S/. 600 más una comisión que es igual al 7.5% del importe total vendido del mes y más la bonificación. Por ley, todo vendedor está sujeto a un descuento del 11% del sueldo bruto. Dados el importe total vendido del mes y la cantidad de hijos en edad escolar, diseñe un programa que determine la comisión, la bonificación, el sueldo bruto, el descuento y el sueldo neto de un vendedor.
//----------------------------------------------------------------
// - Numero de hijos en edad escolar: ¿?
// - Bonificacion: S/. 50 * cada hijo en edad escolar
// - Importe total vendido del mes: ¿?
// - Comisión: 7.5% * Importe total
// - Sueldo bruto: S/ 600 + comision + bonificacion
// - Descuento: 11% * sueldo bruto
// - Sueldo neto: Sueldo bruto - Descuento

// declaracion de variables
    $hijos = $_POST['valor1'];
    $importe = $_POST['valor2'];

    $bonificacion = 50 * $hijos;
    echo "La bonificacion es: S/. ".$bonificacion;
    echo "<br>";
    $comision = $importe * 0.075;
    echo "Comision: S/. ".$comision;
    echo "<br>";
    $sueldoBruto = 600 + $comision + $bonificacion;
    echo "Sueldo bruto: S/. ".$sueldoBruto;
    echo "<br>";
    $descuento = 0.11 * $sueldoBruto;
    echo "Descuento: S/. ".$descuento;
    echo "<br>";
    $sueldoNeto = $sueldoBruto - $descuento;
    echo "Sueldo neto: S/. ".$sueldoNeto;
?>



