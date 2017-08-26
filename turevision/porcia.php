<?php while($row = $resultado -> fetch_array(MYSQL_ASSOC)) { ?>
<tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['nombre'] ?></td>
  <td><?php echo $row['email'] ?></td>
  <td><?php echo $row['telefono'] ?></td>
  <td><a href="modificar.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
  <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id'] ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
</tr>
<?php } ?>
