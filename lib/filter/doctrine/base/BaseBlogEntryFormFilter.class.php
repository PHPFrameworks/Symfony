<?php

/**
 * BlogEntry filter form base class.
 *
 * @package    BLOG
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBlogEntryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'title' => new sfValidatorPass(array('required' => false)),
      'body'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('blog_entry_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlogEntry';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'title' => 'Text',
      'body'  => 'Text',
    );
  }
}
