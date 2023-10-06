<?php

namespace WordsOnline\TranslationManager\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;

/**
 * Class HelpController.
 */
class HelpController extends AdminDetailsController {

  /**
   * init.
   */
  public function init(): void
  {
    parent::init();
    $this->setTemplateName('@wordsonline_translation_manager/wo_help_view');
  }
}
