<?php    //dd( $labels);?>


<footer>
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_about">
                        <h3>{{$labels[17]->text}}</h3>
                        <p>{{$labels[34]->text}}</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_sitemap">
                        <h3>{{$labels[19]->text}}</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">{{$labels[0]->text}}</a>
                            </li>
                            <li>
                                <a href="#projects">{{$labels[1]->text}}</a>
                            </li>
                            <li>
                                <a href="#offers">{{$labels[2]->text}}</a>
                            </li>
                            <li>
                                <a href="#inspiring">{{$labels[3]->text}}</a>
                            </li>
                            <li>
                            <a href="{{ route('contact') }}">{{$labels[4]->text}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                 
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_news">
                        <h3>{{$labels[4]->text}}</h3>
                        
                        <p>
                        {{$labels[5]->text}}
                        </p> <p>
                        {{$labels[6]->text}}
                        </p>
                    </div>
                </div>
                
            </div><!--End row-->
            <div class="rights">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                    </div>
                    
                </div>
            </div>
        </div><!--End Container-->
    </footer>
