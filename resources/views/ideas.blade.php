<x-master>
	<div class="bg-gray-900 py-24 sm:py-32">
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto max-w-2xl lg:mx-0">
				<h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">From the blog</h2>
				<a href="/ideas" class=" btn">All</a>
				<a href="/ideas?status=pending" class=" btn">Pending</a>
				<a href="/ideas?status=completed" class=" btn">Completed</a>
				<a href="/ideas?status=in_progress" class=" btn">In Progress</a>
			</div>
			<div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				@forelse($ideas as $idea)
					<article class="flex max-w-xl flex-col items-start justify-between">
						<div class="flex items-center gap-x-4 text-xs">
							<time datetime="2020-03-16" class="text-gray-400">{{$idea->created_at->diffForHumans()}}</time>
							<a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-success-800 hover:bg-gray-800 text-success">{{$idea->status}}</a>
						</div>
						<div class="group relative grow">
							<h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
								<a href="#">
									<span class="absolute inset-0"></span>
									{{$idea->title}}
								</a>
							</h3>
							<p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">{{$idea->description}}</p>
						</div>
					</article>
				@empty
					<p>NO data</p>
				@endforelse
			</div>
		</div>
	</div>

</x-master>