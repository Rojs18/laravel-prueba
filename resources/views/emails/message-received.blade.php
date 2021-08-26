<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mensaje recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $message ['name'] }} - {{ $message ['email'] }} </p>
	<p><strong>Con el asunto de:</strong> {{ $message ['subject'] }} </p>
	<p><strong>Contenido del mensaje:</strong> {{ $message ['content'] }} </p>
</body>
</html>
