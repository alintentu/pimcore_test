<?php

namespace App\Controller;

use Pimcore\Model\DataObject\Item;
use Pimcore\Model\DataObject\Classificationstore;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CustomActionController extends \Pimcore\Controller\FrontendController
{
    /**
     * @Route("/custom-action", name="custom_action")
     */
    public function customAction()
    {
        $item = Item::getById(1);

        if (!$item) {
            return new JsonResponse(['success' => false, 'message' => 'Item not found'], 404);
        }

        $classificationStore = $item->getClassificationstore();

        $group = new Classificationstore\Group();
        $group->setName('New Group');

        $key = new Classificationstore\KeyConfig();
        $key->setName('New Key');
        $group->addKey($key);

        $classificationStore->addGroup($group);
        $item->save();

        return new JsonResponse(['success' => true]);
    }
}
