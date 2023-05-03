<div class="container">
    <div class="row">
        <div class="col">
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-title">
                        {{$post->titulo}}
                    </div>
                    <div class="card-content">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
