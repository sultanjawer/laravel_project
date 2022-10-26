@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    DAFTAR BANTUAN <span class="fw-300 hidden-sm-down"><i>Kegiatan Usaha Tani</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-xs btn-danger mr-1" role="button" data-toggle="modal" data-target=".default-example-modal-right"><i class="fas fa-plus mr-1"></i>Tambah data</button>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="alert alert-info border-0 mb-0">
                <div class="d-flex align-item-center">
                    <div class="alert-icon">
                        <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                            <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                            <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <span>Bagian ini digunakan untuk mencatat/melaporkan data-data bantuan yang diberikan kepada kelompoktani sesuai perjanjian dalam rangka pelaksanaan kegiatan wajib tanam dan produksi.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!-- datatable start -->
                    <table id="dt-locus" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead class="thead-dark">
                            <tr>
                                <th>Tanggal</th>
                                <th hidden>Kategori</th>
                                <th>Jenis</th>
                                <th>Volume</th>
                                <th>sat</th>
                                <th>harga</th>
                                <th>Jumlah</th>
                                <th>Dokumentasi</th>
                                <th>Catatan</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>API Tanggal</td>
                                <td hidden>API Kategori</td>
                                <td>API Jenis</td>
                                <td>API Volume</td>
                                <td>API sat</td>
                                <td>API Harga</td>
                                <td>API Jumlah</td>
                                <td>
                                    <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-example-modal-right"><i class="fas faw fa-file-image"> </i> Foto Kegiatan</a>
                                </td>
                                <td class="truncate-md">API Catatan</td> <!-- shoud be truncate md to fit in mobile screen-->
                                <td class="text-center">
                                    <div class="justify-content-between">
                                        <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-example-modal-right">
                                            <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                        </a>
                                        <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-example-modal-right">
                                            <i class="fas fa-trash text-danger" data-toggle="tooltip" data-offset="0,10" title data-original-title="delete this data (with caution)"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Right -->
    <div class="modal fade default-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-farm text-info"></i> Rekam data Bantuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="datepicker-modal-3">Tanggal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Task date" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal pelaksanaan (penyerahan atau pembelian).</span>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label" for="category">Kategori</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                    <option hidden>- pilih kategori</option>
                                    <option>Barang</option>
                                    <option>Uang</option>
                                </select>
                            </div>
                            <span class="help-block">Kategori bantuan</span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label" for="category">Jenis</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                    <option hidden>- pilih jenis</option>
                                    <option>Uang</option>
                                    <option>Alsintan</option>
                                    <option>Benih</option>
                                    <option>Pupuk</option>
                                    <option>Pengendali</option>
                                    <option>Sarana</option>
                                    <option>Prasarana</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <span class="help-block">Jenis bantuan</span>
                        </div>
                        <div class="form-group col-7">
                            <label class="form-label" for="volume">Volume</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-box-full"></i></span>
                                </div>
                                <input type="number" id="volume" class="form-control" placeholder="volume" aria-label="volume" aria-describedby="volume">
                            </div>
                            <span class="help-block">volume</span>
                        </div>
                        <div class="form-group col-5">
                            <label class="form-label" for="unit">satuan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">abc</span>
                                </div>
                                <input type="text" id="unit" class="form-control" placeholder="unit.." aria-label="unit" aria-describedby="unit">
                            </div>
                            <span class="help-block">satuan barang</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5 col-sm-12">
                            <label class="form-label" for="price">harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" id="price" class="form-control" placeholder="price per unit" aria-label="price per unit" aria-describedby="price">
                            </div>
                            <span class="help-block">harga per satuan barang</span>
                        </div>
                        <div class="form-group col-md-7 col-sm-12">
                            <label class="form-label" for="amount">Total Nilai</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" id="total" class="form-control fw-600" placeholder="autocalculate" aria-label="Total Amount" aria-describedby="amount" disabled>
                            </div>
                            <span class="help-block">Total nilai bantuan</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                        </div>
                        <span class="help-block">Dokumentasi bantuan. Berkas berekstensi jpg atau pdf, dengan maksimum ukuran ... mb (memperhatikan kualitas unggahan).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Rekam</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-farm text-info"></i> Edit Data Bantuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="datepicker-modal-3">Tanggal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Task date" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal pelaksanaan (penyerahan atau pembelian).</span>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label" for="category">Kategori</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                    <option hidden>- pilih kategori</option>
                                    <option>Barang</option>
                                    <option>Uang</option>
                                </select>
                            </div>
                            <span class="help-block">Kategori bantuan</span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label" for="category">Jenis</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                    <option hidden>- pilih jenis</option>
                                    <option>Uang</option>
                                    <option>Alsintan</option>
                                    <option>Benih</option>
                                    <option>Pupuk</option>
                                    <option>Pengendali</option>
                                    <option>Sarana</option>
                                    <option>Prasarana</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <span class="help-block">Jenis bantuan</span>
                        </div>
                        <div class="form-group col-7">
                            <label class="form-label" for="volume">Volume</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-box-full"></i></span>
                                </div>
                                <input type="number" id="volume" class="form-control" placeholder="volume" aria-label="volume" aria-describedby="volume">
                            </div>
                            <span class="help-block">volume</span>
                        </div>
                        <div class="form-group col-5">
                            <label class="form-label" for="unit">satuan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">abc</span>
                                </div>
                                <input type="text" id="unit" class="form-control" placeholder="unit.." aria-label="unit" aria-describedby="unit">
                            </div>
                            <span class="help-block">satuan barang</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5 col-sm-12">
                            <label class="form-label" for="price">harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" id="price" class="form-control" placeholder="price per unit" aria-label="price per unit" aria-describedby="price">
                            </div>
                            <span class="help-block">harga per satuan barang</span>
                        </div>
                        <div class="form-group col-md-7 col-sm-12">
                            <label class="form-label" for="amount">Total Nilai</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" id="total" class="form-control fw-600" placeholder="autocalculate" aria-label="Total Amount" aria-describedby="amount" disabled>
                            </div>
                            <span class="help-block">Total nilai bantuan</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">- pilih berkas...</label>
                        </div>
                        <span class="help-block">Dokumentasi bantuan. Berkas berekstensi jpg atau pdf, dengan maksimum ukuran ... mb (memperhatikan kualitas unggahan).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade delete-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="flex-1">
                            <span class="h3">WARNING!</span>
                            <br>
                            Your current data and all related data will be deleted. Once its deleted, the data cannot be restored. Are you sure want to do this?
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="datepicker-modal-3">Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Task date" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Activity date.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-addon1">Activity</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="basic-addon1" class="form-control" placeholder="Task..." aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <span class="help-block">Activity/Task.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-addon1">Task Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" id="basic-addon1" class="form-control" placeholder="Description" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <span class="help-block">Description.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade foto-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Documentation Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="/img/simet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Encountered Constraint</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. The pictures attachements are in carousel mode.</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-expand"></i> Enlarge picture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{ asset('/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#dt-locus').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [0, 'desc']
            ],
            rowGroup: {
                dataSrc: 1
            }
        });
    });
