<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_messageHead_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr >
                <th  scope="row">Heading</th>
                <td>{{  $messageHead->main_paragraph }}</td>

            </tr>
            <tr >
                <th  scope="row">Heading</th>
                <td>{{  $messageHead->heading }}</td>

            </tr>
            <tr >
                <th  scope="row">Heading</th>
                <td>{{  $messageHead->paragraph }}</td>

            </tr>
            <tr >
                <th  scope="row">Heading</th>
                <td>{{  $messageHead->message_heading }}</td>

            </tr>
            <tr >
                <th  scope="row">Heading</th>
                <td>{{  $messageHead->btn_text }}</td>

            </tr>
            <tr>
                <th  scope="row">Status</th>
                <td>
                    @if($messageHead->status == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($messageHead->status == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</x-backend_main>
