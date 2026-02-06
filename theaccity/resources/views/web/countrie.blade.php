@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="public/web-assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Countries</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Countries</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--countries start-->
    <section class="countries section-space tab overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs countries__tab tab__wrap"  id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="active tab__btn pb-20" id="asia-tab" data-bs-toggle="tab" data-bs-target="#asia" type="button" role="tab" aria-controls="asia" aria-selected="true">
                                Asia
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="europe-tab" data-bs-toggle="tab" data-bs-target="#europe" type="button" role="tab" aria-controls="europe" aria-selected="true">
                                Europe
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="north-america-tab" data-bs-toggle="tab" data-bs-target="#north-america" type="button" role="tab" aria-controls="north-america" aria-selected="true">
                                North America
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="australia-tab" data-bs-toggle="tab" data-bs-target="#australia" type="button" role="tab" aria-controls="australia" aria-selected="true">
                                Australia
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="latine-america-tab" data-bs-toggle="tab" data-bs-target="#latine-america" type="button" role="tab" aria-controls="latine-america" aria-selected="true">
                                Latine America
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="africa-tab" data-bs-toggle="tab" data-bs-target="#africa" type="button" role="tab" aria-controls="africa" aria-selected="true">
                                Africa
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" >
                        <div class="tab-pane fade show active" id="asia" role="tabpanel" aria-labelledby="asia-tab">
                            <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/russia.png" alt="img not found">
                                    <h5>Russia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/japan.png" alt="img not found">
                                    <h5>Japan</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/egypt.png" alt="img not found">
                                    <h5>Egypt</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/south-korea.png" alt="img not found">
                                    <h5>South Korea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/indonesia.png" alt="img not found">
                                    <h5>Indonesia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex">
                                    <img src="public/web-assets/imgs/countrie/turkey.png" alt="img not found">
                                    <h5>Turkey</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/thailand.png" alt="img not found">
                                    <h5>Thailand</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/china.png" alt="img not found">
                                    <h5>China</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/india.png" alt="img not found">
                                    <h5>India</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/malaysia.png" alt="img not found">
                                    <h5>Malaysia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="public/web-assets/imgs/countrie/cambodia.png" alt="img not found">
                                    <h5>Cambodia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex">
                                    <img src="public/web-assets/imgs/countrie/myanmar.png" alt="img not found">
                                    <h5>Myanmar</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="europe" role="tabpanel" aria-labelledby="europe-tab">
                            <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/germany.png" alt="img not found">
                                    <h5>Germany</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/russia.png" alt="img not found">
                                    <h5>Russia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/italy.png" alt="img not found">
                                    <h5>Italy</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/switzerland.png" alt="img not found">
                                    <h5>Switzerland</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/sweden.png" alt="img not found">
                                    <h5>Sweden</h5>
                                </div>
                                <div class="countries__tab-content__countries-name  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/greece.png" alt="img not found">
                                    <h5>Greece</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/belgium.png" alt="img not found">
                                    <h5>Belgium</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/croatia.png" alt="img not found">
                                    <h5>Croatia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/norway.png" alt="img not found">
                                    <h5>Norway</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/denmark.png" alt="img not found">
                                    <h5>Denmark</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/iceland.png" alt="img not found">
                                    <h5>Iceland</h5>
                                </div>
                                <div class="countries__tab-content__countries-name  d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/hungary.png" alt="img not found">
                                    <h5>Hungary</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="north-america" role="tabpanel" aria-labelledby="north-america-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/united-states.png" alt="img not found">
                                    <h5>United States</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/bahamas.png" alt="img not found">
                                    <h5>Bahamas</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/dominican-republic.png" alt="img not found">
                                    <h5>Dominican Republic</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/jamaica.png" alt="img not found">
                                    <h5>Jamaica</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/belize.png" alt="img not found">
                                    <h5>Belize</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/honduras.png" alt="img not found">
                                    <h5>Honduras</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/panama.png" alt="img not found">
                                    <h5>Panama</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/barbados.png" alt="img not found">
                                    <h5>Barbados</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/guadeloupe.png" alt="img not found">
                                    <h5>Guadeloupe</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/grenada.png" alt="img not found">
                                    <h5>Grenada</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/montserrat.png" alt="img not found">
                                    <h5>Montserrat</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/sint-maarten.png" alt="img not found">
                                    <h5>Sint Maarten</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="australia" role="tabpanel" aria-labelledby="australia-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/australia.png" alt="img not found">
                                    <h5>Australia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/nauru.png" alt="img not found">
                                    <h5>Nauru</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/papua.png" alt="img not found">
                                    <h5>Papua New Guinea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/micronesia.png" alt="img not found">
                                    <h5>Micronesia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/tuvalu.png" alt="img not found">
                                    <h5>Tuvalu</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/kiribati.png" alt="img not found">
                                    <h5>Kiribati</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/new-zealand.png" alt="img not found">
                                    <h5>New Zealand</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/solomon-islands.png" alt="img not found">
                                    <h5>Solomon-Islands</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/fiji.png" alt="img not found">
                                    <h5>Fiji</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/new-south-wales.png" alt="img not found">
                                    <h5>New South Wales</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/ashmore-and-cartier-islands.png" alt="img not found">
                                    <h5>Cartier Islands</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/united-states.png" alt="img not found">
                                    <h5>United states</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="latine-america" role="tabpanel" aria-labelledby="latine-america-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/argentina.png" alt="img not found">
                                    <h5>Argentina</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/brazil.png" alt="img not found">
                                    <h5>Brazil</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/venezuela.png" alt="img not found">
                                    <h5>Venezuela</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/uruguay.png" alt="img not found">
                                    <h5>Uruguay</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/colombia.png" alt="img not found">
                                    <h5>Colombia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/martinique.png" alt="img not found">
                                    <h5>Martinique</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/peru.png" alt="img not found">
                                    <h5>Peru</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/barbuda.png" alt="img not found">
                                    <h5>Barbuda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/el-salvador.png" alt="img not found">
                                    <h5>El Salvador</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/puerto-rico.png" alt="img not found">
                                    <h5>Puerto Rico</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/saint-barthelemy.png" alt="img not found">
                                    <h5>Saint Barthélemy</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/ecuador.png" alt="img not found">
                                    <h5>Ecuador</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="africa" role="tabpanel" aria-labelledby="africa-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/south-africa.png" alt="img not found">
                                    <h5>South Africa</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/uganda.png" alt="img not found">
                                    <h5>Uganda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/ethiopia.png" alt="img not found">
                                    <h5>Ethiopia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/ghana.png" alt="img not found">
                                    <h5>Ghana</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/morocco.png" alt="img not found">
                                    <h5>Morocco</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/tanzania.png" alt="img not found">
                                    <h5>Tanzania</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/senegal.png" alt="img not found">
                                    <h5>Senegal</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/niger.png" alt="img not found">
                                    <h5>Niger</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/rwanda.png" alt="img not found">
                                    <h5>Rwanda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/somalia.png" alt="img not found">
                                    <h5>Somalia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/guinea.png" alt="img not found">
                                    <h5>guinea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="public/web-assets/imgs/countrie/gabon.png" alt="img not found">
                                    <h5>gabon</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
