<x-master>
	<div class="bg-gray-900 py-24 sm:py-32">
		<div class="flex justify-between">
			<a href="{{route('ideas.index')}}" >Back to home</a>
		</div>
		<div class="gap-x-3 flex items-center">
			<button> Edit Idea</button>
			<form method="POST" action="{{route('idea.destroy',$idea)}}">
				@csrf
				@method('DELETE')
			<button> Delete Idea</button>
			</form>
		</div>
		<div class="mx-auto max-w-7xl px-6 lg:px-8">
			<div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
				<h1>{{$idea->title}}</h1>
				{{$idea->description}}
			</div>
		</div>
	</div>

</x-master>