<?php  date_default_timezone_set('Europe/Istanbul'); ?>
<div id="left-menu">
  <div class="sub-left-menu scroll">
    <ul class="nav nav-list">
      <li><div class="left-bg"></div></li>
      <li class="time">
        <h1 class="animated fadeInLeft"><?= date('H') ?>:<?= date('i') ?></h1>
        <p class="animated fadeInRight"><?= get_date() ?></p>
      </li>
      <li class="active ripple">
        <a href="<?= base_url('/') ?>" 
          class="tree-toggle nav-header"><span class="fa-home fa"></span> Ana Sayfa 
        </a>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa-diamond fa"></span> Ürünler
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="topnav.html">Ürün Ekle</a></li>
          <li><a href="boxed.html">Ürünleri Görüntüle</a></li>
          <li><a href="boxed.html">Ürün Geçmişi</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa fa-users"></span> Müşteriler
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="topnav.html">Müşteri Ekle</a></li>
          <li><a href="boxed.html">Müşterileri Görüntüle</a></li>
          <li><a href="boxed.html">Müşteri Geçmişi</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa fa-user"></span> Kullanıcılar
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="topnav.html">Kullanıcı Ekle</a></li>
          <li><a href="boxed.html">Kullanıcıları Görüntüle</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa fa-dashboard"></span> İstatistikler
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="topnav.html">Harcamaları Belirle</a></li>
          <li><a href="boxed.html">Grafikler</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>