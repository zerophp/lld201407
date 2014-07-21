<?php


// Include de librerias



// Generar el Layout de Login
1. Copiar el layout de login a la carpeta de layouts
2. Copiar el css a la carpeta de css
3. Corregir las URL del layout a absolutas


// Generar el Controller author 
1. swith sobre request[action]
2. un case para cada accion
3. cada accion tiene una view
4. cada controller tiene una carpeta en las views
5. agregar el controller a index.php_ini_loaded_file()

// PAra hacer la autenticacion
1. Generar la acccion author/login
2. Generarl el formulario de author login
3. REnderizar el formulario author login en el layout de login

// Autenticar
1. Tomar email y password de post
2. Comparar con la DB 
3. Si ok Crear la session
4. Llenar datos de usaurio
5. Llevar a ADMIN*
6. Si KO permanecer en el formulario
7. Reportar el error al usuario como error generico de autenticacion


// Desautenticar
1. Crear la accion logout en el controller author
2. Destruir la session (previamente creada)
3. Redirigir a home






switch ($request['action'])
{
	case 'index':
	break;
			
}

//include('../layouts/dashboard.php');