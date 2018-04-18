@extends('app')

@section('body-class', 'community')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
        </a>
    </div>

    <ul class="slide-main-nav">
        @include('partials.main-nav')
    </ul>
</nav>

<section class="partner-profile">
    <div class="container">
        <a href="/partners"><h4>Laravel Partners</h4></a>

        <div class="partner-profile-header clearfix">
            <div class="partner-logo"><img src="/assets/img/partner-img-insider-logo-black.png" width="116" height="53"></div>
            <div class="partner-ctas">
                <a href="http://useinsider.com/career/"><div class="btn btn-primary">Get Hired</div></a>
                <a href="https://useinsider.com/"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-insider-team.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>PHP7 / Go / Ruby / NodeJS / Python</li>
                            <li>AWS / Docker</li>
                            <li>Microservice / Saga Architecture</li>
                            <li>ECMA / VueJS / React</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Scala / Spark / Hadoop</li>
                            <li>RDS / Cassandra / DynamoDB</li>
                            <li>MongoDB / ElasticSearch / Redis</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://www.facebook.com/useinsider"><img src="/assets/svg/icon-facebook.svg"></a></li>
                        <li><a href="https://twitter.com/useinsider"><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><a href="https://www.linkedin.com/company/sociaplus/"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Insider</h2>
                <p>Insider is an Integrated Growth Management Platform (GMP) for digital marketers, backed by Sequoia Capital. We offer a full suite of features across the marketing funnel, from Acquisition to Activation, Retention, and Revenue. Our features help brands reach out their desired audience in an efficient and seamless way with deep Artificial Intelligence capabilities. Our platform delivers real-time predictive segmentation and personalization across the web, mobile web, mobile app and ad channels, delivering smoother, timely and mindful customer experiences.</p>
                <p>Our engineers and developers are constantly harnessing the full force of the digital world to make a great impact, nurturing their work with innovation and shipping like artists to create beautiful and smart products. We’re a global technology company with offices in 16 markets worldwide, including UK, Japan, South Korea, Indonesia and Australia. The product development and the technical team is located in Istanbul. Currently, we are running 190+ servers on an average, 770 Million requests, and sending 200 Million push notifications per day. In predictive we accomplish to capture more than 50TB+ of historical data. We also successfully reached 25% of the global population.</p>
                <p>We partner with over 300 global brands, such as Singapore Airlines, Tokopedia, UNIQLO, Virgin, Samsung, New Balance, Newsweek, McDonald’s, Ticketmaster, Nissan, BBVA, Allianz, and CNN to help them drive growth and loyalty. Insider was listed as one of the 100 Hottest Startups by WIRED Magazine and won Red Herring Top 100 Europe in 2017. CrunchBase has recently ranked Insider’s co-founder and CEO Hande Cilingir as one of the top three women CEOs outside of the US.</p>
            </div>
        </div>
    </div>
</section>
@endsection
