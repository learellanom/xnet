@extends('layouts.app')

@section('template_title')
    Nota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="myTable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Userid</th>
										<th>Departamento</th>
										<th>Descripcion</th>
										<th>Clientepersona</th>
										<th>Empresa</th>
										<th>Telefonocontacto</th>
										<th>Estado</th>
										<th>Observaciones</th>
                                        <!--
										<th>Fechacrea</th>
										<th>Fechaguarda</th>
										<th>Fechaelimina</th>
										<th>Fechareactiva</th>
                                            -->
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        @php
                                        switch($nota->estado){
                                            case('Pendiente'):
                                                $color="color: blue;";
                                                break;
                                            case('En proceso'):
                                                $color="color: orange;";
                                                break;
                                            case('Terminado'):
                                                $color="color: green;";
                                                break;
                                            case('Eliminada'):
                                                $color="color: red;";
                                                break;
                                            default:
                                                $color="";
                                        }
                                        //dd($color);
                                        @endphp
                                        <tr style="{{$color}}">
                                            <!-- <td style="{{$color}}">{{ ++$i }}</td> -->
                                            <td style="{{$color}}">{{ $nota->id }}</td>                                            
											<td style="{{$color}}">{{ $nota->userId }}</td>
											<td style="{{$color}}">{{ $nota->departamento }}</td>
											<td style="{{$color}}">{{ $nota->descripcion }}</td>
											<td style="{{$color}}">{{ $nota->clientePersona }}</td>
											<td style="{{$color}}">{{ $nota->empresa }}</td>
											<td style="{{$color}}">{{ $nota->telefonoContacto }}</td>
											<td style="{{$color}}">{{ $nota->estado }}</td>
											<td style="{{$color}}">{{ substr($nota->observaciones,10) }}</td>
                                            <!--
											<td>{{ $nota->fechaCrea }}</td>
											<td>{{ $nota->fechaGuarda }}</td>
											<td>{{ $nota->fechaElimina }}</td>
											<td>{{ $nota->fechaReactiva }}</td>
                                            -->
                                            <td>
                                                <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                                    @php
                                                        // dd(auth()->user()->departamento);
                                                    @endphp
                                                    @if(auth()->user()->departamento = $nota->departamento)
                                                    <a 
                                                        class="btn btn-sm btn-primary " 
                                                        href="{{ route('notas.show',$nota->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                    </a>
                                                    @endif
                                                    <a class="btn btn-sm btn-success" href="{{ route('notas.edit',$nota->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $notas->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </Script>
@endsection
