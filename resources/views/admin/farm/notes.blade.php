@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <div class="col-12">
        <div class="mb-2">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item"><a class="btn-xs nav-link active" data-toggle="pill" href="#activity"><i class="fas fa-edit mr-1"></i>Catatan Kegiatan</a></li>
                <li class="nav-item"><a class="btn-xs nav-link" data-toggle="pill" href="#constraint"><i class="fas fa-exclamation-triangle mr-1"></i>Catatan Kendala</a></li>
                <li class="nav-item"><a class="btn-xs nav-link" data-toggle="pill" href="#assists"><i class="fas fa-hands-helping mr-1"></i>Data Bantuan</a></li>
                <li class="nav-item"><a class="btn-xs nav-link" data-toggle="pill" href="#shields"><i class="fas fa-shield-alt mr-1"></i>Data Pengendalian</a></li>
                <li class="nav-item"><a class="btn-xs nav-link" data-toggle="pill" href="#bugs"><i class="fas fa-bug mr-1"></i>Data OPT</a></li>
                <li class="nav-item"><a class="btn-xs nav-link" href="/farm"><i class="fas fa-undo mr-1"></i>Kembali</a></li>
            </ul>
        </div>
        <div class="alert alert-info border-0 mb-0">
            <div class="icon-stack mr-3 flex-shrink-0" style="font-size:22px">
                <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
            </div>
            <span>Bagian ini dapat Anda gunakan untuk mencatat kegiatan (usaha tani/tanam) mingguan, kendala, bantuan saprodi per lokasi lahan, catatan pengendalian, serta catatan serangan Organisme Pengganggu Tanaman.<span>
        </div>
        <div class="tab-content py-3">
            <div class="tab-pane fade active show" id="activity" role="tabpanel">
                <!-- Panel Kegiatan
					Yang ingin dicapi pada panel ini adalah:
					Mengumpulkan data terkait kegiatan dilokasi pertanaman. juga dapat dimanfaatkan untuk laporan kegiatan mingguan.
				-->
                <div class="panel" id="panel-1">
                    <div class="panel-hdr">
                        <h2>DAFTAR KEGIATAN</h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-xs btn-info mr-1" role="button" data-toggle="modal" data-target=".act-modal-right"><i class="fas fa-plus"></i> Add Activity</button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-locus" class="table table-sm table-bordered table-hover table-striped w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th hidden>Kategori</th>
                                        <th>Kegiatan</th>
                                        <th>Deskripsi</th>
                                        <th>Dokumentasi</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>API</td>
                                        <td>API</td>
                                        <td hidden>API KATEGORI</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>
                                            <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-act-modal-right"><i class="fas faw fa-file-image"> </i> Foto Kegiatan</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="justify-content-between">
                                                <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-act-modal-right">
                                                    <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                                </a>
                                                <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-act-modal-right">
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
            <div class="tab-pane fade" id="constraint" role="tabpanel">
                <!-- Panel Kendala
					Yang ingin dicapi pada panel ini adalah:
					Mengumpulkan data terkait kendala-kendala di lokasi pertanaman..
				-->
                <div class="panel" id="panel-1">
                    <div class="panel-hdr">
                        <h2>
                            DAFTAR KENDALA <span class="fw-300"><i></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-xs btn-info mr-1" role="button" data-toggle="modal" data-target=".const-example-modal-right"><i class="fas fa-plus mr-1"></i>Buat laporan</button>

                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-constraint" class="table table-sm table-bordered table-hover table-striped w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Phase</th>
                                        <th>Date</th>
                                        <th>Constraint</th>
                                        <th>Description</th>
                                        <th>Documentation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>API</td>
                                        <td>Cultivation (API)</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>
                                            <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-const-example-modal-right"><i class="fas faw fa-file-image"> </i> image_name</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="justify-content-between">
                                                <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-const-example-modal-right">
                                                    <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                                </a>
                                                <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-const-example-modal-right">
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
            <div class="tab-pane fade" id="assists" role="tabpanel">
                <!-- Panel Bantuan
					Yang ingin dicapi pada panel ini adalah:
					Mengumpulkan data terkait bantuan yang diberikan untuk lokasi ini.
				-->
                <div class="panel" id="panel-1">
                    <div class="panel-hdr">
                        <h2>
                            DAFTAR BANTUAN <span class="fw-300 hidden-sm-down"><i>Kegiatan Usaha Tani</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-xs btn-info mr-1" role="button" data-toggle="modal" data-target=".assists-example-modal-right"><i class="fas fa-plus mr-1"></i>Tambah data</button>

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
                                            <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-assists-example-modal-right"><i class="fas faw fa-file-image"> </i> Foto Kegiatan</a>
                                        </td>
                                        <td class="truncate-md">API Catatan</td> <!-- shoud be truncate md to fit in mobile screen-->
                                        <td class="text-center">
                                            <div class="justify-content-between">
                                                <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-assists-example-modal-right">
                                                    <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                                </a>
                                                <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-assists-example-modal-right">
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
            <div class="tab-pane fade" id="shields" role="tabpanel">
                <!-- Panel Kendala
					Yang ingin dicapi pada panel ini adalah:
					Mengumpulkan data terkait kegiatan pengendalian di lokasi pertanaman.
				-->
                <div class="panel" id="panel-1">
                    <div class="panel-hdr">
                        <h2>
                            DAFTAR PENGENDALIAN <span class="fw-300"><i></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-xs btn-info mr-1" role="button" data-toggle="modal" data-target=".shields-example-modal-right"><i class="fas fa-plus mr-1"></i>Buat laporan</button>

                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-constraint" class="table table-sm table-bordered table-hover table-striped w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Pengendali</th>
                                        <th>Volume</th>
                                        <th>satuan</th>
                                        <th>Documentation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>
                                            <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-shields-example-modal-right"><i class="fas faw fa-file-image"> </i> image_name</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="justify-content-between">
                                                <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-shields-example-modal-right">
                                                    <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                                </a>
                                                <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-shields-example-modal-right">
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
            <div class="tab-pane fade" id="bugs" role="tabpanel">
                <!-- Panel OPT
					Yang ingin dicapi pada panel ini adalah:
					Mengumpulkan data terkait Serangan Organisme Pengganggu Tanaman di lokasi pertanaman.
				-->
                <div class="panel" id="panel-1">
                    <div class="panel-hdr">
                        <h2>
                            DAFTAR OPT <span class="fw-300"><i></i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-xs btn-info mr-1" role="button" data-toggle="modal" data-target=".bugs-example-modal-right"><i class="fas fa-plus mr-1"></i>Buat laporan</button>

                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-constraint" class="table table-sm table-bordered table-hover table-striped w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Indikasi</th>
                                        <th>Gejala</th>
                                        <th>Tingkat Serangan</th>
                                        <th>Documentation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>API</td>
                                        <td>
                                            <a class="text-primary" role="button" data-toggle="modal" data-target=".foto-bugs-example-modal-right"><i class="fas faw fa-file-image"> </i> image_name</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="justify-content-between">
                                                <a class="mr-1" role="button" data-toggle="modal" data-target=".edit-bugs-example-modal-right">
                                                    <i class="fas fa-edit text-info" data-toggle="tooltip" data-offset="0,10" title data-original-title="edit this data"></i>
                                                </a>
                                                <a class="mr-1" role="button" title="" data-toggle="modal" data-target=".delete-bugs-example-modal-right">
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
        </div>
    </div>
    <!-- Start Modal activity -->
    <div class="modal fade act-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-farm text-info mr-2"></i>Record New Activity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <label class="form-label" for="category">Category</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                <option hidden>- select category</option>
                                <option>Budidaya</option>
                                <option>Panen</option>
                            </select>
                        </div>
                        <span class="help-block">Activity/Task.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="activity">Activity</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="activity" class="form-control" placeholder="Task..." aria-label="activity" aria-describedby="activity">
                        </div>
                        <span class="help-block">Activity/Task.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="taskDesc">Task Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" id="taskDesc" class="form-control" placeholder="Description" aria-label="taskDesc" aria-describedby="taskDesc">
                        </div>
                        <span class="help-block">Describe the activity here.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Documentation</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                        </div>
                        <span class="help-block">Activity Documentation. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-act-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-farm text-info mr-2"></i>Edit Activity Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <label class="form-label" for="category">Category</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <select type="text" id="category" class="form-control" placeholder="Task..." aria-label="Category" aria-describedby="category">
                                <option hidden>- select category</option>
                                <option>Budidaya</option>
                                <option>Panen</option>
                            </select>
                        </div>
                        <span class="help-block">Activity/Task.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="activity">Activity</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="activity" class="form-control" placeholder="Task..." aria-label="activity" aria-describedby="activity">
                        </div>
                        <span class="help-block">Activity/Task.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="taskDesc">Task Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" id="taskDesc" class="form-control" placeholder="Description" aria-label="taskDesc" aria-describedby="taskDesc">
                        </div>
                        <span class="help-block">Describe the activity here.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Documentation</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                        </div>
                        <span class="help-block">Activity Documentation. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade delete-act-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <div class="modal fade foto-act-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <h5 class="card-title">Activity title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. The pictures attachements are in carousel mode.</p>
                        <a href="#" class="btn btn-primary">Enlarge picture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal activity -->
    <!-- Modal Const Right -->
    <div class="modal fade const-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-exclamation-triangle text-info mr-2"></i>Rekam Kendala</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="phase">Phase</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="phase" class="custom-form-control form-control" placeholder="Select phase" aria-label="Phase" aria-describedby="phase">
                                <option hidden>- pilih fase</option>
                                <option>Tanam</option>
                                <option>Panen</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <span class="help-block">Fase saat kendala ditemui.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="datepicker-modal-3">Tanggal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="constraint">Kendala</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="constraint" class="form-control" placeholder="Constraint" aria-label="Activity" aria-describedby="constraint">
                        </div>
                        <span class="help-block">Kendala yang dihadapi</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="consDesc">Deskripsi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <textarea type="text" id="consDesc" class="form-control" placeholder="Description" aria-label="constraint desc" aria-describedby="consDesc" rows="2"></textarea>
                        </div>
                        <span class="help-block">Gambaran kendala yang terjadi.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Kirim/Rekam</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-const-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">><i class="subheader-icon fas fa-exclamation-triangle text-info mr-2"></i>Edit Constraint</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="phase">Phase</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="phase" class="custom-form-control form-control" placeholder="Select phase" aria-label="Phase" aria-describedby="phase">
                                <option hidden>- pilih fase</option>
                                <option>Tanam</option>
                                <option>Panen</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <span class="help-block">Fase saat kendala ditemui.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="datepicker-modal-3">Tanggal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="constraint">Kendala</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="constraint" class="form-control" placeholder="Constraint" aria-label="Activity" aria-describedby="constraint">
                        </div>
                        <span class="help-block">Kendala yang dihadapi</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="consDesc">Deskripsi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <textarea type="text" id="consDesc" class="form-control" placeholder="Description" aria-label="constraint desc" aria-describedby="consDesc" rows="2"></textarea>
                        </div>
                        <span class="help-block">Gambaran kendala yang terjadi.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade delete-const-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Penghapusan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="flex-1">
                            <span class="h3">PERHATIAN!</span>
                            <br>
                            Your current data and all related data will be deleted. Once its deleted, the data cannot be restored. Are you sure want to do this?
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade foto-const-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <!-- End Modal Const Right -->
    <!-- Modal assists Right -->
    <div class="modal fade assists-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-hands-helping text-info mr-2"></i>Rekam data Bantuan</h5>
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
    <div class="modal fade edit-assists-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fas fa-hands-helping text-info"></i> Edit Data Bantuan</h5>
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
    <div class="modal fade delete-assists-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <div class="modal fade foto-assists-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <!-- End Modal assists Right -->
    <!-- Modal shields Right -->
    <div class="modal fade shields-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-shield text-info mr-2"></i>Tambah catatan</h5>
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
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pengendali">Pengendali</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="pengendali" class="form-control" placeholder="pengendali" aria-label="pengendali" aria-describedby="pengendali">
                        </div>
                        <span class="help-block">Bahan pengendali yang digunakan</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="dosis">Volume atau Dosis</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="dosis" class="form-control" placeholder="dosis" aria-label="dosis" aria-describedby="dosis">
                        </div>
                        <span class="help-block">Jumlah atau dosis bahan pengendali yang digunakan</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="satuan">satuan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="satuan" class="form-control" placeholder="satuan" aria-label="satuan" aria-describedby="satuan">
                        </div>
                        <span class="help-block">satuan bahan pengendali.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Kirim/Rekam</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-shields-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-shield text-info mr-2"></i>Edit Pengendalian</h5>
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
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pengendali">Pengendali</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="pengendali" class="form-control" placeholder="pengendali" aria-label="pengendali" aria-describedby="pengendali">
                        </div>
                        <span class="help-block">Bahan pengendali yang digunakan</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="dosis">Volume atau Dosis</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="dosis" class="form-control" placeholder="dosis" aria-label="dosis" aria-describedby="dosis">
                        </div>
                        <span class="help-block">Jumlah atau dosis bahan pengendali yang digunakan</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="satuan">satuan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                            </div>
                            <input type="text" id="satuan" class="form-control" placeholder="satuan" aria-label="satuan" aria-describedby="satuan">
                        </div>
                        <span class="help-block">satuan bahan pengendali.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade delete-shields-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Penghapusan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="flex-1">
                            <span class="h3">PERHATIAN!</span>
                            <br>
                            Your current data and all related data will be deleted. Once its deleted, the data cannot be restored. Are you sure want to do this?
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade foto-shields-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <!-- End Modal shields Right -->
    <!-- Modal bugs Right -->
    <div class="modal fade bugs-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-bug text-info mr-2"></i>Rekam Serangan OPT</h5>
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
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="indikasi">Indikasi OPT</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="indikasi" class="custom-form-control form-control" placeholder="pilih indikasi" aria-label="indikasi" aria-describedby="indikasi">
                                <option hidden>- pilih indikasi</option>
                                <option>Ada</option>
                                <option>Tidak ada</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <span class="help-block">Indikasi serangan OPT.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="attackLevel">Tingkat serangan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="attackLevel" class="custom-form-control form-control" placeholder="pilih indikasi" aria-label="attackLevel" aria-describedby="attackLevel">
                                <option hidden>- pilih level</option>
                                <option>Tidak ada (jika tidak ada indikasi)</option>
                                <option>Ringan</option>
                                <option>Sedang</option>
                                <option>Berat</option>
                            </select>
                        </div>
                        <span class="help-block">Indikasi serangan OPT.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="gejala">Gejala</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <textarea type="text" id="gejala" class="form-control" placeholder="Description" aria-label="gejala" aria-describedby="gejala" rows="2"></textarea>
                        </div>
                        <span class="help-block">Gejala yang teramati.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Kirim/Rekam</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-bugs-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-bug text-info mr-2"></i>Edit Serangan OPT</h5>
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
                            <input type="text" id="datepicker-modal-3" class="form-control" placeholder="Tanggal kejadian atau laporan" aria-label="date" aria-describedby="datepicker-modal-3">
                        </div>
                        <span class="help-block">Tanggal kejadian atau laporan.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="indikasi">Indikasi OPT</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="indikasi" class="custom-form-control form-control" placeholder="pilih indikasi" aria-label="indikasi" aria-describedby="indikasi">
                                <option hidden>- pilih indikasi</option>
                                <option>Ada</option>
                                <option>Tidak ada</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <span class="help-block">Indikasi serangan OPT.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="attackLevel">Tingkat serangan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-clock"></i></span>
                            </div>
                            <select type="text" id="attackLevel" class="custom-form-control form-control" placeholder="pilih indikasi" aria-label="attackLevel" aria-describedby="attackLevel">
                                <option hidden>- pilih level</option>
                                <option>Tidak ada (jika tidak ada indikasi)</option>
                                <option>Ringan</option>
                                <option>Sedang</option>
                                <option>Berat</option>
                            </select>
                        </div>
                        <span class="help-block">Indikasi serangan OPT.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="gejala">Gejala</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <textarea type="text" id="gejala" class="form-control" placeholder="Description" aria-label="gejala" aria-describedby="gejala" rows="2"></textarea>
                        </div>
                        <span class="help-block">Gejala yang teramati.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Foto/dokumentasi kendala/kejadian. Berkas berekstensi jpg atau pdf dengan ukuran maksimum ... (perhatikan kualitas berkas).</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-sm btn-primary">Simpan perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade delete-bugs-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Penghapusan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <div class="flex-1">
                            <span class="h3">PERHATIAN!</span>
                            <br>
                            Your current data and all related data will be deleted. Once its deleted, the data cannot be restored. Are you sure want to do this?
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade foto-bugs-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
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
    <!-- End Modal bugs Right -->
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>

<script>
    $(document).ready(function() {
        // initialize datatable
        $('#daftaranggota').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: true,
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                /*{
                	extend:    'colvis',
                	text:      'Column Visibility',
                	titleAttr: 'Col visibility',
                	className: 'mr-sm-3'
                },*/
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });

    });
</script>
@endsection