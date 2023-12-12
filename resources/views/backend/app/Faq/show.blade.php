<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_faq_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr>
                <th scope="row">Heading</th>
                <td>{{ $faq->heading }}</td>

            </tr>
            <tr>
                <th scope="row">Paragraph</th>
                <td>{{ $faq->bold }}</td>
            </tr>
            <tr>
                <th scope="row">paragraph_title</th>
                <td>{{ $faq->paragraph }}</td>
            </tr>

            <tr>
                <th scope="row">Savol</th>
                <td>{{ $faq->link }}</td>
            </tr>

            <tr>
                <th scope="row">Display</th>
                <td>
                    @if($faq->status == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($faq->status == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-backend_main>
