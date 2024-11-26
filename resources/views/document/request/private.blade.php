@php use App\Models\User; @endphp
@extends('main.index')
@section('content')
    <div class="page-header d-flex align-items-center">
        <div class="input-search-document position-relative">
            <label>
                <input
                    type="text"
                    placeholder="Tìm kiếm theo tiêu đề hoặc thư mục tài liệu ..."
                    class="form-control search-input"
                />
            </label>
        </div>

        <a
            class="btn btn-primary btn-round ms-auto"
            href="{{ route('document.create') }}"
        >
            <i class="fa fa-plus"></i>
            Thêm mới
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
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
                                        <th class="text-center" style="width: 3%">
                                            STT
                                        </th>
                                        <th class="text-center">Mã tài liệu</th>
                                        <th class="text-center">Tiêu đề</th>
                                        <th class="text-center">Ngày đăng</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center" style="width: 10%">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $documents as $key => $document)
                                        <tr>
                                            <td class="text-center" width="5%">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="text-center">{{ $document->code ?? '' }}</td>
                                            <td class="text-center">{{ $document->title ?? '' }}</td>
                                            <td class="text-center">{{ $document->created_at->format('H:i d/m/Y') ?? '' }}</td>
                                            <td class="text-center">
                                                @switch( $document->is_private )
                                                    @case(0)
                                                        <span class="badge bg-success">Công khai</span>
                                                        @break
                                                    @case(1)
                                                        <span class="badge bg-warning">Riêng tư</span>
                                                        @break
                                                @endswitch
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-dropdown">
                                                    <button class="btn btn-link dropdown-toggle" type="button"
                                                            id="actionDropdown" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="actionDropdown">
                                                        <a class="dropdown-item"
                                                           href="{{ route('document.detail', $document->id) }}">
                                                            <i class="fas fa-eye"></i> Xem
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('document.update', $document->id) }}">
                                                            <i class="fa fa-edit"></i> Sửa
                                                        </a>
                                                        <a class="dropdown-item text-danger" href="{{ route('document.deleteDocument', $document->id) }}">
                                                            <i class="fa fa-times"></i> Xóa
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.search-input').addEventListener('keyup', function () {
            const query = this.value;

            if (query.length > 0) {
                fetch(`{{ route('documents.searchPrivate') }}?query=${query}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        const tbody = document.querySelector('table tbody');
                        tbody.innerHTML = '';

                        data.documents.forEach((document, index) => {
                            tbody.innerHTML += `
                            <tr>
                                <td class="text-center">${index + 1}</td>
                                <td class="text-center">${document.code || ''}</td>
                                <td class="text-center">${document.title || ''}</td>
                                <td class="text-center">${document.comments_count || 0}</td>
                                <td class="text-center">${new Date(document.created_at).toLocaleString()}</td>
                                <td class="text-center">${document.created_by?.name || ''}</td>
                                <td class="text-center">
                                    <div class="dropdown action-dropdown">
                                        <button class="btn btn-link dropdown-toggle" type="button"
                                                id="actionDropdown" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="actionDropdown">
                                            <a class="dropdown-item" href="/documents/${document.id}">
                                                <i class="fas fa-eye"></i> Xem
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        `;
                        });
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    </script>
    <style>
        .input-search-document {
            position: relative;
        }

        .search-input {
            padding-left: 35px;
        !important;
        }

        .input-search-document input {
            width: 500px;
        }

        .action-dropdown .dropdown-toggle {
            background: none;
            border: none;
            color: #6c757d;
            font-size: 18px;
            transition: color 0.2s;
        }

        .action-dropdown .dropdown-toggle:hover {
            color: #343a40;
        }

        .action-dropdown .dropdown-menu {
            padding: 8px 0;
            border-radius: 6px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            min-width: 120px;
        }

        .action-dropdown .dropdown-item {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            font-size: 14px;
            color: #212529;
            transition: background-color 0.2s, color 0.2s;
        }

        .action-dropdown .dropdown-item i {
            margin-right: 8px;
            font-size: 16px;
        }

        .action-dropdown .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #007bff;
        }

        .action-dropdown .dropdown-item.text-danger {
            color: #dc3545;
        }

        .action-dropdown .dropdown-item.text-danger:hover {
            color: #c82333;
        }
    </style>
@endsection

