import Swal from 'sweetalert2';

window.Swal = Swal;
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('sweetalert2');
    require('bootstrap');
} catch (e) { }

