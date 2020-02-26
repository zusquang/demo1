@extends('layout.app')

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Packages
                        <small>
                            List packages and details of packages.
                        </small>
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <div class="kt_datatable" id="auto_column_hide"></div>
            <!--end: Datatable -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/datatable.js') }}" type="text/javascript"></script>
@endsection
