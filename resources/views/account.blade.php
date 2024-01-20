<x-app>
	<x-errors/>
  <form method="post" enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
			<label class="form-label">アイコン画像</label>
			@if (Auth::user()->icon)
			<img src="{{ asset('storage/images/' . Auth::user()->icon) }}" style="width: 200px; height: 200px; object-fit: cover;">
			<a href="{{ asset('storage/images/' . Auth::user()->icon) }}">aa</a>
			@endif
			<input class="form-control" type="file" name="icon" accept=".jpg,.png,.jpeg" required>
		</div>
		<button class="btn btn-primary" type="submit">更新</button>
	</form>
</x-app>