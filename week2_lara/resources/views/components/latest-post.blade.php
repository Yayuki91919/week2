<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
     @forelse ($posts as $post)
        <div>
            <h2>{{$post['title']}}</h2>
            <p>{{$post['content']}}</p>
        </div>
     @empty
        <h2>No more posts</h2>
     @endforelse 
</div>