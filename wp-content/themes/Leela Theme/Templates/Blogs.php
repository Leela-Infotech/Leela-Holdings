<?php
/**
 * Template Name: Blog Template
 * @package Leela Infotech
 */

get_header(); ?>



   <div class="container py-lg-5 py-2">
    <div class="content-area row" style="display: flex; gap: 20px;">
    <?php get_template_part('../single') ?>    

           <!-- Sidebar -->
    <div class="sidebar-wrapper col-lg-4 d-lg-block d-none" style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>
   </div>
</div>