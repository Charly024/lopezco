# MEDIA QUERIES
Las media queries (en español "consultas de medios") son útiles cuando deseas modificar tu página web o aplicación en función del tipo de dispositivo (como una impresora o una pantalla) o de características y parámetros específicos (como la resolución de la pantalla o el ancho del viewport del navegador).

Se utilizan para:
- Aplicar estilos condicionales con las reglas-at @media e @import de CSS.
- ndicar medios específicos en los elementos <link>, <source> y otros elementos HTML.
- Testear y monitorizar los estados de los medios usando los métodos de javascript Window.matchMedia() y MediaQueryList.addListener().

## SINTAXIS
Las media queries consisten de un tipo de medio opcional y una o más expresiones de características de medios. Varias consultas se pueden combinar utilizando operadores lógicos. No distinguen entre mayúsculas y minúsculas.

El resultado de la consulta es "verdadero" cuando el tipo de medio (si se especifica) coincide con el dispositivo en el que se está mostrando el documento y todas las expresiones en el media query son "verdaderas". En este caso, se aplica los estilos correspondientes, siguiendo las reglas usuales de cascada.

Las consultas sobre tipos de medios desconocidos son siempre falsas.

~~~
<!-- CSS media query on a link element -->
<link rel="stylesheet" media="(max-width: 800px)" href="example.css" />


<!-- CSS media query within a style sheet -->
<style>
@media (max-width: 600px) {
  .facet_sidebar {
    display: none;
  }
}
</style>
~~~
## REFERENCIA
[CSS media queries - CSS | MDN. (s. f.). MOZILLA.](https://developer.mozilla.org/es/docs/Web/CSS/Media_Queries/Using_media_queries)