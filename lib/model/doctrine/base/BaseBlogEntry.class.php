<?php

/**
 * BaseBlogEntry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $body
 * @property Doctrine_Collection $BlogComment
 * 
 * @method string              getTitle()       Returns the current record's "title" value
 * @method string              getBody()        Returns the current record's "body" value
 * @method Doctrine_Collection getBlogComment() Returns the current record's "BlogComment" collection
 * @method BlogEntry           setTitle()       Sets the current record's "title" value
 * @method BlogEntry           setBody()        Sets the current record's "body" value
 * @method BlogEntry           setBlogComment() Sets the current record's "BlogComment" collection
 * 
 * @package    BLOG
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBlogEntry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('blog_entry');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('body', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('BlogComment', array(
             'local' => 'id',
             'foreign' => 'entry_id'));
    }
}