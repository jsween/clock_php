<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ClockAngle.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/angle", function() use($app) {
        $myAngle = new ClockAngle;

        $finalAngle = $myAngle->angle($_GET['hour'], $_GET['minute']);
        return $app['twig']->render('angle.html.twig', array('finalAngle' => $finalAngle));
    });

    return $app;
?>
