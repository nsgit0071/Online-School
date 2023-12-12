
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

                            <form action="{{ route('course.update' , ['course' => $course]) }}" method="POST" class="user m-5 p-2 " enctype="multipart/form-data">
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
                                {{--              form--}}
                                <div class="m-2">
                                    <label for="formFileLg" class="form-label">Large file input example</label>
                                    <input name="photo" class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">heading</label>
                                    <input style="font-size: 21px" name="heading" value="{{ $course->heading }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="heading">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">paragraph_view</label>
                                    <input style="font-size: 21px" name="paragraph_view" value="{{ $course->paragraph_view }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="paragraph_view">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">phone</label>
                                    <input style="font-size: 21px" name="phone" value="{{ $course->phone }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">title</label>
                                    <input style="font-size: 21px" name="title" value="{{ $course->title }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="title">
                                </div>
                                <label for="">Category_Id
                                    <select name="category_id" class="form-select"  aria-label="multiple select example">
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}" >{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">content</label>
                                    <input style="font-size: 21px" name="content_main" value="{{ $course->content_main }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="content">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">youTube_link</label>
                                    <input style="font-size: 21px" name="youTube_link" value="{{ $course->youTube_link }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="youTube_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">prise</label>
                                    <input style="font-size: 21px" name="prise" value="{{ $course->prise }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="prise">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">telegram_link</label>
                                    <input style="font-size: 21px" name="telegram_link" value="{{ $course->telegram_link }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="telegram_link">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">telegram_admin</label>
                                    <input style="font-size: 21px" name="telegram_admin" value="{{ $course->telegram_admin }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="prise">
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">book_page</label>
                                    <input style="font-size: 21px" name="book_page" value="{{ $course->book_page }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="book_page">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">pro</label>
                                    <input style="font-size: 21px" name="pro" value="{{ $course->pro }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="prise">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">lesson_time</label>
                                    <input style="font-size: 21px" name="lesson_time" value="{{ $course->lesson_time }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="lesson_time">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">block_icon</label>
                                    <input style="font-size: 21px" name="block_icon" value="{{ $course->block_icon }}" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="block_icon">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">status</label>
                                    <input style="font-size: 21px" name="status" value="{{ $course->status }}" type="number" class="form-control form-control-user" id="exampleInputEmail"
                                           placeholder="status">
                                </div>
                                <div class="mb-3 form-check">
                                    <input name="display" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Display status</label>
                                </div>

                                {{--              form--}}
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

