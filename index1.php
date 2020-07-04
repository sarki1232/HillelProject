<?php
$firstname = 'Matty';
$lastname = 'Jamson';
$span = 'UX/UI Designer';
$About = [
      ['p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec tortor a eleifend. Proin nec ligula vel sem luctus porttitor. Cras at interdum libero. Donec nec mauris velit.', 'p2' => 'Vestibulum eu eros tortor. Aliquam cursus nunc mauris, nec congue tortor pretium et. Pellentesque feugiat justo in metus laoreet consectetur. Mauris at tempor ipsum, sit amet etae posuere. Nunc auctor sollicitudin sem ut molestie. Pellentesque ligula sapien, ullamcorper et tempor id, congue ac sapien.']];
$text = 'Personal Skills';
$text1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.';
$Personalskill = [
    ['p' => 'Communication' , 'a' => '85'],
    ['p' => 'Team work' , 'a' => '80'],
    ['p' => 'Leadership' , 'a' => '95'],
    ['p' => 'Management' , 'a' => '85']
];
$work1 = [
        [
        'start_day1' => 'JANUARY, 2013','end_day1' => null,
    'start_day2' => 'MARCH\'11' , 'end_day2' =>  'DECEMBER\'12',
    'start_day3' => 'JULY\'09' , 'end_day3' =>  'APRIL\'11',
    'start_day4' => 'JANUARY, 2007' , 'end_day4' =>  null,
    'start_day5' => 'JUNE, 2004' , 'end_day5' =>  null,
    'start_day6' => 'JANUARY, 2001' , 'end_day6' =>  null
],
    [
       'w1' => 'JANUARY, 2013 - PRESENT' , 'h' => 'Flash media inc.' , 'p' => 'SENIOR UX/UI DESIGNER' , 'b' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' ,
    'w2' => 'MARCH\'11 - DECEMBER\'12' , 'h2' => 'Codedash Studio' , 'p2' => 'UX DESIGNER' , 'b2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
'w3' => 'JULY\'09 - APRIL\'11' , 'h3' => 'Foursqure Studio' , 'p3' => 'VISUAL / UI DESIGNER' , 'b3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' , 'h4' => 'EDUCATION & DIPLOMAS',
'w4' => 'JANUARY, 2007' , 'h4' => 'Master Degree Of Design' , 'p4' => 'UNIVERSITY OF DESIGN' , 'b4' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    'w5' => 'JUNE, 2004' , 'h5' => 'Bachelor Of Arts' , 'p5' => 'UNIVERSITY OF DESIGN' , 'b5' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    'w6' => 'JANUARY, 2001' , 'h6' => 'Master Degree Of Design' , 'p6' => 'UNIVERSITY OF DESIGN' , 'b6' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.'
        ]
];
$workExperience = [
    [
        'start_date' => '2013-01-01',
        'end_date' => null,
        'company' => 'Flash media inc.',
        'position' => 'SENIOR UX/UI DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2011-03-01',
        'end_date' => '2012-12-31',
        'company' => 'Codedash Studio',
        'position' => 'UX DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2009-07-15',
        'end_date' => '2011-04-28',
        'company' => 'Foursqure Studio',
        'position' => 'VISUAL / UI DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
];
$counter = count($workExperience);
for ($i = 0; $i < $counter; $i++ ){
    $startDate = new DateTime($workExperience[$i]['start_date']);
    $endDate = new DateTime($workExperience[$i]['end_date']);

    $result = $endDate ->diff($startDate);
    if ($result->invert == 0) {
        $workExperience[$i]['m_diff'] = "$result->m месяц.";
    } else {
        $workExperience[$i]['m_diff'] = "$result->y год, $result->m месяц.";
    }

}

echo "<pre>";
var_dump($workExperience);
echo "</pre>";

$diplomas = [
    [
        'start_date' => '2013-01-01',
        'end_date' => null,
        'company' => 'Flash media inc.',
        'position' => 'SENIOR UX/UI DESIGNER',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2011-03-01',
        'end_date' => '2012-12-31',
        'company' => 'Bachelor Of Arts',
        'position' => 'UNIVERSITY OF DESIGN',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
    [
        'start_date' => '2009-07-15',
        'end_date' => '2011-04-28',
        'company' => 'Master Degree Of Design',
        'position' => 'UNIVERSITY OF DESIGN',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.',
    ],
];

$work ='WORK EXPERIENCE';
$prof = 'Professional Skills';
$text2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat nec.';
$pro = [
    ['p' =>'Create Wireframe' , 'p1' => '8'],
    ['p' =>'Axure' , 'p1' => '8'],
    ['p' => 'Illustrator' , 'p1' => '9'],
    ['p' => 'Photoshop' , 'p1' => '7'],
    ['p' => 'Digital Marketing' , 'p1' => '4'],
];
$rev = 'REFERENCES';
$ref = [
['p1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' , 'p2' => 'Jonathan doe' , 'p3' => 'PROJECT MANAGER MATRIX MEDIA'],
    ['p1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' , 'p2' => 'Jonathan doe' , 'p3' => 'PROJECT MANAGER MATRIX MEDIA'],
    ['p1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' , 'p2' => 'Jonathan doe' , 'p3' => 'PROJECT MANAGER MATRIX MEDIA'],
    ['p1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.' , 'p2' => 'Jonathan doe' , 'p3' => 'PROJECT MANAGER MATRIX MEDIA'],
];
$titlle = 'CONNECT ME';
$contact = [
 ['p1' => '<i class="fa fa-google-plus" aria-hidden="true"></i>'],
 ['p1' => '<i class="fa fa-facebook" aria-hidden="true"></i>'],
    ['p1' => '<i class="fa fa-dribbble" aria-hidden="true"></i>'],
    ['p1' => '<i class="fa fa-behance" aria-hidden="true"></i>'],
    ['p1' => '<i class="fa fa-linkedin" aria-hidden="true"></i>'],
    ['p1' => '<i class="fa fa-twitter" aria-hidden="true"></i>'],
    [ 'p1' => '<i class="fa fa-instagram" aria-hidden="true"></i>'],
    ['p1' => '<i class="fa fa-vimeo" aria-hidden="true"></i>'],
];
$port = 'PORTFOLIO';
$photo = [
    ['h1' => 'PORTFOLIO'] ,
    ['a1' => '<a href="#" data-filter="*"  class="current">All</a>'],
    ['a1' => '<a href="#" data-filter=".branding">Branding</a>'],
    ['a1' => '<a href="#" data-filter=".illustration">Illustration</a>'],
    ['a1' => '<a href="#" data-filter=".wordpress">Wordpress</a>'],
    ['a1' => '<a href="#" data-filter=".site-template">Site Template</a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 1" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>'],
    ['a1' => 'Project Name'],
    ['a1' => '<img src="http://via.placeholder.com/300x150" alt="">'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 2" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 3" href="http://via.placeholder.com/400x300"><i class="fa fa-image"></i></a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 4" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 5" href="http://via.placeholder.com/800x600"><i class="fa fa-image"></i></a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 6" href="https://vimeo.com/244717336"><i class="fa fa-video-camera"></i></a>'],
    ['a1' => '<a data-gal="prettyPhoto[gallery1]" title="Project Name 7" href="https://www.youtube.com/watch?v=0vrdgDdPApQ"><i> class="fa fa-video-camera"></i></a>'],
    ['a1' => ' <a data-gal="prettyPhoto[gallery1]" title="Project Name 8" href="videos/movie.mp4"><i class="fa fa-video-camera"></i></a>'],

];

$data_color = date('D');

switch ($data_color) {
    case 1:
        $color = 'orange';
        break;
    case 2:
        $color = 'pink';
        break;
    case 3:
        $color = 'green';
        break;
    case 4:
        $color = 'gray';
        break;
    case 5:
        $color = 'black';
        break;
    case 6:
        $color = 'blue';
        break;
    case 7:
        $color = 'red';
        break;
}
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Responsive Landing Page for Presenting Your Resume">
      <meta name="keywords" content="one page, responsive, html template, responsive landing page">
      <meta name="author" content="ThinkingCoder">
      <title>Flatr - vCard, CV, Resume & Portfolio template</title>
      <!-- FAVICON  -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- Custom Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="lib/bootstrap/css/normalize.css" rel="stylesheet">
      <!-- Plugin CSS -->
      <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="lib/wowjs/animate.min.css">
      <link rel="stylesheet" href="lib/pretty-photo/prettyPhoto.css">
      <!-- Template CSS -->
      <link rel="stylesheet" id="colors" href="css/layout1-color1.css" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>


   <body style=background-color:#0638 >
      <!-- =========================================
         Navigation
         ========================================== -->
      <!--start mobile navigation-->
      <div class="nav visible-xs fixed-top">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <button class="btn btn-outline inverse btn-sm navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu
                  <i class="fa fa-bars ico-sm"></i></button>
               </div>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase">
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#introduction">introduction</a>
                     </li>
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#skillset">skillset</a>
                     </li>
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#experience">experience</a>
                     </li>
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#portfolio">portfolio</a>
                     </li>
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#references">references</a>
                     </li>
                     <li class="page-scroll nav-item">
                        <a class="nav-link scroll-to" data-toggle="collapse" data-target="#navbarResponsive" href="#connect">connect</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!--end mobile navigation-->
      <nav class="nav-container hidden-xs">
         <ul class="nav">
            <li class="page-scroll">
               <a href="#introduction">introduction</a>
            </li>
            <li class="page-scroll">
               <a href="#skillset">skills</a>
            </li>
            <li class="page-scroll">
               <a href="#experience">experience</a>
            </li>
            <li class="page-scroll">
               <a href="#portfolio">portfolio</a>
            </li>
            <li class="page-scroll">
               <a href="#references">references</a>
            </li>
            <li class="page-scroll">
               <a href="#connect">connect</a>
            </li>
         </ul>
      </nav>
      <!-- =========================================
         Main Container
         ========================================== -->
      <div class="container main-container">
         <div class="row">
            <!-- =========================================
               HEADER
               ========================================== -->
            <header>
               <div class="col-md-12 extra-offset-md">
                  <button class="btn btn-transparent">
                     <svg>
                        <use xlink:href="img/svg/icons.svg#download"></use>
                     </svg>
                     Download resume
                  </button>
                  <div class="resume-title">
                      <h2><?= $firstname  ?></h2>
                      <h2><?= $lastname  ?></h2>
                     <div class="resume-designation extra-offset-md">
                        <span class="border"></span>
                        <span><?= $span  ?></span>
                     </div>
                  </div>
               </div>
               <div class="header-overlay"></div>
            </header>
            <!-- =========================================
               ABOUT ME
               ========================================== -->
            <section id="introduction">
               <div class="col-md-offset-1 col-md-10">
                  <h2 class="title">About Me</h2>
                  <hr>
               <?php foreach ($About as $profit):?>
               <p><?= $profit['p1'] ?></p>
                   <p><?= $profit['p1'] ?></p>
                   <p><?= $profit['p2'] ?></p>
                   <?php endforeach ?>
            </section>
            <!-- =========================================
               SKILL
               ========================================== -->
            <section id="skillset">
               <div class="col-md-offset-1 col-md-5 offset-lt">
                  <h2 class="title"><?= $text ?></h2>
                  <hr>
                  <p><?= $text1 ?></p>
                  <div class="skill-wrapper">
                     <!--skill-->
                     <ul class="skill" id="skills">
                     <?php $size = count($Personalskill); for ($index = 0; $index < $size ; $index++): ?>
                         <li>
                             <p><?= $Personalskill[$index]['p'] ?></p>
                             <div class="skill-bar wow slideInLeft" data-width="<?= $Personalskill[$index]['a'] ?>">
                                 <span class="skill-tip"></span>
                             </div>
                         </li>
                         <?php endfor; ?>
                     </ul>
                  </div>
               </div>
               <div class="col-md-5 offset-rt">
                  <h2 class="title"><?php $prof ?></h2>
                  <hr>
                  <p><?php $text2 ?></p>
                  <ul class="skill-dots" id="skill-dots">
                      <?php foreach($pro as $profesion): ?>
                      <li class="skill">
                          <span class="skill-title"><?= $profesion['p'] ?></span>
                          <div class="skill-progress" data-score="<?= $profesion['p1'] ?>"></div>
                      </li>
                      <?php endforeach; ?>
                  </ul>
               </div>
            </section>
            <!-- =========================================
               WORK
               ========================================== -->
            <section id="experience">
               <div class="col-md-offset-1 col-md-5  offset-lt">
                   <h2 class="title"><?= $work ?></h2>
                  <hr>
                        <?php $dag = count($workExperience); for ($index = 0; $index < $dag ; $index++):?>
                            <article class="timeline-entry">
                                <div class="timeline-entry-inner">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-label"></div>
                            <?=
                         $workExperience[$index]['start_date']; ?>
                                <?= $workExperience[index]['end_date'] ?>

                                </div>
                                <p class="designation">Время работы: <?=  $workExperience[$index]['m_diff']?></p>
                                <h3 class="company"><?= $workExperience[$index]['company'] ?></h3>
                                <p class="designation"><?= $workExperience[$index]['position'] ?></p>
                                <p class="description"><?= $workExperience[$index]['description'] ?></p>
                        </div>
                     </article>
                        <?php endfor ?>
                <div class="col-md-5  offset-rt">
                    <h2 class="title">EDUCATION & DIPLOMAS</h2>
                    <hr>
                    <?php $dab = count($diplomas); for ($index = 0; $index < $dab ; $index++):?>
                <article class="timeline-entry">
                    <div class="timeline-entry-inner">
                        <div class="timeline-icon"></div>
                        <div class="timeline-label"></div>
                        <?php
                        echo $diplomas[$index]['date']; ?>
                        <?php if ($diplomas[$index]['date_end'] == null ) {
                            echo 'Present';}
                        else { echo $diplomas[$index]['date_end'];}
                        ?>
                    </div>
                    <h3 class="company"><?= $diplomas[$index]['company'] ?></h3>
                    <p class="designation"><?= $diplomas[$index]['position'] ?></p>
                    <p class="description"><?= $diplomas[$index]['description'] ?></p>
         </div>
          </article>
          <?php endfor ?>

                  </div>
               </div>
            </section>
             <!-- =========================================
               PORTFOLIO
               ========================================== -->
             <section id="portfolio">
                 <div class="col-md-offset-1 col-md-10">
                     <h2 class="title"><?= $port  ?></h2>
                     <hr>
                     <div class="clearfix"></div>
                     <div class="porfolio-wrapper">
                         <div class="portfolioFilter">
                             <ul>
                                 <li>
                                     <?= $photo[1]['a1'] ?>
                                 </li>
                                 <li>
                                     <?= $photo[2]['a1'] ?>
                                 </li>
                                 <li>
                                     <?= $photo[3]['a1'] ?>
                                 </li>
                                 <li>
                                     <?= $photo[4]['a1'] ?>
                                 </li>
                                 <li>
                                     <?= $photo[5]['a1'] ?>
                                 </li>
                             </ul>
                         </div>
                         <ul class="portfolioContainer gallery">
                             <li class="wordpress item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[6]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="branding illustration item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[9]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="illustration item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[10]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="branding illustration item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[11]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="illustration photos item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[12]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="branding photos item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[13]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="illustration photos item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[14]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                             <li class="site-template item">
                                 <div class="lightCon">
                                     <div class="hoverBox">
                                         <ul class="hover-box-inner">
                                             <li>
                                                 <?= $photo[15]['a1'] ?>
                                             </li>
                                             <li>
                                                 <h4><?= $photo[7]['a1'] ?></h4>
                                             </li>
                                         </ul>
                                     </div>
                                     <?= $photo[8]['a1'] ?>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </section>
             <!-- =========================================
                            REFERENCES
                            ========================================== -->
            <section id="references" class="testimonial-outer">
               <div class="col-md-offset-1 col-md-10">
                   <h2 class="title"><?= $rev ?></h2>
                  <hr>
               </div>
               <div class="clearfix"></div>
               <div class="testimonial-wrapper">
                  <div class="col-md-offset-1 col-md-5 offset-lt">
                      <?php $dac = count($ref); for ($index = 0; $index < $dac ; $index++):?>
                          <!--testimonial-block-->
                          <div class="testimonial">
                              <div class="testimonialblock">
                                  <p>“<?= $ref[$index]['p1'] ?>”</p>
                              </div>
                              <div class="user-wrapper">
                                  <img src="http://via.placeholder.com/100x100" alt="">
                                  <div class="user-detail">
                                      <p class="title"><?= $ref[$index]['p2'] ?></p>
                                      <p><?= $ref[$index]['p3'] ?></p>
                                  </div>
                              </div>
                          </div>
                          <!--testimonial-block ends-->
                  <?php endfor ?>
                  </div>
               </div>
            <!-- =========================================
               CONNECT ME
               ========================================== -->
            <section id="connect" class="connect padding-bottom-0">
               <div class="col-md-offset-1 col-md-10">
                  <h2 class="title"><?= $contact[0]["h1"]?></h2>
                   <ul class="social-links social-border">
                   <?php foreach ($contact as $con):?>
                       <li class="google-plus"><?= $con['p1']?></li>
                       <?php endforeach ?>
                  </ul>
                  <hr>
               </div>
               <div class="map_outer">
                  <div id="map"></div>
                  <!--contact form-->
                  <div class="contact_form col-md-4 col-sm-7 col-xs-11">
                     <p>Drop me a line</p>
                     <div class="alert alert-success hidden" id="successMessage">
                        <strong>Success!</strong> Your message has been sent to us.
                     </div>
                     <div class="alert alert-danger hidden" id="errorMessage">
                        <strong>Error!</strong> There was an error sending your message.
                     </div>
                     <form action="php/submitForm.php" method="POST" name="emailSubmission">
                        <div class="col-md-12 ">
                           <label>Enter name</label>
                           <input type="text" class="minimal" name="name" id="name" placeholder="Enter name">
                        </div>
                        <div class="col-md-12">
                           <label>Enter email</label>
                           <input type="text" class="minimal" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-12 ">
                           <label>Enter Subject</label>
                           <input type="text" class="minimal" name="subject" id="subject" placeholder="Enter subject">
                        </div>
                        <div class="col-md-12">
                           <label>Enter message</label>
                           <textarea class="minimal" name="message" id="message" placeholder="Enter message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" name="submit" class="btn btn-md btn-primary inverse pull-right" value="Submit">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
         </div>
         <!--end of Main container-->
      </div>
      <!-- =========================================
         Footer
         ========================================== -->
      <footer>
         © 2017 Flatos.com All right reserved. 
         <a href="#">Theme Elite production</a>
      </footer>
      <!-- =========================
         PRELOADER
         ============================== -->
      <div class="loader-wrapper">
         <div class="preload"></div>
      </div>
      <!-- =========================================
         Scripts
         ========================================== -->
      <!-- jQuery -->
      <script src="lib/jquery/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- JQuery Easing -->
      <script src="lib/jquery/jquery.easing.min.js"></script>
      <!-- Retina LIbrary-->
      <script src="lib/retina/retina.min.js"></script>
      <!--Wow -->
      <script src="lib/wowjs/wow.min.js"></script>
      <!-- Isotope Plugin -->
      <script src="lib/isotope/isotope.pkgd.js"></script>
      <!-- Pretty-Photo Gallery -->
      <script src="lib/pretty-photo/jquery.prettyPhoto.min.js"></script>
      <!-- Jquery Validator -->
      <script src='lib/jquery/jquery.validate.min.js'></script>
      <!-- Google Maps -->
      <script src="lib/googlemaps/infobubble.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDMQqDC0jmMiZmHAbC_q57Zq3e2obnLMw"></script>
      <script>
         // When the window has finished loading create our google map below
         google.maps.event.addDomListener(window, 'load', init);
         
         function init() {
             // Basic options for a simple Google Map
             // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
             var mapOptions = {
                 // How zoomed in you want the map to start at (always required)
                 zoom: 11,
                 // The latitude and longitude to center the map (always required)
                 center: new google.maps.LatLng(40.702603, -73.788742), // New York
                 // This is where you would paste any style found on Snazzy Maps.
                 styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
             };
         
             // Get the HTML DOM element that will contain your map 
             // We are using a div with id="map" seen below in the <body>
             var mapElement = document.getElementById('map');
         
             // Create the Google Map using our element and options defined above
             var map = new google.maps.Map(mapElement, mapOptions);
             var infowindow = new InfoBubble({
                 shadowStyle: 0,
                 padding: 30,
                 backgroundColor: '#fff',
                 borderRadius: 7,
                 arrowSize: 10,
                 borderWidth: 0,
                 maxWidth: 245,
                 borderColor: '#2c2c2c',
                 disableAutoPan: true,
                 hideCloseButton: true,
                 arrowPosition: 30,
                 backgroundClassName: 'transparent',
                 arrowStyle: 0
             });
             var marker = new google.maps.Marker({
                 position: new google.maps.LatLng(40.6700, -73.9400),
                 icon: new google.maps.MarkerImage('img/svg/marker.svg',
                     null, null, null, new google.maps.Size(50, 50)),
                 map: map,
                 title: 'yo'
             });
             google.maps.event.addListener(marker, 'click', (function(marker) {
                 return function() {
                     infowindow.setContent('\u003cp\u003eCollins Street West Victoria 8007 Australia.\u003c/p\u003e\u003cp\u003eCall : +1800 1234 56789\u003c/p\u003e');
                     infowindow.open(map, marker);
                 }
             })(marker));
         }
      </script>
      <!-- Template Custom scripts -->
      <script src="js/scripts.min.js"></script>
   </body>
</html>