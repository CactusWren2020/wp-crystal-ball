<?php

namespace WPCrystalBall;

class Activation {
    public static function activate() {
        $role = get_role( 'administrator' );

        if (! empty( $role) ) {
            $role->add_cap( 'wp_crystal_ball_manage');
        }
    }
}