</script>
<script>
    // Class definition

    var controls = {
        leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
        rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
    }

    var runDatePicker = function() {

        // minimum setup
        $('#datepicker-1').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls
        });


        // input group layout 
        $('#datepicker-2').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls
        });

        // input group layout for modal demo
        $('#datepicker-modal-2').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            templates: controls
        });

        // enable clear button 
        $('#datepicker-3').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

        // enable clear button for modal demo
        $('#datepicker-modal-3').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

        // orientation 
        $('#datepicker-4-1').datepicker({
            orientation: "top left",
            todayHighlight: true,
            templates: controls
        });

        $('#datepicker-4-2').datepicker({
            orientation: "top right",
            todayHighlight: true,
            templates: controls
        });

        $('#datepicker-4-3').datepicker({
            orientation: "bottom left",
            todayHighlight: true,
            templates: controls
        });

        $('#datepicker-4-4').datepicker({
            orientation: "bottom right",
            todayHighlight: true,
            templates: controls
        });

        // range picker
        $('#datepicker-5').datepicker({
            todayHighlight: true,
            templates: controls
        });

        // inline picker
        $('#datepicker-6').datepicker({
            todayHighlight: true,
            templates: controls
        });
    }

    $(document).ready(function() {
        runDatePicker();
    });
</script>
@endsection