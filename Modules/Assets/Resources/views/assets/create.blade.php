<div class="modal-dialog" role="document">
    <div class="modal-content">

        {!! Form::open(['url' => action('\Modules\Assets\Http\Controllers\AssetsController@store'), 'method' => 'post' ]) !!}

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">@lang( 'assets::lang.asset_add' )</h4>
        </div>

        <div class="modal-body">

            <div class="row" style="margin-left: 0px;margin-right: 0px">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('assetcode', __( 'assets::lang.asset_code' ) . ':*') !!}
                        {!! Form::text('assetcode', null, ['class' => 'form-control', 'required' ]); !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('quantity', __( 'assets::lang.asset_quantity' ) . ':*') !!}
                        {!! Form::text('quantity', null, ['class' => 'form-control', 'required' ]); !!}
                    </div>
                </div>
            </div>




            <div class="form-group">
                {!! Form::label('description', __( 'assets::lang.asset_description' ) . ':') !!}
                {!! Form::text('description', null, ['class' => 'form-control', 'required' ]); !!}
            </div>

            <div class="form-group">
                {!! Form::label('location_id', __( 'assets::lang.asset_location' ) . ':') !!}
                {!! Form::select('location_id',$business_locations,null,['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('purchasedate', __('assets::lang.asset_purchasedate') . ':') !!}
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    {!! Form::text('purchasedate', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control date-picker', 'readonly', 'required' ]); !!}
                </div>
            </div>

            <div class="row" style="margin-right: 0px;margin-left: 0px">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('type',__('assets::lang.asset_type')) !!}
                        <div class="input-group">
                            <select id="type" name="type" class="form-control">
                                <option value="-1">@lang('assets::lang.asset_type_consumed')</option>
                                <option value="1">@lang('assets::lang.asset_type_up')</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('consume_rate', __( 'assets::lang.asset_consume_rate' ) . ' : ') !!}
                        {!! Form::text('consume_rate', null, ['class' => 'form-control', 'required' ,'style'=>'max-width:90%;']); !!}
                    </div>
                </div>
            </div>


            <div class="row" style="margin-right: 0px">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('price', __( 'assets::lang.asset_price' ) . ':') !!}
                        {!! Form::text('price', null, ['class' => 'form-control', 'required']); !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('curentprice', __( 'assets::lang.asset_curentprice' ) . ':') !!}
                        {!! Form::text('curentprice', null, ['class' => 'form-control', 'required' ]); !!}
                    </div>
                </div>
            </div>




            <div class="form-group">
                {!! Form::label('changedate', __('assets::lang.asset_changedate') . ':') !!}
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>

                    {!! Form::text('changedate', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control date-picker', 'readonly']); !!}
                </div>
            </div>


            <div class="form-group " style="display: none;">
                {!! Form::label('status',__('assets::lang.asset_status')) !!}
                <div class="input-group">
                    <select id="status" name="status" class="form-control">
                        <option value="0">@lang('assets::lang.asset_Existing')</option>
                        <option value="1">@lang('assets::lang.asset_consumed')</option>
                        <option value="2">@lang('assets::lang.asset_sold')</option>
                        <option value="3">@lang('assets::lang.asset_missing')</option>
                    </select>

                </div>
            </div>


            <div class="form-group">
                {!! Form::label('notes', __( 'assets::lang.asset_notes' ) . ':') !!}
                {!! Form::text('notes',null, ['class' => 'form-control',]); !!}
            </div>

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
        </div>

        {!! Form::close() !!}

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<script>
    $('.date-picker').datepicker({
        autoclose: true,
        endDate: 'today',
        format:'yyyy-m-d',
    });
</script>