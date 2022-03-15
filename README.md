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

## El caso de (?) como delimitador

.+, - Toma palabras separadas por coma `,` pero toma la linea completa

.+?, - Toma palabras separadas por coma `,` pero esta vez tomando la seleccion mas pequeña posible, (util para obtener todas las columnas de un csv por ejemplo)

`?` en este contexto es un selector lazy que dice que vaya tomando las seleccioanes como vayan viniendo, y no tomar tantos caracteres como se pueda.

.+?[,\n]{1,1} - Toma las palabras separadas por coma o que terminan en un salto de linea

**Nota importante** los emojis en ciertos sistemas son hasta 4 caracteres que se muestran como una imagen

**Posibilidades**
Podemos validar entrada de datos, podemos limpiar data para base de datos, leer archivos etc...

## Not (^), su uso y sus peligros

\D - es la negacion de \d, es decir todo lo que no sea un digito

\S - todo lo que no sea un espacio \s

`^` - es una negacion y nos permite negar clases custom hechas por nosotros

[^0-5a-c] - Los numeros fuera de 0-5 y las letras fuera del rango de a-c

\d\d\D?\d\d\D?\d\d - digitos de a 2 separados por un NO digito

### Notas alumnos, estos son los demas: 😉

\t — Representa un tabulador.

\r — Representa el “retorno de carro” o “regreso al inicio” o sea el lugar en que la línea vuelve a iniciar.

\n — Representa la “nueva línea” el carácter por medio del cual una línea da inicio. Es necesario recordar que en Windows es necesaria una combinación de \r\n para comenzar una nueva línea, mientras que en Unix solamente se usa \n y en Mac_OS clásico se usa solamente \r.

\a — Representa una “campana” o “beep” que se produce al imprimir este carácter.

\e — Representa la tecla “Esc” o “Escape”

\f — Representa un salto de página

\v — Representa un tabulador vertical

\x — Se utiliza para representar caracteres ASCII o ANSI si conoce su código. De esta forma, si se busca el símbolo de derechos de autor y la fuente en la que se busca utiliza el conjunto de caracteres Latin-1 es posible encontrarlo utilizando “\xA9”.

\u — Se utiliza para representar caracteres Unicode si se conoce su código. “\u00A2” representa el símbolo de centavos. No todos los motores de Expresiones Regulares soportan Unicode. El .Net Framework lo hace, pero el EditPad Pro no, por ejemplo.

\d — Representa un dígito del 0 al 9.

\w — Representa cualquier carácter alfanumérico.

\s — Representa un espacio en blanco.

\D — Representa cualquier carácter que no sea un dígito del 0 al 9.

\W — Representa cualquier carácter no alfanumérico.

\S — Representa cualquier carácter que no sea un espacio en blanco.

\A — Representa el inicio de la cadena. No un carácter sino una posición.

\Z — Representa el final de la cadena. No un carácter sino una posición.

\b — Marca la posición de una palabra limitada por espacios en blanco, puntuación o el inicio/final de una cadena.

\B — Marca la posición entre dos caracteres alfanuméricos o dos no-alfanuméricos.

## Reto: Filtrando letras en números telefónicos utilizando negaciones

Soluciones

([\d+][\W]?){6}

\d\d\W?\d\d\W?\d\d\W?

(\d{2}\W?){3}

(\d{1,}[^\w]?){6} - esta solucion no toma los saltos de linea

## Principio (^) y final de linea ($)

Se usan para que no haya dos matches en una linea,

Estos dos caracteres indican en qué posición de la línea debe hacerse la búsqueda:
el ^ se utiliza para indicar el principio de línea
el $ se utiliza para indicar final de línea

^ ------------- $

^\d$ - empieza la linea tiene un solo digito y termina la linea

^\d{3,6}$ - solo entre 3 o 6 digitos por linea

^[^\d].*$ - Toma lineas completas que no empiezan con un digito

^\w+,\w+,\w+$ - 3 palabras separadas por coma `,` por linea, si es un CSV solo si la linea tiene 3 columnas bien formadas

^(\w+,?){3,3}$ - mismo 3 palabras separadas por `,` coma por linea

