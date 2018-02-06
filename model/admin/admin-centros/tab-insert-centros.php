<?php ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Añadir centros</h4>
                <p class="category">Completa los campos</p>
            </div>
            <div class="card-content">
                <form id="centros-insert-form">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label">ID</label>
                                <input type="text" class="form-control" value="Poner id" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-floating">
                                <label class="control-label">Teléfono</label>
                                <input type="text" name="telefono" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group label-floating">
                                <label class="control-label">Dirección</label>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Municipio</label>
                                <input type="text" name="municipio" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">Provincia</label>
                                <input  list="provincias" name="provincia" class="form-control">
                                <datalist  id="provincias">
                                    <option value="Valencia">
                                    <option value="Castellón">
                                    <option value="Alicante">
                                </datalist>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label class="control-label">País</label>
                                <input type="text" name="pais" value="España" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="assets/img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..." />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                    <i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-info pull-right">Insertar</button>
                </form>
            </div>
        </div>
    </div>
</div>

