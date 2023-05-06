 @extends('layouts.main')
 @php
     $activePage = 'courses'; // replace with the name of the current page
 @endphp
 @section('content')
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5">
         <div class="container py-5">
             <div class="row justify-content-center">
                 <div class="col-lg-10 text-center">
                     <h1 class="display-3 text-white animated slideInDown">
                         Nos Formations
                     </h1>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header End -->

     <!-- Categories Start -->
     <div class="container-xxl py-5 category">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h6 class="section-title bg-white text-center text-primary px-3 mb-4">
                     Formations
                 </h6>
                 <!-- <h1 class="mb-5">Courses Categories</h1> -->
             </div>
             <div class="row g-3">
                 <div class="lead mb-4 mt-4 fs-6 col-lg-6 col-md-12  text-dark">
                     <strong style="color:black"> Centre de formation à Sousse</strong>, formations en langues, spécialités
                     informatique, métiers techniques et bien plus. Ainsi que les
                     formation intra et interentreprises sur toute la Tunisie Pour ceux
                     qui souhaitent former leur avenir en Allemagne, Goethe Académie offre une assistance à ceux qui
                     souhaitent obtenir des
                     opportunités d’emploi (médecin, infirmier, ingénieur ou technicien).
                     <br />
                     Et former une formation en Allemagne dans le domaine paramédical et
                     les domaines techniques. Un organisme de formation est une structure
                     ayant pour objectif de proposer ses formations et d’apporter aux
                     intéressés de nouvelles compétences et connaissances. Les organismes
                     de formation proposent des offres de formation dans tous les
                     secteurs et dans différents domaines. La formation professionnelle
                     permet de continuer à se former pour acquérir de nouvelles compétence.
                 </div>
                 <div class="col-lg-6 col-md-12">
                     <svg xmlns="http://www.w3.org/2000/svg" class="logo3" data-name="Layer 1" width="700"
                         height="300.01401" viewBox="0 0 1080 639.01401" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <path id="a513f258-927a-4de2-b47c-f6d8484aa7b1-222" data-name="Path 103"
                             d="M345.467,477.129l-1.153-.26c31.95834-141.34216,172.44613-230.0153,313.78829-198.057A262.383,262.383,0,0,1,856,476.16893l-1.152.262c-27.208-119.463-131.908-202.9-254.612-202.9C479.14,273.536,371.994,359.159,345.467,477.129Z"
                             transform="translate(-60 -130.493)" fill="#e6e6e6" />
                         <path id="b48e35fb-0fa9-4a6e-a77a-d5ee8c8a325a-223" data-name="Path 104"
                             d="M1140,744.493H60v-614H1140Zm-1078-2H1138v-610H62Z" transform="translate(-60 -130.493)"
                             fill="#3f3d56" />
                         <circle id="f75cebf4-07f7-4414-ab86-40e5ab2d2599" data-name="Ellipse 12" cx="74"
                             cy="62.99997" r="9" fill="#06bbcc" />
                         <circle id="b3bbee1c-ff7e-4047-80a7-543833fb4a02" data-name="Ellipse 13" cx="101"
                             cy="62.99997" r="9" fill="#f2f2f2" />
                         <circle id="b056dc2b-10c3-4366-8b68-ab2b41800264" data-name="Ellipse 14" cx="128"
                             cy="62.99997" r="9" fill="#f2f2f2" />
                         <path id="b7f9e633-caf8-48cc-9bf3-ee1e6a98fd8b-224" data-name="Path 107"
                             d="M1097,642.708v66.785h-71.119A86.746,86.746,0,0,1,1097,642.708Z"
                             transform="translate(-60 -130.493)" fill="#e6e6e6" />
                         <path id="afff29c9-505b-4418-a373-01de3d3be863-225" data-name="Path 108"
                             d="M971.82,313.593l-.64-.77L731.79,511.353l-.77.64,165.87,200h2.6L733.84,512.253l237.08-196.61L1097,467.673v-3.14Z"
                             transform="translate(-60 -130.493)" fill="#e6e6e6" />
                         <circle id="f8cef931-c3bb-4037-9a50-1e0fdc7c5e4a" data-name="Ellipse 15" cx="704.53398"
                             cy="222.81497" r="61.692" fill="#a0616a" />
                         <path id="a345d496-be51-4ced-87e4-88917a587ade-226" data-name="Path 111"
                             d="M867.08628,483.47072l-34.33043,99.53459v.0088l-16.54511,47.99052s-1.6888,76.30462-3.38641,76.30462c-.35186,0-.85318,1.09949-1.41613,2.83226H647.01246L660.20634,569.9522l-.80921-6.53187-10.32031-83.73087a41.96162,41.96162,0,0,1,27.72937-44.71969l17.24517-6.06274a136.52441,136.52441,0,0,1,70.5103-5.376l.00007,0A136.52428,136.52428,0,0,1,822.171,449.1842Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                         <path id="a678a244-be81-46d4-9955-cfd6d99b50a8-227" data-name="Path 113"
                             d="M818.033,303.605S798.446,261.167,760.9,270.96s-58.761,24.484-60.393,39.174.816,36.726.816,36.726,4.081-30.2,30.2-23.668,66.922,1.632,66.922,1.632l6.529,58.761s7.345-10.61,15.506-4.081S844.149,316.663,818.033,303.605Z"
                             transform="translate(-60 -130.493)" fill="#2f2e41" />
                         <path id="b1de1415-f5bf-440f-a8b8-fa9f905c1360-228" data-name="Path 114"
                             d="M899.30573,637.7863s0,38.746-14.24059,72.35521H836.13345l.431-1.13466L850.12778,649.652l-5.084-20.345-12.28786-46.29291v-.00884a135.32972,135.32972,0,0,1,1.08622-73.281l.5563-1.87088a34.10243,34.10243,0,0,1,32.68794-24.38265h0s22.04256,18.65613,20.345,54.262Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                         <path id="f1868812-8ac7-4b0c-a438-ab55a4a15b12-229" data-name="Path 121"
                             d="M1040.387,252.532a33.376,33.376,0,1,1,33.376-33.376v0A33.376,33.376,0,0,1,1040.387,252.532Zm0-65.2a31.824,31.824,0,1,0,31.824,31.824h0A31.824,31.824,0,0,0,1040.387,187.332Z"
                             transform="translate(-60 -130.493)" fill="#ccc" />
                         <path id="b1b186d5-33ae-41a2-a01c-c43193f01a60-230" data-name="Path 123"
                             d="M1097,711.993H103v-549h994Zm-992.159-1.788h990.31794V164.781H104.841Z"
                             transform="translate(-60 -130.493)" fill="#ccc" />
                         <path id="b98eb8ea-1fd7-4cba-9afb-7866ed7d6078-231" data-name="Path 122"
                             d="M1054.448,206.463l-.729-.729-13.554,13.555-13.555-13.555-.729.729,13.554,13.554-11.75,11.75.729.729,11.75-11.75,11.75,11.75.729-.729-11.75-11.75Z"
                             transform="translate(-60 -130.493)" fill="#3f3d56" />
                         <path id="a9b170f1-abe6-494b-85b0-d8713abcdd5c-232" data-name="Path 146"
                             d="M475.826,477.939H136.952A11.969,11.969,0,0,0,125,489.891V620.659a11.969,11.969,0,0,0,11.952,11.957H475.826a11.969,11.969,0,0,0,11.952-11.952V489.891A11.969,11.969,0,0,0,475.826,477.939Zm10.546,142.721a10.559,10.559,0,0,1-10.546,10.546H136.952a10.559,10.559,0,0,1-10.546-10.546V489.891a10.559,10.559,0,0,1,10.546-10.546H475.826a10.559,10.559,0,0,1,10.546,10.546Z"
                             transform="translate(-60 -130.493)" fill="#3f3d56" />
                         <path id="b6b39a3c-92e5-4d4e-830c-c9cb70ad8092-233" data-name="Path 141"
                             d="M456.003,515.938H278.481c-5.156,0-9.39,3.4-9.591,7.686a2.14225,2.14225,0,0,0-.015.314c.007,4.416,4.3,7.994,9.606,8H456.003c5.305,0,9.606-3.582,9.606-8S461.309,515.938,456.003,515.938Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                         <path id="ae94418e-82bb-46b2-bcad-c3c282755a35-234" data-name="Path 141-2"
                             d="M456.003,547.939H278.481c-5.156,0-9.39,3.4-9.591,7.686a2.14225,2.14225,0,0,0-.015.314c.007,4.416,4.3,7.994,9.606,8H456.003c5.305,0,9.606-3.582,9.606-8S461.308,547.939,456.003,547.939Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                         <path id="e8feddc1-03fc-4048-aa80-45fc0ee9652e-235" data-name="Path 141-3"
                             d="M456.003,579.939H278.481c-5.156,0-9.39,3.4-9.591,7.686a2.14218,2.14218,0,0,0-.015.314c.007,4.416,4.3,7.994,9.606,8H456.003c5.305,0,9.606-3.582,9.606-8S461.309,579.939,456.003,579.939Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                         <path id="bcd0b27f-9e6f-4dd4-9c6b-301806d9c28e-236" data-name="Path 140"
                             d="M194.988,597.938a42.353,42.353,0,1,1,42.353-42.353,42.353,42.353,0,0,1-42.353,42.353Zm0-83.245a40.892,40.892,0,1,0,40.892,40.892v0A40.892,40.892,0,0,0,194.988,514.693Z"
                             transform="translate(-60 -130.493)" fill="#3f3d56" />
                         <path id="a4b95a53-3e76-43d9-9905-f39259c2aa97-237" data-name="Path 118"
                             d="M356,693.493H320v-36h36Zm-34-2h32v-32H322Z" transform="translate(-60 -130.493)"
                             fill="#ff6584" />
                         <path id="b5224a29-3e2c-47b8-aafd-f30a3a8a6089-238" data-name="Path 119"
                             d="M277.185,682.018,264.324,670.23l1.352-1.474,11.139,10.212,25.353-38.03,1.664,1.11Z"
                             transform="translate(-60 -130.493)" fill="#3f3d56" />
                         <path id="b1af4244-ebcd-4e3e-9659-fd120ece41f1-239" data-name="Path 120"
                             d="M290,666.493v25H258v-32h25v-2H256v36h36v-27Z" transform="translate(-60 -130.493)"
                             fill="#e5e5e5" />
                         <circle id="aed972d3-7bba-44b7-a5d2-fd1675eb4fbc" data-name="Ellipse 18" cx="119.5"
                             cy="438.49997" r="23.5" fill="#06bbcc" />
                         <path
                             d="M486.90131,749.583a18.72381,18.72381,0,0,1,22.93829-17.26685l35.47958-56.28978,14.26942,31.495-35.87967,48.6252a18.82532,18.82532,0,0,1-36.80762-6.56359Z"
                             transform="translate(-60 -130.493)" fill="#a0616a" />
                         <path id="b4b1ee8f-44c7-4e6a-b1f2-73ec029b7adc-240" data-name="Path 115"
                             d="M672.1765,441.36135l-1.95763.34573c-21.9973,3.88482-40.64832,18.90469-48.35052,39.8725q-.3465.94328-.66484,1.89732l-13.56592,61.04365L514.37184,722.57363l28.83121,16.95586s79.69978-93.26574,89.874-125.48519l40.96711-78.78491a25.53212,25.53212,0,0,0,2.86057-12.76089l-3.07108-79.80044A1.41257,1.41257,0,0,0,672.1765,441.36135Z"
                             transform="translate(-60 -130.493)" fill="#06bbcc" />
                     </svg>
                 </div>
                 <div class="col-lg-7 col-md-6">
                     <div class="row g-3">
                         <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                             <a class="position-relative d-block overflow-hidden" href="{{ route('website.langue') }}">
                                 <img class="img-fluid w-100" src="img/deutsh.jpg" alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation Langue</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                         <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                             <a class="position-relative d-block overflow-hidden" href="{{ route('website.info') }}">
                                 <img class="img-fluid"
                                     src="img/cute-freelance-girl-using-laptop-sitting-floor-smiling.jpg"
                                     alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation Informatique</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                         <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                             <a class="position-relative d-block overflow-hidden" href="{{ route('website.sante') }}">
                                 <img class="img-fluid" src="img/sante.jpg" alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation Santé</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
                     <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('website.marketing') }}">
                         <img class="img-fluid position-absolute w-100 h-100" src="img/onlie_marketing.jpg"
                             alt="" style="object-fit: cover" />
                         <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                             <h5 class="m-0">Formation Marketing</h5>
                             <!-- <small class="text-primary">49 Courses</small> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
                     <a class="position-relative d-block h-100 overflow-hidden"
                         href="{{ route('website.architecture') }}">
                         <img class="img-fluid position-absolute w-100 h-100" src="img/archeticture.jpg" alt=""
                             style="object-fit: cover" />
                         <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                             <h5 class="m-0">Formation Architecture</h5>
                             <!-- <small class="text-primary">49 Courses</small> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-7 col-md-6">
                     <div class="row g-3">
                         <div class="col-lg-12 col-md-12 wow zoomIn " data-wow-delay="0.6s">
                             <a class="position-relative d-block overflow-hidden"
                                 href="{{ route('website.infographie') }}">
                                 <img class="img-fluid" src="img/infographie.jpg" alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation Infographie</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                         <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.8s">
                             <a class="position-relative d-block overflow-hidden"
                                 href="{{ route('website.comptabilitie') }}">
                                 <img class="img-fluid" src="img/accountant-work.jpg" alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation Comptabilité Gestion</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                         <div class="col-lg-6 col-md-12 wow zoomIn h-100" data-wow-delay="0.10s">
                             <a class="position-relative d-block overflow-hidden h-100"
                                 href="{{ route('website.electrique') }}">
                                 <img class="img-fluid h-100" src="img/electrique.jpg" alt="" />
                                 <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px">
                                     <h5 class="m-0">Formation en Electrique</h5>
                                     <!-- <small class="text-primary">49 Courses</small> -->
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
                     <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('website.mecanique') }}">
                         <img class="img-fluid position-absolute w-100 h-100" src="img/mecanique.jpg" alt=""
                             style="object-fit: cover" />
                         <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                             <h5 class="m-0">Formation en Mecanique</h5>
                             <!-- <small class="text-primary">49 Courses</small> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-lg-7 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
                     <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('website.tourisme') }}">
                         <img class="img-fluid position-absolute w-100 h-100" src="img/tourisme.jpg" alt=""
                             style="object-fit: cover" />
                         <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                             <h5 class="m-0">Formation Tourisme</h5>
                             <!-- <small class="text-primary">49 Courses</small> -->
                         </div>
                     </a>
                 </div>
             </div>
         </div>
         <div class="lead mb-4 mt-4 fs-6 col-lg-12 text-dark">
             Différents profils peuvent intégrer un centre de formation, les
             salariés, les élèves, les étudiants, et notamment les demandeurs
             d’emploi. Les critères pour accéder à un centre de formation dépendent
             du niveau d’études. Être titulaire d’un niveau 9ème année de base suffit
             pour entrer en CAP puis BTP, le bac pour une formation BTS… Pour les
             formations accélérées, en général, aucun pré requis n’est demandé. Vous
             pouvez apprendre en présentiel ou en ligne, chez vous ou dans un centre
             de formation pour des cours de jour ou en cours du soir. La formation en
             ligne, est forme de formation flexible. Elle vous donne accès à de très
             nombreuses formations, sans contrainte de distance ou des horaires. Lors
             d’une formation pratique, vous commencer par desnotions pratiques sur le
             thème de votre formation, vous s’initier les technologies et le
             vocabulaire de ce domaine ainsi que ses aspects de base. Vous allez par
             la suite être confrontés les outils (physique ou informatique), des
             projets concrets et des ateliers de cas pratiques. La phase pratique est
             dominante dans toutes nos formations de plus de 90%. Tous le long de nos
             cursus d’apprentissage nos formateurs essayons de mettre en évidences
             les soft skills et les qualités interpersonnelle essentielle pour
             travaillez dans un milieu professionnel (travail en groupe, leadership,
             négociation, entreprenariat, résolution de problème…) Vous pouvez aussi
             compléter votre apprentissage par une formation en langue, en
             informatique ou en soft skills, ces formations sont fortement
             recommandées pour demandeurs d’emploi et les entrepreneurs A la fin de
             la formation, nous recommandons d’effectuer un stage en entreprise. En
             tant que stagiaire, vous pourrez vous perfectionner dans le métier vers
             lequel vous souhaitez vous orienter.
         </div>
     </div>
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
     <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
     <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
     <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
         integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
     <script src="{{ asset('js/main.js') }}"></script>

     <!-- Categories Start -->
 @endsection
