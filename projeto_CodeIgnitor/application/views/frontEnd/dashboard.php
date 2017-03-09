<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- custom css -->
<link rel="stylesheet" type="text/css" href="custom/css/dashboard.css">
<div class="coponentCont container">
    <div class="row page-header">
        <div id="titleGame" class="col-xs-12 col-md-8">
            <h2 id="TipoLetra"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h2>
        </div>
        <div class="OpcoesPartidas col-xs-12 col-md-4">
            <button type="button" class="btn btn-default">Criar Partida</button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#EditPart">Editar partida</button>
        </div>
    </div>
    <!-- tabela historico -->
    <div class="TabelaJogos">
        <table id="jogos" class="table table-striped">
            <thead>
                <tr>
                    <th># jogo</th>
                    <th>Nome</th>
                    <th>User</th>
                    <th>Resultado</th>
                    <th>Pontos</th>
                    <th>Mesa</th>
                    <th>Estado</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Game 1</td>
                    <td>John</td>
                    <td>Venceu</td>
                    <td>500 gold</td>
                    <td>6</td>
                    <td>Termindado</td>
                    <td>
                        <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- modal para editar partidas -->
    <div class="modal fade" id="EditPart" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Histórico</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="usersNum">Nº utilizadores</label>
                            <input type="text" class="form-control" id="usersNum">
                        </div>
                        <div class="form-group">
                            <label for="jogosVisiv">Visibilidade</label>
                            <select class="form-control">
                                <option>1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="RemovJogos">Remover</label>
                            <select class="form-control">
                                <option>1</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- modal para visualizaçao -->
    <div class="modal fade" id="VisualPart" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Histórico</h4>
                </div>
                <div class="modal-body">
                    <!-- a fazer -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- custom js -->
<script type="text/javascript" src="custom/js/dashboard.js"></script>