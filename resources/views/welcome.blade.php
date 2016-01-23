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

<!-- /.intro-paragraph -->
<div class="intro-paragraph">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>I specialize in server-side Laravel development, but I'm also delighted by front-end work.  I'm a writer, multi-instrumentalist, and very likely the best Super Smash Bros player you'll ever meet.</h3>
            </div>
        </div>
    </div>
</div>

<!-- /.articles-projects-container -->
<div class="container articles-projects-container">
    <div class="row">

        <!-- /.articles-section -->
        <div class="articles-section">
            <div class="col-md-7">
                <div class="row">
                    <h1><strong>Recent Articles</strong></h1>
                </div>
                <div class="row">

                        <div class="articles-box">
                            <h3>No articles yet!</h3>
                        </div>

                </div>
            </div>
            <!-- /.container -->

        </div>
        <!-- /.articles-section -->

        <!-- /.projects-section -->
        <div class="projects-section">
            <div class="col-md-4 col-md-offset-1">
                <div class="row">

                        <h1><strong>Projects</strong></h1>

                </div>


                        <a href="http://www.pmunderground.net/">
                            <div class="project-box">
                                <img src="../images/project-m-inverted.jpg" class="pmu-image"/>
                            </div>
                        </a>




                        <div class="project-box-desc">
                            <h3><strong>PM Underground</strong></h3>
                            <h4>Community site for the popular game Super Smash Bros: Project M.  I help run the server.</h4>
                        </div>




                        <a href="https://lit-waters-8964.herokuapp.com/">
                            <div class="project-box">
                                <img src="../images/knife-fork.png" class="place-my-order-image"/>
                            </div>
                        </a>



                        <div class="project-box-desc">
                            <h3><strong>Place My Order</strong></h3>
                            <h4>A real-time restaurant ordering app I created using the JavaScript framework DoneJS.</h4>
                        </div>



            </div>
            <!-- /.container -->

        </div>
        <!-- /.projects-section -->
    </div>
</div>

@endsection
