<x-app>
	<x-errors/>
  <form method="post">
		@csrf
		<div class="mb-3">
			<label class="form-label">アイコン画像</label>
			<input class="form-control" type="file" name="icon" accept=".jpg,.png,.jpeg" required>
		</div>
		<button class="btn btn-primary" type="submit">更新</button>
	</form>
</x-app>