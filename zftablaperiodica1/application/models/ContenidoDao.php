<?php

class Application_Model_ContenidoDao
{
    private $_listaContenido;
    public function  __construct()
    {
      $this-> _listaContenido= new ArrayObject();//hast aqui no hay relacion con el archivo user
      $value= new Application_Model_Contenido(); // me instancio a user, va a user
      $value->setId(1);
      $value->setNombre('MATERIA
En el mundo físico que nos rodea sólo hay materia que se manifiesta en forma de masa o energía y éstas se encuentran íntimamente relacionadas. Pero, ¿qué es la materia? Resulta difícil dar una definición de materia mediante términos corrientes.
Para nosotros, materia, es todo aquello que constituye los cuerpos y ocupa un lugar en el espacio; es la base del Universo y presenta dos propiedades fundamentales: ocupa espacio en el universo y posee masa, y como consecuencia impresiona nuestros sentidos. La materia se presenta en forma muy diversa, pero toda ella tiene la misma estructura: está formada por átomos, moléculas e iones.
Cuerpo: Es  toda porción limitada de materia.
Sistema: Es aquella parte del universo físico cuyas propiedades se están investigando. El sistema está confinado a un lugar definido del espacio por la frontera que lo separa del medio ambiente.
Átomo: Es la partícula más pequeña de los elementos hasta donde se conserva su identidad. Es decir, fracciones más pequeñas pierden la información sobre la identidad.
Molécula:  Es  la partícula más pequeña de un compuesto o elemento que tiene existencia estable o independiente en la naturaleza, estando formada por la unión íntima de dos o más átomos.
PROPIEDADES DE LA MATERIA:
Son las características que la identifican, es decir, las diversas formas como es percibida por nuestros sentidos; por ejemplo: color, olor, densidad, estado de agregación, punto de fusión, punto de ebullición, etc.
A.- Extensivas o Generales:
Son Aquellas cualidades de la materia dependientes de la masa. Son aditivas y no adecuadas para identificar a la materia. El tamaño, la forma, peso, volumen y calor absorbido por los cuerpos, son ejemplos de propiedades extensivas.
	Extensión o Volumen: La materia ocupa un lugar en el espacio. En el vacío no hay materia.
	Inercia: es la expresión  de un cuerpo a perder su estado de reposo o de movimiento uniforme y es una propiedad aditiva de la materia.
	Impenetrabilidad: Dos cuerpos no pueden ocupar al mismo tiempo el mismo lugar.
	Porosidad: Entre las partículas que forman la materia existe espacio vacío.
	Divisibilidad: La materia puede fragmentarse.
	Atracción: es el acercamiento mutuo que existe entre los cuerpos.
	Gravedad: es una fuerza de atracción  de todos los cuerpos hacia  el centro e la tierra.
	Cohesión: se da entre moléculas.
	Indestructibilidad: propiedad por la cual la materia no se crea ni se destruye solo se transforma.
B.- Intensivas o Particulares:
Son aquellas cualidades de la materia independientes de la masa. No son aditivas pero sí adecuadas para identificarla. El punto de fusión, punto de ebullición, densidad, dureza, viscosidad, inflamabilidad, son ejemplos de propiedades intensivas.
	Fuerza: es la oposición que presenta los cuerpos principalmente los sólidos al rayado.
	Maleabilidad: propiedad de algunos sólidos que son convertidos en láminas delgadas. Ejemplo: el  hierro crudo en laminas de hierro.
	Ductibilidad: propiedad principalmente de los metales al ser convertidos en hilos delgados. Ejemplo: el oro en hilos de oro.
	Comprensibilidad: propiedad por la cual los gases pueden variar su volumen de acuerdo a la presión al cual están sometidos.
');
      $this->_listaContenido->append($value); //  es para agregar una estructura a un array
      $this->_listaContenido->append(new Application_Model_Contenido(2, '
TEORIA ATOMICA II - DISTRIBUCION ELECTRONICA
NUMEROS CUANTICOS
OBJETIVOS:
-	Comprender el comportamiento del electrón en un sistema atómico.
-	Ser capaz de manejar el significado y aplicaciones de los cuatro números cuánticos para describir las características de los estados cuantizados de energía (niveles, subniveles y orbitales) y del electrón.
-	Realizar la distribución electrónica de cualquier especie atómica (átomos neutros e iones).

ESTRUCTURA DE LA NUBE ELECTRONICA
La nube electrónica (zona extranuclear), es la parte del átomo que rodea al núcleo donde se encuentran los electrones en movimiento en torno a él, a grandes velocidades. Estos electrones se encuentran en orbitales que pertenecen a los subniveles y niveles de energía.

1.	Nivel de Energía (n)
	Contiene, a los electrones con semejante alejamiento máximo promedio respecto al núcleo. En estas regiones, los electrones se encuentran girando en torno al núcleo sin ganar ni perder energía.

Notación cuántica (n)	1	2	3	4	5	6	7 ...
Notación
espectroscópica
K
L
M
N
O
P
Q ...

Observación:
Número de electrones por nivel = 2n2
Número máximo de orbitales por nivel = n2
Número de subniveles por nivel = n

2.	Subnivel de energía (l)
	Contiene a los electrones que tienen la misma energía. Estos subniveles se encuentran conformando los niveles mas comunes son:
Tipo	l	Forma del
Orbital	Número de
orbitales	Número máximo
de electrones
Sharp
(S)	0	Esférica	1	2
Principal
(p)	1	Dilobular	3	6
Difuso
(d)	2	Tetralobular	5	10
Fundamental
( f )	3	Octolobular	7	14
Observación:
Número de electrones por subnivel = 4l + 2
Número máximo de orbitales por subnivel = 2l + 1

3.	Orbital o REEMPE
	Es la región del espacio atómico en donde existe la máxima probabilidad de encantar al electrón. Un orbital puede contener como máximo dos electrones.
Clases de Orbitales:

	orbital lleno (2 electrones apareados)
	orbital semilleno (1 electrón desapareado)
	orbital vacío
Regla de Hund
Se le conoce con el nombre de “Principio de la MAXIMA MULTIPLICIDAD” y establece que los electrones de un átomo al llamar subniveles de energía lo hacen tratando de ocupar el mayor número posible de orbitales.






Ejemplo:
		1 orbital lleno
		2 orbitales semillenos
		2 electrones apareados
		2 electrones desapareados
NUMEROS CUANTICOS
Es un conjunto de valores (n, l, m, s) que describen cada uno de los estados posibles para un electrón haciendo posible el ordenamiento electrónico de cualquier átomo denominado configuración electrónica:
Los tres primeros números cuánticos fueron deducidos por Schrödinger a partir de una ecuación denominada ecuación de onda. El número cuántico “s” de Spin fue asociado al electrón en forma independiente por Göudsmit y Uhlenbeck siendo obtenido en forma experimental por Stern y Gerlach.

1.	Número Cuántico Principal (n)
	Determinar el tamaño de la nube electrónica y siga el valor del nivel de energía, sus valores son:
	  n = K, L, M, N, O, P, Q, . . . ., 
	  N = 1, 2, 3, 4, 5, 6, 7, . . . , 
2.	Número Cuántico Secundario o Azimutal (l)
	Determina la forma de la nube electrónica, y fija el valor del subnivel de energía, sus valores son:
	  l = s, p, d, f, . . . ., n - 1
	  l = 0, 1, 2, 3, . . . ., n - 1

3.	Número Cuántico Magnético (m)
	Determina la orientación de la nube electrónica y fija el valor del orbital.
	  (l = 0)   s                      0
	  (l = 1)   p              -1    0   +1
	  (l = 2)  d         -2   -1    0   +1   +2
	  (l = 3)   f    -3  -2   -1   0   +1   +2   +3
	Sus valores son:

	m = 0,  1,  2,  3, . . . . ,  1

4.	Número Cuántico Spin Magnético (s)
	Determinar el sentido de giro del electrón sobre su propio eje, los únicos valores que adopta son:
		S =  + 1/2 , - 1/2



		       + 1/2     - 1/2
PRINCIPIO DE EXCLUSION DE W. PAULL
En un átomo no pueden existir dos o más electrones que presenten los cuatro números cuánticos iguales. Al menos se deben diferenciar en el número cuántico magnético del Spin (S).




CONFIGURACION ELECTRONICA (C.E.)
Consiste en ordenes a los electrones de un sistema atómico de acuerdo al principio de formación AUFBAU (construcción) el cual establece que los electrones deben ordenarse de menor a mayor energía.
'));
      $this->_listaContenido->append(new Application_Model_Contenido(3, 'NUBE ELCTRONICA'));
      $this->_listaContenido->append(new Application_Model_Contenido(4, 'TABLAPERIODIACA'));
      $this->_listaContenido->append(new Application_Model_Contenido(5, 'UNIDADES QUIMICA DE MASA'));
      $this->_listaContenido->append(new Application_Model_Contenido(6, 'NOMENCLATURA INORGANICA'));
      $this->_listaContenido->append(new Application_Model_Contenido(7, 'ENLACE QUIMICO'));
      $this->_listaContenido->append(new Application_Model_Contenido(8, 'ESTADO GASEOSO'));
      $this->_listaContenido->append(new Application_Model_Contenido(9, 'SOLUCIONES'));
      $this->_listaContenido->append(new Application_Model_Contenido(10, 'ESTEQUIOMETRIA'));
      $this->_listaContenido->append(new Application_Model_Contenido(11, 'REACCIONES QUIMICAS'));
      $this->_listaContenido->append(new Application_Model_Contenido(12, 'QUIMICA ORGANICA'));
      $this->_listaContenido->append(new Application_Model_Contenido(13, 'FUNCIONES OXIGENADAS'));

    }
    public function listado()
    {
    return $this->_listaContenido;
    }
    public function buscarPorId($id)
    {
        $result=null;
    foreach ($this->_listaContenido as $value)
    {
        if ($id == $value->getId() )
        {
         $resul=$value;
         break;
        }
    }
    return $resul;
    }

}


