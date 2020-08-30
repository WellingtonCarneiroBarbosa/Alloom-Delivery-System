@extends('layouts.front')

@section('title', 'Início')

@section('nav-content')
    <x-front.loader />
    <x-front.nav />
@endsection

@section('footer-content')
    <x-front.footer />
@endsection

@section('main-content')
<section class="section-header pb-7 pb-lg-11 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6">
                <h2 class="h4 font-weight-normal text-muted">Soluções Inteligentes para Pizzarias</h2>
                <h1 class="display-1 mb-4">Crie Sua Presença Digital</h1>
                <p class="lead mb-3 mb-lg-5">Receba e gerencie pedidos em escala. Estatísticas de todas suas filiais em um único lugar. Isso é: Alloom Delivery Pizza.</p><a class="btn btn-secondary animate-up-2 mb-5 mb-lg-0" target="_blank"
                    href="../../../../themesberg.com/docs/rocket/getting-started/overview/index.html"><i class="fas fa-file-alt mr-2"></i>Saiba Mais</a></div>
            <div class="col-12 col-lg-5">
                <div class="card shadow-sm text-dark p-4">
                    <div class="card-body p-2">
                        <form action="#">
                            <div class="form-group mb-4"><label class="h6 text-dark" for="full-name">Seu Nome Completo</label> <input id="full-name" name="name" type="text" class="form-control" placeholder="Ex. James Curran" required></div>
                            <div class="form-group mb-4"><label class="h6 text-dark" for="company-name">Nome de Seu Negócio</label> <input id="company-name" name="company-name" type="text" class="form-control" placeholder="Ex. James Curran Pizzas" required></div>
                            <div class="form-group mb-4"><label class="h6 text-dark" for="phone">Seu Telefone (WhatsApp)</label> <input id="phone" name="phone" type="number" class="form-control" placeholder="(xx) x xxxx-xxxx" required></div>
                            <div class="form-group mb-4"><label class="h6 text-dark" for="company-size">Tamanho da Empresa</label>
                                <div class="position-relative"><select class="custom-select" id="company-size" required=""><option selected="" value="">Selecione uma opção</option><option value="1-5">1-5</option><option value="5-25">5-25</option><option value="25+">25+</option></select></div>
                            </div><button class="btn btn-primary btn-block btn-loading" type="submit">Solicitar Teste Gratuito</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section section-lg pt-6">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-lg-6">
            <div class="col-12 col-md-8 text-center">
                <h2 class="h1 font-weight-bolder mb-4">Who is Rocket for?</h2>
                <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="card border-light p-4">
                    <div class="card-header pb-0">
                        <div class="image-md"><img src="../assets/img/icons/marketing.svg" alt="icon"></div>
                        <h2 class="h4 mt-3">Marketing</h2>
                        <p class="mb-0">Reveal best strategies from the market and your competitors</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Uncover the best SEO and content strategies</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Build & grow your affiliate and media partnerships</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Enhance your display and paid search strategies</div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-0"><a href="about.html" class="btn btn-block btn-primary">Learn more<span class="icon icon-xs ml-2"><i class="fas fa-arrow-right"></i></span></a></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="card border-light p-4">
                    <div class="card-header pb-0">
                        <div class="image-md"><img src="../assets/img/icons/research.svg" alt="icon"></div>
                        <h2 class="h4 mt-3">Research</h2>
                        <p class="mb-0">Understand your market, your competitors and your customers</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Benchmark your market and find ways to grow</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Analyze trends, competitors' strategy and audience</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Understand the shopper’s journey for best decisions</div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-0"><a href="about.html" class="btn btn-block btn-primary">Learn more<span class="icon icon-xs ml-2"><i class="fas fa-arrow-right"></i></span></a></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0 text-center">
                <div class="card border-light p-4">
                    <div class="card-header pb-0">
                        <div class="image-md"><img src="../assets/img/icons/sales.svg" alt="icon"></div>
                        <h2 class="h4 mt-3">Sales</h2>
                        <p class="mb-0">Enhance performance throughout your sales funnel</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Find, enrich and qualify leads to increase sales</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Generate the insights you need to perfect your pitch</div>
                            </li>
                            <li class="list-group-item d-flex text-left pl-0"><span class="list-icon"><i class="fas fa-check-circle text-success"></i></span>
                                <div>Monitor website traffic statistics to boost retention</div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-0"><a href="about.html" class="btn btn-block btn-primary">Learn more<span class="icon icon-xs ml-2"><i class="fas fa-arrow-right"></i></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section section-sm py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-gray text-center">
                <div class="icon icon-xl mr-2 mr-sm-5"><span class="fab fa-stripe"></span></div>
                <div class="icon icon-xl mr-2 mr-sm-5"><span class="fab fa-digg"></span></div>
                <div class="icon icon-xl mr-2 mr-sm-5"><span class="fab fa-fedex"></span></div>
                <div class="icon icon-xl mr-2 mr-sm-5"><span class="fab fa-ember"></span></div>
                <div class="icon icon-xl mr-2 mr-sm-5"><span class="fab fa-d-and-d-beyond"></span></div>
                <div class="icon icon-xl"><span class="fab fa-angrycreative"></span></div>
            </div>
        </div>
    </div>
