<div class="header-top">
    <div class="container">
        <div class="pull-left auto-width-left">
            <ul class="top-menu menu-beta l-inline">
                <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
            </ul>
        </div>
        <div class="pull-right auto-width-right">
            <ul class="top-details menu-beta l-inline">
                <?php

                if (Auth::check()) {
                    echo '<li><a href="" onclick="OK"><i class="fa fa-user"></i>' . Auth::user()->name . '</a></li>';
                } else {
                    echo '<li><a href="/login"><i class="fa fa-user"></i>Login</a></li>';
                }
                ?>
                @if(!Auth::check())
                        <li><a href="/register">Đăng kí</a></li>
                @endif

                @if(Auth::check())
                        <form action='/logout' method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Logout">
                        </form>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .header-top -->