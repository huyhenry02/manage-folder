@php use App\Models\User; @endphp
@extends('main.index')
@section('content')
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Thông tin tài liệu</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('document.updateDocument', $model->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Tiêu đề</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="title"
                                        name="title"
                                        value="{{ $model->title }}"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="folderTree">Thư mục bài viết</label>
                                    <select class="form-select" id="folderTree" aria-label="Default select example"
                                            name="folder_id">
                                        <option selected
                                                value="{{ $model->folder_id }}"> {{ $model->folder?->name ?? '' }}</option>
                                        @foreach ($folderTree as $folder)
                                            @include('partials.folder-option', ['folder' => $folder, 'level' => 0])
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Nội dung</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                              name="content">{{ $model->content ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Ghi chú</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                              name="note">{{ $model->note ?? '' }}</textarea>
                                </div>
                                <div class="form-group" style="width: 40%">
                                    <label>Thời gian hiệu lực</label>
                                    <div class="d-flex">
                                        <label for="start_time"></label>
                                        <input id="start_time" class="form-control" type="date" name="start_time"
                                               value="{{ $model->start_time }}"/>
                                        <label for="end_time"></label>
                                        <input id="end_time" class="form-control" type="date" name="end_time"
                                               value="{{ $model->end_time }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file">File đính kèm</label>
                                    <input type="file" class="form-control" id="file" name="attachment_file"/>
                                    <div id="filePreview" class="mt-3">
                                        @if( !empty($model->attachmentFiles) && count($model->attachmentFiles) > 0 )
                                            <table style="width: 100%">
                                                <tbody>
                                                @foreach( $model->attachmentFiles as $attachment )
                                                    <tr>
                                                        <td>
                                                            <a href="{{ $attachment->file_path }}" download>
                                                                <i class="fas fa-file-pdf"></i>
                                                                <span>{{ $attachment->file_name }}</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <button class="btn btn-danger">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#folderTree').select2({
                placeholder: "Chọn thư mục",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
    <style>
        #filePreview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .form-select option {
            padding-left: 20px;
        }

        .form-select option.level-1 {
            padding-left: 30px;
            font-weight: normal;
        }

        .form-select option.level-2 {
            padding-left: 50px;
            font-style: italic;
            color: #555;
        }

        .form-select option.level-3 {
            padding-left: 70px;
            font-style: italic;
            color: #777;
        }

        .card-action {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .card-action button {
            margin-left: 10px;
        }
    </style>
@endsection
