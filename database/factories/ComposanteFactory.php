<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Composante>
 */
class ComposanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'code_comp' => 'FDSE',
            // 'design_comp' => 'Faculté de Droit et Sciences Economiques',
            // 'description' => "La Faculté de Droit et des Sciences Economiques (FDSE) est une des grandes composantes de l’Université des Comores. Son siège se trouve sur le site universitaire de M’Nvouni. Mais ses formations sont dispensées aussi sur les centres universitaires de Patsy à Anjouan et de Mohéli. Ce qui fait que, démographiquement, la FDSE est la composante majeure de l’Université des Comores. Ses effectifs répartis sur les trois îles représentent plus de la moitié du total des effectifs de l’institution. Sur le seul site de M’Nvouni, elle compte entre 35% et 40% du total de l’UDC.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'FIC',
            // 'design_comp' => 'FACULTÉ IMAM CHAFIOU DES LETTRES ARABES ET SCIENCES ISLAMIQUES',
            // 'description' => "La Faculté Imam-Chafiou des Lettres Arabes et des Sciences Islamiques a été crée en 2002, un an avant la création de l’Université des Comores. Elle a comme missions principales : l’enseignement des théologies du Madhab Ahl – Sounna Waldjaman et du Madhab Imam-Chafiou ; l’enseignement de la langue Arabe et des Sciences Islamiques et la transmission des valeurs intrinsèques nationales.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'FST',
            // 'design_comp' => 'Faculté des Sciences et Techniques ',
            // 'description' => "Depuis sa création en 2003, la Faculté des Sciences et Technique de l’Université des Comores, premier établissement universitaire scientifique comorien, ne cesse de rayonner en cultivant l’excellence à tous les niveaux. 
            // En ma qualité de Doyen, je collabore avec un corps professoral de grande qualité et un personnel administratif dévoué, en s’appuyant sur des partenariats diversifiés pour hisser cette institution au rang des meilleures à l’échelle nationale avec une reconnaissance à l’échelle internationale. 
            
            // Aujourd’hui, la faculté cultive l’excellence avec un enseignement de qualité et une recherche de pointe dans de nombreux domaines incluant la biologie, la chimie, la biochimie, la physique, les mathématiques, les sciences de la Terre et de l’environnement, la gestion des catastrophes naturelles et l’énergie.
            
            // Les sciences ont toujours été au cœur même des progrès de l'humanité. De nombreuses évolutions technologiques influencent, directement et indirectement, la vie quotidienne.
            
            // Pour cela, il est important de respecter les différences et les rôles de chacun : c’est la diversité qui fait la richesse de notre faculté. Il est nécessaire qu’une institution de l’importance de la Faculté des Sciences de l’Université des Comores soit à l’écoute des attentes des jeunes qui l’intègrent et prennent en charge toute la responsabilité pour être à la hauteur de leurs aspirations, celles de leurs parents et sans oublier les ambitions nationales.
            // ",

            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'FLSH',
            // 'design_comp' => 'Faculté des Lettres et Sciences Humaines ',
            // 'description' => "Mon ambition : « Offrir aux étudiants des formations qui se rapprochent du monde du travail ».
            // Jusqu’en 2006, la Faculté des Lettres et Sciences Humaines accueillait ses étudiants au site universitaire de Khartala. Depuis, elle est implantée dans le site universitaire de N’vouni, avec des annexes à Moroni et Anjouan. 
            // Elle propose une offre de formations classiques d’une faculté de Lettres, avec des disciplines comme l’Histoire, la Géographie, les Lettres Modernes, ou les Langues étrangères appliquées. Elle a délivré des diplômes de DEUG jusqu’en 2006 puis, avec l’adoption du système LMD par l’Université des Comores, elle propose des diplômes de licence et, depuis peu, des masters aux départements de Lettres Modernes et Histoire. 
            // Depuis quelques années, la Faculté des Lettres et sciences humaines affiche une double ambition. D’abord, diversifier son offre de formations. Les étudiants ne doivent pas être cantonnés sur les mêmes formations. Ils doivent avoir la liberté de choisir leurs formations en fonctions de leurs intérêts. C’est ainsi que depuis 2017, deux nouveaux départements ont été ouverts : le département de langue et littérature anglaises et le département de langue et culture chinoises. D’autres projets de formations ont été validés par le Conseil scientifique de l’Université et seront ouvertes bientôt. L’ouverture de ces nouveaux départements permet à la composante de s’ouvrir encore plus au monde, par le biais des relations que chacun des deux départements entretient avec nos partenaires extérieurs. 
            // Mais l’ambition majeure de la composante est d’offrir aux étudiants des formations qui les rapprochent du monde professionnel. En effet, l’une des préoccupations des parents aujourd’hui est l’insertion professionnelle de leurs enfants après leurs études. La Faculté des Lettres et sciences humaines entend répondre à cette préoccupation, par l’ouverture de parcours qui donnent accès au monde du travail. C’est ainsi qu’au département de Lettres Modernes, les étudiants peuvent désormais, en 3e année, choisir des parcours professionnalisants en information – communication ou en didactique du français, en plus de la licence générale. Au département d’Histoire, les étudiants ont le choix entre la licence d’histoire et la licence professionnelle en archives et documentation. La plupart des étudiants qui ont suivi ces parcours professionnalisants se sont insérés facilement dans le monde du travail, dans le secteur public comme dans le privé.
            // ",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'IUT',
            // 'design_comp' => 'INSTITUT UNIVERSITAIRE DE TECHNOLOGIE ',
            // 'description' => "L’Institut Universitaire de Technologie (IUT) est un établissement d’enseignement technique et professionnel qui forme des techniciens supérieurs au profit des entreprises et des administrations publiques et privées. 
            // Acteur majeur de l’enseignement universitaire professionnel, l’IUT délivre un diplôme professionnalisant de niveau DUT et de niveau Licence professionnelle en Informatique et en statistiques depuis 2018.
            // Eu égard aux missions assignées à l’Université des Comores, l’IUT a vocation non seulement à assurer la diffusion des savoirs, des savoirs faire, mais également à développer une expertise variée et transversale en matière professionnelle et technique.
            // Ainsi, l’Institut intervient dans les domaines de la Gestion des Entreprises et des Administrations (GEA), du Commerce, du Génie Informatique, du Tourisme et Hôtellerie, du Génie Civil (Habitat et son Environnement), et des études Statistiques. 
            // A travers ces pôles d’intervention, l’IUT s’est engagé à promouvoir l’utilisation et la maitrise du numérique pédagogique et la transmission du savoir dans le domaine de l’entrepreneuriat et le développement de l’esprit d’entreprise.
            // L’Institut dans le cadre de ses missions développe également des compétences dans ces domaines à travers des projets professionnels tels que :
            // -	Projets de fin d’étude réalisés par les étudiants en collaboration avec des entreprises et des administrations ;
            // -	Projets entrepreneuriaux réalisés à l’initiative des étudiants en fin d’études sous l’encadrement d’un tuteur professionnel ;
            // -	Projets professionnels en partenariat avec des organismes publics.
            // L’IUT entretient, depuis sa création en 2003, un partenariat diversifié avec des organismes publics, des entreprises publiques et privées, et des organisations internationales résidant aux Comores.
            // Dans un avenir proche l’IUT compte étoffer son offre de formation avec l’ouverture des Licences professionnelles dans ses pôles d’interventions traditionnels et en ouvrant de nouveaux DUT dont un DUT en Informatique Industriel et un autre en Agroalimentaire.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'IFERE',
            // 'design_comp' => 'INSTITUT DE FORMATION DES ENSEIGNANTS ET DE RECHERCHE EN EDUCATION',
            // 'description' => "L’IFERE est créé depuis 1994 et intègre l’Université à sa création en 2003. Il développe depuis sa création une formation initiale de professeurs des écoles d’une durée de deux années, sanctionnée par le « Diplôme de Formation Supérieure des Instituteurs » (DIFOSI), pour répondre efficacement aux besoins en personnel enseignant du Ministère de l’Education nationale.
            // Mais à partir de l’année 2015, un tournant a eu lieu à l’IFERE. De la seule formation des professeurs d’école, l’Université des Comores à travers l’IFERE et le Ministère de l’Education Nationale (MEN) ont jugé nécessaire de mettre en place une « Licence professionnelle des métiers de l’éducation » avec quatre parcours de formation. 
            // Nous assurons actuellement la formation des professeurs des écoles et des encadreurs pédagogiques et nous comptons démarrer à court terme une formation continue des Sciences pour les enseignants du primaire et secondaire et des chefs d’établissement. Nous sommes alors passés d’une formation de type Bac + 2 à une licence professionnelle Bac + 3.
            // Les missions principales de l’IFERE sont les suivantes :
            // -	Assurer la formation professionnelle initiale et continue de haut niveau selon les normes et les formats internationalement reconnus ;
            // -	Développer des activités de formation et de recherche ;
            // -	Assurer la diffusion de la culture scientifique, technique et technologique ;
            // -	Favoriser l’innovation technique et la maitrise de technologie de l’information et de la communication ;
            // -	Apporter son concours aux recherches –actions effectuées dans les établissements d’enseignement.
            // Par ailleurs, l’IFERE s’emploie à mettre en place : une formation continue sur la promotion de l’enseignement des Sciences expérimentales à l’école primaire et au collège ; des licences et master sur les métiers de l’éducation et de la formation et des recherches actions sur des thèmes pertinents liés au système éducatif comorien.
            // ",

            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'EMSP',
            // 'design_comp' => 'Ecole de Médecine et de Santé Publique ',
            // 'description' => "L’Ecole de Médecine et de Santé Publique (EMSP) assure la formation initiale, la formation spécialisée paramédicale et la formation continue médicale, paramédicale et la recherche.
            // Tenant compte du nombre d’infirmiers et de sages-femmes formés dans le temps, des besoins actuels du pays et du nombre grandissant des bacheliers, l’EMSP se doit de diversifier l’offre de formation.
            // La formation est conforme au système LMD et l’Ecole délivre des diplômes de Licence professionnelle en sciences infirmiers et licence professionnelle en soins obstétricaux.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'CUP',
            // 'design_comp' => 'Centre Universitaire de Patsy ',
            // 'description' => "Patsy au sein de l’Université des Comores est une histoire qui remonte de 2008, juste après la libération de l’Ile d’Anjouan.
            // Dans un premier temps, l’UDC a installé des formations professionnalisantes tout en accompagnant à leur terme les formations qui étaient sur place. 
            // Progressivement, des formations générales universitaires y ont été introduites et aujourd’hui, Patsy possède une douzaine de formations dont trois professionnalisantes et neuf, générales universitaires. Comme les formations, le nombre d’étudiants a aussi beaucoup évolué passant de 339 en 2009-2010 à 5008 en 2020-2021. Aujourd’hui, Patsy compte aller un peu plus de l’avant par l’introduction du Cycle de Master.
            // Le premier Master de Patsy portera sur la Biodiversité et le Développement Durable.
            // Comme les autres Composantes de notre Université, Patsy compte donner plus de places dans un proche avenir aux formations professionnalisantes comme l’Agriculture et l’Agroalimentaire.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'CUM',
            // 'design_comp' => 'Centre Universitaire de Mohéli',
            // 'description' => "Créé en 2012, le Centre Universitaire de Mohéli développait une formation initiale des professeurs des écoles d’une durée de deux années, sanctionnée par le Diplôme Supérieur des Instituteurs (DiFoSI), pour répondre efficacement aux besoins en personnel enseignant du Ministère de l’Education Nationale et une formation en Gestion des Entreprises et des Administrations, en réponse aux demandes de l’administration comorienne.
            // Pour améliorer ses offres de formations, le Centre universitaire de Mohéli a mis en place, dès la rentrée universitaire 2014-2015, la Licence professionnelle des Professeurs des Ecoles et la formation en Administration Economique et Sociale (AES) en 2015. En 2017, il a introduit la Licence Professionnelle des Encadreurs Pédagogiques (Inspecteurs et conseillers pédagogiques du primaire et du secondaire). 

            // En 2021, est né le projet de mettre en place deux formations : une Licence professionnelle en écotourisme et une autre Licence professionnelle en agriculture et agroalimentaire. Ces formations d’une durée de trois années après le BAC s’inscrivent dans une volonté nationale de développer un tourisme plus respectueux des hommes et de leur environnement et de chercher des solutions durables à la sous-production agricole et au manque de conservation des produits agricoles.
            // Dans ce Centre Universitaire de l’Université des Comores, les formations sont assurées par une équipe pédagogique composée d’enseignants-chercheurs, enseignants, des encadreurs pédagogiques, des formateurs et de professionnel du monde économique. Nos étudiants bénéficient d’un encadrement rapproché et personnalisé tout au long de leur cursus.
            // Le Centre universitaire de Mohéli assure actuellement trois formations de 390 étudiants au titre de l’année universitaire 2021-2022. Ces formations sont dispensées dans deux sites universitaires : le Site de Fomboni colas et le Site de Wanani dans la région de Djando.
            // Pour ceux qui souhaitent poursuivre leurs études de 2ème cycle, des programmes de masters de l’Université des Comores leur sont offerts en vue de former des spécialistes de différents domaines, performants, autonomes et responsables.",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),

            // 'code_comp' => 'SUFOP',
            // 'design_comp' => "Le Centre Universitaire de Formation Permanente est une composante de l'Université des Comores créé en 2006. Dix ans plus tard, le Centre devient le Service Universitaire de Formation Permanente (SUFOP).
            // Il vise à couvrir un des aspects des missions de l'Université des Comores dont la Formation continue des cadres et des professionnels des métiers. Les objectifs et les missions déclinent ainsi :
            // -	Répondre aux besoins des entreprises et des administrations 
            // -	Organiser des cours de formation à la demande des entreprises ; des administrations ou des individus.
            // -	Participer au transfert de technologie par la formation ;
            // -	Optimiser l'utilisation des cadres nationaux en faisant de chacun d'eux un vecteur du savoir - faire ;     
            
            // Deux types de formations sont organisés par CUFOP : les offres de formation et les formations sur commande.
            // Des programmes de cours de formation sont offerts par le CUFOP et accueillent les apprenants remplissant les conditions académiques de la formation. Ce type de formation est sanctionné par un Certificat Universitaire.
            // Les formations sur demande sont organisées à la demande des administrations et des entreprises. Le centre étudie avec les demandeurs de la formation, les qualifications recherchées, le genre de travail auxquels sont destinés les apprenants, le niveau de ces derniers et le nombre éventuel.
            // Le CUFOP fait un rapport sur les besoins exprimés par les demandeurs de la formation, les problèmes à résoudre et les responsabilités qui attendent les personnes à former.
            // Dans un proche avenir, le SUFOP vise à évoluer vers  un Centre National Universitaire de Renforcement des Capacités et à créer des plateformes d’enseignement à distance et de validation des acquis d’expérience.
            // ",
            // 'img_comp' => $this->faker->image(storage_path('app\public\destinations\img_composante'), 1000, 567,'nature', false),
        ];
    }
}
