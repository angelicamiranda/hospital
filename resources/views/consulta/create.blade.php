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
<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Añadir una nueva Consulta
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
                <form class="container" method="POST" action="{{ route('consulta.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Añadir Consulta</h1>
                        <!--end::Title-->
                       
                    </div>
                   
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-bold fs-6">Nombre Del Paciente:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <label class="col-lg-4 col-form-label  fw-bold fs-6">{{$cita->paciente->name}}</label>
                                </div>
                                <input type="hidden" name="idcita" value="{{$cita->id}}">
                               
                                <!--end::Col-->
                            </div>
                            <br>
                            <!--end::Row-->
                        </div>
                    </div>   
                    
                    
                     
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Peso:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"  name="peso" id="">
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <br>
                            </div>
                        </div>    
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Temperatura:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"  name="temperatura" id="">
                                      
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <br>
                                <!--end::Row-->
                            </div>
                        </div>   
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Estatura:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="estatura" id="">
                                      
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <br>
                                <!--end::Row-->
                            </div>
                        </div>   
                    
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Presion:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"  name="presion" id="">
                                      
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <br>
                                <!--end::Row-->
                            </div>
                        </div>   
                        
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Descripción o requerimientos:</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"  name="tipo" id="">
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
