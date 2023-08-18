<?php include('../controllers/inic_sesion.php'); ?>
<?php include('../controllers/conexion.php'); ?>
<?php include('../layouts/header.php'); ?>
<?php include('../controllers/arrays_estandar.php'); ?>
<?php include('../controllers/proyecto_usuarios.php'); ?>
<title>Agregar proyectos</title>


<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed">
    <div class="content-wrapper" style="background: url(../img/norma1.jpg) no-repeat; background-size: 100% 100%;">
        <div class="container-fluid justify-content-center align-items-center">
            <div class="container-fluid justify-content-start py-3">
                <?php include '../controllers/alertas.php' ?>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Agregar estrategia a proyecto</h3>
                            </div>
                            <form class="edit_form" method="post" id="formulario_estrategia">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Proyectos</label>
                                        <select class="select2" name="proyectos[]" multiple="multiple" data-placeholder="Seleccione proyecto" style="width: 100%;" autofocus required>
                                            <?php foreach ($totproyect as $totpro) {
                                                echo "<option value='" . $totpro["id_proyecto"] . "'>" . $totpro["nombre_proyecto"] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Valor del proyecto para el domino</label>
                                        <select class="form-control" name="valor_proyecto" autofocus required>
                                            <option value="0" disabled selected hidden>Seleccione</option>
                                            <option value="1">Bajo</option>
                                            <option value="3">Medio</option>
                                            <option value="5">Alto</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Dominios BT</label>
                                        <textarea class="form-control" id="txt_folderjsondata" hidden><?= json_encode($combined_array) ?></textarea>
                                        <div id="folder_jstree"></div>
                                        <input type="hidden" class="form-control" id="selected_values" name="valores_estrategia">
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center align-items-center text-center">
                                    <button type="submit" class="btn btn-primary" id="btnAgregar">Agregar</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once '../layouts/plugins.php';?>
<script>
     $(function() {
        //Initialize Select2 Elements
        $('.select2').select2();
        //Bootstrap Duallistbox
    });
    $(document).ready(function() {
        const folder_jsondata = JSON.parse($('#txt_folderjsondata').val());

        $('#folder_jstree').jstree({
            'core': {
                'data': folder_jsondata,
                'multiple': true
            },
            'checkbox': {
                three_state: false,
                cascade: 'up'
            },
            'plugins': ["checkbox"]
        }).on('changed.jstree', function(e, data) {

            // Obtener los nodos seleccionados y sus padres
            var selectedNodes = data.selected;
            var parents = [];
            $.each(selectedNodes, function(index, nodeId) {
                var node = data.instance.get_node(nodeId);
                if (node.parents.length > 0) {
                    parents = parents.concat(node.parents);
                }
            });

            // Marcar los padres seleccionados
            $.each(parents, function(index, parentId) {
                data.instance.check_node(parentId);
            });
        });
        // Manejar el evento de clic en el botón "Agregar"
        $('#btnAgregar').click(function() {
            // Obtener los nodos seleccionados
            const selectedNodes = $('#folder_jstree').jstree('get_checked', true);

            // Recorrer los nodos seleccionados y obtener los valores necesarios
            const selectedValues = selectedNodes.map(function(node) {
                // Obtener los datos adicionales del array $combined_array
                const padreId = node.original.padre_id;
                const hijoId = node.original.hijo_id;
                const nietoId = node.original.nieto_id;

                // Verificar si existe un padre, de lo contrario usar el hijo o el nieto como valor padre
                const selectedPadreId = padreId || hijoId || nietoId;

                return {
                    id: node.id,
                    nombre: node.text,
                    nivel: node.original.nivel,
                    padre_id: selectedPadreId,
                    hijo_id: hijoId,
                    nieto_id: nietoId
                };
            });

            // Ordenar los valores por nivel (0, 1, 2)
            selectedValues.sort(function(a, b) {
                return a.nivel - b.nivel;
            });

            // Convertir el arreglo ordenado a JSON
            const selectedValuesJSON = JSON.stringify(selectedValues);

            // Asignar los valores al campo de formulario oculto
            $('#selected_values').val(selectedValuesJSON);

            // Realizar una solicitud AJAX para enviar los datos al servidor
            $.ajax({
                url: '../controllers/edit_estra_pro.php', // Reemplaza '../controllers/proyecto_inf.php' con la URL correcta de tu script PHP
                method: 'POST',
                data: $('#formulario_estrategia').serialize(),
                success: function(response) {
                    // Manejar la respuesta del servidor si es necesario
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Manejar los errores de la solicitud AJAX si es necesario
                    console.error(error);
                }
            });
        });
       
    });
    // Manejar el evento de clic en el botón "Editar"
</script>
<?php include '../layouts/footer.php'; ?>