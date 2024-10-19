<div class="modal fade" id="rejectedDocumentModal" tabindex="-1" role="dialog"
     aria-labelledby="rejectedDocumentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectedDocumentModalLabel">Từ chối công khai tài liệu</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('document.confirmRequest', $documentAction->id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="action" value="rejected">
                    <span>
                            Bạn có chắc chắn muốn từ chối yêu cầu công khai tài liệu này không?
                        </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>