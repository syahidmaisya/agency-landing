<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SB NET Studio — Jasa Website</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
	<div class="min-h-screen">
		<div class="pointer-events-none fixed inset-0 -z-10">
			<div class="absolute left-1/2 top-[-120px] h-[420px] w-[420px] -translate-x-1/2 rounded-full bg-indigo-500/25 blur-3xl"></div>
			<div class="absolute right-[-120px] top-[120px] h-[420px] w-[420px] rounded-full bg-cyan-400/15 blur-3xl"></div>
		</div>

		@yield('content')
	</div>
</body>
</html>