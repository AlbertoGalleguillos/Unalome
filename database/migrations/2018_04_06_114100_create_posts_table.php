<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');   
            $table->boolean('published')->default(false);         
            $table->timestamps();
        });

        DB::table('posts')->insert([
            ['title' => 'Maestro, quisiera saber ¿Por qué te pusiste ese nombre?', 'body' => 'Baarish sonrío y luego contestó…

Baarish significa “lluvia” en hindi y lo escogí para seguir el ejemplo del Buda, quien alguna vez dijo a quienes le oían; hoy vengo a dejar sobre ustedes mis palabras igual como la lluvia cae sobre el bosque para que cada uno la aproveche según su tamaño y según su necesidad , ¿No te parece hermoso el nombre que elegí?  
            
Y agregó – Me gustaría saber uno de estos días que también escogiste un nombre para ti, un nombre que te acerque a lo que amas.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Dime señor, ¿Es importante qué estemos en este satsang? ', 'body' => 'Baarish respondió - Satsang es una palabra que viene del sánscrito, “sat” significa verdad y “sanga” significa compañía, por tanto, estamos en compañía de la verdad.    

Somos una asamblea de personas que escuchan, hablan,  leen, reflexionan, discuten y meditan a fin de asimilar el significado, el sentido y la aplicación de lo que compartimos.
            
Para que lo entiendas mejor; un rico va al banco, un aficionado al futbol va al estadio, un religioso a su templo. Nosotros nos juntamos aquí.
            
Es casi genético si lo observas, los perros se juntan con los perros, la jirafas con las jirafas, todos forman manadas, cardúmenes, enjambres, bandadas, etc.   
            
Juntarnos entonces parece natural y es lo que nos enseña la vida. Me parece que dondequiera que se reúnan personan con esta misma inquietud espiritual establecen un satsang, no es un lugar, solo es la misma energía', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor , yo he estado en reuniones como ésta antes y siempre hay fotografías y pequeños altares dedicados a alguien, ¿Por qué aquí no hay esas cosas?', 'body' => 'Baarish sonrió al escuchar la pregunta, reflexiono unos segundos y contestó -  Solo es un símbolo de la antigua tradición budista, se llama unalome y representa el camino personal de búsqueda de la verdad a lo largo de la vida.

Comienza en una espiral y esa espiral son nuestras dudas, temores e incertidumbres, es todo aquello que nos produce confusión. Así iniciamos la búsqueda de claridad, de un lado a otro, explorando, experimentando muchas fuentes y conforme vas adquiriendo conciencia se torna recta y ya no tienes que buscar porque en la claridad encuentras y si te elevas aún mas, podrás fabricar lo que buscabas porque te volviste un ser armonioso.
            
No hay fotografías por eso, no alabamos a nadie, no somos filósofos, ni religiosos, no seguimos a personas ni libros, lo hacemos sin intermediarios porque todo lo que necesitamos está adentro nuestro, unalome es eso, es el camino que hemos escogido', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, Tú crees que estar aquí es lo mejor que podemos hacer por nosotros?', 'body' => 'Esto lo lei y se quedó conmigo  – respondió -  Al Dalai lama le preguntaron alguna vez si el pensaba que el Budismo Tibetano ¿Era la mejor religión? Y con su exquisita sabiduría dijo que cualquier religión que te haga mas compasivo, sensible, desapegado, amoroso, ético, responsable y humanitario, era la mejor religión.

En definitiva, con o sin religión, lo que realmente importa es como te muestras al mundo y sobre todo a quienes comparten la vida contigo. Y con ésto te respondo; lo que funcione para tí es lo correcto y llegar a ser mejor persona es solo de tu responsabilidad, estando acá muestras voluntad y eso es bueno, eso es el inicio, solo hace falta ser perseverante, ¿recuerdas el unalome?, finalmente alcanzar la armonía será natural.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, entonces entiendo, haber llegado hasta acá ¿No es una casualidad?', 'body' => 'No, no lo es, ésto es algo natural, es una necesidad humana, es como te expliqué antes haciendo una analogía con animales, dije que éstos  se juntan con otros animales y forman manadas. Los pájaros con los pájaros formando bandadas, los peces con los peces formando cardúmenesy los insectos en enjambres, nosotros hacemos lo mismo.       

Esté satsang es simplemente la necesidad de pertenencia, con un grupo de iguales, de pares, es estar en familia compartiendo la misma inquietud, la misma energía. Llegamos aquí atraídos por la misma búsqueda, eso es unalome.
            
Luego algunos abandonaran para seguir intentando por otros medios, ellos son los buscadores, otros necesitarán autorealizarse, crecer y ya no serán buscadores, se convertirán en encontradores . Y otros trascenderán aun mas y se convertirán en creadores.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Para ser mejor ¿Debo comer algo especial?, conozco personas que me dicen eso.', 'body' => 'Baarshi respondió – Si lees, encontraras momentos en que Budha y Jesús, hablan de eso y curiosamente ambos dicen lo mismo, dicen que no es lo que entra en tu boca lo que te corrompe, sino lo que sale de ella.

Y al respecto, estoy seguro de que alguien cuya naturaleza es buscar la armonía, no caerá en excesos. Con esto quiero decir que creo que te alimentas bien, con lo que te hace bien.
            
Personalmente creo que cuando te alimentas solo con determinadas cosas y conviertes eso en un dogma, es un exceso, es autolimitación y eso no está bien. Tu eres libre y no debes abrazar nada que afecte tu libertad, tienes derecho a cambiar las veces que quieras.
            
Autodefinirse es  cerrar los ojos, no es despertar e intentar convencer a otros de que están equivocados no es amor, dicen que cuidan su salud pero no cuidan tu paz. El amor es aceptación, nunca lo olvides y digo, come lo que quieras,  compárte y gózalo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Tu crees qué entender todo esto me producirá un cambio?', 'body' => 'Enfáticamente te digo que no – Entender es nada, es de la cabeza, es acumular información, es memoria, es comparación. Entender no sirve para ahora ,entender es para después, por eso no sirve, es una especulación, quizás sirva algún día, quizás…

El cambio es una comprensión, es lo que algunos llaman una epifanía, una manifestación espontánea de la verdad, la comprensión es un cambio de actitud, de obra, la comprensión es un hecho, el conocimiento es palabras.
            
El cambio es una decisión que ni siquiera requiere tiempo, cada mañana cuando despiertas tienes la opción exquisita de hacer lo que decidas, de ser como quieras ser y si eliges ser mejor que el día anterior estas cambiando de inmediato.
            
Espero entiendas la diferencia, entender es mental, es futuro y es interminable porque cada respuesta da origen a nuevas preguntas. Comprender es ahora, es un cambio, un hecho, es aquí y es ahora.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor , háblame mas del cambio', 'body' => 'Baarshi prosiguió – Imagina que tu vida es como cuenco con agua, si esa agua está estancada, pronto entrará en descomposición y lo seguro es que ya no la puedas beber, ni cocinar con ella o lavar ropa, es probable que ni siquiera sirva para regar plantas. Es decir, algo que era vida se transformó en lo contrario porque no realizas cambios.

La forma correcta es que cada noche vacíes el agua del cuenco para que éste se llene de agua nueva, limpia, sana y cristalina, ¿Lo entiendes? Abandona el pasado y llénate de ahora, de vida nueva, limpia, sana y cristalina. Reflexiona sobre lo que quieres cambiar y hazlo, conviértete en lo que quieras ser y una buena guía para actuar podría ser preguntarte ¿Cómo quieres que te recuerden?', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, dices que uno puede ser lo que quiera ser, no entiendo bien eso.', 'body' => 'Cada día cuando despiertas, cuando te levantas, tienes la oportunidad de elegir el desayuno, la ropa, el camino que harás y miles de cosas mas. También puedes en cada momento escoger el tipo de persona que quieres ser.   

Mientras muchas personas insisten en seguir siendo malas personas e incluso perfeccionando sus defectos, tu puedes al revés empezar a ser mas responsable, gentil, compasivo, amoroso y mas inofensivo. La diferencia entre tu y ellos, es que tu quieres evolucionar espiritualmente, así es que parte por volverte un buen ejemplo para tu entorno, eso lo puedes hacer, trabaja sobre tí hasta que seas capaz de reconocer, apreciar y crear la armonía que puede haber en todo, cuando lo consigas no solo serás armonioso, tu serás la armonía. Y esa nueva forma de ver las cosas será tu ganancia, estoy seguro de que habrás oído como los pesimistas suelen llaman rutina a la vida tranquila mientras los optimistan le llaman armonía.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Tú crees qué podremos cambiar el mundo?', 'body' => 'Baarish sonrió y dijo – Saramago el escritor, decía que los únicos interesados en cambiar el mundo eran los pesimistas porque los optimistas están encantados con lo que hay. Si ves lo malo el mundo es malo, ¿Tú sabes qué hay canales de televisión que dan noticias las 24 horas y qué tambien hay mucha gente que los ve? Ellos los bombardean con desgracias, raptos, violaciones, contrabando, droga, guerra, corrupción, estafas, asaltos, crímenes, con todas las vejaciones imaginables, lo concreto es que les amargan desde que despiertan y si uno ve la vida con esos ojos, en donde todo es pésimo, no hay muchas alternativas.
Pero alégrate porque cada día la vida te ofrece a tí la oportunidad de no intoxicarte, la vida ya es una buena noticia y todos los días en alguna parte, están llenos de sueños, de esperanzas, de logros, de amor, de compasión, de bondad, lo que pasa es que un beso mete menos ruido que una bala y por lo mismo, impresiona menos, jamás saldrá en un noticiario', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, perdona que insista , a mi si me gusta la idea de cambiar el mundo.', 'body' => ' Reflexiónalo mejor y te darás cuenta de que eso es lo que hacemos aquí, mejoramos nuestro mundo, el de cada uno de nosotros, eso es lo que podemos hacer. Esa es la base de nuestra búsqueda, ahora lo que me parece incorrecto es que pretendas que los demás se comporten como tu quisieras, eso es neurótico. La vida es como es y hay que aceptarla primero y luego amarla. La búsqueda, el unalome, es personal, es de cada persona, todos somos flores, distintas flores, con distinto tamaño, forma, aroma, color o clima, respeta eso, todos crecerán a su modo y lo harán según su necesidad de hecho creo que todos hacemos lo que sabemos hacer, nadie hace lo que ignora, no puedes pedirle a un gato que vuele.     

No quieras hacer el papel de la vida, la vida es perfecta y somos nosotros los que fallamos, somos los únicos seres que no sabemos a que vinimos, todo el resto de los seres vivos lo sabe y lo hace en la perfección absoluta, sin fallar.    Has visto como incluso teniendo todo en contra, una brizna de pasto tapada por cemento, encontrará una grieta y crecerá hasta ver la luz, como un milagro. La vida es nuestro gurú, entonces si quieres cambiar al mundo, cambia tu, esa es la forma, como la brizna de pasto busca tu también la luz.
            
Así es, si el camino lastima tus pies, piensa que siempre te resultará mas barato, rápido o efectivo; comprar zapatos que alfombrar el mundo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, a mi me gustaría meditar, me recomiendas a alguien para aprender de él.', 'body' => 'Tu crees que meditan solo los que están en posición de loto, o los que recitan mantras o practican técnicas, estás en un error. Cuando duermes meditas, puedes hacerlo, bailando, tejiendo, leyendo, respirando, puedes hacerlo cada vez que quieras.

Tu entiendes que el cuerpo necesita eliminar sus desechos, vas al baño y lo haces y tu cuerpo se limpia de toxinas y de lo que no sirve. La meditación es lo mismo pero con tu mente, igualmente necesaria para eliminar las toxinas de la mente y no enfermar.
            
La mente viaja en muchas direcciones, es como la luz de una ampolleta que alumbra para todos lados. Meditar en cambio es como la luz de un laser en donde todos los rayos viajan en una sola dirección. Poder controlar eso es meditar, hacer que tu mente vaya donde tu quieres y no donde ella te lleve, poder permanecer en un punto es lo que te hace descansar, la dispersión agota. La dispersión es estar en otro tiempo y en otro lugar, meditar es permanecer absolutamente en el presente, aquí y ahora, donde se desarrolla la vida.
            
Cada vez que haces algo, una sola cosa, en concentración absoluta, sin que nada lo perturbe estarás meditando, no necesitas a nadie que te venda lo que tu ya posees. No lo busques, encuéntralo y luego lo crearas, eso es unalome.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Cómo funciona eso del desapego?', 'body' => 'El apego no es la cercanía que tienes con las personas o los objetos o el amor que les tienes, no depende de lo que tu les das. Tiene que ver con la dependencia que tienes de ellas y con lo que esperas recibir a cambio. El desapego es no depender de otra presencia, es depender de ti mismo, es alejarte de lo perjudicial, de lo que te hace sufrir y contactarte directamente con la ternura que hay en ti, con tu amor propio.      El desapego es fundamentalmente optar por no sufrir.       

El desapego es actuar sin intencionalidad de recibir algo como recompensa, hay personas que actúan de determinada buena forma esperando reciprocidad, respeto, admiración y así no es como funciona, cuando hay una intencionalidad en tu actuar, un interés por ser reconocido, no se genera karma. El karma se obtiene cuando uno actúa sin apego, solo así caes en la gracia. Es el resultado de una forma de ser, no lo dudes, cuando vivas en el desapego, cuando tu alma esté lista, todo lo que te rodea también lo estará.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, si te entendí bien, dices que si hago algo bueno no estoy generando karma.', 'body' => 'Baarish siempre sonríe con las preguntas que recibe – aún no lo entiendes, quizás sea mejor si te cuento una historia. Había hace mucho tiempo un campesino que quiso ilustrar a su hijo con respecto al karma y lo llevó de paseo, caminaron un buen trecho hasta que llegaron al borde de un acantilado y le dijo – aquí está tu lecció y la respuesta a casi todas las preguntas de la vida, por favor hijo, grita algo – y el niño gritó – holaaaaaa – y el eco respondió – holaaaaa -, el niño maravillado volvió a gritar – ¿Quién eeeeres? -  y el eco respondió lo mismo. El muchacho algo alterado volvió a gritar – contestameee – a lo que el eco respondió – contestameee -. El joven ya enojado – gritó estúpidooo - y el eco hizo lo propio de vuelta. El muchacho se volvió hacia su padre y le pidió que se marcharan, molesto porque no le había gustado nada la experiencia y además porque no escucho la lección que el padre le ofreció recibir. El padre le dijo, hijo, esa era la lección, es simple, lo que lanzas a la vida, ella te lo devuelve. Bueno o malo, tarde o temprano, lo que das, recibes y lo que no das te lo quitas a ti mismo.

El karma son tus pensamientos, tus palabras, tus actos y solo lo generas cuando eres así, no cuando lo finges, eso es apego ¿Ahora lo entiendes?.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Por qué usas palabras de otras personas?', 'body' => 'Me gusta que lo preguntes, te expliqué como elegí mi nombre, ahora te explico como elijo mis palabras.

Creo que cuando alguien dice algo, cualquier persona y las palabras salen de su boca ya no le pertenecen, son de quien las recibe, de quien las conserva y las hace suyas según su necesidad y según su comprensión, ¿Me sigues?. Así como escogí mi nombre, también escojo a mi familia espiritual, casi todos están muertos y esta es mi forma de estar con ellos.     
            
Si lo ves bien, cada uno expresó algo que quería compartir, yo lo repito para que su voluntad sea hecha, comparto el mensaje, comparto la misión, comparto la energía.
            
En la vida hay que agradecer siempre y eso hago cuando comparto las buenas palabras de seres que buscaban la iluminación, que perseveraron en dar lo mejor de si.
            
Su palabras son mis y tus palabras, sus pensamientos también, al igual que sus actos,ellos son mi familia, son mis amigos, son mi luz, es lo que ellos querían, ser ejemplo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, ¿Quiero saber qué es lo contrario del amor?', 'body' => 'Muchos creen que lo contrario del amor es el miedo, el odio o la rabia. Pero lo opuesto del amor es la indiferencia, la indiferencia es la falta de atención y a todo lo que dejas de prestarle tu atención luego se muere.

Piensa en una planta que llevas a casa en una bolsita con algo de tierra, le pones una maceta donde pueda crecer, compras tierra apropiada, la abonas, la riegas, la limpias, le hablas, la sacas al sol, la guardas de la helada, sin lugar a dudas crecerá y será hermosa. Las relaciones con otras personas son iguales, si les das tu atención, crecerán y serán hermosas. Mucha gente cree que con el tiempo el amor se muere solo, pero la realidad es que lo mata la indiferencia, dejaron de ser como eran, dejaron de hacer lo hacían, de decir lo que decían, dejaron de atenderlo, no es una casualidad, es causalidad, no podía ser de otro modo.
            
Esto es de lo que hablamos, si no doy nada, eso es la indiferencia, el amor es todo lo contrario, es dar y si dejas de dar se acaba el amor. Y el colmo de eso, resulta cuando culpas al otro, ya no solo dejas de dar amor, ya no solo eres indiferente, ahora empiezas a dar daño, desconfianzas, culpas, juzgas, acusas, abandonas. Conviertes el amor en rabia, en miedo, en odio, pero no olvides que para llegar a eso, lo primero que diste fue tu indiferencia.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Por qué dices que la indiferencia es mala?, a mi me parece que no reaccionar es mejor que reaccionar mal.', 'body' => 'Martin Luther  King decía algo asi como - Peores que los actos de los malos es la indiferencia de los buenos. Mucha gente buena se da cuenta de lo peligrosa, cobarde y cómplice que resulta la indiferencia. Te voy a contar algo que quizás no sepas, la Organización Mundial de la Salud dice que de cada 20 personas que intentan suicidarse solo una lo logra, agrego a eso que cada día en el mundo, 3.000 personas acaban con su vida, eso significa que 57.000 personas mas lo intentaron el día de hoy.

¿Dónde estaban sus familias, sus parejas, sus amigos, sus compañeros, sus vecinos?. Nadie se dio cuenta de que estaban mas callados, de que sonreían menos, de que ya no eran los mismos. Tu dirás que murieron a causa de sus enfermedades, de su depresión, de su angustia. Yo te digo que fue a causa de la indiferencia. Eso no sale en los noticieros pero si mueren 10 en un atentado o cien de una peste, quinientos en un accidente o mil en un bombardeo, son notica de primera plana. Los 3 mil de hoy, mas los 3 mil de mañana y los de pasado nunca salen, a nadie le importa.
            
Por eso y como dijo Teresa de Calcuta - si quieres salvar al mundo, ve a casa y ama a tu familia.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarshi, pero el odio es peor, mira tu las guerras.', 'body' => 'A ti te gusta el ruido, en un conflicto cualquiera exceptuando las guerras mundiales y por sangriento que sea, muere menos del 10% de la gente que muere de hambre en el mundo, cuatro mil todos los días y pocos se mueven a la compasión.

Nosotros escogemos que ponerle al pan, mantequilla, queso, mermelada, huevo, etc., escogemos si café, té, leche o jugo. Tenemos niños obesos en nuestra sociedad, mientras en otras partes se mueren de inanición. La mitad del alimento que consumimos se convierte en oxigeno y la mitad del oxigeno lo ocupa nuestro cerebro, que opción le dejamos a esos niños sin alimento, aunque crezcan no tienen posibilidad de competir ni desarrollarse, generaciones, razas, pueblos enteros condenados a la miseria por la culpa de la indiferencia.
            
La compasión mi amigo, es lo que puede cambiar al mundo, cuando exista comprensión de ello habrá un cambio, la compasión no solo es el deseo de que no haya sufrimiento. Ese es un buen pensamiento, pero nosotros debemos acompañarlos de palabras, habla de eso y por último hazlo contigo y con tu entorno.
            
Yo digo, imagina que la compasión es una enfermedad, ve y contágialos a todos.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Maestro, yo quisiera preguntar …', 'body' => 'Y Baarish lo interrumpió,  indicando silencio con el dedo perpendicular a su boca…

No me digas maestro, yo no estoy aquí para enseñarte nada, es mas, quiero que dudes de todo lo que digo y busques tu propia verdad, hazme caso solo en eso. Yo no quiero estar encima de ti, quiero estar a la misma altura. Te pido que así me veas.
            
-Y prosiguió -Krishnamurti, decía que la libertad radica en no seguir a nadie, uno debe ser una luz para sí mismo. Tú aquí no aprenderás nada, solo recordarás lo que ya sabes y si lo transformas en comprensión, será un buen cambio para tí. Este guiar o enseñar mío es solo recordarles que saben tanto como yo y mejor aun, que pueden alcanzar una mayor comprensión que la mía.
            
Somos todos los seres vivos, maestros y aprendices, eternos maestros y aprendices, abiertos a las lecciones que la vida en simpleza infinita nos da cada día. Cada asunto que nos aflige y que parece un peso o un problema en nuestras vidas es un maestro, que no se va hasta que hayamos aprendido la lección y tan sabia es la vida, que si no lo aprendiste , te lo repite.
            
Los seres mas simples son los mas interesantes si los observas, ¿has visto un perro al que a veces tratan mal y lo ignoran?, cuando el amo vuelve, el siempre, siempre mueve su cola y se alegra de verlo. He ahí un maestro de cómo vivir en el aquí y el ahora, el no conoce de rencor. ¿Lo entiendes? Todos somos aprendices y maestros a la vez. ', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarshi, antes hablaste de la atención, ¿Qué es lo contrario de la atención?', 'body' => 'Confucio decía que el que persigue dos conejos al mismo tiempo, no atrapa a ninguno. Hago otra analogía para que lo entiendas bien, imagina un grueso libro al que le sacas una hoja, esa hoja suelta será fácil de romper, sácale dos hojas mas o cinco si prefieres y será igual de fácil romperlas, ahora toma el libro completo y trata de partirlo a la mitad. No podrás, tal es la atención y la dispersión, cuando estás atento, cuando estas concentrado, eres fuerte como el libro, y cuando estás disperso, como las hojas sueltas, eres todo lo contrario, eres débil, cada hoja es como un pensamiento, un deseo, un sueño, un recuerdo, un temor, estás dividido, eso es lo que te debilita.

Tu mente va en todas direcciones, como la luz de las ampolletas cuando estas disperso, cuando estás concentrado, tu mente es como la luz de un rayo laser, va solo en una dirección. Estás en una sola cosa, sigues un solo conejo, eres un rimero de hojas juntas, solo así puedes ser efectivo en lo que haces.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, cada día hay mas dispersión y admitirás que con la tecnología eso es inevitable.', 'body' => 'Estás en un error mi amigo. La tecnología es solo una herramienta y lo que hagas con ella, depende solo de ti.

Es como un cuchillo, hay quien toma ese cuchillo y hace un hermoso tallado, hay otro que lo toma y prepara un plato exquisito y hay quien lo blande contra otro y lo asesina, no es culpa del cuchillo, ¿Lo entiendes?, es culpa de quien lo usa.
            
Hacerse dependiente de objetos no parece muy sano, estar pendiente de lo que sucede en otras partes, a otras personas, donde ni siquiera eliges los contenidos, te los imponen. Has visto como muchos se empeñan en compartir morbo y horror, yo creo que uno solo debe aceptar lo que viene del amor y de la alegría, eso es lo sano.
            
Yo creo que el mayor peligro de la tecnología y comparto tu apreciación, es que normalmente te acerca los desconocidos y te aleja de los conocidos. Y si no te das cuenta de eso, te dispersas, te desconcentras y pierdes de vista lo que requiere tu verdadera atención, porque lo que necesitamos viene de dentro y no de afuera. Nuestra búsqueda es en la dirección contraria, nosotros intentamos abandonar cualquier cosa que nos saque del aquí del ahora.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarshi, ¿Y qué es el aquí y el ahora?', 'body' => 'Buda decía, “alegrate que todo lugar es aquí y todo momento es ahora”.

Aquí y ahora es simplemente el darse cuenta, el percibir el entorno, a ti mismo, estar abierto y receptivo solo a este acontecer. Y cualquier intento por alejarse de este momento es retroceso.
            
La gente que vive en el pasado es triste y la que vive en el futuro es ansiosa. La que vive en el pasado recuerda lo que ya no está, lo que se fue y el que vive en el futuro, especula e imagina cosas que quizás ni lleguen a suceder. Si vives en otro tiempo y en otra parte que no sea aquí y ahora, te enfermas. Los que viven del pasado se enferman de depresión y los que viven del futuro de ansiedad, esa es la mejor razón para vivir este momento, para cuidar tu salud física y mental.
            
La gente que vive en otro momento, distinto de éste se vuelve insana porque su principal ocupación o preocupación es siempre estar pendiente de lo que falta, en cambio, el que vive en el presente, el que se da cuenta, es agradecido de lo que hay y se puede encontrar mucha  alegría en eso.
            
Al aquí y al ahora también se le llama presente, del mismo modo que llamamos a los regalos. Y la vida, generosa como es, nos regala siempre una nueva oportunidad, cada hoy, cada aquí y cada ahora, son ese  presente.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Maestro, ¿Por qué dices que es insano no estar en el aquí y el ahora?', 'body' => 'Imagina la locura que es  comunicarse con alguien que habla de cosas que no están sucediendo, uno normalmente llama locos a los que ven cosas o las imaginan y hablan de ellas como si fueran ciertas. Esto se parece mucho. Tal es la comunicación con gente que vive solo de recuerdos, su cabeza esta tan llena de ellos que no cabe nada nuevo, eso es lo que le sucede a los viejitos si lo observas, sienten que la vida era lo que ya se fue y no aventuran, el pasado es su espacio de confort y cuesta mucho moverlos de ahí.

Vivir en el futuro es aun peor, no hay memoria de hechos que sucedieron, solo es imaginación y con eso nadie es competente, como respondes a lo que no existe, como te defiendes o como te comprometes. Imagino que te ha cocado conocer a gente celosa, pués  ellos viven en el futuro, anticipan su dolor antes de que llegue, sufren y se autoboicotean porque todos sus pensamientos están dirigidos solo a la desgracia, jamás a la alegría. Un celoso no sufre por lo que ve, sufre por lo que imagina y lo cree, con eso le basta y lo convierte en su dolorosa realidad.
            
Vivir en otro tiempo hace que la amargura de no tener lo que falta, no solo afecte a esa persona, afecta a los que lo rodean, pierden la conciencia de que si no son felices con lo que tienen, tampoco lo serán nunca con lo que les falta.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, ¿Y esa energía nos puede tocar?', 'body' => 'Claro que si, una persona, con su sola presencia puede tener un efecto sano o insano sobre los demás, por eso es tan importante que siempre estés despierto y presente. Porque esa energía, armoniosa o discordante se traspasa y según sea buena o mala, te fortalece o te debilita, reconocerla es tu responsabilidad.

Esa mala energía que incluso puede llegar a enfermarte, es fácil de reconocer, tiene temas recurrentes, quejas, críticas, juicios, les impresiona mucho la desgracia, para ellos todo está mal, creo incluso, que solo cuando se burlan son capaces de sonreír. Y tú, ten conciencia de lo que hacen pero sobre todo ten presente que son seres humanos quizás menos evolucionados que tu y aun no comienzan la búsqueda en que tú estás,  no son culpables ni peores que tu, solo hacen lo que saben hacer, nada mas te digo; no permitas que nadie te robe tu luz.
            
Aprende a confiar en tus vibraciones, estás desarrollando tu intuición y cualquiera puede venir y mentirte, las vibraciones jamás lo harán. Son vampiros energéticos y si uno sabe por las películas que la mejor arma contra un vampiro es el ajo o un crucifijo, en estos vampiros energéticos solo debería bastar la risa, tu risa será tu mejor defensa, la desgracia siembra solo en la neutralidad, la alegría no es tierra fértil para la desgracia.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, a veces me resulta difícil entender a mi pareja', 'body' => 'Quizás sea por tus expectativas, lo que esperas recibir de ella, alguna clase de reciprocidad.

Debes entender que en primer lugar tu felicidad y bienestar dependen de ti, nunca la encontrarás en otra persona aunque te parezca que a veces la encontraste, solo eras tu, motivado y hdando lo mejor de ti mismo.
            
En segundo lugar, uno solo se junta con otra persona para estar mejor afectivamente, cualquier otro resultado no sirve ni tiene sentido y cualquier otra intención tampoco. Nunca podrás fluir porque estarás tratando de permanecer ahí siendo quien no eres. Cuando es natural se produce una sinergia que no requiere de mucha entendimiento, solo es gozo
            
Y has de saber que el amor contiene solo lo que es del amor; confianza, respeto, lealtad, humildad, paciencia, generosidad, complicidad, entrega, paciencia, honestidad, ternura, deseo, complacencia, contención, humor, gratitud. Si tu das esas cosas eres un buen y amoroso amante, si tu pareja no lo hace, no hay mucho que pensar.
            
De las cinco emociones básicas una pareja debería inclinarse por el amor y la alegría. Si ves que va para el lado del miedo, el odio o el dolor, mejor quédate solo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, eso que dices me suena a que uno no debería luchar por estar al lado de quien le gusta.', 'body' => 'Es que a veces lo que te gusta, no es natural, gatos con gatos, perros con perros. Muchos siguen a una mujer porque es bonita, quizás la ven como trofeo, muchas veces solo lo haces por ego porque te serviría mucho para presumir con los demás, obtienes estatus de galán, muchas razones. Pero donde está el amor en todo eso, en que tal vez y solo tal vez, tu harías todo lo posible por quererla, eso que llamamos conquistar, es una apuesta, una especulación, es imaginación, solo es futuro y mucha ansiedad.

El amor no es lo que uno quiere sentir, el amor es lo que uno siente sin querer y nace entre dos personas, lo que tu preguntas es unilateral. Cuando dos personas están dispuestas a tener intimidad, hacen el amor, sin embargo, cuando una quiere y la otra no e igual lo hacen, es una violación, es algo totalmente diferente, ¿Lo entiendes?, es entre dos, no uno, no tres.
            
No solo humillas al otro, te humillas tu, dejas de ser la persona que eres para convertirte en lo que al otro le gustaría y ahí no hay triunfo, solo hay derrota pues no te quiere a ti, quiere lo cree que eres y no podrás fingir eternamente y comenzará a aparecer todo eso que no tiene que ver ni es del amor y no será una buena relación. Sacrificarás toda tu personalidad y finalmente te abandonarán y créeme que es lo mejor que te puede suceder.
            
El abandono es la forma en que opera la vida a través de la gracia, hará que te abandonen para dar cabida a lo que mereces, así actúa la vida y lo hace por ti porque tú nunca serás capaz de hacerlo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, ¿Por qué somos tan distintos los hombres de las mujeres?', 'body' => 'No lo somos, en esencia queremos lo mismo, lo que varía es solo la forma.

Una mujer  se une a un hombre con la esperanza de que cambie, hasta que se acerque a su idea de perfección y un hombre se une a una mujer con la esperanza de que nunca cambie porque así es como se enamoró de ella y ella siempre cambia, tal es la naturaleza de una mujer, impredecible, cambia en años, en meses, en días, en horas y hasta en minutos, pero en su forma, jamás en su esencia y no dejes que eso te descomponga, es la misma persona que amas en todos tus matices, ellas lo expresan más y mejor que nosotros.
            
El amor tiene dos vertientes claras, el erotismo y la ternura, los hombres y los jóvenes mayoritariamente se inclinan por el deseo y las mujeres y los adultos por la ternura. Si lo observas te darás cuenta de que es común que los hombres ofrezcan amor con la esperanza de llegar al sexo y las mujeres den sexo con la esperanza de llegar al amor. No sé si son más los mentirosos o las ingenuas, pero así funcionamos. Funcionamos según nuestra necesidad y nuestra experiencia, varían las formas y el camino pero todos queremos lo mismo, lo que no has de olvidar nunca, es que el amor no tiene que ver con lo que esperas recibir sino con lo que esperas dar.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, ¿De ésta forma seré libre e inofensivo?', 'body' => 'Libre si, pero no olvides que te estás convirtiendo en un antisistema y eso lamentablemente te convierte en un subversivo para el sistema.

Osho decía, que si eres libre ninguna sociedad te quiere porque eres peligroso para su existencia, alguien que piensa por su cuenta es una llama de libertad que nadie puede apagar. Dice que las personas sabias no pueden ser explotadas, las personas inteligentes no pueden ser manipuladas, no pueden ser forzadas a vivir mecánicamente como robots. La gente así busca su individualidad, es rebelde y busca la forma de ser libre y ninguna sociedad, política o religiosa quiere que tú seas libre.
            
Los libre pensadores son peligrosas para el sistema, para el poder, para la elite intelectual pues ellos nunca aceptarán ningún tipo de opresión, supresión o represión. Se vuelven peligrosos para las iglesias, los estados, las naciones porque un hombre libre, nunca se venderá ni será servil, jamás podrán convertirlo en un esclavo, cuando se es sabio, también se es libre.
            
No pueden ser víctimas del consumo, de la publicidad, de la moda, de las noticias, de la televisión, de la demagogia, de las sectas, de nadie que les diga como tienen que ser porque nadie puede tener el irrespeto de intentar colonizarlos.
            
Según el anarquista mexicano del siglo XIX, Ricardo Flores, “No son los rebeldes los que crean los problemas del mundo sino los problemas del mundo, los que crean a los rebeldes”.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor , ¿De verdad tienes certeza de que nos manipulan?', 'body' => 'Solo repito lo que he leído, existe mucha literatura al respecto y es bueno que te informes. Una de las estrategias que utiliza el sistema para desinformarnos es la distracción. Nos manipulan desviando la atención de los problemas esenciales, de las decisiones que afectan a la gente, en lo político y en lo económico. Lo hacen a través de multiplicar informaciones insignificantes y continuas distracciones para impedir que nos enteremos y nos interesemos por el conocimiento de la ciencia, la cibernética, la economía, la psicología y la neurobiología, tomando ventaja de esos conocimientos par aumentar  la brecha entre el poder y la gente común,

Lo que les interesa es que estemos ocupados, sin pensar, lejos, distraídos de los verdaderos problemas socIales.
            
Noam Chomsky  decía todo lo que te cuento y lo graficaba con la frase “La manipulación mediática hace más daño que una bomba atómica, no mata, solo destruye los cerebros”.
            
Por su parte el activista norteamericano Malcom X, en los años 60 e igualmente convencido al respecto decía “Cúidate de los medios de comunicación porque te harán terminar odiando al oprimido y amando al opresor¨.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, cuéntame mas…..', 'body' => 'Otra de las estrategias que utilizan los gobiernos es ser reactivos para poder imponer sus términos. Dejan que un problema crezca hasta que sea la ciudadanía la que exija acciones, de modo que parezca que aportan soluciones salvadoras que finalmente solo es el modo en que implantan cambios sin ninguna resistencia ciudadana.

Te lo explico, hay problemas fácilmente previsibles y los dejan crecer hasta que el clamor popular exija la atención y el ataque del problema, de este modo es la gente la supuesta responsable de las medidas que toman los gobiernos. Dejar que se intensifique la violencia por ejemplo, hace que sea posible implementar leyes de seguridad que afecten la libertad de los individuos.      
            
Otro ejemplo es como crean o dejan crecer una crisis económica para que aceptemos como un mal necesario, el retroceso los derechos sociales, los aumentos de los impuestos o el desmantelamiento de los servicios públicos, te hacen aceptar doloroso cambios para seguir sobreviviendo y los aceptas.
            
El escritor Mark Twain, decía “Es mas fácil engañar a la gente, que convencerlos de que han sido engañados”.
            
Pero que no te suene esto a desesperanza, al contrario, recuerda a Krishnamurti quien decía sabiamente que solo los individuos que no se encuentran atrapados por la sociedad son los únicos que pueden influir en ella de manera fundamental.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Señor, pero es natural que conforme cambia el tiempo, ¿Cambien también las reglas?', 'body' => 'El que se haga, lo afirmo, el que sea natural, no.

Enfrentamos tiempos en que se nos impone, no se nos consulta y sobre todo las medidas que más nos afectan las aplican con gradualidad para que nos acostumbres de a poco, así es como aceptas lo inaceptable, con cuenta gotas, por años e imperceptiblemente. Así aplican los cambios, si los hicieran de una sola vez  causarían revoluciones, pero ellos saben que cuentan con nuestra pasividad, con la resignación en que hemos sido criados.        
            
El ciberactivista australiano Julian Assange dice al respecto “Cada vez que observamos una injusticia y no actuamos, estamos entrenando nuestro carácter para ser pasivos y eventualmente perdemos la libertad para defendernos a nosotros mismos y a aquellos que amamos.
            
Quiero insistir en que intentemos estar despiertos, con los ojos abiertos, ser nosotros, ser libres y no esclavos, comprender eso y contagiarlo, así es como cambiarán las cosas.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Y Baarish prosiguió…', 'body' => 'También utilizan la estrategia de diferir, es lo que te presentan como doloroso y necesario, como algo que no quisieran hacer pero no hay otra opción, ¿Lo has oído?.

Es la forma de aceptación pública para el futuro, no de inmediato, de modo que te acostumbres y lo aceptes, mira que generosos son, te dan tiempo de que readecues tus piezas, para que vivas con menos.
            
Y la masa, los seres pasivos ingenuamente creen que quizás no suceda, viven con la luz de la esperanza, en el futuro, imaginando, especulando, dispersos, en la ansiedad de que quizás se pueda evitar, cuando el plan es todo lo contrario.
            
Mohandas Gandhi dijo “Mucha gente, especialmente la ignorante, querrá castigarte por decir la verdad, por ser correcto, por ser tu. Nunca te disculpes por ser correcto o por estar años delante de su tiempo, si estás en lo cierto y lo sabes, deja que hable tu razón. Incluso si eres una minoría de uno solo, la verdad sigue siendo la verdad”.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Maestro, ¿Y es igual con la publicidad?', 'body' => 'Casi toda la publicidad con que nos bombardean utiliza el discurso emocional, con argumentos, personajes y entonaciones suaves, infantiles, con animales y próximas a la debilidad. Porque te tratan como si fueras un niño o un retrasado mental , porque tratándote así hay una probabilidad mayor de no utilices tu sentido crítico.

Lo que los medios masivos y la publicidad de verdad hacen es distraer a la genta, te dicen lo que hacer, con quién casarte, dónde fumar, por quién votar, donde vivir, donde vacacionar, como oler, que comer, que comprar, lo que pensar, lo que vestir, lo que está de moda, lo que es bueno, lo que esta bonito, todo, no hay ámbito de la vida que le sea ajeno. Te cuentan lo que quieras oír y tú te lo crees, y vas y lo compras, y vas y lo haces.
            
Y tú dirás, yo no soy consumista, a mi no me afecta, pero nuestro cerebro es una esponja y absorbe todo sin discriminación, nuestro cerebro es como un fértil jardín donde todo puede crecer, desde hermosas flores hasta la mala hierba. Para eso nos juntamos acá y de eso conversamos, estamos desherbando nuestros hermosos jardines, para nosotros, para los que amamos, para el mundo que queremos construir.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Baarish, Dices que apelan a nuestra emoción, ¿Por qué?', 'body' => 'Utilizar el aspecto emocional rinde frutos, lo racional no, si piensas, si estás atento, no haces nada de lo que dicen y ellos te aseguro, saben cómo manipular, conocen a la gente mejor de lo que ellos mismos se conocen, solo así te pueden dirigir.

Cuando utilizas el argumento emocional haces un corto circuito en el análisis racional y en el sentido crítico de las personas. Esto es lo que permite el acceso al inconsciente para implantar ideas, deseos, comportamientos, culpas y miedos.
            
Has visto que la manipulación de las parejas se basa en la culpa, a través de ella obligan a la pareja a ser constantemente aprobados o desaprobados y el manipulador se convierte en el juez de la relación, espero que solo lo recuerdes o lo hayas visto y no lo estés viviendo porque eso no es amor.
            
El Español José Luis Sampedro, decía al respecto, “Gobernar a base de miedo es muy eficaz, si usted amenaza a la gente diciéndoles que la va a degollar y luego no lo hace, entonces los puede azotar , explotar o lo que quiera y ellos lo aceptaran como algo bueno, porque eso es mejor que ser degollado” Así opera el miedo, te inmoviliza.', 'created_at' => now(), 'updated_at' => now()]

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}