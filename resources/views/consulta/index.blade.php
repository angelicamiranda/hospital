@extends('layouts.app')

<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href={{ asset('homecss/css/style.css') }}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card mb-5 mb-xl-8">
                    <div class="containertable">
                        <br>
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Lista de Consultas</h1>
                            <!--end::Title-->

                        </div>

                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-user-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                    <!--begin::Add user-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Añadir Consulta
                                    </button>
                                    <!--end::Add user-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-user-table-toolbar="selected">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2"
                                            data-kt-user-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                        data-kt-user-table-select="delete_selected">Delete Selected</button>
                                </div>
                                <!--end::Group actions-->
                                <!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">

                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->
                                <!--begin::Modal - Add task-->
                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder">Nueva Especialidad</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-kt-users-modal-action="close">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_add_user_form" class="form" method="POST" action="{{ route('consulta.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <!--begin::Scroll-->
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
                                                        </div>                             <!--end::Scroll-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center pt-15">
                                                        <button type="reset" class="btn btn-light me-3"
                                                            data-kt-users-modal-action="cancel">Discard</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            data-kt-users-modal-action="submit">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - Add task-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <div class="card-body py-5">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <table class="newtable">
                                    <thead>
                                        <tr class="fw-bolder text-muted bg-light">
                                            <th class="ps-4 min-w-225px rounded-start">Nombre Paciente</th>
                                            <th class="min-w-125px">Peso</th>
                                            <th class="min-w-125px">Estatura</th>
                                            <th class="min-w-125px">Temperatura</th>
                                            <th class="min-w-125px">Presion</th>
                                            <th class="min-w-125px">Descripción</th>

                                            <th class="min-w-125px">Opciones</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($consultas as $consulta)
                                            <tr>
                                                @if ($consulta->idcita == $cita->id)
                                                    
                                               
                                                <td>{{ $consulta->idcita == null ? '--' : $consulta->cita->paciente->name }}
                                                </td>
                                                <td>{{ $consulta->peso == null ? '--' : $consulta->peso }}</td>
                                                <td>{{ $consulta->estatura == null ? '--' : $consulta->estatura }}</td>
                                                <td>{{ $consulta->temperatura == null ? '--' : $consulta->temperatura }}
                                                </td>
                                                <td>{{ $consulta->presion == null ? '--' : $consulta->presion }}</td>
                                                <td>{{ $consulta->tipo == null ? '--' : $consulta->tipo }}</td>
                                                


                                                <td class="text-end">
                                                    <a href="{{ route('analisi.index', $consulta->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/medicine/med007.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M18.937 11.985L12.015 5.06303C11.9228 4.96752 11.8124 4.89131 11.6904 4.8389C11.5684 4.7865 11.4372 4.75888 11.3044 4.75773C11.1716 4.75657 11.04 4.78191 10.9171 4.83219C10.7942 4.88247 10.6825 4.9568 10.5886 5.0507C10.4947 5.14459 10.4205 5.25617 10.3702 5.37907C10.3199 5.50196 10.2946 5.63362 10.2958 5.7664C10.2969 5.89917 10.3245 6.03038 10.3769 6.15238C10.4293 6.27439 10.5055 6.38484 10.601 6.47709L11.293 7.16898L5.693 12.7691C5.50663 12.9552 5.37581 13.1894 5.31522 13.4457C5.25464 13.702 5.26669 13.9702 5.35001 14.22L6.10401 16.4821L2.28901 20.297C2.1935 20.3893 2.11733 20.4996 2.06492 20.6216C2.01251 20.7436 1.98493 20.8748 1.98377 21.0076C1.98262 21.1404 2.00789 21.272 2.05817 21.3949C2.10845 21.5178 2.18273 21.6295 2.27662 21.7234C2.37051 21.8173 2.48215 21.8915 2.60505 21.9418C2.72795 21.9921 2.85963 22.0174 2.99241 22.0163C3.12519 22.0151 3.25642 21.9875 3.37843 21.9351C3.50043 21.8827 3.61076 21.8066 3.70301 21.7111L7.51801 17.896L9.78001 18.6501C10.0298 18.7334 10.298 18.7454 10.5543 18.6849C10.8106 18.6243 11.0449 18.4934 11.231 18.307L16.831 12.7071L17.523 13.3991C17.6153 13.4946 17.7256 13.5707 17.8476 13.6231C17.9696 13.6755 18.1008 13.7031 18.2336 13.7043C18.3664 13.7054 18.4981 13.6801 18.6209 13.6298C18.7438 13.5795 18.8555 13.5053 18.9494 13.4114C19.0433 13.3175 19.1175 13.2059 19.1678 13.083C19.2181 12.9601 19.2434 12.8284 19.2423 12.6956C19.2411 12.5628 19.2135 12.4316 19.1611 12.3096C19.1087 12.1876 19.0325 12.0773 18.937 11.985Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M21.707 7.861C21.5195 8.04847 21.2652 8.15385 21 8.15385C20.7348 8.15385 20.4805 8.04847 20.293 7.861L19.6 7.16898L16.861 9.9091L14.091 7.13908L16.831 4.40006L16.139 3.70707C15.9568 3.51847 15.8561 3.26577 15.8583 3.00358C15.8606 2.74138 15.9658 2.49062 16.1512 2.30521C16.3366 2.11981 16.5874 2.01465 16.8496 2.01237C17.1118 2.01009 17.3644 2.11085 17.553 2.29301L21.707 6.44706C21.8945 6.63459 21.9998 6.88893 21.9998 7.15409C21.9998 7.41925 21.8945 7.67347 21.707 7.861ZM8.00699 15.99L10.084 16.683L12.684 14.0771L9.91501 11.308L7.30899 13.908L8.00699 15.99Z"
                                                                    fill="black" />
                                                            </svg></span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="{{ route('receta.index', $consulta->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/medicine/med002.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M20.284 3.71594C19.7401 3.17193 19.0944 2.74047 18.3837 2.44604C17.673 2.15162 16.9113 2 16.142 2C15.3727 2 14.611 2.15162 13.9003 2.44604C13.1896 2.74047 12.5439 3.17193 12 3.71594L7.858 7.85803L9.272 9.27197L13.414 5.13C13.7714 4.77055 14.1965 4.4856 14.6648 4.29163C15.133 4.09766 15.6351 3.99852 16.142 4C16.4072 4 16.6616 4.10531 16.8491 4.29285C17.0366 4.48038 17.142 4.73478 17.142 5C17.142 5.26522 17.0366 5.51962 16.8491 5.70715C16.6616 5.89469 16.4072 6 16.142 6C15.8979 5.99935 15.6561 6.04713 15.4305 6.1405C15.205 6.23388 15.0002 6.37094 14.828 6.54395L10.686 10.686L16.142 16.142L20.284 12C20.828 11.4561 21.2596 10.8104 21.554 10.0997C21.8484 9.38904 22 8.6273 22 7.85803C22 7.08877 21.8484 6.32702 21.554 5.61633C21.2596 4.90564 20.828 4.25983 20.284 3.71594Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M10.686 10.686L16.142 16.142L12 20.2841C10.8975 21.3635 9.41371 21.9643 7.87082 21.9562C6.32794 21.948 4.85056 21.3315 3.75956 20.2405C2.66856 19.1495 2.05203 17.672 2.04387 16.1292C2.03572 14.5863 2.63659 13.1025 3.716 12L7.858 7.85803L9.272 9.27197L8.972 9.57202C8.87649 9.66427 8.80031 9.7746 8.7479 9.89661C8.69549 10.0186 8.6679 10.1498 8.66675 10.2826C8.66559 10.4154 8.69089 10.547 8.74117 10.6699C8.79146 10.7928 8.86571 10.9045 8.9596 10.9984C9.0535 11.0923 9.16515 11.1665 9.28805 11.2168C9.41094 11.2671 9.54262 11.2924 9.6754 11.2913C9.80818 11.2901 9.9394 11.2625 10.0614 11.2101C10.1834 11.1577 10.2938 11.0815 10.386 10.986L10.686 10.686ZM7.326 14.046L7.895 13.478C7.99063 13.3859 8.06696 13.2756 8.11954 13.1537C8.17211 13.0318 8.19987 12.9006 8.20121 12.7678C8.20255 12.635 8.17743 12.5033 8.12733 12.3804C8.07722 12.2574 8.00312 12.1457 7.90937 12.0516C7.81561 11.9576 7.70407 11.8832 7.58125 11.8328C7.45843 11.7823 7.32679 11.7569 7.19402 11.7578C7.06124 11.7588 6.92999 11.7861 6.80791 11.8384C6.68583 11.8906 6.57538 11.9666 6.483 12.062L5.912 12.632C5.81649 12.7242 5.7403 12.8345 5.68789 12.9565C5.63549 13.0785 5.6079 13.2099 5.60675 13.3427C5.60559 13.4754 5.6309 13.6071 5.68118 13.73C5.73146 13.8529 5.80571 13.9645 5.8996 14.0583C5.9935 14.1522 6.10515 14.2266 6.22804 14.2769C6.35094 14.3271 6.48262 14.3524 6.6154 14.3512C6.74818 14.35 6.8794 14.3226 7.0014 14.2701C7.12341 14.2177 7.23375 14.1415 7.326 14.046Z"
                                                                    fill="black" />
                                                            </svg></span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="{{ route('cita.edit', $consulta->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>

                                                    <form action="{{ route('especialidad.delete', $consulta->id) }}"
                                                        method="POST" style="display: inline-block"
                                                        onsubmit="return confirm('seguro?')">
                                                        @csrf
                                                        <button
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                            type="submit">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </form>

                                                </td>
                                                @endif

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
