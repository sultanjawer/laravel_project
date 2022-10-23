@extends ('layoutsv2.global')
@section ('style')
@endsection
@section('content')


<div class="d-flex flex-grow-1 p-0">
    <!-- inbox container -->
    <div class="d-flex flex-column flex-grow-1 bg-white">
        <!-- inbox header -->
        <div class="flex-grow-0">
            <!-- inbox button shortcut -->
            <div class="d-flex flex-wrap align-items-center pl-2 pr-3 py-2 px-sm-4 pr-lg-5 pl-lg-0 border-faded border-top-0 border-left-0 border-right-0">
                <div class="ml-2 flex-1 d-flex align-items-center">
                    <a href="/messenger" class="btn btn-icon rounded-circle mr-2 mr-lg-3">
                        <i class="fas fa-arrow-left fs-lg"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-icon rounded-circle mr-1">
                        <i class="fas fa-redo fs-md"></i>
                    </a>
                    <a href="page_inbox_general.html" class="btn btn-icon rounded-circle mr-1">
                        <i class="fas fa-exclamation-circle fs-md"></i>
                    </a>
                    <a href="page_inbox_general.html" id="js-delete-selected" class="btn btn-icon rounded-circle mr-1">
                        <i class="fas fa-trash fs-md"></i>
                    </a>
                </div>
                <div class="text-muted mr-1 mr-lg-3 ml-auto">
                    <span class="hidden-lg-down"> 1 - 50 of 135 </span>
                </div>
                <div class="d-flex flex-wrap hidden-lg-down">
                    <button class="btn btn-icon rounded-circle"><i class="fal fa-chevron-left fs-md"></i></button>
                    <button class="btn btn-icon rounded-circle"><i class="fal fa-chevron-right fs-md"></i></button>
                </div>
            </div>
            <!-- end inbox button shortcut -->
        </div>
        <!-- end inbox header -->
        <!-- inbox message -->
        <div class="flex-wrap align-items-center flex-grow-1 position-relative bg-white">
            <div class=" position-absolute pos-top pos-bottom w-100 custom-scroll">
                <div class="d-flex h-100 flex-column">
                    <!-- inbox title -->
                    <div class="d-flex align-items-center pl-2 pr-3 py-3 pl-sm-3 pr-sm-4 py-sm-4 px-lg-5 py-lg-3 flex-shrink-0">
                        <!-- button for mobile -->
                        <a href="javascript:void(0);" class="pl-3 pr-3 py-2 d-flex d-lg-none align-items-center justify-content-center mr-2 btn" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-inbox-menu">
                            <i class="fal fa-ellipsis-v h1 mb-0 "></i>
                        </a>
                        <!-- end button for mobile -->
                        <h1 class="subheader-title mb-0 ">
                            Re: New security codes
                        </h1>
                        <span class="badge badge-primary ml-2 hidden-sm-down">INBOX</span>
                        <div class="d-flex position-relative ml-auto">
                            <a href="#" title="starred" class="btn btn-icon ml-1 fs-lg">
                                <i class="fas fa-star color-warning-500"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg" data-toggle="collapse" data-target=".js-collapse">
                                <i class="fas fa-arrows-v"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg hidden-md-down">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end inbox title -->
                    <!-- message -->
                    <div id="msg-01" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                        <div class="d-flex align-items-center flex-row">
                            <div class="ml-0 mr-3 mx-lg-3">
                                <img src="/img/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="Melissa Ayre">
                            </div>
                            <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-01 > .js-collapse">
                                <div class="fs-lg">
                                    Melissa Ayre
                                    <span class="fs-nano fw-400 ml-2">notifications@github.com</span>
                                </div>
                                <div class="fs-nano">
                                    to Administrator
                                </div>
                            </div>
                            <div class="color-fusion-200 fs-sm">
                                1:00 AM <span class="hidden-sm-down">(12 hours ago)</span>
                            </div>
                            <div class="collapsed-reveal">
                                <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                    <i class="fal fa-reply"></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse js-collapse">
                            <div class="pl-lg-5 ml-lg-5 pt-3 pb-4">
                                We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- message me-->
                    <div id="msg-02" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                        <div class="d-flex align-items-center flex-row">
                            <div class="ml-0 mr-3 mx-lg-3">
                                <img src=/img/avatars/farmer.png" class="profile-image profile-image-md rounded-circle" alt="Superadmin">
                            </div>
                            <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-02 > .js-collapse">
                                <div class="fs-lg">
                                    Superadmin
                                    <span class="fs-nano fw-400 ml-2">me</span>
                                </div>
                                <div class="fs-nano">
                                    to melissa.ayre@gotbootstrap.com
                                </div>
                            </div>
                            <div class="color-fusion-200 fs-sm">
                                7:00 AM <span class="hidden-sm-down">(6 hours ago)</span>
                            </div>
                            <div class="collapsed-reveal">
                                <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                    <i class="fal fa-reply"></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse js-collapse">
                            <div class="pl-lg-5 ml-lg-5 pt-3 pb-4">
                                We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                                <br>
                                <br>
                                <div class="d-flex d-column align-items-start mb-3">
                                    <img src="/img/logo-icon/logo-icon.png" alt="Simethris WebApp" class="mr-3 mt-1" style="width:100px; height:100%">
                                    <div class="border-left pl-3">
                                        <span class="fw-500 fs-lg d-block l-h-n">Administrator</span>
                                        <span class="fw-400 fs-nano d-block l-h-n mb-1">Simethris WebApp</span>
                                    </div>
                                </div>
                                <div class="text-muted fs-nano">
                                    ​PRIVATE AND CONFIDENTIAL. This e-mail, its contents and attachments are private and confidential and is intended for the recipient only. Any disclosure, copying or unauthorized use of such information is prohibited. If you receive this message in error, please notify us immediately and delete the original and any copies and attachments.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end message me-->
                    <!-- message -->
                    <div id="msg-03" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                        <div class="d-flex align-items-center flex-row">
                            <div class="ml-0 mr-3 mx-lg-3 width-2">
                                <img src="/img/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="Melissa Ayre">
                            </div>
                            <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-03 > .js-collapse">
                                <div class="fs-lg">
                                    Melissa Ayre
                                    <span class="fs-nano fw-400 ml-2">notifications@github.com</span>
                                </div>
                                <div class="fs-nano">
                                    to Administrator
                                </div>
                            </div>
                            <div class="color-fusion-200 fs-sm">
                                6:00 AM <span class="hidden-sm-down">(5 hours ago)</span>
                            </div>
                            <div class="collapsed-reveal">
                                <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                    <i class="fal fa-reply"></i>
                                </a>
                            </div>
                        </div>
                        <div id="js-msg-1" class="js-collapse">
                            <div class="pl-lg-5 ml-lg-5 pt-3 pb-4 ">
                                We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                </div>
            </div>
        </div>
        <!-- end inbox message -->
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
                }
            ],
            order: [
                [0, 'asc']
            ]
        });
    });
</script>
@endsection