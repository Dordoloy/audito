<?php

namespace App\Controller;

use ApiPlatform\Core\Bridge\Symfony\Validator\Exception\ValidationException;
use App\Entity\MediaObject;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateMediaObjectActionController extends AbstractController
{
    /**
     * @Route(
     *     name="api_medias_post",
     *     path="api/media",
     *     methods={"POST"},
     * )
     */
    public function postAction(Request $request){
        $file = $request->files->get("file");

        $entityManager = $this->getDoctrine()->getManager();

        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

        // Move the file to the directory where brochures are stored
        try {
            $file->move(
                $this->getParameter("kernel.project_dir")."/public/uploads/medias",
                $fileName
            );
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        $mediaObject = new MediaObject();
        $mediaObject->setImageFile($file);
        $mediaObject->setImageName($file->getClientOriginalName());

        $entityManager->persist($mediaObject);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
