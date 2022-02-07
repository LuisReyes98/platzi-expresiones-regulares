# Platzi expresiones regulares

No son sencillas pero son sumamente potentes.

## ¿Qué son las expresiones regulares?

Son patrones de caracteres en los cuales los caracteres pueden ir entrando o no entrando. Haciendo la funcionalidad de filtro del texto.

Unas de las grandes ventajas de las expresiones regulares es que pueden ser utilizadas en casi todos los lenguajes de programación existentes.

## Aplicaciones de las expresiones regulares

Permiten filtrar texto, buscar patrones, validar formularios, etc. de forma sencilla y eficiente. filtrando con mucha velocidad enormes cantidades de texto.
Entre las aplicaciones de las expresiones regulares tenemos:

**buscar informacion en los archivos log de un servidor**, ya que son archivos tan enormes es muy probable que los editores de texto no lo puedan abrir.
En archivos de texto plano con mas de un millon de lineas, quizas quieras traer solamente las lineas que inician con un log de un usuario que inice con la letra "a" por ejemplo.

**Validar** patrones, por ejemplo en un formulatio definir el formato de un correo electronico y evaluar el texto que escribe el usuario con ese formato para saber si es un correo electronico valido.

[Cheat sheet de expresiones regulares](https://cheatography.com/davechild/cheat-sheets/regular-expressions/)

[Evaluador de expresiones regulares](https://regexr.com/)

[Tester de expresiones regulares](https://regex101.com/)

[Tester de expresiones regulares con ruby](https://rubular.com/)

### Notas alumnos

Las expresiones regulares pueden llegar a ser muy raras por la forma en la que se ven, pero son muy útiles. Aprender a usarlas nos ayuda en pocas palabras, a buscar. Se diferencia del CTRL+F porque éste busca textos precisos y te arroja el match. Con expresiones regulares es más complejo, por ejemplo se pueden buscar patrones (buscar todas las palabras que estén entre dos espacios, palabras que empiecen con mayúscula, encontrar la primer palabra de cada línea, etc)
Se usa mucho en logs de servidores que son archivos enormes para analizarlos
Las expresiones regulares son usadas tanto en frontend como en backend

## Introducción al lenguaje de expresiones regulares

Con las expresiones regulares vamos a solucionar problemas reales, problemas del día a día.

¿Qué pasa si queremos buscar en un texto (txt, csv, log, cualquiera), todos los números de teléfonos que hay?
Tendríamos que considerar por ejemplo, que un teléfono de México serían 10 dígitos; hay quienes los separan con guión, hay quienes los separan con puntos, hay quienes no los separan sino que tienen los 10 dígitos exactos, y este patrón puede cambiar para otros países.

Esto mismo sucede con números de tarjetas de crédito, códigos postales, dirección de correos, formatos de fechas o montos, etc.

Una tarjeta de credito tiene 16 dígitos

Identificar si en un numero decimal en ingles o español, habiendo un punto o una coma.

Identificar un numero de telefono separado por guiones.

[Herramienta para evaluar expresiones regulares](https://regex101.com/)

Se busca clasificar lo que queremos extraer en clases de expresiones regulares.

La expresion puede ser tan abierta como queramos, teniendo 8 o 4 digitos o mas, y siendo tan especifica como necesitemos.

## El caracter (.)

**Cadena de Caracteres**: Es un carácter ASCII generalmente, seguido de otro carácter y de otro. No todos son visibles, el espacio por ejemplo. Cada carácter es un carácter.

El caracter (.): Dentro de una exprecion regular encuentra todo lo que sea un carácter en el texto.

Seleccionando cada caracter individual.

Seleccionando un caracter seguido de un espacio.

```regex
. 
```

10 caracteres seguidos

```regex
..........
```

```regex
.{10}
```
