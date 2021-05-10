@extends('layout.base')


@section('subheader')
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Mobile Toggle-->
            <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                <span></span>
            </button>
            <!--end::Mobile Toggle-->
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">Profile de {{ $commercial->name }}</h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Actions-->
            <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Voir tous les commerciaux</a>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
@endsection


@section('content')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile 2-->
            <div class="d-flex flex-row" data-sticky-container>
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px sticky" data-sticky="true" data-margin-top="140" data-sticky-for="1023" data-sticky-class="stickyjs" id="kt_profile_aside">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Body-->
                        <div class="card-body pt-15">
                            <!--begin::User-->
                            <div class="text-center mb-10">
                                <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                    {{-- <div class="symbol-label" style="background-image:url('/assets/media/users/300_21.jpg')"></div> --}}
                                    <div class="symbol-label" style="background-image:url('{{ $commercial->imagePath }}')"></div>
                                    {{-- <i class="symbol-badge symbol-badge-bottom bg-success"></i> --}}
                                </div>
                                <h4 class="font-weight-bold my-2">{{ $commercial->name }} {{ $commercial->prenom }}</h4>
                                {{-- <div class="text-muted mb-2">Application Developer</div> --}}
                                <span class="label label-light-warning label-inline font-weight-bold label-lg">Compte Active</span>
                            </div>
                            <!--end::User-->
                            <!--begin::Nav-->
                            <a href="{{ route('commerciaux.edit',['id'=>$commercial->id]) }}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Modifier les informations</a>
                            <button class="btn btn-hover-light-warning font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Désactivé le compte</button>
                            <button class="btn btn-hover-light-danger font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Supprimer le compte</button>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Aside-->
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!--begin::List Widget 10-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title font-weight-bolder text-dark">Message(s) échanger</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 scroll scroll-pull" data-scroll="true" data-wheel-propagation="true" style="height: 200px">
                                    <div class="messages">
                                        <!--begin::Message In-->
                                        <div class="d-flex flex-column mb-5 align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40 mr-3">
                                                    <img alt="Pic" src="/assets/media/users/300_12.jpg" />
                                                </div>
                                                <div>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">{{ $commercial->name }}</a>
                                                    <span class="text-muted font-size-sm">date</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">message agent</div>
                                        </div>
                                        <!--end::Message In-->
                                        <!--begin::Message Out-->
                                        <div class="d-flex flex-column mb-5 align-items-end">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-muted font-size-sm">Date</span>
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Admin</a>
                                                </div>
                                                <div class="symbol symbol-circle symbol-40 ml-3">
                                                    <img alt="admin photo" src="/assets/media/users/blank.png" />
                                                </div>
                                            </div>
                                            <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                Message de Admin
                                            </div>
                                        </div>
                                        <!--end::Message Out-->
                                    </div>
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end: Card-->
                            <!--end: List Widget 10-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Mixed Widget 5-->
                            <div class="card card-custom bg-radial-gradient-primary card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title font-weight-bolder text-white">Statistique des ventes</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column p-0">
                                    <!--begin::Chart-->
                                    <div id="kt_mixed_widget_5_chart" style="height: 200px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-spacer bg-white card-rounded flex-grow-1">
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col px-8 py-6 mr-8">
                                                <div class="font-size-sm text-muted font-weight-bold">Nombre de vente</div>
                                                <div class="font-size-h4 font-weight-bolder">650</div>
                                            </div>
                                            <div class="col px-8 py-6">
                                                <div class="font-size-sm text-muted font-weight-bold">Commission de vente</div>
                                                <div class="font-size-h4 font-weight-bolder">500 XAF</div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col px-8 py-6 mr-8">
                                                <div class="font-size-sm text-muted font-weight-bold">Point de vente repertorié</div>
                                                <div class="font-size-h4 font-weight-bolder">29</div>
                                            </div>
                                            {{-- <div class="col px-8 py-6">
                                                <div class="font-size-sm text-muted font-weight-bold">Annual Income</div>
                                                <div class="font-size-h4 font-weight-bolder">$1,480,00</div>
                                            </div> --}}
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 5-->
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Advance Table Widget 5-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Stats des ventes</span>
                            </h3>
                            {{-- <div class="card-toolbar">
                                <a href="#" class="btn btn-info font-weight-bolder font-size-sm">New Report</a>
                            </div> --}}
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                                    <thead>
                                        <tr class="text-uppercase">
                                            
                                            <th class="pl-0" style="min-width: 100px">order vente</th>
                                            <th style="min-width: 120px">point de vente</th>
                                            <th style="min-width: 150px">
                                                <span class="text-primary">Date</span>
                                            </th>
                                            <th style="min-width: 150px">Produit</th>
                                            <th style="min-width: 130px">Qté</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0">
                                                <span class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">05/28/2020</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                            </td>
                                            <td>
                                                <span class="label label-lg label-light-primary label-inline">32</span>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 5-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile 2-->
        </div>
        <!--end::Container-->
    </div>

@endsection


@section('script')
@endsection