<x-layout>
	<div class="flex p-2 border">
		<div class="w-1/3 pr-2 border-r-2">
			<ul>
				<li><a href="/" class="block p-2 my-1 text-center duration-100 border-2 border-black rounded hover:bg-black hover:text-white hover:cursor-pointer">Dashboard</a></li>
				<li><a href="/myPosts" class="my-1 border-2 border-black rounded block p-2 text-center duration-150 hover:bg-black hover:text-white hover:cursor-pointer {{ Request::is('myPost*') ? 'bg-black text-white hover:bg-slate-100 hover:border-cyan-800 hover:text-cyan-800' : ''}}">My Posts</a></li>
				@can('admin')
				<li><a href="/posts" class="my-1 border-2 border-black rounded block p-2 text-center duration-150 hover:bg-black hover:text-white hover:cursor-pointer {{ Request::is('posts*') ? 'bg-black text-white hover:bg-slate-100 hover:border-cyan-800 hover:text-cyan-800' : ''}}">All Posts</a></li>
				<li><a href="/users" class="my-1 border-2 border-black rounded block p-2 text-center duration-150 hover:bg-black hover:text-white hover:cursor-pointer {{ Request::is('users*') ? 'bg-black text-white hover:bg-slate-100 hover:border-cyan-800 hover:text-cyan-800' : ''}}">All Users</a></li>
				@endcan
				<li class="p-2 text-center duration-100 border-2 border-black hover:bg-black hover:text-white hover:cursor-pointer">
					<form action="/logout" method="POST">
						@csrf
						<button type="submit" class="">Logout</button>
					</form>
				</li>
			</ul>
		</div>

		<div class="w-2/3 p-2">
			{{ $slot }}
		</div>
	</div>
</x-layout>