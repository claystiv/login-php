<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
        <meta name="author" content="STIVEN T.">      
</head>
<body text='#ff000' bgcolor='000000' style='background-repeat:no-repeat ; background-position-x:center'>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
             <table border='10' align='center' cellpadding='10' cellspacing='10' bgcolor='00aa50'> 
            
            <th colspan='2'>
                    <h1 align='center'>
                        Login
                    </h1>
                </th>
                
                  <tr>
                    <td>Nombre de usuario:
                    </td>
                    <td align='center'>
                        <input type="text" id="usuario" name="usuario" placeholder="usuario" minlength="2" maxlength="30"  required>
                    </td>
                </tr>
                
                <tr>
                    <td>Contraseña:
                    </td>
                    <td align='center'>
                        <input type="password" id="pass" name="pass" placeholder="contraseña" minlength="2" maxlength="30" required>
                    </td>
                </tr>
            
	         <tr>                    
                    <td align='center'>
                        <input type='reset' value='Borrar'>
                    </td>
        		<td align='center'>
                        <input type="submit" value="Iniciar sesión">
                    </td>
                </tr>
           </table>
		
            
		
        
      <?php
      
      session_start();
      
       
      $usuario = $_POST['usuario'];
      $pass = $_POST['pass'];
      
      
      if ( $usuario == 'pedro' && $pass == '4567')
      {
          
          $_SESSION['usuario'] = $usuario;
          
          header('Location: menu.php');   
      }
      else {
          
          echo 'Nombre de usuario o contraseña incorrectos.';
          
        }
	
	?>
 
   
</body>
</html>