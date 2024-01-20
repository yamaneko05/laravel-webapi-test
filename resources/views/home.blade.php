<x-app>
<form action="/notify" method="post">
	@csrf
	<button class="btn btn-primary">通知を生成する</button>
</form>
</x-app>