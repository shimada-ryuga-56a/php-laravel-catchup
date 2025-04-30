<!-- resources/views/components/nav.blade.php -->
<nav class="bg-brand py-4 text-white">
    <div class="container mx-auto flex justify-between">
        <a href="{{ url('/') }}" class="font-bold">My Laravel App</a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('posts.index') }}" class="hover:underline">投稿一覧</a></li>
            @auth
                <li><a href="{{ route('posts.create') }}" class="hover:underline">新規投稿</a></li>
                @role('admin')
                <li><a href="{{ route('tags.index') }}" class="hover:underline">タグ管理</a></li>
                @endrole
                <li><a href="{{ route('profile.edit') }}" class="hover:underline">プロフィール</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:underline">ログアウト</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}" class="hover:underline">ログイン</a></li>
                <li><a href="{{ route('register') }}" class="hover:underline">登録</a></li>
            @endauth
        </ul>
    </div>
</nav>
