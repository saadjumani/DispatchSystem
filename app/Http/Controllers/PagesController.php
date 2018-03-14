<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('index') ;
    }
    public function dashboard() {
        return view('index') ;
    }
    public function layout_navbar_fixed() {
    	return view('layout_navbar_fixed');
    }

    public function welcome() {
    	$title = "Hello I am Taha \n" ;
    	//return view('welcome', compact('title'));
    	return view('welcome')->with('title', $title);

    }
    public function alpaca_advanced() {
    	return view('alpaca_advanced');
    }
    /*public function load() {
        return view('load');
    }
    public function addLoad() {
        return view('addLoad');
    }*/




    public function login_validation() {
        return view('login_validation');
    }
    public function login_unlock() {
        return view('login_unlock');
    }
    public function login_transparent() {
        return view('login_transparent');
    }
    public function login_tabbed() {
        return view('login_tabbed');
    }
    public function login_simple() {
        return view('login_simple');
    }
    public function login_registration_advanced() {
        return view('login_registration_advanced');
    }
    public function login_registration() {
        return view('login_registration');
    }
    public function login_password_recover(){
        return view('login_password_recover');
    }
    public function login_modals() {
        return view('login_modals');
    }
    public function login_hide_navbar() {
        return view('login_hide_navbar');
    }
    public function login_background() {
        return view('login_background');
    }
    public function login_advanced() {
        return view('login_advanced');
    }

    //login

    public function form_bootstrap_select() {
        return view('form_bootstrap_select');
    }
    public function form_checkboxes_radios() {
        return view('form_checkboxes_radios');
    }
    public function form_controls_extended() {
        return view('form_controls_extended');
    }
    public function form_dual_listboxes() {
        return view('form_dual_listboxes');
    }
    public function form_editable() {
        return view('form_editable');
    }
    public function form_floating_labels() {
        return view('form_floating_labels');
    }
    public function form_input_groups() {
        return view('form_input_groups');
    }
    public function form_inputs_basic(){
        return view('form_inputs_basic');
    }
    public function form_inputs_grid() {
        return view('form_inputs_grid');
    }
    public function form_layout_horizontal() {
        return view('form_layout_horizontal');
    }
    public function form_layout_vertical() {
        return view('form_layout_vertical');
    }
    public function form_multiselect() {
        return view('form_multiselect');
    }
    public function form_select_box_it() {
        return view('form_select_box_it');
    }
    public function form_select2() {
        return view('form_select2');
    }
    public function form_tag_inputs() {
        return view('form_tag_inputs');
    }
    public function form_validation() {
        return view('form_validation');
    }
}
