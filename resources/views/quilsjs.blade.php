<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
	<title>Document</title>
</head>

<body>
	<h1>Test QUILJS</h1>
	<div id="editor">
		<h2>Write article here</h2>
	</div>
	<button onclick="handleClick()">Click</button>
	<script>
		const quill = new Quill('#editor', {
        theme: 'snow'
    })
    const handleClick = () => {
			console.log(quill.container)
		}
	</script>
</body>

</html>