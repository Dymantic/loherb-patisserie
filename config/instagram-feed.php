<?php

return [
    /*
     * The client_id from registering your app on Instagram
     */
    'client_id'           => env('INSTAGRAM_KEY'),

    /*
     * The client secret from registering your app on Instagram,
     * This is not the same as an access token.
     */
    'client_secret'       => env('INSTAGRAM_SECRET'),

    /*
     * The route that will respond to the Instagram callback during the OAuth process.
     * Only enter the path without the leading slash. You need to ensure that you have registered
     * a redirect_uri for your instagram app that is equal to combining the
     *  app url (from config) and this route
     */
    'auth_callback_route' => 'instagram/auth/callback',

    /*
     * On success of the OAuth process you will be redirected to this route.
     * You may use query strings to carry messages
     */
    'success_redirect_to' => 'instagram-auth-success',

    /*
     * If the OAuth process fails for some reason you will be redirected to this route.
     * You may use query strings to carry messages
     */
    'failure_redirect_to' => 'instagram-auth-failure',

    'ignore_video' => true,
];
