@extends('main.index')
@section('content')
    <div class="page-header d-flex">
        <h3 class="fw-bold mb-3">Danh Sách tài liệu</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Quản lý tài liệu</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Danh sách</a>
            </li>
        </ul>
        <a
            class="btn btn-primary btn-round ms-auto"
            href=""
        >
            <i class="fa fa-plus"></i>
            Thêm mới
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-all-tab-nobd" data-bs-toggle="pill"
                               href="#pills-all-nobd" role="tab" aria-controls="pills-all-nobd"
                               aria-selected="true">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-draft-tab-nobd" data-bs-toggle="pill"
                               href="#pills-draft-nobd" role="tab" aria-controls="pills-draft-nobd"
                               aria-selected="false">Bản nháp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-pending-tab-nobd" data-bs-toggle="pill"
                               href="#pills-pending-nobd" role="tab" aria-controls="pills-pending-nobd"
                               aria-selected="false">Chờ duyệt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-approve-tab-nobd" data-bs-toggle="pill"
                               href="#pills-approve-nobd" role="tab" aria-controls="pills-approve-nobd"
                               aria-selected="false">Đã duyệt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-reject-tab-nobd" data-bs-toggle="pill"
                               href="#pills-reject-nobd" role="tab" aria-controls="pills-reject-nobd"
                               aria-selected="false">Từ chối</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                        <div class="tab-pane fade show active" id="pills-all-nobd" role="tabpanel"
                             aria-labelledby="pills-all-tab-nobd">
                            <div class="table-responsive">
                                <table
                                    id="add-row-1"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-left" style="width: 3%">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="inlineCheckboxAll1"
                                                    value="option1"
                                                />
                                            </div>
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Số bình luận</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Người đăng</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">Đã duyệt</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-draft-nobd" role="tabpanel"
                             aria-labelledby="pills-draft-tab-nobd">
                            <div class="table-responsive">
                                <table
                                    id="add-row"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-left" style="width: 3%">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="inlineCheckboxAll"
                                                    value="option1"
                                                />
                                            </div>
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Số bình luận</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Người đăng</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="btn-group dropdown">
                                                <button
                                                    class="btn btn-primary dropdown-toggle"
                                                    type="button"
                                                    data-bs-toggle="dropdown"
                                                >
                                                    Chọn hành động
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-edit"></i>
                                                            Sửa Tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fa fa-times"></i>
                                                            Xóa tài liệu
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-share"></i>
                                                            Gửi đi
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pending-nobd" role="tabpanel"
                             aria-labelledby="pills-pending-tab-nobd">
                            <div class="table-responsive">
                                <table
                                    id="add-row-2"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-left" style="width: 3%">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="inlineCheckboxAll2"
                                                    value="option1"
                                                />
                                            </div>
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Số bình luận</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Người đăng</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-approve-nobd" role="tabpanel"
                             aria-labelledby="pills-approve-tab-nobd">
                            <div class="table-responsive">
                                <table
                                    id="add-row-3"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-left" style="width: 3%">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="inlineCheckboxAll4"
                                                    value="option1"
                                                />
                                            </div>
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Số bình luận</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Người đăng</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-reject-nobd" role="tabpanel"
                             aria-labelledby="pills-reject-tab-nobd">
                            <div class="table-responsive">
                                <table
                                    id="add-row-5"
                                    class="display table table-striped table-hover"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-left" style="width: 3%">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="inlineCheckboxAll5"
                                                    value="option1"
                                                />
                                            </div>
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Số bình luận</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Người đăng</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            <div class="form-check
                                                form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="option1"
                                                />
                                            </div>
                                        </td>
                                        <td class="text-center">BDC45454</td>
                                        <td class="text-center">Tài liệu 1</td>
                                        <td class="text-center">6</td>
                                        <td class="text-center">23-08-2024</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <div class="form-button-action">
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-info"
                                                    href="detail_document.html"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    href="#"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a
                                                    type="button"
                                                    title=""
                                                    class="btn btn-link btn-danger"
                                                    href="#"
                                                >
                                                    <i class="fa fa-times"></i>
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
    </div>
@endsection