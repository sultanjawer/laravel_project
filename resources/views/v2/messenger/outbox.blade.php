@extends ('layoutsv2.global')
@section ('style')
<style>
    .unread {
        background: #e9ecef;
        font-weight: 900 !important;
    }

    .read {
        color: #92969c;
    }

    .trashed {
        color: #b5bbc4;
    }
</style>
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partialsv2.sysalert')</div>

<div class="row">
    <!-- menu panel -->
    <div class="col-md-3">
        <div class="panel" id="panel-1">
            @include('v2.messenger.leftslider')
        </div>
    </div>
    <!-- content panel -->
    <div class="col-md-9">
        <div class="panel" id="panel-1">
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="dt-maillist" class="table table-sm table-hover w-100">
                        <thead>
                            <tr>
                                <th style="width:1%;"></th>
                                <th style="width:18%;">Sender</th>
                                <th style="width:50%;">Subject</th>
                                <th style="width:3%;">Att</th>
                                <th style="width:5%;">Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="fw-500 unread">
                                <td class="text-center">
                                    <a href="#" title="starred" class="d-flex align-items-center py-1 ml-2 mt-4 mt-lg-0 ml-lg-0 mr-lg-4 fs-lg color-warning-500 order-3 order-lg-2"><i class="fas fa-star"></i></a>
                                </td>
                                <td>Mellisa Ayre</td>
                                <td>
                                    <a href="/v2/messenger/read">Re: New security codes (2)</a>
                                </td>
                                <td>
                                    <i class="fal fa-paperclip"></i>
                                </td>
                                <td>8:31PM</td>
                            </tr>
                            <tr class="fw-500 read">
                                <td class="text-center">
                                    <a href="#" title="starred" class="d-flex align-items-center py-1 ml-2 mt-4 mt-lg-0 ml-lg-0 mr-lg-4 fs-lg text-muted order-3 order-lg-2"><i class="fal fa-star"></i></a>
                                </td>
                                <td>Oliver Kopyuv</td>
                                <td>
                                    <a href="/v2/messenger/read" class="read">Transformer Combustion Defuser is ready</a>
                                </td>
                                <td>
                                    <i class="fal fa-paperclip"></i>
                                </td>
                                <td>5:12PM</td>
                            </tr>
                            <tr class="fw-500 read">
                                <td class="text-center">
                                    <a href="#" title="starred" class="d-flex align-items-center py-1 ml-2 mt-4 mt-lg-0 ml-lg-0 mr-lg-4 fs-lg text-muted order-3 order-lg-2"><i class="fal fa-star"></i></a>
                                </td>
                                <td>Adison Le</td>
                                <td>
                                    <a href="/v2/messenger/read" class="read">Welcome to the new portal, here is what you need to do</a>
                                </td>
                                <td>
                                </td>
                                <td>8:31PM</td>
                            </tr>
                            <tr class="fw-500 unread">
                                <td class="text-center">
                                    <a href="#" title="starred" class="d-flex align-items-center py-1 ml-2 mt-4 mt-lg-0 ml-lg-0 mr-lg-4 fs-lg text-muted order-3 order-lg-2"><i class="fal fa-star"></i></a>
                                </td>
                                <td>Dr. John Cook PhD</td>
                                <td>
                                    <a href="/v2/messenger/read">PWS facts for patient #3245</a>
                                </td>
                                <td>
                                    <i class=""></i>
                                </td>
                                <td>4:31PM</td>
                            </tr>
                        </tbody>
                    </table>
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
<script src="{{ asset('/js/formplugins/summernote/summernote.js') }}"></script>



<!-- summernote -->
<script>
    $(document).ready(function() {
        //init default
        $('.js-summernote').summernote({
            height: 70,
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
                ['height', ['height']]
                ['table', ['table']]
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

<script type="text/javascript">
    // push settings with "false" save to local
    //initApp.pushSettings("nav-function-minify layout-composed", false);

    // the codes below are just for example use, you may need to change the scripts according to your requirement
    // select all checkbox function

    var title = document.title,

        newEmailDisplayTab = function() {
            var count = $('#js-emails .unread').length
            var newTitle = title + ' (' + count + ')';
            document.title = newTitle;
            $(".js-unread-emails-count").text(' (' + count + ')');
        },

        deleteEmail = function(threadID) {

            // delete after animation is complete
            threadID.animate({
                height: 'toggle',
                opacity: 'toggle'
            }, '200', 'easeOutExpo', function() {
                //remove email after animation is complete
                $(this).remove();
                //update unread email count
                newEmailDisplayTab();
            });

            //we remove any tooltips (this is a bug with bootstrap where the tooltip stays on screen after removing parent)
            $('.tooltip').tooltip('dispose');

            //uncheck master select all
            if ($("#js-msg-select-all").is(":checked")) {
                $("#js-msg-select-all").prop('checked', false);
            }

            return this;
        }

    // select all component demo
    $("#js-msg-select-all").on("change", function(e) {
        if (this.checked) {
            $('#js-emails :checkbox').prop("checked", $(this).is(":checked")).closest("li").addClass("state-selected");
        } else {
            $('#js-emails :checkbox').prop("checked", $(this).is(":checked")).closest("li").removeClass("state-selected");
        }
    });

    // add or remove state-selected class to emails when they are checked
    $('#js-emails :checkbox').on("change", function() {

        if ($("#js-msg-select-all").is(":checked")) {
            $('#js-msg-select-all').prop('indeterminate', true);
        }

        if (this.checked) {
            $(this).closest("li").addClass("state-selected");
        } else {
            $(this).closest("li").removeClass("state-selected");
        }

    });

    // email delete button triggers
    $(".js-delete-email").on('click', function() {
        deleteEmail($(this).closest("li"));
    })
    $("#js-delete-selected").on('click', function() {
        deleteEmail($("#js-emails input:checked").closest("li"))
    });


    // show unread email count (once)
    newEmailDisplayTab();
</script>

<!-- datatable -->
<script>
    $(document).ready(function() {

        //tabel daftar lokasi tanam
        $('#dt-maillist').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            select: true,
            pageLength: 10,
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'B><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'selectAll',
                    text: 'All',
                    className: 'btn-outline-secondary btn-xs mr-1'
                },
                {
                    extend: 'selectNone',
                    text: 'Deselect',
                    className: 'btn-outline-secondary btn-xs mr-1'
                },
                {
                    extend: 'selected',
                    text: '<i class="fal fa-times mr-1"></i> Delete',
                    name: 'delete',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    text: '<i class="fal fa-sync mr-1"></i> Refresh',
                    name: 'refresh',
                    className: 'btn-outline-primary btn-xs'
                },
                /*{
                	text: '<i class="fal fa-plus mr-1"></i> Pesan Baru',
                	name: 'link',
                	className: 'btn-outline-primary btn-xs',
                	action: function (e, dt, node, config)
                	{
                		//This will send the page to the location specified
                		window.location.href = '/messenger/create';
                	}
                }*/
            ],
            order: [
                [0, 'asc']
            ]

        });
    });
</script>
@endsection