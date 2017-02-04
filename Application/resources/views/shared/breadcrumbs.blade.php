<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 2/3/17
 * Time: 4:39 PM
 *
 * Breadcrumbs for all pages.
 */
?>
<ul class="breadcrumb">
    <li>
        <i class="ace-icon fa fa-home home-icon"></i>

        @if(Auth::guard('admin_user')->user())
                <a href="{!! URL('/admin-home') !!}">Home</a>
        @elseif(Auth::user())
                <a href="{!! URL('/') !!}">Home</a>
        @endif
    </li>
    @yield('more_crumbs')

</ul><!-- /.breadcrumb -->