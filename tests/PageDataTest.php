<?php

    use PHPUnit\Framework\TestCase;
    require_once getcwd() . "/src/PageData.php";

    class PageDataTest extends TestCase{

        public function testCorrectArgumentsResultsInSuccessfulInstantiation(){
            $this->assertInstanceOf(PageData::class, new PageData("title", "content"));
        }

        public function testMissingArgumentsCausesFailedInstantiation(){
            $this->expectException(ArgumentCountError::class);
            new PageData();
        }

        public function testIncorrectArgumentsCausesFailedInstation(){
            $this->expectException(TypeError::class);
            new PageData([1,2,3],[1,2,3]);
        }

        public function testGetTitleSuccessfullyReturnTitle(){
            $pgData = new PageData("title", "Content");
            $this->assertEquals("title", $pgData->getTitle());
        }

        public function testGetContentSuccessfullyReturnContent(){
            $pgData = new PageData("title", "content");
            $this->assertEquals("content", $pgData->getContent());
        }

        public function testSetTitleSuccessfullySetTitle(){
            $pgData = new PageData("title", "content");
            $pgData->setTitle("new title");
            $this->assertEquals("new title", $pgData->getTitle());
        }

        public function testSetContentSuccessfullySetContent(){
            $pgData = new PageData("title", "content");
            $pgData->setcontent("new content");
            $this->assertEquals("new content", $pgData->getContent());
        }
    }