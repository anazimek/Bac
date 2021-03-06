<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);


Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Accueil', 'action' => 'index']);

    $routes->connect('/Accueil/*', ['controller' => 'Articles', 'action' => 'index']);
    $routes->connect('/Post/Details/*', ['controller' => 'Articles', 'action' => 'view']);
    $routes->connect('/Post/Editer/*', ['controller' => 'Articles', 'action' => 'edit']);
    $routes->connect('/Post/NouveauPost', ['controller' => 'Articles', 'action' => 'add']);
    $routes->connect('/Post/Supprimer/*', ['controller' => 'Articles', 'action' => 'delete']);



    $routes->connect('/Commentaire/Editer/*', ['controller' => 'Comments', 'action' => 'edit']);
    $routes->connect('/Commentaire/NouveauCommentaire', ['controller' => 'Comments', 'action' => 'add']);
    $routes->connect('/Commentaire/Supprimer/*', ['controller' => 'Comments', 'action' => 'delete']);



    $routes->connect('/Utilisateurs', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/Utilisateurs/Profil/*', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/Utilisateurs/Editer/*', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('/Utilisateurs/NouvelUtilisateur/*', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/Utilisateurs/Supprimer/*', ['controller' => 'Users', 'action' => 'delete']);



    $routes->connect('/Annonces', ['controller' => 'Ads', 'action' => 'index']);
    $routes->connect('/Annonces/NouvelleAnnonce/*', ['controller' => 'Ads', 'action' => 'add']);
    $routes->connect('/Annonces/Editer/*', ['controller' => 'Ads', 'action' => 'edit']);
    $routes->connect('/Annonces/Details/*', ['controller' => 'Ads', 'action' => 'view']);
    $routes->connect('/Annonces/Supprimer/*', ['controller' => 'Ads', 'action' => 'delete']);





    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();


Router::prefix('admin', function ($routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/utilisateur', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/utilisateur/profil/*', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/utilisateur/ajouter', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/utilisateur/editer/*', ['controller' => 'Users', 'action' => 'edit']);
    $routes->fallbacks(DashedRoute::class);
});
