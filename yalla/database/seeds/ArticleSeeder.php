<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Article::create([
          'title'=>'Fest-noz solidaire le 29 octobre à Poullaouen',
          'date'=>'27 septembre 2016',
          'categorie'=>'non classé',
          'slug'=>'fest',
          'contenu'=>'Yalla! Pour les Enfants vous convie le samedi 29 octobre à un fest-noz de levée de fonds dont les entiers bénéfices reviendront à son école d’Aley, située au Liban, à quelques kilomètres de Beyrouth.

                      Vous pourrez y apprécier les talents des musiciens et chanteurs, Marie-Hélène Baron, Laurent Bigot, Yann Boulanger, Jean-Daniel Bourdonnay, Pierre Crépillon, Annie Ebrel, Ifig Flatrès, Marie-Laurence Fustec, Riwal Fustec, Yann Goasdoué, Maurice Guillou, Jean-Paul Guyomarc’h, Jean Herrou, Brigitte Le Corre, Yann Le Corre, Bruno Le Manach, Marie-Noëlle Le Mapihan, Pierre-Yves Le Panse, François Perennes, Iffig Poho, Christian Rivoalen, qui s’engagent bénévolement pour soutenir Yalla! Pour les Enfants.

                      Cette fête traditionnelle bretonne où règnent la bonne humeur, la convivialité, la gaieté fait écho au dialogue interculturel mené par Yalla ! Pour les Enfants qui entend réunir au travers de projets culturels communs la communauté d’accueil libanaise et la communauté syrienne en exil pour construire une paix durable. Avec la participation active de : Maryam Samaan, Cyrille Flejou, AFPS Centre Bretagne, la mairie de Poullaouen, Le Télégramme, Ouest-France, Radio Montagne Noire, Radio Kreiz Breizh, Radio Bleu Breizh Izel',
        ]);

        \App\Article::create([
          'title'=>'Assemblée Générale de Yalla !',
          'date'=>'25 octobre 2022',
          'categorie'=>'paintball',
          'slug'=>'louurd',
          'contenu'=>'Chers adhérents, chers amis,

                      Nous vous invitons à l’Assemblée Générale de Yalla ! Pour les Enfants, qui se tiendra le jeudi 29 septembre 2016 à 18h30 à « La Trockette », 125, rue du Chemin Vert 75011 Paris, métro Père Lachaise.

                      L’ordre du jour sera le suivant :

                      Rapport moral,
                      Rapport financier,
                      Présentation du budget prévisionnel,
                      Information sur la relation bancaire avec la Société Générale,
                      Présentation du projet de l’école d’Aley et du programme « apprends-moi Maman »,

                      Appel à bénévolat :

                      1 / Recrutement d’une personne venant collaborer à la communication de Yalla !
                      2 / Recrutement d’une personne pouvant répondre aux appels à projet des bailleurs de fonds,
                      3/ Recrutement d’une personne apportant une aide aux travaux administratifs,
                      Questions diverses,

                      Les documents ayant servi à l’élaboration de cette Assemblée Générale sont consultables, sur RDV au siège de l’association pendant tout le mois d’octobre.

                      Nous vous remercions de nous faire part de votre participation en nous renvoyant les informations suivantes :

                      Madame, Monsieur

                      Participera à l’Assemblée Générale du jeudi 29 septembre 2016

                      Ne participera pas à l’Assemblée Générale du jeudi 29 septembre 2016*

                      Donne pouvoir à :

                      *veuillez barrer la mention inutile



                      Bien cordialement,
                      Mary Lemeland-Mellionec,
                      Présidente

                  ',
        ]);
    }
}
