<?

define( 'ROOT' , $_SERVER['DOCUMENT_ROOT'] );
define( 'HOST' , $_SERVER['HTTP_HOST'] );
define( 'APP'  , ROOT . '/application' );

require APP . '/config/settings.php';

// ========================================
// Router
// ========================================

require APP . '/controller/controller.php';

switch ( split_url() ) {
    case '':
        require APP . '/controller/home.php';
        $page = new Home;
        $page->index();
        break;
    case 'about':
        require APP . '/controller/about.php';
        $page = new About;
        $page->index();
        break;
    case '404':
    default:
        require APP . '/controller/error.php';
        $page = new Error;
        $page->index();
        break;
}