<?php

/**
 * BlogComment form base class.
 *
 * @method BlogComment getObject() Returns the current form's model object
 *
 * @package    BLOG
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBlogCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'entry_id' => new sfWidgetFormInputText(),
      'body'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'entry_id' => new sfValidatorInteger(),
      'body'     => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('blog_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlogComment';
  }

}
