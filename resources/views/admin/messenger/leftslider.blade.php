<!-- left slider -->
<div class="d-flex h-100 flex-column">
    <div class="px-3 px-sm-4 px-lg-2 py-4 align-items-center">
        <a href="/messenger/create" type="button" class="btn btn-danger btn-sm btn-block fs-md" data-focus="message-to">Pesan Baru</a>
    </div>
    <div class="flex-1 pr-1">
        <a href="/messenger" class="{{ request()->is('messenger') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md font-weight-bold d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
            <div>
                <i class="fal fa-envelope width-1"></i>Semua Pesan
            </div>
            <div class="fw-400 fs-xs js-unread-emails-count"></div>
        </a>
        <a href="/messenger/inbox" class="{{ request()->is('messenger/inbox') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0 ">
            <div>
                <i class="fal fa-inbox-in width-1"></i>Kotak Masuk
            </div>
            <div class="fw-400 fs-xs js-unread-emails-count"></div>
        </a>
        <a href="/messenger/outbox" class="{{ request()->is('messenger/outbox') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
            <div>
                <i class="fal fa-paper-plane width-1"></i>Kotak Keluar
            </div>
        </a>
        <a href="/messenger/deleted" class="{{ request()->is('messenger/deleted') ? 'active' : '' }} dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
            <div>
                <i class="fal fa-trash width-1"></i>Kotak Sampah
            </div>
        </a>
    </div>
    <div class="px-5 py-3 fs-nano fw-400 text-muted">
        Simethris Messages System 1.0
    </div>
</div>