<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([

            [
                'label' => 'Quelles qont les différentes signalisations routières ?',

            ],

            [
                'label' => 'La signalisation horizontale est :',


            ],

            [
                'label' => 'La ligne continue blanche centrale :',

            ],

            [
                'label' => 'La ligne discontinue blanche centrale :',
            ],

            [
                'label' => 'Les traits de la ligne discontinue blanche centrale hors agglomération ont une longueur de :',

            ],

            [
                'label' => 'La ligne mixte autorise le dépassement :',

            ],

            [
                'label' => 'La ligne jaune continue sur la bordure du trottoir :',
            ],

            [
                'label' => 'L\'intervalle entre deux traits d\'une ligne discontinue blanche centrale est de :',
            ],

            [
                'label' => 'La ligne jaune discontinue sur la bordure du trottoir :',
            ],

            [
                'label' => 'La ligne jaune brisée en bordure de la chaussée :',
            ],

            [
                'label' => 'A la vue de la flèche de rabattement, je dois :',
            ],
            [
                'label' => 'La circulation sur les bandes d\'arrêt d\'urgence de l\'autoroute est autorisée :',
            ],

            [
                'label' => 'La bande rouge discontinue de blanc le long du trottoir, interdit :',
            ],

            [
                'label' => 'Sur les lignes hachurées appelées zébras :',
            ],

            [
                'label' => 'A la vue du panneau C13a :',
            ],

            [
                'label' => 'A la rencontre du panneau " STOP " que dois-je faire ? ',
            ],

            [
                'label' => 'Que signifie le panneau A15c ? ',
            ],

            [
                'label' => 'Que m\'indique le panneau A19 ?',
            ],

            [
                'label' => 'Que signifie le panneau A21a',
            ],

            [
                'label' => 'Devant un panneau triangulaire pointe en bas, que dois-je faire ? ',
            ],


            // TEST 2 PERMIS A

            [
                'label' => 'La signalisation m\'annonce ?',
            ],

            [
                'label' => 'il s\'agit d\'une signalisation :',
            ],

            [
                'label' => 'La signalisation me concerne ?',
            ],

            [
                'label' => 'Je prends la prochaine sortie ',
            ],

            [
                'label' => 'La signalisation m\'annonce un danger',
            ],

            [
                'label' => 'La signalisation m\'indique :',
            ],

            [
                'label' => 'Je devrais rouler à 70km/h ',
            ],

            [
                'label' => 'Ce panneau m\'interdit de tourner à gauche :',
            ],

            [
                'label' => 'Je peux rencontrer :',
            ],

            [
                'label' => 'La signalisation m\'indique que :',
            ],

            [
                'label' => 'Je vais rencontrer :',
            ],

            [
                'label' => 'Je vais rencontrer :',
            ],

            [
                'label' => 'La signalisation m\'annonce :',
            ],

            [
                'label' => 'Pour les feux tricolores,au feu vert :',
            ],

            [
                'label' => 'Le feu jaune annonce :',
            ],

            [
                'label' => 'De toutes les signalisations routières,laquelle prime sur les autres ?',
            ],

            [
                'label' => 'Aux feux tricolores dont le rouge est allumé :',
            ],

            [
                'label' => 'les feux tricolores s\'allument dans l\'ordre suivant :',
            ],

            [
                'label' => 'Quand je suis sur le point d\'être dépassé, je dois :',
            ],

            [
                'label' => 'Les principaux facteurs d\'accident sont :',
            ],

        ]);
    }
}
