<?php
/**
 * Created by PhpStorm.
 * User: Riad
 * Date: 2/19/2019
 * Time: 2:44 AM
 */
?>

<div class="nav__right md-secondary-navigation">
    <ul class="nav__links nav__links--account pull-right user_area">
        <li>

            <form action="search" method="post" class="navbar-form" role="search">



                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="keyword">

                    <div class="input-group-btn">
                        <button  name="search" class="btn btn-default" id="btn" type="submit"><i class="glyphicon glyphicon-search" style="color: red;"></i></
                    </div>

                    <style>
                       #btn:hover{
                           background-color: unset;
                       }
                    </style>

                </div>
            </form>
        </li>
        <li>
            <a href="book" class="btn btn-danger"title="Book-Appoinment">
                <i class="fas fa-bookmark"></i>
            </a>
        </li>
        <li>
            <a href="events" class="btn btn-danger"title="Upcoming-event">
                <i" class="far fa-calendar-alt"></i>
            </a>
        </li>

        <?php
        if(isset($_SESSION['id'])){


            ?>
            <li>
                <a href="logout" class="btn btn-danger" style="
">
                    <i class="fas fa-bookmark"></i> <?php echo $_SESSION['name'];?>
                </a>

            </li>
        <?php }else{?>
            <li>
                <a href="login" class="btn btn-danger" style="
">
                    <i class="glyphicon glyphicon-user">&nbsp;</i>Login
                </a>
            </li>
        <?php }?>
    </ul>
</div>
