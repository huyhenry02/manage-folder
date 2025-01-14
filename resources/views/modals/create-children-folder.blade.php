<div class="modal fade" id="createChildrenCategory" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tạo mới thư mục con</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('folder.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Thư mục cha:</label>
                        <span id="parentFolderName" class="font-weight-bold">Folder 1</span>
                        <input type="hidden" class="form-control" id="parentFolderId" name="parent_id" value="">
                    </div>
                    <div class="form-group">
                        <label for="folderName">Tên thư mục</label>
                        <input type="text" class="form-control" id="folderName" placeholder="Nhập tên thư mục"
                               name="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
