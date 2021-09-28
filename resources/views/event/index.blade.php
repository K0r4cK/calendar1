@extends('layouts.app')
@section('content')

<div class="container">
    <div id="calendar"></div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#event">
    Launch
</button>

<!-- Modal -->
<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            
            <div class="modal-body">
                <form action="">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="start">start</label>
                    <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="end">end</label>
                    <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <!--IMPORTANTE: Sala reveer asignacion de hoararios-->
                <div class="form-group">
                    <label for="saloon">Sala</label>
                    <input type="text" class="form-control" name="saloon" id="saloon" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="file">Expediente</label>
                    <input type="text" class="form-control" name="file" id="file" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="applicant">Solicitante</label>
                    <input type="text" class="form-control" name="applicant" id="applicant" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                
<!--hora-->
                <div class="form-group">
                    <label for="crime">Delito</label>
                    <input type="text" class="form-control" name="crime" id="crime" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="trial">Tipo de Audiencia</label>
                    <input type="text" class="form-control" name="trial" id="trial" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="judge">Juez</label>
                    <input type="text" class="form-control" name="judge" id="judge" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="fiscal">Fiscal</label>
                    <input type="text" class="form-control" name="fiscal" id="fiscal" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="defender">Defensor</label>
                    <input type="text" class="form-control" name="defender" id="defender" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                    <label for="secretary">Secretario</label>
                    <input type="text" class="form-control" name="secretary" id="secretary" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" id="btnSave">Guardar</button>
                    <button type="button" class="btn btn-dark" id="btnModify">Modificar</button>
                    <button type="button" class="btn btn-dark" id="btnDelete">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection