<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\calert\Controller;

class BaseController
{


    public function content()
    {
        $entity = \Drupal::entityManager()->getStorage('node')->load(1);


        calert_send_broadcast($entity,true);

        //$this->notify_now(1);

        die('Broadcast sent for test content');
        return 'wow';
        $account_data = \Drupal::service('user.data')->get('calert', \Drupal::currentUser()->id(), 'enabled');

        \Drupal::service('user.data')->set('calert', \Drupal::currentUser()->id(), 'enabled', (int) 2);

        var_dump($account_data);
        die();

        //$config = \Drupal::config('calert.settings');

        $config = \Drupal::service('config.factory')->getEditable('calert.settings');

        var_dump($config->get('defaults')['page']);
        var_dump($config->get('defaults')['article2']);

        $config->set('defaults.article2', 12)->save();

        //var_dump($config->get('defaults')['article']);

        //var_dump($config);
        die();

        /*
        $current_user = \Drupal::currentUser();
        $user = \Drupal\user\Entity\User::load($current_user->id());

        // or just
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
         */

        /*
        $types = \Drupal::entityTypeManager()
        ->getStorage('node_type')
        ->loadMultiple();

        foreach ($types as $key => $type) {
        //var_dump($key);
        }
        //die();
         */

        //$user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());

        $uid = \Drupal::currentUser()->id();

        $node_types = \Drupal\node\Entity\NodeType::loadMultiple();
        // If you need to display them in a drop down:
        $options = [];
        foreach ($node_types as $node_type) {
            $options[$node_type->id()] = $node_type->label();
        }

        var_dump($uid);
        //var_dump($options);
        die();

        return array(
            '#type'   => 'markup',
            '#markup' => t('Hello, World again!'),
        );
    }
}
