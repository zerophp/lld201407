<?php


$a=<<<EOD
<table border="0" cellpadding="0" cellspacing="0">
				<tbody><tr>
					<td width="20">&nbsp;&nbsp;</td>
					<td valign="top">
						<br><br>
						<p class="wpsTexto" align="justify">
						Utilice el siguiente formulario para solicitar cualquier tipo de información sobre la tecnología, los productos
						y los servicios de TRIANGLE:
						</p>
					</td>
					<td width="20">&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td width="20">&nbsp;&nbsp;</td>
					<td>
						<br>
						<table border="0" cellspacing="cellpadding=0">
						<form action="mailto:triangle.info@triangle.es" method="POST"></form>
						<tbody><tr>
							<td align="right">
								Nombre:
							</td>
							<td><input type="text" name="Nombre"></td>
							<td width="5">&nbsp;</td>
							<td align="right">
								Apellidos:
							</td>
							<td><input type="text" name="Apellidos"></td>
						</tr>
						<tr>
							<td align="right">
								Empresa:
							</td>
							<td><input type="text" name="Empresa"></td>
							<td width="5">&nbsp;</td>
							<td align="right">
								Cargo:
							</td>
							<td><input type="text" name="Cargo"></td>
						</tr>
						<tr>
							<td align="right">
								Dirección:
							</td>
							<td><input type="text" name="Dirección"></td>
							<td width="5">&nbsp;</td>
							<td align="right">
								Población:
							</td>
							<td><input type="text" name="Población"></td>
						</tr>
						<tr>
							<td align="right">
								CP:
							</td>
							<td><input type="text" name="CP"></td>
							<td width="5">&nbsp;</td>
							<td align="right">
								Teléfono:
							</td>
							<td><input type="text" name="Telefono"></td>
						</tr>
						<tr>
							<td align="right">
								Tel. Móvil:
							</td>
							<td><input type="text" name="Movil"></td>
							<td width="5">&nbsp;</td>
							<td align="right">
								E-mail:
							</td>
							<td><input type="text" name="E-mail"></td>
						</tr>
						<tr>
							<td align="right">
								Asunto:
							</td>
							<td colspan="4"><input type="text" name="Asunto" size="57"></td>
						</tr>
						<tr>
							<td align="right">
								Consulta:
							</td>
							<td colspan="4"><textarea cols="56" rows="4" name="Consulta"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="4"><input type="submit" value="Enviar">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Borrar">
						</td></tr>
						
						</tbody></table>
					</td>
					<td width="20">&nbsp;&nbsp;</td>
				</tr>
			</tbody></table>
EOD;

echo $a;