</div>
<section class="section section-lg bg-white">
    <div class="container">
        <div class="row row-grid align-items-center mb-7">
            <div class="col-12 col-lg-5">
                <h2 class="font-weight-bolder mb-4">Content Explorer</h2>
                <p>Put any keyword into this tool to see which content has performed best in terms of social buzz, number of backlinks and organic search traffic.</p>
                <p>Find all articles that mentioned your target keyword and use the "Highlight unlinked domains" feature to see which of these websites have never linked to you.</p><a href="dashboard/app-analysis.html" class="btn btn-primary mt-3 animate-up-2">Content Explorer Tool <span class="icon icon-xs ml-2"><i class="fas fa-external-link-alt"></i></span></a></div>
            <div
                class="col-12 col-lg-6 ml-lg-auto"><img src="../assets/img/homepage-feature-2.png" alt="image"></div>
    </div>
    <div class="row row-grid align-items-center">
        <div class="col-12 col-lg-5 order-lg-2">
            <h2 class="font-weight-bolder mb-4">Rank Tracker</h2>
            <p>We track your desktop and mobile keyword rankings from any location and plot your full ranking history on a handy graph.</p>
            <p>You can set up automated ranking reports to be sent to your email address, so you’ll never forget to check your ranking progress.</p><a href="dashboard/traffic-sources.html" class="btn btn-primary mt-3 animate-up-2">Rank Tracker Tool <span class="icon icon-xs ml-2"><i class="fas fa-external-link-alt"></i></span></a></div>
        <div
            class="col-12 col-lg-6 mr-lg-auto"><img src="../assets/img/homepage-feature-1.png" alt="image"></div>
    </div>
    </div>
</section>
<section class="section section-lg py-7 py-lg-10 bg-primary">
    <div class="pattern top"></div>
    <div class="container">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 col-lg-8 text-center mx-auto">
                    <h2 class="h1 mb-4">More Rocket perks</h2>
                    <p class="lead">The best and most complete data in the industry powers Rocket's tools</p>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card border-light text-primary mb-4">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div>
                                    <div class="icon icon-primary"><span class="fas fa-headset"></span></div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="mb-3">24/5 customer support</h5>
                                    <p class="icon-box-text">Have a question, concern or feedback for us? Our support team is a quick chat or email away — 24 hours a day, Monday to Friday.</p><a href="support-topic.html" class="btn btn-sm btn-primary">Read more <i class="fas fa-link ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card border-light text-primary mb-4">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div>
                                    <div class="icon icon-primary"><span class="fas fa-users"></span></div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="icon-box-title">Private community</h5>
                                    <p class="icon-box-text">Take full advantage of insights from highly-accomplished SEO specialists and digital marketers in our customers-only community.</p><a href="support-topic.html" class="btn btn-sm btn-primary">Read more <i class="fas fa-link ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card border-light text-primary mb-4">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div>
                                    <div class="icon icon-primary"><span class="fas fa-book-reader"></span></div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="icon-box-title">Learning materials</h5>
                                    <p class="icon-box-text">The marketing tutorials on our blog and YouTube channel, and in the Rocket Academy, often feature our tools.</p><a href="support-topic.html" class="btn btn-sm btn-primary">Read more <i class="fas fa-link ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card border-light text-primary mb-4">
                        <div class="card-body">
                            <div class="d-flex p-3">
                                <div>
                                    <div class="icon icon-primary"><span class="fas fa-rocket"></span></div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="icon-box-title">Features released regularly</h5>
                                    <p class="icon-box-text">We frequently update existing tools and release new features — many of which are heavily influenced by requests from our customers.</p><a href="support-topic.html" class="btn btn-sm btn-primary">Read more <i class="fas fa-link ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center mb-5 mb-lg-7">
            <div class="col-12 col-md-8 text-center">
                <h1 class="h1 mb-4">Recommended by leading experts in marketing and SEO</h1>
                <p class="lead">Our products are loved by users worldwide</p>
            </div>
        </div>
        <div class="row mb-lg-5">
            <div class="col-12 col-lg-6">
                <div class="customer-testimonial d-flex mb-5"><img src="../assets/img/team/profile-picture-1.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                    <div class="content-wrapper bg-soft shadow-soft border border-light rounded position-relative p-4">
                        <div class="d-flex mb-4"><span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            <span
                                class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span></div>
                        <p class="mt-2">"We use Rocket mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                        <span
                            class="h6">- James Curran <small class="ml-0 ml-md-2">General Manager Spotify</small></span>
                    </div>
                </div>
                <div class="customer-testimonial d-flex mb-5"><img src="../assets/img/team/profile-picture-2.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                    <div class="content-wrapper bg-soft shadow-soft border border-light rounded position-relative p-4">
                        <div class="d-flex mb-4"><span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            <span
                                class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span></div>
                        <p class="mt-2">"We use Rocket mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                        <span
                            class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Front-end developer Oracle</small></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pt-lg-6">
                <div class="customer-testimonial d-flex mb-5"><img src="../assets/img/team/profile-picture-4.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                    <div class="content-wrapper bg-soft shadow-soft border border-light rounded position-relative p-4">
                        <div class="d-flex mb-4"><span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            <span
                                class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span></div>
                        <p class="mt-2">"We use Rocket mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                        <span
                            class="h6">- Jose Evans <small class="ml-0 ml-md-2">Chief Engineer Apple</small></span>
                    </div>
                </div>
                <div class="customer-testimonial d-flex mb-5"><img src="../assets/img/team/profile-picture-6.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                    <div class="content-wrapper bg-soft shadow-soft border border-light rounded position-relative p-4">
                        <div class="d-flex mb-4"><span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            <span
                                class="text-warning mr-2"><i class="star fas fa-star"></i></span> <span class="text-warning mr-2"><i class="star fas fa-star"></i></span></div>
                        <p class="mt-2">"We use Rocket mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                        <span
                            class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Designer Google</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center"><a href="testimonials.html" class="btn btn-primary animate-up-2"><span class="mr-2"><i class="fas fa-book-open"></i></span> See all stories</a></div>
        </div>
    </div>
