@extends('layouts.frontEnd.app')

@section('title')
    OUR TEAM | Afrik Eveil Foundation
@endsection

@section('style')
    <link href="{{asset('css/frontEnd/featherlight.min.css')}}" type="text/css"  rel="stylesheet" />
    <style type="text/css">
        @media all {
            .lightbox { display: none; };
            /* override default feather style... */
            .fixwidth {
                background: rgba(256,256,256, 0.8);
            }
            .fixwidth .featherlight-content {
                width: 500px;
                padding: 25px;
                color: #fff;
                background: #111;
            }
            .fixwidth .featherlight-close {
                color: #fff;
                background: #333;
            }
        }
    </style>
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>OUR TEAM</h1>
                    <img src="{{ asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="/">HOME</a></li>
                        <li><span>/</span>OUR TEAM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul class="menu-filter">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li  data-filter=".Chair"   ><a href="#">Chair </a></li>
                        <li  data-filter=".Founding"><a href="#">Founding Member  </a></li>
                        <li  data-filter=".HeadofOperations"><a href="#">Head of Operations</a></li>
                        <li  data-filter=".Finance"><a href="#">Finance</a></li>
                        <li  data-filter=".Communication"><a href="#">Communication</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-it grid">
                    <div class="pro-it  Founding Chair col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/damien.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl1"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default">Damien N. Somé</a></h2>
                            <p>Founder and Chair</p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl1">
                        <center><h2>Damien N. Somé, Founder and Chair</h2></center>
                        <p>
                            <br><b>Areas of Interest and Competences:</b> Asia-Africa Partnerships, Current Energy Challenges and Opportunities in Africa, Investments Opportunities in Africa, Security in the Sahel Region.
                            <br>Damien currently works as Research Fellow for the Africa Progress Panel, a Geneva-based foundation chaired by former UN Secretary General Kofi Annan.
                            <br>Damien was born and raised in Burkina Faso where he began his education before pursuing his studies abroad; a Bachelors in Business Administration  in Tamkang Univeristy, Taiwan and a Master of Arts in International Affairs from the Graduate Institute of International and Development Studies in Geneva.
                            <br>Damien has worked in both the private and non-profit sectors. He speaks three languages fluently – French, English, and Mandarin. He is passionate about youth-led entrepreneurship and leadership endeavours in Africa.
                            <br>Follow Damien on Twitter <a href="https://twitter.com/n_damien">@n_damien</a>
                        </p>
                    </div>
                    <div class="pro-it  Founding col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/ebenezer.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl2"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default">Ebenezer Kumi</a></h2>
                            <p>Founding Member  </p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl2">
                        <center><h2>Ebenezer Kumi, Founding Member  </h2></center>
                        <p>
                            <br><b>Areas of Interest and Competences:</b> Social entrepreneurship, sustainable investments, and public-private partnership policies in sub-Saharan Africa.
                            <br>Ebenezer Kumi is a Ghanaian who is passionate about designing and providing creative and strategic business advisory services to impact-focused firms in developing countries
                            <br>Ebenezer previously worked with adelphi research GmbH in Munich, Germany in developing business support tools and capacity development materials; for training business development services providers and social entrepreneurs, for the Siemens Stiftung.
                            <br>He holds a Master in Development Studies from the Graduate Institute of International and Development Studies in Geneva, and MBA in Sustainable Businesses from Bologna Business School in Italy.
                            <br>Follow Ebenn on Twitter <a href="https://twitter.com/ebennkumi">@ebennkumi</a>
                        </p>
                    </div>
                    <div class="pro-it  Founding HeadofOperations col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/benjamin.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl3"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default">Benjamin N. ZOUMBA</a></h2>
                            <p>Founding Member, Head of Operations</p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl3">
                        <center><h2>Benjamin N. ZOUMBA, Founding Member, Head of Operations</h2></center>
                        <p>
                            <br><b>Areas of Interest and Competences:</b>  Entrepreneurship, Business Development, Strategy.
                            <br>Benjamin is currently PhD candidate in Strategy and Entrepreneurship (University of Paris Est), holds a Master in Management and Strategy from IAE-Gustave
                            <br>EIFFEL (Business School at University of Paris 12).
                            <br>Currently he is working as a teacher and researcher (junior) in entrepreneurship, strategy and management at the University Paris Est Creteil.
                            <br>He is also a consultant in entrepreneurship and development of SMEs for many companies in France and West Africa.
                            <br>He is fluent in Mooré, French and English.
                        </p>
                    </div>
                    <div class="pro-it  Finance col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/prosper.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl4"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default">Prosper Zombre</a></h2>
                            <p>Head of Finance and Administration</p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl4">
                        <center><h2>Prosper Zombre, Head of Finance and Administration</h2></center>
                        <p>
                            <br><b>Areas of Interest and Competences:</b>  Finance, global business development, corporate strategy and governance.
                            <br>Prosper holds a bachelor level of Economics and is an MBA educated from National Chengchi University, Taiwan, specialized in International Business and Finance management.
                            <br>Currently working as International Market Access Specialist for a Taiwan based company, Prosper is relocated back to his home country Burkina Faso.
                            <br>He is fluent in French and English and has a working knowledge of Mandarin Chinese.
                        </p>
                    </div>
                    <div class="pro-it  Communication col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/guillaume.jpg')}}" alt="Guillaume Dabré">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl5"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default">Guillaume Dabré</a></h2>
                            <p>Communication Assistant</p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl5">
                        <center><h2>Guillaume Dabré, Communication Assistant</h2></center>
                        <p>
                            <br>I am Guillaume DABRE. I was born on 1994 in Burkina Faso.
                            <br>I am a Sophomore student in Diplomacy and International Relations at Tamkang University.
                            <br>At the university level, I am working with some friends on a student club called TKU Young Leaders.
                            <br>I am also a representative of Oxford University Press Politics students panel.
                            <br>My interests cover public speaking, leadership and green entrepreneurship.
                            <br>I am now a fellow from The Resolution Project for winning the Social Venture Challenge at Harvard World Model United Nations, Rome 2016.
                            <br>I am therefore managing the awarded project called GreenFaso.
                            <br>The Project GREENFASO focuses on eco-friendly businesses such as waste management (Recycling) and the production and distribution of solar power in Burkina Faso.
                        </p>
                    </div>

                    <div class="pro-it  Communication col-md-4 col-sm-6 col-xs-12">
                        <img src="{{asset('images/uploads/aris.jpg')}}" alt="KUSIELE SOMDA Yéroséo Aris">
                        <div class="overlay"></div>
                        <div class="hover-inner">
                            <a class="btn btn-default" href="#" data-featherlight="#fl6"><i class="ion-eye"></i></a>
                            <h2><a class="btn btn-default" href="#" data-featherlight="#fl6">KUSIELE SOMDA Yéroséo Aris</a></h2>
                            <p>Head of Communication</p>
                        </div>
                    </div>
                    <div class="lightbox" id="fl6">
                        <center><h2>KUSIELE SOMDA Yéroséo Aris, Head of Communication</h2></center>
                        <p>
                            <br>Areas of Interest and competences : Strategy of communication (NGOs, Public & Private Institutions, Enterprises…),
                            <br>Human resources, communication of sustainable development, sustainable agriculture, journalism, French teaching, community management.
                            <br>Aris is currently Master 2 candidate in Responsible citizen communication, Asset and sustainable development (University of Cote d’Azur),
                            <br>holds twos Bachelors in Modern Letters and Communication & Journalism.
                            <br>He is fluent in Dagara, Dioula, French and English and notions in Deutsch.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/frontEnd/featherlight.min.js')}}" type="text/javascript" charset="utf-8"></script>
@endsection
