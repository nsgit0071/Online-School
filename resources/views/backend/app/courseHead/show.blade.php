<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_courseHead_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr>
                <th scope="row">Heading</th>
                <td>{{ $courseHead->heading }}</td>

            </tr>
            <tr>
                <th scope="row">paragraph</th>
                <td>{{ $courseHead->paragraph }}</td>
            </tr>

            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($courseHead->status == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($courseHead->status == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-backend_main>
