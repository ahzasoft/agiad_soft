@extends('layouts.app')
@section('title',__('assets::lang.assets_titel'))

@section('content')
    <style>
        .table-striped th{
            background-color: #626161;
            color: #ffffff;
        }
    </style>
  {{--  @include('assets::layouts.nav')--}}
    <section class="content-header">
        <h1>@lang('assets::lang.assets_titel')</h1>
    </section>

    <section class="content">
        @component('components.widget', ['class' => 'box-primary'])
            @can('assets.create')
                @slot('tool')
                    <div class="row" >
                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('location_id', __( 'assets::lang.asset_location' ) . ':') !!}
                                {!! Form::select('location_id',$business_locations,null,['class'=>'form-control']) !!}

                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                {!! Form::label('status',__('assets::lang.asset_status')) !!}
                                   <select id="status" name="status" class="form-control" onchange="getdata()">
                                        <option value="-1">@lang('assets::lang.asset_all')</option>
                                        <option value="0">@lang('assets::lang.asset_Existing')</option>
                                        <option value="1">@lang('assets::lang.asset_consumed')</option>
                                        <option value="2">@lang('assets::lang.asset_sold')</option>
                                        <option value="3">@lang('assets::lang.asset_missing')</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                {!! Form::label('notes', __( 'assets::lang.asset_search' ) . ':') !!}
                                <input type="text" class="form-control" id="search" name="search" placeholder="@lang('assets::lang.asset_search')" >
                            </div>
                        </div>
                    </div>
                    <div class="box-tools">


                        @if(auth()->user()->can('assets.edit'))
                        <button type="button" class="btn btn-block btn-primary btn-modal"
                                data-href="{{action('\Modules\Assets\Http\Controllers\AssetsController@create')}}"
                                data-container=".brands_modal">
                            <i class="fa fa-plus"></i> @lang( 'messages.add' )</button>
                        @endif

                    </div>
                @endslot
            @endcan
            @can('assets.view')
                @php
                    $status=array(__('assets::lang.asset_Existing'),__('assets::lang.asset_consumed'),__('assets::lang.asset_sold'),__('assets::lang.asset_missing'));
                 @endphp
                <div class="table-responsive">
                    <table class="table table-bordered table-striped " id="assete_table">
                        <thead>
                        <tr>
                            <th>@lang( 'assets::lang.asset_code' )</th>
                            <th>@lang( 'assets::lang.asset_location' )</th>
                            <th>@lang('assets::lang.asset_quantity')</th>
                            <th>@lang( 'assets::lang.asset_description' )</th>
                            <th>@lang( 'assets::lang.asset_purchasedate')</th>
                            <th>@lang( 'assets::lang.asset_type')</th>
                            <th>@lang( 'assets::lang.asset_consume_rate')</th>
                         {{--   <th>سعر الشراء</th>--}}
                            <th>@lang( 'assets::lang.asset_curentprice')</th>
                            <th>@lang( 'assets::lang.asset_changedate')</th>
                            <th>@lang( 'assets::lang.asset_curentprice')</th>
                            <th>@lang( 'assets::lang.asset_status')</th>
                            <th>@lang( 'assets::lang.asset_notes')</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody  id="datatable">


                       {{-- <tr id="0" >
                            <th colspan="7">الإجمالي : </th>

                            --}}{{--<th>{{$price}}</th>--}}{{--
                           <th>{{$curentprice}}</th>
                            <th></th>
                            <th>{{number_format($total,2)}}</th>
                            <th colspan="3"></th>


                        </tr>--}}
                        </tbody>

                    </table>
                </div>


            @endcan
        @endcomponent



    </section>

    <div class="modal fade brands_modal" tabindex="-1" role="dialog"
         aria-labelledby="gridSystemModalLabel">
    </div>
@endsection


@section('javascript')
<script>


        getdata();


$('#search').on('keyup',function () {
     getdata();
});
    function getdata(){
         var location_id=$('#location_id').val();
         var status=$('#status').val();
         var search=$('#search').val();

        $.ajax({
            url: '/assets/assets',
            type:'GET',
            data:{
                location_id:location_id
                ,status:status
                ,search:search
            },
            success: function(result) {
                 $('#datatable').html(result);
            },
             error: function (data) {
            // Something went wrong
            // HERE you can handle asynchronously the response

            // Log in the console
            var errors = data.responseJSON;
            console.log(errors);

            // or, what you are trying to achieve
            // render the response via js, pushing the error in your
            // blade page
            errorsHtml = '<div class="alert alert-danger"><ul>';

            $.each(errors.error, function (key, value) {
                errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
            });
            errorsHtml += '</ul></div>';

            $('#form-errors').html(errorsHtml); //appending to a <div id="form-errors"></div> inside form
        }
        });
    }

    $('#location_id').on('change',function () {
     getdata();
    });

    function assetedit(id) {
        $.ajax({
            url: '/assets/assets/'+id+'/edit',
            dataType: 'html',
            success: function(result) {
                $(".brands_modal").html(result)
                    .modal('show');
            },
        });
    }


    function  deleteasset(id) {
        swal({
            title: LANG.sure,
            text: 'هل تريد حذف الأصل',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then(willDelete => {
            if (willDelete) {
                var href = '/assets/assets/'+id;
                var data = id;
                $.ajax({
                    method: 'DELETE',
                    url: href,
                    dataType: 'json',
                    data:{
                        data:data
                    },
                    success: function(result) {
                        if (result.success == true) {
                            toastr.success(result.msg);
                            var drow = document.getElementById(id);
                            drow.parentNode.removeChild(drow);
                        } else {
                            toastr.error(result.msg);
                        }
                    },
                });
            }
        });
    }

</script>

@endsection