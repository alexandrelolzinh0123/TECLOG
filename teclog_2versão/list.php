<?php  
require_once 'config.php';


$sql = 'SELECT descricao, quantidade_atual, preco_por_caixa, demanda, created, modified FROM gestao order by created;'



    foreach ($connect->query($sql) as $row) {
       echo "<table>"; 
        echo "<td>".print $row['descricao'] . "\t"."</td>";
        echo "<td>".$row['quantidade_atual'] . "\t".</td>;
        echo "<td>".$row['preco_por_caixa'] . "\n"."</td>";
        echo "<td>".$row['demanda'] . "\n"."</td>";
        echo "<td>".$row['created'] . "\n"."</td>";
        echo "<td>".$row['modified'] . "\n"."</td>";
       echo "</table>";
    }



?>