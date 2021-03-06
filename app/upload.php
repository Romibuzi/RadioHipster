<?php
/**
 * Created by the fat ide JetBrains PhpStorm.
 * User: Franck GORIN
 * Date: 01/02/13 -- 21:37
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

// Controller Upload
$app->match('/upload', function (Request $request) use ($app)
{
    $form = $app['form.factory']->CreateBuilder('form')
        ->add('musicName', 'text', array(
            'label' => 'Titre de la musique',
            'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\Length(array('max' => 50))
            ),
            'attr' => array(
                'placeholder' => 'Nom de la musique'
            )
        ))
        ->add('artiste', 'text', array(
            'label' => 'Artiste de la musique',
            //'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\length(array('max' => 50))
            ),
            'attr' => array(
                'placeholder' => 'Artiste'
            )
        ))
        ->add('album', 'text', array(
            'label' => 'Album de la musique',
            //'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\Length(array('max' => 50))
            ),
            'attr' => array(
                'placeholder' => 'Album'
            )
        ))
        ->add('userName', 'text', array(
            'label' => 'Votre nom',
            'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\Length(array('max' => 50))
            ),
            'attr' => array(
                'placeholder' => 'Prénom Nom'
            )
        ))
        ->add('email', 'email', array(
            'label' => 'Votre adresse email',
            'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\Email(array('message' => 'Adresse email invalide'))
            ),
            'attr' => array(
                'placeholder' => 'email@example.com',
                'help' => 'Pas de spam !',
            )
        ))

        ->add('song', 'file', array(
            'label' => 'Balance ton son',
            'required' => true,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
                new Assert\File(array('mimeTypes' => array(
                    'audio/mpeg',
                ),
                    'mimeTypesMessage' => 'Seulement du MP3 Ludo',
                    //'maxSize' => "100M" ,
                    /*'maxSizeMessage' => '100MB au maximum'*/))
            ),
        ))
        ->getForm();

    // If the method is 'POST'
    if ('POST' == $request->getMethod())
    {
        $form->bind($request);

        // TO DO !!! isValid() !!!
        //if ($form->isValid())
        //{
            $data = $form->getData();

            $user = new User();
            $user->setUserEmail($data['email'])
                ->setUserName($data['userName'])
                ->save();

            $artiste = new Artiste();
            $artiste->setArtisteName($data['artiste'])
                ->save();

            $album = new Album();
            $album->setAlbumName($data['album'])
                ->save();

            $song = new Song();
            $song->setSongName($data['musicName'])
                ->setUserId($user->getUserId())
                ->setArtisteId($artiste->getArtisteId())
                ->setAlbumId($album->getAlbumId())
                ->setPlaylistId('1')
                ->save();

            $file = $data['song'];

            $dir = __DIR__.'/../songs';

            $file->move($dir, $song->getSongId().'.mp3');

            return $app->redirect('/RadioHipster/web/');
        //}
    }

    // display the form
    return $app['twig']->render('template/upload.twig', array('uploadForm' => $form->createView()));
})
->method('GET|POST')
->bind('upload');

return $app;