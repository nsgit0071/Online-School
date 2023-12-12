<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_about') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>
            <tr>
                <th scope="row">Photo</th>
                <td>
                    <img src="{{ asset('storage/' .$about->photo) }}" style="width: 80px ; height: 80px" class="img-thumbnail" alt="{{'Logo_id'. $about->id }}">

                </td>

            </tr>
            <tr>
                <th scope="row">heading_main</th>
                <td>{{ $about->heading_main }}</td>

            </tr>
            <tr>
                <th scope="row">heading</th>
                <td>{{ $about->heading }}</td>
            </tr>
            <tr>
                <th scope="row">paragraph</th>
                <td>{{ $about->paragraph }}</td>
            </tr>
            <tr>
                <th scope="row">about_heading</th>
                <td>{{ $about->about_heading }}</td>
            </tr>
            <tr>
                <th scope="row">about_icon</th>
                <td>{{ $about->about_icon }}</td>
            </tr>
            <tr>
                <th scope="row">paragraph_about</th>
                <td>{{ $about->paragraph_about }}</td>
            </tr>
            <tr>
                <th scope="row">button_text</th>
                <td>{{ $about->button_text }}</td>
            </tr>
            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($about->display == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($about->display == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-backend_main>
