<?php
use Migrations\AbstractSeed;

/**
 * Hinos seed.
 */
class HinosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => '01 - Doxologia',
                'body' => 'Justo é o Senhor em Seus Santos caminhos,<br>
Benigno em todas as Suas obras. (Bis)<br>
Perto está o Senhor, perto está dos que O invocam,<br>
De todos os que o invocam<br>
Em verdade. Aleluia! Aleluia!<br>',
                'audio' => '',
                'indices_id' => '1',
            ],
            [
                'id' => '2',
                'name' => '02 - Reverência',
                'body' => 'O Senhor está no seu santo templo,<br>
O Senhor está no seu santo templo!<br>
Cale-se diante dele toda terra,<br>
Cale-se diante dele toda terra!<br>',
                'audio' => '',
                'indices_id' => '1',
            ],
            [
                'id' => '3',
                'name' => '03 - A Igreja em Adoração',
                'body' => '1<br>
<p>
Eterno Pai, teu povo congregado,<br>
Humilde entoa o teu louvor aqui!<br>
No dia para o culto reservado,<br>
Com esperança olhamos para ti.<br>
Teu santo livro, ó grande Deus, tomamos<br>
Com fé singela e reverente amor;<br>
E, como atentos filhos, procuramos<br>
Ciência na palavra do Senhor.</p>

2<br>
<p>Jesus! Aos teus benditos pés sentados<br>
Queremos teu conselho receber,<br>
E sendo por ti mesmo doutrinados,<br>
De mais em mais na santa fé crescer.<br>
Do mundo e seus encargos retirados<br>
Queremos descansar em ti, Senhor,<br>
Mirando os ricos bens entesourados<br>
Na plenitude do teu vasto amor.</p>
3<br>
<p>Ensina aos teus, Espírito divino,<br>
Dissipa as trevas destes corações;<br>
E com a luz do teu celeste ensino,<br>
Vem aclarar as santas instruções.<br>
Aviva em nós as forças da memória,<br>
Pois sempre mais queremos conhecer<br>
O Rei dos céus, o Cristo cuja glória<br>
Enleva os santos anjos de prazer. Amém.</p>',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '4',
                'name' => '04 - Culto à Trindade',
                'body' => '1<br>
Deus está no templo!<br>
Pai Onipotente!<br>
A seus pés nos humilhamos.<br>
Servos consagrados,<br>
Reverentemente,<br>
Ao Deus santo adoramos.<br>
Por favor, com amor,<br>
Espiritualmente<br>
Deus está no templo!<br><br>

2<br>
Cristo está no templo!<br>
Sumo benefício<br>
Por seu sangue nos foi dado.<br>
Ele, o bom Cordeiro,<br>
Foi o sacrifício<br>
Que expiou o vil pecado.<br>
Escolheu e sofreu<br>
O cabal suplício;<br>
Cristo está no templo!<br><br>

3<br>
Tu, que estás no templo,<br>
Preceptor divino,<br>
E os corações habitas;<br>
Tu, paciente Mestre,<br>
Dá-nos teu ensino,<br>
Aclarando as leis benditas.<br>
Que prazer conhecer<br>
A graça infinita!<br>
Sim, está no templo!<br>',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '5',
                'name' => '05 - Trindade Adorada',
                'body' => 'Glória seja ao Pai,<br>
Ao Filho e ao Santo Espírito,<br>
Como era no princípio,<br>
É hoje e para sempre,<br>
Eternamente! Amém! Amém!',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '6',
                'name' => '06 - Doxologia',
                'body' => 'A Deus, supremo Benfeitor,<br>
Anjos e homens dêem louvor;<br>
A Deus o Filho, a Deus o Pai,<br>
E a Deus Espírito, glória dai. Amém.<br>
',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '7',
                'name' => '07 - Glória à Trindade',
                'body' => '1<br>
A ti, meu Criador,<br>
Dos altos céus Senhor,<br>
Eu quero honrar.<br>
Aceita a adoração<br>
Que a voz e o coração<br>
Te vêm, bondoso Pai,<br>
Aqui prestar.<br><br>

2<br>
A ti, Emanuel,<br>
Por teu amor fiel<br>
Rendo eu louvor.<br>
Do céu trouxeste a luz,<br>
Por mim sofreste a cruz,<br>
Bendito sejas, pois,<br>
Meu Redentor<br><br>

3<br>
A ti, Consolador,<br>
Divino Preceptor,<br>
Eu louvarei.<br>
Com teu poder sem par,<br>
Oh, vem me iluminar,<br>
E assim, ao teu fulgor,<br>
Eu brilharei. Amém.<br>',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '8',
                'name' => '08 - Adoração à Trindade',
                'body' => '1<br>
Grande Deus, o teu louvor<br>
Hoje, unidos, entoamos;<br>
Teu excelso e doce amor<br>
Com os anjos celebramos.<br>
E em adoração a ti<br>
Vimos bendizer-te aqui.<br><br>
2<br>
Cristo, Salvador veraz,<br>
Com poder em nós domina!<br>
Tua graça e tua paz,<br>
Ó Senhor, ao mundo ensina.<br>
Redimido, em tua luz,<br>
Vem fazê-lo andar, Jesus!<br><br>
3<br>
Santo Espírito eternal,<br>
Oh, dirige as nossas mentes<br>
Para, em comunhão real,<br>
Te buscarmos reverentes;<br>
E o nosso coração<br>
Se encherá de gratidão.<br><br>
4<br>
Ó Deus Trino, pois a ti<br>
Sejam, sem cessar, rendidas<br>
Pelos filhos teus aqui,<br>
Honra e glória sem medida.<br>
Infinito é o teu amor!<br>
Cantem todos teu louvor! Amém.<br>',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '9',
                'name' => '09 - Aleluia ao Deus Trino',
                'body' => '1<br>
A ti, ó Deus, altíssimo Senhor,<br>
Eterno Pai, supremo Benfeitor,<br>
Teus filhos vêm, alegres, dar louvor.<br>
Aleluia! Aleluia!<br><br>
2<br>
A ti, Deus Filho, Salvador Jesus,<br>
Da graça a fonte, da verdade a luz;<br>
Por teu amor mostrado sobre a cruz,<br>
Aleluia! Aleluia!<br><br>
3<br>
A ti, ó Deus, Espírito de amor,<br>
De nossas almas santificador.<br>
Mestre divino, bom Consolador,<br>
Aleluia! Aleluia!<br><br>
4<br>
Ó Deus Triúno, vem nos conceder<br>
A plenitude do real poder,<br>
E as nossas almas vem, aqui, reger.<br>
Aleluia! Aleluia! Amém.<br>',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '10',
                'name' => '10 - A criação e seu Criador',
                'body' => '1<br>
Vós criaturas de Deus Pai,<br>
Todos erguei a voz, cantai!<br>
Oh! Louvai-o! Aleluia!<br>
Tu, sol dourado a refulgir,<br>
Tu, lua em prata a reluzir,<br>
Oh! Louvai-o! Oh! Louvai-o!<br>
Aleluia! Aleluia! Aleluia!<br><br>
2<br>
Oh! Boa terra que nos dás<br>
Infindas bênçãos, canta já!<br>
Oh! Louvai-o! Aleluia!<br>
Frutos e flores, juntos dai<br>
A glória a Deus, Senhor e Pai.<br>
Oh! Louvai-o! Oh! Louvai-o!<br>
Aleluia! Aleluia! Aleluia!<br><br>
3<br>
Vós, homens sábios e de bem,<br>
A todos proclamai também!<br>
Oh! Louvai-o! Aleluia!<br>
Louvor ao Filho, glória ao Pai<br>
E ao Santo Espírito louvai!<br>
Oh! Louvai-o! Oh! Louvai-o!<br>
Aleluia! Aleluia! Aleluia!',
                'audio' => '',
                'indices_id' => '2',
            ],
            [
                'id' => '11',
                'name' => '11 - Trindade santíssima',
                'body' => '1<br>
Santo! Santo! Santo! Deus Onipotente!<br>
Louvam nossas vozes teu nome com fervor!<br>
Santo! Santo! Santo! Justo e compassivo!<br>
És Deus Triúno, Excelso Criador!<br><br>
2<br>
Santo! Santo! Santo! Nós, os pecadores,<br>
Não podemos ver tua glória sem temor.<br>
Tu somente és Santo! Só Tu és perfeito,<br>
Deus Soberano, imenso em teu amor.<br><br>
3<br>
Santo! Santo! Santo! Todos os remidos,<br>
Juntos com os anjos, proclamam teu louvor!<br>
Antes de formar-se o firmamento e a terra<br>
Eras, e sempre és, e hás de ser, Senhor!<br><br>
4<br>
Santo! Santo! Santo! Deus Onipotente!<br>
Tuas obras louvam teu nome com fervor.<br>
Santo! Santo! Santo! Justo e compassivo!<br>
Deus soberano, Excelso Criador! Amém.<br>',
                'audio' => '',
                'indices_id' => '3',
            ],
            [
                'id' => '12',
                'name' => '12 - Glória a Deus',
                'body' => 'Santo! Santo! Santo!<br>
Deus dos exercitos,<br>
A terra e os céus<br>
Proclamam tua glória.<br>
Glória a ti, glória a ti, ó Deus,<br>
Eternamente. Amém.<br>',
                'audio' => '',
                'indices_id' => '3',
            ],
            [
                'id' => '13',
                'name' => '13 - Contemplação',
                'body' => '1<br>
Se nos cega o sol ardente<br>
Quando visto em seu fulgor,<br>
Quem contemplará Aquele<br>
Que do sol é Criador?<br>
Patriarcas não puderam<br>
O seu rosto contemplar,<br>
Nem Adão chegou a vê-lo<br>
Antes mesmo de pecar!<br><br>
2<br>
Luz perante a qual é trevas<br>
Mesmo o sol a fulgurar!<br>
Nossos olhos pecadores<br>
Não te podem contemplar!<br>
Fogo em cima da arca santa,<br>
Sarça ardente do Sinai<br>
São figuras desta glória<br>
Do Senhor e Eterno Pai.<br><br>
3<br>
Para termos nós com ele<br>
Franca e doce comunhão,<br>
Cristo, o Filho fez-se carne,<br>
Fez-se nossa Redenção!<br>
Para que na glória eterna<br>
O vejamos já sem véu,<br>
Cristo padeceu a morte,<br>
O caminho abrindo ao céu.<br>',
                'audio' => '',
                'indices_id' => '3',
            ],
            [
                'id' => '14',
                'name' => '14 - Louvor',
                'body' => '1<br>
Vamos nós louvar a Deus, Vamos, vamos!<br>
Ao Senhor de toda luz, Santo, Santo!<br>
Cantem, louvem lá nos céus<br>
Nosso Deus e Rei Jesus!<br>
Exaltado seja Deus, Santo, Santo!<br><br>
<strong>
Exaltado seja nosso Deus e Pai!<br>
Exaltado! Para sempre o exaltai!<br>
Cantem, louvem lá nos céus<br>
Nosso Deus e Rei Jesus!<br>
Exaltado seja Deus, Santo, Santo!<br>
</strong><br>2<br>
Nosso Deus, eterno Pai, Santo, santo,<br>
Deu-nos bênçãos por Jesus, Vede, vede!<br>
Ao Senhor glorificai,<br>
Vós, os salvos pela cruz,<br>
Sim, conosco glória dai, Vinde, vinde!<br><br>
3<br>
Exaltemos nosso Deus, Santo, Santo!<br>
Exaltemos com fervor, Hoje, hoje!<br>
Tributemos todos nós<br>
Hinos santos de louvor,<br>
Sim, louvor em alta voz, Hoje, hoje!<br>',
                'audio' => '',
                'indices_id' => '3',
            ],
            [
                'id' => '15',
                'name' => '15 - Doxologia',
                'body' => 'Tua , ó Deus, é toda a grandeza<br>
E o poder e a glória e a vitória<br>
E os louvores; vitória e louvores!<br>
Tua, ó Deus, tua, ó Deus, é a grandeza<br>
E o poder, a grandeza e o poder<br>
E a glória e a vitória e os louvores eternos.<br>
Pois tudo o que está no mar,<br>
E está no céu e na terra é teu!<br>
Teu é o domínio, teu é o domínio,<br>
Ó Senhor! E Tu és acima de todos os reis,<br>
De todos os reis. Amém. Amém. Aleluia!<br>',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '16',
                'name' => '16 - Louvor a Deus',
                'body' => '1<br>
Louvai a Deus,<br>
Soberano Senhor do que é feito.<br>
Louvai-o, sim,<br>
De vossa alma, tesouro perfeito!<br>
A Deus cantai<br>
E, com fervor, tributai<br>
Profundo amor e respeito.<br><br>
2<br>
Louvai a Deus<br>
Que vos faz prosperar dia a dia;<br>
E, com amor,<br>
Vos defende e abençoa a porfia.<br>
Lembrai, também,<br>
Que o poderoso vos vem<br>
Fazer feliz companhia.<br>',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '17',
                'name' => '17 - Deus seja louvado',
                'body' => '1<br>
Seja louvado o Deus supremo,<br>
Deus revelado em Israel!<br>
Onipotente, prodígios obra,<br>
Sempre clemente, sempre fiel.<br><br>
<strong>
Seja louvado o Deus supremo,<br>
Deus revelado em Israel.</strong><br><br>
2<br>
Louvor perene só Deus merece!<br>
Cantai, não cesse o seu louvor!<br>
De todos seja sempre exaltado,<br>
E cante a Igreja com terno amor.<br>',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '18',
                'name' => '18 - Deus dos antigos',
                'body' => '1<br>
Deus dos antigos, cuja forte mão<br>
Rege e sustém os astros na amplidão!<br>
Ó Soberano, excelso Criador,<br>
Com gratidão cantamos teu louvor!<br><br>
2<br>
Desde o passado foste nossa luz,<br>
Sol que até hoje com fulgor reluz!<br>
Sê nosso Esteio, Guia e Proteção,<br>
Tua Palavra, lei e direção.<br><br>
3<br>
Da guerra atroz, do crime e assolação,<br>
Dos tempos maus de um mundo em confusão,<br>
Seja o teu braço o nosso defensor,<br>
Pois confiamos sempre em ti, Senhor!<br><br>

4<br>
Teu povo, ó Deus, assiste me seu labor,<br>
No testemunho do teu grande amor.<br>
As nossas vidas vem fortalecer<br>
Para o teu nome sempre engrandecer. <br>Amém.',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '19',
                'name' => '19 - Rei Sublime',
                'body' => '1<br>
Ó Rei sublime em majestade e glória,<br>
Sobre as milícias do celeste além,<br>
Ouve o louvor, os hinos de vitória,<br>
Dos que de ti recebem todo bem!<br><br>
<strong>
Vinde, ó remidos, filhos de Deus!<br>
Cantai louvores que alcancem os céus!<br>
</strong><br>
2<br>
Nos altos céus louvor a Deus ressoa,<br>
De gratidão ao soberano amor!<br>
Os redimidos com fervor entoam<br>
O nome excelso de seu Benfeitor.<br><br>
3<br>
Eterno Deus, teus filhos vês prostrados<br>
Perante o brilho da superna luz,<br>
Pois do pecado foram resgatados,<br>
E agora rendem glórias a Jesus!<br>',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '20',
                'name' => '20 - Glorificação à Trindade',
                'body' => '<strong>A - Louvor</strong><br>
A ti, ó Deus louvamos,<br>
E por nosso Senhor te confessamos!<br>
A ti, ó Pai da Eternidade, adora toda a terra;<br>
A ti, o coro angélico,<br>
A ti, todo o poder do céu,<br>
A ti, querubins e serafins proclamam sem cessar:<br>
“Santo! Santo! Santo! Senhor Deus dos Exércitos!<br>
Os céus e a terra estão cheios<br>
Da majestade da sua glória!”<br>
A ti, o glorioso coro apostólico louva;<br>
A ti, a congregação dos profetas louva;<br>
A ti, o nobre exército dos mártires louva;<br>
A santa Igreja reconhece por toda a terra a ti:<br>
Ao Deus Pai, infinito Dominador!<br>
E ao teu venerável, vero e único Filho,<br>
E ao Santo Espírito, Consolador.<br><br>

<strong>B - Declaração</strong><br>
Tu és Rei da glória, ó Jesus!<br>
Tu és o sempiterno Filho de Deus!<br>
Quando vieste resgatar os homens,<br>
Não te escusaste a nascer do ventre da Virgem!<br>
Quando venceste a morte e seu aguilhão,<br>
Logo abriste a teus servos<br>
As portas do reino dos céus.<br>
Estás sentado à destra de Deus<br>
No trono onipotente.<br>
Cremos que voltarás e aqui serás Juiz.<br>
Portanto, nós, remidos com teu sangue,<br>
Suplicamos teu auxílio!<br>
Nós, que já estamos alistados com teus santos<br>
Na glória eterna.<br><br>

<strong>C - Oração</strong><br>
Senhor, guarda o povo e abençoa-nos.<br>
Reina e guarda-nos para sempre.<br>
Noite e dia te adoramos<br>
E glorificamos teu nome sem-par.<br>
Senhor, concede que hoje<br>
Nós vençamos o pecado!<br>
Eterno e bondoso Pai, compadece-te de nós!<br>
Concede-nos a tua misericórdia,<br>
Pois confiamos e esperamos em ti.<br>
Senhor! Em ti, em ti eu espero;<br>
Nunca eu seja, nunca eu seja confundido.<br>
Amém.',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '21',
                'name' => '21 - Deus de Abraão',
                'body' => '1<br>
Ao Deus de Abraão louvai, do vasto céu Senhor,<br>
Eterno e poderoso Pai e Deus de amor!<br>
Augusto Jeová que terra e céu criou,<br>
Minha alma o Nome exaltará do grande “Eu-Sou”.<br><br>
2<br>
Ao Deus de Abraão louvai! Eis por mandado seu,<br>
Minha alma deixa a terra e vai gozar no céu.<br>
O mundo desprezei, seu lucro e seu louvor,<br>
E Deus por meu quinhão tomei e protetor.<br><br>
3<br>
Meu Guia Deus será! Seu infinito amor<br>
Feliz em tudo me fará por onde eu for.<br>
Tomou-me pela mão, na trevas deu-me luz,<br>
E dá-me eterna salvação por meu Jesus.<br><br>
4<br>
Meu Deus por si jurou, eu nele confiei!<br>
E para o céu que preparou eu subirei.<br>
Sua face eu hei de ver, confiado em seu amor,<br>
E para sempre engrandecer meu Redentor.<br>',
                'audio' => '',
                'indices_id' => '4',
            ],
            [
                'id' => '22',
                'name' => '22 - Os céus proclamam',
                'body' => '1<br>
Altamente os céus proclamam<br>
Seu divino Criador!<br>
Anunciam o firmamento<br>
Tua obras ó Senhor!<br>
Incessantes, noite e dia,<br>
Dão sinais do teu poder,<br>
Sem palavras, proclamando<br>
Deus excelso no saber!<br><br>

2<br>
Majestoso o sol caminha<br>
Pelos céus, com resplendor!<br>
Exultando, em seu percurso,<br>
Enche o mundo de calor.<br>
Todo o vasto universo<br>
Canta, em coro, teu louvor!<br>
E a nós vem doce ensino<br>
Da Palavra do Senhor.<br><br>

3<br>
Tua Lei, quão preciosa,<br>
Brilha mais que a clara luz;<br>
Esclarece as nossas mentes,<br>
Guia as almas a Jesus,<br>
Em tua graça meditando,<br>
Cantarei, ó bom Senhor,<br>
E será na minha boca<br>
Agradável o teu louvor. Amém.<br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '23',
                'name' => '23 - Adoração ao Criador',
                'body' => '1<br>
Oh! Vinde adorar ao Deus Criador,<br>
Da terra e dos céus, eterno Senhor.<br>
Ao Deus que, habitando no meio da luz,<br>
A nós se revela por Cristo Jesus.<br><br>
2<br>
Seu grande poder deveis contemplar<br>
No céu estrelado, no amplo mar.<br>
A gota de orvalho, a mínima flor,<br>
Proclamam, constantes, ser Deus seu Autor.<br><br>
3<br>
Oh! Vinde adorar ao Deus Salvador,<br>
Que, em Cristo Jesus, nos mostra favor.<br>
Ao Deus que, benigno, com graça e perdão,<br>
Pecados cobrindo nos dá redenção.<br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '24',
                'name' => '24 - Convite ao Louvor',
                'body' => '1<br>
Vinde, irmãos, louvar a Deus,<br>
Criador da terra e céus.<br><br>

<strong>Exaltemos o Senhor!<br>
Infinito é seu amor!</strong><br><br>

2<br>
Glória e honra ao grande Rei;<br>
Alta e santa é sua lei.<br><br>

3<br>
Age com poder real,<br>
Com grandeza divinal.<br><br>

4<br>
Dia e noite a sua mão<br>
Desenvolve o tenro grão.<br><br>

5<br>
Com os dons do seu poder<br>
Nossas vidas faz crescer.<br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '25',
                'name' => '25 - O Criador de Tudo',
                'body' => '1<br>
Deus, do infinito o Criador,<br>
Que deste aos astros seu fulgor,<br>
Tuas obras te proclamam!<br>
Ao explorarmos a amplidão,<br>
Obra sem-par da tua mão,<br>
Extasiados te louvamos!<br>
Aleluia! Aleluia! Aleluia!<br><br>

2<br>
Ergue-se o homem para o céu,<br>
Deixa o planeta em que nasceu;<br>
Oh! Conquista sem limites!<br>
Como havemos de entender<br>
Que Deus quisesse aqui viver?<br>
Deus eterno, entre os homens!<br>
Aleluia! Aleluia! Aleluia!<br><br>

3<br>
Hoje há problemas entre nós<br>
Por não ouvirmos tua voz.<br>
Pai, perdoa as nossas faltas!<br>
Que nossa vida em Jesus<br>
Busque guarida, paz e luz,<br>
E teu nome celebremos:<br>
Aleluia! Aleluia! Aleluia!<br><br>

4<br>
No grande plano divinal,<br>
Dessa harmonia universal,<br>
Deus com grande amor salvou-nos!<br>
Ele nos deixa conhecer<br>
Toda extensão de seu poder<br>
Revelado no universo!<br>
Aleluia! Aleluia! Aleluia!<br><br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '26',
                'name' => '26 - Ao Deus grandioso',
                'body' => '1<br>
Senhor meu Deus, quando eu maravilhado,<br>
Os grandes feitos vejo da tua mão,<br>
Estrelas, mundos e trovões rolando,<br>
A proclamar teu nome na amplidão;<br><br>

<strong>
Canta minh\'alma, então, a ti, Senhor:<br>
Grandioso és tu, grandioso és tu!<br>
Canta minh\'alma, então, a ti Senhor:<br>
Grandioso és tu, grandioso és tu!<br><br>
</strong>

2<br>
Quando atravesso bosques e florestas<br>
Ouvindo, à brisa, pássaros cantar,<br>
Ou vejo, além, montanhas altaneiras<br>
O teu poder e glória proclamar;<br><br>

3<br>
Quando percebo que na cruz maldita,<br>
Por teu amor, Jesus morreu por mim,<br>
E me livrou do jugo do pecado,<br>
Ali vertendo sangue carmesim;<br><br>

4<br>
Quando, afinal, em resplendor e glória,<br>
Jesus abrir as portas da mansão,<br>
Eu hei de estar de joelhos entre os santos,<br>
Na mais humilde e vera adoração;<br><br>

<strong>
E então cantar eternamente ali:<br>
Grandioso és tu, grandioso és tu!<br>
E então cantar eternamente ali:<br>
Grandioso és tu, grandioso és tu!<br></strong>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '27',
                'name' => '27 - Um hino ao Senhor',
                'body' => '1<br>
As grutas, as rochas imensas,<br>
Dos mundos o grande esplendor,<br>
Proclamam bem alto, constantes<br>
Um hino ao teu Nome, Senhor!<br><br>
<strong>
Nos céus e no mar e na terra,<br>
Nos bosques, nos prados em flor,<br>
No fragoso alcantil, na amplitude celeste,<br>
Um hino ressoa ao Senhor!<br><br>
</strong>

2<br>
Nos céus, as estrelas brilhantes,<br>
Dos mares o grande fragor<br>,
E as brisas entoam, ridentes,<br>
Um hino ao teu Nome, Senhor!<br><br>

3<br>
As aves alegres, na mata,<br>
Por entre as ramagens em flor,<br>
Exultam em coro, cantando<br>
Um hino ao teu Nome, Senhor!<br><br>

4<br>
E tu, pecador que vagueias,<br>
Que fazes ao teu Criador?<br>
Não achas momento em que cantes<br>
Um hino de glória ao Senhor!<br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '28',
                'name' => '28 - Coroação',
                'body' => '1<br>
Tuas obras te coroam<br>
Como um halo de esplendor;<br>
Astros, anjos, céus entoam<br>
Hino eterno a ti, Senhor!<br>
Campos, matas, vales, montes<br>
Verde outeiro e verde mar,<br>
Aves e sonoras fontes<br>
Formam coro singular!<br><br>

2<br>
Nós, mortais, por ti remidos,<br>
Deus de glória, Deus de amor,<br>
Corações aos céus erguidos,<br>
Celebramos teu louvor!<br>
Revelaste amor profundo,<br>
Insondável, sem igual,<br>
Enviando Cristo ao mundo<br>
A vencer por nós o mal!<br><br>

3<br>
Fonte és de alegria e vida,<br>
És do bem o Inspirador;<br>
Tua graça nos convida<br>
A viver em mútuo amor.<br>
Quais alegres peregrinos,<br>
Sempre em marcha triunfal,<br>
Cantaremos gratos hinos<br>
Na jornada, até o final!<br>',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '29',
                'name' => '29 - Louvor',
                'body' => '1<br>
Ó minha alma, a Deus bendize<br>
Em humilde adoração,<br>
Nada há mais que te escravize<br>
No pecado e escuridão!<br>
Oh, louvai-o! Oh, louvai-o!<br>
Ele é o Rei da criação!<br><br>

2<br>
Pelo seu favor e graça<br>
Que outorgou a nossos pais,<br>
E por tudo que ele faça,<br>
Bendizei-o mais e mais!<br>
Oh, louvai-o! Oh, louvai-o!<br>
Como nossos ancestrais.<br><br>

3<br>
Se estivermos em perigo,<br>
Nosso Deus nos guardará;<br>
Ele as trevas e o inimigo<br>
Para sempre abaterá!<br>
Oh, louvai-o! Oh, louvai-o!<br>
Pelas bênçãos que nos dá!<br><br>

4<br>
Anjos e homens, reverentes,<br>
Adorai-o com fervor;<br>
Lua, estrela, sol luzente,<br>
Que ao espaço dais fulgor,<br>
Oh, louvai-o! Oh louvai-o!<br>
Pois é Deus de excelso amor!',
                'audio' => '',
                'indices_id' => '5',
            ],
            [
                'id' => '30',
                'name' => '30 - Providência de Deus (na criação)',
                'body' => '1<br>
Ó Deus, ó Providência! Com teu real poder<br>
Trouxeste à existência o mundo, todo ser!<br>
E a tudo que criaste, com benfazeja mão,<br>
As bênçãos não negaste da tua proteção.<br><br>

<strong>
Eterno Deus, ó Deus sem par,<br>
A criação, com gratidão<br>
Te vem louvar!<br>
Nos céus teu nome aclamam<br>
Os astros, que são teus;<br>
A terra e o mar proclamam:<br>
“És o nosso Deus!”<br><br>
</strong>
<br>
2<br>
Ao sol resplandecente e à vastidão do mar<br>
Traçaste, ó Deus potente, as leis que irão guardar.<br>
E a tenra e pequenina florzinha em botão,<br>
A tua mão divina conserva em proteção.<br><br>

3<br>
Dos campos, a verdura, dos frutos, o sabor,<br>
Celebram a ternura do teu constante amor!<br>
E a natureza inteira, por toda a Criação,<br>
Proclama, alvissareira, a tua proteção. Amém.<br>',
                'audio' => '',
                'indices_id' => '6',
            ],
            [
                'id' => '31',
                'name' => '31 - Providência de Deus (na redenção)',
                'body' => '1<br>
Ó Deus, ó Providência! Sem ti não há viver!<br>
Vem dar-nos a assistência do teu real poder!<br>
Tão só em ti confiamos e em tua proteção,<br>
Pois só em ti achamos conforto e redenção.<br><br>
<strong>
És nosso Pai, ó Deus de amor!<br>
Teus filhos vêm aqui, também,<br>
Cantar louvor!<br>
Ao mundo renunciamos,<br>
Agora somos teus;<br>
E alegres proclamamos:<br>
“És o nosso Deus!”<br><br>
</strong>
2<br>
Ao homem Tu criaste, de ti vivo exemplar;<br>
Na terra o colocaste a fim de te louvar.<br>
Caído embora esteja, estendes tua mão,<br>
Na graça benfazeja de tua Redenção.<br><br>
3<br>

Em Cristo, o Filho amado, a tua graça vem<br>
Cobrir-nos o pecado e dar-nos todo o bem,<br>
Reais munificências gozamos nós, então,<br>
Nas terna providências de tua Redenção. Amém.<br>',
                'audio' => '',
                'indices_id' => '6',
            ],
            [
                'id' => '32',
                'name' => '32 - O Deus Fiel',
                'body' => '1<br>
Tu és fiel, Senhor, ó Pai celeste,<br>
Teus filhos sabem que não falharás!<br>
Nunca mudaste, tu nunca faltaste,<br>
Tal como eras tu sempre serás.<br><br>
<strong>
Tu és fiel, Senhor! Tu és fiel, Senhor!<br>
Dia após dia, com bênçãos sem fim,<br>
Tua mercê nos sustenta e nos guarda;<br>
Tu és fiel, Senhor, fiel assim.<br><br>
</strong>
2<br>
Flores e frutos, montanhas e mares,<br>
Sol, lua, estrelas brilhando no céu,<br>
Tudo criaste na terra e nos ares,<br>
Para louvar-te, Senhor, que és fiel.<br>

3<br>
Pleno perdão tu dás! Que segurança!<br>
Cada momento me guias, Senhor,<br>
E no porvir, oh! que doce esperança!<br>
Desfrutarei do teu rico favor. Amém<br>',
                'audio' => '',
                'indices_id' => '7',
            ],
            [
                'id' => '33',
                'name' => '33 - Maravilhas divinas',
                'body' => '1<br>
Ao Deus de amor e de imensa bondade,<br>
Com voz de júbilo, vinde e aclamai!<br>
Com coração transbordante de graças,<br>
Seu grande amor, todos, vinde e louvai.<br><br>
<strong>
No céu, na terra, que maravilhas<br>
Vai operando o poder do Senhor!<br>
Mas seu amor, aos homens perdidos,<br>
Das maravilhas é sempre a maior.<br>
</strong>
2<br>
Já nossos pais nos contaram a história<br>
De Deus, falando com muito prazer,<br>
Que nas tristezas, nos grandes perigos,<br>
Ele os salvou por seu grande poder.<br><br>
3<br>
Hoje também, nós bem alto, cantamos<br>
Que as orações ele nos atendeu;<br>
Seu forte braço, que é tão compassivo<br>
Em nosso auxílio ele sempre estendeu.<br><br>
4<br>
Como até hoje e daqui para frente,<br>
Ele será nosso eterno poder,<br>
Nosso castelo bem forte e seguro,<br>
E nossa fonte de excelso prazer.<br>',
                'audio' => '',
                'indices_id' => '7',
            ],
            [
                'id' => '34',
                'name' => '34 - Convite ao louvor',
                'body' => '1<br>
Demos com alegre som<br>
Glória a Deus, porque ele é bom.<br><br>
<strong>
Sua graça Deus nos dá<br>
E jamais nos deixará<br><br>
</strong>
2<br>
Com poder ele ordenou<br>
E no mundo a luz raiou.<br><br>
3<br>
Com olhar de compaixão<br>
Viu a nossa perdição.<br><br>
4<br>
O seu povo abençoou,<br>
No deserto ele o guiou.<br><br>
5<br>
Demos com alegre som<br>
Glória a Deus, porque ele é bom.<br>',
                'audio' => '',
                'indices_id' => '7',
            ],
            [
                'id' => '35',
                'name' => '35 - Adoração e súplica',
                'body' => '1<br>
Teu culto agora, aqui, Senhor,<br>
Nós vimos celebrar,<br>
Cantando, juntos, teu louvor,<br>
Teu livro a meditar.<br><br>
2<br>
À nossa vera adoração<br>
Presente estás, Senhor.<br>
Fazendo o nosso coração<br>
Sentir teu grande amor.<br><br>
3<br>
Atende nossas petições,<br>
Ó poderoso Deus!<br>
Concede aos nossos corações<br>
Antegozar os céus. Amém.<br>',
                'audio' => '',
                'indices_id' => '8',
            ],
            [
                'id' => '36',
                'name' => '36 - Exaltação',
                'body' => '1<br>
De toda a terra e das nações,<br>
Louvor a Cristo entoai!<br>
Em alta voz, dos corações,<br>
O Nome de Jesus cantai.<br><br>
<strong>
O dom supremo, divinal,<br>
Justiça eterna e santo amor,<br>
De litoral em litoral<br>
Serão cantados ao Senhor<br><br>
</strong>
2<br>
Em toda língua bendizei<br>
A Deus, Autor da Criação!<br>
Em toda terra engrandecei<br>
Jesus que trouxe a Redenção!<br>',
                'audio' => '',
                'indices_id' => '8',
            ],
            [
                'id' => '37',
                'name' => '37 - O Santo Nome',
                'body' => '1<br>
Jesus, teu nome é santo,<br>
Amável teu querer.<br>
Louvor supremo e puro amor<br>
Queremos te render!<br>
Poder e honra e glória a ti<br>
Nós vimos tributar,<br>
E com sincera devoção,<br>
Teu culto celebrar!<br><br>

2<br>

Jesus, teu nome é santo,<br>
Merece o nosso amor!<br>
És nosso Deus, que estás nos céus,<br>
E nosso protetor.<br>
Incomparável és, Senhor,<br>
Em tua compaixão;<br>
Quiseste, para o mal vencer,<br>
Fazer-te nosso irmão!<br><br>

3<br>
Jesus, teu nome é santo,<br>
Venceste sobre a cruz!<br>
O teu sofrer, o teu penar,<br>
À vida nos conduz.<br>
Glorificado estás nos céus,<br>
Atento à adoração<br>
Que vimos nós, fiéis, prestar<br>
Com grato coração! Amém.<br>',
                'audio' => '',
                'indices_id' => '8',
            ],
            [
                'id' => '38',
                'name' => '38 - Louvores sem fim',
                'body' => '1<br>
Mil vezes mil louvores rendamos a Jesus,<br>
Que da mais alta glória desceu até à cruz!<br>
Por sua imensa graça, por seu insigne amor,<br>
Por todos seja sempre louvado o Salvador.<br><br>
<strong>
Mil vezes, sim, mil vezes, sim,<br>
Louvores ao Senhor<br>
Que nos amou e nos salvou,<br>
Bendito Salvador!<br><br>
</strong>
2<br>
Eis ao redor do trono do Redentor Jesus,<br>
Milhares de milhares em refulgente luz!<br>
Com reverência adoram o grande Salvador,<br>
E ao bom Cordeiro rendem a honra e o louvor.<br><br>
3<br>
Oh! Vinde agora, todos, também a celebrar<br>
As glórias sempiternas do Redentor sem par!<br>
Com vozes de vitória seu Nome proclamai!<br>
Mil vezes mil louvores a Cristo tributai!',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '39',
                'name' => '39 - Exaltação e Louvor',
                'body' => '1<br>
Oh! Vinde crentes dar louvor ao grande Rei Jesus<br>
Que, para a nossa Redenção, morreu na amarga cruz;<br>
Seu sangue derramou, de tudo me lavou,<br>
Mais alvo do que a neve me tornou.<br><br>
<strong>
O sangue de Jesus me lavou, me lavou;<br>
O sangue de Jesus me lavou, me lavou!<br>
Alegre, cantarei louvores ao meu Rei,<br>
Ao meu Senhor Jesus que me salvou!<br><br>
</strong>
2<br>
Oh! Vinde unir-vos a Jesus na luta contra o mal<br>
E, com o grande Salvador em marcha triunfal,<br>
A todos proclamar que seu amor sem-par<br>
O fez na cruz seu sangue derramar.<br><br>
3<br>
O chefe da milícia é Jesus, meu Salvador,<br>
O Rei dos reis, o Redentor, o eterno e bom Senhor,<br>
A tudo vencerá, vitória nos dará<br>
E à glória eterna os seus conduzirá.<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '40',
                'name' => '40 - Cântico ao Salvador',
                'body' => '1<br>
Cantai a Cristo, o Salvador,<br>
Que tanto nos amou<br>
E, para nossa Redenção,<br>
Seu sangue derramou!<br><br>
<strong>
Salvação! Salvação!<br>
Alcançou-nos o Filho de Deus;<br>
Salvação! Salvação!<br>
Aleluia ao Filho de Deus!<br><br>
</strong>
2<br>
Cantai o amor celestial,<br>
Amor do grande Deus,<br>
Divina flama a consumir<br>
Os vis pecados meus!<br><br>
3<br>
De Cristo, o excelso, infindo amor,<br>
Oh! Vinde, publicai!<br>
E dele a grande salvação<br>
A todos proclamai!<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '41',
                'name' => '41 - Louvor pela Graça Divina',
                'body' => '1<br>
Louvai, louvai Cristo, o bom Mestre divino!<br>
Por nós na cruz ele sofreu, morreu;<br>
Perdão, perdão hoje aos contritos outorga,<br>
Pois precioso sangue na cruz verteu.<br>
Sim, louvai-o! Ei-lo tão exaltado,<br>
Mediador que nunca nos faltará.<br><br>

<strong>
Louvai, louvai e proclamai a grandeza<br>
Do perdão, da graça que a todos dá.<br>
</strong>

2<br>
Louvai, louvai Cristo, o bom Mestre divino!<br>
Conselhos bons dá ele ao pecador;<br>
Anunciai as bênçãos maravilhosas<br>
Concedidas por nosso Salvador.<br>
Ide todos, servos de Jesus Cristo,<br>
E ele nunca vos abandonará.<br><br>

3<br>

Louvai, louvai Cristo, o bom Mestre divino!<br>
Cantai, cantai, seu grande amor cantai;<br>
Fiéis, cantai de coração, bem unidos,<br>
Seu poder e glória louvai, louvai!<br>
Qual pastor que cuida do seu rebanho,<br>
Cristo, assim, os crentes protegerá.<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '42',
                'name' => '42 - O grande amor de Deus',
                'body' => '1<br>
A Deus demos glória por seu grande amor,<br>
O Filho bendito por nós todos deu<br>
E graça concede ao mais vil pecador,<br>
Abrindo-lhe a porta de entrada no céu.<br><br>
<strong>
Exultai! Exultai! Vinde todos louvar<br>
A Jesus, Salvador, a Jesus, Redentor!<br>
A Deus demos glória, porquanto do céu<br>
Seu Filho bendito por nós todos deu!<br><br>
</strong>

2<br>
Oh! Graça real! Foi assim que Jesus,<br>
Morrendo, seu sangue por nós derramou.<br>
Herança nos céus, com os santos em luz,<br>
Legou-nos aquele que o preço pagou.<br><br>

3<br>
Tal prova de amor nos persuade a confiar<br>
Nos merecimentos do Filho de Deus!<br>
E quem, a Jesus, pela fé se entregar,<br>
Vai vê-lo na glória eterna dos céus.<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '43',
                'name' => '43 - O Deus de Amor',
                'body' => '1<br>
Desperta já, meu coração<br>
E louva ao Salvador,<br>
Cantando em hinos triunfais<br>
Que Deus é o Deus de amor.<br>
Imenso amor! Amor sem-par!<br>
Preenche os vastos céus,<br>
Alcança a terra e a todos nós,<br>
Insigne amor de Deus!<br><br>

<strong>
Desperta já, meu coração,<br>
E louva ao grande Salvador;<br>
Cantando em hinos triunfais<br>
Que Deus é o Deus de amor.<br><br>
</strong>

2<br>
Amor que um dia se encarnou<br>
A fim de me salvar,<br>
E que, subindo à dura cruz,<br>
Morreu em meu lugar!<br>
Amor que exclama: “Vinde a mim!”,<br>
Que busca o pecador.<br>
Amor eterno, sem igual,<br>
De Cristo, Salvador.<br><br>

3<br>
Remido a preço tão real,<br>
O sangue do Senhor,<br>
Com que pagar eu poderei<br>
Tal graça, tal amor?<br>
Quando ele a mim, um pecador,<br>
Se digna de aceitar<br>
E me levar com seus fiéis<br>
Ao santo e eterno lar?<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '44',
                'name' => '44 - Louvores ao Senhor',
                'body' => 'Louvemos ao Senhor, ao Pai da eternidade,<br>
Que mostra tanto amor à pobre humanidade!<br>
Seu Filho aqui sofreu por nossa redenção<br>
E com o Pai nos deu bendita comunhão!<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '45',
                'name' => '45 - Grande Redenção',
                'body' => '1<br>

Milhares de milhares ouço<br>
Cantando a Deus com gratidão,<br>
A Cristo, o Salvador, louvando<br>
Por sua grande Redenção.<br>
“A Deus louvai!” — em coro clamam;<br>
“A Deus louvai — pois nos amou!<br>
E, pelo sangue do Cordeiro,<br>
De toda mancha nos lavou!”<br><br>

2<br>

O mesmo salmo triunfante,<br>
Em tons de santa exultação,<br>
Por todo o mundo vai subindo<br>
A Deus, autor da Redenção.<br>
“A Deus louvai” — nos vales soa<br>
E os montes fazem ecoar:<br>
“A Deus louvai, o Deus da Graça,<br>
Que aos pecadores quer salvar!”<br><br>

3<br>
E nós, teus santos pés cercando,<br>
Enquanto militando aqui<br>
As nossas vozes elevamos<br>
Para exaltar, Senhor, a ti.<br>
“A Deus louvai” - também clamamos!<br>
“A Deus louvai, supremo Rei!<br>
E glória, honra, majestade<br>
A Cristo, o Salvador, rendei!”<br><br>

4<br>
Das trevas fomos nós chamados<br>
À tua pura e santa luz!<br>
Da escravidão e do pecado<br>
Nos libertaste pela cruz.<br>
“A Deus louvai!” - cantemos todos!<br>
“A Deus louvai, que nos remiu,<br>
E filhos seus e seus herdeiros,<br>
Em Cristo, nos constituiu!”<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '46',
                'name' => '46 - Altos Louvores',
                'body' => '1<br>
Altos louvores a quem triunfou!<br>
Jesus, padecendo, seu povo salvou.<br>
Morto na cruz pelos crimes do mundo,<br>
Dotou aos iníquos de vida e perdão.<br>
Quão grande esta graça! Favor tão profundo!<br>
Amor indizível! Real compaixão!<br>
Altos louvores a quem triunfou!<br>
Jesus, padecendo, seu povo salvou.<br><br>

2<br>
Glória rendemos ao bom Salvador,<br>
Excelso em justiça, supremo em amor!<br>
Cristo quebrou as cadeias do forte,<br>
Seu cetro arrancando com régio poder.<br>
Agora, onde estão teus terrores, ó morte?<br>
Sepulcro! Teus presos irão reviver!<br>
Glória rendamos ao bom Salvador,<br>
Excelso em justiça, supremo em amor!<br><br>

3<br>
Graças te damos, divino Senhor,<br>
Amparo constante, fiel protetor!<br>
Nunca nos deixas, Pastor incansável!<br>
Teu braço não falha nem perde o poder.<br>
Conosco presente em bondade imutável,<br>
Teu povo diriges com alto saber,<br>
Graças te damos, divino Senhor,<br>
Amparo constante, fiel protetor.<br><br>

4<br>
Vem, ó Jesus, majestoso reinar;<br>
Teu povo te espera, não queiras tardar!<br>
Vem em poder, apressando esse dia,<br>
Pois tua vontade será feita aqui.<br>
Oh! Volta na glória trazendo alegria!<br>
A Igreja suspira, ansiosa por ti!<br>
Vem, ó Jesus, majestoso reinar;<br>
Teu povo te espera, não queiras tardar!<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '47',
                'name' => '47 - Louvor e glória',
                'body' => '1<br>
Louvamos-te, ó Deus, pelo dom de Jesus<br>
Que, por nós, pecadores, morreu sobre a cruz<br><br>

<strong>
Aleluia! Toda a glória te rendemos, Senhor!<br>
Aleluia! Tua graça imploramos. Amém.<br><br>
</strong>

2<br>
Louvamos-te, ó Deus, pois nos mandas a luz<br>
Que, brilhando nas trevas, a Cristo conduz.<br><br>

3<br>
Louvamos-te, ó Deus, por teu Filho, Jesus,<br>
Que foi morto, mas vive no Reino da luz.<br><br>
4<br>
Louvamos-te, ó Deus, e rogamos, Senhor:<br>
Dá-nos sempre sentir teu poder, teu amor.<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '48',
                'name' => '48 - Amor e gratidão',
                'body' => '1<br>
Jesus, quão infinito é teu divino amor!<br>
Além do nosso alcance, profundo é seu valor!<br>
Os céus por nós deixaste, vieste, aqui, morrer,<br>
A fim de que possamos contigo, além, viver.<br><br>

2<br>
Por isso, alegremente, buscamos sempre a ti,<br>
Visando obedecer-te na vida breve aqui.<br>
Embora desprezados, com aflições e dor,<br>
É suave e bom servir-te, bendito Salvador! Amém.<br>',
                'audio' => '',
                'indices_id' => '9',
            ],
            [
                'id' => '49',
                'name' => '49 - Sempre vencendo',
                'body' => '1<br>
Sempre vencendo, mui vitorioso,<br>
Cristo Jesus, o Senhor!<br>
É Soberano, Chefe bendito,<br>
Em tudo ele é vencedor!<br>
Ei-lo supremo, guiando,<br>
Com seu imenso poder!<br>
Todos avante, pois, crentes,<br>
Todos lutar e vencer.<br><br>

<strong>
Não é dos fortes a vitória,<br>
Nem dos que correm melhor.<br>
Mas dos fiéis e sinceros<br>
Que seguem junto ao Senhor<br><br>
</strong>

2<br>
Sempre vencendo, mui vitorioso,<br>
Cristo Jesus, o Senhor!<br>
Eis suas hostes inumeráveis,<br>
Seu grande império e fulgor;<br>
Em seu governo demonstra<br>
Cuidado e amor sem igual;<br>
Sempre nos ama e protege<br>
Com seu poder eternal<br><br>

3<br>

Sempre vencendo, mui vitorioso,<br>
Cristo Jesus, o Senhor!<br>
Reis e vassalos, servos e chefes<br>
Querem também seu favor.<br>
Senhor, desejo e te imploro<br>
Que me permitas lutar<br>
Sempre ao teu lado, invencível,<br>
Até meus dias findar!<br>',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '50',
                'name' => '50 - Sangue precioso',
                'body' => '1<br>
Cantarei a Cristo e seu excelso amor;<br>
Por nós baixou à terra o grande Salvado<br><br>

<strong>
O sangue precioso<br>
De Cristo tem valor<br>
Das penas da justiça<br>
Liberta o pecador.<br>
</strong>

2<br>
Cantarei a Cristo! Por nós morreu na cruz.<br>
Aos pobres pecadores quem salva é só Jesus!<br><br>
3<br>
Cantarei a Cristo! Por nós cumpriu a lei!<br>
Seu manto de justiça, alegre, vestirei.<br><br>
4<br>
Cantarei a Cristo! Nas nuvens voltará,<br>
E na celeste glória os seus receberá.<br>',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '51',
                'name' => '51 - Cristo coroado',
                'body' => '1<br>
A Cristo coroai, Cordeiro vencedor!<br>
Ouvi das hostes celestiais, dos anjos o louvor!<br>
Eleva a tua voz e entoa, coração<br>
Louvando Àquele que morreu e deu-te a salvação.<br><br>
2<br>
A Cristo coroai, seu lado e mãos olhai!<br>
Das suas chagas o esplendor e a glória contemplai!<br>
Nem anjos lá do céu o podem suportar;<br>
Perante o místico esplendor abaixam seu olhar<br><br>
3<br>
A Cristo coroai! A vida nos doou,<br>
E a fim de dar-nos salvação da tumba triunfou!<br>
Cantemos seu poder: morreu, mas ressurgiu!<br>
A vida eterna ali nos deu e a morte destruiu.<br><br>
4<br>
A Cristo coroai, das eras o Senhor,<br>
Dos mundos e astros da amplidão eterno Criador.<br>
Ao grande Redentor, que nos deu salvação,<br>
Eternamente tributai louvor e adoração.',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '52',
                'name' => '52 - Glória e coroação',
                'body' => '1<br>
Saudai o nome de Jesus!<br>
Arcanjos, adorai!<br>
Ao Rei que se humilhou na cruz,<br>
Com glória, glória, glória, glória,<br>
Com glória coroai!<br><br>

2<br>
Ó escolhida geração<br>
De Deus, o eterno Pai,<br>
Ao grande autor da salvação<br>
Com glória, glória, glória, glória,<br>
Com glória coroai!<br><br>

3<br>
Remidos todos, com fervor,<br>
Louvores entoai!<br>
Ao que da morte é vencedor,<br>
Com glória, glória, glória, glória,<br>
Com glória coroai!<br><br>

4<br>
Ó raças, povos e nações<br>
Ao Rei divino honrai!<br>
A quem quebrou os vis grilhões,<br>
Com glória, glória, glória, glória,<br>
Com glória coroai!<br>

',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '53',
                'name' => '53 - Honra, poder, majestade',
                'body' => '1<br>
Honra, poder, majestade, riqueza,<br>
Sabedoria, domínio e grandeza,<br>
Ao vencedor da batalha é cantado,<br>
Ao ser no trono do céu, coroado.<br><br>

2<br>
Soa nos céus o triunfo, a vitória;<br>
Vibra na terra do seu Nome a glória;<br>
Montes, oceanos, florestas e flores,<br>
Do seu domínio ecoam louvores.<br><br>

3<br>
Sobe em canto constante alegria;<br>
Bênçãos do alto nos vêm cada dia;<br>
Honra, poder, majestade entoamos<br>
Em nossos hinos que a Deus elevamos.<br><br>

4<br>
Dai ao Cordeiro o louvor que é devido;<br>
No trono reina de glória vestido.<br>
Foi imolado - aparente fraqueza!<br>
Mas triunfante, já vive em grandeza<br>

',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '54',
                'name' => '54 - A chegada do Messias',
                'body' => '1<br>
Cantai! Exultai! O Messias chegou!<br>
Dissiparam-se as trevas, a aurora raiou!<br><br>

<strong>
Dai louvores, celebrai-o!<br>
Foi morto na cruz!<br>
Dai louvores, publicai-o;<br>
Já vive Jesus!<br><br>
</strong>

2<br>
Cantai! Exultai! Pelos ímpios sofreu!<br>
Satisfez a justiça e o sangue verteu!<br><br>

3<br>
Cantai! Exultai! Temos pleno perdão,<br>
Pois Jesus nos concede real salvação!<br><br>

4<br>
Cantai! Exultai! Jesus Cristo, nos céus,<br>
Pelos seus intercede à destra de Deus<br><br>

5<br>
Cantai! Exultai! O Senhor voltará!<br>
Triunfante, glorioso, nas nuvens virá!<br>


',
                'audio' => '',
                'indices_id' => '10',
            ],
            [
                'id' => '55',
                'name' => '55 - Alegria e gratidão',
                'body' => '1<br>
Cantai alegremente, cantai a Deus louvor;<br>
Trazei a ele um canto de exultação e amor<br>
É Deus quem faz a terra seus frutos produzir,<br>
E as estações do ano em ordem prosseguir.<br><br>

2<br>
É Deus que envia as chuvas e os montes faz florir;<br>
Que o vale exuberante de trigo faz cobrir.<br>
Deus tudo multiplica em sua compaixão,<br>
Fartura concedendo com dadivosa mão.<br><br>

3<br>
Trazei aos seus altares dos frutos que ele deu,<br>
E as almas da colheita por quem, Jesus morreu.<br>
Prostrai-vos diante dele, humildes, com louvor,<br>
E assim, em vossas vidas, dai graças ao Senhor!<br>

',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '56',
                'name' => '56 - Ações de graça e súplica',
                'body' => '1<br>
Graças te rendemos, Deus de luz e amor,<br>
Pelo dom de Cristo, nosso Salvador;<br>
Pelo que nos deste com bondosa mão,<br>
Pelos dons da vida: Veste, abrigo e pão.<br><br>

2<br>
Pelos bons amigos que, Senhor, te apraz<br>
Congregar conosco, nesta doce paz.<br>
Dá-nos sempre a graça de contigo estar,<br>
Dá-nos sempre o gozo de teu Nome honrar!<br>',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '57',
                'name' => '57 - Fonte de todo bem',
                'body' => '1<br>
A terra semeamos a fim de nos dar pão,<br>
Mas Deus é quem a nutre com benfazeja mão.<br>
É Deus quem manda o frio, o inverno e o verão,<br>
A chuva, o doce orvalho e a fresca viração.<br><br>

<strong>
De todo bem a fonte<br>
É o nosso bom Senhor!<br>
Louvai a Deus, louvai a Deus<br>
Por todo o seu amor!<br><br>
</strong>

2<br>
O Criador de tudo, que em toda parte está<br>
Colore a flor silvestre e à estrela brilho dá<br>
Os ventos lhe obedecem, e o bravo mar também;<br>
As frágeis avezinhas o seu cuidado tem!<br><br>

3<br>
A nós, porém, seus filhos revela mais amor,<br>
Mandando a este mundo o Filho Salvador!<br>
A nós fazendo herdeiros de tudo quanto tem,<br>
Na redenção perfeita que dele nos provém!
',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '58',
                'name' => '58 - Ofertas',
                'body' => '1<br>
A minha vida, com meus bens,<br>
Provém de ti, Senhor!<br>
Saúde, veste, abrigo e pão<br>
São dons do teu amor!<br><br>

2<br>
Oh! Não permitas, Pai de amor<br>
Que aquilo que me dás<br>
Eu ouse, incauto, desviar<br>
Em causas vãs ou más!<br><br>

3<br>
Não deixes que meu coração<br>
Se engolfe no prazer,<br>
E no fruir de muitos dons<br>
Eu venha te esquecer!<br>

4<br>
Mordomo teu, eu quero dar<br>
À Igreja, em proporção,<br>
A quantas bênçãos recebi<br>
De tuas próprias mãos!<br><br>

5<br>
Aceita a minha oferta, ó Deus,<br>
E bênçãos dá-me a flux.<br>
Sim, dá-me sempre o que ofertar<br>
À causa de Jesus! Amém.<br>


',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '59',
                'name' => '59 - Gratidão',
                'body' => '1<br>
Ao Deus eterno, Criador,<br>
Mil graças tributemos,<br>
Por tantos anos de labor<br>
No pátrio lar que temos.<br><br>

<strong>
Ao Deus eterno, Criador,<br>
Ao Deus da Redenção,<br>
Por tantos anos de labor,<br>
A nossa gratidão!<br><br>
</strong>

2<br>
Provaste,ó Deus, o teu amor<br>
A nós, os brasileiros,<br>
Na voz tão plena de fervor<br>
Dos grandes pioneiros.<br><br>

3<br>
Por toda parte ó Redentor,<br>
Agora é anunciado<br>
Teu nome ao pobre pecador<br>
Que jaz no vil pecado.<br><br>

4<br>
Que grandes coisas, ó Senhor,<br>
A todos nós legaste!<br>
São provas desse grande amor<br>
Com que Tu nos amaste. Amém.<br>

',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '60',
                'name' => '60 - Ofertório',
                'body' => '1<br>
Em tudo as tuas mãos, Senhor,<br>
Nos têm enriquecido,<br>
E às provisões do teu amor,<br>
Bondosas, conduzido.<br><br>
2<br>
De ti procede a salvação<br>
E as bênçãos incontáveis<br>
Que, dia a dia, ó Pai, nos dão<br>
As tuas mãos amáveis.<br><br>
3<br>
De ti vivemos nós, Senhor,<br>
E em ti nos alegramos;<br>
Na comunhão do puro amor<br>
Que em Cristo desfrutamos.<br><br>
4<br>
Com mui sincero coração<br>
Oferta aqui trazemos;<br>
Recebe como gratidão<br>
De quanto a ti devemos. Amém<br>

',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '61',
                'name' => '61 - Ações de graça',
                'body' => '1<br>
Graças dou por esta vida,<br>
Pelo bem que revelou<br>
Graças dou pelo futuro<br>
E por tudo que passou.<br>
Pelas bênçãos derramadas,<br>
Pelo amor pela aflição,<br>
Pelas graças reveladas,<br>
Graças dou pelo perdão.<br><br>

2<br>
Graças pelo azul celeste<br>
E por nuvens que há também,<br>
Pelas rosas do caminho<br>
E os espinhos que elas têm.<br>
Pelas noites desta vida,<br>
Pela estrela que brilhou,<br>
Pela prece respondida<br>
E a esperança que falhou.<br><br>

3<br>
Pela cruz e o sofrimento,<br>
E, afinal, ressurreição,<br>
Pelo amor, que é sem medida,<br>
Pela paz no coração;<br>
Pela lágrima vertida<br>
E o consolo que é sem par,<br>
Pelo dom da eterna vida,<br>
Sempre graças hei de dar.<br>

',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '62',
                'name' => '62 - Hino de gratidão',
                'body' => '1<br>
Graças te dou por tudo que me deste,<br>
Primeiro a Salvação em meu Jesus.<br>
Graças te dou por tudo que fizeste<br>
Por este pecador salvo na cruz!<br><br>

<strong>
Graças, graças, mil graças<br>
A ti, meu Salvador!<br>
Graças, graças, mil graças<br>
Por teu precioso amor!<br><br>

</strong>

2<br>
Eu te agradeço a bênção do trabalho<br>
E do meu lar, que alegra o meu viver;<br>
A correção paterna quando falho,<br>
Provando teu amor pelo meu ser.<br><br>

3<br>
Eu te agradeço o pão de cada dia,<br>
A água que alivia a sede dura,<br>
E o sol que aquece a pobre gente fria,<br>
São bênçãos que enchem a terra de fartura.<br><br>

4<br>
Eu te agradeço, ó Pai, os meus amigos,<br>
E os inimigos também te agradeço.<br>
Sou grato por vitórias em perigos,<br>
E outras bênçãos que eu não mereço.<br>


',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '63',
                'name' => '63 - As muitas bênçãos',
                'body' => '1<br>
Se da vida as vagas procelosas são,<br>
Se, com desalento, julgas tudo vão,<br>
Conta as muitas bênçãos, dize-as de uma vez,<br>
E verás, surpreso, quanto Deus já fez.<br><br>

<strong>
Conta as bênçãos, dize-as quantas são,<br>
Recebidas da divina mão<br>
Vem dizê-las, todas de uma vez,<br>
E verás, surpreso, quanto Deus já fez!<br><br>
</strong>

2<br>
Tens acaso mágoas, triste é teu lidar?<br>
É a cruz pesada que tens de levar?<br>
Conta as muitas bênçãos! Logo exultarás,<br>
E, fortalecido, tudo vencerás!<br><br>

3<br>
Quando vires outros com seu ouro e bens,<br>
Lembra que tesouros prometidos tens.<br>
Nunca os bens da terra poderão comprar<br>
A mansão celeste que vais habitar<br><br>


4<br>
Seja o teu combate longo ou breve aqui,<br>
Não te desanimes Deus será por ti!<br>
Seu divino auxílio minorando o mal,<br>
Te dará consolo e galardão final<br>',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '64',
                'name' => '64 - Grata memória',
                'body' => '1<br>
Nunca meus lábios cessarão, ó Cristo,<br>
De bendizer-te, de cantar-te glória;<br>
Pois guardo na alma teu amor imenso:<br>
Grata memória!<br><br>

2<br>
Quando perdido vagueava aflito,<br>
E em densas trevas meu andar seguia,<br>
Tu me buscaste, lá dos céus mandando<br>
Luz que me guia!<br><br>

3<br>
Quando oprimido por mundano jugo,<br>
Em maus caminhos eu me angustiava,<br>
Deu-me descanso tua voz tão terna,<br>
Que me chamava!<br><br>

4<br>
Aos fortes braços eu corri confiante,<br>
Meigo e bondoso, não me recusaste;<br>
Em teu imenso, suave amor, tão puro,<br>
Me agasalhaste!<br><br>

5<br>
Oh! Nunca, nunca cessarão meus lábios<br>
De bendizer-te, de cantar-te a glória;<br>
Pois em minha alma Tu és sempre, ó Cristo,<br>
Grata memória! Amém.<br>



',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '65',
                'name' => '65 - Louvor',
                'body' => '1<br>
Dai graças, todos vós, a Deus humildemente;<br>
Milagres fez por nós neste universo ingente.<br>
Pois vós deveis saber que muitos bens nos deu,<br>
Que pelo seu poder nos vem a luz do céu.<br><br>
2<br>
O Deus da Redenção nos queira dar a vida<br>
Alegre coração e auxílio em toda lida.<br>
Mantenha-nos de pé, por seu imenso amor,<br>
E nos conserve a fé em Cristo, o Salvador.<br><br>
3<br>
Exaltação, louvor ao Pai, ao Filho amado<br>
E ao bom Consolador, que foi dos céus mandado!<br>
Ao grande e trino Deus, em canto triunfal,<br>
Tribute os hinos seus a Igreja Universal.<br>',
                'audio' => '',
                'indices_id' => '11',
            ],
            [
                'id' => '66',
                'name' => '66 -  Coração quebrantado',
                'body' => 'Sonda-me, ó Deus, o coração;<br>
Sonda-me, ó Deus, o coração;<br>
Prova e conhece os meus pensamentos;<br>
Prova e conhece os meus pensamentos;<br>
Vê se em mim há algum mau caminho.<br>
Sonda-me, conhece-me<br>
E prova-me, ó Deus!<br>
Conhece-me o coração,<br>
Conhece-me o coração;<br>
Guia-me, Senhor,<br>
Guia-me Senhor,<br>
E mostra-me o caminho,<br>
E guia os meus passos,<br>
Guia meus passos,<br>
Ó meu Salvador. Amém.<br>',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '67',
                'name' => '67 - Coração quebrantado',
                'body' => '1<br>
Sonda-me, ó Deus, pois vês meu coração!<br>
Prova-me, ó Pai, te peço em oração.<br>
De todo o mal liberta-me, Senhor,<br>
Até da transgressão que oculta for.<br><br>
2<br>
Vem me lavar dos vis pecados meus,<br>
Conforme prometeste, meu bom Deus,<br>
Faze-me arder e consumir de amor,<br>
Pois quero te magnificar, Senhor.<br><br>
3<br>

Todo meu ser não considero meu;<br>
Quero gastá-lo no serviço teu.<br>
Minhas paixões Tu podes dominar,<br>
Pois Tu, Senhor, vieste em mim morar.<br><br>
4<br>
Lá do alto céu o avivamento vem,<br>
E que comece em mim seguindo além.<br>
O teu poder, as bênçãos, teu favor<br>
Concede aos que são teus, ó Pai de amor. <br>Amém<br>',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '68',
                'name' => '68 - Necessidade',
                'body' => '1<br>
Eu creio, Senhor, na divina promessa,<br>
Vitórias já tive nas lutas aqui.<br>
Contudo, é mui certo que a gente tropeça;<br>
Por isso, Senhor, eu preciso de ti.<br><br>

2<br>
A luz que me guia no escuro caminho<br>
Fulgura de cima do sol criador;<br>
Contudo, não posso segui-la sozinho;<br>
Por isso eu preciso de ti, meu Senhor.<br><br>
3<br>
Bem sei que nas preces eu posso buscar-te,<br>
Jamais dessa bênção na vida eu descri;<br>
Contudo, é possível que eu dela me afaste;<br>
Por isso, Senhor, eu preciso de ti.<br><br>
4<br>
Esforços da terra, precário destino,<br>
Empenho dos homens, riqueza, o que for,<br>
Não valem a bênção do reino divino;<br>
Por isso eu preciso de ti, meu Senhor. <br>Amém.',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '69',
                'name' => '69 - Súplica',
                'body' => '1<br>
Salvador, Jesus bendito<br>
De minha alma a Redenção<br>
Tua graça me convida<br>
A buscar-te em confissão.<br><br>
2<br>
Por amor de mim morreste<br>
Sobre a ensangüentada cruz!<br>
Tu sofreste a minha pena,<br>
Oh! Meu Salvador Jesus!<br><br>
3<br>
A minha alma purifica<br>
Em teu sangue remidor;<br>
Faze que, leal e humilde,<br>
Eu te sirva, meu Senhor.<br><br>
4<br>
Tua ovelha, nos teus braços,<br>
Bem segura guardarás,<br>
Vem livrar-me dos pecados<br>
E guardar-me em tua paz!<br>',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '70',
                'name' => '70 - Descanso em Jesus',
                'body' => '1<br>
Todo meu tão vil pecado<br>
Lanço, ó Cristo, sobre ti,<br>
Pois, Cordeiro imaculado,<br>
Tu me dás perdão aqui.<br><br>
2<br>
Minha mancha tão impura<br>
Tu bem podes retirar;<br>
E deixar em ti segura<br>
A minha alma descansar.<br><br>
3<br>
Pobre sou, angustiado,<br>
Mas revivo em tua cruz;<br>
E meu coração cansado<br>
Ponho só em ti Jesus!<br><br>
4<br>
Minhas mágoas carregaste<br>
No madeiro em meu lugar;<br>
Vida eterna me compraste,<br>
Salvação me vieste dar.<br><br>
5<br>
E na glória eterna, ao lado<br>
Dos fiéis em multidão,<br>
Meus louvores, Cristo amado,<br>
Mais perfeito te serão.<br> Amém.',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '71',
                'name' => '71 - Perdão',
                'body' => '1<br>
Sim, sofrimento te causei, ó Deus!<br>
E ao meu exemplo o fraco tropeçou,<br>
E eu não andei nos bons caminhos teus:<br>
Perdão, Senhor!<br><br>
2<br>
Sim, vão e fútil foi o meu falar,<br>
E amor ao meu irmão não demonstrei;<br>
Ao sofredor eu não quis ajudar:<br>
Perdão, Senhor!<br><br>
3<br>
Sim, negligente foi o meu viver,<br>
Sem me dispor a pelejar por ti,<br>
E firme em teu trabalho eu não quis ser:<br>
Perdão, Senhor!<br><br>
4<br>
Escuta, ó Deus, a minha oração<br>
E vem livrar-me do pecado vil.<br>
Renova este pobre coração!<br>
Amém, Senhor!<br>

',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '72',
                'name' => '72 - Purificação',
                'body' => '1<br>
A minha alma está manchada<br>
De pecado e corrupção,<br>
Pois em mim não há justiça,<br>
Santidade ou retidão.<br><br>
2<br>
Minha origem reconheço:<br>
Pecador, bem sei, nasci;<br>
Da maldade procedente,<br>
O seu fardo já senti.<br><br>
3<br>
Vem, Jesus, e santifica<br>
Este pobre pecador<br>
Dá-me a graça de sentir-me<br>
Amparado em teu amor.<br><br>
4<br>
O teu sangue precioso<br>
Derramado sobre a cruz,<br>
Me redime do pecado<br>
De uma vez, ó meu Jesus.<br><br>
5<br>
Vem, Senhor, purificar-me,<br>
Teu perdão receberei.<br>
Eu bem sei que para sempre<br>
Ao teu lado reinarei. <br>Amém.



',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '73',
                'name' => '73 - Compaixão',
                'body' => '1<br>
A ti, Senhor, Atrevo-me a chegar;<br>
Bem sei que sou indigno de favor.<br>
Contrito venho para te implorar:<br>
Tem compaixão de mim, sou pecador!<br><br>
2<br>
Sim, pecador, a suplicar perdão,<br>
Embora não mereça o teu favor;<br>
Mas dá-me, peço a purificação!<br>
Tem compaixão de mim, sou pecador!<br><br>
3<br>
Fugindo eu quis, em vão, me libertar<br>
Do meu pecado vil e opressor!<br>
E agora, exausto, aqui eis-me a clamar:<br>
Tem compaixão de mim, sou pecador!<br><br>
4<br>
Tão infinito, ó Deus, é teu poder!<br>
Tão grande, ó Pai, o teu excelso amor!<br>
Aos rogos meus não deixes de atender:<br>
Tem compaixão de mim, sou pecador! <br>Amém',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '74',
                'name' => '74 - Sinceridade',
                'body' => '1<br>
Jesus Senhor, me achego a ti,<br>
Tua ira santa mereci;<br>
O teu favor estende aqui!<br>
Aceita um pecador!<br><br>
<strong>
Eu venho como estou!<br>
Sim, venho como estou!<br>
Porque Jesus por mim morreu,<br>
Eu venho como estou!<br><br>
</strong>
2<br>
As minhas culpas grandes são,<br>
Mas Tu, que não morreste em vão,<br>
Me podes conceder perdão!<br>
Aceita um pecador!<br><br>
3<br>
Oh! Vem agora Salvador,<br>
Livrar-me por teu grande amor,<br>
Pois Tu, Jesus, és meu Senhor,<br>
Aceita um pecador. <br>Amém.
',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '75',
                'name' => '75 - Arrependimento e súplica',
                'body' => '1<br>
Abatido em meu pecado,<br>
Clamo a ti, ó bom Senhor!<br>
Olha o pranto, o desencanto,<br>
Deste pobre pecador.<br>
Deus clemente e paciente,<br>
Oh, liberta-me do mal,<br>
Para amar-te e consagrar-te<br>
Minha vida até ao final.<br><br>
2<br>
Cada dia andaria<br>
Lado a lado com Jesus,<br>
Adorando, exaltando<br>
Ao excelso Deus de luz.<br>
Mas ligado ao pecado,<br>
Como posso andar, Senhor?<br>
Dos contritos os delitos,<br>
Vem tirar, ó Redentor.<br><br>
3<br>
Deus bondoso, caridoso,<br>
Da verdade eterno Autor,<br>
Meu pecado confessado,<br>
Oh, perdoa por amor!<br>
Deus clemente, Pai do crente,<br>
Esperança e eterna luz,<br>
Sê meu guia, noite e dia,<br>
Para a glória de Jesus.<br> Amém.',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '76',
                'name' => '76 - Compaixão',
                'body' => '1<br>
Tem compaixão de mim Senhor!<br>
Oh, mostra o teu excelso amor,<br>
E, na infinita multidão<br>
De tuas graças dá perdão.<br><br>
2<br>
Tão pecador me descobri!<br>
Perdoa o mal que cometi.<br>
Minha alma venho aqui lavar;<br>
Oh, não me deixes mais pecar.<br><br>
3<br>
A mim Tu podes perdoar,<br>
De toda mancha me lavar;<br>
Vem dar-me um novo cora-ção,<br>
Ó Deus de amor e compaixão.<br><br>
4<br>
Por geração, ó bom Senhor,<br>
Não sou senão um pecador.<br>
Em ti me posso levantar<br>
E, como a neve, puro estar.<br><br>
5<br>
Vem, pois, a mim então valer,<br>
A meus clamores atender,<br>
E o coração que triste está<br>
De eterno gozo exultará. <br>Amém.',
                'audio' => '',
                'indices_id' => '12',
            ],
            [
                'id' => '77',
                'name' => '77 -  Divino Perdão',
                'body' => '1<br>
Quão abençoado aquele<br>
Que Jesus na cruz salvou!<br>
Seu pecado foi coberto,<br>
Sua dívida passou<br>
Para o Justo, para o Justo,<br>
Que, a salvar-nos, expirou.<br><br>
2<br>
Triste e envolto no silêncio,<br>
Meus pecados escondi;<br>
Que pesar de consciência,<br>
Que misérias padeci!<br>
Noite e dia, noite e dia<br>
Tua indignação senti<br><br>
3<br>
Mas por fim, desesperado,<br>
Descobri minha aflição.<br>
Meus delitos confessando<br>
Em Jesus achei perdão.<br>
Esta graça, esta graça<br>
Pede eterna gratidão!<br><br>
3<br>
Deus bondoso, todo crente<br>
Teu socorro implorará;<br>
Dos remorsos, vero alívio<br>
Em Jesus encontrará.<br>
Santo gozo, santo gozo<br>
Nele sempre reinará!<br><br>
4<br>
Deus bondoso! Deus clemente!<br>
Teu auxílio me darás<br>
E, com teu olhar divino,<br>
Os meus pés conduzirás.<br>
Sempre dócil, sempre dócil<br>
E submisso me farás.<br><br>
5<br>
Em receios e tristezas<br>
Anda aflito o pecador,<br>
Mas em Cristo bem guardados,<br>
Para nós não há temor:<br>
Exultamos, exultamos<br>
No divino Salvador!<br>',
                'audio' => '',
                'indices_id' => '13',
            ],
            [
                'id' => '78',
                'name' => '78 - Perfeita expiação',
                'body' => '1<br>
Sacrifícios imolados<br>
Sobre o sanguinoso altar<br>
Não tiravam os pecados;<br>
Não podiam expiar<br>
Nossas culpas, nossas culpas,<br>
Nem remorsos dissipar.<br><br>
2<br>
Mas o sangue precioso<br>
Que na cruz o Redentor<br>
Derramou, tão generoso,<br>
Tem poder expiador;<br>
Purifica, purifica<br>
O mais ímpio pecador.<br><br>
3<br>
Triste choro o meu pecado,<br>
Mas Jesus me dá perdão;<br>
E por ele perdoado,<br>
Não verei condenação.<br>
O Cordeiro, o Cordeiro<br>
Dá completa remissão.<br><br>
4<br>
Todo o peso do castigo<br>
Punição que mereci!<br>
Lá na cruz supremo Amigo,<br>
Foi lançado sobre ti!<br>
Vou cantando, vou cantando:<br>
Minha culpa estava ali<br>',
                'audio' => '',
                'indices_id' => '13',
            ],
            [
                'id' => '79',
                'name' => '79 - Glória ao salvador',
                'body' => '1<br>
Chegado à cruz do bom Salvador,<br>
Prostrado aos pés do meu Redentor,<br>
Ele atendeu logo ao meu clamor;<br>
Glória ao Salvador<br><br>
<strong>
Glória ao Salvador!<br>
Glória ao Salvador!<br>
Eu sei que Cristo já me salvou;<br>
Glória ao Salvador!<br><br>
</strong>
2<br>
Que maravilha Jesus me amou!<br>
Tudo de graça me perdoou!<br>
Dos meus grilhões ele me livrou!<br>
Glória ao Salvador!<br>
',
                'audio' => '',
                'indices_id' => '13',
            ],
            [
                'id' => '80',
                'name' => '80 - O amor de Jesus',
                'body' => '1<br>
Cantarei o imenso amor<br>
Do Senhor - amor sem fim!<br>
De Jesus que aqui desceu<br>
E morreu na cruz por mim.<br><br>
<strong>
Falarei do grande amor<br>
Com louvor e gratidão!<br>
Servirei a meu Jesus,<br>
Que na cruz me deu perdão.<br><br>
</strong>
2<br>
Antes mesmo de eu orar<br>
Ou chorar minha aflição,<br>
Meu Jesus por mim chorou<br>
E implorou na cruz perdão.<br><br>
3<br>
Ninguém pode calcular<br>
Nem sondar tão grande amor,<br>
Que me faz limpo e feliz,<br>
Do Juiz sem ter pavor.<br><br>
4<br>
Não mereço tal favor,<br>
Mas Jesus me soube amar;<br>
Quero pois com devoção<br>
Meu amor lhe dedicar.<br>',
                'audio' => '',
                'indices_id' => '13',
            ],
            [
                'id' => '81',
                'name' => '81 - Súplica ao Espírito Santo',
                'body' => '1<br>
Espírito de Deus convém<br>
Ao teu auxílio recorrer;<br>
Manancial de todo bem,<br>
Usufruímos teu poder.<br>
E no teu santo amor andar<br>
É nosso anseio ao te adorar.<br><br>
2<br>
Sem ti o nosso culto é vão<br>
E nulo em tudo nos será;<br>
Sem teu ensino e direção<br>
Nossa alma luzes não terá;<br>
E inutilmente o teu louvor<br>
Entoaremos, ó Senhor.<br><br>
3<br>
Ó grande e santo Instruidor,<br>
Inspira as nossas petições,<br>
Ensina a orar e dá fervor<br>
Aos reverentes corações;<br>
E ao trono eterno junto a Deus<br>
Conduze aqueles que são teus.<br><br>
4<br>
Fonte és, e Autor de todo bem,<br>
Luz e esperança no viver;<br>
Opera em nós o que convém,<br>
Em tudo imprime o teu querer.<br>
Perante o céu será, então,<br>
Perfeita a nossa redenção. <br>Amém.',
                'audio' => '',
                'indices_id' => '14',
            ],
            [
                'id' => '82',
                'name' => '82 - Divino preceptor',
                'body' => '1<br>
Ó divino Preceptor, já sentimos teu favor!<br>
Ó Consolador real, tua graça é divinal.<br><br>
2<br>
Grande Instruidor veraz, desfrutamos tua paz!<br>
Encha o mundo a tua luz, guia os homens a Jesus!<br><br>
3<br>
Santo Espírito de Deus, que desceste lá dos céus,<br>
Revestindo de poder, santifica o nosso ser.<br> Amém.',
                'audio' => '',
                'indices_id' => '14',
            ],
            [
                'id' => '83',
                'name' => '83 - Divino instruidor',
                'body' => '1<br>
Ó divinal Instruidor<br>
Que nos mostraste o bom Senhor,<br>
Com tua luz e teu poder<br>
Reveste sempre o nosso ser.<br><br>
2<br>
Ó inefável Preceptor,<br>
Por tua graça e teu favor<br>
Inflama o nosso coração<br>
Na vera e santa adoração.<br><br>
3<br>
Consolador, Senhor e Deus,<br>
Dom inefável lá dos céus.<br>
Revela ao mundo a tua luz,<br>
A Redenção que vem da cruz. <br>Amém.',
                'audio' => '',
                'indices_id' => '14',
            ],
            [
                'id' => '84',
                'name' => '84 - Santo Espírito',
                'body' => '1<br>
Santo Espírito de amor,<br>
Cobre-me com teu poder!<br>
Purifica-me, Senhor,<br>
Quero, ó Deus, mais santo ser!<br><br>
<strong>
Santo Espírito de Deus,<br>
Dá-me graça em teu poder!<br>
De ti procede todo o bem,<br>
Faze-me mais santo ser!<br><br>
</strong>
2<br>
Tu atendes, ó Senhor,<br>
Quem te implora em contrição.<br>
Com tua graça e teu favor,<br>
Guia-me na retidão!<br><br>
3<br>
Eu confio em ti, Senhor,<br>
Meu viver vem transformar!<br>
Quero, pois, com gratidão<br>
Minha vida consagrar! Amém<br>',
                'audio' => '',
                'indices_id' => '14',
            ],
            [
                'id' => '85',
                'name' => '85 - Espírito consolador',
                'body' => '1<br>
Vero Consolador, Espírito de Deus,<br>
A tua paz e o teu amor revela aos que são teus.<br><br>
2<br>
Tal como o fogo a arder e todo o mal queimar,<br>
Aquece as almas com poder, ensina-nos a te amar.<br><br>
3<br>
Como óleo a ungir um povo só em ti,<br>
A todos nós faze sentir a tua bondade aqui.<br><br>
4<br>
Nas trevas a brilhar com verdadeira luz,<br>
O pecador faze encontrar o bom Salvador Jesus.<br><br>
5
Como água Tu serás o purificador;<br>
E viva fonte abrirás nos teus átrios, ó Senhor!<br>',
                'audio' => '',
                'indices_id' => '15',
            ],
            [
                'id' => '86',
                'name' => '86 - Espírito do Eterno Deus',
                'body' => '1<br>
Espírito do Eterno Deus,<br>
Opera em nós.<br>
Espírito do Eterno Deus,<br>
Opera em nós.<br><br>
2<br>
Quebranta-nos, consola-nos,<br>
Transforma-nos, transborda-nos!<br>
Espírito do Eterno Deus,<br>
Opera em nós. Amém<br>',
                'audio' => '',
                'indices_id' => '16',
            ],
            [
                'id' => '87',
                'name' => '87 - Alegria perene',
                'body' => '1<br>
Desperta e canta ao grande Deus,<br>
Sim, ó minha alma, com fervor,<br>
Pois muitos e preciosos bens<br>
A ti tem dado com amor.<br><br>

<strong>
Oh, que grande amor!<br>
Oh, divino amor<br>
De Cristo pelo pecador!<br><br>
</strong>
2<br>
Perdido, Cristo me encontrou<br>
E dispensou-me compaixão;<br>
Por seu tão grande amor de pai,<br>
Tirou-me desta condição.<br><br>
3<br>
Eu sei que é vil meu coração;<br>
Propende sempre para o mal.<br>
Mas ele em paz me guardará<br>
Com seu amor que é perenal.<br>',
                'audio' => '',
                'indices_id' => '17',
            ],
            [
                'id' => '88',
                'name' => '88 - Amor perene',
                'body' => '1<br>
Amavas-me, Senhor, ainda cintilante<br>
Não irrompera a luz ao mando Criador!<br>
E nem o ardente sol, rompendo no levante,<br>
Trouxera à terra e ao mar a força fecundante,<br>
Meu Deus, que amor!<br>
Meu Deus, que eterno amor!<br><br>
2<br>
Amavas-me, Senhor, também quando, imolado,<br>
Por mim sofreu na cruz o meigo Salvador,<br>
O Santo de Israel, o teu Cordeiro amado,<br>
Levando sobre si a culpa do pecado.<br>
Meu Deus, que amor!<br>
Meu Deus, que antigo amor!<br><br>
3<br>
Amavas-me, Senhor, quando atingiu meu peito<br>
O Espírito de luz, o meu Consolador.<br>
E com tesouros mil, de teu favor perfeito,<br>
Trouxe à minha alma a fé em que hoje me deleito.<br>
Meu Deus, que amor!<br>
Meu Deus, que antigo amor!<br><br>
4<br>
E sempre me amarás, porque jamais inferno<br>
Ou mundo poderão ao teu querer se opor,<br>
Ao teu decreto, ó Deus, ao teu decreto eterno,<br>
Ao teu amor, ó Pai, ao teu amor superno.<br>
Meu Deus, que amor!<br>
És sempre e todo amor! <br>Amém.',
                'audio' => '',
                'indices_id' => '17',
            ],
            [
                'id' => '89',
                'name' => '89 - Amor sacrificial',
                'body' => '1<br>
O grande amor que meu Jesus<br>
Por mim mostrou na rude cruz,<br>
Morrendo, a fim de me salvar,<br>
Quem poderá contar?<br><br>

<strong>
Quem pode o seu amor contar?<br>
Quem pode o seu amor contar?<br>
O grande amor de meu Jesus,<br>
Quem poderá contar?<br>
</strong>

2<br>
O cálice que Jesus bebeu<br>
A maldição que padeceu<br>
Por mim e para me salvar,<br>
Quem poderá contar?<br><br>
3<br>
A zombaria tão cruel,<br>
A cruz horrenda o amargo fel,<br>
Sofridos para me salvar,<br>
Quem poderá contar?<br><br>
4<br>
Incomparável Salvador,<br>
Teu inefável, santo amor<br>
Que é impossível de sondar,<br>
Quem poderá contar?<br>',
                'audio' => '',
                'indices_id' => '17',
            ],
            [
                'id' => '90',
                'name' => '90 - Amor insondável',
                'body' => '1<br>
Quão insondável é o amor<br>
Do Onipotente Criador,<br>
O santo e eterno Deus!<br>
Os pecadores quis salvar,<br>
No Filho amado aqui buscar<br>
Um povo para os céus<br><br>
2<br>
Inexaurível esse amor<br>
Intraduzível o favor<br>
De Cristo, o Rei Jesus.<br>
Os desvalidos acudiu,<br>
Os transviados atraiu<br>
À sua santa luz.<br><br>
3<br>
Quão puro e santo o imenso amor<br>
Que Deus, ao mundo pecador,<br>
Em Cristo revelou!<br>
Com fé meu pobre coração<br>
Recebe a plena redenção<br>
Que nele me outorgou.<br><br>
4<br>
Ó Deus, quão pobre e frio amor,<br>
Quão inconstante seguidor<br>
Descobrirás em mim! Aviva-me<br>
Com teu poder, pois quero te obedecer<br>
E amar-te até ao fim! Amém.<br>
',
                'audio' => '',
                'indices_id' => '17',
            ],
            [
                'id' => '91',
                'name' => '91 - A fé dos antigos',
                'body' => '1<br>
Oh, viva fé que nossos pais<br>
Honraram sempre com valor.<br>
Nós cantaremos mais e mais<br>
Teus grandes feitos com ardor!<br><br>
<strong>
Sublime fé, clarão de luz,<br>
Inspiração que vem da cruz.<br>
</strong>

2<br>
Bravos, quiseram nossos pais<br>
Por ti as chamas afrontar;<br>
E tal como esses ancestrais,<br>
Queremos nós também andar.<br><br>

3<br>
Alto pendão, sublime fé!<br>
Por ti queremos pelejar<br>
Tudo sofrendo, a morte até,<br>
E firmes sempre a ti honrar.<br>

',
                'audio' => '',
                'indices_id' => '18',
            ],
            [
                'id' => '92',
                'name' => '92 - A fé contemplada',
                'body' => '1<br>
Deus promete grandes coisas conceder<br>
A qualquer que peça, crendo que há de obter,<br>
Esperando, sem na fé enfraquecer.<br>
O Senhor a fé contemplará!<br><br>

<strong>
Tua fé Jesus contemplará<br>
Sim, o que Jesus promete, dá.<br>
Ele vê o coração<br>
E responde à petição;<br>
Tua fé Jesus contemplará!<br><br>
</strong>

2<br>
Quantas maravilhas Deus realizou<br>
Por alguém que firme nele confiou,<br>
E que da promessa em nada duvidou.<br>
O Senhor a fé contemplará!<br><br>

3<br>
Sim creiamos nos que Deus nos prometeu,<br>
Pois jamais desonrará o nome seu;<br>
Ele cumprirá promessas que nos deu.<br>
O Senhor a fé contemplará!<br>


',
                'audio' => '',
                'indices_id' => '18',
            ],
            [
                'id' => '93',
                'name' => '93 - Firmeza na fé',
                'body' => '1<br>
Somente ponho a minha fé<br>
Na graça excelsa de Jesus,<br>
No sacrifício remidor,<br>
No sangue do bom Redentor<br><br>
<strong>
A minha fé e o meu amor<br>
Estão firmados no Senhor,<br>
Estão firmados no Senhor.<br><br>
</strong>
2<br>
Se não lhe posso a face ver,<br>
É pela fé que vou viver;<br>
Em cada transe a suportar<br>
Eu hei de nele confiar.<br><br>
3<br>
A sua graça é mui real,<br>
Abrigo traz no temporal;<br>
Ao vir cercar-me a tentação,<br>
Me fortalece a sua mão.<br><br>
4<br>
Quando a trombeta ressoar,<br>
Irei com ele me encontrar<br>
E com os salvos cantarei<br>
Louvor eterno ao grande Rei!<br>

',
                'audio' => '',
                'indices_id' => '18',
            ],
            [
                'id' => '94',
                'name' => '94 - A porta da salvação',
                'body' => '1<br>
É franca a porta divinal,<br>
Aberta a todo o mundo.<br>
Por ela o pecador mortal<br>
Avista amor profundo<br><br>
<strong>
Oh! Graça imensa! Pois assim,<br>
Jesus convida: Vinde a mim!<br>
A mim, a mim;<br>
Convida: Vinde a mim!<br><br>
</strong>
2<br>
Entrai! Jesus vos dá perdão,<br>
As culpas redimindo.<br>
Entrai, buscando a salvação,<br>
Pois seu amor é infindo.<br><br>
3<br>
Aberta, sim, de par em par!<br>
Entrai com grande urgência,<br>
Pois Deus a todos quer mostrar<br>
Real munificência.<br>',
                'audio' => '',
                'indices_id' => '19',
            ],
            [
                'id' => '95',
                'name' => '95 -  Somente Cristo',
                'body' => '1<br>
Somente Cristo é Salvador,<br>
Assim reconhecemos;<br>
Morreu por nós, em santo amor,<br>
E vida nele temos.<br><br>
<strong>
Jesus, Jesus é o Salvador,<br>
E não há outro Mediador!<br>
Foi ele quem na cruz morreu,<br>
E vivo está nos altos céus.<br><br>
</strong>
2<br>
Os homens santos e fiéis,<br>
Nós sempre respeitamos;<br>
Mas a Jesus, o Rei dos reis,<br>
Humilde adoramos.<br><br>
3<br>
A Deus fazemos oração<br>
Só ele quer e pode<br>
Valer-nos na tribulação;<br>
Aos seus Deus sempre acolhe.<br><br>
3<br>
No santo sangue de Jesus<br>
Confia todo crente;<br>
O que ele fez na dura cruz<br>
É sempre suficiente.<br>',
                'audio' => '',
                'indices_id' => '19',
            ],
            [
                'id' => '96',
                'name' => '96 - Redenção suprema',
                'body' => '1<br>
O peso do pecado Jesus a si tomou;<br>
De Deus a justa ira na rude cruz provou.<br>
Pagou por teus pecados! Sofreu em teu lugar!<br>
Por ti, por mim, por todos, e assim nos quis salvar!<br><br>
2<br>
Perfeito e bom resgate pagou o Salvador,<br>
Ao derramar seu sangue remiu o pecador.<br>
Oh, redenção suprema! Favor celestial!<br>
Entrada agora temos na casa paternal!<br><br>
3<br>
Pois Deus ergueu da morte o Redentor Jesus!<br>
É vivo, ressurreto, o que expirou na cruz!<br>
Agora, entronizado no céu, o Salvador<br>
É sempre o mesmo Amigo do pobre pecador.<br>',
                'audio' => '',
                'indices_id' => '19',
            ],
            [
                'id' => '97',
                'name' => '97 - Súplica do redimido',
                'body' => '1<br>
Meu pecado resgatado<br>
Foi na cruz, por teu amor!<br>
E da morte - triste sorte!<br>
Me livraste, ó Redentor!<br><br>
<strong>
Cristo, inflama viva chama<br>
Em meu peito, ó Salvador!<br>
Pois te adora quem te implora:<br>
Vem guiar-me, bom Senhor!<br><br>
</strong>
2<br>
Se hesitante, vacilante,<br>
Ouço a voz do tentador,<br>
Tu me guias, me auxilias,<br>
E me tornas vencedor.<br><br>
3<br>
Redimida só tem vida<br>
A minha alma em teu amor!<br>
Com apreço reconheço<br>
Quanto devo a ti, Senhor.<br>',
                'audio' => '',
                'indices_id' => '19',
            ],
            [
                'id' => '98',
                'name' => '98 - Não há condenação',
                'body' => '1<br>
“Não há condenação!”<br>
Assim diz o Senhor.<br>
Pois temos ante o tribunal<br>
Perfeito defensor.<br><br>
2<br>
“Não há condenação!”<br>
O justo e santo Deus<br>
Aceita a Cristo, o Mediador,<br>
Que entrou por nós nos céus.<br><br>
3<br>
“Não há condenação!”<br>
Repousa, ó alma, aqui!<br>
É Cristo, quem na cruz morreu,<br>
Teu advogado ali.<br><br>
4<br>
“Não há condenação!”<br>
O Cristo triunfou!<br>
Pagando alto preço, ali<br>
Na cruz nos libertou!<br>',
                'audio' => '',
                'indices_id' => '19',
            ],
            [
                'id' => '99',
                'name' => '99 - Louvor ao Redentor',
                'body' => '1<br>
Minha alma, louva ao Redentor,<br>
Jesus, teu Rei, teu Salvador;<br>
Morreu na cruz, em teu lugar,<br>
E salvação te veio dar.<br><br>
<strong>
Sim, sobre a cruz, em meu lugar,<br>
Jesus morreu e me salvou!<br>
Firme e seguro posso andar,<br>
Porque seu sangue me lavou.<br><br>
</strong>
2<br>
Oh, quão perdido e longe andei,<br>
Rebelde a Deus e à sua lei!<br>
Com terno e tão paciente amor,<br>
Seguiu-me sempre o Salvador.<br><br>
3<br>
Bendito o dia quando enfim,<br>
Vi Cristo sobre a cruz, por mim!<br>
Vencido por tão grande amor,<br>
Rendi-me logo ao Salvador.<br><br>
4<br>
Vem alma aflita descansar,<br>
Jesus te pode perdoar!<br>
A ele entrega o coração<br>
E teu será o seu perdão.<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '100',
                'name' => '100 - Louvores a Cristo',
                'body' => '1<br>
Ó minha alma sem demora,<br>
Vem a Cristo celebrar,<br>
E os louvores do seu Nome<br>
Exultante publicar.<br>
Vem, minha alma! Vem minha alma<br>
Sua graça proclamar!<br><br>
2<br>
Minha condição tão triste<br>
Conheceu o Salvador,<br>
Que o céu desceu a terra<br>
Para ser meu Redentor!<br>
Oh, sublime, oh, sublime<br>
É seu grande e santo amor!<br><br>
3<br>
Meus pecados carregando<br>
No madeiro em meu lugar,<br>
Foi Jesus crucificado<br>
E me pode, assim, salvar.<br>
Para sempre, para sempre<br>
Seus louvores vou cantar.',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '101',
                'name' => '101 - A voz da salvação',
                'body' => '1<br>
Ouvi a doce voz<br>
De Cristo, o Redentor,<br>
Chamar-me para a salvação<br>
Que vem do seu amor.<br><br>
<strong>
Fui ao meu Senhor<br>
Que me convidou;<br>
Bem nenhum havia em mim,<br>
Mas ele me salvou.<br><br>
</strong>
2<br>
Nas trevas eu vivi,<br>
Indigno e sem valor;<br>
Porém agora em seu poder,<br>
Eu ando ó Salvador!<br><br>
3<br>
A Deus eu louvarei<br>
Por essa redenção,<br>
Pois tendo Cristo, o Redentor,<br>
Eu tenho a salvação<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '102',
                'name' => '102 - O céu com Cristo',
                'body' => '1<br>
Depois que Cristo me salvou,<br>
Em céu o mundo se tornou;<br>
Até nos meio do sofrer<br>
Eu tenho paz no meu viver.<br><br>
<strong>
Oh! Aleluia! Sim, é Céu.<br>
É Céu fruir perdão aqui!<br>
Na terra ou mar, por onde for,<br>
Com o Senhor é Céu ali.<br><br>
</strong>
2<br>
Mui longe eu via outrora o Céu;<br>
Mas quando Cristo me valeu,<br>
Então senti meu coração<br>
Entrar no céu da retidão.<br>
Bem pouco importa eu habitar<br>
Em alto monte, à beira mar,<br>
Em casa ou gruta, boa ou ruim,<br>
É Céu ali, com Cristo em mim.<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '103',
                'name' => '103 - Salvação em Cristo',
                'body' => '1<br>
Jesus, agora eu bem sei<br>
Quão grande é teu amor!<br>
Pois salvação me deste aqui,<br>
Aceita o meu louvor.<br><br>
<strong>
Ó Cristo, és meu Salvador,<br>
Por eu tenho paz!<br>
Jesus, a ti louvor darei<br>
Por tudo o que me dás.<br><br>
</strong>
2<br>
Jamais descanso conheci,<br>
Por ser um pecador;<br>
Mas tu olhaste para mim<br>
Com teu divino amor.<br><br>
3<br>
Louvor, louvor darei a ti,<br>
Ó Cristo, meu Senhor!<br>
Profeta, Sacerdote, Rei,<br>
Do mundo o Salvador<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '104',
                'name' => '104 - Linda melodia',
                'body' => '1<br>Mais do que milhares é Cristo, meu bom Mestre,<br>
Ele é a luz do mundo, a estrela da manhã!<br>
É o Rei da glória, e, em meu coração,<br>
Contente vou cantando a divinal canção!<br><br>
<strong>
Cantarei em meu coração, esta linda melodia,<br>
Pois eu tenho em meu coração<br>
Gozo, paz e alegria.<br>
Cantarei em meu coração,<br>
Cantarei, sim, noite e dia.<br>
Aleluia! Aleluia! Feliz sempre cantarei.<br><br>
</strong>
2<br>
Cristo libertou-me dos males do pecado,<br>
E agora alegre canto, pois para o céu irei.<br>
Cristo resgatou-me, ele é o meu Salvador;<br>
Dou toda glória a ele, meu Mestre e bom Senhor.<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '105',
                'name' => '105 - A certeza do crente',
                'body' => '1<br>
Não sei porque de Deus o amor<br>
A mim se revelou,<br>
Porque Jesus, meu Salvador,<br>
Na cruz me resgatou.<br><br>
<strong>
Mas eu sei em quem tenho crido<br>
E estou bem certo que é poderoso!<br>
Guardará, pois, o meu tesouro<br>
Até o dia final.<br><br>
</strong>
2<br>
Não sei o modo como agiu<br>
O Espírito eternal<br>
Que, um dia, a Cristo me atraiu<br>
Em convicção real.<br><br>
3<br>
Não sei o que de mal ou bem<br>
É destinado a mim;<br>
Se maus ou áureos dias vêm,<br>
Até da vida o fim.<br><br>
4<br>
Não sei se ainda longe está,<br>
Ou muito perto vem<br>
A hora em que Jesus virá<br>
Na glória que ele tem.<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '106',
                'name' => '106 - Fonte carmesim',
                'body' => '1<br>
Há uma fonte carmesim<br>
Que meu Jesus abriu,<br>
No dia em que na cruz, por mim<br>
Morreu e me remiu.<br><br>
<strong>
Eu creio, sim, eu creio,<br>
Jesus por mim morreu!<br>
Foi sobre a cruz, com grande amor,<br>
Que Cristo padeceu.<br><br>
</strong>
2<br>
E desde que por seu amor,<br>
O rumo me apontou,<br>
Confio nele, com fervor,<br>
Pois que me resgatou.<br><br>
3<br>
A sua morte sobre a cruz<br>
Traz vida imortal!<br>
E vou morar com Cristo em luz<br>
Na glória celestial.<br>',
                'audio' => '',
                'indices_id' => '20',
            ],
            [
                'id' => '107',
                'name' => '107 - Ao pé da cruz',
                'body' => '1<br>
Quero estar ao pé da cruz,<br>
Que tão rica fonte<br>
Corre franca, salutar,<br>
De Sião no monte.<br><br>
<strong>
Sim, na cruz, sim, na cruz<br>
Sempre me glorio!<br>
E por fim descansarei<br>
Salvo além do rio.<br><br>
</strong>
2<br>
A tremer ao pé da cruz,<br>
Graça, amor achou-me;<br>
Matutina estrela, ali,<br>
Raios seus mandou-me.<br><br>
3<br>
Desta cruz desejo aqui<br>
Sempre recordar-me;<br>
Dela à sombra, Salvador,<br>
Queiras abrigar-me!<br><br>
4<br>
Junto à cruz ardendo em fé,<br>
Sem temor vigio;<br>
Firme, até a Pátria ver,<br>
Santa, além do rio.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '108',
                'name' => '108 - Aflição e paz',
                'body' => '1<br>
Se paz a mais doce me deres gozar<br>
Se dor a mais forte sofrer,<br>
Oh, seja o que for, Tu me fazes saber<br>
Que feliz com Jesus sempre sou!<br><br>
<strong>
Sou feliz com Jesus<br>
Sou feliz com Jesus, meu Senhor!<br>
</strong><br>
2<br>
Embora me assalte o cruel Satanás,<br>
E ataque com vis tentações;<br>
Oh! Certo eu estou, apesar de aflições,<br>
Que feliz eu serei com Jesus!<br><br>
3<br>
Meu triste pecado, por meu Salvador<br>
Foi pago de um modo cabal!<br>
Valeu-me o Senhor, oh, mercê sem igual!<br>
Sou feliz, graças dou a Jesus!<br><br>
4<br>
A vinda eu anseio do meu Salvador,<br>
Em breve virá me levar<br>
Ao céu, onde eu vou para sempre morar<br>
Com remidos na luz do Senhor!<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '109',
                'name' => '109 - O bom Pastor',
                'body' => '1<br>
Quero o Salvador comigo,<br>
Ao seu lado sempre andar.<br>
Quero tê-lo muito perto,<br>
No seu braço descansar.<br><br>
<strong>
Confiado no Senhor,<br>
Protegido em seu amor,<br>
Seguirei o meu caminho<br>
Sem tristeza e sem temor.<br><br>
</strong>
2<br>
Quero o Salvador comigo,<br>
Porque fraca é minha fé;<br>
Sua voz me dá conforto<br>
Quando me vacila o pé.<br><br>
3<br>
Quero o Salvador comigo,<br>
Dia a dia, em meu viver;<br>
Através de luz ou sombras,<br>
No desgosto e no prazer.<br><br>
4<br>
Quero o Salvador comigo,<br>
Sábio guia e Bom Pastor<br>
Nessa vida e além da morte,<br>
Longe de perigo e dor.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '110',
                'name' => '110 - A vida com Jesus',
                'body' => '1<br>
Um dia Cristo achou-me<br>
Mui longe do meu lar,<br>
Perdido já no mundo,<br>
Sem mais poder voltar!<br>
Tomando-me em seus braços,<br>
Firmou-me nos meus passos,<br>
E agora andamos juntos,<br>
Voltando para o lar.<br><br>
<strong>
A presença de Jesus<br>
Enche o coração de luz!<br>
Mui preciosa fica,<br>
E também mais rica<br>
Esta vida com Jesus<br><br>
</strong>
2<br>
Passamos pelo vale<br>
A fim de me provar,<br>
Em meio a densas trevas<br>
Que impedem-me o andar!<br>
Não há nenhum perigo,<br>
Pois já está comigo<br>
O excelso Companheiro,<br>
Voltando para o lar.<br><br>
3<br>
Entramos na atmosfera<br>
Que envolve a aquele lar,<br>
No qual meu Pai me aguarda<br>
E é onde vou morar!<br>
Não há no mundo inteiro<br>
Um outro companheiro<br>
Que mostre tanto zelo<br>
Voltando para o lar.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '111',
                'name' => '110-A - Crer e observar',
                'body' => '1<br>
Em Jesus confiar, sua lei observar,<br>
Oh, que gozo, que bênção, que paz!<br>
Satisfeito guardar tudo quanto ordenar<br>
Alegria perene nos traz.<br><br>
<strong>
Crer e observar tudo quanto ordenar<br>
O fiel obedece ao que Cristo mandar!<br><br>
</strong>
2<br>
O inimigo falaz, a calúnia mordaz<br>
Cristo sabe desprestigiar;<br>
Nem tristeza, nem dor, nem intriga, a maior,<br>
Pode o crente fiel abalar.<br><br>
3<br>
Grande prova de amor, comunhão no Senhor<br>
Tem o crente zeloso e leal!<br>
O seu rosto mirar, seus segredos privar:<br>
É consolo que não tem igual.<br><br>
4<br>
Resoluto, Senhor, e com zelo e fervor,<br>
Os teus passos queremos seguir!<br>
Teus preceitos guardar, o teu nome exaltar,<br>
Sempre a tua vontade cumprir.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '112',
                'name' => '111 - Comunhão Divina',
                'body' => '1<br>
Comigo estás, ó Deus, a noite vem!<br>
As trevas crescem e o temor também!<br>
Socorro tenho e vera proteção,<br>
Porque em mim fizeste habitação.<br><br>
2<br>
Vem revelar a mim, ó meu Senhor<br>
Divino Mestre, Rei, Consolador,<br>
O teu amparo em toda a tentação,<br>
Fazendo em mim constante habitação.<br><br>
3<br>
Andando aqui, nas trevas ou na luz,<br>
Não há perigo estando com Jesus!<br>
Medo e pavor não prevalecerão,<br>
Pois em meu ser fizeste habitação.<br><br>
4<br>
Ó morte os teus poderes vão findar!<br>
Em Cristo os mortos vão ressuscitar!<br>
No Reino eterno há gozo e exultação,<br>
E com Jesus eterna habitação.<br> Amém.',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '113',
                'name' => '112 - Rica promessa',
                'body' => '1<br>
“Não temas! Contigo eu sempre estarei!”<br>
Oh, rica promessa do bondoso Rei!<br>
Qual astro que brilha na escuridão,<br>
A mais linda promessa brilha no meu coração!<br><br>
<strong>
Comigo estar! Comigo estar!<br>
Sim, Jesus me promete comigo estar!<br><br>
</strong>
2<br>
As luzes do mundo se apagarão,<br>
Os dias mais belos breve passarão;<br>
Jesus, Luz do mundo, não se extinguirá,<br>
E essa Luz resplendente sempre em mim brilhará.<br><br>
3<br>
E se pelas águas tiver de passar,<br>
Seus braços eternos hão de me guardar!<br>
Sim, mesmo no fogo que me vem provar,<br>
Meu Senhor me promete sempre comigo estar.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '114',
                'name' => '113 - Achei um bom amigo',
                'body' => '1<br>
Achei um bom Amigo, Jesus, o Salvador,<br>
Dos milhares o escolhido para mim.<br>
Ele é a luz do mundo, o forte Mediador,<br>
Que me purifica e guarda até o fim!<br>
Consolador amado, meu protetor do mal,<br>
Ele pode dar alívio ao meu pesar.<br><br>
<strong>
Ele é a luz do mundo, a Estrela da manhã,<br>
Dos milhares o escolhido para mim.<br><br>
</strong>
2<br>
Levou-me as dores todas, as mágoas lhe entreguei.<br>
Nele tenho firme abrigo em tentação!<br>
Deixei por ele tudo, os ídolos queimei!<br>
Ele faz-me puro e santo o coração!<br>
Que o mundo me abandone, persiga o tentador,<br>
Meu Jesus me guarda até da vida ao fim.<br><br>
3<br>
Jamais me desampara, nem me abandonará,<br>
Se fiel e obediente aqui viver!<br>
Está sempre ao meu lado, e me protegerá,<br>
Até quando face a face o possa ver!<br>
Então, aos céus subindo, na glória eu me verei<br>
Com Jesus, meu Salvador, morando, enfim.<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '115',
                'name' => '114 - Brilho celeste',
                'body' => '1<br>
Peregrinando por sobre os montes,<br>
E pelos vales, sempre na luz,<br>
Cristo promete nunca deixar-me,<br>
“Eis-me convosco” - disse Jesus.<br><br>
<strong>
Brilho celeste! Brilho celeste!<br>
Enche a minha alma, glória do céu!<br>
Aleluia! Sigo cantando,<br>
Dando louvores, pois Cristo é meu!<br><br>
</strong>
2<br>
Se vejo sombras por toda parte,<br>
O Salvador não há de ocultar!<br>
Pois Cristo é luz que nunca se apaga,<br>
Bem ao seu lado sempre hei de andar.<br><br>
3<br>
A luz bendita me vai guiando<br>
Em meu caminho para a Mansão;<br>
Mais e mais perto seguindo o Mestre,<br>
Possuo o gozo da salvação<br>',
                'audio' => '',
                'indices_id' => '21',
            ],
            [
                'id' => '116',
                'name' => '115 - Unido com Cristo',
                'body' => '1<br>
Com Cristo unido na morte da cruz,<br>
Eu gozo as bênçãos do reino da luz!<br>
Cheio da graça que ali corre a flux,<br>
Cada momento, com Cristo Jesus.<br><br>
<strong>
Cada momento me guia o Senhor<br>
Cada momento dispensa favor;<br>
Sua presença me outorga vigor;<br>
Cada momento sou teu, ó Senhor!<br><br>
</strong>
2<br>
Com Cristo unido na luta moral<br>
Resisto ao erro, ao pecado fatal,<br>
Bem alto erguendo a bandeira real.<br>
Cada momento mais firme e leal!<br><br>
3<br>
Com Cristo unido na ressurreição,<br>
Eu já desfruto eternal redenção;<br>
Nele jamais esperamos em vão;<br>
Cada momento concede perdão!<br><br>
4<br>
Nas minhas lutas me pode amparar<br>
E do maligno também me livrar!<br>
Cada momento, por onde eu andar,<br>
Cristo, meu Mestre, me pode guiar!<br>',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '117',
                'name' => '116 - União com Deus',
                'body' => '1<br>
Mais perto quero estar, meu Deus de ti,<br>
Inda que seja a dor que me una a ti!<br>
Sempre hei de suplicar: “Mais perto quero estar,<br>
Mais perto quero estar, meu Deus de ti!”<br><br>
2<br>
Mesmo vagando aqui, na solidão,<br>
De noite, a descansar, dormindo ao chão,<br>
Em sonhos vou clamar: “Mais perto quero estar,<br>
Mais perto quero estar, meu Deus de ti!”<br><br>
3<br>
Minha alma cantará a ti, Senhor!<br>
Betel aqui verei por teu favor.<br>
Eu sempre hei de rogar: “Mais perto quero estar,<br>
Mais perto quero estar, meu Deus de ti!”<br><br>
4<br>
E quando a morte, enfim, me vier chamar,<br>
Nos céus, com o Senhor, irei morar!<br>
Então me alegrarei, perto de ti meu Rei!<br>
Perto de ti meu Rei, meu Deus, de ti!<br> Amém.',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '118',
                'name' => '117 - Pastor divino',
                'body' => '1<br>
Eis-nos, ó Pastor divino,<br>
Todos juntos num lugar,<br>
Como ovelhas congregados,<br>
Teu auxílio a suplicar.<br>
És presente, és presente<br>
O rebanho a apascentar.<br><br>
2<br>
Guia os tristes fatigados<br>
Ao teu bom redil Senhor.<br>
Leva os tenros cordeirinhos<br>
Nos teus braços, Bom Pastor.<br>
Às pastagens, às pastagens<br>
De celeste e doce amor.<br><br>
3
Ó Jesus bondoso, escuta<br>
Nossa humilde petição!<br>
Vem encher o teu rebanho<br>
De sincera gratidão!<br>
Cantaremos, cantaremos<br>
Tua imensa compaixão.<br> Amém.',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '119',
                'name' => '118 - Esperando em Deus',
                'body' => '1<br>
Qual suspira a corça inquieta<br>
Pelas águas a bramir,<br>
Tua divinal presença<br>
Quer minha alma, ó Deus, sentir.<br>
Sede intensa me angustia!<br>
Quando ó Deus, virá o dia<br>
De contínuo me alegrar<br>
Por teu rosto contemplar?<br><br>
2<br>
Pranteando amargamente,<br>
Vou vivendo os dias meus,<br>
Pois os ímpios me atormentam<br>
Perguntando por meu Deus.<br>
Choro então os velhos dias,<br>
Quando, em santas alegrias,<br>
Proclamava o teu louvor<br>
Junto a ti, ó meu Senhor.<br><br>
3<br>
Em rajadas tormentosas<br>
Teu juízo me alcançou!<br>
E minha alma, bem ferida,<br>
Penitente se humilhou.<br>
Tu, então, meus pés guiando,<br>
Com ternura me amparando,<br>
Alto abrigo me vens dar<br>
E na Rocha me firmar!<br><br>
4<br>
Por que tremes, ó minha alma,<br>
E te abates dentro em mim?<br>
Para longe os teus receios!<br>
Deus ao teu penar põe fim!<br>
Ele as ondas más quebranta,<br>
Nos seus braços te levanta.<br>
Ó minha alma, sem temor,<br>
Canta a Deus o teu louvor.<br> Amém',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '120',
                'name' => '119 - Súplica pelo culto',
                'body' => '1<br>
Fala, ó Deus, agora pela pregação,<br>
Despertando em todos santa inspiração!<br><br>
2<br>
Vem, pelo Evangelho, almas despertar!<br>
Os remidos todos vem santificar!<br><br>
3<br>
Manda à tua Igreja mais poder, Senhor,<br>
Pela boa-nova do teu pregador!<br><br>
4<br>
Torna-a instrumento da verdade e luz,<br>
Do amor e graça que vêm de Jesus.<br> Amém.<br>',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '121',
                'name' => '120 - Dependência',
                'body' => '1<br>
Careço de Jesus, de ti, meu Salvador!<br>
Somente a tua voz tem para mim valor.<br><br>
<strong>
De ti, Senhor careço!<br>
Do teu amparo sempre!<br>
Oh, dá-me tua bênção!<br>
Aspiro a ti.<br><br>
</strong>
2<br>
Careço de Jesus! Unido a ti Senhor,<br>
Pecado e tentação não mais terão vigor<br><br>
3<br>
Careço de Jesus, nas trevas e nas luz!<br>
Sem ti a vida é vã, sou pobre sem Jesus.<br><br>
4
Careço de Jesus! Viver desejo aqui,<br>
Ligado mais e mais, ó Salvador a ti! Amém.<br>',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '122',
                'name' => '121 - Perfeição',
                'body' => '1<br>
Mais pureza dá-me, mais horror ao mal,<br>
Mais calma em pesares, mais alto ideal;<br>
Mais fé no meu Mestre, mais consagração,<br>
Mais gozo em servi-lo, mais grata oração.<br><br>
2<br>
Mais Prudência dá-me, mais paz, meu Senhor,<br>
Mais firmeza em Cristo, mais força na dor;<br>
Mais reto me torna, mais triste ao pecar,<br>
Mais humilde filho, mais pronto em te amar<br><br>
3<br>
Mais confiança dá-me, mais força em Jesus,<br>
Mais do seu domínio, mais da sua luz;<br>
Mais rica esperança, mais obras aqui,<br>
Mais ânsias da Glória, mais vida em ti.<br>Amém.',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '123',
                'name' => '122 - Necessitado',
                'body' => '1<br>
À minha voz, ó Deus, atende,<br>
Pois noite e dia clamo a ti!<br>
Tão débil sou, tão pobre aqui,<br>
A meus queixumes e gemidos<br>
Vem dar ouvidos!<br><br>
2<br>
Da vida e luz Tu és a fonte!<br>
Em mim opera o teu poder!<br>
Minha oração vem receber,<br>
Pois de meu leito o sol vigio<br>
E em ti confio.<br><br>
3<br>
Não és um Deus que te comprazes<br>
Nas transgressões do pecador<br>
Bondoso e justo és Tu Senhor!<br>
E teu favor jamais consentes<br>
Aos maldizentes.<br><br>
4
Meus pés, à luz de teus caminhos,<br>
Humilde e fiel dirigirei.<br>
Tu és meu Deus, Tu és meu Rei!<br>
À tua vista andar eu quero,<br>
Puro e sincero<br><br>

Em ti exultarão os justos,<br>
Rejubilando em tua paz.<br>
De todo o mal os guardarás<br>
Pois tua Lei, ó Deus, conhecem<br>
E te obedecem. Amém.<br>',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '124',
                'name' => '123 - Grande amor',
                'body' => '1<br>
Ó Senhor, que a tudo excedes,<br>
Dom celeste, amor sem par,<br>
Oh, coroa de favores<br>
Nosso frágil caminhar.<br>
Grande amor, amor bendito,<br>
Ó divina compaixão,<br>
Vem socorre ao que padece,<br>
E estende-lhe a mão.<br><br>
2<br>
Ó Senhor, a cada dia<br>
Dá-nos tua inspiração!<br>
Oh, remove o mau desejo<br>
Que nos tenta o coração.<br>
Tu, somente, nos conheces<br>
E nos podes proteger.<br>
Dá-nos, pois, a tua graça<br>
E com ela o teu poder.<br><br>
3<br>
Ó Senhor, não te separes<br>
Do rebanho terreal!<br>
Une a Igreja, estreitamente,<br>
Dá-lhe vida fraternal.<br>
Abençoa todo crente,<br>
Ilumina-lhe o andar,<br>
E que todos se comprazam<br>
Em teu Nome proclamar. <br>Amém.',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '125',
                'name' => '124 - Benigna luz',
                'body' => '1<br>
Benigna luz, os passos vacilantes<br>
Me vem guiar!<br>
É noite escura, e vejo os céus distantes,<br>
Meu doce lar.<br>
Não peço ver da estrada as longes cenas;<br>
Oh! Basta um passo, um passo mais, apenas.<br><br>
2<br>
Nem sempre humilde supliquei outrora<br>
A tua luz,<br>
Porém minha alma o teu perdão implora,<br>
Ó meu Jesus!<br>
O orgulho vão minha alma endurecia;<br>
Oh! Dá-me aqui visão de um novo dia.<br>
3<br>
O teu poder conduzirá seguro<br>
Meu caminhar<br>
Descansarei, vencido o trilho escuro,<br>
No doce lar.<br>
Ali verei, na luz da eterna aurora,<br>
A tua face que não vejo agora.<br> Amém',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '126',
                'name' => '125 - Sempre veraz',
                'body' => '1<br>
Sempre veraz serei, pois me acreditem;<br>
Forte serei, pois muito há que sofrer;<br>
Puro serei, no exemplo do meu Mestre,<br>
Nas provações ousado espero ser! (bis)<br><br>
2<br>
De todos quero sempre ser amigo,<br>
Ser generoso e o bem não alegar;<br>
Sendo imperfeito, eu hei de ser humilde,<br>
Sempre hei de crer, confiar, servir e amar. (bis)<br><br>
3<br>
Para que eu seja sempre assim, ó Cristo,<br>
Vem dominar, mudar meu coração.<br>
Pois eu bem sei dos laços em que caio,<br>
Se não contar com tua proteção! <br>Amém.',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '127',
                'name' => '126 - Dependência',
                'body' => '1<br>
De ti, meu bom Senhor,<br>
Eu tenho precisão;<br>
Só teu divino amor<br>
Dá paz ao coração.<br><br>
<strong>
Ó meu Jesus, comigo<br>
Tu sempre hás de ficar,<br>
Até que eu vá contigo,<br>
Senhor, no céu morar!</strong><br><br>
2<br>
Concede-me, Jesus,<br>
Fruir teu rico amor!<br>
E andar em tua luz<br>
Submisso a ti, Senhor.<br><br>
3<br>
Vencendo a tentação<br>
Contente viverei<br>
Na tua proteção,<br>
Ó meu bendito Rei! Amém.<br>',
                'audio' => '',
                'indices_id' => '22',
            ],
            [
                'id' => '128',
                'name' => '127 - Hora bendita',
                'body' => '1<br>
Bendita hora de oração,<br>
Que acalma o aflito coração,<br>
O qual por meio de Jesus,<br>
Ao Pai suplica auxílio e luz.<br>
Em tempos de cuidado e dor,<br>
Refúgio tenho em meu Senhor;<br>
Vencendo o ardil da tentação,<br>
Bendigo a hora de oração<br><br>
2<br>
Bendita hora de oração,<br>
Quando a fervente petição<br>
Se eleva ao trono do Senhor,<br>
Que atende a voz do meu clamor!<br>
Pois ele ordena recorrer<br>
Ao seu amor, ao seu poder;<br>
Contente e sem perturbação,<br>
Eu busco a hora de oração.<br><br>
3<br>
Bendita hora de oração,<br>
De santa paz e comunhão!<br>
Desejo, enquanto aqui me achar,<br>
Com fé constante, humilde, orar.<br>
E, enfim, no resplendor de Deus,<br>
Na glória dos mais altos céus,<br>
Lembrar-me-ei, com gratidão,<br>
Das horas suaves de oração.<br>',
                'audio' => '',
                'indices_id' => '23',
            ],
            [
                'id' => '129',
                'name' => '128 - Comunhão preciosa',
                'body' => '1<br>
Preciosas são as horas<br>
Na presença de Jesus!<br>
Comunhão deliciosa<br>
Da minha alma com a luz<br>
Os cuidados deste mundo<br>
Não me podem abalar,<br>
Pois é ele o meu abrigo<br>
Quando o tentador chegar. (bis)<br><br>
2<br>
Ao sentir-me rodeado<br>
De cuidados terreais,<br>
Irritado e abatido,<br>
Ou em dúvidas fatais,<br>
A Jesus eu me dirijo<br>
Nesses tempos de aflição;<br>
As palavras que ele fala<br>
Trazem paz consolação. (bis)<br><br>
3<br>
Se confesso meus temores,<br>
Toda a minha imperfeição,<br>
Ele escuta com paciência<br>
Essa triste confissão.<br>
Com ternura repreende<br>
Meu pecado e todo o mal;<br>
É Jesus o meu Amigo,<br>
O melhor e o mais leal. (bis)<br><br>
4<br>
Se quereis saber quão doce<br>
É a divina comunhão,<br>
Podereis mui bem prová-la<br>
E tereis compensação.<br>
Procurai estar sozinhos<br>
Em conversa com Jesus,<br>
Provareis na vossa vida<br>
O poder que vem da cruz. (bis)<br>',
                'audio' => '',
                'indices_id' => '23',
            ],
            [
                'id' => '130',
                'name' => '129 - Vigilância e oração',
                'body' => '1<br>
Bem de manhã, embora o céu sereno<br>
Pareça um dia calmo anunciar,<br>
Vigia e ora: o coração pequeno<br>
Um temporal pode abrigar.<br><br>
<strong>
Bem de manhã, e sem cessar,<br>
Vigiar e orar!<br><br>
</strong>
2<br>
Ao meio dia, quando os sons da terra<br>
Abafam mais de Deus a voz de amor,<br>
Recorre à oração, evita a guerra,<br>
E goza paz com o Senhor.<br><br>
3<br>
Do dia ao fim, após os teus lidares,<br>
Relembra as bênçãos do celeste amor,<br>
E conta a Deus prazeres e pesares,<br>
Depondo em suas mãos a dor.<br>
4<br>
E sem cessar vigia a todo instante,<br>
Pois o inimigo ataca sem parar;<br>
Só com Jesus, em comunhão constante,<br>
Podemos sempre descansar<br>',
                'audio' => '',
                'indices_id' => '23',
            ],
            [
                'id' => '131',
                'name' => '130 - Oração ao Senhor',
                'body' => '1<br>
Dirijo a ti,Senhor, minha oração;<br>
Eu sei que tudo vês no coração.<br>
A ti venho adorar, a graça suplicar,<br>
O teu favor buscar, Senhor meu Deus.<br><br>
2<br>
Dirijo a ti, Senhor, minha oração;<br>
Do mal que pratiquei, a confissão!<br>
Sê Tu, ó meu Senhor, propício ao pecador,<br>
Concede, em teu amor, pleno perdão.<br><br>
3<br>
Dirijo a ti, Senhor, minha oração,<br>
Divino amparo és em aflição.<br>
Tu podes consolar, minha alma confortar,<br>
E sempre me guardar de todo o mal.<br><br>
4<br>
Atende, ó meu Senhor, minha oração,<br>
Que humilde sobe a ti com gratidão<br>
Imploro, meu Senhor, por Cristo, o Mediador,<br>
Que sempre em teu amor possa eu viver. <br>Amém.',
                'audio' => '',
                'indices_id' => '23',
            ],
            [
                'id' => '132',
                'name' => '131 - Vida santificada',
                'body' => '1<br>
Para seres santo, tempo hás de tomar;<br>
Com o grande Mestre, seu Livro estudar;<br>
Hás de sempre amá-lo, aos fiéis valer,<br>
E as bênçãos celestes de Deus receber.<br><br>
2<br>
Para seres puro, tempo hás de encontrar;<br>
A sós com teu Mestre mui freqüente estar.<br>
Teu olhar bem fito nele sempre ter,<br>
Teus atos provando seu grande poder.<br><br>
3<br>
Para seres forte, tempo hás de buscar;<br>
Ao Mestre seguindo por onde guiar;<br>
No gozo ou tristeza, sempre obedecer,<br>
Ao seu bom conselho com fé recorrer.<br><br>
4<br>
Para seres útil, tempo hás de guardar!<br>
Ser calmo e paciente, em todo lugar.<br>
Ter a sua graça, e mostrar amor,<br>
Contente e submisso aos pés do Senhor,<br>',
                'audio' => '',
                'indices_id' => '24',
            ],
            [
                'id' => '133',
                'name' => '132 - Vivificação',
                'body' => '1<br>
Tu, que sobre a amarga cruz<br>
Revelaste teu amor,<br>
Tu que vives, ó Jesus,<br>
Vivifica-nos, Senhor!<br><br>
<strong>
Vem, oh, vem, Jesus Senhor<br>
Nossas almas despertar!<br>
Com teu santo e puro amor<br>
Vem, Senhor, nos inflamar!<br>
Oh, vem! Oh, vem<br>
Nossas almas inflamar!</strong><br><br>
2<br>
Eis o mundo tentador<br>
A querer nos atrair,<br>
Sem teu fogo abrasador,<br>
Não podemos resistir.<br><br>
3<br>
Quantos que corriam bem,<br>
De ti longe agora vão!<br>
Outros seguem, mas, também,<br>
Sem fervor vivendo estão.<br><br>
4<br>
Vem agora consumir<br>
Tudo quanto, ó Salvador,<br>
Quer altivo resistir<br>
Ao teu brando e santo amor.<br> Amém.<br>',
                'audio' => '',
                'indices_id' => '24',
            ],
            [
                'id' => '134',
                'name' => '133 - Aspiração à santidade',
                'body' => '1<br>
Puro, sim, mais puro eu desejo ser!<br>
Santo, sim, mais santo, sempre em meu viver!<br>
Ó Senhor, te peço nesta oração:<br>
Satisfaz o anseio do meu coração.<br><br>
2<br>
Calmo, sim, mais calmo sempre eu quero estar!<br>
Firme, sim, mais firme eu desejo andar!<br>
Nunca se enfraqueça minha fé, Senhor,<br>
E que eu, sempre alegre, cante o teu louvor.<br><br>
3<br>
Justo, sim, mais justo quem me dera ser!<br>
Reto, sim, mais reto em meu proceder.<br>
Cristo é meu modelo, sempre o seguirei;<br>
Tudo quanto almejo nele encontrarei.<br>',
                'audio' => '',
                'indices_id' => '24',
            ],
            [
                'id' => '135',
                'name' => '134 - Riquezas do céu',
                'body' => '1<br>
Oh! Buscai, não as riquezas<br>
Deste mundo de incertezas!<br>
As do céu não têm tristezas:<br>
Oh! Buscai-as! Sim, buscai!<br><br>
2<br>
Oh! Buscai, não as loucuras<br>
Que só trazem amarguras,<br>
Mas delícias santas, puras:<br>
Oh! Buscai-as! Sim, buscai!<br><br>
3<br>
A Jesus buscai primeiro,<br>
Ao real, fiel Cordeiro,<br>
Ao Amigo verdadeiro:<br>
Oh! Buscai-o! Sim, buscai<br><br>
4<br>
Sim, buscai o Deus Bendito,<br>
Cujo amor é inaudito,<br>
Inefável, infinito:<br>
Oh, buscai-o! Sim, buscai!<br>',
                'audio' => '',
                'indices_id' => '24',
            ],
            [
                'id' => '136',
                'name' => '135 - Mais de Cristo',
                'body' => '1<br>
Mais de Cristo eu quero ter,<br>
Seu ensino receber,<br>
Ter da sua compaixão<br>
E da sua mansidão.<br><br>
<strong>
Mais,mais de Cristo!<br>
Mais,mais de Cristo!<br>
Mais do seu puro e santo amor<br>
Mais do bondoso Salvador.<br><br>
</strong>
2<br>
Mais de Cristo eu quero ouvir<br>
Nos seu passos prosseguir,<br>
Sempre perto dele andar,<br>
Seu amor manifestar.<br>',
                'audio' => '',
                'indices_id' => '24',
            ],
            [
                'id' => '137',
                'name' => '136 - Rocha eterna',
                'body' => '1<br>
Rocha eterna, meu Jesus,<br>
Quero em ti me refugiar!<br>
O teu sangue lá na cruz,<br>
Derramado em meu lugar,<br>
Traz as bênçãos do perdão:<br>
Gozo, paz e salvação.<br><br>
2<br>
Não por obras nem penar,<br>
Plena paz terei aqui.<br>
Só Tu podes consolar,<br>
Há perdão somente em ti.<br>
Rocha eterna, só na cruz<br>
Eu confio, ó meu Jesus!<br><br>
3<br>
Quando o derradeiro olhar<br>
A este mundo aqui volver,<br>
E no Trono eu te encontrar,<br>
Teu chamado a responder;<br>
Rocha eterna, espero ali<br>
Abrigar-me, salvo em ti!<br> Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '138',
                'name' => '137 - Abrigo no temporal',
                'body' => '1<br>
Rochedo forte é o Senhor,<br>
Refúgio na tribulação!<br>
Constante e firme amparador,<br>
Refúgio na tribulação!<br><br>
<strong>
Oh! Cristo é nosso abrigo no temporal,<br>
Na tentação, em todo mal<br>
Sim, Cristo é nosso abrigo no temporal,<br>
Refúgio na tribulação!<br>
</strong>
2<br>
É como sombra no calor,<br>
Descanso na tribulação!<br>
Refaz as forças, dá vigor:<br>
Descanso na tribulação!<br><br>
3<br>
Piloto bom no bravo mar,<br>
Firmeza na tribulação!<br>
Ancoradouro singular,<br>
Firmeza na tribulação!<br><br>
4<br>
Leal Amigo e Benfeitor,<br>
Auxílio na tribulação!<br>
Fiel e eterno Salvador,<br>
Auxílio na tribulação!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '139',
                'name' => '138 - Refúgio',
                'body' => '1<br>
Ó Bondoso Salvador!<br>
Sê Tu meu amparador!<br>
Negras ondas de aflição,<br>
Fortes ventos perto estão.<br>
Deste espanto e do terror,<br>
Vem salvar-me, ó bom Senhor!<br>
E no porto faze entrar<br>
Minha barca sem quebrar!<br><br>
2<br>
Consternado nesta dor,<br>
Sem refúgio, sem vigor,<br>
Meu medroso coração<br>
Vem rogar-te proteção.<br>
Mostra o teu imenso amor,<br>
Ó benigno Salvador!<br>
Poderosa e clara luz,<br>
Não me deixes, ó Jesus!<br><br>
3<br>
Compassivo Redentor,<br>
Vale a um triste pecador!<br>
Vida e gozo Tu me dás,<br>
Graça infinda, eterna paz.<br>
Enche o débil coração,<br>
Com os dons da salvação,<br>
E seguro, sem temor,<br>
Gozarei do teu favor.<br> Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '140',
                'name' => '139 - O socorro do crente',
                'body' => '1<br>
Para os altos montes olharei,<br>
Quem me socorrerá?<br>
Do meu divino protetor<br>
Auxílio me virá.<br><br>
2<br>
No braço forte esperarei<br>
Do meu amparador!<br>
Por ele o mundo feito está,<br>
De tudo ele é Senhor.<br><br>
3<br>
O pé do servo de Jesus<br>
Jamais vacilará!<br>
O Deus que guarda os filhos seus<br>
Não adormecerá.<br><br>
4<br>
Do crente à mão direita está<br>
Quem o protege bem!<br>
Nem sol nem lua o ferirá,<br>
Socorro sempre tem.<br><br>
5<br>
Os inimigos dos fiéis<br>
Os querem assustar!<br>
O protegido por Jesus<br>
Sem medo deve andar.<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '141',
                'name' => '140 - Jornada do crente',
                'body' => '1<br>
Guia, ó Deus, a minha sorte<br>
Nesta peregrinação.<br>
Frágil sou mas Tu és forte,<br>
Não me largue a tua mão<br><br>
2<br>
Quando em meio de inimigos<br>
Ando cheio de temor,<br>
Ou por entre mil perigos,<br>
Vem guiar-me, ó Salvador.<br><br>
3<br>
Com o teu maná divino<br>
Vem nutrir meu coração!<br>
Guie a nuvem meu destino<br>
Nesta imensa solidão.<br><br>
4<br>
Fende a rocha milagrosa,<br>
Dá-me puro manancial.<br>
A coluna luminosa<br>
Seja sempre o meu fanal.<br><br>
5<br>
Ao Jordão, enfim, chegado,<br>
Dá-me tua mão, Senhor,<br>
E seguro, no outro lado,<br>
Cantarei o teu louvor.<br> Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '142',
                'name' => '141 - Guia divino',
                'body' => '1<br>
Guia Cristo a minha nau<br>
Sobre o revoltoso mar<br>
Que, enfurecido e mau,<br>
Quer fazê-la naufragar.<br>
Bom Jesus ó vem guiar,<br>
Minha nau vem pilotar!<br><br>
2<br>
Como sabe serenar<br>
Boa mãe o filho seu,<br>
Oh acalma assim o mar<br>
Proceloso e mui rebel.<br>
Bom Jesus, oh, vem guiar,<br>
Minha nau vem pilotar!<br><br>
3<br>
Se no porto, quando entrar,<br>
Mais o mar se enfurecer,<br>
Que me possa deleitar<br>
E ouvir-te assim dizer:<br>
“Entra, pobre viajor,<br>
No descanso do Senhor.<br>” Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '143',
                'name' => '142 - O fiel pastor',
                'body' => '1<br>
Fiel e bom Pastor é meu Senhor Jesus,<br>
E nada poderá faltar por onde me conduz.<br>
A pasto verde e bom conduz meu caminhar,<br>
E junto às águas puras vem fazer-me descansar.<br><br>
2<br>
O bom Pastor fiel dirige em retidão,<br>
Com terno e mui paciente amor, meu frágil coração.<br>
E quando o fim chegar da vida temporal,<br>
Com ele, firme, eu estarei sem recear o mal.<br><br>
3<br>
Eu tenho proteção no braço do Senhor,<br>
E sempre me consolará Jesus, o Salvador.<br>
Bondade e Graça, pois, aqui me seguirão,<br>
E na presença do Senhor terei habitação.<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '144',
                'name' => '143 - Salmo 23',
                'body' => '1<br>
Deus é meu Pastor mui terno,<br>
Nada, pois, me faltará.<br>
Com seu santo amor eterno<br>
Sempre me sustentará.<br>
Às pastagens verdejantes<br>
Ele vem me conduzir,<br><br>

<strong>
E nas relvas abundantes<br>
Vou descanso então fruir.<br><br>
</strong>

2<br>
Vem, com suas mãos divinas,<br>
Mansamente me guiar<br>
Rumo às águas cristalinas<br>
Que me vão dessedentar.<br>
Por veredas da justiça,<br>
Prazeroso, me conduz,<br><br>

<strong>
E depois da dura liça<br>
Vou gozar a eterna luz.<br><br>
</strong>
3<br>
Se da morte o vale escuro<br>
Traz-me aperto ao coração,<br>
Caminhando vou, seguro,<br>
Apoiado em seu bordão!<br>
Na presença de inimigos<br>
Eu terei, da Salvação,<br><br>
<strong>
Um banquete com amigos,<br>
Com Jesus meu vero Irmão.<br><br></strong>
4<br>
Óleo santo, derramado,<br>
A cabeça vem me ungir.<br>
Vai meu cálice transbordando<br>
Por grandioso bem fruir.<br>
Certamente que a bondade<br>
Sempre a me seguir terei,<br><br>
<strong>
E no lar da eternidade<br>
Mui feliz habitarei.<br></strong>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '145',
                'name' => '144 - Segurança e alegria',
                'body' => '1<br>
Que segurança tenho em Jesus,<br>
Pois nele gozo paz, vida e luz!<br>
Com Cristo herdeiro, Deus me aceitou<br>
Mediante o Filho que me salvou!<br><br>
<strong>
Conto esta história, cantando assim:<br>
Cristo, na cruz, foi morto por mim!<br>
Conto esta história, cantado assim:<br>
Cristo, na cruz, foi morto por mim!<br><br>
</strong>
2<br>
Inteiramente me submeti,<br>
Plena alegria nele senti.<br>
Anjos, descendo, trazem dos céus<br>
Provas da graça que vem de Deus.<br>
3<br>
Firmado em Cristo, no seu amor,<br>
Estou contente em meu Salvador!<br>
Esperançoso hei de viver<br>
Por Jesus Cristo, por seu poder.<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '146',
                'name' => '145 - Refúgio verdadeiro',
                'body' => '1<br>
Seguro estou, não tenho temor do mal!<br>
Sim, guardado pela fé em meu Jesus.<br>
Não posso duvidar desse amor leal<br>
Ele em seu caminho sempre me conduz.<br>
Não me deixará, mas me abrigará,<br>
Do pecado vil me vem livrar!<br>
A sua graça não me recusará,<br>
Sim, Jesus é quem me pode sustentar.<br><br>
<strong>
No poder de Cristo Mestre,<br>
Minha vida salva está!<br>
Do perigo que cercá-la<br>
Ele poderá livrá-la!<br>
Seu poder eterno sempre a susterá!<br><br></strong>
2<br>
Abrigo eterno tenho no Salvador,<br>
Ele esconde a minha vida em seu poder;<br>
Não posso ter receio do malfeitor<br>
Que procura, pertinaz, me enfraquecer.<br>
Confiado, então, nessa proteção,<br>
Sigo a Cristo e quero ser fiel<br>
Na minha vida cheio de gratidão,<br>
Sim, a meu Senhor e Rei Emanuel.<br><br>
3<br>
Perigo algum me pode causar temor,<br>
Pois meu Salvador não me abandonará!<br>
Com sua proteção e com seu amor,<br>
Dirigindo a minha vida ele estará.<br>
Nunca o deixarei, mas fiel serei,<br>
Sempre firme, cheio de fervor!<br>
Estando bem firmado em Jesus, meu Rei,<br>
Sigo avante, confiando em seu amor.<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '147',
                'name' => '146 - Segurança do crente',
                'body' => '1<br>
Oh! Quão preciosa e rica promessa<br>
De Jesus Cristo, celeste Rei.<br>
Ao que confia na sua graça<br>
Diz ele: “Nunca te deixarei!”<br><br>
<strong>
Oh! Não temas! Oh não temas!<br>
Pois eu contigo sempre serei.<br>
Oh não temas! Oh não temas!<br>
Porque eu nunca te deixarei!<br><br>
</strong>
2<br>
Para remir-te dei o meu sangue.<br>
Vem sem demora, pois te chamei.<br>
Meu, para sempre, tu és agora;<br>
Nunca, sim nunca te deixarei.<br><br>
3<br>
Inda que indigno foste escolhido,<br>
Jamais vacile, porque te amei.<br>
Quem dos meus braços pode arrancar-te?<br>
Seguro sempre te guardarei!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '148',
                'name' => '147 - Vencendo vem Jesus',
                'body' => '1<br>
Quando a alma sequiosa<br>
Chega à voz do Salvador,<br>
Eis que logo reconhece<br>
Ser Jesus o seu Senhor!<br>
Mas se o “eu” quer levantar-se<br>
E mostrar algum valor,<br>
Vencendo vem Jesus!<br><br>
<strong>
Glória, glória, aleluia!<br>
Glória, glória, aleluia!<br>
Glória, glória, aleluia!<br>
Vencendo vem Jesus!<br><br>
</strong>
2<br>
Neste mundo havemos, crentes,<br>
De ter sempre algum pesar!<br>
Mesmo lutas, dissabores,<br>
Nossa paz vem perturbar.<br>
Mas se o mal nos ameaça<br>
De alegria nos roubar,<br>
Vencendo vem Jesus<br><br>
3<br>
Da vaidade, fiéis servos<br>
Lutam por fazer-nos seus!<br>
Muitas vezes nos assaltam<br>
Os modernos fariseus.<br>
Mas se alguém procura ver-nos<br>
Sem a graça do bom Deus,<br>
Vencendo vem Jesus!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '149',
                'name' => '148 - Oração noturna',
                'body' => '1<br>
Finda-se este dia que meu Pai me deu,<br>
Sombras vespertinas cobrem já o céu.<br>
Ó Jesus bendito, se comigo estás,<br>
Eu não temo a noite, vou dormir em paz.<br><br>
2<br>
Com pecados hoje, eu te entristeci,<br>
Mas perdão te peço por amor de ti.<br>
Sou pequeno e frágil, livra-me do mal!<br>
Que em ti eu tenha proteção final.<br><br>
3<br>
Guarda o marinheiro no violento mar,<br>
E ao que sofre dores queiras confortar.<br>
Ao tentado estende tua mão, Senhor!<br>
Manda ao triste, aflito, o Consolador.<br><br>
4<br>
Pelos pais e amigos, pela santa Lei,<br>
Pelo amor divino, graças te darei!<br>
Ó Jesus, aceita minha petição,<br>
E, seguro durmo sem perturbação <br>Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '150',
                'name' => '149 - Verdadeira redenção',
                'body' => '1<br>
Eu confio em meu Jesus<br>
E seguro estou!<br>
Pois morrendo sobre a cruz,<br>
Ele me salvou.<br><br>
<strong>
Cristo me salvou<br>
E me transformou!<br>
Por sua morte sobre a cruz<br>
Nos deu vida eterna e luz.<br><br>
</strong>
2<br>
Veio, assim, o bom Senhor<br>
Salvação trazer<br>
A tão pobre pecador,<br>
Pelo seu poder.<br><br>
3<br>
Verdadeira redenção<br>
Tenho em meu Jesus!<br>
Plena paz, consolação,<br>
Vêm da sua cruz.<br><br>
4<br>
Lá nos céus eu viverei<br>
Com o Salvador;<br>
Plenamente fruirei<br>
Do seu grande amor.<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '151',
                'name' => '150 - Salvação perfeita',
                'body' => '1<br>
Livres do medo! Já resgatados!<br>
Cristo morreu por nossos pecados!<br>
Na sua cruz o pacto se fez,<br>
Fomos remidos de uma vez.<br><br>
<strong>
Sim, de uma vez! Amigo acredita,<br>
No Salvador tens sorte bendita!<br>
Cristo, na cruz, a lei satisfez<br>
E redimiu-nos de uma vez!<br><br></strong>
2<br>
Ao malfeitor, que a pena merece,<br>
Vida, perdão e paz oferece.<br>
Vem a Jesus com santa avidez,<br>
Pois te recebe de uma vez!<br><br>
3<br>
Graça real! Não há mais castigo!<br>
Não mais temor, nem sombra ou perigo!<br>
Vestes reais, não triste nudez,<br>
Cristo enriquece de uma vez!<br><br>
4<br>
Filhos de Deus - oh, gozo inaudito!<br>
Deus nos amou em grau infinito.<br>
Nesta clemência não há dobrez,<br>
Há segurança de uma vez!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '152',
                'name' => '151 - O bom Pastor',
                'body' => '1<br>
Pelos bosques e campinas<br>
Pastoreia o bom Jesus.<br>
Junto às águas cristalinas<br>
Seu rebanho em paz conduz.<br>
Ele guarda assim minha alma<br>
E a protege em seu calor.<br>
Nas angústias ou na calma<br>
Vai comigo o Bom Pastor<br><br>
<strong>
Sempre amável e clemente,<br>
Vai comigo o Bom Pastor.<br><br></strong>
2<br>
Não me afligem os perigos<br>
E não temo a tentação!<br>
Ele sempre está comigo<br>
E sustém-me o seu bordão.<br>
Não me aflige nem a morte,<br>
Cuja sombra hei de enfrentar.<br>
Ele é meu amparo forte<br>
Em que posso confiar.<br><br>
3<br>
Sua mesa me prepara,<br>
Pois minha alma quer nutrir.<br>
Minhas mágoas ele sara,<br>
Com seu óleo vem me ungir.<br>
Certamente que a bondade<br>
Toda a vida fruirei.<br>
E no céu felicidade<br>
Para sempre gozarei!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '153',
                'name' => '152 - Onisciência divina',
                'body' => '1<br>
Tu me sondaste a mim, ó Deus,<br>
Não há segredo aos olhos teus!<br>
Prevês por onde quero andar,<br>
E sabes como vou falar.<br><br>
2<br>
Contemplas tu meu interior!<br>
Quem compreenderá, Senhor<br>
Tua ciência e o teu poder?<br>
Pois infinito é teu saber.<br><br>
3<br>
Ó Deus da minha salvação,<br>
Vem dominar meu coração;<br>
Vem controlar o meu sentir,<br>
E minha vida conduzir. <br>Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '154',
                'name' => '153 - Amparo divino',
                'body' => '1<br>
Com tua mão segura bem a minha,<br>
Pois eu tão frágil sou, ó Salvador,<br>
Que não me atrevo a dar jamais um passo<br>
Sem teu amparo, Cristo, meu Senhor!<br><br>
2<br>
Com tua mão segura bem a minha,<br>
E meu caminho, alegre, seguirei!<br>
Mesmo onde as sombras caem mais escuras,<br>
Teu rosto vendo, nada temerei.<br><br>
3<br>
E no momento de transpor o rio<br>
Que Tu, por mim, vieste atravessar,<br>
Com tua mão segura bem a minha,<br>
E sobre a morte eu hei de triunfar.<br><br>
4<br>
Quando voltares lá dos céus descendo,<br>
Segura bem a minha mão, Senhor!<br>
E, meu Jesus, conduze-me contigo<br>
Para onde eu goze teu eterno amor. <br>Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '155',
                'name' => '154 - Segurança e paz',
                'body' => '1<br>
Pelo vale escuro seguirei, Jesus,<br>
Mas por ti seguro, vendo a tua luz,<br>
O meu passo incerto Tu dirigirás!<br>
Ao sentir-te perto nunca perco a paz!<br><br>
2<br>
Os espinhos tantos, que nos vem sangrar,<br>
São remédios santos para nos curar.<br>
Onde existe a graça que nos vem dos céus,<br>
Tudo o que se passa mostra o amor de Deus.<br><br>
3<br>
Não há dor que seja sem divino fim;<br>
Faze, ó Deus, que a Igreja compreenda assim!<br>
E apesar das trevas possa ver, Senhor,<br>
Que Tu mesmo as levas com imenso amor.<br><br>
4<br>
Breve a noite desce, noite de Emaús!<br>
E meu ser carece de te ver, Jesus!<br>
Companheiro amigo, que ao meu lado vens,<br>
Sim estás comigo, sempre me sustém.<br> Amém.',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '156',
                'name' => '155 - Castelo forte',
                'body' => '1<br>
Castelo forte é nosso Deus,<br>
Espada e bom escudo!<br>
Com seu poder defende os seus<br>
Em todo transe agudo.<br>
Com fúria pertinaz<br>
Persegue Satanás<br>
Com ânimo cruel!<br>
Mui forte é o Deus fiel,<br>
Igual não há na terra.<br><br>
2<br>
A força do homem nada faz,<br>
Sozinho está perdido!<br>
Mas nosso Deus socorro traz<br>
Em seu Filho escolhido.<br>
Sabeis quem é? Jesus,<br>
O que venceu na cruz,<br>
Senhor dos altos céus,<br>
E sendo o próprio Deus,<br>
Triunfa na batalha.<br><br>
3<br>
Se nos quisessem devorar<br>
Demônios não contados,<br>
Não nos iriam derrotar<br>
Nem ver-nos assustados.<br>
O príncipe do mal,<br>
Com seu plano infernal,<br>
Já condenado está!<br>
Vencido cairá<br>
Por uma só palavra.<br><br>
4<br>
De Deus o verbo ficará<br>
Sabemos com certeza,<br>
E nada nos assustará<br>
Com Cristo por defesa!<br>
Se temos de perder<br>
Família., bens, prazer,<br>
Se tudo se acabar<br>
E a morte enfim chegar,<br>
Com ele reinaremos!<br>',
                'audio' => '',
                'indices_id' => '25',
            ],
            [
                'id' => '157',
                'name' => '156 - Confiança em Deus',
                'body' => '1<br>
Descansa, ó alma, eis o Senhor ao lado;<br>
Paciente leva, e sem queixar-te, a cruz;<br>
Deixa o Senhor tomar de ti cuidado,<br>
É imutável teu fiel Jesus!<br>
Prossegue, ó alma, o Amigo celestial<br>
Protegerá teus passos no espinhal!<br><br>
2<br>
Prossegue, ó alma; o trilho é estreito e escuro,<br>
Mas no passado Deus guiou-te assim!<br>
Confia agora a Deus o teu futuro,<br>
E o que é mistério há de aclarar-se enfim.<br>
Confia, ó alma, a sua mansa voz<br>
Ainda acalma o vento e o mar feroz!<br><br>
3<br>
Confia, ó alma! A hora vem chegando!<br>
Irás com Cristo, o teu Senhor, morar.<br>
Sem dor, nem mágoas gozarás cantando<br>
As alegrias do celeste lar!<br>
Descansa, ó alma; agora há pranto e dor<br>
Depois o gozo, a paz, o céu de amor.<br> Amém.',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '158',
                'name' => '157 - Segurança em Cristo',
                'body' => '1<br>
Por meus delitos expirou<br>
Jesus, a vida e luz!<br>
Do meu pecado me livrou<br>
Na ensangüentada cruz.<br><br>
<strong>
Faze-me forte em confessar<br>
A ti, Jesus, Senhor!<br>
Faze-me pronto a confiar<br>
No teu eterno amor.<br><br></strong>
2<br>
Jamais terei tão fraca voz<br>
Que trema ao confessar<br>
A quem, por morte tão atroz,<br>
Minha alma quis salvar.<br><br>
3<br>
Sim, eu desejo aqui cantar<br>
Tão grande Salvador,<br>
E quando lá no céu chegar<br>
Louvá-lo-ei melhor. Amém.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '159',
                'name' => '158 - Conforto e luz',
                'body' => '1<br>
Vai, alma tristonha, teu pranto depor!<br>
Põe os teus cuidados nas mãos do Senhor!<br>
Ao Mestre confia toda essa aflição,<br>
Pois sempre oferece plena compaixão.<br><br>
2<br>
Teus sustos e medos vai, mostra ao Senhor!<br>
Seu mando transforma a noite em fulgor.<br>
Ergue a tua fronte! Logo há de raiar.<br>
O sol que dissipa nuvens de pesar.<br><br>
3<br>
Há tantos que choram dor muito maior;<br>
Há corações tristes por culpa e temor.<br>
Vai! Leva a mensagem de perdão e luz!<br>
Vai! Deixa as tristezas aos pés de Jesus!<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '160',
                'name' => '159 - Bondoso amigo',
                'body' => '1<br>
Quão bondoso Amigo é Cristo,<br>
Revelou-nos seu amor;<br>
E nos diz que lhe entreguemos<br>
Os cuidados, sem temor.<br>
Falta ao coração dorido<br>
Gozo, paz, consolação?<br>
É porque nós não levamos<br>
Tudo a ele, em oração.<br><br>
2<br>
Andas triste e carregado<br>
De pesares e de dor?<br>
A Jesus, eterno abrigo,<br>
Vai, com fé, teu mal expor.<br>
Teus amigos te desprezam?<br>
Conta-lhe isso em oração,<br>
E, por seu amor tão terno,<br>
Paz terás no coração.<br><br>
3<br>
Cristo é verdadeiro Amigo!<br>
Disso prova nos mostrou,<br>
Quando, para resgatar-nos,<br>
Ele, humilde, se encarnou.<br>
Derramou precioso sangue<br>
Para nos purificar!<br>
Gozo, em vida e no futuro,<br>
Já podemos alcançar!<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '161',
                'name' => '160 - Cristo é tudo',
                'body' => '1<br>
Nome algum, no céu, na terra,<br>
Se compara ao de Jesus!<br>
Ele sobre tudo reina,<br>
Ele é minha eterna luz.<br><br>
2<br>
Minhas dores ele sofre,<br>
Sara o enfermo coração.<br>
Seu amor me dá alívio<br>
Na tristeza e na aflição.<br><br>
3<br>
É Jesus o meu tesouro,<br>
Nele encontro todo o bem.<br>
Valem mais que o mundo inteiro<br>
As riquezas que ele tem.<br><br>
4<br>
É Jesus meu alimento,<br>
O meu Pão celestial.<br>
Do mais vero e santo gozo<br>
Ele é meu manancial.<br><br>
5<br>
Infinita é sua graça,<br>
Impossível de sondar!<br>
Com os santos anjos quero<br>
A Jesus louvores dar.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '162',
                'name' => '161 - O melhor amigo',
                'body' => '1<br>
Sei que o melhor Amigo é Cristo!<br>
Quando a tempestade assalta a fé,<br>
Pronto estende a sua mão,<br>
Tranqüiliza o coração!<br>
Sim, o melhor Amigo é Cristo!<br><br>
<strong>
Jesus é o melhor Amigo!<br>
Jesus é o melhor Amigo!<br>
Repreende com dulçor<br>
E me anima com vigor!<br>
Sim, o melhor Amigo é Cristo!<br><br>
</strong>
2<br>
Oh, que fiel Amigo é Cristo!<br>
Nele encontro amor, consolo e paz.<br>
Em seu braço esperarei!<br>
Mal nenhum eu temerei!<br>
Sim, o melhor Amigo é Cristo!<br><br>
3<br>
Quando eu passar o vale escuro<br>
E chegar às águas do Jordão,<br>
Sem receio, com Jesus,<br>
Entrarei no céu de luz.<br>
Sim, o melhor Amigo é Cristo!<br><br>
4<br>
No paraíso eterno, juntos,<br>
Nós, os salvos, reunidos lá,<br>
Este canto de louvor<br>
Entoaremos ao Senhor:<br><br>
<strong>
“Sim, o melhor Amigo é Cristo!”<br>
Jesus é o melhor Amigo!<br>
Jesus é o melhor Amigo!<br>
Do pecado me salvou,<br>
Para o céu me preparou.<br>
Sim, o melhor Amigo é Cristo!<br>
</strong>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '163',
                'name' => '162 - A voz de Deus',
                'body' => '1<br>
Quando a tempestade ruge<br>
Com o seu feroz bramir,<br>
Quando as nuvens se acumulam,<br>
Raios mil a despedir,<br>
Do trovão o som tremendo<br>
Faz-se ouvir e com pavor!<br>
Mas por sobre a tempestade<br>
Soa tua voz, Senhor.<br><br>
<strong>
Eis que ouvimos tua voz,<br>
A animar os que andam sós<br>
E em ti sempre confiados,<br>
Vão por ti sempre a lutar,<br>
Nesta vida tormentosa,<br>
Qual fragor do vasto mar.<br><br></strong>
2<br>
Quando o mar vem,mansamente,<br>
Sobre a areia se espraiar,<br>
Quando a brisa sussurrante<br>
Calmamente perpassar,<br>
Soa a mística harmonia,<br>
Ouve-se um feliz rumor;<br>
Desse coro, docemente,<br>
Vem a tua voz, Senhor!<br><br>
3<br>
Quando o coração aflito<br>
Quer à dor, ao mal fugir,<br>
E se agita luta e ruge,<br>
Sem descanso e paz sentir,<br>
Qual um som que se repete<br>
Nas quebradas a rolar,<br>
Ao aflito e contristado<br>
Tua voz vem consolar.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '164',
                'name' => '163 - Direção divina',
                'body' => '1<br>
As tuas mãos dirigem meu destino!<br>
Ó Deus de amor que seja sempre assim!<br>
Teus são os meus poderes, minha vida;<br>
Em tudo, eterno Pai, dispõe de mim.<br>
Meus dias sejam curtos ou compridos,<br>
Passados em tristezas ou prazer,<br>
Em sombra ou luz, de acordo com teu plano,<br>
É tudo bom se vem do teu querer.<br><br>
2<br>
As tuas mãos dirigem meu destino,<br>
Por mim cravadas na sangrenta cruz!<br>
Por meus pecados foram traspassadas,<br>
Bem posso nelas descansar, Jesus!<br>
Nos céus erguidas, sempre intercedendo,<br>
As santas mãos não pedirão em vão;<br>
Ao seu cuidado, em plena confiança,<br>
Entrego a minha eterna salvação.<br><br>
3<br>
As tuas mãos dirigem meu destino,<br>
Acasos para mim não haverá!<br>
O grande Pai vigia o meu caminho,<br>
E sem motivo não me afligirá!<br>
Encontro em seu poder constante apoio,<br>
Forte é seu braço, insone o seu amor;<br>
Por fim, entrando na cidade eterna,<br>
Eu louvarei meu guia e Salvador.<br> Amém.',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '165',
                'name' => '164 - Nome precioso',
                'body' => '1<br>
Santo nome, incomparável,<br>
Tem Jesus, o amado teu!<br>
Rei dos reis, Senhor eterno,<br>
Deus na terra, Deus nos céus.<br><br>
<strong>
Nome bom, doce à fé,<br>
A esperança do porvir.<br>
Nome bom, doce à fé<br>
A esperança do porvir.<br><br>
</strong>
2<br>
Leva tu contigo o Nome<br>
De Jesus, o Salvador!<br>
Este Nome dá conforto<br>
Hoje, sempre e onde for.<br><br>
3<br>
Este Nome leva sempre<br>
Para bem te defender!<br>
Ele é arma ao teu alcance,<br>
Quando o mal te aparecer.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '166',
                'name' => '165 - Cuidado divino',
                'body' => '1<br>
Não desanimes! Deus proverá!<br>
Deus velará por ti!<br>
Com suas asas te cobrirá,<br>
Deus velará por ti.<br><br>
<strong>
Deus cuidará de ti,<br>
Na tua dor,<br>
Com todo amor,<br>
Jamais te deixará!<br>
Deus cuidará de ti!<br><br></strong>
2<br>
Se no teu peito vibrar a dor,<br>
Deus velará por ti.<br>
Tu já provaste seu grande amor,<br>
Deus velará por ti.<br><br>
3<br>
Nos desalentos, nas provações;<br>
Deus velará por ti.<br>
Nas desventuras, nas tentações,<br>
Deus velará por ti.<br>
4<br>
Como estiveres, não temas, vem!<br>
Deus velará por ti.<br>
Teu Pai bondoso te espera além,<br>
Deus velará por ti.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '167',
                'name' => '166 - Luz e vida',
                'body' => '1<br>
És da minha alma a luz Senhor!<br>
Vem dissipar o meu temor!<br>
Noite não há se perto estás,<br>
Em ti alcanço plena paz.<br><br>
2<br>
Sempre comigo estás, Senhor!<br>
Só tenho vida em teu amor.<br>
Do dia esvai-se toda a luz,<br>
Sigo bem junto a ti Jesus.<br><br>
3<br>
Com os enfermos vem estar,<br>
Os pobres vem alimentar!<br>
Aos que no leito sofrem dor<br>
Dá teu conforto e paz, Senhor.<br><br>
4<br>
E desde cedo, ao despertar,<br>
O nosso passo vem guiar!<br>
Na imensidão do teu amor<br>
Vem nos guardar, ó Salvador.<br> Amém.',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '168',
                'name' => '167 - Cristo, esperança nossa',
                'body' => '1<br>
“Cristo esperança nossa!”<br>
Vinde, ó salvos proclamar!<br>
Ele é eterno Deus bendito,<br>
É refúgio singular.<br>
É quem guarda, quem protege,<br>
Quem aos homens quer salvar,<br>
Quem aos homens quer salvar,<br><br>
2<br>
“Cristo, esperança nossa!”<br>
Pois da culpa nos livrou;<br>
Com seu sangue precioso<br>
Lá na cruz já nos comprou.<br>
Deu nos vida em sua morte,<br>
Pois que já ressuscitou,<br>
Pois que já ressuscitou.<br><br>
3<br>
“Cristo esperança nossa!”<br>
Eis o lema vencedor.<br>
Ao seu lado, contra as trevas,<br>
Combatamos sem temor.<br>
Nossa grande esperança<br>
É o Cristo Salvador,<br>
É o Cristo salvador!<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '169',
                'name' => '168 - Jesus amado',
                'body' => '1<br>
Quão doce fala ao coração<br>
Do pobre pecador<br>
O nome que lhe traz perdão:<br>
Jesus, o Redentor!<br><br>
2<br>
Bendito sejas, ó Jesus!<br>
Em ti confiarei.<br>
Por mim morreste sobre a cruz,<br>
Jamais te deixarei!<br>
3<br>
Jesus, eu quero em ti pensar,<br>
Pois teu amor me apraz.<br>
E ajoelhando-me a orar,<br>
Eu sinto a tua paz!<br><br>
4<br>
Jesus, meu Rei, meu Salvador,<br>
Teu Nome quero ter<br>
Não só nos lábios, com fervor,<br>
Mas sempre no viver! Amém.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '170',
                'name' => '169 - Grata confiança',
                'body' => '1<br>
No poder do Deus bendito,<br>
Vai tudo bem!<br>
Se amor é infinito,<br>
Vai tudo bem!<br>
Esse amor nos foi provado<br>
Em seu Filho muito amado<br>
Que por nós foi imolado!<br>
Vai tudo bem.<br><br>
2<br>
Reina Cristo em glória eterna!<br>
Vai tudo bem!<br>
Ressurgiu, e já governa!<br>
Vai tudo bem!<br>
Seu amor é imutável,<br>
Seu poder inabalável,<br>
Seu cuidado é incansável!<br>
Vai tudo bem!<br><br>
3<br>
Na doença ou na tristeza,<br>
Vai tudo bem!<br>
Proclamamos com certeza:<br>
Vai tudo bem!<br>
Pois se Deus é quem nos guia,<br>
Ternamente nos vigia,<br>
Com bondade, noite e dia,<br>
Vai tudo bem!<br><br>
4<br>
Em caminhos escabrosos,<br>
Vai tudo bem!<br>
Ou por mares tormentosos,<br>
Vai tudo bem!<br>
A Jesus tudo obedece,<br>
Ele o mesmo permanece<br>
Nem um só dos seus esquece,<br>
Vai tudo bem!<br><br>
5<br>
Quer na vida, quer na morte,<br>
Vai tudo bem!<br>
Mui feliz é nossa sorte,<br>
Vai tudo bem!<br>
Pelo sangue resgatados,<br>
E do mundo separados,<br>
Sempre por Jesus guardados,<br>
Vai tudo bem!<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '171',
                'name' => '170 - Redentor onipotente',
                'body' => '1<br>
Redentor Onipotente<br>
Poderoso Salvador,<br>
Advogado Onisciente<br>
É Jesus, meu bom Senhor.<br>
Um abrigo sempre perto<br>
Para todo pecador!<br>
Um amigo inseparável<br>
É Jesus, meu Salvador!<br>
2<br>
Á água viva, Pão da vida,<br>
Doce sombra no calor<br>
Que ao descanso nos convida<br>
É Jesus, meu Salvador!<br>
Sol que extingue densas trevas,<br>
Refulgindo em plena luz,<br>
Negra noite desfazendo,<br>
É meu bom Senhor, Jesus.<br><br>
3<br>
Fundamento inabalável!<br>
Em que posso confiar!<br>
Infalível, imutável,<br>
Rocha firme e secular!<br>
Porta aberta, sempre aberta,<br>
Conduzindo à salvação,<br>
Rica fonte donde emana<br>
Gozo, paz, consolação!<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '172',
                'name' => '171 - Deus proverá',
                'body' => '1<br>
Na forte aflição, perigo e dor,<br>
Na vil traição, no horrendo terror,<br>
Com toda a certeza vitória virá!<br>
É firme a esperança: “Meu Deus proverá.”<br><br>
2<br>
Em tudo o Senhor nos pode valer,<br>
Do mal, com amor, nos quer defender!<br>
Com Cristo bem perto, em nós se achará<br>
A viva esperança: “Meu Deus proverá.”<br><br>
3<br>
Se vem Satanás nos amedrontar<br>
E, astuto quiser a fé nos roubar<br>
Não pode; é nossa e sempre será<br>
A rica esperança: “Meu Deus proverá.”<br><br>
4<br>
No rude labor, no esforço tenaz,<br>
Somente o Senhor vitória nos traz!<br>
Em sua bondade nos socorrerá,<br>
Conforme a esperança: “Meu Deus proverá.”<br><br>
5<br>
Na hora final, a morte a chegar,<br>
A voz divinal nos há de alegrar!<br>
Minha alma, segura, então cantará<br>
A doce esperança: “Meu Deus proverá.”<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '173',
                'name' => '172 - Chuvas de bençãos',
                'body' => '1<br>
Chuvas de bênçãos teremos<br>
Pelas promessas de Deus;<br>
Tempos benditos trazendo<br>
Chuvas de bênçãos dos céus.<br><br>
<strong>
Chuvas de bênçãos,<br>
Chuvas de bênçãos dos céus !<br>
Tantas nós já recebemos,<br>
Outras rogamos a Deus!<br><br></strong>
2<br>
Chuvas de bênçãos teremos,<br>
Que do Senhor nos virão.<br>
Os pecadores indignos<br>
Graças dos céus obterão.<br><br>
3<br>
Chuvas de bênçãos teremos,<br>
Manda-nos,pois, o Senhor.<br>
Dá-nos o gozo dos frutos<br>
Dos teus ensinos de amor!<br><br>
4<br>
Chuvas de bênçãos teremos,<br>
Chuvas mandadas dos céus,<br>
Bênçãos a todos os crentes,<br>
Bênçãos do nosso bom Deus.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '174',
                'name' => '173 - Oração vespertina',
                'body' => '1<br>
Vai fugindo o dia, breve a noite vem;<br>
Vespertina estrela já se avista além.<br><br>
2<br>
Ao que mui cansado na tristeza jaz,<br>
Dá, Jesus bendito, teu descanso e paz!<br><br>
3<br>
Noite de sossego vimos te pedir;<br>
Em tuas mãos entregues, hemos de dormir.<br><br>
4<br>
E quando acordarmos, faze, ó bom Senhor,<br>
Que nós te sirvamos com maior vigor. Amém.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '175',
                'name' => '174 - Poderoso salvador',
                'body' => '1<br>
Confio em ti, meu Senhor,<br>
Contigo seguro eu estou<br>
Os ímpios vieste buscar!<br>
Tu és poderoso, Tu és poderoso<br>
E podes salvar!<br><br>
2<br>
Oh! Livra minha alma, Senhor,<br>
Das malhas do vil tentador!<br>
Seus laços vem despedaçar!<br>
Tu és poderoso, Tu és poderoso<br>
E podes livrar!<br><br>
3<br>
No mundo sofreste, ó Jesus,<br>
Por mim padeceste na cruz!<br>
Teu sangue me pode livrar!<br>
Tu és poderoso, Tu és poderoso,<br>
E podes guardar! Amém.<br>',
                'audio' => '',
                'indices_id' => '26',
            ],
            [
                'id' => '176',
                'name' => '175 - O servo do Senhor',
                'body' => '1<br>
Quão bem aventurado o servo do Senhor,<br>
Que não faz aliança com o desprezador!<br><br>
2<br>
Jamais o mau caminho dos ímpios quer seguir,<br>
Nem por seu vil conselho se deixa seduzir.<br><br>
3<br>
Mas sumo regozijo em Deus alcançará,<br>
E em sua lei divina, feliz, meditará.<br><br>
4<br>
Bem como a linda planta ele há de florescer!<br>
E junto às águas vivas, viçoso, irá crescer.<br><br>
5<br>
Em toda a sua vida os frutos brotarão,<br>
E em tudo o que ele intente vitórias surgirão.<br><br>
6<br>
Mas, doutra sorte, os ímpios não podem prosperar,<br>
E suas esperanças na morte irão findar.<br><br>
7<br>
Mui breve nós veremos Jesus do céu descer,<br>
E sua Igreja inteira na glória receber.<br><br>
8<br>
Então, os que desprezam o grande Salvador<br>
Perecerão malditos diante do Senhor.<br>',
                'audio' => '',
                'indices_id' => '27',
            ],
            [
                'id' => '177',
                'name' => '176 - Fidelidade do cristão',
                'body' => '1<br>
Sempre fiéis, sim a ti nós seremos,<br>
Por tua graça, bendito Senhor!<br>
Sempre fiéis, nós por ti lutaremos<br>
Com teu poder., ó Jesus, Salvador.!<br><br>
<strong>
Sempre fiéis, irmãos aqui sejamos!<br>
Sempre fiéis a Cristo Jesus!<br>
Que até à morte por nós prosseguindo,<br>
Vida nos deu, salvação pela cruz!<br><br></strong>
2<br>
Por ti viver, ó bendito Cordeiro,<br>
Quem não deseja se te conhecer?<br>
Quem, se de fato é cristão verdadeiro,<br>
Não estará, por ti, pronto a sofrer?<br><br>
3<br>
Nós te louvamos, pois Tu, que venceste,<br>
Sempre em triunfo nos podes levar.<br>
A teus fiéis, ó Jesus, prometeste<br>
Todos os dias com ele estar. Amém.<br>',
                'audio' => '',
                'indices_id' => '27',
            ],
            [
                'id' => '178',
                'name' => '177 - Firme nas promessas',
                'body' => '1<br>
Firme nas promessas do meu Salvador,<br>
Cantarei louvores ao meu Criador!<br>
Fico, pelos séculos do seu amor,<br>
Firme nas promessas de Jesus!<br><br>
<strong>
Firme, Firme,<br>
Firme nas promessas<br>
De Jesus me Mestre!<br>
Firme, firme,<br>
Sim, firme nas promessas de Jesus!<br><br></strong>
2<br>
Firme nas promessas, hei de trabalhar,<br>
Tendo o Verbo eterno sempre a me amparar!<br>
Mesmo em tempestade vou sem vacilar,<br>
Firme nas promessas de Jesus!<br><br>
3<br>
Firme nas promessas, sempre vejo, assim,<br>
Purificação no sangue para mim!<br>
Plena liberdade já desfruto, enfim;<br>
Firme nas promessas de Jesus!<br>
4<br>
Firme nas promessas do Senhor Jesus,<br>
Em amor ligado sempre à sua cruz!<br>
Cada dia mais me alegro em sua luz,<br>
Firme nas promessas de Jesus!<br>',
                'audio' => '',
                'indices_id' => '27',
            ],
            [
                'id' => '179',
                'name' => '178 - A excelência do amor',
                'body' => '1<br>
Qual o adorno desta vida?<br>
É o amor, é o amor.<br>
Alegria é concedida<br>
Pelo amor, pelo amor<br>
É benigno, é paciente,<br>
Não se torna maldizente<br>
Não se torna maldizente<br>
Nem se ufana este amor.<br><br>
2<br>
Com suspeitas não se alcança<br>
Vero amor, vero amor!<br>
Onde houver desconfiança,<br>
Ai do amor, ai do amor!<br>
Pois mostremos lealdade,<br>
Combatendo a falsidade<br>
Combatendo a falsidade<br>
Que destrói este amor.<br><br>
3<br>
Não te irrites, mas tolera<br>
Com amor, com amor!<br>
Tudo sofre, tudo espera<br>
Pelo amor, pelo amor.<br>
O caminho excelente<br>
Ao segui-lo vence o crente,<br>
Ao segui-lo vence o crente<br>
Numa vida de amor!<br><br>
4<br>
Ó cristão, ao teu vizinho<br>
Mostra amor, mostra amor!<br>
O valor não é mesquinho<br>
Deste amor, deste amor.<br>
O supremo Deus nos ama;<br>
Cristo para o céu nos chama,<br>
Cristo para o céu nos chama,<br>
Onde reina este amor.<br>',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '180',
                'name' => '179 - Saudação',
                'body' => '1<br>
Saudamo-vos, irmãos em Cristo,<br>
Lembrando o que temos visto:<br>
Nesses anos, pelas lutas, tentações.<br>
Atendidas foram nossas petições.<br>
Toda a glória seja ao nome do Senhor!<br>
Vinde todos entoar o seu louvor!<br><br>
<strong>
Bem alto agora vamos nós cantar,<br>
Que a terra e os céus virão nos ajudar.<br>
Até aqui Deus mesmo nos guiou,<br>
E com a sua mão nos ajudou.<br><br></strong>
2<br>
Um dia tão glorioso temos,<br>
E ao nosso Pai agradecemos,<br>
Pois é ele quem nos dá real prazer;<br>
E é fiel em nos guardar e proteger!<br>
Vinde vós, irmãos, conosco a Deus cantar,<br>
Desta bênção vinde, pois, participar!<br><br>
3<br>
Alegres todos jubilemos,<br>
Ao grande Salvador cantemos!<br>
Ele como filhos seus nos escolheu<br>
Ricas bênçãos ele já nos concedeu.<br>
Seja “avante” o nosso lema triunfal,<br>
Pois seguimos para o lar celestial.<br>',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '181',
                'name' => '180 - Amor fraternal',
                'body' => '1<br>
Jesus, Pastor amado! Louvamos-te hoje, aqui,<br>
Unidos pela graça, um corpo só em ti.<br>
Contendas e malícias, que longe de nós vão,<br>
Nenhum desgosto impeça a nossa santa união.<br><br>
2<br>
Família unida somos, família de Jesus!<br>
Iluminados todos da mesma santa luz.<br>
A mesma fé nos une num só divino amor,<br>
E cheios de alegria servimos ao Senhor.<br><br>
3<br>
Num só caminho estreito Deus mesmo nos conduz,<br>
Só temos esperança no Salvador Jesus!<br>
Sua morte preciosa a todos vida traz;<br>
E pelo mesmo sangue nos vem a mesma paz.<br><br>
4<br>
Pois sendo resgatados por um só Salvador,<br>
Vivamos sempre unidos por mais ardente amor!<br>
Com simpatia olhando os erros de um irmão,<br>
Cuidando de ajudá-lo com branda compaixão.<br><br>
5<br>
Jesus, bondoso Amigo, ensina-nos a amar.<br>
E, como Tu fizeste, também a perdoar!<br>
Pois tanto carecemos do auxilio teu, Senhor!<br>
Unidos, graças damos por teu imenso amor.<br> Amém.',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '182',
                'name' => '181 - Irmãos em Jesus',
                'body' => '1<br>
Bem-vindos, irmãos em Jesus,<br>
A nós, bem unidos na paz<br>
Que Cristo nos dá pela cruz,<br>
Com graça divina, eficaz.<br><br>
2<br>
Saudamos com santo prazer<br>
Aos crentes em nosso Senhor,<br>
Pois juntos queremos viver,<br>
Honrando o fiel Benfeitor.<br><br>
3<br>
De quanta ternura e amor<br>
Podemos aqui partilhar!<br>
E em Cristo, no riso ou na dor,<br>
Real comunhão desfrutar.<br><br>
4<br>
Unidos vivemos aqui;<br>
Unidos seremos nos céus.<br>
Alegres, cantando ali<br>
A grande clemência de Deus.<br>',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '183',
                'name' => '182 - União fraterna',
                'body' => '1<br>
Que grande bênção é<br>
Estarem com amor,<br>
Irmãos, ligados pela fé,<br>
Louvando ao Salvador!<br><br>
2<br>
O mundo observará<br>
Tão santa e doce paz;<br>
E admirado ficará<br>
Com a bênção que ela traz.<br><br>
3<br>
Mandaste aos teus, Jesus,<br>
Da divinal mansão,<br>
O Santo Espírito que produz<br>
Tão plena comunhão. Amém.<br>',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '184',
                'name' => '183 - Benditos laços',
                'body' => '1<br>
Benditos laços são<br>
Os do fraterno amor,<br>
Que assim em santa comunhão<br>
Nos unem no Senhor.<br><br>
2<br>
Ao mesmo trono, além,<br>
Vão nossas petições;<br>
É mútuo o gozo, e a dor também,<br>
Dos nossos corações.<br><br>
3<br>
Aqui tudo é comum:<br>
Tristeza e prazer;<br>
Em Cristo somos todos um:<br>
É este o seu querer.<br><br>
4<br>
Se desta santa união<br>
Nos vamos separar,<br>
No céu eterna comunhão<br>
Havemos de gozar.<br>',
                'audio' => '',
                'indices_id' => '28',
            ],
            [
                'id' => '185',
                'name' => '184 - Face a face',
                'body' => '1<br>
Em breve a vida vou findar,<br>
Não mais aqui eu cantarei!<br>
Nos céus, então, irei morar,<br>
Lá na presença do meu Rei.<br><br>
<strong>
E face a face vê-lo-ei,<br>
Liberto e salvo cantarei!<br>
E face a face vê-lo-ei,<br>
Liberto e salvo cantarei.<br><br>
</strong>
2<br>
E seja o dia quando for<br>
Que Deus me chame para lá,<br>
Bem certo estou que o Salvador<br>
Contente me receberá.<br><br>
3<br>
A doce voz me soará<br>
De Cristo, amável Redentor!<br>
“Fiel, bom servo, bem está,<br>
Entra no gozo do Senhor.”<br><br>
4<br>
Por meu Jesus eu vou viver<br>
E minha luz farei brilhar.<br>
De dia em dia hei de fazer<br>
O que ao meu Salvador honrar.<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '186',
                'name' => '185 - Glória vindoura',
                'body' => '1<br>
No tempo em que meu trabalho acabar<br>
E enfim de Deus a presença gozar,<br>
E quando a Cristo eu puder contemplar,<br>
Oh, quanta glória haverá com Jesus!<br><br>
<strong>
Sim, haverá glória sem par,<br>
Junto a Jesus, glória sem fim!<br>
Oh, quando a Cristo eu puder contemplar<br>
Glória, sim, glória haverá com Jesus!<br><br></strong>
2<br>
No tempo em que Cristo, o meu Redentor,<br>
Tiver de dar-me o seu “vinde!” de amor,<br>
Transposto, enfim, o meu vale de dor,<br>
Oh, quanta glória haverá com Jesus!<br><br>
3<br>
No tempo em que meus irmãos for rever<br>
Lá nos fulgores do céu - que prazer!<br>
Sim, quando junto a Jesus for viver,<br>
Oh, quanta glória haverá com Jesus!<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '187',
                'name' => '186 - O lar do céu',
                'body' => '1<br>
Oh, pensai nesse lar lá do céu,<br>
Nas gloriosas moradas de luz,<br>
Onde os crentes, felizes, desfrutam<br>
Da presença de Cristo Jesus.<br><br>
<strong>
Oh, pensai! Oh, pensai!<br>
Oh, pensai nesse lar lá do céu!<br>
Lá do céu, lá do céu, lá do céu!<br>
Oh, pensai nesse lar lá do céu!<br>
</strong><br><br>
2<br>
Oh, pensai nos amigos no céu,<br>
Que venceram a luta afinal,<br>
E nos cantos que sempre ressoam<br>
Na harmonia do lar eternal.<br><br>
3<br>
Hei de ver, lá no céu, meu Jesus,<br>
Face a face seu rosto mirar!<br>
E bem longe cuidados, tristezas,<br>
Para sempre com ele habitar.<br><br>
4<br>
Sem demora no céu estarei;<br>
Vejo o fim da jornada chegar.<br>
Meu bondoso Jesus lá me espera<br>
Para as bênçãos eternas me dar.<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '188',
                'name' => '187 - Cidade celestial ',
                'body' => '1<br>
Tenho lido da bela cidade,<br>
Situada no reino de Deus,<br>
Com seus muros de jaspe luzente,<br>
Juncada com áureos troféus!<br>
Lá no meio da praça está o rio<br>
Da vida e vigor eternal,<br>
Mas metade da glória celeste<br>
Jamais se contou ao mortal!<br><br>
<strong>
Jamais se contou ao mortal,<br>
Jamais se contou ao mortal!<br>
Metade da glória celeste<br>
Jamais se contou ao mortal!<br><br></strong>
2<br>
Tenho lido dos belos palácios<br>
Que Jesus foi no céu preparar,<br>
Onde os crentes, fiéis, mui felizes,<br>
Irão para sempre habitar;<br>
Nem tristeza, nem dor, nem velhice<br>
Atingem a mansão eternal;<br>
Mas metade da glória celeste<br>
Jamais se contou ao mortal!<br><br>
3<br>
Tenho lido das vestes brilhantes,<br>
Das coroas que os salvos terão,<br>
Quando o Pai os chamar, proclamando:<br>
“Tereis eternal galardão.”<br>
Tenho lido que os santos na glória<br>
Pisam ruas de ouro e cristal;<br>
Mas metade da glória celeste<br>
Jamais se contou ao mortal!<br><br>
4<br>
Tenho lido da história bendita<br>
De Jesus, o fiel Redentor,<br>
Que por nós padeceu no Calvário<br>
E aceita o mais vil pecador.<br>
Tenho lido do sangue vertido<br>
Que a todos redime do mal;<br>
Mas metade da glória celeste<br>
Jamais se contou ao mortal!<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '189',
                'name' => '188 - Clara luz',
                'body' => '1<br>
Quanta dor, quanta amargura<br>
Vem meu peito retalhar!<br>
Não importa,se diviso<br>
Clara luz além brilhar!<br>
Nela, cheio de esperança,<br>
Cravo os olhos tristes meus:<br>
Ela é selo e garantia<br>
Do supremo amor de Deus.<br><br>
2<br>
Deus predestinou-me e fala:<br>
“Tens em Cristo a redenção;<br>
Sou a luz dos pecadores,<br>
Dissipando a escuridão.<br>
“Vamos, vamos companheiros,<br>
Caminhemos nessa luz,<br>
Que através da escura noite<br>
Resplandece sobre a cruz<br><br>
3<br>
Eia, avante, a passos largos,<br>
Vamos, vamos sem parar!<br>
Ficará em densas trevas<br>
Quem na luz não caminhar!<br>
Pois nos mostra a bela terra<br>
Donde mana leite e mel;<br>
Essa luz jamais se apaga,<br>
Pois provém do Deus fiel.<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '190',
                'name' => '189 - Jerusalém celeste',
                'body' => '1<br>
Jerusalém celeste, de fúlgido esplendor.<br>
És vívida esperança da Igreja do Senhor!<br>
Teus muros fulgurantes avisto pela fé,<br>
E ansioso em alcançar-te mantenho-me de pé!<br><br>
2<br>
É Deus quem te ilumina, perene é tua luz;<br>
Refletes, incessante, a glória de Jesus.<br>
Que alegre canto inspiras, oh divinal mansão,<br>
Saber que és alvo eterno da peregrinação.<br><br>
3<br>
Cidade radiosa, sem noite, morte ou mal,<br>
Que neste pobre mundo atinge o que é mortal.<br>
Exulta, ó alma crente, eis teu glorioso lar,<br>
Que Cristo, redivivo, no céu foi preparar.<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '191',
                'name' => '190 - Maior que a dor',
                'body' => '1<br>
Se amarga for aqui a vida,<br>
Irmãos, volvei o vosso olhar<br>
A quem na cruz infame, erguida,<br>
Por vós sofreu sem murmurar.<br><br>
2<br>
A dor assola o mundo inteiro,<br>
Quem pode alegre sempre andar?<br>
Na vida tudo é passageiro:<br>
O sofrimento, o bem-estar.<br><br>
3<br>
Porém, o verdadeiro gozo,<br>
No céu, Jesus irá vos dar,<br>
Pois ele diz: “No lar formoso<br>
Vou preparar-vos um lugar.”<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '192',
                'name' => '191 - Rio da vida',
                'body' => '1<br>
Fonte de amor perene,<br>
Manancial de luz!<br>
Água da vida corre<br>
Do trono de Jesus!<br>
Calmo rio! Belo rio!<br>
Quero estar, também,<br>
Onde as águas sempre correm<br>
Desse rio além.<br><br>
2<br>
Muitos de nós já foram<br>
Cantar no céu louvor<br>
Com os remidos cantam<br>
A Cristo, o Redentor.<br>
Santo rio! Junto ao rio<br>
Vou cantar também,<br>
Onde as vozes nunca cessam,<br>
Na Jerusalém,<br>
3<br>
Límpida fonte corre,<br>
Brilhante corre a flux;<br>
Quem fez aquela alvura?<br>
O sangue de Jesus.<br>
Corre rio, calmo corre!<br>
Como assim a paz<br>
Em minha alma, para sempre,<br>
Corra mais e mais.<br>',
                'audio' => '',
                'indices_id' => '29',
            ],
            [
                'id' => '193',
                'name' => '192 - No céu com Jesus',
                'body' => '1<br>
Junto ao trono de Deus, preparado,<br>
Há cristão um lugar para ti;<br>
Há alegria perene ao seu lado,<br>
Há profusas delícias ali;<br>
Sim ali, sim, ali<br>
De seus anjos fiéis rodeado<br>
Numa esfera de glória e de luz,<br>
Junto ao Pai nos espera Jesus!<br><br>
2<br>
Os encantos da terra não podem<br>
Dar idéia do gozo dali!<br>
Se na terra os prazeres acodem,<br>
Tais prazeres se findam aqui.<br>
Mas ali, mas,ali<br>
As venturas eternas concorrem<br>
Com o brilho perpétuo da luz,<br>
A tornar-te feliz com Jesus.<br><br>
3<br>
Conservemos em nossa lembrança<br>
As riquezas do lindo país,<br>
E guardemos conosco a esperança<br>
Duma vida melhor, mais feliz!<br>
Pois ali, pois ali<br>
O cristão, pela fé, sempre alcança<br>
As riquezas do Reino de luz,<br>
Prometidas por Cristo Jesus.<br><br>
4<br>
Quem quiser desfrutar da ventura<br>
Que no belo país haverá,<br>
É somente pedir de alma pura,<br>
Que de graça Jesus lhe dará.<br>
Pois dali, pois dali,<br>
Todo cheio de amor, de ternura,<br>
Desse amor que mostrou lá na cruz,<br>
Nos atende, nos ouve Jesus.<br>',
                'audio' => '',
                'indices_id' => '30',
            ],
            [
                'id' => '194',
                'name' => '193 - Aspiração do céu',
                'body' => '1<br>
Vou à Pátria - eu, peregrino -,<br>
A viver eternamente com Jesus<br>
Que concedeu-me feliz destino<br>
Quando, ferido, por mim morreu na cruz.<br><br>
<strong>
Vou à Pátria - eu peregrino -<br>
A viver eternamente com Jesus!<br>
Vou à Pátria - eu, peregrino -,<br>
A viver eternamente com Jesus!<br><br></strong>
2<br>
Dor e pena, tristeza e morte<br>
Lá no céu jamais o salvo encontrará!<br>
E desfrutando de Cristo a sorte,<br>
Eternamente a Deus exaltará.<br><br>
3<br>
Terra santa, formosa e pura,<br>
Salvo por Jesus eu entrarei em ti;<br>
Felicidade, paz e ventura,<br>
Perfeitamente desfrutarei ali.<br>',
                'audio' => '',
                'indices_id' => '30',
            ],
            [
                'id' => '195',
                'name' => '194 - Morada feliz',
                'body' => '1<br>
Com Jesus há morada feliz,<br>
Prometida e segura nos céus.<br>
Avistamos o lindo País,<br>
Pela fé na Palavra de Deus.<br><br>
<strong>
Com Jesus, no porvir,<br>
Viveremos no lindo País!<br>
Com Jesus no porvir,<br>
Viveremos,no lindo País!<br><br>
</strong>
2<br>
Pacientes podemos penar,<br>
Se sofrermos por Cristo Jesus!<br>
Pois sem culpa, sem falta ou pesar,<br>
Viveremos no Reino de luz!<br><br>
3<br>
No descanso perfeito, eternal,<br>
Desfrutando o labor que passou,<br>
Cantaremos em tom triunfal,<br>
Os louvores de quem nos amou.<br> ',
                'audio' => '',
                'indices_id' => '30',
            ],
            [
                'id' => '196',
                'name' => '195 - Dormindo no Senhor',
                'body' => '1<br>
Dormindo no Senhor,<br>
Bendito é nosso irmão!<br>
Perante o trono, vencedor,<br>
Desfruta a salvação<br><br>
2<br>
Dormindo no Senhor,<br>
Liberto já do mal,<br>
Deixando o mundo e seu labor,<br>
Descansa em paz real.<br><br>
3<br>
Dormindo no Senhor<br>
Na glória de Jesus,<br>
Perante o grande redentor,<br>
Nos céus, vivendo em luz.<br><br>
4<br>
Dormindo no Senhor!<br>
É doce assim morrer!<br>
Do crente a morte sem terror,<br>
É ir com Deus viver.<br><br>
5<br>
Dormindo no Senhor!<br>
Ao pó seu corpo irá,<br>
Mas Deus, um dia, com poder<br>
O ressuscitará.<br><br>
6<br>
Os mortos viverão!<br>
E os vivos, com fulgor,<br>
Ao teu encontro subirão!<br>
Oh, vem, Jesus Senhor!<br>',
                'audio' => '',
                'indices_id' => '30',
            ],
            [
                'id' => '197',
                'name' => '196 - Gozo, esplendores, venturas',
                'body' => '1<br>
Oh, quanto gozo, esplendores, venturas,<br>
Hão de fruir as fiéis criaturas!<br>
Paz e descanso terão os cansados,<br>
Pelo Senhor serão galardoados!<br><br>
2<br>
Jerusalém, oh, celeste cidade<br>
Pátria gloriosa de felicidade;<br>
Lar ideal, sem pecado, sem jaça,<br>
Sob o império inefável da Graça!<br><br>
3<br>
Na mais completa e feliz harmonia,<br>
Regozijando em perene alegria,<br>
Nós cantaremos eternos louvores,<br>
Com gratidão ao Senhor dos senhores<br><br>
4<br>
De glória eterna, Senhor, te cobriste!<br>
Em ti, de ti e por ti tudo existe!<br>
Nós te adoramos na voz deste canto,<br>
Deus Pai, Deus Filho e Espírito Santo.<br> Amém.',
                'audio' => '',
                'indices_id' => '30',
            ],
            [
                'id' => '198',
                'name' => '197 - O salvador espera',
                'body' => '1<br>
Jesus quer entrar hoje em teu coração,<br>
E para sempre ficar.<br>
E há de outorgar-te seu pleno perdão,<br>
Quando, afinal, ele entrar.<br><br>
<strong>
Oh! Quantas vezes Jesus te chamou,<br>
E agora ele volta a chamar.<br>
Real salvação com seu sangue comprou,<br>
Para, de graça, te dar.<br><br></strong>
2<br>
Se Cristo adentrar esse teu coração,<br>
E em tua vida reinar,<br>
Que paz infinita, que satisfação<br>
Sua presença há de te dar.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '199',
                'name' => '198 - Salvação graciosa',
                'body' => '1<br>
Eis mensagem do Senhor, Aleluia!<br>
Palavras do bom Deus de amor!<br>
Cristo salva o pecador, aleluia!<br>
Salva até por meio de um olhar!<br><br>
<strong>
Oh, olhai, com fé, olhai!<br>
Sim, olhai só a Jesus!<br>
Ele salva o pecador, Aleluia!<br>
Sim, salva quem confiante olhar!<br><br></strong>
2<br>
Vossa dívida pagou, Aleluia!<br>
Jesus a satisfez na cruz.<br>
Sua vida ele entregou, Aleluia!<br>
Para vos apresentar a Deus<br><br>
3<br>
Esta oferta Cristo faz, Aleluia!<br>
Eterna vida lá nos céus.<br>
Redenção aqui vos traz, Aleluia<br>
Convertei-vos já ao Salvador!<br><br>
4<br>
Aceitai a salvação, Aleluia<br>
Segui os passos do Senhor!<br>
Anunciai o seu perdão, Aleluia!<br>
Proclamai a grande Redenção!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '200',
                'name' => '199 - Cristo salva',
                'body' => '1<br>
Cristo salva o pecador,<br>
Dá-lhe um novo coração;<br>
Ao contrito, com amor,<br>
Oferece salvação.<br><br>
<strong>
Confiai em seu poder<br>
Confiai em seu amor!<br>
Crede já que Cristo quer<br>
Libertar o pecador<br><br></strong>
2<br>
Cristo salva o pecador<br>
E concede-lhe perdão;<br>
Aceitai o bom Senhor<br>
Aceitai de coração<br><br>
3<br>
Vinde todos e achareis<br>
Plena paz no Redentor;<br>
Vinde, e então recebereis<br>
Vida eterna no Senhor.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '201',
                'name' => '200 - Palavra abençoada',
                'body' => '1<br>
Palavra abençoada,<br>
Convite que contém<br>
Promessa e cumprimento<br>
Com infinito bem.<br>
“Oh, vinde a mim!”- conclama<br>
O Cristo o Salvador,<br>
Seus braços estendendo<br>
Ao pobre pecador.<br><br>
<strong>
Vinde, oh, vinde a mim! (bis)<br>
Tristes alquebrados,<br>
Vinde, oh, vinde a mim!<br>
Vinde, oh vinde a mim! (bis)<br>
Fracos e cansados,<br>
Vinde, oh, vinde a mim!<br><br>
</strong>
2<br>
Por que viver tão longe<br>
Da graça de Jesus?<br>
Por que vagar nas trevas,<br>
Podendo andar na luz?<br>
Da vida sem proveito,<br>
Da culpa e perdição,<br>
Corramos para a senda<br>
Da eterna salvação.<br><br>
3<br>
Em tudo agora e sempre,<br>
Ouçamos o Senhor;<br>
Pois há descanso e alívio<br>
No seu profundo amor.<br>
Assim conheceremos<br>
O gozo que produz<br>
No coração submisso<br>
O “vinde” de Jesus.<br>
',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '202',
                'name' => '201 - Manso e suave',
                'body' => '1<br>
Manso e suave! Eis Jesus nos chamando:<br>
Chama por ti e por mim.<br>
Eis que ele às portas espera velando:<br>
Vela por ti e por mim!<br><br>
<strong>
Vem já! Vem já! Alma cansada, vem já!<br>
Manso e suave, Jesus convidando,<br>
Chama: “Ó pecador, vem!”<br><br>
</strong>
2<br>
Com paciência, ele está esperando<br>
Hoje por ti e por mim.<br>
Oh, não desprezes a quem, convidando,<br>
Convida a ti e a mim.!<br><br>
3<br>
O tempo corre! As horas, passando,<br>
Passam por ti e por mim!<br>
Transes de morte, por fim, vão chegando,<br>
Chegam a ti e a mim.<br><br>
4<br>
Oh, quanto amor que Jesus nos em dado:<br>
Dado a ti e a mim!<br>
Eis que foi morte, foi crucificado<br>
Morto por ti e por mim!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '203',
                'name' => '202 - Palavras preciosas',
                'body' => '1<br>
Preciosas as palavras<br>
De Jesus, eterno Rei:<br>
“Aquele que vier a mim,<br>
Eu não desprezarei.”<br><br>
2<br>
Preciosas as palavras<br>
De Jesus, eterno Rei:<br>
“Ó vós, cansados, vinde já!<br>
É suave a minha lei.”<br><br>
3<br>
Preciosas as palavras<br>
De Jesus, eterno Rei:<br>
“A porta sou, por mim entrai,<br>
Descanso vos darei.”<br><br>
4<br>
Preciosas as palavras<br>
De Jesus, eterno Rei:<br>
“Por vós o mundo já venci,<br>
Por vós a vida dei.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '204',
                'name' => '203 - Convite para a salvação',
                'body' => '1<br>
Eis, Cristo te convida; vem pecador!<br>
Concede eterna vida, vem, pecador!<br>
Hoje é tão favorável, vem, pecador!<br>
É tempo aceitável, vem, pecador!<br><br>
2<br>
Eis o ensejo agora, vem pecador!<br>
Atende sem demora, vem, pecador!<br>
Cereces desta Graça? Vem, pecador!<br>
Decide! A vida passa! Vem, pecador!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '205',
                'name' => '204 - Cristo à porta',
                'body' => '1<br>
À porta estou, ó alma triste,<br>
Ansioso por e consolar;<br>
A minha voz, enfim, ouviste,<br>
Eu vou entrar, eu vou entrar!<br><br>
<strong>
À porta, por amor levado,<br>
Procuro já teu mal sanar;<br>
Ó pecador desalentado,<br>
Eu vou entrar, eu vou entrar!<br><br>
</strong>
2<br>
Por ti foi grande o meu castigo,<br>
Sofri na cruz sem murmurar!<br>
Só para teres paz comigo,<br>
Eu vou entrar, eu vou entrar!<br><br>
3<br>
A minha graça poderosa<br>
O teu pecado vem lavar!<br>
Ó alma impura, pesarosa,<br>
Eu vou entrar, eu vou entrar!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '206',
                'name' => '205 - O amor que chama',
                'body' => '1<br>
Não vos demoreis, Jesus vos chama,<br>
Ele chama com amor.<br>
Não vos demoreis, Jesus vos ama,<br>
Ele acalma a vossa dor.<br><br>
<strong>
Não vos demoreis!<br>
Não vos demoreis!<br>
Vinde sem temor!<br>
Quem vos chama é Jesus,<br>
Quem morreu por nós na cruz.<br><br>
</strong>
2<br>
Não vos demoreis, perdão alcança<br>
Quem confia no Senhor.<br>
Não vos demoreis, e, sem tardança,<br>
Recebei o Redentor.<br><br>
3<br>
Não vos demoreis, Jesus foi morto<br>
Em lugar do pecador.<br>
Não vos demoreis, real conforto<br>
Quer vos dar o Salvador.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '207',
                'name' => '206 - Convite de jesus',
                'body' => '1<br>
Triste estás, cansado, aflito,<br>
Sem vigor, sem luz?<br>
“Vem a mim!” Eis o convite de Jesus!<br><br>
2<br>
“Quais as marcas que me apontam<br>
Seu real perdão?”<br>
Nos seus pés, nas mãos, no lado se acharão!<br><br>
3<br>
“Traz coroa de monarca?<br>
Veste de esplendor”<br>
Tem coroa, sim, de espinhos, sangue e dor.<br><br>
4<br>
“Quando o vir e então segui-lo,<br>
Recompensará?”<br>
Não! Jamais a infinda graça vai falhar!<br><br>
5<br>
“Se constante o obedeço,<br>
Galardão terei?”<br>
Sim, terás, e boas-vindas do teu Rei!<br><br>
6<br>
“Se confio na Palavra,<br>
Salvará, por fim?”<br>
Anjos, santos e o universo bradam: “Sim.”<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '208',
                'name' => '207 - Convite ao pecador',
                'body' => '1<br>
Vem a Cristo, mesmo agora,<br>
Vem assim como estás!<br>
Que dele, sem demora,<br>
O perdão obterás.<br><br>
2<br>
Crê em Cristo, sem detença,<br>
Foi por nós que morreu!<br>
E só por esta crença<br>
Tens entrada no céu.<br><br>
3<br>
Ele almeja receber-te,<br>
Tua vida salvar,<br>
Pois quer consigo ver-te<br>
E contigo habitar.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '209',
                'name' => '208 - Aproximação',
                'body' => '1<br>
Chegai-vos ao Senhor com puro coração.<br>
Ouvi palavras de favor, a voz da salvação!<br>
É Deus quem fala aqui, na sua santa lei;<br>
Humildes, pois, a ele ouvi e sempre obedecei.<br><br>
2<br>
Entendimento dá a quem com fé pedir.<br>
Com paciência guiará a todo que o seguir.<br>
As trevas dissipou, rasgou o escuro véu,<br>
A luz divina derramou, por ela vinde ao céu.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '210',
                'name' => '209 - Encorajamento',
                'body' => '1<br>
Medo tens que o adversário vá vencer?<br>
Luz te falta e onde estás não podes ver?<br>
Abre o coração, que Cristo vai entrar,<br>
E o sol em ti raiar.<br><br>
<strong>
Deixa a luz do céu entrar,<br>
Deixa o sol em ti nascer;<br>
Abre o coração que, Cristo vai entrar,<br>
E o sol em ti nascer.<br><br></strong>
2<br>
Tu não tens ainda fé no Salvador?<br>
Deus não ouve as tuas preces com favor?<br>
Abre o coração, que Cristo vai entrar,<br>
E o sol em ti raiar.<br><br>
3<br>
Queres ir andando alegre para o céu<br>
Ignorando todo o negro e denso véu?<br>
Abre o coração, que Cristo vai entrar,<br>
E o sol em ti raiar.<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '211',
                'name' => '210 - O filho perdido',
                'body' => '1<br>
Vem, filho perdido, ó pródigo, vem!<br>
Ruína te espera nas trevas além.<br>
Tu de medo, tremendo, e faminto, gemendo,<br>
Ó filho perdido, vem, pródigo, vem!<br><br>
<strong>
Vem, vem! Ó pródigo, vem!<br><br>
</strong>
2<br>
Vem, filho perdido! Ó pródigo, vem!<br>
Teu Pai te convida, querendo-te bem!<br>
Vestes há para ornar-te, ricos dons: vem fartar-te!<br>
Ó filho perdido, vem, pródigo, vem!<br><br>
3<br>
Vem, filho perdido! Oh, volta a Jesus<br>
Bondade infinita se avista na cruz.<br>
Em miséria vagando, tuas culpas chorando,<br>
Ó filho perdido, vem, pródigo, vem!<br><br>
4<br>
Ó pródigo, escuta a voz do Senhor!<br>
Oh, rompe as ciladas do vil tentador!<br>
Em teu lar há bastante, e tu vagas errante!<br>
Ó filho perdido, vem, pródigo,vem!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '212',
                'name' => '211 - Quase induzido',
                'body' => '1<br>
Quase induzido a crer em Jesus;<br>
Quase induzi-do a andar na luz!<br>
Pensas em replicar:<br>
“Quando tiver vagar,<br>
Irei, então, buscar o Redentor.”<br><br>
2<br>
Quase induzido, oh, coração!<br>
Quase induzi-do, oh, ilusão!<br>
Hoje o bom Salvador,<br>
Com voz de terno amor,<br>
Quer dar ao pecador a sua paz.<br><br>
3<br>
Quase induzido, não queres crer?<br>
Quase induzi-do, vem sem temer!<br>
“Quase” não servirá;<br>
“Quase” te afastará!<br>
“Quase” te lançará na perdição!<br>',
                'audio' => '',
                'indices_id' => '31',
            ],
            [
                'id' => '213',
                'name' => '212 - Apelo',
                'body' => '1<br>
Alma, escuta o bom Senhor<br>
A Jesus, o Salvador.<br>
Ele diz com terno amor:<br>
“Tu me amas, pecador?”<br>
Das prisões te soltarei,<br>
As feridas curarei!<br>
Vim do céu por teu amor;<br>
“Tu me amas, pecador?<br><br>
2<br>
“Minha glória tu verás,<br>
Minha graça gozarás!<br>
Vida eterna te darei,<br>
Não te desampararei!”<br>
Ajudar-me vem, Senhor!<br>
A entregar-te o meu amor!<br>
Faze, ó bom Jesus, que assim<br>
Sejas Tu que viva em mim. Amém<br>',
                'audio' => '',
                'indices_id' => '32',
            ],
            [
                'id' => '214',
                'name' => '213 - A última hora',
                'body' => '1<br>
Ao findar o labor desta vida,<br>
Quando a morte ao teu lado chegar,<br>
Que destino há de ter a tua alma?<br>
Qual será, no futuro, teu lar?<br><br>
<strong>
Meu amigo, hoje tens a escolha:<br>
Vida ou morte, qual vais aceitar?<br>
Amanhã pode ser muito tarde,<br>
Hoje Cristo te quer libertar.<br><br>
</strong>
2<br>
Tu procuras a paz neste mundo<br>
Em prazeres que passam em vão,<br>
Mas na última hora da vida,<br>
Tais prazeres valor não terão.<br><br>
3<br>
Muitas vezes tu riste, ó amigo,<br>
Ao ouvires falar de Jesus.<br>
Mas somente o Senhor pode dar-te<br>
Salvação, pela morte na cruz.<br><br>
4<br>
Com tua alma em pecado não podes<br>
Adentrar as moradas de Deus.<br>
Mas aquele quem Deus tornou limpo,<br>
Gozará das venturas dos céus!<br><br>
5<br>
Se quiseres deixar teus pecados<br>
E entregar-te hoje mesmo a Jesus,<br>
Hás de ter, nesta vida e na morte,<br>
Um brilhante caminho de luz.<br>',
                'audio' => '',
                'indices_id' => '32',
            ],
            [
                'id' => '215',
                'name' => '214 - Convite e aceitação',
                'body' => '1<br>
Ouço meu Senhor dizer:<br>
“Tuas forças débeis são,<br>
Nada podes merecer;<br>
Eu te dou a salvação.<br><br>
<strong>
A ti, Senhor Jesus,<br>
Venho como estou;<br>
Pois sem nada merecer,<br>
Teu sangue me salvou.<br><br></strong>
2<br>
Sim, eu venho a ti, Senhor,<br>
Tua graça receber;<br>
Infinito é o teu amor,<br>
Sem limite o teu poder.<br><br>
3<br>
Quando estou em aflições,<br>
Tu és meu Consolador;<br>
Quando exposto às tentações,<br>
Meu auxílio e protetor.<br><br>
4<br>
Lá na glória cantarei<br>
Tua eterna salvação;<br>
Junto ao trono renderei<br>
Meu louvor e gratidão.<br> Amém.',
                'audio' => '',
                'indices_id' => '32',
            ],
            [
                'id' => '216',
                'name' => '215 - Apelo',
                'body' => '1<br>
Jesus, estás à porta<br>
Do aflito coração!<br>
E queres fazer nele<br>
Perene habitação.<br>
Cristãos jamais seremos,<br>
Nem filhos do Senhor,<br>
Se não fizer morada<br>
Em nós o Salvador.<br><br>
2<br>
Jesus, estás batendo<br>
Com traspassada mão!<br>
Espinhos tens na fronte,<br>
Nos olhos compaixão!<br>
Com amor incompreensível<br>
Esperas sem cansar!<br>
Por causa do pecado<br>
Não podes Tu entrar!<br><br>
3<br>
Jesus, nos amas tanto,<br>
Bondoso é teu olhar!<br>
Sofreste no Calvário<br>
A fim de nos salvar!<br>
Senhor, com fé abrimos<br>
O nosso coração!<br>
Oh, entra e faze nele<br>
Eterna habitação! Amém.<br>',
                'audio' => '',
                'indices_id' => '32',
            ],
            [
                'id' => '217',
                'name' => '216 - Perdão',
                'body' => '1<br>
Acharei mercê em Deus?<br>
Pode ainda perdoar?<br>
Esquecer pecados meus?<br>
Minha vida transformar?<br><br>
2<br>
Eu que sempre resisti,<br>
Sua ira suscitei,<br>
Seus apelos não ouvi,<br>
Transgredi a sua Lei!<br><br>
3<br>
Arrependo-me, Senhor,<br>
Tenho ao mal grande aversão!<br>
Sinto nalma intenso horror<br>
Posso ter o teu perdão?<br><br>
4<br>
Mansamente diz Jesus:<br>
“Quero a paz te conceder!<br>
A salvar-te fui à cruz,<br>
Salvo estás, se podes crer.”<br><br>
5
Sim, eu creio e salvo estou!<br>
Reina gozo lá no céu,<br>
Pois a Nova já chegou<br>
De mais um que nele creu.<br>',
                'audio' => '',
                'indices_id' => '32',
            ],
            [
                'id' => '218',
                'name' => '217 - Desprendimento',
                'body' => '1<br>
Tal como estou, sem me esquivar,<br>
Me entrego a quem me quis salvar.<br>
Pois padeceste em meu lugar,<br>
Ó Salvador, eu venho a ti.<br><br>
2<br>
Tal como estou, sem esperar<br>
Das manchas todas livre estar,<br>
Pureza venho em ti buscar,<br>
Ó Salvador, eu venho a ti.<br><br>
3<br>
Tal como estou, sem direção,<br>
Confuso, em grande comoção,<br>
Temendo, em luta a tentação;<br>
Ó Salvador, eu venho a ti.<br><br>
4<br>
Tal como estou, na escuridão<br>
Me estendes tua santa mão,<br>
E em ti encontro a salvação;<br>
Ó Salvador, eu venho a ti.<br><br>
5<br>
Tal como estou me acolherás,<br>
Pureza e alívio me darás!<br>
Tu prometeste e cumprirás;<br>
Ó Salvador, eu venho a ti.<br><br>
6<br>
Tal como estou, por teu amor<br>
Saí das garras do opressor!<br>
E teu somente sou, Senhor;<br>
Ó Salvador, eu venho a ti. <br>Amém.',
                'audio' => '',
                'indices_id' => '33',
            ],
            [
                'id' => '219',
                'name' => '218 - Vontade soberana',
                'body' => '1<br>
Tua vontade faze, ó Senhor!<br>
Eu sou feitura, tu és o Autor.<br>
Molda e refaze todo meu ser,<br>
Segundo as normas do teu querer<br><br>
2<br>
Tua vontade faze, ó meu Deus!<br>
Sonda e corrige os passos meus!<br>
Torna-me santo porque Tu és!<br>
Ouve os meus rogos, eis-me aos teus pés.<br><br>
3<br>
Tua vontade faze, ó meu Pai!<br>
Por ela o crente vive e não cai.<br>
Guia-me a vida com tua luz!<br>
Poder e graça dá-me em Jesus.<br><br>
4<br>
Tua vontade, boa e sem par<br>
Quero na vida realizar.<br>
Vive, triunfa, domina, enfim,<br>
Reina, supremo, meu Deus, em mim!<br> Amém.',
                'audio' => '',
                'indices_id' => '33',
            ],
            [
                'id' => '220',
                'name' => '219 - Dedicação',
                'body' => '1<br>
Sofreste, ó meu Senhor, na amarga cruz,<br>
E derramaste ali teu sangue a flux;<br>
Que resgatou minha alma dos pecados meus<br>
E deu-me o céu de luz!<br><br>
2<br>
Agora, ó Salvador, quero te honrar,<br>
E, enquanto aqui viver, sempre te amar!<br>
E dando provas desse amor, meu coração<br>
Desejo consagrar.<br><br>
3<br>
Aceita, ó terno Deus, a adoração<br>
Que oferto a ti, Senhor, com devoção.<br>
Deponho, então, a teus pés, para sempre, ó Pai,<br>
A eterna gra-tidão. Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '221',
                'name' => '220 - Plena dedicação',
                'body' => '1<br>
Sobre a cruz Jesus comprou-me,<br>
Corpo e alma, todo o ser.<br>
Hoje e sempre, inteiramente,<br>
Quero e ele pertencer.<br><br>
<strong>
Meu Senhor! Meu Senhor!<br>
Sempre a ti pertencerei.<br><br>
</strong>
2<br>
Os meus olhos guia sempre,<br>
Consagrando-os a Jesus!<br>
Da vaidade bem distantes,<br>
Faze-os ver celeste luz<br><br>
3<br>
Oh! Dispõe o meu ouvido<br>
A fechar-se para o mal,<br>
Atendendo ao teu ensino<br>
Com respeito filial.<br><br>
4<br>
Torna, ó Deus, a língua serva<br>
De Jesus, meu grande Rei!<br>
Põe palavras nos meus lábios,<br>
E teu nome exaltarei.<br><br>
5
Minhas mãos, Senhor, emprega<br>
No serviço que convém<br>
Diligentes para o Mestre,<br>
Trabalhando em todo o bem!<br><br>
6<br>
Os meus pés sustenta sempre,<br>
Firmes, nos caminhos teus.<br>
Nos sagrados mandamentos<br>
Consolida os passos meus.<br><br>
7<br>
Que ventura pertencer-te!<br>
Ouve a minha petição:<br>
Vem, Senhor, supremo Amigo,<br>
Dominar meu coração! Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '222',
                'name' => '221 - Um vaso de benção',
                'body' => '1<br>
Quero ser um vaso de bênção,<br>
Sim, um vaso escolhido de Deus,<br>
Para as novas levar aos perdidos,<br>
Boas-novas que vêm lá dos céus.<br><br>
<strong>
Faze-me vaso de bênção, Senhor<br>
Vaso que leve a mensagem de amor!<br>
Eis-me submisso, e ao teu serviço<br>
Eu me consagro, bendito Senhor!<br><br></strong>
2<br>
Quero ser um vaso de bênção,<br>
Para todos os dias fazer<br>
Os culpados que vivem nas trevas<br>
O perdão de Jesus conhecer.<br><br>
3<br>
Quero ser um vaso de bênção,<br>
Sim, um vaso de bênção sem par,<br>
Anunciando que os crentes em Cristo<br>
Jubilosos nos céus hão de entrar.<br><br>
4<br>
Para ser um vaso de benção<br>
É mister uma vida real,<br>
Uma vida de fé e pureza,<br>
Revestida de amor divinal.<br> Amém.',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '223',
                'name' => '222 - Mais perto da cruz',
                'body' => '1<br>
Meu Senhor, sou teu, tua voz ouvi<br>
A chamar-me com amor!<br>
E contigo sempre desejo estar,<br>
Ó bendito Salvador!<br><br>
<strong>
Mais perto da tua cruz<br>
Quero estar, ó Salvador!<br>
Mais perto da tua cruz<br>
Eu desejo estar, Senhor.<br><br></strong>
2<br>
A seguir-te sempre, eu me decidi,<br>
Constrangido pelo amor!<br>
Jubiloso, pois me declaro teu,<br>
Sem reservas, meu Senhor.<br><br>
3<br>
Que prazer sem par, que delícia é<br>
Aos teus santos pés me achar!<br>
E com viva fé e profundo amor,<br>
Com meu Salvador falar. Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '224',
                'name' => '223 - Oração do arrependido',
                'body' => '1<br>
Convencido estou, ó Cristo<br>
De que o mundo é sempre vão.<br>
Quero, pois, viver contigo,<br>
Sempre em doce comunhão<br><br>
<strong>
Toma, ó Salvador,<br>
Minha débil mão!<br>
Pois viver contigo eu quero<br>
Sempre em comunhão!<br><br></strong>
2<br>
Quanta dor, tristeza imensa,<br>
Sinto, ó Deus, ao me lembrar<br>
Que vivi por tanto tempo,<br>
Tua causa a desprezar!<br><br>
3<br>
Não mais quero a vida inglória,<br>
Onde, incauto, me abismei.<br>
Na doutrina do evangelho,<br>
De hoje em diante eu viverei!<br><br>
4<br>
Quero os dons que me outorgaste<br>
Empregar no teu labor,<br>
Trabalhando em tua Igreja,<br>
Bem firmado em teu amor. Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '225',
                'name' => '224 - Consagração',
                'body' => '1<br>
A ti seja consagrada<br>
Minha vida, ó meu Senhor!<br>
Meus momentos e meus dias<br>
Sejam só em teu louvor.<br><br>
2<br>
Sempre minhas mãos se movam<br>
Com presteza e com amor!<br>
E meus pés velozes corram<br>
Ao serviço do Senhor.<br><br>
3<br>
Minha voz, Jesus aceita,<br>
Para o teu louvor cantar!<br>
Faze que meus lábios possam<br>
A mensagem proclamar.<br><br>
4<br>
Os meus bens quero ofertar-te,<br>
Nada quero te esconder;<br>
Minha inteligência guia<br>
Sob a luz do teu saber.<br><br>
5<br>
A vontade minha toma<br>
Sujeitando-a a ti, Senhor<br>
Do meu coração fazendo<br>
O teu trono, ó Salvador!<br><br>
6<br>
Meu anelo, meu desejo,<br>
Sejam só teu nome honrar!<br>
Que meu ser completo eu possa,<br>
Ó Jesus, te consagrar! Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '226',
                'name' => '225 - Dedicação pessoal',
                'body' => '1<br>
Eis-me, ó Salvador, aqui!<br>
Corpo e alma oferto a ti!<br>
Servo inútil, sem valor,<br>
Mas pertenço a meu Senhor!<br><br>
2<br>
Fraco em obra e no pensar;<br>
Mui propenso a tropeçar;<br>
Salvo estou por teu amor<br>
E me voto a ti Senhor!<br><br>
3<br>
Subjugado em todo ser,<br>
Me submeto ao teu poder!<br>
Grande é o preço do perdão,<br>
Dá-me igual consagração!<br><br>
4<br>
Eu, remido pecador,<br>
Me dedico ao Redentor.<br>
Teu é este coração,<br>
Teu em plena sujeição! Amém.<br>',
                'audio' => '',
                'indices_id' => '34',
            ],
            [
                'id' => '227',
                'name' => '226 - A história de Cristo',
                'body' => 'Conta-me a história de Cristo,<br>
Grava-a no meu coração!<br>
Conta-me a história inaudita<br>
De graça, paz e perdão.<br>
Conta como ele, encarnado,<br>
Veio no mundo morar;<br>
Aos pecadores indignos,<br>
De Deus o amor revelar.<br><br>
2<br>
Conta como ele, bondoso,<br>
Nunca a ninguém rejeitou,!<br>
Como, de mãos estendidas,<br>
Todos a si convidou!<br>
Como não pode o bom Mestre<br>
Seja a quem for rejeitar,<br>
Se, convencido e contrito,<br>
O seu convite aceitar!<br><br>
3<br>
Conta-me quando, no monte,<br>
Sobre a cidade chorou,<br>
Pois, orgulhosa e rebelde,<br>
O seu amor rejeitou.<br>
Conta como ele ainda chora<br>
Sobre os que seguem o mal,<br>
E, endurecidos, resistem<br>
Ao seu amor divinal.<br><br>
4<br>
Conta-me as duras afrontas<br>
Que mansamente sofreu!<br>
Como na cruz, levantado,<br>
Ele por ímpios morreu!<br>
Dá-me o viver na certeza<br>
De que foi mesmo por mim,<br>
Que seu amor inefável<br>
Não tem mudança nem fim.<br>',
                'audio' => '',
                'indices_id' => '35',
            ],
            [
                'id' => '228',
                'name' => '227 - A velha história',
                'body' => '1<br>
Conta-me a velha história<br>
Do grande Salvador,<br>
De Cristo e sua vida,<br>
De Cristo e seu amor.<br>
Com pausa e paciência,<br>
Pois quero penetrar<br>
A altura do mistério,<br>
Que Deus me pode amar.<br><br>
<strong>
Conta-me a velha história,<br>
Que fala ao coração,<br>
De Cristo e sua glória,<br>
De Cristo e seu perdão!<br><br>
</strong>
2<br>
Fala-me com ternura<br>
Do amado Redentor,<br>
A mim que tanto sofro<br>
Por ser um pecador.<br>
Oh, que consolo traz-me<br>
Em tempos de aflição,<br>
Ouvir a velha história<br>
Que alegra o coração!<br><br>
3<br>
Se o brilho deste mundo<br>
Toldar dos céus a luz<br>
Oh, narra com ternura<br>
A história de Jesus!<br>
E quando, enfim, a aurora<br>
Do mundo além raiar,<br>
Recorda a velha história,<br>
Que Deus me quis salvar!<br>',
                'audio' => '',
                'indices_id' => '35',
            ],
            [
                'id' => '229',
                'name' => '228 - De deus, o ungido',
                'body' => '1<br>
Saudai de Deus, o Ungido,<br>
O Filho de Davi;<br>
Saudai o Prometi-do<br>
Que vem reinar aqui!<br>
As garras da maldade<br>
Partiu e nos livrou!<br>
E um reino de equidade<br>
No mundo, então, criou!<br><br>
2<br>
O Justo, em sofrimento,<br>
Socorre com amor;<br>
Aos pobres dá sustento<br>
E aos fracos dá vigor.<br>
Aos tristes dá alegria,<br>
Desfaz a escuridão,<br>
E ao que pereceria<br>
Outorga a salvação.<br><br>
3<br>
No trono glorioso<br>
Então se assentará!<br>
Das eras vitorioso,<br>
Bendito reinará<br>
Concerto permanente<br>
Conosco irá guardar<br>
Seu nome, eternamente,<br>
Traduz amor sem par.<br>',
                'audio' => '',
                'indices_id' => '35',
            ],
            [
                'id' => '230',
                'name' => '229 - Boas-novas',
                'body' => '1<br>
Eu venho a vós, dos altos céus,<br>
Com boas-novas do meu Rei<br>
Maravilhoso e grande Deus!<br>
Ouvi-me: A história contarei.<br><br>
2<br>
Um pequenino vos nasceu<br>
Da virgem mãe, há tempo atrás.<br>
Com ele Deus ao mundo deu<br>
Amor e vida, gozo e paz.<br><br>
3<br>
Comigo vem, meu bom Jesus,<br>
Escolhe, como berço teu,<br>
Meu coração, e em tua luz<br>
Por certo alcançarei o céu.<br><br>
4<br>
Eterna glória ao nosso Deus,<br>
Que veio em Cristo nos salvar.<br>
Alegres anjos vêm dos céus<br>
Um novo dia anunciar!<br>',
                'audio' => '',
                'indices_id' => '35',
            ],
            [
                'id' => '231',
                'name' => '230 - Adoração',
                'body' => '1<br>
Oh, vinde fiéis, triunfantes e alegres,<br>
Sim, vinde a Belém, já movidos de amor!<br>
Nasceu vosso Rei, o Messias prometido,<br><br>
<strong>
Oh, vinde adoremos! Oh vinde adoremos!
Oh, vinde adoremos ao nosso Senhor!<br><br>
</strong>
2<br>
Olhai, admirados, a sua humildade,<br>
Os anjos o louvam com grande fervor!<br>
Pois veio conosco habitar, encarnado,<br><br>
3<br>
Por nós, das alturas celestes baixando,<br>
Em forma de servo se fez,por amor!<br>
E em glórias a vida nos dá, sempiterna,<br><br>
4<br>
Nos céus adorai-o, vós anjos, em coro,<br>
E todos na terra lhe rendam louvor!<br>
A Deus honra e glória contentes rendamos,<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '232',
                'name' => '231 - O Primeiro natal',
                'body' => '1<br>
Eis que um anjo proclamou o primeiro Natal,<br>
A uns pobres pastores ao pé de Belém<br>
Que, nos campos, a guardar seu rebanho, afinal,<br>
Suportavam, da noite, o frio também.<br>
<strong>
Natal! Natal! Natal! Natal!<br>
É vindo ao mundo o Rei divinal!<br><br>
</strong>
2<br>
De repente, lá no céu, linda estrela surgiu,<br>
E no oriente brilhou com estranho fulgor.<br>
Veio à terra forte luz, que do céu lhe caiu,<br>
Muitas noites, ainda, em fulgente esplendor.<br><br>
3<br>
Tal estrela apareceu e os magos guiou<br>
Pela estrada a Belém, rumo certo os conduz.<br>
E chegando ali, por fim, a estrela parou,<br>
Mesmo acima da casa em que estava Jesus.<br><br>
4<br>
E os magos, com afã e sublime temor,<br>
Os joelhos dobraram naquele lugar,<br>
Para ofertas liberais, e de raro valor,<br>
Qual incenso, ouro e mirra, ao Menino entregar.<br><br>
5<br>
E como eles vimos nós, com intenso fervor,<br>
Dar louvores sinceros a quem nos amou;<br>
Adorar de coração o Supremo Senhor<br>
Que, morrendo na cruz, nossas almas salvou!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '233',
                'name' => '232 - Pequena vila de Belém',
                'body' => '1<br>
Pequena vila de Belém,<br>
Repousa em teu dormir,<br>
Enquanto os astros lá no céu<br>
Estão a refulgir.<br>
Porém, nas tuas trevas<br>
Resplende eterna luz,<br>
Incomparável, divinal:<br>
Nasceu o bom Jesus!<br><br>
2<br>
Da virgem mãe nasceu Jesus!<br>
Vós anjos proclamai<br>
As boas-novas lá dos céus,<br>
E a Deus louvores dai!<br>
Estrelas matutinas,<br>
Em hinos de louvor,<br>
Aos anjos e homens proclamai<br>
De Deus o eterno amor.<br><br>
3<br>
O dom glorioso, divinal<br>
Nenhum estrondo faz,<br>
Assim, aos homens, o Senhor<br>
Concede graça e paz.<br>
Sereno e sem alarde<br>
Vem ele ao mundo assim,<br>
Trazendo aos homens Redenção,<br>
Amor e paz sem fim.<br><br>
4<br>
Oh! Vem morar nos corações,<br>
Divino Rei, Jesus,<br>
E faze-os entrever no céu<br>
Visões da tua luz.<br>
Ali proclamam anjos<br>
De Deus o amor fiel!<br>
Oh! Vem, Senhor, aqui reinar,<br>
Eterno Emanuel. Amém.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '234',
                'name' => '233 - Os pastores no campo',
                'body' => '1<br>
No campo, o rebanho guardando,<br>
Os pastores, deitados no chão,<br>
Mal se vê pela luz das estrelas,<br>
Que ao redor as ovelhas estão.<br>
De repente, um clarão tudo envolve,<br>
Quando lá das alturas dos céus<br>
Desce um anjo, fulgente de glória,<br>
Cantando em louvor a Deus!<br>
No primeiro Natal, eis que um anjo<br>
Gloriosa mensagem nos traz:<br><br>
<strong>
“Glória a Deus nas altu-ras,<br>
Na terra acordo e paz!”<br><br></strong>
2<br>
“Boas-novas alegres vos trago;<br>
Em Belém Jesus Cristo nasceu!”<br>
Logo após, lindo coro de anjos<br>
Aparece cantando no céu.<br>
Oh, jamais tão bendita mensagem<br>
Aos ouvidos de todos soou,<br>
Nem tão doce e divina harmonia<br>
O próprio céu enlevou.<br>
Oh, bem-vindo o Evangelho a este mundo<br>
Que em pecado e miséria ainda jaz.<br><br>
3<br>
À cidade vão logo os pastores,<br>
Para verem de perto Jesus!<br>
No presépio, o Menino contemplam,<br>
Que, do mundo, é a lídima Luz.<br>
As estrelas parecem unir-se<br>
Ao celeste conjunto a cantar:<br>
“Em Belém, de Davi a cidade,<br>
Nasceu quem vos vem salvar!”<br>
Como cantam! E cremos que nunca<br>
Desse canto ouviremos assaz!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '235',
                'name' => '234 - Um pequeno a repousar',
                'body' => '1<br>
Quem é o pequeno a repousar<br>
Nos braços de Maria,<br>
A quem os anjos vêm cantar<br>
Os hinos de alegria?<br><br>
<strong>
É este Jesus o Rei que anuncia a paz<br>
A quem Deus quer bem.<br>
Da virgem eleita é o filho, Jesus,<br>
Que nasceu em Belém!<br><br></strong>
2<br>
Por que tão pobre fora, então<br>
A sua estrebaria?<br>
É que ao pobre pecador<br>
O verbo a paz traria!<br><br>
3<br>
Trazei a ele o coração,<br>
Prostrai-vos reverentes,<br>
Aos pés do Rei, que a salvação<br>
Nos trouxe eternamente!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '236',
                'name' => '235 - O anjo da paz',
                'body' => '1<br>
Um anjo formoso desceu das alturas,<br>
Na fresca doçura da noite, em Belém.<br>
E a luz fulgurante brilhou nas colinas,<br>
Encheu as campinas e vales também.<br><br>
2<br>
A doce mensagem que o anjo trazia,<br>
De grande alegria, de amor divinal,<br>
Encheu de esperanças a vida do crente,<br>
Feliz toda gente naquele Natal!<br><br>
3<br>
Se há sombras de medo e o mundo se empenha<br>
Em luta ferrenha de ao bem se opor,<br>
Mal surge dezembro, e eis outro clima,<br>
Pois vem lá de cima bafejos de amor.<br><br>
4<br>
É o anjo formoso que vem, novamente,<br>
Lançar a semente do amor divinal,<br>
Trazendo a este mundo canções de alegria,<br>
Na santa harmonia que inspira o Natal.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '237',
                'name' => '236 - Em linda noite',
                'body' => '1<br>
Em linda noite o mundo, a nós<br>
Em coro angelical,<br>
Com harpas de ouro, o céu quis dar<br>
Um canto divinal.<br>
E a toda a terra, então, se fez<br>
Promessas imortais<br>
De glória a Deus, aos homens paz,<br>
Com bênçãos eternais.<br><br>
2<br>
Pairando sobre a terra estão<br>
Os anjos a cantar,<br>
E sobre o mundo pecador<br>
Derramam luz sem par.<br>
Acima dos tormentos mil,<br>
Angústias do viver,<br>
Proclamam vida perenal,<br>
Pois bênçãos vêm trazer.<br><br>
3<br>
E vão-se os dias sem cessar,<br>
Segundo a voz de Deus,<br>
Mas sobre a terra as gerações<br>
Caminham rumos seus!<br>
E quando, enfim, reinar a paz<br>
De Cristo, o Salvador,<br>
Os salvos todos cantarão<br>
Em coro o seu louvor!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '238',
                'name' => '237 - Jesus nasceu',
                'body' => '1<br>
Vinde cantai Jesus nasceu!<br>
À terra a luz desceu!<br>
A graça infinda ao mundo vem<br>
Na gruta de Belém, na gruta de Belém,<br>
Jesus, o Amado, o Sumo Bem!<br><br>
2<br>
Sim proclamai em derredor,<br>
Que foi por grande amor<br>
Que à terra veio o Sumo Bem,<br>
Na gruta de Belém, na gruta de Belém,<br>
Jesus, humilde, ao mundo vem.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '239',
                'name' => '237-A  - Linda estrela',
                'body' => '1<br>
Oh, linda estrela! Fulgor cintilante!<br>
Rumo nas trevas teu brilho nos dá;<br>
Vem conduzir-nos, ó lume divino,<br>
Para onde o Infante nascido já está.<br><br>
2<br>
Gotas de orvalho no berço rebrilham;<br>
Na manjedoura, sozinho, ele jaz.<br>
Anjos o adoram, real maravilha!<br>
Deus sempiterno do reino de paz.<br><br>
3<br>
Que lhe traremos, que pias ofertas?<br>
Raros odores? Presentes de luz?<br>
Pérolas puras de mares longínquos ?<br>
Mirra da Arábia? Tesouros de Ormuz?<br><br>
4<br>
São todas vãs as ofertas mundanas,<br>
Ouro não pode comprar seu favor!<br>
Cristo, porém, de nós todos aceita<br>
As ofertas sinceras de amor!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '240',
                'name' => '238 - Novas de amor',
                'body' => '1<br>
Harmonias pelo ar,
Uma estrela no céu,
Uma prece de mãe,
Um infante a chorar,
São começos da história
Que muito nos diz:
Rude berço em Belém,
Mas de glória sem par.<br><br>
2<br>
Toda gente já ouviu<br>
Dessa nova de amor<br>
Pois o brilho da estrela<br>
É de luz sem igual...<br>
Há louvores de gozo,<br>
Há promessas de paz.<br>
Pois no berço, em Belém,<br>
Dorme um Rei divinal.<br><br>
3<br>
Nos fulgores da estrela<br>
Há mensagens dos céus<br>
Que nos homens despertam<br>
Imenso prazer<br>
Cada lar se bendiz<br>
E proclama esse bem,<br>
Anunciando às nações<br>
O divino querer!<br><br>
4<br>
Hoje o mundo já pode<br>
Esse dom repetir,<br>
Com mil graças a Deus<br>
Pelo santo Natal.<br>
Pois no berço, em Belém,<br>
Manjedoura de luz,<br>
Eis o Deus Salvador,<br>
Esse humano imortal.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '241',
                'name' => '239 - Nasce Jesus',
                'body' => '1<br>
Nasce Jesus! Fonte de luz<br>
Descem os anjos cantando.<br>
Nasce Jesus! É nossa luz<br>
Que as trevas vem dissipando!<br>
Nasce Jesus! Nasce Jesus!<br>
Eis a mensagem celeste!<br>
Raia a luz da Salvação, triunfante vem!<br>
Salve, ó Cristo! Firma teu justo império!<br>
Gratos louvores homens e anjos dêem!<br><br>
<strong>
Nasce Jesus! Nasce Jesus!<br>
Glória a Deus nas alturas!<br>
Paz na terra, graça e amor<br>
A quantos Deus quer bem!<br><br></strong>
2<br>
Deus nos amou! Deus nos mandou<br>
Cristo, seu Filho amado!<br>
Deus nos amou! Deus se encarnou!<br>
Vede o menino deitado!<br>
Deus nos amou! Deus nos amou!<br>
Digam-no todos os povos!<br>
Gozam paz e salvação todos os que crêem.<br>
Reino bendito! Reino de amor divino!<br>
Gratos louvores homens e anjos dêem!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '242',
                'name' => '240 - Louvor angelical',
                'body' => '1<br>
Eis dos anjos a harmonia!<br>
Cantam glória ao Rei Jesus.<br>
Paz aos homens que alegria!<br>
Paz com Deus em plena luz.<br>
Ouçam povos, exultantes,<br>
Ergam Salmos triunfantes,<br>
Aclamando seu Senhor.<br>
Nasce Cristo, o Redentor!<br><br>
<strong>
Exultai, ó terra e céus,<br>
Dando glória ao Homem-Deus!<br><br></strong>
2<br>
Cristo eternamente honrado,<br>
Do seu trono se ausentou!<br>
E entre os homens, encarnado,<br>
Deus conosco se mostrou.<br>
Quão bondosa Divindade!<br>
Quão gloriosa Humanidade!<br>
Salve Cristo, Emanuel!<br>
Luz do mundo, Deus fiel!<br><br>
3<br>
Cante o povo resgatado:<br>
Glória ao Príncipe da Paz!<br>
Deus em Cristo, revelado,<br>
Vida e luz ao homem traz!<br>
Nasce a fim de renascermos!<br>
Vive para revivermos!<br>
Rei, profeta, intercessor,<br>
Louvem todos ao Senhor!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '243',
                'name' => '241 - O nascimento de Jesus',
                'body' => '1<br>
Mal supõe aquela gente<br>
Que em Belém quer ir parar,<br>
Que uma luz tão refulgente<br>
Vai ali brilhar.<br>
É por anjos anunciado,<br>
E os pastores logo vêem<br>
Que o Senhor, por Deus mandado,<br>
Nasce em Belém.<br><br>
<strong>
Vinde ouvir a doce história,<br>
Que dos altos céus nos vem!<br>
O Messias, Rei da glória,<br>
Nasce em Belém.<br><br></strong>
2<br>
Mundo triste, vem! Desperta!<br>
Teus grilhões defeitos são!<br>
Tens a porta franca aberta;<br>
Sai da vil prisão!<br>
Não hesites, duvidoso,<br>
Esse dom do céu provém;<br>
Cristo, o Todo-Poderoso,<br>
Nasce em Belém.<br><br>
3<br>
Proclamai a todo mundo,<br>
Toda raça, toda cor:<br>
Cristo, em seu amor profundo,<br>
Salva o pecador!<br>
Confiança nele tende,<br>
Não desprezará ninguém!<br>
Vinde, os braços vos estende!<br>
Nasce em Belém.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '244',
                'name' => '242 - Os anjos e o natal',
                'body' => '1<br>
Anjos das mansões da glória,<br>
Sobre a terra já voai.<br>
Conhecei do mundo a história,<br>
O Natal hoje anunciai:<br>
Adoremos, adoremos,<br>
Cristo é o nosso grande Rei!<br><br>
2<br>
O rebanho aqui dormita,<br>
Vós, pastores, acordai.<br>
Entre o homens Deus habita,<br>
Sua estrela contemplai!<br>
Adoremos, adoremos,<br>
Cristo é o nosso grande Rei!<br><br>
3<br>
As visões deixai de lado,<br>
Vinde, ó magos, e achareis<br>
Das nações o desejado,<br>
Sua estrela conheceis!<br>
Adoremos, adoremos,<br>
Cristo é o nosso grande Rei!<br><br>
4<br>
Vós, seus santos que, prostrados,<br>
Esperáveis sem cansar,<br>
Recebei o Cristo Amado,<br>
Que conosco vem morar.<br>
Adoremos, adoremos,<br>
Cristo é o nosso grande Rei.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '245',
                'name' => '243 - Noite de paz',
                'body' => '1<br>
Noite de paz! Noite de amor!<br>
Tudo dorme em derredor.<br>
Entre os astros que espargem a luz,<br>
Proclamando o menino Jesus,<br>
Brilha a estrela da paz!<br><br>
2<br>
Noite de paz! Noite de amor!<br>
Nas campinas, ao pastor,<br>
Lindos anjos mandados por Deus,<br>
Anunciam as novas dos céus:<br>
Nasce o bom Salvador!<br><br>
3<br>
Noite de paz! Noite de amor!<br>
Oh, que belo resplendor<br>
Ilumina o menino Jesus!<br>
No presépio do mundo, eis a luz,<br>
Sol de eterno fulgor!<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '246',
                'name' => '244 - Mensagem aos pastores',
                'body' => '1<br>
Em noite linda e silente,<br>
Nos verdes prados do Oriente,<br>
Nos verdes prados do Oriente,<br>
Rebanhos a descansar!<br>
Eis que ouviram pastores<br>
Um canto de mil louvores, (bis)<br>
A Deus os anjos entoar.<br><br>
<strong>
Que canto angélico é este?<br>
Que mensagem de ti vem?<br>
Ó Pai, que nova nos deste<br>
Para teu povo em Belém?<br><br></strong>
2<br>
Então àqueles pastores,<br>
Da grande estrela aos fulgores,<br>
Da grande estrela aos fulgores<br>
Ressoa a nova do céu!<br>
Jesus, de celeste origem,<br>
Da mais crente e humilde virgem, (bis)<br>
A vos salvar, já nasceu.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '247',
                'name' => '245 - Homens sábios e de bem',
                'body' => '1<br>
Vós homens sábios e de bem,<br>
E vós que estais em dor,<br>
Lembrai-vos todos, afinal:<br>
Nasceu o Salvador,<br>
Trazendo a todos salvação, a todos paz e amor!<br><br>
<strong>
Oh, louvai o bom Deus com fervor,<br>
Com fervor!<br>
Oh, louvai o bom Deus com fervor!<br><br></strong>
2<br>
De Deus o nosso Pai,<br>
Do céu um anjo apareceu,<br>
E boas novas de louvor<br>
Aos bons pastores deu:<br>
Que lá na vila de Belém o Cristo lhes nasceu.<br><br>
3<br>
Oh, não temais,<br>
Pois vim trazer mensagem singular:<br>
Nasceu o vosso Redentor,<br>
Que aos homens quer salvar!<br>
Libertará de todo o mal a quem não duvidar.<br><br>
4<br>
Ao nosso Deus e Salvador<br>
Louvores entoai,<br>
Com verdadeira gratidão<br>
As novas proclamai,<br>
E neste dia de Natal ao Salvador louvai<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '248',
                'name' => '246 - Jesus, o Messias',
                'body' => '1<br>
Jesus, o Messias, desceu lá do céu,<br>
E foi no Natal quando ao mundo nasceu.<br>
Alegre e feliz eu me devo sentir,<br>
Pois ele é o bem Rei que nos veio remir.<br><br>
2<br>
Jesus, o messias, não quis aqui ter<br>
Um berço macio e na vida prazer!<br>
Mas na manjedoura nasceu meu Jesus<br>
Quando ele nos veio trazer vida e luz<br><br>
3<br>
Jesus, o Messias, que veio salvar,<br>
A paz já nos deu e com Deu foi estar.<br>
E neste Natal, abençoa, Senhor,<br>
As vidas que agora te rendem louvor.<br> Amém.',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '249',
                'name' => '247 - Estrela cintilante',
                'body' => '1<br>
Uma estrela cintilante,<br>
De ofuscante e rara luz,<br>
Conduziu os sábios magos<br>
Junto ao berço de Jesus<br><br>
2<br>
Ofertaram-lhe presentes<br>
Preciosos, sem igual:<br>
Ouro puro, incenso e mirra,<br>
Dons de glória terreal!<br><br>
3<br>
Nós, também, agradecemos<br>
Ao Senhor o seu amor.<br>
Por nos dar seu Filho amado,<br>
Cristo o nosso Redentor<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '250',
                'name' => '248 - No humilde presépio',
                'body' => '1<br>
No humilde presépio, sem ter nada seu,<br>
Jesus, pobrezinho, sem teto nasceu!<br>
Os céus estrelados, fulgentes de luz,<br>
Abrigam o meigo e divino Jesus.<br><br>
2<br>
Desejo a teu lado viver, meu Senhor;<br>
Amar-te e servir-te, Jesus Salvador.<br>
Aos teus pequeninos pedimos guardar<br>
Até que possamos contigo morar. Amém.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '251',
                'name' => '249 - Na manjedoura',
                'body' => '1<br>
Num berço de palha dormia Jesus,<br>
O meigo menino que ali veio à luz.<br>
Num rude presépio, de noite, em Belém,<br>
Enquanto as estrelas brilhavam além.<br><br>
2<br>
O gado inquieto, se põe a mugir,<br>
Mas ele não teme e desperta a sorrir!<br>
Eu te amo, Jesus! Vem meu sono velar,<br>
Até quando o sol no horizonte raiar.<br><br>
3<br>
Tu foste criança, nasceste em Belém!<br>
Por isso às crianças atendes também.<br>
Desejo ter sempre ao meu lado, Senhor,<br>
A tua presença tão cheia de amor. Amém.<br>',
                'audio' => '',
                'indices_id' => '36',
            ],
            [
                'id' => '252',
                'name' => '250 - A voz de Jesus',
                'body' => '1<br>
Ouvi o Salvador dizer:<br>
“Vem descansar em mim<br>
E, confiante, receber<br>
Conforto e paz sem fim.”<br>
“Fui a Jesus e lhe entreguei<br>
Meu triste coração!<br><br>

Abrigo e paz eu nele achei,<br>
Achei consolação!<br><br>

2<br>
Ouvi o Salvador dizer:<br>
“Da vida a Fonte eu sou;<br>
Às águas vivas vem beber,<br>
De graça eu sempre as dou.”<br>
Fui a Jesus e me prostrei<br>
Às águas e bebi;<br>
Jamais a sede sentirei,<br>
Estando sempre ali!<br><br>
3<br>
Ouvi o Salvador dizer:<br>
“Do mundo eu sou a luz!<br>
Oh, vem a mim, pois qual farol<br>
Te guio desde a cruz.”<br>
Fui a Jesus e nele achei<br>
O sol que brilha em mim;<br>
E nessa luz eu andarei<br>
Até da vida ao fim!<br>',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '253',
                'name' => '251 - O pão da vida',
                'body' => '1<br>
Ó Cristo, Pão da vida,<br>
Descido lá do céu,<br>
O Pão de nossas almas<br>
Que o Pai de amor nos deu!<br>
Em ti nos alegramos,<br>
Provando, mesmo aqui,<br>
Do alento e da bondade<br>
Que achamos sempre em ti.<br><br>
2<br>
Da eterna e santa vida,<br>
Da qual Tu és o Autor,<br>
Sustento e fortaleza<br>
És Tu, também, Senhor!<br>
Sem ti não nos assistem<br>
Nem forças nem poder;<br>
De ti, nosso alimento,<br>
Queremos nós viver.<br><br>
3<br>
Ó Cristo, Pão da vida,<br>
A ti louvamos nós!<br>
E ao Pai também erguemos<br>
A nossa alegre voz.<br>
Agradecemos sempre<br>
O amor que aqui nos deu<br>
Sustento verdadeiro,<br>
No santo Pão do céu.<br>',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '254',
                'name' => '252 - Pão celestial',
                'body' => '1<br>
Pão da vida, pão dos céus,<br>
Pão celeste é meu Jesus!<br>
Pão que dá ao coração<br>
Alegria, paz e luz.<br>
Sangue que Jesus verteu<br>
É divino e eficaz!<br>
Este sangue, ao coração,<br>
Força, amor e vida traz.<br><br>
2<br>
Vem, Jesus, me abençoar!<br>
Enche-me de ti Senhor!<br>
Pois almejo te servir<br>
E te honrar, meu Salvador.<br>
Pois almejo te servir<br>
E te honrar, meu Salvador. <br>Amém.
',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '255',
                'name' => '253 - Cristo, a luz do mundo',
                'body' => '1<br>
Luz do mundo, Jesus Cristo<br>
Dissipaste as ilusões!<br>
Desvendaste os nossos olhos,<br>
Libertando os corações!<br>
Para ver-te, para ver-te,<br>
Ouve nossas orações!<br><br>
2<br>
Neste mundo atribulado,<br>
Onde opera Satanás,<br>
Nós pregamos o Evangelho,<br>
Tua graça, amor e paz!<br>
Luz divina, luz divina,<br>
Vence toda luz falaz.<br><br>
3<br>
E onde as trevas do pecado<br>
Obscurecem teu amor,<br>
Faze a luz do teu ensino<br>
Dominar, ó Salvador!<br>
Manifesta, manifesta,<br>
Tua glória, ó Redentor!<br><br>
4<br>
Luz dos homens, Luz da vida,<br>
Brilha com poder nos teus!<br>
Esclarece os incautos,<br>
Revelando o grande Deus<br>
Luz do mundo, Luz do mundo,<br>
És o resplendor dos céus.<br> Amém.',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '256',
                'name' => '254 - Sossegai',
                'body' => '1<br>
Mestre. o mar se revolta<br>
E as ondas nos dão pavor!<br>
O céu se reveste de trevas,<br>
Não temos um Salvador!<br>
Não se te dá que morramos?<br>
Podes assim dormir?<br>
Se a cada momento nos vemos<br>
Já prestes a submergir?<br><br>
<strong>
“As ondas atendem ao meu mandar, sossegai!<br>
Seja o encapelado mar,<br>
A ira dos,homens o gênio do mal;<br>
Tais águas não podem a nau tragar,<br>
Que leva o Senhor,Rei dos céus e mar!<br>
Pois todos ouvem o meu mandar:<br>
Sossegai! Sossegai!<br>
Convosco estou para vos salvar; sossegai!”<br><br></strong>

2<br>
Mestre,tão grande tristeza<br>
Me quer hoje consumir!<br>
Na dor que perturba minha alma<br>
Te imploro: “Vem me acudir!”<br>
De ondas do mal que me encobrem,<br>
Quem me virá valer?<br>
Não tardes, não tardes, bom Mestre,<br>
Estou quase a perecer!<br><br>
3<br>
Mestre chegou a bonança;<br>
Em paz vejo o céu e o mar!<br>
O meu coração goza a calma<br>
Que não poderá findar.<br>
Firme ao teu lado, ó Mestre,<br>
Dono da terra e céu,<br>
Eu hei de chegar, bem seguro,<br>
Ao porto, destino meu.<br>',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '257',
                'name' => '255 - A ovelha perdida',
                'body' => '1<br>
Noventa e nove ovelhas vão<br>
Seguras ao curral.<br>
Mas uma se extraviou<br>
Do aprisco pastoral,<br>
Vagando em montes de terror,<br>
Distante do fiel Pastor,<br>
Distante do fiel Pastor.<br><br>
2<br>
“Noventa e nove a ti, Pastor,<br>
Não podem contentar?”<br>
“A errante é minha”, respondeu,<br>
“Zeloso a irei buscar!<br>
Nos montes há perigos mil.<br>
De novo a quero em meu redil,<br>
De novo a quero em meu redil”.<br><br>
3<br>
Ninguém jamais imaginou<br>
O quanto padeceu;<br>
Buscando a ovelha tão rebel,<br>
Terrível dor sofreu.<br>
Foi, pois, assim que o Bom Pastor<br>
Salvou a ovelha por amor,<br>
Salvou a ovelha por amor.<br><br>
4<br>
Vem da montanha exultação:<br>
É a voz do Bom Pastor!<br>
Ressoa em notas triunfais<br>
O Salmo Vencedor.<br>
E os anjos cantam lá nos céus:<br>
“Voltou a ovelha para Deus,<br>
Voltou a ovelha para Deus.”<br>',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '258',
                'name' => '256 - Glória singular',
                'body' => '1<br>
Visão de glória singular<br>
A Igreja pôde contemplar<br>
Em Cristo, quando ascendeu<br>
Ao monte e ali resplandeceu.<br><br>
2<br>
Com sua face a reluzir,<br>
Quis ele a glória do porvir<br>
Aos escolhidos demonstrar,<br>
Que em luz e gozo hão de habitar.<br><br>
3<br>
As almas crentes subirão!<br>
Mistério dado na visão!<br>
Por isso, alegres, com louvor,<br>
Cantamos hinos ao Senhor.<br><br>
4<br>
A Deus o Filho, a Deus o Pai<br>
E a Deus o Espírito entoai!<br>
O Deus que a graça nos quis dar<br>
De sua glória contemplar. Amém.<br>',
                'audio' => '',
                'indices_id' => '37',
            ],
            [
                'id' => '259',
                'name' => '257 - Hosana ao grande Rei',
                'body' => '1<br>
Hosana! Hosana! Hosana!<br>
Hosana ao Filho de Davi!<br>
Hosana ao grande Rei,<br>
Ao Salvador, o Bom Pastor<br>
Que resgatou sua grei!<br>
Dos altos céus, de Deus o Pai,<br>
Do trono celestial<br>
Desceu Jesus, trazendo luz<br>
E vida eternal.<br>
Hosana ao Filho de Davi!<br>
Hosana nas alturas!<br><br>
2<br>
Hosana! Hosana! Hosana!<br>
Hosana ao Filho de Davi!<br>
Hosana ao Redentor!<br>
Com gratidão, meu coração<br>
Entoa o seu louvor.<br>
Messias, Príncipe da paz,<br>
Invicto General,<br>
Meu Deus, meu Rei, serei aqui<br>
Um servo teu, leal..<br>
Hosana ao Filho de Davi,<br>
Hosana nas alturas!<br>',
                'audio' => '',
                'indices_id' => '38',
            ],
            [
                'id' => '260',
                'name' => '258 - Majestade',
                'body' => '1<br>
Caminha em majestade e vai!<br>
Ao som de hosana e exultação<br>
Por entre palmas, para a cruz,<br>
Na estrada segue o bom Jesus.<br><br>
2<br>
Caminha em majestade e vai!<br>
Em glória segue para a cruz,<br>
Ele o pecado vencerá<br>
E a morte atroz abaterá.<br><br>
3<br>
Caminha em majestade e vai!<br>
É vinda a luta pertinaz.<br>
No céu o Pai o acolherá!<br>
Seu Filho, Ungido, subirá!<br><br>
4<br>
Caminha em majestade e vai!<br>
Em glória segue para a cruz.<br>
Se abate a fronte, em face à dor,<br>
Mas vai triunfante o Vencedor<br>',
                'audio' => '',
                'indices_id' => '38',
            ],
            [
                'id' => '261',
                'name' => '259 - Hosana e glória',
                'body' => '1<br>
A ti, hosana e glória, ó Cristo Salvador,<br>
Cantavam as crianças com vozes de louvor.<br>
O povo hebreu saudou-te com palmas e com flor,<br>
E nós cantamos hinos a ti, Rei Vencedor.<br><br>
2<br>
Tu és o Rei eterno, Tu és o Emanuel,<br>
Que vens no santo Nome de nosso Deus fiel.<br>
Com “vivas” te acolheram, às portas da paixão,<br>
E nós cantamos hoje louvor e gratidão.<br><br>
3<br>
Assim como aceitaste do povo a saudação,<br>
Aceita o nosso canto de grata exaltação,<br>
A ti, hosana e glória, ó Cristo Salvador,<br>
Cantavam as crianças com vozes de louvor.<br>',
                'audio' => '',
                'indices_id' => '38',
            ],
            [
                'id' => '262',
                'name' => '260 - Amor que vence',
                'body' => '1<br>
Amor, que por amor desceste!<br>
Amor, que por amor morreste!<br>
Ah! Quanta dor não padeceste!<br>
Minha alma vieste resgatar<br>
E meu amor ganhar!<br><br>
2<br>
Amor, que por amor seguias<br>
A mim, que sem amor Tu vias!<br>
Oh! Quanto amor por mim sentias,<br>
Eterno Deus, Senhor Jesus,<br>
Sofrendo sobre a cruz!<br><br>
3<br>
Amor, que tudo me perdoas,<br>
Amor, que até mesmo abençoas<br>
Um réu de quem Tu te afeiçoas!<br>
Vencido, ó Salvador, por ti,<br>
Teu grande amor senti!<br><br>
4<br>
Amor sublime, que perduras;<br>
Que em tua graça me seguras,<br>
Cercando-me de mil venturas!<br>
Aceita agora, ó Salvador,<br>
O meu humilde amor. Amém.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '263',
                'name' => '261 - O gólgota',
                'body' => '1<br>
Mui longe o monte verde está,<br>
Ao norte de Sião.<br>
Ali na cruz, o bom Jesus,<br>
Nos deu a salvação.<br><br>
<strong>
Oh! Quanto, quanto nos amou!<br>
Amemo-lo também!<br>
E confiando em seu amor,<br>
Façamos todo bem.<br><br></strong>
2<br>
Quem neste mundo sondará<br>
A dor que padeceu?<br>
Mas crer podemos: “Foi por nós<br>
Que ali na cruz sofreu.”<br><br>
3<br>
Morreu por nós na infame cruz,<br>
Perdão nos concedeu.<br>
Lavou os nossos corações<br>
No sangue que verteu.<br><br>
4<br>
Ninguém podia nos livrar<br>
Da pena eternal.<br>
Só Cristo pode nos remir<br>
A preço divinal.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '264',
                'name' => '262 - Contemplação da cruz',
                'body' => '1<br>
Ao contemplar a tua cruz<br>
E o que sofreste ali, Senhor,<br>
Sei que não há, ó meu Jesus,<br>
Um bem maior que o teu amor.<br><br>
2<br>
Quero somente me gloriar<br>
Na tua cruz, meu Salvador,<br>
Pois que morreste em meu lugar!<br>
Teu, sempre teu serei, Senhor.<br><br>
3<br>
De tua fronte, mãos e pés,<br>
De teu ferido coração,<br>
Teu sangue em dores tão cruéis<br>
Deste por minha redenção.<br><br>
4<br>
Ao contemplar a tua cruz,<br>
O teu sofrer, o teu penar,<br>
Quão leve sinto, ó meu Jesus,<br>
A que me deste a carregar.<br><br>
5<br>
Tudo o que eu possa consagrar<br>
Ao teu serviço, ao teu louvor,<br>
Em nada poderei pagar<br>
Ao que me dás em teu amor.<br> Amém.',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '265',
                'name' => '263 -  Junto à cruz de Cristo',
                'body' => '1<br>
Na cruz de Jesus Cristo,<br>
Meus olhos podem ver<br>
Um vulto agonizante,<br>
Por mim, ali morrer!<br>
Então, estremecido,<br>
Contemplo o grande amor!<br>
Amor incomparável,<br>
Por mim, vil pecador!<br><br>
2<br>
Bem junto à cruz de Cristo<br>
Eu quero me abrigar;<br>
À sombra do madeiro<br>
Alento possa achar.<br>
Aragem no deserto,<br>
Na estrada um doce lar,<br>
Jesus sempre ameniza<br>
Meu árduo caminhar.<br><br>
3<br>
Viver eu quero sempre<br>
À sombra dessa cruz!<br>
Nenhum fulgor anseio<br>
Senão o de Jesus!<br>
O mundo abandonando,<br>
Eu tudo quis perder,<br>
Porquanto achei a Cristo<br>
Que transformou meu ser.!<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '266',
                'name' => '264 - Fronte ensangüentada',
                'body' => '1<br>
Oh, fronte ensangüentada<br>
Em tanto opróbrio e dor,<br>
De espinhos coroada,<br>
Com ódio e com furor!<br>
Tão gloriosa outrora,<br>
Tão bela e tão viril,<br>
Tão abatida, agora,<br>
De afronta e escárnio vil.<br><br>
2<br>
Quão humilhada pende<br>
A face do Senhor!<br>
Não vive, não resplende,<br>
Já não tem luz nem cor!<br>
Oh, crime inominável,<br>
Fazer anuviar<br>
O brilho inigualável<br>
De um tão piedoso olhar!<br><br>
3<br>
Estás tão carregado,<br>
Mas todo fardo é meu!<br>
Eu só me fiz culpado,<br>
E o sofrimento é teu.<br>
Venho aos teus pés, tremente,<br>
Mereço a punição,<br>
Mas olhas-me clemente<br>
Com santa compaixão!<br><br>
4<br>
Sê meu refúgio forte,<br>
Meu guia e vida e luz!<br>
Que eu sinta, vendo a morte,<br>
Conforto em tua cruz!<br>
Na cruz com fé me abrigo<br>
E amparo Tu me dás!<br>
E unido assim contigo,<br>
Hei de dormir em paz!<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '267',
                'name' => '265 - Cristo redentor',
                'body' => '1<br>
Que agonia dolorosa<br>
Tu sofreste, ó meu Jesus!<br>
Foi por mim tanta amargura<br>
Que penaste a-li na cruz.<br>
Quanto amor! Oh, quanto amor<br>
No teu sangue, ó meu Senhor!<br><br>
2<br>
Despreza-do até por Deus<br>
Pelos crimes que eram meus,<br>
Foi por mim, ó meu Jesus,<br>
Todo horror da infame cruz.<br>
Quanto amor! Oh, quanto amor<br>
Na tua morte, ó meu Senhor!<br><br>
3<br>
Ó Deus meu, Justiça e amor<br>
São a essência do teu Ser.<br>
Foi por is-so que teu Filho<br>
Veio à cruz por mim morrer!<br>
Que justiça e quanto amor<br>
No teu ser, ó Criador!<br><br>
4<br>
Pecadores, todos vós,<br>
Que buscais a salvação,<br>
Vislumbrai no sacrifício<br>
Que nos trouxe a redenção!<br>
Com amor, sim, muito amor,<br>
Crede em Cristo, o Redentor.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '268',
                'name' => '266 - Rude cruz',
                'body' => '1<br>
Rude cruz se erigiu,<br>
Dela o dia fugiu<br>
Como emblema de vergonha e dor.<br>
Mas eu sei que na cruz,<br>
Nesse dia Jesus<br>
Deu a vida por mim, pecador.<br><br>
<strong>
Sim, eu amo a mensagem da cruz;<br>
Seu triunfo meu gozo será!<br>
Pois um dia em lugar de uma cruz,<br>
A coroa Jesus me dará!<br><br></strong>
2<br>
Desde a glória dos céus,<br>
O Cordeiro de Deus<br>
Ao Calvário humilhante baixou.<br>
Nessa cruz, para mim<br>
Há mistério sem fim,<br>
Porque nela Jesus me salvou.<br><br>
3<br>
Nessa cruz padeceu,<br>
Desprezado morreu<br>
Meu Jesus, para dar-me perdão.<br>
Eu me alegro na cruz<br>
Dela vem graça e luz,<br>
Para minha santificação.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '269',
                'name' => '267 - Precioso sangue',
                'body' => '1<br>
Oh, que precioso sangue<br>
O Senhor verteu,<br>
Quando, para resgatar-nos,<br>
Padeceu!<br><br>
2<br>
Oh, que precioso sangue,<br>
Sangue de Jesus,<br>
Que por nós foi derramado<br>
Sobre a cruz!<br><br>
3<br>
Oh, que precioso sangue!<br>
Nele temos paz.<br>
Tudo quanto a lei exige,<br>
Satisfaz!<br><br>
4<br>
Oh, que precioso sangue,<br>
Sangue remidor!<br>
Nele Cristo manifesta<br>
Seu amor!<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '270',
                'name' => '268 - Redenção',
                'body' => '1<br>
Pendurado no madeiro,<br>
Ó Jesus, pudeste, assim,<br>
Destruir meu cativeiro<br>
E provar-me amor sem fim.<br><br>
<strong>
O teu sangue foi vertido,<br>
Expiraste, ó meu Jesus!<br>
E ficou por ti cumprido<br>
Meu resgate sobre a cruz.<br><br>
</strong>
2<br>
Neste sangue que verteste,<br>
Purifica-me Senhor!<br>
Foi por mim que Tu morreste:<br>
Sê propício ao pecador!<br><br>
3<br>
Sê propício aos condenados<br>
A lutar na escuridão<br>
Deste abismo de pecados,<br>
Sob a dor da maldição! <br>Amém.',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '271',
                'name' => '269 - Pureza no sangue de Cristo',
                'body' => '1<br>
Seja bendito o Cordeiro<br>
Que na cruz por nós padeceu;<br>
Seja bendito o seu sangue<br>
Que por nós, pecadores, verteu.<br>
Eis que no sangue lavados,<br>
E tendo puro o coração,<br>
Os pecadores remidos<br>
Por Jesus têm com Deus comunhão.<br><br>
<strong>
Alvo mais que a neve,<br>
Alvo mais que a neve!<br>
Sim, nesse sangue lavado,<br>
Mais alvo que a neve eu estou<br><br></strong>
2<br>
Quão espinhosa a coroa<br>
Que Jesus por nós suportou!<br>
Oh! Quão profundas as chagas<br>
Que nos provam o quanto ele amou!<br>
Eis nessas chagas pureza<br>
Para o maior pecador,<br>
A quem mais alvo que a neve<br>
O teu sangue transforma, Senhor.<br><br>
3<br>
Se as faltas nós confessarmos<br>
E seguirmos na tua luz,<br>
Tu não somente perdoas;<br>
Purificas também, ó Jesus!<br>
Lavas de todo pecado,<br>
Que maravilha de amor!<br>
Pois que mais alvo que a neve<br>
O teu sangue nos torna, Senhor.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '272',
                'name' => '270 - Desafio',
                'body' => '1<br>
Morri na cruz por ti,<br>
Foi para te livrar.<br>
Meu sangue ali verti<br>
E posso te salvar.<br><br>
<strong>
Morri, morri na cruz por ti,<br>
Que fazes tu por mim?<br><br></strong>
2<br>
Vivi assim por ti,<br>
Sofrendo a intensa dor!<br>
E tudo fiz aqui<br>
Por ser teu Salvador.<br><br>
3<br>
Sofri na cruz por ti<br>
A fim de te salvar.<br>
A vida consegui<br>
E agora ta vou dar.<br><br>
4<br>
Eu trouxe a salvação,<br>
Dos altos céus favor.<br>
É livre o meu perdão,<br>
É grande o meu amor.<br>',
                'audio' => '',
                'indices_id' => '39',
            ],
            [
                'id' => '273',
                'name' => '271 - Ressurreição',
                'body' => 'Aleluia! Aleluia! Aleluia! Aleluia!<br>
1<br>
Ó filhos, vinde aqui cantar<br>
Ao Rei do céu, da terra e mar<br>
Que, ressurreto, vem reinar.<br>
Aleluia! Aleluia!<br><br>
2<br>
À tumba foram de manhã<br>
Mulheres com piedoso afã!<br>
Mas Cristo vive - a busca é vã!<br>
Aleluia! Aleluia!<br><br>
3<br>
Um anjo, então, lhes proclamou<br>
Que Cristo já ressuscitou!<br>
As suas mágoas confortou.<br>
Aleluia! Aleluia!<br><br>
4<br>
Aceita agora, ó Salvador,<br>
O nosso canto de louvor,<br>
Que a ti erguemos com amor!<br>
Aleluia! Aleluia! Amém.<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '274',
                'name' => '272 - Aleluia ao Cristo redivivo',
                'body' => '1<br>
Cristo já ressuscitou! Aleluia!<br>
Sobre a morte triunfou! Aleluia!<br>
Tudo consumado está! Aleluia!<br>
Salvação de graça dá! Aleluia!<br><br>
2<br>
Cristo sobre a cruz sofreu! Aleluia!<br>
E por nós ali morreu! Aleluia!<br>
Mas agora vivo está! Aleluia!<br>
Para sempre reinará! Aleluia!<br><
3br>
Gratos hinos hoje erguei! Aleluia!<br>
A Jesus, o grande Rei! Aleluia!<br>
Ressurgiu, é vencedor! Aleluia!<br>
Toda glória ao Redentor! Aleluia!<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '275',
                'name' => '273 - Memórias da ressurreição',
                'body' => '1<br>
Hoje nos lembramos da Ressurreição<br>
Que assegura ao crente plena redenção.<br>
Ao terceiro dia, qual nos prometeu,<br>
Os grilhões da morte o Salvador rompeu.<br>
Sejas Tu louvado, ó Redentor Jesus!<br><br>
2<br>
Vencedor da morte, o Salvador Jesus<br>
Transformou as trevas em gloriosa luz.<br>
E as primícias fez-se, na Ressurreição,<br>
Dos fiéis que um dia ressuscitarão.<br>
Sejas Tu louvado, ó grande Vencedor!<br><br>
3<br>
Teu amor foi tanto, pelo pecador,<br>
Que por nós sofreste a punição e a dor.<br>
Mas, ressuscitado, junto ao Pai estás,<br>
Garantia eterna de perdão e paz.<br>
Sejas Tu louvado, ó forte Mediador.<br><br>
4<br>
Sumo Sacerdote! Santo Intercessor!<br>
Hoje te aclamamos Rei e Salvador!<br>
Para sempre vives, na celeste luz,<br>
Homem-Deus ilustre, ó Redentor Jesus!<br>
Sejas Tu louvado eternamente, amém.!<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '276',
                'name' => '274 - Morto e ressurreto',
                'body' => '1<br>
Eis morto o Salvador,<br>
Na sepultura<br>
Mas com poder real<br>
Ressuscitou.<br><br>
<strong>
Da sepultura saiu!<br>
Com triunfo e glória ressurgiu!<br>
Ressurgiu, vencendo a morte<br>
E seu poder!<br>
Pode agora a todos vida conceder!<br>
Ressurgiu! Ressurgiu!<br>
Aleluia! Ressurgiu!<br><br></strong>
2<br>
Tomaram precaução<br>
Com seu sepulcro.<br>
Foi tudo em vão, porém,<br>
Para o reter.<br><br>
3<br>
No grande Vencedor<br>
Eis as primícias<br>
Dos santos que também<br>
Ressurgirão.<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '277',
                'name' => '275 - Cristo venceu',
                'body' => '1<br>
Cristo venceu!<br>
Liberta está minha alma!<br>
Gozo a divina calma de sua paz,<br>
Bem longe dos grilhões da eterna morte,<br>
Bem junto à fonte que me satisfaz.<br><br>
2<br>
Cristo venceu!<br>
Meu coração se abre<br>
Ao resplendor da soberana luz.<br>
De clarida-de inunda minha vida,<br>
De formosura veste minha cruz.<br><br>
3<br>
Cristo venceu!<br>
A noite se fez dia:<br>
Nova esperança nele eu encontrei!<br>
Das armas da justiça revestido,<br>
Pelejo agora na divina grei.<br><br>
4<br>
Cristo venceu!<br>
Temores não mais sinto.<br>
Vencida a morte, abriu-se o denso véu!<br>
Cristo venceu! O Filho poderoso<br>
Reina! E com ele viverei no céu!<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '278',
                'name' => '276 - Amorável convite',
                'body' => '1<br>
Vinde vós, fiéis, cantai<br>
Amoravelmente:<br>
Deus seu povo libertou<br>
Triunfantemente!<br>
Exaltai Jerusalém<br>
Com amor profundo,<br>
Proclamai que ressurgiu<br>
O Senhor do mundo.<br><br>
2<br>
Têm as almas em Jesus<br>
Redenção, guarida.<br>
Ressurgiu o Redentor,<br>
Eis a luz e a vida<br>
Foge o inverno, a dor cruel,<br>
Do pecado a treva;<br>
Redimidos por Jesus,<br>
Ele ao céu nos leva!<br><br>
3<br>
Aleluia cantareis<br>
Ao Senhor amado,<br>
Salvador, Deus imortal,<br>
Já ressuscitado!<br>
Aleluia! Glória dai,<br>
Com fervor supino!<br>
Aleluia sem cessar,<br>
Ao Deus Uno e trino.<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '279',
                'name' => '277 - Cristo vive! Ressurgiu!',
                'body' => 'Cristo vive! Ressuscitou de entre os mortos,<br>
Cristo vive! Ressuscitou de entre os mortos,<br>
E foi feito, e foi feito as primícias dos que dormem.<br>
Glória e louvor sejam dados com poder<br>
Ao Pai eterno, que no trono assentado está,<br>
E ao Cordeiro de Deus! Cristo vive! Ressurgiu!<br>
E foi feito as primícias dos que dormem!<br>
Glória e louvor sejam dados com poder<br>
Ao Pai eterno, que no trono assentado está,<br>
E ao Cordeiro de Deus, por séculos e séculos,<br>
Amém.',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '280',
                'name' => '278 - A vitória de Jesus',
                'body' => 'Aleluia! Aleluia! Aleluia!<br><br>
1<br>
Findou-se a luta de Jesus!<br>
O Salvador venceu na cruz!<br>
Já neste mundo raia a luz!<br>
Aleluia!<br><br>
2<br>
Das mãos do grande usurpador<br>
Livrou-nos com profundo amor.<br>
Cantai ao forte Salvador<br>
Aleluia!<br><br>
3<br>
Vencida a morte e seu horror<br>
Subiu à glória o Redentor<br>
Rompei em cantos de louvor!<br>
Aleluia!<br><br>
4<br>
Com majestade sem igual<br>
Firmou o império divinal<br>
Erguei o salmo triunfal<br>
Aleluia!<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '281',
                'name' => '279 - O dia triunfal raiou',
                'body' => '1<br>
O dia triunfal raiou,<br>
Trazendo o sol de alegre luz;<br>
Pois ressurgiu e nos livrou<br>
Da morte o nosso Rei Jesus. Aleluia!<br><br>
2<br>
Rejubilando sem cessar,<br>
Com aleluias de louvor<br>
Em coro vamos proclamar:<br>
“Ressuscitou o Salvador!” Aleluia!<br><br>
3<br>
Com alegria e com louvor<br>
A Páscoa vamos celebrar,<br>
Pois Cristo, o grande Vencedor,<br>
De Deus o amor nos vem mostrar! Aleluia!<br>',
                'audio' => '',
                'indices_id' => '40',
            ],
            [
                'id' => '282',
                'name' => '280 - Ascensão',
                'body' => '1<br>
Subiste ao céu, Triunfador!<br>
De tudo agora és Tu Senhor;<br>
Venceste, Rei da glória!<br>
Eis que te sentas junto ao Pai.<br>
Colher, em breve, a Igreja vai<br>
As bênçãos da vitória!<br>
A cruz é luz.<br>
O pecado? Expiado!<br>
Vida e morte,<br>
Tudo está em mão que é forte!<br><br>
2<br>
Atrai-nos bem a ti, Jesus,<br>
Que andemos sempre em tua luz<br>
E o Reino teu busquemos.<br>
Dá que vivamos com temor<br>
E humildes pelo teu amor<br>
O mal abandonemos!<br>
Dá, Rei, à grei<br>
Que, lutando sob teu mando,<br>
Seja firme;<br>
E sua fé ao mundo afirme.<br><br>
3<br>
Clamamos, ó Jesus, por ti.<br>
Vem ser com o teu povo aqui.<br>
Faze que viva unido<br>
E seja grato e liberal,<br>
Buscando o bem celestial,<br>
O bem imerecido.<br>
Oh, sim! E assim,<br>
Nós, constantes e exultantes,<br>
Juntaremos<br>
Nossas mãos: louvar-te-emos!<br> Amém.',
                'audio' => '',
                'indices_id' => '41',
            ],
            [
                'id' => '283',
                'name' => '281 - Jesus triunfante',
                'body' => '1<br>
Aleluia! Triunfante,<br>
Para os céus Jesus subiu.<br>
As prisões quebrou da morte,<br>
Pecadores redimiu.<br>
Com poder em majestade,<br>
Vive e reina lá no céu;<br>
Mas um dia triunfante,<br>
Voltará ao povo seu!<br><br>
2<br>
Aleluia! O Cristo amado<br>
Sobre a morte triunfou!<br>
E por nós, quebrando os laços,<br>
A vitória conquistou!<br>
Seu triunfo é nossa glória,<br>
Seu sofrer é nossa paz.<br>
Salvação o Cristo amado<br>
Com poder e graça traz.<br><br>
3<br>
Aleluia! Ressurreto,<br>
Fiador por nós se fez!<br>
Conseguiu por sua morte,<br>
Redimir-nos de uma vez.<br>
Ei-lo agora, junto ao trono,<br>
Pelos seus a interceder.<br>
Aleluia! Ressurreto,<br>
Cristo reina com poder!<br>',
                'audio' => '',
                'indices_id' => '41',
            ],
            [
                'id' => '284',
                'name' => '281-A - Fronte ensangüentada',
                'body' => '1<br>
A fronte que uma vez sangrou<br>
Agora brilha em luz!<br>
Real é o halo que adornou<br>
O vencedor Jesus!<br><br>
2<br>
Ele às alturas ascendeu,<br>
À glória se elevou!<br>
E é a eterna luz do céu,<br>
O Rei que se humilhou!<br><br>
3<br>
Ele é dos anjos o prazer,<br>
Dos salvos, Redentor.<br>
A estes faz-se conhecer<br>
Nos bens do seu amor.<br><br>
4<br>
A nós o escárnio dessa cruz<br>
Completa graça traz!<br>
Um nome eterno dá Jesus<br>
De glória, gozo e paz!<br><br>
5<br>
Os que carregam sua cruz,<br>
Com Cristo hão de reinar.<br>
Verão de perto a sua luz<br>
No sempiterno lar.<br>',
                'audio' => '',
                'indices_id' => '41',
            ],
            [
                'id' => '285',
                'name' => '282 - A grande comissão',
                'body' => '1<br>
Disse Jesus: “Ide por todo o mundo,<br>
E pregai o eterno dom<br>
Da salvação que, com amor profundo,<br>
Dá o Deus gracioso e bom!”<br>
Tendo na cruz a afirmação do amor,<br><br>
Proclamai o dom do Redentor!<br>
Oh! Conquistai<br>
Almas perdidas, buscai<br>
O pecador enfermo, quase moribundo!<br><br>
<strong>
Vamos, irmãos, levar<br>
Essa luz ao mundo inteiro!<br>
Vamos, irmãos, contar<br>
Que esse dom é verdadeiro!<br>
Vamos, irmãos, pregar<br>
Mui confiados no Cordeiro<br>
Que na cruz, já fez<br>
A nossa Redenção!<br><br>
</strong>
2<br>
Todos marchemos nesse grande intento<br>
De pregar a salvação!<br>
Sem recuar, sempre mostrando alento.<br>
Sim, cumpramos a missão<br>
Que o Salvador, Cristo Jesus, nos deu!<br>
Ele está também no posto seu.<br>
Diz-nos o Rei:<br>
“Sempre convosco estarei!”<br>
Vamos, irmãos, bem firmes neste pensamento!<br><br>
3<br>
Firmes, levemos a mensagem santa<br>
Do Evangelho de Jesus!<br>
Esta mensagem divinal, que encanta,<br>
Espargindo graça e luz!<br>
Cheia de bênçãos do glorioso Deus,<br>
Que conhece os escolhidos seus,<br>
Cheia de amor,<br>
Vem revelar o favor<br>
Da compaixão de Deus e dá-nos graça tanta.<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '286',
                'name' => '283 - Desafio',
                'body' => '1<br>
Avançai ! Avançai! Derramai essa luz<br>
Sobre os povos da terra que não têm Jesus!<br>
Ide já, diz o Mestre. Quem é que irá,<br>
Obediente ao preceito que a todos nos dá?<br>
Confiai no Senhor! Não tenhais mais temor!<br>
Avançai, com Jesus, avançai!<br><br>
2<br>
Avançai! Avançai com a Bíblia na mão!<br>
Proclamai às nações pela cruz Redenção!<br>
Enfrentai os perigos com fé sempre em Deus,<br>
Mesmo havendo pesares, rumamos aos céus.<br>
Duras lutas tereis, com Jesus vencereis!<br>
Avançai, sem temor, avançai!<br><br>
3<br>
Avançai! Avançai e pregai aos milhões<br>
Que perecem nas trevas das desilusões!<br>
Foi por eles também que o Senhor padeceu,<br>
E na terra, entre os homens, insultos sofreu.<br>
Proclamai redenção! Em Jesus há perdão!<br>
Avançai, com amor, avançai!<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '287',
                'name' => '284 - Obediência',
                'body' => '1<br>
Nem sempre será para onde eu quiser<br>
Que o Mestre me quer enviar!<br>
É grande a Seara a embranquecer,<br>
Em que eu deverei trabalhar.<br>
Se, pois, a caminhos que eu nunca segui,<br>
Uma voz a chamar-me eu ouvir,<br>
Direi: Meu Senhor, confiado em ti,<br>
Estou pronto ao teu mando seguir.<br><br>
<strong>
Estou pronto a fazer o que queres, Senhor,<br>
Confiado no teu poder!<br>
Estou pronto a dizer o que queres, Senhor,<br>
Sempre a ti pronto a obedecer!<br><br>
</strong>
2<br>
Palavras terás de amor e perdão<br>
Que aos outros eu deva levar.<br>
No triste caminho do vício, estão,<br>
Perdidos que eu deva ir buscar.<br>
Senhor, se a tua presença real<br>
Meu trabalho há de fortalecer,<br>
Darei a mensagem, bem firme e leal!<br>
Estou pronto a cumprir teu querer.<br><br>
3<br>
Um canto modesto eu quero encontrar<br>
Na Seara do meu bom Senhor.<br>
Enquanto for vivo eu vou trabalhar<br>
Em prova do meu grande amor.<br>
De ti meu sustento só dependerá,<br>
E de tudo me hás de prover!<br>
A tua vontade a minha será,<br>
Estou pronto a votar-te meu ser. <br>Amém.',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '288',
                'name' => '285 - A salvação do Brasil',
                'body' => '1<br>
Do vasto Mato Grosso<br>
Até ao Ceará,<br>
Por vilas e cidades<br>
Do Sul ao Grão Pará,<br>
Deste Evangelho santo<br>
Que nos legou Jesus,<br>
Ao povo brasileiro<br>
Levemos nós a luz!<br><br>
2<br>
Do Sul ao Amazonas,<br>
Do Oeste até ao mar,<br>
Já corre a doce nova<br>
Do amor que não tem par.<br>
Já muitos foram salvos<br>
Da morte e perdição;<br>
No sangue do Cordeiro<br>
Acharam salvação!<br><br>
3<br>
Contudo, ainda muitos<br>
Bem longe de cristãos,<br>
Adoram deuses feitos<br>
Por suas próprias mãos.<br>
De tão fatal pecado,<br>
Da idolatria vil,<br>
Unidos no Evangelho,<br>
Salvemos o Brasil.<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '289',
                'name' => '286 - Colheita bendita',
                'body' => '1<br>
Ceifeiros somos nós, fiéis,<br>
Ceifando para o Rei dos reis<br>
Os frutos prontos a colher<br>
Que em derredor se estão a ver.<br>
Assim, a Cristo, o Salvador,<br>
Rendemos preito de louvor,<br>
Ao nosso Mestre, lá no Céu,<br>
Que sobre a cruz por nós morreu.<br><br>
<strong>
Vamos nós obedecer! Vamos à colheita!<br>
Para quando anoitecer ver a obra feita<br>
Pouco tempo restará;<br>
Breve o prazo acabará;<br>
Breve, breve, breve acabará!<br><br></strong>
2<br>
Nós trabalhamos por Jesus<br>
Que para os campos nos conduz,<br>
E na Seara imensa quer<br>
Obreiros novos receber.<br>
Ainda há muito o que fazer,<br>
E tanto fruto que colher!<br>
Não ouves Cristo perguntar:<br>
“Quem quer por mim ir trabalhar?”<br><br>
3<br>
Estão as horas a fugir;<br>
O teu Senhor não tarda em vir.<br>
Tu queres fruto ao céu levar,<br>
Ou folhas só apresentar?<br>
Oh, não demores a atender!<br>
A noite em breve vai descer.<br>
Conosco toma o teu lugar<br>
E por Jesus vem trabalhar!<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '290',
                'name' => '287 - Igreja, alerta!',
                'body' => '1<br>
É tempo! É Tempo, o Mestre está chamando já!<br>
Marchar, marchar, confiando em seu amor!<br>
Partir, partir, a salvação a proclamar,<br>
Cumprindo a ordem santa do bom Salvador!<br><br>
<strong>
Marchar, sim avante!<br>
Marchar, sim, erguendo o seu pendão real, avante!<br>
Sim, avante! Unidos sempre, firmes avançai!<br>
“Glória! Glória!” Eis que canta a multidão!<br>
Consagrando todo o vosso coração,<br>
A Jesus obedecei, seu querer executai,<br>
Entoai louvores altos! Avançai!<br><br>
</strong>
2<br>
“Queremos luz” - É o grito das nações pagãs<br>
Que vem atravessando o imenso mar.<br>
Oh, vamos já levar-lhes novas de amor,<br>
Sem esquecer também aqui de semear.<br><br>
3<br>
Desperta, Igreja! E vem o teu dever cumprir.<br>
A todos faze a Cristo conhecer!<br>
A tua mão estende, com paciente amor,<br>
Ajuda-os, em Jesus, a vida receber.<br><br>
4<br>
Igreja, alerta! O dia prometido vem,<br>
No qual Jesus, o Salvador, virá!<br>
Por toda parte, o vitorioso Redentor<br>
Eterna glória e honra e louvor terá.<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '291',
                'name' => '288 - A mensagem real',
                'body' => '1<br>
Sou forasteiro aqui, em terra estranha estou,<br>
Celeste Pátria, sim, é para onde vou.<br>
Embaixador por Deus, do Reino lá dos céus,<br>
Venho em serviço do meu Rei!<br><br>
<strong>
É a mensagem que me deu,<br>
Provinda lá dos altos céus:<br>
Que vos reconcilieis<br>
Com o Senhor, Rei meu!<br>
Reconciliai-vos já com Deus!<br><br></strong>
2<br>
Por Deus mandado está, que o homem pecador!<br>
Arrependido já se chegue ao Salvador!<br>
Pois quem o receber, no Reino vai viver.<br>
Venho em serviço do meu Rei!<br><br>
3<br>
Mais belo que um rosal, o lar celeste tem<br>
A bênção imortal, o gozo eterno, além.<br>
No céu tem galardão quem frui a redenção.<br>
Venho em serviço do meu Rei!<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '292',
                'name' => '289 - Quem irá?',
                'body' => '1<br>
Eis os milhões que, em trevas tão medonhas,<br>
Jazem perdidos, sem o Salvador!<br>
Oh! Quem irá as novas proclamando<br>
Que Deus, em Cristo, salva o pecador?<br><br>
<strong>
“Todo poder o Pai me deu,<br>
Na terra como lá no céu!<br>
Ide ao mundo anunciar o Evangelho,<br>
E eis-me convosco sempre!”<br><br></strong>
2<br>
Portas abertas, eis por todo o mundo<br>
Servos de Deus, avante sempre andai!<br>
Crentes em Cristo, uni as vossas forças:<br>
Da escravidão os povos libertai.<br><br>
3<br>
Ó Deus! Apressa o glorioso dia<br>
Em que os remidos todos se unirão,<br>
E em coro santo, excelso, jubiloso,<br>
Eternamente glória a ti darão!<br>',
                'audio' => '',
                'indices_id' => '42',
            ],
            [
                'id' => '293',
                'name' => '290 - Jesus já vem',
                'body' => '1<br>
Jesus já vem, o grande Salvador,<br>
O Bem-amado destes corações!<br>
E os crentes mortos, vastas multidões,<br>
Ressurgirão!<br><br>
2<br>
Jesus já vem! E ao mesmo tempo nós,<br>
Os que no mundo vivos ele achar,<br>
Já transformados vamos a cantar<br>
O seu louvor!<br><br>
3<br>
Jesus já vem! Oh, perfeição de amor!<br>
Pois para sempre, a andar com ele em luz,<br>
Quer ter a Igreja que, na sua cruz,<br>
Já redimiu.<br><br>
4<br>
Jesus já vem! Que bênçãos em irmos ver<br>
A quem, por nós, a morte aqui sofreu!<br>
E a interceder por nós, compareceu<br>
Perante o Pai.<br><br>
5<br>
Oh, vem, Senhor! Não tardes, ó Jesus!<br>
Pois Tu somente irás satisfazer<br>
Aos nossos corações, que anelam ver<br>
Seu Salvador! Amém.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '294',
                'name' => '291 - Triunfante',
                'body' => '1<br>
Entre nuvens multicores,<br>
Com os santos vem do céu<br>
Quem, amando os pecadores,<br>
Morte atroz na cruz sofreu.<br>
Aleluia! Cristo volta!<br>
Ele reina, pois venceu!<br><br>
2<br>
Todo olho há de vê-lo<br>
Triunfante aqui descer.<br>
Mesmo quem num falso zelo<br>
Cruelmente o fez sofrer.<br>
Seus algozes, consternados,<br>
Sua glória hão de ver.<br><br>
3<br>
Vem gloriosa, num momento,<br>
A esperada Redenção!<br>
Cessa todo sofrimento,<br>
Queixas mágoas longe vão.<br>
Aleluia! Principia<br>
A total renovação.<br>
Todo o orbe, humildemente,<br>
Honre e louve a ti, Senhor!<br>
Ante o trono aurifulgente<br>
Se prosterne com amor!<br>
Inaugura o Rei Eterno!<br>
Aleluia! Vem, Senhor! Amém.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '295',
                'name' => '292 - A vinda do Senhor',
                'body' => '1<br>
Como foi para o céu<br>
Jesus Cristo há de vir,<br>
Quando o som da trombeta ecoar!<br>
Quando a voz do arcanjo<br>
Celeste se ouvir,<br>
Eu irei com Jesus me encontrar.<br><br>
<strong>
Oh! Que dia glorioso esse dia há de ser,<br>
Quando o som da trombeta ecoar!<br>
Quando Cristo nas nuvens tiver de descer<br>
E, então, triunfante reinar!<br><br></strong>
2<br>
Nesse dia de glória<br>
O meu corpo mortal<br>
Semelhante ao de Cristo há de ser!<br>
E já livre da morte<br>
E já livre do mal,<br>
A vitória de Cristo hei de ver.<br><br>
3<br>
Eu aqui, pela cruz,<br>
Para o mundo morri<br>
Muita dor inda aqui sofrerei;<br>
Minha vida com Cristo<br>
Em meu Deus escondi,<br>
E com Cristo eu, enfim, reinarei.<br><br>
4<br>
Vem Jesus, ó Senhor,<br>
Vem depressa reinar!<br>
Vem a paz e a justiça trazer!<br>
Criação povo teu,<br>
Tudo almeja o raiar<br>
Desse dia de glória e poder.<br><br>
5<br>
Este império do mal<br>
Vem, Senhor destruir!<br>
Rei celeste, vem presto reinar.<br>
Vem, ó sol da justiça,<br>
No mundo luzir.<br>
Ó meu Rei, vem meu pranto estancar.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '296',
                'name' => '293 - O dia glorioso',
                'body' => '1<br>
Vinde, ó cristãos, regozijai-vos,<br>
O Senhor não tardará!<br>
Já vem o glorioso dia<br>
Em que Cristo voltará!<br><br>
<strong>
Oh, dia triunfal de Cristo<br>
Quando lá do céu descer!<br>
Todos juntos, jubilosos, vamos<br>
O Senhor a receber!<br>
Vinde, ó cristãos, regozijai-vos!<br>
O Senhor não tardará!<br>
Já vem o glorioso dia<br>
Em que Cristo voltará!<br><br></strong>
2<br>
Com multidão inumerável<br>
Sobre as nuvens ele vem!<br>
E todos juntos entraremos<br>
Com Jesus na glória além!<br><br>
3<br>
Então será glorificado<br>
Nos remidos, o Senhor.<br>
E o mundo inteiro admirará<br>
O seu poder e seu amor.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '297',
                'name' => '294 - O senhor voltará',
                'body' => '1<br>
Breve o Senhor, em esplendor,<br>
Aqui há de descer.<br>
O mundo inteiro, com temor,<br>
Justiça, então, vai ter.<br><br>
2<br>
Eis a verdade a despontar,<br>
Qual planta a reflorir;<br>
Eis a justiça a iluminar<br>
O mundo que há de vir!<br><br>
3<br>
Os povos todos, ó Senhor,<br>
Submissos estarão.<br>
Do régio sólio em derredor<br>
Teu nome bendirão.<br><br>
4<br>
Faze o milagre, ó grande Deus:<br>
Que vença, enfim, o Bem,<br>
Com o poder dos altos céus,<br>
Aqui no mundo. Amém.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '298',
                'name' => '295 - A volta de Jesus',
                'body' => '1<br>
Sobre nuvem fulgurante<br>
Vem do céu o Salvador.<br>
Com poder e majestade<br>
Anjos traz ao seu redor.<br>
Vem glorioso, vem glorioso,<br>
Cristo, o eterno Vencedor.<br><br>
2<br>
Quem atrozes inimigos<br>
Uma vez na cruz venceu,<br>
Ressurgiu da sepultura<br>
E subiu além do véu.<br>
Aleluia! Aleluia!<br>
Outra vez vem lá do céu.<br><br>
<br>
Para um dia tão solene<br>
Preparaste-nos, Senhor,<br>
Para que, vencida a morte,<br>
Nos vejamos sem temor,<br>
Contemplando, contemplando<br>
Tua face em resplendor. Amém.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '299',
                'name' => '296 - Cristo não tarda',
                'body' => '1<br>
Cristo em breve do céu virá,<br>
Pois prometeu e não tardará.<br>
Oh, que alegria, que glória será,<br>
Quando Jesus regressar!<br><br>
<strong>
Cristo não tarda, não tarda em vir,<br>
Cristo não tarda em vir.<br>
Oh, que alegria e glória será,<br>
Quando Jesus regressar!<br><br></strong>
2<br>
Em breve os mortos ressurgirão,<br>
Todos os crentes se encontrarão.<br>
Juntos, alegres, ao céu subirão,<br>
Quando Jesus regressar!<br><br>
3<br>
Na terra, em breve teremos paz,<br>
Quando for preso o maligno mordaz!<br>
Toda aflição ficará para trás,<br>
Quando Jesus regressar!<br><br>
4<br>
Cristo não tarda, não tarda em vir.<br>
Quem pronto está para aquele porvir?<br>
Oh, que alegria teremos em ir,<br>
Quando Jesus regressar.<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '300',
                'name' => '297 - A chamada final',
                'body' => '1<br>
Quando lá do céu descendo<br>
Para os seus Jesus voltar,<br>
E o clarim de Deus a todos proclamar<br>
Que chegou o grande dia<br>
Da vitória do meu Rei,<br>
Eu, por sua imensa graça, lá estarei!<br><br>
<strong>
Quando enfim chegar o dia<br>
Da vitória do meu Rei,<br>
Quando enfim chegar o dia<br>
Pela graça de Jesus eu lá estarei!<br><br></strong>
2<br>
Nesse dia, quando os mortos<br>
Hão de a voz de Cristo ouvir,<br>
E dos seus sepulcros hão de ressurgir,<br>
Os remidos, transformados,<br>
Logo aclamarão seu Rei,<br>
E por sua imensa graça lá estarei!<br><br>
3<br>
Pelo mundo rejeitado<br>
Foi Jesus, meu Salvador!<br>
Desprezaram, insultaram meu Senhor!<br>
Mas glorioso vem o dia<br>
Da vitória do meu Rei,<br>
E por sua imensa graça lá estarei!<br>',
                'audio' => '',
                'indices_id' => '43',
            ],
            [
                'id' => '301',
                'name' => '298 - A pedra fundamental',
                'body' => '1<br>
Da Igreja o fundamento<br>
É Cristo, o Salvador!<br>
Em seu poder descansa<br>
E é forte em seu amor.<br>
Pois nele, alicerçada,<br>
Segura e firme está,<br>
E sobre a Rocha Eterna<br>
Jamais se abalará.<br>
2<br>
A pedra preciosa<br>
Que Deus predestinou<br>
Sustenta pedras vivas<br>
Que a graça trabalhou.<br>
E quando o monumento<br>
Surgir em plena luz,<br>
A glória do edifício<br>
Será do Rei Jesus!<br><br>
3<br>
Neste edifício santo<br>
Que visa o teu louvor,<br>
Esteja a tua bênção,<br>
Rogamos-te, Senhor!<br>
Que muitos pecadores<br>
Aqui, em contrição,<br>
Se tornem templos santos<br>
De tua habitação. Amém.<br>',
                'audio' => '',
                'indices_id' => '44',
            ],
            [
                'id' => '302',
                'name' => '299 - Renovação',
                'body' => 'Fortalece a tua Igreja,<br>
Ó bendito Salvador!<br>
Dá-lhe tua plena graça,<br>
Oh, renova seu vigor.<br>
Vivifica, vivifica<br>
Nossas almas, ó Senhor! Amém.<br>
Vivifica, vivifica<br>
Nossas almas, ó Senhor! Amém.<br>',
                'audio' => '',
                'indices_id' => '44',
            ],
            [
                'id' => '303',
                'name' => '300 - Igreja militante',
                'body' => '1<br>
Para resgatar a Igreja<br>
Grande preço Cristo deu.<br>
Não foi ouro, nem foi prata:<br>
Foi seu sangue que verteu.<br><br>
<strong>
Grande foi o teu amor<br>
Que na cruz assim mostraste!<br>
Para meus grilhões partires,<br>
Tua vida não poupaste!<br><br></strong>
2<br>
Pois agora que sou tua,<br>
Não te quero mais perder.<br>
E com gratidão servindo<br>
Quero só por ti viver.<br><br>
3<br>
Quero receber teu jugo<br>
E em teus passos caminhar!<br>
Se por ti eu sofro tudo,<br>
Vou contigo em paz reinar.<br><br>
4<br>
Eis que estou aqui na terra<br>
Esperando o teu voltar.<br>
Vem buscar a tua Igreja,<br>
Vem, Senhor, e sem tardar. Amém.',
                'audio' => '',
                'indices_id' => '44',
            ],
            [
                'id' => '304',
                'name' => '301 - O único salvador',
                'body' => '1<br>
Igreja do Senhor,<br>
Proclama com fervor:<br>
“Quem salva é só Jesus!”<br>
A todos faze ouvir,<br>
Insiste em repetir:<br>
“Quem salva é só Jesus!”<br><br>
2<br>
Em nós não há poder<br>
Que venha o mal vencer.<br>
“Quem salva é só Jesus!”<br>
É vão tentar viver<br>
Com Deus, sem renascer:<br>
“Quem salva é só Jesus<br><br>
3<br>
A lei não dá perdão:<br>
Traz morte e maldição.<br>
“Quem salva é só Jesus!”<br>
Em Cristo os bens estão<br>
Da plena redenção!<br>
“Quem salva é só Jesus!”<br><br>
4<br>
O Bem dos altos céus<br>
É Cristo, o Dom de Deus.<br>
“Quem salva é só Jesus!”<br>
Ele é quem livra os réus<br>
Tornando-os filhos seus.<br>
“Quem salva é só Jesus!”<br><br>
5<br>
Igreja do Senhor<br>
Proclama com fervor:<br>
“Quem salva é só Jesus!”<br>
Por esse extremo amor<br>
Que tem ao pecador<br>
Louvemos a Jesus.<br>',
                'audio' => '',
                'indices_id' => '44',
            ],
            [
                'id' => '306',
                'name' => '302 - Povoam as cidades',
                'body' => '1<br>
Povoam as cidades inquietas multidões<br>
Que vivem na ganância e em vis degradações.<br>
Bem pouco ali ressoam as preces e o louvor<br>
Que as mal nutridas almas levantam ao Senhor.<br><br>
2<br>
Há muitas cenas tristes, flagrantes erros há!<br>
Há lares sem carinho e o medo em tudo está.<br>
Nos centros e nos bairros, nas ruas, nas prisões,<br>
As almas esquecidas perecem aos milhões.<br><br>
3<br>
Contempla, ó Deus, teu povo nas lutas do viver,<br>
E aos crentes das cidades concede teu poder!<br>
Do sonho à realidade permite-nos sair,<br>
Oh, faze a Igreja de hoje melhor a ti servir. Amém.<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '307',
                'name' => '303 - Pendão Real',
                'body' => '1<br>
Um pendão real vos entregou o Rei,
A vós, soldados seus!
Corajosos, pois, em tudo o defendei,
Marchando para os céus.<br><br>
<strong>
Com valor, sem temor!<br>
Por Cristo prontos a sofrer!<br>
Bem alto erguei o seu pendão,<br>
Firmes, sempre, até morrer!<br><br>
</strong>
2<br>
Eis formados já terríveis batalhões<br>
Do grande usurpador!<br>
Revelai-vos hoje bravos campeões!<br>
Avante, sem temor!<br><br>
3<br>
Quem receio sente no seu coração<br>
E fraco se mostrar,<br>
Não receberá o eterno galardão<br>
Que Cristo tem pra dar!<br><br>
4<br>
Pois sejamos todos a Jesus fiéis,<br>
E a seu real pendão!<br>
Os que da vitória colhem os lauréis<br>
Com ele reinarão.<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '308',
                'name' => '304 - A voz do evangelho',
                'body' => '1<br>
A voz do Evangelho<br>
Já se fez ouvir aqui,<br>
Publicando em som alegre,<br>
O que Deus já fez por ti.<br>
Pois tanto ao mundo amou,<br>
E ao perdido pecador,<br>
Que do céu mandou seu Filho<br>
Para ser seu Redentor.<br><br>
<strong>
Santa paz e perdão,<br>
É a nova lá dos céus!<br>
Santa paz e perdão,<br>
Bendito o nosso Deus!<br><br></strong>
2<br>
A voz do Evangelho<br>
Segurança, vida e paz,<br>
É o amor de Jesus Cristo<br>
Que o perdão de Deus nos traz.<br>
As novas se nos dão<br>
De haver um Salvador,<br>
Poderoso e mui bondoso<br>
Que perdoa o pecador.<br><br>
3<br>
A voz do Evangelho<br>
Vem a todos avisar<br>
Do perigo, grande e grave,<br>
Para quem se descuidar.<br>
Salvai-vos desde já,<br>
Não vos detenhais no mal,<br>
Cobiçando os seus prazeres,<br>
Pois vos pode ser fatal.<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '309',
                'name' => '305 - Quem quiser',
                'body' => '1<br>
Quem ouvir as novas, deve proclamar.<br>
Salvação de graça, vinde desfrutar!<br>
Oh! Que o mundo inteiro ouça anunciar:<br>
Todo o que quiser é vir!<br><br>
<strong>
Todo o que quiser, todo o que quiser<br>
Pode a boa-nova hoje receber!<br>
Que o Senhor da glória a todos quer remir!<br>
Todo o que quiser é vir!<br><br></strong>
2<br>
Quem quiser, agora, venha aceitar;<br>
Eis a porta aberta, entre sem tardar!<br>
É Jesus caminho para o céu chegar!<br>
Todo o que quiser é vir!<br><br>
3<br>
Que fiel promessa tens, ó pecador,<br>
De uma vida eterna! Vem ao Salvador!<br>
Ele a todos fala com mui terno amor.<br>
Todo o que quiser é vir!<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '310',
                'name' => '306 - Fidelidade na luta',
                'body' => '1<br>
Erguei-vos, cristãos! Cristo quer-vos de pé!<br>
Na luta do bem, revelai vossa fé!<br>
Cingindo a armadura, hoje a Cristo exaltai,<br>
À sombra da cruz, corajosos lutai!<br><br>
<strong>
Sede fiéis, sede fiéis<br>
Sede fiéis e por Cristo lutai!<br><br>
</strong>
2<br>
Jesus vos remiu, afastai o temor.<br>
Confiantes, segui vosso bom Salvador!<br>
Na causa de Cristo fervor demonstrai!<br>
À sombra da cruz, corajosos lutai!<br><br>
3<br>
As hostes do mal deveis hoje enfrentar,<br>
As suas prisões pecadores livrar.<br>
De Cristo bem alto o pendão levantai!<br>
À sombra da cruz, corajosos lutai!<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '311',
                'name' => '307 - A santa peleja',
                'body' => '1<br>
Erga-se o estandarte,<br>
Tremulando à luz!<br>
Seu brasão: coroa<br>
Circundando a cruz!<br>
Na cruzada invicta,<br>
Quem quer hoje entrar,<br>
E o evangelho santo<br>
Ir anunciar?<br><br>
<strong>
Erga-se o estandarte,<br>
Tremulando à luz!<br>
Seu brasão coroa<br>
Circundando a cruz.<br><br></strong>
2<br>
Luta contra as trevas,<br>
Luta contra o mal!<br>
Eis-nos à peleja<br>
Santa, divinal!<br>
Dar combate ao erro,<br>
À superstição,<br>
E salvar os homens<br>
Da degradação.<br><br>
3<br>
Vinde ao bom combate<br>
Sem esmorecer!<br>
De valor eterno<br>
Glória haveis de ter.<br>
A quem quer segui-lo,<br>
Eis que diz Jesus:<br>
“Negue-se a si mesmo,<br>
Tome a sua cruz.”<br><br>
4<br>
Salvador confio<br>
Em teu grande amor!<br>
Entro na batalha<br>
Com vibrante ardor.<br>
Dá que em teu serviço<br>
Saiba a cruz tomar<br>
E teu santo nome<br>
Hoje e sempre honrar<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '312',
                'name' => '308 - Escuridão e luz',
                'body' => '1<br>
Nas tormentas dessa vida,<br>
Perto está a perdição.<br>
Aos incautos navegantes,<br>
Quem trará a salvação?<br><br>
<strong>
Resplandeçam nossas luzes
Através do escuro mar,<br>
Pois nas trevas do pecado<br>
Almas podem naufragar!<br><br></strong>
2<br>
Brilha sempre, em graça imen<br>sa,<br>
Rico amor do eterno Deus.
Cumpre a nós mostrar o rumo<br>
Do caminho para os céus.<br><br>
3<br>
Nuvens de paixão mundana<br>
Não nos deixam ver o sol.<br>
Oh, mostremos o perigo<br>
Com as luzes do farol.<br><br>
4<br>
Aos errantes, insensatos,<br>
Guia ao porto divinal!<br>
Em Jesus há vero abrigo<br>
Do furor do temporal.<br><br>
5<br>
Noite eterna se aproxima,<br>
Tenebrosa em seu horror!<br>
Clama, avisa aos infelizes;<br>
Insta-os para o Salvador!<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '313',
                'name' => '309 - Proclamação',
                'body' => '1<br>
Proclamai que Jesus Cristo é Senhor e Rei,<br>
Proclamai! Proclamai!<br>
Que nos livra da cruel condenação da Lei,<br>
Proclamai! Proclamai!<br>
Contai que lá dos céus desceu Jesus,<br>
Por nós sofrendo a morte da nefanda cruz!<br>
Agora, ressurreto, sobre o trono está,<br>
E é Deus de toda graça, que de graça tudo dá!<br><br>
<strong>
Proclamai que Jesus Cristo é Senhor e Rei,<br>
Proclamai! Proclamai!<br>
Que nos livra da cruel condenação da Lei,<br>
Proclamai! Proclamai!<br><br></strong>
2<br>
Proclamai que reina em graça Cristo Salvador,<br>
Proclamai! Proclamai!<br>
Que por cetro de seu reino ele tem o amor,<br>
Proclamai! Proclamai!<br>
Contai aos tristes que a alegria ele tem.<br>
E é dele que aos cansados o descanso vem!<br>
Dizei aos pecadores que ele os quer salvar,<br>
E a todos os cativos que ele os pode libertar!<br><br>
3<br>
Proclamai que em grande glória Cristo voltará,<br>
Proclamai! Proclamai!<br>
E com todos os remidos ele reinará,<br>
Proclamai! Proclamai!<br>
Dizei que, sem demora, todos devem crer<br>
E a Cristo agora mesmo o coração render!<br>
Que estejam preparados quando aqui voltar,<br>
A fim de, redimidos, com louvores o aclamar.<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '314',
                'name' => '310 - Quem salva é só Jesus',
                'body' => '1<br>
De Deus, ó eterna Igreja<br>
Que espalha santa luz,<br>
Proclama aos pecadores:<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
Proclama aos pecadores:<br>
“Quem salva é só Jesus!”<br><br>
2<br>
Aos presos, algemados,<br>
No mundo que seduz,<br>
Revela a esperança:<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
Revela a esperança:<br>
“Quem salva é só Jesus!”<br><br>
3<br>
Atrai os que, perdidos,<br>
Mui longe estão da cruz.<br>
Vai, dize aos desgarrados:<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
“Quem salva é só Jesus!”<br>
Vai, dize aos desgarrados:<br>
“Quem salva é só Jesus!”<br>',
                'audio' => '',
                'indices_id' => '45',
            ],
            [
                'id' => '315',
                'name' => '311 - Avanta, ó crentes',
                'body' => '1<br>
Avante, avante, ó crentes,<br>
Soldados de Jesus!<br>
Erguei seu estandarte,<br>
Lutai por sua cruz!<br>
E contra os inimigos<br>
Em grandes multidões,<br>
O excelso Comandante<br>
Dirige os batalhões.<br><br>
2<br>
Avante, avante ó crentes!<br>
Por Cristo pelejai!<br>
Vesti sua armadura,<br>
Em seu poder marchai!<br>
No posto sempre achados,<br>
Velando em oração,<br>
Em meio dos perigos<br>
Seguindo o Capitão!<br>
3<br>
Avante, avante, ó crentes,<br>
A passo triunfal!<br>
Após combate horrendo,<br>
Virá a paz final!<br>
Então, eternamente,<br>
Será o vencedor<br>
No céu glorificado<br>
Com Cristo, o Salvador!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '316',
                'name' => '312 - Há trabalho certo',
                'body' => '1<br>
Há trabalho certo para ti cristão<br>
Que demanda toda tua devoção.<br>
Vem, alegremente, a Cristo obedecer,<br>
Pois só tu, ó crente, o poderá fazer!<br><br>
<strong>
Por Jesus é Trabalhar!<br>
Prontamente, fielmente, trabalhar!<br>
Em servi-lo, que prazer!<br>
E só tu, ó crente, o poderá fazer!<br><br></strong>
2<br>
Para cada crente o mestre preparou<br>
Um trabalho certo, quando o resgatou.<br>
O trabalho a que Jesus te chama aqui,<br>
Como será feito, se não for por ti?<br><br>
3<br>
Mesmo que humilde, sendo para Deus,<br>
Ele é contemplado lá dos altos céus!<br>
E o esforço feito não será em vão,<br>
Se tiver, de Cristo, plena aprovação!<br><br>
4<br>
Quantos há perdidos, sem a salvação,<br>
Quantos que precisam de consolação!<br>
Como Cristo os ama, faze-os entender,<br>
Pois só tu, ó crente, o poderás fazer.<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '317',
                'name' => '313 - Prontidão',
                'body' => '1<br>
Quem de Cristo ao lado agora quer andar?<br>
Quem a sua vida quer lhe dedicar?<br>
Tudo abandonando, a Jesus seguir,<br>
Encarando as lutas que lhe possam vir?<br><br>
<strong>
Quem de Cristo ao lado sempre quer andar?<br>
Quem quer ajudá-lo outros a chamar?<br>
Pela tua graça, pelo teu amor,<br>
Eis-nos ao teu lado, somos teu, Senhor!<br><br>
</strong>
2<br>
Não ambicionado honras ou poder,<br>
Eis-nos todos firmes para combater.<br>
Quem o amor de Cristo vem a contemplar,<br>
Há de, resoluto, ao seu lado estar.<br><br>
3<br>
Não com ouro ou prata foi, Senhor Jesus,<br>
Que nos redimiste, mas por tua cruz.<br>
Sim, com o teu sangue, sangue remidor,<br>
Tu nos resgataste de uma vez, Senhor!<br><br>
4<br>
A peleja sempre dura nos será;<br>
Inimigo forte nos combaterá;<br>
Mas Onipotente é o Rei dos reis!<br>
A vitória é certa para os seus fiéis!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '318',
                'name' => '314 - Diligência',
                'body' => '1<br>
Ouve! A voz divina clama:<br>
“Quem deseja trabalhar?”<br>
Vastos campos nos convidam,<br>
Hoje entremos a ceifar!<br>
Incessante o Mestre apela,<br>
Chama obreiros para si<br>
Quem responderá dizendo:<br>
“Manda-me, estou pronto aqui?”<br><br>
2<br>
Corre! Aponta aos pecadores<br>
O benigno Salvador!<br>
Vai! Conduze os cordeirinhos<br>
Ao regaço do Pastor!<br>
Leva às almas doloridas<br>
Novas de consolação!<br>
Vai! Proclama a todo mundo:<br>
“Em Jesus há salvação.”<br><br>
3<br>
Oh! Não digas, ocioso:<br>
Eu não tenho o que fazer!”<br>
Eis os povos que padecem,<br>
Multidões a perecer!<br>
Olha o Mestre a convocar-te,<br>
Ouve a voz chamando a ti!<br>
Oh! Responde sem demora:<br>
“Manda-me! Estou pronto aqui!”<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '319',
                'name' => '315 -Serviço do crente',
                'body' => '1<br>
Vamos nós trabalhar, somos servos de Deus,<br>
E o mestre seguir no caminho dos céus!<br>
Com o seu bom conselho o vigor renovar,<br>
Diligentes fazendo o que ele ordenar.<br><br>
<strong>
No labor, sem cessar,<br>
A servir a Jesus.<br>
Com amor e fé e com oração,<br>
Até que volte o bom Senhor!<br><br></strong>
2<br>
Vamos nós trabalhar e os famintos fartar,<br>
Para a fonte os sedentos depressa levar!<br>
Só na cruz do Senhor nossa glória será,<br>
Pois Jesus salvação por seu sangue nos dá!<br><br>
3<br>
Vamos nós trabalhar, ajudados por Deus,<br>
Que a coroa de glória nos dá lá nos céus.<br>
A mansão dos fiéis sempiterna será,<br>
Pois Jesus salvação inefável nos dá!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '320',
                'name' => '316 - Os intentos de Deus',
                'body' => '1<br>
Os seus intentos cumpre Deus<br>
No decorrer dos anos.<br>
Ele executa o seu querer<br>
De acordo com seus planos.<br>
Eia! Aproxima-se o final!<br>
Bem perto o dia vem,<br>
Quando a glória de Deus<br>
Há de o mundo inundar,<br>
Como as águas cobrem o mar.<br><br>
2<br>
Desde o longínquo norte ao sul,<br>
Em todos os recantos,<br>
Sai a mensagem do Senhor<br>
Da boca dos seus santos.<br>
Povos, nações, vinde! Atendei!<br>
O seu apelo ouvi,<br>
Para a glória de Deus<br>
Vir o mundo inundar,<br>
Como as águas cobrem o mar.<br><br>
3<br>
Com a bandeira de Jesus<br>
Avante, caminhemos.<br>
Seu Evangelho, a salvação,<br>
Ao mundo anunciemos.<br>
Contra o pecado e todo o mal<br>
Lutemos com vigor,<br>
Para a glória de Deus<br>
Vir o mundo inundar,<br>
Como as águas cobrem o mar.<br><br>
4<br>
Nosso trabalho vão será<br>
Se Deus não for presente.<br>
Só ele o esforço aqui bendiz<br>
E é quem nutre a semente.<br>
Eia! Aproxima-se o final!<br>
Bem perto o dia vem,<br>
Quando a glória de Deus<br>
Há de o mundo inundar,<br>
Como as águas cobrem o mar.<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '321',
                'name' => '317 - Chamada',
                'body' => '1<br>
Eia, crentes destemidos,<br>
Da verdade convencidos,<br>
Para a luta apercebidos,<br>
No combate entrai!<br>
Eis que surgem, aleivosos,<br>
Erros grandes, perniciosos,<br>
Nestes tempos perigosos,<br>
Vossa fé mostrai!<br>
O dever vos chama.<br>
Vosso Deus proclama<br>
A santa lei do eterno Rei,<br>
Que vosso ardor reclama.<br>
Confessai, pois, resolutos,<br>
Fervorosos, incorruptos,<br>
E com lábios impoluto:<br>
Deus, Verdade e Fé!<br><br>
2<br>
Vós por Cristo libertados,<br>
Não sejais escravizados!<br>
Os direitos alcançados<br>
Firmes sustentai!<br>
Salvação por homens dada,<br>
Paz fingida, paz comprada,<br>
Lei de Deus falsificada,<br>
Tudo rejeitai!<br>
Vosso Deus não muda.<br>
O Senhor ajuda<br>
A quem cumprir, sem desistir,<br>
E seus fiéis escuda.<br>
Avançai, pois, exultando,<br>
Sempre em Cristo confiando,<br>
Vosso testemunho dando:<br>
Deus Verdade e Fé!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '322',
                'name' => '318 - Ceifeiros do Senhor',
                'body' => '1<br>
Ceifeiros da Seara santa,<br>
Quão poucos, fracos sois!<br>
Mas forte é Cristo, vosso Mestre,<br>
Avante, avante pois!<br><br>
<strong>
Os que esperam no Senhor renovar-se-ão!<br>
Crescerão em vigor; subirão até às alturas!<br>
Correrão e sem fadiga andarão sem se cansar!<br>
Correrão e sem fadiga andarão sem se cansar!<br>
Voarão e nas alturas, como águias serão!<br><br>
</strong>
2<br>
Cansados, tristes, sem alento,<br>
Deixai-vos de chorar!<br>
Se Onipotente é vosso Mestre,<br>
Por que desanimar?<br><br>
3<br>
Jesus está convosco sempre,<br>
Assim nos prometeu.<br>
Coragem, pois, irmãos avante,<br>
Eis que ele já venceu!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '323',
                'name' => '319 - Obreiros em marcha',
                'body' => '1<br>
Eis marchamos para aquele bom país,<br>
Onde o crente, sim, é Cristo que o diz,<br>
Com o Salvador, vivendo ali feliz,<br>
Vai com ele descansar.<br>
Trabalhemos, pois, com zelo e com vigor,<br>
Constrangidos pelo seu imenso amor;<br>
Bem servindo em tudo ao grande Salvador,<br>
Eis que a vida vai findar!<br><br>
<strong>
Acordai! Acordai! Despertai! Despertai!<br>
E cantai! Sim,cantai: O Senhor não tardará!<br>
Eis marchamos para aquele bom país,<br>
Onde o crente, sim, é Cristo que o diz,<br>
Com o Salvador, vivendo ali feliz,<br>
Vai com ele descansar.<br><br>
</strong>
2<br>
Eis conosco está o insigne Capitão,<br>
Que nos assegura eterna salvação!<br>
Eis da santa fé o invicto pavilhão!<br>
Vamos, vamos trabalhar!<br>
Eia, avante! Nada temos que temer!<br>
Por Jesus havemos sempre de vencer.<br>
Trabalhemos, pois até ao anoitecer<br>
E o trabalho aqui findar.<br><br>
3<br>
Revestidos da paciência de Jesus,<br>
Redimidos para andar aqui na luz,<br>
Exaltemos juntos hoje a sua cruz,<br>
Vamos, vamos trabalhar.<br>
Os perdidos vamos com amor buscar!<br>
Aos descrentes vamos logo declarar<br>
Que Jesus quer, hoje, a todos resgatar!<br>
Oh, sim, vamos trabalhar!<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '324',
                'name' => '320 - Brilha no viver',
                'body' => '1<br>
Não somente ao se fazer trabalho singular<br>
É mister agir com muito ardor;<br>
Mas as coisas mais humildes a executar<br>
Deves fazê-las com fervor.<br><br>
<strong>
Brilha no meio do teu viver,<br>
Brilha no meio do teu viver!<br>
Pois talvez algum aflito possas socorrer;<br>
Brilha no meio do teu viver!<br><br>
</strong>
2<br>
Oh! Talvez alguma vida possas confortar<br>
Com palavras brandas de amor.<br>
Ou, talvez, algumas almas tristes alcançar<br>
Com a mensagem do Senhor.<br><br>
3<br>
Por maior que venha ser o teu esforço aqui,<br>
Por mais firme a tua devoção,<br>
Quantas almas inda jazem ao redor de ti,<br>
Na mais total escuridão.<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '325',
                'name' => '321 - Mãos ao trabalho',
                'body' => '1<br>
Mãos ao trabalho, jovens!<br>
Vai já passando o alvor.<br>
Eia, enquanto tendes<br>
Vossa vida em flor!<br>
Vamos enquanto é dia,<br>
Com força trabalhar!<br>
Eia, que em vindo a noite<br>
Não há mais lidar<br><br>
2<br>
Mãos ao trabalho, homens!<br>
Firmes, enquanto há luz<br>
Eia, que é tempo agora<br>
De servir Jesus!<br>
Ide o vigor da vida<br>
Todos ao bem votar!<br>
Eia, que em vindo a noite<br>
Não há mais lidar.<br><br>
3<br>
Mãos ao trabalho todos!<br>
Breve nos chega o fim<br>
Quando soar um dia<br>
Da morte o clarim!<br>
Vamos, irmãos, à obra!<br>
Por Cristo trabalhar!<br>
Eia, que em vindo a noite<br>
Vamos descansar.<br>',
                'audio' => '',
                'indices_id' => '46',
            ],
            [
                'id' => '326',
                'name' => '322 - Heroínas da fé',
                'body' => '1<br>
Avante, companheiras,<br>
Na causa de Jesus!<br>
Ativas no trabalho,<br>
Servi enquanto há luz!<br><br>
2<br>
Mostrai, na atividade,<br>
A vossa gratidão<br>
A Cristo, o grande Amigo<br>
O Autor da Redenção.<br><br>
3<br>
O exemplo de Maria<br>
Que, aos pés do Salvador,<br>
Tomou a melhor parte,<br>
Segui com fé e amor.<br><br>
4<br>
Os dons do vosso afeto<br>
A Cristo consagrai!<br>
À Igreja, que é seu corpo,<br>
Dedicação mostrai!<br><br>
5<br>
Erguei-vos heroínas,<br>
E vinde trabalhar!<br>
Mostrai vossas virtudes<br>
Na Pátria, Igreja e Lar!<br>',
                'audio' => '',
                'indices_id' => '47',
            ],
            [
                'id' => '327',
                'name' => '323 - Santa peleja',
                'body' => '1<br>
Nesta arena da santa peleja,<br>
No combate devemos entrar,<br>
Batalhando com fé e coragem,<br>
Pois a noite não tarda em chegar.<br><br>
<strong>
Vamos, vamos, leais companheiras,<br>
Caminhando na luz do Senhor!<br>
A divisa do nosso estandarte<br>
Seja, esperança e amor. (bis)<br><br>
</strong>
2<br>
Mas se o mundo, coberto de trevas,<br>
Nos olhar com rigor ou desdém,<br>
Prossigamos, ousadas, avante,<br>
Espalhando as idéias do bem.<br><br>
3<br>
Pelejemos! A causa é sagrada!<br>
Vamos todas com fé e oração;<br>
E guiados por Deus, Pai celeste,<br>
Cumpriremos a nossa missão!<br>',
                'audio' => '',
                'indices_id' => '47',
            ],
            [
                'id' => '328',
                'name' => '324 - Unidas e firmes',
                'body' => '1<br>
Sempre unidas companheiras,<br>
Declaremos por Jesus,<br>
Guerra santa contra as trevas,<br>
Pelejando junto à cruz!<br><br>
<strong>
Vamos todas, vamos todas,<br>
Sempre unidas no Senhor!<br>
Como esposas, mães ou filhas,<br>
Trabalhemos com fervor!<br><br></strong>
2<br>
Somos fracas, bem sabemos,<br>
Mas havemos de vencer;<br>
Se tivermos confiança<br>
Se cumprirmos o dever.<br><br>
3<br>
Sempre firmes na esperança,<br>
Confiando no Senhor,<br>
Imploremos sua graça<br>
E busquemos seu amor!<br>',
                'audio' => '',
                'indices_id' => '47',
            ],
            [
                'id' => '329',
                'name' => '325 - Aspiração feminina',
                'body' => '1<br>
A nós aqui reunidas,<br>
Senhor envia luz.<br>
São tuas nossas vidas,<br>
Ganhaste-as sobre a cruz.<br>
É vão qualquer trabalho<br>
Sem tua aprovação!<br>
O nosso esforço é falho<br>
Se não nos dás a mão<br><br>
<strong>
Nós crentes redimidas,<br>
Depomos nosso lar<br>
E as nossas próprias vidas<br>
Perante o teu altar.<br><br>
</strong>
2<br>
Se a nossa fé se abala<br>
Em face às tentações,<br>
Levanta a voz e fala<br>
Aos nossos corações.<br>
A experiência viva<br>
Do teu fiel amor<br>
O nosso ardor ativa<br>
E inspira em nós fervor.<br><br>
3<br>
Esposas, mães piedosas,<br>
Queremos ser, Senhor<br>
Fiéis e carinhosas,<br>
Enchendo o lar de amor.<br>
Que paz e harmonia<br>
Dominem nosso lar,<br>
E em tua companhia<br>
Possamos sempre andar.<br><br>
4<br>
Escola de piedade<br>
Que eleva a Igreja a ti,<br>
Seja esta sociedade<br>
Ao teu serviço aqui.<br>
E o mundo despertado,<br>
Contemplará em nós<br>
Rebanho santo e amado,<br>
Atento à tua voz. Amém.<br>',
                'audio' => '',
                'indices_id' => '47',
            ],
            [
                'id' => '330',
                'name' => '325-A  - Jesus Cristo é o Senhor',
                'body' => '1<br>
Todas unidas com santo ardor,<br>
Almas remidas cheias de amor.<br>
Nossa mensagem é de valor,<br>
Pois Jesus Cristo é o Senhor!<br><br>
<strong>
Sim, Jesus Cristo é o Senhor!<br>
Das nossas vidas ele é o Senhor!<br>
Dos nossas lares ele é o Senhor!<br>
E o nosso tempo é do Senhor!<br><br>
</strong>
2<br>
Vamos bem alto o seu Nome erguer,<br>
Nossos recursos oferecer,<br>
Para que o mundo venha saber<br>
Que ele é o Senhor de todo ser!<br><br>
3<br>
Nosso trabalho é para o Senhor,<br>
Nossos talentos são do Senhor.<br>
Vamos, unidas, pois, proclamar<br>
Que ele é o Senhor do céu e mar!<br>',
                'audio' => '',
                'indices_id' => '47',
            ],
            [
                'id' => '331',
                'name' => '326 - Homens presbiterianos',
                'body' => '<strong>Fé</strong><br>
Homens presbiterianos do Brasil<br>
Testemunhas de Jesus, o Salvador!<br>
Levantemo-nos, com fé e mui vigor,<br>
Com mensagem varonil!<br>
O Senhor nos manda a todos proclamar<br>
O valor do sangue que por nós verteu<br>
Lá na cruz onde, bondoso, padeceu<br>
Para a glória nos levar!<br><br>
<strong>
Sim, lutemos por Cristo Jesus,<br>
Apontando aos descrentes ateus<br>
O caminho repleto de luz,<br>
Ó varões santos, filhos de Deus.<br><br></strong>
<strong>Oração<br></strong>
Homens presbiterianos do Brasil<br>
Na oração teremos perenal poder!<br>
E faremos sempre a Bíblia resplender<br>
Nesta Pátria senhoril!<br>
Com Jesus, o nosso grande e bom país<br>
Viverá em paz, e, olhando o seu porvir,<br>
Terá bênção copiosa a espargir,<br>
E o Brasil será feliz!<br><br>
<strong>Trabalho</strong><br>
Homens presbiterianos do Brasil<br>
Que integramos vasta Confederação,<br>
Com valor e piedosa vocação<br>
Trabalhemos, um por mil,<br>
Na grandiosa obra de Jesus, Senhor,<br>
Poderosa, forte, bela e triunfal,<br>
Arvorando, com amor, pendão real,<br>
Exaltando seu labor!<br>',
                'audio' => '',
                'indices_id' => '48',
            ],
            [
                'id' => '332',
                'name' => '327 - Obreiros cristãos',
                'body' => '1<br>
Aqui reunidos, queremos, ó Deus,<br>
À causa da Igreja servir.<br>
Na santa seara, a nós, servos teus,<br>
Oh, mostra, Senhor, como agir.<br>
Aos teus mensageiros, oh, vem, Salvador,<br>
Tornar cada vez mais fiéis!<br>
E dá-lhes amparo e sustento, Senhor,<br>
Em tempos tão maus e cruéis.<br><br>
2<br>
Nas lutas, liberta-os de toda paixão<br>
E dá-lhes o amor eficaz,<br>
O amor que congraça, que faz a união,<br>
O amor do “Evangelho da Paz.”<br>
De vis preconceitos e impulsos carnais<br>
Vem sempre os teus servos guardar,<br>
Unindo-os no afeto de amigos leais,<br><br>
3<br>
Fazendo-os em paz trabalhar.<br>
Oh, dá às mensagens mais alto poder;<br>
A todos inspira na cruz!<br>
Senhor, aos teus servos concede o saber,<br>
Mais fé, mais lampejos de luz!<br>
Dos falsos obreiros a astúcia do mal<br>
Afasta, Senhor, com poder.<br>
E à boa semente do santo trigal<br>
Permite nascer e crescer! Amém.<br>',
                'audio' => '',
                'indices_id' => '49',
            ],
            [
                'id' => '333',
                'name' => '328 - Deus do universo',
                'body' => '1<br>
Deus do universo, de leis imutáveis,<br>
Que nos sustém na luta terreal,<br>
Dá-nos marchar em meio às tuas hostes,<br>
Para servir na luta divinal.<br><br>
2<br>
Filho de Deus, por ele aqui mandado<br>
És com o Pai o mesmo Deus de amor!<br>
Une os teus servos para o teu serviço<br>
Sim, vem unir-nos, pois, em ti, Senhor.<br><br>
3<br>
Ó Santo Espírito, divino Mestre,<br>
A sã doutrina vem nos ensinar!<br>
Traze ao aflito e triste o teu consolo,<br>
E em meio às trevas faze a luz brilhar.<br><br>
4<br>
Ó Deus Triúno, Deus de toda a graça,<br>
Teus pensamentos quão grandiosos são!<br>
Teu povo almeja estar contigo sempre;<br>
“Venha o teu reino” - é a nossa petição.<br>',
                'audio' => '',
                'indices_id' => '49',
            ],
            [
                'id' => '334',
                'name' => '329 - Instalação de pastor',
                'body' => '1<br>
Senhor da Igreja, atende<br>
A nossa petição!<br>
Que o teu trabalho siga<br>
Com grande animação.<br>
Os campos já branquejam,<br>
Convidam a ceifar<br>
E os preciosos frutos<br>
Na Igreja a arrecadar.<br><br>
2<br>
A ti, Senhor, compete<br>
Ceifeiros escolher.<br>
Que tudo realizem<br>
Conforme o teu querer.<br>
Os ânimos prepara,<br>
Inflama os corações<br>
E manda os bons obreiros<br>
Em grandes multidões.<br><br>
3<br>
Se aquele que escolhemos<br>
Mandado foi por ti,<br>
Seu santo ministério<br>
Conduze sempre aqui.<br>
Confirma o pastorado<br>
Com bênçãos especiais<br>
E dá-lhe, em ricos frutos,<br>
Divinas credenciais.<br><br>
4<br>
Alenta-lhe a esperança,<br>
Aumenta nele a fé.<br>
Na lida, não permitas<br>
Que lhe vacile o pé.<br>
E cada vez mais forte,<br>
Mais cheio de fervor,<br>
A todos manifeste<br>
A graça do Senhor. Amém.<br>',
                'audio' => '',
                'indices_id' => '50',
            ],
            [
                'id' => '335',
                'name' => '330 - A Bênção do batismo',
                'body' => '1<br>
Ó Jesus, eu te confesso,<br>
Para sempre és meu Senhor<br>
Obediente, aqui desejo<br>
Pertencer - te, ó Salvador.<br><br>
2<br>
Sendo agora batizado,<br>
Tomo, enfim, o meu lugar<br>
Entre o povo que o teu sangue<br>
Veio lá na cruz comprar.<br><br>
3<br>
Para o mundo, agora., eu morto,<br>
Tenho vida em ti, Jesus,<br>
Já nas trevas não vacilo,<br>
Pois caminho em plena luz.<br><br>
4<br>
Sendo nova criatura,<br>
Santidade buscarei,<br>
Pela qual o mundo veja<br>
Que Tu és Senhor e Rei.<br><br>
5<br>
Fortalece ao meu anseio<br>
De te ser fiel aqui,<br>
Pois minha alma só aspira<br>
A viver de ti em ti. Amém.<br>',
                'audio' => '',
                'indices_id' => '51',
            ],
            [
                'id' => '336',
                'name' => '331 - Oração',
                'body' => '1<br>
Confirma, ó Salvador,<br>
A decisão feliz<br>
De quem, por teu amor,<br>
Deixar o mundo quis,<br>
E agora vem se batizar,<br>
Submisso e humilde ao teu mandar.<br><br>
2<br>
Aperfeiçoa em paz<br>
E em teu divino amor,<br>
O coração que faz<br>
Tal confissão, Senhor!<br>
E em tudo faze o meu viver<br>
Conforme, sempre, o teu querer!<br><br>
3<br>
Ó protetor fiel,<br>
Amparador dos teus,<br>
Do mundo no tropel<br>
Conduz os passos meus!<br>
Nas tentações sê Tu, Senhor,<br>
O meu constante Defensor.<br><br>
4<br>
Nos sentimentos bons,<br>
Na comunhão veraz,<br>
Revela os ricos dons<br>
Que o teu poder nos traz;<br>
Mostrando ao mundo, assim, Jesus,<br>
Que é bom andar na tua luz. Amém.<br>',
                'audio' => '',
                'indices_id' => '51',
            ],
            [
                'id' => '337',
                'name' => '332 - Batismo infantil',
                'body' => '1<br>
Nossos filhos te pertencem,<br>
Ó eterno Deus de amor!<br>
São herdeiros da aliança<br>
Que proclama teu amor,<br>
E os trouxemos hoje aqui<br>
Para os dedicar a ti.<br><br>
2<br>
Desde os dias mais remotos,<br>
Desde os tempos de Abraão,<br>
Do antigo testamento,<br>
Tempo da circuncisão,<br>
O que nasce nesta fé<br>
Do Senhor ovelha é.<br><br>
3<br>
Ao trazê-los ao batismo,<br>
Eis-nos a testemunhar<br>
Que pertencem à Igreja,<br>
Onde os vimos alistar:<br>
Que pertencem ao Senhor<br>
Seu amigo, Salvador.<br><br>
4<br>
Nesta hora tão solene,<br>
Quando a água batismal<br>
Se derrama nos infantes<br>
Com valor sacramental,<br>
Te pedimos, grande Deus,<br>
Abençoa-os lá dos céus. Amém.<br>',
                'audio' => '',
                'indices_id' => '51',
            ],
            [
                'id' => '338',
                'name' => '333 - O batismo',
                'body' => '1<br>
Nós, Senhor, nos alegremos<br>
Ao teu mando obedecer.<br>
Pois tu mesmo nos mandaste<br>
O batismo receber.<br>
Vem, agora, Deus de amor,<br>
Conceder-nos teu favor.<br><br>
2<br>
Este selo nos recorda<br>
Mandamento do Senhor.<br>
É Figura que nos fala<br>
Do poder renovador.<br>
Vem por ele a Igreja unir<br>
Quem te pode aqui seguir.<br><br>
3<br>
Morte ao mundo declaramos,<br>
Morte ao vil pecado sim!<br>
Com Jesus ao nosso lado<br>
A vitória é certa, enfim!<br>
Ó Senhor, vem consagrar<br>
A quem vem se batizar.<br><br>
4<br>
Mortos para o mundo estamos,<br>
Desejando a Deus servir.<br>
Vivos em Jesus queremos<br>
Sua imagem refletir.<br>
Vem, Senhor, aqui fazer<br>
Tua graça em nós crescer. Amém.<br>',
                'audio' => '',
                'indices_id' => '51',
            ],
            [
                'id' => '339',
                'name' => '334 - A conversão',
                'body' => '1<br>
Em cegueira eu andei e perdido vaguei<br>
Longe, longe do meu Salvador!<br>
Mas da glória desceu, o seu sangue verteu<br>
E salvou este pobre pecador.<br><br>
<strong>
Foi na cruz, foi na cruz que um dia eu vi<br>
Meu pecado castigado em Jesus!<br>
Foi ali pela fé, que meus olhos abri<br>
E agora me alegro em sua luz!<br><br>
</strong>
2<br>
Já ouvia falar dessa graça sem par,<br>
Que do céu trouxe Cristo Jesus!<br>
Mas eu surdo me fiz, converter-me não quis<br>
Ao Senhor que por mim morreu na cruz.<br><br>
3<br>
Mas um dia senti meu pecado, e vi<br>
Sobre mim o castigo da Lei!<br>
Apressado fugi, em Jesus me escondi,<br>
E abrigo seguro nele achei.<br><br>
4<br>
Que ditoso, então, foi o meu coração,<br>
Conhecer o excelso amor,<br>
Que levou meu Jesus a sofrer lá na cruz,<br>
E salvar este pobre pecador.<br>',
                'audio' => '',
                'indices_id' => '52',
            ],
            [
                'id' => '340',
                'name' => '335 - Júbilo no céu',
                'body' => '1<br>
Oh, que belos hinos cantam lá no céu,<br>
Pois do mundo o filho mau voltou!<br>
Vede o Pai celeste prestes a abraçar<br>
Esse filho que ele tanto amou!<br><br>
<strong>
Glória! Glória! Os anjos cantam lá!<br>
Glória! Glória! As harpas tocam já!<br>
É o santo coro dando glória a Deus,<br>
Por mais um remido entrar nos céus!<br><br></strong>
2<br>
Oh que belos hinos cantam lá no céu!<br>
É que já se reconciliou<br>
A rebelde alma que, rendida a Deus,<br>
Renascida, para lá voltou!<br><br>
3<br>
Este arrependido vamos festejar,<br>
Como os anjos fazem com fervor.<br>
E anunciemos, com real prazer,<br>
Que se resgatou um pecador.<br>',
                'audio' => '',
                'indices_id' => '52',
            ],
            [
                'id' => '341',
                'name' => '336 - Transformação',
                'body' => '1<br>
Eu, perdido pecador,<br>
Longe do meu Jesus<br>
Me encontrava, sem vigor,<br>
A perecer sem luz.<br>
Meu estado Cristo viu,<br>
Dando-me sua mão,<br>
E salvar-me conseguiu<br>
Da perdição.<br><br>
<strong>
Cristo me amou e me livrou!<br>
O seu imenso amor me transformou!<br>
Foi seu poder, o seu querer!<br>
Sim, Cristo, Salvador, me transformou!<br><br>
</strong>
2<br>
Minha vida, todo o ser,<br>
Quero lhe consagrar!<br>
Ao seu lado vou viver,<br>
O seu amor cantar.<br>
A mensagem transmitir<br>
Aos que perdidos são!<br>
Venham todos já fruir<br>
A salvação.<br>',
                'audio' => '',
                'indices_id' => '52',
            ],
            [
                'id' => '342',
                'name' => '337 - Profissão de fé',
                'body' => '1<br>
O Céu festeja a conversão<br>
De mais um pecador!<br>
Exulta a Igreja de prazer;<br>
É dos de esplendor!<br><br>
2<br>
Sustenta ó Deus o pecador<br>
Que o mundo quis deixar!<br>
Acolhe o nosso novo irmão<br>
Que a fé vem professar.<br><br>
3<br>
Confirma em teu poder, Senhor,<br>
A santa profissão,<br>
E a cerimônia a relembrar<br>
O sangue da aspersão<br><br>
4<br>
Consolador divino, vem<br>
As almas converter!<br>
Vem muitas almas batizar,<br>
Exerce o teu poder! Amém.<br>',
                'audio' => '',
                'indices_id' => '53',
            ],
            [
                'id' => '345',
                'name' => '338 - Dia da profissão de fé',
                'body' => '1<br>
Salve, dia de festa e canto<br>
Quando venho a fé professar<br>
Em Deus Pai, no Espírito Santo,<br>
E em Jesus que veio me salvar<br><br>
2<br>
Salve, tempo que evoca o passado,<br>
Quando a mão do meu Deus me tomou!<br>
Ele, Amigo sem par, ao meu lado<br>
Com amor fraternal me guiou!<br><br>
3<br>
Salve, data de alegre memória,<br>
De convívio, de amor fraternal!<br>
Salve, dia em que canto vitória<br>
Contra as fúrias tremendas do mal.<br>',
                'audio' => '',
                'indices_id' => '53',
            ],
            [
                'id' => '346',
                'name' => '339 - Dia feliz',
                'body' => '<br>
Oh, dia alegre em que aceitei<br>
Jesus e nele a salvação!<br>
O gozo deste coração<br>
Eu mais e mais publicarei.<br><br>
<strong>
Oh, feliz, bem feliz,<br>
O dia em que me converti!<br>
Jesus me ensina a vigiar<br>
E, confiado nele, a orar!<br>
Oh, feliz, bem feliz,<br>
O dia em que me convertil<br><br>
</strong>
2<br>
Completa a grande expiação,<br>
Pertenço agora ao meu Senhor!<br>
Chamou-me a voz do seu amor<br>
E nele achei real perdão!<br><br>
3<br>
Me sacro voto, ó Salvador,<br>
De dia em dia afirmarei!<br>
E além da morte exultarei,<br>
Louvando sempre a ti, Senhor<br>',
                'audio' => '',
                'indices_id' => '53',
            ],
            [
                'id' => '347',
                'name' => '340 - Santa comunhão',
                'body' => '1<br>
Disposta a mesa, ó Salvador,<br>
Estás presente aqui!<br>
Ministra o vinho, parte o pão,<br>
Tipos, Jesus, de ti.<br><br>
2<br>
Juntos, lembramos tua cruz;<br>
Por nós sofreste ali.<br>
Por tua graça divinal,<br>
Vivemos para ti.<br><br>
3<br>
Desperta, anima, enleva os teus,<br>
Fazendo-os discernir<br>
Que Tu presente, ó Cristo, estás<br>
Teu povo a dirigir.<br><br>
4<br>
Na Santa Ceia, ó grande Deus,<br>
Buscamos comunhão<br>
Contigo, nosso Benfeitor,<br>
Com todo vero irmão.<br><br>
5<br>
Sabemos que regressarás<br>
Em majestade e luz!<br>
Juiz Supremo, eterno Rei,<br>
Oh, vem, Senhor Jesus! Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '348',
                'name' => '341 - Vera páscoa',
                'body' => '1<br>
Ó Jesus, ó vera Páscoa<br>
Suspirada dos antigos!<br>
Ó Cordeiro eterno e meigo,<br>
Digna-te assistir aqui!<br><br>
2<br>
Bom Jesus, ó Pão divino,<br>
Pela fé te recebemos.<br>
És nas almas o alimento<br>
Que sustenta o nosso amor.<br><br>
3<br>
Bom Jesus, ó Vinho puro<br>
De perene gozo a fonte,<br>
Faze que nossa alma viva<br>
Para ti, sempre de ti. Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '349',
                'name' => '342 - Comunhão',
                'body' => '1<br>
Atendendo ao que mandaste,<br>
Relembramos, ó Jesus,<br>
O teu grande sacrifício<br>
Consumado sobre a cruz.<br><br>
2<br>
Monumento precioso,<br>
Onde esplende o teu amor,<br>
Esta ceia é simbolismo<br>
Do teu gesto redentor.<br>
3<br>
Recordando o que sofreste,<br>
Aguardamos o porvir,<br>
Quando em majestade e glória,<br>
Como o sol vais refulgir.<br><br>
4<br>
Que por meio desta Ceia<br>
Nós cresçamos em poder;<br>
O Poder com que os remidos<br>
Todo o mal irão vencer. Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '350',
                'name' => '343 - Em memória',
                'body' => '1<br>
Levado pelo imenso amor<br>
Que Tu me tens, Senhor,<br>
À tua Mesa, ó Salvador,<br>
Lembrar-me-ei de ti!<br><br>
2<br>
Por meu pecado, sobre a cruz,<br>
Sofreste, meu Jesus,<br>
Meu Salvador e minha luz,<br>
Lembrar-me-ei de ti!<br><br>
3<br>
Na cruz teu corpo sucumbiu,<br>
Na morte que o feriu.<br>
A mim teu sangue redimiu!<br>
Lembrar-me-ei de ti!<br><br>
4<br>
E quando a morte, enfim, chegar,<br>
Jesus, ao doce lar,<br>
Os teus fiéis virás chamar;<br>
Lembrar-te-ás de mim. Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '351',
                'name' => '344 - A ceia do senhor',
                'body' => '1<br>
Eis-me aqui, Senhor bondoso,<br>
Tua Ceia a celebrar,<br>
E por ela neste instante,<br>
Tua morte anunciar.<br><br>
2<br>
De teu sangue e tua carne,<br>
Pela fé já me nutri,<br>
Pois da vida o pão me deste,<br>
Quando em ti, Jesus, eu cri.<br><br>
3<br>
Proclamando a tua morte,<br>
Eu relembro o grande amor<br>
Que inspirou teu sacrifício<br>
Pelo pobre pecador.<br><br>
4<br>
Que o amor aqui lembrado<br>
Venha encher o coração<br>
Dos que jazem separados<br>
Desta doce comunhão! Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '352',
                'name' => '345 - O pão do mundo',
                'body' => '1<br>
Ó Pão, só por amor partido!<br>
Ó Vinho, dado por amor!<br>
Ó Cristo, vida nos tens sido,<br>
Por tua morte em grande dor.<br><br>
2<br>
Ao pecador atribulado<br>
Vens, mesmo agora, consolar.<br>
De tua Ceia, ó Cristo amado,<br>
Nossa alma vem alimentar. Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '353',
                'name' => '346 - A ceia do Senhor',
                'body' => '1<br>
Não nas mãos, mas em minha alma,<br>
Tomo o corpo de Jesus,<br>
E, em figura, bebo o sangue<br>
Derramado sobre a cruz.<br><br>
2<br>
Do Senhor, o excelso Mestre,<br>
Comemoro o grande amor,<br>
Proclamando a sua morte<br>
Pelo pobre pecador.<br><br>
3<br>
Vem Jesus, Senhor bondoso,<br>
Meu espírito instruir,<br>
Para que, nos dois emblemas,<br>
Eu te possa discernir.<br><br>
4<br>
E permite que hoje eu tenha,<br>
No fruir da salvação,<br>
Com os crentes e contigo<br>
Verdadeira comunhão. Amém.<br>',
                'audio' => '',
                'indices_id' => '54',
            ],
            [
                'id' => '354',
                'name' => '347  - O justo pelos injustos',
                'body' => '1<br>
Ó crentes, cantai entoando o louvor<br>
De quem nos remiu com tão grande amor!<br>
Os crimes do mundo, levando na cruz,<br>
Por nossos pecados foi morto Jesus.<br><br>
2<br>
O preço completo o Justo pagou!<br>
Foi morto e da morte os laços quebrou;<br>
E as trevas da noite tornaram-se m luz,<br>
No dia bendito de nosso Jesus.<br><br>
3<br>
Imagem do céu! Oh, dia primor!<br>
Mercê divinal do grande Senhor!<br>
Quão doce descanso Jesus nos legou,<br>
No santo Domingo em que ressuscitou!<br><br>
4<br>
Agora se cumpre em nós, bom Senhor,<br>
A linda promessa de teu amor:<br>
De que, congregados, Tu sempre estarás<br>
Presente, trazendo-nos bênçãos e paz. Amém.<br>',
                'audio' => '',
                'indices_id' => '55',
            ],
            [
                'id' => '355',
                'name' => '348 - É este o dia',
                'body' => '1<br>
É este o dia que o bom Deus<br>
Criou com sua mão!<br>
A terra inteira, os altos céus,<br>
Louvor alegres dão.<br><br>
2<br>
Foi neste dia que o Senhor<br>
Da tumba ressurgiu!<br>
De Satanás, o atroz furor<br>
Com força repeliu!<br><br>
3<br>
Vinde, louvai ao Rei - Senhor,<br>
Ao Filho de Davi!<br>
Vem ajudar-nos, Salvador,<br>
E habita em nós aqui.<br><br>
4<br>
Glória louvor e adoração<br>
A Cristo vimos dar!<br>
Os altos céus se alegrarão,<br>
Louvando-o sem cessar!<br>',
                'audio' => '',
                'indices_id' => '55',
            ],
            [
                'id' => '356',
                'name' => '349 - Dia do Senhor',
                'body' => '1<br>
Hoje é dia do Senhor!<br>
Entoai o seu louvor<br>
E adorai-o com fervor.<br>
Glória ao nosso Deus!<br><br>
2<br>
Hoje a casa de oração<br>
Procuramos, em união,<br>
E gozamos comunhão<br>
Com o nosso Deus!<br><br>
3<br>
Hoje Cristo, ao pregador<br>
Que anuncia o seu amor,<br>
Dê a prova do favor:<br>
O poder de Deus!<br><br>
4<br>
Hoje é dia de perdão!<br>
Deus convida o coração<br>
A aceitar a Redenção;<br>
Glória ao nosso Deus!<br>',
                'audio' => '',
                'indices_id' => '55',
            ],
            [
                'id' => '357',
                'name' => '350 - A palavra da vida',
                'body' => '1<br>
Fonte da Celeste Vida,<br>
Manifesta o teu poder.<br>
Vivifica os sem alento,<br>
Faze os mortos renascer!<br>
Vida eterna, vida eterna<br>
Nos vieste conceder.<br><br>
2<br>
Ao abrirmos o teu Livro,<br>
Dele emane a luz dos céus!<br>
Esclarece todo engano<br>
E dos erros livra os teus,<br>
Ilumina, ilumina<br>
Nossas almas grande Deus.<br><br>
3<br>
Na leitura desta bíblia,<br>
Dá-nos gozo, ó Senhor!<br>
Tendo, pelo teu ensino,<br>
Comunhão em santo amor.<br>
Exultamos, exultamos<br>
Entoando o teu louvor.<br><br>
4<br>
Pelo estudo da Palavra<br>
Aprendemos de Jesus.<br>
Oh, concede os belos frutos<br>
Que esta instrução produz!<br>
E gozamos, e gozamos<br>
Alegria, vida e luz.<br>',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '358',
                'name' => '351 - Belas palavras de vida',
                'body' => '1<br>
Quero ouvi-las mais outra vez,<br>
Belas palavras de vida!<br>
Narram tudo o que Cristo fez,<br>
Belas palavras de vida!<br>
Elas vêm de cima,<br>
Seu poder anima.<br><br>
<strong>
Que alegres são! Que alegres são!<br>
Essas palavras de vida!<br>
Que alegres são! Que alegres são!<br>
Essas palavras de vida!<br><br></strong>
2<br>
Só Jesus Cristo a todos dá<br>
Belas palavras de vida!<br>
Sem Jesus salvação não há;<br>
Belas palavras de vida!<br>
Com amor conclama,<br>
Para o céu te chama.<br><br>
3<br>
Só Jesus Cristo é Salvador!<br>
Belas palavras de vida!<br>
Quer salvar todo pecador!<br>
Belas palavras de vida!<br>
Ele vivifica<br>
E nos purifica.<br>',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '359',
                'name' => '352 - Leitura bendita',
                'body' => '1<br>
Enquanto, ó Salvador, teu Livro ler,<br>
De auxílio necessito para ver<br>
Da mera letra, além, a ti, Senhor,<br>
E meditar no teu excelso amor.<br><br>
2<br>
À beira-mar, Jesus, partiste o pão,<br>
Alimentando a imensa multidão.<br>
Da vida o pão és Tu ; podes assim<br>
Satisfazer, Senhor, também a mim.<br> Amém.
',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '360',
                'name' => '353 - Ao fim dos estudos',
                'body' => '1<br>
Findo o tempo dos estudos,<br>
Eis-nos grande Instruidor!<br>
Levantamos nossas vozes,<br>
Tributamos-te louvor.<br>
E pedimos, e pedimos<br>
Bênçãos de celeste amor.<br><br>
2<br>
Oh, concede o crescimento<br>
Na ciência e no vigor!<br>
Imprimindo na memória<br>
Teus preceitos, ó Senhor.<br>
Este ensino, este ensino<br>
É de mui real valor.<br><br>
3<br>
Ó Senhor, em nossos lares<br>
Manifesta o teu poder.<br>
E que o teu divino livro<br>
Mais possamos conhecer!<br>
Desejamos, desejamos<br>
Sempre em tua luz viver. <br>Amém.',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '363',
                'name' => '354 - A escola dominical',
                'body' => '1<br>
Dominical é a grande e antiga Escola<br>
Em que se estuda o Livro do Senhor;<br>
A vida aqui se exalta e se acrisola<br>
E alcança em Cristo seu real valor,<br>
E alcança em Cristo seu real valor.<br><br>
<strong>
À Escola, pois, Dominical, irmãos,<br>
Receber celeste luz!<br>
O santo livro, aberto em nossas mãos,<br>
Aprendamos de Jesus.<br><br></strong>
2<br>
De grandes vultos e eras memoráveis<br>
Lições sublimes vimos aprender!<br>
Lições inscritas nalma, inapagáveis,<br>
Que moldam nossas vidas com poder,<br>
Que moldam nossas vidas com poder.<br><br>
3<br>
O Mestre insigne está presente - Cristo,<br>
Que luz e vida à vida plena traz.<br>
O seu ensino igual jamais foi visto!<br>
Tesouros mostra, de alegria e paz,<br>
Tesouros mostra, de alegria e paz.<br><br>
4<br>
Universal, bendita Escola é esta,<br>
Que os seus alunos conta por milhões;<br>
Na qual o estudo é verdadeira festa,<br>
Que empolga crianças, jovens e anciãos,<br>
Que empolga crianças, jovens e anciãos<br>',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '364',
                'name' => '354-A - Escola dominical',
                'body' => '1<br>
Vamos todos à Escola Sagrada<br>
A Palavra de Deus aprender.<br>
A verdade dos céus revelada<br>
Dá-nos luz! Dá-nos vida e poder!<br><br>
<strong>
Trabalhemos pela Escola,<br>
Estudando com amor!<br>
E pregando Jesus Cristo,<br>
Nosso Mestre e Salvador.<br><br></strong>
2<br>
Vamos todos, crianças e adultos,<br>
Palmilhando o caminho da cruz.<br>
Estudar a grandeza dos vultos,<br>
Entre os quais predomina Jesus.<br><br>
3<br>
Propaguemos com fé, corajosos,<br>
Desta Escola o sublime ideal.<br>
E veremos um dia, ditosos,<br>
A vitória do bem sobre o mal.<br>',
                'audio' => '',
                'indices_id' => '56',
            ],
            [
                'id' => '365',
                'name' => '355 - Oração infantil',
                'body' => '1<br>
Amigo dos meninos,<br>
Benigno Salvador!<br>
Conosco está presente,<br>
Querido e Bom Pastor!<br>
Teus cordeirinhos guia<br>
Com tua compaixão,<br>
E dá-nos para sempre<br>
Um reto coração.<br><br>
2<br>
Teus santos mandamentos,<br>
Oh, faze-nos amar!<br>
E tudo que é pecado<br>
De nós vem afastar.<br>
Concede nos estudos<br>
Que temos hoje aqui,<br>
Sejamos instruídos,<br>
Ó grande Deus, por ti. <br>Amém.',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '366',
                'name' => '356 - Jesus menino',
                'body' => '1<br>
Foi também Jesus, um dia,<br>
Como eu, pequeno, assim,<br>
Mas em tudo se fazia<br>
Um modelo para mim.<br>
Na bondade e no cuidado,<br>
No constante obedecer,<br>
Como foi o mestre amado<br>
Eu também desejo ser.<br><br>
2<br>
Sou pequeno mui fraquinho,<br>
E estou sempre a errar!<br>
Mas Jesus, em meu caminho,<br>
Bem me pode auxiliar.<br>
Ternamente me corrige,<br>
Me recorda o que convém.<br>
Seu amor meus pés dirige<br>
Para andar em todo bem.<br><br>
3<br>
Teus ensinos Mestre amado,<br>
Quero atento aqui ouvir,<br>
E assim, por ti guiado,<br>
Tua lei, fiel, cumprir.<br>
Ao teu lado sempre estando,<br>
Quero andar na tua luz,<br>
Minha vida consagrando<br>
Só a ti, Senhor Jesus! <br>Amém.',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '367',
                'name' => '357 - Louvor infantil',
                'body' => '1<br>
Filhos de Jerusalém<br>
Davam a Jesus louvor!<br>
Cantaremos nós, também,<br>
Seu excelso e doce amor!<br><br>
<strong>
Ouve! Ouve! Ouve! Os meninos dão louvor!<br>
Ouve! Ouve! Ouve! Os meninos dão louvor!<br>
Aleluia! Aleluia! Aleluia ao Salvador!<br><br>
2<br>
Graças ao divino Rei<br>
Que, no mundo, quis viver!<br>
Graças pela santa Lei<br>
Que declara o seu querer!<br><br>
3<br>
Grande é o nosso Salvador,<br>
Toda a dívida pagou!<br>
Pela morte o bom Pastor<br>
Seu rebanho resgatou.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '368',
                'name' => '358 - Jesus e as crianças',
                'body' => '1<br>
Congregação<br>
A Jesus crianças vinham<br>
Sua bênção suplicar.<br>
Vós, que agora sois crianças,<br>
Vinde a ele, pois, louvar.<br><br>
2<br>
Se crianças de outro tempo<br>
Aceitou com terno amor,<br>
Hoje a todas as crianças<br>
Salva, ainda,com favor.<br><br>
3<br>
Crianças<br>
Meus pecados no Calvário,<br>
Sobre a cruz Jesus pagou!<br>
A maior das maravilhas<br>
É que Cristo me amou<br><br>
4<br>
Minhas mãos, tão pequeninas,<br>
Se ergam sempre em teu louvor,<br>
Ó Jesus, Senhor bendito,<br>
Por salvar-nos com amor! Amém.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '369',
                'name' => '359 - Jesus me quer bem',
                'body' => '1<br>
Sei que Cristo me quer bem,<br>
Pois na Bíblia assim o diz.<br>
Frágil sou, mas força tem;<br>
Quer levar-me ao bom País.<br><br>
<strong>
Sei que me quer bem,<br>
Quer ver-me feliz,<br>
Sei que me quer bem<br>
A Bíblia assim o diz.<br><br></strong>
2<br>
Tudo fez Jesus por mim,<br>
Só por ele vou viver.<br>
E porque me quer assim,<br>
Hei de amá-lo até morrer!<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '370',
                'name' => '360 - Pequena luz',
                'body' => '1<br>
No mundo, pequenina luz<br>
De Deus eu quero ser,<br>
A refletir, do meu Jesus,<br>
Seu brilho, seu poder.<br><br>
2<br>
Em casa pequenina flor,<br>
Que aos pais possa alegrar,<br>
E do celestial Cultor<br>
O aroma exalar.<br><br>
3<br>
Na escola, pequenina mão<br>
Que aceite com prazer<br>
O farto, nutritivo pão,<br>
Da ciência e do saber.<br><br>
4<br>
Na Igreja, pequenina voz<br>
Que louve ao Salvador,<br>
E nunca, ao fim da vida até,<br>
Me afaste do Senhor<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '371',
                'name' => '361 - Brilhando com Jesus',
                'body' => '1<br>
Manda-nos luzir o Senhor Jesus,<br>
Como vela acesa dá de noite a luz!<br>
Quer que nós brilhemos como a luz do céu:<br>
Tu no teu cantinho e eu no meu!<br><br>
2<br>
Cristo sempre a luz para si requer,<br>
Percebendo logo se ela enfraquecer.<br>
Sempre a luz mostremos, que Jesus nos deu:<br>
Tu no teu cantinho e eu no meu!<br><br>
3<br>
Ao redor, então, manda a luz brilhar<br>
Para as densas trevas hoje dissipar.<br>
Com Jesus brilhemos, pois nos escolheu:<br>
Tu no teu cantinho e eu no meu!<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '372',
                'name' => '362 - Brilhando por Jesus',
                'body' => '1<br>
Vejo no céu, esplendente,<br>
Do sol a clara luz!<br>
Quero viver tão somente<br>
Brilhando por Jesus.<br><br>
<strong>
Brilhando, brilhando,<br>
Brilhando qual doce luz!<br>
Brilhando, brilhando,<br>
Brilhando por meu Jesus!<br><br></strong>
2<br>
Quero na vida exaltá-lo<br>
Na escola e no estudar.<br>
Quero também imitá-lo<br>
Em casa e no brincar.<br><br>
3<br>
Amável com toda gente<br>
Assim me quer Jesus!<br>
De rosto alegre e contente<br>
Brilhando como a luz.<br><br>
4<br>
O feio e triste pecado<br>
Ajuda-me a vencer!<br>
Tendo Jesus ao meu lado,<br>
Eu quero aqui viver.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '373',
                'name' => '363 - Venham as crianças',
                'body' => '1<br>
Venham, venham as crianças<br>
Ao bendito Salvador,<br>
Que na cruz, ao resgatá-las,<br>
Revelou-lhes seu favor.<br>
Cristo agora, Cristo sempre<br>
Nos concede seu amor.<br><br>
2<br>
Venham, venham as crianças,<br>
Pois Jesus as convidou!<br>
Foi também por seus pecados<br>
Que na amarga cruz penou.<br>
Cristo agora, Cristo sempre<br>
Com ternura nos amou.<br><br>
3<br>
Venham, venham as crianças<br>
Ao Senhor Jesus servir!<br>
Receber os seus conselhos,<br>
Sua santa Lei ouvir.<br>
Cristo agora, Cristo sempre<br>
Quer na luz nos conduzir.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '374',
                'name' => '364 - Graças a Deus',
                'body' => '1<br>
De manhã, deixando o leito,<br>
Faço a Deus minha oração.<br>
Dou-lhe graças pela noite,<br>
Pelo sono e proteção.<br><br>
2<br>
Mas também, durante o dia,<br>
Sou mui grato ao meu Senhor,<br>
Pelo pão, o lar e a vida,<br>
Que me provam seu amor.<br><br>
3<br>
E depois vindo a noitinha,<br>
Novamente ao me deitar,<br>
Oro a Deus, agradecido,<br>
Durmo em paz sem recear.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '375',
                'name' => '365 - Convite às crianças',
                'body' => '1<br>
Oh, vinde crianças!<br>
Cantai a linda história<br>
Do bom Messias, Rei dos reis,<br>
Jesus, o Salvador.<br>
E repeti, com gratidão,<br>
A eterna e meiga exclamação:<br>
“Deixai as crianças que venham a mim.”<br><br>
2<br>
Pais crentes traziam<br>
A Cristo seus filhinhos,<br>
Mas quando alguém os impediu,<br>
Tentando os afastar<br>
Ouviu-se a voz do Mestre, então,<br>
Dizer com grande compaixão:<br>
“Deixai as crianças que venham a mim.”<br><br>
3<br>
Oh, vinde crianças!<br>
Jesus deseja a todas<br>
A sua bênção conceder,<br>
E sua salvação!<br>
A voz de Cristo, o Bom Pastor,<br>
Repete ainda com amor:<br>
“Deixai as crianças que venham a mim.”<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '376',
                'name' => '366 - Jóias preciosas',
                'body' => '1<br>
Quando, ó Cristo, aqui vieres<br>
As jóias buscar,<br>
Entre as jóias, ricas jóias,<br>
Também quero estar.<br><br>
<strong>
Como a bela estrela da alva,<br>
Desejo brilhar!<br>
Com Jesus, na sua glória,<br>
Também quero estar!<br><br></strong>
2<br>
Vem olhá-las, vem guardá-las<br>
Com amor, ó Senhor!<br>
Todas ricas, todas lindas<br>
E em pleno fulgor!<br><br>
3<br>
Criancinhas, criancinhas<br>
Que amais a Jesus,<br>
Sois as jóias, ricas jóias<br>
Compradas na cruz.<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '377',
                'name' => '367 - Convite aos meninos',
                'body' => '1<br>
Vinde meninos! Vinde a Jesus!<br>
Ele ganhou-vos bênçãos na cruz!<br>
Os pequeninos ele conduz,<br>
Oh, vinde aos Salvador!<br><br>
<strong>
Que alegria, sem pecado ou mal,<br>
Reunir-nos todos afinal,<br>
Na santa Pátria celestial,<br>
Com Cristo, o Salvador!<br><br>
</strong>
2<br>
Já, sem demora, a todos convém<br>
Ir caminhando à glória do além!<br>
Cristo vos chama, quer vosso bem,<br>
Oh, vinde ao Salvador!<br><br>
3<br>
“Vinde meninos” - ele vos diz;<br>
Quer receber-vos no bom País;<br>
Quer conceder-vos vida feliz.<br>
Oh, vinde ao Salvador!<br><br>
4<br>
Eis a chamada : “Vinde hoje a mim!”<br>
Não há no mundo quem ame assim!<br>
Seu grande amor por vós não tem fim.<br>
Oh, vinde ao Salvador!<br>',
                'audio' => '',
                'indices_id' => '57',
            ],
            [
                'id' => '378',
                'name' => '368 - Despedida',
                'body' => '1<br>
Deus vos guarde pelo seu poder<br>
Permaneça ao vosso lado,<br>
Vos dispense o seu cuidado,<br>
Deus vos guarde pelo seu poder!<br><br>
<strong>
Pelo seu poder e no seu amor,<br>
Estaremos todos com Jesus<br>
Pelo seu poder e no seu amor,<br>
Oh, que Deus vos guarde em sua luz.<br><br></strong>
2<br>
Deus vos guarde para o seu louvor,<br>
Consolados e contentes,<br>
Achegados sempre aos crentes,<br>
Deus vos guarde para o seu louvor!<br><br>
3<br>
Deus vos guarde bem no seu amor.<br>
No trabalho glorioso,<br>
Para o dia venturoso,<br>
Deus vos guarde bem no seu amor!<br>',
                'audio' => '',
                'indices_id' => '58',
            ],
            [
                'id' => '379',
                'name' => '369 - A bíblia para todos',
                'body' => '1<br>
Eis a Bíblia, a Palavra<br>
Que de Deus provém!<br>
Quem com ela vive e lavra,<br>
Vive para o bem!<br><br>
<strong>
Anunciai a Bíblia aos povos!<br>
Ela é vida e luz!<br>
Seus ensinos, sempre novos,<br>
Falam de Jesus!<br><br></strong>
2<br>
Dessa Bíblia, a semente<br>
Ide semear!<br>
Anunciando a toda gente<br>
Que Deus quer salvar!<br><br>
3<br>
Mocidade, homens, velhos,<br>
Ponde-vos de pé!<br>
E as lições dos Evangelhos<br>
Propagai com fé.<br>',
                'audio' => '',
                'indices_id' => '59',
            ],
            [
                'id' => '380',
                'name' => '370 - Proclamação',
                'body' => '1<br>
A lei de Deus aos homens vamos dar.<br>
A cada povo, a todo coração<br>
Pregai a Cristo, seu divino amor,<br>
Verdade eterna, paz e retidão.<br><br>
2<br>
Queremos tua Lei, Senhor, levar<br>
Aos que sem ti estão a perecer!<br>
Teu Livro eterno o tempo atravessou,<br>
E o mundo inteiro, hoje, o pode ler!<br><br>
3<br>
Na voz de muitos mensageiros teus,<br>
No livro impresso em muitas edições,<br>
A divinal Palavra faz-se ouvir<br>
Aos frios, desolados corações!<br><br>
4<br>
O mundo a voz de Deus escutará,<br>
Se com esforço e com dedicação<br>
Nos empenharmos todos no ideal<br>
De anunciar a Luz da Salvação!<br>',
                'audio' => '',
                'indices_id' => '59',
            ],
            [
                'id' => '381',
                'name' => '371 - A bíblia',
                'body' => '1<br>
Da Bíblia a luz celeste<br>
Lampeje aqui, Senhor,<br>
A luz que vem de Cristo,<br>
O Mestre e Salvador.<br>
Tal como o sol no espaço<br>
Difunde a sua luz,<br>
Teu livro aqui resplenda<br>
A glória de Jesus.<br><br>
2<br>
Senhor, que a tua Igreja<br>
Rebrilhe qual fanal,<br>
Da Bíblia refletindo<br>
A luz celestial.<br>
Num proceloso mundo<br>
Rumando à perdição,<br>
Que a Bíblia a todos mostre<br>
Em Cristo a salvação<br><br>
3<br>
Concede inteligência!<br>
Queremos perceber<br>
O que, Senhor, na Bíblia,<br>
Mandaste-nos dizer.<br>
Adestra-nos, ó Mestre,<br>
Com teu Verbo eficaz!<br>
Instrui e repreende,<br>
Destrói o que é falaz. <br>Amém.',
                'audio' => '',
                'indices_id' => '59',
            ],
            [
                'id' => '382',
                'name' => '372 - O crente e a bíblia',
                'body' => '1<br>
Não abandono a Bíblia,<br>
Pois é a voz de Deus.<br>
Dos crentes o tesouro,<br>
Seu guia para os céus.<br>
É luz divina intensa,<br>
Nas trevas a brilhar!<br>
É a voz do Pai celeste<br>
Que a todos vem chamar.<br><br>
<strong>
Não abandono a Bíblia,<br>
Pois é a voz de Deus!<br>
Dos crentes o tesouro,<br>
Seu guia para os céus.<br><br></strong>
2<br>
Não abandono a Bíblia,<br>
O Livro que me diz<br>
Que salvo estou em Cristo,<br>
O que me faz feliz!<br>
E tenho, pois certeza<br>
De lá no céu entrar,<br>
Pois ele, com seu sangue,<br>
Me quis purificar.<br><br>
3<br>
“Não abandono a Bíblia”,<br>
Eu sempre afirmarei.<br>
Quem dera ser ouvido<br>
Por toda a ímpia grei!<br>
Que saiba todo o mundo,<br>
Que a Cristandade tem<br>
A fé, robusta e pura,<br>
Que pela Bíblia vem.<br>',
                'audio' => '',
                'indices_id' => '59',
            ],
            [
                'id' => '383',
                'name' => '373 - Ano novo',
                'body' => '1<br>
Rompe a aurora! Vai-se embora<br>
Mais um ano e outro vem!<br>
Não temamos: Prossigamos,<br>
Caminhando em todo o bem.<br><br>
<strong>
Ano findo nunca mais veremos!<br>
Ano novo hoje recebemos!<br>
Vê, vê o belo dom que<br>
Deus nos dá.<br></strong><br>

2<br>
Raia o dia! Que alegria!<br>
Novo ano eis a surgir!<br>
Bem guiados e amparados,<br>
Cristo vai nos conduzir.<br>
Os talentos, nos momentos<br>
Deste ano a começar,<br>
Consagremos e usemos<br>
Para Deus glorificar.<br>',
                'audio' => '',
                'indices_id' => '60',
            ],
            [
                'id' => '384',
                'name' => '374 - Saudando o ano novo',
                'body' => '1<br>
Ano velho já findado,<br>
Foste o dom do Criador!<br>
Novo ano, que começas,<br>
Vens do mesmo Benfeitor.<br>
Testemunham,testemunham<br>
Desse Deus o grande amor.<br><br>
2<br>
Novo ano, a tua vinda<br>
Celebramos com festim.<br>
Mas teus dias fugitivos<br>
Prestes voam para o fim.<br>
Ignoramos, ignoramos,<br>
Se veremos outro assim.<br><br>
3<br>
Tua graça, ó Deus, cantamos<br>
Com acorde e suave som!<br>
E com grande regozijo<br>
Bendizendo o excelso dom<br>
Ao saudarmos ao saudarmos<br>
Ano novo, ano bom.<br>',
                'audio' => '',
                'indices_id' => '60',
            ],
            [
                'id' => '385',
                'name' => '375 - Ano velho',
                'body' => '1<br>
Ano velho já termina;<br>
Damos a Jesus louvor,<br>
Pois do mal nos tem guardado<br>
Nesse ano, com amor.<br>
Nesse ano, nesse ano com amor.<br><br>
2<br>
Filho eterno, a ti rogamos<br>
Que, por tua compaixão,<br>
Continues concedendo<br>
Aos teus servos proteção.<br>
Aos teus servos, aos teus servos proteção.<br><br>
3<br>
A Palavra preciosa<br>
Faze em nós frutificar!<br>
Das doutrinas do Evangelho<br>
Não nos deixes afastar;<br>
Não nos deixes, não nos deixes afastar.<br><br>
4<br>
O teu povo aqui dirige<br>
A cumprir o seu dever,<br>
E alegre, consagrado,<br>
Ao teu mando obedecer,<br>
Ao teu mando, ao teu mando obedecer.<br><br>
5<br>
Do pecado nos afasta,<br>
Nossos passos vem guiar!<br>
E esquecidas nossas culpas,<br>
Um bom ano vem nos dar.<br>
Um bom ano, um bom ano vem nos dar. <br>Amém.',
                'audio' => '',
                'indices_id' => '60',
            ],
            [
                'id' => '386',
                'name' => '376 - Intercessão pela pátria',
                'body' => '1<br>
Divino Salvador,<br>
Contempla com favor<br>
Nosso País!<br>
Dá-nos interna paz,<br>
Governo bom, capaz,<br>
Dita que satisfaz,<br>
Sorte feliz.<br><br>
2<br>
Confiamos só em ti,<br>
Vem dominar aqui,<br>
Ó Rei dos reis!<br>
Dirige o Pátrio lar,<br>
Ensina a governar<br>
Conforme o teu mandar,<br>
Por justas leis.<br><br>
3<br>
Ao presidente, ó Deus,<br>
Inspira desde os céus<br>
O teu temor!<br>
Que possa bem cumprir<br>
O seu mandato e ouvir,<br>
De todo povo aqui,<br>
Real louvor.<br><br>
4<br>
A nossa Pátria tem<br>
Sustento e todo bem<br>
De ti Senhor!<br>
Aos pobres dá comer,<br>
Aos ricos faze ver<br>
Como convém viver<br>
Em mútuo amor!<br><br>
5<br>
Do crime e rebelião<br>
Concede a proteção<br>
Que é divinal.<br>
Guardar-nos vem, Senhor,<br>
De guerras e terror!<br>
Sê nosso defensor,<br>
Desvia o mal.<br><br>
6<br>
Poder supremo tens!<br>
Depara os altos bens<br>
Da salvação!<br>
Brilhe a benigna luz<br>
Que o teu favor produz!<br>
Reine o Senhor Jesus<br>
Sobre a nação! Amém.<br>',
                'audio' => '',
                'indices_id' => '61',
            ],
            [
                'id' => '387',
                'name' => '377 - A nação para Cristo',
                'body' => '1<br>
Uma voz, nos primórdios da história,<br>
Fez-se ouvir com solene vigor,<br>
Proclamando a estupenda vitória<br>
Sobre a morte, o pecado e a dor!<br>
Foi Jesus, com palavras candentes<br>
Do seu verbo divino e veraz,<br>
Ordenando que a todas as gentes<br>
Se pregasse o Evangelho da paz.<br><br>
<strong>
Eia, crentes, com santa ousadia<br>
Com nobreza e real vocação,<br>
Vamos todos cantar a harmonia<br>
Do evangelho de amor e perdão!<br>
Exaltando esse amor tão profundo,<br>
Que dá vida imortal e feliz.<br>
Para Cristo, a esperança do mundo,<br>
Conquistemos o nosso País.<br>
</strong>
2<br>
Gloriosas missão nos foi dada<br>
De ganhar para Cristo os incréus!<br>
Como é nobre esta grande cruzada<br>
De elevar a Nação para os céus!<br>
Há no entanto, uma força incontida<br>
Que preside este afã singular:<br>
É o amor que votamos à vi-da<br>
Dos perdidos que Deus quer salvar.<br><br>
3<br>
“A Nação para Cristo” - eis o lema,<br>
O anelo sublime e imortal,<br>
A divisa bendita e suprema,<br>
Expressão do mais alto ideal!<br>
Vamos, pois, incessantes na lida,<br>
Em socorro dos nossos irmãos,<br>
Transformar nossa Pátria querida<br>
Num reinado feliz de Cristão!<br><br>',
                'audio' => '',
                'indices_id' => '61',
            ],
            [
                'id' => '388',
                'name' => '378 - Oração pela Pátria',
                'body' => '1<br>
Por nossa Pátria oramos<br>
A ti, supremo Deus!<br>
Por nosso lar clamamos<br>
A ti, ó Rei dos Céus!<br>
Bendize a vida pastoril,<br>
Governa o brio senhoril,<br>
Modera a lida mercantil,<br>
Deus salve a Pátria!<br><br>
2<br>
Da Pátria que nos deste,<br>
Desvie tua mão<br>
Desgraças, fome e peste,<br>
Perfídia e sedição!<br>
Sustenta a ordem nacional,<br>
O bom governo imparcial,<br>
E dá-nos graça divinal:<br>
Deus salve a Pátria!<br><br>
3<br>
Dá-nos real civismo,<br>
Fiel, constante, audaz!<br>
Promove o cristianismo<br>
Do Príncipe da Paz!<br>
Da Pátria afasta as crenças vãs,<br>
Derrama bênçãos temporãs,<br>
Dominem só doutrinas sãs:<br>
Deus salve a Pátria!<br><br>
4<br>
A tua Igreja inflama<br>
Com zelo e terno amor.<br>
E seja o teu programa<br>
Cumprido com vigor.<br>
Então os salvos de Jesus,<br>
Lutando firmes pela cruz,<br>
Difundirão de Cristo a luz<br>
Por toda a Pátria! Amém<br>',
                'audio' => '',
                'indices_id' => '61',
            ],
            [
                'id' => '389',
                'name' => '379 - Petição pela pátria',
                'body' => '1<br>
Minha Pátria para Cristo!<br>
Eis a minha petição.<br>
Minha Pátria tão querida,<br>
Eu te dei meu coração.<br>
Lar prezado, lar formoso,<br>
É por ti o meu amor;<br>
Que meu Deus de excelsa graça<br>
Te conceda seu favor.<br><br>
<strong>
Salve Deus a minha Pátria,<br>
Minha Pátria varonil!<br>
Salve Deus a minha terra,<br>
Esta terra do Brasil.<br><br></strong>
2<br>
Quero pois, com alegria<br>
Ver feliz a mãe gentil,<br>
Por vencer o Evangelho<br>
Nesta terra do Brasil.<br>
Brava gente brasileira,<br>
Longe vá temor servil:<br>
Ou ficar a Pátria salva,<br>
Ou morrer pelo Brasil.<br>',
                'audio' => '',
                'indices_id' => '61',
            ],
            [
                'id' => '390',
                'name' => '380 - Jesus proteja a pátria',
                'body' => '1<br>
Oh, minha Pátria amada,<br>
Brasil dos sonhos meus!<br>
Dirija o teu destino<br>
A mão do eterno Deus!<br>
Que brilhe em teu caminho<br>
A refulgente luz<br>
Do amor e da verdade,<br>
Da glória de Jesus!<br><br>
2<br>
Que o Pai dirija e guarde<br>
A vida nacional!<br>
Nos livre dos perigos,<br>
Pecado e todo mal!<br>
A quantos que governam<br>
Conceda seu favor,<br>
E guie em paz o povo<br>
Nas sendas do amor!<br><br>
3<br>
Jesus proteja sempre<br>
O povo do Brasil,<br>
E sobre a nossa terra<br>
Derrame bênçãos mil!<br>
A gratidão nos faça<br>
Erguer o coração<br>
Em culto fervoroso,<br>
Em santa adoração. Amém.<br>',
                'audio' => '',
                'indices_id' => '61',
            ],
            [
                'id' => '391',
                'name' => '381 - Intercessão pela cidade',
                'body' => '1<br>
A cidade, ó Deus, protege,<br>
Cada rua, cada lar,<br>
Seus cansados transeuntes,<br>
Todo o humano labutar.<br><br>
2<br>
Guarda a todos os governantes<br>
E aos que fazem nossa lei;<br>
E que graças toda gente<br>
Renda a ti, supremo Rei!<br><br>
3<br>
Abençoa a nossa indústria<br>
E os que lutam pelo pão.<br>
E que nós, Senhor, cantemos:<br>
“Tudo vem de tua mão!”<br><br>
4<br>
Abençoa aos que trabalham,<br>
Ao fiel batalhador!<br>
Eficientes, produtivos,<br>
Faze-os sempre, bom Senhor!<br><br>
5<br>
Abençoa nossa Igreja,<br>
Nossos dias, nosso lar;<br>
E que assim, por toda a vida,<br>
Nós possamos te louvar! Amém.<br>',
                'audio' => '',
                'indices_id' => '62',
            ],
            [
                'id' => '392',
                'name' => '382 - Mocidade presbiteriana',
                'body' => '1<br>
Somos jovens num mundo velho<br>
A pregar vivos ideais<br>
Do santo Evangelho<br>
Que pregaram nossos pais.<br>
O mundo muda, mas Cristo não!<br>
Importa que preguemos a salvação!<br><br>
<strong>
Rapazes<br>
Mocidade Presbiteriana,<br>
Somos testemunhas de Jesus!<br>
Temos que dizer ao nosso mundo<br>
Que a solução está na cruz!<br><br>
Moças<br>
Mocidade, testemunhas de Jesus!<br>
Sim, a solução de tudo está na cruz!<br><br>
</strong>
2<br>
Nossas mãos estarão unidas,<br>
Combatendo a escravidão<br>
De preciosas vidas<br>
Sem Jesus, sem direção.<br>
Não temeremos, o tentador!<br>
Clamemos pelo Cristo Libertador!<br><br>
3<br>
Juventude cristã, avante!<br>
Empunhando o pendão real,<br>
Com fé no Comandante,<br>
Venceremos todo o mal!<br>
“Sê testemunha” - disse o Senhor.<br>
Falemos sempre de Jesus, sem temor!<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '393',
                'name' => '383 - Um novo mundo',
                'body' => '1<br>
Jovens fortes chama-nos Jesus,<br>
Para um mundo novo construir.<br>
Trevas, que hoje tentam destruir,<br>
Hão de ser clara luz,<br>
Alvo resplendor!<br><br>
<strong>
Levantemos sobre a terra<br>
Nossos braços libertados,<br>
Ao serviço convocados<br>
Por Jesus;<br>
Pelos que são oprimidos,<br>
Pelos que são perseguidos!<br>
Eia! Que nós venceremos<br>
No poder da cruz!<br><br>
</strong>
2<br>
Ao combate, enquanto não soou<br>
O momento em que há de raiar<br>
Novo mundo, com Jesus, Senhor,<br>
Onde a paz e o amor<br>
Sempre hão de reinar.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '394',
                'name' => '384 - Vamos com Jesus',
                'body' => '1<br>
Ó jovens, atendei! Oh, que lindo pavilhão<br>
Cristo há desfraldado já sobre a nação.<br>
E quer-vos nas fileiras a todos receber<br>
E levar-vos, sem demora, para combater.<br><br>
<strong>
Vamos com Jesus e marchemos sem temor,<br>
Vamos ao combate inflamados de valor<br>
Ânimo, lutemos todos contra o mal;<br>
É Jesus o nosso grande General!<br>
</strong><br>
2<br>
Ó jovens, avançai! O divino Vencedor<br>
Quer juntar-vos todos hoje ao seu redor.<br>
Dispostos à batalha, saí sem vacilar!<br>
Vamos todos, companheiros, vamos a lutar!<br><br>
3<br>
As armas invencíveis do Chefe guiador<br>
São seu Evangelho e seu grande amor.<br>
Com elas revestidos e cheios de poder,<br>
Companheiros, com coragem, vamos a vencer!<br><br>
4<br>
Quem entra nessa guerra,<br>
Com Deus sempre andará,<br>
E o Senhor vitória lhe concederá!<br>
Sim, vamos, companheiros,<br>
Pois, sendo aqui fiéis,<br>
Com Jesus conquistaremos imortais lauréis!<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '395',
                'name' => '385 - O estudante e a Bíblia',
                'body' => '1<br>
Toda luz que a razão irradia<br>
Nós podemos nos livros achar.<br>
Mas só Cristo nossa alma alumia,<br>
Pois só ele dá calma e alegria,<br>
E só ele nos pode guiar<br>
E só ele nos pode guiar<br><br>
2<br>
Muito mais do que bons estudantes<br>
Muito mais do que bons cidadãos,<br>
Precisamos de andar vigilantes<br>
Para sermos da fé bandeirantes;<br>
Pois, colegas, nós somos cristãos!<br>
Pois, colegas, nós somos cristãos!<br><br>
3<br>
Não busquemos apenas a glória<br>
De alcançar quase todo saber,<br>
Quer da ciência, quer da arte ou da história;<br>
A razão é falaz e ilusória!<br>
Sem Jesus nada pode valer!<br>
Sem Jesus nada pode valer!<br><br>
4<br>
À pesquisa da pura verdade<br>
Consagremos o nosso labor.<br>
Todo engano enfraquece a vontade<br>
A mentira não traz liberdade<br>
E não cabe ao engano o louvor!<br>
E não cabe ao engano o louvor!<br><br>
5<br>
Só em Cristo esta Pátria querida<br>
Achará seu futuro feliz.<br>
Nele está toda a luz, toda a vida.<br>
Procuremos tornar difundida<br>
A verdade em nosso País.<br>
A verdade em nosso País.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '396',
                'name' => '386 - Testemunho',
                'body' => '1<br>
Direi ao mundo que sou crente<br>
Não me envergonho de o dizer!<br>
Direi ao mundo que sou crente,<br>
E que por Cristo vou viver.<br>
Direi ao mundo que ele salva,<br>
E nesta vida o seguirei;<br>
E eu bem sei que, crendo nele,<br>
Terás as bênçãos que eu encontrei.<br>
Direi ao mundo que ele ama,<br>
Que Cristo dá perdão e paz.<br>
A minha vida eu lhe entrego.<br>
Jesus, meu guia, satisfaz.<br><br>
2<br>
Direi ao mundo que ele volta,<br>
Se tarde ou cedo, eu não sei!<br>
Mas viverei sempre esperando,<br>
E preparado estarei.<br>
Na sua vinda gloriosa,<br>
Aos que o amarem Jesus dará<br>
Maravilhas infinitas,<br>
E ao lar celeste nos levará.<br>
Oh, dize ao mundo que és crente,<br>
Não te envergonhes de o dizer.<br>
Oh, dize ao mundo que és crente,<br>
E que por Cristo vais viver.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '399',
                'name' => '387 - Combate',
                'body' => '1<br>
Moços, declarai guerra contra o mal,<br>
Exaltai a cruz do Salvador!<br>
Firmes empunhai armas não carnais,<br>
Sempre confiai em seu amor!<br><br>
<strong>
Todos juntos ao redor da cruz,<br>
Prontos, firmes estejamos nós!<br>
Sim, avante, alegres, corajosos,<br>
Sempre ouvindo de Jesus a voz.<br><br></strong>
2<br>
Moços, avançai! Fortes vos tornais,<br>
Se o valor da causa conheceis.<br>
Tremulante em luz, erguei o pendão,<br>
Garantia de que vencereis!<br><br>
3<br>
Nosso Deus e Pai, ouve com favor!<br>
Vem nos ajudar a combater!<br>
E vencida, enfim, a luta final,<br>
A coroa vem nos conceder.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '400',
                'name' => '388 - Mocidade, avante',
                'body' => '1<br>
Mocidade cristã, eia, avante!<br>
Reuni vossas forças: Lutai!<br>
O inimigo potente se mostra,<br>
Mas com Cristo sois fortes: Marchai!<br><br>
<strong>
Mocidade cristã, eis, avante!<br>
Contra o mal, contra o erro lutai!<br>
Tendo o santo Evangelho por arma,<br>
A verdade da Cruz proclamai!<br><br>
</strong>
2<br>
Mocidade cristã, vede o abismo<br>
Onde muitos estão a cair,<br>
Por faltar-lhes a luz do Evangelho,<br>
E não virem a Cristo seguir.<br><br>
3<br>
Eia, pois, mocidade pujante,<br>
Por Jesus, pela fé, avançai!<br>
Ide aos povos levar o Evangelho,<br>
Para a glória de Deus trabalhai!<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '401',
                'name' => '389 - Avante, mocidade!',
                'body' => '1<br>
Eia, avante, mocidade,<br>
Vamos por Jesus lutar!<br>
A peleja é gloriosa,<br>
Deus nos há de auxiliar.<br>
Eia, avante, companheiros,<br>
De olhos postos em Jesus!<br>
Caminhemos destemidos,<br>
Espalhando sempre a luz.<br><br>
<strong>
Por Jesus, com zelo santo,<br>
Vinde, ó jovens, combater!<br>
A mensagem do Evangelho<br>
Proclamai até morrer!<br><br></strong>
2<br>
Eia, avante, mocidade!<br>
Nunca, nunca recuar!<br>
No caminho reto e santo,<br>
Eia, jovens, avançar!<br>
Eia, avante, companheiros!<br>
Soem tais como um clarim<br>
As palavras do convite:<br>
“Vinde todos, vinde a mim!”<br><br>
3<br>
Eia, avante, mocidade,<br>
Confiando no Senhor!<br>
Onde há fé ninguém vacila,<br>
Pois há vida, luz, vigor!<br>
Eia, avante, companheiros,<br>
Vamos firmes batalhar.<br>
Sempre alegres na esperança,<br>
Sempre unidos trabalhar.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '402',
                'name' => '390 - Fiéis soldados',
                'body' => '1<br>
De novo a combater<br>
Por ti, Jesus chamados<br>
Fiéis e bons soldados,<br>
Agora eis-nos aqui,<br>
Unidos no dever<br>
De pelejar por ti.<br><br>
<strong>
Às armas, pois, e com valor!<br>
Fiéis soldados do Senhor,<br>
Fiéis soldados do Senhor!<br>
Às armas, pois, e com valor!<br><br></strong>
2<br>
Encher-nos vem de amor,<br>
De fé e de ousadia,<br>
Poder, sabedoria,<br>
Valor, resolução!<br>
Que andemos, ó Senhor,<br>
Em fraternal união.<br><br>
3<br>
Da cruz do Salvador<br>
Ergamos o estandarte!<br>
Aqui, em toda parte,<br>
Lutemos pela cruz!<br>
Oremos com fervor!<br>
Sirvamos a Jesus!<br><br>
4<br>
Lutar, orar, servir,<br>
Que certa é a vitória!<br>
E após a luta a glória<br>
De lá nos céus estar!<br>
Lutar, orar, servir!<br>
E com Jesus reinar.!<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '403',
                'name' => '391 - Mocidade fiel',
                'body' => '1<br>
Mocidade fiel, redimida,<br>
Mocidade que Cristo salvou,<br>
Inflamada de amor, vossa vida<br>
Consagrai a quem vos libertou!<br>
Consagrai a quem vos libertou!<br><br>
<strong>
Mocidade! Mocidade!<br>
Escutai o convite do Rei!<br>
Ele é a Vida, o Caminho,<br>
A Verdade ! Mocidade!<br>
Mocidade valente, atendei!<br><br></strong>
2<br>
Aos que vivem na sombra da morte,<br>
Na miséria, doença e aflição,<br>
Proclamai bem vibrante, bem forte,<br>
Proclamai em Jesus salvação!<br>
Proclamai em Jesus salvação!<br><br>
3<br>
Eis a luta! Marchando altaneira,<br>
Tendo o peito escudado na fé,<br>
Por Jesus, pela sua bandeira,<br>
Mocidade valente, de pé.<br>
Mocidade valente, de pé.<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '404',
                'name' => '392 - Vida vitoriosa',
                'body' => '1<br>
Cristo amado, sei que na força do mal<br>
Tu, meu Mestre, sempre serás protetor.<br>
Tu me guardas, dando-me paz divinal!<br>
Eu contigo sempre serei vencedor!<br><br>
<strong>
Cristo, Mestre,<br>
Sei que contigo eu sou vencedor!<br>
Dá-me graça,<br>
Dá-me do teu poder, Redentor!<br><br></strong>
2<br>
Que alegria tenho no meu Salvador;<br>
Tenho graça, vida de amor paternal!<br>
Tudo posso, tudo por ti, meu Senhor;<br>
Deste mundo sou vencedor, afinal!<br><br>
3<br>
Não duvido, Cristo, meu Mestre, de ti;<br>
Creio em tua rica promessa, Jesus!<br>
Tu não deixas, nem abandonas aqui<br>
Os que buscam ver tua face de luz.<br><br>
4<br>
Oh! Que bênção ter a certeza do bem,<br>
Ter na vida paz e perdão do Senhor!<br>
Mui alegre vou para a Pátria de além,<br>
Onde reina Cristo Jesus, Rei de amor!<br>',
                'audio' => '',
                'indices_id' => '63',
            ],
            [
                'id' => '405',
                'name' => '393 - União vital',
                'body' => '1<br>
Duas vidas, Senhor, se unem num só ser;<br>
Duas almas e dois nobres corações.<br>
Pelo amor e afeição querem já viver<br>
Sempre juntos na paz ou nas aflições.<br><br>
<strong>
Abençoa, Senhor, esta santa união,<br>
Dando graça e favor, faze-a prosperar<br>
Na alegria, na fé, na consagração!<br>
E este amor verdadeiro vem confirmar.<br><br></strong>
2<br>
Mais um lar que se faz cheio de vigor<br>
Do caráter cristão, base principal.<br>
Dá-lhe vida feliz numa união de amor,<br>
O mais forte, o maior laço conjugal.<br><br>
3<br>
Tu criaste, Senhor, Para o nosso bem,<br>
A união que adorna esta vida aqui.<br>
De uma união mui feliz quantas bênçãos vêm<br>
À família dos teus filhos, glória a ti! Amém<br>',
                'audio' => '',
                'indices_id' => '64',
            ],
            [
                'id' => '406',
                'name' => '394 - Perfeito amor',
                'body' => '1<br>
Perfeito amor, além do entendimento,<br>
Com devoção buscamos teu favor.<br>
Faze perfeito, pois, o casamento<br>
Dos filhos teus que se unem pelo amor.<br><br>
2<br>
Dá-lhes, Senhor, a mútua confiança<br>
E a fé constante em Cristo, o Salvador.<br>
As suas almas nutre na esperança<br>
De conservarem o mais puro amor.<br><br>
3<br>
Dá que eles tenham forças e alegria<br>
Nos dissabores, lutas, provações!<br>
Que assim conservem juntos a harmonia,<br>
Perfeitos tendo sempre os corações. Amém.<br>',
                'audio' => '',
                'indices_id' => '64',
            ],
            [
                'id' => '407',
                'name' => '395 - Amor no lar',
                'body' => '1<br>
Mui felizes nos correm os dias<br>
E depressa se esvai nossa dor!<br>
São benditas as sãs alegrias,<br>
Quando reina no lar doce amor!<br><br>
2<br>
Os caminhos pisamos juncados,<br>
Sim, juncados de ramos em flor!<br>
Surgem bênçãos de todos os lados,<br>
Quando reina no lar doce amor!<br><br>
3<br>
Saboroso é o pão que fruímos,<br>
Se o fruímos de nosso labor!<br>
Sim, contente, em tudo sorrimos,<br>
Quando reina no lar doce amor!<br><br>
4<br>
Os pais crentes aos filhos afirmam<br>
As verdades da Lei do Senhor!<br>
E com obras o ensino confirmam,<br>
Quando reina no lar doce amor!<br><br>
5<br>
Se sentimos em casa a pobreza,<br>
Se há pobreza também ao redor,<br>
Suportável será, com certeza,<br>
Quando reina no lar doce amor!<br>',
                'audio' => '',
                'indices_id' => '65',
            ],
            [
                'id' => '408',
                'name' => '396 - Graças pelo aniversário',
                'body' => '1<br>
Um ano mais de vida<br>
Guardou-vos o Senhor!<br>
E deu-vos fiel guarida<br>
No seu divino amor.<br><br>
<strong>
De coração dai graças<br>
Ao vosso eterno Pai!<br>
Pois mais um ano passa,<br>
A Deus mil graças dai!<br><br></strong>
2<br>
De noite, em claro dia,<br>
No inverno e no verão,<br>
Na dor e na alegria<br>
Gozastes proteção.<br><br>
3<br>
No coração que ama<br>
O terno Salvador,<br>
Existe um canto alegre<br>
Que espalha o teu louvor.<br><br>
4<br>
Ensina-nos, ó Cristo,<br>
O que convém lembrar,<br>
E todo o nosso tempo<br>
No bem aproveitar. Amém.<br>',
                'audio' => '',
                'indices_id' => '66',
            ],
            [
                'id' => '409',
                'name' => '397 - Por minha boa mãe',
                'body' => '1<br>
Por minha boa mãe<br>
E pelo seu amor,<br>
Na terra, sem igual,<br>
Eu louvo-te, ó Senhor.<br><br>
<strong>
É grande o bem<br>
Que na alma tem<br>
Quem pode alguém<br>
Chamar de mãe!<br><br></strong>
2<br>
Pois ela me cuidou<br>
Da vida ao despontar.<br>
E aos pés do bom Jesus<br>
Feliz me fez andar.<br><br>
3<br>
Se pobre ou rico eu for,<br>
Jamais hei de esquecer<br>
A minha boa mãe,<br>
Enquanto aqui viver.<br><br>
4<br>
É grato aqui sentir<br>
De mãe o puro amor.<br>
Por ela o coração<br>
Bendize ao Criador.<br>',
                'audio' => '',
                'indices_id' => '67',
            ],
            [
                'id' => '410',
                'name' => '398 - Outra vez cantamos',
                'body' => '1<br>
Pai, outra vez cantamos teu louvor<br>
A uma voz, ao templo teu deixar.<br>
Bemdito és Tu, conosco estás, Senhor,<br>
Com tua paz vem nos abençoar.<br><br>
2<br>
Que tua paz levemos para o lar;<br>
Sê Tu conosco até ao anoitecer!<br>
E do pecado, ó Pai, vem nos guardar<br>
Ao virmos nós teu Nome engrandecer.<br><br>
3<br>
Que tua paz nos guie, qual fanal,<br>
Durante a noite, para nos guardar<br>
Na escuridão da vida e contra o mal,<br>
Pois luz e trevas podes dominar.<br><br>
4<br>
Dá-nos, Senhor, a tua paz fruir<br>
A cada instante, em nosso labutar!<br>
E adentrando a Pátria do porvir,<br>
A paz perfeita iremos desfrutar. Amém.<br>',
                'audio' => '',
                'indices_id' => '68',
            ],
            [
                'id' => '411',
                'name' => '399 - Término do culto',
                'body' => '1<br>
Findado agora o culto, ó Deus,<br>
Prestado em teu louvor,<br>
Despede em paz e guia os teus<br>
Até chegarmos lá nos céus,<br>
Ó Pai de vero amor.<br><br>
2<br>
De Cristo dá-nos sempre ter<br>
A graça singular!<br>
No teu amor permanecer,<br>
No Santo Espírito viver,<br>
Em comunhão sem par. Amém.<br>',
                'audio' => '',
                'indices_id' => '68',
            ],
            [
                'id' => '412',
                'name' => '400 - Oração por proteção',
                'body' => '1<br>
Grande Deus! Em paz,agora,<br>
Despedimo-nos, Senhor.<br>
Certos de fruir as bênçãos<br>
Que provém do teu amor.<br>
Dá-nos forças, dá-nos forças,<br>
Neste mundo de amargor.<br><br>
2<br>
Graças, graças nós rendemos<br>
Pela tua Redenção.<br>
E termos jubilosos,<br>
Tua santa proteção.<br>
Deus eterno, Deus eterno,<br>
Reina em cada coração. Amém.<br>',
                'audio' => '',
                'indices_id' => '68',
            ],
            [
                'id' => '415',
                'name' => 'A · Ofertório',
                'body' => 'Tudo vem de ti Senhor<br>
E do que é teu, te damos. Amém.<br>',
                'audio' => '',
                'indices_id' => '70',
            ],
            [
                'id' => '416',
                'name' => 'B · Amém Tríplice',
                'body' => 'Amém, amém, amém.',
                'audio' => '',
                'indices_id' => '70',
            ],
            [
                'id' => '417',
                'name' => 'C · Amém Quádruplo',
                'body' => 'Amém, amém, amém, amém.',
                'audio' => '',
                'indices_id' => '70',
            ],
            [
                'id' => '418',
                'name' => 'D · Amém Sétuplo',
                'body' => '[Soprano] Amém, amém, amém, amém, amém, amém, amém.<br>
[Outros] Amém, amém, amém, amém, amém, amém.<br>',
                'audio' => '',
                'indices_id' => '70',
            ],
        ];

        $table = $this->table('hinos');
        $table->insert($data)->save();
    }
}
