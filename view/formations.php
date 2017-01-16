<link href="<?php BASE_URL; ?>css/formations.css" rel="stylesheet">

<div class="page-content">
    <div class="row">
        <div class="col-md-2" style="min-height: 1500px">
            <div class="sidebar content-box" style="display: block; position: fixed">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="http://localhost/M2l/formations"><i class="glyphicon glyphicon-calendar"></i> Formations</a></li>
                    <li><a href="stats"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="login">Login</a></li>
                            <li><a href="signup">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <section id="formation">

            <div class="text-center">
                <h1>FORMATIONS DISPONIBLES</h1><hr><br>
                <?php
                    while ($get_formation = $requete->fetch()){
                        echo "";
                        echo "<div class='col-md-3 wow fadeInUp' data-wow-delay='0.9s'>
                                <div class='wrapper'>
                                    <a href='formation_detail/".$get_formation['id_f']."'>
                                        <img src='images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                            <div class='des'>
                                                <h4>".$get_formation['nom']."</h4>
                                                <h5>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                <h5>Coût : ".$get_formation['credits']." crédits</h5><hr>
                                                <p>".substr($get_formation['description'],0,100)." 
			                                    <span>...</span></p>
                                            </div>
                                    </a>
                                </div>
                              </div>";
                    }
                ?>
            </div>
        </section>

    </div>
</div>