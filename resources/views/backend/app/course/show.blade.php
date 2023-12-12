<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_course_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>
            <tr>
                <th scope="row">photo</th>
                <td>
                    <img src="{{ asset('storage/' .$course->photo) }}" style="width: 80px ; height: 80px" class="img-thumbnail" alt="{{'Logo_id'. $course->id }}">

                </td>

            </tr>
            <tr>
                <th scope="row">heading</th>
                <td>{{ $course->heading }}</td>


            </tr>
            <tr>
                <th scope="row">paragraph_view</th>
                <td>{{ $course->paragraph_view }}</td>

            </tr>
            <tr>
                <th scope="row">phone</th>
                <td>{{ $course->phone }}</td>

            </tr>
            <tr>
                <th scope="row">title</th>
                <td>{{ $course->title }}</td>

            </tr>
            <tr>
                <th scope="row">category_id</th>
                <td>{{ $course->category->name }}</td>
            </tr>
            <tr>
                <th scope="row">content_main</th>
                <td>{{ $course->content_main }}</td>

            </tr>
            <tr>
                <th scope="row">youTube_link</th>
                <td>{{ $course->youTube_link }}</td>
            </tr>
            <tr>
                <th scope="row">prise</th>
                <td>{{ $course->prise }}</td>

            </tr>
            <tr>
                <th scope="row">telegram_link</th>
                <td>{{ $course->telegram_link }}</td>

            </tr>
            <tr>
                <th scope="row">telegram_admin</th>
                <td>{{ $course->telegram_admin }}</td>

            </tr>
            <tr>
                <th scope="row">book_page</th>
                <td>{{ $course->book_page }}</td>

            </tr>
            <tr>
                <th scope="row">pro</th>
                <td>{{ $course->pro }}</td>


            </tr>
            <tr>
                <th scope="row">lesson_time</th>
                <td>{{ $course->lesson_time }}</td>


            </tr>
            <tr>
                <th scope="row">block_icon</th>
                <td>{{ $course->block_icon }}</td>
            </tr>

            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($course->display == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($course->display == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-backend_main>
