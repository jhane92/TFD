<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type: text
    icon: user
    width: 1/2
  date:
    label: Date
    type: date
    default: today
    format: DD/MM/YYYY
    width: 1/2
  header:
    label: Header
    type: checkbox
    text: Do you want to display the header image?
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