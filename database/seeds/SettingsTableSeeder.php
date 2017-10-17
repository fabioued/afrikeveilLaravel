<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        App\Settings::create([

            'contact_numberFr'  => '+226 25 66 64 60',
            'contact_numberEn'  => '+226 25 66 64 60',
            'contact_emailEn'   => 'ekumi@afrikeveil.org',
            'contact_emailFr'   => 'info@afrikeveil.org',
            'addresse'          => 'Cité Azimmo Ouaga 2000, 111 BP 1597 Ouagadougou CMS 11—Burkina Faso',
            'introductionVideo' => 'https://www.youtube.com/embed/mObSx7bMNTE',
            'aboutUs'           => 'AFRIK EVEIL fosters start-up development and the scaling-up of innovative and sustainable business solutions in the West African region. We combine applied research with analytical and technical competence of our diverse team of experts, to provide strategic support to small and medium enterprises through provision of management training, coaching and mentoring, networking and social media strategies.',
            'aboutFr'           => 'Afrik Eveil est une organisation à but non lucratif, créée et gérée par des professionnels expérimentés qui se moblisent en faveur de l\'entrepreneuriat comme moyen efficace de promotion de l’employabilité des jeunes en Afrique.',
            'youtube'           => 'https://www.youtube.com/channel/UCMEFv8F1--9s-WcuvLXkixA',
            'facebook'          => 'https://www.facebook.com/afrikeveil.org/',
            'twitter'           => 'https://twitter.com/a_eveil',
            'copyrightEn'       => 'Afrik Eveil Foundation © 2017 All Copyrights Reserved.',
            'copyrightFr'       => 'Fondation Afrik Eveil © 2017 Tous Droits Réservés.'
        ]);
    }
}
