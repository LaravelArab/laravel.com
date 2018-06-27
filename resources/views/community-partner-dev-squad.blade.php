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
            <div class="partner-logo"><img src="/assets/img/partner-logo-dev-squad-full.png"></div>
            <div class="partner-ctas">
                <a href="mailto:phil@devsquad.com"><div class="btn btn-primary">Hire DevSquad</div></a>
                <a href="http://devsquad.com/"><div class="btn btn-default">Visit Website</div></a>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-devsquad.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Staff Augmentation</li>
                            <li>Startup MVP Development</li>
                            <li>Enterprise Modernization</li>
                            <li>Project Rescue</li>
                            <li>UI/UX Product design</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel</li>
                            <li>Vue.js</li>
                            <li>Angular</li>
                            <li>React</li>
                            <li>SAAS Development</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><a href="https://www.facebook.com/teamdevsquad"><img src="/assets/svg/icon-facebook.svg"></a></li>
                        <li><a href="https://twitter.com/teamdevsquad"><img src="/assets/svg/icon-twitter.svg"></a></li>
                        <li><a href="https://www.linkedin.com/company/teamdevsquad/"><img src="/assets/svg/icon-linkedin.svg"></a></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About DevSquad</h2>
                <p>You can think of DevSquad as the <strong>Navy SEALs of software development</strong>. Our team members have unique and diverse skills, and this cross-functionality lets us successfully complete any mission. </p>
                <p>All of our clients get their own dedicated Squad. Even if you need 30 developers, everyone working on your project is split into small agile teams of 2-6 people. A battle-tested small people can move quicker and with more precision than larger teams, just like the Navy SEALs.</p>
                <p>Instead of the bug-filled code, you may have received in the past, we write robust software and test the hell out of it. But instead of just testing manually, we write additional code to test your code. This ensures bugs are spotted quickly and automatically before your employees or customers ever touch the software. And it prevents bigger problems down the road when you try to scale usage or add new features.</p>
                <p>DevSquad gives you the proven proves and all the experience you need to build your software better, faster, and right the first time.</p>
            </div>
        </div>
    </div>
</section>
@endsection
