<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('ID_article');
            $table->string('Code_barre', 50);
            $table->string('Nom_article', 50);
            $table->integer('Prix_dachat');
            $table->date('Date_achat')->nullable();
            $table->date('Date_mise_service');
            $table->string('N_inventaire', 50)->nullable();
            $table->string('N_série', 50)->nullable();
            $table->string('Numero_Lot', 50)->nullable();
            $table->integer('Quantité');
            $table->integer('Valeur_Residuelle')->nullable();
            $table->double('Taux_Amortissement')->nullable();
            $table->string('Modèle', 50)->nullable();
            $table->string('Imput_Compta', 50)->nullable();
            $table->string('Lieu_precis', 50)->nullable();
            $table->longText('Observation')->nullable();
            $table->integer('Nb_annee_Amort')->nullable();
            $table->integer('Nb_annee_Garant')->nullable();
            $table->date('Date_fin_Amort')->nullable();
            $table->date('Date_fin_Garant')->nullable();
            $table->string('Etiquette', 50)->nullable();
            $table->string('Sortie_Inv', 50)->nullable();
            $table->string('Composant', 50)->nullable();
            $table->integer('Id_compo_art')->nullable();
            $table->string('Mise_Au_Rebut', 50)->nullable();
            $table->string('Destruction', 50)->nullable();
            $table->string('Vente', 50)->nullable();
            $table->string('Echange', 50)->nullable();
            $table->string('Contrat_Destr', 50)->nullable();
            $table->string('Bien_Concession', 50)->nullable();
            $table->string('Subvention_Invest', 50)->nullable();
            $table->integer('Id_four')->nullable()->index('FK_Article_FOURNISSEUR');
            $table->integer('Id_etat')->nullable()->index('FK_Article_ETAT');
            $table->integer('Id_marq')->nullable()->index('FK_Article_MARQUE');
            $table->integer('Id_piece')->index('FK_Article_PIECE');
            $table->integer('Id_sousfami')->index('FK_Article_SOUS_FAMILLE');
            $table->integer('Id_devise')->nullable()->index('FK_Article_DEVISE');
            $table->integer('Id_inv')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
