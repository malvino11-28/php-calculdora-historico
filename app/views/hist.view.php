<?php
include 'config.php';
$sql = "SELECT * FROM hist ORDER BY data_criacao DESC LIMIT 10";
$result = $conn->query($sql);

echo '<ul class="list-group list-group-flush">';
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
    echo $row['operacao'] . " = " . "<strong>" . $row['resultado'] . "</strong>";
    echo "</li>";
  }
} else 
  echo "<li class='list-group-item'>Nenhum cálculo</li>";
echo "</ul>";

?>