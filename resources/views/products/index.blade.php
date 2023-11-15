<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('Email') }}</th>
                <th scope="col">{{ __('Name') }}</th>
                <th scope="col">{{ __('Surname') }}</th>
                <th scope="col">{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>


                    <td>{{ $product->name }}</td>


                </tr>
            @endforeach
        </tbody>
    </table>

</div>
