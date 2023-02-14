<?php
/**
 * Plugin Name: WP Crystal Ball
 * Plugin URI: https://mikecho.dev
 * Description: Generate answers to your questions, using OpenAI
 * Version: 0.1
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Michael W. Cho
 * Author URI: https://mikecho.dev
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-crystal-ball
 * Domain Path: /public/lang
 */

namespace WPCrystalBall;

register_activation_hook( __FILE__, function() {
    require_once plugin_dir_path( __FILE__ ) . 'src/Activation.php';
    Activation::activate();
});

register_deactivation_hook( __FILE__, function() {
    require_once plugin_dir_path( __FILE__) . 'src/Deactivation.php';
    Deactivation::deactivate();
});

/*
Copyright (C) <2023>  <Michael W. ChoS>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/