## Logs

Manejando el ejemplo de logs de liners.txt

^\[LOG.*\[WARN\].*$ - lineas de log warning

^\[LOG.*\[LOG\].*\[user:@beco\].*$ - solo los logs del user beco

^\[LOG.*\[LOG\].\[user:@\w+\].*$ - Logs de cualquier usuario

### Reto example.log

^(\D[\w]+\.?){1,}.*$ - primer tipo de log los mensajes que inician con una dirección en letras que no es una IP

^\[.*\]\s\[error\].+$ - mensaje de error en el segundo tipo de log

## Teléfonos

Conseguir un telefono

^\+?(\d{2,3}[^\da-z]?){2,3}[#pe]?\d*$

Analisis de la expresion:

Quiero una linea que inicie con o sin un simbolo de `+` seguido de un grupo de 2 o 3 digitos, seguido de un no digito que no es una letra, este patron 2 o 3 veces( es decir 2 o 3 grupos de 2 o3 digitos seguidos de un simbolo), seguido de los caracteres `#` o `p` o `e` y un grupo de digitos hasta el final de la linea.

## URLs

https?:\/\/[\w\-\.]+\.\w{2,5}\/? - El dominio de una URL

https?:\/\/[\w\-\.]+\.\w{2,5}\/?\S* - Trae la url completa

`(https?:\/\/)[\w\-\.]+\.\w{2,5}\/?\S*` - Trae la url completa

## Mails

@[\w\.\-]{2,}\.\w{2,5} - Dominio de los correos electronicos

[\w\._]{1,30}\+?[\w]{0,10}@ - Nombre del correo electronico

[\w\._]{1,30}\+?[\w]{0,10}@[\w\.\-]{2,}\.\w{2,5} - correo electronico completo

[\w\._]{1,30}\+?[\w]{0,10}@[\w\.\-]{2,}\.\w{2,5}

El final de la expresion regular evalua el top-level domain (TLD)

## Localizaciones

Las expresiones regulares permiten saber si la coordenada esta escrita en el formato correcto, no hay forma de saber si esta el valor entre 0 y 180 ya se encargara el lenguaje de programacion que usemos de validar si efectivamente es una coordenada valida.

No podemos determinar si es un valor correcto solo si tiene la forma correcta.

[\-]?\d{1,3}\.\d{1,6},\s?[\-]?\d{1,3}\.\d{1,6} - Coordenada numerica, Solo la latitud y longitud

^[\-]?\d{1,3}\.\d{1,6}\s?,\s?[\-]?\d{1,3}\.\d{1,6},.*$ - Coordenada numerica, toda la latitud y longitud con los metros sobre el nivel del mar

`[\-]?\d{1,3}\s\d{1,2}'\s\d{1,2}\.\d{2,2}"[WE],` - Primer segmento con Coordenada con grados, minutos y segundos

`^[\-]?\d{1,3}\s\d{1,2}'\s\d{1,2}\.\d{2,2}"[WE],\s[\-]?\d{1,3}\s\d{1,2}'\s\d{1,2}\.\d{2,2}"[NS]$` - Toda la latitud y longitud en grados, minutos, segundos

Proyecto que divide todo el mundo en una matriz de cuadrados de 3 x 3 metros y les asigna 3 palabras
https://what3words.com/swung.ember.greeting

`^(\/){3,3}[a-z]{3,}\.[a-z]{3,}\.[a-z][a-z]+` - ubicacion segun 3 words

## Nombres(?) Reto

`^[A-ZÁÉÍÓÚ][\wáéíóúñ]+` - Nombres latinos

`^([A-ZÁÉÍÓÚ][\wáéíóúñ]+\s?,?)+$` - Nombres separados por espacios

`^.+\s?$` - Todos los nombres del mundo termina siendo cualquier string

## Búsqueda y reemplazo

`^\d+::([\w\s:,\(\)\.'éè\-Àûîêôóí&!ã\?]+)\s\((\d{4})\)::.*`

Esta sintaxis reemplaza todo por los grupos de los parentesis
`$1,$2`
