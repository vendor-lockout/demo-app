<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@2.0.2"
            integrity="sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ" crossorigin="anonymous">
    </script>
</head>
<body class="bg-slate-50 dark:text-slate-50 text-slate-950 dark:bg-slate-950">
<div class="flex flex-col px-4 py-8 max-w-screen-sm mx-auto gap-8">
    <header>
        <h1 class="text-3xl font-bold">
            Demo App!
        </h1>
    </header>

    <main class="flex flex-col gap-4">
        <button hx-get="{{ url('/') }}" hx-trigger="click" hx-target="#posts"
                class="w-fit block border border-slate-700 shadow px-4 py-1 rounded-xl dark:border-slate-500">
            Load posts
        </button>

        <section id="posts" class="flex flex-col gap-4">
            @fragment('posts')
                @foreach ($posts as $post)
                    <article>
                        <h2 class="text-xl font-bold">
                            {{ $post->title }}
                        </h2>
                        <p>
                            {{ $post->content }}
                        </p>
                        <small class="text-xs text-slate-600 dark:text-slate-500">
                            {{ $post->created_at->toDateTimeLocalString() }}
                        </small>
                    </article>
                @endforeach
            @endfragment
        </section>
    </main>
</div>
</body>
</html>
