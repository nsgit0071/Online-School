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
                                <h1 class="h4 text-gray-900 mb-4">Create Company</h1>
                            </div>

                            <form action="{{ route('company.store') }}" method="POST" class="user m-5 p-2 " enctype="multipart/form-data">
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
                                    <label for="formFile" class="form-label">photo</label>
                                    <input name="photo"  class="form-control" type="file" id="formFile">
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">title</label>
                                    <input style="font-size: 21px" name="title" value="{{ old('title') }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="title">
                                </div>

                                <div class="mb-3 form-check">
                                    <input name="status" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
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

