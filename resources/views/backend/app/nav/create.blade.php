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
                                <h1 class="h4 text-gray-900 mb-4">Create Navbar</h1>
                            </div>

                            <form action="{{ route('navbar.store') }}" method="POST" class="user m-5 p-2 " enctype="multipart/form-data">
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
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo</label>
                                    <input name="logo"  class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">first_link</label>
                                    <input style="font-size: 21px" name="first_link" value="{{ old('first_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="first_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">second_link</label>
                                    <input style="font-size: 21px" name="second_link" value="{{ old('second_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="second_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">third_link</label>
                                    <input style="font-size: 21px" name="third_link" value="{{ old('third_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="third_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">fourth_link</label>
                                    <input style="font-size: 21px" name="fourth_link" value="{{ old('fourth_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="fourth_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">fifth_link</label>
                                    <input style="font-size: 21px" name="fifth_link" value="{{ old('fifth_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="fifth_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">sixth_link</label>
                                    <input style="font-size: 21px" name="sixth_link" value="{{ old('sixth_link') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="sixth_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">phone number</label>
                                    <input style="font-size: 21px" name="phone_number" value="{{ old('phone_number') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="phone number">
                                </div>
                                <div class="mb-3 form-check">
                                    <input name="display" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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

