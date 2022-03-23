@extends('layouts.app')
@section('title', ' الجرد')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>جرد المخازن  New</h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
    @component('components.widget', ['class' => 'box-primary', 'title' => 'عمليات الجرد'])
        @can('stocktacking.create')
            @slot('tool')
                <div class="box-tools">

                    @if(auth()->user()->can('assets.edit'))
                        <button type="button" class="btn btn-block btn-primary btn-modal"
                                data-href="{{action('\Modules\Inventory\Http\Controllers\InventoryController@create')}}"
                                data-container=".div_modal">
                            <i class="fa fa-plus"></i> @lang( 'messages.add' )</button>
                    @endif

                        <a class="btn btn-block btn-primary"
                    href="{{action('\Modules\Inventory\Http\Controllers\StocktackingController@create')}}" >
                    <i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
                 </div>
            @endslot
        @endcan
        @can('stocktacking.view')
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="_table">
                    <thead>
                        <tr>
                            <th>رقم العملية</th>
                            <th>بداية الجرد</th>
                            <th>تاريخ الغلق</th>
                            <th>الحالة</th>
                            <th> الفرع</th>
                            <th>@lang( 'messages.action' )</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions  as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{date('Y-m-d', strtotime($row->transaction_date))}}</td>
                            <td>{{date('Y-m-d', strtotime($row->end_date))}}</td>
                            <td><span class="label bg-light-green @if($row->status=='off') bg-light-red @endif">{{$row->status}}</span></td>
                            <td>{{$row->location_name}}</td>
                            <td>
                                @can('stocktacking.products')
                                    <a href="{{action('\Modules\Inventory\Http\Controllers\StocktackingController@transaction',['id'=>$row->id])}}" class="btn btn-success">جرد</a>
                                @endcan
                                @can('stocktacking.report')
                                    <a href="{{action('\Modules\Inventory\Http\Controllers\StocktackingController@report',['id'=>$row->id])}}" class="btn btn-primary"><i class="fa fa-file"></i>تقرير</a>
                                    <a href="{{action('\Modules\Inventory\Http\Controllers\StocktackingController@report_plus',['id'=>$row->id])}}" class="btn btn-primary"><i class="fa fa-file"></i>تقرير زيادة</a>
                                    <a href="{{action('\Modules\Inventory\Http\Controllers\StocktackingController@report_minus',['id'=>$row->id])}}" class="btn btn-primary"><i class="fa fa-file"></i>تقرير عجز</a>
                                @endcan
                                @can('stocktacking.changeStatus')
                                    @if($row->status=='on')
                                            <button type="button" class="btn btn-danger" onclick="changestatus(0,{{$row->id}})"> <i class="fa fa-lock"> </i> غلق  </button>
                                       @else
                                            <button type="button" class="btn btn-success" onclick="changestatus(0,{{$row->id}})"><i class="fa fa-unlock"></i>   فتح </button>
                                       @endif
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endcan
    @endcomponent

    <div class="modal fade div_modal" tabindex="-1" role="dialog"
    	aria-labelledby="gridSystemModalLabel">
    </div>


</section>
<!-- /.content -->
@stop
@section('javascript')
<script type="text/javascript">
    //Roles table
    $(document).ready( function(){

        
    });
    
    
</script>
@endsection
