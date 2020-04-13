# trabajo2-paw: tecnologías del lado del servidor - PHP

**1. ¿Por qué cree usted que se requiere validar los datos en ambos extremos de la comunicación? (cliente y servidor)** <br>
La validación de los datos es muy importante en ambos lados de la comunicación. En primer lugar, tenemos la validación del lado cliente, con la cual no basta únicamente ya que puede ser subvertida. Pero la misma se realiza con el fin de proporcionar comentarios inmediatos al usuario. Es decir, les permite ahorrar un tiempo que, de otro modo, pasarían esperando en "un viaje de ida y vuelta" al servidor que podría devolver errores de validación. <br>
Por otro lado, la validación del lado del servidor es todavía más importante porque los datos recibidos no pueden ser considerados confiables. El usuario puede haber realizado algún tipo de manipulación sobre el HTML por lo cual "nunca confíes en el cliente". <br>
Por ende, la mejor opción es hacer ambas cosas porque, si tiene una aplicación cliente, desde la perspectiva de la experiencia del usuario es mejor anticiparse y no permitir que el usuario escriba información no válida. Y del servidor debe verificarse siempre esto. 

**3. Métodos GET y POST ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método?** <br>
El método GET es obtener información del servidor. Traer datos que están en el servidor al cliente. El POST, sin embargo, es enviar información desde el cliente para que sea procesada y actualice o agregue información en el servidor. A modo de ejemplo podemos pensar que, cuando enviamos (request) datos a través del formulario, estos son procesados y luego a través de una redirección devolvemos (response) alguna página con información. <br>
La diferencia básica entre estos métodos es que las peticiones HTTP del tipo POST suelen proporcionar información adicional del cliente (navegador) al servidor dentro del cuerpo del mensaje. Mientras que, las peticiones GET, incluyen toda la información requerida o necesaria dentro de la URL. <br>
Podemos concluir que conviene usar el método GET para solicitar información y devolverla como una respuesta y que estaría mal utilizarlo para “actualizar o insertar” información. Además, las llamadas por GET pueden ser cacheadas (historial navegador), indexadas por buscadores o agregar los enlaces a nuestros favoritos, entre otras cosas. Con el método POST sin embargo no se puede hacer esto. POST es conveniente utilizarlo para actualizar datos y en mayor cantidad, no sería correcto solicitar una página a través de POST y mostrarlo como una respuesta, ya que como dijimos le corresponde a GET. <br>
Por ejemplo: <br>
*http://localhost:8081//trabajos/tp2/punto3/validaciones.php?nombre=emanuel&email=joseemaro%40hotmail.com&telefono=5565656&edad=33&talla=45&altura=150&fecha_nacimiento=2020-03-13&color=morocho&fecha_turno=2020-03-21&horario_turno=08%3A00*

**4. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?** <br>
Si dos usuarios cargaran 2 imágenes con el mismo nombre, al estar en la misma carpeta, la última sobrescribiría el nombre de la que primero se haya grabado.  <br>
El mecanismo que implementamos para que una imagen no sobrescriba a otra, es fijarnos durante todo el proceso de validación de los datos ingresados, que no exista una imagen con el mismo nombre en la carpeta en donde se guardan (por medio de la función file_exists). En el caso, de existir una repetición de nombres concatenamos un discriminador ascendente al nombre de la imagen.

**5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?** <br>

Como mencionamos anteriormente, en el punto 3 los datos viajan en la URL. En cambio, en el punto 4, los datos (al utilizar el método POST) viajan en el cuerpo del mensaje HTTP y no figuran en la URL.

**6. ¿Cómo relaciona la imagen del turno con los datos del turno? Comente alternativas que evaluó y opción elegida.** <br>
En este punto, en el cual aplicamos un mecanismo de persistencia, básicamente almacenamos en un atributo de la clase correspondiente al turno el nombre de la imagen (todas se encuentran en el mismo directorio). Por lo cual persiste a todos los datos que la clase contiene. <br>
La otra alternativa evaluada fue que el nombre de la imagen este constituido por el identificador (id) del turno.

**7. ¿Cómo se identifica y discrimina un turno de otro?** <br>
Para identificar y discriminar a un turno del otro utilizamos la función uniqid cuyo resultado guardamos en un atributo de la clase correspondiente al turno. Dicha función genera un identificador basándose en el current time.
