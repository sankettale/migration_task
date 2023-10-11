<?php

namespace Drupal\custom_content_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a migration entity type.
 */
interface MigrationInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the migration title.
   *
   * @return string
   *   Title of the migration.
   */
  public function getTitle();

  /**
   * Sets the migration title.
   *
   * @param string $title
   *   The migration title.
   *
   * @return \Drupal\custom_content_entity\MigrationInterface
   *   The called migration entity.
   */
  public function setTitle($title);

  /**
   * Gets the migration creation timestamp.
   *
   * @return int
   *   Creation timestamp of the migration.
   */
  public function getCreatedTime();

  /**
   * Sets the migration creation timestamp.
   *
   * @param int $timestamp
   *   The migration creation timestamp.
   *
   * @return \Drupal\custom_content_entity\MigrationInterface
   *   The called migration entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the migration status.
   *
   * @return bool
   *   TRUE if the migration is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the migration status.
   *
   * @param bool $status
   *   TRUE to enable this migration, FALSE to disable.
   *
   * @return \Drupal\custom_content_entity\MigrationInterface
   *   The called migration entity.
   */
  public function setStatus($status);

}
