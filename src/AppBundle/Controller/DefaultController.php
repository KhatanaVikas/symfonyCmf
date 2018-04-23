<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\Task;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $documentManager = $this->get('doctrine_phpcr')->getManager();
        $rootTask = $documentManager->find(null, '/cms/pages');

        $task = new Task();
        $task->setTitle('Finish CMF project');
        $task->setParentDocument($rootTask);
        $task->setDone(true);

        $documentManager->persist($task);
        $documentManager->flush();

        /*$repository = $this->get('doctrine_phpcr')->getRepository('AppBundle:Task');
        $tasks = $repository->findAll();

        if (!$tasks) {
            throw $this->createNotFoundException('No task found with name '.$name);
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'tasks' => $tasks
        ));*/
    }
}
