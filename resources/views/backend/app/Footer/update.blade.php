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

                            <form action="{{ route('footer.update' , ['footer' => $footer->id]) }}" method="POST" class="user m-5 p-2 " enctype="multipart/form-data">
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
                                    <label for="formFile" class="form-label">main_heading</label>
                                    <input style="font-size: 21px" name="main_heading" value="{{ $footer->main_heading }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="main_heading">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">telegram_link</label>
                                    <input style="font-size: 21px" name="telegram_link" value="{{ $footer->telegram_link }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="telegram_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">youtube_link</label>
                                    <input style="font-size: 21px" name="youtube_link" value="{{ $footer->youtube_link }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="youtube_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">insta_link</label>
                                    <input style="font-size: 21px" name="insta_link" value="{{ $footer->insta_link }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="insta_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">company_name</label>
                                    <input style="font-size: 21px" name="company_name" value="{{ $footer->company_name }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="company_name">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">paragraph</label>
                                    <input style="font-size: 21px" name="paragraph" value="{{ $footer->paragraph }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="paragraph">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">phone</label>
                                    <input style="font-size: 21px" name="phone" value="{{ $footer->phone }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="phone">
                                </div>
                                <div class="mb-3 form-check">
                                    <input name="phone_status" value="1" type="checkbox" class="form-check-input" id="exampleCheck12">
                                    <label class="form-check-label" for="exampleCheck12">Phone Status</label>
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">created_by</label>
                                    <input style="font-size: 21px" name="created_by" value="{{ $footer->created_by }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="created_by">
                                </div>
                                <div class="mb-3 form-check">
                                    <input name="display" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Display</label>
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

