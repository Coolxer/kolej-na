@vite('resources/sass/layouts/landing/_article.scss')

@props(['sentences', 'textCenter' => false])

<article @class(['article', 'article--center' => $textCenter])>
    @foreach ($sentences as $sentence)
        <p class='article__paragraph' ,>
            {{ $sentence }}
        </p>
    @endforeach
</article>
