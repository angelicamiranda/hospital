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
                <form class="container" method="POST" action="{{ route('especialidad.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Añadir Especialidad</h1>
                        <!--end::Title-->
                       
                    </div>
                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../../demo1/dist/assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('../../demo1/dist/assets/media/avatars/blank.svg');"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                           

                            <input type="file" name="imagen" id="imagen" style="" accept="image/*" required
                            multiple>
                        @error('file')
                            <small
                                class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</small>
                        @enderror
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nombre:</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="nombre" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre"  />
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
                                        <input type="text" name="descripcion" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Descripcion"  />
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
