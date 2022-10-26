@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<div class="row">
    <div class="col-md-8">
        <input type="text" class="form-control mb-3" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_mulai" placeholder="Feed title here">
        <div class="js-summernote"></div>
    </div>
    <div class="col-md-4">
        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>Publish
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="form-group">
                        <label class="form-label" for="multiple-placeholder">
                            Visibility
                        </label>
                        <select class="select2-placeholder-multiple form-control form-control-sm" multiple="multiple" id="multiple-placeholder">
                            <option value="PUB">Public</option>
                            <optgroup label="User">
                                <option>username - Company Name</option>
                                <option>username - Company Name</option>
                                <option>username - Company Name</option>
                                <option>username - Company Name</option>
                                <option>username - Company Name</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tags">Tag</label>
                        <div class="input-group input-group-sm input-group-multi-transition">
                            <input type="text" class="form-control form-control-sm" aria-label="" id="tags" placeholder="tambahkan tag..">
                            <div class="input-group-append">
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                        <span class="help-block">Tag untuk feed ini.</span>
                    </div>
                    <div class="frame-wrap">
                        <button class="btn btn-xs btn-default" data-toggle="tooltip" title data-original-title="Simpan sebagai draft">Save Draft</button>
                        <a href="/feeds/read" class="btn btn-xs btn-default" data-toggle="tooltip" title data-original-title="Lihat tampilan">Preview</a>
                    </div>
                </div>
                <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted d-flex">
                    <span class="d-flex">
                        <button class="btn btn-xs btn-danger fw-400 mr-1" data-toggle="tooltip" title data-original-title="Hapus feed ini.">Drop</button>
                        <div class="form-group">
                            <div class="custom-control custom-switch" data-toggle="tooltip" title data-original-title="Drop/deaktivasi feed ini sehingga tidak tampil di seluruh dashboard pengguna">
                                <input type="checkbox" class="custom-control-input" id="checkTanam">
                                <label class="custom-control-label" for="checkTanam">Active</label>
                            </div>
                        </div>
                    </span>
                    <span class="ml-auto">
                        <a href="/feeds/read" class="btn btn-xs btn-primary fw-500" data-toggle="tooltip" title data-original-title="Publikasikan feed ini ke dashboard pengguna lain.">Publish</a>
                    </span>
                </div>
                <div class="card-footer panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted d-flex">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/formplugins/summernote/summernote.js') }}"></script>
<script src="{{ asset('/js/formplugins/select2/select2.bundle.js') }}"></script>

<!-- summernote -->
<script>
    $(document).ready(function() {
        //init default
        $('.js-summernote').summernote({
            height: 180,
            tabsize: 1,
            placeholder: "Type here...",
            dialogsFade: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                //restore from localStorage
                onInit: function(e) {
                    $('.js-summernote').summernote("code", localStorage.getItem("summernoteData"));
                },
                onChange: function(contents, $editable) {
                    clearInterval(interval);
                    timer();
                }
            }
        });

    });
</script>
<!-- summernote -->


<script>
    $(document).ready(function() {
        $(function() {
            $('.select2').select2();

            $(".select2-placeholder-multiple").select2({
                placeholder: "Pilih visibilitas"
            });
            $(".js-hide-search").select2({
                minimumResultsForSearch: 1 / 0
            });
            $(".js-max-length").select2({
                maximumSelectionLength: 2,
                placeholder: "Select maximum 2 items"
            });
            $(".select2-placeholder").select2({
                placeholder: "Pilih visibilitas",
                allowClear: true
            });

            $(".js-select2-icons").select2({
                minimumResultsForSearch: 1 / 0,
                templateResult: icon,
                templateSelection: icon,
                escapeMarkup: function(elm) {
                    return elm
                }
            });

            function icon(elm) {
                elm.element;
                return elm.id ? "<i class='" + $(elm.element).data("icon") + " mr-2'></i>" + elm.text : elm.text
            }

            $(".js-data-example-ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function(data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;

                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                placeholder: 'Search for a repository',
                escapeMarkup: function(markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                templateResult: formatRepo,
                templateSelection: formatRepoSelection
            });

            function formatRepo(repo) {
                if (repo.loading) {
                    return repo.text;
                }

                var markup = "<div class='select2-result-repository clearfix d-flex'>" +
                    "<div class='select2-result-repository__avatar mr-2'><img src='" + repo.owner.avatar_url + "' class='width-2 height-2 mt-1 rounded' /></div>" +
                    "<div class='select2-result-repository__meta'>" +
                    "<div class='select2-result-repository__title fs-lg fw-500'>" + repo.full_name + "</div>";

                if (repo.description) {
                    markup += "<div class='select2-result-repository__description fs-xs opacity-80 mb-1'>" + repo.description + "</div>";
                }

                markup += "<div class='select2-result-repository__statistics d-flex fs-sm'>" +
                    "<div class='select2-result-repository__forks mr-2'><i class='fal fa-lightbulb'></i> " + repo.forks_count + " Forks</div>" +
                    "<div class='select2-result-repository__stargazers mr-2'><i class='fal fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
                    "<div class='select2-result-repository__watchers mr-2'><i class='fal fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
                    "</div>" +
                    "</div></div>";

                return markup;
            }

            function formatRepoSelection(repo) {
                return repo.full_name || repo.text;
            }
        });
    });
</script>
@endsection