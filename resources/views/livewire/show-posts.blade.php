<div>
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>Post title</td>
                    <td>Post content...</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
