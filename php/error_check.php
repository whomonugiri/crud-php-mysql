<?php
function conNumbers( $string ) {
    return preg_match( '/\d/', $string );
}
// Does string contain special characters?
function conSpecial( $string ) {
    return preg_match('/[^a-zA-Z\d]/', $string);
}