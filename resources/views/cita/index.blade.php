@extends('layouts.app')
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
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
                        <h1 class="text-dark mb-3">Lista de Citas Médicas</h1>
                        <!--end::Title-->
                       
                    </div>
               
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                              @if (Auth::user()->tipo == 'doctor')
                              <!--begin::Add user-->
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                              <span class="svg-icon svg-icon-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                      <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                      <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                  </svg>
                              </span>
                              <!--end::Svg Icon-->Añadir Cita</button>
                              @endif
                             
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
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
                                            <h2 class="fw-bolder">Nueva Cita</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                                            <form id="kt_modal_add_user_form" class="form" method="POST"  action="{{ route('especialidad.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="d-block fw-bold fs-6 mb-5">Foto</label>
                                                        <!--end::Label-->
                                                        <!--begin::Image input-->
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
                                                        <!--end::Image input-->
                                                        <!--begin::Hint-->
                                                       
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Nombre</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="nombre" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Descripción</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="descripcion" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Descripción" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                   
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                                        <th class="min-w-125px">Nombre del Doctor</th>
                                        <th class="min-w-125px">Especialidad</th>
                                        <th class="min-w-125px">Fecha</th>
                                 
                                        <th class="min-w-125px">Opciones</th>
                                    </tr>
                                      
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                       
                                                <tr>
                                                    @if (Auth::user()->tipo == 'paciente' && Auth::user()->id == $cita->idpaciente)
                                                      
                                                    <td>{{($cita->idpaciente == null)? "--": $cita->paciente->name}}</td>
                                                    <td>{{($cita->idespecialista == null)? "--": $cita->especialista->doctor->name}}</td> 
                                                    <td>{{($cita->idespecialista == null)? "--": $cita->especialista->especialidad->nombre}}</td>
                                                    <td>{{($cita->fecha == null)? "--": $cita->fecha}}</td>
                                                  @endif
                                                   
                                                    
                                                   @if (Auth::user()->tipo == 'doctor')
                                                   <td>{{($cita->idpaciente == null)? "--": $cita->paciente->name}}</td>
                                                   <td>{{($cita->idespecialista == null)? "--": $cita->especialista->doctor->name}}</td> 
                                                   <td>{{($cita->idespecialista == null)? "--": $cita->especialista->especialidad->nombre}}</td>
                                                   <td>{{($cita->fecha == null)? "--": $cita->fecha}}</td>
                                                   <td class="text-end">
                                                    <a href="{{route('consulta.create', $cita->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com002.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z" fill="black"/>
                                                        <path d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z" fill="black"/>
                                                        </svg></span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="{{route('consulta.index', $cita->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com010.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"/>
                                                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"/>
                                                        </svg></span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="{{route('cita.edit', $cita->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                  
                                                    <form action="{{route('especialidad.delete', $cita->id)}}" method="POST" style="display: inline-block" onsubmit="return confirm('seguro?')">
                                                        @csrf
                                                    <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" type="submit">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
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
