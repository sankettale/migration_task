<?php

namespace Drupal\custom_content_entity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the migration entity edit forms.
 */
class MigrationForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New migration %label has been created.', $message_arguments));
      $this->logger('custom_content_entity')->notice('Created new migration %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The migration %label has been updated.', $message_arguments));
      $this->logger('custom_content_entity')->notice('Updated new migration %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.migration.canonical', ['migration' => $entity->id()]);
  }

}
