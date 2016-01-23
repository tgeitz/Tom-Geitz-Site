@extends('layouts.app')

@section('content')

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h2>PHP Developer from Chicago.  A fresh mind with an appetite.</h2>
                    </div>
                    <div class="intro-social">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/tom_geitz" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/tgeitz" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/tom-geitz-62b44797" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                            <li>
                                <a href="/resume" class="btn btn-default btn-lg"><i class="fa fa-user fa-fw"></i> <span class="network-name">Resume</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
<div class="projects-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="pmu-box">
                    <img src="../images/projectminverted.jpg" />
                </div>
            </div>
            <div class="col-md-5">
                <div class="place-my-order-box">
                    <img src="../images/knife-fork.png" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
