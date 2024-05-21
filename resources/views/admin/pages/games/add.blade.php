@extends('admin.layouts.admin')

@section('css')
    <link id="pagestyle" href="{{ asset('css/admin/air-datepicker.css') }}" rel="stylesheet"/>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('body')
    <main class="main-content left-0.5 position-relative border-radius-lg px-3 ">
        <div class="card">
            <div class="p-4 bg-main">
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Назва гри</label>
                        <input type="text" name="name" class="form-control form-control-alternative"
                               id="exampleFormControlInput1" placeholder="Введіть назву гри">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Розробник</label>
                        <input type="text" name="developer" class="form-control form-control-alternative"
                               id="exampleFormControlInput1" placeholder="Введіть розробника гри">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Видавець</label>
                        <input type="text" class="form-control form-control-alternative"
                               id="exampleFormControlInput1" placeholder="Введіть видавця гри">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Жанр</label>
                        <input type="email" class="form-control form-control-alternative"
                               id="exampleFormControlInput1" placeholder="Введіть жанр гри">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Дата виходу</label>
                        <input type="text" id="date1" onfocus="focused(this)" onfocusout="defocused(this)"
                               class="form-control datepicker form-control-alternative"
                               id="exampleFormControlInput1" placeholder="Введіть дату виходу гри">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="button" value="Додати гру" class="btn btn-success w-100">
                        </div>
                    </div>
                </form>
                <label for="exampleFormControlSelect1">Додайте фото</label>
                <input type="file" class="filepond" name="files[]" multiple data-type="image">
                <label for="exampleFormControlSelect1">Додайте відео</label>
                <input type="file" class="filepond" name="files[]" multiple data-type="video">
            </div>
        </div>
    </main>
@endsection


@section('scripts')
    <!-- include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>


    <script>
        $(function () {
            const imageInput = document.querySelector('input[data-type="image"]');
            const videoInput = document.querySelector('input[data-type="video"]');

            FilePond.setOptions({
                server: {
                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        const formData = new FormData();
                        formData.append('files[]', file);
                        formData.append('type', fieldName === 'files[]' ? 'image' : 'video');

                        const request = new XMLHttpRequest();
                        request.open('POST', '0/media');
                        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        request.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}')
                        request.upload.onprogress = (e) => {
                            progress(e.lengthComputable, e.loaded, e.total);
                        };
                        request.onload = () => {
                            if (request.status >= 200 && request.status < 300) {
                                load(request.responseText);
                            } else {
                                load(request.responseText);
                            }
                        };
                        request.send(formData);

                        return {
                            abort: () => {
                                request.abort();
                                abort();
                            }
                        };
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        '_token': '{{ csrf_token() }}'
                    }
                }
            });

            FilePond.create(imageInput);
            FilePond.create(videoInput);
        });
    </script>
    <script src="{{asset('js/admin/air-datepicker.js')}}"></script>
    <script>
        new AirDatepicker('#date1');
    </script>
@endsection
