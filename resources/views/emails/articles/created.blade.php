<h1>{{ $article->title }}</h1>
<small> {{ $article->user->name }}</small>
<hr/>

<p> {{ $article->content }}
<small> {{ $article->created_at }}</small>
</p>
<hr/>

<footer>
    이 메일은 {{ config('app.url') }} 에서 보냈습니다.
</footer>