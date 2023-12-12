<x-backend_main>
    <div class="container">
        <a href="{{ route('backend_nav') }}">Ortga-></a>
    <table class="table">
        <thead>

        </thead>
        <tbody>
        <tr>
            <th scope="row">LOGO</th>
            <td>
                <img src="{{ asset('storage/' .$navbar->logo) }}" style="width: 80px ; height: 80px" class="img-thumbnail" alt="{{'Logo_id'. $navbar->id }}">

            </td>

        </tr>
        <tr>
            <th scope="row">First_link</th>
            <td>{{ $navbar->first_link }}</td>

        </tr>
        <tr>
            <th scope="row">Second_link</th>
            <td>{{ $navbar->second_link }}</td>
        </tr>
        <tr>
            <th scope="row">Third_link</th>
            <td>{{ $navbar->third_link }}</td>
        </tr>
        <tr>
            <th scope="row">Fourth_link</th>
            <td>{{ $navbar->fourth_link }}</td>
        </tr>
        <tr>
            <th scope="row">Fifth_link</th>
            <td>{{ $navbar->fifth_link }}</td>
        </tr>
        <tr>
            <th scope="row">Sixth_link</th>
            <td>{{ $navbar->sixth_link }}</td>
        </tr>
        <tr>
            <th scope="row">Phone_number</th>
            <td>{{ $navbar->phone_number }}</td>
        </tr>
        <tr>
            <th scope="row">Display</th>
            <td>
                @if($navbar->display == 1)
                    <button type="button" class="btn btn-primary">Active</button>
                @elseif($navbar->display == 0)
                    <button type="button" class="btn btn-danger">NoActive</button>
                @endif
            </td>
        </tr>
        </tbody>
    </table>
    </div>
</x-backend_main>
