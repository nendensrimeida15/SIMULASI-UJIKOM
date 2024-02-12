<div class="modal effect-rotate-left" id="ModalCreate" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" id="ModalCreate" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">FORM INPUT ULASAN BUKU</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store-ulasan-buku') }}" method="post" enctype="multipart/form-data">

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button">Save changes</button>
                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

