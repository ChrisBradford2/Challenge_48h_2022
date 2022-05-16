<?php

namespace Drupal\calendar_filter;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a calendar filter entity type.
 */
interface CalendarFilterInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the calendar filter title.
   *
   * @return string
   *   Title of the calendar filter.
   */
  public function getTitle();

  /**
   * Sets the calendar filter title.
   *
   * @param string $title
   *   The calendar filter title.
   *
   * @return \Drupal\calendar_filter\CalendarFilterInterface
   *   The called calendar filter entity.
   */
  public function setTitle($title);

  /**
   * Gets the calendar filter creation timestamp.
   *
   * @return int
   *   Creation timestamp of the calendar filter.
   */
  public function getCreatedTime();

  /**
   * Sets the calendar filter creation timestamp.
   *
   * @param int $timestamp
   *   The calendar filter creation timestamp.
   *
   * @return \Drupal\calendar_filter\CalendarFilterInterface
   *   The called calendar filter entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the calendar filter status.
   *
   * @return bool
   *   TRUE if the calendar filter is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the calendar filter status.
   *
   * @param bool $status
   *   TRUE to enable this calendar filter, FALSE to disable.
   *
   * @return \Drupal\calendar_filter\CalendarFilterInterface
   *   The called calendar filter entity.
   */
  public function setStatus($status);

}
