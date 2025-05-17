<?php session_start(); if(!isset($_SESSION['admin'])) header('Location: login.php'); ?>
<h2>Dashboard Admin</h2>
<a href='pages/daftar_pendaki.php'>📋 Daftar Pendaki</a><br>
<a href='pages/lacak_pendaki.php'>📍Lacak Pendaki</a>
