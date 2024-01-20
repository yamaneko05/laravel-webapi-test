<x-app>
	<div style="max-width: 400px;">
		<form method="post">
			@csrf
			<div class="mb-3">
				<label class="form-label">メールアドレス</label>
				<input type="email" name="email" class="form-control" placeholder="name@example.com">
			</div>
			<div class="mb-3">
				<label class="form-label">パスワード</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">ログイン</button>
		</form>
	</div>
</x-app>