<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
@if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={theme:{extend:{colors:{ink:{DEFAULT:'#1b1b2f',soft:'#2c2c4a'},brand:'#4338ca',pop:'#ffc94d',soft:'#ece9ff',cream:'#fff8ec',line:'#d9d3c4'},fontFamily:{serif:['"Space Grotesk"','sans-serif'],sans:['"DM Sans"','sans-serif']}}}}</script>
@endif
