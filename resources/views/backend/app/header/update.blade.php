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
                                <h1 class="h4 text-gray-900 mb-4">Create Header</h1>
                            </div>
                            <a href="{{ route('backend_header') }}">Ortga-></a>
                            <form action="{{ route('header.update' ,  ['header' => $header->id]) }}" method="post"  class="user m-5 p-2 " >
                                @method('PUT')
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
                                    <input style="font-size: 21px" name="heading" value="{{  $header->heading}}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="heading">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">paragraph</label>
                                    <input style="font-size: 21px" name="paragraph" value="{{  $header->paragraph}}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="paragraph">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">button_text</label>
                                    <input style="font-size: 21px" name="button_text" value="{{  $header->button_text}}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="button_text">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Youtube_link</label>
                                    <input style="font-size: 21px" name="youtube_link" value="{{  $header->Youtube_link}}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="Youtube_link">
                                </div>

                                <div class="mb-3 form-check">
                                    <input name="display" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
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

