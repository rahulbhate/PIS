<?php include_once("header.php"); 
include_once("sub-layouts/subMenu.php");
?>
    <div class="container">
    <section class="mysection">
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <p class="glyphicon glyphicon-arrow-up"></p>
        </button>

    </section>
        <ul class="nav nav-pills nav-justified">
            <li> <a data-toggle="tab" href="#pickContents">Picking System</a></li>
            <li class="active"><a href="#sortContents" data-toggle="tab">Sorting System</a></li>
            <li>
                <a data-toggle="tab" href="#carryContents">Carrying System</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="sortContents" class="tab-pane fade in active">
                <table class="table">

                    <tbody>
                        <tr>
                            <td></td>
                            <td><img src="./AMRimage/spec 3.png"/></td>
                            <td><img src="./AMRimage/spec 4.png"/></td>
                        </tr>
                        <tr class="active">
                            <td>Size (L*W*H)</td>
                            <td>970*800*830(mm)</td>
                            <td>600*540*1390(mm)</td>
                        </tr>
                        <tr class="">
                            <td>Dead-weight</td>
                            <td>210kg</td>
                            <td>60kg</td>
                        </tr>
                        <tr class="active">
                            <td>Rated load capacity</td>
                            <td>40kg</td>
                            <td>10kg</td>
                        </tr>
                        <tr class="">
                            <td>Size of parcel</td>
                            <td>800*700*150(mm)</td>
                            <td>400*400*150(mm)</td>
                        </tr>
                        <tr class="active">
                            <td>Max running speed</td>
                            <td>1.5m/s</td>
                            <td>2.5m/s</td>
                        </tr>
                        <tr class="">
                            <td>Parcel amounts</td>
                            <td>up to 2</td>
                            <td>up to 1</td>
                        </tr>
                        <tr class="active">
                            <td>Navigation</td>
                            <td>visual 2D code+inertial</td>
                            <td>visual 2D code+inertial</td>
                        </tr>
                        <tr class="">
                            <td>Obstacle avoidance</td>
                            <td>LIDAR+Anticollision bar</td>
                            <td>LIDAR</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="pickContents" class="tab-pane fade in active">
                <table class="table">

                    <tbody>
                    <tr>
                            <td></td>
                            <td><img src="./AMRimage/spec 1.png"/></td>
                            <td><img src="./AMRimage/spec 2.png"/></td>
                        </tr>
                        <tr class="active">
                            <td>Size (L*W*H)</td>
                            <td>915*715*300(mm)</td>
                            <td>1110*810*300(mm)</td>
                        </tr>
                        <tr class="">
                            <td>Dead-weight</td>
                            <td>180kg</td>
                            <td>260kg</td>
                        </tr>
                        <tr class="active">
                            <td>Rated load capacity</td>
                            <td>600KG</td>
                            <td>1000KG</td>
                        </tr>
                        <tr class="">
                            <td>Size of parcel</td>
                            <td>900*900(mm)</td>
                            <td>1200*1200/1100(mm)</td>
                        </tr>
                        <tr class="active">
                            <td>Communication mode</td>
                            <td>WIFI/IEEE902.1b/g</td>
                            <td>WIFI/IEEE902.1b/g</td>
                        </tr>
                        <tr class="">
                            <td>Max running speed</td>
                            <td>1.5m/s</td>
                            <td>1.2m/s</td>
                        </tr>
                        <tr class="active">
                            <td>Stop accuracy</td>
                            <td>
                                &lt; 5mm</td>
                            <td>
                                &lt; 5mm</td>
                        </tr>
                        <tr class="">
                            <td>Navigation</td>
                            <td>visual 2D code+inertial+slam</td>
                            <td>visual 2D code+inertial+slam</td>
                        </tr>
                        <tr class="active">
                            <td>Obstacle avoidance</td>
                            <td>LIDAR+Anticollision bar</td>
                            <td>LIDAR+Anticollision bar</td>
                        </tr>
                        <tr class="">
                            <td>Battery capacity</td>
                            <td>26Ah</td>
                            <td>40Ah</td>
                        </tr>
                        <tr class="active">
                            <td>Battery life</td>
                            <td>8h (fully loaded)</td>
                            <td>8h (fully loaded)</td>
                        </tr>
                        <tr class="">
                            <td>Charge time</td>
                            <td>
                                &lt; 1.5h (after totally discharged)</td>
                            <td>
                                &lt; 1.5h (after totally discharged) </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="carryContents" class="tab-pane fade in active">
                <table class="table">

                    <tbody>
                        <tr class="active">
                            <td>Size (L*W*H)</td>
                            <td>970*800*830(mm)</td>
                            <td>600*540*1390(mm)</td>
                        </tr>
                        <tr class="">
                            <td>Dead-weight</td>
                            <td>210kg</td>
                            <td>60kg</td>
                        </tr>
                        <tr class="active">
                            <td>Rated load capacity</td>
                            <td>40kg</td>
                            <td>10kg</td>
                        </tr>
                        <tr class="">
                            <td>Size of parcel</td>
                            <td>800*700*150(mm)</td>
                            <td>400*400*150(mm)</td>
                        </tr>
                        <tr class="active">
                            <td>Max running speed</td>
                            <td>1.5m/s</td>
                            <td>2.5m/s</td>
                        </tr>
                        <tr class="">
                            <td>Parcel amounts</td>
                            <td>up to 2</td>
                            <td>up to 1</td>
                        </tr>
                        <tr class="active">
                            <td>Navigation</td>
                            <td>visual 2D code+inertial</td>
                            <td>visual 2D code+inertial</td>
                        </tr>
                        <tr class="">
                            <td>Obstacle avoidance</td>
                            <td>LIDAR+Anticollision bar</td>
                            <td>LIDAR</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<?php  include_once("footer.php");?>