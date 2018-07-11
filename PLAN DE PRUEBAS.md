# PLAN DE PRUEBAS

### Resumen Ejecutivo 

En el siguiente documento será posible encontrar el plan de pruebas que se realizaran al desarrollo de un 
sistema de gestión académica de un colegio, esto para verificar que los diferentes módulos y funcionalidades cumplan los 
requerimientos establecidos durante la etapa de elicitación de información, se buscara realizar pruebas unitarias, pruebas de 
integración, pruebas de sistemas y pruebas de aceptación esta última se desarrollara, y posteriormente cuando el sistema sea vendido
a una organización en especifico se realizara de nuevo para que la organización este satisfecha con los requerimientos que se manejaron.

### VIDEO DE PRUEBA

https://youtu.be/OJ058yBf1rE

## Alcance de las Pruebas

### Elementos de Pruebas

1. CRUD NOTAS
2. CRUD NOMINA
3. CRUD CURSO
4. CRUD HISTORIA ACADEMICA
5. CRUD MATERIA
6. ASIGNAR PROFESOR
7. ASIGNAR A HORARIO
8. GESTIONAR ROLES 
9. AUTENTICAR ACCESO 
10. CRUD ADMIN
11. CRUD ESTUDIANTE
12. CRUD PROFESOR


## Nuevas Funcionalidades a Probar 

Generación de Nómina.
Control de Biblotecas en el Colegio
Control de Notas
Seleccion de Bloque Horario por el estudiante

## Pruebas de Regresión 

Registro de Estudiante
Registro de profesor
Registro de Administrativo
Creacion de Materia
Asignacion de horarios
Produccion de perfil

En el momento de la implementación del modulo de biblioteca se deben realizar pruebas de regresión para evitar que los módulos anteriores se comprometan de manera negativa y afecte todo el producto de software

## Funcionalidades a No Probar

Aquellas que no han sido listadas anteriormente, ya que cubren el alcance establecido y esperado por el equipo de trabajo.

## Enfoque de Pruebas (Estrategia) 

Para el producto se van a realizar pruebas funcionales para el CRUD de los diferentes módulos además de pruebas de desempeño para el sistema en general donde se vea reflejados los criterios de éxito que hablan del ingreso masivo de usuarios a la vez. También se requieren hacer pruebas para corroborar que la información proveída por el cliente no presente incongruencias. En cuanto a las pruebas de regresión estas se deben aplicar a los posibles nuevos módulos que se presenten a lo largo del proyecto (biblioteca).
 
## Criterios de Aceptación o Rechazo
 ### Criterios de Aceptación o Rechazo 
 
Completar el 100% de las pruebas unitarias.
80% de casos exitosos.
70% de defectos corregidos.
 
Completar el 100% de las pruebas unitarias y de integración con aproximadamente un 90% de pruebas exitosas, esto para garantizar que en el producto se están cumpliendo todas las necesidades en su mayoría y con eficacia

### Criterios de Suspensión 

Se suspenderá el plan de pruebas al encontrar un error en alguna funcionalidad puesto que de seguir avanzando otras funcionalidades podrían verse afectadas, también se suspenderá por retrasos en el desarrollo y también se vera suspendido por ordenes directas de directores del proyecto

Incompletitud de una o varias funcionalidades.
Fallos en el desempeño de las pruebas.

### Criterios de Reanudación
Luego de ser corregidas las funcionalidades con errores el plan de pruebas será reanudado tan pronto como sea posible, cuando el equipo de desarrollo entregue los diferentes módulos también será reanudado el plan y con una orden directa del director del proyecto también puede ser reanudado

Corrección de fallos en la herramienta de prueba.
Corrección de defectos en las funcionalidades.

## Entregables 

Los entregables serán casos de prueba que estarán diliegenciados con toda la informacion respectiva de la prueba realizada,además de esto serán enfocados a los diferentes modulos y sus funciones CRUD

Documento de Plan de Pruebas.
Casos de Pruebas.
Reportes generados por las herramientas de automatización de pruebas.

## Recursos
 ### Requerimientos de Entornos – Hardware 
 
1. Computadores con acceso a internet 
2. plataforma que será almacenada en un servidor de pruebas 
3. Conexión a internet (2MB).
4. Base de daros MySql.
5. PHP 7.2

### Requerimientos de Entornos – Software 

1. Navegador WEB (Firefox o Google Chrome).
2. Entornos que soporten la plataforma 
3. Bases de Datos
4. Software de automatización de Pruebas.
 
### Herramientas de Pruebas Requeridas 

1. Herramientas de automatización de pruebas
2. Selenium

 ### Personal

1. Un (1) Líder de Pruebas
2. Cinco (5) Analista de Pruebas (Testers)
3. Dos (2) especialistas en automatización de pruebas
4. Un (1) representante de la administración del colegio. 

# Planificación y Organización

## Procedimientos para las Pruebas

1. Pruebas unitarias.
2. Pruebas de integración de modulos.
3. Pruebas de Aceptación.

# Matriz de Responsabilidades

## Integrantes del equipo QA:

Gerente
Ingeniero
Asistente 

## Matriz RACI

![Alt text](https://github.com/GuilleCol/GestionDeSofware/blob/master/rol.png?raw=true?raw=true "Title")

## Premisas

## Dependencias y Riesgos

# Glosario Matriz RACI

R Responsable 	Este rol corresponde a quien efectivamente realiza la tarea. Lo más habitual es que exista sólo un encargado (R) por cada tarea; si existe más de uno, entonces el trabajo debería ser subdividido a un nivel más bajo, usando para ello las matrices RACI.

A Aprobador 	Este rol se responsabiliza de que la tarea se realice y es el que debe rendir cuentas sobre su ejecución. Sólo puede existir una persona que deba rendir cuentas (A) de que la tarea sea ejecutada por su Responsable (R).

C	Consultado 	Este rol posee alguna información o capacidad necesaria para realizar la tarea.

I Informado 	Este rol debe ser informado sobre el avance y los resultados de la ejecución de la tarea. A diferencia del consultado (C), la comunicación es unidireccional. 
