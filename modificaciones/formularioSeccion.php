<html>
<head>
	<meta charset="UTF-8">
	<title>Formulario de Captura de datos</title>
</head>
<body>
	<from action="manejadorSeccion.php?accion=save" method="post">
		<table>
			<tr>
				<td>
					Nombre:
				</td>
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>
					Escuella:
				</td>
				<td>
					<select name="escuela">
						<option value=""></option>
						<option value="sistemas">Sistemas</option>
						<option value="manto">Mantenimiento</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name='not' value='Enviar'>
				</td>
			</tr>
		</table>
	</from>
</body>
</html>