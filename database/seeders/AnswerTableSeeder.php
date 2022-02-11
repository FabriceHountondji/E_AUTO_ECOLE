<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([

            // REPONSES POSSIBLES TEST 1

            [
                'label' => 'la signalisation verticale, horizontale, lumineuse et les signes des agents',
                'status' => true,
            ],

            [
                'label' => 'les intersections en X, en Y et en T',
                'status' => false,
            ],

            [
                'label' => 'les lignes continues, les lignes discontinues et les lignes mixtes',
                'status' => false,
            ]
            ,
            [
                'label' => 'l\'ensemble des marques peintes sur la chaussée',
                'status' => true,
            ],

            [
                'label' => 'l\'ensemble des signes des agents de sécurité',
                'status' => false,
            ],

            [
                'label' => 'l\'ensemble des règles applicables en agglomération',
                'status' => false,
            ],

            [
                'label' => 'autorise le dépassement',
                'status' => false,
            ],

            [
                'label' => 'interdit le dépassement',
                'status' => true,
            ],

            [
                'label' => 'est réservee pour l\'arret des bus',
                'status' => false,
            ],

            [
                'label' => 'interdit la circulation à droite',
                'status' => false,
            ],

            [
                'label' => 'autorise le dépassement',
                'status' => true,
            ],

            [
                'label' => 'est réservee pour l\'arret des bus',
                'status' => false,
            ],

            [
                'label' => '20 m',
                'status' => false,
            ],

            [
                'label' => '1,33 m',
                'status' => false,
            ],

            [
                'label' => '3 m',
                'status' => true,
            ],

            [
                'label' => 'si la ligne discontinue est plus proche du conducteur',
                'status' => true,
            ],

            [
                'label' => 'si la ligne continue est plus proche du conducteur',
                'status' => false,
            ],

            [
                'label' => 'si la chaussée est assez large',
                'status' => false,
            ],

            [
                'label' => 'interdit de stationnement',
                'status' => true,
            ],

            [
                'label' => 'autorise l\'arret',
                'status' => false,
            ],

            [
                'label' => 'Indique une zone d\'arret de bus',
                'status' => false,
            ],

            [
                'label' => '10 m',
                'status' => true,
            ],

            [
                'label' => '5 m',
                'status' => false,
            ],

            [
                'label' => '15 m',
                'status' => false,
            ],

            [
                'label' => 'interdit de stationnement',
                'status' => true,
            ],

            [
                'label' => 'interdit de stationnement',
                'status' => false,
            ],

            [
                'label' => 'autorise l\'arret',
                'status' => false,
            ],

            [
                'label' => 'Indique une zone d\'arret de bus',
                'status' => true,
            ],

            [
                'label' => 'je m\'arrete pour le laisser passer',
                'status' => true,
            ],

            [
                'label' => 'je klaxonne',
                'status' => false,
            ],

            [
                'label' => 'je passe',
                'status' => false,
            ],

            [
                'label' => 'je m\'arrête',
                'status' => true,
            ],

            [
                'label' => 'j\'applique la règle de la priorité à droite',
                'status' => false,
            ],

            [
                'label' => 'je passe si je suis engagé dans l\'intersection',
                'status' => true,
            ],

            [
                'label' => 'je ralentis et je passe si je le vois de face',
                'status' => false,
            ],

            [
                'label' => 'je ralentis et je m\'arrête si je le vois de face',
                'status' => true,
            ],

            [
                'label' => 'mon permis de conduire',
                'status' => true,
            ],

            [
                'label' => 'la carte grise',
                'status' => true,
            ],

            [
                'label' => 'ma carte d\'identité',
                'status' => false,
            ],

            [
                'label' => 'mes feux de route',
                'status' => false,
            ],

            [
                'label' => 'mes feux de croisement',
                'status' => true,
            ],

            [
                'label' => 'mes feux de brouillard avant',
                'status' => true,
            ],

            [
                'label' => 'les feux de position',
                'status' => true,
            ],

            [
                'label' => 'les feux de route',
                'status' => false,
            ],

            [
                'label' => 'les feux de croisement',
                'status' => true,
            ],

            [
                'label' => 'je peux circuler sur une chaussée à double sens',
                'status' => false,
            ],

            [
                'label' => 'je peux circuler sur une chaussée à sens unique',
                'status' => false,
            ],

            [
                'label' => 'je ne peux pas circuler',
                'status' => true,
            ],

            [
                'label' => 'sans la plaque d\'immatriculation,avec assurance',
                'status' => false,
            ],

            [
                'label' => 'avec la plaque d\'immatriculation portant le numéro de châssis',
                'status' => false,
            ],

            [
                'label' => 'avec la plaque d\'immatriculation homologuée par le service chargé des transports',
                'status' => true,
            ],

            [
                'label' => 'feux de détresse',
                'status' => false,
            ],

            [
                'label' => 'feux de croisement',
                'status' => false,
            ],

            [
                'label' => 'feux de position',
                'status' => true,
            ],

            [
                'label' => 'de l\'importance du trafic',
                'status' => true,
            ],

            [
                'label' => 'de certains risques prévisibles',
                'status' => true,
            ],

            [
                'label' => 'de la visibilité',
                'status' => true,
            ],

            [
                'label' => '80km/h',
                'status' => false,
            ],

            [
                'label' => '60km/h',
                'status' => true,
            ],

            [
                'label' => '40km/h',
                'status' => false,
            ],


            // REPONSES POSSIBLES TEST 2

            [
                'label' => 'des ralentisseurs',
                'status' => true,
            ],
            [
                'label' => 'une déformation de la chaussée',
                'status' => false,
            ],
            [
                'label' => 'une limitation de vitesse',
                'status' => true,
            ],
            [
                'label' => 'temporaire',
                'status' => true,
            ],

            [
                'label' => 'constante',
                'status' => false,
            ],

            [
                'label' => 'd\'une signalisation d\'itinéraire bis',
                'status' => true,
            ],

            [
                'label' => 'oui',
                'status' => true,
            ],

            [
                'label' => 'non',
                'status' => false,
            ],

            [
                'label' => 'aucune des deux premieres reponses ',
                'status' => false,
            ],

            [
                'label' => 'je ralentis maintenant',
                'status' => false,
            ],

            [
                'label' => 'j\'attends',
                'status' => true,
            ],

            [
                'label' => 'aucune des deux premieres reponses',
                'status' => false,
            ],

            [
                'label' => 'un danger',
                'status' => true,
            ],

            [
                'label' => 'un rond point',
                'status' => true,
            ],

            [
                'label' => 'une signalisation temporaire',
                'status' => false,
            ],

            [
                'label' => 'une interdiction',
                'status' => true,
            ],

            [
                'label' => 'une indication',
                'status' => true,
            ],

            [
                'label' => 'une bifurcation',
                'status' => false,
            ],

            [
                'label' => 'pour le feu tricolore',
                'status' => true,
            ],

            [
                'label' => 'pendant 150m',
                'status' => false,
            ],

            [
                'label' => 'uniquement sur cette route',
                'status' => true,
            ],

            [
                'label' => 'oui',
                'status' => false,
            ],

            [
                'label' => 'non',
                'status' => true,
            ],

            [
                'label' => 'rien des deux',
                'status' => false,
            ],

            [
                'label' => 'une école',
                'status' => true,
            ],

            [
                'label' => 'un arrêt de bus',
                'status' => false,
            ],

            [
                'label' => 'un centre de loisir',
                'status' => true,
            ],

            [
                'label' => 'Je circule à sens unique',
                'status' => true,
            ],

            [
                'label' => 'je circule à double sens',
                'status' => false,
            ],

            [
                'label' => 'je circule comme je veux',
                'status' => false,
            ],

            [
                'label' => 'un rond point',
                'status' => true,
            ],

            [
                'label' => 'une gare routière',
                'status' => false,
            ],

            [
                'label' => 'un passage de tramway',
                'status' => true,
            ],

            [
                'label' => 'un vent latéral',
                'status' => true,
            ],

            [
                'label' => 'une zone de passage aérien',
                'status' => false,
            ],

            [
                'label' => 'un virage dangereux',
                'status' => false,
            ],

            [
                'label' => 'une limitation de vitesse',
                'status' => true,
            ],

            [
                'label' => 'une obligation',
                'status' => false,
            ],

            [
                'label' => 'une interdiction',
                'status' => true,
            ],

            [
                'label' => 'je ralentis et je passe',
                'status' => true,
            ],

            [
                'label' => 'je passe sans ralentir',
                'status' => false,
            ],

            [
                'label' => 'je ralentis et je m\'arrete',
                'status' => false,
            ],

            [
                'label' => 'le feu vert',
                'status' => false,
            ],

            [
                'label' => 'le feu rouge',
                'status' => true,
            ],

            [
                'label' => 'le feu orange',
                'status' => false,
            ],

            [
                'label' => 'la signalisation lumineuse',
                'status' => false,
            ],

            [
                'label' => 'la signalisation horizontale',
                'status' => false,
            ],

            [
                'label' => 'la signalisation des agents',
                'status' => true,
            ],

            [
                'label' => 'je passe avec prudence',
                'status' => false,
            ],

            [
                'label' => 'je m\'arrete',
                'status' => true,
            ],

            [
                'label' => 'je ralentis,je serr ma droite et je tourne',
                'status' => false,
            ],

            [
                'label' => 'vert-jaune-rouge',
                'status' => true,
            ],

            [
                'label' => 'jaune-vert-rouge',
                'status' => false,
            ],

            [
                'label' => 'rouge-vert-jaune',
                'status' => true,
            ],

            [
                'label' => 'accélérer',
                'status' => false,
            ],

            [
                'label' => 'je serre ma droite sans accélérer',
                'status' => true,
            ],

            [
                'label' => 'm\'arrêter',
                'status' => false,
            ],

            [
                'label' => 'Une bonne tenue de route',
                'status' => false,
            ],

            [
                'label' => 'la fatigue',
                'status' => true,
            ],

            [
                'label' => 'le non respect des règles de circulation',
                'status' => true,
            ],

            [
                'label' => 'la vitesse excessive ou non adaptée',
                'status' => true,
            ],

            [
                'label' => 'la conduite dans un état d\'ivresse',
                'status' => true,
            ],


        ]);
    }
}
