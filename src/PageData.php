<?php

    class PageData{
        private $_title;
        private $_content;

        public function __construct (string $title, string $content){
            $this->_title = $title;
            $this->_content = $content;
        }

        public function getTitle(){
            return $this->_title;
        }
        public function getContent(){
            return $this->_content;
        }
        public function setTitle(string $title){
            $this->_title = $title; 
        }
        public function setContent(string $content){
            $this->_content = $content; 
        }

    }