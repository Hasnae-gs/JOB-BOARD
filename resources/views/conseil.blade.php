@extends('Candidat.layouts')
@section('content')
<!-- En tête  --> 
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
         <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/jobpost')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Conseil & Services</span></p>
            <h1 class="mb-3 bread">Accompagnement :Aide à la rédaction de votre CV </h1>
         </div>
      </div>
   </div>
</div>




<!-- Body -->
<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3"><u>LE CV :</u></h2>
          </div>

          <div class="w-100"></div>
         <p>  Il est votre première vitrine. Quand plusieurs personnes postulent à une offre, un CV bien conçu fait la différence.<br>
Avant d'être un document informatif relatant votre parcours, le CV est la clé qui vous donne accès à un entretien d'embauche.
Il doit être " parfait "  ! </p>
            <h2 class="h3"> <u>Le contenu de votre CV: </u></h2>
            <p> Pour qu'il soit efficace, le CV doit être clair, informatif, attractif. Le recruteur doit pouvoir y trouver les informations qu'il recherche au premier coup d'oeil. Il doit contenir :
               
            </p>
            <ul> 
                  <li> Le métier ou type de poste que vous recherchez,</li>
                  <li> Les diplômes / formations qui vous avez obtenus ou suivis,</li>
                  <li> Les sociétés pour lesquelles vous avez travaillé ,</li>
                  <li> Les différentes tâches ou missions que vous avez effectuées,</li>
                  <li> Les compétences que vous possédez, </li>
                  <li> Les coordonnées permettant de vous contacter.</li>
               </ul>
            <span> Il doit également être rédigé de manière clair est concise.</span>
               <h2 class="h3"><u> Votre CV élément par élément : </u></h2>
               <p> Votre CV est un ensemble de phrases courtes qui expliquent qui vous êtes, vos compétences et vos expériences professionnelles. 
                Pour etre complet, votre CV doit être structuré en différentes grandes parties que nous allons étudier point par point ci-dessous.</p>
               <b> <em>Vos coordonnees : </em> </b> 
               <p> Il s'agit de la partie la plus simple mais c'est également une des plus importantes. Si votre CV est retenu mais que le recruteur n'arrive pas à vous contacter, tout votre travail n'aura servi à rien.<br>
               - Spécifier en premier lieu vos nom et prénom, suivi de votre adresse.<br>
               - Votre numéro de téléphone est très important, cela permet au recruteur d'avoir un contact direct et rapide. Si l'employeur veut des candidats immédiatement, il leur téléphonera, et il ne prendra pas la peine de chercher leur numéro dans l'annuaire.<br>
               - Si vous avez une adresse email, n'oubliez de pas l'indiquer. 
               </p>
               <b> <em>L' accroche :</em> </b>
               <p> Cela va correspondre au métier ou type de poste que vous recherchez. L'accroche va servir à donner un titre à votre CV et permettra au recruteur de savoir immédiatement pour quel type d'offre vous postulez. </p>
               <p>  Vous avez également la possibilité d'ajouter un petit paragraphe avec vos objectifs professionnels mais ce n'est pas obligatoire. Cela peut vous permettre d'exposer un projet précis à l'entreprise. Evitez simplement flatterie ou les phrases "bateau" du type "Mettre mes compétences à votre service".
            </br> Si vous n'avez pas d'idée, mieux vaut ne rien mettre !</p>
            <strong> <em>Vos expériences professionnelles :</em> </strong>
            <p> Cela correspond au résumé de votre parcours en entreprise; il est important de le classer par ordre anti-chronologique, c'est à dire du plus récent au plus ancien, afin de mettre en avant les tâches que vous avez effectuées récemment et pour lesquelles vous êtes opérationnel tout de suite. </p>
            <p> Pour chacune de vos expériences en entreprise, renseignez les dates de début et de fin d'activité, le nom de l'entreprise ou de l'organisme, et efforcez-vous de détailler les tâches effectuées (si vous avez du mal à les déterminer, reportez-vous à vos grilles d'évaluations). L'ANPE met également à votre disposition des "ROME" (Répertoire Opérationnel des Métiers et des Emplois) où sont détaillées les tâches pour chaque emploi. </p>
            <b><em> Vos diplômes et formations :</em></b>
            <p> Il est important de spécifier sa ou ses formations cependant si vous avez de l'expérience professionnelle et une carrière derrière vous, il y a de grandes chances que ce ne soit pas sur la formation que l'employeur vous recrute.
Dans tous les cas, ne surchargez pas cette partie (si vous avez une maîtrise, ne parlez pas du Deug et de la licence, il est évident vous les avez obtenus, idem pour le Bac et le Bepc).<br>
Par contre, si vous avez suivi des formations spécifiques (du type formation à l'utilisation de Word, Excel, Access ) même sans en obtenir de diplômes, cela peut être un plus vis a vis du recruteur.</p> <br>
             <b> <em> Votre matrice des compétences :</em></b>
            <p> Cette partie n'est pas non plus obligatoire dans un CV classique mais nous l'avons ajouté.
Vous pouvez la compléter lorsque vous enregistrez vos informations sur Handicap-Job.
Elle permet de mettre tout de suite en avant les différents outils que vous maitrisez ou que vous avez déjà utilisés par le passé et pour lesquels vous avez des notions.
Très utilisée en informatique par exemple, cette matrice permet de lister les langages de programmation ou les différents logiciels que vous maîtrisez. </p>
            <b> <em>Votre maîtrise des langues :</em></b>
            <p> Cette partie qui n'est pas obligatoire mais elle peut être importante pour certain type de poste.
Essayez de préciser votre niveau à l'oral et à l'écrit pour donner un maximum d'informations. </p>
           
            <b> </em>Divers :</em></b>
            <p> Vous pouvez y mettre vos loisirs et autres activités de type associatif.
         Si vous êtes amené à travailler en équipe, essayez de trouver des activités impliquant des groupes (ex.: sport collectif).</p>
               <p> Voilà, vous avez toutes les cartes en main pour réaliser un bon CV, nous vous encourageons grandement a créer votre compte sur Handicap-Job.
Vous y trouverez les outils nécessaires pour créer un CV pertinent. </p>
<p>   Important et utile pour vos démarches : Handicap-job vous offrira bientôt la possibilité d'enregistrer votre CV au format pdf. Ainsi vous pourrez le télécharger à votre guise sur d'autres sites de recrutement ou bien l'envoyer simplement en pièce jointe via vos propres emails.
 </p>


@endsection