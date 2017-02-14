<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  ext_url:
    label: External URL
    type:  url
  tags:
    label: Tags
    type: tags
    separator: /
    index: all
