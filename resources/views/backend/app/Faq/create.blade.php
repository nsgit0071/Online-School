    <x-backend_main>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row">
                    {{--                    Img--}}

                    {{--                    IMG END--}}
                    <div class="col-lg-11 ">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Course Header</h1>
                            </div>

                            <form action="{{ route('faq.store') }}" method="POST" class="user m-5 p-2 " enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">heading</label>
                                    <input style="font-size: 21px" name="heading" value="{{ old('heading') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="heading">
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">Paragraph</label>
                                    <input style="font-size: 21px" name="bold" value="{{ old('bold') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="bold">
                                </div>

                                <div class="form-group">
                                    <div class="form-floating">
                                        <textarea required class="form-control" name="paragraph" placeholder="Leave a comment here" value="{{ old('paragraph') }}" id="editor"></textarea>
                                        <label for="floatingTextarea">paragraph_title</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">Savol</label>
                                    <input style="font-size: 21px" name="link" value="{{ old('link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="link">
                                </div>

                                <div class="mb-3 form-check">
                                    <input name="status" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Display status</label>
                                </div>
                                <div class="form-group row">

                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Create
                                </button>
                            </form>
                            <hr>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-backend_main>

{{--<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>--}}
{{--<script>--}}
{{--    ClassicEditor--}}
{{--        .create( document.querySelector( '#editor' ) )--}}
{{--        .catch( error => {--}}
{{--            console.error( error );--}}
{{--        } );--}}
{{--</script>--}}
