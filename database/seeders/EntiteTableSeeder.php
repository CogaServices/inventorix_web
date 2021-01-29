<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EntiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entite')->insert([
            'Raison_sociale'=>'Votre Raison social',
            'Code_postal'=>'00225',
            'Type_particulier'=>null,
            'Nb_site'=>0,
            'Nom_responsable_projet'=>null,
            'forme_de_societe'=>'',
            'Objet_social'=>'',
            'RCCM'=>null,
            'NCC'=>null,
            'Nom_du_groupe'=>null,
            'Contact_organisation'=>'',
            'Contact_responsable_projet'=>null,
            'Code_automatique'=>'',
            'Numero_Ordre'=>null,
            'Adresse_Siege_Social'=>null,
            'NIdentification_fiscale'=>null,
            'Sigle'=>null,
        ]);
    }
}
