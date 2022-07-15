@extends('DashboardAdmin.templates.master')
@section('title', 'Entrar')
@section('content')

@include('DashboardAdmin.includes.header')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 table_v1">
                <div class="row table_one">
                    <div class="row seach_table tb_space">
                        <div class="col-lg-6 mauto left">
                            <p>Cadastrar Partidas</p>
                        </div>
                        <div class="col-lg-2 btn01">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal_v2">Cadastrar
                            Partida</button>
                        </div>
                        <div class="col-lg-4">
                            <form class="row" action="{{ route('admin.ticket.search') }}" method="get">
                                @csrf
                                <input type="text" class="col-lg-8" placeholder="Pesquisar Bilhete..." name="ticket_id">
                                <button class="col">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="table_one_inter table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Cms Partida</th>
                                    <th scope="col">Bilhete</th>
                                    <th scope="col">Data Inicial</th>
                                    <th scope="col">Data Final</th>
                                    <th scope="col">Valor do Bilhete</th>
                                    <th scope="col">Times Participando</th>
                                    <th scope="col">Ação</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Opção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <th scope="row">{{ $ticket->id }}</th>
                                    <td>{{ $ticket->cms }}</td>
                                    <td>{{ $ticket->id }}</td>
                                    <td>{{ $ticket->initial_date}}</td>
                                    <td>{{ $ticket->final_date }}</td>
                                    <td>R${{ $ticket->price }}</td>
                                    <td><a href="" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modal_v3_{{$loop->index}}">Editar</a></td>
                                        <td><a href="" type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal_v4_{{$loop->index}}">Editar</a></td>
                                            <td><span>
                                                @if ( $ticket->status == "pedding" ) 
                                                Em adamento
                                                @elseif($ticket->status == "finished")
                                                Finalizado
                                                @endif
                                            </span></td>
                                            <td><form action="{{ route('admin.ticket.destroy', ['ticket_id' => $ticket->id]) }}" method="post">
                                                @method('Delete')
                                                @csrf
                                                <button class="badge bg-danger"
                                                style="color: #fff; cursor: pointer;">Apagar</button></form></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 login_footer">
                            <p>Copyright ©2022 betfair </p>
                        </div>

                    </div>
                </div>
            </section>


            <!-- MODAL V1 -->
            <div class="modal fade" id="modal_v2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal_v2">
                                <h2>Cadastar Bilhete</h2>
                            </div>
                            <form action="{{ route('admin.ticket.store') }}" method="post">
                                @csrf

                                <div id="ticket" class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Data Inicial" name="initial_date"
                                        data-mask="00/00/0000">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Data Final" name="final_date"
                                        data-mask="00/00/0000">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Hora Inicial" name="initial_time"
                                        value="00:00"data-mask="00:00">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Horal Final" name="final_time" value="00:00"
                                        data-mask="00:00">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Premiação" name="price" data-mask="#,##0.00"
                                        data-mask-reverse="true" value="0.00">
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Comissão" name="cms" data-mask="#.##0,00%"
                                        data-mask-reverse="true" value="0%">
                                    </div>
                                    <h5>Partidas</h5>
                                    <input type="hidden" value='1' id="num_match" name="num_match">
                                    <input type="hidden" value='pedding' name="status">

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Time 01" name="team_one_1" required>
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Time 02" name="team_two_1" required>
                                    </div>
                                </div>

                                <button id="addteam" class="btn02">Adicionar +Partidas</button>
                                <button>Cadastrar Bilhete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($tickets as $ticket)
            <!-- MODAL V2 -->
            <div class="modal fade" id="modal_v3_{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal_v2">
                                <h2>Times Participantes</h2>
                            </div>
                            <div class="row">
                                @foreach($matches as $match)
                                @if ($match->ticket_id == $ticket->id)
                                <div class="col-lg-6">
                                    <input type="text" value="{{$match->team_one}}"name="team_one_{{$loop->index+1}}">
                                </div>

                                <div class="col-lg-6">
                                    <input type="text" value="{{$match->team_two}}" name="team_two_{{$loop->index+1}}">
                                </div>
                                <hr>
                                @endif
                                @endforeach
                                <button>Salvar Edição</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL V3 -->
            <div class="modal fade" id="modal_v4_{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal_v2">
                                <h2>Encerrar Partida</h2>
                            </div>
                            <div class="row">
                                <form>
                                    <button>Encerrar Partida</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title white" id="myModalLabel120">Apagar serviço</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        Você realmente deseja apagar esse serviço? <br>
                        <b>Todas as compras vinculadas a ele serão deletadas</b>.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Fechar</span>
                        </button>
                        <form id="formDelete" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Apagar</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#addteam").click(function(e) {
                e.preventDefault()
                $("#num_match").val((i, cur) => {
                    return parseInt(cur) + 1;
                })
                $("#ticket").
                append("<div class='col-lg-6'><input type='text' placeholder='Time 01' name='team_one_" +
                    $("#num_match").val() +
                    "'required></div>"+
                    "<div class='col-lg-6'><input type='text' placeholder='Time 02' name='team_two_" + 
                    $("#num_match").val() +
                    "'required></div>")
            })
        </script>
        @endsection
