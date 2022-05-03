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
        <div class="col-md-20">
            <div class="card mb-10 mb-xl-10">
                <div class="containertable">
                    <br>
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Lista de Doctores</h1>
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
                           
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Añadir Doctor</button>
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
                                            <h2 class="fw-bolder">Add User</h2>
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
                                            <form id="kt_modal_add_user_form" class="form" method="POST"  action="{{ route('users.doctor.store') }}"
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
                                                        <!--end::Image input-->
                                                        <!--begin::Hint-->
                                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                        <!--end::Hint-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Nombre Completo</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nombre Completo" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Carnet de Identidad</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="ci" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Carnet de identidad" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Consultorio</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="consultorio" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Consultorio" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Numero de Celular</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="telefono" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Numero de Celular" value="" />
                                                        <!--end::Input-->
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
                
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <table class="newtable">
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                       
                                        <th class="ps-4 min-w-225px rounded-start">Nombre</th>
                                        <th class="min-w-125px">Celular</th>
                        
                                        <th class="min-w-125px">Carnet de Identidad</th>
                                        <th class="min-w-125px">Consultorio</th>
                                        <th class="min-w-125px">Tipo</th>
                                      
                                        <th class="min-w-125px">Opciones</th>
                                    </tr>
                                      
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                       @if ($user->tipo == 'doctor')
                                                <tr>
                                                    
                                                    <td><div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                @if ($user->foto == null)
                                                                <img src="{{asset('../../demo1/dist/assets/media/svg/avatars/blank.svg')}}" alt="" class="w-100">
                                                              
                                                               @endif
                                                               @if ($user->foto != null)
                                                                  <img src="{{asset('/imagenes/'.$user->foto)}}" alt="" class="w-100">
                                                                @endif
                                                            
                                                               
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">{{($user->name == null)? "--": $user->name}}</a>
                                                        <span>{{($user->email == null)? "--": $user->email}}</span>
                                                    </div></td>
                                            
                                                    <td>{{($user->telefono == null)? "--": $user->telefono}}</td>
                                               
                                                    <td>{{($user->ci == null)? "--": $user->ci}}</td>
                                                    <td>{{($user->consultorio == null)? "--": $user->consultorio}}</td>
                                                    <td>
                                                        @if ($user->tipo == 'doctor')
                                                            <span class="badge badge-light-success fs-7 fw-bold">{{($user->tipo == null)? "--": "Doctor"}}</span>
                                                    
                                                        @endif
                                                    
                                                    </td>
                                                    
                                                
                                            
                
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
                                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
                                                            </svg></span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="{{route('users.doctor.edit', $user->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>

                                                        <form action="{{route('users.doctor.delete', $user->id)}}" method="POST" style="display: inline-block" onsubmit="return confirm('seguro?')">
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
                                                        <a href="{{route('users.paciente.edit', $user->id)}}" style="display: inline-block"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs011.svg-->
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M3 13V11C3 10.4 3.4 10 4 10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14H4C3.4 14 3 13.6 3 13Z" fill="black"/>
                                                            <path d="M13 21H11C10.4 21 10 20.6 10 20V4C10 3.4 10.4 3 11 3H13C13.6 3 14 3.4 14 4V20C14 20.6 13.6 21 13 21Z" fill="black"/>
                                                            </svg></span>
                                                            <!--end::Svg Icon-->
                                                            
                                                        </a>
                                                    
                                                    </td>
                                               </tr>
                                        @endif
                                             
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
