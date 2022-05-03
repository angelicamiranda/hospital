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
                <form class="container" method="POST" action="{{ route('especialista.update', $especialista->id) }}" enctype="multipart/form-data">
                @csrf

                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Añadir Especialidad</h1>
                        <!--end::Title-->
                       
                    </div>
                   
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nombre Del Doctor:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="iddoctor" id="select-room" class="form-control" onchange="habilitar()" >
                                        <option value="{{$especialista->iddoctor}}">{{$especialista->doctor->name}}</option>
                                        @foreach ($doctores as $doctor)

                                            <option value="{{$doctor->id}}">
                
                                               <spam>{{$doctor->name}}</spam>
                
                                            </option>
                
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
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Descripción:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="idespecialidad" id="select-room" class="form-control" onchange="habilitar()" >
                                            <option value="{{$especialista->idespecialidad}}">{{$especialista->especialidad->nombre}}</option>
                    
                                            @foreach ($especialidades as $especialidad)
                    
                                                <option value="{{$especialidad->id}}">
                    
                                                   <spam>{{$especialidad->nombre}}</spam>
                    
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
