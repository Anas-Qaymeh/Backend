<table class="table">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">pass</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($products as $prodct)
                <th scope="row">1</th>
                <td>{{ $prodct->name }}</td>
                <td>{{ $prodct->pass }}</td>

        </tr>
        @endforeach

        {{-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>John</td>
            <td>Doe</td>
            <td>@social</td> --}}
        </tr>
    </tbody>
</table>
