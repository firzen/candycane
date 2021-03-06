<?php 
class WikiContentFixture extends CakeTestFixture {
  var $name = 'WikiContent';
  var $import = array('table'=>'wiki_contents');
  var $records = array(

array('text'=>'|-
    h1. CookBook documentation

    {{child_pages}}

    Some updated [[documentation]] here with gzipped history',
  'updated_on'=>'2007-03-07 00:10:51 +01:00',
  'page_id'=>1,
  'id'=>1,
  'version'=>3,
  'author_id'=>1,
  'comments'=>'Gzip compression activated'),
array('text'=>'|-
    h1. Another page

    This is a link to a ticket: #2
    And this is an included page:
    {{include(Page with an inline image)}}',
  'updated_on'=>'2007-03-08 00:18:07 +01:00',
  'page_id'=>2,
  'id'=>2,
  'version'=>1,
  'author_id'=>1,
  'comments'=>null),
array('text'=>'|-
    h1. Start page

    E-commerce web site start page',
  'updated_on'=>'2007-03-08 00:18:07 +01:00',
  'page_id'=>3,
  'id'=>3,
  'version'=>1,
  'author_id'=>1,
  'comments'=>null),
array('text'=>'|-
    h1. Page with an inline image

    This is an inline image:

    !logo.gif!',
  'updated_on'=>'2007-03-08 00:18:07 +01:00',
  'page_id'=>4,
  'id'=>4,
  'version'=>1,
  'author_id'=>1,
  'comments'=>null),
array('text'=>'|-
    h1. Child page 1

    This is a child page',
  'updated_on'=>'2007-03-08 00:18:07 +01:00',
  'page_id'=>5,
  'id'=>5,
  'version'=>1,
  'author_id'=>1,
  'comments'=>null),
array('text'=>'|-
    h1. Child page 2

    This is a child page',
  'updated_on'=>'2007-03-08 00:18:07 +01:00',
  'page_id'=>6,
  'id'=>6,
  'version'=>1,
  'author_id'=>1,
  'comments'=>null),
);
}