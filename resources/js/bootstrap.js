window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;



let token = document.head.querySelector('meta[name="csrf-token"]');

/*
if (token) {
    window.axios.defaults.headers.common['x-csrf-token'] = token.conten;
} else {
        console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
*/





import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');




window.Echo = new Echo({
    broadcaster: 'pusher',
  key: "53cd15c14c320fa1a499",
  cluster: "ap4",
  encrypted:true,
  //authEndpoint:"/broadcasting/auth",
  //'useTLS' : true,

  authEndpoint:"/api/broadcasting/auth",
  //csrfToken : token.content,
  auth:{
      headers:{

    Authorization:JSON.parse(localStorage.getItem('userToken'))
      }
  }

  /*authorizer: (channel, options) => {
    return {
        authorize: (socketId, callback) => {
            axios.post('/api/broadcasting/auth', {
                socket_id: socketId,
                channel_name: channel.name
            })
            .then(response => {
                callback(false, response.data);
            })
            .catch(error => {
                callback(true, error);
            });
        }
    };
},
*/

});

