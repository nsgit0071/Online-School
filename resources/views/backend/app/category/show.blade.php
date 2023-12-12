<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_category_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            <tr >
                <th  scope="row">Heading</th>
                <td>{{ $category->name }}</td>

            </tr>


            </tbody>
        </table>
    </div>
</x-backend_main>