</section>
<section class="section section-lg pb-5 bg-soft">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Faster growth starts with Rocket</h2>
                <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p><a href="#" class="icon icon-lg text-gray mr-3"><span class="fab fa-mailchimp"></span> </a><a href="#" class="icon icon-lg text-gray mr-3"><span class="fab fa-cpanel"></span> </a>
                <a
                    href="#" class="icon icon-lg text-gray mr-3"><span class="fab fa-dhl"></span> </a><a href="#" class="icon icon-lg text-gray mr-3"><span class="fab fa-github-alt"></span> </a><a href="#" class="icon icon-lg text-gray mr-3"><span class="fab fa-aws"></span> </a>
                    <a href="#" class="icon icon-lg text-gray"><span class="fab fa-node"></span></a>
            </div>
            <div class="col-12 text-center"> <button type="button" class="btn btn-secondary animate-up-2" data-toggle="modal" data-target=".pricing-modal"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Start 30-days trial</button></div>
        </div>
    </div>
</section>
<div id="pricing-modal" class="modal fade pricing-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content py-4">
            <div class="px-3">
                <div class="col-12 d-flex justify-content-end d-lg-none"><i class="fas fa-times" data-dismiss="modal" aria-label="Close"></i></div>
            </div>
            <div class="modal-header text-center text-black">
                <div class="col-12">
                    <h4 class="px-lg-6">Our 30-days trial gives you full access to all tools and features of your chosen plan.</h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 text-left">
                        <div class="form-check card border-light p-3"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> <label class="form-check-label" for="exampleRadios1"><span class="h6 text-black d-block">Free</span> <span class="small text-gray">30 days for free, then $99/mo</span> <span class="text-gray mt-3 d-block p">Suits freelance marketers and solopreneurs. Get full access to Ahrefs' core tools and features with enough data to do SEO for your personal projects.</span></label></div>
                    </div>
                    <div class="col-12 col-lg-6 text-left">
                        <div class="form-check card border-light p-3"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked="checked"> <label class="form-check-label" for="exampleRadios2"><span class="h6 text-black d-block">Premium</span> <span class="small text-gray">200$/mo</span> <span class="text-gray mt-3 d-block p">Perfect for SEO consultants and in-house marketers. Get everything in Lite with more features and increased data limits to research a large number of websites.</span></label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 text-center">
                <div class="col text-gray"><a href="checkout.html" class="btn btn-primary mb-4">Continue</a>
                    <p class="small mb-0">You can upgrade, downgrade, or cancel your subscription anytime.<br>No contracts, no hidden charges.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
