<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_header') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr>
                <th scope="row">Heading</th>
                <td>{{ $header->heading }}</td>

            </tr>
            <tr>
                <th scope="row">paragraph</th>
                <td>{{ $header->paragraph }}</td>
            </tr>
            <tr>
                <th scope="row">button_text</th>
                <td>{{ $header->button_text }}</td>
            </tr>
            <tr>
                <th scope="row">Youtube_link</th>
                <td>{{ $header->Youtube_link }}</td>
            </tr>

            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($header->display == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($header->display == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-backend_main>
