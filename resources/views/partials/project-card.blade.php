<div class="card project-card">
    <div class="project-image">
        <img src="{{ $image }}" alt="{{ $title }}">
    </div>
    <div class="card-content">
        <h3 class="project-title">{{ $title }}</h3>
        <p class="project-description">{{ $description }}</p>
        <div class="project-tags">
            @foreach ($tags as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ $link }}" target="_blank" class="github-link">
            <i class="icon-github"></i>
            View on GitHub
        </a>
    </div>
</div>
