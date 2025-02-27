<div class="tech-grid">
    @php
        $technologies = [
            [
                'category' => 'Frontend',
                'skills' => ['React', 'Next.js', 'TypeScript', 'TailwindCSS', 'Redux', 'GraphQL'],
            ],
            [
                'category' => 'Backend',
                'skills' => ['Node.js', 'Express', 'Python', 'Django', 'PostgreSQL', 'MongoDB'],
            ],
            [
                'category' => 'DevOps',
                'skills' => ['Docker', 'AWS', 'CI/CD', 'Git', 'Linux', 'Nginx'],
            ],
            [
                'category' => 'Tools',
                'skills' => ['VS Code', 'Postman', 'Figma', 'Jest', 'GitHub', 'Vercel'],
            ],
        ];
    @endphp

    @foreach ($technologies as $tech)
        <div class="card tech-card">
            <h3 class="tech-category">{{ $tech['category'] }}</h3>
            <div class="tech-skills">
                @foreach ($tech['skills'] as $skill)
                    <span class="skill-tag">{{ $skill }}</span>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
