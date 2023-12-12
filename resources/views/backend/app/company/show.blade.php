<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_company_index') }}">Ortga-></a>
        <table class="table">
            <thead>

            </thead>
            <tbody>
            <tr >
                <th  scope="row">Photo</th>
                <td>
                    <img src="{{ asset('storage/' .$company->photo) }}" style="width: 80px ; height: 80px" class="img-thumbnail" alt="{{'Logo_id'. $company->id }}">

                </td>

            </tr>
            <tr >
                <th  scope="row">Title</th>
                <td>{{ $company->title }}</td>

            </tr>
            <tr>
                <th  scope="row">Status</th>
                <td>
                    @if($company->status == 1)
                        <button type="button" class="btn btn-primary">Active</button>
                    @elseif($company->status == 0)
                        <button type="button" class="btn btn-danger">NoActive</button>
                    @endif
                </td>
            </tr>


            </tbody>
        </table>
    </div>
</x-backend_main>
