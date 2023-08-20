<div class="w-50 m-auto mt-5">
    <div class="mb-3">
        <input type="text" class="form-control" wire:model='search'>
    </div>

    @if (count($posts) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    @endif
</div>
