@extends('layouts.app')
@if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
@section('title')
<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Añadir una nueva Especialidad
@endsection
@section('content')
<style>
            #imagen{
        display: none;
        }

        .circle{
            border-radius: 10%;
            width: 100px;
            height: 50px;
            background-color: #939fce;
            border-style: solid;
            border-color: #939fbe; 
            text-align: center;
            text-size-adjust: auto;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <br><br><br> 
                <form class="container" method="POST" action="{{ route('cita.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Añadir Especialidad</h1>
                        <!--end::Title-->
                       
                    </div>
                   
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nombre Del Paciente:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="idpaciente" id="select-room" class="form-control" onchange="habilitar()" >
                                        <option value="nulo">Pacientes</option>
                
                                        @foreach ($pacientes as $paciente)
                                            @if (Auth::user()->tipo == 'doctor')
                                            <option value="{{$paciente->id}}">
                                               
                                                <spam>{{$paciente->name}}</spam>
                                    
                                               
                                          
                                            </option>
                                           
                                            @elseif (Auth::user()->id == $paciente->id)
                                            <option value="{{$paciente->id}}">
                                                <spam>{{Auth::user()->name}}</spam>
                                          
                                            </option>
                                            @endif
                                            
                                        @endforeach
                                    </select>
                
                                  
                                </div>
                                <!--end::Col-->
                            </div>
                            <br>
                            <!--end::Row-->
                        </div>
                    </div>   
                    
                    
                     
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Doctor:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="idespecialista" id="select-room" class="form-control" onchange="habilitar()" >
                                            <option value="nulo">Doctor y Especialidad</option>
                    
                                            @foreach ($especialistas as $especialista)
                    
                                                <option value="{{$especialista->id}}">
                    
                                                   <spam>Especialidad :{{$especialista->especialidad->nombre}} - Doctor: {{$especialista->doctor->name}} </spam>
                    
                                                </option>
                    
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <br>
                            </div>
                        </div>    
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nombre Del Paciente:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="datetime-local" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"  name="fecha" id="">
                                      
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <br>
                                <!--end::Row-->
                            </div>
                        </div>   
                    
                    <div class="row mb-6">
                        <!--begin::Label-->
                        
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <button type="submit"  class="btn btn-lg btn-primary w-100 mb-5">
                                    Guardar
                                </button>
            
                           
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <br>
                        </div>
                    </div>    
                
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
