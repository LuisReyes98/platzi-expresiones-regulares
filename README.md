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

## Las clases predefinidas y construidas

Hay que ser cuidadoso con lo que se busca ya que casi siempre las expresiones regulares encontrarán algo y puede que no sea lo que queremos exactamente.

### Dígitos: \d

- Encuentra todos los dígitos de 0 a 9.
- \d es equivalente a poner [0-9].
- Si en vez de \d, usamos por ejemplo [0-2] nos encontrará solamente los dígitos de 0 a 2.
- Podemos usar “\D” para encontrar justo lo contrario, todo lo que no son dígitos.

### Palabras: \w

- Encuentra todo lo que puede ser parte de una palabra, tanto letras (minúsculas o mayúsculas) como números.
- \w es equivalente a poner [a-zA-Z0-9_].
- Si en vez de \w, usamos por ejemplo [a-zA-Z] nos encontrará solamente las letras.
- Podemos usar “\W” para encontrar justo lo contrario, todos los caracteres que no son parte de palabras.

### Espacios: \s

- Encuentra todos los espacios (los saltos de línea también son espacios).
- Podemos usar “\S” para encontrar justo lo contrario, todo lo que no son espacios.

### Saltos de línea: \n

- Todos los saltos de línea (ENTER) que hay en el texto.

### Grupos específicos: [0-9]

- puede ser un reemplazo de \d, pero especificando un rango de dígitos.
- es más específico y potente.
- [6-9] nos encontrará solo los dígitos de 6 a 9.
- [a-zA-Z0-9] todas las letras y los números siendo equivalente a \w.
- [a-fA-F0-9\.] número hexadecimales, con caracteres del 0 al 9 de la "A" a la F minúscula y mayúscula y los puntos para el decimal.
- [a-fABCDEF0-5\.] Se puede incluso declarar carácter a carácter sin aprovechar el rango.

### Reto

encontrar digitos hexadecimales de colores

[a-fA-F0-9]{3,6}

## Los delimitadores: +, *, ?

\w - caracteres de palabras

\d - digitos

\s - espacios/invisibles en blanco

[0-9] ~ \d

[0-9a-zA-Z] ~ \w

`.*` - Encuentra todos los caracteres agrupando por lineas

\d* - Todos los digitos

\d+ - todos los digitos y mas

`*` greddy - todo

`+` uno o mas seleccionando la lina

\d? hace lo mismo de uno o mas pero no agrupo toda la linea, ademas selecciona **los caracteres nulos**

\d+[a-z] - Todos los digitos que pueda y que al final tenga una palabra

\d*[a-z] - Una palabra o digito tomando todos los digitos y que termine en una palabra

\d*[a-z][a-z]? - Halla o no digitos, halla una letra, halla o no una letra

\d*[a-z]s - Puede o no tener digitos, tiene una letra y debe terminar en una `s`

\d*[a-z]?s - Puede o no tener digitos, tiene 0 o 1 letra y debe terminar en una `s`

### ¿Cuantas veces debe aparecer o puede aparecer?

`+` - debe aparecer porque es uno o más veces

`*` - puede aparecer, 0 o muchas veces

`?` - puede aparecer, 0 o 1 veces

**Las expresiones regulares son muy potentes creando soluciones escalables y reutilizables para el manejo de textos.**

[debugger de regex](https://www.debuggex.com/)

## Los contadores {1,4}

Definir cantidad de veces que aparece un caracter

\d{2,2} - exactamente 2 digitos, minimo 2 y maximo 2

\d{2,10} - minimo 2 y maximo 10 digitos

\d{4,} - minimo 4 y maximo infinito

\d{2,2}-?\d{2,2}-?\d{2,2}-?\d{2,2} - numero de telefono de mexico con o sin guiones en pares de dos

\d{2,2}[\-\.]? - con 2 digitos, y se crea la clase de `-` guiones y `.` puntos que pueden o no estar, porque `?` es 0 o 1 veces

[\-\.] - Clase custom que representa la presencia de un guion o punto

[\-\. ] la clase considera guiones, puntos y tambien el espacio en blanco.

(\d{2,2}[\-\. ]?){3,9} - agrupando para delimitar la cantidad de caracteres en la clase que definimos
