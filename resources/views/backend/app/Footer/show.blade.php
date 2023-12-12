<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_footer_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr >
                <th  scope="row">main_heading</th>
                <td>{{ $footer->main_heading }}</td>

            </tr>
            <tr >
                <th  scope="row">telegram_link</th>
                <td>{{ $footer->telegram_link }}</td>

            </tr>
            <tr >
                <th  scope="row">youtube_link</th>
                <td>{{ $footer->youtube_link }}</td>

            </tr>
            <tr >
                <th  scope="row">insta_link</th>
                <td>{{ $footer->insta_link }}</td>

            </tr>
            <tr >
                <th  scope="row">company_name</th>
                <td>{{ $footer->company_name }}</td>

            </tr>
            <tr >
                <th  scope="row">paragraph</th>
                <td>{{ $footer->paragraph }}</td>

            </tr>
            <tr >
                <th  scope="row">phone</th>
                <td>{{ $footer->phone }}</td>

            </tr>
            <tr >
                <th  scope="row">created_by</th>
                <td>{{ $footer->created_by }}</td>

            </tr>
            <tr>
                <th scope="row">Phone Status</th>
                <td>
                    @if($footer->phone_status == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($footer->phone_status == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($footer->display == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($footer->display == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>


            </tbody>
        </table>
    </div>
</x-backend_main>
