@extends ('layouts.asset')
@section ('style')
@endsection
@section('content')

<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Panel <span class="fw-300"><i>Title</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a class="btn btn-xs btn-primary mr-1 ml-1" href="/asset"><i class="fal fa-undo mr-1"></i>Back</a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form method="post" action="/asset/store">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="form-label" for="inventNum">Item Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="inventnum" id="inventNum" class="form-control" placeholder="Name of the Asset" aria-label="Asset Name" aria-describedby="inventNum">
                                    </div>
                                    @if ($errors->has('inventnum'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('inventnum')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="assetName">Asset Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="item" id="assetName" class="form-control" placeholder="Name of the Asset" aria-label="Asset Name" aria-describedby="assetName">
                                    </div>
                                    @if ($errors->has('item'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('item')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemCategory">Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <select type="text" name="category" id="itemCategory" class="form-control" placeholder="Category" aria-label="Item Category" aria-describedby="itemCategory">
                                            <option hidden>- pilih</option>
                                            <option>Gedung/Bangunan</option>
                                            <option>Tanah</option>
                                            <option>Kendaraan</option>
                                            <option>Furnitur</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('category'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('category')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemCondition">Condition</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <select type="text" name="condition" id="itemCondition" class="form-control" placeholder="Condition" aria-label="Asset Condition" aria-describedby="itemCondition">
                                            <option>Baru</option>
                                            <option>Baik</option>
                                            <option>Rusak</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('condition'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('condition')}}
                                    </div>

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="assetLocation">Asset Location</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="location" id="assetLocation" class="form-control" placeholder="Current location of the Asset" aria-label="Asset Location" aria-describedby="assetLocation">
                                    </div>
                                    @if ($errors->has('location'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('location')}}
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5 border-left">
                                <div class="mb-3 col-12">
                                    <img src="/img/card-backgrounds/cover-1-lg.png" width="100%" height="100%" class="mb-2">
                                    <a class="btn btn-block btn-sm btn-primary mr-1 ml-1" href="javascript:void(0)"><i class="fal fa-save mr-1"></i>Save/Change Picture</a>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemName">Prepend</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <textarea type="text" id="itemName" class="form-control" placeholder="Name of the item" aria-label="Username" aria-describedby="itemName" rows="3"></textarea>
                                    </div>
                                    <span class="help-block">Some help content goes here</span>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fal fa-save fa-fw"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->

@section('scripts')

<script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/datagrid/datatables/datatables.export.js') }}"></script>
<script>
    $(document).ready(function() {

        // initialize datatable
        $('#inventoryList').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ],
            dom:
                /*	--- Layout Structure 
                	--- Options
                	l	-	length changing input control
                	f	-	filtering input
                	t	-	The table!
                	i	-	Table information summary
                	p	-	pagination control
                	r	-	processing display element
                	B	-	buttons
                	R	-	ColReorder
                	S	-	Select

                	--- Markup
                	< and >				- div element
                	<"class" and >		- div with a class
                	<"#id" and >		- div with an ID
                	<"#id.class" and >	- div with an ID and a class

                	--- Further reading
                	https://datatables.net/reference/option/dom
                	--------------------------------------
                 */
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'colvis',
                    text: 'Visibility',
                    titleAttr: 'Col visibility',
                    className: 'btn-outline-info btn-xs mr-sm-3 ml-5'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-xs mr-1'
                },
                /*{
                	extend: 'csvHtml5',
                	text: 'CSV',
                	titleAttr: 'Generate CSV',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                /*{
                	extend: 'copyHtml5',
                	text: 'Copy',
                	titleAttr: 'Copy to clipboard',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-xs'
                },
                {
                    extend: 'setting',
                    text: 'New Asset',
                    titleAttr: 'New Assets',
                    className: 'btn-outline-primary btn-xs'
                }
            ]
        });

    });
</script>
@endsection