@extends('layouts.app')
@if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
@section('title')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Añadir un nuevo Doctor
    @endsection
    @section('content')
        <style>
            #imagen {
                display: none;
            }

            .circle {
                border-radius: 10%;
                width: 100px;
                height: 50px;
                background-color: #fffff;
                border-style: solid;
                border-color: #0077b5;
                text-align: center;
                text-size-adjust: auto;
            }

        </style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <br><br><br>
                        <form class="container" method="POST" id="forms" action="{{ route('users.doctor.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Crear Doctor</h1>
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
                                   

                                    <input type="file" name="foto" id="foto" style="" accept="image/*" required
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
                                <label class="col-lg-4 col-form-label required fw-bold fs-6 ">Nombre Completo:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="name" id="name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Nombre Completo" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <br>
                                    <!--end::Row-->
                                </div>
                            </div>



                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6 ">Carnet de Identidad:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="ci"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Carnet de Identidad" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Nro. Celular:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="telefono"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Numero de Celular" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Nro. de Consultorio:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="consultorio"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Número de Consultorio" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Email:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="email" name="email"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Email" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Password:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row" data-kt-password-meter="true">
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="Password" name="password"
                                                    autocomplete="off" />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                            </div>
                                            <div class="text-muted">Use 8 or more characters with a mix of letters,
                                                numbers &amp; symbols.</div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>

                            <div class="row mb-8">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Confirmar Password:</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row" data-kt-password-meter="true">
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="Confirma Password" name="confirm-password"
                                                    autocomplete="off" />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                            </div>

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>

                          
                            <input type="hidden" name="tipo" value="doctor">


                            <div class="row mb-6">
                                <!--begin::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <button type="submit" id="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Continue</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <br>
                                </div>
                            </div>
                          
                            <script src="../../dist/assets/js/custom/authentication/sign-in/general.js"></script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
