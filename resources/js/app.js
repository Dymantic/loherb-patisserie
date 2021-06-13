/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import throttle from "lodash.throttle";

require('./bootstrap');
// import "flickity";
import "lazysizes";
import "flickity-imagesloaded";
import jump from "jump.js";
import Vue from "vue"
import ContactForm from './components/ContactForm';

import Usher from "./Usher";

Vue.component("contact-form", ContactForm);

const app = new Vue({
    el: '#app'
});

const nav_trigger = document.querySelector('#nav-trigger');
const main_nav = document.querySelector('.main-nav');

nav_trigger.addEventListener('click', () => {
    if(main_nav.classList.contains('expose')) {
        document.body.classList.remove('nav-open');
        return main_nav.classList.remove('expose');
    }
    document.body.classList.add('nav-open');
    main_nav.classList.add('expose')
}, false);

window.addEventListener('scroll', throttle(() => {
    if(window.scrollY > 25) {
        return main_nav.classList.add("scrolled");
    }
    main_nav.classList.remove("scrolled");
}, 150));

window.addEventListener('DOMContentLoaded', () => {
    [...document.querySelectorAll('a')].filter(a => a.href == window.location.toString()).forEach(a => a.classList.add('active'));

    [...document.querySelectorAll('.menu-scroller')].forEach(el => {
        if(el.scrollWidth > window.innerWidth) {
            el.scrollLeft = (el.scrollWidth / 2) - (window.innerWidth / 2);
        }
    });

    const usher = new Usher();
});

[...document.querySelectorAll('[data-jump-target]')].forEach(e => {
    e.addEventListener('click', (ev) => {
        ev.preventDefault();
        const target = ev.target.getAttribute('data-jump-target') || '#app';
        const offset = parseInt(ev.target.getAttribute('data-jump-offset')) || 0;
        jump(target, {offset});
    });
});

if(document.querySelector('[data-banner-jump]')) {
    document.querySelector('[data-banner-jump]').addEventListener('click', e => {
        e.preventDefault();
        jump('.post-banner', {offset: -48});
    });
}

import HolyScroller from "./HolyScroller";
window.HolyScroller = HolyScroller;
