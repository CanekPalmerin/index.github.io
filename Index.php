<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
   <link rel="stylesheet" href="boton.css">
   <style>
   body {font-family: Arial; background-color: blue; box-sizing: border-box;}   

  form{
    background-color: white;
    border-radius: 3px;
    color: red;
    padding: 10px;
    margin:0 auto;
    width:300px;
  }
 

  input, textarea{
    width: 280px;
        
     }

     .field{
       border:solid 1px #ccc;  
       padding:10px;

       

     }

     
     .field:focus{
       border-color: #red;

     }

     
     .center-content{
       text-aling: center;
     }
       </style>
 

</head>
<body>
    <h1>Registro</h1>
    <h2>Todos los campos con (*) son obligatorios llenar</h2>
    <form action="#">
    <table>
    <tr>
    <td>
      Nombre:
    </td>
    </tr>
    <td>
       <input id ="nombre" type="nombre"  placeholder="Nombre" name="nombre" />
    </td>

    <tr>
      <td>
        Apellido paterno:
      </td>
      </tr>
      <td>
         <input id ="AP" type="AP" name="AP" placeholder="Apellido Paterno"/>
      </td>

      <tr>
        <td>
          Apellido materno:
        </td>
        </tr>
        <td>
           <input id ="AM" type="AM" name="AM" placeholder="Apellido Materno"/>
        </td>
        
        <tr>
          <td>
            Dirección:
          </td>
          </tr>
          <td>
             <input id ="Direccion" type="Direccopn" name="Direccion" placeholder="Direccion"/>
          </td>

          <tr>
            <td>
              RFC:
            </td>
            </tr>
            <td>
               <input  id ="RFC" type="RFC" name="RFC" placeholder="RFC"/>
            </td>
        
            <tr>
              <td>
                *CURP:
              </td>
              </tr>
              <td>
                 <input id="CURP" type="CURP" name="CURP" placeholder="CURP"required="completa este campo"/>
              </td>
          
              
            

    <tr>
    <td>
      Numero telefonico:
    </td>
    </tr>
    <td>
       <input id="NT" type="NT" name="NT" placeholder="Numero Telefononico"required="completa este campo"/>
    </td>

    <tr>
      <td>
        *Correo electronico:
      </td>
      </tr>
      <td>
         <input id="Correo" type="Correo" name="Correo" placeholder="Correo electronico"required="completa este campo"/>
      </td>

    <tr>

    <tr>
      <td>
        <label for="password">*Contraseña: </label>
      </td>
      </tr>
      <td>
        <input type="password" name="password" placeholder="Ingresa contraseña" id="password" required="completa este campo">
         <br> <br>

         <label for="password">*Repetir contraseña: </label>
      </td>
      </tr>
      <td>
        <input type="password" name="rpassword" placeholder="repite contraseña" id="rpassword" required="completa este campo">
         <br> <br>

    

         
          <input type="submit" name="submit" value="Registrarse"/> 
          <input type="reset"/>
        </td>

    
  </form>



</body>
</html>