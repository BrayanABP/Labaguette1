<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3 class="text-center"><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('id',['Label'=>'ID']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('tdoc',['Label'=>'Documento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('ndocu',['label'=> 'N° de documento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('nombre',['label'=> 'Nombre']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('fnaci',['label'=> 'Fecha de nacimiento']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('correo',['label'=> 'Correo']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('direccion',['label'=> 'Dirección']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('numcont',['label'=> 'N° de Contacto']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('contra',['label'=> 'Contraseña']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('role_id',['label'=> 'Roles']) ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td class="text-center"><?= h($cliente->tdoc) ?></td>
                    <td class="text-center"><?= $this->Number->format($cliente->ndocu) ?></td>
                    <td class="text-center"><?= h($cliente->nombre) ?></td>
                    <td class="text-center"><?= h($cliente->fnaci) ?></td>
                    <td class="text-center"><?= h($cliente->correo) ?></td>
                    <td class="text-center"><?= h($cliente->direccion) ?></td>
                    <td class="text-center"><?= h($cliente->numcont) ?></td>
                    <td class="text-center"><?= $this->Number->format($cliente->contra) ?></td>
                    <td class="text-center"><?= h($cliente->role_id) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Estás seguro de que quieres eliminar este cliente?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</div>

<?php
// Consulta SQL
$SQL = "SELECT clientes.id, clientes.tdoc, clientes.ndocu, clientes.nombre, clientes.fnaci, 
clientes.correo, clientes.direccion, clientes.numcont, clientes.contra, clientes.codigos, 
roles.rol  FROM clientes LEFT JOIN roles ON clientes.role_id = roles.id";

// Asegúrate de tener la conexión establecida antes de ejecutar la consulta
$conectar = mysqli_connect("localhost", "root", "", "baguettedb");
if (!$conectar) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Ejecutar la consulta y manejar errores
$dato = mysqli_query($conectar, $SQL);
if (!$dato) {
    // Si la consulta falla, puedes manejar el error o mostrar un mensaje al usuario
    die("Error en la consulta: " . mysqli_error($conectar));
}

// Continuar con el procesamiento de los resultados
// Por ejemplo, puedes usar un bucle para obtener cada fila del resultado:
while ($fila = mysqli_fetch_assoc($dato)) {
    // Procesar los datos de cada fila
    echo "<tr>";
    echo "<td>{$fila['id']}</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['tdoc']) . "</td>";
    echo "<td class='text-center'>{$fila['ndocu']}</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['nombre']) . "</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['fnaci']) . "</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['correo']) . "</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['direccion']) . "</td>";
    echo "<td class='text-center'>{$fila['numcont']}</td>";
    echo "<td class='text-center'>{$fila['contra']}</td>";
    echo "<td class='text-center'>" . htmlspecialchars($fila['role_id']) . "</td>";
    echo "<td class='actions text-center'>";
    echo $this->Html->link(__('Visualizar'), ['action' => 'view', $fila['id']]);
    echo $this->Html->link(__('Editar'), ['action' => 'edit', $fila['id']]);
    echo $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $fila['id']], ['confirm' => __('Estás seguro de que quieres eliminar este cliente?', $fila['id'])]);
    echo "</td>";
    echo "</tr>";
}

// Si no hay registros en la consulta, mostrar mensaje
if (mysqli_num_rows($dato) <= 0) {
    echo "<tr><td colspan='11'>No se encontraron registros.</td></tr>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conectar);
?>
