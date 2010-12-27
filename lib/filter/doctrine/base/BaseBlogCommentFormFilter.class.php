<?php

/**
 * BlogComment filter form base class.
 *
 * @package    BLOG
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBlogCommentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'entry_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'entry_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'body'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('blog_comment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlogComment';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'entry_id' => 'Number',
      'body'     => 'Text',
    );
  }
}
